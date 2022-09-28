
    <!-- Header Container
    ================================================== -->
    <header id="header-container" class="fullwidth">
    
        <!-- Header -->
        <div id="header">
            <div class="container">
                
                <!-- Left Side Content -->
                <div class="left-side">
                    
                    <!-- Logo -->
                    <div id="logo">
                        <a href="index.html"><img src="images/logo.png" alt=""></a>
                    </div>
    
                    <!-- Main Navigation -->
                    <nav id="navigation">
                        <ul id="responsive">
    
                            <li><a href="#" class="current">Home</a></li>
    
                            <li><a href="#">Freelancers</a>

                            </li>
                            </li>
    
                            <li><a href="#">Dashboard</a>
                                <ul class="dropdown-nav">
                                    <li><a href="{{route('user.dashboard')}}">Dashboard</a></li>
                                    <li><a href="dashboard-messages.html">Messages</a></li>
                                    <li><a href="dashboard-bookmarks.html">Bookmarks</a></li>
                                    <li><a href="dashboard-reviews.html">Reviews</a></li>
                                    <li><a href="dashboard-manage-tasks.html">Jobs</a>
                                        <ul class="dropdown-nav">
                                            <li><a href="dashboard-manage-tasks.html">Manage Jobs</a></li>
                                            <li><a href="dashboard-manage-bidders.html">Manage Bidders</a></li>
                                            <li><a href="dashboard-my-active-bids.html">My Active Bids</a></li>
                                            <li><a href="dashboard-post-a-task.html">Post a Job</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="dashboard-settings.html">Settings</a></li>
                                </ul>
                            </li>

    
                        </ul>
                    </nav>
                    <div class="clearfix"></div>
                    <!-- Main Navigation / End -->
                    
                </div>
                <!-- Left Side Content / End -->
                @if(isset($_COOKIE['UID']))
                    @include('user.templates.nav.logged-in-nav')
                @else
                    @include('user.templates.nav.logged-out-nav')
                @endif
    
            </div>
        </div>
        <!-- Header / End -->
    
    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->