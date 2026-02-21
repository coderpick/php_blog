<?php
require_once __DIR__ . '/../../autoloader.php';
require_once __DIR__ . '/../../libs/Auth.php';
if (session_status() === PHP_SESSION_NONE) session_start();
if (!Auth::check()) {
    header('Location: ../../login.php');
    exit;
}

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

use App\Models\Category;

$id = (int) ($_POST['id'] ?? 0);

if (!$id) {
    $_SESSION['flash_error'] = 'Invalid category.';
    header('Location: index.php');
    exit;
}

$categoryModel = new Category();
$category      = $categoryModel->find($id);

if (!$category) {
    $_SESSION['flash_error'] = 'Category not found.';
    header('Location: index.php');
    exit;
}

if ($categoryModel->delete($id)) {
    $_SESSION['flash_success'] = "Category \"{$category['name']}\" deleted successfully.";
} else {
    $_SESSION['flash_error'] = 'Failed to delete the category. Please try again.';
}

header('Location: index.php');
exit;
