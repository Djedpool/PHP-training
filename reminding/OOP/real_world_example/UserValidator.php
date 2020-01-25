<?php
/**
 * Created by PhpStorm.
 * User: Stef
 * Date: 1/25/2020
 * Time: 8:08 PM
 */

// create user validator class to handle validation --DONE--
// constructor which takes in POST data from form
// check required "fields to check" are present in the data
// create methods to validate individual fields
// -- a method to validate a username
// -- a method to validate an email
// return an error array once all checks are done

class UserValidator {

    private $data;
    private $errors = [];
    private static $fields = ['username', 'email'];

    public function __construct($post_data){

        $this->data = $post_data;

    }

    public function validateForm() {
        foreach (self::$fields as $field) {
            if(!array_key_exists($field, $this->data)) {
                trigger_error("$field is not present in data");
                return;
            }
        }

        $this->validateUsername();
        $this->validateEmail();

        return $this->errors;
    }

    private function validateUsername() {
        $val = trim($this->data['username']);

        if(empty($val)) {
            $this->addError('username', 'username can not be empty');
        } else {
            if(!preg_match('/^[a-zA-Z0-9]{6,12}$/', $val)){
                $this->addError('username', 'Username must be 6-12 chars & alphanumeric');
            }
        }
    }

    private function validateEmail() {
        $val = trim($this->data['email']);

        if(empty($val)) {
            $this->addError('email', 'email can not be empty');
        } else {
            if(!filter_var($val, FILTER_VALIDATE_EMAIL)){
                $this->addError('email', 'Email must be a valid email');
            }
        }
    }

    private function addError($key, $value){
        $this->errors[$key] = $value;
    }
}