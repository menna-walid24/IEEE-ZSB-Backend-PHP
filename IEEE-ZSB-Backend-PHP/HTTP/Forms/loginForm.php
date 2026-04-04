<?php
namespace HTTP\Forms;
use core\validator;
use core\ValidationException;
class loginForm{
    protected $errors=[];

public  function __construct(public array $attributes){
   
if (!validator::email($attributes['email'])) {
   $this->errors['email'] = 'Please provide a valid email address.';
}

if (!validator::string($attributes['password'])) {
    $this->errors['password'] = 'Please  provide a valid password ';
}
}

public  static function validate($attributes){
   
$instance =new static ($attributes);
if($instance->failed()){

  $instance->throw();

}
return $instance;
}
public function throw(){
    ValidationException::throw($this->errors(),$this->attributes);
}
public function failed(){
    return count($this->errors);
}
public function errors(){
    return $this->errors;
}
public function error($field,$message){
     $this->errors[$field]=$message;
     return $this;
}


}