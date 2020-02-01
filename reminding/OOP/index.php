<?php 
    class User {
        //proterities
        public $username;
        protected $email; // private access modifier
        public $role = 'member';

        //methods
        public function __construct($username , $email) {
            $this->username = $username;
            $this->email = $email;
        }

        public function addFriend() {
            return "$this->username added a new friend";
        }

        public function sendMessage() {
            return "$this->email sent a new message";
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            if(strpos($email, '@') > -1) {
                $this->email = $email;
            }
        }
    }

    class AdminUser extends User {
        public $level;
        public $role = 'admin';

        public function __construct($username, $email, $level) {
            $this->level = $level;
            parent::__construct($username, $email);
        }

        public function sendMessage() {
            return "$this->email, an admin, sent a new message";
        }
    }

    $userOne = new User('Stef', 'stef@netnjinja.co.uk');
    $userTwo = new User('Nik', 'nik@netnjinja.co.uk');
    $userThree = new AdminUser('Sandvic', 'sandvic@netninja.co.uk', 5);

    var_dump($userThree);
    echo $userThree->sendMessage();

//    echo $userOne->username.'<br>';
    // echo $userOne->email.'<br>'; // if is private we can no longer do this
//    echo $userOne->addFriend().'<br>';

    // $userTwo->username = 'Covek';
    // $userTwo->email = 'covek@ryu.com';
//    echo $userTwo->username.'<br>';
    // echo $userTwo->email.'<br>';
//    echo $userTwo->addFriend().'<br>';
    // echo 'This is class of: '.get_class($userOne); // check what is class
    // Mehtod that checks few thing about classes that u inherti from otherelse code
//    var_dump(get_class_vars('User'));  // gets properties
//    var_dump(get_class_methods('User')); // gets methods
    echo '<br><br>';
//    $userOne->setEmail('test@gmail.com');
//    echo  $userOne->getEmail().'<br>';

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