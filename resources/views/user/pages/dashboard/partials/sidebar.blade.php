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

						<ul data-submenu-title="Start">
							<li class="active"><a href="{{route('user.dashboard')}}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<li><a href="dashboard-messages.html"><i class="icon-material-outline-question-answer"></i> Messages <span class="nav-tag">2</span></a></li>
							<li><a href="dashboard-bookmarks.html"><i class="icon-material-outline-star-border"></i> Bookmarks</a></li>
							<li><a href="dashboard-post-a-task.html"><i class="icon-material-outline-assignment"></i>Post a Job</a></li>
							<li><a href="dashboard-post-a-bid.html"><i class="icon-material-outline-gavel"></i>Bids</a></li>
							
						</ul>
						<ul data-submenu-title="Organize and Manage">
							<li><a href="manage-jobs.html"><i class="icon-material-outline-assignment"></i>Manage Jobs</a></li>
							<li><a href="manage-bidders.html"><i class="icon-material-outline-assignment"></i>Manage Bidders</a></li>
							<li><a href="{{route('user.manage-profile')}}"><i class="icon-material-outline-assignment"></i>Manage Profile</a></li>
							<li><a href="dashboard-reviews.html"><i class="icon-material-outline-rate-review"></i> Reviews</a></li>
						</ul>
						
						<ul data-submenu-title="Your Jobs">
							<li><a href="manage-jobs.html"><i class="icon-material-outline-assignment"></i>Find Jobs</a></li>

							<li class=""><a href="#"><i class="icon-material-outline-assignment"></i>Statistics</a>
								<ul>
									<li><a href="manage-bidders.html"><i class="icon-material-outline-assignment"></i>Active Jobs</a></li>
									<li><a href="dashboard-manage-tasks.html">Job Statistics<span class="nav-tag">2</span></a></li>
									<li><a href="dashboard-manage-bidders.html">Profile Statistics</a></li>
									<li><a href="dashboard-my-active-bids.html">Payment Statistics<span class="nav-tag">4</span></a></li>
									<li><a href="dashboard-post-a-task.html">Job Reviews</a></li>
								</ul>	
							</li>
						</ul>

						<ul data-submenu-title="Account">
							<li><a href="dashboard-settings.html"><i class="icon-material-outline-settings"></i> Settings</a></li>
							<li><a href="index-logged-out.html"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
						</ul>
						
					</div>
				</div>
				<!-- Navigation / End -->

			</div>
		</div>
	</div>
	<!-- Dashboard Sidebar / End -->