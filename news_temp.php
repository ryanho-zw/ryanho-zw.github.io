<?php
$date = date("Ymd", time());
// echo (int)$date;

if ( (int)$date > 20210216 ) {
	echo "Off";
}
else {
	echo "On";
}
?>