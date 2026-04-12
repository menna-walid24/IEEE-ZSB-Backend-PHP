**Why PHP Security is important?**


PHP Security is important to prevent hackers from attacking our website or take important and sensitive data and use it against us.
***
**Password Hashing**

**What is it**


It's very important to hash users' passwords to be unvisible to hackers .


Before hashing **Salt** is used :it means adding a string to user password to make it more and more difficult for hacker to hack the password.

**How to hash password?**


Use function called `password_hash`

```
$user_password='xyz'


$hashed_password=password_hash($user_password,PASSWORD_DEFAULT,);
```

**How system match user password in login with hashed password**


Using password verification function system verifies the password against the hash

```
$password='xyz'


if(password_verify($password,$hash)){


echo 'password is valid';


}


else{


echo 'password is invalid';
}
	
```
***


**Disable error reporting**


means prevent error details to appear for users ,it may help hackers get some data like folder name ,folder directory , files path in a folder ,some part of your own code and some database details .
***
**prevent directory listing**


Allow only people with specified ids to show files and contact.
```
<?php
$id=0;
if($id!=1){
//it is not an admin ,redirect him to another page
header('location: test.php')
exit()
endif;
//here all admin data
}
```
***
**HTTP  VS HTTPFS**


HTTPS is an extension of HTTP  but the only difference is that it's more secure (use SSL).
Google consider that HTTP is not secure.
***
**Firewall**


preventing  some people from visiting website even if he has the link 


because this website may contain bugs or not finished yet.


Steps to activate Firewall:


1-Go to controle panel


2-Directory privacy


3-protect


If one need to allow specific user visit website use `create user`

***
**prevent executing specific files**


1-Allow only specific file extensions


2-check file size


3-check MIME type ->means actual file extension not only what written


***
**Backend validation**


Do all frontend validation again ,so that if hacker passes frontend validation,stuck on backend validation.
***
**Session fixation**


Means that hacker get user session id and act like a user.


To prevent it :use `session_regeneration_id` that create new id for session and keep session info to prevent hacker take your current id .
