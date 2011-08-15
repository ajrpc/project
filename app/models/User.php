<?php

//require('Database.php');


class User
{

    private $username;
    private $password;
    private $name;
    private $email;
    private $genre;
    private $db;
    private $data;
    private $table = "User";
    private $dados = array('user' => 'username',
                            'pass'=>'password');

    function __construct($u, $p)
    {
        $this->username = $u;
        $this->password = $p;
       /* $this->name = $n;
      $this->email = $e;
      $this->genre = $g;*/
       // $this->db=new Database();
    }

    function create() {
      //  $this->db->connect();
        if( $this->user_exists($this->username)) {


            $this->data = compact($this->username,$this->password,$this->name,$this->email,$this->genre);
            $this->db->insert('bla',$this->data); }
        else {
            echo 'User already exists';
        }
    }

    function login() {
       // $this->db->connect();

        if($this->validate($this->username,$this->password)) {

        if(!isset($_SESSION)) {
            session_start();
            $_SESSION['auth']=$this->username;
        }
            return true;
        }
        else {
            return false;
        }
    }

    function validate($user,$pass) {
       // $this->db->connect();
        $sql = "SELECT COUNT(*) AS result FROM `{$this->table}`WHERE `{$this->dados['user']}`='{$user}' and `{$this->dados['pass']}`='{$pass}'";
        $query=mysql_query($sql) or die(mysql_error());
        if($query) {
            $result = mysql_result($query,0,result);
            mysql_free_result($query);
        }

        else {
            echo "erro";
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
