<?php
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>add contact:</p>
<form action="" method="GET">
      name:  <input type="text" name="name"><br><br>
      <!-- city:  <input type="text" name="city"> -->
        <button>save<button>
 </form>
</body>
</html>
<?php
$s=$_GET['name'];
if($_SERVER["REQUEST_METHOD"]=="GET")
{
    $sql="CREATE TABLE `$s` ( `id` INT NOT NULL AUTO_INCREMENT , `message` VARCHAR(15) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
    $result= mysqli_query($conn,$sql) or die("query unsuccessful");
}
?>