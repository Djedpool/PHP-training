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