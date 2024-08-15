<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Journal;

class HomeController extends Controller
{
  public function index()
  {
    session_start();
    if (empty($_SESSION)) header("Location: /signin");
    $this->render('layout/header');
    $this->render('layout/navbar');
    $this->render('index');
    $this->render('layout/footer');
  }
}