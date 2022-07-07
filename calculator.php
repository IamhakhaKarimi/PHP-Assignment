<html>
<head>
    <title>Math Operator</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<h1 class="header"> Basic Four Operator</h1>

<form method = "post">   
Var 1: <input type="number" name="x">   
<br><br>  
Var 2: <input type="number" name="y"><br>   
<input type = "submit" name = "submit" value="Calculate">   
</form>   
<?php
$x= 1;
$y= 1;

if(isset($_POST['submit']))  
    {   
$x = $_POST['x'];   
$y = $_POST['y'];   
 
}
echo "Variabal 1=".$x.'<br>';
echo '<br>'."Variable 2=".$y.'<br>';

echo '<br>  <br>';

// add, subtract, and multiplication operators demo
echo "Addition =".$x + $y.'<br>';  // 30
echo "Subtraction = ".$x - $y.'<br>';  // 10
echo "Multiplication = ".$x * $y.'<br>';  // 200

// division operator demo
$z = $x / $y;
echo '<br>'.'Division = '.$z.'<br>';
 
?>


<div class="back">
    <a href="index.php">
    Home Page
</a>
</div>

</body>
</html>