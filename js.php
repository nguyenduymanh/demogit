<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 3/21/2017
 * Time: 7:05 PM
 */
echo "hello world ";
?>
<html>
<head>
    <META name="Author" content="Scorpion">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script language="JavaScript">
        function check() {
            ten=document.fo.ten;
            reg1=/^[0-9A-Za-z]+[0-9A-Za-z_]*@[\w\d.]+.\w{2,4}$/;
            if (ten.value=="")
            {
                alert("Chua nhap ten!");
                ten.focus();
                return false;
            }



        }

    </script>



</head>
<body>
<form name="fo" method="post" onsubmit="return check();">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input name="ten" type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</body>
</html>
