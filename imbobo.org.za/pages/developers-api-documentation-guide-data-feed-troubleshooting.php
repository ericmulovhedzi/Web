<style>	 
	
</style>
<link rel="stylesheet" href="<? echo WWWROOT; ?>style/highlighter/solarized_dark.css">
<script src="<? echo WWWROOT; ?>style/highlighter/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
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
					<h3 style='color:#333;margin:0% 0% 2.5% 0%;font-weight:normal;'>Troubleshooting</h3>
					<h5 style="font-weight:normal;">Errors</h5>
					<p>
						In the event that an error occurs, a standard format error response body will be returned and the HTTP status code will be set to an error status with the actual status variable set to <strong>0</strong>.
						<br /><br />
						The response contains an object with a single error object with the following keys:
					</p>
					<p>
						<ul style="line-height:200%;">
							<li><strong>status</strong>: A status vaue with a number <strong>0</strong> affirming that indeed there is an error.</li>
							<li><strong>code</strong>: This is the same as the HTTP status of the response.</li>
							<li><strong>description</strong>: A status description indicating the nature of the error.</li>
							<li><strong>message</strong>: A short description of the error.</li>
						</ul>
					</p>
					<p>
<pre class="img-thumbnail" style=""><code class="php img-thumbnail" style="padding:1%;font-size:90%;background:#283143;">{
    status: 0,
    code: 400,
    desc: "INVALID_ARGUMENT",
    message: "\"streetName\" value is malformed: \"bla-bla-bla\""
}</code></pre>
					</p>
					<h5 style='color:#333;margin:0% 0% 2.5% 0%;font-weight:normal;'>NB:</h5>
					<p>When accessing a web server or application, every HTTP request that is received by a server is responded to with an HTTP status code. HTTP status codes are three-digit codes, and are grouped into five different classes. The class of a status code can be identified by its first digit:</p>
					<p>
						<ul style="line-height:200%;">
							<li><strong>1xx</strong>: Informational</li>
							<li><strong>2xx</strong>: Success</li>
							<li><strong>3xx</strong>: Redirection</li>
							<li><strong>4xx</strong>: Client Error</li>
							<li><strong>5xx</strong>: Server Error</li>
						</ul>
					</p>
					<p>This guide focuses on identifying and troubleshooting the most commonly encountered <strong>HTTP error</strong> codes, i.e. 4xx and 5xx status codes, from a system administrator or patform's perspective.</p>
					<p>In our Integration Platform, possible errors include:</p>
					<p>
						<table style="margin:0%;font-size:85%;border:1px solid #ddd;" class="table">
							<thead class="thead-light table-secondary">
								 <tr style="border:1px; solid #cccccc;">
									<td>code</td><td style="width:5%;">description</td><td>message</td><td>roubleshooting</td>
								 </tr>
							</thead>
							
							    <tr>
								<td>400</td><td>INVALID_ARGUMENT</td><td>The key you provided is invalid.</td><td>Your API key is not valid or was not included in the request. Please ensure that you've included the entire key, and that you've enabled the API for this key.</td>
							    </tr>
							    <tr>
								<td>403</td><td>PERMISSION_DENIED</td><td>Unregistered request was blocked. Please sign up using Platform Developers Profile.</td>
								<td>
									The request was denied for one or more of the following reasons:
									<br />
									<ul style="margin:5% 0% 5% 2%;">
										<li>The API key is missing or invalid.</li>
										<li>Billing has not been enabled on your account.</li>
										<li>A self-imposed usage cap has been exceeded.</li>
										<li>The provided method of payment is no longer valid (for example, a credit card has expired).</li>
									</ul>
									In order to use the Integration Platform products, billing must be enabled on your account, and all requests must include a valid API key.
								</td>
							    </tr>
							    <tr>
								<td>404</td><td>NOT_FOUND</td><td>HTTPS is required for this service.</td><td>Ensure that you are sending requests to https://URL_LINK.org.za/ or http://URL_LINK.org.za/.</td>
							    </tr>
							    <tr>
								<td>429</td><td>RESOURCE_EXHAUSTED</td><td>The request was throttled due to project request limits being reached.</td><td>You have exceeded the request limit that you configured in the iMbobo or OVH Cloud Platform Profile. This limit is typically set as requests per day or requests per month.</td>
							    </tr>
							    <tr>
								<td>503</td><td>SERVICE_UNAVAILABLE</td><td>  </td><td>The 503 status code, or Service Unavailable error, means that the server is overloaded or under maintenance. This error implies that the service should become available at some point.<br /><br />If the server is not under maintenance, this can indicate that the server does not have enough CPU or memory resources to handle all of the incoming requests, or that the web server needs to be configured to allow more users, threads, or processes.</td>
							    </tr>
						</table>
						<br />
					</p>
					<p>Also, you can read more about our <a href="<? echo WWWROOT; ?>?p=developers-api-documentation-policy-404-internal-server-issues">404: Internal Server Issues</a> policy.</p>
					<h5 style="margin-top:0%;font-weight:normal;">Contact Support</h5>
					<p>Please, feel free to contact our technical team at the following address as well:</p>
					<p><a class="text-reset fw-bold" href="mailto:support@imbobo.org.za"><span style='color:#0072cf;'>support@imbobo.org.za</span></a></p>
				</div>
			</div>
		</div><!-- End of container -->
	</div>	
</div>