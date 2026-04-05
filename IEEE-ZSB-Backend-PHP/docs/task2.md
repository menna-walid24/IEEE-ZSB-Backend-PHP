1-tmlspecialchars():
   convert html symbols to prevent the website from compiling it
          Example:
          <p><?= htmlspecialchars($note['body']) ?></p>
2-Authorization
     Every user have the ability to change only his notes ,otherwise error 403
     if ($note['user_id'] !== $currentUserId) {
    abort(403);
}
3-Forms and Request Methods
        two types :
           1-post:
               to send data and create new action like adding new node
           2-get:
              to request exisiting note with it's id

4-Validation:
   check that user input length is only between a range
           if (!$validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required.';
                                    }
5-Indexes:
     index in database is used to distinguish between data using unique index
    
