<?
	
	if(isset($_POST['submit']))
	{
		
		//print_r($_POST);
		
	}
?>
<style>	 
	.col-md-3{height:480px;}.img-thumbnail{height:100%;}
	@media (max-width:992px)
	{
		.col-md-3{height:100%;}.img-thumbnail{}
	}
</style>
<div class="" style='padding-bottom:0%;padding-top:0%;padding-bottom:1%;'>
	<div class="container">
		
		<div class="row" style='width:100%;padding:0% 0% 1.5% 0%;margin:0%;'>
			<div class="page-header" style="width:100%;padding:0%;text-align:center;">
				<h1 style="margin-top:4%;">How is my driving?</h1>
				<h2 style='font-size:200%;margin-top:0.5%;color:#c00;'>( Report Bad Driving )</h2>
				<p>Minimize occurrence of <strong style="color:#000;">road traffic offences</strong> on the road.</p>
			</div>
		</div>
	</div>
	
</div>
<div class="" style='background-color:#fbf5b3;padding-bottom:4%;padding-top:0%;'>
	<div class="container">
		
		<div class="row" style='background:transparent;padding:0%;text-align:center;'>
		
			<div class="col-md-12">
				<h3 style="padding-bottom:0%;clear:both;"><span style='color:#c00;'>Free</span><br />Rehabilitation Program Documents</h3>
				<p>Are you ready for driver rehabilitation? Download our driver counseling form below.</p>
				<a target='_blank' href="<? echo WWWROOT; ?>documents/driver_rehabilitation_programs/imbobo-app-npo-trail-making-test.pdf"><center><img class="rounded" style="margin:0% 5% 3% 5%;width:25%;" src="<? echo WWWROOT; ?>images/data/trail-test.jpg" alt="Trail-making Test" /></center></a>
				
			</div>
			<div class="col-md-12">
				<a target='_blank' href="<? echo WWWROOT; ?>documents/driver_rehabilitation_programs/imbobo-app-npo-trail-making-test.pdf" class="sc_button sc_button_default sc_button_size_normal sc_button_icon_left color_style_link2">
					<span class="sc_button_text">
						<span class="sc_button_title">Trail-making Test Form</span>
					</span>
				</a>
			</div>
		</div>
		
	</div>
</div>
<style>	 
	@media (max-width:767px){.contact-clean {padding: 20px 0;}}
	.contact-clean form{width: 90%;margin: 0 auto;background-color: #ffffff;padding: 40px;border-radius: 4px;color: #505e6c;box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);}
	@media (max-width:767px){.contact-clean form {padding: 30px;}}
	.contact-clean h2 {margin-top: 5px;font-weight: bold;font-size: 28px;margin-bottom:36px;color:inherit;}
	.contact-clean .form-group:last-child {margin-bottom: 5px;}
	.contact-clean form .form-control {background: #fff;border-radius: 2px;box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.05);outline: none;color: inherit;padding-left: 12px;height: 42px;}
	.contact-clean form .form-control:focus {border: 1px solid #b2b2b2;}
	.contact-clean form textarea.form-control {min-height: 100px;max-height: 260px;padding-top: 10px;resize: vertical;resize: none;}
	.contact-clean form .btn {padding: 16px 32px;border: none;background: none;box-shadow: none;text-shadow: none;opacity: 0.9;text-transform: uppercase;font-weight: bold;font-size: 13px;letter-spacing: 0.4px;line-height: 1;outline: none !important;}
	.contact-clean form .btn:hover {opacity: 0.8;}
	.contact-clean form .btn:active {transform: translateY(1px);}
	.contact-clean form .btn-primary {background-color: #000000;margin-top: 15px;color: #fff;}
	
	select:not(.esg-sorting-select):not([class*="trx_addons_attrib_"]){visibility:visible;}
</style>
<!--<script src="https://www.google.com/recaptcha/api.js?render=6Lc-3twcAAAAAEfD1f0-1BxIVMgXc60ZgpVmfdq9"></script>
<script>
      function onClick(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
          grecaptcha.execute('6Lc-3twcAAAAAEfD1f0-1BxIVMgXc60ZgpVmfdq9', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.
          });
        });
      }
</script>-->
<div class="" style='background-color:#282935;padding-top:0%;padding-bottom:5%;'>
	<div class="container">
		
		<div class="row" style='width:100%;padding:0% 0% 3% 0%;margin:0%;color:#f0f0f0;'>
			<div class="page-header" style="width:100%;padding:0%;text-align:center;">
				<h2 style="margin-top:4%;">Encouraging safe and courteous road user behaviour</h2>
				<p>Help minimize occurrence of road traffic offences on the road and street system.</p>
			</div>
		</div>
		<div class="row" style='width:100%;padding:0% 0% 0% 0%;margin:0%;color:#f0f0f0;'>
			<div class="col-md-2">
				
			</div>
			<div class="col-md-8">
				<div class="contact-clean">
					<form id="contact-form" method="POST" action="<? echo WWWROOT; ?>?p=membership" class="" >
						<h2 class="text-center">Bad Driving Report Form</h2>
						<div class="form-group">
							<div class="alert alert-danger" style="">Please, do not forget to specify <strong>Fleet No., Nature of Complaint,</strong> and <strong>Cellphone</strong> or and Email.</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-text"><i class="fa fa-user" style="color:#555;"></i></span>
								<input class="form-control" type="text" name="280" placeholder="Fleet No." required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<label for="sel1"><span class="input-group-text" style="height:112%;">Nature of Complaint</span></label>
								<select class="form-control classic" name="279" id="sel1" style="" required>
									<option value="">Please Select..</option>
									<option value="379">Poor driving</option>
									<option value="380">Lights not working</option>
									<option value="381">Ignored red traffic signal</option>
									<option value="382">Overtook across barrier line</option>
									<option value="383">Turn from wrong lane</option>
									<option value="386">Other</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<label for="sel1"><span class="input-group-text" style="height:112%;">Severity</span></label>
								<select class="form-control classic" name="281" id="sel1" style="">
									<option value="">Please Select..</option>
									<option value="384">Accident</option>
									<option value="385">Other</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-text"><i class="fa fa-user" style="color:#555;"></i></span>
								<input class="form-control" type="text" name="283" placeholder="Reporter Name" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-text"><i class="fa fa-phone-alt" style="color:#555;"></i></span>
								<input class="form-control" type="tel" name="282" placeholder="Cell/Tel" required>
								<span class="input-group-text" style="color:#555;"><strong>@</strong></span>
								<input class="form-control" type="email" name="284" placeholder="Email">
							</div>
						</div>
						<div class="form-group"><textarea class="form-control" name="287" placeholder="Comments" rows="14"></textarea></div>
						<div class="form-group"><button id="btn-submit"  data-toggle="tooltip" title="Popover Header" data-placement="right" class="btn btn-primary g-recaptcha" data-sitekey="6Lc-3twcAAAAAEfD1f0-1BxIVMgXc60ZgpVmfdq9" data-callback='onSubmit' data-action='submit' name="submit" type="submit">submit</button></div>
					</form>
				</div>
			</div>
		</div>
	</div>	
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" style="margin-top:0%;">Notice:</h6>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script>
	
	var OVH_CERTIFICATE = "TVRzN05UTTdPelUz";
	
	$("#contact-form").submit(function( event )
	{
		var datastring = $("#contact-form").serialize();
		
		if(datastring != "")
		{
			datastring = "_c="+encodeURI(OVH_CERTIFICATE)+"&_d="+encodeURI(btoa(datastring));
			
			$("#btn-submit").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>&nbsp;&nbsp;Loading...');
			$.ajax(
			{
				type: "POST",
				url: "<? echo WWWROOT; ?>ajax/webforms.php",
				data: datastring,
				success: function(data)
				{
					data = JSON.parse(data);
					
					if(data.status == 1)
					{
						$(".modal-title").html("Success:");$(".modal-body").html('<div class="alert alert-success">'+data.description+'</div>');$("#myModal").modal();$("#btn-submit").html('submit');
						$('#contact-form')[0].reset();setTimeout(function(){$('html, body').animate({scrollTop:100},4000);},5000);
					}
					else
					{
						$(".modal-title").html("Error:");$(".modal-body").html('<div class="alert alert-danger">'+data.description+'</div>');$("#myModal").modal();$("#btn-submit").html('submit');
					}
				},
				error: function(jqXHR, textStatus, errorThrown)
				{
					$(".modal-title").html("Error:");$(".modal-body").html('<div class="alert alert-danger">Failed to load API.</div>');$("#myModal").modal();$("#btn-submit").html('submit');
				}
			});
			
			event.preventDefault();
		}
		else
		{
			$(".modal-title").html("Error:");$(".modal-body").html('<div class="alert alert-danger">No form data available.</div>');$("#myModal").modal();$("#btn-submit").html('submit');
			event.preventDefault();
		}
	});
	
</script>