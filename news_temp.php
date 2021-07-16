<?php
$date = date("ymdHi", time());
echo (int)$date;

if ( (int)$date > 21080821 ) {
	echo "Off";
}
else {
	echo "On";
}
?>