<?php

/*
    This file is for exercise an examples from the book:
        ***The essentials of Object Oriented PHP Learn and practice by Joseph Benharosh***
*/

//*****************Task till Inheritance in OOP, it includes all training

//class User {
//    private $firstName;
//    public $lastName;
//
//    public function __construct($firstName, $lastName){
//        $this->firstName = $firstName;
//        $this->lastName = $lastName;
//    }
//
//
//    public function getFullName(){
//        return $this->firstName.' '.$this->lastName;
//    }
//
//    public function setFirstName($firsName){
//        $this->firstName = $firsName;
//    }
//
//    public function getFirstName(){
//        return $this->firstName;
//    }
//
//    public function hello(){
//        return 'Hello'.' '.$this->firstName;
//    }
//
//    public function register(){
//        echo $this -> firstName . " " . $this -> lastName . ' registered';
//        return $this;//povezivanje metode da se na metodu poziva metoda.
//    }
//
//    public function mail(){
//        echo ' emailed';
//    }
//}

//$joe = new User('John', 'Doe');
//
//echo $joe->getFullName();

//***************Task for Inheritance OOP

//class User {
//    protected  $username;
//
//    public function setUsername($username) {
//        $this->username = $username;
//    }
//}
//
//
//class Admin extends User {
//
//    public function expressYourRoll(){
//        return strtolower(__CLASS__);
//    }
//
//    public function sayHello(){
//        echo 'Hello admin '.$this->username;
//    }
//
//}
//
//$admin1 = new Admin();
//
//$admin1->setUsername('Pero');
//
//$admin1->sayHello();

//****************Task Abstract classes and methods

//abstract class User {
//
//    protected $username;
//
//    abstract public function stateYourRoll();
//
//    public function getUsername(){
//         return $this->username;
//    }
//
//    public function setUsername($userName){
//        $this->username = $userName;
//    }
//
//}
//


//class Admin extends User{
//    public function stateYourRoll()
//    {
//        return strtolower(__CLASS__);
//    }
//}
//
//class Viewer extends User {
//    public function stateYourRoll()
//    {
//        return strtolower(__CLASS__);
//    }
//}
//
//$admin = new Admin();
//
//$admin->setUsername('Balthazar');
//
//echo $admin->getUsername();
//
//echo $admin->stateYourRoll();



//****************Task Interfaces the next level of abstraction

//class User {
//    protected $username;
//
//    public function setUser($user){
//
//        $this->username = $user;
//
//    }
//
//    public function getUser(){
//        return $this->username;
//    }
//}
//
//interface Author{
//
//
//    public function setAuthorPrivileges($array);
//
//    public function getAuthorPrivileges();
//}
//
//interface Editor{
//    public function setEditorPrivileges($array);
//
//    public function getEditorPrivileges();
//}
//
//class AuthorEditor extends User implements Author, Editor{
//
//    private $authorPrivilegesArray = array();
//    private $editorPrivilegesArray = array();
//
//    public function setAuthorPrivileges($array)
//    {
//        $this->authorPrivilegesArray = $array;
//    }
//
//    public function getAuthorPrivileges()
//    {
//        return $this->authorPrivilegesArray;
//    }
//
//    public function setEditorPrivileges($array)
//    {
//        $this->editorPrivilegesArray = $array;
//    }
//
//    public function getEditorPrivileges()
//    {
//        return $this->editorPrivilegesArray;
//    }
//}
//
//$user = new AuthorEditor();
//$user->setUser('Balthazar');
//$user->setAuthorPrivileges(array("add text", "add punctuation"));
//$user->setEditorPrivileges(array("edit text", "edit punctuation"));
//
//$username = $user->getUser();
//$userPrivileges = array_merge($user->getAuthorPrivileges(),
//    $user->getEditorPrivileges());
//
//echo $username . ' has the following  privileges: ';
//
//foreach ($userPrivileges as $privilege){
//    echo "{$privilege},";
//}
//echo '.';


//****************Task Polymorphism in PHP

//abstract class User {
//    protected $scores = 0;
//    protected $numberOfArticles = 0;
//
//    public function setNumberOfArticles($int){
//        $noa = (int)$int;
//        $this->numberOfArticles =$noa;
//    }
//    public function getNumberOfArticles(){
//        return $this->numberOfArticles;
//    }
//
//    abstract public function calcScores();
//}
//
//class Author extends User{
//
//    public function calcScores()
//    {
//       $calc = $this->numberOfArticles;
//
//        return $this->scores =$calc * 10 + 20;
//    }
//
//}
//
//class Editor extends User{
//
//    public function calcScores()
//    {
//        $calc = $this->numberOfArticles;
//
//        return $this->scores = $calc * 6 + 15;
//    }
//
//}
//
//$author = new Author();
//$author->setNumberOfArticles(8);
//
//echo $author->calcScores();
//
//$editor = new Editor();
//$editor->setNumberOfArticles(15);
//
//echo $editor->calcScores();

//****************Task Type hinting

//interface User {
//    public function setUsername($username);
//    public function getUsername();
//
//    public function setGender($gender);
//    public function getGender();
//}
//
//class Commentator implements User {
//    private $username = '';
//    private $gender = '';
//
//    public function setUsername($username){
//        $this->username = (is_string($username))? $username : 'N/A';
//    }
//
//    public function getUsername(){
//        return $this->username;
//    }
//
//    public function setGender($gender){
//        $genderArray = array('female', 'male', 'other');
//
//        if (in_array($gender, $genderArray)){
//            $this->gender = $gender;
//        }
//    }
//
//    public function  getGender(){
//        return $this->gender;
//    }
//
//
//
//}
//
//function addMrOrMrsToUsername(User $user){
//    $userName = $user->getUsername();
//    $userGender = $user->getGender();
//
//    if($userGender === 'female'){
//        return 'Mrs. ' . $userName;
//    }
//    elseif ($userGender === 'male'){
//        return "Mr. " . $userName;
//    }
//
//    return $userName;
//}
//
//
//$user = new Commentator();
//$user->setUsername("Jane");
//$user->setGender("female");
//echo addMrOrMrsToUsername($user);
//echo "<br>";
//$user1 = new Commentator();
//$user1->setUsername("John");
//$user1->setGender("male");
//echo addMrOrMrsToUsername($user1);

//****************Task Utility Classes STATIC (improvisation)

//class Utilis {
//    static public function redirect($url){
//        header('Location: $url');
//        exit;
//    }
//}
//
//Utilis::redirect("http://www.google.com");

//****************Task Traits and code inclusion

//trait Writing {
//    abstract function writeContent();
//}
//
//interface  User {
//
//}
//
//class Author implements User {
//    use Writing;
//
//    public function writeContent() {
//        echo 'Author, please start typing an article';
//    }
//}
//
//class Commentator implements User {
//    use Writing;
//
//    public function writeContent(){
//        echo 'Commentator, please start typing your comment';
//    }
//}
//
//class Viewer implements User {
//
//}
//
//$author = new Author();
//$author->writeContent();
//
//$comm = new Commentator();
//$comm->writeContent();

//*****************Task Dependency injection

//class  Article {
//
//    protected $title;
//    protected $author;
//
//    public function __construct($tit, $aut) {
//
//        $this->title = $tit;
//        $this->author = $aut;
//
//    }
//
//    public function getTitle() {
//        return $this->title;
//    }
//
//    public function getAuthor() {
//        return $this->author;
//    }
//
//
//}
//
//class Author {
//
//    protected $name;
//
//    public function setName($name) {
//
//        $this->name = $name;
//
//    }
//
//    public function getName() {
//        return $this->name;
//    }
//
//}
//
//$aut = new Author();
//
//$aut->setName('Jerry');
//$tit = 'To PHP and Beyond';
//
//$art = new Article($tit, $aut);
//
//echo $art->getTitle() . ' by ' .$art->getAuthor()->getName();

//*****************Task Exception

//class User {
//
//    private $name;
//    private $age;
//
//
//    public function setName($name) {
//
//        $name = trim($name);
//
//        if(strlen($name) < 3) {
//            throw new Exception('The name should be at least 3 characters long');
//        }
//
//        $this->name = $name;
//
//
//    }
//
//    public function setAge($age) {
//
//        $age = (int)$age;
//
//        if($age < 1) {
//            throw new Exception('The age cannot be zero or less.');
//        }
//
//        $this->age = $age;
//
//    }
//
//    public function getName() {
//
//        return $this->name;
//
//    }
//
//    public function getAge() {
//        return $this->age;
//    }
//}
//
//$dataForUsers = array(
//    array("Ben",4),
//    array("Eva",28),
//    array("li",29),
//    array("Catie","not yet born"),
//    array("Sue",1.5)
//);
//
//foreach($dataForUsers as $data => $value) {
//
//    try {
//
//        $user = new User();
//
//        $user -> setName($value[0]);
//        $user -> setAge($value[1]);
//        echo $user -> getName() . " is " . $user -> getAge() . " years old. <br/>";
//    }
//
//    catch (Exception $e) {
//        echo "Error: " . $e -> getMessage() . " in the file: " . $e -> getFile() . " on line: " . $e -> getLine() . "<hr />";
//    }
//}
