<?php
    //Inclut et execute le fichier Modele.php
    require 'model/Modele.php';

    $action=$_GET['action'];
    switch($action){
        case "lister":
            //Utilise la méthode de la classe Modele.php
            $liste=dbModele::getListeEvenement();
            if($_SESSION['status']=="admin"){
                include 'view/contenu/listeEvenementadmin.php';
            }else{
                include 'view/contenu/listeEvenement.php';
            }
        break;
        case "validerAjout":
            if(isset($_POST['valider'])){
                $eve = $_POST['eve'];
                $des = $_POST['des'];
                $date = $_POST['date'];
                $org = $_POST['org'];
                //Utilise la méthode de la classe Modele.php
                dbModele::ajouterEvenement($eve,$des,$date,$org);
                header('Location: index.php?nav=Evenement&action=lister');
            }
            break;
        break;
    }
?>