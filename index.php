<?php
/** OOP   => object oriented programming
 * Esay maintainance
 * 
 * 4-pillars
 * 1-Encapsulation  // Hide Data  (set,get)
 * 2-Abdtraction    // what object Dose 
 * 3-inheritance    // More reusable
 * 4-ploymorphism   // overloading (paramerter) or overriding (implemention)    // Filexibilty
 */


 /**
  * Login / Logout / Register / Token / Forget Password


  */

/*
  class student {
    //attributes , data member ,fields =>variables
    //access every where
    public int $stdId;
    public string $stdName;
    public string $stdEmail;
    public string $stdPhone;
    public float $stdGrade;

  }
     // Take A New Object
  $std = new student();  // constractor
  $std->stdId = 1;
  $std->stdName = "waad";
  $std->stdEmail = "waadahmed@gmail.com";
  $std->stdPhone = "01033251393";
  $std->stdGrade = 90.0;
  var_dump($std);

 echo "<br>";
  //1-Encapsulation
      /*  class employee{
           private int $empId;
           private string $empName;
           private float $empSalary;
           //step 2  initialization 
           // magic Method __constractor
             // paramerter 
             public function __constractor(int $id , string $name , float $salary){
                $this->empId = $id; // تجي من constractur اللي اتفتح جوه class بس انت مش شايفه 
                $this->$empName = $name;
                $this->empSalary = $salary;
             }
             //setter  
             public function setName($name) :void{     
                $this->empName = $name;
             }
            //getter
           public function getName() :string{
            return $this->empName;
           }
           public function showEmployee(){
            echo "Employee Id = " . $this->empId ."<br>" ."Employee Name = " . $this->empName ."<br>" ."Employee salary = " . $this->empSalary ;
           }
       }
       $emp = new employee(1 , "mahmoud" ,12000000);
        $emp->showEmployee(); */




          class Rectangle {
            private float $length ;
            private float $width ;
        
            
            public function __construct(float $len, float $wid) {
                $this->length = $len;
                $this->width = $wid;
            }
        
            
            public function setLength(float $len) : void {
                $this->length = $len;
            }
        
            public function getLength() : float {
                return $this->length;
            }
        
         
            public function setWidth(float $wid) : void {
                $this->width = $wid;
            }
        
            public function getWidth() : float {  
                return $this->width;
            }
        
            
            public function getArea() : float {
                return $this->length * $this->width;
            }
        
           
            public function getPerimeter() : float {
                return 2 * ($this->length + $this->width);
            }
        
           
            public function showRectangle() {
                echo "Length = " . $this->length . "<br>" ."Width = " . $this->width . "<br>" ."Area = " . $this->getArea() . "<br>" ."Perimeter = " . $this->getPerimeter() . "<br>";
            }
        }
        
       
        $rectangle = new Rectangle(5.0, 3.0);
        $rectangle->showRectangle();
echo "###############################Inheritence ########################################<br>" ;
class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    public function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
  }
  
  // Strawberry is inherited from Fruit
  class Strawberry extends Fruit {
    protected function message() {
      echo "Am I a fruit or a berry? ";
    }
  }
  $strawberry = new Strawberry("Strawberry", "red");
  //$strawberry->message();
  $strawberry->intro();
  echo "<br>" ;
echo "#########################class apple inheritence from Strawberry #######################################<br>";


  class Apple extends Strawberry{
    public function appleMessage(){
      echo "I am an apple.";
      echo "<br>";
      $this->message();

    }
  }


  $apple = new Apple ("Apple","yellow");
  $apple->intro();
  echo "<br>" ;
  $apple->appleMessage();
  echo "<br>";
  echo "####################################Global constant #####################################<br>";
  class Goodbye{
    const leaving_Message = "Thank you for visiting W3Schools.com! ";
    public function byebye(){
      echo self ::leaving_Message;
    }
  }
 $goodbye = new Goodbye ();
 $goodbye->byebye();
echo "<br>";
echo "#################################### Abstract Classes  #####################################<br>";
abstract class Car {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}

class Audi extends Car {
  public function intro() : string {
    return "Choose German quality! I'm an $this->name!";
  }
}

class Volvo extends Car {
  public function intro() : string {
    return "Proud to be Swedish! I'm a $this->name!";
  }
}

class Citroen extends Car {
  public function intro() : string {
    return "French extravagance! I'm a $this->name!";
  }
}

$audi = new Audi ("Audi");
echo $audi->intro();
echo "<br>" ;
$volvo = new Volvo ("volvo") ;
echo $volvo->intro();
echo "<br>" ;
$citroen =new Citroen ("citroen");
echo $citroen->intro();

echo "<br>";
echo "#################################### Abstract Classes fruit  ####################<br>";

abstract class FruitJoice {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  abstract public function intro() : string;
}

class Strawberryjoice extends FruitJoice {
  public function intro() : string {
    return "Am I a fruit or a berry? , the fruit is {$this->name} and the color is {$this->color}";
  }
}
class Banana extends FruitJoice{
  public function intro() : string {
    return "Am I a fruit or a berry? , the fruit is {$this->name} and the color is {$this->color}";
  }

}

$strawberry = new Strawberryjoice ("Strawberry","red");

echo $strawberry->intro();
echo "<br>";

$banana = new Banana ("Banana","yellow");

echo $banana->intro();

echo "<br>";
echo "################################Abstarct classes 3####################################<br>";
abstract class ParentClass {
  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
  public function prefixName($name) {
    if ($name == "mahmoud awad") {
      $prefix = "Mr.";
    } elseif ($name == "soma awad") {
      $prefix = "Mrs.";
    } else {
      $prefix = "";
    }
    return "{$prefix} {$name}";
  }
}

$class = new ChildClass;
echo $class->prefixName("mahmoud awad");
echo "<br>";
echo $class->prefixName("soma awad");
echo "<br>";
echo "#################################### interface Classes  ####################<br>";
/*
* cannot have properties while abstract classes  can have
* all interface methods must be public , but abstract classes is public and protected
* All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
*/

interface Animal {
  public function makeSound();
}

class Dog implements Animal {
  public function makeSound() {
    echo "Woof! Dog";
  }
}
class Cat implements Animal {
  public function makeSound() {
    echo "Meow! Cat";
  }
}

$dog = new Dog();
$dog->makeSound();
echo "<br>" ;
$cat = new Cat();
$cat ->makeSound();
echo "<br>";
echo "#################################### Trait classes ####################<br>";
/*
* trait only single inheritance achild class can inherit only from one single parent
*/
trait message{
  public function showMessage(){
    echo "OOP Is Fun !";
  }
}
trait message2{
  public function showMessage2(){
    echo "PHP Is Easy!";
  }
}

class Welcome {
  use message;
}
class Welcome2{
  use message ,message2;
}

$obj= new Welcome();

$obj->showMessage();

echo "<br>" ;
$obj2 = new Welcome2();
$obj2->showMessage();
$obj2->showMessage2();

echo "<br>";


?>