$jsLib = true;
function jsi($e){
	//call jsi('alert("Hello World");'); to make a Hello World alert using JavaScript directly, it may be easier using the alert function though
	//call jsi('console.log("Hello, source dweller");'); to log something to the console, it may be easier using the conslog function though
	//basically you can inject any javascript script to any page with this function
	echo '<script defer>'.$e.'</script>';
}
function alert($e){
	//call alert("Hello World"); to make a Hello World alert
	echo '<script defer>alert("'.$e.'");</script>';
}
function conslog($e){
	//call conslog("Hello, source dweller"); to log "Hello, source dweller" to the browser console
	echo '<script defer>console.log("'.$e.'");</script>';
}
