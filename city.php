<?php
include "confige.php";
if (isset($_POST["submit"]))
{
$city = $_POST['city'];
if ( !empty($city))
{
$sql="INSERT INTO city (city) VALUES ( '$city')";
$result = mysqli_query($dbConn,$sql);
if (!$result)
{
die('Грешка!!!');
}
echo "Добавихте един запис.";
$result =mysqli_query($dbConn, "SELECT * FROM city");
echo "<ol>";
echo "<table border = '1'>". "<tr>";
echo "<th>"."Номер"."</th>";
echo "<th>"."Град"."</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row['id_city']."</td>"."<td>".$row['city']."</td>";
    echo "</tr>";
    }
echo "</table>";
}
else
echo "Не сте въвели всички данни!!!";
}





?>