<?php
include "confige.php";
$sql = "DELETE deliveryman FROM deliveryman WHERE company = 'Орхидея'";
mysqli_query($dbConn,$sql);
$result = mysqli_query($dbConn, "SELECT * FROM deliveryman");
echo "<ol>";
while($row = mysqli_fetch_array($result)){
echo "<li>".$row['company'];}
echo "</ol>";
?>