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
                    <h1>Khuyến Mãi</h1>
                    <a href="http://localhost/quanlynhahang/admin/view/khuyenmai/themkhuyenmai.php">Thêm Khuyến Mãi</a>
                </div>
                <div class="bottom-body">
                    <table border="1" class="table table-bordered table-warning">

                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Tên Chương Trình</td>
                                <td>Áp Dụng Cho</td>
                                <td>Mức Giảm</td>
                                <td>Thời Gian Bắt Đầu </td>
                                <td>Thời Gian Kết Thúc</td>
                                <td>Hoạt Động</td>
                            </tr>
                        </thead>
                        <?php
                    require_once "../../../model/data.php";
                                $sql = "SELECT *, category.name FROM `discount`,`category` WHERE category.id= discount.category_id";
                                
                    $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                            while($row = $result->fetch_assoc()) {
                                    ?>

                        <tbody>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['title']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['discount']; ?></td>
                                <td><?php echo $row['date-start']; ?></td>
                                <td><?php echo $row['date-end']; ?></td>
                                <td><a href="suakhuyenmai.php?id=<?php echo $row['id']; ?>">Edit</a> / <a
                                        href="xoakhuyenmai.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                            </tr>
                        </tbody>
                        <?php
                            }}
                                ?>
                    </table>
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