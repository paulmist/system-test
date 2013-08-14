<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Webstars - Support Information</title>
	<link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
	<div class="wrapper">
		<header class="global-header group">
			<div class="inner-wide">
				<div class="ident">
					<div class="pixels"></div>
				</div>
				<div class="inner-wrapper">
					<figure class="logo"><img src="assets/img/webstars_logo.svg" alt=""></figure>
				</div>
			</div>
		</header>
		<div class="container">
			<section id="noJS">
				<p>If you see this, it meens that you don't have javascript enabled. The test cannot continue</p>
			</section>
			<section class="group">
				<form action="<?=$_SERVER['REQUEST_URI'];?>" name="submit_form" method="post">
					<article>
						<h1>IP Address</h1>
						<?=$_SERVER['REMOTE_ADDR'];?>
					</article>
					<article>
						<h1>Host</h1>
						<?=gethostbyaddr($_SERVER['REMOTE_ADDR']);?>
					</article>
					<article>
						<h1>Operating system</h1>
						<input type="hidden" value="default" name="test_os" id="itest_os"/>
						<span id="test_os"></span>
					</article>
					<article>
						<h1>Cookies</h1>
						<input type="hidden" value="" name="test_cookie" id="itest_cookie"/>
						<span id="test_cookie"></span>
					</article>
					<article>
						<h1>Javascript</h1>
						<span>Yes</span>
					</article>
					<article>
						<h1>Browser</h1>
						<input type="hidden" value="" name="test_browser" id="itest_browser"/>
						<span id="test_browser"></span>
					</article>
					<article>
						<h1>Flash</h1>
						<input type="hidden" value="" name="test_flash" id="itest_flash"/>
						<span id="test_flash"></span>
					</article>
					<article>
						<h1>Screen resolution</h1>
						<input type="hidden" value="" name="test_resolution" id="itest_resolution"/>
						<span id="test_resolution"></span>
					</article>
					<article>
						<h1>Java</h1>
						<input type="hidden" value="" name="test_java" id="itest_java"/>
						<span id="test_java"></span>
					</article>
					<article>
						<h1>Acrobat</h1>
						<input type="hidden" value="" name="test_acrobat" id="itest_acrobat"/>
						<span id="test_acrobat"></span>
					</article>
					<article>
						<h1>Quicktime</h1>
						<input type="hidden" value="" name="test_quicktime" id="itest_quicktime"/>
						<span id="test_quicktime"></span>
					</article>
					<article>
						<h1>Real player</h1>
						<input type="hidden" value="" name="test_real_player" id="itest_real_player"/>
						<span id="test_real_player"></span>
					</article>
					<article>
						<h1>Shockwave</h1>
						<input type="hidden" value="" name="test_shockwave" id="itest_shockwave"/>
						<span id="test_shockwave"></span>
					</article>
					<article>
						<h1>SVG</h1>
						<input type="hidden" value="" name="test_svg" id="itest_svg"/>
						<span id="test_svg"></span>
					</article>
					<article>
						<h1>Media player</h1>
						<input type="hidden" value="" name="test_media_player" id="itest_media_player"/>
						<span id="test_media_player"></span>
					</article>
					<article>
						<h1>ADSL Speed test</h1>
						<input type="hidden" value="" name="test_media_player" id="itest_media_player"/>
						<span><a href="http://www.speedtest.bbmax.co.uk/" target="_blank">Click here</a></span>
					</article>
					<article>
						<h1>Remote support for Windows</h1>
						<input type="hidden" value="" name="test_media_player" id="itest_media_player"/>
						<span><a href="../upload/TeamViewerQS.exe" target="_blank">Download here</a></span>
					</article>
					<article>
						<h1>Remote support for Mac OS X</h1>
						<input type="hidden" value="" name="test_media_player" id="itest_media_player"/>
						<span><a href="../upload/TeamViewerQS.zip" target="_blank">Download here</a></span>
					</article>
				</form>
				<form name="submit_form" action="<?=$_SERVER['REQUEST_URI'];?>" method="post">

					<!-- BEGIN SPEED TEST - DO NOT ALTER BELOW-->
					<!--
					<script type="text/javascript" src="speedtest/swfobject.js?v=2.2"></script>
					<div id="mini-demo">
						Speedtest.net Mini requires at least version 8 of Flash. Please <a href="http://get.adobe.com/flashplayer/">update your client</a>.
					</div>
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
					</script>-->
					<!-- END SPEED TEST - DO NOT ALTER ABOVE -->

					<!--
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
					</div-->
				</form>
			</section>
		</div>
	</div>
</body>
<script language="javascript" type="text/javascript" src="jquery.js"></script>
<script language="javascript" type="text/javascript" src="browser.js"></script>
<script language="javascript" type="text/javascript" src="os.js"></script>
<script language="javascript" type="text/javascript" src="plugins.js"></script>
<script language="javascript" type="text/javascript" src="flash.js"></script>
<script language="javascript" type="text/javascript" src="main.js"></script>
</html>