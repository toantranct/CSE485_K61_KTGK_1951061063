<?php
    include 'header.php';
    include 'connect.php';
    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }
    $sql = "delete from drugs where id ='$id'";
    echo $sql;
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script> alert('Xoá thành công'); </script>"; 
        header("Location: index.php");
    }else{
        header("Location: 404.php");
    }
    mysqli_close($conn);

?>