<?php
    session_start();
    require 'controller/Controlleur.php';
    if(isset($_SESSION['connect'])){
        if(isset($_GET['nav'])){
            switch($_GET['nav']){
                case 'Nav':
                    include 'controller/ControlleurNavigation.php';
                    break;
                case 'Evenement':
                    include 'controller/ControlleurEvenement.php';
                    break;
            }
        }else{
            accueil();
        }
    }
    if(isset($_GET['ctl'])){
        include 'controller/ControlleurAuthentification.php';
    }
    if(!isset($_SESSION['connect'])){
        if(isset($_SESSION['erreur'])){
            rejet();
        }else{
            authentification();
        } 
    }
?>