<?php

require_once 'autoloader.php';

use App\Core\Database;

try {
    $db = Database::getInstance()->getConnection();

    // 1. Update Users Table (Add role if not exists)
    // We check if column exists first to avoid error
    $checkColumn = $db->query("SHOW COLUMNS FROM users LIKE 'role'");
    if ($checkColumn->rowCount() == 0) {
        $db->exec("ALTER TABLE users ADD COLUMN role ENUM('admin', 'author') DEFAULT 'author'");
        echo "Updated Users table with 'role' column.\n";
    }

    // 2. Categories Table
    $db->exec("CREATE TABLE IF NOT EXISTS categories (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        slug VARCHAR(255) NOT NULL UNIQUE,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");
    echo "Created Categories table.\n";

    // 3. Posts Table
    $db->exec("CREATE TABLE IF NOT EXISTS posts (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id BIGINT UNSIGNED NOT NULL,
        category_id INT NULL,
        title VARCHAR(255) NOT NULL,
        slug VARCHAR(255) NOT NULL UNIQUE,
        content TEXT NOT NULL,
        status ENUM('draft', 'published') DEFAULT 'draft',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
        FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE SET NULL
    )");
    echo "Created Posts table.\n";

    // 4. Tags Table
    $db->exec("CREATE TABLE IF NOT EXISTS tags (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL UNIQUE,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");
    echo "Created Tags table.\n";

    // 5. Post_Tag Pivot Table
    $db->exec("CREATE TABLE IF NOT EXISTS post_tag (
        post_id INT NOT NULL,
        tag_id INT NOT NULL,
        PRIMARY KEY (post_id, tag_id),
        FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE,
        FOREIGN KEY (tag_id) REFERENCES tags(id) ON DELETE CASCADE
    )");
    echo "Created Post_Tag table.\n";

    // 6. Comments Table
    $db->exec("CREATE TABLE IF NOT EXISTS comments (
        id INT AUTO_INCREMENT PRIMARY KEY,
        post_id INT NOT NULL,
        user_id BIGINT UNSIGNED NOT NULL,
        comment TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE,
        FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
    )");
    echo "Created Comments table.\n";

    echo "\nDatabase Schema Setup Completed Successfully!\n";

} catch (PDOException $e) {
    die("Schema Setup Failed: " . $e->getMessage() . "\n");
}
