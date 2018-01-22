<?php

class Person {
    const AVG_LIFE_SPAN = 79;

    protected $firsName;
    protected $lastName;
    protected $yearBorn;

    function __construct($tempFirst = '', $tempLast = '', $tempBorn = ''){
        $this->firsName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearBorn = $tempBorn;
    }

    public function getFirstName(){
        return $this->firsName.PHP_EOL;
    }

    public function setFirstName($tempName){
        $this->firsName = $tempName;
    }

    protected function getFullName(){
        return $this->firsName.''.$this->lastName.PHP_EOL;
    }

}


class Author extends Person {

    protected $penName = 'Mark Twain';

    public function getPenName(){
        return $this->penName.PHP_EOL;
    }

    public function getCompleteName(){
        return $this->firsName.' '. $this->lastName.' aka '.$this->penName.PHP_EOL;
    }
}


$myObject = new Person('Samuel Langhorne', 'Clemens', 1899);
