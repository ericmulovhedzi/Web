<script src="<? echo WWWROOT; ?>style/raphael/raphael-mini.js"></script>
<script src="<? echo WWWROOT; ?>style/raphael/popup.js"></script>
<script src="<? echo WWWROOT; ?>style/raphael/analytics.js"></script>
<script src="<? echo WWWROOT; ?>style/raphael/dots.js"></script>
<style type="text/css">
#holder{height: 250px;margin:0px 0px 15px -23px;}
#chart {color: #333; margin:0px 0px 15px 31px; height: 300px;}
.ui-datepicker-calendar{display:none;}.ui-datepicker-buttonpane .ui-datepicker-current{visibility:hidden;}
</style>
<style>
	.nav-t-hover{}.nav-t-hover:hover{background-color:#444;text-decoration:none;color:#eee;}
	.nav-t-bg-color-blackish{background-color:#282935;}.nav-t-bg-color-redish{background-color:#e6243c;}.nav-t-bg-color-greenish{background-color:#4da038;}
</style>
<?php
	$_RSS_TITLE = $_RSS_DESCRIPTION = $_RSS_LAST_UBILD_DATE = "";
	$_dataHeader = $_dataBodyHeader = $_dataBody = $_dataBodyJS = "";
	
	$rss_feed = simplexml_load_file(WWWROOT."rss/outage-events-feed.rss");
	
	if(!empty($rss_feed))
	{
		$_RSS_TITLE = $rss_feed->channel->title;
		$_RSS_DESCRIPTION = $rss_feed->channel->description;
		$_RSS_LAST_UBILD_DATE = $rss_feed->channel->lastBuildDate;
		$i=0;
		$_dataHeader = "<td>---</td>";$_dataBody= "<th scope='row'>---</th>";
		foreach($rss_feed->channel->item as $feed_item)
		{
			if($i>=20) break;
			$_dataHeader.= "<th>".$feed_item->pubDate."</th>";
			$_dataBodyHeader.= "<th>".$i."</th>";
			$_dataBody.= "<td>".$feed_item->responseTime."</td>";
			$_dataBodyJS .= '"'.$i.'":'.$feed_item->responseTime.',';
				
			$i++;	
		}
		
		$_dataBodyJS = substr_replace($_dataBodyJS,"", -1);
	}
?>
<div class="" style='padding-bottom:0%;padding-top:0%;padding-bottom:0%;'>
	<div>
		
		<div class="row" style='width:100%;padding:0% 0% 0% 0%;margin:0%;'>
			<div class="col-md-4 nav-t-hover nav-t-bg-color-blackish" style="padding:0.4%;text-align:center;border-right:1px solid #fff;">
				<a href="<? echo WWWROOT; ?>?p=legal-trust"><span style="font-weight:bold;font-size:95%;color:#fff;">SECURITY</span></a>
			</div>
			<div class="col-md-4 nav-t-hover nav-t-bg-color-redish" style="padding:0.4%;text-align:center;border-left:0px solid #fff;border-right:1px solid #ccc;">
				<a href="<? echo WWWROOT; ?>?p=legal-trust"><span style="font-weight:bold;font-size:95%;color:#fff;">PLATFORM STATUS</span></a>
			</div>
			<div class="col-md-4 nav-t-hover nav-t-bg-color-greenish" style="padding:0.4%;text-align:center;border-left:0px solid #fff;">
				<a href="<? echo WWWROOT; ?>?p=legal-trust"><span style="font-weight:bold;font-size:95%;color:#fff;">COMPLIANCE</span></a>
			</div>
		</div>
		
	</div>	
</div>
<div class="" style='background: #fff;'>
	<div class="container">
		<style>
			.how-it-works{color:#fff;font-style:normal;font-weight:700;text-align:center;}
			.color_style_link2{background-color:#877924;}.color_style_link2:hover{background-color:#282a35;text-decoration:none;color:#eee;}
			
			.label {
  height: 1em;
  padding: .3em;
  background: rgba(255, 255, 255, .8);
  position: absolute;
  display: none;
  color:#333;
  
}
		</style>
		<div class="row" style="padding:2% 0% 0% 0%;">
		      
			<div class="col-md-6" style="padding:3% 0% 0% 0%;">
				<canvas id='c' style="width:100%;height:60%;background-color:#222;"></canvas>
				<div class="label">ms</div>
			</div>
			<script>
				var label = document.querySelector(".label");
var c = document.getElementById("c");
var ctx = c.getContext("2d");
var cw = c.width = 700;
var ch = c.height = 350;
var cx = cw / 2,
  cy = ch / 2;
var rad = Math.PI / 180;
var frames = 0;

ctx.lineWidth = 1;
ctx.strokeStyle = "#999";
ctx.fillStyle = "#ccc";
ctx.font = "14px monospace";

var grd = ctx.createLinearGradient(0, 0, 0, cy);
grd.addColorStop(0, "hsla(167,72%,60%,1)");
grd.addColorStop(1, "hsla(167,72%,60%,0)");

var oData = {<? echo $_dataBodyJS; ?>};

var valuesRy = [];
var propsRy = [];
for (var prop in oData) {

  valuesRy.push(oData[prop]);
  propsRy.push(prop);
}


var vData = 4;
var hData = valuesRy.length;
var offset = 50.5; //offset chart axis
var chartHeight = ch - 2 * offset;
var chartWidth = cw - 2 * offset;
var t = 1 / 7; // curvature : 0 = no curvature 
var speed = 2; // for the animation

var A = {
  x: offset,
  y: offset
}
var B = {
  x: offset,
  y: offset + chartHeight
}
var C = {
  x: offset + chartWidth,
  y: offset + chartHeight
}

/*
      A  ^
	    |  |  
	    + 25
	    |
	    |
	    |
	    + 25  
      |__|_________________________________  C
      B
*/

// CHART AXIS -------------------------
ctx.beginPath();
ctx.moveTo(A.x, A.y);
ctx.lineTo(B.x, B.y);
ctx.lineTo(C.x, C.y);
ctx.stroke();

// vertical ( A - B )
var aStep = (chartHeight - 50) / (vData);

var Max = Math.ceil(arrayMax(valuesRy) / 10) * 10;
var Min = Math.floor(arrayMin(valuesRy) / 10) * 10;
var aStepValue = (Max - Min) / (vData);
console.log("aStepValue: " + aStepValue); //8 units
var verticalUnit = aStep / aStepValue;

var a = [];
ctx.textAlign = "right";
ctx.textBaseline = "middle";
for (var i = 0; i <= vData; i++) {

  if (i == 0) {
    a[i] = {
      x: A.x,
      y: A.y + 25,
      val: Max
    }
  } else {
    a[i] = {}
    a[i].x = a[i - 1].x;
    a[i].y = a[i - 1].y + aStep;
    a[i].val = a[i - 1].val - aStepValue;
  }
  drawCoords(a[i], 3, 0);
}

//horizontal ( B - C )
var b = [];
ctx.textAlign = "center";
ctx.textBaseline = "hanging";
var bStep = chartWidth / (hData + 1);

for (var i = 0; i < hData; i++) {
  if (i == 0) {
    b[i] = {
      x: B.x + bStep,
      y: B.y,
      val: propsRy[0]
    };
  } else {
    b[i] = {}
    b[i].x = b[i - 1].x + bStep;
    b[i].y = b[i - 1].y;
    b[i].val = propsRy[i]
  }
  drawCoords(b[i], 0, 3)
}

function drawCoords(o, offX, offY) {
  ctx.beginPath();
  ctx.moveTo(o.x - offX, o.y - offY);
  ctx.lineTo(o.x + offX, o.y + offY);
  ctx.stroke();

  ctx.fillText(o.val, o.x - 2 * offX, o.y + 2 * offY);
}
//----------------------------------------------------------

// DATA
var oDots = [];
var oFlat = [];
var i = 0;

for (var prop in oData) {
  oDots[i] = {}
  oFlat[i] = {}

  oDots[i].x = b[i].x;
  oFlat[i].x = b[i].x;

  oDots[i].y = b[i].y - oData[prop] * verticalUnit - 25;
  oFlat[i].y = b[i].y - 25;

  oDots[i].val = oData[b[i].val];
  
  i++
}



///// Animation Chart ///////////////////////////
//var speed = 3;
function animateChart() {
  requestId = window.requestAnimationFrame(animateChart);
  frames += speed; //console.log(frames)
  ctx.clearRect(60, 0, cw, ch - 60);
  
  for (var i = 0; i < oFlat.length; i++) {
    if (oFlat[i].y > oDots[i].y) {
      oFlat[i].y -= speed;
    }
  }
  drawCurve(oFlat);
  for (var i = 0; i < oFlat.length; i++) {
      ctx.fillText(oDots[i].val, oFlat[i].x, oFlat[i].y - 25);
      ctx.beginPath();
      ctx.arc(oFlat[i].x, oFlat[i].y, 3, 0, 2 * Math.PI);
      ctx.fill();
    }

  if (frames >= Max * verticalUnit) {
    window.cancelAnimationFrame(requestId);
    
  }
}
requestId = window.requestAnimationFrame(animateChart);

/////// EVENTS //////////////////////
c.addEventListener("mousemove", function(e) {
  label.innerHTML = "";
  label.style.display = "none";
  this.style.cursor = "default";

  var m = oMousePos(this, e);
  for (var i = 0; i < oDots.length; i++) {

    output(m, i);
  }

}, false);

function output(m, i) {
  ctx.beginPath();
  ctx.arc(oDots[i].x, oDots[i].y, 20, 0, 2 * Math.PI);
  if (ctx.isPointInPath(m.x, m.y)) {
    //console.log(i);
    label.style.display = "block";
    label.style.top = (m.y + 10) + "px";
    label.style.left = (m.x + 10) + "px";
    label.innerHTML = "<strong>" + propsRy[i] + "</strong>: " + valuesRy[i] + "%";
    c.style.cursor = "pointer";
  }
}

// CURVATURE
function controlPoints(p) {
  // given the points array p calculate the control points
  var pc = [];
  for (var i = 1; i < p.length - 1; i++) {
    var dx = p[i - 1].x - p[i + 1].x; // difference x
    var dy = p[i - 1].y - p[i + 1].y; // difference y
    // the first control point
    var x1 = p[i].x - dx * t;
    var y1 = p[i].y - dy * t;
    var o1 = {
      x: x1,
      y: y1
    };

    // the second control point
    var x2 = p[i].x + dx * t;
    var y2 = p[i].y + dy * t;
    var o2 = {
      x: x2,
      y: y2
    };

    // building the control points array
    pc[i] = [];
    pc[i].push(o1);
    pc[i].push(o2);
  }
  return pc;
}

function drawCurve(p) {

  var pc = controlPoints(p); // the control points array

  ctx.beginPath();
  //ctx.moveTo(p[0].x, B.y- 25);
  ctx.lineTo(p[0].x, p[0].y);
  // the first & the last curve are quadratic Bezier
  // because I'm using push(), pc[i][1] comes before pc[i][0]
  ctx.quadraticCurveTo(pc[1][1].x, pc[1][1].y, p[1].x, p[1].y);

  if (p.length > 2) {
    // central curves are cubic Bezier
    for (var i = 1; i < p.length - 2; i++) {
      ctx.bezierCurveTo(pc[i][0].x, pc[i][0].y, pc[i + 1][1].x, pc[i + 1][1].y, p[i + 1].x, p[i + 1].y);
    }
    // the first & the last curve are quadratic Bezier
    var n = p.length - 1;
    ctx.quadraticCurveTo(pc[n - 1][0].x, pc[n - 1][0].y, p[n].x, p[n].y);
  }

  //ctx.lineTo(p[p.length-1].x, B.y- 25);
  ctx.stroke();
  ctx.save();
  ctx.fillStyle = grd;
  ctx.fill();
  ctx.restore();
}

function arrayMax(array) {
  return Math.max.apply(Math, array);
};

function arrayMin(array) {
  return Math.min.apply(Math, array);
};

function oMousePos(canvas, evt) {
  var ClientRect = canvas.getBoundingClientRect();
  return { //objeto
    x: Math.round(evt.clientX - ClientRect.left),
    y: Math.round(evt.clientY - ClientRect.top)
  }
}
			</script>
			<div class="col-md-6" style="padding:2.5%;colorx:#fff;">
				<h3 style="margin:0% 0% 0% 0%;"><? echo $_RSS_TITLE; ?></h3><br />
				<h5 style="margin:0% 0% 0% 0%;font-weight:normal;"><? echo "Updated ".$_RSS_LAST_UBILD_DATE; ?></h5><br />
				<p style="font-weight:normal;colorx:#dedede;font-style:normal;text-align:justify;">
					Information on service availability and performance in line with our Service Level Agreement (SLA).
					<br /><br />
					This are some of the tools that help our customers and all their stakeholders evaluate and assess the suitability of our SaaS and PaaS offering, we provide our platform status report in the form of <strong>Average Webhook Delay Time</strong> and <strong>Average API Response Time</strong>.
					<br /><br />
				</p>
				<p class="hero-action">
				    <a class="btn btn-dark btn-md btn-action" href="<? echo WWWROOT; ?>?p=legal-trust-platform-health-status-history">View History</a>
				    <a class="btn btn-dark btn-md btn-action" target="_blank" href="<? echo WWWROOT; ?>rss/outage-events-feed.rss"><span class="fas fa-rss-square" style="color:#ff7700;"></span>&nbsp;RSS Feed</a>
				</p>
			</div>
		
	      
		</div><!-- End of container -->
	</div>	
</div>
<div class="" style='background: #fff;'>
	<div class="container">
		<style>
			.how-it-works{color:#fff;font-style:normal;font-weight:700;text-align:center;}
			.color_style_link2{background-color:#877924;}.color_style_link2:hover{background-color:#282a35;text-decoration:none;color:#eee;}
		</style>
		<div class="row" style="padding:2% 0% 0% 0%;">
		      
			<div class="col-md-6" style="padding:5% 0% 0% 0%;">
				<table id="data" style='width:100%;margin:0%;'>
					<tfoot>
					    <tr>
						<? echo $_dataHeader; ?>
					    </tr>
					</tfoot>
					<tbody>
					    <tr><? echo $_dataBody; ?></tr>
					</tbody>
				</table>
				<div id="holder" style="background-color:#fff;margin:0%;width:100%;"></div>
			</div>
			<script>
				
			</script>
			<div class="col-md-6" style="padding:2.5%;colorx:#fff;">
				<h3 style="margin:0% 0% 0% 0%;"><? echo $_RSS_TITLE; ?></h3><br />
				<h5 style="margin:0% 0% 0% 0%;font-weight:normal;"><? echo "Updated ".$_RSS_LAST_UBILD_DATE; ?></h5><br />
				<p style="font-weight:normal;colorx:#dedede;font-style:normal;text-align:justify;">
					Information on service availability and performance in line with our Service Level Agreement (SLA).
					<br /><br />
					This are some of the tools that help our customers and all their stakeholders evaluate and assess the suitability of our SaaS and PaaS offering, we provide our platform status report in the form of <strong>Average Webhook Delay Time</strong> and <strong>Average API Response Time</strong>.
					<br /><br />
				</p>
				<p class="hero-action">
				    <a class="btn btn-dark btn-md btn-action" href="<? echo WWWROOT; ?>?p=legal-trust-platform-health-status-history">View History</a>
				    <a class="btn btn-dark btn-md btn-action" target="_blank" href="<? echo WWWROOT; ?>rss/outage-events-feed.rss"><span class="fas fa-rss-square" style="color:#ff7700;"></span>&nbsp;RSS Feed</a>
				</p>
			</div>
		
	      
		</div><!-- End of container -->
	</div>	
</div>
<div class="" style='padding-bottom:0%;padding-top:0%;padding-bottom:1%;background-color:#f9f9f9;'>
	<div class="container">
		<div class="row" style='width:100%;padding:5% 0% 0% 0%;margin:0%;'>
			<div class="col-md-9" style="width:100%;padding:0%;text-align:left;">
				<h4 style="margin-top:0%;padding-bottom:1%;color:#282935;font-weight:normal;">iMbobo App Service Level Agreement (SLA)</h4>
				<p>iMbobo App Service Level Agreement ("SLA") is a policy that governs the use of iMbobo App and its APIs and applies separately to each account using API Gateway. In the event of a conflict between the terms of this SLA and the terms of the User Agreement or other agreement with us governing your use of our Services (the "Agreement"), the terms and conditions of this SLA apply, but only to the extent of such conflict. Capitalized terms used herein but not defined herein shall have the meanings set forth in the Agreement.</p>
				<p><u>Included Services:</u></p>
				<ul>
					<li>SaaS - Software as a Service</li>
					<li>PaaS - Platform as a Service</li>
					<li>IaaS - Infrastructure as a Service</li>
				</ul>
				<h6 style="margin-top:0%;padding-bottom:1%;font-size:100%;color:#282935;">Service Commitment</h6>
				<p>iMbobo App NPC will use reasonable efforts to make both its service and APIs available with a Monthly Uptime Percentage of at least 99.95% for each Spider Black Online region, in the event of or during any monthly billing cycle (the "Service Commitment"). In the event that a API Gateway does not meet the Service Commitment, you will be eligible to receive a Service Credit as described below.</p>
				<h6 style="margin-top:0%;padding-bottom:1%;font-size:100%;color:#282935;">Service Credits</h6>
				<p>Our Service Credits are calculated as a percentage of the total charges paid by you for API Gateway in the affected Spider Black Online region for the monthly billing cycle in which the Monthly Uptime Percentage fell within the ranges set forth in the table below:</p>
				<table class="table btn-secondary">
					<tr>
						<th style="text-align:left;">Monthly Uptime Percentage</th>
						<th style="text-align:center;">Service Credit Percentage (%)</th>
					</tr>
					<tr>
						<td>Less than 99.95% but greater than or equal to 99.0%</td>
						<td style="text-align:center;">5%</td>
					</tr>
					<tr>
						<td>Less than 99.0% but greater than or equal to 95.0%</td>
						<td style="text-align:center;">10%</td>
					</tr>
					<tr>
						<td>Less than 95.0%</td>
						<td style="text-align:center;">15%</td>
					</tr>
				</table>
				<p>We will apply any Service Credits only against future payments for the applicable Included Service otherwise due from you or your organization. At our discretion, we may issue the Service Credit to the credit card you may have used to pay for the billing cycle in which the Unavailability occurred.</p>
				<p>Service Credits will not entitle you to any refund or other payment from iMbobo App NPC. A Service Credit will be applicable and issued only if the credit amount for the applicable monthly billing cycle is greater than one dollar ($1 USD) for individuals and ten dollars ($10 USD) for corporations and organisations. Service Credits may not be transferred or applied to any other account.</p>
				<h6 style="margin-top:0%;padding-bottom:1%;font-size:100%;color:#282935;">Credit Request and Payment Procedures</h6>
				<p>To receive a Service Credit, you must submit a claim by opening a case in the iMbobo App NPC Support Center. To be eligible, the credit request must be received by us by the end of the second billing cycle after which the incident occurred and must include:</p>
				<ol>
					<li>the words "SLA Credit Request" in the subject line;</li>
					<li>the dates, times, and affected Spider Black Online region of each Unavailability incident that you are claiming;</li>
					<li>the resource IDs for the affected Included Service ; and</li>
					<li>your request logs that document the errors and corroborate your claimed outage (any confidential or sensitive information in these logs should be removed or replaced with asterisks).</li>
				</ol>
				<p>If the Monthly Uptime Percentage of such request is confirmed by us and is less than the Service Commitment, then we will issue the Service Credit to you within one billing cycle following the month in which your request is confirmed by us.</p>
				<p>Your failure to provide the request and other information as required above will disqualify you from receiving a Service Credit. Unless otherwise provided in the Agreement, this SLA sets forth your sole and exclusive remedies, and iMbobo App NPC's sole and exclusive obligations, for any unavailability, non-performance, or other failure by us to provide the Included Services.</p>
			</div>
		</div>
	</div>	
</div>