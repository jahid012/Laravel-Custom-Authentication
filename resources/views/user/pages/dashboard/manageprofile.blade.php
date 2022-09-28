@extends('user.master')
@section('content')
<!-- Dashboard Container -->
<div class="dashboard-container">

	@include('user.pages.dashboard.partials.sidebar')


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Settings</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Manage Profile</li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">
				<!-- Dashboard Box -->
				<div class="accordion js-accordion">
				<div class="col-xl-12">
					
					<div class="dashboard-box margin-top-0 accordion__item js-accordion-item active">
						<!-- Headline -->
						<div class="headline accordion-header js-accordion-header">
							<h3><i class="icon-material-outline-account-circle"></i>Account Info</h3>
						</div>
						<div class="accordion-body js-accordion-body">
							<form action="{{route('user.update-profile')}}" method="post">
						<div class="content with-padding padding-bottom-0 accordion-body__contents">
							<div class="row">
								<div class="col-auto">
									<div class="avatar-wrapper" data-tippy-placement="bottom" title="Change Avatar">
										<img class="profile-pic" src="images/user-avatar-placeholder.png" alt="" />
										<div class="upload-button"></div>
										<input class="file-upload" type="file" accept="image/*"/>
									</div>
								</div>
								<div class="col">
									<div class="row">

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>First Name</h5>
												<input type="hidden" name="id" value="{{$userInfo->id}}">
												<input type="text" class="with-border" name="first_name" value="{{$userInfo->first_name}}">
											</div>
										</div>

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Last Name</h5>
												<input type="text" class="with-border" name="last_name" value="{{$userInfo->last_name}}">
											</div>
										</div>
										</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-6">
									<div class="submit-field">
										<h5>National Identity Number</h5>
										<input type="text" class="with-border" name="nid_number" value="{{$userInfo->nid_number}}">
									</div>
								</div>
								<div class="col-xl-6">
									<div class="submit-field">
										<h5>City</h5>
										<input type="text" class="with-border" name="city" value="{{$userInfo->city}}">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-4">
									<div class="submit-field">
										<h5>State</h5>
										<input type="text" class="with-border" name="state" value="{{$userInfo->state}}">
									</div>
								</div>
								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Zip</h5>
										<input type="text" class="with-border" name="zip" value="{{$userInfo->zip}}">
									</div>
								</div>
								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Nationality</h5>
										<select class="selectpicker with-border" data-size="7" title="Select Country" name="country">
											@php
											$option_array = [
												"AR"=>"Argentina",
												"AM"=>"Armenia",
												"AW"=>"Aruba",
												"AU"=>"Australia",
												"AT"=>"Austria",
												"AZ"=>"Azerbaijan",
												"BS"=>"Bahamas",
												"BH"=>"Bahrain",
												"BD"=>"Bangladesh",
												"BB"=>"Barbados",
												"BY"=>"Belarus",
												"BE"=>"Belgium",
												"BZ"=>"Belize",
												"BJ"=>"Benin",
												"BM"=>"Bermuda",
												"BT"=>"Bhutan",
												"BG"=>"Bulgaria",
												"BF"=>"Burkina Faso",
												"BI"=>"Burundi",
												"KH"=>"Cambodia",
												"CM"=>"Cameroon",
												"CA"=>"Canada",
												"CV"=>"Cape Verde",
												"KY"=>"Cayman Islands",
												"CO"=>"Colombia",
												"KM"=>"Comoros",
												"CG"=>"Congo",
												"CK"=>"Cook Islands",
												"CR"=>"Costa Rica",
												"CI"=>"Côte d'Ivoire",
												"HR"=>"Croatia",
												"CU"=>"Cuba",
												"CW"=>"Curaçao",
												"CY"=>"Cyprus",
												"CZ"=>"Czech Republic",
												"DK"=>"Denmark",
												"DJ"=>"Djibouti",
												"DM"=>"Dominica",
												"DO"=>"Dominican Republic",
												"EC"=>"Ecuador",
												"EG"=>"Egypt",
												"GP"=>"Guadeloupe",
												"GU"=>"Guam",
												"GT"=>"Guatemala",
												"GG"=>"Guernsey",
												"GN"=>"Guinea",
												"GW"=>"Guinea-Bissau",
												"GY"=>"Guyana",
												"HT"=>"Haiti",
												"HN"=>"Honduras",
												"HK"=>"Hong Kong",
												"HU"=>"Hungary",
												"IS"=>"Iceland",
												"IN"=>"India",
												"ID"=>"Indonesia",
												"NO"=>"Norway",
												"OM"=>"Oman",
												"PK"=>"Pakistan",
												"PW"=>"Palau",
												"PA"=>"Panama",
												"PG"=>"Papua New Guinea",
												"PY"=>"Paraguay",
												"PE"=>"Peru",
												"PH"=>"Philippines",
												"PN"=>"Pitcairn",
												"PL"=>"Poland",
												"PT"=>"Portugal",
												"PR"=>"Puerto Rico",
												"QA"=>"Qatar",
												"RE"=>"Réunion",
												"RO"=>"Romania",
												"RU"=>"Russian Federation",
												"RW"=>"Rwanda",
												"SZ"=>"Swaziland",
												"SE"=>"Sweden",
												"CH"=>"Switzerland",
												"TR"=>"Turkey",
												"TM"=>"Turkmenistan",
												"TV"=>"Tuvalu",
												"UG"=>"Uganda",
												"UA"=>"Ukraine",
												"GB"=>"United Kingdom",
												"US"=>"United States",
												"UY"=>"Uruguay",
												"UZ"=>"Uzbekistan",
												"YE"=>"Yemen",
												"ZM"=>"Zambia",
												"ZW"=>"Zimbabwe",
											];
											foreach ($option_array as $key => $value) {
												if ( $key === $userInfo->country) {
													echo '<option value="'.$key.'" selected>'.$value.'</option>';
													continue;
												}
												echo '<option value="'.$key.'">'.$value.'</option>';
												
											}
											@endphp
										</select>
									</div>
								</div>
							</div>
							<div>
								<button type="submit" class="button ripple-effect small margin-bottom-30">Save Changes</button>
							</div>
						</div>
						@csrf
					</form>
					</div>
					</div>
				</div>

			
				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div id="test1" class="dashboard-box accordion__item js-accordion-item">
						<!-- Headline -->
						<div class="headline accordion-header js-accordion-header">
							<h3><i class="icon-material-outline-add-photo-alternate"></i> Portfolio</h3>
						</div>

						<div class="accordion-body js-accordion-body">
							<form action="{{route('user.update-portfolio')}}" method="post" enctype="multipart/form-data">
						<div class="content with-padding padding-bottom-0 accordion-body__contents">
							<div class="row margin-top-35">
								<div class="col-xl-12">
									<div class="submit-field">
										<h5>Title</h5>
										<input type="text" class="with-border" name="title">
										<input type="hidden" class="with-border" name="portfolio_id" value="{{$userInfo->id}}">
									</div>
								</div>
								<div class="col-xl-12">
									<div class="submit-field">
										<h5>Description</h5>
										<textarea cols="30" rows="5" class="with-border" name="portfolio_desc"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="portfolio-displayer margin-bottom-35" ></div>
							</div>
							<div class="row" style="justify-content: center">
								<div class="col-auto">
										<div class="uploadButton margin-top-0" data-tippy-placement="bottom" title="Max file size: 15 MB">
											<input class="uploadButton-input" type="file" accept="image/*, video/*, application/pdf" id="portfolioupload" name="portfolio_upload[]" multiple/>
											<label class="uploadButton-button ripple-effect" for="portfolioupload">Upload Files</label>
										</div>
									</div>
							</div>
								<div class="row">
									<div class="col-6">
										<button type="submit" class="button ripple-effect small margin-bottom-30">Save Changes</button>
									</div>
									
									@csrf
							</div>
							
						</div>
							</form>
						</div>

					</div>
				</div> 

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box accordion__item js-accordion-item">
						<!-- Headline -->
						<div class="headline accordion-header js-accordion-header">
							<h3><i class="icon-material-outline-business-center"></i> Experience</h3>
						</div>
						<div class="accordion-body js-accordion-body">
							<form action="{{route('user.update-profile')}}" method="post">
					<div class="content padding-bottom-0 accordion-body__contents">
							<ul class="fields-ul">
								<li>
							<div class="row">
								<div class="col-xl-6">
									<div class="submit-field">
										<h5>Title</h5>
										<input type="text" class="with-border" placeholder="Job Title">
									</div>
								</div>
								<div class="col-xl-6">
									<div class="submit-field">
										<h5>Company</h5>
										<input type="text" class="with-border" placeholder="Company Name">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-3">
									<div class="submit-field">
										<h5>Start Month</h5>
										<select class="selectpicker with-border" data-size="7" title="Select Month">
											<option value="January">January</option>
											<option value="February">February</option>
											<option value="March">March</option>
											<option value="April">April</option>
											<option value="May">May</option>
											<option value="June">June</option>
											<option value="July">July</option>
											<option value="August">August</option>
											<option value="September">September</option>
											<option value="October">October</option>
											<option value="November">November</option>
											<option value="December">December</option>
										</select>
									</div>
								</div>
								<div class="col-xl-3">
									<div class="submit-field">
										<h5>Start Year</h5>
										<input type="number" class="with-border" placeholder="2001">
									</div>
								</div>
								<div class="col-xl-3">
									<div class="submit-field">
										<h5>End Month</h5>
										<select class="selectpicker with-border" data-size="7" title="Select Month">
											<option value="January">January</option>
											<option value="February">February</option>
											<option value="March">March</option>
											<option value="April">April</option>
											<option value="May">May</option>
											<option value="June">June</option>
											<option value="July">July</option>
											<option value="August">August</option>
											<option value="September">September</option>
											<option value="October">October</option>
											<option value="November">November</option>
											<option value="December">December</option>
										</select>
									</div>
								</div>
								<div class="col-xl-3">
									<div class="submit-field">
										<h5>End Year</h5>
										<input type="number" class="with-border" placeholder="2022">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-12">
									<div class="submit-field">
										<h5>Description</h5>
										<textarea cols="30" rows="5" class="with-border">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</textarea>
									</div>
								</div>
							</div>
								</li>
							</ul>
						</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box accordion__item js-accordion-item">
						<!-- Headline -->
						<div class="headline accordion-header js-accordion-header">
							<h3><i class="icon-material-outline-school"></i> Education</h3>
						</div>
						<div class="accordion-body js-accordion-body">
							<form action="{{route('user.update-profile')}}" method="post">
					<div class="content padding-bottom-0 accordion-body__contents">
							<ul class="fields-ul">
								<li>
							<div class="row">
								<div class="col-xl-6">
									<div class="submit-field">
										<h5>Country</h5>
										<input type="text" class="with-border" placeholder="Education Country">
									</div>
								</div>
								<div class="col-xl-6">
									<div class="submit-field">
										<h5>University / College</h5>
										<input type="text" class="with-border" placeholder="Institutaion Name">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-12">
									<div class="submit-field">
										<h5>Degree</h5>
										<input type="text" class="with-border" placeholder="Education Country">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-6">
									<div class="submit-field">
										<h5>Start Year</h5>
										<input type="number" class="with-border" placeholder="2016">
									</div>
								</div>
								<div class="col-xl-6">
									<div class="submit-field">
										<h5>End Year</h5>
										<input type="number" class="with-border" placeholder="2022">
									</div>
								</div>
							</div>
								</li>
							</ul>
						</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box accordion__item js-accordion-item">
						<!-- Headline -->
						<div class="headline accordion-header js-accordion-header">
							<h3><i class="icon-material-outline-business-center"></i> Qualification</h3>
						</div>
						<div class="accordion-body js-accordion-body">
							<form action="{{route('user.update-profile')}}" method="post">
					<div class="content padding-bottom-0 accordion-body__contents">
							<ul class="fields-ul">
								<li>
							<div class="row">
								<div class="col-xl-6">
									<div class="submit-field">
										<h5>Professional Certificate</h5>
										<input type="text" class="with-border" placeholder="Certificate Name">
									</div>
								</div>
								<div class="col-xl-6">
									<div class="submit-field">
										<h5>Organization</h5>
										<input type="text" class="with-border" placeholder="Organization Name">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-12">
									<div class="submit-field">
										<h5>Description</h5>
										<textarea cols="30" rows="5" class="with-border">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-3">
									<div class="submit-field">
										<h5>Year</h5>
										<input type="number" class="with-border" placeholder="2001">
									</div>
								</div>

							</div>
								</li>
							</ul>
						</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box accordion__item js-accordion-item">
						<!-- Headline -->
						<div class="headline accordion-header js-accordion-header">
							<h3><i class="help-icon"></i> Primary Information</h3>
						</div>

						<div class="accordion-body js-accordion-body">
							<form action="{{route('user.update-profile')}}" method="post">
					<div class="content padding-bottom-0 accordion-body__contents">
							<ul class="fields-ul">
							<li>
								<div class="row">
									<div class="col-xl-6">
										<div class="submit-field">
											<div class="bidding-widget">
												<span class="bidding-detail">Set your <strong>minimal hourly rate</strong></span>

												<!-- Slider -->
												<div class="bidding-value margin-bottom-10">$<span id="biddingVal"></span></div>
												<input class="bidding-slider" type="text" value="" data-slider-handle="custom" data-slider-currency="$" data-slider-min="5" data-slider-max="150" data-slider-value="35" data-slider-step="1" data-slider-tooltip="hide" />
											</div>
										</div>
									</div>

									<div class="col-xl-6">
										<div class="submit-field">
											<h5>Skills <i class="help-icon" data-tippy-placement="right" title="Add up to 5 skills"></i></h5>

											<!-- Skills List -->
											<div class="keywords-container">
												<div class="keyword-input-container">
													<input type="text" class="keyword-input with-border" placeholder="e.g. Angular, Laravel"/>
													<button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
												</div>
												<div class="keywords-list">
													<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Angular</span></span>
													<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Vue JS</span></span>
													<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">iOS</span></span>
													<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Android</span></span>
													<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Laravel</span></span>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-6">
										<div class="submit-field">
											<h5>Tagline</h5>
											<input type="text" class="with-border" value="iOS Expert + Node Dev">
										</div>
									</div>
									<div class="col-xl-6">
										<div class="submit-field">
											<h5>Role Out Option</h5>
											
										</div>
										<div class="checkbox">
											<input type="checkbox" id="chekcbox2">
											<label for="chekcbox2"><span class="checkbox-icon"></span> Roll out as a Freelancer</label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-12">
										<div class="submit-field">
											<h5>Introduce Yourself</h5>
											<textarea cols="30" rows="5" class="with-border">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</textarea>
										</div>
									</div>
								</div>
							</li>
						</ul>
						</div>
							</form>
						</div>
					</div>
				</div> 
				
				<!-- Button -->
				<div class="col-xl-12">
					<a href="#" class="button ripple-effect big margin-top-30">Save Changes</a>
				</div>
			
			</div>
			</div>
			<!-- Row / End -->

			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© 2019 <strong>Hireo</strong>. All Rights Reserved.
				</div>
				<ul class="footer-social-links">
					<li>
						<a href="#" title="Facebook" data-tippy-placement="top">
							<i class="icon-brand-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Twitter" data-tippy-placement="top">
							<i class="icon-brand-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Google Plus" data-tippy-placement="top">
							<i class="icon-brand-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#" title="LinkedIn" data-tippy-placement="top">
							<i class="icon-brand-linkedin-in"></i>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- Footer / End -->

		</div>
	</div>
	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->
@endsection