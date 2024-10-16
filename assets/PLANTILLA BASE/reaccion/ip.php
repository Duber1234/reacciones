<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
function getRealIpAddr() {
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];

    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //check ip from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];

    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$ip = getRealIpAddr();
echo "La IP real del usuario es: " . $ip;
 ?>
</body>
<script type="text/javascript" src="js/jquery-3.7.1.min.js"></script>
<script type="text/javascript">
	$( "div" ).remove();
</script>
</html>