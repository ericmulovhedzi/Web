<?
/*
	RULE - TITLE TAG :
		Category: KEY META TAGS
*/
require_once(__DIR__.'/../../scripts/sectionalContent.php');

global $array,$_MATRIX_RESULTS,$_SSL_CERTIFICATE_SECURITY;
global $_ruleNo, $_ruleName, $_subSection, $url;

function getRobots($_url)
{
	$page = @file_get_contents($_url."/robots.txt");//if($page === false){$page = @url_get_contents_x($_url."/robots.txt");}
	//print_r($page);
	//global $_URL_RESOLVE;
	$hasNoRobots = false;
	
	if($page === false)
	{
		$hasNoRobots = false;
	}else
	{
		$hasNoRobots = true;
		$_url = $_url."/robots.txt";
	}
	//echo $_url;
	return array($hasNoRobots,array(),$_url);
}

$title = "";
$_MATRIX_RESULTS[$_ruleNo] = array("errors"=>0,"warning"=>0);
$_ruleStatus = "danger";
$_contentResults='';
$_notice =
'
	A robots.txt file tells crawlers of search engines which URLs the crawler can access on your site or cloud system.<br /><br />
	They prevent crawlers from accessing specific pages or directories.<br /><br />
	Though they can also point search engine crawlers to a web page\'s XML sitemap file, they are usually used mainly to avoid overloading your site or cloud system with requests.; 
';
$_MATRIX_RESULTS[$_ruleNo] = array("errors"=>0,"warning"=>0,"status"=>$_ruleStatus,"subject"=>"","notice"=>$_notice);

list($title,$urlHeadersArr,$_url_actual) = getRobots($url);

if(isset($title) && ($title))
{
	$_contentResults = "Genius, robots.txt was found at the following location:<br />";
	$_contentResults .= '<a target="_blank" href="'.$_url_actual.'">'.$_url_actual.'</a><br /><br />';
	
	$_ruleStatus = "success";
	$_MATRIX_RESULTS[$_ruleNo] = array("errors"=>0,"warning"=>0);
	$_MATRIX_RESULTS[$_ruleNo]["status"] = $_ruleStatus;
	
	$array["rules"][$_subSection] = sectionalContent($_ruleNo,$_ruleName,$_ruleStatus,$_contentResults,$_notice);
}
else
{
	$_contentResults = "Unfortunately, your site does a robots.txt file.<br /><br />";
	
	/*if(isset($urlHeadersArr[2]))
	{
		$_contentResults .= '
		<div class="col-md-12 img-thumbnail" style="background-color:#f7f7f7;float:left;padding:1%;border:1px solid #fff;">
			<div class="caption" style="text-align:left;margin:1%;">
				<p style="text-align:left;line-height:150%;margin:2.5% 1% 1% 1%;">
					'.$urlHeadersArr[2].'
				</p>
			</div>
		</div>
		';
		}*/
	
	$_MATRIX_RESULTS[$_ruleNo] = array("errors"=>1,"warning"=>1,"status"=>$_ruleStatus);
	$array["rules"][$_subSection] = sectionalContent($_ruleNo,$_ruleName,$_ruleStatus,$_contentResults,$_notice);
}

?>