<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Webstars - Support Information</title>
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
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
			<form action="<?=$_SERVER['REQUEST_URI'];?>" name="submit_form" method="post">
				<section class="group">
					<div class="row">
						<article>
							<i class="icon-home"></i>
							<h1>IP Address</h1>
							<span><?=$_SERVER['REMOTE_ADDR'];?></span>
						</article>
						<article>
							<i class="icon-laptop"></i>
							<h1>Host</h1>
							<span><?=gethostbyaddr($_SERVER['REMOTE_ADDR']);?></span>
						</article>
						<article>
							<i class="icon-hdd"></i>
							<h1>Operating system</h1>
							<input type="hidden" value="default" name="test_os" id="itest_os"/>
							<span id="test_os"></span>
						</article>
					</div>
					<div class="row">
						<article>
							<i class="icon-save"></i>
							<h1>Cookies</h1>
							<input type="hidden" value="" name="test_cookie" id="itest_cookie"/>
							<span id="test_cookie"></span>
						</article>
						<article>
							<i class="icon-terminal"></i>
							<h1>Javascript</h1>
							<span>Great. This is supported.</span>
						</article>
						<article>
							<i class="icon-compass"></i>
							<h1>Browser</h1>
							<input type="hidden" value="" name="test_browser" id="itest_browser"/>
							<span id="test_browser"></span>
						</article>
					</div>
					<div class="row">
						<article>
							<i class="icon-bolt"></i>
							<h1>Flash</h1>
							<input type="hidden" value="" name="test_flash" id="itest_flash"/>
							<span id="test_flash"></span>
						</article>
						<article>
							<i class="icon-desktop"></i>
							<h1>Screen resolution</h1>
							<input type="hidden" value="" name="test_resolution" id="itest_resolution"/>
							<span id="test_resolution"></span>
						</article>
						<article>
							<i class="icon-coffee"></i>
							<h1>Java</h1>
							<input type="hidden" value="" name="test_java" id="itest_java"/>
							<span id="test_java"></span>
						</article>
					</div>
					<div class="row">
						<article>
							<i class="icon-file-text-alt"></i>
							<h1>Acrobat</h1>
							<input type="hidden" value="" name="test_acrobat" id="itest_acrobat"/>
							<span id="test_acrobat"></span>
						</article>
						<article>
							<i class="icon-film"></i>
							<h1>Quicktime</h1>
							<input type="hidden" value="" name="test_quicktime" id="itest_quicktime"/>
							<span id="test_quicktime"></span>
						</article>
						<article>
							<i class="icon-film"></i>
							<h1>Real player</h1>
							<input type="hidden" value="" name="test_real_player" id="itest_real_player"/>
							<span id="test_real_player"></span>
						</article>
					</div>
					<div class="row">
						<article>
							<i class="icon-expand"></i>
							<h1>Shockwave</h1>
							<input type="hidden" value="" name="test_shockwave" id="itest_shockwave"/>
							<span id="test_shockwave"></span>
						</article>
						<article>
							<i class="icon-puzzle-piece"></i>
							<h1>SVG</h1>
							<input type="hidden" value="" name="test_svg" id="itest_svg"/>
							<span id="test_svg"></span>
						</article>
						<article>
							<i class="icon-film"></i>
							<h1>Media player</h1>
							<input type="hidden" value="" name="test_media_player" id="itest_media_player"/>
							<span id="test_media_player"></span>
						</article>
					</div>
				</section>
				<section class="group">
					<div class="row">
						<article class='remote'>
							<i class="icon-windows"></i>
							<h1>Remote support for Windows</h1>
							<input type="hidden" value="" name="test_media_player" id="itest_media_player"/>
							<span><a class="btn" href="../upload/TeamViewerQS.exe" target="_blank">Download here</a></span>
						</article>
						<article class='remote'>
							<i class="icon-apple"></i>
							<h1>Remote support for Mac OS X</h1>
							<input type="hidden" value="" name="test_media_player" id="itest_media_player"/>
							<span><a class="btn" href="../upload/TeamViewerQS.zip" target="_blank">Download here</a></span>
						</article>
					</div>
				</section>
				<section class="group">
					<div class="row speed">
						<article>
							<i class="icon-dashboard"></i>
							<h1>ADSL Speed test</h1>
							<input type="hidden" value="" name="test_media_player" id="itest_media_player"/>
							<span><a class="btn" href="http://www.speedtest.bbmax.co.uk/" target="_blank">Run test&hellip;</a></span>
						</article>
						<article class="speed-form-container">
							<h1>&hellip;And add the following details</h1>
							<div class="speed-form group">
								<div class="field">
									<label for="email">Download speed (kbps)</label>
									<input class="text" type="text" name="download" id="download" value=""/>
								</div>
								<div class="field">
									<label for="nume">Upload speed (kbps)</label>
									<input class="text" type="text" name="upload" id="upload" value=""/>
								</div>
							</div>
						</article>
					</div>
				</section>
				<section class="group">
					<div class="row details">
						<article class="detail">
							<div class="title">
								<i class="icon-envelope"></i>
								<h1>Your details</h1>
							</div>
							<div class="form-fields">
								<div class="field">
									<label for="nume">Name</label>
									<input class="text" type="text" name="nume" id="nume" value=""/>
								</div>
								<div class="field">
									<label for="email">E-mail</label>
									<input class="text" type="text" name="email" id="email" value=""/>
								</div>								
							</div>
							<div class="form-fields submit-field">
								<div class="field">
									<input type="submit" class="submit" name="ok" value="Send"/>
								</div>
							</div>
						</article>
					</div>
				</section>
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