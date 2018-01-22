<?php

class User extends Dbh {

    public function getAllUsers() {

        $stmt = $this->connect()->query("SELECT * FROM users");

        while($row = $stmt->fetch()) {

            $uid = $row['uid'];
            return $uid;

        }

    }

    public function getUsersWithCountCheck() {

        $id = 1;
        $uid = 'John';

        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE id=? AND uid=?");
        $stmt->execute([$id, $uid]);

        if ($stmt->rowCount()) {

            while ($row = $stmt->fetch()){

                return $row['uid'];

            }

        }

    }

}