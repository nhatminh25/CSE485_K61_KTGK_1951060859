<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Chi tiết xe</title>
</head>
<body>
    
    <h1 class="text-center">Thuê xe</h1>
    <a href="<?php echo SITE_URL ?>">Quay lại trang chủ </a>
    <table class="table table-hover">
        <tr>
            <th scope="col"> Mã xe</th>
            <th scope="col"> Biển số xe </th>
            <th scope="col"> Model </th>
            <th scope="col"> Năm sản xuất </th>
            <th scope="col"> Kiểu oto </th>
            <th scope="col"> Giá thuê theo ngày </th>
            <th scope="col"> Giá thuê theo tuần </th>
            <th scope="col"> Trạng thái </th>
</tr>

    <?php
        $sql = 'SELECT * FROM `thông tin xe cho thuê`';
        $res = mysqli_query($conn,$sql) or die(mysqli_error());
        $count = mysqli_num_rows($res);
        
        while($row = mysqli_fetch_assoc($res)){
                $vehicle_id = $row['vehicle_id'];
                $license_no = $row['license_no'];
                $model = $row['model'];
                $year = $row['year'];
                $ctype = $row['ctype'];
                $drate = $row['drate'];
                $wrate = $row['wrate'];
                $status = $row['status'];

        ?>
        <tr>
        <td><?php echo $vehicle_id ?></td>
        <td><?php echo $license_no ?></td>
        <td><?php echo $model ?></td>
        <td><?php echo $year ?></td>
        <td ><?php echo $ctype ?></td>
        <td><?php echo $drate ?></td>
        <td><?php echo $wrate ?></td>
        <td><?php echo $status ?></td>
        <td><a href="<?php echo SITE_URL.'update.php?id='.$vehicle_id?>">EDIT</a></td> 
        <td><a href="<?php echo SITE_URL.'delete.php?id='.$vehicle_id?>">DELETE</a></td> 
    </tr>
    <?php
        }
    ?>

</table>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>