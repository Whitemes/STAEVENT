<?php
include "dataBasePdo.php";
class dbConnexion{

    public static function testLog($a,$b){
        $sql = "SELECT login, pswd, users_name, users_fname from users WHERE login ='$a' AND pswd='$b'";
        $objResultat = dataBasePdo::getPdo()->query($sql);
        $tabResultat = $objResultat->fetch();
        return $tabResultat;
    }
}
?>