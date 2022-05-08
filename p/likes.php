if($_SERVER['PHP_SELF'] == '/watch.php' && isset($_GET['v'])){
$rydapi = 'https://returnyoutubedislikeapi.com/votes?videoId='.$_GET['v'];
$rydapi = @file_get_contents($rydapi);
$rydapi = @json_decode($rydapi);
if(isset($rydapi->viewCount)){
echo '<p>This video has <b>'.$rydapi->viewCount.'</b> views, <b>'.$rydapi->likes.'</b> likes and <b>'.$rydapi->dislikes.'</b> dislikes. (Data powered by <a href="https://returnyoutubedislike.com/docs/usage-rights">RYD</a>,  usage rights apply.)</p>';
}else{
echo '<p>Cannot fetch data from RYD, server down or ratelimit exceeded.</p>';
}
}
