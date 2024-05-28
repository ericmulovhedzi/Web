<?
/*
	RULE - TITLE TAG :
		Category: KEY META TAGS
*/
require_once(__DIR__.'/../../scripts/sectionalContent.php');

global $array,$_MATRIX_RESULTS,$_SSL_CERTIFICATE_SECURITY;
global $_ruleNo, $_ruleName, $_subSection, $url;

function getURLUnderscores($_url)
{
	//global $_URL_RESOLVE;
	$hasNoUnderscores = false;
	
	if(strpos($_url, "_") !== false)
	{
		$hasNoUnderscores = false;
	}else
	{
		$hasNoUnderscores = true;
	}
	
	return array($hasNoUnderscores,array(),$_url);
}

$title = "";
$_MATRIX_RESULTS[$_ruleNo] = array("errors"=>0,"warning"=>0);
$_ruleStatus = "danger";
$_contentResults='';
$_notice =
'
	Note that crawlers see hyphens as word separators while underscores aren\'t recognized.<br /><br />
	So, the search engine such as google sees www.my_url.com/my_uri as www.myurl.com/myuri. Crawlers will have a hard time determining these kinds of URL\'s relevance to a keyword or keyword phrase.
';
$_MATRIX_RESULTS[$_ruleNo] = array("errors"=>0,"warning"=>0,"status"=>$_ruleStatus,"subject"=>"","notice"=>$_notice);

list($title,$urlHeadersArr,$_url_actual) = getURLUnderscores($url);

if(isset($title) && ($title))
{
	$_contentResults = "Genius, your URL(s) does not contain underscore(s) i.e. <i>url_under_score</>.<br /><br />";
	
	$_ruleStatus = "success";
	$_MATRIX_RESULTS[$_ruleNo] = array("errors"=>0,"warning"=>0);
	$_MATRIX_RESULTS[$_ruleNo]["status"] = $_ruleStatus;
	
	$array["rules"][$_subSection] = sectionalContent($_ruleNo,$_ruleName,$_ruleStatus,$_contentResults,$_notice);
}
else
{
	$_contentResults = "Unfortunately, your site does contain underscore(s).<br /><br />";
	
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