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
				<h1 style="margin-top:4%;">Enrollment</h1>
				<h2 style='font-size:200%;margin-top:0.5%;color:#c00;'>( free )</h2>
				<p>Get yourself, atleast, a <strong style="color:#000;">Certificate of Completion</strong>.</p>
			</div>
		</div>
		<div class="row" style='background:transparent;padding:0% 0% 5% 0%;'>
			<div class="col-md-3">
				<div class="img-thumbnail">
					<img src="<? echo WWWROOT; ?>images/data/leadership-woman.png" class="rounded" style="float:left;margin-left:0%;width:100%;margin-bottom:10%;" />
					<div class="caption" style=";margin:0% 5% 0% 5%;text-align:left;">
						<h6 style='margin:7.5% 0% 10% 0%;text-align:center;font-size:120%;'>Leadership & Management</h6>
						<p style='font-size:100%;text-align:left;'>
							<li>Vision, Mission</li>
							<li>Mandate & Values</li>
							<li>Goals vs Objectives</li>
							<li>Strategy</li>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="img-thumbnail">
					<img src="<? echo WWWROOT; ?>images/data/pcv-files-1.png" class="rounded" style="float:left;margin-left:0%;width:100%;margin-bottom:10%;" />
					<div class="caption" style=";margin:0% 5% 0% 5%;text-align:left;">
						<h6 style='margin:7.5% 0% 10% 0%;text-align:center;font-size:120%;'>Records Management</h6>
						<p style='font-size:100%;text-align:left;'>
							<li>Transparency</li>
							<li>Accountability</li>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="img-thumbnail">
					<img src="<? echo WWWROOT; ?>images/data/environmental.png" class="rounded" style="float:left;margin-left:0%;width:100%;margin-bottom:10%;" />
					<div class="caption" style=";margin:0% 5% 0% 5%;text-align:left;">
						<h6 style='margin:7.5% 0% 10% 0%;text-align:center;font-size:120%;'>Environmental Management</h6>
						<p style='font-size:100%;text-align:left;'>
							<li>Introduction to ISO 14001</li>
							<li>Environmental Aspects</li>
							<li>Environmental Impact</li>
							<li>OVH Standard EMS</li>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="img-thumbnail">
					<img src="<? echo WWWROOT; ?>images/data/leadership-woman.png" class="rounded" style="float:left;margin-left:0%;width:100%;margin-bottom:10%;" />
					<div class="caption" style=";margin:0% 5% 0% 5%;text-align:left;">
						<h6 style='margin:7.5% 0% 10% 0%;text-align:center;font-size:120%;'>Financial Literacy</h6>
						<p style='font-size:100%;text-align:left;'>
							<li>Accounting Introduction</li>
							<li>MFMA & PFMA</li>
							<li>Ward Budget Allocation</li>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="img-thumbnail">
					<img src="<? echo WWWROOT; ?>images/data/leadership-woman.png" class="rounded" style="float:left;margin-left:0%;width:100%;margin-bottom:10%;" />
					<div class="caption" style=";margin:0% 5% 0% 5%;text-align:left;">
						<h6 style='margin:7.5% 0% 10% 0%;text-align:center;font-size:120%;'>Computer Literacy</h6>
						<p style='font-size:100%;text-align:left;'>
							<li>Accounting Introduction</li>
							<li>MFMA & PFMA</li>
							<li>Ward Budget Allocation</li>
						</p>
					</div>
				</div>
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
				<h2 style="margin-top:4%;">Transform your Ward and Municipality through education</h2>
				<p>See why leading municipalities and political parties choose iMbobo Cllr. SoG as their destination for ward councillor learning.</p>
			</div>
		</div>
		<div class="row" style='width:100%;padding:0% 0% 0% 0%;margin:0%;color:#f0f0f0;'>
			<div class="col-md-2">
				
			</div>
			<div class="col-md-8">
				<div class="contact-clean">
					<form id="contact-form" method="POST" action="<? echo WWWROOT; ?>?p=membership" class="" >
						<h2 class="text-center"><strong style="color:#c00;">S</strong>chool <strong style="color:#c00;">o</strong>f <strong style="color:#c00;">G</strong>overnance (SoG) Erollment Form</h2>
						<div class="form-group">
							<div class="alert alert-success" style="">Joining Fee: <strong>R0.00</strong></div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-text"><i class="fa fa-user" style="color:#555;"></i></span>
								<input class="form-control" type="text" name="127" placeholder="Councillor Name" required>
								<span class="input-group-text"><i class="fa fa-user" style="color:#555;"></i></span>
								<input class="form-control" type="text" name="128" placeholder="Surname" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<label for="sel1"><span class="input-group-text" style="height:112%;">Title</span></label>
								<select class="form-control classic" name="129" id="sel1" style="">
									<option value="">Please Select..</option>
									<option value="5">Ms</option>
									<option value="4">Mrs</option>
									<option value="3">Mr</option>
									<option value="6">Dr</option>
									<option value="7">Prof</option>
									<option value="8">Rev</option>
									<option value="9">Other</option>
								</select>
							</div>
						</div>
						<div class="form-group"><div class="input-group"><span class="input-group-text"><i class="fa fa-venus-mars" style="color:#555;"></i></span>&nbsp;&nbsp;<label class="checkbox-inline"><input type="checkbox" name="130" value="1"> Female</label>&nbsp;&nbsp;<label class="checkbox-inline"><input type="checkbox" name="130" value="2"> Male</label></div></div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-text"><i class="fa fa-user" style="color:#555;"></i></span>
								<input class="form-control" type="text" name="131" placeholder="ID/Passport" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-text"><i class="fa fa-phone-alt" style="color:#555;"></i></span>
								<input class="form-control" type="tel" name="132" placeholder="Cell/Tel" required>
								<span class="input-group-text" style="color:#555;"><strong>@</strong></span>
								<input class="form-control" type="email" name="133" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<input class="form-control" type="text" name="134" placeholder="Municipality Name" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<input class="form-control" type="text" name="135" placeholder="Ward Number" required>
								<input class="form-control" type="text" name="136" placeholder="Suburb">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<label for="sel1"><span class="input-group-text" style="height:112%;" required>Political Party Affiliation</span></label>
								<select class="form-control" name="137" required id="sel1">
									<option value="">Please Select..</option>
									<option value="1">ANC</option>
									<option value="2">DA</option>
									<option value="3">EFF</option>
									<option value="4">EFP</option>
									<option value="5">VF+</option>
									<option value="6">ACDP</option>
									<option value="7">UDM</option>
									<option value="8">ATM</option>
									<option value="9">GOOD</option>
									<option value="10">NFP</option>
									<option value="11">AIC</option>
									<option value="12">COPE</option>
									<option value="13">PAC</option>
									<option value="14">ALJAMA</option>
									<option value="15">Civic Movement</option>
									<option value="16">Other</option>
								</select>
							</div>
						</div>
						<div class="form-group"><textarea class="form-control" name="138" placeholder="What are your training needs?" rows="14" required></textarea></div>
						<div class="form-group">
							<div class="input-group">
								<label for="sel1"><span class="input-group-text" style="height:112%;">How did you hear about this course?</span></label>
								<select class="form-control" name="139" id="sel1">
									<option value="">Please Select..</option>
									<option value="161">Social Media</option>
									<option value="162">Word of Mouth</option>
									<option value="163">Search Engine</option>
									<option value="164">Radio</option>
									<option value="165">TV</option>
									<option value="166">Newspaper</option>
									<option value="167">Other</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="alert alert-success" style="">
								I, the undersigned, hereby enroll for <strong>Cllr. SoG</strong> skills development program of the <strong>iMbobo App NPC</strong>. I declare that I will, if elected by the members of the Branch, abide by the provisions of the Constitution of the Organization and I will not hold the Organization or the Branch nor any of its members liable for any loss or injury sustained either by me, my family or any of my guests while engaged in activities relating to the Branch. I acknowledge that the organization reserves the right to refuse membership with full disclosure of reasons thereof.
							</div>
						</div>
						<div class="form-group"><div class="checkbox"><label><input name="membership-agreement" required type="checkbox"> I agree</label></div></div>
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
	
	var OVH_CERTIFICATE = "TVRzN09UczdNVFE9";
	
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