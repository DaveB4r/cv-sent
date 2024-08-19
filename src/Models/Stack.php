<?php

namespace App\Models;

class Stack
{
  private $conn;
  private $table_name = "stacks";
  public $id, $name;

  public function __construct($db)
  {
    $this->conn = $db->conn;
  }

  public function insert()
  {
    $query = "INSERT INTO {$this->table_name} (name) VALUES (:name)";
    $stmt = $this->conn->prepare($query);

    $this->name = htmlspecialchars(strip_tags($this->name));

    $stmt->bindParam(":name", $this->name);

    if($stmt->execute()) return true;
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

  public function update()
  {
    $query = "UPDATE {$this->table_name} SET name = :name WHERE id = :id";
    $stmt = $this->conn->prepare($query);

    $this->name = htmlspecialchars(strip_tags($this->name));
    $this->id = htmlspecialchars(strip_tags($this->id));

    $stmt->bindParam(":name", $this->name);
    $stmt->bindParam(":id", $this->id);

    if($stmt->execute()) return true;
    return false;
  }

  public function delete()
  {
    $query = "DELETE FROM {$this->table_name} WHERE id = ?";
    $stmt = $this->conn->prepare($query);

    $this->id = htmlspecialchars(strip_tags($this->id));

    $stmt->bindParam(1, $this->id);

    if($stmt->execute()) return true;
    return false;
  }
}
