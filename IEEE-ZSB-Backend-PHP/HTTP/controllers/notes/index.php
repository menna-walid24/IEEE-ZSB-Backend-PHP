<?php
use core\App;
use core\Database;

if (!isset($_SESSION['user'])) {
    header('location: /login');
    exit();
}
$db = App::resolve(Database::class);
$currentUserId = $_SESSION['user']['id']; 

$notes = $db->query('select * from notes where user_id = ?', [$currentUserId])->findAll();
view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);
