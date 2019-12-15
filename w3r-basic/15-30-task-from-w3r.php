<?php
/**
 * Created by PhpStorm.
 * User: Stef
 * Date: 12/12/2019
 * Time: 4:53 PM
 */

/*
 * 16. Sixteen task
 *   description:
 *      Write a PHP script to count number of lines in a file.
 *      Note : Store a text file name into a variable and count the number of lines of text it has.
 */


//// My solution
//$file = file('1-15-task-from-w3r.php');
//$num_of_lines = count($file);
//
//if($num_of_lines > 0) {
//    echo 'Number of lines tht file contains is: '.count($file);
//} else  {
//    echo 'empty file please use some file that have lines to count.';
//}

//// W3R solution
//$file = basename($_SERVER['PHP_SELF']);
//$no_of_lines = count(file($file));
//echo "There are $no_of_lines lines in $file"."\n";


/*
 * 17. Seventeen task
 *   description:
 *      Write a PHP script to print current PHP version
 */

//echo 'Current PHP version : ' . phpversion();
//
//// prints e.g. '2.0' or nothing if the extension isn't enabled
//echo phpversion('tidy')."\n";

/*
 * 18. Eighteen task
 *   description:
 *      Write a PHP script to delay the program execution for the given number of seconds.
 */

//// current time
//echo date('h:i:s') . "\n";
//// sleep for 5 seconds
//sleep(5);
//// wake up
//echo date('h:i:s')."\n";

/*
 * 19. Nineteen task
 *   description:
 *      Arithmetic operations on character variables : $d = 'A00'. Using this variable print the following numbers
 */

//// My solution
//$d = 'A00';
//for($d; $d <= 'A05'; $d++) {
//    echo $d.'<br>';
//}
//
//// W3R solution
//$d = 'A00';
//for ($n=0; $n<5; $n++)
//{
//    echo ++$d .'<br>';
//}

/*
 * 20. Twenties task
 *   description:
 *      Write a PHP script to get the last occurred error
 */
//echo $a;
//var_dump(error_get_last());
// My solution and W3r solution are same so no need for writing both...