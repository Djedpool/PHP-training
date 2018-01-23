<?php

//************1 task Array

//$color = array('white', 'green', 'red', 'blue', 'black');
//echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0]  house, the leaden sky. The new president and his first lady. - Richard M. Nixon\"";
//var_dump( $color);

//************2 task Array

//$color = array('white', 'green', 'red');
//sort($color); sortira po abecedi

//foreach ($color as $key => $val){
   // echo "<li>".$val."</li>";
//}

//************3 task Array

//$ceu = array(
//    "Italy"=>"Rome",
//    "Luxembourg"=>"Luxembourg",
//    "Belgium"=> "Brussels",
//    "Denmark"=>"Copenhagen",
//    "Finland"=>"Helsinki",
//    "France" => "Paris",
//    "Slovakia"=>"Bratislava",
//    "Slovenia"=>"Ljubljana",
//    "Germany" => "Berlin",
//    "Greece" => "Athens",
//    "Ireland"=>"Dublin",
//    "Netherlands"=>"Amsterdam",
//    "Portugal"=>"Lisbon",
//    "Spain"=>"Madrid",
//    "Sweden"=>"Stockholm",
//    "United Kingdom"=>"London",
//    "Cyprus"=>"Nicosia",
//    "Lithuania"=>"Vilnius",
//    "Czech Republic"=>"Prague",
//    "Estonia"=>"Tallin",
//    "Hungary"=>"Budapest",
//    "Latvia"=>"Riga",
//    "Malta"=>"Valetta",
//    "Austria" => "Vienna",
//    "Poland"=>"Warsaw"
//);
//
//asort($ceu);
//
//foreach ($ceu as $key => $val){
//    echo "The capital of ".$key." is ". $val. "<br>";
//}

//*************4 task Arrays

//$x = array(1, 2, 3, 4, 5);
//var_dump($x);
//
//unset($x[3]);
//$x = array_values($x);//vraca sve vrednosti iz niza i indeksira numericki
//
//var_dump($x);


//*************5 task Arrays


//$color = array(4 => 'white', 6 => 'green', 11=> 'red');
//echo $color[4];
//echo reset($color);//postavlja unutrasnji pokazivac od niza da bude prvi element, i vraca vrednost upravo njega.


//************6 tasK Arrays

///-------!naglasiti-----------
//function w3rfunction($value,$key)
//{
//    echo "$key : $value"."\n";
//}
//$a = '{"Title": "The Cuckoos Calling",
//"Author": "Robert Galbraith",
//"Detail":
//{
//"Publisher": "Little Brown"
// }
//  }';
//$j1 = json_decode($a,true);
//array_walk_recursive($j1,"w3rfunction");


//*********** 7 task Array

//$original = array( '1','2','3','4','5' );
//
//echo 'Original array : '."\n";
//
//foreach ($original as $x) {
//    echo "$x ";
//}
//$inserted = '$';
//array_splice( $original, 3, 0, $inserted );//Istraziti dobro sta znaci i sta se moze dobititi
//
//echo " \n After inserting '$' the array is : "."\n";
//foreach ($original as $x)
//{
//    echo "$x ";
//}
//echo "\n";

//*********** 8 task Array

//echo "Associative array : Ascending order sort by value <br>";
//
//$array2 = array(
//    "Sophia"=>"31",
//    "Jacob"=>"41",
//    "William"=>"39",
//    "Ramesh"=>"40"
//);
//
//asort($array2);
//
//foreach($array2 as $y=>$y_value) {
//    echo "Age of ".$y." is : ".$y_value."<br>";
//}
//
//echo "Associative array : Ascending order sort by Key <br>";
//
//$array3=array(
//    "Sophia"=>"31",
//    "Jacob"=>"41",
//    "William"=>"39",
//    "Ramesh"=>"40"
//);
//
//ksort($array3);
//
//foreach($array3 as $y=>$y_value) {
//    echo "Age of ".$y." is : ".$y_value."<br>";
//}
//
//echo "Associative array : Descending order sorting by Value <br>";
//
//$age = array(
//    "Sophia"=>"31",
//    "Jacob"=>"41",
//    "William"=>"39",
//    "Ramesh"=>"40"
//);
//
//arsort($age);
//
//foreach($age as $y=>$y_value) {
//    echo "Age of ".$y." is : ".$y_value."<br>";
//}
//
//echo "Associative array : Descending order sorting by Key <br>";
//
//$array4 = array(
//    "Sophia"=>"31",
//    "Jacob"=>"41",
//    "William"=>"39",
//    "Ramesh"=>"40"
//);
//
//krsort($array4);
//
//foreach($array4 as $y=>$y_value) {
//    echo "Age of ".$y." is : ".$y_value."<br>";
//}

//*********** 9 task Array

//Here is solution just from site, purpose of this is to understand concept of thinking.

$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);

$tot_temp = 0;

$temp_array_length = count($temp_array);//Count all elements in array, or something in object

foreach($temp_array as $temp)
{

    $tot_temp += $temp;

}

$avg_high_temp = $tot_temp/$temp_array_length;

echo "Average Temperature is : ".$avg_high_temp." ";

sort($temp_array);//sort an array from lowest to highest

echo " List of seven lowest temperatures :";

for ($i=0; $i< 5; $i++)
{

    echo $temp_array[$i].", ";

}


echo "List of seven highest temperatures :";

for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++) {

    echo $temp_array[$i] . ", ";

}

//*********** 10 task Array

