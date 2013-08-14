<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Test - capabilities</title>
<script language="javascript" type="text/javascript" src="jquery.js"></script>
<script language="javascript" type="text/javascript" src="browser.js"></script>
<script language="javascript" type="text/javascript" src="os.js"></script>
<script language="javascript" type="text/javascript" src="plugins.js"></script>
<script language="javascript" type="text/javascript" src="flash.js"></script>
<script language="javascript" type="text/javascript" src="main.js"></script>
<link href="style.css" rel="stylesheet" media="all" type="text/css"/>
</head>
<body>
	<div id="top_line">
		<div class="left2">System Test Page</div>
		<div class="right2">
			<div class="left3">

			</div>
			<div class="right3">

			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
	<div id="wrapper2">
		<div id="noJS">
			<p>If you see this, it meens that you don't have javascript enabled. The test cannot continue</p>
		</div>
		<form name="submit_form" action="<?=$_SERVER['REQUEST_URI'];?>" method="post">
		<div style="display:block;float:left;">
		<table class="tabel" id="theTable" border="0" cellspacing="1" cellpadding="3" width="400" style="display:none;">
			<tr>
				<td width="24"><img src="images/ip.png" alt="" /></td>
				<td width="100">IP</td>
				<td><?=$_SERVER['REMOTE_ADDR'];?></td>
			</tr>
			<tr>
				<td width="24"><img src="images/ip.png" alt="" /></td>
				<td width="100">HOST</td>
				<td><?=gethostbyaddr($_SERVER['REMOTE_ADDR']);?></td>
			</tr>
			<tr>
				<td width="24"><img src="images/os.png" alt="" /></td>
				<td width="100">OS<input type="hidden" value="default" name="test_os" id="itest_os"/></td>
				<td id="test_os"></td>
			</tr>
			<tr>
				<td width="24"><img src="images/cookie.png" alt="" /></td>
				<td width="100">Cookies<input type="hidden" value="" name="test_cookie" id="itest_cookie"/></td>
				<td id="test_cookie"></td>
			</tr>
			<tr>
				<td width="24"><img src="images/javascript.png" alt="" /></td>
				<td width="100">Javascript</td>
				<td>YES</td>
			</tr>
			<tr>
				<td width="24"><img src="images/browser.png" alt="" /></td>
				<td width="100">BROWSER<input type="hidden" value="" name="test_browser" id="itest_browser"/></td>
				<td id="test_browser"></td>
			</tr>
			<tr>
				<td width="24"><img src="images/flash.png" alt="" /></td>
				<td width="100">FLASH<input type="hidden" value="" name="test_flash" id="itest_flash"/></td>
				<td id="test_flash"></td>
			</tr>
			<tr>
				<td width="24"><img src="images/resolution.png" alt="" /></td>
				<td width="100">RESOLUTION<input type="hidden" value="" name="test_resolution" id="itest_resolution"/></td>
				<td id="test_resolution"></td>
			</tr>
			<tr>
				<td width="24"><img src="images/java.png" alt="" /></td>
				<td width="100">JAVA<input type="hidden" value="" name="test_java" id="itest_java"/></td>
				<td  id="test_java"></td>
			</tr>
			<tr>
				<td width="24"><img src="images/acrobat.png" alt="" /></td>
				<td width="100">ACROBAT<input type="hidden" value="" name="test_acrobat" id="itest_acrobat"/></td>
				<td id="test_acrobat"></td>
			</tr>
			<tr>
				<td width="24"><img src="images/quicktime.png" alt="" /></td>
				<td width="100">QUICKTIME<input type="hidden" value="" name="test_quicktime" id="itest_quicktime"/></td>
				<td id="test_quicktime"></td>
			</tr>
			<tr>
				<td width="24"><img src="images/real_player.png" alt="" /></td>
				<td width="100">REAL PLAYER<input type="hidden" value="" name="test_real_player" id="itest_real_player"/></td>
				<td id="test_real_player"></td>
			</tr>
			<tr>
				<td width="24"><img src="images/shockwave.png" alt="" /></td>
				<td width="100">SHOCKWAVE<input type="hidden" value="" name="test_shockwave" id="itest_shockwave"/></td>
				<td id="test_shockwave"></td>
			</tr>
			<tr>
				<td width="24"><img src="images/svg.png" alt="" /></td>
				<td width="100">SVG<input type="hidden" value="" name="test_svg" id="itest_svg"/></td>
				<td id="test_svg"></td>
			</tr>
			<tr>
				<td width="24"><img src="images/media_player.png" alt="" /></td>
				<td width="100">MEDIA PLAYER<input type="hidden" value="" name="test_media_player" id="itest_media_player"/></td>
				<td id="test_media_player"></td>
			</tr>
			<tr>
				<td width="24"><img src="images/speed.png" alt="" /></td>
				<td width="100">ADSL Speed Test</td>
				<td class="speed_test"><a href="http://www.speedtest.bbmax.co.uk/" target="_blank">Click here</a></td>
			</tr>
			<tr>
				<td width="24"><img src="images/support.png" alt="" /></td>
				<td width="100">Remote Support for Windows</td>
				<td class="speed_test"><a href="../upload/TeamViewerQS.exe" target="_blank">Download here</a></td>
			</tr>
			<tr>
							<td width="24"><img src="images/support.png" alt="" /></td>
							<td width="100">Remote Support for MacOsX</td>
							<td class="speed_test"><a href="../upload/TeamViewerQS.zip" target="_blank">Download here</a></td>
			</tr>
		</table>
		</div>

		<!-- BEGIN SPEED TEST - DO NOT ALTER BELOW-->
		<script type="text/javascript" src="speedtest/swfobject.js?v=2.2"></script>
			  <div id="mini-demo">
				  Speedtest.net Mini requires at least version 8 of Flash. Please <a href="http://get.adobe.com/flashplayer/">update your client</a>.
			  </div><!--/mini-demo-->
			<script type="text/javascript">
			  var flashvars = {
					upload_extension: "php"
				};
				var params = {
					wmode: "transparent",
					quality: "high",
					menu: "false",
					allowScriptAccess: "always"
				};
				var attributes = {};
				swfobject.embedSWF("speedtest.swf?v=2.1.8", "mini-demo", "350", "200", "9.0.0", "speedtest/expressInstall.swf", flashvars, params, attributes);
			</script>
		<!-- END SPEED TEST - DO NOT ALTER ABOVE -->


		<div style="display:block;float:left;">
		<table class="tabel_form tabel" id="theTable2" border="0" cellspacing="1" cellpadding="3" width="400" style="display:none;">
				<tr>
					<td width="20%"><label for="email">Download speed</label></td>
					<td><input type="text" name="download" id="download" value=""/></td>
				</tr>
				<tr>
					<td><label for="nume">Upload speed</label></td>
					<td><input type="text" name="upload" id="upload" value=""/></td>
				</tr>
				<tr>
					<td width="20%"><label for="email">E-mail</label></td>
		    		<td><input type="text" name="email" id="email" value=""/></td>
				</tr>
				<tr>
					<td><label for="nume">Name</label></td>
					<td><input type="text" name="nume" id="nume" value=""/></td>
				</tr>
				<tr>
		    <td colspan="2"><input type="submit" class="submit" name="ok" value="Send"/></td>
			</tr>
		</table>
		</div>
		</form>
	</div>
</body>
</html>
<?php
//------------------------------------------------------------------------------
include "phpmailer/class.phpmailer.php";
//------------------------------------------------------------------------------
function trimite_email($destinatie)
{
 $mail=new PHPMailer();
 $mail->From=$_POST['email'];
 $mail->FromName=$_POST['nume'];
 $mail->AddAddress($destinatie);
 $mail->IsHTML(true);
 $mail->Subject='';
 $corp_mail=
'
<div style="display:block;float:left;">
		<table style="text-align:center;margin:0 0 0 15px;border:1px solid #fff;" border="0" cellspacing="1" cellpadding="3" width="400">
			<tr>
				<td width="24"><img src="http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'].'images/ip.png" alt="" /></td>
				<td width="100">IP</td>
				<td>'.$_SERVER['REMOTE_ADDR'].'</td>
			</tr>
			<tr>
				<td width="24"><img src="http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'].'images/os.png" alt="" /></td>
				<td width="100">OS</td>
				<td>'.$_POST['test_os'].'</td>
			</tr>
			<tr>
				<td width="24"><img src="http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'].'images/cookie.png" alt="" /></td>
				<td width="100">Cookies</td>
				<td>'.$_POST['test_cookie'].'</td>
			</tr>
			<tr>
				<td width="24"><img src="http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'].'images/javascript.png" alt="" /></td>
				<td width="100">Javascript</td>
				<td>YES</td>
			</tr>
			<tr>
				<td width="24"><img src="http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'].'images/browser.png" alt="" /></td>
				<td width="100">BROWSER</td>
				<td>'.$_POST['test_browser'].'</td>
			</tr>
			<tr>
				<td width="24"><img src="http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'].'images/flash.png" alt="" /></td>
				<td width="100">FLASH</td>
				<td>'.$_POST['test_flash'].'</td>
			</tr>
			<tr>
				<td width="24"><img src="http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'].'images/resolution.png" alt="" /></td>
				<td width="100">RESOLUTION</td>
				<td>'.$_POST['test_resolution'].'</td>
			</tr>
			<tr>
				<td width="24"><img src="http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'].'images/java.png" alt="" /></td>
				<td width="100">JAVA</td>
				<td>'.$_POST['test_java'].'</td>
			</tr>
			<tr>
				<td width="24"><img src="http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'].'images/acrobat.png" alt="" /></td>
				<td width="100">ACROBAT</td>
				<td>'.$_POST['test_acrobat'].'</td>
			</tr>
			<tr>
				<td width="24"><img src="http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'].'images/quicktime.png" alt="" /></td>
				<td width="100">QUICKTIME</td>
				<td>'.$_POST['test_quicktime'].'</td>
			</tr>
			<tr>
				<td width="24"><img src="http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'].'images/real_player.png" alt="" /></td>
				<td width="100">REAL PLAYER</td>
				<td>'.$_POST['test_real_player'].'</td>
			</tr>
			<tr>
				<td width="24"><img src="http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'].'images/shockwave.png" alt="" /></td>
				<td width="100">SHOCKWAVE</td>
				<td>'.$_POST['test_shockwave'].'</td>
			</tr>
			<tr>
				<td width="24"><img src="http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'].'images/svg.png" alt="" /></td>
				<td width="100">SVG</td>
				<td>'.$_POST['test_svg'].'</td>
			</tr>
			<tr>
				<td width="24"><img src="http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'].'images/media_player.png" alt="" /></td>
				<td width="100">MEDIA PLAYER</td>
				<td>'.$_POST['test_media_player'].'</td>
			</tr>
		</table>
		</div>
		<div style="display:block;float:left;">
		<table style="text-align:center;margin:0 0 0 15px;color:#A8593A;border:1px solid #fff;" border="0" cellspacing="1" cellpadding="3" width="400">

		<tr>
					<td width="20%"><label for="download" style="font-family:Verdana;font-size:11px;font-style:normal;font-weight:bold;">download</label></td>
					<td>'.$_POST['download'].'</td>
				</tr>
				<tr>
					<td><label for="upload" style="font-family:Verdana;font-size:11px;font-style:normal;font-weight:bold;">upload</label></td>
					<td>'.$_POST['upload'].'</td>
				</tr>

		<tr>
		    <td width="20%"><label for="email" style="font-family:Verdana;font-size:11px;font-style:normal;font-weight:bold;">E-mail</label></td>
		    <td>'.$_POST['email'].'</td>
		</tr>
		<tr>
		    <td><label for="nume" style="font-family:Verdana;font-size:11px;font-style:normal;font-weight:bold;">Name</label></td>
		    <td>'.$_POST['nume'].'</td>
		</tr>
		</table>
		</div>
';
 $mail->Body=$corp_mail;
 $mail->Mailer="mail";
 if($mail->Send()){}
 else{echo 'E-mail send error';}
}
//------------------------------------------------------------------------------
if($_POST['ok']){trimite_email('andrei@webstarsltd.com');}
if($_POST['ok']){trimite_email('emil@webstarsltd.com');}
if($_POST['ok']){trimite_email('support@webstarsltd.com');}
?>