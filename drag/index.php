<?php

// including the config file
include('config.php');
$sql = "SELECT * FROM items ORDER BY item_order ASC";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Drag and Drop using jQuery and Ajax</title>
<link rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</head>

<body>
    <div class="container">
        <h1 class="main_title">Drag and Drop using jQuery and Ajax</h1>
        <div class="content">

        <ul id="sortable">
            <?php
            foreach ($result as $rs) {
            ?>
            <li id="<?php echo $rs['id']; ?>">
                <span></span>
                <img src="<?php echo $rs['photo']; ?>">
                <div><h2><?php echo $rs['title']; ?></h2><?php echo $rs['description']; ?></div>
            </li>
            <?php
            }
            ?>
        </ul>
        </div><!-- content -->    
    </div>
</body>
</html>
