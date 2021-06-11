<?php 
/**
* 轉址用 for大眾
item_id
https://piggyfamily.tw/product/item-86709

東吳
https://crazymike.tw/product/home/living-goods/item-95526
https://crazymike.tw/cata/Soochow/tag-4961/page-1
這二個網址轉到這
https://tazumei.tw/app/scu_redirect.php

*/

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

//$reurl = 'https://tazumei.tw/cz_notice.html';
$reurl = 'https://piggyfamily.tw/product/item-86709';
header("Location:{$reurl}");
?>