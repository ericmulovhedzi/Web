<style>	 
	
</style>
<link rel="stylesheet" href="<? echo WWWROOT; ?>style/highlighter/solarized_dark.css">
<script src="<? echo WWWROOT; ?>style/highlighter/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<div class="" style='padding-bottom:0%;padding-top:0%;padding-bottom:1%;'>
	<div class="container">
		
		<div class="row" style='background:transparent;padding:5% 0% 0% 0%;'><!-- Beggining of container -->
		
			<div class="col-md-3">
				<div class="img-thumbnailx" style="padding:1%;">
					<h6 style='font-size:100%;color:#333;margin:0% 0% 10% 0%;'>iMbobo RSS Feeds</h6>
					<ol style="list-style-type:circle;line-height:200%;">
						<li><a class="text-reset fw-bold" href="<? echo WWWROOT; ?>?p=developers-api-documentation-road-safety-rss-feeds"><span style='color:#0072cf;'>Overview</span></a></li>
					</ol>
					<p style="">
						<a class="btn btn-md btn-light" href="<? echo WWWROOT; ?>?p=developers">Platform API Home Page</a>
					</p>
				</div>
			</div>
			<div class="col-md-9">
				<div style="padding:0% 1% 1% 1%;">
					<h3 style='color:#333;margin:0% 0% 2.5% 0%;font-weight:normal;'><span class="fas fa-rss-square" style="color:#ff7700;"></span>&nbsp;RSS Feeds Overview</h3>
					<p>
						RSS is an XML web feed that allows users and applications to access updates to websites in a standardized, computer-readable format.
						<br /><br />
						Use iMbobo RSS feeds to access frequently updated information that is published such as number of potholes per municipal entries, road maintenance reports, road safety records.
						<ol style="line-height:200%;">
							<li><a target="_blank" href="<? echo WWWROOT; ?>rss/pothole-reports-feed.rss">Pothole Reports Feed</a></li>
							<li><a target="_blank" href="<? echo WWWROOT; ?>rss/voltage-outage-reports-feed.rss">Voltage Outage Reports Feed</a></li>
							<li><a target="_blank" href="<? echo WWWROOT; ?>road-safety-service-delivery-solutions.xml">Road Safety and ervice Delivery Solutions Feed</a></li>
						</ol>
					</p>
					<h5 style="font-weight:normal;">RSS (XML Code) Example</h5>
					<p>
<pre class="img-thumbnail" style=""><code class="php img-thumbnail" style="padding:1%;font-size:90%;">&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;&#160;?&gt;
&lt;rss xmlns:atom="http://www.w3.org/2005/Atom" version="2.0"&gt;
	&lt;channel&gt;
		&lt;title&gt;iMbobo App Pothole Reports&lt;/title&gt;
		&lt;link&gt;http://imbobo.org.za/rss/&lt;/link&gt;
		&lt;atom:link href="http://imbobo.org.za/rss/pothole-reports-feed.rss" rel="self" type="application/rss+xml"/&gt;
		&lt;description&gt;Number of potholes per municipal entries&lt;/description&gt;
		&lt;potholes&gt;63500&lt;/potholes&gt;
		&lt;responses&gt;950&lt;/responses&gt;
		&lt;copyright&gt;2021 imbobo.rg.za All rights reserved&lt;/copyright&gt;
		&lt;lastBuildDate&gt;Thu, 04 Nov 2021 00:25:48 GMT&lt;/lastBuildDate&gt;
		&lt;item&gt;
			&lt;municipality&gt;City of Johannesburg Metropolitan Municipality&lt;/municipality&gt;
			&lt;potholes&gt;3500&lt;/potholes&gt;
			&lt;responses&gt;50&lt;/responses&gt;
			&lt;link&gt;http://imbobo.org.za/?p=rss-pothole-reports-feed&lt;/link&gt;
			&lt;guid isPermaLink="false"&gt;Platform Status update at: Thu, 04 Nov 2021 00:25:48 GMT&lt;/guid&gt;
			&lt;description&gt;Road safety arround City of Johannesburg Metropolitan Municipality seems to be reasonable.&lt;/description&gt;
			&lt;pubDate&gt;Thu, 04 Nov 2021 00:25:48 GMT&lt;/pubDate&gt;
		&lt;/item&gt;
	&lt;/channel&gt;
&lt;/rss&gt;</code></pre>
					</p>
					<h5 style="font-weight:normal;">PHP RSS Feed Reader Sample Code</h5>
					<p>Example of a PHP code snippet to read the above RSS feed example file:</p>
					<p>
<pre class="img-thumbnail" style=""><code class="php img-thumbnail" style="padding:1%;font-size:90%;">$rss_feed = simplexml_load_file("http://imbobo.org.za/rss/pothole-reports-feed.rss");	
if(!empty($rss_feed))
{
	echo "Title: ".$rss_feed->channel->title."&lt;br /&gt;";
	echo "Total No. of Potholes in South Africa: ".$rss_feed-&gt;channel-&gt;potholes;
	echo "&lt;br /&gt;";
	echo "No of Pothole Fixed in South Africa: ".$rss_feed-&gt;channel-&gt;responses;
	echo "&lt;br /&gt;";
	echo "Date Report Generated: ".$rss_feed-&gt;channel-&gt;lastBuildDate;
	echo "&lt;br /&gt;&lt;hr /&gt;&lt;br /&gt;"
	
	$i=0;
	foreach($rss_feed-&gt;channel-&gt;item as $feed_item)
	{
		if($i&gt;=5) break; // Fetch data from only top five municipalities.
		echo "Municipality: ".$feed_item-&gt;municipality."&lt;br /&gt;";
		echo "No. of Potholes: ".$feed_item-&gt;potholes."&lt;br /&gt;";
		echo "No. of Pothole Fixed: ".$feed_item-&gt;responses."&lt;br /&gt;&lt;br /&gt;";
		$i++;	
	}
}</code></pre>
					</p>
				</div>
			</div>
		</div><!-- End of container -->
	</div>	
</div>