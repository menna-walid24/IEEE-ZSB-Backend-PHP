**1-Controller's job**
Controllers takes requests from users and then 

validate the request ,check if user has access? ,his 

data is valid? .After that send request respond to 

user through view ,so that controller is like 

intermediary between view and model.
***
**2-Dynamic Views:**
Static views show the same page ,information for 

all users while Dynamic Views difference based on user data like welcoming page :


**Static view** will show `Welcome our user` or something similar .


**Dynamic view** will show `Welcome Mohammed` , if user name is `Emad` it will show `Welcome Emad` and so on.
***
**3-Data Passing:**


Controller save data through arrays or variables and send them to view.
***
**4-Templating (Headers & Footers):**

Templating help to reduce code amount by creating header and footer files as a template and the use
`<?php include 'header.php'?>` easily .

***
**5-Logic in Views:**


Logic in views must be simple as possible and let the complex logic to controllers 

and model ,so that it will be easy to understand and fix problems like if there is a 


problem in view page ,it will be easier to check `view` file functions and if the 


problem is in a condition ,developer will go directly to controllers or models.
