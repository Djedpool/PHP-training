<?php
/**
 * Created by PhpStorm.
 * User: Stef
 * Date: 1/27/2020
 * Time: 7:00 PM
 */

// Testing Skills

// 1. What is the value of variable $r

//class a {
//    public function select($where) {
//        $select = 1;
//        if($where instanceof \Closure) {
//            return $where($select);
//        }
//    }
//}
//
//$t = new a;
//$r = $t->select(function ($select){
//    $select+1;
//});
//
//var_dump($r);

// 2. What is the outcome of this piece of code?
// -fatal error
// -Foodhello
// -helloFood
// -hello
// -food

//class  Hello {
//    private static $_instance;
//
//    private function __construct(){
//        echo 'Food';
//    }
//
//
//    public  static function getInstance() {
//        if(!self::$_instance) {
//            self::$_instance = new Hello();
//        }
//        return self::$_instance;
//    }
//
//    public function sayHello() {
//        echo 'Hello';
//    }
//}
//
//$phone = Hello::getInstance();
//$result = $phone->sayHello();
//
//var_dump($result);

// 3. Is this piece of code valid?
// - No, you can not access the private property A::$a from outside the class
// - Yes
//
//class A {
//    private $a = 1;
//}
//
//$a = new A();
//$a->a = 3;


// 4 What is the outcome of this piece of code:
// - 12
// - 11
// - 21 // Correct answer
// - 22

//$a = 1;
//$c = 2;
//$b =& $a;
//$a =& $c;
//echo $a.$b;

// 5 With is the content of $result
// - * a statement
// - An error occurs, the modString()
//   method should be public
// - => a statement
// - An error occurs, the childwriter class
//   does not define method action()

//class writer {
//    public function action($string) {
//        return $this->modString($string);
//    }
//
//    protected function modString($string) {
//        return ' * '.$string;
//    }
//}
//
//class childWriter extends writer {
//    public function modString($string)
//    {
//        return ' => ' . $string;
//    }
//}
//
//$writer = new ChildWriter();
//$result = $writer->action('a statement');
//
//echo $result;


// 6 If a cookie is set by setcookie("language", "English", time() 3600); the cookie may be unset by
// - $_COOKIE["language"] = ";
// - A cookie resides on the client machine and not on the server and can therefore not be unset
// - set cookie("language", "English", time() - 3600);
// - unsetcookie("language");

// 7 Which of the folowing is not a default stream wrapper
// - file
// - ftp
// - php
// - curl

// 8 What is the outcome of this piece of code
// - not found
// - found
// - found 2
// - found 3

//$string = 'doctrine';
//$needle = 'c';
//$pos = strpos($needle, $string);
//var_dump($pos);
//if($pos) {
//    echo "found ".$pos;
//} else {
//    echo "not found";
//}

// 9 What is the outcome od this piece of code
// - a-ba
// - a-bd
// - c-d-ed

$a = array('a', 'b', 'c', 'd', 'e');
echo implode('-', array_slice($a, 2));
echo implode('-', array_slice($a, -2, 1));