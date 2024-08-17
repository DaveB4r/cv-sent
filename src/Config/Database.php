<?php

namespace App\Config;

use PDO;
use PDOException;

class Database
{
  private static $instance = null;
  private $host = 'localhost';
  private $db_name = 'cv_sent';
  private $username = 'root';
  private $password = '';
  public $conn;

  public function __construct() {
    $this->conn = null;
    $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password);
    $this->conn->exec("set names utf8");
    return $this->conn;
  }

  public static function getConnection()
  {
    try {
      if(self::$instance  === null) {
        self::$instance = new Database();
      }
    } catch (PDOException $exception) {
      echo "Connection error: {$exception->getMessage()}";
    }

    return self::$instance;
  }
}
