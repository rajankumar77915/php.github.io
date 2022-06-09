<p>whom to send message</p>
<style>
.button  {
    text color:gre;
    background-color:red;
    width:100px;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
   /* padding: auto; */
  /* cursor: pointer; */
}
</style>

<?php
require_once "config.php";
$sql="SELECT `user_name` FROM `account`;";
$result=mysqli_query($conn,$sql) or die("sorry");

// $name=$_GET['name'];
while($row=mysqli_fetch_array($result)){
    //  $names=$row[]; 
    ?>
   <button class="button"><a href="http://localhost/rajan/w4/sender1.php?name1=<?php echo $row[0] ?>">  <?php echo $row[0]?>  </a></button><br>
    
    <?php
}   	
?>






