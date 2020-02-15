<?php 

class Osoba {
    public $jmbg;

    public function getJmbg() {
        echo $this->jmbg;
    }
}

trait Student {
    public $brojIndexa;

    public function getBrojIndexa() {
        echo $this->brojIndexa;
    }
}

trait Stranac {
    public $brojPasosa;

    public function getBrojPassosa() {
        echo $this->brojPasosa;
    }

    public function getJmbg() {
        echo 'Stranci nemaju JMBG';
    }
}

trait Zaposleni {
    public $godineStaza;
    public $plata;

    public function getPlata() {
        echo $this->plata;
    }

    public function getGodineStaza() {
        echo $this->godineStaza;
    }
}

class Radnik extends Osoba {
    use Zaposleni;
}

$cRadnik = new Radnik();

$get_methods = get_class_methods($cRadnik);


var_dump($get_methods);

// Definisanje vandrednog studenta koji mora da plati skolarinu sa tim i dodajemo metodu u izvedenu klasu Student getSkolarina
class VandredniStudent extends Osoba {
    use Student, Zaposleni;

    public $skolarina;

    public function getSkolarina() {
        echo $this->skolarina;
    }
}

// Volonter koji ne radi za platu vec volontira za bolje sutra
class Volonter extends Osoba {
    use Zaposleni, Student;
    public function getPlata() {
        echo 'Volontira';
    }
}

// Trait overriduje metode iz bazne klase
class StraniStudent extends Osoba {
    use Student, Stranac;
}


$vandredniStudent = new VandredniStudent();
$volonter = new Volonter();
$straniStudent = new StraniStudent();

var_dump(get_class_methods($vandredniStudent));
var_dump(get_class_methods($volonter));
var_dump(get_class_methods($straniStudent));