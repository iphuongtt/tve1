<?php
require("config.php");

$vdsvvt = "pink";
$biru   = "[1;34m";
$turkis = "[1;36m";
$ijo    = "[92m";
$putih  = "[1;37m";
$pink   = "[1;35m";
$red    = "[1;31m";
$kuning = "[1;33m";
$t      = "\n";
$link   = "https://www.veeuapp.com/v1.0/incentive/tasks?access_token=" . $access_token;
$body   = array(
	"bet_amount"      => "300",
	"latitude" => 21.031187,
	"locale"          =>"in_ID",
	"longitude" => 105.78285,
	"task_extra_info" => "",
	"task_name" => "big_wheel_reward_01",
	"timezone"        => "GMT+07:00"
);
$jbody=json_encode($body,true);
$header     = array();
$header[]   = "Host: www.veeuapp.com";
$header[]   = "Connection: Keep-Alive";
$header[]   = "Accept-Encoding: gzip";
$header[]   = "User-Agent: okhttp/3.10.0";
var_dump($body);
$i=1;
while ($i < 2) {
	sleep(1);
	$curl        = curl_init();
    curl_setopt_array($curl, array(
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_URL            => $link,
		CURLOPT_TIMEOUT        => 30,
		CURLOPT_POST           => true,
		CURLOPT_POSTFIELDS     => $jbody,
		CURLOPT_HTTPHEADER     => $header,
		CURLOPT_ENCODING       =>"gzip",
		CURLOPT_SSL_VERIFYPEER => 0
    ));
	$result_video   = curl_exec($curl);
	$vinfo = curl_getinfo($curl);
    curl_close($curl);
	$result   = json_decode($result_video, true);
	var_dump($result);
	var_dump($vinfo);
	$i++;
}