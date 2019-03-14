<?php 
require "dbCon.php";
require "simple_html_dom.php";

$html = file_get_html("http://www.muabannhadat.vn/dat-ban-3515/tp-da-nang-s31");
echo $html;

?>