<?php

class Controller
{
  public $db = null;
  function __construct()
  {
    $this->openDatabaseConnection();
  }

  private function openDatabaseConnection()
  {
    $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
    $this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS, $options);
  }

  public function loadModel($model_name, $has_table=true)
  {
    require 'application/models/' . strtolower($model_name) . '.php';
    return new $model_name($this->db, $this->get_table_name($model_name));
  }

  private function get_table_name($model_name)
  {
    return str_replace('model', '', strtolower($model_name)).'s';
  }
}