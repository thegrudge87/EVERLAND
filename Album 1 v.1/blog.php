<?php include('./title.inc.php');  ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset=utf-8">
<title>Japan Journey<?php if (isset($title)) {echo "&#8212;{$title}";} ?></title>
<link href="styles/journey.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
<div id="header">
    <h1>Bulgarian nature</h1>
</div>
<div id="wrapper">
    <?php include('./menu.inc_01.php'); ?>
    <div id="maincontent">
        <h2>April 1, 2015</h2>
        <p>Proba1. <a href="details.php">More</a></p>
        <h2>April 2, 2015</h2>
        <p>Proba 2.<a href="details.php">More</a></p>
        <h2>April 3, 2015</h2>
        <p>Proba3 <a href="details.php">More</a></p>
        <h2>April 4, 2015</h2>
        <p>Proba 4. <a href="details">More</a></p>
    </div>
    <?php include('./footer.inc_01.php'); ?>
</div>
</body>
</html>
