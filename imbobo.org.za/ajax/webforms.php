<?

$array = array();

if(isset($_POST['_c']) && (!empty($_POST['_c'])))
{
  if(isset($_POST['_d']) && (!empty($_POST['_d'])))
  {
    $dataStr = urldecode(base64_decode($_POST['_d']));$loginArr = explode("&",$loginStr);
    
    if(isset($loginArr) && is_array($loginArr) && (sizeof($loginArr) >= 1))
    {
      $url = "http://localhost/webservice/rest/post/mod_logger.php?_ovhkey=".urlencode(base64_encode(base64_encode(urldecode($_POST['_c'])))).'&_val='.urlencode(base64_encode($dataStr));
      $options = array('http'=>array('header'=>"Content-type: application/x-www-form-urlencoded\r\n",'method'=>'GET','content' => http_build_query(array())));
      $rsJson = file_get_contents($url,false,stream_context_create($options));
      //print_r($rsJson);
      if(isset($rsJson) && (!empty($rsJson)))
      {
	$rsArr = @json_decode($rsJson,true);
	if(isset($rsArr[0]['status']) && ($rsArr[0]['status']>=1) && isset($rsArr[0]['data']) && ($rsArr[0]['data']>=1))
	{
	  $_uriExtra['isnew'] = $_ISNEW = $rsArr[0]['data'];
	  $_uriExtra['_terms'] = 1;
	  $url = "http://localhost/webservice/rest/post/mod_logger.php?_ovhkey=".urlencode(base64_encode(base64_encode(urldecode($_POST['_c']))))."&isnew=".$_ISNEW."&_terms=1";
	  $options = array('http'=>array('header'=>"Content-type: application/x-www-form-urlencoded\r\n",'method'=>'GET','content' => http_build_query($_uriExtra)));
	  $rsJson = file_get_contents($url,false,stream_context_create($options));
	  
	  if(isset($rsJson) && (!empty($rsJson)))
	  {
	    $rsArr = @json_decode($rsJson,true);
	    if(isset($rsArr[0]['status']) && ($rsArr[0]['status']>=1) && isset($rsArr[0]['data']) && ($rsArr[0]['data']>=1))
	    {
	      $array = array("data"=>$rsArr[0]['data'],"status"=>1,"description"=>$rsArr[0]['desc'].".");
	      $action=true;
	    }
	    else{$array = array("data"=>"6","status"=>0,"description"=>$rsArr[0]['desc'].": ".$_ISNEW);}
	  }
	  else{$array = array("data"=>"5","status"=>0,"description"=>"Creating new log item failed: ".$_ISNEW);}
	}
	else{$array = array("data"=>"4","status"=>0,"description"=>$rsArr['desc']);}
      }
      else{$array = array("data"=>"3","status"=>0,"description"=>"Please check that you are connected to the internet.".print_($rsJson));}
    }
    else{$array = array("data"=>"2","status"=>0,"description"=>"No form items to post, please specify oatleast one.");}
  }
  else{$array = array("data"=>"1","status"=>0,"description"=>"No form data available, please specify one.");}
}
else{$array = array("data"=>"0","status"=>0,"description"=>"No certificate available, please specify one.");}

echo json_encode($array);
?>