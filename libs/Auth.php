<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class Auth
{
    public static function attempt($email, $password)
    {
        $userModel = new User();
        $user = $userModel->findByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            return true;
        }

        return false;
    }

    public static function user()
    {
        if (self::check()) {
            return $_SESSION; // Simplified for now, usually returns User object
        }
        return null;
    }

    public static function check()
    {
        return isset($_SESSION['user_id']);
    }

    public static function logout()
    {
        session_unset();
        session_destroy();
    }
}
