<?php
use core\App;
use core\Database;
$db = App::resolve(Database::class); 
$currentUserId = $_SESSION['user']['id'];
$currentUserId=1;
    $note = $db->query('select * from notes where id = ?', [$NOTE_ID])->findOrFail();
authorize($note['user_id'] === $currentUserId);
$db->query('delete from notes where id = :id', [
    'id' => $_POST['id']
]);
header('location : /notes');
exit();

