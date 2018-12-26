<?php
require("config.php");

function isRunning() {
	$times = [
		 [4, 12],
		 [13, 16],
		 [14, 18],
		 [19, 21],
	];
	$hour = date('H');
	$minute = date('i');
	$found = 0;
	$min = 100;
	foreach ($times as $time) {
		if ($hour >= $time[0] && $hour < $time[1]) {
			return true;
		} else{
			$delta = $time[0] - $hour;
			if ($delta < $min)
				$min = $delta;
		}
	}
	$minute2Sleep = ($min - 1)*60 + 60 - $minute;
	$second2Sleep = $minute2Sleep * 60;
	sleep($second2Sleep);
	return true;
}

$vdsvvt = "pink";
$biru   = "[1;34m";
$turkis = "[1;36m";
$ijo    = "[92m";
$putih  = "[1;37m";
$pink   = "[1;35m";
$red    = "[1;31m";
$kuning = "[1;33m";
$t      = "\n";

print $ijo . "\n__     _______ _____ _   _ \n\ \\   / / ____| ____| | | | " . $putih . "Phiên Bản: NEW" . $ijo . "\n \ \ / /|  _| |  _| | | | | " . $putih . "TOOL VIP" . $ijo . "\n  \ V / | |___| |___| |_| | " . $putih . "X3 Coin" . $ijo . "\n   \\_/  |_____|_____|\\___/ " . $t;
echo $putih . "Bản Quyền: Group INDONESIA | Chỉnh sửa Phươngtt" . $t . $t;
$link    = "https://www.veeuapp.com/v1.0/incentive/tasks?access_token=" . $access_token;
$video = array(
	"locale"          => "in_ID",
	"task_extra_info" => "",
	"task_name"       => "watch_video_ball_01",
	"timezone"        => "GMT+07:00"
);
$body0    = json_encode($video, true);
$head     = array();
$head[]   = "Host: www.veeuapp.com";
$head[]   = "Connection: Keep-Alive";
$head[]   = "Accept-Encoding: gzip";
$head[]   = "User-Agent: okhttp/3.10.0";
$header   = array();
$header[] = "Content-Type: application/json";
$header[] = "charset=UTF-8";
$header[] = "Content-Length: 96";
$header[] = "Host: www.veeuapp.com";
$header[] = "Connection: Keep-Alive";
$header[] = "Accept-Encoding: gzip";
$header[] = "User-Agent: okhttp/3.10.0";

echo $kuning . "[>] $putih Bạn Đang Sở Hữu Tool Veeu Bản Hoàn Chỉnh\n";
sleep(1);
$curl = curl_init();
curl_setopt_array($curl, array(
	CURLOPT_URL            => "https://www.veeuapp.com/v1.0/me?access_token=" . $access_token,
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_TIMEOUT        => 30,
	CURLOPT_HTTPHEADER     => $head,
	CURLOPT_SSL_VERIFYPEER => 0,
	CURLOPT_ENCODING       =>"gzip"
));
$result = curl_exec($curl);
$info   = curl_getinfo($curl);
curl_close($curl);
$jres   = json_decode($result, true);
$http   = $info["http_code"];
$user   = $jres["user"]["nickname"];
$email  = $jres["user"]["email"];
$uid    = $jres["user"]["user_id"];
$invite = $jres["user"]["invite_code"];
if ($http == "200") {
    echo $ijo . "[*] " . $putih . "Trạng Thái Kết Nối: " . $ijo . "Thành Công !!!\n";
    echo $putih . "➡️ Tên Tài Khoản: " . $biru . $user . $putih . "\n💰 Email Của Bạn: $biru" . $email . "\n";
} else {
    echo $putih . "Kết Nối: " . $red . "Thất Bại !" . $t . $putih . " | Thông Điệp: " . $kuning . "Sai Mã Token Vui Lòng Coppy Lại Thật Chính Xác" . $t;
    exit;
}

$ch    = curl_init();
$lpoin = "https://www.veeuapp.com/v1.0/incentive/point?access_token=" . $access_token . "&timezone=GMT%2B07%3A00&locale=in_ID";
curl_setopt($ch, CURLOPT_URL, $lpoin);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$result = curl_exec($ch);
$pinfo  = curl_getinfo($ch);
curl_close($ch);
$js    = json_decode($result, true);
$total = $js["cumulative_point"];
$earn  = $js["today_revenue_point"];
$pcode = $pinfo["http_code"];
if ($pcode == "200") {
    echo $putih . "💰Tổng Coin: " . $ijo . $total . $putih . " Coin Kiếm Hôm Nay (lỗi không hiển thị): " . $ijo . $earn . $t . $t;
}
$konfir = readline($putih . "[?] $turkis Viết [y] để đồng ý (y/n): ");
if ($konfir == "y" OR $konfir == "Y") {
    sleep(1);
    echo $kuning . "[>] $putih Cảm Ơn Bạn Đã Dùng Tool Veeu Của Chúng Tôi !!!\n";
    sleep(1);
    echo $kuning . "[>] $putih Đừng Đăng Ký Nhiều Nick 1 Máy Để Tránh Bị Khoá Nick\n";
    sleep(1);
} else {
    echo $red . "[!] " . $putih . "Thất Bại Là Mẹ Thành Công Đừng Nản\n";
    exit;
}

$bet_amount = readline($putih . "[?] $turkis Nhập số coin đặt cược: ");

$link   = "https://www.veeuapp.com/v1.0/incentive/tasks?access_token=" . $access_token;
$body   = array(
	"bet_amount"      => (int)$bet_amount,
	"latitude"        => 21.015408,
	"locale"          =>"in_ID",
	"longitude"       => 105.787415,
	"task_extra_info" => "",
	"task_name"       => "big_wheel_reward_01",
	"timezone"        => "GMT+07:00"
);
$jbody=json_encode($body,true);
$header     = array();
$header[]   = "Host: www.veeuapp.com";
$header[]   = "Connection: Keep-Alive";
$header[]   = "Accept-Encoding: gzip";
$header[]   = "User-Agent: okhttp/3.10.0";
var_dump($body);
while (true) {
	if (isRunning()) {
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
	var_dump($result_video);
	var_dump($vinfo);
	    curl_close($curl);
		$result   = json_decode($result_video, true);
		file_put_contents(time().".log", $result_video);
		$reward_point  = $result['task']['reward_point'];
		$vip_level     = $result['point']['vip_level'];
		$current_point = $result['point']['current_point'];
		$base_point    = $result['task']['base_point'];
		$task_type     = $result['task']['task_type'];

		echo $putih."=======V=ò=n=g=Q=u=a=y=M=a=y=M=ắ=n=======➡️Reward point: ".$ijo.$reward_point.$putih."\n➡️Base point: ".$base_point."\n➡️Current point: ".$turkis.$current_point.$t;
		echo $putih."💎Tên Tài Khoản: ".$biru.$user.$putih."\n💎Level Vip Của Bạn: ".$turkis.$vip_level.$t;
		sleep(6);
		$i++;
	}
}