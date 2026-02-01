<?php
include_once "libs/Auth.php";

Auth::logout();
header("Location: index.php");
exit;
