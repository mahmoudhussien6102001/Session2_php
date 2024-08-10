<?php
echo "####################################class Rectangle ###################################################<br>" ;

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
$account2->showAccount()
 
?>