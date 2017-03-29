<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php
$stid = $_GET['id'];
?>
<form action="postUpdate.php" method="post">
    <input type="hidden" value="<?= $stid ?>" name="id">
    <div class="container">
        <form class="row">
            <div class="form-group">
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

                <button class="btn form-group" type="submit">Update</button>
        </form>
    </div>
</form>
</div>
</body>
</html>



