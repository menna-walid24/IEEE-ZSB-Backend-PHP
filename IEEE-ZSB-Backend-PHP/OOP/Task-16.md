**1-Traits**


Traits allow multiple inheritance using keyword `use` .


It's important when each trait has some features and a class need to combine these features.


If there is the same feature in more than one trait but with different action ,use keyword `insteadof` like that :


```
Trait name :: feature name insteadof other methods names 
```


Traits have high priority over class.

***
**2-Namespaces:**


Namespace is a keyword used to prevent collision that happens if some classes ,methods or properties have the contain methods with the same names .



Use namespace\class name to differentiate between classes methods.



Example is there is a class `Book1`,`Book2`,`Book3` and all these classes have a 



method that return book name called `Book_name`



In main class if an object called `Book_name` method ,collision will happens ,so that use of namespace is very very important here. like that
```
newobject=new Book1\Book_name();
```
***
**3-Autoloading**

Autoloading means that automatically after calling a class , system require this class without need for `require`.

How to implement?

use keyword `spl_autoload_register`

```
spl_autoload_register(function($class){
    require $class . ".php";
});
```
***
**4-Get & set**

Get :Called automatically when getting a property that is not found or not accessible .


Accept only one parameter.

Set: called automatically to prevent setting a value to a property that is not found or not accessible.

Accept two parameters
***
**5-Static Methods**

Static  `property` means it cannot be accessed with instantiated class object but  `method` can .

`$this` is not available inside static methods.

can be called using scope resolution like 
```
public static function sayhello(){
echo 'Hello';}

newobject::sayhello()
```
***
