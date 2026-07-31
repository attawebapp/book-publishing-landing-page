<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
        <?php include 'include/css.php'; ?>
        <title><?php echo isset($title) ? $title : 'Home';  ?></title>
</head>


<?php
$brand_name = "Logo";
$phone = "1-234-567-8900";
$email = "infodemolink@gmail.com";
$address = "123 Main Street, City, Country";
?>

<body>
        <header class="header">
                <div class="container">
                        <div class="header-main">
                                <a href="index.php" class="header__logo">
                                        <img src="assets/images/logo.webp" alt="Logo" class="imgFluid" />
                                </a>
                                <div class="header_btn">
                                        <a href="tel:<?php echo $phone; ?>" class="btn">Phone: <?php echo $phone; ?><i class='bx bx-mobile'></i></a>
                                        <a href="mailto:<?php echo $email; ?>" class="btn">Email: <?php echo $email; ?><i class='bx bxs-comment-detail'></i></a>
                                        <a href="javascript:;" class="themebtn" onclick="openPopup()">Get Started</a>
                                </div>
                        </div>
                </div>
                 
        </header>

        <sidebar class="responsive_menu">
                <div class="menu_logo" id="menu_logo">
                        <a href="index" class="responsive_logo"><img src="assets/images/logo.webp" alt="images"></a>
                        <a href="javascript:;" class="themebtn" onclick="openPopup()">Get Started</a>
                </div>
        </sidebar>