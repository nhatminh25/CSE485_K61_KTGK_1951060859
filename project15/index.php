<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Hello, world!</title>
    </head>

    <body>
        <h1>Bộ NN & PTNT</h1>
        <h2>TRƯỜNG ĐẠI HỌC THỦY LỢI</h2>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Số thứ tự</th>
                    <th scope="col">Số báo danh</th>
                    <th scope="col">Mã bài thi</th>
                    <th scope="col">Ngày thi</th>
                    <th scope="col">Giờ nộp bài</th>
                    <th scope="col">Điểm thi</th>
                    <th scope="col">Tệp kết quả</th>
                    <th scope="col">Ký tên</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    $dir = 'D:\Xampp\htdocs\project15\result';
                    $files = array_slice(scandir($dir), 3);
                    for($i = 0; $i < count($files); ++$i)
                    {
                        echo "<tr>";
                        echo "    <th>".$i."</th>";
                        echo "    <td>".explode("_", $files[$i])[3]."</td>";
                        echo "    <td>".explode("_", $files[$i])[2]."</td>";
                        echo "    <td>".explode("_", $files[$i])[4]."</td>";
                        echo "    <td>".explode("_", $files[$i])[5]."</td>";
                        echo "    <td>".explode("_", explode("_",$files[$i])[6])[0]."</td>";
                        echo "    <td>";
                        echo "    <a href=view.php?$files[$i]>result/$files[$i]</a>";
                        echo "    </td>";
                        echo "    <td></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->
    </body>
</html>