**The MVC Pattern:**

MVC stands for :


1-model:contains sql queries ,save data.


2-View:Appears to users ,contains HTML codes .


3-controller:get requests from user ->send it to model ->send it to view(here user can see the response)
***
**2-Routing**


Router is like a traffic as it determine which file code will be executed from several files.
***
**3-Front controller**

Old version have some files like `contact.php` and `about.php` but in latest versions   


`index.php` contains all these files ,it facilitate adding security method and make any change as all changes will be at the same place.
***
**4-Clean URLs:**


Clean URL like `example.com/users/profile` is better than


`example.com/index.php?page=users&action=profile` as it is for MVC to deal with it ,also it makes it more readable for developers and companies.


***
**5-Separation of Concerns:**


Putting  database queries (SQL) directly inside  HTML files will lead to confusion 


among  developers ,possibility of sql injection and also it will be very difficult to make changes in this file