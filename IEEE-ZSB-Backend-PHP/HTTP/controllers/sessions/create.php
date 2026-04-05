<?php

use core\Session;

if ($_SESSION['user'] ?? false) {
    header('location: /');
    exit();
}
$_SESSION=[];

view('session/create.view.php', [
    'errors' =>Session::get('errors');
]);
