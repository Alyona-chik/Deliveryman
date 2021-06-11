<?php
include "confige.php";
if (isset($_POST["submit"]))
{
$company = $_POST['company'];
$bulstat= $_POST['bulstat'];
$id_city = $_POST['id_city'];
$number = $_POST['number'];
$year= $_POST['year'];
$contact = $_POST['contact'];
if ( !empty($company)&&!empty($bulstat)&&!empty($id_city)&&!empty($number)&&!empty($year)&&!empty($contact))
{
   /* $result = mysqli_query($dbConn, "SELECT id_city FROM city WHERE city = '$city'");*/
  
$sql="INSERT INTO deliveryman ( company, bulstat, id_city, mobile_number,year, contact ) VALUES ( '$company',
'$bulstat', '$id_city','$number', '$year', '$contact')";
$result = mysqli_query($dbConn,$sql);
if (!$result)
{
die('Грешка!!!');
}
echo "Добавихте един запис.";
$result =mysqli_query($dbConn, "SELECT * FROM deliveryman");
echo "<ol>";
echo "<table border = '1'>". "<tr>";
echo "<th>"."Номер"."</th>";
echo "<th>"."Доставчик"."</th>";
echo "<th>"."Булстат"."</th>";
echo "<th>"."Адрес"."</th>";
echo "<th>"."Телефон"."</th>";
echo "<th>"."Година на регистрация"."</th>";
echo "<th>"."Лице за контакти"."</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row['id_deliveryman']."</td>"."<td>"
            .$row['company']."</td>"."<td>".$row['bulstat']
            ."</td>"."<td>".$row['id_city']."</td>"."<td>".$row['mobile_number']
            ."</td>"."<td>".$row['year']."</td>"
            ."<td>".$row['contact']."</td>";
    echo "</tr>";
    }
echo "</table>";
}
else
echo "Не сте въвели всички данни!!!";
}
?>