<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'views/topContainer.php';?>
    <link rel="stylesheet" href="<?php echo URL?>vendors/css/supervisor/supervisor-style.css">
    <link rel="stylesheet" href="<?php echo URL?>vendors/css/supervisor/supervisor-queries.css">
</head>
<body>
    
    <div class="middle-container">
        <h1>GOOD SUPPERVISOR</h1>
        <hr>
        
        <div class="img-btn-container">
            <div class="left">
                <img src="<?php echo URL?>vendors/images/supervisor/1.png" alt="Image-1">
            </div>

            <div class="right">
                <img src="<?php echo URL?>vendors/images/supervisor/2.png" alt="Image-2">
            </div>

            <div class="btn-list">
                <button class="btn btn-land"><i class="fas fa-user"></i> LAND OWNERS</button>

                <button class="btn btn-fertilizer"><i class="fas fa-tree"></i> FERTILIZER</button>

                <button class="btn btn-firewood"><i class="fas fa-fire"></i> FIREWOOD</button>

                <button class="btn btn-request"><i class="fas fa-question"></i> REQUESTS </button>
            </div>
        </div>
        <hr>
    </div>
    <?php include 'views/bottomContainer.php';?>
    <script src="<?php echo URL?>vendors/js/nav-bar.js"></script>
</body>
</html>