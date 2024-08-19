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

  public function insert()
  {
    $res = [];
    $this->platform->name = $_POST["name"];
    if($this->platform->insert()) {
      array_push($res,["lastId" => $this->platform->lastId]);
      array_push($res, ["name" => $_POST["name"]]);
    }
    echo json_encode($res);
  }
}
