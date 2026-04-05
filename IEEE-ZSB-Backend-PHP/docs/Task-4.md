**Extract a Form Validation Object**


extract validation details from controllers and create a new class called "loginFom"
,contains all login validation details.


First create array of errors
`protected $errors=[];`
Then, Constructor that validate and password if new login happend
if there is error ,it will return that an  error has been ocurred
```
public  function __construct(public array $attributes){

if (!validator::email($attributes['email'])) {

   $this->errors['email'] = 'Please provide a valid email address.';

} 

if (!validator::string($attributes['password'])) {

    $this->errors['password'] = 'Please  provide a valid password ';

}

}
```
Create object:


```
public  static function validate($attributes){

$instance =new static ($attributes);

if($instance->failed()){
  $instance->throw();
}
return $instance;

}
```


Count errors:
```
public function failed(){
    return count($this->errors);

}
```


Return all errors:
```
public function errors(){

    return $this->errors;

}
```
***
**2-The PRG Pattern**


Stands for:Post Redirect Get


It prevents duplicate requests


` return redirect($router->previousUrl());`
***
**3-validation exception**


Inherts exception class.It contains errors,old data .


function throw:


if there is an error,exception ocurr.


```
public static function throw($errors,$old){
$instance=new static;
$instance->errors=$errors;
$instance->old=$old;
throw $instance;
}
```
---
**4-compser**


Composer:

mange developers to install packages and autoload classes.
