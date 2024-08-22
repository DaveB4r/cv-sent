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
    $jobs = $this->job->selectJoinPlatforms();
    $canAddJob = $platforms->rowCount() === 0 || $stacks->rowCount() === 0 ? 'disabled' : '';

    $this->render("layout/header");
    $this->render("layout/navbar");
    $this->render("Job/index", [
      "canAddJob" => $canAddJob,
      "jobs" => $jobs
    ]);
    $this->render("Job/Modals/createJob", [
      "platforms" => $platforms,
      "stacks" => $stacks,
    ]);
    $this->render("Job/Modals/platformAdmin");
    $this->render("Job/Modals/stackAdmin");
    $this->render("layout/footer");
  }

  public function info() 
  {
    session_start();
    if (empty($_SESSION)) header("Location: /signin");
    $jobs = $this->job->selectJoinPlatforms();
    $this->render("layout/header");
    $this->render("Job/info", ["jobs" => $jobs]);
    $this->render("layout/footer");
  }

  public function insert() 
  {
    session_start();
    $res = [];
    $this->job->user_id = $_SESSION["id"];
    $this->job->company = $_POST["company"];
    $this->job->platform_id = $_POST["platform_id"];
    $this->job->stage = $_POST["stage"];
    $this->job->day_applied = $_POST["day_applied"];
    $this->job->url = $_POST["url"];
    $this->job->stacks = implode(", ",$_POST["stacks"]);
    if($this->job->insert()) {
      array_push($res, [
        "lastId" => $this->job->lastId,
        "name" => $_POST["company"]
      ]);
    }
    echo json_encode($res);
  }
}
