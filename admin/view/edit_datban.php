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
    <link href="../../dist/css/styles.css" rel="stylesheet" />
    <link href="../../dist/css/admin.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../dist/css/layout.css" />
</head>

<body class="sb-nav-fixed">
    <!-- nav -->
    <?php require_once "../layout/header.php"; ?>
    <div id="layoutSidenav">
        <!-- menu -->
        <?php require_once "../layout/menu.php"; ?>

        <div id="layoutSidenav_content">

            <div class="body-admin">
    <div class="abc">
        <h3> Sửa Đặt Bàn</h3>
    </div>

    <div class="table-db">
                <form action="" method="post">
                    <div class="row-form">
                        <div class="left"> <label>Tên của bạn:</label><br> <span
                                class="wpcf7-form-control-wrap text-657"><input type="text" name="full_name" value=""
                                    size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                    aria-required="true" aria-invalid="false" placeholder="Tên của bạn..."></span><br>
                            <label>Số điện thoại của
                                bạn:</label><br> <span class="wpcf7-form-control-wrap tel-466"><input type="tel"
                                    name="phone_number" value="" size="40"
                                    class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                    aria-required="true" aria-invalid="false" placeholder="Số điện thoại..."></span><br>
                            <label>Email của bạn (nếu có):</label><br> <span
                                class="wpcf7-form-control-wrap email-715"><input type="email" name="email" value=""
                                    size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email"
                                    aria-invalid="false" placeholder="Email của bạn..."></span>
                        </div>
                        <div class="right"> <label>Số người:</label><br> <span
                                class="wpcf7-form-control-wrap number-620"><input type="number" name="number_user"
                                    value=""
                                    class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number"
                                    min="1" max="10" aria-required="true" aria-invalid="false"
                                    placeholder="Số người"></span><br> <label>Bạn có thể tới dùng bữa ngày
                                nào?</label><br>
                            <span class="wpcf7-form-control-wrap date-815"><input type="date" name="date-815" value=""
                                    class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date"
                                    min="<?php echo date("Y-m-d") ?>" max='<?php echo date('Y/m/d', $nextyear);
                            ?>' aria-required="true" aria-invalid="false" placeholder="Thời gian bạn tới"></span><br>
                            <label>Thời gian:</label><br> <span class="wpcf7-form-control-wrap menu-54"><select
                                    name="menu-54" class="wpcf7-form-control wpcf7-select" aria-invalid="false">
                                    <option value="Thời gian">Thời gian</option>
                                    <option value="Buổi sáng">Buổi sáng</option>
                                    <option value="Buổi trưa">Buổi trưa</option>
                                    <option value="Buổi chiều">Buổi chiều</option>
                                    <option value="Buổi tối">Buổi tối</option>
                                </select></span>
                        </div>
                    </div>

                    <p id="sm">
                        <input name="submit-datban" type="submit" value="Đặt bàn ngay"
                            class="wpcf7-form-control has-spinner wpcf7-submit"><span class="wpcf7-spinner"></span>
                    </p>
                    <?php 
                    $error = '';
                if(isset($_POST['submit-datban'])){
                    $full_name = $_POST['full_name'];
                    $email = $_POST['email'];
                    $phone_number = $_POST['phone_number'];
                    $number_user= $_POST['number_user'];
                    $date_815 = $_POST['date-815'];
                    $time = $_POST['menu-54'];

                    // echo "<h1>$date_815</h1>";
                    if (empty($full_name)) {
                    $error .= '<p class="error">Please enter Name.</p>';
                }
                if (empty($phone_number)) {
                    $error .= '<p class="error">Please enter Phone Number.</p>';
                }

                if (empty($date_815)) {
                    $error .= '<p class="error">Please enter Date.</p>';
                }
                if (empty($time)) {
                    $error .= '<p class="error">Please enter Time.</p>';
                }
                if (empty($error)) {
                    $query = "SELECT * FROM table_details WHERE phone_number = '$phone_number'";  
                    $result = mysqli_query($connect, $query);  

                    if (mysqli_num_rows($result) > 0)
                    {
                    echo '<p class= "p-loi">Trùng Phone_number!! Vui Lòng Nhập Lại</p>';

                    // Dừng chương trình
                    die ();
                    }


                    $sql = "INSERT INTO table_details VALUES (null,'$full_name', '$email', '$phone_number', '$number_user', '$date_815', '$time', '')";
                    // echo "Đặt Bàn Thành Công";
                        $intable = mysqli_query($connect, $sql);
                        $result = false;
                        if ($intable){
                            $result = true;
                        }
                            return json_encode($result);
                            // $query->close();
                }
            mysqli_close($connect);
                

                            // if($result == true){
                            //     // echo "<h3>Đăng Ký Thành Công</h3>";
                            //     echo $result;
                            // }
                            // echo $result;
                }
   
?>

                    <?php echo $error; ?>

                </form>
            </div>
        </div>
    </div>

            </div>
            <?php require_once "../layout/footer.php"; ?>
        </div>
    </div>
    <script src="dist/bootstrap-5.0.2-dist/js/bootstrap.bundle.js" crossorigin="anonymous"></script>
    <script src="dist/js/scripts.js"></script>
    <script src="dist/js/Chart.min.js" crossorigin="anonymous"></script>
    <script src="dist/js/simple-databases@latest" crossorigin="anonymous"></script>
    <script src="dist/js/datable-simple-demo.js"></script>
</body>

</html>