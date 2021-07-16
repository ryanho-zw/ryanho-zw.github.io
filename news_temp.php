<?php
date_default_timezone_set("Asia/Taipei");

$date = date("ymdHi", time());
echo (int)$date;

if ( (int)$date > 21080821 ) {
	echo "Off";
}
else {
	echo "On";
}
?>