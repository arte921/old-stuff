<html>

<body>

<?
	foreach(glob('*') as $file) {
		if($file != 'index.php' && $file != 'stuff'){
			echo "<a href='".$file."'>".$file."</a><br>";
		}

	}
?>
</body>
</html>
