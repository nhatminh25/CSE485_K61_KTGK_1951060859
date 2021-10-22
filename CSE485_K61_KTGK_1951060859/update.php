<?php 
 include("config.php");
 $id = $_GET['id'];
 $sql = "SELECT * FROM `thông tin xe cho thuê` WHERE vehicle_id = $id";
 $res = mysqli_query($conn,$sql);
 $count = mysqli_num_rows($res);
    if($count > 0)
    {
        while($row = mysqli_fetch_assoc($res))
        {
            $vehicle_id = $row['vehicle_id'];
            $license_no = $row['license_no'];
            $model = $row['model'];
            $year = $row['year'];
            $ctype = $row['ctype'];
            $drate = $row['drate'];
            $wrate = $row['wrate'];
            $status = $row['status'];
        }
    }
    else
    {
        echo "<h1>ID xe sai</h1>";
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Thêm xe cho thuê</title>
</head>

<body>
<form action="" method="POST">
  
    <div class="form-group">
        <label for="license_no">Mã xe</label>
        <input value="<?php echo $license_no ?>" type="text" class="form-control" id="license_no" name="license_no" placeholder="Enter age" required>
    </div>
    <div class="form-group">
        <label for="model">Model	</label>
        <input value="<?php echo $model ?>" type="text" class="form-control" id="model" name="model" placeholder="Enter blood group" required>
    </div>
    <div class="form-group">
        <label for="model">Năm sản xuất	</label>
        <input value="<?php echo $year ?>" type="text" class="form-control" id="year" name="year" placeholder="Enter blood group" required>
    </div>
    <div class="form-group">
        <label for="ctype">Kiểu oto	</label>
        <input value="<?php echo $ctype ?>" type="text" class="form-control" id="ctype" name="ctype" placeholder="Enter reg date" required>
    </div>
    <div class="form-group">
        <label for="drate">Giá thuê theo ngày    </label>
        <input value="<?php echo $drate ?>" type="text" class="form-control" id="drate" name="drate" placeholder="Enter phone number" required>
    </div>
    <div class="form-group">
        <label for="drate">Giá thuê theo ngày tuần    </label>
        <input value="<?php echo $wrate ?>" type="text" class="form-control" id="wrate" name="wrate" placeholder="Enter phone number" required>
    </div>
    
    <div class="form-group">
        <label for="status">Trạng thái   </label>
        <input type="text" class="form-control" id="status" name="status" placeholder="Enter status" required>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Sửa</button>
</form>

<?php
if(isset($_POST['submit'])){
    $license_no = $_POST['license_no'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $ctype = $_POST['ctype'];
    $drate = $_POST['drate'];
    $wrate = $_POST['wrate'];
    $status = $_POST['status'];
if($count > 0)
{
    $sql3="UPDATE `thông tin xe cho thuê` SET 
    vehicle_id= '$id',
    license_no='$license_no',
    model='$model',
    year='$year',
    ctype='$ctype',
    drate='$drate',
    wrate='$wrate',
    status='$status' WHERE vehicle_id = $id";
    $check = mysqli_query($conn,$sql3);
    if($check == TRUE)
    {
        header("location:".SITE_URL."details.php");
    }
    else
    {
        echo "<h1>Thông tin điền vào sai </h1>";
        echo " <a href=".SITE_URL.">Quay lại trang chủ</a>";
    }
}
else
{
    echo "<h1>Không tìm thấy xe</h1>";
    echo "<a href=".SITE_URL.">Quay lại trang chủ</a>";
}
}

?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>