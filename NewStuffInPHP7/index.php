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