<?php
require 'validator.php';
$config = require 'config.php';
$db = new Database($config['database']);
$heading='Create Note';
//dd($_SERVER);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

if (!$validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required.';
}



    //dd('you submitted the form!');
    if (empty($errors)) {
    $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
        'body' => $_POST['body'],
        'user_id' => 1
    ]);
}



}

require 'views/note-create.view.php';
