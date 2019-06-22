$('.formDate').datepicker({
});

$(document).on('click', '.appendNew', function(e) {
	e.preventDefault();
	string = '';
	
	string += '<div class="row">'+
							'<div class="col-sm-12">'+
								'<div class="form-group form-padding">'+
									'<label>Date: </label>'+
									'<input type="text" class="input-sm form-control" placeholder="e.g. 03/2016 - 05/2016" />'+
								'</div>'+
								'<div class="form-group">'+
									'<label>Institution name: </label>'+
									'<input type="text" class="input-sm form-control" placeholder="e.g. Faculty of Electronical Enginering at Belgrade" />'+
								'</div>'+
								'<div class="form-group">'+
									'<label>Degree: </label>'+
									'<select class="mdb-select md-form">'+
										'<option value="" disabled selected>Choose your option</option>'+
										'<option value="High school">High school</option>'+
										'<option value="Bachelor degree">Bachelor degree</option>'+
										'<option value="Master degree">Master degree</option>'+
										'<option value="PhD">PhD</option>'+
									'</select>'+
								'</div>'+
								'<div class="form-group">'+
									'<label>Description: </label>'+
									'<textarea class="input-sm form-control" rows="3"></textarea>'+
								'</div>'+
								'<div class="form-group">'+
									'<button type="button" class="btn btn-primary removeAdded">Remove</button>'+
								'</div>'+
							'</div>'+
						'</div>';
	
	$('.appendNewEducation').append(string);
});

$(document).on('click', '.appendWorkExperience', function(e) {
	e.preventDefault();
	string = '';
	
	string += '<div class="row">'+
							'<div class="col-sm-12">'+
								'<div class="form-group form-padding">'+
									'<label>Date: </label>'+
									'<input type="text" class="input-sm form-control" placeholder="e.g. 03/2016 - 05/2016" />'+
								'</div>'+
								'<div class="form-group">'+
									'<label>Company name: </label>'+
									'<input type="text" class="input-sm form-control" placeholder="Add company name" />'+
								'</div>'+
								'<div class="form-group">'+
									'<label>Description: </label>'+
									'<textarea class="input-sm form-control" placeholder="Job title & job description" rows="3"></textarea>'+
								'</div>'+
								'<div class="form-group">'+
									'<button type="button" class="btn btn-primary removeAdded">Remove</button>'+
								'</div>'+
							'</div>'+
						'</div>';
	
	$('.appendNewCompany').append(string);
});

$(document).on('click', '.appendNewLanguage', function(e) {
	e.preventDefault();
	string = '';
	
	string += '<div class="row">'+
							'<div class="col-sm-12">'+
								'<div class="form-group form-padding">'+
									'<label>Language: </label>'+
									'<input type="text" class="input-sm form-control" placeholder="Add language" />'+
								'</div>'+
								'<div class="form-group form-padding">'+
									'<label>Mastery level: </label>'+
									'<select class="mdb-select md-form">'+
										'<option value="" disabled selected>Choose your option</option>'+
										'<option value="Begginer">Begginer</option>'+
										'<option value="Novice">Novice</option>'+
										'<option value="Intermediate">Intermediate</option>'+
										'<option value="Advanced">Advanced</option>'+
										'<option value="Expert">Expert</option>'+
										'<option value="Native">Native</option>'+
									'</select>'+
								'</div>'+
								'<div class="form-group">'+
									'<button type="button" class="btn btn-primary removeAdded">Remove</button>'+
								'</div>'+
							'</div>'+
						'</div>';
	
	$('.appendLanguage').append(string);
});

$(document).on('click', '.removeAdded', function(e) {
	e.preventDefault();
	$(this).closest('.row').remove();
});

//passing data to php for pdf creation
$(document).on('click', '.pickUpData', function(e) {
	e.preventDefault();
	formName = $('.formName').val();
	formEmail = $('.formEmail').val();
	formPickedDate = $('.formPickedDate').val();
	formAddress = $('.formAddress').val();
	formNumber = $('.formNumber').val();
	formSummary = $('.formSummary').val();
	formEducationDate = $('.formEducationDate').val();
	formInstitutionName = $('.formInstitutionName').val();
	formDegree = $('.formDegree').val();
	formEducationDescription = $('.formEducationDescription').val();
	formCompanyDate = $('.formCompanyDate').val();
	formCompanyName = $('.formCompanyName').val();
	formCompanyDescription = $('.formCompanyDescription').val();
	formLanguage = $('.formLanguage').val();
	formMastery = $('.formMastery').val();
	
	$.ajax({
		url: 'temp.php',
		type: 'post',
		data: {
			name: formName,
			email: formEmail,
			dateOfBirth: formPickedDate,
			address: formAddress,
			phoneNumber: formNumber,
			summary: formSummary,
			educationDate: formEducationDate,
			educationInstitution: formInstitutionName,
			educationDescription: formEducationDescription,
			companyDate: formCompanyDate,
			companyName: formCompanyName,
			companyDescription: formCompanyDescription,
			language: formLanguage,
			languageLevel: formMastery
		},
		success: function(result) {
			parsedResult = JSON.parse(result);
			console.log(parsedResult);
			/*$('.contactName').html(parsedResult.name);
			$('.contactAddress').html(parsedResult.address);
			$('.contactEmail').html(parsedResult.email);
			$('.contactPhone').html(parsedResult.dateOfBirth);
			$('.contactDateOfBirth').html(parsedResult.phoneNumber);*/
			
			location.href = '/thePerfectCV/cv_example.html';
			
		}
	});
	
});

//instafeed (example used)
var userFeed = new Instafeed({
  get: 'user',
  userId: '8987997106',
  clientId: '924f677fa3854436947ab4372ffa688d',
  accessToken: '8987997106.924f677.8555ecbd52584f41b9b22ec1a16dafb9',
  resolution: 'standard_resolution',
  template: '<a href="{{link}}" target="_blank" id="{{id}}"><img src="{{image}}" /></a>',
  sortBy: 'most-recent',
  limit: 4,
  links: false
});
userFeed.run();

$(document).on('click', '.openPreview', function(e) {
	e.preventDefault();
	$('#mainModal .modal-title').html('HTML CV preview');
	$('#mainModal .modal-body').html('');
	
	$.ajax({
		url: 'cv_example.html',
		type: 'post',
		data: {
		},
		success: function(result) {
			$('#mainModal .modal-body').html(result);
			$('#mainModal').modal('show');
		}
	});
});

$(document).on('click', '.exportToPdf', function(e) {
	location.href = '/thePerfectCV/PdfGenerator.php'
});

$(document).ready(function () {
  $(window).scroll(function () {
    var top =  $(".goto-top");
        if ( $('body').height() <= (    $(window).height() + $(window).scrollTop() + 200 )) {
  top.animate({"margin-left": "0px"},1500);
        } else {
            top.animate({"margin-left": "-100%"},1500);
        }
    });

    $(".goto-top").on('click', function () {
        $("html, body").animate({scrollTop: 0}, 400);
    });
});