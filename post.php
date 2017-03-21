<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 3/21/2017
 * Time: 7:29 PM
 */?>
<html>
<head>

</head>
<body>
<?php
if (isset($_POST['email'])) {
echo 'email la:'. $_POST['email'];}
?>
<form action="user.php">
<button type="submit" class="btn btn-default">Submit</button>
</form>
</body>
</html>
