<?php

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"http://www.shiksha.com/engineering/colleges/colleges-banglore")//. urlencode($query));
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$ret = curl_exec($ch);
curl_close($ch);
//$wet = file_get_contents("http://www.shiksha.com/engineering/colleges/colleges-". urlencode($query));

if ($ret === false)
{
	echo "something went wrong";
	exit();
}
$wet = $ret;
$wet = preg_replace("/\n/i","",$wet);
if(preg_match_all('/<div class="clg-tpl-parent">(.*?)<input type="hidden"/i',$wet,$matches));
{
	print_r($matches[1]);
	exit;
}	




	


?>

<!--<h2 class="tuple-clg-heading"><a href="http://www.shiksha.com/university/presidency-university-bangalore-47151?city=278&
	locality=183&fro=serp&pn=1&tn=2&ct=institute&lti=47151&ts=1019460" target="_blank">
	Presidency University, Bangalore</a> -->


