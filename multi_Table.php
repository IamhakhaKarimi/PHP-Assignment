<!DOCTYPE html>
<head>
    <title> Multiplication Table </title>
    <link rel="stylesheet" href="styles.css">
</head>
<html>

<body>
  
    <h1 class="header">
      CodeWeekend Assignment
    </h1>

    <h3>
      Multiplication Table<br>
      
    </h3>

    <form method="POST">
      Enter a number:
      <input type="text" name="number">
      
      <input type="Submit"
        value="Submit">
    </form>
  
</body>

</html>

<?php
if($_POST) {
  $digit = $_POST["number"];

  echo nl2br("<p style='text-align: center;'>
    Table of $digit: </p>
  ");
    
  for ($i = 1; $i <= 10; $i++) {
    echo ("<p style='text-align: center;'>$digit"
      . " X " . "$i" . " = "
      . $digit * $i . "</p>
    ");
  }
}

?>

<div class="back">
    <a href="index.php">
    Home Page
</a>
</div>