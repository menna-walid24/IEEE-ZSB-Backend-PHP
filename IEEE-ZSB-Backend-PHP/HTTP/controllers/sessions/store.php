<?php

use core\Authenticator;

use HTTP\Forms\loginForm;


$form=loginForm::validate($attributes=[
 'email'=>$_POST['email'],
   'password'=>$_POST['password']
]);
$signedin=(new Authenticator()->attempt(
    $attributes['email'],$attributes['password'])
    );
    if(!$signedin);

 {$form->error('email','NO matching found for that mail address and password.')->throw();
 }
 redirect('/');

return redirect('\login');







