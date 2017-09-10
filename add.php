<?php

  require_once('Database.php');

  $db = new Database();

  $name = $_POST['name'];

  $query = $db->query("INSERT INTO user(name) VALUES('$name')");

  header('Location: index.php');

?>
