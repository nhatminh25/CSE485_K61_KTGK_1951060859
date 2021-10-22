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

        <!-- Optional JavaScript; choose one of the two! -->
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
                <tr>
                    <td>
                        <?php
                            $files = scandir('result/');
                            foreach($files as $file)
                            {
                                echo $file.'<br>';
                            }

                            $file_1 = $files[2];
                            echo $file_1;
                            echo '<br>';

                            $item = explode('_',$file_1);
                            foreach($items as $item)
                            {
                                echo $item.'<br>';
                            }
                            echo '<br>';

                            $mark = explode('.',$items[6])[0];
                            echo $mark;
                            echo '<br>';

                            $path = 'result';
                            echo '<td><a href="view.php?file='.'result/'.$filelist[3].'">'.'result/'.$filelist[3].'</a></td>';
                        ?>
                    </td>
                </tr>
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