<?php
/**
 * Created by PhpStorm.
 * User: SOul
 * Date: 2/1/2018
 * Time: 2:19 PM
 */

//  1. Primitive type declaration

/*
 *
 * Other stuff is that you can give primitive data type (bool, string, int, float) to argument
 * of the function *in this case a function parse*.
 *
 * */

function parse(...$ints) {

    echo '<pre>'. json_encode($ints, JSON_PRETTY_PRINT).'</pre>';

}

parse(23, '25', 22.22, 0);



//New function, sorry about convention of the writing function name, this is just amateur way to show example.

function parse1(int ...$ints) { //key word or how it say example of primitive data type

    echo '<pre>'. json_encode($ints, JSON_PRETTY_PRINT).'</pre>';

}

parse1(23, '25', 22.22, 0);



/*
 *
 * In example above you can see how coercion works (test your self to understand more)
 *
 */


//  2. Object type declaration


/*
 *
 * Here we don't have an option for polymorphism because there is no room for adaptation,
 * it is very direct and strict.
 *
 * Array - ( is very strict if you put an array in front of argument,
 *           php will only expect array indexed or associative it does'nt mather,
 *           don't put any other data type int this case .)
 *
 * Callable - ( that means that you can make you argument as function,
 *              into yours object creation you can pass
 *              new function for key goal of extending a functionality of function. )
 *
 * Object/Class - (rules of inheritance if class extends other classes)
 *
 * Self - (this data type must be used with in a class )
 *
 */


//Array example

function parseArr( array $kit ) {

    echo '<pre>'. json_encode( $kit, JSON_PRETTY_PRINT).'</pre>';

}

$arr = array ('hello', 'opa', 'another', 'day');



parseArr($arr);


//Callable

function parseFuc( callable $cal ) {

    echo 'This is string from this parseFuc'.'<br>';

    $cal();
}

parseFuc(function (){ echo 'This is text from callback function.'; });


//Object/Class

class procedural {}
class oop {}

function php ( oop $way ) { //making sure that stuff coming from oop class, and must be a object of oop class.

    echo var_dump($way);

}

$task = new oop();

php($task);

//Same task with interface

interface checker {} //This is just for being sure that other classes have certain requirements.

class cake implements checker {}
class salad {}

function lunch ( checker $food ) {
    //You can create object that is only implements a checker class and passed as a argument.

    echo var_dump($food);

}

$order = new cake();

lunch($order);

//Self

class cakes{

    function icing ( self $thisCake ) { //this argument can receive object that came from this class, or came it from self

        echo 'Cake to ice: <br/>';
        echo var_dump($thisCake);
    }

}


$cake = new cakes;
$cake2 = new cakes;
$cake2->icing($cake);


//  3. Return type declaration

/*
 *
 * This is s very good thing you can check what function returns, work with object data types and primitive.
 * Any data can be converted to string, same thing is for bool.
 * No all data can be converted to int or a float.
 * OBJECT function can return array, self, function or object
 *
 */

//Primitive

function dataReturn():float { //available for php7, same thing check what function returns not just value
    // it check data type to

    return 22.22;
}

echo var_export( dataReturn() );

echo '<br>';

//Object

class Obejct{}

function dataReturnO():Obejct {//available for php7, same thing check what function returns not just value
    // it check data type to

    return new Obejct;
}

echo var_export( dataReturnO() );

echo '<br>';

//Object Interface

interface O {}

class Obj implements O {}

function dataReturnI(): O {//available for php7, same thing check what function returns not just value
    // it check data type to

    return new Obj();
}

echo var_export( dataReturnI() );

echo '<br>';

//Object return function

function Fuc():callable {

    echo 'Do something <br/>';

    return function () {
        echo 'This is beauty world';
    } ;

}

echo var_export(Fuc());

echo '<br>';


//Object return self

/*
 * Do you remember that a self must be in class to work?
 */

class Test {

    function tes($object):self {

        return $object;

    }
}

$t  = new Test;

echo var_export($t->tes( new Test ));

echo '<br>';


//  4. Null coalescing operator

echo '<pre>'. json_encode($_GET, JSON_PRETTY_PRINT).'</pre><br/>';


$myVar = $personName ?? $_GET['name'] ?? 'Loz';

echo $myVar;

echo '<br>';

//  5. Spaceship operator

/*
 *
 * -1 less then
 * 0 equal
 * 1 greater then
 *
 *
 * polymorphism is included
 * int and string you know, php recognise a data type
 * bool true, if it is not equal
 * array count number of elements and count a value, go and play
 * In if statement you can encapsulated an spaceship operator
 *
 */

$spaceO = 2 <=> 2;

echo $spaceO;

echo '<br>';

if( array(20,20, 200) <=> array(20,20,20,20) ){
    echo 'Something happened';
}

echo '<br>';

//  6. Constant arrays using define

/*
 *  two ways of defining constants, first
 *  with key word conts NAMEOFCONST = values(data type)
 *  second is a Define method Define('NAME', datatype)
 *  Whe is defined const can not be changed it has a lifespan of application
 *
 */

const PERSON = array('PERSON', 200, true);
Define('OFFICE', array('OFFICE', 400, true));//new way, array can be defined in this way
echo json_encode(PERSON, 128).'<br/><br/>'.json_encode(OFFICE, 128);


echo '<br>';

//  7. Anonymous classes

/*
 *
 * Creating a class that we only exist one time in one variable, tou can inherit other classes,
 * after this you can not use it again it will deleted/
 *
 */

class my {

    public $hello = 'say hello';

}

interface reg {

    public function print();

}


$framework = new class('read only param') extends my implements reg
{

    private $readOnly;

    function __construct($ro) {
        $this->readOnly = $ro;
    }

    public function print()
    {

        echo $this->readOnly;
        echo '<br>';

    }

    static function hello() {

        echo 'Hello';
        echo '<br>';

    }

};

$framework->print();
$framework::hello();
echo $framework->hello;

echo '<br>';


//  8. Unicode codepoint escape syntax

//old example
echo '&pound;'."<br/>";


//new example
//enter hexadecimal value of a symbol(find value on W3C HTML UTF8)
echo "\u{2200}";

echo '<br>';


//  9. Functional call context

/*
 * placing a function to variable, call method take  function as a object and only accept object
 */

$con = function () {


    echo var_dump($this);//it can only be populated with object
    echo $this->prop;

};

class newObj {

    public $prop = 'hello world madafakas';

}


$con->call( new newObj());

echo '<br>';

//  10. Unserialize filtering


class newOne {

    public $prop = 'hello world';

    private $priv = 'This is private to the object';

    private $arr = [20, 200, 500, 600];

}

$data = serialize(new newOne());//takes object and returning as a string

echo  $data;

echo '<br>';

$unserialized = unserialize($data, ["allowed_classes" => ["newOne"]]);//second parameter is a filter what we can and what we can not serialize

echo $unserialized->prop;

//  11. Expectation

//UNCOMMENT!!!

//ini_set('assert.exception', 1 );//setting and turing on with a 1(setting option or configuration from ini_set)
//
//class HandleError extends AssertionError{//regular class recive
//}
//
//$num = 'hello';
//
//assert(is_numeric($num ), new HandleError('some error text'));//assert construct, two parameters


//  12. Namespacing, use and group use declarations in php


require 'namespace.php';

//All this is very well working but it is not convenient way to do it.

echo '<h2>Classes</h2>'.'<br/><br/>';

$object = new php\complicated\hello;
$object2 = new php\complicated\anothrclass;

echo '<br/><br/>'.'<h2>Function</h2>'.'<br/><br/>';

php\complicated\all();
php\complicated\all2();

echo '<br/><br/>'.'<h2>Constants</h2>'.'<br/><br/>';

echo php\complicated\HELLO;
echo php\complicated\GOODYE;

//

use php\complicated as using;//example you can think about this as a nickname
//Now instead of using a php\complicated you can call your const, classes and function with just a nickname ;)

//There are better ways
//You can target namespace and name of the class or function.
//Example

use php\complicated\hello;
use php\complicated\anothrclass as al;

$batman = new hello;//if you don't have nickname, call is going by a class name
$superman = new al;//this is creating object by nickname

echo '<br>';

//Same thing with function and const

use function php\complicated\all;
use function php\complicated\all2 as area51;

all();//same ase if you don't give alias use name of function
area51();

echo '<br>';


//use const php\complicated\HELLO; //Reason of commenting this is because we still have usage of this const. comment line 446 and tha uncomment this
use const php\complicated\GOODYE as GB;

//echo HELLO;
echo GB;

echo '<br>';

//This is all old in php, now new stuff

//USING GROUP

use php\complicated\{
    //hello,
    anothrclass as area52,
};

use function php\complicated\{
   // all,
    all2 as area511,
};

use const php\complicated\{
    HELLO,
    GOODYE as GBY,
};

echo '<br>';

//  13. Integer division


/*
 * This new method is using int for parameter , and is doing polymorphism
 * return only how many times it can stay in first number, play with it and try it
 * float number, value after comma is chop off
 */


echo intdiv(5, 2.9);

echo '<br>';


//  14. Session options

session_start([ //start session on server and enables to store variables on server

    'cache_limiter' => 'private',//change on options use asoc. array,
    'read_and_close' => false,//read_and_close only available in php 7 when session is started

]);

$_SESSION['name'] = "Stefan";//Now again can use it info from server
//Think about as temporary storage on server, can share with all other pages on site

?>

<a href="loggedin.php">Logged in</a>

<?php

//  15. Random bytes and random int functions

/*
 * New random method, very hard to crack
 * random_bytes generate string with number of character
 *
 * random_int generate random number between two values min and max
 */

echo '<br>';

echo random_bytes(100);

echo '<br/><br/><br/>';

echo random_int(1000, 10000000);

echo '<br>';

//  16. Revamped regular expression function

$subject = 'Aaaaa aa Bbb';

$numOf;

echo 'Subject to anaylse: <b>'.$subject.'<br><br><br><br><br>';

preg_replace_callback_array(
    [
        '~[a]+~i' => function ($match) { echo $match[0]. ' match found for [a] <br><br>'; },
        '~[b]+~i' => function ($match) { echo $match[0]. ' match found for [b] <br><br>'; }
    ],
    $subject,

    -1,

    $numOf

);


echo $numOf;

//  17. Generator syntax