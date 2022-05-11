$winLib = true;
function shutdown($e) {
	// call shutdown('-r -t 1'); to restart
	// call shutdown('-l -t 1'); to part shutdown (log out only, power still on)
	// call shutdown('-s -t 1'); to full shutdown (log out and power off)
	shell_exec('shutdown '.$e);
}
function ping($e) {
	// call ping('www.github.com'); to ping Github, returns full ping response
	return shell_exec('ping '.$e);
}
function dlBits($e,$f) {
	// call dlBits('http://localhost/favicon.ico', 'C:\Users\%USERNAME%\Downloads\favicon.ico'); to download the No Ads Lol favicon via BitsAdmin. Response should contain "Transfer complete." if the transfer was done successfully.
	return shell_exec('bitsadmin.exe /transfer "NoAdsLolWinLibDL" '.$e.' '.$f);
}
