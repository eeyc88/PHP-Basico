<?php
include_once('dataBase.php');

// Define configuration
define("DB_HOST", "localhost");
define("DB_USER", "postgres");
define("DB_PASS", "postgres");
define("DB_NAME", "controlAgricola");
//define("DB_HOST", "ec2-54-243-185-132.compute-1.amazonaws.com");
//define("DB_USER", "obihwaohfkvyyt");
//define("DB_PASS", "ea5858855a8a07277db5887f17e8080c0467704a2ec10342e726c561461b5352");
//define("DB_NAME", "d3j9a66dhh4ocu");


class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
