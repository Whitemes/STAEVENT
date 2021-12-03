<?php

    //Inclut et execute le fichier database.php
    include 'database.php';

    class dbModele
    {
        //Fonction permettant de vérifier les identifiants du formulaire avec la BDD
        static function testLog($login,$password)
        {
            //Requête sécurisé avec l'ajout des parametres après la construction de la requête
            $sql = "SELECT login, pswd, users_name, users_fname, status from users WHERE login = :a AND pswd= :b";
            $objResultat= database::pdoConnect()->prepare($sql);
            $objResultat->bindParam('a',$login);
            $objResultat->bindParam('b',$password);
            $objResultat->execute();
            $tabResultat=$objResultat->fetch();
            return $tabResultat;
        }

        //Fonction permettant de récuperer la liste des événements
        static function getListeEvenement()
        {
            $sql = "SELECT * FROM events";
            $objResultat = database::pdoConnect()->query($sql);
            $tabResultat = $objResultat->fetchAll();
            return $tabResultat;
        }   

        //fonction permmettant d'ajouter un événement
        static function ajouterEvenement($name,$description,$date,$organisator)
        {
            $sql = "INSERT INTO events (event_id, event_name, event_description, event_date,event_organisator) VALUES (NULL, :w, :x, :y, :z)";
            $result = database::pdoConnect()->prepare($sql);
            $result -> bindParam(':w',$name);
            $result -> bindParam(':x',$description);
            $result -> bindParam(':y',$date);
            $result -> bindParam(':z',$organisator);
            $result -> execute();  
            
        }
    }
?>
