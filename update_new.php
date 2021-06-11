<?php
include "confige.php";
$sql = "UPDATE deliveryman SET contact = 'Мария Руменова' WHERE contact = 'Лили Петкова'";
mysqli_query($dbConn,$sql);
$result = mysqli_query($dbConn, "SELECT * FROM deliveryman");
echo "Доставчик, Лице за контакти";
echo "<ol>";
while($row = mysqli_fetch_array($result)){
echo "<li>".$row['company'].", ".$row['contact'];}
echo "</ol>";
?>