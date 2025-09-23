<?php

require_once 'conf.php';

class userdb {

    // Method to add a user
    public function addUser($conf, $fullname, $email, $password, $authenticationCode) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        try{
            $db = new PDO("mysql:host={$conf['db_host']};dbname={$conf['db_name']}", $conf['db_user'], $conf['db_pass']);
            $stmt = $db->prepare("INSERT INTO users (name, email, password, activation_id) VALUES (:fullname, :email, :password, :authentication_code)");
            $stmt->bindParam(':fullname', $fullname);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashed_password);
            $stmt->bindParam(':authentication_code', $authenticationCode);
            $stmt->execute();
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        
    }

    // Method to get all users
    public function getUsers() {
        return $this->users;
    }
}