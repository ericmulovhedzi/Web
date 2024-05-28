<style>
	.bg-style{background: url('<? echo WWWROOT; ?>images/bg/fixing-poholes.jpg') no-repeat;height:100vh;background-attachment:fixed;background-position:100% 100%;background-size:cover;}
	#bg-style-app
	{
		background: url('<? echo WWWROOT; ?>images/bg/bg-iphone-imbobo-app.png') no-repeat;height:100vh;background-attachment:fixed;background-position:80% 75%;background-size:no;
		
	}
	.cols-no-3{max-width:32.2%;min-height:auto;max-height:auto;height:auto;margin:0.5%;}
	@media (max-width:992px)
	{
		#bg-style{background-position:74% 100%;}
		#bg-style-app
		{
			
		}
		.cols-no-3{max-width:32.2%;margin:0.5%;}
		
	}
	@media (max-width: 768px){
		.cols-no-3{min-width:90%;margin:5%;height:30%;}
		.cols-no-3 img{max-width:10%;}
		.bg-style{height:100vh;background-position:100% 100%;border:0px solid #f00;}
	}
	
	@keyframes para{100%{background-position:-300px 90%,100px 90%,200px 90%,300px 90%,300px 0;}}
	
	.blink_me{animation: blinker 0s linear infinite;}
	@keyframes blinker{90% {opacity:0;}}
	.blink_me_1x{animation: blinker 30s linear infinite;}
	@keyframes_1x blinker{90% {opacity:0;}}
	.blink_me_2{animation: blinker 3s linear infinite;}
	@keyframes_2 blinker{90% {opacity:0;}}
</style>
</style>
<div class="bg-style" class="" style='padding-bottom:0%;padding-top:0%;padding-bottom:1%;'>
	<div class="container" id="bg-style-app" style="width:100%;">
		
		<div class="row" style='width:100%;padding:13.5% 0% 0% 0%;margin:0%;'>
			<div class="col-md-3 img-thumbnail blink_me" style="padding:2.0% 0% 0% 0%;backgroundx:transparent;border:1px dashed #000;margin-left:0.5%;">
				<center><a class="download_android" ref="<? echo WWWROOT; ?>downloads/apps/iMbobo.apk"><div style="background:#111;color:#fff;width:64px;height:64px;border:6px solid #d12b36;padding:13px 15px 4px 14.0px;font-size:280%;font-weight:bold;" class="rounded-circle">1</div></a></center>
				<a class="download_android" href="<? echo WWWROOT; ?>downloads/apps/iMbobo.apk"><center style="font-size:200%;font-weight:bold;padding:10%;color:#000;">Download</center></a>
				<center style="color:#000;">the iMbobo App on your smartphone or tablet</center>
			</div>
			<div class="col-md-4 img-thumbnail blink_mex_1" style="padding:2.0% 0% 0% 0%;border:1px dashed #000;margin-left:0.5%;">
				<center><a class="download_android" href="<? echo WWWROOT; ?>downloads/apps/iMbobo.apk" style="cursor:pointer;"><div style="cursor:pointer;background:#111;color:#fff;width:64px;height:64px;border:6px solid #d12b36;padding:13px 15px 4px 14px;font-size:280%;font-weight:bold;" class="rounded-circle">2</div></a></center>
				<a class="download_android" href="<? echo WWWROOT; ?>downloads/apps/iMbobo.apk"><center style="cursor:pointer;font-size:200%;font-weight:bold;padding:10% 10% 5% 10%;color:#000;">Install</center></a>
				<center><a class="download_android" class="btn btn-danger btn-sm btn-action" style="font-weight:bold;" href="<? echo WWWROOT; ?>downloads/apps/iMbobo.apk">Click to Install&nbsp;<i class="fa fa-external-link-alt"></i></a></center>
				<center style="padding:3.5% 10% 5% 10%;color:#000;">on the "Click" button to download.</center>
			</div>
			<div class="col-md-3 img-thumbnailx" style="padding:2.0% 0% 0% 0%;">
				<center><a class="download_android" href="<? echo WWWROOT; ?>downloads/apps/iMbobo.apk"><div style="background:#111;color:#fff;width:64px;height:64px;border:6px solid #d12b36;padding:13px 15px 4px 13.5px;font-size:280%;font-weight:bold;" class="rounded-circle blink_me_2">3</div></a></center>
			</div>
		</div>
		<div class="row" style=''>
			<div class="col-md-3">
				
			</div>
			<div class="col-md-6" style="border:0px solid #f00;height:450px;margin:0%;background: url('<? echo WWWROOT; ?>images/generic/data-how-it-all-works-real-time-email.png') no-repeat;background-position:100% 15%;padding:2.0% 0% 0% 0%;">
				
			</div>
		</div>
		
	</div>	
</div>
<script>

  $(".download_android").mousedown(function(){setTimeout(function(){$.ajax({url : "<? echo WWWROOT; ?>ajax/postDownloads.php",data: "item=ANDROID",success: function(data){}});},750);});

</script>