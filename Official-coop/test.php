<html>
<head><title>Grand Theft Co-Op Server Management</title></head>
<body><pre>
<?php
	function checkOnline($domain) {
	   $curlInit = curl_init($domain);
	   curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT,10);
	   curl_setopt($curlInit,CURLOPT_HEADER,true);
	   curl_setopt($curlInit,CURLOPT_NOBODY,true);
	   curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,true);
	   curl_setopt($curlInit,CURLOPT_PORT, 8443);

	   //get answer
	   $response = curl_exec($curlInit);

	   curl_close($curlInit);
	   if ($response) return true;
	   return false;
	}
	
	$serverHost = $_GET['server'];	
	$active = checkOnline($serverHost);
	
	echo "Host: ".$serverHost.":8443<br />";
	echo "Port Status: ".($active ? "up" : "down")."<br />";
?>
</pre></body>
</html>