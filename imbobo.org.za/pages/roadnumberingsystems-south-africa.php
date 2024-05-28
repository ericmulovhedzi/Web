<style>	 
	
</style>
<div class="" style='padding-bottom:0%;padding-top:0%;padding-bottom:1%;'>
	<div class="container">
		
		<div class="row" style='background:transparent;padding:5% 0% 5% 0%;'><!-- Beggining of container -->
			<div class="col-md-8" style="padding:0% 1.5% 1.5% 0%;">
				<h3 style='color:#333;margin:0% 0% 2.5% 0%;font-weight:normal;'>Roads Classification in South Africa</h3>
			</div>
			<div class="col-md-4" style="padding:0% 1.5% 1.5% 0%;text-align:right;">
				<div class="btn-group">
					<a href="<? echo WWWROOT; ?>?p=roadnumberingsystems"><button type="button" class="btn btn-light">Countries</button></a>
					<button type="button" class="btn btn-secondary">South Africa</button>
				</div>
			</div>
			<div class="col-md-2" style="padding:0% 1.5% 0% 0%;text-align:center;">
				<img class="img-thumbnail" style='width:65%;' src="<? echo WWWROOT; ?>images/roadsigns/576px-SA_road_N1.svg.png" />
			</div>
			<div class="col-md-2" style="padding:0% 1.5% 0% 0%;text-align:center;">
				<img class="img-thumbnail" style='width:65%;' src="<? echo WWWROOT; ?>images/roadsigns/560px-SA_road_R512.svg.png" />
			</div>
			<div class="col-md-2" style="padding:0% 1.5% 0% 0%;text-align:center;">
				<img class="img-thumbnail" style='width:65%;' src="<? echo WWWROOT; ?>images/roadsigns/480px-SA_road_R35.svg.png" />
			</div>
			<div class="col-md-2" style="padding:0% 1.5% 0% 0%;text-align:center;">
				<img class="img-thumbnail" style='width:65%;' src="<? echo WWWROOT; ?>images/roadsigns/560px-SA_road_R114.svg.png" />
			</div>
			<div class="col-md-2" style="padding:0% 1.5% 0% 0%;text-align:center;">
				<img class="img-thumbnail" style='width:45%;' src="<? echo WWWROOT; ?>images/roadsigns/342px-Joburg_road_M2.svg.png" />
			</div>
			<div class="col-md-2" style="padding:0% 1.5% 0% 0%;text-align:center;">
				<img class="img-thumbnail" style='width:45%;' src="<? echo WWWROOT; ?>images/roadsigns/SA_road_M10.svg" />
			</div>
			<div class="col-md-12" style="padding:0% 1.5% 0% 0%;">
				<p style='color:#333;margin:0% 0% 4% 0%;'></p>
				
				<table style='width:100%;margin:0%;font-size:95%;line-height:120%;' class="table">
					<thead class="thead-light table-dark" scope="col">
						<tr>
						       <td>Road Class</td><td>Syntax Explanation</td><td>Administrative Subordination</td><td>Sub Classes</td><td>Zones</td><td>System</td><td>Remarks</td>
						</tr>
					</thead>
					<tbody>
						<tr><td>National Route</td><td><code>N[0-9]<1-2></code></td><td>National</td><td></td><td></td><td>Sequential</td><td>Exit numbers by km</td></tr>
						<tr><td>Major Provincial/ Regional Route</td><td><code>R[0-9]<2></code></td><td>National</td><td></td><td></td><td></td><td><code>>20</code></td></tr>
						<tr><td>Minor Provincial Route</td><td><code>R[0-9]<3></code></td><td>National</td><td></td><td>3 Southwest</td><td colspan="2"></td></tr>
						<tr><td colspan="4"></td><td>5 North</td><td colspan="2"></td></tr>
						<tr><td colspan="4"></td><td>6 East</td><td colspan="2"></td></tr>
						<tr><td colspan="4"></td><td>7 Centre</td><td colspan="2"></td></tr>
						<tr><td>Secondary Routes</td><td><code>S[0-9]<2-4></code></td><td>Free State/Vrystaat</td><td></td><td></td><td></td><td></td></tr>
						<tr><td>District Routes</td><td><code>D[0-9]<1-3></code></td><td>District</td><td></td><td></td><td></td><td></td></tr>
						<tr><td>Metropolitan Routes</td><td><code>M[0-9]<1-2></code></td><td>Urban Area</td><td></td><td></td><td></td><td></td></tr>
						<tr><td>Other Local Roads</td><td>Various</td><td></td><td></td><td></td><td></td><td></td></tr>
						
					</tbody>
				</table>
				
			</div>
			
			<div class="col-md-12" style="padding:5% 1.5% 0% 0%;">
				<h5 style='color:#333;margin:0% 0% 2.5% 0%;font-weight:normal;text-decoration:underline;'>Region Table</h5>
				<table style='width:100%;margin:0%;font-size:95%;line-height:120%;' class="table">
					<thead class="thead-light table-dark" scope="col">
						<tr><td rowspan="2">City/Area</td><td colspan="2" style="text-align:center;">Municipal Roads</td><td colspan="2" style="text-align:center;">Other Local Roads</td></tr>
						<tr><td style="text-align:center;width:13%;">Syntax</td><td style="text-align:center;">System/Remarks</td><td style="text-align:center;width:13%;">Syntax</td><td style="text-align:center;">System/Remarks</td></tr>
					</thead>
					<tbody>
						<tr><td>Bloemfontein</td><td><code>M[0-9]<2></code></td><td></td><td></td><td></td></tr>
						<tr><td>Cape Town</td><td><code>M[0-9]<1-2></code></td><td>classes: 1-d 2-d</td><td></td><td></td></tr>
						<tr><td>Durban</td><td><code>M[0-9]<1-2></code></td><td>Even north-south, odd east-west (many exceptions)</td><td><code>MR[0-9]<3></code></td><td>Only known numbers MR468, MR559</td></tr>
						<tr><td>East London</td><td><code>M[0-9]<1-2></code></td><td>Odd north-south, even east-west</td><td></td><td></td></tr>
						<tr><td>Pietermaritzburg</td><td><code>M[1-9]0</code></td><td>Main roads through the city</td><td></td><td></td></tr>
						<tr><td>Port Elizabeth</td><td><code>M[0-9]<1-2></code></td><td></td><td></td><td></td></tr>
						<tr><td>Pretoria</td><td><code>M[0-9]<1-2></code></td><td>Odd north-south, even east-west (many exceptions)</td><td></td><td></td></tr>
						<tr><td rowspan="2">Gauteng(Johannesburg)</td><td rowspan="2"><code>M[0-9]<1-2></code></td><td>Odd north-south, even east-west (many exceptions)</td><td><code>P[0-9]<3></code></td><td></td></tr>
						<tr><td>M1 and M2 are the main motorways through the city</td><td><code>MR[0-9]<3></code></td><td></td></tr>
						<tr><td rowspan="2">Kruger National Park</td><td></td><td></td><td><code>H[0-9]<1-2>{-[1-9]}</code></td><td>Main National Park Routes, Suffixes denote sections (H1-1, H1-2 etc.)</td></tr>
						<tr><td></td><td></td><td><code>S[0-9]<1-3></code></td><td>Secondary National Park Routes</td></tr>
						<tr><td>Free State/Vrystaat</td><td></td><td></td><td><code>S[0-9]<2-4></code></td><td>Secondary Roads</td></tr>
					</tbody>
				</table>
				
			</div>
			
			<div class="col-md-12" style="padding:5% 1.5% 0% 0%;">
				<h6 style='color:#333;margin:0% 0% 2.5% 0%;font-weight:normal;'>Official Sites:</h6>
				<ul>
					<li><a target="_blank" href="https://www.transport.gov.za/">Department of Transport</a></li>
					<li><a target="_blank" href="https://www.nra.co.za/">National Roads Agency (SANRAL)</a></li>
					<li><a target="_blank" href="https://www.aarto.co.za/schedule-3/draft-amended-schedule-3/">AARTO - Draft Amended Schedule 3</a></li>
					<li><a target="_blank" href="https://www.transport.gov.za/">Southern African Development Community Road Traffic Signs Manual 2012</a></li>
				</ul>
				
			</div>
			
			<div class="col-md-12" style="padding:0% 1.5% 0% 0%;">
				<h6 style='color:#333;margin:0% 0% 2.5% 0%;font-weight:normal;'>Other Links:</h6>
				<ul>
					<li><a target="_blank" href="https://en.wikipedia.org/wiki/National_routes_(South_Africa)">National roads Wikipedia</a></li>
					<li><a target="_blank" href="https://en.wikipedia.org/wiki/Trans-African_Highway_network">Trans-African Highway network Wikipedia</a></li>
					<li><a target="_blank" href="https://en.wikipedia.org/wiki/Numbered_routes_in_South_Africa">Numbered Routes Wikipedia</a></li>
				</ul>
				
			</div>
			
			<div class="col-md-12" style="padding:0% 1.5% 1.5% 0%;text-align:right;">
				<div class="btn-group">
					<a href="<? echo WWWROOT; ?>?p=roadnumberingsystems"><button type="button" class="btn btn-light">Countries</button></a>
					<button type="button" class="btn btn-secondary">South Africa</button>
				</div>
			</div>
		</div><!-- End of container -->
	</div>	
</div>