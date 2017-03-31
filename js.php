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
            mail=document.fo.email;
            pass=document.fo.pass;
            reg1=/^[0-9A-Za-z]+[0-9A-Za-z_]*@[\w\d.]+.\w{2,4}$/;
            if (mail.value=="")
            {
                alert("Chua nhap email!");
                mail.focus();
                return false;
            }
            if (pass.value=="")
            {
                alert("Chua nhap mat khau!");
                pass.focus();
                return false;
            }
            else return true;



        }

    </script>



</head>
<body>
<form name="fo" method="post" onsubmit="return check();">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input name="email" type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</body>
</html>
