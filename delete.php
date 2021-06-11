<?php
include "confige.php";
$result =mysqli_query($dbConn, "SELECT * FROM deliveryman WHERE company = 'Орхидея'");
echo "<ol>";
echo "<table border = '1'>". "<tr>";
echo "<th>"."Доставчик"."</th>";
echo "<th>"."Булстат"."</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row['company']."</td>"."<td>".$row['bulstat']
            ."</td>";
    echo "</tr>";
    }
    echo "<tr>"."<td colspan='5'align='center' >"."<a href=delete_new.php>Изтриване</a>"."</td>"."</tr>";
echo "</table>";
?>