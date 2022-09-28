@extends('user.master')
@section('content')
    
    <div class="intro-banner dark-overlay" data-background-image="images/home-background-02.jpg">
    
        <div class="container">
            
            <!-- Intro Headline -->
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-headline">
                        <h3>
                            <strong>Hire experts freelancers for any job, any time.</strong>
                            <br>
                            <span>Huge community of designers, developers and creatives ready for your project.</span>
                        </h3>
                    </div>
                </div>
            </div>
            
            <!-- Search Bar -->
            <div class="row">
                <div class="col-md-12">
                    <div class="intro-banner-search-form margin-top-95">
    
                        <!-- Search Field -->
                        <div class="intro-search-field with-label">
                            <label for="intro-keywords" class="field-title ripple-effect">What you need done?</label>
                            <input id="intro-keywords" type="text" placeholder="e.g. build me a website">
                        </div>
    
                        <!-- Button -->
                        <div class="intro-search-button">
                            <button class="button ripple-effect" onclick="window.location.href='freelancers-grid-layout-full-page.html'">Search</button>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Stats -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="intro-stats margin-top-45 hide-under-992px">
                        <li>
                            <strong class="counter">1,586</strong>
                            <span>Jobs Posted</span>
                        </li>
                        <li>
                            <strong class="counter">3,543</strong>
                            <span>Tasks Posted</span>
                        </li>
                        <li>
                            <strong class="counter">1,232</strong>
                            <span>Freelancers</span>
                        </li>
                    </ul>
                </div>
            </div>
    
        </div>
    <div class="background-image-container" style="background-image: url(&quot;images/home-background-02.jpg&quot;);"></div></div>
    
    <!-- Highest Rated Freelancers -->
    <div class="section gray padding-top-65 padding-bottom-70 full-width-carousel-fix">
        <div class="container">
            <div class="row">
    
                <div class="col-xl-12">
                    <!-- Section Headline -->
                    <div class="section-headline margin-top-0 margin-bottom-25">
                        <h3>Highest Rated Freelancers</h3>
                        <a href="freelancers-grid-layout.html" class="headline-link">Browse All Freelancers</a>
                    </div>
                </div>
    
                <div class="col-xl-12">
                    <div class="default-slick-carousel freelancers-container freelancers-grid-layout">
    
                        <!--Freelancer -->
                        <div class="freelancer">
    
                            <!-- Overview -->
                            <div class="freelancer-overview">
                                <div class="freelancer-overview-inner">
                                    
                                    <!-- Bookmark Icon -->
                                    <span class="bookmark-icon"></span>
                                    
                                    <!-- Avatar -->
                                    <div class="freelancer-avatar">
                                        <div class="verified-badge"></div>
                                        <a href="single-freelancer-profile.html"><img src="images/user-avatar-big-01.jpg" alt=""></a>
                                    </div>
    
                                    <!-- Name -->
                                    <div class="freelancer-name">
                                        <h4><a href="single-freelancer-profile.html">Tom Smith <img class="flag" src="images/flags/gb.svg" alt="" title="United Kingdom" data-tippy-placement="top"></a></h4>
                                        <span>UI/UX Designer</span>
                                    </div>
    
                                    <!-- Rating -->
                                    <div class="freelancer-rating">
                                        <div class="star-rating" data-rating="5.0"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Details -->
                            <div class="freelancer-details">
                                <div class="freelancer-details-list">
                                    <ul>
                                        <li>Rate <strong>$60 / hr</strong></li>
                                        <li>Job Success <strong>95%</strong></li>
                                    </ul>
                                </div>
                                <a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
                            </div>
                        </div>
                        <!-- Freelancer / End -->
    
                        <!--Freelancer -->
                        <div class="freelancer">
    
                            <!-- Overview -->
                            <div class="freelancer-overview">
                                <div class="freelancer-overview-inner">
                                    
                                    <!-- Bookmark Icon -->
                                    <span class="bookmark-icon"></span>
                                    
                                    <!-- Avatar -->
                                    <div class="freelancer-avatar">
                                        <div class="verified-badge"></div>
                                        <a href="single-freelancer-profile.html"><img src="images/user-avatar-big-02.jpg" alt=""></a>
                                    </div>
    
                                    <!-- Name -->
                                    <div class="freelancer-name">
                                        <h4><a href="#">David Peterson <img class="flag" src="images/flags/de.svg" alt="" title="Germany" data-tippy-placement="top"></a></h4>
                                        <span>iOS Expert + Node Dev</span>
                                    </div>
    
                                    <!-- Rating -->
                                    <div class="freelancer-rating">
                                        <div class="star-rating" data-rating="5.0"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Details -->
                            <div class="freelancer-details">
                                <div class="freelancer-details-list">
                                    <ul>
                                        <li>Rate <strong>$40 / hr</strong></li>
                                        <li>Job Success <strong>88%</strong></li>
                                    </ul>
                                </div>
                                <a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
                            </div>
                        </div>
                        <!-- Freelancer / End -->
    
                        <!--Freelancer -->
                        <div class="freelancer">
    
                            <!-- Overview -->
                            <div class="freelancer-overview">
                                <div class="freelancer-overview-inner">
                                    <!-- Bookmark Icon -->
                                    <span class="bookmark-icon"></span>
                                    
                                    <!-- Avatar -->
                                    <div class="freelancer-avatar">
                                        <a href="single-freelancer-profile.html"><img src="images/user-avatar-placeholder.png" alt=""></a>
                                    </div>
    
                                    <!-- Name -->
                                    <div class="freelancer-name">
                                        <h4><a href="#">Marcin Kowalski <img class="flag" src="images/flags/pl.svg" alt="" title="Poland" data-tippy-placement="top"></a></h4>
                                        <span>Front-End Developer</span>
                                    </div>
    
                                    <!-- Rating -->
                                    <div class="freelancer-rating">
                                        <div class="star-rating" data-rating="4.9"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Details -->
                            <div class="freelancer-details">
                                <div class="freelancer-details-list">
                                    <ul>
                                        <li>Rate <strong>$50 / hr</strong></li>
                                        <li>Job Success <strong>100%</strong></li>
                                    </ul>
                                </div>
                                <a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
                            </div>
                        </div>
                        <!-- Freelancer / End -->
    
                        <!--Freelancer -->
                        <div class="freelancer">
    
                            <!-- Overview -->
                            <div class="freelancer-overview">
                                    <div class="freelancer-overview-inner">
                                    <!-- Bookmark Icon -->
                                    <span class="bookmark-icon"></span>
                                    
                                    <!-- Avatar -->
                                    <div class="freelancer-avatar">
                                        <div class="verified-badge"></div>
                                        <a href="single-freelancer-profile.html"><img src="images/user-avatar-big-03.jpg" alt=""></a>
                                    </div>
    
                                    <!-- Name -->
                                    <div class="freelancer-name">
                                        <h4><a href="#">Sindy Forest <img class="flag" src="images/flags/au.svg" alt="" title="Australia" data-tippy-placement="top"></a></h4>
                                        <span>Magento Certified Developer</span>
                                    </div>
    
                                    <!-- Rating -->
                                    <div class="freelancer-rating">
                                        <div class="star-rating" data-rating="5.0"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Details -->
                            <div class="freelancer-details">
                                <div class="freelancer-details-list">
                                    <ul>
                                        <li>Rate <strong>$70 / hr</strong></li>
                                        <li>Job Success <strong>100%</strong></li>
                                    </ul>
                                </div>
                                <a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
                            </div>
                        </div>
                        <!-- Freelancer / End -->
                        
                        <!--Freelancer -->
                        <div class="freelancer">
    
                            <!-- Overview -->
                            <div class="freelancer-overview">
                                    <div class="freelancer-overview-inner">
                                    <!-- Bookmark Icon -->
                                    <span class="bookmark-icon"></span>
                                    
                                    <!-- Avatar -->
                                    <div class="freelancer-avatar">
                                        <a href="single-freelancer-profile.html"><img src="images/user-avatar-placeholder.png" alt=""></a>
                                    </div>
    
                                    <!-- Name -->
                                    <div class="freelancer-name">
                                        <h4><a href="#">Sebastiano Piccio <img class="flag" src="images/flags/it.svg" alt="" title="Italy" data-tippy-placement="top"></a></h4>
                                        <span>Laravel Dev</span>
                                    </div>
    
                                    <!-- Rating -->
                                    <div class="freelancer-rating">
                                        <div class="star-rating" data-rating="4.5"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Details -->
                            <div class="freelancer-details">
                                <div class="freelancer-details-list">
                                    <ul>
                                        <li>Rate <strong>$80 / hr</strong></li>
                                        <li>Job Success <strong>89%</strong></li>
                                    </ul>
                                </div>
                                <a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
                            </div>
                        </div>
                        <!-- Freelancer / End -->
                                    
                        <!--Freelancer -->
                        <div class="freelancer">
    
                            <!-- Overview -->
                            <div class="freelancer-overview">
                                    <div class="freelancer-overview-inner">
                                    <!-- Bookmark Icon -->
                                    <span class="bookmark-icon"></span>
                                    
                                    <!-- Avatar -->
                                    <div class="freelancer-avatar">
                                        <a href="single-freelancer-profile.html"><img src="images/user-avatar-placeholder.png" alt=""></a>
                                    </div>
    
                                    <!-- Name -->
                                    <div class="freelancer-name">
                                        <h4><a href="#">Gabriel Lagueux <img class="flag" src="images/flags/fr.svg" alt="" title="France" data-tippy-placement="top"></a></h4>
                                        <span>WordPress Expert</span>
                                    </div>
    
                                    <!-- Rating -->
                                    <div class="freelancer-rating">
                                        <div class="star-rating" data-rating="5.0"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Details -->
                            <div class="freelancer-details">
                                <div class="freelancer-details-list">
                                    <ul>
                                        <li>Rate <strong>$50 / hr</strong></li>
                                        <li>Job Success <strong>100%</strong></li>
                                    </ul>
                                </div>
                                <a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
                            </div>
                        </div>
                        <!-- Freelancer / End -->
    
    
                    </div>
                </div>
    
            </div>
        </div>
    </div>
    <!-- Highest Rated Freelancers / End-->
    <!-- Content
    ================================================== -->
    <div class="section margin-top-65">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
    
                    <div class="section-headline centered margin-bottom-15">
                        <h3>Popular Job Categories</h3>
                    </div>
    
                    <!-- Category Boxes Container -->
                    <div class="categories-container">
    
                        <!-- Category Box -->
                        <a href="jobs-grid-layout-full-page.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-file-code-o"></i>
                            </div>
                            <div class="category-box-counter">612</div>
                            <div class="category-box-content">
                                <h3>Web &amp; Software Dev</h3>
                                <p>Software Engineer, Web / Mobile Developer &amp; More</p>
                            </div>
                        </a>
    
                        <!-- Category Box -->
                        <a href="jobs-list-layout-full-page-map.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-cloud-upload"></i>
                            </div>
                            <div class="category-box-counter">113</div>
                            <div class="category-box-content">
                                <h3>Data Science &amp; Analitycs</h3>
                                <p>Data Specialist / Scientist, Data Analyst &amp; More</p>
                            </div>
                        </a>
    
                        <!-- Category Box -->
                        <a href="jobs-list-layout-full-page-map.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-suitcase"></i>
                            </div>
                            <div class="category-box-counter">186</div>
                            <div class="category-box-content">
                                <h3>Accounting &amp; Consulting</h3>
                                <p>Auditor, Accountant, Fnancial Analyst &amp; More</p>
                            </div>
                        </a>
    
                        <!-- Category Box -->
                        <a href="jobs-list-layout-1.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-pencil"></i>
                            </div>
                            <div class="category-box-counter">298</div>
                            <div class="category-box-content">
                                <h3>Writing &amp; Translations</h3>
                                <p>Copywriter, Creative Writer, Translator &amp; More</p>
                            </div>
                        </a>
    
                        <!-- Category Box -->
                        <a href="jobs-list-layout-2.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-pie-chart"></i>
                            </div>
                            <div class="category-box-counter">549</div>						
                            <div class="category-box-content">
                                <h3>Sales &amp; Marketing</h3>
                                <p>Brand Manager, Marketing Coordinator &amp; More</p>
                            </div>
                        </a>
    
                        <!-- Category Box -->
                        <a href="jobs-list-layout-1.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-image"></i>
                            </div>
                            <div class="category-box-counter">873</div>
                            <div class="category-box-content">
                                <h3>Graphics &amp; Design</h3>
                                <p>Creative Director, Web Designer &amp; More</p>
                            </div>
                        </a>
    
                        <!-- Category Box -->
                        <a href="jobs-list-layout-2.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-bullhorn"></i>
                            </div>
                            <div class="category-box-counter">125</div>
                            <div class="category-box-content">
                                <h3>Digital Marketing</h3>
                                <p>Darketing Analyst, Social Profile Admin &amp; More</p>
                            </div>
                        </a>
    
                        <!-- Category Box -->
                        <a href="jobs-grid-layout-full-page.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-graduation-cap"></i>
                            </div>
                            <div class="category-box-counter">445</div>
                            <div class="category-box-content">
                                <h3>Education &amp; Training</h3>
                                <p>Advisor, Coach, Education Coordinator &amp; More</p>
                            </div>
                        </a>
    
                    </div>
    
                </div>
            </div>
        </div>
    </div>

    
    <div class="section padding-top-65 padding-bottom-65">
        <div class="container">
            <div class="row">
    
                <div class="col-xl-12">
                    <!-- Section Headline -->
                    <div class="section-headline centered margin-top-0 margin-bottom-5">
                        <h3>How It Works?</h3>
                    </div>
                </div>
                
                <div class="col-xl-4 col-md-4">
                    <!-- Icon Box -->
                    <div class="icon-box with-line">
                        <!-- Icon -->
                        <div class="icon-box-circle">
                            <div class="icon-box-circle-inner">
                                <i class="icon-line-awesome-lock"></i>
                                <div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
                            </div>
                        </div>
                        <h3>Create an Account</h3>
                        <p>Bring to the table win-win survival strategies to ensure proactive domination going forward.</p>
                    </div>
                </div>
    
                <div class="col-xl-4 col-md-4">
                    <!-- Icon Box -->
                    <div class="icon-box with-line">
                        <!-- Icon -->
                        <div class="icon-box-circle">
                            <div class="icon-box-circle-inner">
                                <i class="icon-line-awesome-legal"></i>
                                <div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
                            </div>
                        </div>
                        <h3>Post a Task</h3>
                        <p>Efficiently unleash cross-media information without. Quickly maximize return on investment.</p>
                    </div>
                </div>
    
                <div class="col-xl-4 col-md-4">
                    <!-- Icon Box -->
                    <div class="icon-box">
                        <!-- Icon -->
                        <div class="icon-box-circle">
                            <div class="icon-box-circle-inner">
                                <i class=" icon-line-awesome-trophy"></i>
                                <div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
                            </div>
                        </div>
                        <h3>Choose an Expert</h3>
                        <p>Nanotechnology immersion along the information highway will close the loop on focusing solely.</p>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
    
    <!-- Membership Plans -->
    <div class="section padding-top-60 padding-bottom-75">
        <div class="container">
            <div class="row">
    
                <div class="col-xl-12">
                    <!-- Section Headline -->
                    <div class="section-headline centered margin-top-0 margin-bottom-35">
                        <h3>Membership Plans</h3>
                    </div>
                </div>
    
    
                <div class="col-xl-12">
    
                    <!-- Billing Cycle  -->
                    <div class="billing-cycle-radios margin-bottom-70">
                        <div class="radio billed-monthly-radio">
                            <input id="radio-5" name="radio-payment-type" type="radio" checked>
                            <label for="radio-5"><span class="radio-label"></span> Billed Monthly</label>
                        </div>
    
                        <div class="radio billed-yearly-radio">
                            <input id="radio-6" name="radio-payment-type" type="radio">
                            <label for="radio-6"><span class="radio-label"></span> Billed Yearly <span class="small-label">Save 10%</span></label>
                        </div>
                    </div>
    
                    <!-- Pricing Plans Container -->
                    <div class="pricing-plans-container">
    
                        <!-- Plan -->
                        <div class="pricing-plan">
                            <h3>Basic Plan</h3>
                            <p class="margin-top-10">One time fee for one listing or task highlighted in search results.</p>
                            <div class="pricing-plan-label billed-monthly-label"><strong>$19</strong>/ monthly</div>
                            <div class="pricing-plan-label billed-yearly-label"><strong>$205</strong>/ yearly</div>
                            <div class="pricing-plan-features">
                                <strong>Features of Basic Plan</strong>
                                <ul>
                                    <li>1 Listing</li>
                                    <li>30 Days Visibility</li>
                                    <li>Highlighted in Search Results</li>
                                </ul>
                            </div>
                            <a href="pages-checkout-page.html" class="button full-width margin-top-20">Buy Now</a>
                        </div>
    
                        <!-- Plan -->
                        <div class="pricing-plan recommended">
                            <div class="recommended-badge">Recommended</div>
                            <h3>Standard Plan</h3>
                            <p class="margin-top-10">One time fee for one listing or task highlighted in search results.</p>
                            <div class="pricing-plan-label billed-monthly-label"><strong>$49</strong>/ monthly</div>
                            <div class="pricing-plan-label billed-yearly-label"><strong>$529</strong>/ yearly</div>
                            <div class="pricing-plan-features">
                                <strong>Features of Standard Plan</strong>
                                <ul>
                                    <li>5 Listings</li>
                                    <li>60 Days Visibility</li>
                                    <li>Highlighted in Search Results</li>
                                </ul>
                            </div>
                            <a href="pages-checkout-page.html" class="button full-width margin-top-20">Buy Now</a>
                        </div>
    
                        <!-- Plan -->
                        <div class="pricing-plan">
                            <h3>Extended Plan</h3>
                            <p class="margin-top-10">One time fee for one listing or task highlighted in search results.</p>
                            <div class="pricing-plan-label billed-monthly-label"><strong>$99</strong>/ monthly</div>
                            <div class="pricing-plan-label billed-yearly-label"><strong>$1069</strong>/ yearly</div>
                            <div class="pricing-plan-features">
                                <strong>Features of Extended Plan</strong>
                                <ul>
                                    <li>Unlimited Listings Listing</li>
                                    <li>90 Days Visibility</li>
                                    <li>Highlighted in Search Results</li>
                                </ul>
                            </div>
                            <a href="pages-checkout-page.html" class="button full-width margin-top-20">Buy Now</a>
                        </div>
                    </div>
    
                </div>
    
            </div>
        </div>
    </div>
    <!-- Membership Plans / End-->
    
    <div class="section padding-top-70 padding-bottom-75">
        <div class="container">
            <div class="row">
    
                <div class="col-xl-12">
                    <div class="counters-container">
                        
                        <!-- Counter -->
                        <div class="single-counter">
                            <i class="icon-line-awesome-suitcase"></i>
                            <div class="counter-inner">
                                <h3><span class="counter">1,586</span></h3>
                                <span class="counter-title">Jobs Posted</span>
                            </div>
                        </div>
    
                        <!-- Counter -->
                        <div class="single-counter">
                            <i class="icon-line-awesome-legal"></i>
                            <div class="counter-inner">
                                <h3><span class="counter">3,543</span></h3>
                                <span class="counter-title">Tasks Posted</span>
                            </div>
                        </div>
    
                        <!-- Counter -->
                        <div class="single-counter">
                            <i class="icon-line-awesome-user"></i>
                            <div class="counter-inner">
                                <h3><span class="counter">2,413</span></h3>
                                <span class="counter-title">Active Members</span>
                            </div>
                        </div>
    
                        <!-- Counter -->
                        <div class="single-counter">
                            <i class="icon-line-awesome-trophy"></i>
                            <div class="counter-inner">
                                <h3><span class="counter">99</span>%</h3>
                                <span class="counter-title">Satisfaction Rate</span>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </div>
        
@endsection
    
