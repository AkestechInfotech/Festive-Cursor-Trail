<?php 

/*******************************
	ALL SCRIPTS LOADED HERE
*******************************/

function wpap_load_style()
{
	wp_enqueue_style('wpap-styles',plugin_dir_url(__FILE__) . '../css/style.css');
}


function wpap_load_cursor() {

global $wpap_setting;
$setting_text = $wpap_setting['cursor_text'];
	$output="
<script type=\"text/javascript\">
;(function(){
// Your message here (QUOTED STRING)
var msg = \" $setting_text \";
/* THE REST OF THE EDITABLE VALUES BELOW ARE ALL UNQUOTED NUMBERS */
// Set font's style size for calculating dimensions
// Set to number of desired pixels font size (decimal and negative numbers not allowed)
var size = 20;
// Set both to 1 for plain circle, set one of them to 2 for oval
// Other numbers & decimals can have interesting effects, keep these low (0 to 3)
var circleY = 0.75; var circleX = 2;
// The larger this divisor, the smaller the spaces between letters
// (decimals allowed, not negative numbers)
var letter_spacing = 5;
// The larger this multiplier, the bigger the circle/oval
// (decimals allowed, not negative numbers, some rounding is applied)
var diameter = 10;
// Rotation speed, set it negative if you want it to spin clockwise (decimals allowed)
var rotation = 0.4;
// This is not the rotation speed, its the reaction speed, keep low!
// Set this to 1 or a decimal less than one (decimals allowed, not negative numbers)
var speed = 0.3;

if (!window.addEventListener && !window.attachEvent || !document.createElement) return;
msg = msg.split('');
var n = msg.length - 1, a = Math.round(size * diameter * 0.208333), currStep = 20,
ymouse = a * circleY + 20, xmouse = a * circleX + 20, y = [], x = [], Y = [], X = [],
o = document.createElement('div'), oi = document.createElement('div'),
b = document.compatMode && document.compatMode != \"BackCompat\"? document.documentElement : document.body,
mouse = function(e){
 e = e || window.event;
 ymouse = !isNaN(e.pageY)? e.pageY : e.clientY; // y-position
 xmouse = !isNaN(e.pageX)? e.pageX : e.clientX; // x-position
},
makecircle = function(){ // rotation/positioning
 if(init.nopy){
  o.style.top = (b || document.body).scrollTop + 'px';
  o.style.left = (b || document.body).scrollLeft + 'px';
 };
 currStep -= rotation;
 for (var d, i = n; i > -1; --i){ // makes the circle
  d = document.getElementById('iemsg' + i).style;
  d.top = Math.round(y[i] + a * Math.sin((currStep + i) / letter_spacing) * circleY - 15) + 'px';
  d.left = Math.round(x[i] + a * Math.cos((currStep + i) / letter_spacing) * circleX) + 'px';
 };
},
drag = function(){ // makes the resistance
 y[0] = Y[0] += (ymouse - Y[0]) * speed;
 x[0] = X[0] += (xmouse - 20 - X[0]) * speed;
 for (var i = n; i > 0; --i){
  y[i] = Y[i] += (y[i-1] - Y[i]) * speed;
  x[i] = X[i] += (x[i-1] - X[i]) * speed;
 };
 makecircle();
},
init = function(){ // appends message divs, & sets initial values for positioning arrays
 if(!isNaN(window.pageYOffset)){
  ymouse += window.pageYOffset;
  xmouse += window.pageXOffset;
 } else init.nopy = true;
 for (var d, i = n; i > -1; --i){
  d = document.createElement('div'); d.id = 'iemsg' + i;
  d.style.height = d.style.width = a + 'px';
  d.appendChild(document.createTextNode(msg[i]));
  oi.appendChild(d); y[i] = x[i] = Y[i] = X[i] = 0;
 };
 o.appendChild(oi); document.body.appendChild(o);
 setInterval(drag, 25);
},
ascroll = function(){
 ymouse += window.pageYOffset;
 xmouse += window.pageXOffset;
 window.removeEventListener('scroll', ascroll, false);
};
o.id = 'outerCircleText'; o.style.fontSize = size + 'px';
if (window.addEventListener){
 window.addEventListener('load', init, false);
 document.addEventListener('mouseover', mouse, false);
 document.addEventListener('mousemove', mouse, false);
  if (/Apple/.test(navigator.vendor))
  window.addEventListener('scroll', ascroll, false);
}
else if (window.attachEvent){
 window.attachEvent('onload', init);
 document.attachEvent('onmousemove', mouse);
};
})();
</script>

";

	echo $output;
}


/* this function will load the lights javascript */
function wpap_load_lightbulb()
{

  $file_url = plugin_dir_url(__FILE__).'../';


	$light_bulb = "
		<SCRIPT language=javascript type=text/javascript>
//<![CDATA[
var Ovr2='';
if(typeof document.compatMode!='undefined'&&document.compatMode!='BackCompat')
  {cot_t1_DOCtp=\"_top:expression(document.documentElement.scrollTop+document.documentElement.clientHeight-this.clientHeight);_left:expression(document.documentElement.scrollLeft  + document.documentElement.clientWidth - offsetWidth);}\";}
else
  {cot_t1_DOCtp=\"_top:expression(document.body.scrollTop+document.body.clientHeight-this.clientHeight);_left:expression(document.body.scrollLeft  + document.body.clientWidth - offsetWidth);}\";}

if(typeof document.compatMode!='undefined'&&document.compatMode!='BackCompat')
  {cot_t1_DOCtp2=\"_top:expression(document.documentElement.scrollTop-20+document.documentElement.clientHeight-this.clientHeight);}\";}
else
  {cot_t1_DOCtp2=\"_top:expression(document.body.scrollTop-20+document.body.clientHeight-this.clientHeight);}\";}
var cot_tl_bodyCSS='* html {background: fixed;background-repeat: repeat;background-position: left top;}';
var cot_tl_fixedCSS='#cot_tl_fixed{position:fixed;';
var cot_tl_fixedCSS=cot_tl_fixedCSS+'_position:absolute;';
var cot_tl_fixedCSS=cot_tl_fixedCSS+'top:0px;';
var cot_tl_fixedCSS=cot_tl_fixedCSS+'left:0px;';
var cot_tl_fixedCSS=cot_tl_fixedCSS+'clip:rect(0 100 85 0);';
var cot_tl_fixedCSS=cot_tl_fixedCSS+cot_t1_DOCtp;
var cot_tl_popCSS='#cot_tl_pop {background-color: transparent;';
var cot_tl_popCSS=cot_tl_popCSS+'position:fixed;';
var cot_tl_popCSS=cot_tl_popCSS+'_position:absolute;';
var cot_tl_popCSS=cot_tl_popCSS+'height:98px;';
var cot_tl_popCSS=cot_tl_popCSS+'width: 1920px;';
var cot_tl_popCSS=cot_tl_popCSS+'right: 120px;';
var cot_tl_popCSS=cot_tl_popCSS+'top: 20px;';
var cot_tl_popCSS=cot_tl_popCSS+'overflow: hidden;';
var cot_tl_popCSS=cot_tl_popCSS+'visibility: hidden;';
var cot_tl_popCSS=cot_tl_popCSS+'z-index: 99999;';
var cot_tl_popCSS=cot_tl_popCSS+cot_t1_DOCtp2;
document.write('<style type=\"text/css\">'+cot_tl_bodyCSS+cot_tl_fixedCSS+cot_tl_popCSS+'</style>');


function COT(cot_tl_theLogo,cot_tl_LogoType,LogoPosition,theAffiliate)
{
	document.write('<div id=\"cot_tl_fixed\">');
	document.write('<img src='+cot_tl_theLogo+' alt=\"\" border=\"0\"></a>');
	document.write('</div>');
}

//if(window.location.protocol == \"http:\")
COT(\"$file_url/images/flashing-christmas-lights.gif\", \"SC2\", \"none\");

</SCRIPT>

	";


	echo $light_bulb;
}

add_action('wp_enqueue_scripts','wpap_load_style');
