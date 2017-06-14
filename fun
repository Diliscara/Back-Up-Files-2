<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fun Page</title>
	<link rel="stylesheet" href="css/custom.css"></link>
	<style>#if-location { position: absolute; left: 10px...</style>
</head>
<body style="background-color:grey;">
	<script type="text/javascript">
	var images = [];
	index = 0;
	
	images[0] = "image0.png";
	images[1] = "image1.png";
	images[2] = "image2.png";
	
	theimage = Math.floor(Math.random()*images.length);
	document.write(images[theimage]);
	//done
	</script>
</body>
</html>
