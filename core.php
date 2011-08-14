<?php

//define('LOCALPATH','/Applications/MAMP/htdocs/aceitamos/');
//define('WEBPATH','http://localhost/aceitamos/');

require('app/controllers/Controller.php');
//require('app/models/User.php');
//require('app/views/');

function view($file_name,$data) {
        if( is_array($data) ) {
         extract($data);
      }
      require LOCALPATH.'app/views/' . $file_name.'.php';
    }


$request = isset($_GET['p']) ? $_GET['p'] : "main";
$request2 = isset($_GET['p2']) ? $_GET['p2'] : "";

/*$url=$request;
$url.=$request2;*/

$controller = new Controller($request,$request2);