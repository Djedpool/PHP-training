<?php 

require_once 'dbconfig.php';

$dsn = "mysql:host=$host;dbname=$db";

try {
    $conn = new PDO($dsn, $username, $pass);

    $sql_create_dept_tbl = <<<EOSQL
CREATE TABLE departments(
  department_no int(11) NOT NULL AUTO_INCREMENT,
  name varchar(255) DEFAULT NULL,
  PRIMARY KEY (department_no)
) ENGINE=InnoDB
EOSQL;
 
 $sql_create_emp_tbl = <<<EOSQL
CREATE TABLE employees (
  employee_no int(11) NOT NULL AUTO_INCREMENT,
  first_name varchar(40) NOT NULL,
  last_name varchar(40) NOT NULL,
  birth_date date NOT NULL,
  gender varchar(1) NOT NULL,
  hire_date date DEFAULT NULL,
  department_no int(11) DEFAULT NULL,
  PRIMARY KEY (employee_no),
  KEY emp_dept (department_no),
  CONSTRAINT emp_dept FOREIGN KEY (department_no)
  REFERENCES departments (department_no)
) ENGINE=InnoDB
EOSQL;

$msg = '';
 
$r = $conn->exec($sql_create_dept_tbl);
var_dump($r);
exit();

if($r !== false){

    $r = $conn->exec($sql_create_emp_tbl);

    if($r !== false){
        $msg =  "Tables are created successfully!<br/>";
    }else{
        $msg =  "Error creating the employees table.<br/>";
    }

}else{
    $msg =  "Error creating the departments table.<br/>";
}

// display the message
if($msg != '')
echo $msg;

}catch (PDOException $e){
    echo $e->getMessage();
}