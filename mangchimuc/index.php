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
    $mang_1 = ['hi','hello','good morning'];
    //Mang chi muc
    for($i=0;$i<count($mang_1);$i++)
    {
        echo $element.'<br>';
    }

    $mang_2 = ['hi'=>'xin chao','hello'=>'xin chao','good morning'=>'chao buoi sang'];
    //Mang ket hop key
    foreach($mang_2 as $key=>value)
    {
        echo $value.'<br>';
    }

    ?>
</body>
</html>