<?php
namespace core;
class Authenticator{
    public function attempt($email,$password){
$user=APP::resolve(Database::class)->query('select *from users where email= :email',[
'email'=>$email
])->find();
if($user){
  if (password_verify($password, $user['password'])) {
    $this->login([
        'email' => $email
    ]);

    // header('location: /');
    // exit();
    return true;
}
}
return false;

    }
   public function login($user) {
    $_SESSION['user'] = [
        'id' => $user['id'],      
        'email' => $user['email'] 
    ];
    session_regenerate_id(true);
}
public function logout(){
     Session::destroy();

}
}