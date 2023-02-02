<?php
require_once("Database.php");
$db = new Database();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>update</title>
</head>
<body>
<?php
    $ball_id = $_GET['ball_id'];
   require_once('Database.php');
   $db = new Database(); 
   $st = $db->fetchTennisBall($ball_id);
foreach ($st as $row) {
    ?>
<form action="do_updateTB.php" method="post">
      <div class="form-group">
        <h2 style="text-align:center;">Update the record of Tennisball </h2>
        <label for="exampleInputEmail1">BAll_ID</label>
        <input type="hidden" class="form-control" id="ball_id" name="ball_id" value="<?php echo $row[0] ?>" aria-describedby="emailHelp"
          placeholder="enter a id">

      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Ball type</label>
        <input type="text" class="form-control" id="text_7" name="text_7" value="<?php echo $row[1] ?>"
          placeholder="please enter tennisball">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Ball Company name</label>
        <input type="text" class="form-control" id="text_8" name="text_8" value="<?php echo $row[2] ?>"
          placeholder="please enter company name">
      </div>

      <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>


<?php
}
?>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
    </body>
</html>