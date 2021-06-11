<?php
$host= 'localhost'; //Машина, на която работи MySQL сървърът
$dbUser= 'root'; // Потребителско име за MySQL
$dbPass= ''; // Парола за MySQL
//връзка със сървъра
if(!$dbConn=mysqli_connect($host, $dbUser, $dbPass)) {
die('Не може да се осъществи връзка със сървъра.');
}
// тестване на връзката
echo 'Връзката е успешна!';

$sql = 'CREATE Database IF NOT EXISTS Information_about_deliveryman';
if ($queryResource=mysqli_query($dbConn,$sql))
//или mysqli_query($dbConn,'CREATE DATABASE student61' )
{
echo "Базата данни е създадена. <br>";
}
else
{
echo "Грешка при създаване на базата данни: ";
}



if (!mysqli_select_db($dbConn, 'Information_about_deliveryman'))
{
die('Не може да се селектира базата от данни.');
}
echo "Базата данни е селектирана. <br>";


$sql ="CREATE TABLE IF NOT EXISTS deliveryman (
id_deliveryman INT(10) NOT NULL AUTO_INCREMENT,
company VARCHAR(32) DEFAULT NULL,
bulstat VARCHAR(20) DEFAULT NULL,
id_city INT(10) DEFAULT NULL,
mobile_number VARCHAR(32) DEFAULT NULL,
year SMALLINT(6) DEFAULT NULL,
contact VARCHAR(32) DEFAULT NULL,
PRIMARY KEY (id_deliveryman),
KEY id_city(id_city)
) ENGINE=INNODB DEFAULT CHARSET=utf8";
$result = mysqli_query($dbConn,$sql);
if(!$result)
die('Грешка при създаване на таблицата.');
echo "Таблицата е създадена!";

$sql ="CREATE TABLE IF NOT EXISTS city (
    id_city INT(10) NOT NULL AUTO_INCREMENT,
    city VARCHAR(32) DEFAULT NULL,
    id_deliveryman INT(10) NOT NULL,
    PRIMARY KEY (id_city),
    KEY id_deliveryman (id_deliveryman)
    ) ENGINE=INNODB DEFAULT CHARSET=utf8";
    $result = mysqli_query($dbConn,$sql);
    if(!$result)
    die('Грешка при създаване на таблицата.');
    echo "Таблицата е създадена!";

$sql ="ALTER TABLE deliveryman
ADD CONSTRAINT FOREIGN KEY (id_city) REFERENCES city (id_city) ON DELETE
CASCADE";
$result = mysqli_query($dbConn,$sql);
if(!$result)
die('Грешка при създаване на таблицата: ' . mysqli_error($dbConn));



?>