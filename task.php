<?php
echo "####################################class Rectangle ###################################################<br>" ;
/*
class Rectangle {
    private float $length ;
    private float $width ; 
    
    public function __construct(float $len, float $wid) {
        $this->length = $len;
        $this->width = $wid;
    }
    public function setLength (float $len) :void {
        $this->length = $len;
    } 
    public function getLength () : float {
        return $this->length;
    }
    public function setWidth (float $wid) : void {
        $this->width = $wid;
    }
    public function getWidth () : float {
        return $this->width;
    }
    public function getArea () : float {
        return $this->length * $this->width;
    }
    public function getPerimeter () : float {
        return 2 * ($this->length + $this->width);
    }
    public function showRectangle () {
        echo "Length = " . $this->length. "<br>". "Width = " . $this->width. "<br>". "Area = " . $this->getArea(). "<br>". "Perimeter = " . $this->getPerimeter(). "<br>";
    }
}

$rect =new Rectangle(5.0 ,10.0);
$rect->showRectangle();

echo "####################################class Employee ###################################################<br>" ;
///// task 2 

class Employee {
    private string $firstName;
    private string $lastName;
    private int $id;
    private int $salary ;

    public function __construct(string $fn, string $ln, int $id, int $salary) {
        $this->firstName = $fn;
        $this->lastName = $ln;
        $this->id = $id;
        $this->salary = $salary;
    }
    public function setFirstName (string $fn): void {
        $this->firstName = $fn;
    }
    public function getFirstName (): string {
        return $this->firstName;
    }
    public function setLastName (string $ln): void {
        $this->lastName = $ln;
    }
    public function getLastName (): string {
        return $this->lastName;
    }
    public function setId (int $id): void {
        $this->id = $id;
    }
    public function getId (): int {
        return $this->id;
    }
    public function setSalary (int $salary): void {
        $this->salary = $salary;
    }
    public function getSalary (): int {
        return $this->salary;
    }
    public function getName():string{
        return $this->firstName." ".$this->lastName;
    }
    public function setName($firstName ,$lastName) :void{
        $this->firstName = $firstName;
        $this->lastName = $lastName;

    }
    public function setAnnaualSalary($salary) :void{
        $this->salary = $salary *12 ;
    }
    public function getAnnaualSalary ():int{
        return $this->salary * 12;
    }
    public function setraiseSalary($salary) :void{
        $this->salary =$salary;
    }
    public function raiseSalary():int{
        return $this->salary * 1.05;
    }
    public function showEmployee():void{
        echo "Name = ". $this->getName()."<br>". "ID = ". $this->getId()."<br>". "Salary = ". $this->getSalary()."<br>". "Annual Salary = ". $this->getAnnaualSalary()."<br>". "Raised Salary = ". $this->raiseSalary()."<br>";
    }
}

$emp = new Employee("Mahmoud","Awad",1,15000);
 $emp->showEmployee();
 echo "####################################class Circle ###################################################<br>" ;
class Circle {
    private float $radius ;
    private string $color ;
    public function __construct(string $colr , float $radius)
    {
        $this->radius = $radius;
        $this->color = $colr;
        
    }
    public function setRadius (float $radius): void {
        $this->radius = $radius;
    }
    public function getRadius (): float {
        return $this->radius;
    }
    public function setColor (string $colr): void {
        $this->color = $colr;
    }
    public function getColor (): string {
        return $this->color;
    }
    public function getArea (): float {
        return pi() * ($this->radius * $this->radius);
    }
    public function getCircumference (): float {
        return 2 * pi() * $this->radius;
    }
    public function showCircle (): void {
        echo "Color = ". $this->color. "<br>". "Radius = ". $this->radius. "<br>". "Area = ". $this->getArea(). "<br>". "Circumference = ". $this->getCircumference(). "<br>";
    }
}
$cir =new Circle("red" , 20) ;
 $cir->showCircle();

 echo "####################################class Account ###################################################<br>" ;

 class Account {
    private int $id ;
    private int $balance ;
    private string $name ;
    public function __construct(int $id, string $name, int $balance ) {
        $this->id = $id;
        $this->name = $name;
        $this->balance = $balance;
    }
    public function setId (int $id): void {
        $this->id = $id;
    }
    public function getId (): int {
        return $this->id;
    }
    public function setName (string $name): void {
        $this->name = $name;
    }
    public function getName (): string {
        return $this->name;
    }


    public function setBalance (int $balance): void {
        $this->balance = $balance;
    }
    public function getBalance (): int {
        return $this->balance;
    }
    public function credit ($amount) : void {
        $this->balance += $amount;
    }
    public function getCredit():int{
        return $this->balance;
    }
    public function debit ($amount) : void {
        if($this->balance <= $amount){
            $this->balance -= $amount;
        }else{
            echo "Amount exceeded balance <br>" ;
        }
    }
    public function getDebit():int{
        return $this->balance;
    }
    public function transferTo($amount, Account $toAccount) : void {
        if($this->balance <= $amount){
            $this->balance -= $amount;
            $toAccount->credit($amount);
        } else{
            echo "Amount exceeded balance <br>" ;
        }
    }
    public function getTransferTo():int{
        return $this->balance;
    }
    public function showAccount():void{
        echo "ID = ". $this->getId()."<br>". "Name = ". $this->getName()."<br>". "Balance = ". $this->getBalance()."<br>";
    }



 }

 $account1 =new Account(1,"Mahmoud" ,20);
 $account2 =new Account(2,"awad" ,10);
$account1->credit(50);
$account1->debit(30);
$account1->transferTo(10, $account2);

$account1->showAccount();
$account2->showAccount();

*/
echo "<br>" ;
echo "##########################Task Person 4.2 ############################### <br>" ;
abstract class Person {
    protected string $name ;
    protected string $address ;
    public function __construct($name ,$address){
        $this->name =$name;
        $this->address =$address;
    }

    public function getName():string {
        return $this->name;
    }
    public function setName(string $name ):void{
        $this->name=$name ;

    }
    public function getAddress():string {
        return $this->address;
    }
    public function setAddress(string $address ): void {
        echo  $this->address =$address;
    }
    public function displayDetails():void {
        echo "Name Is :" .$this->getName() ."<br>" . "Address Is :" . $this->getAddress()."<br>";

    }

}

class Student extends Person {
    private string $program ;
    private int $year ;
    private float $fee ;
    public function __construct(string $name , string $address,string $program ,int $year ,float $fee){
        parent::__construct($name,$address);
        $this->program =$program ;
        $this->year =$year;
        $this->fee =$fee;

    }
    public function getProgram():string{
        return $this->program ;
    }
    public function setProgram(string $program):void{
        echo $this->program=$program ;
    }
    public function getYear():int{
        return $this->year ;
    }
    public function setYear(int $year):void{
        echo $this->year =$year;
    }
    public function getFee():float{
        return $this->fee;
    }
    public function setFee(float $fee):void{
        echo $this->fee =$fee;
    }
    // overload 
    public function displayDetails ():void{
        echo "Name Is :" .$this->getName() ."<br>" . "Address Is :" . $this->getAddress()."<br>"."Program Is :".$this->getProgram() ."<br>" ."Year Is :".$this->getYear()."<br>"."Fee Is :".$this->getFee()."<br>";

    }
}


class Staff extends Person {
    private string $school ;
    private float $pay ;
    public function __construct(string $name ,string $address,string $school,float $pay){
        parent::__construct($name,$address);
        $this->school =$school ;
        $this->pay =$pay ;

    }
    public function getSchool():string{
        return $this->school ;
    }
    public function setSchool(string $school):void{
        echo $this->school=$school ;
    }
    public function getPay():float{
        return $this->pay ;
    }
    public function setPay(string $pay):void{
        echo $this->pay=$pay;
    }
    public function displayDetails ():void{
        echo "Name Is :" .$this->getName() ."<br>" . "Address Is :" . $this->getAddress()."<br>"."School Is :".$this->getSchool() ."<br>" ."Pay Is :".$this->getPay()."<br>";

    }

}

$student = new Student("Awad" ,"Assuit" ,"full_stack using php" ,2024,3.4);
$student->displayDetails();
echo "<br>";
$staff =new Staff("mahmoud","Assuit" ,"computer and information" ,25000);
$staff ->displayDetails();
echo "<br>";
echo "##########################Task Shape 4.5 ############################### <br>" ;

abstract class Shape {
    protected string $color ;
    protected bool $filled ;
    public function __construct(string $color ,string $filled){
        $this->color=$color ;
        $this->filled=$filled ;
    }
    public function getColor():string{
        return $this->color ;
    }
    public function setColor(string $color):void{
        echo $this->color=$color ;
    }
    public function getIsFilled():bool{
        return $this->filled ;
    }
    public function setIsFilled(string $filled):void{
        echo $this->filled=$filled ;
    }
    abstract public function getArea():float;
    abstract public function getPerimeter():float;
    abstract public function display():void;
    
}

class Circle extends Shape{
    private float $radius ;
    public function __construct(string $color ,bool $filled ,float $radius){
        parent::__construct($color ,$filled);
        $this->radius=$radius;

    }
    public function getRadius():float{
        return $this->radius ;
    }
    public function setRadius(float $radius):void{
        echo $this->radius=$radius ;
    }
    public function getArea():float {
        return pi() * $this->radius * $this->radius ;
    }
    public function getPerimeter():float{
        return 2 * pi() * $this->radius;
    }
    ///overload -- implementation 
    public function display():void{
        echo "Color Is :".$this->getColor()."<br>" ."Filled Is :" .($this->getIsFilled() ?"true":"false")."<br>" ."Radius Is : ".$this->getRadius()."<br>"."Area Circle Is :" .$this->getArea()."<br>". "Perimeter Circle Is :" .$this->getPerimeter()."<br>";
    }

}

class Rectangle extends Shape {
    private float $length ;
    private float $width ;
    public function __construct(string $color ,bool $filled ,float $length ,float $width){
        parent::__construct($color ,$filled) ;
        $this->length =$length ;
        $this->width =$width ;

    }

    public function setLength(float $length):void{
        echo $this->length =$length ;
    }
    public function getLength():float{
        return $this->length;
    }
    public function setWidth(float $width):void{
        echo $this->width =$width;
    }
    public function getWidth():float{
        return $this->width;
    }
    public function getArea():float {
        return $this->length * $this->width ;
    }
    public function getPerimeter():float{
        return 2 * ($this->length + $this->width);
    }
    public function display():void{
        echo "Color Is :".$this->getColor()."<br>" ."Filled Is :" .($this->getIsFilled() ?"true":"false")."<br>" ."Length Is: ".$this->getLength()."<br>"."Width Is :".$this->getWidth()."<br>"."Area Rect Is :" .$this->getArea()."<br>". "Perimeter Rect Is :" .$this->getPerimeter()."<br>";
    }





}

class Square extends Rectangle{
    private float $side ;
    public function __construct(string $color,bool $filled ,float $side ){
        parent::__construct($color,$filled ,$side,$side);
    }
    public function setSide(float $side):void{
         $this->setWidth($side);
         $this->setLength($side);
    }
    public function getSide():float{
        return $this->getWidth();
    }
    public function getArea():float{
        return pow($this->getSide(),2);
    }
    public function getPerimeter():float{
        return 4 * $this->getSide();
    }
    public function display():void{
        echo "Color Is :".$this->getColor()."<br>" ."Filled Is :" .($this->getIsFilled() ?"true":"false")."<br>"."Side Square Is :".$this->getSide()."<br>" ."Area Square Is:".$this->getArea()."<br>". "Perimeter Square Is :".$this->getPerimeter()."<br>";

    }
    
}

$circle =new Circle("red",true ,10.2);
$circle ->display();
echo "<br>";
$rectangle =new Rectangle("blue" ,false,10,20);
$rectangle->display();
echo "<br>";
$square =new Square("green" ,true ,10);
$square->display();


?>

