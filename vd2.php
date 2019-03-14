<?php 
require "simple_html_dom.php";
$html = file_get_html("http://vnexpress.vn/");

$hinhs = $html->find("img");

foreach($hinhs as $h){
	//$h = "<img src='xxxxx' />"
	//xxxxx= $h->src;
	// $s ="http://khoapham.vn/images/logo.png"
	//==> logo.png
	$s = $h->src;
	echo "<img src='$s'>";

	// $img = 'hinh/'.basename($s);
	// file_put_contents($img, file_get_contents($s));

}


?>