<?php
$response = [];

function inputValidate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function emailValidation($email)
{
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (empty($email)) {
        $response['errors']['email'] = "Email is required";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $response['errors']['email'] = "Invalid email format";
        } else {
            $response['data']['email'] = $email;
        }
    }
    return $response;
}

function passwordValidation($password, $confirm_password)
{
    if (empty($password)) {
        $response['errors']['password'] = "Password is required";
    } else {
        if (strlen($password) < 8) {
            $response['errors']['password'] = "Password must be at least 8 characters";
        } else {
            if ($password !== $confirm_password) {
                $response['errors']['confirm_password'] = "Password does not match";
            } else {
                $response['data']['password'] = $password;
            }
        }
    }
    return $response;
}

function nameValidation($name){
    if (empty($name)) {
        $response['errors']['name'] = "Name is required";
    } else {
        $response['data']['name'] = $name;
    }
    return $response;
}
