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
    <META name="Author" content="Scorpion">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script language="JavaScript">
        function check() {
            nameadd=document.for.nameadd;
            reg1=/^[0-9A-Za-z]+[0-9A-Za-z_]*@[\w\d.]+.\w{2,4}$/;
            if (nameadd.value=="")
            {
                alert("Chua nhap ten!");
                nameadd.focus();
                return false;
            }



        }

    </script>
</head>
<body>
<form action="post.php" method="post" name="for" onsubmit="return check();">
<div class="container">
    <form class="row">
        <div class="form-group">
        <form action="user.php" method="get">
            <div class="form-group">
            <label for="Name">Name</label>
            <input name="nameadd" type="text" class="form-control" id="Name" placeholder="Name">
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
