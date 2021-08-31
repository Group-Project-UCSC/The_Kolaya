<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE?></title>
    <link rel = "icon" href = "<?php echo URL?>vendors/images/thekolaya2.png" type = "image/x-icon">
    <link rel="stylesheet" href="<?php echo URL?>vendors/css/home/style.css">
    <link rel="stylesheet" href="<?php echo URL?>vendors/css/home/queries.css">
</head>
<body>
<header>
        <nav>
            <div class="row">
                <img src="<?php echo URL?>vendors/images/thekolaya.png" class="logo">
                <img src="<?php echo URL?>vendors/images/thekolaya.png" class="logo-black">
                <div class="main-nav">
                    <a href="<?php echo URL?>user/login">LOG IN</a>
                </div>
                <!-- <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a> -->
            </div>
        </nav>
        <div class="hero-text-box">
            <h1>WELCOME TO<br><b>තේ කොළය.</b></h1>
            <a class="btn btn-full js--scroll-to-plans" href="<?php echo URL?>user/registration">REGISTER NOW</a>
        </div>
    </header>
    
    <section class="section-features" id="features">
        <div class="row">
            <h2>WHO ARE WE</h2>
            <p class="long-copy">
                Hello, we're Omnifood, your new premium food delivery service. We know you're always busy. No time for cooking. So let us take care of that, we're really good at it, we promise!
                Hello, we're Omnifood, your new premium food delivery service. We know you're always busy. No time for cooking. So let us take care of that, we're really good at it, we promise!
                Hello, we're Omnifood, your new premium food delivery service. We know you're always busy. No time for cooking. So let us take care of that, we're really good at it, we promise!
                Hello, we're Omnifood, your new premium food delivery service. We know you're always busy. No time for cooking. So let us take care of that, we're really good at it, we promise!
                Hello, we're Omnifood, your new premium food delivery service. We know you're always busy. No time for cooking. So let us take care of that, we're really good at it, we promise!
            </p>
        </div> 
    </section>
    <?php include 'views/bottomContainer.php';?>
</body>
</html>