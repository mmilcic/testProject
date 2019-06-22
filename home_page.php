<?php 
	include_once('header.html');
?>
<div class="banner">
	<div class="container">
		<div class="banner-text">
			<div class="banner-heading">
				Welcome to online CV creator!
			</div>
			<div class="banner-sub-heading">
				With subscription you will gain unlimited access to all CV designs from our personal library. 
			</div>
			<div class="banner-sub-heading">
				You can proceed to create your CV section, see the pricing, or check our instagram feed.
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 section-header">
			<a name="cvCreationSection" >CV creation section</a>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 steps-header">
			<a name="stepOne">Fill data</a>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8">
			<div class="some-paddings">
				<div class="row">
					<div class="col-sm-12">
						<div class="page-header">
							Basic information
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group form-padding">
							<label>Name: </label>
							<input type="text" class="input-sm form-control formName" placeholder="Add First Name & Last Name" />
						</div>
						<div class="form-group form-padding">
							<label>Contact e-mail: </label>
							<input type="text" class="input-sm form-control formEmail" placeholder="e.g. someone@something.com" />
						</div>
						<div class="form-group">
							<label>Date of birth: </label>
							<input type="text" class="input-sm form-control formDate formPickedDate" placeholder="Add your date of birth" />
						</div>
						<div class="form-group">
							<label>Address: </label>
							<input type="text" class="input-sm form-control formAddress" placeholder="e.g. address & postal code & city" />
						</div>
						<div class="form-group">
							<label>Phone number: </label>
							<input type="text" class="input-sm form-control formNumber" placeholder="e.g. +3811234567" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-2">
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8">
			<div class="some-paddings">
				<div class="row">
					<div class="col-sm-12">
						<div class="page-header">
							Summary
						</div>
						<div class="form-group form-padding">
							<label>Professional summary: </label>
							<textarea class="input-sm form-control formSummary" rows="3" placeholder="Add a summary with your skills and experience."></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="page-header">
							Education
						</div>
						<div class="appendNewEducation">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group form-padding">
										<label>Date: </label>
										<input type="text" class="input-sm form-control formEducationDate" placeholder="e.g. 03/2016 - 05/2016" />
									</div>
									<div class="form-group">
										<label>Institution name: </label>
										<input type="text" class="input-sm form-control formInstitutionName" placeholder="e.g. Faculty of Electronical Enginering at Belgrade" />
									</div>
									<div class="form-group">
										<label>Degree: </label>
										<select class="mdb-select md-form formDegree">
											<option value="" disabled selected>Choose your option</option>
											<option value="High school">High school</option>
											<option value="Bachelor degree">Bachelor degree</option>
											<option value="Master degree">Master degree</option>
											<option value="PhD">PhD</option>
										</select>
									</div>
									<div class="form-group">
										<label>Description: </label>
										<textarea class="input-sm form-control formEducationDescription" rows="3"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<button type="button" class="btn btn-primary appendNew">Add new education</button>
							</div>
							<div class="col-sm-4">
							</div>
							<div class="col-sm-4">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-2">
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8">
			<div class="some-paddings">
				<div class="row">
					<div class="col-sm-12">
						<div class="page-header">
							Work experience
						</div>
						<div class="appendNewCompany">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group form-padding">
										<label>Date: </label>
										<input type="text" class="input-sm form-control formCompanyDate" placeholder="e.g. 03/2016 - 05/2016" />
									</div>
									<div class="form-group">
										<label>Company name: </label>
										<input type="text" class="input-sm form-control formCompanyName" placeholder="Add company name" />
									</div>
									<div class="form-group">
										<label>Description: </label>
										<textarea class="input-sm form-control formCompanyDescription" placeholder="Job title & job description" rows="3"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<button type="button" class="btn btn-primary appendWorkExperience">Add new work experience</button>
							</div>
							<div class="col-sm-4">
							</div>
							<div class="col-sm-4">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="page-header">
							Languages
						</div>
						<div class="appendLanguage">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group form-padding">
										<label>Language: </label>
										<input type="text" class="input-sm form-control formLanguage" placeholder="Add language" />
									</div>
									<div class="form-group form-padding">
										<label>Mastery level: </label>
										<select class="mdb-select md-form formMastery">
											<option value="" disabled selected>Choose your option</option>
											<option value="Begginer">Begginer</option>
											<option value="Novice">Novice</option>
											<option value="Intermediate">Intermediate</option>
											<option value="Advanced">Advanced</option>
											<option value="Expert">Expert</option>
											<option value="Native">Native</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<button type="button" class="btn btn-primary appendNewLanguage">Add new language</button>
							</div>
							<div class="col-sm-4">
							</div>
							<div class="col-sm-4">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-2">
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 steps-header">
			<a name="stepTwo">Choose CV design template</a>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active set-background" data-type="first">
						<img src="media/cv-example-one.png" width="100%;" height="100%"/>
					</div>
					<div class="carousel-item set-background" data-type="second">
						<img src="media/cv-example-two.png" width="100%;" height="100%"/>
					</div>
					<div class="carousel-item set-background" data-type="third">
						<img src="media/cv-example-three.png" width="100%;" height="100%"/>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="col-sm-4">
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4">
			<div class="row" style="padding-top: 20px;">
				<div class="col-sm-6" style="padding-top: 20px;">
					<button type="button" class="btn btn-lg btn-block btn-primary openPreview">Preview your CV</button>
				</div>
				<div class="col-sm-6" style="text-align: right; padding-top: 20px;">
					<button type="button" class="btn btn-lg btn-block btn-success exportToPdf">Export to PDF</button>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="pricing-section">
				<div class="pricing-header-section">
					<a name="pricingSection" >Pricing</a>
				</div>
				<div class="pricing-sub-header-section">
					<p>You can check if any of the pricing options fit you and subscribe to it.</p>
				</div>
				<div class="pricing-content-section">
					<div class="price-section">
						<div class="card-deck mb-3 text-center">
							<div class="card mb-4 box-shadow">
								<div class="card-header">
									<h4 class="my-0 font-weight-normal">Free</h4>
								</div>
								<div class="card-body">
									<h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ monthly</small></h1>
									<ul class="list-unstyled mt-3 mb-4">
										<li>Access to free CV templates from our library</li>
										<li>Maximum of 5 CVs</li>
										<li>24/7 email support</li>
									</ul>
									<button type="button" class="btn btn-lg btn-block btn-outline-primary">Subscribe for free</button>
								</div>
							</div>
							<div class="card mb-4 box-shadow">
								<div class="card-header">
									<h4 class="my-0 font-weight-normal">Pro</h4>
								</div>
								<div class="card-body">
									<h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ monthly</small></h1>
									<ul class="list-unstyled mt-3 mb-4">
										<li>Partial access to CV templates from our library</li>
										<li>Maximum of 10 CVs</li>
										<li>24/7 email support</li>
									</ul>
									<button type="button" class="btn btn-lg btn-block btn-outline-primary">Subscribe</button>
								</div>
							</div>
							<div class="card mb-4 box-shadow">
								<div class="card-header">
									<h4 class="my-0 font-weight-normal">Enterprise</h4>
								</div>
								<div class="card-body">
									<h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ monthly</small></h1>
									<ul class="list-unstyled mt-3 mb-4">
										<li>Full access to CV templates from our library</li>
										<li>Unlimited number of CVs</li>
										<li>24/7 email support</li>
									</ul>
									<button type="button" class="btn btn-lg btn-block btn-outline-primary">Subscribe</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 section-header">
			<a name="instagramFeed" >Instagram Feed</a>
		</div>
		<div class="col-sm-12">
			<div id="instafeed">
			</div>
		</div>
	</div>
</div>

<div class="banner">
	<div class="container">
		<div class="banner-text">
			<div class="banner-heading">
				This is our testimonial section!
			</div>
			<div class="banner-sub-heading">
				We provide customer service as well as beautifully designed CV templates.
			</div>
			<div class="banner-sub-heading">
				Thanks for visiting us!
			</div>
		</div>
	</div>
</div>

<div class="goto-top2">
	<p class="goto-top"><img src="http://i1155.photobucket.com/albums/p559/scrolltotop/arrow66.png" width="20" height="20"></p>
</div>

<?php
	include_once('footer.html');
?>

<!-- Modal -->
<div class="modal fade" id="mainModal" tabindex="-1" role="dialog" aria-labelledby="mainModalExample" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">CV Preview</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>