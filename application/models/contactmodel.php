<?php
class ContactModel
{
  function __construct($db, $table_name) {
    $this->table_name = $table_name;
    try{
      $this->db = $db;
    }catch (PDOException $e){
      exit('Database connection could not be established.');
    }
  }

  public function all()
  {
    $sql = "SELECT id, name, email FROM $this->table_name";
    $query = $this->db->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  public function add($name, $email)
  {
    $sql = "INSERT INTO $this->table_name (name, email) VALUES (?, ?)";
    $query = $this->db->prepare($sql);
    $query->execute(array(strip_tags($name), strip_tags($email)));
  }

  public function get($id)
  {
    $sql = "SELECT id, name, email FROM $this->table_name where id = $id";
    $query = $this->db->prepare($sql);
    $query->execute();
    return $query->fetch();
  }

  public function update($id, $name, $email)
  {
    $sql = "UPDATE $this->table_name SET name=?, email=? where id = ?";
    $query = $this->db->prepare($sql);
    $query->execute(array(strip_tags($name), strip_tags($email), $id));
  }  

  public function delete($id)
  {
    $sql = "DELETE FROM $this->table_name WHERE id = $id";
    $query = $this->db->prepare($sql);
    $query->execute();
  }
}
