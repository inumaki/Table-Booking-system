<?php
class Database
{	
	private $servername = "localhost";
	private $username = "aryan";
	private $password = "aryan";
	private $dbname = "mysql";
    private static $obj,$connObj;
    public final function __construct()
    {
        self::$obj = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if(self::$obj->connect_error) 
		{
            self::$connObj=self::$obj->connect_error;
        }
		else
		{
            self::$connObj = self::$obj;
        }
    }
    public static function getConnect()
    {
        if (!isset(self::$obj))
		{
            self::$obj = new Database();
        }
        return self::$connObj;
    }
}


?>