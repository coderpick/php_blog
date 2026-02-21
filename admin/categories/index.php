<?php
// Auth guard
require_once __DIR__ . '/../../autoloader.php';
require_once __DIR__ . '/../../libs/Auth.php';
if (session_status() === PHP_SESSION_NONE) session_start();
if (!Auth::check()) {
    header('Location: ../../login.php');
    exit;
}

use App\Models\Category;

$categoryModel = new Category();
$categories    = $categoryModel->all();

// Flash messages
$success = $_SESSION['flash_success'] ?? null;
$error   = $_SESSION['flash_error']   ?? null;
unset($_SESSION['flash_success'], $_SESSION['flash_error']);
?>
<?php include __DIR__ . '/../layouts/head.php'; ?>

<body>
<?php include __DIR__ . '/../layouts/sidebar.php'; ?>

<div class="main-content" id="mainContent">
    <?php include __DIR__ . '/../layouts/header.php'; ?>

    <div class="p-4">

        <!-- Page Header -->
        <div class="page-header d-flex justify-content-between align-items-center">
            <div>
                <h1>Categories</h1>
                <p>Manage your blog post categories.</p>
            </div>
            <a href="create.php" class="btn btn-primary">
                <i class="bi bi-plus-lg me-1"></i> Add Category
            </a>
        </div>

        <!-- Flash Messages -->
        <?php if ($success): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-2"></i><?= htmlspecialchars($success) ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <?php endif; ?>
        <?php if ($error): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-circle me-2"></i><?= htmlspecialchars($error) ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <?php endif; ?>

        <!-- Categories Table -->
        <div class="content-card">
            <div class="content-card-body p-0">
                <div class="table-responsive">
                    <table class="posts-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Posts</th>
                                <th>Created</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if (empty($categories)): ?>
                            <tr>
                                <td colspan="6" class="text-center text-muted py-4">
                                    No categories yet. <a href="create.php">Add the first one</a>.
                                </td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($categories as $i => $cat): ?>
                            <tr>
                                <td><?= $i + 1 ?></td>
                                <td><strong><?= htmlspecialchars($cat['name']) ?></strong></td>
                                <td><code><?= htmlspecialchars($cat['slug']) ?></code></td>
                                <td>
                                    <span class="badge bg-primary"><?= $cat['post_count'] ?></span>
                                </td>
                                <td><?= date('M d, Y', strtotime($cat['created_at'])) ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $cat['id'] ?>" class="action-btn me-1" title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form method="POST" action="delete.php" class="d-inline"
                                          onsubmit="return confirm('Delete category \'<?= htmlspecialchars(addslashes($cat['name'])) ?>\'? Posts in this category will become uncategorised.');">
                                        <input type="hidden" name="id" value="<?= $cat['id'] ?>">
                                        <button type="submit" class="action-btn text-danger" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div><!-- /.p-4 -->
</div><!-- /#mainContent -->

<?php include __DIR__ . '/../layouts/script.php'; ?>
</body>
</html>
