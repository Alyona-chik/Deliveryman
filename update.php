<?php
include "confige.php";
$result =mysqli_query($dbConn, "SELECT * FROM deliveryman WHERE company = 'Лазур'");
echo "<ol>";
echo "<table border = '1'>". "<tr>";
echo "<th>"."Доставчик"."</th>";
echo "<th>"."Булстат"."</th>";
echo "<th>"."Лице за контакти"."</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row['company']."</td>"."<td>".$row['bulstat']
            ."</td>"."<td>".$row['contact']."</td>";
    echo "</tr>";
    }
    echo "<tr>"."<td colspan='5'align='center' >"."<a href=update_new.php>Редактиране</a>"."</td>"."</tr>";
echo "</table>";
?>