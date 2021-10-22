<?php
    include('config.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM `thông tin xe cho thuê` WHERE vehicle_id = $id";
    $res = mysqli_query($conn,$sql) or die(mysqli_error());
    $count = mysqli_num_rows($res);
    if($count > 0)
    {
        $sql2 = "DELETE FROM `thông tin xe cho thuê` WHERE vehicle_id = $id";
        mysqli_query($conn,$sql2);
        header("location:".SITE_URL);
    }else{
        echo "<h1>Không tìm thấy xe</h1>";
        echo "<a href=".SITE_URL.">Quay lại trang chủ</a>";
    }
?>