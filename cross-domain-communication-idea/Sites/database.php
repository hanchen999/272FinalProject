<!DOCTYPE html>
<html>
<head>
	<title>Search Results</title>
</head>
<body style="font-family:arial sans-serif" style="background-color: #f0e68c">
	<?php
		extract($_POST);
		//build seletc query
		$query = "SELECT".$select."FROM BOOKs";
		//connect to mysql
		if(!($database = mysql_connect("ritacccc_mc", "ritacccc_mc", ""))) {
			die("could not connect to database");
		}
		//open products database
		if(!mysql_select_db("Product", database)) {
			die("could not open prodcut database");
		}
		if(!($result = mysql_query($query, $database))) {
			print("could not execute query<br/>");
			die(mysql_error());
		}
	 ?>
	 <h3 style="color:blue"> search results</h3>
	 <table border="1" cellpadding="3" cellspacing="2" style = "background-color: #ADD8E6">
	 	<?php
	 		for($counter = 0; $row = mysql_fetch_row($result); $counter++) {
				print("<tr>");
				foreach ($row as $key => $value) {
						# code...
					print("<td>$value</td>");
				}
				print("</tr>");
			}
			mysql_close($database);

	 	?>
	 </table>
	 <br/> your search yielded<strong>
	 <?php print("$counter")?>results.<br/><br/></strong>
	 <h5> please email comments to
	 	<a href="mailto: deitel@deiteil.com">
	 		Deitel and Association, Inc.
	 	</a>
	 </h5>

</body>
</html>