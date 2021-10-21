<?php
include 'header.php';
?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Quản lí thông tin thuốc</h1>
        </div>
        <div class="card-body">
                <a href="add.php" class="btn btn-success"><i class="fas fa-user-plus"></i>Thêm thuốc</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Tên thuốc</th>
                            <th scope="col">Loại thuốc</th>
                            <th scope="col">Mã vạch</th>
                            <th scope="col">Công ty</th>
                            <th scope="col">Nơi sản xuất</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Trạng thái HSD</th>
                            <th scope="col">Chi tiết</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xoá</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!--thay đổi-->
                        <?php
                        //4 bước
                        //b1:
                        include 'connect.php';
                        //b2
                        $sql = "select id,name, type, barcode, company_name,place, quantity, expiry from drugs order by id";

                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>';
                                echo '<th scope="row">' . $row['name'] . '</th>';
                                echo '<td>' . $row['type'] . '</td>';
                                echo '<td>' . $row['barcode'] . '</td>';
                                echo '<td>' . $row['company_name'] . '</td>';
                                echo '<td>' . $row['place'] . '</td>';
                                echo '<td>' . $row['quantity'] . '</td>';
                                if ($row['expiry']) $mess = 'Còn hạn sử dụng';
                                else $mess = 'Hết hạn sử dụng';
                                echo '<td>' . $mess . '</td>';
                                echo '<td><a href="showInfo.php?id=' . $row['id'] . '" class="btn btn"><i class="fas fa-eye"></i></a></td>';
                                echo '<td><a href="edit.php?id=' . $row['id'] . '" class="btn btn-primary"><i class="fas fa-user-edit"></i></a></td>';
                                echo '<td><a href="delete.php?id=' . $row['id'] . '" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>';
                                echo '</tr>';
                            }
                        }
                        ?>

                        <!--thay đổi-->
                    </tbody>
                </table>
        </div>

    </div>
</div>
<?php
include 'footer.php';
?>