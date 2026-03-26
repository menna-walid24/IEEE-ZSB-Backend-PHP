**1-Namespace**

Namespace is used to distinguish between classes with the same name but in different folders 
           
```
namespace core\Middleware;

use core\Middleware\Guest;

use core\Middleware\Auth;
```
---
**2-Register new user**

 -First,check validation of email&password
 
 -Second,Check if this email exists already
 
 -Third,use `INSERT  INTO` to add user's data into database
 
 -Fourth,Start a session for this user
 
 ***
 **3-password hashing**
 
 user passwords don't be saved as it is ,to prevent hacking .Password Hashing encrypt the password 
 ***
 **4-user login**
 1-get user's email and password
 
 2-check if already exists in database table
 
 3-use `password_verify()` to compare it with the database password
 
 4-check if every thing is correct? yes->start a session `($_SESSION['user']`
 
 ***
 **5-log out**
 
 if user need to log out then destroy it's session `session_destroy()`
 ***
 **6-isset()**
 
 Check if condition is true? do something
 
 like here
```
 if (!isset($_SESSION['user'])) {

    header('location: /login');

    exit();

}
```
 This means if user hasn't logged in redirect him to login page

 
 
