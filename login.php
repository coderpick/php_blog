<?php
include_once "db/Database.php";
include_once "models/User.php";
include_once "libs/Validator.php";
include_once "libs/Auth.php";

$errors = [];
$old = [];

if (Auth::check()) {
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $validator = Validator::make($_POST, [
        'email' => 'required',
        'password' => 'required',
    ]);

    if ($validator->fails()) {
        $errors = $validator->errors();
        $old = $_POST;
    } else {
        if (Auth::attempt($_POST['email'], $_POST['password'])) {
            header("Location: index.php");
            exit;
        } else {
            $errors['system'] = "Invalid credentials.";
            $old = $_POST;
        }
    }
}

include_once "layouts/head.php"
?>
<!-- Navigation -->
<?php
include_once "layouts/navbar.php"
?>

<!-- Login area -->
<main class="flex-1 flex items-center justify-center py-12 px-4">
    <div class="w-full max-w-md">
        <!-- Login Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 md:p-10">
            <div class="text-center mb-8">
                <h1 class="font-serif text-2xl font-bold text-stone-900 mb-2">Welcome Back</h1>
                <p class="text-stone-600">Sign in to access your account</p>
            </div>

            <?php if (isset($errors['system'])): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline"><?php echo $errors['system']; ?></span>
                </div>
            <?php endif; ?>

            <!-- Login Form -->
            <form id="loginForm" class="space-y-6" method="POST">
                <div>
                    <label for="email" class="block text-sm font-medium text-stone-700 mb-2">Email Address</label>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-stone-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </span>
                        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($old['email'] ?? ''); ?>" class="w-full pl-12 pr-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent" placeholder="you@example.com">
                    </div>
                     <span class="text-xs text-red-400 mt-1"><?= $errors['email'] ?? '' ?></span>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-stone-700 mb-2">Password</label>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-stone-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </span>
                        <input type="password" id="password" name="password" class="w-full pl-12 pr-12 py-3 rounded-xl border border-stone-200 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent" placeholder="••••••••">
                        <button type="button" id="togglePassword" class="absolute right-4 top-1/2 -translate-y-1/2 text-stone-400 hover:text-stone-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>
                     <span class="text-xs text-red-400 mt-1"><?= $errors['password'] ?? '' ?></span>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" class="w-4 h-4 text-amber-600 border-stone-300 rounded focus:ring-amber-500">
                        <label for="remember" class="ml-2 text-sm text-stone-600">Remember me</label>
                    </div>
                    <a href="#" class="text-sm text-amber-600 hover:underline font-medium">Forgot password?</a>
                </div>

                <button type="submit" class="w-full py-3.5 bg-stone-900 text-white rounded-xl hover:bg-stone-800 transition-colors font-medium">
                    Sign In
                </button>
            </form>

            <!-- Sign Up Link -->
            <p class="text-center text-stone-600 mt-8">
                Don't have an account?
                <a href="registration.php" id="showSignup" class="text-amber-600 hover:underline font-medium">Sign up</a>
            </p>
        </div>

    </div>
</main>


<!-- Footer -->
<?php
include_once "layouts/footer.php"
?>