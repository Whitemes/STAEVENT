<?php

    //Inclut et execute le fichier Modele.php
    require 'model/Modele.php';

    //Recupère la variable action dans l'url
    $action=$_GET['action'];
    switch($action){
        case "apropos":
            apropos();
        break;
        case "ajout":
            ajout();
        break;
        case "deconnexion":
            $_SESSION['connect']=false;

            //Destruction de la session
            session_destroy();

            //Redirection vers l'index
            header('Location: index.php');
        break;
    }
?>