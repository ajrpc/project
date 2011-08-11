<?php

require_once(LOCALPATH.'config/config.php');

class Database {

    private $link;
   private $database;
    private $result;

    public function connect() {
        $this->link=mysql_connect(HOSTNAME,DBUSER,DBPASS) or die(mysql_error());
        $this->database=mysql_select_db(DBNAME) or die(mysql_error());
    }

    public function disconnect() {
        mysql_close($this->link);
    }

    public function query($query) {
    $this->result = mysql_query($query);
        
     if (!$this->result) {
        $message  = 'Invalid query: ' . mysql_error() . "\n";
        $message .= 'Whole query: ' . $query;
        die($message);
         }

    }

    public function insert($table,$data) {

    return $this->query($data);
    }

}