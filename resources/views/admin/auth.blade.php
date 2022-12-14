<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>


/* With Border */input,
input[type="text"],
input[type="password"],
input[type="email"],
input[type="number"],
textarea,
select {
	height: 48px;
	line-height: 48px;
	padding: 0 20px;
	outline: none;
	font-size: 16px;
	color: #808080;
	margin: 0 0 16px 0;
	max-width: 100%;
	width: 100%;
	box-sizing: border-box;
	display: block;
	background-color: #fff;
	font-weight: 500;
	opacity: 1;
	border-radius: 4px;
	border: none;
	box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.12);
}

select {
	padding: 15px 18px;
	cursor: pointer;
}

input {
	-webkit-transition: all 0.1s ease-in-out;
	-moz-transition: all 0.1s ease-in-out;
	-o-transition: all 0.1s ease-in-out;
	-ms-transition: all 0.1s ease-in-out;
	transition: all 0.1s ease-in-out;
}

input:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="email"]:focus,
input[type="number"]:focus,
textarea:focus {
	color: #808080;
	transition: box-shadow 0.2s !important;
	opacity: 1;
	border: none;
	box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.12);
}

input:-webkit-autofill:focus,
input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0 30px #fff inset !important;
    -webkit-text-fill-color: #808080 !important;
}

/* With Border */
input.with-border,
input[type="text"].with-border,
input[type="password"].with-border,
input[type="email"].with-border,
input[type="number"].with-border,
textarea.with-border,
select.with-border {
	border: 1px solid #e0e0e0;
	box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.05);
}
input.with-border:focus,
input[type="text"].with-border:focus,
input[type="password"].with-border:focus,
input[type="email"].with-border:focus,
input[type="number"].with-border:focus,
textarea.with-border:focus {
	border: 1px solid #e0e0e0;
	box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.08);
}

input[type="submit"] {
	border: none;
	padding: 11px 18px;
	width: auto;
}

input[type="checkbox"] { display: inline; }

input[type="radio"] {
	width: 15px;
	height: 15px;
	cursor: pointer;
	box-shadow: none;
}
.mfp-bg {
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	z-index: 2000;
	overflow: hidden;
	position: fixed;
	background: #111;
}

.mfp-wrap {
	top: -10px;
	left: 0;
	width: 100%;
	height: 100%;
	z-index: 2001;
	position: fixed;
	outline: none !important;
	-webkit-backface-visibility: hidden;
}

.mfp-container {
	height: 100%;
	text-align: center;
	position: absolute;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	padding: 0 18px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

.mfp-container:before {
	content: '';
	display: inline-block;
	height: 100%;
	vertical-align: middle;
}

.mfp-align-top .mfp-container:before {
	display: none;
}

.mfp-content {
	position: relative;
	display: inline-block;
	vertical-align: middle;
	margin: 0 auto;
	text-align: left;
	z-index: 505;
}

.mfp-inline-holder .mfp-content,
.mfp-ajax-holder .mfp-content {
	width: 100%;
	cursor: auto;
}

.mfp-ajax-cur {
	cursor: progress;
}

.mfp-zoom-out-cur,
.mfp-zoom-out-cur .mfp-image-holder .mfp-close {
	cursor: -moz-zoom-out;
	cursor: -webkit-zoom-out;
	cursor: zoom-out;
}

.mfp-zoom {
	cursor: pointer;
	cursor: -webkit-zoom-in;
	cursor: -moz-zoom-in;
	cursor: zoom-in;
}

.mfp-auto-cursor .mfp-content {
	cursor: auto;
}

.mfp-close,
.mfp-arrow,
.mfp-preloader,
.mfp-counter {
	-webkit-user-select: none;
	-moz-user-select: none;
	user-select: none;
 }

.mfp-loading.mfp-figure {
	display: none;
}

.mfp-hide {
	display: none !important;
}

.mfp-preloader {
	color: #aaa;
	position: absolute;
	top: 50%;
	width: auto;
	text-align: center;
	margin-top: -0.8em;
	left: 8px;
	right: 8px;
	z-index: 504;
}

.mfp-preloader a {
	color: #cccccc;
}

.mfp-preloader a:hover {
	color: #fff;
}

.mfp-s-ready .mfp-preloader {
	display: none;
}

.mfp-s-error .mfp-content {
	display: none;
}

.mfp-s-loading .mfp-arrow {
	display: none;
}

button.mfp-close,
button.mfp-arrow {
	overflow: visible;
	cursor: pointer;
	border: 0;
	-webkit-appearance: none;
	display: block;
	padding: 0;
	z-index: 506;
}

.mfp-image-holder .mfp-close,
.mfp-iframe-holder .mfp-close {
	right: 0px;
	top: -40px;
}

/* Close Button */
.og-close,
button.mfp-close {
	position: absolute;
	width: 45px;
	height: 45px;
	top: -20px;
	display: block;
	right: -12px;
	cursor: pointer !important;
	z-index: 9999;
	color: #fff;
	-webkit-transition: all 0.2s ease-in-out;
	-moz-transition: all 0.2s ease-in-out;
	-o-transition: all 0.2s ease-in-out;
	-ms-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
	border-radius: 50%;
	margin: 0px;
	background-color: transparent;
	outline: none;	transform: translate3d(0,0,0);
}

.mfp-iframe-holder .mfp-close {
	top: -50px;
	right: -12px;
	transform: translate3d(0,0,0);
}

.mfp-gallery .mfp-close {
	top: 20px;
	right: 10px;
}

.mfp-gallery  .mfp-content .mfp-close {
	display: none;
}

.mfp-close::after,
.mfp-close::before {
    top: 0px;
}

.og-close {
	margin: 17px;
	right: 10px;
	background: transparent;
	color: #222;
}

.og-close:before,
.mfp-close:before {
	font-family: "Feather-Icons";
	font-size: 20px;
	top: 2px;
	left: 0;
	position: relative;
	height: 10px;
}

.og-close:before,
.mfp-close:before {
	content:"\ea02";
}

#small-dialog .mfp-close,
#small-dialog-1 .mfp-close,
#small-dialog-2 .mfp-close,
#small-dialog-3 .mfp-close,
#small-dialog-4 .mfp-close,
#sign-in-dialog, .mfp-close,
.mfp-close:hover {
	color: #fff;
}


/* Popup close button*/
#sign-in-dialog .mfp-close,
#small-dialog-1 .mfp-close,
#small-dialog-2 .mfp-close,
#small-dialog-3 .mfp-close,
#small-dialog-4 .mfp-close,
#small-dialog .mfp-close {
	color: #666;
	background-color: #e4e4e4;
	border-radius: 4px;
	top: 28px;
	right: 40px;
    width: 40px;
    height: 40px;
}

#sign-in-dialog .mfp-close:hover,
#small-dialog-1 .mfp-close:hover,
#small-dialog-2 .mfp-close:hover,
#small-dialog-3 .mfp-close:hover,
#small-dialog-4 .mfp-close:hover,
#small-dialog .mfp-close:hover {
	color: #fff;
	background-color: #66676b;
}

.small-dialog-content input[type=submit] {
	width: 100%;
	margin-top: 26px;
	margin-bottom: 10px;
}

.small-dialog-content .divider {
	display: inline-block;
	width: 100%;
	margin-top: 15px;
	padding-bottom: 0;
}

.small-dialog-header {
	font-size: 22px;
	width: calc(100% + 80px);
	position: relative;
	left: -40px;
	top: 0;
	border-radius: 4px 4px 0 0;
	display: inline-block;
	background-color: #f6f6f6;
	padding: 35px 40px;
	margin-bottom: 40px;
}

.small-dialog-header h3 {
	padding: 0;
	margin: 0;
	font-size: 23px;
}


.mfp-counter {
	position: absolute;
	top: 0;
	right: 0;
	color: #aaa;
	font-size: 13px;
	line-height: 18px;
}

.mfp-arrow {
	opacity: 1;
	margin: 0 20px;
	top: 50%;
	transform: translateY(-50%);
	z-index: 9999;
	color: #fff;
	-webkit-transition: all 0.2s ease-in-out;
	-moz-transition: all 0.2s ease-in-out;
	-o-transition: all 0.2s ease-in-out;
	-ms-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
	cursor: pointer;
	width: 60px;
	height: 60px;
	position: absolute;
	display: block;
	z-index: 100;
	overflow: hidden;
	background: rgba(255,255,255,0.15);
	border-radius: 50%;
	outline: none;
}

.mfp-arrow:hover {
	background: #66676b;
	color: #fff;
}

.mfp-arrow.mfp-arrow-left,
.mfp-arrow.mfp-arrow-right {
	font-family: "simple-line-icons";
	font-size: 20px;
}

.mfp-arrow.mfp-arrow-right { right: 15px; }

.mfp-arrow.mfp-arrow-left:before { content: "\e605"; left: -1px; top: 0px; position: relative; }
.mfp-arrow.mfp-arrow-right:before { content: "\e606"; left: 1px; top: 0px; position: relative; }

.mfp-content:hover .mfp-arrow {
	opacity: 1;
}

.mfp-iframe-holder {
	padding-top: 40px;
	padding-bottom: 40px;
}

.mfp-iframe-holder .mfp-content {
	line-height: 0;
	width: 100%;
	max-width: 1180px;
}

.mfp-iframe-scaler {
	width: 100%;
	height: 0;
	overflow: hidden;
	padding-top: 54%;
}

.mfp-iframe-scaler iframe {
	position: absolute;
	display: block;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
	background: black;
}

/* Popup */
#sign-in-dialog,
#small-dialog-1,
#small-dialog-2,
#small-dialog-3,
#small-dialog-4,
#small-dialog {
	background: #fff;
	padding: 40px;
	padding-top: 0;
	text-align: left;
	max-width: 610px;
	margin: 40px auto;
	position: relative;
	box-sizing:border-box;
	border-radius: 4px;
	max-width: 550px;
}


#sign-in-dialog-1 span.line,
#sign-in-dialog-2 span.line,
#sign-in-dialog-3 span.line,
#sign-in-dialog-4 span.line,
#sign-in-dialog span.line,
#small-dialog span.line {padding-top: 0;}

.my-mfp-zoom-in .zoom-anim-dialog {
	opacity: 0;
	-webkit-transition: all 0.2s ease-in-out;
	-moz-transition: all 0.2s ease-in-out;
	-o-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
	-webkit-transform: scale(0.8);
	-moz-transform: scale(0.8);
	-ms-transform: scale(0.8);
	-o-transform: scale(0.8);
	transform: scale(0.8);
}

/* animate in */
.my-mfp-zoom-in.mfp-ready .zoom-anim-dialog {
	opacity: 1;
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-ms-transform: scale(1);
	-o-transform: scale(1);
	transform: scale(1);
}

/* animate out */
.my-mfp-zoom-in.mfp-removing .zoom-anim-dialog {
	-webkit-transform: scale(0.8);
	-moz-transform: scale(0.8);
	-ms-transform: scale(0.8);
	-o-transform: scale(0.8);
	transform: scale(0.8);
	opacity: 0;
}

/* Dark overlay, start state */
.my-mfp-zoom-in.mfp-bg {
	opacity: 0.001; /* Chrome opacity transition bug */
	-webkit-transition: opacity 0.3s ease-out;
	-moz-transition: opacity 0.3s ease-out;
	-o-transition: opacity 0.3s ease-out;
	transition: opacity 0.3s ease-out;
}
/* animate in */
.my-mfp-zoom-in.mfp-ready.mfp-bg {
	opacity: 0.85;
}
/* animate out */
.my-mfp-zoom-in.mfp-removing.mfp-bg {
	opacity: 0;
}
.dupa {
	display: block;
	height: 30px;
}


/* Main image in popup */
img.mfp-img {
	width: auto;
	max-width: 100%;
	height: auto;
	display: block;
	line-height: 0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	margin: 40px auto;
	border-radius: 4px;
}

/* The shadow behind the image */
.mfp-figure:after {
	content: '';
	position: absolute;
	left: 0;
	top: 40px;
	bottom: 40px;
	display: block;
	right: 0;
	width: auto;
	height: auto;
	z-index: -1;
	box-shadow: 0 0 18px rgba(11,11,11, 0.6);
}

.mfp-figure {
	line-height: 0;
}

.mfp-bottom-bar {
	margin-top: -30px;
	position: absolute;
	top: 100%;
	left: 0;
	width: 100%;
	cursor: auto;
}

.mfp-title {
	text-align: left;
	line-height: 18px;
	color: #f3f3f3;
	word-break: break-word;
	padding-right: 36px;
}

.mfp-figure small {
	color: #bdbdbd;
	display: block;
	font-size: 12px;
	line-height: 14px;
}

.mfp-image-holder .mfp-content {
	max-width: 100%;
}

.mfp-gallery .mfp-image-holder .mfp-figure {
	cursor: pointer;
}


/* Media Queries for Magnific Popup */
@media screen and (max-width: 800px) and (orientation: landscape), screen and (max-height: 300px) {

  .mfp-img-mobile .mfp-image-holder {
	padding-left: 0;
	padding-right: 0;
   }

  .mfp-img-mobile img.mfp-img {
	padding: 0
   }

  /* The shadow behind the image */
  .mfp-img-mobile .mfp-figure:after {
	top: 0;
	bottom: 0;
   }

  .mfp-img-mobile .mfp-bottom-bar {
	background: rgba(0, 0, 0, 0.6);
	bottom: 0;
	margin: 0;
	top: auto;
	padding: 3px 5px;
	position: fixed;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
   }

  .mfp-img-mobile .mfp-bottom-bar:empty {
	padding: 0;
   }

  .mfp-img-mobile .mfp-counter {
	right: 5px;
	top: 3px;
   }

  .mfp-img-mobile .mfp-close {
	top: 0;
	right: 0;
	width: 35px;
	height: 35px;
	line-height: 35px;
	background: rgba(0, 0, 0, 0.6);
	position: fixed;
	text-align: center;
	padding: 0;
   }

  .mfp-img-mobile .mfp-figure small {
	display: inline;
	margin-left: 5px;
   }
}


.mfp-ie7 .mfp-img {
	padding: 0;
}

.mfp-ie7 .mfp-bottom-bar {
	width: 600px;
	left: 50%;
	margin-left: -300px;
	margin-top: 5px;
	padding-bottom: 5px;
}

.mfp-ie7 .mfp-container {
	padding: 0;
}

.mfp-ie7 .mfp-content {
	padding-top: 44px;
}

.mfp-ie7 .mfp-close {
	top: 0;
	right: 0;
	padding-top: 0;
}

.mfp-fade.mfp-bg {
	opacity: 0;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	transition: all 0.2s ease-out;
}

.mfp-fade.mfp-bg.mfp-ready {
	opacity: 0.92;
	background-color: #111;
}

.mfp-fade.mfp-bg.mfp-removing {
	opacity: 0;
}

.mfp-fade.mfp-wrap .mfp-content {
	opacity: 0;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	transition: all 0.2s ease-out;
}

.mfp-fade.mfp-wrap.mfp-ready .mfp-content {
	opacity: 1;
}

.mfp-fade.mfp-wrap.mfp-removing .mfp-content {
	opacity: 0;
}

/* Feedback Yes No */
.feedback-yes-no strong{
	font-size: 16px;
	font-weight: 600;
	color: #333;
	display: block;
}

.feedback-yes-no .radio {
	margin-right: 15px;
}

.feedback-yes-no { margin-bottom: 15px; }

.feedback-yes-no .leave-rating {
	transform: scale(1.1);
	margin: 3px 0 10px 3px;
}


/* ---------------------------------- */
/* Popup tabs
------------------------------------- */
.popup-tabs-nav {
	list-style: none;
    margin: 0;
    padding: 0;
    width: 100%;
    display: block;
    height: 62px;
    background: #f8f8f8;
    border-radius: 4px 4px 0 0;
    border-bottom: 1px solid #e0e0e0;
}

.popup-tabs-nav li {
	float: left;
	line-height: 62px;
	height: 62px;
	padding: 0;
	margin-right: 0;
	position: relative;
}

.popup-tabs-nav li:first-child a {
	border-radius: 4px 0 0 0;
}

.popup-tabs-nav li a,
.popup-tab-reviews {
	-webkit-transition: all 0.25s ease-in-out;
	transition: all 0.25s ease-in-out;
}

.popup-tabs-nav li a {
	border: none;
	color: #777;
	display: inline-block;
	outline: none;
	padding: 0;
	text-decoration: none;
	font-size: 16px;
	z-index: 10;
	position: relative;
	height: 100%;
	padding: 0 30px;
	border-right: 1px solid transparent;
	border-left: 1px solid transparent;
	transition: all 0.3s, font-weight 0s;
	border-right: 1px solid #e0e0e0;
}

.popup-tabs-nav li.active {
	background-color: #fff;
	position: relative;
}

.popup-tabs-nav li a:hover {
	background-color: #f3f3f3;
	height: calc(100% - 1px);
	color: #333;
}

.popup-tabs-nav li:last-child a:hover {
	border-right: 1px solid #e0e0e0;
}

.popup-tabs-nav li.active a:hover,
.popup-tabs-nav li.active {
	background-color: #fff;
}

.popup-tabs-nav li.active a {
	color: #66676b;
	font-weight: 600;
}

.popup-tabs-nav li.active:after {
	content: "";
	position: absolute;
	display: block;
	bottom: 0;
	left: 0;
	width: 100%;
	height: 1px;
	background-color: #fff;
	z-index: 111;
}

.popup-tabs-nav li:first-child.active {
	border-left: none;
	border-radius: 4px 0 0 0;
}

.popup-tab-content {
	padding: 50px 35px;
	position: relative;
	z-index: 10;
	display: inline-block;
	width: 100%;
    box-sizing: border-box;
}

.popup-tabs-container {
	overflow: hidden;
	width: 100%;
}

.popup-tab-content p:last-child { margin-bottom: 0; }

.dialog-with-tabs#sign-in-dialog,
.dialog-with-tabs#small-dialog-1,
.dialog-with-tabs#small-dialog-2,
.dialog-with-tabs#small-dialog-3,
.dialog-with-tabs#small-dialog-4,
.dialog-with-tabs#small-dialog { 
	padding: 0;
	color: #666;
	max-width: 540px;
	box-shadow: 0 0 25px rgba(0,0,0,0.25);
}

/* Close Button Adjustments*/
#sign-in-dialog.dialog-with-tabs .mfp-close,
#small-dialog.dialog-with-tabs .mfp-close,
#small-dialog-1.dialog-with-tabs .mfp-close,
#small-dialog-2.dialog-with-tabs .mfp-close,
#small-dialog-3.dialog-with-tabs .mfp-close,
#small-dialog-4.dialog-with-tabs .mfp-close {
    color: #888;
    background-color: #f8f8f8;
    border-left: 1px solid #e0e0e0;
    border-radius: 0 4px 0 0;
    top: 0;
    right: 0;
    width: 62px;
    height: 61px;
}

#sign-in-dialog.dialog-with-tabs .mfp-close:hover,
#small-dialog-1.dialog-with-tabs .mfp-close:hover,
#small-dialog-2.dialog-with-tabs .mfp-close:hover,
#small-dialog-3.dialog-with-tabs .mfp-close:hover,
#small-dialog-4.dialog-with-tabs .mfp-close:hover,
#small-dialog.dialog-with-tabs .mfp-close:hover {
    color: #333;
    background-color: #f2f2f2;
}

.dialog-with-tabs .mfp-close:before,
.dialog-with-tabs .mfp-close:before {
    font-size: 24px;
}


/* Chrome autocomplete highlight reset */
.dialog-with-tabs input:-webkit-autofill,
.dialog-with-tabs input:focus:-webkit-autofill {
    border: 1px solid #e0e0e0;
    -webkit-box-shadow: inset 0 0 0px 9999px white, 0 1px 4px rgba(0,0,0,0.07);
}

.dialog-with-tabs input {
    margin-bottom: 22px;
}

/* Forgot Password Link */
.dialog-with-tabs .forgot-password {
	font-size: 14px;
	color: #888;
	margin-top: -12px;
	display: block;
}

.dialog-with-tabs .forgot-password:hover {
	color: #66676b;
}


/* Submit Button Adjustments */
.dialog-with-tabs .button {
	height: 48px;
	width: 100% !important;
	margin-top: 25px;
	box-shadow: 0 4px 12px rgba(102,103,107,0.15);
}

/* Welcome Text */
.welcome-text {
	display: block;
	text-align: center;
	color: #808080;
	margin-bottom: 33px;
}

.welcome-text h3 {
	display: block;
	font-weight: 700;
	color: #333;
	font-size: 24px;
}

.welcome-text span a { font-weight: 500; }

.welcome-text span {
	display: block;
	margin-top: 4px;
}

/* Social Login Separator */
.social-login-separator {
	width: 100%;
	display: block;
	text-align: center;
	position: relative;
	width: 100%;
	margin: 38px 0 15px 0;
	height: 1px;
}

.social-login-separator:before {
	width: 100%;
	content: "";
	height: 1px;
	display: block;
	background-color: #e0e0e0;
	position: absolute;
	top: 0;
}

.social-login-separator span {
	background-color: #fff;
	top: 0;
	position: absolute;
	line-height: 10px;
	top: -5px;
	margin-left: -15px;
	padding: 0px 10px;
	color: #808080;
}

/* Social Login Buttons */
.social-login-buttons {
	display: flex;
	width: calc(100% + 20px)
}

.social-login-buttons button {
	flex: 1;
	text-align: center;
	border: 1px solid #333;
	color: #333;
	border-radius: 4px;
	margin-top: 10px;
	margin-right: 20px;
	font-size: 14px;
	padding: 9px 5px;
	max-width: 50%;
	transition: 0.3s;
}

.social-login-buttons button:hover {
	background-color: #333;
	color: #fff;
}

.social-login-buttons button i {
	position: relative;
	top: 1px;
	margin-right: 7px;
	font-size: 15px;
}

.social-login-buttons .facebook-login {
	border-color: #3b5998;
	color: #3b5998;
}

.social-login-buttons .facebook-login:hover {
	background-color: #3b5998;
	color: #fff;
}

.social-login-buttons .google-login {
	border-color: #dd4b39;
	color: #dd4b39;
}

.social-login-buttons .google-login:hover {
	background-color: #dd4b39;
	color: #fff;
}

@media (max-width: 768px) {
	.social-login-separator { margin-bottom: 25px; }
	.social-login-buttons,
	.social-login-buttons a { width: 100%; display: block; max-width: 100%; }
}

/* Account Type */
.account-type {
	display: flex;
	width: calc(100% + 20px);
	margin: 0 0 20px 0;
}

.account-type div {
	flex: 1;
	margin-right: 20px;
}

.account-type label {
  border-radius: 3px;
  border: none;
  background-color: #f2f2f2;
  width: 100%;
}

/* hide input */
.account-type input.account-type-radio:empty {
	display: none;
}

/* style label */
.account-type label i {
	position: relative;
	font-size: 18px;
	top: 2px;
	margin-right: 2px;
}

.account-type input.account-type-radio:empty ~ label {
	position: relative;
	float: left;
	padding: 10px;
	text-align: center;
	padding-bottom: 11px;
	cursor: pointer;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	border-radius: 4px;
	color: #888;
	transition: 0.4s;
	height: 48px;
	line-height: 28px;
	overflow: hidden;
}

.account-type input.account-type-radio ~ label:hover {
	color: #289c41;
	background-color: #e4f6e9;
}

.account-type input.account-type-radio:checked ~ label {
	color: #fff;
	background-color: #47bb67;
}

.account-type input.account-type-radio:empty ~ label:after,
.account-type input.account-type-radio:empty ~ label:before {
	position: absolute;
	display: block;
	top: 0;
	bottom: 0;
	left: 0;
	content: '';
	width: 100%;
	height: 100%;
	text-align: center;
	line-height: 48px;
	border-radius: 4px;
	font-size: 22px;
	background: transparent;
	z-index: 100;
	opacity: 0;
}

.account-type .ripple-effect-dark span.ripple-overlay {
	animation: ripple 1.2s;
	opacity: 0.03; 
}

/* Standard syntax */
@keyframes typeCheck {
    0% {opacity: 0; transform: translateY(10px); }
    50% {opacity: 1; transform: translateY(0px); }
    100% {opacity: 0; transform: translateY(-10px); }
}

@keyframes typeBG {
    0% {opacity: 0;  }
    50% {opacity: 1;  }
    100% {opacity: 0; }
}


/* Popups Media Queries */
@media (max-width: 480px) {
	.popup-tabs-nav {
		padding-top: 50px;
		height: 50px;
	}
	.mfp-container { padding: 0 10px; }
	.popup-tabs-nav li:first-child { border-top: 1px solid #e0e0e0; }
	.popup-tabs-nav li { border-bottom: 1px solid #e0e0e0; }
	.popup-tabs-nav li,
	.popup-tabs-nav li a {
		width: 100%;
		text-align: center;
		height: 50px;
		line-height: 50px;
	}

	.popup-tabs-nav li a:hover {
		background-color: transparent;
	}

	#sign-in-dialog.dialog-with-tabs .mfp-close,
	#small-dialog.dialog-with-tabs .mfp-close,
	#small-dialog-1.dialog-with-tabs .mfp-close,
	#small-dialog-2.dialog-with-tabs .mfp-close,
	#small-dialog-3.dialog-with-tabs .mfp-close,
	#small-dialog-4.dialog-with-tabs .mfp-close {
		height: 50px;
		width: 50px;
	}

	.account-type,
	.social-login-buttons { flex-direction: column; }
	.social-login-buttons button {
		max-width: 100%;
		width: 100%;
		flex: auto;
	}

	.uploadButton { flex-direction: column; }
	.uploadButton .uploadButton-file-name { padding: 0; margin: 15px 0 0 0; }
}
    </style>
    <title>Admin Authentication</title>
</head>
<body>
    
<!-- Sign In Popup
================================================== -->
<div id="sign-in-dialog" class="zoom-anim-dialog dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li>{{Config::get('constants.site_name')}}</li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Login -->
			<div class="popup-tab-content" id="login">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>We're glad to see you again!</h3>
				</div>
					
				<!-- Form -->
				<form method="post" id="login-form" action="{{route('admin.auth')}}">
                    @csrf
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="email" id="emailaddress" placeholder="Email Address" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password" id="password" placeholder="Password" required/>
					</div>
                    @if (session('error'))
                        <div class="alert alert-warning">{{ session('error') }}</div>
                    @endif
				</form>
				
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect" type="submit" form="login-form">Log In <i class="icon-material-outline-arrow-right-alt"></i></button>
				

			</div>



		</div>
	</div>
</div>
<!-- Sign In Popup / End -->
</body>
</html>
