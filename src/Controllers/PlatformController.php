<?php

namespace App\Controllers;

use App\Config\Database;
use App\Controller;
use App\Models\Platform;
use PDO;

class PlatformController extends Controller
{
  private $db, $platform;

  public function __construct()
  {
    $this->db = Database::getConnection();
    $this->platform = new Platform($this->db);
  }

  public function index()
  {
    session_start();
    if (empty($_SESSION)) header("Location: /signin");

    $platforms = $this->platform->selectAll();
    $this->render("layout/header");
    $this->render("Platform/index", ["platforms" => $platforms]);
    $this->render("layout/footer");
  }

  public function insert()
  {
    $res = [];
    $this->platform->name = $_POST["name"];
    if ($this->platform->insert()) {
      array_push($res, [
        "lastId" => $this->platform->lastId,
        "name" => $_POST["name"]
      ]);
    }
    echo json_encode($res);
  }
}
