<?php
echo "##############################Connection DataBase #########################################<br>" ;
$serverName = "localhost";
$userName ="";
$pass ="" ;


$conn = new mysqli($serverName ,$pass ,$userName) ;

if($conn->connect_error){
    die("Connection Failed :".$conn->connect_error);
}else {
    echo "Connected Successfully";
}
echo "##############################Create database #########################################<br>" ;

$sql1 = "CREATE DATABASE myDB";

if($conn->query($sql) === TRUE){
    echo "Database created successfully";
}else{
    echo "Error creating database : ". $conn->error;
}


echo "##############################Create Table #########################################<br>" ;


$table = "CREATE TABLE Employee (
employee_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT ,
  first_name VARCHAR(30) NOT NULL,
  last_name VARCHAR(30) NOT NULL,
  salary DECIMAL(10,2) NOT NULL,
  department_id INT NOT NULL,
  FOREIGN KEY (department_id) REFERENCES Department(department_id)



)" ;

$table2 = "CREATE TABLE Department(
  department_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  department_name VARCHAR(30) NOT NULL,
  location VARCHAR(30) NOT NULL,

)";

if($conn->query($table && $table2) === TRUE){
    echo "Table created successfully";
}else{
    echo "Error creating table: ". $conn->error;
}

echo "###############################insert data in table employee #################################<br>" ;

$sql2 = "INSERT INTO Employee (first_name, last_name, salary, department_id)
VALUES ('John', 'Doe', 80000, 1), ('Jane', 'Smith', 90000, 2), ('Michael', 'Johnson', 70000, 1), ('Emily', 'Williams', 85000, 2)";

if($conn->query($sql2) === TRUE){
    echo "New records created successfully";
}else {
    echo "Error: ". $sql. "<br>". $conn->error;
}

echo "###############################insert data in table department #################################<br>" ;

$sql3 = "INSERT INTO Department (department_name, location)
VALUES ('HR', 'New York'), ('IT', 'San Francisco'), ('Finance', 'Chicago')";

if($conn->query($sql3) === TRUE){
    echo "New records created successfully";
}else {
    echo "Error: ". $sql. "<br>". $conn->error;
}


?>