<html>
<head>
<title>file uploading</title>
</head>
<body>
<form method="post" action="/file" enctype="multipart/form-data">
file:<input type="file" name="user_file"><br><br>
@csrf
<button type="submit" name="cc">Upload file</button>
</form>
</body>
</html>
