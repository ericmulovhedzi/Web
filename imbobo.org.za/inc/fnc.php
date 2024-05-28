<?php
function NOW(){return date("Y-m-d H:i:s");}

function reasign_usr_sessions($id,$table)
{
	global $db;
	
	$loginFoundUser = $rs->numRows();
		
		$_SESSION['usr_id'] = $rs->fields['id'];
		$_SESSION['usr_name'] = $rs->fields['cname'];
		$_SESSION['usr_type'] = $rs->fields['type'];
}


function genSelect($nm,$arr,$val='',$extra='', $clss='') {

     $return = "<select class=\"$clss\" name=\"".$nm."\" ".$extra.">\n";
	 reset($arr);

     while (list($k,$v) = each($arr)) {

     $return .= "<option value=\"".$k."\" ";
     
     if ($val != "")
	 {
       if ($k == $val) 
       {
         $return .= "selected";
        }       
		
     }
		
      $return .= ">".$v."</option>\n";
		
      }// end of while loop
		
      $return .= "</select>\n";
		
      return $return;
}

function arr_titles(){

    $arr=array('Mr','Miss','Mrs','Sir','Dr');
	return $arr;
}

function val_title($val)
{
	$title="";
	if($val == 0) $title = "Mr";
	else if($val == 1) $title = "Miss";
	else if($val == 2) $title = "Mrs";
	else if($val == 3) $title = "Sir";
	else $title = "Dr";

	return $title;
}

function searchClause($crit,$ii=0,$no_wild=array(),$tbl="",$having=array()) {
$sql_add = "";$qry_add = ""; $srch = "";$srch1="";
	if (is_array($crit)) {
		while (list($k,$v) = each($crit)) {
			if ($v != "") {
				if ($ii >= 1) {
					if (in_array($k,$having) && !isset($have_done)) {
						$sql_add .= " HAVING";
						$have_done = 1;
					} else {
						$sql_add .= " AND";
					}
				} else {
					if (in_array($k,$having) && !isset($have_done)) {
						$sql_add = " HAVING";
						$have_done = 1;
					} else {
						$sql_add = " WHERE";
					}
				}
				if (in_array($k,$no_wild)) {
					$sql_add .= " ".$tbl.$k."=\"".$v."\"";
				} else {
					$sql_add .= " ".$tbl.$k." LIKE \"%".$v."%\"";
				}
				$qry_add .= "&crit[".$k."]=".$v."&criti=".$k."&critv=".$v;
				$srch = $k;
				$srch1 = $v;
				$ii++;
			}
		}
	}
	
	return array($sql_add,$qry_add,$srch,$srch1);
}

function p_pager($p_tr,$p_tl,$amm,$pg,$qstr)
{
	global $_GET;$html = "";
	
	$p_tb = $_GET['p_tb'];$p_b = $_GET['p_b'];$p_t = $_GET['p_t'];
	$qstr .= '&p_tr='.$p_tr;$returnGETurl = $qstr."&p_tb=".$p_tb."&p_b=".$p_b."&p_t=".$p_t;

	$larrow = "<"; 
	$rarrow = ">";

	if($p_tr > 0)
	{
		$totSoFar = 1;
		$cycle = ceil($p_tr/$amm);
		if($p_tb == '' || $p_tb < 1){$p_tb = 1;$p_t = 1;}
		$minus = $p_tb-1;
		$start = $minus*$amm;
		
		if (!isset($p_b) || $p_b == ''){$p_b = $start;}
		$preBegin = $p_tb-$p_tl;
		$preStart = $amm*$p_tl;
		$preStart = $start-$preStart;
		$preVBegin = $start-$amm;
		$preRedBegin = $p_tb-1;
		
		if(($start > 0) || ($p_tb > 1)){$html .= "<a href='".$pg."&p_t=".$preRedBegin."&p_tb=".$preBegin."&p_b=".$preVBegin.$qstr."'>".$larrow."</a>\n";}
		for($i=$p_tb;$i<=$cycle;$i++)
		{
			if ($totSoFar == $p_tl+1)
			{
				$piece = "<a href='".$pg."&p_tb=".$i."&p_t=".$i."&p_b=".$start.$qstr."'>".$rarrow."</a>\n";
				$html .= $piece;break;
			}
			$piece = "<a href='".$pg."&p_b=".$start."&p_t=".$i."&p_tb=".$p_tb.$qstr."'>";
			if($p_t == $i){$piece .= "</a><b>$i</b><a>";}else{$piece .= "$i";}
			$piece .= "</a>\n";
			$start = $start+$amm;
			$totSoFar++;
			$html .= $piece;
		}
		
		$html .= "\n";
		$wheBeg = $p_b+1;
		$wheEnd = $p_b+$amm;
		$wheToWhe = "<b>".$wheBeg."</b> - <b>";
		if($p_tr <= $wheEnd){$wheToWhe .= $p_tr."</b>";}else{$wheToWhe .= $wheEnd."</b>";}
		$sqlprod = array($amm,$p_b);
	} else {$html = "<font class='cancel'>No results available yet.</font>";$wheToWhe = "<b>0</b> - <b>0</b>";$sqlprod = array(0,0);}

	return array($sqlprod,$wheToWhe,$html,$geturl);
}

function radio($name,$options=array(),$value='',$align='v',$extra='') 
{
	$htm = "";
	while (list($k,$v) = each($options)) {
		$htm .= "<input type='radio' name=\"".$name."\" value=\"".$k."\" style='padding-top:5px;border-width:0px;font-size:12px;width:auto;'".$extra;
		if ($k == $value) {
			$htm .= "checked";
		}
		$htm .= "> ".$v;
		if ($align == 'v') {
			$htm .= "<br>\n";
		} else {
			$htm .= " &nbsp;\n";
		}
	}
	$htm .= "\n";

	return $htm;
}

function select($name,$options=array(),$value='',$extra='')
{
	$html = "<select name=\"".$name."\" id=\"".$name."\" ".$extra." >\n";
	while (list($k,$v) = each($options))
	{
		$html .= "    <option value=\"".$k."\" ";
		if ($k == $value){
			$html .= "selected";
		}
		$html .= ">".$v."</option>\n";
	}
	$html .= "</select>\n";
	return $html;
}

function userLogged()
{
global $db;
$rs = $db->Execute("SELECT id FROM members WHERE logged='1'"); 

if($rs->numRows()) return $rs->numRows();
else return 0;
}

function makeThumb($image, $w, $h)
{		
	$w1 = $w; $h1 = $h;
	$size = getimagesize($image);	
			
	if($size!=0){
	
		if($size[0]>$size[1]){ // w > h
		
			//$w = $size[0];
			$h 	= ($size[1]/$size[0])*$w;
			//if($h < $h1){$h = $h1;//$w = $size[0];}
				
			}
		else{	
			$w 	= ($size[0]/$size[1])*$h;
			//if($w < $w1){$w = $w1;//$h = $size[1];}
			}
	}

return array($w ,$h);
}

function createThumb($image, $w, $h)
{		
	
	$size = getimagesize($image);	
			
	if($size!=0){
	
		if($size[0]>$size[1]){ // w > h
		
			return "width='".$w."'";
				
			}
		else{	
			return "height='".$h."'";
			//return "height='".$h."'";
			}
	}
}

$sendMessage = "<div name='cmp_msg' rows='3' class='lgfrm' style='width:160;height:50px;'>sassas</div>";


function formStar()
{
	echo "<i style='color:#FB4357;'>(*)</i>";
}

function popUp()
{
	echo "<script type=\"text/javascript\" src=\"fathah/popup.js\"></script>\n"
					."<DIV id=\"tiplayer\" style=\"visibility:hidden;position:absolute;z-index:1000;top:-100;\"></DIV>\n"
					
					."<script>\n"
					."Style = ['','','','','',,'#FFFFFF','#000000','','left','',,80,,,'',5,,,,,'',,2,,];\n"
					."var TipId='tiplayer';\n"
					."var FiltersEnabled = 0;\n"
					."mig_clay();\n"
					."</script>\n";
	return "onMouseOver=\"stm(['','".$tip."'],Style)\" onMouseOut=\"htm()\"";
}

/* Note that the value of $type must be either 'tel' - for default or 'cell'.	   
	*/
function isTel($title,$value,$type='cell') { 

	$toe = 1;$msg = "";
	if(!is_numeric($value)){$toe = 0; $msg = "Cell number: ".$title." contains non-numeric characters. Please Re-enter.";
	}
	else if(strlen($value) > 10){
		if(substr($value,0,1) != "+"){$toe = 0; $msg = "Cell number: ".$title." should be preceeded by + character. Please Re-enter.";}
		else if(strlen($value) > 15 ){$toe = 0; $msg = "Cell number: ".$title." should be less than or 15 digits. Please Re-enter.";}						
	}
	else
	{
		if(strlen($value) < 10 ){$toe = 0; $msg = "Cell number: ".$title." should be at least 10 digits. Please Re-enter.";}
		else if(substr($value,0,1) != "0"){$toe = 0; $msg = "Cell number: ".$title." should be preceeded by 0. Please Re-enter.";}
		else
		{
			if(($type == "cell") && (substr($value,1,1) != "7") && (substr($value,1,1) != "8")){$toe = 0; $msg = "Cell number: ".$title." is not in proper cellphone format. Please Re-enter.";}	
		}					
	}		
	return array($toe,$msg);
}
?>