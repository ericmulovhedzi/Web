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
	$_dataHeader = $_dataBodyHeader = $_dataBody = "";
	
	$rss_feed = simplexml_load_file(WWWROOT."rss/outage-events-feed.rss");
	
	if(!empty($rss_feed))
	{
		$_RSS_TITLE = $rss_feed->channel->title;
		$_RSS_DESCRIPTION = $rss_feed->channel->description;
		$_RSS_LAST_UBILD_DATE = $rss_feed->channel->lastBuildDate;
		$i=0;
		//$_dataHeader = "<td>---</td>";$_dataBody= "<th scope='row'>---</th>";
		foreach($rss_feed->channel->item as $feed_item)
		{
			if($i>=20) break;
			$_dataHeader.= "<th>".$feed_item->pubDate."</th>";
			$_dataBody.= "<td>".$feed_item->responseTime."</td>";
			
			$_dataBodyDetail.= "<tr><th style='font-weight:normal;text-align:left;font-size:80%;'>".$feed_item->guid."</th><th style='font-weight:normal;text-align:left;font-size:80%;'>".$feed_item->responseTime." ms</th><th style='font-weight:normal;text-align:left;font-size:80%;'>".$feed_item->pubDate."ms</th></tr>";
				
			$i++;	
		}
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
		</style>
		<div class="row" style="padding:5% 0% 0% 0%;">
		      
			<div class="col-md-12" style="padding:0%;colorx:#fff;">
				<h4 style="margin:0% 0% 0% 0%;text-align:center;"><? echo $_RSS_TITLE; ?></h4><br />
				<h6 style="margin:0% 0% 0% 0%;font-weight:normal;text-align:center;"><? echo "Updated ".$_RSS_LAST_UBILD_DATE; ?></h6>
			</div>
		
			<div class="col-md-12" style="padding:2.5% 0% 5% 0%;">
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
		</div><!-- End of container -->
	</div>	
</div>
<div class="" style='padding-bottom:0%;padding-top:0%;padding-bottom:1%;background-color:#f0f0f0;'>
	<div class="container">
		<div class="row" style='width:100%;padding:5% 0% 0% 0%;margin:0%;'>
			<div class="col-md-2"></div>
			<div class="col-md-8" style="width:100%;padding:0% 0% 5% 0%;text-align:left;">
				
				
				<table class="table btn-light">
					<tr>
						<th style="text-align:left;font-size:100%;">Service Status</th>
						<th colspan="2" style="text-align:center;"><a class="btn btn-dark btn-md btn-action" href="<? echo WWWROOT; ?>?p=legal-trust-platform-health-status">Back to Main View</a></th>
					</tr>
					<? echo $_dataBodyDetail; ?>
				</table>
				
				
			</div>
		</div>
	</div>	
</div>