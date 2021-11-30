<?php
    class database
    {
        private static $host = "localhost";
        private static $db_name = "staevent";
        private static $username = "darkGhost";
        private static $password = "TropFORTpourToi";
        private static $conn;

        private function __construct(){}

        // connect database using PDO
        static function pdoConnect()
        {
            try
            {
                if(!isset(self::$conn)){
                    self::$conn = new PDO("mysql:host=".self::$host.";dbname=".self::$db_name, self::$username, self::$password);
                    self::$conn-> query('SET NAMES utf8');
                    self::$conn -> query('SET CHARACTER SET utf8');
                }
                return self::$conn;
            }
            catch(PDOException $ex)
            {
                echo "Connection Error -->> ",$ex->getMessage();
                echo "<br>Error Code -->> ",$ex->getCode();
                echo "<br>Error occur in File -->> ",$ex->getFile();
                echo "<br>Error occur on Line no -->> ",$ex->getLine();

                self::$conn = null; // close connection in PDO
            }
        }
    }
?>