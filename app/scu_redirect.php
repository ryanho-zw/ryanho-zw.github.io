<?php 
/**
* 轉址用 for東吳
https://piggyfamily.tw/product/item-86689  
*/


//$reurl = 'https://tazumei.tw/cz_notice.html';



header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$reurl = 'https://supr.link/ODIOC';
// $reurl = 'https://piggyfamily.tw/product/item-86689';


header("Location:{$reurl}");
?>