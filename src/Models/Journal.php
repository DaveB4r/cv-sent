<?php

namespace App\Models;

class Journal
{
  public $name, $publishedYear;

  public function __construct($name, $publishedYear)
  {
    $this->name = $name;
    $this->publishedYear = $publishedYear;
  }
}