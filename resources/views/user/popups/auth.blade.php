<!-- Sign In Popup
================================================== -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#login">Log In</a></li>
			<li><a href="#register">Register</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Login -->
			<div class="popup-tab-content" id="login">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>We're glad to see you again!</h3>
					<span>Don't have an account? <a href="#" class="register-tab">Sign Up!</a></span>
				</div>
					
				<!-- Form -->
				<form method="post" id="login-form">
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="email" id="emailaddress" placeholder="Email / Phone No" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password" id="password" placeholder="Password" required/>
					</div>
					@csrf
					<a href="#" class="forgot-password">Forgot Password?</a>
				</form>
				
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect" type="submit" form="login-form" id="login-button">Log In <i class="icon-material-outline-arrow-right-alt"></i></button>
				<div class="alert" id="loginmsg"></div>
				<!-- Social Login -->
				<div class="social-login-separator"><span>or</span></div>
				<div class="social-login-buttons">
					<a href="#" class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Log In via Facebook</a>
					<a href="{{route('auth.google')}}" class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Log In via Google+</a>
				</div>

			</div>

			<!-- Register -->
			<div class="popup-tab-content" id="register">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Let's create your account!</h3>
				</div>
					
				<!-- Form -->
				<form  method="post" id="registeraccountform">
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="email" class="input-text with-border" name="email" id="emailaddress-register" placeholder="Email Address" required/>
						<span id="email_error" class="alert alert-danger field_error"></span>
					</div>
					

					<div class="input-with-icon-left">
						<i class="icon-line-awesome-mobile-phone"></i>
						<input type="number" class="input-text with-border" name="mobile" id="mobile-register" placeholder="Phone No" required/>
						<span id="mobile_error" class="alert alert-danger  field_error"></span>
					</div>
					
					<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password" id="password-register" placeholder="Password" required/>
						<span id="password_error" class="alert alert-danger  field_error"></span>
					</div>
					<span id="password_error" class="alert alert-danger"></span>
					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="cpassword" id="password-repeat-register" placeholder="Repeat Password" required/>
						<span id="cpassword_error" class="alert alert-danger field_error"></span>
					</div>
					
				
				@csrf
				<!-- Button -->
				<button class="margin-top-10 button full-width button-sliding-icon ripple-effect" type="submit" form="registeraccountform" id="registerbutton">Register <i class="icon-material-outline-arrow-right-alt"></i></button>
				</form>
				<div id="registration_alert"></div>
				<!-- Social Login -->
				<div class="social-login-separator"><span>or</span></div>
				<div class="social-login-buttons">
					<a href="#" class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Register via Facebook</a>
					<a href="{{route('auth.google')}}" class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Register via Google+</a>
				</div>

			</div>

		</div>
	</div>
</div>
<!-- Sign In Popup / End -->