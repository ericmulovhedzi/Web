<?php


if(isset($_POST['msg']) && (!empty($_POST['msg'])))
{
  
  //if(!isset($_SESSION))
  if(true)
  {
    session_start();//session_destroy();unset($_SESSION['aichat']);
    if (isset($_SESSION['aichat']['deleted_time']) && (!empty($_SESSION['aichat']['deleted_time'])) && ($_SESSION['aichat']['deleted_time'] < time() - 180)) {
        session_destroy();
        session_start();
    }
  }
  
  if(!isset($_SESSION['aichat']))
  {
    $_SESSION['aichat'] = array('id'=>time(),'deleted_time' => time());
    //session_id(time());
  }
  
  //if(!isset($_SESSION))
  //{
    //ini_set('session.use_strict_mode', 1);
   // my_session_start();
    //session_id(12345);
    //my_session_regenerate_id();
    //print_r($_SESSION);
  //}
  //else
  //{
    //print_r($_SESSION);
    //session_destroy();
  //}
  //echo session_id();
  //print_r($_SESSION);
  
  if(isset($_SESSION['aichat']['ready_for_question']) && ($_SESSION['aichat']['ready_for_question'] == 1))
  {
    echo "Note that I have just transferred your query: <br /><span style='background-color:#777;padding:1.5%;'>".$_POST['msg']."</span><br />to one of our consultants.<br /><br />Have a good day, Thank you.";
    $_SESSION['aichat']['ready_for_question'] = 0;
    
    
    
	/*
    
    $body = "
	<center>
	<table border='0' style='margin-top:30px;width:600px;border:1px solid #ccc;color:#111;font-size:12px;-moz-border-radius:5px;-border-radius:5px;-webkit-border-radius:5px;' cellspacing='15' cellpadding='5' >
		<tr>
			<td valign='middle' style='width:450px;letter-spacing:2px;background-color:#c13929;color:#fff;line-height:50px;font-size:16px;font-weight:bold;-moz-border-radius:5px;-border-radius:5px;-webkit-border-radius:5px;'>&nbsp;&nbsp;Congratulations..</h3></td>
			<td valign='middle' style='width:55px;'> </td>
		</tr>
                <tr>
			<td colspan='2' style='text-align:justify;line-height:30px;font-size:12px;'>
			Congratulations to for winning the best customer service award for this week: <b>".date("Y-M-d")."</b>.
			<br />
	 <div style='width:99%;height:180px;margin:25px 5px 0px 0px;border-top:1px solid #eee;border-bottom:1px solid #eee;line-height:30px;'>
		".$_POST['msg']."
		<br />
		<a href='#' style='color:#c94d00;'>Number of times this company has been viewed ()</a>
	 </div>
	 
<br />
The <a target='_blank' href='http://1stbn.co.za?g=networs&p=profile' style='color:#c94d00;font-weight:bold;'>1st Business Networx</a></b>
<br />Thank you
			</td> 
		</tr>
	</table>
	<br />
	<p style='font-size:11px;'>
		<a target='_blank' href='".WWWROOT."?p=home'>Networking</a> | <a target='_blank' href='".WWWROOT."?g=jobs&p=jobs'>Find Jobs</a> | <a target='_blank' href='".WWWROOT."?g=jobs&p=manage_jobs'>Post Your Own Jobs</a> | <a target='_blank' href='".WWWROOT."?g=companies&p=manage_companies&new=1' style='color:#e24912;'>List Your BUSINESS</a> | <a target='_blank' href='".WWWROOT."?g=tenders&p=tenders'>Search For Tenders</a> | <a target='_blank' style='color:#ccc;' href='".WWWROOT."?p=pricing'>Terms &amp; Conditions</a>
	</p>
	</center>
	";
	
	
    error_reporting(E_ALL);
	
	require_once('../../inc/phpmailer/class.phpmailer.php');
	
	$mail                = new PHPMailer();
	
	$mail->IsSMTP(); // telling the class to use SMTP
	//$mail->Host          = "smtp1.laerskoolakasia.co.za;smtp2.laerskoolakasia.co.za";
	$mail->SMTPAuth      = true;                  // enable SMTP authentication
	$mail->SMTPKeepAlive = true;                  // SMTP connection will not close after each email sent
	$mail->Host          = "mail.laerskoolakasia.co.za"; // sets the SMTP server
	//$mail->Port          = 26;                    // set the SMTP port for the GMAIL server
	$mail->Username      = "no-reply@laerskoolakasia.co.za"; // SMTP account username
	$mail->Password      = '$LRSK_@123Ab%';        // SMTP account password
	$mail->SetFrom('no-reply@laerskoolakasia.co.za', 'Laerskook Akasia AI Consultant');
	$mail->AddReplyTo('admin@laerskoolakasia.co.za', 'Laerskook Akasia');
	
	
			
	//$contact = new stdClass();
	//$contact->title = $_SESSION['aichat']['learner_parent_name'];
	//$contact->email = $_SESSION['aichat']['learner_parent_email'];
	      
	
		$subject = "AI-Powered Chatbot Consultant: ";
		
		$mail->Subject       = "AI-Powered Chatbot Consultant: query @".date();
		
		$mail->MsgHTML($body);
		$mail->AddAddress("ericm00142@gmail.com", "support@spiderblackonline.co.za");
		//$mail->AddStringAttachment($row["photo"], "YourPhoto.jpg");
	      
		if(!$mail->Send()) {
		  //echo "Mailer Error (" . str_replace("@", "&#64;", $recipients[0]) . ') ' . $mail->ErrorInfo . '<br />';
		} else {
		  //echo "Message sent to :" . $recipients[1] . ' (' . str_replace("@", "&#64;", $recipients[0]) . ')<br />';
		}
		// Clear all addresses and attachments for next loop
		$mail->ClearAddresses();
		$mail->ClearAttachments();
	*/
		
  }
  else if($_POST['msg'] == "Mining Law")
  {
    if(isset($_SESSION['aichat'])){$_SESSION['aichat']['department'] = $_POST['msg'];$_SESSION['aichat']['ready_for_question'] = 0;}
    echo "You have selected <span style='background-color:#777;padding:1.5%;'>".$_POST['msg']."</span> department<br />Thank you.";
  }
  else if($_POST['msg'] == "Billing")
  {
    if(isset($_SESSION['aichat'])){$_SESSION['aichat']['department'] = $_POST['msg'];$_SESSION['aichat']['ready_for_question'] = 0;}
    echo "You have selected <span style='background-color:#777;padding:1.5%;'>".$_POST['msg']."</span> department<br />Thank you.";
  }
  else if($_POST['msg'] == "Application Form")
  {
    if(isset($_SESSION['aichat'])){$_SESSION['aichat']['department'] = $_POST['msg'];$_SESSION['aichat']['ready_for_question'] = 0;}
    echo "You have selected <span style='background-color:#777;padding:1.5%;'>".$_POST['msg']."</span> department<br />Thank you.";
  }
  else if($_POST['msg'] == "Sports")
  {
    if(isset($_SESSION['aichat'])){$_SESSION['aichat']['department'] = $_POST['msg'];$_SESSION['aichat']['ready_for_question'] = 0;}
    echo "You have selected <span style='background-color:#777;padding:1.5%;'>".$_POST['msg']."</span> department<br />Thank you.";
  }
  else if($_POST['msg'] == "Account Management")
  {
    if(isset($_SESSION['aichat'])){$_SESSION['aichat']['department'] = $_POST['msg'];$_SESSION['aichat']['ready_for_question'] = 0;}
    echo "You have selected <span style='background-color:#777;padding:1.5%;'>".$_POST['msg']."</span> department<br />Thank you.";
  }
  else if($_POST['msg'] == "Coding and Robotics")
  {
    if(isset($_SESSION['aichat'])){$_SESSION['aichat']['department'] = $_POST['msg'];$_SESSION['aichat']['ready_for_question'] = 0;}
    echo "You have selected <span style='background-color:#777;padding:1.5%;'>".$_POST['msg']."</span> department<br />Thank you.";
  }
  else if(is_numeric($_POST['msg']))
  {
     $_STATE = false;
    if(($handle_r = fopen("learner_master_data.csv","r")) !== FALSE)
    {
      while(!feof($handle_r))
      {
	$_data = str_getcsv(trim(fgets($handle_r)),",");
	//$_STATE = true;
	//echo $_data[0]."<br />";
	if($_POST['msg'] == trim($_data[0]))
	{
	  if(isset($_SESSION['aichat']['id']))
	  {
	    $_SESSION['aichat']['learner_no'] = $_POST['msg'];
	    $_SESSION['aichat']['learner_name'] = $_data[9];
	    $_SESSION['aichat']['learner_surname'] = $_data[10];
	    $_SESSION['aichat']['learner_grade'] = $_data[2];
	    $_SESSION['aichat']['learner_parent_title'] = $_data[1];
	    $_SESSION['aichat']['learner_parent_name'] = $_data[3]." ".$_data[4];
	    $_SESSION['aichat']['learner_parent_email'] = $_data[5];
	    $_SESSION['aichat']['learner_parent_cell'] = $_data[6];
	    
	    $_SESSION['aichat']['ready_for_question'] = 1;
	    //print_r($_SESSION);
	  }
	  echo "Thank you for your patience, I found have <strong style='color:#f19526;'>".$_data[9]." ".$_data[10]."</strong>.<br /><br />Note that \"".$_data[9]." ".$_data[10]."\" is currently in grade <strong style='color:#f19526;'>".$_data[2]."</strong>.<br /><p>So, how may I help you, please explain your query in more detail while I transfer you to a consultant?";
	  $_STATE = true;
	}
	
      }
    }
    
    if($_STATE)
    {
      //echo "We searched all the grades and could not find a learner with the\"".$_POST['msg']."\".<br /><br />Please try sending an enquiry at: <a target='_blank' href='laerskoolakasia.co.za/?p=contacts'>Enquire</a>.";
    }
    else
    {
      echo "Sorry, I searched all the grades but could not find a learner with learner number \"".$_POST['msg']."\".<br /><br />Please try contacting our school admin at: +27.12 542 4767 or <a href='mailto:admin@laerskoolakasia.co.za'>admin@laerskoolakasia.co.za</a>";
    }
    
  }
  else
  {
    echo "Sorry, I can not under unerstand you!"; 
  }
  
}else
{
  echo "Sorry, I can not under unerstand you!";
}



/*
// connecting to database
$conn = mysqli_connect("localhost", "root", "", "bot") or die("Database Error");

// getting user message through ajax
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);

//checking user query to database query
$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");

// if user query matched to database query we'll show the reply otherwise it go to else statement
if(mysqli_num_rows($run_query) > 0){
    //fetching replay from the database according to the user query
    $fetch_data = mysqli_fetch_assoc($run_query);
    //storing replay to a varible which we'll send to ajax
    $replay = $fetch_data['replies'];
    echo $replay;
}else{
    echo "Sorry, I can not under unerstand you!";
}
*/
?>