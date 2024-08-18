<?php
/*
** what's Object Oriented Programming ?
** is paradigm that is widely used in software development . 
** Why use Object Oriented Programming ?
** Easy to maintaince 
** the code more resuable 
**Flexible  (interface using Polymorphism ).
** Reniforce Security (by hide data =>encapsulation && abstraction)

** what's consist OOP ?
** Encapsulation (Hide of data = > Security)
** Inheritence 
** Abdtraction (what object Dose => Hide necessary details =>Secuirty ) 
** Polymorphism (overLoading => implementation  && overRide =>paramerter) 
** constructor => special Kind of method (don't => return , void )

** Encapsulation
**Access Modifies 
** public     : the property or method can be accessed from (anywhere) this is (default)
** protected  : the property or method can accessed within the class and by classes derived from that class (drived =>means inheritene )
** private    : the property or method can  (Only) be accessed within the class 

examples :
** different between interface and abstraction 
** abstraction 

** use keywords (abstract )
** use keywords (extends) to ability to use abstract 
** can have properties  
** All method is Public or protected
** can't take more than one  abstraction from which inherit
** abstract class cannot take object

**interface

**use keywords (interface)
**use keywords (implements) to ability to use abstract
** cannot have properties
** All method must be public 
**  can take more than one  abstraction from which inherit



** Polymorphism 
** overload (dynamic polymorphism , run time polymorphism , late bilding ) : allows us to create dynamic in object context ,same function name and that function performs different task 
** override (static polymorphism ,compile polymorphism ,Early bilding) : same function name differnt parameters 
** inheritence 
** use keywords extends (code more reusable)
** parent inherit child 
*/
?>
<?php
/*
echo "############################## Access Modifies ###################################<br>";
class Car {
    public string $color ;
    protected string $type ;
    private int $year ; 
    
    public function __construct(string $color, string $type, int $year) {
        $this->color = $color;
        $this->type = $type;
        $this->year= $year;
    }
   
}

$myCar = new Car("red","Toyota","2022");

$myCar->color = "red";
$myCar->type = "camry"; // Error not see  within class and inherits class 
$myCar->year="2022" ; //Error not see only within class 
*/
/*

// Absrtact

echo "################################### Abstract && Interface ######################################<br>";
abstract class Person {
    public string $name ;
    public string $address ;
    public function __construct(string $name, string $address){
        $this->name =$name ;
        $this->address =$address;
    }
    public function setName(string $name):void{
        echo $this->name=$name;
    }
    public function getName():string{
        return $this->name;
    }
    public function setAddress(string $address):void{
        echo $this->address=$address;
    }
    public function getAddress():string{
        return $this->address;
    }



    abstract protected function display():void;
   

}


class Student extends Person {
    private float $GPA ;
    public function __construct(string $name, string $address, float $GPA){
        parent::__construct($name,$address);
        $this->GPA =$GPA;
    }
     public function display() :void{
        echo "Name :".$this->getName()."<br>";
        echo "Address :".$this->getAddress()."<br>";
        echo "GPA :".$this->GPA."<br>";

     }

}

// cannot 
// $person =new Person (); // Error

// Can
$student = new Student("mahmoud","assuit",3.4);
$student->display();


// Interface 

interface Animal {
    // must method public 
    public function makeSound():void;
}

class Dog implements Animal {
    public function makeSound(): void{
        echo "Woof!";
    }
}
class Cat implements Animal {
    public function makeSound(): void{
        echo "Meow!";
    }
}
    
*/

// overload 
echo "##############################OverLoading#####################################<br>";
abstract class animal {
    abstract public function makeSound(): void;
}

class Dog extends animal {
    public function makeSound(): void{
        echo "Woof!";
    }

}

class Cat extends animal {

    public function makeSound(): void{
        echo "Meow!";
    }
}
class Mouse extends Animal {
    public function makeSound(): void{
        echo "Squeak!";
    }
}

// object 
$dog =new Dog();
$dog->makeSound();
echo "<br>" ;
$cat =new Cat();
$cat->makeSound();
echo "<br>" ;
$mouse =new Mouse();
$mouse->makeSound();
echo "<br>";
echo "############################# OverRide #############################################<br>";


abstract class shape {
    abstract protected function area(): float;
    abstract protected function perimeter(): float;
    abstract protected function display():void;
}

class Rectangle extends Shape {
    private float $length ;
    private float $width ;
    public function __construct(float $len, float $wid) {
        $this->length = $len;
        $this->width = $wid;
    }
    protected function area(): float{
        return $this->length * $this->width;
    }
    protected function perimeter(): float{
        return 2 * ($this->length + $this->width);
    }
    public function display():void{
        echo "Area Rect :".$this->area()."<br>";
        echo "Perimeter Rect :".$this->perimeter()."<br>";
    }

}
class Circle extends Shape{
    private float $radius ;
    public function __construct(float $radius){
        $this->radius=$radius;
    }
    protected function area(): float{
        return pi() * ($this->radius ** 2);
    }
    protected function perimeter(): float{
        return 2 * pi() * $this->radius;
    }
    public function display():void{
        echo "Area Circle :".$this->area()."<br>";
        echo "Perimeter  Circle:".$this->perimeter()."<br>";
    }
}

$rect =new Rectangle(10,10);
$rect->display();
echo "<br>";
$circle =new Circle(10);
$circle ->display();
echo "<br>";


class Calculator {
    // Base method in parent class
    public function add(int $x, int $y) : int {
        return $x + $y;
    }
}

class AdvancedCalculator extends Calculator {
   
    public function add(int $x, int $y, int $z=0) : int {
        return $x + $y + $z;
    }
}

$Calc = new AdvancedCalculator();
echo $Calc->add(10,20);
echo "<br>" ;
echo $Calc->add(10,20,30);
?>