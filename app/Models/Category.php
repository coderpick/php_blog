<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class Category
{
    protected $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    // CREATE
    public function create($data)
    {
        $sql = "INSERT INTO categories (name, slug) VALUES (:name, :slug)";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute([
            'name' => $data['name'],
            'slug' => $data['slug'],
        ]);
        return $result ? $this->db->lastInsertId() : false;
    }

    // READ – All categories with post count
    public function all()
    {
        $sql = "SELECT c.*, COUNT(p.id) as post_count
                FROM categories c
                LEFT JOIN posts p ON p.category_id = c.id
                GROUP BY c.id
                ORDER BY c.name ASC";
        return $this->db->query($sql)->fetchAll();
    }

    // READ – Find by ID
    public function find($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM categories WHERE id = :id LIMIT 1");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    // READ – Find by Slug
    public function findBySlug($slug)
    {
        $stmt = $this->db->prepare("SELECT * FROM categories WHERE slug = :slug LIMIT 1");
        $stmt->execute(['slug' => $slug]);
        return $stmt->fetch();
    }

    // UPDATE
    public function update($id, $data)
    {
        $sql = "UPDATE categories SET name = :name, slug = :slug WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            'name' => $data['name'],
            'slug' => $data['slug'],
            'id'   => $id,
        ]);
    }

    // DELETE
    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM categories WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }

    // Check if a slug already exists (optionally exclude a specific ID for edit)
    public function slugExists($slug, $excludeId = null)
    {
        if ($excludeId) {
            $stmt = $this->db->prepare(
                "SELECT COUNT(*) FROM categories WHERE slug = :slug AND id != :id"
            );
            $stmt->execute(['slug' => $slug, 'id' => $excludeId]);
        } else {
            $stmt = $this->db->prepare(
                "SELECT COUNT(*) FROM categories WHERE slug = :slug"
            );
            $stmt->execute(['slug' => $slug]);
        }
        return (int) $stmt->fetchColumn() > 0;
    }
}
