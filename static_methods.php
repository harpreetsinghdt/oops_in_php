<!-- 
PHP - Static Methods
Static methods can be called directly - without creating an instance of the class first.

Static methods are declared with the static keyword:
 -->

 <?php
class Car {
  public static function brand() {
    echo "I am from Honda.";
  }
}
?>
<!-- 
	To access a static method use the class name, double colon (::), and the method name:
 -->
 <?php 
 Car::brand(); 
 ?>

 <?php
class Greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

// Call static method
Greeting::welcome();
?>


<?php
class Welcome {
  public static function welcome() {
    echo "Welcome! <br>";
  }

  public function __construct() {
    self::welcome();
  }
}

new Welcome();
?>

<?php
class A {
  public static function welcome() {
    echo "welcome static method called from class b as static method call";
  }
}

class B {
  public function message() {
    echo "message method called in class b <br>";
    A::welcome();
  }
}

$obj = new B();
echo $obj -> message();
?>


