<?php

  require_once('Database.php');

  $db = new Database();


  $id = $_GET['id'];

  if(isset($id)) {


    $db->query("DELETE FROM user WHERE id = '$id' ");

    header('Location: index.php');
    
  }





?>
