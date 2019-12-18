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

/*
 * 21. Twenty-first task
 *   description:
 *      Write a PHP function to test whether a number is greater than 30, 20 or 10 using ternary operator.
 */
// my quick solution
//function compare($num) {
//    echo $num>30 || $num>20 || $num>10 ? 'your number '.$num.' is greater than 30, 20 or 10 ' : 'your '.$num.' is not greater than this 30, 20 or 10';
//}
//
//compare(31);

//w3r solution
//function trinary_Test($n){
//    $r = $n > 30 ? "greater than 30" : ($n > 20 ? "greater than 20" : ($n >10 ? "greater than 10" : "Input a number atleast greater than 10!"));
//    echo $n." : ".$r."<br>";
//}
//trinary_Test(32);
//trinary_Test(21);
//trinary_Test(12);
//trinary_Test(4);

/*
 * 22. Twenty-second task
 *   description:
 *      Write a PHP script to get the full URL.
 */

//var_dump($_SERVER);
//
//$url = 'http//:'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
//
//echo $url;

/*
 * 23. Twenty-third task
 *   description:
 *      Write a PHP script to compare the PHP version
 */

// My solution i get it from PHP.net
//if(version_compare(PHP_VERSION, '7.0.0') >= 0) {
//    echo 'I am at least PHP version 7.0.0, my version: ' . PHP_VERSION . "<br>";
//}

// W3r solution but i am think in that they found they solution on PHP.net too :D
//if (version_compare(PHP_VERSION, '6.0.0') >= 0) {
//    echo 'I am at least PHP version 6.0.0, my version: ' . PHP_VERSION . "\n";
//}
//if (version_compare(PHP_VERSION, '5.3.0') >= 0) {
//    echo 'I am at least PHP version 5.3.0, my version: ' . PHP_VERSION . "\n";
//}
//
//if (version_compare(PHP_VERSION, '5.0.0', '>=')) {
//    echo 'I am using PHP 5, my version: ' . PHP_VERSION . "\n";
//}
//
//if (version_compare(PHP_VERSION, '5.0.0', '<')) {
//    echo 'I am using PHP 4, my version: ' . PHP_VERSION . "\n";
//}

/*
 * 24. Twenty-fourth task
 *   description:
 *      Write a PHP script to get the name of the owner of the current PHP script
 */

// My solution
//var_dump(get_current_user()); // It is returning a owner of script

// W3r solution
//echo 'Current script owner: ' . get_current_user()."\n";

/*
 * 25. Twenty-fifth task
 *   description:
 *      Write a PHP script to get the document root directory under which the current script is executing, as defined in the server's configuration file.
 */

// My solution
//if(isset($_SERVER['DOCUMENT_ROOT'])) {
//    echo $_SERVER['DOCUMENT_ROOT'];
//}

// W3r solution
//$rd = getenv('DOCUMENT_ROOT');
//echo $rd."\n";

/*
 * 26. Twenty-sixth task
 *   description:
 *      Write a PHP script to get the information about the operating system PHP is running on
 */
//echo php_uname()."<br>";
//echo PHP_OS."<br>";
//if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
//    echo 'This is a server using Windows!';
//} else {
//    echo 'This is a server not using Windows!'."<br>";
//}

/*
 * 27. Twenty-seventh task
 *   description:
 *      Write a PHP script to print out all the credits for PHP.
 */
//phpcredits(CREDITS_GROUP | CREDITS_DOCS | CREDITS_FULLPAGE);

/*
 * 28. Twenty-eight task
 *   description:
 *      Write a PHP script to get the directory path used for temporary files.
 */

// Create a temporary file in the temporary
// files directory using sys_get_temp_dir()
//$temp_file = tempnam(sys_get_temp_dir(), 'Tux');
//echo $temp_file."<br>";
/*
 * 29. Twenty-ninth task
 *   description:
 *      Write a PHP script to get the names of the functions of a module. Go to the editor
 *      Note : Find XML, JSON functions etc.
 */

//var_dump(get_extension_funcs("JSON"));
//echo "<br>";
//var_dump(get_extension_funcs("XML"))."<br>";

/*
 * 30. Thirtieth task
 *   description:
 *      Write a PHP script to get the time of the last modification of the current page.
 */

// My way
$file = basename(__FILE__);
$time_of_update = filemtime($file);
echo "Last modified " . date("l, dS F, Y, h:ia", $time_of_update)."<br>";

// W3r solution
echo "Last modified: " . date ("F d Y H:i:s.", getlastmod())."<br>";