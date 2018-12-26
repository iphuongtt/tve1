<?php 

date_default_timezone_set("Asia/Jakarta");

${${"GLOBALS"}["rzjprdd"]} ="\n";
$r                         ="\n\n";
$biru                      ="[1;34m";
$turkis                    ="[1;36m";
$ijo                       ="[92m";
$putih                     ="[1;37m";
$pink                      ="[1;35m";
$red                       ="[1;31m";
$kuning                    ="[1;33m";
$link                      ="https://www.veeuapp.com/v1.0/incentive/tasks?access_token=".$access_token;
$body=[
	"locale"          =>"in_ID",
	"task_extra_info" =>"",
	"task_name"       =>"vip_watch_video_ball_01",
	"timezone"        =>"GMT+07:00"
];
$jbody=json_encode($body,true);
$header=array();
$header[] = "Content-Type: application/json;charset=UTF-8";
$header[] = "Content-Length: 100";
$header[] = "Host: www.veeuapp.com";
$header[] = "Connection: Keep-Alive";
$header[] = "Accept-Encoding: gzip";
$header[] = "User-Agent: okhttp/3.10.0";
echo $kuning."[>] ".$putih."VIP Auto Xem Video Bản Pro By Adidoank - Indonesia".$t;
sleep(1);
while(true){
	sleep(1);
	$ch=curl_init();
	curl_setopt($ch,CURLOPT_URL,$link);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
	curl_setopt($ch,CURLOPT_TIMEOUT,30);
	curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
	curl_setopt($ch,CURLOPT_POST,true);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$jbody);
	curl_setopt($ch,CURLOPT_ENCODING,"gzip");
	$result=curl_exec($ch);
	$info=curl_getinfo($ch);
	curl_close($ch);
	$js=json_decode($result,true);
	$http=$info["http_code"];
	if($js["code"]=="4040"){
		$msg=$js["message"];
		echo $red."[!] ".$putih."Bạn đã xem tất cả video kiếm tiền bây giờ bạn phải vào App Veeu Để Xem Qua 5 Video Nữa Bằng Tay Để Tránh Không Rút Được Tiền: ".$red.$msg.$putih.$t;
		sleep(1);
		break;
	} elseif ($http=="200") {
		$reward=$js["task"]["reward_point"];
		$tpoin=$js["point"]["today_revenue_point"];
		$total=$js["point"]["current_point"];
		$vip=$js["point"]["vip_level"];
		echo $putih."====T=r=i=ệ=u==P=h=ú==T=h=ẻ==C=à=o==============➡️Số coin / 1 Video: ".$ijo.$reward.$putih."\n➡️Số Coin Đã Kiểm Được Hôm Nay: ".$ijo.$tpoin.$putih."\n➡️Tổng Số Coin Hiện Tại: ".$turkis.$total.$t;
		echo $putih."💎Tên Tài Khoản: ".$biru.$user.$putih."\n💎Level Vip Của Bạn: ".$turkis.$vip.${${"GLOBALS"}["rzjprdd"]};
	} else {
		sleep(5);
	}
}
echo "\n";
?>