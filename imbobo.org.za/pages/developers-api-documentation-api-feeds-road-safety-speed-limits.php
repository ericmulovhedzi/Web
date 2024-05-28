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
					<h6 style='font-size:100%;color:#333;margin:0% 0% 10% 0%;'>iMbobo Road Safety API</h6>
					<ol style="list-style-type:circle;line-height:200%;">
						<li><a class="text-reset fw-bold" href="<? echo WWWROOT; ?>?p=developers"><span style='color:#0072cf;'>Overview</span></a></li>
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
					<h3 style='color:#333;margin:0% 0% 2.5% 0%;font-weight:normal;'>Speed limit information</h3>
					<p>
						iMbobo allows feed data for real-time speed limit retrieval, including geolocation on the road, residential location, and more.
						<br /><br />
						The information includes but not limited to: street name, road numbering system classification, speed limit, and more variables.
					</p>
					<h5 style="font-weight:normal;">Authentication (api-key)</h5>
					<p>
						<table style="width:50%;margin:0%;font-size:95%;border:1px solid #ddd;" class="table">
							<thead class="thead-light table-secondary">
								 <tr style="border:1px; solid #cccccc;">
									<td>Security Scheme Type</td><td>API KEY</td>
								 </tr>
							</thead>
							
							    <tr><td>Header parameter name:</td><td>Authorization</td></tr>
							
						</table>
					</p>
					<h5 style="font-weight:normal;">URL Request Structure</h5>
					<p>A request for speed limit must be sent via HTTPS, and takes the following form:</p>
					<p>
						<table style="margin:0%;font-size:95%;border:0px solid #ddd;" class="table">
							
							<tr><td style="width:16%;font-size:85%;border:0px solid #ddd;">METHOD</td><td style="border:0px solid #ddd;"><div class="alert alert-dark" style="padding:0% 1% 0% 1%;"><strong>GET</strong> {HTTP Request}</div></td></tr>
							<tr><td style="width:16%;font-size:85%;">URL STRUCTURE</td><td><div class="alert alert-dark" style="padding:0% 1% 0% 1%;">http://imbobo.org.za/webservice/v1/rest/get/speedlimits.php?api_key=&lt;APP_KEY&gt;<strong>&lat=-26.195246&lon=28.034088</strong></div></td></tr>
							<tr>
								<td style="width:16%;font-size:85%;font-style:italic;">NOTES:</td>
								<td style="font-style:italic;">
									The example above uses lat and lon as API input parameters, in case a user is having only a street name, the URI will then change to "?api_key=<APP_KEY>&street=1 Asparagus".
								</td>
							</tr>
						</table>
					</p>
					<h5 style="font-weight:normal;">Speed limit elements - Input (Street name):</h5>
					<p>Use the elements in the following table to retrieve a "speed limit" entry in your feed file. The order of the elements does not matter to the engine parsing the file.</p>
					<p>
						<table style="margin:0%;font-size:95%;border:1px solid #ddd;" class="table">
							<thead class="thead-light table-secondary">
								 <tr style="border:1px; solid #cccccc;">
									<td>Element</td><td>Required?</td><td style="width:12%;">Tag input</td><td>Description</td>
								 </tr>
							</thead>
							
							    <tr>
								<td>street</td><td>Required</td><td>Free text</td><td>Specifies the name of the street on which you would like to enquire. It must be at least 3 alphanumeric characters in length.</td>
							    </tr>
							
						</table>
					</p>
					<h5 style="font-weight:normal;">Speed limit elements - Input (GPS coordinates):</h5>
					<p>Use the elements in the following table to retrieve a "speed limit" entry in your feed file. The order of the elements does not matter to the engine parsing the file.</p>
					<p>
						<table style="margin:0%;font-size:95%;border:1px solid #ddd;" class="table">
							<thead class="thead-light table-secondary">
								 <tr style="border:1px; solid #cccccc;">
									<td>Element</td><td>Required?</td><td style="width:12%;">Tag input</td><td>Description</td>
								 </tr>
							</thead>
							
							    <tr>
								<td>lat</td><td>Required</td><td>Free text</td><td>Latitude coordinate that describe the geo-location of the asset's location upon which you would like to enquire. These should have at least 6 digits after the decimal point for sufficient accuracy.</td>
							    </tr>
							    <tr>
								<td>lon</td><td>Required</td><td>Free text</td><td>Longitude coordinate that describe the geo-location of the asset's location upon which you would like to enquire. These should have at least 6 digits after the decimal point for sufficient accuracy.</td>
							    </tr>
						</table>
					</p>
					<h5 style="font-weight:normal;">Responses:</h5>
					<p>The following source code snippets show a single response in JSON and XML formats.</p>
					<p>
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li></li>
							<li class="nav-item"><a class="nav-link active" id="json-tab" data-toggle="tab" href="#json" role="tab" aria-controls="json" aria-selected="false">JSON response</a></li>
							<li class="nav-item"><a class="nav-link" id="xml-tab" data-toggle="tab" href="#xml" role="tab" aria-controls="xml" aria-selected="false">XML response</a></li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="json" role="tabpanel" aria-labelledby="json-tab">
<pre class="img-thumbnail" style=""><code class="php img-thumbnail" style="padding:1%;font-size:90%;">{
	"status":1,
	"code":200,
	"description":"OK_SUCCESS",
	"message":"1 item(s) retrieved successful",
	"data":
	{
		speedLimit: 60,
		units: "KPH",
		legalReference: "Sect. 59(4)(a) r/w Reg. 292(b)",
		roadType: "Rural Road",
		numberRules: 16,
		minimumSpeedLimitEnforcement: 70,
		minimumSpeedLimitEnforcementChargeCode: 8311,
		minimumSpeedLimitEnforcementAmount: 400,
		maximumSpeedLimitEnforcement: 140,
		maximumSpeedLimitEnforcementChargeCode: 8326,
		maximumSpeedLimitEnforcementAmount: 400,
		maximumSpeedLimitEnforcementAmountIncrement: 3400,
		maximumSpeedLimitEnforcementLegalReference: "Sect. 35(1)(aA)(ii)",
		currency: "ZAR"
	}
}</code></pre>
							</div>
							<div class="tab-pane fade" id="xml" role="tabpanel" aria-labelledby="xml-tab">
<pre class="img-thumbnail" style=""><code class="php img-thumbnail" style="padding:1%;font-size:90%;">&lt;speedlimits&gt;
	&lt;limit&gt;
		&lt;speedlimit units="KPH"currency="ZAR"&gt;City of Johannesburg Metropolitan Municipality&lt;/speedlimit&gt;
		&lt;legalreference&gt;Sect. 59(4)(a) r/w Reg. 292(b)&lt;/legalreference&gt;
		&lt;roadtype&gt;Rural Road&lt;/roadtype&gt;
		&lt;numberrules&gt;16&lt;/numberrules&gt;
		&lt;minimumspeedlimitenforcement&gt;70&lt;/minimumspeedlimitenforcement&gt;
		&lt;minimumspeedlimitenforcementchargecode&gt;8311&lt;/minimumspeedlimitenforcementchargecode&gt;
		&lt;minimumspeedlimitenforcementamount&gt;400&lt;/minimumspeedlimitenforcementamount&gt;
		&lt;maximumspeedlimitenforcement&gt;140&lt;/maximumspeedlimitenforcement&gt;
		&lt;maximumspeedlimitenforcementchargecode&gt;8326&lt;/maximumspeedlimitenforcementchargecode&gt;
		&lt;maximumspeedlimitenforcementamount&gt;3400&lt;/maximumspeedlimitenforcementamount&gt;
		&lt;maximumspeedlimitenforcementlegalreference&gt;Sect. 35(1)(aA)(ii)&lt;/maximumspeedlimitenforcementlegalreference&gt;
	&lt;/limit&gt;
&lt;/speedlimits&gt;</code></pre>
							</div>
					</p>
					<h5 style="font-weight:normal;">Consuming source codes:</h5>
					<p>The following source code snippets show the above API responses' consuming source code counterparts in various programming languages such as PHP, ASP.Net, JavaScript, Android SDK, iOS SDK, C#, Java etc.</p>
					<p>
						<ul class="nav nav-tabs" id="myTab1" role="tablist">
							<li></li>
							<li class="nav-item"><a class="nav-link active" id="php-tab" data-toggle="tab" href="#php" role="tab" aria-controls="php" aria-selected="false">PHP</a></li>
							<li class="nav-item"><a class="nav-link" id="asp-tab" data-toggle="tab" href="#asp" role="tab" aria-controls="asp" aria-selected="false">ASP.net</a></li>
							<li class="nav-item"><a class="nav-link" id="javascript-tab" data-toggle="tab" href="#javascript" role="tab" aria-controls="javascript" aria-selected="false">JavaScript</a></li>
							<li class="nav-item"><a class="nav-link" id="android-sdk-tab" data-toggle="tab" href="#android-sdk" role="tab" aria-controls="android-sdk" aria-selected="false">Android SDK</a></li>
							<li class="nav-item"><a class="nav-link" id="c-sharp-tab" data-toggle="tab" href="#c-sharp" role="tab" aria-controls="c-sharp" aria-selected="false">C#</a></li>
						</ul>
						<div class="tab-content" id="myTabContent1">
							<div class="tab-pane fade show active" id="php" role="tabpanel" aria-labelledby="php-tab">
<pre class="img-thumbnail" style=""><code class="php img-thumbnail" style="padding:1%;font-size:90%;">$jsonString = '{"status":1,"code":200,"description":"OK_SUCCESS","message":"3 Item(s) retrieved successful","data":{"id":"101",speedLimit: 60,units: "KPH",legalReference: "Sect. 59(4)(a) r/w Reg. 292(b)",roadType: "Rural Road",numberRules: 16,minimumSpeedLimitEnforcement: 70,minimumSpeedLimitEnforcementChargeCode: 8311,minimumSpeedLimitEnforcementAmount: 400,maximumSpeedLimitEnforcement: 140,maximumSpeedLimitEnforcementChargeCode: 8326,maximumSpeedLimitEnforcementAmount: 400,maximumSpeedLimitEnforcementAmountIncrement: 3400,maximumSpeedLimitEnforcementLegalReference: "Sect. 35(1)(aA)(ii)",currency: "ZAR"}';	
	
$jsonArray = @json_decode($jsonString,true);
if(isset($jsonArray) && ($jsonArray["status"]==1) && (is_array($jsonArray["data"])))
{
	/* Access the array data with predefined keys. */
	echo "Speed limit: ".$jsonArray["data"]["speedlimit"]."&lt;br /&gt;";
	echo "Units: ".$jsonArray["data"]["units"]."&lt;br /&gt;";
	echo "Legal reference: ".$jsonArray["data"]["legalreference"]."&lt;br /&gt;";
	echo "Road type: ".$jsonArray["data"]["roadtype"]."&lt;br /&gt;";
	echo "Minimum speedLimit enforcement: ".$jsonArray["data"]["minimumspeedLimitenforcement"]."&lt;br /&gt;";
	echo "Minimum speedLimit enforcement charge code: ".$jsonArray["data"]["minimumspeedLimitenforcementchargecode"]."&lt;br /&gt;";
	echo "Minimum speedLimit enforcement amount: ".$jsonArray["data"]["minimumspeedLimitenforcementamount"]."&lt;br /&gt;";
	echo "Maximum speed limit enforcement charge code:".$jsonArray["data"]["maximumspeedlimitenforcement"]."&lt;br /&gt;";
	echo "Maximum speed limit enforcement amount: ".$jsonArray["data"]["maximumspeedlimitenforcementamount"]."&lt;br /&gt;";
	echo "Maximum speed limit enforcement amount increment: ".$jsonArray["data"]["maximumspeedlimitenforcementamountincrement"]."&lt;br /&gt;";
	echo "Maximum speed limit enforcement legal reference: ".$jsonArray["data"]["maximumspeedlimitenforcementlegalreference"]."&lt;br /&gt;";
	echo "Currency: ".$jsonArray["data"]["currency"]."&lt;br /&gt;";
	
	/* Or, you can use an automated version, a for loop version. */
	foreach ($jsonArray["data"] as $key => $value)
	{
		echo $key.": ".$value."&lt;br /&gt;";
	}
}</code></pre>
							</div>
							<div class="tab-pane fade" id="javascript" role="tabpanel" aria-labelledby="javascript-tab">
<pre class="img-thumbnail" style=""><code class="php img-thumbnail" style="padding:1%;font-size:90%;">var jsonString = '{"status":1,"code":200,"description":"OK_SUCCESS","message":"3 Item(s) retrieved successful","data":{"id":"101",speedLimit: 60,units: "KPH",legalReference: "Sect. 59(4)(a) r/w Reg. 292(b)",roadType: "Rural Road",numberRules: 16,minimumSpeedLimitEnforcement: 70,minimumSpeedLimitEnforcementChargeCode: 8311,minimumSpeedLimitEnforcementAmount: 400,maximumSpeedLimitEnforcement: 140,maximumSpeedLimitEnforcementChargeCode: 8326,maximumSpeedLimitEnforcementAmount: 400,maximumSpeedLimitEnforcementAmountIncrement: 3400,maximumSpeedLimitEnforcementLegalReference: "Sect. 35(1)(aA)(ii)",currency: "ZAR"}';	
var jsonArray = JSON.parse(jsonString);
if(jsonArray.status == 1)
{
	/* Access the json array data with predefined keys using jQuery library. */
	$.each(jsonArray.data,function(key,val)
	{
		console.log((key + ":" + val); /* Passive display of keys and values */
		alert(key + ":" + val); /* Native popup display of keys and values */
	});
}</code></pre>
							</div>
							<div class="tab-pane fade" id="asp" role="tabpanel" aria-labelledby="asp-tab">
<pre class="img-thumbnail" style=""><code class="php img-thumbnail" style="padding:1%;font-size:90%;">public class speedLimit
{
	public Integer id { get; set; }
	public string speedlimit { get; set; }
	public string units { get; set; }
	public string legalreference { get; set; }
	public Integer roadtype { get; set; }
	public string minimumspeedLimitenforcement { get; set; }
	public string minimumspeedLimitenforcementchargecode { get; set; }
	public Integer minimumspeedLimitenforcementamount { get; set; }
	public string maximumspeedlimitenforcement { get; set; }
	public string maximumspeedlimitenforcementamount { get; set; }
	public string maximumspeedlimitenforcementamountincrement { get; set; }
	public string maximumspeedlimitenforcementlegalreference { get; set; }
	public string currency { get; set; }
}
try
{
	string jsonString = '{"status":1,"code":200,"description":"OK_SUCCESS","message":"3 Item(s) retrieved successful","data":{"id":"101",speedLimit: 60,units: "KPH",legalReference: "Sect. 59(4)(a) r/w Reg. 292(b)",roadType: "Rural Road",numberRules: 16,minimumSpeedLimitEnforcement: 70,minimumSpeedLimitEnforcementChargeCode: 8311,minimumSpeedLimitEnforcementAmount: 400,maximumSpeedLimitEnforcement: 140,maximumSpeedLimitEnforcementChargeCode: 8326,maximumSpeedLimitEnforcementAmount: 400,maximumSpeedLimitEnforcementAmountIncrement: 3400,maximumSpeedLimitEnforcementLegalReference: "Sect. 35(1)(aA)(ii)",currency: "ZAR"}';	
;
	List&lt;speedLimit&gt; speedLimitItems = (List&lt;speedLimit&gt;)JsonConvert.DeserializeObject(jsonString, typeof(List&lt;speedLimit&gt;));
	foreach (var item in speedLimitItems)
	{
	    Console.WriteLine("Speed limit: " + item.speedlimit.ToString() + "&lt;br /&gt;)";
	    Console.WriteLine("Speed limit id: " + item.id + "&lt;br /&gt;)";
	    Console.WriteLine("Units: " + item.units.ToString() + "&lt;br /&gt;)";
	    Console.WriteLine("Legal reference: " + item.legalreference + "&lt;br /&gt;)";
	    Console.WriteLine("Road type: " + item.roadtype.ToString() + "&lt;br /&gt;)";
	    Console.WriteLine("Minimum speedLimit enforcement: " + item.minimumspeedLimitenforcementchargecode + "&lt;br /&gt;)";
	    Console.WriteLine("Minimum speedLimit enforcement charge code: " + item.minimumspeedLimitenforcementamount.ToString() + "&lt;br /&gt;)";
	    Console.WriteLine("Maximum speed limit enforcement charge code: " + item.maximumspeedlimitenforcement.ToString() + "&lt;br /&gt;)";
	    Console.WriteLine("Maximum speed limit enforcement amount: " + item.maximumspeedlimitenforcementamount + "&lt;br /&gt;)";
	    Console.WriteLine("Maximum speed limit enforcement amount increment: " + item.maximumspeedlimitenforcementamountincrement.ToString() + "&lt;br /&gt;)";
	    Console.WriteLine("Maximum speed limit enforcement legal reference: " + item.maximumspeedlimitenforcementlegalreference .ToString() + "&lt;br /&gt;)";
	    Console.WriteLine("Currency: " + item.currency.ToString() + "&lt;br /&gt;)";
	}
}
catch (Exception ex)
{
    Console.WriteLine(ex.Message.ToString());
}</code></pre>
							</div>
							<div class="tab-pane fade" id="android-sdk" role="tabpanel" aria-labelledby="android-sdk-tab">
<pre class="img-thumbnail" style=""><code class="php img-thumbnail" style="padding:1%;font-size:90%;">
					<a class="btn btn-md btn-dark" href="<? echo WWWROOT; ?>?p=contacts">Contact our Developers</a>
				
</code></pre>
							</div>
							<div class="tab-pane fade" id="c-sharp" role="tabpanel" aria-labelledby="c-sharp-tab">
<pre class="img-thumbnail" style=""><code class="php img-thumbnail" style="padding:1%;font-size:90%;">
					<a class="btn btn-md btn-dark" href="<? echo WWWROOT; ?>?p=contacts">Contact our Developers</a>
				
</code></pre>
							</div>
						</div>
					</p>
					<h5 style="font-weight:normal;">Usage recommendations</h5>
					<p>
						To minimize the volume of calls to the Speed Limit service, we recommend sampling the locations of your assets at 5 to 15 minute intervals. If an asset is stationary, a single location sample is sufficient (there is no need to make multiple calls).
						<br /><br />
						To minimize overall latency, we recommend calling the Speed Limit service once you have accumulated some data, rather than calling the API every time the location of a mobile asset is received.
					</p>
					<h5 style="font-weight:normal;">Why are some/all speed limit missing?</h5>
					<p>
						The most common cause of missing speed limit is requesting the speed limit of a place that is not a road segment.
						<br /><br />
						Other common causes of missing speed limit are simpy related to requesting speed limit using wrong spelling of street name.
					</p>
				</div>
			</div>
		</div><!-- End of container -->
	</div>	
</div>