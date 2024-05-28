<style>	 
	
</style>
<div class="" style='padding-bottom:0%;padding-top:0%;padding-bottom:1%;'>
	<div class="container">
		
		<div class="row" style='background:transparent;padding:5% 0% 5% 0%;'><!-- Beggining of container -->
		
			<div class="col-md-3">
				<div class="img-thumbnailx" style="padding:1%;">
					<h6 style='font-size:100%;color:#333;margin:0% 0% 10% 0%;'>iMbobo Platform API Guide</h6>
					<ol style="list-style-type:circle;line-height:200%;">
						<li><a class="text-reset fw-bold" href="<? echo WWWROOT; ?>?p=developers-api-documentation-guide-data-feed-overview"><span style='color:#0072cf;'>Overview</span></a></li>
						<li><a class="text-reset fw-bold" href="<? echo WWWROOT; ?>?p=developers-api-documentation-guide-data-feed-creation-guide"><span style='color:#0072cf;'>Feed Creation</span></a></li>
						<li><a class="text-reset fw-bold" href="<? echo WWWROOT; ?>?p=developers-api-documentation-guide-data-feed-feed-specifications"><span style='color:#0072cf;'>Feed Specifications</span></a></li>
						<li><a class="text-reset fw-bold" href="<? echo WWWROOT; ?>?p=developers-api-documentation-guide-data-feed-best-practices"><span style='color:#0072cf;'>Best Practices</span></a></li>
						<li><a class="text-reset fw-bold" href="<? echo WWWROOT; ?>?p=developers-api-documentation-guide-data-feed-api-keys"><span style='color:#0072cf;'>Using API Keys</span></a></li>
						<li><a class="text-reset fw-bold" href="<? echo WWWROOT; ?>?p=developers-api-documentation-guide-data-feed-troubleshooting"><span style='color:#0072cf;'>Troubleshooting</span></a></li>
						<li><a class="text-reset fw-bold" href="<? echo WWWROOT; ?>?p=developers-api-documentation-guide-data-feed-faqs"><span style='color:#0072cf;'>FAQs</span></a></li>
					</ol>
					<p style="margin-bottom:5%;">
						<a class="btn btn-md btn-light" href="<? echo WWWROOT; ?>?p=developers">Platform API Home Page</a>
					</p>
					<p style="">
						<a class="btn btn-md btn-danger" href="<? echo WWWROOT; ?>?p=developers">My Developer Profile&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
					</p>
				</div>
			</div>
			<div class="col-md-9">
				<div style="padding:0% 1% 1% 1%;">
					<h3 style='color:#333;margin:0% 0% 2.5% 0%;font-weight:normal;'>Feed Setup</h3>
					<p>
						The following information will help you get your feeds set up and running correctly.
					</p>
					<h5 style="font-weight:normal;">Feed file hosting</h5>
					<p>
						The iMbobo cloud content acquisition system automatically fetches all new or modified files in a particular directory or set of directories. To ensure that iMbobo retrieves the correct feed files, follow these instructions and guidelines when making your feeds available on your HTTP server:
						<ul style="line-height:200%;">
							<li>Create your feed in a directory from which Waze does not fetch content.</li>
							<li>iMbobo transfer the feed files using HTTPS with a SSL certificate to secure the data transfer.</li>
							<li>You provide the login and password combination through the Fleet Management portal.</li>
							<li>iMbobo content acquisition system fetches data every 30 minutes. If your feed is updated significantly more frequently or less frequently than every 30 minutes. You may <a href="mailto:support@imbobo.org.za">contact the iMbobo team</a> so that we can adjust our polling periods to reflect your feed update cycle.</li>
						</ul>
					</p>
					<h5 style="font-weight:normal;">XML validation</h5>
					<p>
						iMbobo uses XML schema to define the acceptable structure of a Pothole and Incidents Feed Specifications.
						<br /><br />
						There are a number of tools available on the internet that can help you validate the structure of your XML feeds. These include, but are not limited to:
						<ul style="line-height:200%;">
							<li><a target="_blank" href="http://www.w3.org/XML/Schema#Tools">http://www.w3.org/XML/Schema#Tools</a></li>
							<li><a target="_blank" href="http://www.xml.com/pub/a/2000/12/13/schematools.html">http://www.xml.com/pub/a/2000/12/13/schematools.html</a></li>
							<li><a target="_blank" href="http://xmlsoft.org/xmllint.html">http://xmlsoft.org/xmllint.html</a></li>
						</ul>
					</p>
					<h5 style="font-weight:normal;">Feed specifications</h5>
					<p>
						A single feed file can provide information on multiple or bulk pothole incidents. If you are providing information on multple or bulk events, each pothole incident must be detailed in a separate section with each pothole incident instance having a unique ID. These sections should use the local time and date. The parameter tables for each feed type classify each element as follows:
						<ul style="line-height:200%;">
							<li><b>Required:</b> This element must be present and populated for your feed to be considered valid.</li>
							<li><b>Optional:</b> This element is not required to be present and populated for your feed to be considered valid.</li>
						</ul>
					</p>
				</div>
			</div>
		</div><!-- End of container -->
	</div>	
</div>