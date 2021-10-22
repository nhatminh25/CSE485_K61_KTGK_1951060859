<?php
    $file = $_GET['file'];
    echo $file;

    $contents = file($file);

    foreach($contents as $line)
    {
        echo $line.'<br>';
    }
?>