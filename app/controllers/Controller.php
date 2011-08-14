<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajrpc
 * Date: 7/24/11
 * Time: 02:07 
 * To change this template use File | Settings | File Templates.
 */


class Controller {

  function __construct($request,$request2) {

   if($request=="user" && $request2=="add") {

       $this->user= $_POST['username'];

   }else {
       view($request,NULL);
   }
     //view($request,NULL);
}

}
