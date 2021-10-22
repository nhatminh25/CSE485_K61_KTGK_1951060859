<?php
    $path = getcwd();
    echo $path;

    $item = scandir($path);

    echo '<pre>';
    echo print_r($item);
    echo '</pre>';

    $item2 = scandir('D:\Xampp\htdocs\project10');
  
    echo '<pre>';
    echo print_r($item2);
    echo '</pre>';

    //truy cập 1 giá trị cụ thể
    echo $item2[2].'<br>';
    $item_path = $path. DIRECTORY_SEPARATOR . $item2[2];

    echo $item_path.'<br>';
    if(is_dir($path))
    {
        echo "Đúng là thư mục".'<br>';
    }
    else
    {
        echo "Không là thư mục".'<br>';
    } 
?>