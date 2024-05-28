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
					<h6 style='font-size:100%;color:#333;margin:0% 0% 10% 0%;'>iMbobo Service Delivery API</h6>
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
					<h3 style='color:#333;margin:0% 0% 2.5% 0%;font-weight:normal;'>Road maintenance information</h3>
					<p>
						iMbobo allows feed data for real-time road maintenance information retrieval, including number of potholes within an area, geolocation and geopolitical location of the pothole, residential location, and more.
						<br /><br />
						The information includes but not limited to: street name, road maintenance, and more variables.
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
					<p>A request for road maintenance must be sent via HTTPS, and takes the following form:</p>
					<p>
						<table style="margin:0%;font-size:95%;border:0px solid #ddd;" class="table">
							
							<tr><td style="width:16%;font-size:85%;border:0px solid #ddd;">METHOD</td><td style="border:0px solid #ddd;"><div class="alert alert-dark" style="padding:0% 1% 0% 1%;"><strong>GET</strong> {HTTP Request}</div></td></tr>
							<tr><td style="width:16%;font-size:85%;">URL STRUCTURE</td><td><div class="alert alert-dark" style="padding:0% 1% 0% 1%;">http://imbobo.org.za/webservice/v1/rest/get/roadmaintenance.php?api_key=&lt;APP_KEY&gt;<strong>&lat=-26.195246&lon=28.034088</strong></div></td></tr>
							<tr>
								<td style="width:16%;font-size:85%;font-style:italic;">NOTES:</td>
								<td style="font-style:italic;">
									The example above uses only <strong>subrub</strong> as API input parameter. Example of its URI will then be "?api_key=<APP_KEY>&street=Halfway House".
								</td>
							</tr>
						</table>
					</p>
					<h5 style="font-weight:normal;">Road maintenance elements - Input (Suburb):</h5>
					<p>Use the elements in the following table to retrieve a "location" entry in your feed file. The order of the elements does not matter to the engine parsing the file.</p>
					<p>
						<table style="margin:0%;font-size:95%;border:1px solid #ddd;" class="table">
							<thead class="thead-light table-secondary">
								 <tr style="border:1px; solid #cccccc;">
									<td>Element</td><td>Required?</td><td style="width:12%;">Tag input</td><td>Description</td>
								 </tr>
							</thead>
							
							    <tr>
								<td>suburb</td><td>Required</td><td>Free text</td><td>Specifies the name of the suburb on which you would like to enquire. It must be at least 3 alphanumeric characters in length.</td>
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
	"message":"3 Item(s) retrieved successful",
	"data":
	{
		"id":"101",
		"code":"JHB",
		"municipality":"City of Johannesburg Metropolitan Municipality",
		"roadnetworksize":"145",
		"units": "KM",
		"populationsize":"3200",
		"province":"Gauteng",
		"countrycode":"ZA",
		"totalpotholesnumber":"3500",
		"potholes":
		[{
			recordreferencenumber: "PO3-4-1",
			datelogged: "2021-07-13",
			responses: "0",
			datelastresponse: "0000-00-00",
			lat: "-26.195246",
			lon: "28.034088",
			street: "1 Asparagus",
			suburb: "Halfway House",
			postalcode: "1986",
			ward: "33",
			region:"Region F",
			city: "Midrand"
		}]
	}
}</code></pre>
							</div>
							<div class="tab-pane fade" id="xml" role="tabpanel" aria-labelledby="xml-tab">
<pre class="img-thumbnail" style=""><code class="php img-thumbnail" style="padding:1%;font-size:90%;">&lt;roadmaintenance&gt;
	&lt;potholes&gt;
		&lt;municipality id="101" code="JHB" totalpotholesnumber="3200" roadnetworksize="145" units="MK" populationsize="3200"&gt;City of Johannesburg Metropolitan Municipality&lt;/municipality&gt;
		&lt;province&gt;Gauteng&lt;/province&gt;
		&lt;countrycode&gt;ZA&lt;/countrycode&gt;
		&lt;pothole&gt;
			&lt;recordreferencenumber&gt;ZA&lt;/recordreferencenumber&gt;
			&lt;datelogged&gt;2021-07-13&lt;/datelogged&gt;
			&lt;responses&gt;0&lt;/responses&gt;
			&lt;datelastresponse&gt;0000-00-00&lt;/datelastresponse&gt;
			&lt;lat&gt;-26.195246&lt;/lat&gt;
			&lt;lon&gt;28.034088&lt;/lon&gt;
			&lt;region&gt;Region F&lt;/region&gt;
			&lt;ward&gt;33&lt;/ward&gt;
			&lt;suburb&gt;Halfway House&lt;/suburb&gt;
			&lt;city&gt;Midrand&lt;/city&gt;
			&lt;postalcode&gt;1986&lt;/postalcode&gt;
			&lt;streetr&gt;Ms Makondelele Mbedzi&lt;/street&gt;
			&lt;politicalparty&gt;ABC&lt;/politicalparty&gt;
			&lt;nearestpolicestation&gt;Midrand Police Station&lt;/nearestpolicestation&gt;
			&lt;province&gt;Gauteng&lt;/province&gt;
		&lt;/pothole&gt;
	&lt;/potholes&gt;
&lt;/roadmaintenance&gt;</code></pre>
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
<pre class="img-thumbnail" style=""><code class="php img-thumbnail" style="padding:1%;font-size:90%;">$jsonString = '{"status":1,"code":200,"description":"OK_SUCCESS","message":"3 Item(s) retrieved successful","data":{"id":"101","code":"JHB","municipality":"City of Johannesburg Metropolitan Municipality","roadnetworksize":"145","units": "KM","populationsize":"3200","province":"Gauteng","countrycode":"ZA","totalpotholesnumber":"3500","potholes":[{recordreferencenumber: "PO3-4-1",datelogged: "2021-07-13",responses: "0",datelastresponse: "0000-00-00",lat: "-26.195246",lon: "28.034088",street: "1 Asparagus",suburb: "Halfway House",postalcode: "1986",ward: "33",region:"Region F",city: "Midrand"}]}';	
	
$jsonArray = @json_decode($jsonString,true);
if(isset($jsonArray) && ($jsonArray["status"]==1) && (is_array($jsonArray["data"])))
{
	/* Access the array data with predefined keys. */
	echo "Municipality id: ".$jsonArray["data"]["id"]."&lt;br /&gt;";
	echo "Municipality code: ".$jsonArray["data"]["code"]."&lt;br /&gt;";
	echo "Municipality name: ".$jsonArray["data"]["municipality"]."&lt;br /&gt;";
	echo "Total potholes number: ".$jsonArray["data"]["totalpotholesnumber"]."&lt;br /&gt;";
	echo "Units: ".$jsonArray["data"]["units"]."&lt;br /&gt;";
	echo "Road network size: ".$jsonArray["data"]["roadnetworksize"]."&lt;br /&gt;";
	echo "Population size:".$jsonArray["data"]["populationsize"]."&lt;br /&gt;";
	echo "Province: ".$jsonArray["data"]["province"]."&lt;br /&gt;";
	echo "Country code: ".$jsonArray["data"]["countrycode"]."&lt;br /&gt;";
	echo "Potholes: ".$jsonArray["data"]["potholes"]."&lt;br /&gt;";
	
	/* Or, you can use an automated version, a for loop version. */
	foreach ($jsonArray["data"] as $key => $value)
	{
		echo $key.": ".$value."&lt;br /&gt;";
	}
}</code></pre>
							</div>
							<div class="tab-pane fade" id="javascript" role="tabpanel" aria-labelledby="javascript-tab">
<pre class="img-thumbnail" style=""><code class="php img-thumbnail" style="padding:1%;font-size:90%;">var jsonString = '{"status":1,"code":200,"description":"OK_SUCCESS","message":"3 Item(s) retrieved successful","data":{"id":"101","code":"JHB","municipality":"City of Johannesburg Metropolitan Municipality","roadnetworksize":"145","units": "KM","populationsize":"3200","province":"Gauteng","countrycode":"ZA","totalpotholesnumber":"3500","potholes":[{recordreferencenumber: "PO3-4-1",datelogged: "2021-07-13",responses: "0",datelastresponse: "0000-00-00",lat: "-26.195246",lon: "28.034088",street: "1 Asparagus",suburb: "Halfway House",postalcode: "1986",ward: "33",region:"Region F",city: "Midrand"}]}';	
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
<pre class="img-thumbnail" style=""><code class="php img-thumbnail" style="padding:1%;font-size:90%;">public class roadMaintenance
{
	public Integer id { get; set; }
	public string code { get; set; }
	public string municipality { get; set; }
	public string totalpotholesnumber { get; set; }
	public string units { get; set; }
	public Integer roadnetworksize { get; set; }
	public Integer populationsize{ get; set; }
	public string province { get; set; }
	public string countrycode { get; set; }
	public string potholes { get; set; }
}
try
{
	string jsonString = '{"status":1,"code":200,"description":"OK_SUCCESS","message":"3 Item(s) retrieved successful","data":{"id":"101","code":"JHB","municipality":"City of Johannesburg Metropolitan Municipality","roadnetworksize":"145","units": "KM","populationsize":"3200","province":"Gauteng","countrycode":"ZA","totalpotholesnumber":"3500","potholes":[{recordreferencenumber: "PO3-4-1",datelogged: "2021-07-13",responses: "0",datelastresponse: "0000-00-00",lat: "-26.195246",lon: "28.034088",street: "1 Asparagus",suburb: "Halfway House",postalcode: "1986",ward: "33",region:"Region F",city: "Midrand"}]}';	
;
	List&lt;roadMaintenance&gt; roadMaintenanceItems = (List&lt;roadMaintenance&gt;)JsonConvert.DeserializeObject(jsonString, typeof(List&lt;roadMaintenance&gt;));
	foreach (var item in roadMaintenanceItems)
	{
	    Console.WriteLine("Municipality id: " + item.id + "&lt;br /&gt;)";
	    Console.WriteLine("Municipality code: " + item.code.ToString() + "&lt;br /&gt;)";
	    Console.WriteLine("Municipality name: " + item.municipality.ToString() + "&lt;br /&gt;)";
	    Console.WriteLine("Units: " + item.units.ToString() + "&lt;br /&gt;)";
	    Console.WriteLine("Total potholes number: " + item.totalpotholesnumber + "&lt;br /&gt;)";
	    Console.WriteLine("Road network size: " + item.roadnetworksize.ToString() + "&lt;br /&gt;)";
	    Console.WriteLine("Population size: " + item.mpopulationsize + "&lt;br /&gt;)";
	    Console.WriteLine("Province: " + item.province.ToString() + "&lt;br /&gt;)";
	    Console.WriteLine("Country code: " + item.countrycode.ToString() + "&lt;br /&gt;)";
	    Console.WriteLine("Potholes: " + item.potholes + "&lt;br /&gt;)";
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
						To minimize the volume of calls to the Road Maintenance service, we recommend sampling the locations of your assets at 5 to 15 minute intervals. If an asset is stationary, a single location sample is sufficient (there is no need to make multiple calls).
						<br /><br />
						To minimize overall latency, we recommend calling the Road Maintenance service once you have accumulated some data, rather than calling the API every time the location of a mobile asset is received.
					</p>
					<h5 style="font-weight:normal;">Why are some/all road maintenance missing?</h5>
					<p>
						The most common cause of missing road maintenance is requesting the road maintenance of a place that is not a suburb nor road segment.
						<br /><br />
						Other common causes of missing road maintenance are simpy related to requesting road maintenance using wrong spelling of suburb or street name.
					</p>
				</div>
			</div>
		</div><!-- End of container -->
	</div>	
</div>