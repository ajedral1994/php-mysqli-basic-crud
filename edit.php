<?php

  require_once('Database.php');

  $db = new Database();


  $id = $_GET['id'];

  if(isset($_POST['edit'])) {

    $name = $_POST['u'];
    $id = $_POST['id'];

    $db->query("UPDATE user SET name ='$name' WHERE id = '$id' ");

    header('Location: index.php');
  }

  $user = $db->select('id, name')->from('user')->where('id = '.$id.'')->result();
  while($obj = $user->fetch_object()) {
    $u = $obj->name;
    $i = $obj->id;
  }





?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <input type="text" name="u" value="<?=$u?>">
      <input type="text" name="id" value="<?=$i?>">
      <input type="submit" name="edit" value="edit">
    </form>
  </body>
</html>
