<?php


 class UserQueries
  {
                  
    
    private static $pdo;
    private static $obj;              
     private final function __construct($conn) 
     {
        self::$pdo = $conn;

     }
      
     public static function getConnect($conn) {

         if (!isset(self::$obj)) 
         {

            self::$obj = new UserQueries($conn);
         
        }
          
         return self::$obj;
     }


        public static function fetch($sql)
        {
            $q = self::$pdo->query($sql);
            $q->setFetchMode(PDO::FETCH_ASSOC);
        return $q;
       
    }


      
        



 }
  

?>