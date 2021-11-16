<?php
    session_start();
    include "view/entete.php";
    if(isset($_SESSION['connect'])){
        include "view/nav2.php";
        include "view/contenu/bienvenue.php";
    }
    if(isset($_GET['ctl'])){
        switch($_GET['ctl']){
            case 'connexion':
            include 'controller/ctl.php';
            break;
        }
    }
    if(!isset($_SESSION['connect'])){
        include "view/contenu/form.php";
    }
    include "view/footer.php";
?>