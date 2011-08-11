<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajrpc
 * Date: 7/23/11
 * Time: 18:01
 * To change this template use File | Settings | File Templates.
 */

//===============================================
// Debug
//===============================================
ini_set('display_errors','On');
error_reporting(E_ALL);

define('LOCALPATH','/Applications/MAMP/htdocs/aceitamos/');
define('WEBPATH','http://localhost/aceitamos/');

require_once(LOCALPATH. 'core.php');

?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />

        <LINK REL=StyleSheet HREF="<?php echo WEBPATH.'css/style.css'; ?>" TYPE="text/css" MEDIA=screen>

    <title>aceitamos - listas de casamento</title>


    </head>
    <body>