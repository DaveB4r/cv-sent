<?php

namespace App\Models;

class User
{
  private $conn;
  private $table_name = "users";

  public $id, $username, $email, $password, $created_at, $newPass;

  public function __construct($db)
  {
    $this->conn = $db->conn;
  }

  public function insert()
  {
    $query = "INSERT INTO {$this->table_name} (username, email, password) VALUES (:username, :email, :password)";
    $stmt = $this->conn->prepare($query);

    $this->username = htmlspecialchars(strip_tags($this->username));
    $this->email = htmlspecialchars(strip_tags($this->email));
    $this->password = password_hash($this->password, PASSWORD_DEFAULT);

    $stmt->bindParam(":username", $this->username);
    $stmt->bindParam(":email", $this->email);
    $stmt->bindParam(":password", $this->password);

    if ($stmt->execute()) return true;
    return false;
  }

  public function selectOne()
  {
    $query = "SELECT * FROM {$this->table_name} WHERE email = ?";
    $stmt = $this->conn->prepare($query);
    $this->email = htmlspecialchars(strip_tags($this->email));
    $stmt->bindParam(1, $this->email);
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
    $query = "UPDATE {$this->table_name} SET username = :username, email = :email, password = :password WHERE id = :id";
    $stmt = $this->conn->prepare($query);

    $this->username = htmlspecialchars(strip_tags($this->username));
    $this->email = htmlspecialchars(strip_tags($this->email));
    $this->password = password_hash($this->password, PASSWORD_DEFAULT);
    $this->id = htmlspecialchars(strip_tags($this->id));

    $stmt->bindParam(":username", $this->username);
    $stmt->bindParam(":email", $this->email);
    $stmt->bindParam(":password", $this->password);
    $stmt->bindParam(":id", $this->id);

    if ($stmt->execute()) return true;
    return false;
  }

  public function updatePassword()
  {
    $query = "UPDATE {$this->table_name} set password = :password WHERE id = :id";
    $stmt = $this->conn->prepare($query);

    $this->password = password_hash($this->password, PASSWORD_DEFAULT);
    $this->id = htmlspecialchars(strip_tags($this->id));

    $stmt->bindParam(":password", $this->password);
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
