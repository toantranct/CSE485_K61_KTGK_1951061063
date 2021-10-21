<?php
include 'header.php';
include 'connect.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
?>

<head>

</head>
<main>
    <?php
    $sql = "SELECT * FROM drugs WHERE id=$id";
    $res = mysqli_query($conn, $sql);
    if ($res == true) {
        if (mysqli_num_rows($res) == 1) {
            $row = mysqli_fetch_assoc($res);
            $name = $row['name'];
            $type = $row['type'];
            $barcode = $row['barcode'];
            $dose = $row['dose'];
            $code = $row['code'];
            $cost_price = $row['cost_price'];
            $selling_price = $row['selling_price'];
            $expiry = $row['expiry'];
            $company_name = $row['company_name'];
            $production_date = $row['production_date'];
            $expiration_date = $row['expiration_date'];
            $place = $row['place'];
            $quantity = $row['quantity'];
        } else {
            header('location:"index.php"');
        }
    }
    ?>
    <?php
    if (isset($_POST["edit"])) {
        $row = mysqli_fetch_assoc($res);
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
        $sql = "UPDATE drugs
                    set name = $name 
                        and type = $type
                        and barcode = $barcode
                        and dose = $dose
                        and code = $code
                        and cost_price = $cost_price
                        and selling_price = $selling_price
                        and expiry = $expiry
                        and company_name = $company_name
                        and production_date = $production_date
                        and expiration_date = $expiration_date
                        and place = $place
                        and quantity= $quantity
                    where id = $id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("location:index.php");
        } else {
            header("location: 404.php");
        }
    }

    ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 style="text-align:center;">Sửa thông tin thuốc</h1>
            </div>

            <div class="card-body">
                <form action="" method="POST">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="id" name="id">Mã thuốc: <?php echo $id; ?></label>

                                <div class="mb-3">
                                    <label for="name" class="form-label">Tên loại thuốc</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="type" class="form-label">Loại thuốc</label>
                                    <input type="text" class="form-control" name="type" value="<?php echo $row['type']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="barcode" class="form-label">Max barcode</label>
                                    <input type="text" class="form-control" name="barcode" value="<?php echo $row['barcode'];; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="dose" class="form-label">Liều lượng(ml)</label>
                                    <input type="dose" class="form-control" name="dose" value="<?php echo $row['dose']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="code" class="form-label">Mã</label>
                                    <input type="code" class="form-control" name="code" value="<?php echo $row['code']; ?>">
                                </div>


                                <div class="mb-3">
                                    <label for="cost_price" class="form-label">Giá nhập</label>
                                    <input type="cost_price" class="form-control" name="cost_price" value="<?php echo $row['cost_price']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="selling_price" class="form-label">Giá bán</label>
                                    <input type="selling_price" class="form-control" name="selling_price" value="<?php echo $row['selling_price']; ?>">
                                </div>

                            </div>

                            <div class="col-md-6">
                                <label for="id" name="id">&nbsp;</label>
                                <div class="mb-3">
                                    <label for="expiry" class="form-label">Trạng thái hạn sử dụng</label>
                                    <input type="expiry" class="form-control" name="expiry" value="<?php echo $row['expiry']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="company_name" class="form-label">Tên công ty</label>
                                    <input type="company_name" class="form-control" name="company_name" value="<?php echo $row['company_name']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="production_date" class="form-label">Ngày sản xuất</label>
                                    <input type="production_date" class="form-control" name="production_date" value="<?php echo $row['production_date']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="expiration_date" class="form-label">Ngày hết hạn</label>
                                    <input type="expiration_date" class="form-control" name="expiration_date" value="<?php echo $row['expiration_date']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="place" class="form-label">Nơi sản xuất</label>
                                    <input type="place" class="form-control" name="place" value="<?php echo $row['place']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="quantity" class="form-label">Số lượng</label>
                                    <input type="quantity" class="form-control" name="quantity" value="<?php echo $row['quantity']; ?>">
                                </div>
                                <button style="height: 50px; width:100px; float:right;" type="submit" class="btn btn-primary" value="edit" name="edit">Sửa</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

</main>

<?php
include 'footer.php';
?>