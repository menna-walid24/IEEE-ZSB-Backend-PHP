<?php
$config = require('config.php');
$db = new Database($config['database']);
$heading = 'note';
$id = (int) $_GET['id'];
$notes = $db->query('select * from notes where id = :user and id= :id', ['id' => $_GET['id']])->findorfail();



authorize($note['user_id'] === $currentUserId);



require "views/notes.view.php";
