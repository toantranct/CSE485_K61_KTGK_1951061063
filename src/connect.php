<?php
        define('HOST','localhost');
        define('USER','root');
        const PASS='12345678';
        const DB ='database';
        $conn=mysqli_connect(HOST,USER,PASS,DB);
        if(!$conn)
        {
            die('Kết nối không thành công'); 
        }
?>