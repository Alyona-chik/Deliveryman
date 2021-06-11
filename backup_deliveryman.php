
<?php
$host= 'localhost';
$dbUser= 'root';
$dbPass= '';
if(!$dbConn=mysqli_connect($host, $dbUser, $dbPass))
{
die('Could not connect: ' . mysqli_error($dbConn));
}
mysqli_select_db($dbConn,'Information_about_deliveryman');
$table_name = "deliveryman";
$backup_file = "C:/xampp/tmp/delivery1.sql";
$sql = "SELECT * FROM $table_name INTO OUTFILE '$backup_file'";
$result = mysqli_query($dbConn,$sql);
if(!$result )
{
die('Could not take data backup: ' . mysqli_error($dbConn));
}
echo "Backedup data successfully.";
?>