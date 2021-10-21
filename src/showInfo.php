<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Thông tin chi tiết thuốc</title>
</head>

<body>
    <div class="container-fluid">
       <div class="card">
           <div class="card-header">
           <h1 style="  text-align: center;">Chi tiết thông tin thuốc</h1>
           </div>

           <div class="card-body">
           <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên thuốc</th>
                    <th scope="col">Loại thuốc</th>
                    <th scope="col">Mã vạch</th>
                    <th scope="col">Liều lượng(ml)</th>
                    <th scope="col">Mã</th>
                    <th scope="col">Giá nhập</th>
                    <th scope="col">Giá bán</th>
                    <th scope="col">Trạng thái HSD</th>
                    <th scope="col">Công ty</th>
                    <th scope="col">Ngày sản xuất</th>
                    <th scope="col">Ngày hết hạn</th>
                    <th scope="col">Nơi sản xuất</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xoá</th>
                </tr>
            </thead>

            <tbody>
                <!--thay đổi-->
                <?php
                include 'connect.php';
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                }
                $sql = "SELECT * FROM drugs WHERE id=$id";
                $result = mysqli_query($conn, $sql);
               
                if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        echo '<tr>';
                        echo '<th scope="row">' . $row['id'] . '</th>';
                        echo '<td>' . $row['name'] . '</td>';
                        echo '<td>' . $row['type'] . '</td>';
                        echo '<td>' . $row['barcode'] . '</td>';
                        echo '<td>' . $row['dose'] . '</td>';
                        echo '<td>' . $row['code'] . '</td>';
                        echo '<td>' . $row['cost_price'] . '</td>';
                        echo '<td>' . $row['selling_price'] . '</td>';
                        if ($row['expiry']) $mess = "Còn HSD";
                        else $mess = "Hết hạn sử dụng";
                        echo '<td>'.$mess. '</td>';
                        echo '<td>' . $row['company_name'] . '</td>';
                        echo '<td>' . $row['production_date'] . '</td>';
                        echo '<td>' . $row['expiration_date'] . '</td>';
                        echo '<td>' . $row['place'] . '</td>';
                        echo '<td>' . $row['quantity'] . '</td>';
                        echo '<td><a href="edit.php?id=' . $row['id'] . '" class="btn btn-primary"><i class="fas fa-user-edit"></i>Edit</a></td>';
                        echo '<td><a href="delete.php?id=' . $row['id'] . '" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Delete</a></td>';
                        echo '</tr>';
                    
                }
                else {
                    header("location:404.php");
                }
                ?>

                <!--thay đổi-->
            </tbody>
        </table>
           </div>
       </div>

    </div>




    <?php include 'footer.php' ?>