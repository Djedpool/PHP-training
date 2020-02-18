<?php
/**
 * Created by PhpStorm.
 * User: Stef
 * Date: 1/27/2020
 * Time: 7:00 PM
 */

// Testing Skills

// 1. What is the value of variable $r

// class a {
//    public function select($where) {
//        $select = 1;
//        if($where instanceof \Closure) {
//            return $where($select);
//        }
//    }
// }

// $t = new a;
// $r = $t->select(function ($select){
//    $select+1;
// });

// var_dump($r);

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

// $a = array('a', 'b', 'c', 'd', 'e');
// echo implode('-', array_slice($a, 2));
// echo implode('-', array_slice($a, -2, 1));

// 10. What $res returns?

// $r = 8;
// $w = 1;
// $x = 32;
// $perms = 9;

// if($perms  & $r) {
//     $res .= 'r';
// }

// if($perms  & $w) {
//     $res .= 'w';
// }

// if($perms  & $x) {
//     $res .= 'x';
// }

// echo $res;

// 11. What is the value of $counter?

/*$counter = 0;

try {
    if($counter != 3) {
        throw new Exception('grrr');
    }
    $counter++;
} catch (Exception $e) {
    // do nothing
}

echo $counter;*/

/*

// 12. What will this return?

/*

echo 5 % 3;
echo 15 % 3;
echo -5 % 4;
echo 21 % 6;

*/

// 13. Value of immploded $a?

/*
    
$a = array('a', 'c');

array_unshift($a, 'f', 'g');
echo implode('', $a);
*/

// 14.  What is the value of $a;

/*$a = '10';

switch($a) {
    case 10;
        $a += 5;
    break;
    default:
        $a -= 5;
    break;
}
*/

// 15. What is the value of prop?

/*class A {
    protected $prop = 1;
    function __get($name) {
        return $this->name;
    }
    function __set($name, $value) {
        $this->name = $value;
    }
}

class B {
    function __construct($a) {
        $a->prop = 10;
    }
}

$a = new A;
$b = new B($a);

$c = $a->prop;
echo $c;*/

// 16. What happens here?

/*function do($somehing) {
    print_r($somehing);
}

@do('work');*/

// 17. What is the value and what means ^

/*
    $a = 9;
    $b = 10;

    echo $a ^ $b;
*/

// 18. What is outcome of this piece of code?

//$string = '1234 12a34 12345 123';
//
//preg_match_all('/[0,9]{2,4}/', $string, $referers);
//
//var_export($referers);

// 19. Does Traits support interfaces?

// fALSE

// 20. Is this valid piece of code?

//class a {
//    private $a = 1;
//    public function __set($name, $value) {
//        throw new Exception("Go away");
////        var_dump($name);
////        var_dump($value);
////        return $name;
//    }
//}
//
//$a = new a();
//$a->b = 3;
//
//var_dump($a);

// Answer: yes it is!