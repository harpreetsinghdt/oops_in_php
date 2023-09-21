<?php

// $vehicles =
//     [
//         [ "Astro", "Estrella", "2021", 500, 50000, "veh-01.jpg" ],
//         [ "Terraza", "Spinneo", "2020", 30000, 31000, "veh-02.jpg" ],
//         [ "Sage", "Ecostar", "2014", 70000, 15000, "veh-03.jpg" ]
//     ]

// Interfaces allow you to specify what methods a class should implement.
// Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".
// Interfaces are declared with the "interface" keyword:
interface FormattedAccess {
    function getFormattedMileage();
    function getFormattedPrice();
}

// An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.
// An abstract class or method is defined with the abstract keyword:
// To implement an interface, a class must use the implements keyword.
// A class that implements an interface must implement all of the interface's methods.
abstract class Vehicle implements FormattedAccess {
    var $make;
    var $model;
    var $year;
    var $mileage;
    var $price;
    var $image;

    function getFormattedMileage() {
        return number_format($this->mileage, 0);
    }

    function getFormattedPrice() {
        return number_format($this->price, 2);
    }

    function getOptions() {
        return "(No additional options)";
    }

    // 
    abstract function intro() :string;
}

// Classes and objects are the two main aspects of object-oriented programming.
// Class is a blueprint of objects or class is a template for objects, and an object is an instance of a class.
// Classes are the blueprints of objects. One of the big differences between functions and classes is that a class contains both data (variables) and functions that form a package called an: 'object'.
// Class is a programmer-defined data type, which includes local methods and local variables.
// Class can have properties and methods.
// In a class, variables are called properties and functions are called methods!
// Car is class. Car class has properties like make, model, year, mileage, price, image.
// The pseudo-variable $this is available when a method is called from within an object context. $this is the value of the calling object.

// Inheritance in OOP = When a class derives from another class.

// The child class (Car, Truck) will inherit all the public and protected properties (make, model, year, mileage, price, image) and methods (getFormattedMileage, getFormattedPrice) from the parent class (Vehicle). In addition, it can have its own properties (engine for Truck) and methods (getOptions for Truck).

// An inherited class is defined by using the "extends" keyword.
class Car extends Vehicle {

    // A constructor allows you to initialize an object's properties upon creation of the object.
    function __construct($make, $model, $year, $mileage, $price, $image) {

        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->mileage = $mileage;
        $this->price = $price;
        $this->image = $image;
    }

    // when a child class is inherited from an abstract class, we have the following rules:

// The child class method must be defined with the same name and it redeclares the parent abstract method
// The child class method must be defined with the same or a less restricted access modifier
// The number of required arguments must be the same. However, the child class may have optional arguments in addition
    public function intro() : string {
        return "Choose quality car! I'm an $this->make!";
    }

}

class Truck extends Vehicle {

    function __construct($make, $model, $year, $mileage, $price, $image, $engine) {

        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->mileage = $mileage;
        $this->price = $price;
        $this->image = $image;
        $this->engine = $engine;
    }

    var $engine;

    public function intro() : string {
        return "Choose quality truck! I'm an $this->make!";
    }

    // Inherited methods can be overridden by redefining the methods (use the same name) in the child class.    
    // This getOptions method will overrides the base class's getOptions method by using the polymorphism facilty of oops
    // Method overloading is a compile-time polymorphism. Method overriding is a run-time polymorphism. Method overloading helps to increase the readability of the program. Method overriding is used to grant the specific implementation of the method which is already provided by its parent class or superclass
    function getOptions() {
        return "Towing Package available $1,000.00";
    }

    // The final keyword can be used to prevent class inheritance or to prevent method overriding.

}
// Objects of a class are created using the "new" keyword.
// $vehicle1, $vehicle2 & $vehicle3 are instances of the class Car
// while creating instances contructor of Car class in call automatically and will initial the properties uopn creation of the project.
$vehicle1 = new Car("Astro", "Estrella", "2021", 500, 50000.00, "veh-01.jpg");
$vehicle2 = new Car("Terraza", "Spineo", "2020", 30000, 31000.00, "veh-02.jpg");
$vehicle3 = new Car("Sage", "Ecostar", "2014", 70000, 15000.00, "Veh-03.jpg");

// there is "instanceof" keyword to check if an object belongs to a specific class: <? echo $vehicle1 instanceof Car;

// $vehicle4 is instance of the class Truck
$vehicle4 = new Truck("Hauler", "Lion", "2021", 200, 40000.00, "veh-04.jpg", "diesel");


$vehicles = [ $vehicle1, $vehicle2, $vehicle3, $vehicle4 ];

?>

<!-- 
A destructor is called when the object is destructed or the script is stopped or exited.
f you create a __destruct() function, PHP will automatically call this function at the end of the script.

PHP - Access Modifiers:
    Properties and methods can have access modifiers which control where they can be accessed.
    There are three access modifiers:

public - the property or method can be accessed from everywhere. This is default
protected - the property or method can be accessed within the class and by classes derived from that class
private - the property or method can ONLY be accessed within the class
 -->