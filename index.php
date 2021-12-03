<?php
    //Demarrage d'une nouvelle session
    session_start();
    
    //Inclut et execute le fichier Controlleur.php
    require 'controller/Controlleur.php';
    if(isset($_SESSION['connect']))
    {
        if(isset($_GET['nav']))
        {
            switch($_GET['nav'])
            {
                case 'Nav':
                    navigation();
                    break;
                case 'Evenement':
                    evenement();
                    break;
            }
        }else
        {
            accueil();
        }
    }

    //Si la variable ctl dans l'url existe
    if(isset($_GET['ctl']))
    {
        //Appel la fonction authentification du fichier ControlleurAuthentification.php
        authentification();
    }

    //Si la variable de session connect est fausse
    if(!isset($_SESSION['connect']))
    {
        if(isset($_SESSION['erreur']))
        {
            //Appel la fonction rejet du fichier ControlleurAuthentification.php
            rejet();
        }else
        {
            //Appel la fonction formulaire_auth du fichier ControlleurAuthentification.php
            formulaire_auth();
        } 
    }
?>