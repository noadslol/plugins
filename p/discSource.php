<?php
	if(isset($_GET["cid"]) && isset($_GET["sid"])){
		echo '<widgetbot
    server="'.$_GET['sid'].'"
    channel="'.$_GET['cid'].'"
    width="100%"
    height="100%"
></widgetbot>
<script src="https://cdn.jsdelivr.net/npm/@widgetbot/html-embed"></script>
';
	}else{
	echo '<center><h2>No Ads Lol x Discord</h2><h3>Powered by WidgetBot</h3><p>Please enter the ChannelID and ServerID you want to connect to. The server must have the WidgetBot bot in it for this to work.</p>
  <form action="embedDisc.php" method="get">
<input type="text" name="sid" id="sid" placeholder="ServerID" required><br>
<input type="text" name="cid" id="cid" placeholder="ChannelID" required><br>
<input type="submit" value="Connect">
</form>
<p><i>You can login via WidgetBot after you connect.</i></p>
</center>';
	}
?>
