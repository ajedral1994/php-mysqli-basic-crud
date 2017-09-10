<?php


class Database
{
  private $host;
  private $user;
  private $pass;
  private $db;
  private $mysqli;


  public function __construct()
  {
    // Load this automatically when this class is called
    $this->connect();
  }


  public function connect()
  {
    // Config credentials
    // Connection to database
    $this->host = 'localhost';
    $this->user = 'root';
    $this->pass = '';
    $this->db = 'code_test';

    $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);
    return $this->mysqli;

  }

  public function query($sql)
  {
    // Simplified query builder
    $result = $this->mysqli->query($sql);
    return $result;
  }

}
