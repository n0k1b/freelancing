@include("layout.app")
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard Container -->
<div class="dashboard-container">

	<!-- Dashboard Sidebar
	================================================== -->
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
	<!-- Dashboard Sidebar / End -->


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
			<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						
						<div class="content">
							<ul class="dashboard-box-list">
								
                                    @foreach($hire_infos as $hire)
                                    <input type = "hidden" id = "client_id" value="{{$hire->hire_to}}">
                                           <input type = "hidden" id = "freelancer_id" value="{{$hire->hire_to}}">
                                           <input type = "hidden" id = "job_id" value="{{$hire->gig_id}}">
                                   @if($hire->accept_status == 0 && $hire->complete_status==0 )
								<li>
									<!-- Overview -->
									<div class="freelancer-overview manage-candidates">
										<div class="freelancer-overview-inner">
											

                                            
											<div class="freelancer-name">
												<h4 style="color:#FF5733"><strong>Your pending work</strong></h4>

												<h4><strong>{{$hire->gig_title}}</strong></h4>
												<h4>Entreprenure name : <a href="#" style="color:blue">{{$hire->hire_to_name}} </a></h4>
												<h4>Price : <a href="#" style="color:blue">{{$hire->proposed_hired_budget}} tk </a></h4>  

											
												
												<span class="freelancer-detail-item"><i class="icon-feather-phone"></i>{{$hire->hire_to_mobile_number}} </span>

											
												

												
												<div class="buttons-to-right always-visible margin-top-25 margin-bottom-5">
													<a href="get_gig_details\{{$hire->gig_id}}"   class="button ripple-effect"><i class="icon-feather-file-text"></i> Work Details </a>
													
													
												</div>
											</div>
										</div>
									</div>
								</li>
                                @elseif($hire->accept_status == 1 && $hire->complete_status == 0 )
                                <li>
									<!-- Overview -->
									<div class="freelancer-overview manage-candidates">
										<div class="freelancer-overview-inner">
											 <input type = "hidden" id = "client_id" value="{{$hire->hire_from}}">
                                           <input type = "hidden" id = "freelancer_id" value="{{$hire->hire_to}}">
                                           <input type = "hidden" id = "job_id" value="{{$hire->gig_id}}">

                                            
											<div class="freelancer-name">
												<h4 style="color:#6EBA10"><strong>Your running work</strong></h4>

												<h4><strong>{{$hire->gig_title}}</strong></h4>
												<h4>Entreprenure name : <a href="#" style="color:blue">{{$hire->hire_to_name}} </a></h4>
												<h4>Price : <a href="#" style="color:blue">{{$hire->proposed_hired_budget}} tk </a></h4>  

											
												
												<span class="freelancer-detail-item"><i class="icon-feather-phone"></i>{{$hire->hire_to_mobile_number}} </span>

											
												

												
												<div class="buttons-to-right always-visible margin-top-25 margin-bottom-5">
													<a href="get_gig_details\{{$hire->gig_id}}"   class="button ripple-effect"><i class="icon-feather-file-text"></i> Work Details </a>
													<a href="#small-dialog-2" class="popup-with-zoom-anim button ripple-effect"><i class="icon-material-outline-thumb-up"></i> Job done</a>
													
												</div>
											</div>
										</div>
									</div>
								</li>

                                @elseif($hire->accept_status == 1 && $hire->complete_status == 1 )
                                <li>
									<!-- Overview -->
									<div class="freelancer-overview manage-candidates">
										<div class="freelancer-overview-inner">
											 <input type = "hidden" id = "client_id" value="{{$hire->hire_to}}">
                                           <input type = "hidden" id = "freelancer_id" value="{{$hire->hire_to}}">
                                           <input type = "hidden" id = "job_id" value="{{$hire->gig_id}}">

                                            
											<div class="freelancer-name">
												<h4 style="color:#160FDE"><strong>Your completed work</strong></h4>

												<h4><strong>{{$hire->gig_title}}</strong></h4>
												<h4>Entreprenure name : <a href="#" style="color:blue">{{$hire->hire_to_name}} </a></h4>
												<h4>Price : <a href="#" style="color:blue">{{$hire->proposed_hired_budget}} tk </a></h4>  

											
												
												<span class="freelancer-detail-item"><i class="icon-feather-phone"></i>{{$hire->hire_to_mobile_number}} </span>

											
											</div>
										</div>
									</div>
								</li>
                                @endif
							

								
							 @endforeach
								

							
								

							</ul>
						</div>
					</div>
				</div>

			</div>
			<!-- Row / End -->

			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			
			<!-- Footer / End -->

		</div>
	</div>
	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

</div>
<!-- Wrapper / End -->


<!-- Apply for a job popup
================================================== -->


<div id="small-dialog-2" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab2">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Leave a Review</h3>
					
				</div>
					
				<!-- Form -->
				

					
					
					<div class="feedback-yes-no">
						<strong>Your Rating</strong>
						<div class="leave-rating">
							<input type="radio" name="rating" id="rating-radio-1" value="5" required>
							<label for="rating-radio-1" class="icon-material-outline-star"></label>
							<input type="radio" name="rating" id="rating-radio-2" value="4"  required>
							<label for="rating-radio-2" class="icon-material-outline-star"></label>
							<input type="radio" name="rating" id="rating-radio-3" value="3"  required>
							<label for="rating-radio-3" class="icon-material-outline-star"></label>
							<input type="radio" name="rating" id="rating-radio-4" value="2"  required>
							<label for="rating-radio-4" class="icon-material-outline-star"></label>
							<input type="radio" name="rating" id="rating-radio-5" value="1"  required>
							<label for="rating-radio-5" class="icon-material-outline-star"></label>
						</div><div class="clearfix"></div>
					</div>

					<textarea class="with-border" placeholder="Comment" name="message2" id="comment" cols="7" required></textarea>

				
				
				<!-- Button -->
				<button onclick="review()" class="button full-width button-sliding-icon ripple-effect" type="button" form="leave-review-form">Leave a Review <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>

		</div>
	</div>
</div>
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab">Add Note</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Do Not Forget 😎</h3>
				</div>
					
				<!-- Form -->
				<form method="post" id="add-note">

					<select class="selectpicker with-border default margin-bottom-20" data-size="7" title="Priority">
						<option>Low Priority</option>
						<option>Medium Priority</option>
						<option>High Priority</option>
					</select>

					<textarea name="textarea" cols="10" placeholder="Note" class="with-border"></textarea>

				</form>
				
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect" type="submit" form="add-note">Add Note <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>

		</div>
	</div>
</div>
<!-- Apply for a job popup / End -->


<!-- Scripts
================================================== -->
@include('layout.page_js')


<script type="text/javascript">
	
       	 function review()
	 {  
	 	var client_id = $("#client_id").val();
	 	var rating = $("input[name='rating']:checked").val();
	 		var freelancer_id = $("#freelancer_id").val();
	 			var job_id = $("#job_id").val();

	 	var comment = $("#comment").val();
	 	 var formData= new FormData();
         formData.append('rating',rating);
          formData.append('comment',comment);
          formData.append('client_id',client_id);
           formData.append('freelancer_id',freelancer_id);
           formData.append('job_id',job_id);
          formData.append("review_freelancer","review_freelancer");
          $.ajax({
      processData: false,
      contentType: false,
      url:"submit_review",
      type:"POST",
      data:formData,
      success:function(data,status){
         
         swal({
  title: "Your work successfully completed",
 
  icon: "success",
  
 
})
.then((isConfrim) => {
  if (isConfrim) {
     location.reload();
  } 
});
       
  
        

      },

    });
	 	


	 }


     function accept_gig(gig_apply_id,gig_id)
     {
       var formData= new FormData();
    formData.append('gig_apply_id',gig_apply_id);
    formData.append('gig_id',gig_id);


   
 
    formData.append("accept_gig","accept_gig");
      
     
    $.ajax({
      processData: false,
      contentType: false,
      url:"backend/bid_gig_accept.php",
      type:"POST",
      data:formData,
      success:function(data,status){
         
         swal({
  title: "You accept this gig offer",
 
  icon: "success",
  
 
})
.then((isConfrim) => {
  if (isConfrim) {
     location.reload();
  } 
});
       
  
        

      },

    });
     }

     function accept_bid(bid_id,job_id)
     {
         
     var formData= new FormData();
    formData.append('bid_id',bid_id);
    formData.append('job_id',job_id);


   
 
    formData.append("accept_bid","accept_bid");
      
     
    $.ajax({
      processData: false,
      contentType: false,
      url:"backend/bid_gig_accept.php",
      type:"POST",
      data:formData,
      success:function(data,status){
         
         swal({
  title: "You accept this bid",
 
  icon: "success",
  
 
})
.then((isConfrim) => {
  if (isConfrim) {
     location.reload();
  } 
});
       
  
        

      },

    });

     }

     function remove_gig(gig_apply_id)
     {
     	var formData= new FormData();
    formData.append('gig_apply_id',gig_apply_id);
    


   
 
    formData.append("remove_gig","remove_gig");
      
     
    $.ajax({
      processData: false,
      contentType: false,
      url:"backend/bid_gig_accept.php",
      type:"POST",
      data:formData,
      success:function(data,status){
         
         swal({
  title: "You removed this gig",
 
  icon: "success",
  
 
})
.then((isConfrim) => {
  if (isConfrim) {
     location.reload();
  } 
});
       
  
        

      },

    });
     	
     }

     function remove_bid(bid_id)
     {
     	 var formData= new FormData();
    formData.append('bid_id',bid_id);
    


   
 
    formData.append("remove_bid","remove_bid");
      
     
    $.ajax({
      processData: false,
      contentType: false,
      url:"backend/bid_gig_accept.php",
      type:"POST",
      data:formData,
      success:function(data,status){
         
         swal({
  title: "You removed this bid",
 
  icon: "success",
  
 
})
.then((isConfrim) => {
  if (isConfrim) {
     location.reload();
  } 
});
       
  
        

      },

    });
     }

</script>

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


</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/dashboard-messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Mar 2019 13:32:59 GMT -->
</html>