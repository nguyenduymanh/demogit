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

$name = $_POST['nameadd'];
$status = $_POST['status'];
$sql = "Insert into student (name,status) value ('" . $name . "','" . $status . "')";

if ($conn->query($sql) == TRUE) {
    echo 'Them thanh cong';
} else {
    echo 'error:' . $sql . "</br>" . $conn->connect_errno;
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



