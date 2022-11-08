<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/bootstrap-5.0.2-dist/css/bootstrap.css" />
    <link rel="stylesheet" href="./dist/css/layout.css" />
    <link rel="stylesheet" href="style.css">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
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

        .product {
            height: 45vh;
            padding-left: 70px;
        }

        img {
            background-size: cover;
            width: 200px;
            height: 200px;
        }

        .product .product-item {
            width: 400px;
            height: 308px;
            margin: 10px;
            /* float: left; */
            text-align: center;
            border-radius: 20px;
            cursor: pointer;
            padding-top: 10px;
            box-sizing: border-box;
            border: 2px solid rgba(0, 0, 0, 0.1);
            transition: .4s;


        }

        .product-item:hover {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
            transform: translate(0px, -3px);
        }

        .product-item-title {
            font-size: 30px;
            text-align: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <?php require_once "./layout/menu.php"; ?>

    <div class="abc">
        <h3></h3>
    </div>


    <div class="row">
        <?php
        require_once "model/data.php";
        $sql = "SELECT * FROM `product`";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
               <div class="product">
                 <div  class="product-item col-4">
                    <div class="product-img"> <img src="./dist/img/<?php echo $row['thumbnail']; ?>" alt=""></div>
                    <div class="product-item-title"><?php echo $row['title']; ?></div>
                    <div class="product-item-price"><?php echo $row['price']; ?></div>
                    <div class="product-item-price-ds"></div>
                </div>
               </div>

        <?php
            }
        }
        ?>
    </div>


    <?php require_once "./layout/footer.php"; ?>
    </div>
    </div>
</body>
<script src="./dist/bootstrap-5.0.2-dist/js/bootstrap.js"></script>

</html>

