<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include('connect.php')?>
<div id="headerContainer">
    <div id="header">
        <?php
            include 'header.php';
        ?>
    </div>
</div>
<div id="contain">
    <?php
        include 'mainContent.php';
    ?> <?php include('./footer.inc.php'); ?>
</div>
</body>
</html>