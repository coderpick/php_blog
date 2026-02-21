<?php
require_once __DIR__ . '/../../autoloader.php';
require_once __DIR__ . '/../../libs/Auth.php';
if (session_status() === PHP_SESSION_NONE) session_start();
if (!Auth::check()) {
    header('Location: ../../login.php');
    exit;
}

use App\Models\Category;

$errors = [];
$input  = ['name' => '', 'slug' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $slug = trim($_POST['slug'] ?? '');

    // Auto-generate slug if empty
    if (empty($slug)) {
        $slug = strtolower(preg_replace('/[^a-z0-9]+/i', '-', $name));
        $slug = trim($slug, '-');
    }

    $input = ['name' => $name, 'slug' => $slug];

    // Validate
    if (empty($name)) {
        $errors['name'] = 'Category name is required.';
    }
    if (empty($slug)) {
        $errors['slug'] = 'Slug is required.';
    }

    if (empty($errors)) {
        $categoryModel = new Category();
        if ($categoryModel->slugExists($slug)) {
            $errors['slug'] = 'This slug is already taken. Please choose another.';
        } else {
            $id = $categoryModel->create(['name' => $name, 'slug' => $slug]);
            if ($id) {
                $_SESSION['flash_success'] = "Category \"$name\" created successfully.";
                header('Location: index.php');
                exit;
            } else {
                $errors['general'] = 'Something went wrong. Please try again.';
            }
        }
    }
}
?>
<?php include __DIR__ . '/../layouts/head.php'; ?>

<body>
<?php include __DIR__ . '/../layouts/sidebar.php'; ?>

<div class="main-content" id="mainContent">
    <?php include __DIR__ . '/../layouts/header.php'; ?>

    <div class="p-4">

        <div class="page-header">
            <h1>Add Category</h1>
            <p>Create a new category for your blog posts.</p>
        </div>

        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="content-card">
                    <div class="content-card-body">

                        <?php if (!empty($errors['general'])): ?>
                        <div class="alert alert-danger">
                            <i class="bi bi-exclamation-circle me-2"></i><?= htmlspecialchars($errors['general']) ?>
                        </div>
                        <?php endif; ?>

                        <form method="POST" action="create.php">

                            <!-- Name -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold" for="name">Category Name <span class="text-danger">*</span></label>
                                <input type="text" id="name" name="name"
                                       class="form-control <?= !empty($errors['name']) ? 'is-invalid' : '' ?>"
                                       value="<?= htmlspecialchars($input['name']) ?>"
                                       placeholder="e.g. Technology"
                                       oninput="autoSlug(this.value)">
                                <?php if (!empty($errors['name'])): ?>
                                    <div class="invalid-feedback"><?= htmlspecialchars($errors['name']) ?></div>
                                <?php endif; ?>
                            </div>

                            <!-- Slug -->
                            <div class="mb-4">
                                <label class="form-label fw-semibold" for="slug">Slug <span class="text-danger">*</span></label>
                                <input type="text" id="slug" name="slug"
                                       class="form-control <?= !empty($errors['slug']) ? 'is-invalid' : '' ?>"
                                       value="<?= htmlspecialchars($input['slug']) ?>"
                                       placeholder="e.g. technology">
                                <div class="form-text">Auto-generated from name. Only lowercase letters, numbers, and hyphens.</div>
                                <?php if (!empty($errors['slug'])): ?>
                                    <div class="invalid-feedback"><?= htmlspecialchars($errors['slug']) ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-save me-1"></i> Save Category
                                </button>
                                <a href="index.php" class="btn btn-light">Cancel</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include __DIR__ . '/../layouts/script.php'; ?>
<script>
function autoSlug(value) {
    const slug = value
        .toLowerCase()
        .replace(/[^a-z0-9\s-]/g, '')
        .trim()
        .replace(/[\s_]+/g, '-')
        .replace(/-+/g, '-');
    document.getElementById('slug').value = slug;
}
</script>
</body>
</html>
