<?php

namespace App\Controllers;

use App\Config\Database;
use App\Controller;
use App\Models\Job;
use PDO;

class JobController extends Controller
{
  private $db, $job;

  public function __construct()
  {
    $this->db = Database::getConnection();
    $this->job = new Job($this->db);
  }

  public function index()
  {
    session_start();
    if(empty($_SESSION)) header("Location: /signin");
    $this->render("layout/header");
    $this->render("layout/navbar");
    $this->render("Job/index");
    $this->render("layout/footer");
  }

  public function insert()
  {

  }

}