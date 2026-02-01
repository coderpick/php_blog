<?php
include_once "db/Database.php";
include_once "models/User.php";
include_once "libs/Validator.php";
include_once "layouts/head.php";

$errors = [];
$old = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $validator = Validator::make($_POST, [
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8|same:confirm_password',
    ]);

    if ($validator->fails()) {
        $errors = $validator->errors();
        $old = $_POST;
    } else {
        $user = new User();
        if ($user->create($_POST)) {
            header("Location: login.php");
            exit;
        } else {
            $errors['system'] = "Something went wrong. Please try again.";
        }
    }
}
?>
<!-- Navigation -->
<?php
include_once "layouts/navbar.php"
?>

<!-- Login area -->
<main class="flex-1 flex items-center justify-center py-12 px-4">
    <div class="w-full max-w-md">

        <!-- Sign Up Card (Hidden by default) -->
        <div id="signupCard" class="bg-white rounded-2xl shadow-xl p-8 md:p-10">
            <div class="text-center mb-8">
                <h1 class="font-serif text-2xl font-bold text-stone-900 mb-2">Create Account</h1>
                <p class="text-stone-600">Join our community of mindful readers</p>
            </div>

            <?php if (isset($errors['system'])): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline"><?php echo $errors['system']; ?></span>
                </div>
            <?php endif; ?>

            <!-- Signup Form -->
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" id="signupForm" class="space-y-5" method="post">
                <div>
                    <label for="signupName" class="block text-sm font-medium text-stone-700 mb-2">Name</label>
                    <input type="text" id="signupName" name="name" value="<?php echo htmlspecialchars($old['name'] ?? ''); ?>" class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent" placeholder="Doe">
                    <span class="text-xs text-red-400 mt-1"><?= $errors['name'] ?? '' ?></span>
                </div>


                <div>
                    <label for="signupEmail" class="block text-sm font-medium text-stone-700 mb-2">Email Address</label>
                    <input type="email" id="signupEmail" name="email" value="<?php echo htmlspecialchars($old['email'] ?? ''); ?>" class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent" placeholder="you@example.com">
                    <span class="text-xs text-red-400 mt-1"><?= $errors['email'] ?? '' ?></span>
                </div>

                <div>
                    <label for="signupPassword" class="block text-sm font-medium text-stone-700 mb-2">Password</label>
                    <input type="password" name="password" id="signupPassword" class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent" placeholder="••••••••">
                    <span class="text-xs text-red-400 mt-1"><?= $errors['password'] ?? '' ?></span>
                </div>

                <div>
                    <label for="confirmPassword" class="block text-sm font-medium text-stone-700 mb-2">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirm_password" class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent" placeholder="••••••••">
                    <span class="text-xs text-red-400 mt-1"><?= $errors['confirm_password'] ?? '' ?></span>
                </div>
     
                <button type="submit" name="submit" class="w-full py-3.5 bg-stone-900 text-white rounded-xl hover:bg-stone-800 transition-colors font-medium">
                    Create Account
                </button>
            </form>

            <!-- Login Link -->
            <p class="text-center text-stone-600 mt-8">
                Already have an account?
                <a href="login.php" id="showLogin" class="text-amber-600 hover:underline font-medium">Sign in</a>
            </p>
        </div>
    </div>
</main>


<!-- Footer -->
<?php
include_once "layouts/footer.php"
?>