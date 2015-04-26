<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
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
<div id="Latest albums">
    <h2>View Album</h2>
    <div id="contain">
		<?php 
			$album_id=$_GET['id'];
		
			$query=mysql_query("SELECT 'id', 'name', 'tags', 'comments','url', 'rating' FROM 'photos' WHERE 'album_Id'=$album_id");
			while($run=mysql_fetch_array($query)){
				$photo_name=$run['name'];
				$photo_tags=$run['tags'];
				$photo_comments=$run['comments'];
				$photo_url=$run['url'];
				$photo_rating=$run['rating'];
			?>
			<div id="albumViewer">
				<img src="/photoUploads/<?php echo $photo_url; ?>"/>
				<br/>
				<b><?php echo $photo_name; ?></b>
		<?php
			}
		?>
		<div class="clear"></div>
   </div>
</div>
</body>
</html>