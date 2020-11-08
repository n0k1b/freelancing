@include('layout.app')
<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- Page Content
================================================== -->
<div class="full-page-container">

	<div class="full-page-sidebar">
		<div class="full-page-sidebar-inner" data-simplebar>
		<form action="{{url('search_gig')}}" method ="POST">
		@csrf
			<div class="sidebar-container">
				
			

				<div class="sidebar-widget">
					<h3>Location</h3>
					<div class="input-with-icon">
						<div id="autocomplete-container">
							<input  name= "location" id="autocomplete-input" class="city" type="text" placeholder="Location">
						</div>
						<i class="icon-material-outline-location-on"></i>
					</div>
				</div>

				
			
				<div class="sidebar-widget">
					<h3>Category</h3>
					<select id="gig_category" name="gig_category" class="selectpicker default"  data-selected-text-format="count" data-size="7" title="All Categories" >
						
					</select>
				</div>
		

			</div>
			
			<div class="sidebar-search-button-container">
				<button  type="submit" class="button ripple-effect">Search</button>
			</div>

			</form>
			 
			<!-- Search Button / End-->
             
		</div>
	</div>
	<!-- Full Page Sidebar / End -->
	
	<!-- Full Page Content -->
	<div class="full-page-content-container" data-simplebar>
		<div class="full-page-content-inner">

			

			<div class="listings-container grid-layout margin-top-35">
			        @if(sizeof($gig_lists)==0)
					
						<h1> No Search matches</h1>
					
					@else
					
						@foreach($gig_lists as $gig_list)
						
						<a href="{{url('get_gig_details/'."$gig_list->id")}}" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">
						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="Gig Image/{{$gig_list->image}}" alt="image">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h4 class="job-listing-company">{{$gig_list->name}} <span  data-tippy-placement="top"></span></h4>
							<h3 class="job-listing-title">{{$gig_list->title}}</h3>
						</div>
					</div>

					<!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<span class="bookmark-icon"></span>
						<ul>
							<li><i class="icon-material-outline-location-on"></i> {{$gig_list->city}}</li>
						
							<li><i class="icon-material-outline-account-balance-wallet"></i> {{$gig_list->min_price}}-{{$gig_list->max_price}}</li>
						
						</ul>
					</div>
				</a>
						@endforeach
					
					@endif
				  

			

				
				

			


			

				
				
				<!-- Job Listing -->
				

				<!-- Job Listing -->
				

			</div>

			<!-- Pagination -->
			<!-- <div class="clearfix"></div>
			<div class="pagination-container margin-top-20 margin-bottom-20">
				<nav class="pagination">
					<ul>
						<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
						<li><a href="#" class="ripple-effect">1</a></li>
						<li><a href="#" class="ripple-effect current-page">2</a></li>
						<li><a href="#" class="ripple-effect">3</a></li>
						<li><a href="#" class="ripple-effect">4</a></li>
						<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
					</ul>
				</nav>
			</div>
			<div class="clearfix"></div> -->
			<!-- Pagination / End -->

			<!-- Footer -->
			
			<!-- Footer / End -->

		</div>
	</div>
	<!-- Full Page Content / End -->

</div>


</div>
<!-- Wrapper / End -->

<!-- Scripts


================================================== -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/mmenu.min.js"></script>
<script src="js/tippy.all.min.js"></script>
<script src="js/simplebar.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/snackbar.js"></script>
<script src="js/clipboard.min.js"></script>
<script src="js/counterup.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/custom.js"></script>

<script type="text/javascript">


	
	function filter()
	{
	
	var city = $(".city").val();
	var category = $("#category").val();
      if(!city)
      {
      	city='all';
      }
      if(!category)
      {
      	category='all';
      }
	 window.location.href = 'main_page_gig.php?category='+category+'& location='+city;

	}
</script>


<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
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
  function fetch_data()
  {
          
  }
</script>

<!-- Google Autocomplete -->
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
	function initAutocomplete() {
		 var options = {
		  types: ['(cities)'],
		  // componentRestrictions: {country: "us"}
		 };

		 var input = document.getElementById('autocomplete-input');
		 var autocomplete = new google.maps.places.Autocomplete(input, options);
	}
</script>

<!-- Google API & Maps -->
<!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&amp;libraries=places&amp;callback=initAutocomplete"></script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/jobs-grid-layout-full-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Mar 2019 13:32:32 GMT -->
</html>