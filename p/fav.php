if($_SERVER['PHP_SELF'] == '/index.php'){


$favCreator = "MrBeast"; //Change MrBeast to your favorite creator


echo '<h2 class="video-section-title">Because your favorite creator is '.$favCreator.'</h2>
<p class="video-section-title">Enjoy awesome videos from '.$favCreator.'</p><br>';
$invidiousInstance = 'https://vid.puffyan.us';
$trending = @file_get_contents($invidiousInstance."/api/v1/search?q=".$favCreator);
if(isset($trending)){
$trending = json_decode($trending);
foreach ($trending as $value) {
$init = $value->lengthSeconds;
$hours = floor($init / 3600);
$minutes = floor(($init / 60) % 60);
$seconds = $init % 60;
    echo '<article class="video-container"><a href="watch.php?v='.$value->videoId.'" class="thumbnail" data-duration="'.$hours.':'.$minutes.':'.$seconds.'">
	<img class="thumbnail-image" src="https://i3.ytimg.com/vi/'.$value->videoId.'/maxresdefault.jpg">
	</a>
	<div class="video-bottom-section">
          <div class="video-details">
            <a href="watch.php?v='.$value->videoId.'" class="video-title">'.$value->title.'</a>
            <a href="search.php?q='.$value->author.'" class="video-channel-name">'.$value->author.'</a>
            <div class="video-metadata">
              <span>'.$value->viewCount.' views</span>
              •
              <span>'.$value->publishedText.'</span>
            </div>
          </div>
        </div>
      </article>';
}
}else{
	echo '<p>No Ads Lol is experiencing some technical difficulties getting videos from your favorite creator. Please reload the page. If the error persists, try again later.</p>';
}
}
