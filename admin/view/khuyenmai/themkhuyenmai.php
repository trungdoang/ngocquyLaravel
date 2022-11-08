<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../../../dist/css/styles.css" rel="stylesheet" />
    <link href="../../../dist/css/admin.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        .col {
            margin-top: 50px;
        }
    </style>
</head>

<body class="sb-nav-fixed">
    <!-- nav -->
    <?php require_once "../../layout/header.php"; ?>
    <div id="layoutSidenav">
        <!-- menu -->
        <?php require_once "../../layout/menu.php"; ?>

        <div id="layoutSidenav_content">
            <div class="body-admin">
                <div class="top-body">
                    <h1> Thêm Khuyến Mãi</h1>

                </div>
                <div class="bottom-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="form-group col-8">
                                    <label for="">Tạo Tên Chương Trình Khuyến Mãi</label>
                                    <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                    <div class="row">
                                        <div class="form-group col-7">
                                            <label for="">Loại chương trình khuyến mãi</label>
                                            <select class="form-control" name="" id="">
                                                <option>Theo Số Tiền</option>
                                                <option>Theo % giảm giá</option>

                                            </select>
                                        </div>
                                        <div class="form-group col-5">
                                            <label for="">Mức Giá</label>
                                            <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-7">
                                            <label for="">Áp Dụng Cho</label>
                                            <select class="form-control" name="" id="">
                                                <option>Nhóm Sản Phẩm</option>
                                                <option>Sản Phẩm</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-5">
                                            <label for="">Áp Dụng Cho</label>
                                            <select class="form-control" name="" id="">
                                                <option>Nhóm Sản Phẩm</option>
                                                <?php
                                                require_once "../../../model/data.php";
                                                $sql = "SELECT * FROM `product`";
                                                $result = $conn->query($sql);
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                ?>

                                                        <tbody>
                                                            <option><?php echo $row['title']; ?></option>
                                                        </tbody>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-5">

                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <button name="submit" type="submit" class="btn btn-primary btn-user btn-block " data-bs-toggle="modal" data-bs-target="#myModal">Tạo Khuyến Mãi</button>
                        </div>
                    </div>
                </div>

            </div>
            <?php require_once "../../layout/footer.php"; ?>
        </div>
    </div>
    <script src="../dist/bootstrap-5.0.2-dist/js/bootstrap.bundle.js" crossorigin="anonymous"></script>
    <script src="../dist/js/scripts.js"></script>
    <script src="../dist/js/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../dist/js/simple-databases@latest" crossorigin="anonymous"></script>
    <script src="../dist/js/datable-simple-demo.js"></script>
</body>

</html>