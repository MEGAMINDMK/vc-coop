
<html>
<head>
<center>
<h1>localhost</h1>
<?php
    $ip = "127.0.0.1";
    $port = "80";
    $online = '<font class="online" title="Server Online!" color=green><b><i>ONLINE</font>';
    $offline = '<font class="offline" title="Server Offline!"color=red><b><i>OFFLINE</font>';
if (! $sock=@fsockopen($ip, $port, $num, $error, 0.25))
    {echo "$offline";}
else
    {echo "$online";}
?>
</center>
</head>
</html>

<html>
<head>
<center>
<h1>xampp</h1>
<?php
    $ip = "127.0.0.1";
    $port = "90";
    $online = '<font class="online" title="Server Online!" color=green><b><i>ONLINE</font>';
    $offline = '<font class="offline" title="Server Offline!"color=red><b><i>OFFLINE</font>';
if (! $sock=@fsockopen($ip, $port, $num, $error, 0.25))
    {echo "$offline";}
else
    {echo "$online";}
?>