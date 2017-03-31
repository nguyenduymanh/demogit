<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 3/25/2017
 * Time: 7:28 PM
 */

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mydb';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo 'Loi ket noi' . $conn->connect_error;
} else echo '';
$stid = $_POST['id'];
$name = $_POST['name'];
$status = $_POST['status'];
$sql = "UPDATE `student` SET `name` = '$name', `status` = '$status' WHERE `student`.`id` = $stid";

if ($conn->query($sql) == TRUE) {
    echo 'Update thanh cong!';
} else {
    echo 'error:' . $sql . "</br>" . $conn->connect_error;
}
?>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <form action="user.php">
        <button class="btn btn-default">Xem danh sach</button>
    </form>
</div>
</body>
</html>



