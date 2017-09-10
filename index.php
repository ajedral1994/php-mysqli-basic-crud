<?php


 require_once('Database.php');

  // Instantiate Database object
  $db = new Database();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Code</title>
  </head>
  <body>
    <form class="" action="add.php" method="post">
      <label for="">name</label>
      <input type="text" name="name" value="">
      <input type="submit" name="add" value="add">
    </form>
      <?php $result = $db->query("SELECT * FROM user"); while($obj = $result->fetch_object()) { ?>

        <table>
          <tbody>
            <tr>
              <td><?=$obj->name?></td>
              <td>
                <a href="edit.php?id=<?=$obj->id?>">Edit</a>
              </td>
              <td>
                <a href="delete.php?id=<?=$obj->id?>">Delete</a>
              </td>
            </tr>
          </tbody>
        </table>

      <?php } ?>
  </body>
</html>
