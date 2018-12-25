<?php
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
require("config.php");

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
echo $result;
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
require __DIR__ . "/modul/modules";
while (true) {
	sleep(1);
	$curl        = curl_init();
    curl_setopt_array($curl, array(
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_URL            => $link,
		CURLOPT_TIMEOUT        => 30,
		CURLOPT_POST           => true,
		CURLOPT_POSTFIELDS     => $body0,
		CURLOPT_HTTPHEADER     => $header,
		CURLOPT_ENCODING       =>"gzip",
		CURLOPT_SSL_VERIFYPEER => 0
    ));
	$result_video   = curl_exec($curl);
	$vinfo = curl_getinfo($curl);
    curl_close($curl);
	$jvid   = json_decode($result_video, true);
	$vhttp  = $vinfo["http_code"];
	$msg    = $jvid["message"];
	$rpoin  = $jvid["task"]["reward_point"];
	$cpoin  = $jvid["point"]["current_point"];
	$second = $jvid["task"]["extra"]["complete_seconds"];
	$tpoin  = $jvid["point"]["today_revenue_point"];
    if ($msg == "complete full") {
        $grfoplfvarq               = "msg";
        echo $red . "[!] $putih Nghỉ ngơi nhé mai chiến tiếp:$red " . ${$grfoplfvarq} . "$putih\n";
        sleep(1);
        break;
    } elseif ($msg == "task invalid") {
        break;
    } elseif ($vhttp == "200") {
        echo $kuning . "[>] $ijo Thành Công $putih| Tên Tài Khoản: $biru" . $user . $turkis . " | Số Coin Nhận: " . $putih . $cpoin . $ijo . "\n[!] " . $turkis . "Số Coin Nhận: " . $putih . $rpoin . $ijo . " | " . $turkis . "Số Coin Nhận: " . $putih . $tpoin . "\n=================================================\r\n";
    } else {
        sleep(5);
    }
}
require __DIR__ . "/modul/vip.php";
?>