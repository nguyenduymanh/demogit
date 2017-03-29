<?php
/**
 * Created by PhpStorm.
 * User: MrManh Godlike
 * Date: 23/03/2017
 * Time: 15:13
 */


?>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<form action="post.php" method="post">
<div class="container">
    <form class="row">
        <div class="form-group">
        <form action="user.php" method="get">
            <div class="form-group">
            <label for="Name">Name</label>
            <input name="name" type="text" class="form-control" id="Name" placeholder="Name">
            </input>
            </div>
            <div class="form-group">
                <label for="Status">Status</label>
                <input name="status" type="text" class="form-control" id="Status" placeholder="Status">
                </input>
            </div>

            <button class="btn form-group" type="submit">Add</button>
        </form>
    </div>
    </form>
</div>
</body>
</html>
