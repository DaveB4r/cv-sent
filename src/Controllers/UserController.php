<?php

namespace App\Controllers;

use App\Config\Database;
use App\Controller;
use App\Models\User;
use PDO;

class UserController extends Controller
{
  private $db, $user;

  public function __construct() {
    $database = new Database();
    $this->db = $database->getConnection();
    $this->user = new User($this->db);
  }

  public function insert()
  {
    $this->user->username = $_POST["username"];
    $this->user->email = $_POST["email"];
    $this->user->password = $_POST["password"];
    if($this->user->insert()) header("Location: /sigin");
    else return false;
  }

  public function signUp()
  {
    $this->render("layout/header");
    $this->render("User/signUp");
    $this->render("layout/footer");
  }

  public function signIn()
  {
    $this->render("layout/header");
    $this->render("User/signIn");
    $this->render("layout/footer");
  }

  public function login()
  {
    $this->user->email = $_POST["email"];
    $stmt = $this->user->selectOne();
    if($stmt->rowCount() > 0) {
      while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        if(password_verify($_POST["password"], $row["password"])) {
          session_start();
          $_SESSION["username"] = $row["username"];
          $_SESSION["email"] = $row["email"];
          $_SESSION["id"] = $row["id"];
          return header("Location: /");
        }else{
          echo "Access Denied";
          return false;
        }
      }
    }
  }

  public function logout()
  {
    session_start();
    $this->user->username = "";
    $this->user->email = "";
    $this->user->password = "";
    $this->user->id = "";
    $_SESSION = [];
    session_destroy();
    return header("Location: /signin");
  }
}