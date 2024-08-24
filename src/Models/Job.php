<?php

namespace App\Models;

class Job
{
  private $conn;
  private $table_name = "jobs_applied";
  public $id, $user_id, $company, $platform_id, $stage, $day_applied, $url, $stacks, $lastId;

  public function __construct($db)
  {
    $this->conn = $db->conn;
  }

  public function insert()
  {
    $query = "INSERT INTO {$this->table_name} (user_id, company, platform_id, stage, day_applied, url, stacks) VALUES (:user_id, :company, :platform_id, :stage, :day_applied, :url, :stacks)";
    $stmt = $this->conn->prepare($query);

    $this->user_id = htmlspecialchars(strip_tags($this->user_id));
    $this->company = htmlspecialchars(strip_tags($this->company));
    $this->platform_id = htmlspecialchars(strip_tags($this->platform_id));
    $this->stage = htmlspecialchars(strip_tags($this->stage));
    $this->day_applied = htmlspecialchars(strip_tags($this->day_applied));
    $this->url = htmlspecialchars(strip_tags($this->url));
    $this->stacks = htmlspecialchars(strip_tags($this->stacks));

    $stmt->bindParam(":user_id", $this->user_id);
    $stmt->bindParam(":company", $this->company);
    $stmt->bindParam(":platform_id", $this->platform_id);
    $stmt->bindParam(":stage", $this->stage);
    $stmt->bindParam(":day_applied", $this->day_applied);
    $stmt->bindParam(":url", $this->url);
    $stmt->bindParam(":stacks", $this->stacks);

    if ($stmt->execute()) {
      $this->lastId = $this->conn->lastInsertId();
      return true;
    }
    return false;
  }

  public function selectOne()
  {
    $query = "SELECT * FROM {$this->table_name} WHERE id = ?";
    $stmt = $this->conn->prepare($query);
    $this->id = htmlspecialchars(strip_tags($this->id));
    $stmt->bindParam(1, $this->id);
    $stmt->execute();
    return $stmt;
  }

  public function selectAll()
  {
    $query = "SELECT * FROM {$this->table_name}";
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
  }

  public function selectJoinPlatforms($paginator = false, $page = 0,$elements = 5)
  {
    $query = "SELECT company, stage, day_applied, url, stacks, platforms.name AS platform_name FROM {$this->table_name} LEFT JOIN platforms ON {$this->table_name}.platform_id = platforms.id ORDER BY day_applied DESC";
    if($paginator) $query .= " LIMIT {$page},{$elements}";
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
  }

  public function update()
  {
    $query = "UPDATE {$this->table_name} SET company = :company, platform_id = :platform_id, stage = :stage, day_applied = :day_applied, url = :url WHERE id = :id";
    $stmt = $this->conn->prepare($query);

    $this->company = htmlspecialchars(strip_tags($this->company));
    $this->platform_id = htmlspecialchars(strip_tags($this->platform_id));
    $this->stage = htmlspecialchars(strip_tags($this->stage));
    $this->day_applied = htmlspecialchars(strip_tags($this->day_applied));
    $this->url = htmlspecialchars(strip_tags($this->url));
    $this->id = htmlspecialchars(strip_tags($this->id));

    $stmt->bindParam(":company", $this->company);
    $stmt->bindParam(":platform_id", $this->platform_id);
    $stmt->bindParam(":stage", $this->stage);
    $stmt->bindParam(":day_applied", $this->day_applied);
    $stmt->bindParam(":url", $this->url);
    $stmt->bindParam(":id", $this->id);

    if ($stmt->execute()) return true;
    return false;
  }

  public function delete()
  {
    $query = "DELETE FROM {$this->table_name} WHERE id = ?";
    $stmt = $this->conn->prepare($query);

    $this->id = htmlspecialchars(strip_tags($this->id));

    $stmt->bindParam(1, $this->id);

    if ($stmt->execute()) return true;
    return false;
  }
}
