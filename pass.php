<head>
	<h1>
		<?php
			$in = $_POST["password"];
			$pass = "patrick";
			if($in == $pass){
				echo ' You Win The Challenge! ';
				echo '<form action = "/exec.php" method="post">
					<input type="text" name="insert">
					<input type="hidden" name="prev" vale = "">
					<input type="submit" value="submit">
					</form>';
			}else{
				echo " Wrong Password ";

			}
		?> 
	</h1>
</head>
<body>
	<?php
		echo $in;
	?>
</body>