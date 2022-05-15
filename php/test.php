<?php
echo "test";
require_once("./phpQuery-onefile.php");
$html = file_get_contents("https://gogo.gs/");
$doc = phpQuery::newDocument($html);
echo pq(".price:eq(1)")->text();
echo pq(".price:eq(0)")->text();

$html = file_get_contents("https://sp.nicovideo.jp/search/ためにならない?sort=h&order=d&f_range=0&l_range=0&genre=");
$doc = phpQuery::newDocument($html);
echo pq(".video-information-container")->text();

?>