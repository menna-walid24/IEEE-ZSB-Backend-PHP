<?php


if ($_SESSION['user'] ?? false) {
    header('location: /');
    exit();
}


view('session/create.view.php', [
    'errors' => []
]);
