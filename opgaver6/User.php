<?php

class User{
    //Properties
    private $id;
    private $username;
    private $password;
    private $firstname;
    private $lastname;

    public function __construct($id, $username = null, $password = '', $firstname = '', $lastname = ''){
        
        $this->set_id($id);
        $this->set_username($username);
        $this->set_password($password);
   
    }

    public function print_id(){
        echo 'My ID is: '.$this->id;
    }

    
    public function print_username(){
        echo 'My Username is: '.$this->username;
    }

    //Access Modifier
    // - public
    // - private
    // - protected

    //Accessors & Mutators / Getters & Setters
    
    // Accessor / Getter
    public function get_id(){
        return $this->id;
    }

    // Mutator / Setter
    public function set_id($id){
        $this->id = (int) $id;
    }


    public function get_username(){
        return $this->username; 
    }

    public function set_username($username){
        $this->username = $username;
    }

    public function get_password(){
        return $this->password;
    }

    public function set_password($password){
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

}