
<?php
$url =  "http://sw.muet.edu.pk/faculty/cvs/sample.pdf";
echo"Url : $url <br>";
$a = parse_url($url, PHP_URL_SCHEME);
echo"Scheme : $a <br>";
$b = parse_url($url, PHP_URL_HOST);
echo"Host : $b <br>";
$c = parse_url($url, PHP_URL_PATH);
echo"Path : $c <br>";

?>
