<?php
include "model/dbConnexionClass.php";
$action=$_GET['action'];
switch($action){
    case "validConnect":
        $login=$_POST['login'];
        $pwd=$_POST['pswd'];
        $user=dbConnexion::testLog($login,$pwd);
        
        if (is_array($user)==true){
            $_SESSION['erreur']=false;
            $_SESSION['connect']=true;
            $_SESSION['users_name']=$user['users_name'];
            $_SESSION['users_fname']=$user['users_fname'];
            header('Location: index.php');
        }
        else {
            $_SESSION['erreur']=true;
            header('Location:index.php');
        }
    break;
    case "deconnexion":
        session_destroy();
        header('Location: index.php');
    break;
    }
?>