<?php
	require "inc/db.php";

	//fetch existing shouts
	$query = "SELECT * FROM shouts ORDER BY id DESC";
	$result = $db_conn->query($query);
	if(!$result){
		echo "ERROR: ".$db_conn->error;
		die();
	}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Php Shoutbox</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>

	<div class="container">
		<header>
			<h1>JS Shoutbox</h1>

		</header>
		<div id="shouts">
			<ul>
				<?php
				    while($shout = $result->fetch_object()):
					    echo "<li>$shout->name : $shout->shout [$shout->date]</li>";
				?>
				<?php
				    endwhile;
				?>
			</ul>
		</div>
		<footer>
			<form action="">
				<label for="name">Name</label>
				<input type="text" name="name" id="name"/>
				<label for="shoutText">Shout Text</label>
				<input type="text" name="shoutText" id="shoutText"/>
				<input type="submit" name="submit" id="submit" value="SHOUT"/>
			</form>
		</footer>
	</div>

<script src="../dist/jQ/jquery-3.1.0.min.js"></script>
<script src="script.js"></script>
</body>
</html>