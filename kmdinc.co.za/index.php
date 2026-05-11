<?
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
if (!isset($_GET['p'])) {$_GET['p'] = 'home';}
define('WWWROOT',"http://localhost/smpls/profiles/web/kgoroeadiramudauinc.co.za/");
//define('WWWROOT',"https://kmdinc.co.za/");

function formStar(){echo "<i style='color:#FB4357;'>(*)</i>";}
?>
<!-- Copyright. 2009 - 2010. -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>Kgoroeadira-Mudau Inc | Skilled legal consultants</title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Kgoroeadira Mudau is a legal firm in South Africa." />
	<meta name="keywords" content="legal, ;aw" />
	<meta name="distribution" content="global" /> 
	<meta name="robots" content="follow, all" /> 
	<meta name="language" content="en, sv" /> 
	<meta name="copyright" content="&copy; 2025 - Kgoroeadira Mudau" />
	<meta name="author" content="Spider Black Networks" />

	<meta name="geo.country" content="RSA" />
	<meta name="geo.region" content="za" /> 
	<meta name="geo.placename" content="Johannesburg, Gauteng, South Africa" />
	<meta name="geo.position" content="28.02358,-26.041052" />

	<meta name="DC.Identifier" content="http://www.kmdinc.co.za" /> 
	<meta name="DC.Title" content="Kgoroeadira Mudau" /> 
	<meta name="DC.Creator" content="Skilled legal advice" /> 
	<meta name="DC.Subject" scheme="SCIS" content="Skilled legal advice" /> 
	<meta name="DC.Description" content="Kgoroeadira Mudau is a legal firm in South Africa." /> 
	
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<? echo WWWROOT; ?>style/bootstrap/4.1.0/css/wpo-minify-header-451852d8.min.css" />
	<link rel="stylesheet" href="<? echo WWWROOT; ?>style/bootstrap/4.1.0/css/bootstrap.css" /><!-- integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">-->
	<link rel="stylesheet" href="<? echo WWWROOT; ?>style/bootstrap/4.1.0/css/wpo-minify-header-d5806ab7.min.css" />
				
	<link href="<? echo WWWROOT; ?>style/styles.css" rel="stylesheet" type="text/css" />
	
	<link rel="stylesheet" href="<?php echo WWWROOT; ?>style/chat-bot.css"/>

	<link href="<?php echo WWWROOT; ?>style/styles.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo WWWROOT; ?>images/kgmui-mini.png" type="image/x-icon" rel="shortcut icon"/>
	<link rel="alternate" type="application/rss+xml" title="<?php echo $_TITLE; ?>" href="<?php echo WWWROOT; ?>feeds.xml" />
	
	<!--<link href="<? echo WWWROOT; ?>images/favicon.ico" type="image/x-icon" rel="shortcut icon"/>-->
	<!--<link rel="alternate" type="application/rss+xml" title="Kgoroeadira Mudau Mobile solutions Feeds" href="<? echo WWWROOT; ?>sms-solutions.xml" />-->
	
	<!-- Optional JavaScript -->
	<!--<script type="text/javascript" src="<? echo WWWROOT; ?>style/jquery.js"></script>-->
	<!--<script type="text/javascript" src="<? echo WWWROOT; ?>style/js.js"></script>-->
</head> 
<body>
<script type="text/javascript">
 /* var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-15925270-3']); _gaq.push(['_trackPageview']); (function() {	 var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s); })();*/
</script>
<div id="body_wrap"> 
	<div id="page_wrap">
		<?
			include_once("modules/header.php");
			include_once("modules/menu_mobile.php");
			
			// --- body
			if (file_exists("pages/".$_GET['p'].".php")){include_once("pages/".$_GET['p'].".php");} 
			else{ echo "<blockquote>Sorry, this page is under construction..</blockquote>";}
		 
			include_once("modules/body.php");
			include_once("modules/footer.php");
		?> 
		<!--<a href="<? echo WWWROOT; ?>?p=home"><img src="<? echo WWWROOT; ?>images/logo.png" width="158" height="68" alt="Sms OVH - Logo" class="logo" /></a>
		<div class="menu">
			<a href="<? echo WWWROOT; ?>?p=home">Home</a> | <a href="<? echo WWWROOT; ?>?p=about">About</a> | <a href="<? echo WWWROOT; ?>?p=register">Register</a> | <a href='<? echo WWWROOT; ?>?p=contacts'>Contact</a>
		</div>-->
	</div>
		<?
		 //if (file_exists("kayf/".$_GET['p'].".php")){include_once("kayf/".$_GET['p'].".php");} 
		 //else{ echo "<blockquote class='cancel'>Sorry, this page is under construction..</blockquote>";}
		?> 
</div><!--
<div id="footer">
	<a href="<? echo WWWROOT; ?>?p=home">Home</a> | <a href="<? echo WWWROOT; ?>?p=about">About</a> | <a href="<? echo WWWROOT; ?>?p=register">Register</a> | <a href="<? echo WWWROOT; ?>?p=contacts">Contact</a>
	<br /><br />
	Copyrights (c) 2009 SMS-OVH, a <a href="http://vendahustlers.co.za" target="_blank"><u>Venda Hustler</u></a> product, All rights reserved.
</div> -->

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<!--<script src="<? echo WWWROOT; ?>style/bootstrap/4.1.0/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="<? echo WWWROOT; ?>style/bootstrap/4.1.0/js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="<? echo WWWROOT; ?>style/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	-->
</body>
</html>