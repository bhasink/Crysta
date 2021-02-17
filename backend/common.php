<?php
ob_start();
if (!empty($_POST))
{
	reset($_POST);
	while (list($k,$v) = each($_POST))
	{
		${$k} = $v;
	}
}
if (!empty($_GET))
{
	reset($_GET);
	while (list($k,$v) = each($_GET))
	{
		${$k} = $v;
	}
}
if (!empty($_SERVER))
{
	reset($_SERVER);
	while (list($k,$v) = each($_SERVER))
	{
		${$k} = $v;
	}
}
if (!empty($_COOKIE))
{
	reset($_COOKIE);
	while (list($k,$v) = each($_COOKIE))
	{
		${$k} = $v;
	}
}
if (!empty($_SESSION))
{
	reset($_SESSION);
	while (list($k,$v) = each($_SESSION))
	{
		${$k} = $v;
	}
}
if (!empty($_FILES))
{
	//reset($_FILES);
//	while (list($k,$v) = each($_FILES))
//	{
//		${$k} = $v['tmp_name'];
//		${$k._name} = $v['name'];
//		${$k._type} = $v['type'];
//		${$k._size} = $v['size'];
//		${$k._error} = $v['error'];
//	}
}

class Database {
    private static $db;
    private $connection;
	private $dbhost = "localhost";
	private $dbuser = "qprgjmajdd";
	private $dbpass = "hbm2YFApCn";
	private $dbname = "qprgjmajdd";
	
    private function __construct() {
        $this->connection = new MySQLi($this->dbhost,$this->dbuser,$this->dbpass,$this->dbname);
    }
	
    function __destruct() {
        $this->connection->close();
    }

    public static function getConnection() {
        if (self::$db == null) {
            self::$db = new Database();
        }
        return self::$db->connection;
    }
}
/*
class Database
        {
	// Store the single instance of Database
	private static $m_pInstance;
	
	private $dbhost = "localhost";
	private $dbuser = "root";
	private $dbpass = "";
	private $dbname = "bigestcheersever";

	// Private constructor to limit object instantiation to within the class
	private function __construct() 
	{
		mysql_connect($this->dbhost,$this->dbuser,$this->dbpass);
		mysql_select_db($this->dbname);
	}

	// Getter method for creating/returning the single instance of this class
	public static function getInstance()
	{
		if (!self::$m_pInstance)
		{
			self::$m_pInstance = new Database();
		}
		return self::$m_pInstance;
	}
 }*/
	// Online
//Global $con;
//$link1 = mysql_connect($dbhost,$dbuser,$dbpass) or mysql_error("Not able to connect with MySql Server");
//mysql_select_db($dbname,$link1) or mysql_error("Not able to connect with Database");
//echo ABSPATH;
//die(ABSPATH)
?>