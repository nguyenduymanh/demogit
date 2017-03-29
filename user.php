<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mydb';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo 'Loi ket noi' . $conn->connect_error;
} else echo '';


?>
<div class="container">
    <div class="row">
        <table class="table" bgcolor="aqua">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
                <th>Edit</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT  * FROM student";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?= $row["id"] ?></td>
                        <td><?= $row["name"] ?></td>
                        <td><?= $row["status"] ?></td>
                        <td>
                            <a href="update.php? id=<?= $row["id"] ?>" class=" btn btn-info"> Update </a>
                            <a href="delete.php? id=<?= $row["id"] ?>" class="btn btn-warning">Delete</a>

                        </td>
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
    <form action="adduser.php">
        <button class="btn btn-info" type="submit">Adduser</button>
    </form>
</div>

</body>
</html>
