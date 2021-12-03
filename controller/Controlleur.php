<?php
    //Vues 
    function formulaire_auth()
    {
        require 'view/contenu/formulaire.php';
    }

    function accueil()
    {
        require 'view/contenu/bienvenue.php';
    }

    function rejet()
    {
        require 'view/contenu/rejet.php';
    }

    function apropos()
    {
        require 'view/contenu/apropos.php';
    }

    //Vues evenements
    function ajout()
    {
        require 'view/contenu/ajoutEvenement.php';
    }

    function lister()
    {
        require 'view/contenu/listeEvenement.php';
    }

    //Appels du ControlleurNavigation
    function authentification()
    {
        require 'controller/ControlleurAuthentification.php';
    }

    function evenement()
    {
        require 'controller/ControlleurEvenement.php';
    }

    function navigation()
    {
        require 'controller/ControlleurNavigation.php';
    }
?>