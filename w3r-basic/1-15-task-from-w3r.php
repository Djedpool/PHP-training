<?php
/**
 * Created by PhpStorm.
 * User: Stef
 * Date: 12/12/2019
 * Time: 12:21 PM
 */

/*
 * 1. First task
 *   description:
 *      Write a PHP script to get the PHP version and configuration information?
 */

//phpinfo();

/*
 * 2. Second task
 *   description:
 *      Write a PHP script to display the following strings.
 *      'Tomorrow I \'ll learn PHP global variables.'
 *      'This is a bad command : del c:\\*.*'
 */

//echo 'Tomorrow I \'ll learn PHP global variables.'.'<br>';
//echo 'This is a bad command : del c:\\*.*';

/*
 * 3. Third task
 *   description:
 *       $var = 'PHP Tutorial'. Put this variable into the title section, h3 tag and as an anchor text within an HTML document.
 */

//    $var = 'PHP Tutorial';
//
//    $text = "<h3>$var</h3>";
//    $text.= "<p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.</p>";
//    $text.= "<a href='#'>Go to the $var.</a>";
//
//    echo $text;

/*
 * 4. Fourth task
 *   description:
 *       Create a simple HTML form and accept the user name and display the name through PHP echo statement.
 */

//    if(isset($_POST['submit'])) {
//        $name = $_POST['name'];
//
//        echo 'Hello Dear '.$name;
//    }
//
//    $form = "<form action='' method='post'>";
//    $form.= "<input type='text' name='name'>";
//    $form.= "<input type='submit' name='submit' value='submit'>";
//    $form.= "</form>";
//
//    echo $form;

/*
 * 5. Fifth task
 *   description:
 *       Write a PHP script to get the client IP address.
 */

//$ip = '';
//
//if(isset($_SERVER['REMOTE_ADDR'])) {
//    $ip = $_SERVER['REMOTE_ADDR'];
//}
//
//echo 'Your IP Address is ' . $ip;

/*
 * 6. Sixth task
 *   description:
 *       Write a simple PHP browser detection script.
 */

//if(isset($_SERVER['HTTP_USER_AGENT'])) {
//    $user_agent = $_SERVER['HTTP_USER_AGENT'];
//    echo 'You are using '. $user_agent;
//}

/*
 * 7. seventh
 *   description:
 *       Write a PHP script to get the current file name.
 */

//echo basename(__FILE__, '.php');

/*
 * 8. eight
 *   description:
 *       Write a PHP script, which will return the following components of the url 'https://www.w3resource.com/php-exercises/php-basic-exercises.php'
 */

    // My solution
//    $string = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';
//
//    $components = explode('/', $string);
//
//    $scheme = str_replace(':', '', $components[0]);
//    $host = $components[2];
//    $path = '/'.$components[3].'/'.$components[4];
//
//    $text = "Scheme: $scheme <br>";
//    $text.= "Host: $host <br>";
//    $text.= "Path: $path";
//
//    echo $text;

    // W3R solution
//    $url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';
//    $url = parse_url($url); // this parse url i did not know for it. It gives Scheme Host and Path
//
//    echo 'Scheme : '.$url['scheme'].'<br>';
//    echo 'Host : '.$url['host'].'<br>';
//    echo 'Path : '.$url['path'].'<br>';

/*
 * 9. ninth //This task i don't have simple explanation, buy the way I hate regex
 *   description:
 *       Write a PHP script, which changes the color of the first character of a word.
 */


    // My Solution NOT CORRECT
//    $string = "PHP tutorial";
//
//    if(!empty($string)) {
//        $first_char = substr($string, 0, 1);
//        $string_with_removed_first_char = trim($string, $first_char);
//
//        echo '<p><span style="color:red">' . $first_char .'</span>'.$string_with_removed_first_char.'</p>';
//    }

    // W3R solution
//    $text = 'PHP Tutorial';
//    $text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
//    var_dump($text);
//    echo $text;

/*
 * 10. tenth
 *   description:
 *      Write a PHP script, to check whether the page is called from 'https' or 'http'.
 */

    // My solution and i used what i learned from previous lectures
//    $url = parse_url($_SERVER['HTTP_REFERER']);
//
//    $scheme = $url['scheme'];
//
//    if($scheme === 'https') {
//        echo 'This is called from '.$scheme;
//    } elseif($scheme === 'http') {
//        echo 'This is called from '.$scheme;
//    }

// My solution is legit cause i am working on localhost and i did not have HTTPS as key, but hey i just learned something new

    // W3R solution
//    if (!empty($_SERVER['HTTPS']))
//    {
//        echo 'https is enabled';
//    }
//    else
//    {
//        echo 'http is enabled'.'<br>';
//    }


/*
 * 11. eleventh
 *   description:
 *      Write a PHP script to redirect a user to a different page . Go to the editor
 *      Expected output : Redirect the user to https://www.w3resource.com/.
 */

//$url = 'https://www.w3resource.com/';
//header('Location:'. $url);

/*
 * 12. twelfth
 *   description:
 *      Write a simple PHP program to check that emails are valid. Go to the editor
 *      Hints : Use FILTER_VALIDATE_EMAIL filter that validates value as an e-mail address.
 *      Note : The PHP documentation does not say that FILTER_VALIDATE_EMAIL should pass the RFC5321.
 */

//$email = "stef.olja@example.com";
//
//if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//    echo("$email is a valid email address");
//} else {
//    echo("$email is not a valid email address");
//}

/*
 * 13. thirteen
 *   description:
 *     Write a e PHP script to display string, values within a table. Go to the editor
 *     Note : Use HTML table elements into echo.
 */
//    $salary_a = 1000;
//    $salary_b = 1200;
//    $salary_c = 1400;
//
//    // My Solution with touch solution from w3r, i notice that i did not know for font attribute in table so i noticed that that is just for older version of HTML
//    $text = "<table border='1' cellspacing='0'>";
//    $text.= "<tr>";
//    $text.= "<td><font color=blue>Salary og mister A</td>";
//    $text.= "<td>$salary_a$</td>";
//    $text.= "</tr>";
//    $text.= "<tr>";
//    $text.= "<td><font color=blue>Salary og mister B</td>";
//    $text.= "<td>$salary_b$</td>";
//    $text.= "</tr>";
//    $text.= "<tr>";
//    $text.= "<td><font color=blue>Salary og mister C</td>";
//    $text.= "<td>$salary_c$</td>";
//    $text.= "</tr>";
//    $text.= "</table>";
//
//    echo $text;

/*
 * 14. fourteen
 *   description:
 *      Write a PHP script to display source code of a webpage (e.g. "http://www.example.com/").
 */

// This is what i heard for first time in my life.
//$all_lines = file('https://www.w3resource.com/');
//
//foreach ($all_lines as $line_num => $line)
//{
//    echo "Line No.-{$line_num}: " . htmlspecialchars($line) . "<br>";
//}

/*
 * 15. fifteen
 *   description:
 *      Write a PHP script to get last modified information of a file.
 *      Sample filename : email.php
 *      Sample Output : Last modified Monday, 26th June, 2017, 12:43pm
 */

// My solution
//$file = filemtime('../email.php');
//
//echo 'Last modified '.date('l, dS F, Y, H:ma', $file);
//
//// W3R solution
$current_file_name = basename('email.php');
var_dump($current_file_name);

$file_last_modified = filemtime($current_file_name); // this function check if it for us.
echo "Last modified " . date("l, dS F, Y, h:ia", $file_last_modified)."<br>";