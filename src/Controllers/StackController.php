<?php

namespace App\Controllers;

use App\Config\Database;
use App\Controller;
use App\Models\Stack;
use PDO;

class StackController extends Controller
{
  private $db, $stack;

  public function __construct()
  {
    $this->db = Database::getConnection();
    $this->stack = new Stack($this->db);
  }

  public function index()
  {
    session_start();
    if (empty($_SESSION)) header("Location: /signin");

    $stacks = $this->stack->selectAll();
    $this->render("layout/header");
    $this->render("Stack/index", ["stacks" => $stacks]);
    $this->render("layout/footer");
  }

  public function insert()
  {
    $res = [];
    $this->stack->name = $_POST["name"];
    if ($this->stack->insert()) {
      array_push($res, [
        "lastId" => $this->stack->lastId,
        "name" => $_POST["name"]
      ]);
    }
    echo json_encode($res);
  }
}
