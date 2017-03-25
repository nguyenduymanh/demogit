<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 3/25/2017
 * Time: 7:28 PM
 */

$servername='localhost';
$username='root';
$password='';
$dbname='mydb';
$conn=new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    echo 'Loi ket noi'.$conn->connect_error;
}
else echo 'Ket noi thanh cong!!';
?>

