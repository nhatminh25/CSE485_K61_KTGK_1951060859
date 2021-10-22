<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewpost" content ="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if(isset($_GET['id']))
    {
        echo $_GET['id'];
    }
    //else
    

    
        echo '<a href="index.php?id=123">Nhan vao day di</a>';
    ?>
</body>
</html>