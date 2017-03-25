<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 3/21/2017
 * Time: 7:50 PM
 */?>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php
$servername='localhost';
$username='root';
$password='';
$dbname='mysql';
$conn=new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    echo 'Loi ket noi'.$conn->connect_error;
}
else echo 'Ket noi thanh cong!!';


?>
<div class="container">
    <div class="row">
        <form action="adduser.php">
            <button class="btn btn-info" type="submit">Adduser</button>
        </form>
        <table class="table" bgcolor="aqua" >
            <thead >
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT  * FROM student";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?=$row["id"]?></td>
                        <td><?=$row["name"]?></td>
                        <td><?=$row["status"]?></td>
                    </tr>
            <?php
                }
            } else {
                echo "0 results";
            }
            ?>


            </tbody>
        </table>
    </div>
</div>

</body>
</html>
