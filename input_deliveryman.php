<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="deliveryman.php" method="post">
<pre>
Фирма: <input type="text" name="company" />
Булстат: <input type="text" name="bulstat" />
<p>
<?php
include "confige.php";
$result = mysqli_query($dbConn, "SELECT * FROM city");
echo "Населено място: <select size='3' multiple name='id_city'>";
echo " <option disabled>Избери град</option>";
while($row = mysqli_fetch_array($result)){
    echo " <option value=".$row['id_city'].">".$row['city']."</option>";
}
echo " </select></p>";
   ?>
Телефон: <input type="text" name="number" />
Година на регистрация: <input type="text" name="year" />
Лице за контакти: <input type="text" name="contact" />
<input type="submit" name="submit" value="Въведи"/>
</pre>
</form>
</body>
</html>