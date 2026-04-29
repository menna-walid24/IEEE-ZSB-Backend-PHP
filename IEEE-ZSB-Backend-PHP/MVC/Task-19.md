1-

**Model** is the only part of MVC that is allowed to talk directly to the
database as it is the one of the main responsibilities of it 

,**Model** is responsible to get users data and follow request arrived from controllers and manage data ,then send it to view .
***
2-

sensitive information be stored in a separate configuration file instead of being hardcoded in main application files because it will be easier to edit them ,make code clean and also more secure.

***
3-

**PDO** is a way to  deal with databases from different types like mysql and sqlite so that it's preferred over older methods like mysql as it only deal with database of it's type.
Also **PDO** supports prepared statements which make it has amount of security.
***
4-

Prepared Statements separate user data (input) and sql queries ,so that it prevents sql injections.

***
5-

**1-Single row Example:**


When looking for one user to get his phone number for example .


`select phone_number from users where name="x"`


**2-Multiple rows Example:**

To get all users data to check something.

`select *from users`
