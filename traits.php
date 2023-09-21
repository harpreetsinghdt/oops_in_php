<!-- 
What are Traits?
PHP only supports single inheritance: a child class can inherit only from one single parent.
So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.
Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).

Traits are declared with the trait keyword:

 -->
<?php
trait message1 {
  public function msg0() {
    echo "OOP is fun! ";
  }
}

trait message2 {
  public function msg1() {
    echo "OOP reduces code duplication!";
  }
  public function msg2() {
    echo "OOP increase code visibility!";
  }
}

class Welcome {
  use message1;
}

class Welcome2 {
  use message1, message2;
}

$obj = new Welcome();
$obj->msg0();
echo "<br>";

$obj2 = new Welcome2();
$obj2->msg1();
$obj2->msg2();
?>