
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
					<h3 style='color:#333;margin:0% 0% 2.5% 0%;font-weight:normal;'>Using API Keys</h3>
					<p>
						iMbobo Integration Platform products and services are secured from unauthorized use by restricting API calls to those that provide proper authentication credentials. These credentials are in the form of an API key - a unique alphanumeric string that associates your platform billing account with your project, and with the specific API or SDK.
						<br /><br />
						This is a simple guide shows how to create, restrict, and use your API key for iMbobo Integration Platform.
					</p>
					<h5 style="margin-top:0%;font-weight:normal;">How to begin:</h5>
					<p>
						Before you start using the Platform APIs, you need create a project with a billing account and the Platform API enabled. To learn more, see Set up in <a href="<? echo WWWROOT; ?>?p=ovh-cloud-console">Cloud Console</a>.
					</p>
					<h5 style="margin-top:0%;font-weight:normal;">How to create an API key:</h5>
					<p>
						The API key is a unique identifier that authenticates requests associated with your project for usage and billing purposes. You must have at least one API key associated with your project.
					</p>
					<p>
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li></li>
							<li class="nav-item"><a class="nav-link active" id="console-tab" data-toggle="tab" href="#console" role="tab" aria-controls="console" aria-selected="false">OVH Cloud Console</a></li>
							<li class="nav-item"><a class="nav-link" id="billing-tab" data-toggle="tab" href="#billing" role="tab" aria-controls="billing" aria-selected="false">Manage Billing</a></li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="console" role="tabpanel" aria-labelledby="console-tab">
<pre class="img-thumbnail" style=""><code class="php img-thumbnail" style="padding:1%;font-size:100%;line-height:280%;background:#fff;color:#000;font-family: Arial, Helvetica, sans-serif;">	<strong>1.</strong> Go to the <strong class="alert alert-secondary" style="padding:0.75%;">My Developer Profile > API Keys</strong> page.
	<a class="btn btn-primary btn-sm btn-action" href="<? echo WWWROOT; ?>?p=ovh-cloud-console">Go to API Keys page  <i class="fa fa-external-link-alt"></i></a>
	<strong>2.</strong> On the API Keys page, click <strong class="alert alert-secondary" style="padding:0.75%;">API Keys > Create New API Key</strong>.
	The API key created dialog will then display your newly created API key.
	<strong>3.</strong> <strong>Complete</strong>
	The new API key is listed on the API keys page view.
	For more information about support, see <a href="mailto:support@imbobo.org.za">iMbobo Platform Support</a>.</code></pre>
							</div>
							<div class="tab-pane fade" id="billing" role="tabpanel" aria-labelledby="billing-tab">
<pre class="img-thumbnail" style=""><code class="php img-thumbnail" style="padding:1%;font-size:100%;line-height:280%;background:#fff;color:#000;font-family: Arial, Helvetica, sans-serif;">	<strong>1.</strong> Select a project in the OVH Cloud Console.
	<a class="btn btn-primary btn-sm btn-action" href="<? echo WWWROOT; ?>?p=ovh-cloud-console-billing">Go to Billing page  <i class="fa fa-external-link-alt"></i></a>
	<strong>2.</strong> Perform the following management tasks or activities:
		<i>See an overview of your billing account and make payments from the Overview page.</i>
		(a) View your transaction history and download invoices from the <strong class="alert alert-secondary" style="padding:0.75%;">Transactions</strong> page.
		(b) Export your billing data from the <strong class="alert alert-secondary" style="padding:0.75%;">Billing Export (CSV)</strong> page.
		(c) Configure your payment account and contacts on the <strong class="alert alert-secondary" style="padding:0.75%;">Payment Settings</strong> page.
		(d) Set the method of payment on the <strong class="alert alert-secondary" style="padding:0.75%;">Payment Method</strong> page.
		(e) <strong class="alert alert-warning" style="padding:0.75%;">Future functionality</strong> Create budgets and alerts on the Budgets and alerts page.
	For more information about billing, see <a href="mailto:billing@imbobo.org.za">iMbobo Platform Billing</a>.</code></pre>
							</div>
						</div>
					</p>
				</div>
			</div>
		</div><!-- End of container -->
	</div>	
</div>