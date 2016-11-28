<!DOCTYPE html>
<html>
<head>
	<title>Sample database query</title>
</head>
<body style="background-color:#f0e68c">
	<h2 style="font-family: arial color:blue">
		query a mysql database
	</h2>
	<form method="post" action="database.php">
		<p> select a field to display:
			<select name = "select">
				<option selected="selected"> * </option>
				<option>ID</option>
				<option>Title</option>
				<option>category</option>
				<option>ISBN</option>
			</select>
		</p>
		<input type="submit" value = "Send Query" style = "background-color: blue; color:yellow; font-weight: bold" />
	</form>
</body>
</html>