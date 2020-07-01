<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<form action="/sapa" method="POST">
	@csrf
	<input type="text" name="nama">
	<input type="submit" name="" value="Masuk">
</form>
</body>
</html>