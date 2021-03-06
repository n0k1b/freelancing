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
								<?php 
									//   $bid_id = $row_bid['bid_id'];
                                    //   $freelancer_id = $row_bid['user_id'];
                                    //   $job_id =$row_bid['job_id'];
                                    //   $bidding_price = $row_bid['bidding_price'];
                                    //   $work_duration = $row_bid['work_duration'];
                                    //   $sql = "SELECT * from user where id = $freelancer_id";
                                    //   $res = mysqli_query($conn,$sql);
                                    //   $row = mysqli_fetch_array($res);
                                    //   $name = $row['name'];
                                    //   $rating = $row['rating']; 
                                    //   $mobile_number = $row['mobile_number'];
                                    //   $msg = $row_bid['bidding_message'];
                                    //   $sql_job = "select * from job where id = $job_id";
                                    //   $res_job = mysqli_query($conn,$sql_job);
                                    //   $row_job = mysqli_fetch_array($res_job);

                                    //   $job_title = $row_job['job_title'];

                                    //   $receiver_id = $freelancer_id;
                                    //   $work_id = $job_id;



									?>
								

								<?php  

                                    //      $user_id = $row_gig['employee_id'];
                                    //      $gig_id = $row_gig['gig_id'];
                                    //      $gig_apply_id = $row_gig['id'];
                                    //      $proposed_rate = $row_gig['proposed_rate'];
                                    //      $proposed_duration = $row_gig['proposed_duration'];
                                    //   $sql = "SELECT * from user where id = $user_id";
                                    //   $res = mysqli_query($conn,$sql);
                                    //   $row = mysqli_fetch_array($res);
                                    //   $name = $row['name'];
                                    //   $rating = $row['rating']; 
                                    //   $mobile_number = $row['mobile_number'];
                                    //   $msg = $row_gig['message'];
                                    //   $sql_gig = "select * from gig where id = $gig_id";
                                    //     $res_gig = mysqli_query($conn,$sql_gig);
                                    //   $row_gig = mysqli_fetch_array($res_gig);

                                    //   $gig_title = $row_gig['gig_title'];
									?>

									@foreach($gigs  as $gig)
								<li>
									<!-- Overview -->
									<div class="freelancer-overview manage-candidates">
										<div class="freelancer-overview-inner">

											<!-- Avatar -->
											

											<!-- Name -->
											<div class="freelancer-name">

													<h4><strong>{{$gig->gig_title}}</strong></h4>
												<h4><a href="#"  style="color:blue">{{$gig->hire_from_name}} </a> Interested in your gig at {{$gig->proposed_hired_budget}} tk within {{$gig->proposed_hired_day}} days  </h4>



												<!-- Details -->
												
												<span class="freelancer-detail-item"><i class="icon-feather-phone"></i>{{$gig->hire_from_mobile_number}} </span>

												<!-- Rating -->
												<div class="freelancer-rating">
													<div class="star-rating" data-rating="<?php echo $rating=5 ?>"></div>
												</div>
												<br>

												<p>{{$gig->proposed_message}}</p>

												<!-- Buttons -->
												<div class="buttons-to-right always-visible margin-top-25 margin-bottom-5">
													<a href="javascript:;" onclick='accept_gig(<?php echo $gig_apply_id=1 ?>,{{$gig->gig_id}})' class="button ripple-effect"><i class="icon-feather-file-text"></i> Accept</a>
													<!-- <a href="#small-dialog" class="popup-with-zoom-anim button dark ripple-effect"><i class="icon-feather-mail"></i> Send Message</a> -->
													<!-- <a href="javascript:;" onclick="remove()" class="button gray ripple-effect ico" title="Remove gig" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a> -->
												</div>
											</div>
										</div>
									</div>
								</li>
								@endforeach
								

								<?php 
                                    //      $bid_id = $row_bid_accept['bid_id'];
                                    //      $client_id = $row_bid_accept['job_given_id'];
                                    //      $job_id = $row_bid_accept['job_id'];
                                    //      $bidding_price = $row_bid_accept['bidding_price'];
                                    //   $sql = "SELECT * from user where id = $client_id";
                                    //   $res = mysqli_query($conn,$sql);
                                    //   $row = mysqli_fetch_array($res);
                                    //   $name = $row['name'];

                                    //   $sql_job = "select * from job where id = $job_id";
                                    //   $res_job = mysqli_query($conn,$sql_job);
                                    //   $row_job = mysqli_fetch_array($res_job);

                                    //   $job_title = $row_job['job_title'];

                                      // $rating = $row['rating']; 
                                      // $mobile_number = $row['mobile_number'];
                                      // $msg = $row_gig['message'];
                                      // $sql_gig = "select * from gig where id = $gig_id";
                                      //   $res_gig = mysqli_query($conn,$sql_gig);
                                      // $row_gig = mysqli_fetch_array($res_gig);

                                      // $gig_title = $row_gig['gig_title'];
									?>
							
								


							

								

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
@include('layout.page_js');


<script type="text/javascript">
  $(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        console.log("Jquery running!");
        readPost();
    })

   function message(sender_id,receiver_id,work_id)
   {
   	 window.location.href = 'chat.php?sender_id='+sender_id+'& receiver_id='+receiver_id+'& work_id='+work_id;
   }

	function remove_notification(bid_id)
	{
		 var formData= new FormData();
    formData.append('bid_id',bid_id);
    formData.append('remove_notification',"remove_notification");


    $.ajax({
      processData: false,
      contentType: false,
      url:"backend/bid_gig_accept.php",
      type:"POST",
      data:formData,
      success:function(data,status){
         
        
  location.reload();
        

      },

    });

	}
	
     function accept_gig(gig_apply_id,gig_id)
     {
       var formData= new FormData();
   
    formData.append('gig_id',gig_id);


   
 
    formData.append("accept_gig","accept_gig");
      
     
    $.ajax({
      processData: false,
      contentType: false,
      url:"accept_gig",
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
    formData.append("bid_id",bid_id);
    formData.append('job_id',job_id);

    //alert(job_id);




   
 
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