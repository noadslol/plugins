if($_SERVER['PHP_SELF'] == '/watch.php' && isset($_GET['v'])){
	if(!isset($_COOKIE['rydCooldown'])){
	$rydapi = 'https://returnyoutubedislikeapi.com/votes?videoId='.$_GET['v'];
	$rydapi = @file_get_contents($rydapi);
	$rydapi = @json_decode($rydapi);
	if(isset($rydapi->viewCount)){
		echo '<p>This video has <b>'.$rydapi->viewCount.'</b> views, <b>'.$rydapi->likes.'</b> likes and <b>'.$rydapi->dislikes.'</b> dislikes. (Data powered by <a href="https://returnyoutubedislike.com/docs/usage-rights">RYD</a>,  usage rights apply.)</p>';
	}else{
		setcookie('rydCooldown', time()+86400,  time()+86400, '/');
		echo '<p>The RYD API has ratelimited you. RYD data will appear again after 24 hours.</p>';
	}
}else{
	$secs = $_COOKIE['rydCooldown'] - time();
	$hours = floor($secs / 3600);
	$minutes = floor(($secs / 60) % 60);
	$seconds = $secs % 60;
	echo '<p>The RYD API has ratelimited you. RYD data will appear again after '.$hours.' hours, '.$minutes.' minutes and '.$seconds.' seconds.</p>';
}
}
