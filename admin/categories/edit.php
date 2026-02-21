<?php
require_once __DIR__ . '/../../autoloader.php';
require_once __DIR__ . '/../../libs/Auth.php';
if (session_status() === PHP_SESSION_NONE) session_start();
if (!Auth::check()) {
    header('Location: ../../login.php');
    exit;
}

use App\Models\Category;

$categoryModel = new Category();

// Load category
$id       = (int) ($_GET['id'] ?? $_POST['id'] ?? 0);
$category = $id ? $categoryModel->find($id) : null;

if (!$category) {
    $_SESSION['flash_error'] = 'Category not found.';
    header('Location: index.php');
    exit;
}

$errors = [];
$input  = ['name' => $category['name'], 'slug' => $category['slug']];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $slug = trim($_POST['slug'] ?? '');

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
        if ($categoryModel->slugExists($slug, $id)) {
            $errors['slug'] = 'This slug is already taken by another category.';
        } else {
            $ok = $categoryModel->update($id, ['name' => $name, 'slug' => $slug]);
            if ($ok) {
                $_SESSION['flash_success'] = "Category \"$name\" updated successfully.";
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
            <h1>Edit Category</h1>
            <p>Update the name and slug of this category.</p>
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

                        <form method="POST" action="edit.php">
                            <input type="hidden" name="id" value="<?= $id ?>">

                            <!-- Name -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold" for="name">Category Name <span class="text-danger">*</span></label>
                                <input type="text" id="name" name="name"
                                       class="form-control <?= !empty($errors['name']) ? 'is-invalid' : '' ?>"
                                       value="<?= htmlspecialchars($input['name']) ?>"
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
                                       value="<?= htmlspecialchars($input['slug']) ?>">
                                <div class="form-text">Only lowercase letters, numbers, and hyphens.</div>
                                <?php if (!empty($errors['slug'])): ?>
                                    <div class="invalid-feedback"><?= htmlspecialchars($errors['slug']) ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-save me-1"></i> Update Category
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
// Global flag – oninput="autoSlug()" needs autoSlug in global scope
let slugManuallyEdited = false;

document.addEventListener('DOMContentLoaded', function () {
    const slugInput = document.getElementById('slug');
    if (slugInput) {
        slugInput.addEventListener('input', function () {
            slugManuallyEdited = true;
        });
    }
});

function autoSlug(value) {
    if (slugManuallyEdited) return;
    const slug = value
        .toLowerCase()
        .replace(/[^a-z0-9\s-]/g, '')
        .trim()
        .replace(/[\s_]+/g, '-')
        .replace(/-+/g, '-');
    const slugInput = document.getElementById('slug');
    if (slugInput) slugInput.value = slug;
}
</script>
</body>
</html>
