<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <style>
        .banner {
            width: 100%;
            min-width: 300px;
            text-align: center;
            position: relative;
        }

        .banner img {
            width: 100%;
            height: 300px;
        }

        .pre,
        .next {
            background-color: black;
            cursor: pointer;
            position: absolute;
            top: 40%;
            width: auto;
            padding: 16px;
            color: rgb(61, 61, 61);
            font-weight: bold;
            opacity: 0.5;
            font-size: 18px;
            transition: 0.6s ease-in-out;
            border-radius: 0 3px 3px 0;
            border: none;

        }

        .pre:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .pre {
            left: 0;
            border-radius: 0 3px 3px 0;
        }
     
    </style>
    <div class="container">
        <!-- HEADER -->
        <div class="header">
            <div class="logo">
                <a href="index.php"><img src="image/dichvu/logo.png"></a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li class="dropdown">
            <a href="index.php?act=dsdv">Dịch vụ</a>
            <div class="dropdown-content">
                <?php

$sql = "SELECT * FROM loaidv ORDER BY id DESC";
$listloai = pdo_query($sql);
                foreach($listloai as $loai){
                    extract($loai);
                    $linkdm = "index.php?act=dichvu&id_loai=".$id;
                    echo ' <a href="'.$linkdm.'">'.$name.'</a>';
                }
                ?>
               
                <!-- <a href="#">Menu Con 2</a>
                <a href="#">Menu Con 3</a> -->
            </div>
        </li>
                    <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                    <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                </ul>
            </div>
            <div class="dangnhap">
                <input type="submit" value="Đăng nhập">
            </div>         
        </div>
      
        <!-- END HEADER -->