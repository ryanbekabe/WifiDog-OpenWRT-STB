<?php
date_default_timezone_set('Asia/Jakarta');
//$waktu=date('Y-m-d_H_i_s'); 
$waktu=time(); 
$ipserver=$_SERVER['SERVER_ADDR']; 
$ip=$_SERVER['REMOTE_ADDR']; 
$ua=$_SERVER['HTTP_USER_AGENT']; 
$targetFile = './log/dumprequest'.$waktu.'.txt'; 
$VarHeader = "HTTP headers:\n".$_SERVER['REQUEST_METHOD']."\n".$_SERVER['REQUEST_URI']."\n".$_SERVER['SERVER_PROTOCOL']."\n";
$headerList = ""; 
foreach($_SERVER as $key_name => $key_value) { 
    $key_name . " = " . $key_value . "</br>"; 
    $headerList = $headerList . $key_name . " = " . $key_value . "\n"; 
}
$requestbody = "\nRequest body:\n" . file_get_contents('php://input') . "\n";
#/login/?gw_address=192.168.1.1&gw_port=2060&gw_id=hanyajasacom.net&ip=192.168.1.133&mac=98:22:ef:44:20:a6&url=http%3A%2F%2Fwww.msftconnecttest.com%2Fredirect
$getIp=$_GET['ip'];
//$getMacURI=strtoupper($_GET['mac']);
$getMacURI=str_replace(":",".",strtoupper($_GET['mac']));
//$macAddr=false;
#run the external command, break output into lines
//$MAC = exec('getmac');
//$MACx = exec('ifconfig | grep HWaddr');
//echo $getIp;
//echo '<br>';
//echo $getMacURI;
//echo '<br>';
//$arp=`arp -a $ip`;
//$lines=explode("\n", $arp);
#look for the output line describing our IP address
//foreach($lines as $line)
//{
//   $cols=preg_split('/\s+/', trim($line));
//   if ($cols[0]==$ipAddress)
//   {
//       $macAddr=$cols[1];
       //echo $macAddr;
//   }
//}
file_put_contents($targetFile, $VarHeader . $headerList . $requestbody);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title id="title"></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="expires" content="-1" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
<link rel="stylesheet" href="http://hanyajasacom.net/hanyajasa.net/css/desa-digital.css">
<link rel="icon" href="http://hanyajasacom.net/hanyajasa.net/img/favicon.png" />
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-8 mr-a box-semua" id="main" style="float:none;">
				<div class="row">
					<div class="col-4">	
						<div class="row">
							<div class="col-12">
								<div class="logo bmh-80 bg-white text-center"><img src="http://hanyajasacom.net/hanyajasa.net/img/logo-tk.net.png" alt="Desa Digital" style="border-radius: 5px; width:100%; max-width: 250px; height:auto;"/></div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="border-atas-bawah">
								<div class="text-berjalan bg-white text-grey"><marquee height="17" scrolldelay="150">Gunakan Layanan Akses Internet Wifi Secukupnya & Jangan Lupa Untuk Beristirahat</marquee></div>
									<!-- <div class="text-berjalan bg-white text-green"><marquee height="17" scrolldelay="150">Taqabbalallahu minna wa minkum Minal 'Aidin wal-Faizin</marquee></div> -->
								</div> 	
							</div>
						</div>
						
						<div class="row">
							<div class="col-12">
								<div class="card ">
										<div class="login">
										<form name="sendin" action="" method="post">
											<input type="hidden" name="username" />
											<input type="hidden" name="password" />
											<input type="text" name="valip" value="<?php echo $getIp; ?>"/>
											<input type="text" name="valmac" value="<?php echo $getMacURI; ?>"/>
											<input type="hidden" name="dst" value="http://www.msftconnecttest.com/redirect" />
											<input type="hidden" name="popup" value="true" />
										</form>
		
										<script type="text/javascript" src="http://hanyajasacom.net/hanyajasa.net/md5.js"></script>
										<script type="text/javascript">
										<!--
										function doLogin() {
										document.sendin.username.value = document.login.username.value;
										document.sendin.password.value = document.login.password.value;
										//hexMD5('\014' + document.login.password.value + '\073\167\055\230\360\320\027\366\031\263\161\127\172\163\124\143');
										document.sendin.submit();
										return false;
										}
										//-->
										</script>						
										<div>	
											<form autocomplete="off" name="login" action="" method="post"
												 onSubmit="return doLogin()" >
												<input type="hidden" name="dst" value="http://www.msftconnecttest.com/redirect" />
												<input type="hidden" name="popup" value="true" />
													<div class="row">
														<div class="col-4 col-md-4"> 
														<div class="box mr-2 pointer text-center text-light bg-blue" id="btnvcr" onclick="voucher()">Voucher</div>
														</div>
														<div class="col-4 col-md-4">
														<div class="box mr-2 pointer text-center text-light" id="btnmem" onclick="member()">Member</div>
														</div>
														<div class="col-4 col-md-4">
														<div class="box mr-2 pointer text-center text-light bg-blue" id="qr" onclick="window.location='https://laksa19.github.io/myqr';">QR Code</div>
														</div>
													</div>
														<input class="form-control-md mr-t-10 plch-center" name="username" type="text" value="" placeholder="Voucher" />
														<input class="form-control-md mr-t-10 plch-center" name="password" type="hidden" placeholder="Password" />
													<div class="text-center mr-t-10">
														<button type="submit" class="w-12 btn-md bg-success pd-5">Login</button>
													</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>						
						<div class="row">
						<div class="cardx">
							<img src="http://hanyajasacom.net/hanyajasa.net/img/harga.jpg" alt="Desa Digital" style="width:100%; max-width: 303.5px; height:auto;"/>
						</div>
						</div>					
					</div>
					<div class="col-8">
						<div class="row">
							<img src="http://hanyajasacom.net/hanyajasa.net/img/banner1.jpg" alt="Desa Digital" style="width:100%; max-width: 607px; height:auto;"/>
						</div>
						<div class="text-center text-grey" style="font-size: 80%">&copy; Copyright 2021 | HanyaJasa.net - All rights reserved</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
<!--
document.login.username.focus();
document.getElementById('title').innerHTML = window.location.hostname + " > login";

// login page
var username = document.login.username;
var password = document.login.password;
var luser = document.getElementById("luser");
var lpass = document.getElementById("lpass");
var btnmem = document.getElementById("btnmem");
var btnvcr = document.getElementById("btnvcr");

// set password = username
function setpass(){
  var user = username.value		
  password.value = user;
}
username.onchange = setpass;
btnmem.style.backgroundColor = "#73818f";
btnvcr.style.backgroundColor = "rgb(0, 153, 187)";  
btntrial.style.backgroundColor = "#73818f";

// change to voucher mode
function voucher(){
  username.focus();
  username.onchange = setpass;
  username.placeholder = "Voucher";
  password.type = "hidden";
  password.value = username.value;  
  btnmem.style.backgroundColor = "#73818f";
  btnvcr.style.backgroundColor = "rgb(0, 153, 187)";  
  btntrial.style.backgroundColor = "#73818f";  
}

// change to member mode
function member(){
  username.focus();
  username.onchange = "";
  username.placeholder = "Username";
  password.type= "password";
  password.value = "";
  btnmem.style.backgroundColor = "rgb(0, 153, 187)"; 
  btnvcr.style.backgroundColor = "#73818f";
  btntrial.style.backgroundColor = "#73818f"; 
}

//-->
</script>
</body>
</html>
