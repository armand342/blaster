<?php


error_reporting(0);

system("rm blaster.php");
system('clear');
//error_reporting(0);
$hitam = "\033[0;30m";
$merah = "\033[1;31m";
$biru = "\033[1;34m";
$hijau = "\033[1;32m";
$kuning = "\033[1;33m";
$putih = "\033[1;37m";
$pink = "\033[1;95m";

//latar
$hitam1 = "\033[0;100m";
$merah1 = "\033[1;101m";
$biru1 = "\033[1;104m";
$hijau1 = "\033[1;102m";
$kuning1 = "\033[1;103m";
$putih1 = "\033[1;107m";
$nc = "\033[0m";

/* START COLOR */
$Black = "\033[0;30m";
$Black2 = "\033[1;30m";
$Red = "\033[0;31m";
$Red2 = "\033[1;31m";
$Green = "\033[0;32m";
$Green2 = "\033[1;32m";
$Yellow = "\033[0;33m";
$Yellow2 = "\033[1;33m";
$Blue = "\033[0;34m";
$Blue2 = "\033[1;34m";
$Purple = "\033[0;35m";
$Purple2 = "\033[1;35m";
$Cyan = "\033[0;36m";
$Cyan2 = "\033[1;36m";
$White = "\033[0;37m";
$White2 = "\033[1;37m";

//date_default_timezone_set("Asia/Jayapura");



//system("rm cookie.txt");

//error_reporting(0);



function url($url) {
	//include 'cfg.php';
	$headers = array();
	$headers[] = "";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	$res = curl_exec($ch);
	return $res;
}

$res = url("https://controlc.com/45818017");
//echo $res."\n";exit;
$link1 = explode('content="[tpb]', $res);
$link = explode('Password:', $link1[1]);
//echo $link[0]."\n";
$pw1 = explode('Password: ', $res);
$pw = explode(' [/tpb]', $pw1[1]);
//echo $pass[0]."\n";
$note = $link[0];
$pass = $pw[0];
if ($pass == "off") {
	$o = "\033[1;32m[\033[1;31mOFFLINE\033[1;32m]";
} else {
	$o = "\033[1;32m[ONLINE]";
}
if ($pass == "update") {
	$o = "\033[1;32m[\033[1;91mUPDATE\033[1;92m]";
}
if ($res == "") {
	$o = "\033[1;37m[\033[1;36mERROR\033[1;37m] ";
}

$lin = "$Green2=====================================================================================\n";
$del = date("D");
$date = date("m/d/Y");
//date_default_timezone_set('Asia/jayapura');
$currenttime = date('h:i:s A l ', time());
$banner = "$Cyan2
                ███████╗ █████╗ ██╗  ██╗██████╗  █████╗  █████╗  █████╗
                ╚══███╔╝██╔══██╗██║  ██║██╔══██╗██╔══██╗██╔══██╗██╔══██╗
                  ███╔╝ ███████║███████║██████╔╝███████║╚██████║╚██████║
                 ███╔╝  ██╔══██║██╔══██║██╔══██╗██╔══██║ ╚═══██║ ╚═══██║
                ███████╗██║  ██║██║  ██║██║  ██║██║  ██║ █████╔╝ █████╔╝
                ╚══════╝╚═╝  ╚═╝╚═╝  ╚═╝╚═╝  ╚═╝╚═╝  ╚═╝ ╚════╝  ╚════╝
$Green2=======================================>$kuning$del$Green2<=========================================$kuning
[+] Creator        : Zahra99                                                      [+]
[+] Telegram       : @nisa_zahra99                                                [+]
[+] Whatsapp       : 081240020785                                                 [+]
[+] Donation DOGE  : DNpXWiwZW7YBYNYD892BNi9NUPYA5fEaFt                           [+]
$Green2=====================================================================================$Cyan2
[×] Script         :  BLASTER                                                     [×]
[×] Script Status  :  $o                                      $Cyan2              [×]
$Green2===============================>$pink $currenttime$hijau<==============================\n\n";

if ($res == "") {
	system('clear');
	echo $banner;
	echo "$merah KONEKSI TERPUTUS.\n";
	echo "$merah TIDAK DAPAT TERHUBUNG KE SERVER.\n";
	echo "$merah PERIKSA KONEKSI ANDA LALU COBA LAGI.\n";
	echo "$merah PASTIKAN UNTUK TIDAK MENGGUNAKAN VPN.\n";
	exit;
}
if ($pass == 'update') {
	system("clear");
	echo $hijau;
	echo $banner;
	sleep(1);
	echo "$Cyan2 Info : $note\n";
	echo "$biru ◼ \033[1;91mAuthor Telah Melakukan Perubahan Terhadap Script \n";
	echo "$biru ◼ \033[1;95mSilahkan Hubungi Author Untuk Informasi Update \n";

	exit;
}

if ($pass == 'off') {
	system("clear");
	echo $banner;

	sleep(1);
	echo "$Cyan2 Info : $note\n";
	echo "$merah Script Telah Dinonaktifkan Oleh Pembuat \n";
	exit;
}
if ($pass == "run") {
	if ($del == "Mon") {
		$url1 = "http://controlc.com/1489e53a";
	}
	if ($del == "Tue") {
		$url1 = "http://controlc.com/a9055f0e";
	}
	if ($del == "Wed") {
		$url1 = "http://controlc.com/e049e147";
	}
	if ($del == "Thu") {
		$url1 = "http://controlc.com/6ea2ae8e";
	}
	if ($del == "Fri") {
		$url = "http://controlc.com/12a91638";
	}
	if ($del == "Sat") {
		$url1 = "http://controlc.com/3eead964";
	}
	if ($del == "Sun") {
		$url1 = "http://controlc.com/c2bbaeeb";
	}


	$res = url($url1);
	$link1 = explode('Link: ', $res);
	$link = explode(' Password:', $link1[1]);

	if ($res == "") {
		system('clear');
		echo $banner;
		echo "$merah KONEKSI TERPUTUS.\n";
		echo "$merah TIDAK DAPAT TERHUBUNG KE SERVER.\n";
		echo "$merah PERIKSA KONEKSI ANDA LALU COBA LAGI.\n";
		echo "$merah PASTIKAN UNTUK TIDAK MENGGUNAKAN VPN.\n";
		exit;
	}

	$pw1 = explode('[tpcolor=#FF0000]', $res);
	$pw = explode('[', $pw1[1]);
	//	echo $pw[0]."\n";
	//	exit;
	//echo $pass[0]."\n";

	$pass = $pw[0];

	$read = file_get_contents("key.txt");
	if ($read == $pass) {
		echo $banner;
		//echo "$Cyan2 Info : $note\n";
		echo "$hijau UPLOADING PASSWORD •\r";
		sleep(1);
		echo "$hijau UPLOADING PASSWORD • •\r";
		sleep(1);
		echo "$hijau UPLOADING PASSWORD • • •\r";
		sleep(1);
	}
	if ($read !== $pass) {
		if ($link[0] == "") {
			system('clear');
			echo $banner;
			echo "$merah KONEKSI TERPUTUS.\n";
			echo "$merah TIDAK DAPAT TERHUBUNG KE SERVER.\n";
			echo "$merah PERIKSA KONEKSI ANDA LALU COBA LAGI.\n";
			echo "$merah PASTIKAN UNTUK TIDAK MENGGUNAKAN VPN.\n";
			exit;
		}
		system ('clear');
		echo $banner;

		echo "\n $merah Visit This Link To Get Password :$hijau $link[0]\n";
		echo "$kuning  Password :$hitam \n";
		$p = trim(fgets(STDIN));

		system ('clear');
		echo $banner;
		//echo "$Cyan2 Info : $note\n";
		echo "$hijau CHECKING PASSWORD •";
		sleep(1);
echo "\r                                  \r";
		echo "$hijau CHECKING PASSWORD • •\r";
		sleep(1);
echo "\r                                  \r";
		echo "$hijau CHECKING PASSWORD • • •\r";
		sleep(1);
echo "\r                                  \r";
		if ($p == "") {
			exit;
		}
		if ($pass == $p) {
			$save = fopen("key.txt", "w");
			fwrite($save, $p);
			fclose($save);
			system('clear');
			echo $banner;
			//echo "$Cyan2 Info : $note\n";
			echo $kuning ." [".$putih."√".$kuning."]".$hijau." OPEN SCRIPT SUCCESS            \r";
			sleep (3);
		} else {
			system('clear');
			echo $banner;
			echo $kuning ." [".$merah."x".$kuning."]".$merah." PASSWORD WRONG \n";
			exit;
		}
	}
	system ('rm key.txt');
	function ua() {
		$head = [
			"Host" => "app.studioxpo.online",
			"Content-Type" => "application/json",
			"User-Agent" => "Dalvik/2.1.0 (Linux; U; Android 10; V2027 Build/QP1A.190711.020)",
			//	"authorization" => "Basic ".$tok,
			"authorization" => "Basic WERVN08kd0JyYlpuIXZBTzp2VkhyOWdAeTJ6YXclJEFQ",

		];
		foreach ($head as $body => $uy) {
			$mhn[] = $body.": ".$uy;
		}
		return $mhn;
	}
	function get($tkn) {
		$head = [
			"Host" => "app.studioxpo.online",
			//	"Content-Type" => "application/json",
			"User-Agent" => "Dalvik/2.1.0 (Linux; U; Android 10; V2027 Build/QP1A.190711.020)",
			"authorization" => "Bearer ".$tkn,

		];
		foreach ($head as $body => $uy) {
			$mhn[] = $body.": ".$uy;
		}
		return $mhn;
	}
	function post($tkn) {
		$head = [
			"Host" => "app.studioxpo.online",
			"Content-Type" => "application/json",
			"User-Agent" => "Dalvik/2.1.0 (Linux; U; Android 10; V2027 Build/QP1A.190711.020)",
			"authorization" => "Bearer ".$tkn,

		];
		foreach ($head as $body => $uy) {
			$mhn[] = $body.": ".$uy;
		}
		return $mhn;
	}

	function curl($url, $httpheader = 0, $post = 0, $proxy = 0) {
		// url, postdata, http headers, proxy, uagent
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		if ($post) {
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		}
		if ($httpheader) {
			curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
		}
		if ($proxy) {
			curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
			curl_setopt($ch, CURLOPT_PROXY, $proxy);
			// curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
		}
		curl_setopt($ch, CURLOPT_HEADER, true);
		$response = curl_exec($ch);
		$httpcode = curl_getinfo($ch);
		if (!$httpcode) return "Curl Error : ".curl_error($ch); else {
			$header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
			$body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
			curl_close($ch);
			return array($header, $body);
		}
	}

	$res = url($url1);
	$link1 = explode('Link: ', $res);
	$link = explode(' Password:', $link1[1]);

	if ($res == "") {
		system('clear');
		echo $banner;
		echo "$merah KONEKSI TERPUTUS.\n";
		echo "$merah TIDAK DAPAT TERHUBUNG KE SERVER.\n";
		echo "$merah PERIKSA KONEKSI ANDA LALU COBA LAGI.\n";
		echo "$merah PASTIKAN UNTUK TIDAK MENGGUNAKAN VPN.\n";
		exit;
	}
	$url = "https://app.studioxpo.online/login";
	$res = curl($url, ua());
	$tok = explode ('<input type="hidden" name="_token" value="', $res[1]);
	$tok = explode ('">', $tok[1])[0];
	//echo $tok;
	//exit;



	system('clear');
	echo $banner;
	echo "$Cyan2 Info : $note\n";
	echo $lin;
	echo "$pink [".$putih."≡$pink]$kuning=>$Cyan2 MENU\n\n";
	echo " 1. Register\n";
	echo " 2. Login\n";
	echo " 3. Withdraw\n";


	echo "$hijau Choose :$putih \n";
	$p = trim(fgets(STDIN));
	if ($p == 1) {
		system ('rm cfg.php');
		if (!file_exists('cfg.php')) {
			system('clear');
			echo $banner;
			echo "$merah MAKE SURE YOU REGISTER WITH COINBASE EMAIL\n\n";

			echo $lin;

			echo "$pink [".$putih."≡$pink]$kuning=>$Cyan2 REGISTER\n\n";
			echo "$hijau Email :$putih \n";
			$email = trim(fgets(STDIN));
			echo "$hijau Password :$putih \n";
			$pass = trim(fgets(STDIN));
			echo "$hijau Username :$putih \n";
			$nm = trim(fgets(STDIN));
			echo "$hijau No Hp :$putih \n";
			$hp = trim(fgets(STDIN));
			$save = fopen('cfg.php', 'w');
			fwrite($save, "<?
      ");
			fwrite($save, '$email = "'.$email.'";
      ');
			fwrite($save, '$pass = "'.$pass.'";
      ');
			fwrite($save, "?>");
			fclose($save);
		}
		include 'cfg.php';

		$res = url($url1);
		$link1 = explode('Link: ', $res);
		$link = explode(' Password:', $link1[1]);

		if ($res == "") {
			system('clear');
			echo $banner;
			echo "$merah KONEKSI TERPUTUS.\n";
			echo "$merah TIDAK DAPAT TERHUBUNG KE SERVER.\n";
			echo "$merah PERIKSA KONEKSI ANDA LALU COBA LAGI.\n";
			echo "$merah PASTIKAN UNTUK TIDAK MENGGUNAKAN VPN.\n";
			exit;
		}



		$url = "https://app.studioxpo.online/api/v1/signup";
		$data = '{"password":"'.$pass.'","phone":"'.$hp.'","name":"'.$nm.'","refferal_id":"279720","email":"'.$email.'","token":"'.$tok.'"}';
		$res = curl($url, ua(), $data);
		$res = json_decode($res[1]);
		$hasil = $res->message;
		echo " $hasil\n";
		exit;
		sleep(5);
	}
	if ($p == 2) {

		if (!file_exists('cfg.php')) {
			system('clear');
			echo $banner;

			echo $lin;

			echo "$pink [".$putih."≡$pink]$kuning=>$Cyan2 LOGIN\n\n";
			echo "$hijau Email :$putih \n";
			$email = trim(fgets(STDIN));
			echo "$hijau Password :$putih \n";
			$pass = trim(fgets(STDIN));

			$save = fopen('cfg.php', 'w');
			fwrite($save, "<?
      ");
			fwrite($save, '$email = "'.$email.'";
      ');
			fwrite($save, '$pass = "'.$pass.'";
      ');
			fwrite($save, "?>");
			fclose($save);
		}
		include 'cfg.php';
		$res = url($url1);
		$link1 = explode('Link: ', $res);
		$link = explode(' Password:', $link1[1]);

		if ($res == "") {
			system('clear');
			echo $banner;
			echo "$merah KONEKSI TERPUTUS.\n";
			echo "$merah TIDAK DAPAT TERHUBUNG KE SERVER.\n";
			echo "$merah PERIKSA KONEKSI ANDA LALU COBA LAGI.\n";
			echo "$merah PASTIKAN UNTUK TIDAK MENGGUNAKAN VPN.\n";
			exit;
		}
		system('clear');
		echo $banner;
		echo "$Cyan2 Info : $note\n";
		echo $lin;
		$url = "https://app.studioxpo.online/api/v1/login";
		$data = '{"password":"'.$pass.'","email":"'.$email.'"}';
		$res = curl($url, ua(), $data);
		$res = json_decode($res[1]);
		$cek = $res->message;
		$tkn = $res->token;
		$nama = $res->user->name;
		$bal = $res->user->balance;
		$cid = $res->user->cust_id;
		if ($cek != "Login Success") {
			echo " $cek\n";
			system ('rm cfg.php');
			exit;
		}
		system('clear');
		echo $banner;
		echo "$Cyan2 Info : $note\n";
		echo $lin;
		echo "$hijau $cek\r";
		sleep(5);
		//echo "$tkn\n";
		echo "$putih Welcome Back$Cyan2 $nama\n";
		echo "$kuning Your Coin :$Cyan2 $bal\n";
		echo $lin;
		$res = url($url1);
		$link1 = explode('Link: ', $res);
		$link = explode(' Password:', $link1[1]);

		if ($res == "") {
			system('clear');
			echo $banner;
			echo "$merah KONEKSI TERPUTUS.\n";
			echo "$merah TIDAK DAPAT TERHUBUNG KE SERVER.\n";
			echo "$merah PERIKSA KONEKSI ANDA LALU COBA LAGI.\n";
			echo "$merah PASTIKAN UNTUK TIDAK MENGGUNAKAN VPN.\n";
			exit;
		}
		$url = "https://app.studioxpo.online/api/v1/spin";
		$res = curl($url, get($tkn));
		$res = json_decode($res[1]);


		$url = "https://app.studioxpo.online/api/v1/check";
		$data = '{"package":"com.studioxpoinc.cryptoblaster"}';
		$res = curl($url, post($tkn), $data);
		$res = json_decode($res[1]);


		echo "$pink Claiming Daily\n";
		$url = "https://app.studioxpo.online/api/v1/cr_daily/$cid";
		$res = curl($url, get($tkn));
		$res = json_decode($res[1]);
		$cek = $res->success;
		$rw = $res->data;
		if ($cek == 1) {
			echo "$Cyan2 $rw\n";

			$url = "https://app.studioxpo.online/api/v1/user_coin/$cid";
			$res = curl($url, get($tkn));
			$res = json_decode($res[1]);
			$bal = $res->message;
			echo "$kuning Coin :$Cyan2 $bal\n\n";

		}
		echo $lin;
		echo "$pink Claiming Web\n";
		while (true) {
			$res = url($url1);
			$link1 = explode('Link: ', $res);
			$link2 = explode(' Password:', $link1[1]);

			if ($res == "") {
				system('clear');
				echo $banner;
				echo "$merah KONEKSI TERPUTUS.\n";
				echo "$merah TIDAK DAPAT TERHUBUNG KE SERVER.\n";
				echo "$merah PERIKSA KONEKSI ANDA LALU COBA LAGI.\n";
				echo "$merah PASTIKAN UNTUK TIDAK MENGGUNAKAN VPN.\n";
				exit;
			}
			if ($link2[0] !== $link[0]) {
				echo "$putih Script Stoped!!";
				exit;
			}
			$url = "https://app.studioxpo.online/api/v1/web/$cid";
			$res = curl($url, get($tkn));
			$res = json_decode($res[1]);

			$cek = $res->success;
			//print_r($res);
			if ($cek !== 0) {
				$tid = $res->data[0]->id;
				$tit = $res->data[0]->title;
				$tim = $res->data[0]->timer;
				if ($tid == "") {

					$url = "https://app.studioxpo.online/api/v1/user_coin/$cid";
					$res = curl($url, get($tkn));
					$res = json_decode($res[1]);
					$bal = $res->message;
					echo "$kuning Coin :$Cyan2 $bal\n\n";
					break;
				}

				echo "$putih $tit\n";
				for ($tim >= 0; $tim --;) {
					echo "$kuning Please wait :$merah $tim \r";
					sleep(1);
				}
				$url = "https://app.studioxpo.online/api/v1/cr_web/$cid/$tid";
				$res = curl($url, get($tkn));
				$res = json_decode($res[1]);
				$rw = $res->data;
				echo "$Cyan2 $rw\n";
			} else {
				echo "$merah No Web Avaliable\n";

				$url = "https://app.studioxpo.online/api/v1/user_coin/$cid";
				$res = curl($url, get($tkn));
				$res = json_decode($res[1]);
				$bal = $res->message;
				echo "$kuning Coin :$Cyan2 $bal\n\n";
				break;
			}
		}
		echo $lin;
		echo "$pink Claiming Video\n";
		while (true) {

			$res = url($url1);
			$link1 = explode('Link: ', $res);
			$link2 = explode(' Password:', $link1[1]);

			if ($res == "") {
				system('clear');
				echo $banner;
				echo "$merah KONEKSI TERPUTUS.\n";
				echo "$merah TIDAK DAPAT TERHUBUNG KE SERVER.\n";
				echo "$merah PERIKSA KONEKSI ANDA LALU COBA LAGI.\n";
				echo "$merah PASTIKAN UNTUK TIDAK MENGGUNAKAN VPN.\n";
				exit;
			}
			if ($link2[0] !== $link[0]) {
				echo "$putih Script Stoped!!";
				exit;
			}
			$url = "https://app.studioxpo.online/api/v1/video/$cid";
			$res = curl($url, get($tkn));
			$res = json_decode($res[1]);

			$cek = $res->success;
			//print_r($res);
			if ($cek !== 0) {
				$vid = $res->data[0]->id;
				$tit = $res->data[0]->title;
				$tim = $res->data[0]->timer;
				if ($vid == "") {
					$url = "https://app.studioxpo.online/api/v1/user_coin/$cid";
					$res = curl($url, get($tkn));
					$res = json_decode($res[1]);
					$bal = $res->message;
					echo "$kuning Coin :$Cyan2 $bal\n\n";
					break;
				}

				echo "$putih $tit\n";
				for ($tim >= 0; $tim --;) {
					echo "$kuning Please wait :$merah $tim \r";
					sleep(1);
				}
				$url = "https://app.studioxpo.online/api/v1/cr_video/$cid/$vid";
				$res = curl($url, get($tkn));
				$res = json_decode($res[1]);
				$rw = $res->data;
				echo "$Cyan2 $rw \n";
			} else {
				echo "$merah No Video Avaliable\n";

				$url = "https://app.studioxpo.online/api/v1/user_coin/$cid";
				$res = curl($url, get($tkn));
				$res = json_decode($res[1]);
				$bal = $res->message;
				echo "$kuning Coin :$Cyan2 $bal\n\n";
				break;
			}
		}

		echo $lin;

		echo "$pink Claiming Spin\n";
		while (true) {
			$res = url($url1);
			$link1 = explode('Link: ', $res);
			$link2 = explode(' Password:', $link1[1]);

			if ($res == "") {
				system('clear');
				echo $banner;
				echo "$merah KONEKSI TERPUTUS.\n";
				echo "$merah TIDAK DAPAT TERHUBUNG KE SERVER.\n";
				echo "$merah PERIKSA KONEKSI ANDA LALU COBA LAGI.\n";
				echo "$merah PASTIKAN UNTUK TIDAK MENGGUNAKAN VPN.\n";
				exit;
			}

			if ($link2[0] !== $link[0]) {
				echo "$putih Script Stoped!!";
				exit;
			}
			$url = "https://app.studioxpo.online/api/v1/checkspin/$cid";
			$res = curl($url, get($tkn));
			$res = json_decode($res[1]);
			$cek = $res->success;
			if ($cek !== 0) {
				$r = rand(1, 15);
				if ($r == 1 or $r == 3 or $r == 5 or $r == 7 or $r == 9 or $r == 11 or $r == 13 or $r == 15) {
					$url = "https://app.studioxpo.online/api/v1/cr_spin/$cid/$r";
					$res = curl($url, get($tkn));
					$res = json_decode($res[1]);
					$rw = $res->data;
					echo "$Cyan2 $rw\n";
				}
			} else {
				echo "$merah No Spin Avaliable\n";
				$url = "https://app.studioxpo.online/api/v1/user_coin/$cid";
				$res = curl($url, get($tkn));
				$res = json_decode($res[1]);
				$bal = $res->message;
				echo "$kuning Coin :$Cyan2 $bal\n\n";
				break;
			}


		}



		echo $lin;
		echo "$kuning If Your Coin Was 1000 Coins,
Please Run Again This Script And Select Number 3 For Withdraw\n\n";

		echo "$kuning You Was Finished All Task Today,
 Please Comeback Tomorrow \n";
		exit;

	}
	if ($p = 3) {


		system('clear');
		echo $banner;
		echo "$merah MAKE SURE YOU ENTERED COINBASE EMAIL\n\n";

		echo $lin;
if(!file_exists('cfg.php){
echo "$merah You need to login first\n";
exit;
}
include 'cfg.php';
$url = "https://app.studioxpo.online/api/v1/login";
		$data = '{"password":"'.$pass.'","email":"'.$email.'"}';
		$res = curl($url, ua(), $data);
$res = json_decode($res[1]);
		$cek = $res->message;
		$tkn = $res->token;
$cid = $res->user->cust_id;

$url = "https://app.studioxpo.online/api/v1/spin";
		$res = curl($url, get($tkn));
		$res = json_decode($res[1]);


		$url = "https://app.studioxpo.online/api/v1/check";
		$data = '{"package":"com.studioxpoinc.cryptoblaster"}';
		$res = curl($url, post($tkn), $data);
		$res = json_decode($res[1]);

$url = "https://app.studioxpo.online/api/v1/user_coin/$cid";
			$res = curl($url, get($tkn));
			$res = json_decode($res[1]);
			$bal = $res->message;
			

		echo "$pink [".$putih."≡$pink]$kuning=>$Cyan2 WITHDRAW\n\n";
echo "$kuning Coin :$Cyan2 $bal\n\n";

		echo "$hijau Email Coinbase :$putih \n";
		$emailwd = trim(fgets(STDIN));
system('clear');
		echo $banner;


		echo $lin;
		echo " $Cyan2 STARTING WITHDRAW\n\n";
		$url = "https://app.studioxpo.online/api/v1/rewards";
		$res = curl($url, get($tkn));
		$url = "https://app.studioxpo.online/api/v1/reward-request";
		$data = '{"amount":"1000","orginal_amount":"0.000010 ETH","user_id":"'.$cid.'","mobile":"'.$emailwd.'","detail":"1000 Coin","type":"Ethereum"}';
		$res = curl($url, ua(), $data);
		$res = json_decode($res[1]);
		$in = $res->data;
		echo "$hijau $in\n\n";
	}
}
