<?php 
if(isset($_POST["submit"])){
  $handler = fopen("data.php", "a");
  fwrite($handler,  "
                    <p><b>".$_POST["username"]."</b></p>".
                    "<p>".$_POST["text"]."</p>
                    <hr>
                    ");
  fclose($handler);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://unpkg.com/feather-icons"></script>
</head>
<style>
  div{
    padding: 15px;
    width: 30%;
    height: 300px;
    border: 1px solid black;
    overflow-y: scroll;
  }
</style>
<body>
  <form action="" method="post">
    <label for="username">username</label>
    <br>
    <input type="text" id="username" placeholder="username" name="username" required>
    <br>
    <br>
    <label for="text">text</label>
    <br>
    <textarea id="text" name="text" id="" cols="30" rows="10" style="resize: none;"></textarea>
    <br>
    <br>
    <button name="submit">submit</button>
  </form>
  <br>
  <br>
  <div>
    <?php require_once "data.php" ; ?>
  </div>
  <script>
      feather.replace()
  </script>
</body>
</html>