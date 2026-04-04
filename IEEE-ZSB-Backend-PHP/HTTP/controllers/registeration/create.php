<?php

if($_SESSION['user']??false){
    header('location: /');
    exit();
}
view('registeration/create.view.php');
