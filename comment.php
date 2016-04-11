<!DOCTYPE html>
<html>
<head>
	<title>test page</title>
	<meta charset="utf-8">
</head>
<body>
<div class="body" style="width:1000px;margin:0px solid">
	<div style="border:1px solid #ddd;width:300px">
		<div style="width:250px"><a href="http://weather.webmart.net/91888417" target="_blank" style="text-decoration:none">Weather in Hà Nội</a><br /><script src="http://weather.webmart.net/e/91888417"></script></div>
	</div>
</div>
<div style="border:1px solid #ddd;width:300px;margin-top:15px">
	<iframe width="560" height="315" src="https://www.youtube.com/embed/9wiq-gLzw1c" frameborder="0" allowfullscreen></iframe></div>
<form method="post" action="" enctype="multipart/form-data">
	<input type="file" name="upload[]" multiple="multiple">
	<input type="submit">
</form>
<?php 
	if(isset($_FILES["upload"]["name"]))
	{
	$i=0;
	foreach ($_FILES["upload"]["name"] as $file) {
	 	echo $file."<br>";
	 	$tmp_name=$_FILES["upload"]["tmp_name"][$i];
	 	$i++;
	 	move_uploaded_file($tmp_name,"images/".time().$file);
	 } 
	}
 ?>
</body>
</html>