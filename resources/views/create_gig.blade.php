@include('layout.app')
	<div class="clearfix"></div>
	<!-- Header Container / End -->


	<!-- Dashboard Container -->
	<div class="dashboard-container">

	<div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar>
			<div class="dashboard-nav-container">

				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse" >
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
					<span class="trigger-title">Dashboard Navigation</span>
				</a>
				
				<!-- Navigation -->
				<div class="dashboard-nav">
					<div class="dashboard-nav-inner">

					@include("layout.dashboard_sidebar");
						
					</div>
				</div>
				<!-- Navigation / End -->

			</div>
		</div>
	</div>

	<!-- Dashboard Sidebar
		================================================== -->

		<!-- Dashboard Sidebar / End -->


	<!-- Dashboard Content
		================================================== -->
		<div class="dashboard-content-container" data-simplebar>
			<div class="dashboard-content-inner" >

				<!-- Dashboard Headline -->
				<div class="dashboard-headline">
					<h3>Post a Gig</h3>

					<!-- Breadcrumbs -->

				</div>

				<!-- Row -->
				<div class="row">

					<!-- Dashboard Box -->
					<div class="col-xl-12">
						<div class="dashboard-box margin-top-0">

							<!-- Headline -->
							<div class="headline">
								<h3><i class="icon-feather-folder-plus"></i> Gig Post Form</h3>
							</div>

							<div class="content with-padding padding-bottom-10">
								<div class="row">

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Title</h5>
											<input id = "gig_title" type="text" class="with-border">
										</div>
									</div>



									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Category</h5>
											<select  name = "gig_category"  data-size="7" title="Select Category">
											@foreach($gig_categoris as $category)
							<option value ='{{$category->id}}'>{{$category->name}}</option>
							@endforeach
											</select>
										</div>
									</div>

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>City</h5>
											<div class="input-with-icon">
												<div id="autocomplete-container">
													<input id="autocomplete-input" class="with-border city" type="text" placeholder="Type Address">
												</div>
												<i class="icon-material-outline-location-on"></i>
											</div>
										</div>
									</div>

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Base Price</h5>
											<div class="row">
												<div class="col-xl-6">
													<div class="input-with-icon">
														<input id = "base_price_min" class="with-border" type="text" placeholder="Min">
														<i class="currency">BDT</i>
													</div>
												</div>
												<div class="col-xl-6">
													<div class="input-with-icon">
														<input id = "base_price_max" class="with-border" type="text" placeholder="Max">
														<i class="currency">BDT</i>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Minimum Duration</h5>
											<div class="row">
												<div class="col-xl-6">
													<div class="input-with-icon">
														<input id = "duration" class="with-border" type="text" placeholder="Minimum Duration">
														<i class="currency">Days</i>
													</div>
												</div>
												
											</div>
										</div>
									</div>

									<!-- <div class="col-xl-4">
										<div class="submit-field">
											<h5>Tags <span>(optional)</span>  <i class="help-icon" data-tippy-placement="right" title="Maximum of 10 tags"></i></h5>
											<div class="keywords-container">
												<div class="keyword-input-container">
													<input type="text" class="keyword-input with-border" placeholder="e.g. job title, responsibilites"/>
													<button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
												</div>
												<div class="keywords-list"> keywords go here </div>
												<div class="clearfix"></div>
											</div>

										</div>
									</div> -->

									<div class="col-xl-12">
										<div class="submit-field">
											<h5>Gig Description</h5>
											<textarea id = 'gig_description' cols="30" rows="5" class="with-border"></textarea>
											<div class="uploadButton margin-top-30">
												<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple/>
												<label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
												<span class="uploadButton-file-name">Images or documents that might be helpful in describing your job</span>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-12">
						<a href="#" onclick="gig_post()" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i> Post a Job</a>
					</div>

				</div>
				<!-- Row / End -->

				<!-- Footer -->
				<div class="dashboard-footer-spacer"></div>
				<div class="small-footer margin-top-15">
					
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

</div>
<!-- Wrapper / End -->


<!-- Scripts


	================================================== -->

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script type="text/javascript">

  	function get_category()
	  {
		$.ajax({
        processData:false,
        contentType:false,
        type:'post',
        url:"get_category",
        success:function(data){
			//alert(data);
			$("#gig_category").html(data);
        }
   		 })
	  }

  	function gig_post()
  	{
    var gig_title = $("#gig_title").val();
	var city = $(".city").val();
	var base_price_min = $("#base_price_min").val();
	var base_price_max = $("#base_price_max").val();
	var gig_category = $("#gig_category").val();
	var gig_description = $("#gig_description").val();
	var duration = $("#duration").val();
    
    	
     var formData= new FormData();
    formData.append('gig_title',gig_title);
    formData.append("city",city);
    formData.append("base_price_min",base_price_min);
    formData.append("base_price_max",base_price_max);
    formData.append("gig_category",gig_category);
    formData.append("gig_description",gig_description);
        formData.append("duration",duration);
       formData.append("user_id",1);
    formData.append("gig_post","gig_post");
       formData.append('file',$('#upload')[0].files[0]);
     
    $.ajax({
      processData: false,
      contentType: false,
      url:"submit_gig",
      type:"POST",
      data:formData,
      success:function(data,status){

        
         swal({
  title: "Your gig is successfully created",
 
  icon: "success",
  
 
})
.then((isConfrim) => {
  if (isConfrim) {
      window.location.href = 'view_all_gig';
  } 
});
        

      },

    });
  	}

  </script>

@include('layout.page_js');
	<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
	<script>
	$(function()
	{
		$.ajaxSetup({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       		 }
    	});

		get_category();

	});
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	}); 
}); 
</script>

<!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
<script src="js/chart.min.js"></script>
<script>
	Chart.defaults.global.defaultFontFamily = "Nunito";
	Chart.defaults.global.defaultFontColor = '#888';
	Chart.defaults.global.defaultFontSize = '14';

	var ctx = document.getElementById('chart').getContext('2d');

	var chart = new Chart(ctx, {
		type: 'line',

		// The data for our dataset
		data: {
			labels: ["January", "February", "March", "April", "May", "June"],
			// Information about the dataset
			datasets: [{
				label: "Views",
				backgroundColor: 'rgba(42,65,232,0.08)',
				borderColor: '#2a41e8',
				borderWidth: "3",
				data: [196,132,215,362,210,252],
				pointRadius: 5,
				pointHoverRadius:5,
				pointHitRadius: 10,
				pointBackgroundColor: "#fff",
				pointHoverBackgroundColor: "#fff",
				pointBorderWidth: "2",
			}]
		},

		// Configuration options
		options: {

			layout: {
				padding: 10,
			},

			legend: { display: false },
			title:  { display: false },

			scales: {
				yAxes: [{
					scaleLabel: {
						display: false
					},
					gridLines: {
						borderDash: [6, 10],
						color: "#d8d8d8",
						lineWidth: 1,
					},
				}],
				xAxes: [{
					scaleLabel: { display: false },  
					gridLines:  { display: false },
				}],
			},

			tooltips: {
				backgroundColor: '#333',
				titleFontSize: 13,
				titleFontColor: '#fff',
				bodyFontColor: '#fff',
				bodyFontSize: 13,
				displayColors: false,
				xPadding: 10,
				yPadding: 10,
				intersect: false
			}
		},


	});

</script>


<!-- Google Autocomplete -->
<script>
	function initAutocomplete() {
		var options = {
			types: ['(cities)'],
		  // componentRestrictions: {country: "us"}
		};

		var input = document.getElementById('autocomplete-input');
		var autocomplete = new google.maps.places.Autocomplete(input, options);

		if ($('.submit-field')[0]) {
			setTimeout(function(){ 
				$(".pac-container").prependTo("#autocomplete-container");
			}, 300);
		}
	}
</script>

<!-- Google API & Maps -->
<!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&amp;libraries=places&amp;callback=initAutocomplete"></script>


</body>

</html>