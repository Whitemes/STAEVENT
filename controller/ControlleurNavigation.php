<?php
require 'model/Modele.php';
$action=$_GET['action'];
switch($action){
    case "apropos":
        apropos();
    break;
    case "deconnexion":
        $_SESSION['connect']=false;
        session_destroy();
        header('Location: index.php');
    break;
}
?>