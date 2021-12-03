<?php
    class database
    {
        private static $host = "localhost";
        private static $db_name = "staevent";
        private static $username = "root";
        private static $password = "";
        private static $conn;

        //Constructeur de la classe database
        private function __construct(){}

        //Connection à la database avec PDO
        static function pdoConnect()
        {
            //Essaye de se connecter en PDO à la BDD
            try
            {
                //Si la connection est inexistante
                if(!isset(self::$conn))
                {
                    self::$conn = new PDO("mysql:host=".self::$host.";dbname=".self::$db_name, self::$username, self::$password);
                    self::$conn-> query('SET NAMES utf8');
                    self::$conn -> query('SET CHARACTER SET utf8');
                }
                //Renvoi la connection à la BDD
                return self::$conn;
            }
            //Récupere l'exception si la connection n'est pas abouti
            catch(PDOException $ex)
            {
                echo "Connection Error -->> ",$ex->getMessage();
                echo "<br>Error Code -->> ",$ex->getCode();
                echo "<br>Error occur in File -->> ",$ex->getFile();
                echo "<br>Error occur on Line no -->> ",$ex->getLine();

                //ferme la connection PDO avec la BDD
                self::$conn = null; // close connection in PDO
            }
        }
    }
?>