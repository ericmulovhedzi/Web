<style>	 
	
</style>
<div class="" style='padding-bottom:0%;padding-top:0%;padding-bottom:1%;'>
	<div class="container">
		
		<div class="row" style='width:100%;padding:5% 0% 0% 0%;margin:0%;'>
			<div class="col-md-7" style="width:100%;padding:0%;text-align:left;">
				<h3 style="margin-top:0%;">Sorry, this page is under construction..</h3>
				<p>When our visitors land on a 404 page, and though this might have caused some frustrations, we quickly make sure that we attend to this internal server issue to ensure great user experience and satisfaction when using our platforms.</p>
				<p>Read more about our <a href="<? echo WWWROOT; ?>?p=developers-api-documentation-policy-404-internal-server-issues">404: Client-Server Issues</a> policy.</p>
			</div>
		</div>
		
		<div class="row" style='width:100%;padding:0% 0% 5% 0%;margin:0%;'>
			
			<div class="col-md-12" style="width:100%;padding:0%;text-align:left;">
				<h5 style="margin-top:0%;font-weight:normal;">Support</h5>
				<p><a class="text-reset fw-bold" href="mailto:support@imbobo.org.za"><span style='color:#0072cf;'>support@imbobo.org.za</span></a></p>
				<p>If this was realy a page that you had expected to access documents or content that you deem very important, please do not hesitate to <a href="<? echo WWWROOT; ?>?p=contacts">drop us a note</a> via our <a href="<? echo WWWROOT; ?>?p=contacts">contact</a> us form.</p>
			</div>
			<div class="col-md-12" style="width:100%;padding:0%;text-align:left;">
				<a class="btn btn-md btn-secondary" href="<? echo WWWROOT; ?>?p=how-it-all-works">Download App</a>
				<a class="btn btn-md btn-secondary" href="<? echo WWWROOT; ?>?p=legal-donors-relations">Donor Relations</a>
				<a class="btn btn-md btn-secondary" href="<? echo WWWROOT; ?>?p=developers">Developer APIs</a>
			</div>
		</div>
	</div>
</div>
<?
	$_FP = fopen("logs/server_error_log_404.dat",a);
	fwrite($_FP,$_GET['p']." : ".date("Y-m-d g:i A")." : ".$_SERVER['PHP_SELF']." : ".$_SERVER['REMOTE_ADDR']."\n");
	fclose($_FP);
?>