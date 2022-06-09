<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <a href="http://localhost/rajan/w4/Logout.php">Logout</a>
    <form action="a.php?name1=<?php echo $_GET['name1']; ?>" method="post">
        message:  <input type="text"  name="mssg"><br><br>
        <input type="hidden" value="mess" name="mess"> 
        <!-- city:  <input type="text" name="city"> -->
        <input type="submit" name="submit">
    </form>



<?php 
require_once "config.php";
session_start();
$name=$_SESSION['user_name'];
$name1=$_GET['name1'];

$sql1="SELECT * FROM `data` WHERE (`recever_name`='$name' && `sender_name`='$name1') || (`recever_name`='$name1' && `sender_name`='$name');";//ga is database folder name
$result=mysqli_query($conn,$sql1)or die("query not success");
?>

sender message  <br><br>
<?php
while($res = mysqli_fetch_array($result)){
    // if($res['id'] >= $statics){
        if($res['recever_name']==$name1){
        ?>
        <div class="container">
            <div ></div>
        <div class="s_mes">
  <?php  echo($res['message'])."<br>";}?>
     </div>
     </div>
     <?php
     if($res['recever_name']==$name){
        echo($res['message'])."<br>";
     }

  ?>
    <br><br><br>
  <?php

}
?>


</body>
</html>