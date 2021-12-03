<?php
    //Inclut et execute le fichier Modele.php
    require 'model/Modele.php';

    $action=$_GET['action'];
    switch($action){
        case "validConnect":
            $login=$_POST['login'];
            $pwd=$_POST['pswd'];
            //Utilise la méthode de la classe Modele.php
            $user=dbModele::testLog($login,$pwd);
            
            if (is_array($user)==true){
                $_SESSION['erreur']=false;
                $_SESSION['connect']=true;
                $_SESSION['users_name']=$user['users_name'];
                $_SESSION['users_fname']=$user['users_fname'];
                $_SESSION['status']=$user['status'];
                header('Location: index.php');
            }
            else{
                $_SESSION['erreur']=true;
                header('Location: index.php');
            }
        break;
    }
?>