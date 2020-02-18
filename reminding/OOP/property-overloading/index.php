<?php
/**
 * Created by PhpStorm.
 * User: Stef
 * Date: 2/18/2020
 * Time: 10:37 AM
 */

// Property overload
// 4 things we must know
// - __set() triggers when we initialized overload properties.
// - __get() -||- when we use overload properties with print statement.
// - __isset() it invokes when we use isset function on checking overloaded property.
// - __unset() -||- when we use unset() function on overloaded property.

// All this function must be public, and that work only with object context.

class GFG {
    // Location of overloading data
    private $data = array();

    // Overload not used here;
    public  $declared = 1;

    // Overload used when accessed
    // outside the class
    private $hidden = 2;

    // Function definition
    public function __set($name, $value) {
        echo "Setting '$name' to '$value' <br>";
        $this->data[$name] = $value;
    }

    public function __get($name) {
        echo  "Getting '$name'";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        $trace = debug_backtrace();

        return null;
    }

    public function __isset($name) {
        echo "Is '$name' set? <br>";
        return isset($this->data[$name]);
    }

    public function __unset($name) {
        echo  "Unsetting '$name' <br>";
        unset($this->data[$name]);
    }

    // Overloading methods only difference over the property overloading is that
    // Overload methods can be used in both context, object and static
    // Main operation is that overloading methods is for creating dynamic methods
    // that are not declared inside class scope.
    // Also triggers two magic methods.
    // __call() - triggers when we invoke overloaded method in object context
    // __callStatic() - -||-over the static context

    public function __call($name, $arguments) {
        echo "Calling object method '$name' " . implode(', ', $arguments). "<br>";
    }

    public static function __callStatic($name, $arguments) {
        echo "Calling static method '$name' " . implode(', ', $arguments). "<br>";
    }
}

$obj = new GFG();

$obj->a = 1;
echo  $obj->a."<br>";

// Use isset function to check
// 'a' is set or not
var_dump(isset($obj->a));

// Unset 'a'
unset($obj->a);

var_dump(isset($obj->a));

$obj->runTest('in object context');

$obj::runTest('in static context');
