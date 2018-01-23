<?php

//-----Prvi zadatak za klase w3c

//Moje resenje

//class MyClass {
//    public function myClass(){
//        return 'MyClass class has initialized !';
//    }
//}
//$p = new MyClass();
//echo $p->myClass();

//Resenje sa sajta

//class MyClass {
//    public function __construct()
//    {
//        echo 'MyClass class has initialized !'."\n";
//    }
//}
//$userclass = new MyClass;


//-----Drugi zadatak za klase w3c

//Moje resenje

//class Hello {
//    public function __construct($name){
//        echo 'Hello All, I am '.$name;
//    }
//}
//
//$hello = new Hello('Scott');

//Resenje sa sajta

//class user_message {
//
//    public $message = 'Hello All, I am ';
//    public function introduce($name)
//    {
//        return $this->message.$name;
//    }
//}
//$mymessage = New user_message();
//echo $mymessage->introduce('Scott')."\n";

//-----Treci zadatak za klase w3c

//Moje resenje ----FAIL----
//class Factorial {
//    public $int = 4;
//    public $fac = 1;
//
//    public function fac(){
//        for($i= $this->int; $i>=1; $i--) {
//            $fac = $this->fac * $i;
//        }
//        return "Factorial of $this->int is $this->fac";
//    }
//
//}
//
//$p = new Factorial();
//
//$p->fac();

//Resenje sa sajta
//class factorial_of_a_number
//{
//    protected $n;
//    public function __construct($n)
//    {
//        if (!is_int($n))
//        {
//            throw new InvalidArgumentException('Not a number or missing argument');
//        }
//        $this->n = $n;
//    }
//    public function result()
//    {
//        $factorial = 1;
//        for ($i = 1; $i <= $this->n; $i++)
//        {
//            $factorial *= $i;
//        }
//        return $factorial;
//    }
//}
//
//$newfactorial = New factorial_of_a_number(3);
//echo $newfactorial->result();

//-----Cetvrti zadatak za klase w3c

//Moje resenje NIJE FAIL
//class Prray {
//    public $a = array(11, -2, 4, 35, 0, 8, -9);
//
//    function hey(){
//       return $this->a;
//    }
//}
//
//$arr = new Prray();
//
//$x = $arr->hey();
//
//asort($x);
//
//var_dump($x);


//Resenje u proceduralnom
//$a = array(11, -2, 4, 35, 0, 8, -9);
//
//asort($a);
//
//var_dump($a);

//Resenje sa sajta

//class array_sort
//{
//    protected $_asort;
//
//    public function __construct(array $asort)
//    {
//        $this->_asort = $asort;
//    }
//    public function alhsort()
//    {
//        $sorted = $this->_asort;
//        sort($sorted);
//        return $sorted;
//    }
//}
//$sortarray = new array_sort(array(11, -2, 4, 35, 0, 8, -9));
//print_r($sortarray->alhsort())."\n";

//-----Peti zadatak za klase w3c

//$sdate = new DateTime("1981-11-03");
//$edate = new DateTime("2013-09-04");
//
//$interval = $sdate->diff($edate);
//
//echo "Difference : " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days ";

//-----Sesti zadatak za klase w3c

//Moje resenje u zadatku se samo trazilo sabiranje i mnozenje.

//class myCalculator{
//
//    private $fNumber;
//    private $lNumber;
//
//    public function __construct($first, $sec) {
//
//        $this->fNumber = (int)$first;
//        $this->lNumber = (int)$sec;
//
//    }
//
//    public function add() {
//
//        echo $this->fNumber + $this->lNumber;
//
//    }
//
//    public function mult(){
//
//        echo $this->fNumber * $this->lNumber;
//
//    }
//
//
//}
//
//
//$mycalc = new myCalculator(12, 6);
//
//$mycalc->add();
//echo '<br>';
//$mycalc->mult();

//Resenje sa neta

//class MyCalculator {
//    private $_fval, $_sval;
//    public function __construct( $fval, $sval ) {
//        $this->_fval = $fval;
//        $this->_sval = $sval;
//    }
//    public function add() {
//        return $this->_fval + $this->_sval;
//    }
//    public function subtract() {
//        return $this->_fval - $this->_sval;
//    }
//    public function multiply() {
//        return $this->_fval * $this->_sval;
//    }
//    public function divide() {
//        return $this->_fval / $this->_sval;
//    }
//}
//$mycalc = new MyCalculator(12, 6);
//echo $mycalc-> add()."\n"; // Displays 18
//echo $mycalc-> multiply()."\n"; // Displays 72
//echo $mycalc-> subtract()."\n"; // Displays 6
//echo $mycalc-> divide()."\n"; // Displays 2


//-----Sedmi zadatak za klase w3c

//Moje resenje

//$time = strtotime('12-08-2004');
//
//$expected = date('Y-m-d', $time);
//
//echo $expected;

//Resenje sa sajta

//Razlika koristi su OOP php


//$dt = DateTime::createFromFormat('m-d-Y', '12-08-2004')->format('Y-m-d');
//echo $dt;
