<style>	 
	a:hover{text-decoration:none;}.card{border-width:0px;margin-top:1px;border-left-width:1px;border-right-width:1px;}.card-link{color:#333;font-weightx:bold;}
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
					<h3 style='color:#333;margin:0% 0% 2.5% 0%;font-weight:normal;'>Developer FAQ</h3>
					<p>
						Dou you have a question about developers platform or integration APIs? please, take a look at our FAQ's
					</p>
					<p>
						<div id="accordion" style="font-size:100%;">
							<div class="card">
								<div class="card-header">
									<a class="collapsed card-link" data-toggle="collapse" href="#collapse--1">
										How can I create an API key?
									</a>
								</div>
								<div id="collapse--1" class="collapse" data-parent="#accordion">
									<div class="card-body">
										The API key is a unique identifier that authenticates requests associated with your project for usage and billing purposes. You must have at least one API key associated with your project.
										<br /><br />
										View details on <a class="" href="<? echo WWWROOT; ?>?p=developers-api-documentation-guide-data-feed-api-keys">how to create an API key</a>.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<a class="collapsed card-link" data-toggle="collapse" href="#collapse-1">
										How can I get more detailed developer error messages when trying to integrate to the platform?
									</a>
								</div>
								<div id="collapse-1" class="collapse" data-parent="#accordion">
									<div class="card-body">
										If you get an error like "We're sorry, something went wrong" and are having trouble determining the cause, you can optionally enable more detailed error messages which may show you more actionable information.
										<br /><br />
										More documentation can be found at <a class="" href="<? echo WWWROOT; ?>?p=developers-api-documentation-guide-data-feed-troubleshooting"><? echo WWWROOT."?p=developers-api-documentation-guide-data-feed-troubleshooting"; ?></a>.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<a class="collapsed card-link" data-toggle="collapse" href="#collapse-2">
										Which languages are supported by platform kit?
									</a>
								</div>
								<div id="collapse-2" class="collapse" data-parent="#accordion">
									<div class="card-body">
										iMbobo; OVH IoT; OVH Store; and Spider Black Online kit utilize programming languages in this list:
										<br /><br />
										Programming language list <a href="<? echo WWWROOT; ?>?p=developers-api-documentation-guide-developers-languages"><? echo WWWROOT."?p=developers-api-documentation-guide-developers-languages"; ?></a>.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<a class="collapsed card-link" data-toggle="collapse" href="#collapse-3">
										Why does the WebView dialog background not fill wide screens?
									</a>
								</div>
								<div id="collapse-3" class="collapse" data-parent="#accordion">
									<div class="card-body">
										This used to be the intended behavior. Our dialog would use a fixed width and would not scale to fit larger screens.
										<br /><br />
										This is no longer the case now, all our dialongs have been upgraded to use <a target="_blank" href="https://www.w3schools.com/bootstrap4/bootstrap_ref_all_classes.asp">Bootstrap 4</a>.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<a class="collapsed card-link" data-toggle="collapse" href="#collapse-4">
										I can't comment on a unpublished post
									</a>
								</div>
								<div id="collapse-4" class="collapse" data-parent="#accordion">
									<div class="card-body">
										Creating comments for unpublished posts through the API is not currently supported.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<a class="collapsed card-link" data-toggle="collapse" href="#collapse-5">
										Can I link multiple pages to a single RSS feed?
									</a>
								</div>
								<div id="collapse-5" class="collapse" data-parent="#accordion">
									<div class="card-body">
										You can re-use a feed URL on different pages, but note that only articles which have canonical URLs matching the domains claimed by the page will be ingested.
										<br /><br />
										Our recommended approach is to use separate RSS feeds for each page containing only the articles that should be ingested by that page.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<a class="collapsed card-link" data-toggle="collapse" href="#collapse-6">
										How can I read an RSS Feed, are there any sample codes?
									</a>
								</div>
								<div id="collapse-6" class="collapse" data-parent="#accordion">
									<div class="card-body">
										Yes, there are sample codes and examples for reading RSS feeds. Note that you may use iMbobo RSS feeds to access frequently updated information that is published such as number of potholes per municipal entries, road maintenance reports, road safety records.
										<br /><br />
										Examples of a PHP code snippet as well as code snippets in other languages to read the above RSS feed example file can be found here: <a class="" href="<? echo WWWROOT; ?>?p=developers-api-documentation-road-safety-rss-feeds">RSS Feed Reader</a>.
									</div>
								</div>
							</div>
						</div>
					</p>
				</div>
			</div>
		</div><!-- End of container -->
	</div>	
</div>