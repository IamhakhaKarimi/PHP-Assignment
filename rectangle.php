<html> 
    <head>
        <title>Rectangle Function</title>
        <link rel="stylesheet" href="styles.css">
    </head> 
<body>  

<h1> Rectangle Function </h1>
<form method = "post">   
Width: <input type="number" name="width">   
<br><br>  
Height: <input type="number" name="height"><br>   
<input type = "submit" name = "submit" value="Calculate">   
</form>   
</body>   
</html>  
<?php   
$width=0;
$height=0;
if(isset($_POST['submit']))  
    {   
$width = $_POST['width'];   
$height = $_POST['height'];   
 
} 

function rectangle($width, $height){

    for($i =0; $i < $height; $i++){
      for( $k=0 ; $k <$width;$k++){
        echo "*";
      }
      echo "<br>";
    }
  }
  
  
  
  rectangle($width,$height);
?>   


<div class="back">
    <a href="index.php">
    Home Page
</a>