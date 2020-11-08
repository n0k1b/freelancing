              
			  @if(auth()->user()->role =='user')
			 
			  <ul data-submenu-title="Start">
							<li><a href="{{url('dashboard')}}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<!-- <li ><a href="dashboard-messages.html"><i class="icon-material-outline-question-answer"></i> Messages <span class="nav-tag">2</span></a></li> -->
							<li ><a href="{{url('see_notification_entrepreneur')}}"><i class="icon-material-outline-question-answer"></i> Notificaton <span class="nav-tag"><?php echo $total_notification = 2 ?></span></a></li>

							<li ><a href="{{url('manage_hire')}}"><i class="icon-material-outline-question-answer"></i> Manage Hire </a></li>
							<li ><a href="{{url('user_blog')}}"><i class="icon-material-outline-question-answer"></i> My Blog </a></li>
							

							<!-- <li><a href="#"><i class="icon-material-outline-star-border"></i> Bookmarks</a></li>
							<li><a href="#"><i class="icon-material-outline-rate-review"></i> Reviews</a></li> -->
						</ul>
						
						

						<ul data-submenu-title="Account">
							<li><a href="dashboard-settings.html"><i class="icon-material-outline-settings"></i> Settings</a></li>
							<li><a href="index-logged-out.html"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
						</ul>
				@else
				<ul data-submenu-title="Start">
							<li><a href="{{url('dashboard')}}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<!-- <li ><a href="dashboard-messages.html"><i class="icon-material-outline-question-answer"></i> Messages <span class="nav-tag">2</span></a></li> -->
							<li ><a href="{{url('see_notification_entrepreneur')}}"><i class="icon-material-outline-question-answer"></i> Notificaton <span class="nav-tag"><?php echo $total_notification = 2 ?></span></a></li>

							
							<li ><a href="{{url('create_gig')}}"><i class="icon-material-outline-question-answer"></i> Create Gig </a></li>
			
							<li ><a href="{{url('user_blog')}}"><i class="icon-material-outline-question-answer"></i> My Blog </a></li>
							<li ><a href="{{url('manage_gig')}}"><i class="icon-material-outline-question-answer"></i> Manage Gig </a></li>
							<li ><a href="{{url('manage_work')}}"><i class="icon-material-outline-question-answer"></i> Manage Work </a></li>

							<!-- <li><a href="#"><i class="icon-material-outline-star-border"></i> Bookmarks</a></li>
							<li><a href="#"><i class="icon-material-outline-rate-review"></i> Reviews</a></li> -->
						</ul>
						
						

						<ul data-submenu-title="Account">
							<li><a href="dashboard-settings.html"><i class="icon-material-outline-settings"></i> Settings</a></li>
							<li><a href="index-logged-out.html"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
						</ul>
						@endif