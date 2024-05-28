<?
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
if (!isset($_GET['p'])) {$_GET['p'] = 'home';}
//define('WWWROOT',"http://localhost/smpls/profiles/web/imbobo.org.za/");
define('WWWROOT',"http://imbobo.org.za/");

//function formStar(){echo "<i style='color:#FB4357;'>(*)</i>";}

$_TITLE = "iMbobo App | ";

switch ($_GET['p'])
{
	case "about":$_TITLE .= "Experience Smart City 4IR road safety technology";break;
	case "contacts":$_TITLE .= "Please, contact us for enquiries";break;
	case "how-it-all-works":$_TITLE .= "Download the iMbobo App on your smartphone";break;
	case "legal-donors-relations":$_TITLE .= "Our tactical initiatives, services and products";break;
	case "developers":$_TITLE .= "Integrate with Road Safety and Service Delivery APIs";break;
	default:$_TITLE .= "Smart road safety pothole reporting technology";
}

?>
<!-- Copyright: 2021 -->
<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		
	<title><? echo $_TITLE; ?></title>
	<meta name="description" content="Ensuring roadways stay even and clear surfaces free of potholes to allow seamless transition into the fourth industrial revolution self-driving car technology." />
	<!--<meta name="description" content="Innovative road safety initiative that aims to facilitate a smooth and seamless transition into the fourth industrial revolution 4IR self driving cars technology." />-->
	
	<meta name="keywords" content="road safety, report pothole, records management system, pothole reporting tool, artificial intelligence, sociology, municipality, service delivery" />
	<meta name="distribution" content="global" /> 
	<meta name="robots" content="follow, all" /> 
	<meta name="language" content="en, sv" /> 
	<meta name="copyright" content="&copy; 2021 - iMbobo App NPC" />
	<meta name="author" content="Spider Black Online, OVH Self-driving Car Company" />

	<meta name="geo.country" content="RSA" />
	<meta name="geo.region" content="za" /> 
	<meta name="geo.placename" content="Johannesburg, Midrand, Gauteng, South Africa" />
	<meta name="geo.position" content="28.02358,-26.041052" />

	<meta name="DC.Identifier" content="http://www.imbobo.org.za/" /> 
	<meta name="DC.Title" content="<? echo $_TITLE; ?>" />
	<meta name="DC.Description" content="Innovative road safety initiative that aims to facilitate a smooth and seamless transition into the fourth industrial revolution 4IR self driving cars technology." /> 
	<meta name="DC.Creator" content="Spider Black Online, OVH Self-driving Car Company" /> 
	<meta name="DC.Subject" scheme="SCIS" content="Pothole reporting and records management tool" />
	
	<meta property="og:title" content="<? echo $_TITLE; ?>" />
	<meta property="og:description" content="Innovative road safety initiative that aims to facilitate a smooth and seamless transition into the fourth industrial revolution 4IR self driving cars technology." />
	<meta property="og:url" content="http://www.imbobo.org.za/" />
	<meta property="og:locale" content="en_ZA" />
	<meta property="og:type" content="website" />
	
	<!-- Bootstrap CSS -->
			
	<link rel="stylesheet" href="<? echo WWWROOT; ?>style/bootstrap/4.1.0/css/wpo-minify-header-451852d8.min.css" type='text/css' media='all' />
	<link rel="stylesheet" href="<? echo WWWROOT; ?>style/bootstrap/4.5.3/css/bootstrap.css" />
	<link rel="stylesheet" href="<? echo WWWROOT; ?>style/bootstrap/4.1.0/css/wpo-minify-header-d5806ab7.min.css" type='text/css' media='all' />
	
	<!--<link rel="stylesheet" href="<? echo WWWROOT; ?>style/bootstrap/4.1.0/css/wpo-minify-header-6ec5642d.min.css" type='text/css' media='all' />
	<!--<link rel="stylesheet" href="<? echo WWWROOT; ?>style/bootstrap/4.5.3/css/bootstrap.css" />
	<link rel="stylesheet" href="<? echo WWWROOT; ?>style/bootstrap/4.1.0/css/wpo-minify-header-23fc6641.min.css" type='text/css' media='all' />
	-->
	<link href="<? echo WWWROOT; ?>style/styles.css" rel="stylesheet" type="text/css" />
	<link href="<? echo WWWROOT; ?>images/favicons/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
	<link rel="alternate" type="application/rss+xml" title="Initiatives, tactical products and services updates from iMbobo APP NPC Feeds" href="<? echo WWWROOT; ?>road-safety-service-delivery-solutions.xml" />
	
	<!--<script   type='text/javascript' src='<? echo WWWROOT; ?>style/bootstrap/4.1.0/css/wpo-minify-header-e8b017d0.min.js' id='wpo_min-header-0-js'></script>-->
	<!-- Optional JavaScript -->
	<script type="text/javascript" src="<? echo WWWROOT; ?>style/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="<? echo WWWROOT; ?>style/bootstrap/4.1.0/js/1.14.0/umd/popper.min.js"></script>
	<script type="text/javascript" src="<? echo WWWROOT; ?>style/bootstrap/4.5.3/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<? echo WWWROOT; ?>style/js.js"></script>
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
			else{include_once("server-error-404-page.php");}//{echo "<div><div><div class='col-md-12'><div style='padding:5%;'><h6 style='font-weight:normal;'>Sorry, this page is under construction..</h6></div></div></div></div>";}
			
			include_once("modules/footer.php");
			include_once("ajax/postVisitorLog.php");
		?> 
	</div> 
</div>
</body>
</html>