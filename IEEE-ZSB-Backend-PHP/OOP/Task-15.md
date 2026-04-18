**1-Inheritance**


Inheritance  means one class inherits other class properties & methos.

It help reducing amount of code and make it clean if one class has the super class properties


Super or parent class : the class that other class inherits it's properties &methods.

Child or subclass: the class that inherits parent class properties.


Keyword for inheritance is  `extends`

**Example**

Library has some books ,

all books written by the same author and also they all scientific books 

There is a class that gives information about each book of them ,instead of writing 

the same method that return author name , his birthday date ,books type 


programmer write a parent class and assign function that return  author name ,his 

birthday date , books type  and child class (the class that returns details of books in


the library ) inherits parent class properties
***
**2-FINAL keyword**


`Final` keyword is used to give rules that all classes must follow them .


It prevent  programmer from changing any method inside it .


Also it's allowed to define methods with  final keyword and doesn't allow override.

Final keyword doesn't allow inheritance & overriding .
***
**3-Overriding methods**

Overriding methods: means methods with the same name that is in parent class but difference is in method body but with the same parameters.

As it has the same name that is in parent class ,it's possible to call it by it's name
***
**4-Abstract Class vs Interface:**
The main difference is that 


1-interface cannot provide any implementation inside it but class can.


2-class can inherit more than one interface but only one abstract class.
***
**5-Polymorphism:**


Parent class has methods and functions ,in child class the same method with different behavior.



It's like  buttons ->
mobile have several buttons but every button do different thing one close mobile ,other one mange voice level and so on