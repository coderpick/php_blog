<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class Post
{
    protected $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    // CREATE
    public function create($data)
    {
        $sql = "INSERT INTO posts (user_id, category_id, title, slug, content, status) 
                VALUES (:user_id, :category_id, :title, :slug, :content, :status)";
        
        $stmt = $this->db->prepare($sql);
        
        $result = $stmt->execute([
            'user_id' => $data['user_id'],
            'category_id' => $data['category_id'],
            'title' => $data['title'],
            'slug' => $data['slug'],
            'content' => $data['content'],
            'status' => $data['status'] ?? 'draft'
        ]);

        if ($result) {
            return $this->db->lastInsertId();
        }
        return false;
    }

    // READ (Find by ID)
    public function find($id)
    {
        $sql = "SELECT * FROM posts WHERE id = :id LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    // READ (Find by Slug)
    public function findBySlug($slug)
    {
        $sql = "SELECT * FROM posts WHERE slug = :slug LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['slug' => $slug]);
        return $stmt->fetch();
    }

    // READ (All with pagination optional)
    public function all($limit = 10, $offset = 0)
    {
        $sql = "SELECT p.*, u.name as author_name, c.name as category_name 
                FROM posts p
                LEFT JOIN users u ON p.user_id = u.id
                LEFT JOIN categories c ON p.category_id = c.id
                ORDER BY p.created_at DESC
                LIMIT :limit OFFSET :offset";
        
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':limit', (int) $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', (int) $offset, PDO::PARAM_INT);
        $stmt->execute();
        
        return $stmt->fetchAll();
    }

    // UPDATE
    public function update($id, $data)
    {
        $fields = [];
        $params = ['id' => $id];

        if (isset($data['title'])) { $fields[] = "title = :title"; $params['title'] = $data['title']; }
        if (isset($data['slug'])) { $fields[] = "slug = :slug"; $params['slug'] = $data['slug']; }
        if (isset($data['content'])) { $fields[] = "content = :content"; $params['content'] = $data['content']; }
        if (isset($data['status'])) { $fields[] = "status = :status"; $params['status'] = $data['status']; }
        if (isset($data['category_id'])) { $fields[] = "category_id = :category_id"; $params['category_id'] = $data['category_id']; }

        if (empty($fields)) return false;

        $sql = "UPDATE posts SET " . implode(', ', $fields) . " WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute($params);
    }

    // DELETE
    public function delete($id)
    {
        $sql = "DELETE FROM posts WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute(['id' => $id]);
    }

    // MANY-TO-MANY: Attach Tag
    public function attachTag($postId, $tagId)
    {
        $sql = "INSERT INTO post_tag (post_id, tag_id) VALUES (:post_id, :tag_id) ON DUPLICATE KEY UPDATE post_id=post_id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            'post_id' => $postId,
            'tag_id' => $tagId
        ]);
    }

    // MANY-TO-MANY: Detach Tag
    public function detachTag($postId, $tagId)
    {
        $sql = "DELETE FROM post_tag WHERE post_id = :post_id AND tag_id = :tag_id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            'post_id' => $postId,
            'tag_id' => $tagId
        ]);
    }

    // MANY-TO-MANY: Get Tags for Post
    public function getTags($postId)
    {
        $sql = "SELECT t.* FROM tags t
                JOIN post_tag pt ON t.id = pt.tag_id
                WHERE pt.post_id = :post_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['post_id' => $postId]);
        return $stmt->fetchAll();
    }
}
