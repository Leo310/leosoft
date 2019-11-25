 <?php
include ('includes/header.html');
?>

</head>   

<body>
	<h1>Meine Webside</h1>
	<p>testing script and keybind joooo</p>
	<a href="cam"><button>Kamera</button></a>
	<form action="scr_aus.php" method="post">
		<input type="submit" name="aus" value="ausschalten">
	</form>
	<form action="scr_aus.php" method="post">
		<input type="submit" name="an" value="anschalten">
	</form>		
</body>
</html>
