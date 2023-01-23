
<?php
 
 class DataBaseConnector {
                  
    private static $obj;
    private static $pdo;
    
private $servername = "localhost";
private $dbusername = "aryan";
private $dbpassword = "aryan";
private $dbname = "mysql";


     private final function __construct() 
     {


        self::$pdo = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->dbusername, $this->dbpassword);

        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connection established";


     }
      
     public static function getConnect() {

         if (!isset(self::$obj)) 
         {

            self::$obj = new DataBaseConnector();
         
        }
          
         return self::$pdo;
     }



        public static function destroy_connection()
            {
                self::$pdo=null;
            }
        



 }
  


  

 ?>