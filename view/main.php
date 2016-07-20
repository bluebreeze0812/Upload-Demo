<!DOCTYPE html>
<html>
<head>
<meta http-equiv="charset" content="utf-8">
<link rel="stylesheet" href="./css/main.css">
<title>Upload</title>
</head>
<body>

<div class="form_div">
<form action="../controller/upload-process.php" method="post" enctype="multipart/form-data">

<label for="name">Name:&nbsp;</label>
<input type="text" name="name" id="name">
<br>
Description:
<br>
<textarea name="desc" id="desc" rows="10" cols="50"></textarea>
<br>
<input type="file" name="pic" id="pic">
<br>
<input type="submit" value="submit">
</form>
</div>

</body>
</html>