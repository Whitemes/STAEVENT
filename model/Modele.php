<?php
    include 'database.php';
    class dbConnexionModele{
    // function getUsers($username)
    // {
    //     $database=new database();
    //     $dbh=$database->pdoConnect();

    //     $sql='SELECT status FROM users WHERE login="'.$username.'"';
        
    //     $sth=$dbh->query($sql);
    //     $ligne=$sth->fetch();
        
    //     $pdoConnect=null;
    //     $sth=null;

    //     return $ligne[0];
    // }

    static function testLog($a,$b){
        $sql = "SELECT login, pswd, users_name, users_fname from users WHERE login ='$a' AND pswd='$b'";
        $objResultat = database::pdoConnect()->query($sql);
        $tabResultat = $objResultat->fetch();
        return $tabResultat;
    }
}
?>
