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
					<h3 style='color:#333;margin:0% 0% 2.5% 0%;font-weight:normal;'>Best Practices Using API Web Services</h3>
					<p>
						The Integration Platform web services are a collection of HTTP interfaces to iMbobo services providing geographic and geopolitics data for your maps applications.
						<br /><br />
						This guide describes some common practices useful for setting up your web service requests and processing service responses. Refer to the <a href="<? echo WWWROOT; ?>?p=developers-api-documentation-guide-data-feed-overview">developer's guide</a> for full documentation of the Platform API.
					</p>
					<h5 style="font-weight:normal;">What is a web service?</h5>
					<p>
						iMbobo Platform web services are an interface for requesting Road Safety and Service Delivery API data from external services and using the data within your Road Safety and Service Delivery applications. These services are designed to be used in conjunction with a map, as per the License Restrictions in the iMbobo Integration Platform Terms of Service.
						<br /><br />
						The iMbobo APIs web services use HTTP(S) requests to specific URLs, passing URL parameters and/or JSON-format POST data as arguments to the services. Generally, these services return data in the HTTP(S) request as JSON for parsing and/or processing by your application.
					</p>
					<h5 style="font-weight:normal;">What is a API?</h5>
					<p>
						An <strong>A</strong>pplication <strong>P</strong>rogramming <strong>I</strong>nterface is a connection between computers or between computer programs.
						<br /><br />
						It is a type of software interface, offering a service to other pieces of software. A document or standard that describes how to build or use such a connection or interface is called an API specification.
						<br /><br />
						A typical Road Safety and Service Delivery API web service request is generally of the following form:
					</p>
					<p>
						<table style="margin:0%;font-size:95%;border:0px solid #ddd;" class="table">
							<div class="alert alert-dark" style="padding:1% 1% 1% 1%;">http://imbobo.org.za/webservice/v1/rest/get/roadmaintenance.php?api_key=&lt;APP_KEY&gt;&<strong>parameters</strong></div>
							<span style="font-style:italic;">
								where <strong>roadmaintenance</strong> indicates the particular service requested. Other Roads services include Geopolitical Location API and speedLimits, Mining Health & Safety, Pothole Recognition API, Stop Sign Recognition API.
							</span>
							<br /><br />
							<strong>Note</strong>: All Roads API applications require authentication. Get more information on our platform <a href="<? echo WWWROOT; ?>?p=developers-api-documentation-guide-data-feed-overview">authentication credentials</a>.
						</table>
					</p>
					<h5 style="font-weight:normal;">SSL/TLS Secured Access</h5>
					<p>
						HTTPS is required for all iMbobo Integration Platform requests that use API keys or contain user data. Requests made over HTTP that contain sensitive data may be rejected.
					</p>
					<h5 style="font-weight:normal;">How to building a valid URL</h5>
					<p>
						Even though a link may appear as valid in most cases, it may not necesarily so from the HTTP internet layer perspective. Basically, any code that generates or accepts UTF-8 input might treat URLs with UTF-8 characters as "<i>valid</i>". At the same time, it would also need to translate those characters before sending them out to a web server.
						<br /><br />
						This, above process of translation, is called <a target="_blank" href="https://en.wikipedia.org/wiki/Query_string#URL_encoding">URL-encoding</a> or sometimes called <a target="_blank" href="https://en.wikipedia.org/wiki/Percent-encoding">Percent-encoding</a>.
					</p>
					<h6 style="font-weight:normal;">Valid v/s Special ASCII characters</h6>
					<p>
						Web services and browsers need to translate special characters because all URLs need to conform to the syntax specified by the Uniform Resource Identifier (URI) specification.
						<br /><br />
						The table below summarizes some of these characters:
					</p>
					<p>
						<table style="margin:0%;font-size:85%;border:1px solid #ddd;" class="table">
							<thead class="thead-light table-secondary">
								 <tr style="border:1px; solid #cccccc;">
									<td>Set</td><td>characters</td><td style="width:30%;">URL usage</td>
								 </tr>
							</thead>
							
							<tr style="border:1px; solid #cccccc;">
								<td>Alphanumeric</td><td>a b c d e f g h i j k l m n o p q r s t u v w x y z A B C D E F G H I J K L M N O P Q R S T U V W X Y Z 0 1 2 3 4 5 6 7 8 9</td><td>Text strings, scheme usage (http), port (8080), etc.</td>
							</tr>
							<tr style="border:1px; solid #cccccc;">
								<td>Reserved</td><td>! * ' ( ) ; : @ & = + $ , / ? % # [ ]</td><td>Control characters and/or Text Strings</td>
							</tr>
							<tr style="border:1px; solid #cccccc;">
								<td>Unreserved</td><td>- _ . ~</td><td>Text strings</td>
							</tr>
						</table>
					</p>
					<p>
						
						<div class="alert alert-danger" style="padding:1% 1% 1% 1%;">When building a valid URL, one must ensure that it contains only those characters shown in the Ssummary of valid URL Characters table above.</div>
					</p>
					<h6 style="font-weight:normal;">Common characters that need encoding</h6>
					<p>
						The table below summarizes some of the few characters that need encoding before an HTTP request could be invoked:
					</p>
					<p>
						<table style="margin:0%;font-size:85%;border:1px solid #ddd;width:40%;" class="table">
							<thead class="thead-light table-secondary">
								 <tr style="border:1px; solid #cccccc;">
									<td>Unsafe character</td><td>Encoded value</td>
								 </tr>
							</thead>
							
							<tr style="border:1px; solid #cccccc;"><td>Space</td><td>%20</td></tr>
							<tr style="border:1px; solid #cccccc;"><td>"</td><td>%22</td></tr>
							<tr style="border:1px; solid #cccccc;"><td><</td><td>%3C</td></tr>
							<tr style="border:1px; solid #cccccc;"><td>></td><td>%3E</td></tr>
							<tr style="border:1px; solid #cccccc;"><td>#</td><td>%23</td></tr>
							<tr style="border:1px; solid #cccccc;"><td>%</td><td>%25</td></tr>
							<tr style="border:1px; solid #cccccc;"><td>|</td><td>%7C</td></tr>
							
						</table>
						<br />
					</p>
					<p>
						<li>Full list of <a target="_blank" href="https://www.w3schools.com/tags/ref_urlencode.ASP">HTML URL Encoding Reference</a> and <a target="_blank" href="https://www.w3schools.com/tags/ref_urlencode.ASP">ASCII Encoding Reference</a>.</li>
						<li>PHP <a target="_blank" href="https://www.php.net/manual/en/function.urlencode.php">urlencode()</a> function. Applicable in PHP 4, PHP 5, PHP 7, and PHP 8.</li>
						<li>JavaScript <a target="_blank" href="https://www.w3schools.com/jsref/jsref_encodeuri.asp">encodeURI()</a> function.</li>
						<li>ASP.Net <a target="_blank" href="https://docs.microsoft.com/en-us/dotnet/api/system.web.httpserverutility.urlencode?view=netframework-4.8">Server.UrlEncode(String, StringWriter);</a> function.</li>
					</p>
				</div>
			</div>
		</div><!-- End of container -->
	</div>	
</div>