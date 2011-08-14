<?php

require('Database.php');

class User
{

    private $username;
    private $password;
    private $name;
    private $email;
    private $genre;
    private $db;
    private $data;


    function __construct($u, $p, $n, $e, $g)
    {
        $this->username = $u;
        $this->password = $p;
        /* $this->name = $n;
      $this->email = $e;
      $this->genre = $g;*/
        $this->db=new Database();
    }

    function create() {
        $this->db->connect();
        if( $this->user_exists($this->username)) {


            $this->data = compact($this->username,$this->password,$this->name,$this->email,$this->genre);
            $this->db->insert('bla',$this->data); }
        else {
            echo 'User already exists';
        }
    }

    function login() {
        $this->db->connect();
        $this->query = "SELECT username from user where username='$username' and password='$password'";
        $this->result =  $this->db->query($this->query) or die('error');

        $this->row = mysql_fetch_assoc($this->result);
        if(mysql_num_rows($this->result)) {
            echo "login autorizado";
        }
        else {
            echo "erro";
        }


    }

    function logout() {

    }

    function user_exists($user) {
        $this->query = "SELECT * FROM user where username = '$user'";
        $this->result = $this->db->query($this->query) or die ('error');

        $this->row = mysql_fetch_assoc($this->result);
        if(mysql_num_rows($this->result)) {
            $errMsg = 'Username exists';
        }
    }
}