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
    private $table = "user";
    private $dados = array('user' => 'username',
                            'pass'=>'password');
    



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

 function login($user,$pass) {
        $this->db->connect();
        if($this->validate($user,$pass)) {

        }
     else {
return false;
     }
    }

    function validate($user,$pass) {
       // $this->db->connect();
        $sql = "SELECT COUNT(*) FROM `{$this->table}`WHERE `{$this->dados['user']}`='{$user}' and `{$this->dados['pass']}`='{$pass}'";
        $query=mysql_query($sql);
        if($query) {
            $result = mysql_result($query,0);
        }
        else {
        return false;
        }

        return ($result==1) ? true : false;
    }


    function logout() {

    }

   /* function user_exists($user) {
        $this->query = "SELECT * FROM user where username = '$user'";
        $this->result = $this->db->query($this->query) or die ('error');

        $this->row = mysql_fetch_assoc($this->result);
        if(mysql_num_rows($this->result)) {
            $errMsg = 'Username exists';
        }
    }*/
}
