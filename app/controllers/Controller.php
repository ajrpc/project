<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajrpc
 * Date: 7/24/11
 * Time: 02:07
 * To change this template use File | Settings | File Templates.
 */

require_once LOCALPATH.'app/models/Database.php';
require_once LOCALPATH.'app/models/User.php';

class Controller {

    private $db;


    function __construct($request,$request2) {
        $this->db=new Database();
        $this->db->connect();
        $this->user= $_POST['username'];
        $this->pass= $_POST['password'];
       
        $newuser = new User($this->user,$this->pass);



        if($request=="user" && $request2=="add") {



        }

        if($request=="user" && $request2=="login") {

            if($newuser->login()) {
                echo "logado com sucesso";
            }
            else {
                echo "nao logado";
            }

        }
        else {
            view($request,NULL);
        }
        //view($request,NULL);
    }

}
