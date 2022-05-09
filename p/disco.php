if(!file_exists("playerWithDisc.php") || !file_exists("embedDisc.php")){
	file_put_contents("playerWithDisc.php",'<title>No Ads Lol x Discord</title>
	<iframe src="http://localhost/embedDisc.php" style="border:0px #ffffff none;" name="discord" scrolling="yes" frameborder="1" marginheight="0px" marginwidth="0px" height="100%" width="20%" allowfullscreen></iframe><iframe src="http://localhost/index.php?i=1" style="border:0px #ffffff none;" name="discord" scrolling="yes" frameborder="1" marginheight="0px" marginwidth="0px" height="100%" width="80%" allowfullscreen></iframe>');
	file_put_contents("embedDisc.php",file_get_contents('https://raw.githubusercontent.com/noadslol/plugins/main/p/discSource.php'));
}
if($_SERVER['PHP_SELF'] == '/index.php' && !isset($_GET['i'])){
	echo '<p><a href="playerWithDisc.php">Watch with Discord</a></p>';
}
