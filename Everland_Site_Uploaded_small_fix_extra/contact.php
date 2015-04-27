<!DOCTYPE HTML>
<html>
<head>
<meta charset=utf-8">
<title>Contact</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" media="screen">
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

<body>
<div id="header">
    <h1>Contact </h1>
</div>
<div id="wrapper">
	

    
    
    <div id="maincontent">
        <h2>Contact Us  </h2>
      <p>No contact possible</p>
        <form id="feedback" method="post" action="">
            <p>
                <label for="name">Name:</label>
                <input name="name" id="name" type="text" class="formbox">
            </p>
            <p>
                <label for="email">Email:</label>
                <input name="email" id="email" type="text" class="formbox">
            </p>
            <p>
                <label for="comments">Comments:</label>
                <textarea name="comments" id="comments" cols="60" rows="8"></textarea>
            </p>
            <p>
                <input name="send" id="send" type="submit" value="Send message">
            </p>
        </form>
    </div>
    <?php include('./footer.inc.php'); ?>
</div>
</body>
</html>
