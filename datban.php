<?php  
 $connect = mysqli_connect("localhost", "root", "", "quanlynhahang");  
 date_default_timezone_set('Asia/Ho_Chi_Minh');
 $nextyear  = mktime(0, 0, 0, date("m"),   date("d"),   date("Y")+1);


 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/bootstrap-5.0.2-dist/css/bootstrap.css" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./dist/css/layout.css" />
    <title>Document</title>
    <style>
    /* .menu-3 {
        display: none;
    } */

    .abc {

        background: url(./dist/img/goi-nem-nuong-7908.png);
        height: 400px;
        display: flex;
        justify-content: center;
        /* text-align: end; */
        align-items: flex-end;
        /* margin-bottom: -5px; */
        font-size: 35px;
        font-family: monospace;
        color: brown;
        padding-bottom: 50px;

    }

    .row-form {
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin: 10px;
    }

    .menu-3,
    h3 {
        /* margin-left: 10px; */
        padding-top: 13px;
        display: block;
        font-size: 1.2em;
        font-weight: bold;
        font-weight: 700;
        font-family: cursive;
    }

    p {
        margin-left: 8px;
        margin-top: 0;
        margin-bottom: 1rem;
    }

    div#dat-ban {
        margin: 50px;
    }

    p#sm {
        display: flex;
        justify-content: space-around;
    }

    label {
        font-weight: 500;
    }
    </style>
</head>

<body>
    <?php require_once "./layout/menu.php"; ?>
    <div class="abc">
        <h3>??????t Ba??n</h3>
    </div>

    <div class="table-db">
        <div class="table-left">
            <h3>Set Table</h3>
            <p>
                <span>Qu?? kh??ch vui l??ng ?????t b??n tr?????c ????? c?? tr???i nghi???m th?????ng th???c ???m th???c t???t nh???t t???i ????m Th????c
                    Xe??o
                </span>
            </p>

            <p><span style="font-size: 95%;"><strong><span style="color: #000000;">G???i ?? ?????t b??n:</span></strong></span>
            </p>

            <ul>
                <li class="bullet-arrow"><span style="font-size: 95%;">??i 1 ng?????i: ?????t b??n ????n</span></li>
                <li class="bullet-arrow"><span style="font-size: 95%;">??i 2 ng?????i: ?????t b??n ????i</span></li>
                <li class="bullet-arrow"><span style="font-size: 95%;">??i nh??m 4-6 ng?????i: ?????t b??n 6 ng?????i.</span></li>
                <li class="bullet-arrow"><span style="font-size: 95%;">??i nh??m 6-12 ng?????i: ?????t b??n d??i</span></li>
                <li class="bullet-arrow"><span style="font-size: 95%;">??i nh??m &gt;12 ng?????i: g???i tr???c ti???p Hotline:
                        0333.4138.17</span></li>
            </ul>
        </div>
        <div class="table-right">
            <div class="form-dat-ban" id="dat-ban">
                <h3>Li??n h??? ?????t b??n</h3>
                <p class="des">Qu?? kh??ch vui l??ng ?????t b??n tr?????c ????? ch??ng t??i s???p x???p cho qu?? kh??ch ch??? ng???i t???t nh???t!
                </p>
                <form action="" method="post">
                    <div class="row-form">
                        <div class="left"> <label>T??n c???a b???n:</label><br> <span
                                class="wpcf7-form-control-wrap text-657"><input type="text" name="full_name" value=""
                                    size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                    aria-required="true" aria-invalid="false" placeholder="T??n c???a b???n..."></span><br>
                            <label>S??? ??i???n tho???i c???a
                                b???n:</label><br> <span class="wpcf7-form-control-wrap tel-466"><input type="tel"
                                    name="phone_number" value="" size="40"
                                    class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                    aria-required="true" aria-invalid="false" placeholder="S??? ??i???n tho???i..."></span><br>
                            <label>Email c???a b???n (n???u c??):</label><br> <span
                                class="wpcf7-form-control-wrap email-715"><input type="email" name="email" value=""
                                    size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email"
                                    aria-invalid="false" placeholder="Email c???a b???n..."></span>
                        </div>
                        <div class="right"> <label>S??? ng?????i:</label><br> <span
                                class="wpcf7-form-control-wrap number-620"><input type="number" name="number_user"
                                    value=""
                                    class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number"
                                    min="1" max="10" aria-required="true" aria-invalid="false"
                                    placeholder="S??? ng?????i"></span><br> <label>B???n c?? th??? t???i d??ng b???a ng??y
                                n??o?</label><br>
                            <span class="wpcf7-form-control-wrap date-815"><input type="date" name="date-815" value=""
                                    class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date"
                                    min="<?php echo date("Y-m-d") ?>" max='<?php echo date('Y/m/d', $nextyear);
                            ?>' aria-required="true" aria-invalid="false" placeholder="Th???i gian b???n t???i"></span><br>
                            <label>Th???i gian:</label><br> <span class="wpcf7-form-control-wrap menu-54"><select
                                    name="menu-54" class="wpcf7-form-control wpcf7-select" aria-invalid="false">
                                    <option value="Th???i gian">Th???i gian</option>
                                    <option value="Bu???i s??ng">Bu???i s??ng</option>
                                    <option value="Bu???i tr??a">Bu???i tr??a</option>
                                    <option value="Bu???i chi???u">Bu???i chi???u</option>
                                    <option value="Bu???i t???i">Bu???i t???i</option>
                                </select></span>
                        </div>
                    </div>

                    <p id="sm">
                        <input name="submit-datban" type="submit" value="?????t b??n ngay"
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
                    $query = "SELECT * FROM table_details ";  
                    $result = mysqli_query($connect, $query);  

                    // if (mysqli_num_rows($result) > 0)
                    // {
                    // echo '<p class= "p-loi">Tru??ng Phone_number!! Vui Lo??ng Nh????p La??i</p>';

                    // // D???ng ch????ng tr??nh
                    // die ();
                    // }


                    $sql = "INSERT INTO table_details VALUES (null,'$full_name', '$email', '$phone_number', '$number_user', '$date_815', '$time', '')";
                    // echo "??????t Ba??n Tha??nh C??ng";
                        $intable = mysqli_query($connect, $sql);
                        $result = false;
                        if ($intable){
                            $result = true;
                        }
                            return json_encode($result);
                            echo "<h3>?????t B??n Tha??nh C??ng</h3>";
                            // $query->close();
                }
            mysqli_close($connect);
                

                            // if($result == true){
                            //     // echo "<h3>????ng Ky?? Tha??nh C??ng</h3>";
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
    <?php require_once "./layout/footer.php"; ?>
    </div>
    </div>
</body>
<script src="./dist/bootstrap-5.0.2-dist/js/bootstrap.js"></script>

</html>