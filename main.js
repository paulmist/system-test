function strstr(haystack, chunk){
	if(haystack.indexOf(chunk)==-1){
		return 'Nope. Sorry. Not supported.';
	}else{
		return 'Yep. Good to go!';
	}
}
function randRange (min, max) {
	return Math.floor(Math.random() * (max - min + 1)) + min;
}
var colors = [
'#4b727f',
'#7da3ac',
'#444444',
'#594e70',
'#6c6b6b',
'#9c89ba',
'#00a2a0',
'#a5478e'
];

function resetColors(){
	for ( var i = 0; i < 6; i++ ) {
		colorPicks[i] = 'none';
	}
}
var colorPicks = [];
resetColors();

function makeBlock() {
	var n = randRange(0,colorPicks.length-1);
	var c = colorPicks[n];
	var block = '<div class="block" style="background: ' + c + '"></div>';
	colorPicks.splice(n,1);
	return block;
}

function buildRow(nb) {
	var row = '<div class="pixel-row group">';
	for(var i = 0; i < nb; i++){
		row += makeBlock();
	}
	row += '</div>';
	$('div.pixels').append(row);
}

function makeRow(nb) {
	resetColors();
	for(var ii = 0; ii < nb; ii++){
		var n = randRange(0, colors.length-1);
		colorPicks[ii] = colors[n];
	}
	buildRow(6);
}
function identInit(){
	if ( $('section.ident') ) {
		for ( var i = 0; i < 5; i++ ) {
			if ( i === 0 ) {
				makeRow(5);
			}
			if ( i === 1 ) {
				makeRow(5);
			}
			if ( i === 2 ) {
				makeRow(4);
			}
			if ( i === 3 ) {
				makeRow(2);
			}
			if ( i === 4 ) {
				makeRow(1);
			}
		}
	}
}

$().ready(function(){
	identInit();
	if(strstr(pluginlist, "Flash")=='YES'){
		if(flash_version!='undefined'){
			var flash = 'Yep. ('+flash_version+')';
		}else{
			var flash = 'Yep. Good to go!';
		}
	}else{
		var flash = 'No. Sorry. Not supported.';
	}
	
	$("#noJS").hide();
	//$("#theTable").show();
	//$("#theTable2").show();
	$("#test_resolution").html(screen.width+"x"+screen.height);
	$("#itest_resolution").val(screen.width+"x"+screen.height);
	
	$("#test_flash").html(flash);
	$("#itest_flash").val(flash);
	
	$("#test_media_player").html(strstr(pluginlist, "Windows Media Player"));
	$("#itest_media_player").val(strstr(pluginlist, "Windows Media Player"));
	
	$("#test_java").html(strstr(pluginlist, "Java"));
	$("#itest_java").val(strstr(pluginlist, "Java"));
	
	$("#test_shockwave").html(strstr(pluginlist, "Director"));
	$("#itest_shockwave").val(strstr(pluginlist, "Director"));
	
	$("#test_real_player").html(strstr(pluginlist, "RealPlayer"));
	$("#itest_real_player").val(strstr(pluginlist, "RealPlayer"));
	
	$("#test_quicktime").html(strstr(pluginlist, "QuickTime"));
	$("#itest_quicktime").val(strstr(pluginlist, "QuickTime"));
	
	$("#test_acrobat").html(strstr(pluginlist, "Acrobat Reader"));
	$("#itest_acrobat").val(strstr(pluginlist, "Acrobat Reader"));
	
	$("#test_svg").html(strstr(pluginlist, "SVG Viewer"));
	$("#itest_svg").val(strstr(pluginlist, "SVG Viewer"));
	
	$("#test_browser").html(BrowserDetect.browser+" "+BrowserDetect.version);
	$("#itest_browser").val(BrowserDetect.browser+" "+BrowserDetect.version);
	
	$("#test_os").html(os);
	$("#itest_os").val(os);
	//cookies
	document.cookie="testCookie";
	$("#test_cookie").html(strstr(document.cookie, "testCookie"));
	$("#itest_cookie").val(strstr(document.cookie, "testCookie"));
});