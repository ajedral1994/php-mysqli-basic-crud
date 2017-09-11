<?php


class Database
{
  private $host;
  private $user;
  private $pass;
  private $db;
  private $mysqli;
  private $selectedFields = array();
  private $table;
  private $whereClause;
  private $limit;


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

  public function select()
  {

    $this->selectedFields = func_get_args();
    return $this;

  }

  public function from($table)
  {

    $this->table = $table;
    return $this;

  }

  public function where($where)
  {

    $this->whereClause = $where;
    return $this;

  }

  public function limit($limit)
  {

    $this->limit = $limit;
    return $this;
  }

  public function result()
  {

    $query[] = "SELECT";
    if(empty($this->selectedFields)) {
      // if fields are empty then select all
      $query[] = "*";
    } else {
      $query[] = join(', ', $this->selectedFields);
    }

    $query[] = "FROM";
    $query[] = $this->table;

    if(!empty($this->whereClause)) {
      $query[] = "WHERE";
      $query[] = $this->whereClause;
    }

    if(!empty($this->limit)) {
      $query[] = "LIMIT";
      $query[] = $this->limit;
    }


     $query =  join(' ', $query);

     return $this->mysqli->query($query);

  }




}
