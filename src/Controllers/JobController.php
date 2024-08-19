<?php

namespace App\Controllers;

use App\Config\Database;
use App\Controller;
use App\Models\Job;
use App\Models\Platform;
use App\Models\Stack;
use PDO;

class JobController extends Controller
{
  private $db, $job, $platform, $stack;

  public function __construct()
  {
    $this->db = Database::getConnection();
    $this->job = new Job($this->db);
    $this->platform = new Platform($this->db);
    $this->stack = new Stack($this->db);
  }

  public function index()
  {
    session_start();
    if (empty($_SESSION)) header("Location: /signin");

    $platforms = $this->platform->selectAll();
    $stacks = $this->stack->selectAll();
    $canAddJob = $platforms->rowCount() === 0 || $stacks->rowCount() === 0 ? 'disabled' : '';
    $data = [
      "platforms" => $platforms,
      "stacks" => $stacks,

    ];

    $this->render("layout/header");
    $this->render("layout/navbar");
    $this->render("Job/index", ["canAddJob" => $canAddJob]);
    $this->render("Job/Modals/createJob");
    $this->render("Job/Modals/platformAdmin");
    $this->render("Job/Modals/stackAdmin");
    $this->render("layout/footer");
  }

  public function insert() {}
}
