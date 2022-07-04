<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>customer</title>
</head>
<body>
<h2>Customer</h2>
<form action="{{url('customer')}}" method="post">
	@csrf
	<input type="text" name="customer_name"><br>
	<input type="email" name="email"><br>

	<input type="submit" name="submit">

</form>

</body>
</html>