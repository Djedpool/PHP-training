<?php 
    class User {
        //proterities
        public $username;
        private $email; // pRivate access modifier

        //methods
        public function __construct($username , $email) {
            $this->username = $username;
            $this->email = $email;
        }

        public function addFriend() {
            return "$this->username added a new friend";
        }
    }

    $userOne = new User('Stef', 'stef@netnjinja.co.uk');
    $userTwo = new User('Nik', 'nik@netnjinja.co.uk');

    echo $userOne->username.'<br>';
    // echo $userOne->email.'<br>'; // if is private we can no longer do this
    echo $userOne->addFriend().'<br>';

    // $userTwo->username = 'Covek';
    // $userTwo->email = 'covek@ryu.com';
    echo $userTwo->username.'<br>';
    // echo $userTwo->email.'<br>';
    echo $userTwo->addFriend().'<br>';
    // echo 'This is class of: '.get_class($userOne); // check what is class
    // Mehtod that checks few thing about classes that u inherti from otherelse code
    var_dump(get_class_vars('User'));  // gets properties
    var_dump(get_class_methods('User')); // gets methods
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP</title>
</head>
<body>
    
</body>
</html>