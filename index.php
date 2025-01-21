<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,100,0,0&icon_names=search" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
</body>
</html>
<?php
session_start();

$pages = explode('/', $_SERVER['REQUEST_URI']);

if (!empty($_POST['class'])) {
    $cl = $_POST['class'];
    if (!file_exists("model/$cl.php")) exit;
    include "model/$cl.php";
    $ob = new $cl;
    exit;
}

$user = ['login' => 'dashboard', 'register' => 'dashboard', 'admin' => 'home'];
$guest = ['dashboard' => 'login', 'admin' => 'login'];

$page = (empty($pages[2])) ? 'home' 
        : ((file_exists('view/'.$pages[2].'.php')) ? $pages[2] : '404');

if (!empty($pages[2]) && $pages[2] == 'logout') {
    unset($_SESSION['user_id']);
    unset($_SESSION['first_name']);
    header('Location: /index.php/home');
    exit;
}

if (!empty($_SESSION['user_id']) && array_key_exists($page, $user)) {
    $page = $user[$page];
    header("Location: /index.php/$page");
    exit;
}

else if (empty($_SESSION['user_id']) && array_key_exists($page, $guest)) {
    $page = $guest[$page];
    header("Location: /index.php/$page");
    exit;
}

include "header.php";

if (file_exists("$page.php")) {
    include "$page.php";
} else {
    include "404.php";
}
include "footer.php";

?>

