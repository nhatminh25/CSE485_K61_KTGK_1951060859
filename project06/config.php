<?php
// Bước 01; Kết nối tới CSDL:
        define('HOST','localhost');
        define('USER','root');
        const PASS  = '12345678';
        const DB    = 'tlu_phonebook'; 
        $conn = mysqli_connect(HOST,USER, PASS,DB);
        if(!$conn){
            die('Không thể kết nối');
        }
?>