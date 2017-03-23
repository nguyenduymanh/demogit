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
<div class="container">
    <div class="row">
        <div class="form-group">
        <form action="user.php" method="get">
            <div class="form-group">
            <label for="Fullname">Fullname</label>
            <input name="Fullname" type="text" class="form-control" id="Fullname" placeholder="Fullname">
            </input>
            </div>
            <div class="form-group">
                <label for="Emai">Email</label>
                <input name="Email" type="EMAIL" class="form-control" id="Email" placeholder="Email">
                </input>
            </div>
            <div class="form-group">
                <label for="Birthday">Brithday</label>
                <input name="Birthday" type="date" class="form-control" id="Birthday" placeholder="Brithday">
                </input>
            </div>
            <button class="form-group" type="submit">OKay</button>
        </form>
    </div>
</div>
</body>
</html>
