<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    <form method="post" action="" enctype="multipart/form-data">
        <input type="file" name="avatar" />
        <input type="submit" name="uploadclick" value="Upload" />
    </form>
    <?php
    echo '<pre>';
    print_r($_FILES);
    ?>
</body>

</html>