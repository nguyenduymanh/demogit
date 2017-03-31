<html>
<head>
    <META name="Author" content="Scorpion">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script language="JavaScript">
        function check() {
            nameu=document.form.nameu;
            reg1=/^[0-9A-Za-z]+[0-9A-Za-z_]*@[\w\d.]+.\w{2,4}$/;
            if (nameu.value==""){
                alert("Hay nhap ten!");
                nameu.focus();
                return false;
            }
            else return true;
        }
        </script>
</head>
<body>
<?php
$stid = $_GET['id'];
?>
<form name="form" onsubmit="return check();"action="postUpdate.php" method="post" >
    <input type="hidden" value="<?= $stid ?>" name="id">
    <div class="container">
        <form class="row">
            <div class="form-group">
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input name="nameu" type="text" class="form-control" id="Name" placeholder="Name">
                    </input>
                </div>
                <div class="form-group">
                    <label for="Status">Status</label>
                    <input name="status" type="text" class="form-control" id="Status" placeholder="Status">
                    </input>
                </div>

                <button class="btn form-group" type="submit">Update</button>
        </form>
    </div>
</form>
</div>
</body>
</html>



