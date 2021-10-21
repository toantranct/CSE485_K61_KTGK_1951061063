<?php
include 'header.php';
include 'connect.php';
?>

<head>

</head>
<main>
    <?php
    if (isset($_POST["add"])) {
        $name = $_POST['name'];
        $type = $_POST['type'];
        $barcode = $_POST['barcode'];
        $dose = $_POST['dose'];
        $code = $_POST['code'];
        $cost_price = $_POST['cost_price'];
        $code = $_POST['code'];
        $selling_price = $_POST['selling_price'];
        $expiry = $_POST['expiry'];
        $company_name = $_POST['company_name'];
        $production_date = $_POST['production_date'];
        $expiration_date = $_POST['expiration_date'];
        $place = $_POST['place'];
        $quantity = $_POST['quantity'];
        $sql = "INSERT INTO `drugs`(`name`, `type`, `barcode`, `dose`, `code`, `cost_price`, `selling_price`, `expiry`, `company_name`, `production_date`, `expiration_date`, `place`, `quantity`) VALUES
                        ('$name','$type', '$barcode', '$dose', '$code', $cost_price, $selling_price, $expiry, '$company_name', '$production_date', '$expiration_date', '$place', $quantity)";
        $result = mysqli_query($conn, $sql);    
        echo $sql;
        if ($result) {
            header("location:index.php");
        }
        else {
            header("Location: 404.php");
        }
        
    }

    ?>
    <div class="container">
        <h1>Sửa thông tin thuốc</h1>
        <form action="" method="POST">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên loại thuốc</label>
                            <input type="text" class="form-control" name="name" value="">
                        </div>

                        <div class="mb-3">
                            <label for="type" class="form-label">Loại thuốc</label>
                            <input type="text" class="form-control" name="type" value="">
                        </div>
                        <div class="mb-3">
                            <label for="barcode" class="form-label">Max barcode</label>
                            <input type="text" class="form-control" name="barcode" value="">
                        </div>
                        <div class="mb-3">
                            <label for="dose" class="form-label">Liều lượng(ml)</label>
                            <input type="dose" class="form-control" name="dose" value="">
                        </div>

                        <div class="mb-3">
                            <label for="code" class="form-label">Mã</label>
                            <input type="code" class="form-control" name="code" value="">
                        </div>


                        <div class="mb-3">
                            <label for="cost_price" class="form-label">Giá nhập</label>
                            <input type="cost_price" class="form-control" name="cost_price" value="">
                        </div>

                        <div class="mb-3">
                            <label for="selling_price" class="form-label">Giá bán</label>
                            <input type="selling_price" class="form-control" name="selling_price" value="">
                        </div>

                    </div>

                    <div class="col-md-6">
        
                        <div class="mb-3">
                            <label for="expiry" class="form-label">Trạng thái hạn sử dụng</label>
                            <input type="expiry" class="form-control" name="expiry" value="">
                        </div>

                        <div class="mb-3">
                            <label for="company_name" class="form-label">Tên công ty</label>
                            <input type="company_name" class="form-control" name="company_name" value="">
                        </div>

                        <div class="mb-3">
                            <label for="production_date" class="form-label">Ngày sản xuất</label>
                            <input type="production_date" class="form-control" name="production_date" value="">
                        </div>

                        <div class="mb-3">
                            <label for="expiration_date" class="form-label">Ngày hết hạn</label>
                            <input type="expiration_date" class="form-control" name="expiration_date" value="">
                        </div>

                        <div class="mb-3">
                            <label for="place" class="form-label">Nơi sản xuất</label>
                            <input type="place" class="form-control" name="place" value="">
                        </div>

                        <div class="mb-3">
                            <label for="quantity" class="form-label">Số lượng</label>
                            <input type="quantity" class="form-control" name="quantity" value="">
                        </div>
                        <button style="height: 50px; width:100px; float:right;" type="submit" class="btn btn-primary" value="add" name="add">Thêm</button>
                    </div>
                </div>
            </div>

        </form>
    </div>

</main>

<?php
include 'footer.php';
?>