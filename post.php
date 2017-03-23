<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 3/21/2017
 * Time: 7:29 PM
 */?>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php
if (isset($_POST['email'])) {
echo 'Email la: '. $_POST['email'] ;}
echo "<br>";
if (isset($_POST['pass'])){
    echo 'Mat khau la:'.$_POST['pass'];}
?>
<br>
<form action="user.php">
<button type="submit" class="btn btn-default">Submit</button>
</form>
</body>
</html>
