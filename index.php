
<?php

exec("mode com7: BAUD=9600 PARITY=N data=8 stop=1 xon=off");


$comport = "com7";

if (isset($_POST['value'])) {
        $rcmd = $_POST['value'];
        switch ($rcmd) {
            case on:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(1)); /* this is the number that it will write */
                fclose($fp);
                break;
            case off:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(0)); /* this is the number that it will write */
                fclose($fp);
                break;
			case everything:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(2)); /* this is the number that it will write */
                fclose($fp);
                break;
			case everytv:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(3)); /* this is the number that it will write */
                fclose($fp);
                break;
			case everyac:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(4)); /* this is the number that it will write */
                fclose($fp);
                break;
			case volup:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(5)); /* this is the number that it will write */
                fclose($fp);
                break;
			case pageup:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(6)); /* this is the number that it will write */
                fclose($fp);
                break;
			case muteLG:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(7)); /* this is the number that it will write */
                fclose($fp);
                break;
			case voldown:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(8)); /* this is the number that it will write */
                fclose($fp);
                break;
			case pagedown:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(9)); /* this is the number that it will write */
                fclose($fp);
                break;
			case powerLG:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(10)); /* this is the number that it will write */
                fclose($fp);
                break;
			case powerToshiba:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(11)); /* this is the number that it will write */
                fclose($fp);
                break;
			case up:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(12)); /* this is the number that it will write */
                fclose($fp);
                break;
			case left:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(13)); /* this is the number that it will write */
                fclose($fp);
                break;
			case enter:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(14)); /* this is the number that it will write */
                fclose($fp);
                break;
			case right:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(15)); /* this is the number that it will write */
                fclose($fp);
                break;
			case down:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(16)); /* this is the number that it will write */
                fclose($fp);
                break;
			case powerTelkom:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(17)); /* this is the number that it will write */
                fclose($fp);
                break;
			case mute:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(18)); /* this is the number that it will write */
                fclose($fp);
                break;
			case one:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(19)); /* this is the number that it will write */
                fclose($fp);
                break;
			case two:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(20)); /* this is the number that it will write */
                fclose($fp);
                break;
			case three:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(21)); /* this is the number that it will write */
                fclose($fp);
                break;
			case four:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(22)); /* this is the number that it will write */
                fclose($fp);
                break;
			case five:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(23)); /* this is the number that it will write */
                fclose($fp);
                break;
			case six:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(24)); /* this is the number that it will write */
                fclose($fp);
                break;
			case seven:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(25)); /* this is the number that it will write */
                fclose($fp);
                break;
			case eight:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(26)); /* this is the number that it will write */
                fclose($fp);
                break;
			case nine:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(27)); /* this is the number that it will write */
                fclose($fp);
                break;
			case zero:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(28)); /* this is the number that it will write */
                fclose($fp);
                break;
			case tvradio:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(29)); /* this is the number that it will write */
				fclose($fp);
                break;
			case pr:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(30)); /* this is the number that it will write */
                fclose($fp);
                break;
			case menu:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(31)); /* this is the number that it will write */
                fclose($fp);
                break;
			case upup:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(32)); /* this is the number that it will write */
                fclose($fp);
                break;
			case exitt:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(33)); /* this is the number that it will write */
                fclose($fp);
                break;
			case downdown:
                $fp =fopen($comport, "w");
                fwrite($fp, chr(34)); /* this is the number that it will write */
                fclose($fp);
                break;
				
            default:
                die('???');		
        }
}
?>
<!--END OF PHP-->


<html>
	<head>
	<title>Hidayat's</title>
	
<!--CSS-->	
	<style type="text/css">
#centered
{ 
text-align:center;
}
.custom_header{
padding: 5px;text-align:center;max-height:100%}

.containing-element .ui-slider-switch { width: 9em }
.submit{ 
PROPETY:VALUE; 
}

img {
     max-width: 100%;max-height:100%;
	} 
	
#onoff {
	background-image: url("onoff.png");
	background-size: 18px 18px;
}

table {
	height: auto;
	width: auto;
	margin-left: auto;
	margin-right: auto;
	margin-up: auto;
	margin-down: auto;
}
td { 
	border-spacing: 5px;
	height: 80px;
	width: 80px;
	margin: 0; padding: 4;
	cellspacing:0;
}

	</style>
<!--END OF CSS-->

<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, height=device-height">

<!--snippet-->
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript">
	
	$(document).ready(function() {
	
	$('.my_button').click(function(){
	var value=$(this).val();
	var dataValue = 'value=' + value;
	
	$.ajax({
	type:'POST',
	url:'index.php',
	data: dataValue,
	success: function(){}
	});
	
	});
	});
	
	</script>
<!--end of snippet-->

	
	</head>
<!--BODY-->
	<body>
<!--JQuery starts-->
	
	
	<!--Default Page-->
	<div data-role="page" data-theme="a" id="mainmenu">
	<!--HEADER-->	
		<div data-role="header" >
		<div class="custom_header">
		<h4>Hidayat's Project</h4>
		</div>
		
		
		
		<div data-role="navbar" id="centered">
		<ul>
			<li><img src="LG.png"><a href="#pageLG" data-transition ="slideup">LG</a></li>
			<li><img src="toshiba.png"><a href="#pageToshiba" data-transition="slideup">TOSHIBA</a></li>
			<li><img src="telkomvision.png"><a href="#pageTelkom" data-transition="slideup">T.Vision</a></li>
			<!--<li><img src="sharp.png"><a href="#pageSharp" data-transition="slideup">AC Sharp</a></li>
			<li><img src="general.png"><a href="#pageGeneral" data-transition="slideup">AC General</a></li>-->
			
		</ul>
		</div>
		</div>
	<!--CONTENT-->	
	
    
	
	<br><br>
	<div data-role="content" id="centered">
	
	<table bordercolor="" style="background-color:" width="100%" cellpadding="3" cellspacing="3">
	 
	<tr>
		<td><img src="tv.png"><button class="my_button" value="everytv" data-iconpos="top" data-icon="check" id="onoff">O</td>
	</tr>
	
</table>
	
	
	
</div>
	
	<!--FOOTER-->
		<div data-role="footer" data-theme="d" data-id="myfooter" data-position="fixed">	
		©Kelvien Hidayat.
		</div>
	</div>	
	<!--End of Default Page-->
	
	<!--LG-->
	<div data-role="page" id="pageLG" data-theme="a">
	<div data-role="header">
		<div class="custom_header">
		<h1>Television LG</h1>
		</div>
		
		<div data-role="navbar" id="centered">
		<ul>
			<li><img src="LG.png"><a href="#pageLG" data-transition ="slideup">LG</a></li>
			<li><img src="toshiba.png"><a href="#pageToshiba" data-transition="slideup">TOSHIBA</a></li>
			<li><img src="telkomvision.png"><a href="#pageTelkom" data-transition="slideup">T.Vision</a></li>
		</ul>
		</div>
		</div>
	
	<div data-role="content" id="centered">
	<br>
	<a href="#mainmenu" data-role="button" data-icon="back" data-transition="slidedown">Go back to the Main Menu</a>
	<br><br>
	
	

	<table style="background-color:" width="100%" cellpadding="3" cellspacing="3">
	<tr>
		<td><button class="my_button" value="volup" data-icon="arrow-u" data-iconpos="top">VOL Up</td>
		
	</tr>
	<tr>
		<td><button class="my_button" value="muteLG" data-icon="alert" data-iconpos="top">MUTE</td>
	
	</tr>
	<tr>
		<td><button class="my_button" value="voldown" data-icon="arrow-d" data-iconpos="top">VOL Down</td>
		
	</tr>
</table>
	<br>
	<img src="onoff.png"><button class="my_button" value="powerLG">POWER
	
	<br>

	
	</div>
	
	<!--FOOTER-->
		<div data-role="footer" data-theme="d" data-id="myfooter" data-position="fixed">	
		©Kelvien Hidayat.
		</div>
	</div>	
	
	<!--end of LG-->
	
	<!--TOSHIBA-->
	<div data-role="page" id="pageToshiba" data-theme="a">
	<div data-role="header">
		<div class="custom_header">
		<h1>TOSHIBA</h1>
		</div>
		
		<div data-role="navbar" id="centered">
		<ul>
			<li><img src="LG.png"><a href="#pageLG" data-transition ="slideup">LG</a></li>
			<li><img src="toshiba.png"><a href="#pageToshiba" data-transition="slideup">TOSHIBA</a></li>
			<li><img src="telkomvision.png"><a href="#pageTelkom" data-transition="slideup">T.Vision</a></li>
		</ul>
		</div>
		</div>
	
	<div data-role="content" id="centered">
	<br>
	<a href="#mainmenu" data-role="button" data-icon="back" data-transition="slidedown">Go back to the Main Menu</a>
	<br><br>
	<img src="onoff.png"><button class="my_button" value="powerToshiba">POWER
	<br>
	
	
	</div>
	
	<!--FOOTER-->
		<div data-role="footer" data-theme="d" data-id="myfooter" data-position="fixed">	
		©Kelvien Hidayat.
		</div>
	
	</div>	
	
	<!--end of TOSHIBA-->
	

	<!--TelkomVision-->
	<div data-role="page" id="pageTelkom" data-theme="a">
	<div data-role="header">
		<div class="custom_header">
		<h1>Telkom Vision</h1>
		</div>
		
		<div data-role="navbar" id="centered">
		<ul>
			<li><img src="LG.png"><a href="#pageLG" data-transition ="slideup">LG</a></li>
			<li><img src="toshiba.png"><a href="#pageToshiba" data-transition="slideup">TOSHIBA</a></li>
			<li><img src="telkomvision.png"><a href="#pageTelkom" data-transition="slideup">T.Vision</a></li>
		</ul>
		</div>
		</div>
		
	<div data-role="content" id="centered">
	<br>
	<a href="#mainmenu" data-role="button" data-icon="back" data-transition="slidedown">Go back to the Main Menu</a>
	
	<br><BR>
	
	<table style="background-color:" width="100%" cellpadding="3" cellspacing="3">
	<tr>
		<td></td>
		<td><button class="my_button" value="up" data-icon="arrow-u" data-iconpos="top"></td>
		<td></td>
	</tr>
	<tr>
		<td><button class="my_button" value="left" data-icon="arrow-l" data-iconpos="top"></td>
		<td><button class="my_button" value="enter" data-icon="grid" data-iconpos="top"></td>
		<td><button class="my_button" value="right" data-icon="arrow-r" data-iconpos="top"></td>
	</tr>
	<tr>
		<td></td>
		<td><button class="my_button" value="down" data-icon="arrow-d" data-iconpos="top"></td>
		<td></td>
	</tr>

	
	<tr>
		<td><button class="my_button" id="onoff" value="powerTelkom">POWER</td>
		<td></td>
		<td><button class="my_button" value="mute">Mute</td>
	</tr>
	<tr>
		<td><button class="my_button" value="one">1</td>
		<td><button class="my_button" value="two">2</td>
		<td><button class="my_button" value="three">3</td>
	</tr>
	<tr>
		<td><button class="my_button" value="four">4</td>
		<td><button class="my_button" value="five">5</td>
		<td><button class="my_button" value="six">6</td>
	</tr>
	<tr> 
		<td><button class="my_button" value="seven">7</td>
		<td><button class="my_button" value="eight">8</td>
		<td><button class="my_button" value="nine">9</td>
	</tr>
	<tr>
		<td><button class="my_button" value="tvradio">TV/radio</td>
		<td><button class="my_button" value="zero">0</td>
		<td><button class="my_button" value="pr"><-PR</td>
	</tr>
	<tr>
		<td><button class="my_button" value="menu" data-mini="true">MENU</td>
		<td></td>
		<td><button class="my_button" value="upup" data-icon="arrow-u" data-mini="true">UP</td>
	</tr>
	<tr>
		<td><button class="my_button" value="exitt" data-mini="true">EXIT</td>
		<td></td>
		<td><button class="my_button" value="downdown" data-icon="arrow-d" data-mini="true">DOWN</td>
	</tr>
</table>
	
	
	</div>
	
	<!--FOOTER-->
		<div data-role="footer" data-theme="d" data-id="myfooter" data-position="fixed">	
		©Kelvien Hidayat.
		</div>
	</div>	
	<!--end of TelkomVision-->


	<!--Sharp
	<div data-role="page" id="pageSharp" data-theme="a">
	<div data-role="header">
		<div class="custom_header">
		<h1>AC Sharp</h1>
		</div>
		
		<div data-role="navbar" id="centered">
		<ul>
			<li><img src="LG.png"><a href="#pageLG" data-transition ="slideup">LG</a></li>
			<li><img src="toshiba.png"><a href="#pageToshiba" data-transition="slideup">TOSHIBA</a></li>
			<li><img src="telkomvision.png"><a href="#pageTelkom" data-transition="slideup">T.Vision</a></li>
			<li><img src="sharp.png"><a href="#pageSharp" data-transition="slideup">AC Sharp</a></li>
			<li><img src="general.png"><a href="#pageGeneral" data-transition="slideup">AC General</a></li>
		</ul>
		</div>
		</div>
	<div data-role="content" id="centered">
	<br>
	<a href="#mainmenu" data-role="button" data-icon="back" data-transition="slidedown">Go back to the Main Menu</a>
	
	<br><br>
	<table>
	<tr>
	<td><img src="onoff.png"><button class="my_button" value="powerSharp">POWER</td>
	<td><img src="ion.png"><button class="my_button" value="ion">ION</td>
	</tr>
	</table>
	
	
	</div>
	
	<!--FOOTER
		<div data-role="footer" data-theme="d" data-id="myfooter" data-position="fixed">	
		©Kelvien Hidayat.
		</div>
	</div>	
	
	<!--end of Sharp
	
	
	<!--General
	<div data-role="page" id="pageGeneral" data-theme="a">
	<div data-role="header">
		<div class="custom_header">
		<h1>AC General</h1>
		</div>
		
		<div data-role="navbar" id="centered">
		<ul>
			<li><img src="LG.png"><a href="#pageLG" data-transition ="slideup">LG</a></li>
			<li><img src="toshiba.png"><a href="#pageToshiba" data-transition="slideup">TOSHIBA</a></li>
			<li><img src="telkomvision.png"><a href="#pageTelkom" data-transition="slideup">T.Vision</a></li>
			<li><img src="sharp.png"><a href="#pageSharp" data-transition="slideup">AC Sharp</a></li>
			<li><img src="general.png"><a href="#pageGeneral" data-transition="slideup">AC General</a></li>
		</ul>
		</div>
		</div>
	
	<div data-role="content" id="centered">
	<br>
	<a href="#mainmenu" data-role="button" data-icon="back" data-transition="slidedown">Go back to the Main Menu</a>
	
	<br><br>
	<img src="onoff.png"><button class="my_button" value="powerGeneral">POWER
	
	
	</div>
	
	<!--FOOTER
		<div data-role="footer" data-theme="d" data-id="myfooter" data-position="fixed">	
		©Kelvien Hidayat.
		</div>
	</div>	
	
	<!--end of General-->
	
	
	
	
	<!--END of JQuery-->
	
	</body>
<!--END of BODY-->
</html>
