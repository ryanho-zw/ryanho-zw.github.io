<?php
date_default_timezone_set("Asia/Taipei");

$date = date("ymdHi", time());
// echo (int)$date;

if ( (int)$date > 2108082100 ) {
	echo "Off";
}
else {
	echo "On";
}
?>