<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Frisk - Creative Agency & Portfolio HTML Template</title>
    <meta name="description" content="Frisk - Creative Agency & Portfolio HTML Template">
    <meta name="keywords" content="Frisk - Creative Agency & Portfolio HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Unbounded:wght@400;500;600;700&display=swap" rel="stylesheet">



    <!--==============================
	    All CSS File
	============================== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/imageRevealHover.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">


    <style>
        /*=================================
    CSS Index Here
==================================*/
/*

01. Theme Base
    1.1. Mixin
    1.2. Function
    1.3. Variable
    1.4. Typography
    1.5. Extend
    1.7. Wordpress Default
02. Reset
    2.1. Container
    2.2. Grid
    2.3. Input
    2.4. Slick Slider
    2.5. Mobile Menu
03. Utilities
    3.1. Preloader
    3.2. Buttons
    3.3. Titles
    3.4. Common
    3.6. Font
    3.7. Background
    3.8. Text Color
    3.9. Overlay
    3.10. Animation

04. Template Style
    4.1. Widget
    4.2. Header
    4.3. Footer
    4.4. Breadcumb
    4.5. Pagination
    4.6. Blog
    4.7. Comments
    4.8. Hero Area
    4.9. Error    
    4.00. Popup Search
    4.00. Popup Side Menu
    4.00. Wocommerce
    4.00. Subscribe
    4.00. Cart
    4.00. Checkout
    4.00. Wishlist
    4.00. Contact
    4.00. About
    4.00. Team
    4.00. Testimonial
    4.00. Counter
    4.00. Client
    4.00. Simple Sections
    4.00. Video
    4.00. Category
    4.00. Faq
    4.00. feature
    4.00. CTA
    4.00. Service
    4.00. Pricing
    4.00. Why choose Us
    4.00. Project
    4.00. Event
    4.00. Gallery
    4.00. Schedule

05. Spacing

*/
/*=================================
    CSS Index End
==================================*/
/*=================================
   01. Theme Base
==================================*/
/*------------------- 1.1. Mixin -------------------*/
/*------------------- 1.2. Function -------------------*/
/*------------------- 1.3. Variable-------------------*/
:root {
  --theme-color: #E3FF04;
  --title-color: #0A0C00;
  --body-color: #0A0C00;
  --smoke-color: #F6F5F3;
  --smoke-color2: #FFF4EF;
  --smoke-color3: #F5F5F6;
  --smoke-color4: #F4F4F4;
  --smoke-color5: #F0F2F4;
  --black-color: #202020;
  --gray-color: #131312;
  --white-color: #ffffff;
  --light-color: #9fa2ad;
  --yellow-color: #FFB539;
  --success-color: #28a745;
  --error-color: #dc3545;
  --border-color: #E3E3E3;
  --title-font: "Unbounded", sans-serif;
  --body-font: "Poppins", sans-serif;
  --icon-font: "Font Awesome 5 Free";
  --main-container: 1296px;
  --container-gutters: 24px;
  --section-space: 140px;
  --section-space-mobile: 80px;
  --section-title-space: 65px;
  --ripple-ani-duration: 5s;
}

/*------------------- 1.5. Typography -------------------*/
html,
body {
  scroll-behavior: smooth !important;
}

body {
  font-family: var(--body-font);
  font-size: 16px;
  font-weight: 400;
  color: var(--body-color);
  line-height: 26px;
  overflow-x: hidden;
  -webkit-font-smoothing: antialiased;
  /***scroll-bar***/
}
body::-webkit-scrollbar {
  width: 10px;
  height: 10px;
}
body::-webkit-scrollbar-thumb {
  background-color: var(--title-color);
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.3) 25%, transparent 20%, transparent 50%, rgba(255, 255, 255, 0.3) 50%, rgba(255, 255, 255, 0.3) 75%, transparent 75%, transparent);
  border-radius: 0px;
}

iframe {
  border: none;
  width: 100%;
}

.slick-slide:focus,
button:focus,
a:focus,
a:active,
input,
input:hover,
input:focus,
input:active,
textarea,
textarea:hover,
textarea:focus,
textarea:active {
  outline: none;
}

input:focus {
  outline: none;
  box-shadow: none;
}

img:not([draggable]),
embed,
object,
video {
  max-width: 100%;
  height: auto;
}

ul {
  list-style-type: disc;
}

ol {
  list-style-type: decimal;
}

table {
  margin: 0 0 1.5em;
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  border: 1px solid var(--border-color);
}

th {
  font-weight: 700;
  color: var(--title-color);
}

td,
th {
  border: 1px solid var(--border-color);
  padding: 9px 12px;
}

a {
  color: var(--theme-color);
  text-decoration: none;
  outline: 0;
  transition: all ease 0.4s;
}
a:hover {
  color: var(--title-color);
}
a:active, a:focus, a:hover, a:visited {
  text-decoration: none;
  outline: 0;
}

button {
  transition: all ease 0.4s;
}

img {
  border: none;
  max-width: 100%;
}

ins {
  text-decoration: none;
}

pre {
  font-family: var(--body-font);
  background: #f5f5f5;
  color: #666;
  font-size: 14px;
  margin: 20px 0;
  overflow: auto;
  padding: 20px;
  white-space: pre-wrap;
  word-wrap: break-word;
}

span.ajax-loader:empty,
p:empty {
  display: none;
}

p {
  font-family: var(--body-font);
  margin: 0 0 18px 0;
  color: var(--body-color);
  line-height: 1.75;
}

h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a,
p a,
span a {
  font-size: inherit;
  font-family: inherit;
  font-weight: inherit;
  line-height: inherit;
}

.h1,
h1,
.h2,
h2,
.h3,
h3,
.h4,
h4,
.h5,
h5,
.h6,
h6 {
  font-family: var(--title-font);
  color: var(--title-color);
  text-transform: none;
  font-weight: 700;
  line-height: 1.4;
  margin: 0 0 15px 0;
}

.h1,
h1 {
  font-size: 100px;
  line-height: 1.167;
}

.h2,
h2 {
  font-size: 60px;
  line-height: 1.133;
}

.h3,
h3 {
  font-size: 36px;
  line-height: 1.278;
}

.h4,
h4 {
  font-size: 24px;
  line-height: 1.333;
}

.h5,
h5 {
  font-size: 20px;
  line-height: 1.417;
}

.h6,
h6 {
  font-size: 18px;
  line-height: 1.5;
}

/* Medium Large devices */
@media (max-width: 1399px) {
  .h1,
  h1 {
    font-size: 48px;
  }
}
/* Large devices */
@media (max-width: 1199px) {
  .h1,
  h1 {
    font-size: 44px;
    line-height: 1.3;
  }
  .h2,
  h2 {
    font-size: 40px;
    line-height: 1.25;
  }
  .h3,
  h3 {
    font-size: 30px;
  }
  .h4,
  h4 {
    font-size: 24px;
  }
  .h5,
  h5 {
    font-size: 20px;
  }
  .h6,
  h6 {
    font-size: 16px;
  }
}
/* Small devices */
@media (max-width: 767px) {
  .h1,
  h1 {
    font-size: 40px;
  }
  .h2,
  h2 {
    font-size: 34px;
    line-height: 1.3;
  }
  .h3,
  h3 {
    font-size: 26px;
  }
  .h4,
  h4 {
    font-size: 22px;
  }
  .h5,
  h5 {
    font-size: 18px;
  }
  .h6,
  h6 {
    font-size: 16px;
  }
}
/* Extra small devices */
@media (max-width: 575px) {
  .h1,
  h1 {
    font-size: 34px;
    line-height: 1.35;
  }
  .h2,
  h2 {
    font-size: 30px;
  }
}
/* Extra small devices */
@media (max-width: 375px) {
  .h1,
  h1 {
    font-size: 32px;
  }
}
/*------------------- 1.6. Extend -------------------*/
/*=================================
    02. Reset
==================================*/
/*------------------- 2.1. Container -------------------*/
/* Medium Large devices */
@media (max-width: 1399px) {
  :root {
    --main-container: 1250px;
  }
}
.container2 {
  max-width: 1330px;
  margin: auto;
}

@media (min-width: 1400px) {
  .container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
    max-width: calc(var(--main-container) + var(--container-gutters));
  }
  .container2 {
    max-width: 1330px;
  }
}
@media only screen and (min-width: 1300px) {
  .container2.px-0,
  .container-xxl.px-0,
  .container-xl.px-0,
  .container-lg.px-0,
  .container-md.px-0,
  .container-sm.px-0,
  .container.px-0 {
    max-width: var(--main-container);
  }
  .container2 {
    max-width: 1330px;
  }
}
/* Medium Large devices */
@media (max-width: 1399px) {
  .container2 {
    max-width: 1140px;
  }
}
/* Large devices */
@media (max-width: 1199px) {
  .container2 {
    max-width: 960px;
  }
}
/* Medium devices */
@media (max-width: 991px) {
  .container2 {
    max-width: 720px;
  }
}
/* Small devices */
@media (max-width: 767px) {
  .container2 {
    max-width: 540px;
  }
}
@media only screen and (max-width: 1600px) {
  .container-fluid.px-0 {
    padding-left: 15px !important;
    padding-right: 15px !important;
  }
  .container-fluid.px-0 .row {
    margin-left: 0 !important;
    margin-right: 0 !important;
  }
}
/* Large devices */
@media (max-width: 1199px) {
  .container2 {
    padding-left: 15px !important;
    padding-right: 15px !important;
  }
}
/*------------------- 2.2. Grid -------------------*/
.slick-track > [class*=col] {
  flex-shrink: 0;
  width: 100%;
  max-width: 100%;
  padding-right: calc(var(--bs-gutter-x) / 2);
  padding-left: calc(var(--bs-gutter-x) / 2);
  margin-top: var(--bs-gutter-y);
}

.gy-20 {
  --bs-gutter-y: 20px;
}

.gy-30 {
  --bs-gutter-y: 30px;
}

.gy-40 {
  --bs-gutter-y: 40px;
}

.gy-50 {
  --bs-gutter-y: 50px;
}

.gy-60 {
  --bs-gutter-y: 60px;
}

.gy-80 {
  --bs-gutter-y: 80px;
}

.gx-10 {
  --bs-gutter-x: 10px;
}

.gx-20 {
  --bs-gutter-x: 20px;
}

.gx-60 {
  --bs-gutter-x: 60px;
}

.gx-90 {
  --bs-gutter-x: 90px;
  /* Medium Large devices */
}
@media (max-width: 1399px) {
  .gx-90 {
    --bs-gutter-x: 24px;
  }
}

@media (min-width: 1299px) {
  .gx-60 {
    --bs-gutter-x: 60px;
  }
}
@media (min-width: 1399px) {
  .gx-30 {
    --bs-gutter-x: 30px;
  }
  .gx-25 {
    --bs-gutter-x: 25px;
  }
  .gx-40 {
    --bs-gutter-x: 40px;
  }
}
/* Large devices */
@media (max-width: 1199px) {
  .gy-80 {
    --bs-gutter-y: 40px;
  }
}
/* Medium devices */
@media (max-width: 991px) {
  .gy-50 {
    --bs-gutter-y: 40px;
  }
}
/*------------------- 2.3. Input -------------------*/
select,
.single-select,
.form-control,
.form-select,
textarea,
input {
  height: 55px;
  padding: 0 30px;
  border: 1px solid transparent;
  color: var(--body-color);
  background-color: transparent;
  font-size: 16px;
  font-weight: 300;
  width: 100%;
  font-family: var(--body-font);
  transition: 0.4s ease-in-out;
  padding-right: 45px;
  border-radius: 5px;
}
select:focus,
.single-select:focus,
.form-control:focus,
.form-select:focus,
textarea:focus,
input:focus {
  outline: 0;
  box-shadow: none;
  border-color: transparent;
  background-color: transparent;
}
select::-moz-placeholder,
.single-select::-moz-placeholder,
.form-control::-moz-placeholder,
.form-select::-moz-placeholder,
textarea::-moz-placeholder,
input::-moz-placeholder {
  color: var(--body-color);
}
select::-webkit-input-placeholder,
.single-select::-webkit-input-placeholder,
.form-control::-webkit-input-placeholder,
.form-select::-webkit-input-placeholder,
textarea::-webkit-input-placeholder,
input::-webkit-input-placeholder {
  color: var(--body-color);
}
select:-ms-input-placeholder,
.single-select:-ms-input-placeholder,
.form-control:-ms-input-placeholder,
.form-select:-ms-input-placeholder,
textarea:-ms-input-placeholder,
input:-ms-input-placeholder {
  color: var(--body-color);
}
select::placeholder,
.single-select::placeholder,
.form-control::placeholder,
.form-select::placeholder,
textarea::placeholder,
input::placeholder {
  color: var(--body-color);
}
select.style2,
.single-select.style2,
.form-control.style2,
.form-select.style2,
textarea.style2,
input.style2 {
  height: auto;
  border: none;
  padding: 14.5px 30px;
  background-color: transparent;
  line-height: initial;
}
select.style2 option,
.single-select.style2 option,
.form-control.style2 option,
.form-select.style2 option,
textarea.style2 option,
input.style2 option {
  background-color: var(--title-color);
  color: var(--body-color);
  padding: 2px 15px;
}
select.style2::-moz-placeholder,
.single-select.style2::-moz-placeholder,
.form-control.style2::-moz-placeholder,
.form-select.style2::-moz-placeholder,
textarea.style2::-moz-placeholder,
input.style2::-moz-placeholder {
  color: var(--body-color);
}
select.style2::-webkit-input-placeholder,
.single-select.style2::-webkit-input-placeholder,
.form-control.style2::-webkit-input-placeholder,
.form-select.style2::-webkit-input-placeholder,
textarea.style2::-webkit-input-placeholder,
input.style2::-webkit-input-placeholder {
  color: var(--body-color);
}
select.style2:-ms-input-placeholder,
.single-select.style2:-ms-input-placeholder,
.form-control.style2:-ms-input-placeholder,
.form-select.style2:-ms-input-placeholder,
textarea.style2:-ms-input-placeholder,
input.style2:-ms-input-placeholder {
  color: var(--body-color);
}
select.style2::placeholder,
.single-select.style2::placeholder,
.form-control.style2::placeholder,
.form-select.style2::placeholder,
textarea.style2::placeholder,
input.style2::placeholder {
  color: var(--body-color);
}
select.style-white,
.single-select.style-white,
.form-control.style-white,
.form-select.style-white,
textarea.style-white,
input.style-white {
  background: var(--white-color);
}
select.style-border,
.single-select.style-border,
.form-control.style-border,
.form-select.style-border,
textarea.style-border,
input.style-border {
  background: transparent;
  border-bottom: 2px solid var(--title-color);
  border-radius: 0;
  color: var(--title-color);
  font-size: 18px;
  font-weight: 400;
  padding: 0;
}
select.style-border::placeholder,
.single-select.style-border::placeholder,
.form-control.style-border::placeholder,
.form-select.style-border::placeholder,
textarea.style-border::placeholder,
input.style-border::placeholder {
  color: var(--title-color);
}
select.style-border2,
.single-select.style-border2,
.form-control.style-border2,
.form-select.style-border2,
textarea.style-border2,
input.style-border2 {
  background: transparent;
  border: 1px solid #E8E8E8;
  border-radius: 0;
  color: var(--title-color);
}
select.style3,
.single-select.style3,
.form-control.style3,
.form-select.style3,
textarea.style3,
input.style3 {
  background: var(--smoke-color3);
}

.form-text {
  font-size: 16px;
}
.form-text a {
  color: var(--title-color);
  font-weight: 500;
}

.single-select,
.form-select,
select {
  display: block;
  width: 100%;
  line-height: 60px;
  cursor: pointer;
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3E%3C/svg%3E");
  background-position: right 26px center;
  background-repeat: no-repeat;
  background-size: 16px 12px;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}
.single-select:after,
.form-select:after,
select:after {
  right: 30px;
  height: 8px;
  width: 8px;
}
.single-select .list,
.form-select .list,
select .list {
  width: 100%;
}

textarea.form-control,
textarea {
  min-height: 100px;
  padding-top: 16px;
  padding-bottom: 17px;
}
textarea.form-control.style2,
textarea.style2 {
  min-height: 200px;
}
textarea.form-control.style-border,
textarea.style-border {
  padding-top: 12px;
}

.form-group {
  margin-bottom: 20px;
  position: relative;
}
.form-group > i {
  display: inline-block;
  position: absolute;
  right: 25px;
  top: 21px;
  font-size: 16px;
  color: var(--body-color);
}
.form-group > i.fa-envelope {
  padding-top: 1px;
}
.form-group > i.fa-comment {
  margin-top: -2px;
}
.form-group > i.fa-chevron-down {
  width: 17px;
  background-color: var(--smoke-color);
}
.form-group.form-icon-left > i {
  display: inline-block;
  position: absolute;
  left: 25px;
  right: auto;
  top: 20px;
  font-size: 16px;
  color: var(--body-color);
  line-height: 1;
}
.form-group.form-icon-left > i.fa-envelope {
  padding-top: 0px;
}
.form-group.form-icon-left > i.fa-comment {
  margin-top: -2px;
}
.form-group.form-icon-left > i.fa-chevron-down {
  width: 17px;
  background-color: var(--smoke-color);
}
.form-group.form-icon-left input {
  padding: 0 30px 0 55px;
}
.form-group.has-label > i {
  top: 50px;
}
.form-group.has-icon .form-control {
  padding-left: 70px;
}
.form-group.has-icon .input-icon {
  display: inline-block;
  position: absolute;
  left: 40px;
  top: 18px;
  font-size: 16px;
  color: var(--body-color);
}
.form-group.has-icon .input-icon:hover {
  color: var(--theme-color);
}
.form-group.radius-group input {
  border-radius: 100px;
}
.form-group.style-2 .form-control {
  padding: 0 30px 0 55px;
}
.form-group.style-2 textarea.form-control {
  padding: 16px 30px 30px 55px;
}
.form-group.style-3 .form-control {
  padding: 0 60px 0 30px;
}
.form-group.style-4 i {
  color: var(--theme-color);
}
.form-group.style-4 .form-control {
  padding: 0 30px 0 60px;
  border: 1px solid #E3E1DC;
  height: 60px;
  line-height: 60px;
  color: var(--body-color);
}
.form-group.style-4 .form-control::placeholder {
  color: var(--body-color);
  font-size: 14px;
  font-weight: 300;
}
.form-group.style-4 textarea.form-control {
  line-height: normal;
  padding: 15px 30px 30px 60px;
}

input[type=date] {
  padding: 0 25px 0 25px;
  position: relative;
}

input[type=date]::-webkit-calendar-picker-indicator {
  background: transparent;
  position: absolute;
  left: 0px;
  height: 100%;
  width: 100%;
  z-index: 1;
  cursor: pointer;
}

[class*=col-].form-group > i {
  right: calc(var(--bs-gutter-x) / 2 + 25px);
}
[class*=col-].form-group .form-icon-left {
  left: calc(var(--bs-gutter-x) / 2 + 30px);
  right: auto;
}

option:checked, option:focus, option:hover {
  background-color: var(--theme-color);
  color: var(--white-color);
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

input[type=checkbox] {
  visibility: hidden;
  opacity: 0;
  display: inline-block;
  vertical-align: middle;
  width: 0;
  height: 0;
  display: none;
  border-radius: 10px;
}
input[type=checkbox]:checked ~ label:before {
  content: "\f00c";
  color: var(--white-color);
  background-color: var(--theme-color);
  border-color: var(--theme-color);
}
input[type=checkbox] ~ label {
  position: relative;
  padding-left: 30px;
  cursor: pointer;
  display: block;
}
input[type=checkbox] ~ label:before {
  content: "";
  font-family: var(--icon-font);
  font-weight: 700;
  position: absolute;
  left: 0px;
  top: 3.5px;
  background-color: var(--white-color);
  border: 1px solid var(--theme-color);
  height: 18px;
  width: 18px;
  line-height: 18px;
  text-align: center;
  font-size: 12px;
}
input[type=checkbox].style2 ~ label {
  color: #8B929C;
  padding-left: 23px;
  margin-bottom: -0.5em;
}
input[type=checkbox].style2 ~ label:before {
  background-color: white;
  border: 1px solid rgb(247, 204, 215);
  height: 14px;
  width: 14px;
  line-height: 14px;
  border-radius: 3px;
  top: 6px;
}
input[type=checkbox].style2:checked ~ label:before {
  color: var(--theme-color);
}

input[type=radio] {
  visibility: hidden;
  opacity: 0;
  display: inline-block;
  vertical-align: middle;
  width: 0;
  height: 0;
  display: none;
}
input[type=radio] ~ label {
  position: relative;
  padding-left: 30px;
  cursor: pointer;
  line-height: 1;
  display: inline-block;
  font-weight: 600;
  margin-bottom: 0;
}
input[type=radio] ~ label::before {
  content: "\f111";
  position: absolute;
  font-family: var(--icon-font);
  left: 0;
  top: -2px;
  width: 20px;
  height: 20px;
  padding-left: 0;
  font-size: 0.6em;
  line-height: 19px;
  text-align: center;
  border: 1px solid var(--theme-color);
  border-radius: 100%;
  font-weight: 700;
  background: var(--white-color);
  color: transparent;
  transition: all 0.2s ease;
}
input[type=radio]:checked ~ label::before {
  border-color: var(--theme-color);
  background-color: var(--theme-color);
  color: var(--white-color);
}

label {
  margin-bottom: 0.5em;
  margin-top: -0.3em;
  display: block;
  color: var(--title-color);
  font-family: var(--body-font);
  font-size: 16px;
}

textarea.is-invalid,
select.is-invalid,
input.is-invalid,
.was-validated input:invalid {
  border: 1px solid var(--error-color) !important;
  background-position: right calc(0.375em + 0.8875rem) center;
  background-image: none;
}
textarea.is-invalid:focus,
select.is-invalid:focus,
input.is-invalid:focus,
.was-validated input:invalid:focus {
  outline: 0;
  box-shadow: none;
}

textarea.is-invalid {
  background-position: top calc(0.375em + 0.5875rem) right calc(0.375em + 0.8875rem);
}

.row.no-gutters > .form-group {
  margin-bottom: 0;
}

.form-messages {
  display: none;
}
.form-messages.mb-0 * {
  margin-bottom: 0;
}
.form-messages.success {
  color: var(--success-color);
  display: block;
}
.form-messages.error {
  color: var(--error-color);
  display: block;
}
.form-messages pre {
  padding: 0;
  background-color: transparent;
  color: inherit;
}

/*------------------- 2.4. Slick Slider -------------------*/
.slick-track > [class*=col] {
  flex-shrink: 0;
  width: 100%;
  max-width: 100%;
  padding-right: calc(var(--bs-gutter-x) / 2);
  padding-left: calc(var(--bs-gutter-x) / 2);
  margin-top: var(--bs-gutter-y);
}

.slick-track {
  min-width: 100%;
}

.slick-list {
  padding-left: 0;
  padding-right: 0;
  overflow: hidden;
}

.slick-slide img {
  display: inline-block;
}

.slick-dots {
  list-style-type: none;
  padding: 0;
  margin: 54px 0 0px 0;
  line-height: 0;
  text-align: center;
  height: max-content;
}
.slick-dots li {
  display: inline-block;
  margin-right: 12px;
}
.slick-dots li:last-child {
  margin-right: 0;
}
.slick-dots button {
  font-size: 0;
  padding: 0;
  width: 10px;
  height: 10px;
  line-height: 0;
  border-radius: 9999px;
  border: 1px solid var(--title-color);
  background-color: transparent;
  transition: all ease 0.4s;
  position: relative;
}
.slick-dots .slick-active button {
  background-color: var(--title-color);
}

.dot-style2 .slick-dots button {
  border: 1px solid var(--smoke-color);
}
.dot-style2 .slick-dots .slick-active button {
  background-color: var(--smoke-color);
}

.slick-arrow {
  display: inline-block;
  padding: 0;
  background-color: var(--white-color);
  color: var(--title-color);
  position: absolute;
  top: 50%;
  border: none;
  border-radius: 50%;
  right: var(--pos-x, 58px);
  width: var(--icon-size, 80px);
  height: var(--icon-size, 80px);
  line-height: var(--icon-size, 80px);
  font-size: var(--icon-font-size, 18px);
  margin-top: calc(var(--icon-size, 80px) / -1);
  z-index: 2;
  opacity: 1;
}
.slick-arrow.default {
  position: relative;
  --pos-x: 0;
  margin-top: 0;
}
.slick-arrow.slick-prev {
  right: auto;
  left: var(--pos-x, 58px);
}
.slick-arrow:hover {
  opacity: 1;
}

.arrow-margin .slick-arrow {
  top: calc(50% - 30px);
}

@media (max-width: 1200px) {
  .slick-arrow {
    --pos-x: 42px;
  }
}
/* Large devices */
@media (max-width: 1199px) {
  .slick-arrow {
    --icon-size: 60px;
  }
}
/* Medium devices */
@media (max-width: 991px) {
  .slick-dots {
    margin: 40px 0 0 0;
  }
  .icon-box .slick-arrow {
    margin-right: 0;
  }
}
.slick-3d-active {
  margin-left: -12%;
  margin-right: -12%;
}
.slick-3d-active .slick-list {
  padding-left: 30% !important;
  padding-right: 30% !important;
}
.slick-3d-active .slick-track {
  max-width: 100% !important;
  transform: translate3d(0, 0, 0) !important;
  perspective: 100px;
}
.slick-3d-active .slick-slide {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  opacity: 0;
  width: 100% !important;
  transform: translate3d(0, 0, 0);
  transition: transform 1s, opacity 1s;
}
.slick-3d-active .slick-3d-next,
.slick-3d-active .slick-3d-prev,
.slick-3d-active .slick-3d-next2,
.slick-3d-active .slick-3d-prev2 {
  display: block;
}
.slick-3d-active .slick-current {
  opacity: 1;
  position: relative;
  display: block;
  z-index: 2;
}
.slick-3d-active .slick-3d-next {
  opacity: 1;
  transform: translate3d(50%, 0, -21px);
  z-index: 1;
  perspective: 1000px;
}
.slick-3d-active .slick-3d-next2 {
  opacity: 1;
  transform: translate3d(40%, 0, -23px);
  z-index: 0;
  perspective: 1000px;
}
.slick-3d-active .slick-3d-prev {
  opacity: 1;
  transform: translate3d(-50%, 0, -21px);
}
.slick-3d-active .slick-3d-prev .testi-card {
  box-shadow: none;
}
.slick-3d-active .slick-3d-prev2 {
  opacity: 1;
  transform: translate3d(-40%, 0, -23px);
}

/*------------------- 2.5. Mobile Menu -------------------*/
.mobile-menu-wrapper {
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.6);
  z-index: 999999;
  width: 0;
  width: 100%;
  height: 100%;
  transition: all 0.4s cubic-bezier(0.785, 0.135, 0.15, 0.86) 0s;
  opacity: 0;
  visibility: hidden;
}
.mobile-menu-wrapper .mobile-logo {
  padding: 35px 0px 50px;
  display: block;
  text-align: start;
  background-color: var(--white-color);
}
.mobile-menu-wrapper .mobile-logo svg {
  max-width: 185px;
}
.mobile-menu-wrapper .menu-toggle {
  border: 2px solid var(--title-color);
  font-size: 22px;
  position: absolute;
  right: 20px;
  top: 23px;
  padding: 0;
  line-height: 1;
  width: 50px;
  height: 50px;
  line-height: 48px;
  font-size: 14px;
  z-index: 1;
  color: var(--title-color);
  background-color: transparent;
  border-radius: 50%;
}
.mobile-menu-wrapper .menu-toggle:hover {
  transform: rotate(90deg);
}
.mobile-menu-wrapper .mobile-menu-area {
  width: 100%;
  max-width: 310px;
  background-color: var(--white-color);
  height: 100%;
  position: relative;
  left: 0;
  opacity: 0;
  visibility: hidden;
  transform: translateX(-100%);
  transition: all 0.4s cubic-bezier(0.785, 0.135, 0.15, 0.86) 0s;
  z-index: 1;
  padding: 0 20px;
}
.mobile-menu-wrapper.body-visible {
  opacity: 1;
  visibility: visible;
  transition: all 0.4s cubic-bezier(0.785, 0.135, 0.15, 0.86) 0s;
}
.mobile-menu-wrapper.body-visible .mobile-menu-area {
  transform: translateX(0);
  opacity: 1;
  visibility: visible;
  transition: all 0.4s cubic-bezier(0.785, 0.135, 0.15, 0.86) 0s;
}
.mobile-menu-wrapper .sidebar-wrap {
  margin-bottom: 23px;
}
.mobile-menu-wrapper .sidebar-wrap h6 {
  font-size: 14px;
  font-weight: 600;
  color: var(--title-color);
  margin-bottom: 0;
  line-height: 24px;
}
.mobile-menu-wrapper .sidebar-wrap a {
  color: var(--title-color);
}
.mobile-menu-wrapper .sidebar-wrap a:hover {
  color: var(--title-color);
}

.mobile-menu {
  overflow-y: scroll;
  max-height: calc(100vh - 200px);
  padding-bottom: 25px;
  margin-bottom: 40px;
  text-align: left;
  border-bottom: 2px solid var(--title-color);
}
.mobile-menu::-webkit-scrollbar {
  display: none;
}
.mobile-menu ul {
  margin: 0;
  padding: 5px 0;
}
.mobile-menu ul li {
  list-style-type: none;
}
.mobile-menu ul li a {
  display: block;
  position: relative;
  padding: 8px 0;
  line-height: 1.4;
  font-size: 20px;
  font-weight: 600;
  font-family: var(--title-font);
  color: var(--title-color);
  letter-spacing: normal;
  text-transform: capitalize;
}
.mobile-menu ul li.active-class > a {
  color: var(--title-color);
}
.mobile-menu ul li.active-class > a:before {
  background: var(--theme-color);
  border-color: var(--theme-color);
}
.mobile-menu ul li ul li {
  padding-left: 20px;
}
.mobile-menu ul li ul li a {
  font-weight: 400;
  font-family: var(--body-font);
  letter-spacing: normal;
  text-transform: capitalize;
  font-size: 16px;
  padding: 6px 0;
}
.mobile-menu ul li ul li a .mean-expand-class:before {
  font-size: 14px;
}
.mobile-menu ul li ul li:last-child {
  border-bottom: none;
}
.mobile-menu ul .submenu-item-has-children > a .mean-expand-class {
  position: absolute;
  right: 0;
  top: 50%;
  font-weight: 400;
  font-size: 20px;
  width: 100%;
  height: 25px;
  line-height: 25px;
  margin-top: -12.5px;
  display: inline-block;
  text-align: end;
  background-color: transparent;
  color: var(--title-color);
  border-radius: 50%;
}
.mobile-menu ul .submenu-item-has-children > a .mean-expand-class:before {
  content: "\f107";
  font-family: var(--icon-font);
  font-weight: 700;
}
.mobile-menu ul .submenu-item-has-children.active-class > a .mean-expand-class:before {
  content: "\f106";
}
.mobile-menu > ul > li:last-child {
  border-bottom: none;
}

@media (max-width: 400px) {
  .mobile-menu-wrapper .mobile-menu-area {
    width: 100%;
    max-width: 270px;
  }
}
/*------------------- 2.5. Desk Menu -------------------*/
.desk-menu-wrapper {
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.6);
  z-index: 999999;
  width: 0;
  width: 100%;
  height: 100%;
  transition: all ease 0.8s;
  opacity: 0;
  visibility: hidden;
}
.desk-menu-wrapper .desk-logo {
  padding-bottom: 30px;
  padding-top: 40px;
  display: block;
  text-align: center;
  background-color: var(--white-color);
  border-bottom: 2px solid var(--title-color);
}
.desk-menu-wrapper .desk-logo svg {
  max-width: 185px;
}
.desk-menu-wrapper .menu-toggle2 {
  border: 1px solid var(--white-color);
  font-size: 22px;
  position: absolute;
  right: 48px;
  top: 25px;
  padding: 0;
  line-height: 1;
  width: 60px;
  height: 60px;
  line-height: 60px;
  font-size: 14px;
  z-index: 1;
  color: var(--white-color);
  background-color: var(--title-color);
  border-radius: 50%;
}
.desk-menu-wrapper .menu-toggle2:hover {
  background-color: var(--title-color);
  color: var(--white-color);
}
.desk-menu-wrapper .desk-menu-area {
  width: 100%;
  background-color: var(--title-color);
  border-right: 0;
  height: 100%;
  position: relative;
  left: -110%;
  opacity: 0;
  visibility: hidden;
  transition: all ease 1s;
  z-index: 1;
}
.desk-menu-wrapper.body-visible {
  opacity: 1;
  visibility: visible;
}
.desk-menu-wrapper.body-visible .desk-menu-area {
  left: 0;
  opacity: 1;
  visibility: visible;
}
.desk-menu-wrapper.body-visible .desk-menu-area .desk-menu > ul {
  clip-path: inset(0);
}

.desk-menu {
  overflow-y: scroll;
  max-height: 100vh;
  padding-bottom: 40px;
  margin-top: 0px;
  padding-top: 60px;
  text-align: left;
}
.desk-menu::-webkit-scrollbar {
  display: none;
}
.desk-menu ul {
  margin: 0;
  padding: 0 0;
}
.desk-menu ul:has(.active-class2) > li {
  opacity: 0.5;
}
.desk-menu ul li {
  list-style-type: none;
  transition: 0.4s;
}
.desk-menu ul li a {
  display: block;
  position: relative;
  padding: 12px 0;
  line-height: 1.4;
  font-size: 100px;
  font-weight: 600;
  font-family: var(--title-font);
  color: var(--smoke-color);
  letter-spacing: 1.5px;
  text-transform: capitalize;
}
.desk-menu ul li.active-class2 {
  opacity: 1;
}
.desk-menu ul li.active-class2 > a:before {
  background: var(--theme-color);
  border-color: var(--theme-color);
}
.desk-menu ul li ul {
  max-width: 250px;
}
.desk-menu ul li ul li {
  padding-left: 0px;
}
.desk-menu ul li ul li a {
  font-weight: 400;
  font-family: var(--body-font);
  letter-spacing: normal;
  text-transform: capitalize;
  font-size: 20px;
  padding: 8px 0;
}
.desk-menu ul li ul li.menu-item-has-children {
  position: relative;
}
.desk-menu ul li ul li.menu-item-has-children:before, .desk-menu ul li ul li.menu-item-has-children:after {
  content: "";
  position: absolute;
  top: 21px;
  right: 2px;
  height: 9px;
  width: 2px;
  background: var(--white-color);
  transition: 0.4s;
  transform: rotate(45deg);
  display: inline-block;
  transition: 0.4s;
}
.desk-menu ul li ul li.menu-item-has-children:before {
  transform: rotate(-45deg);
  top: 16px;
}
.desk-menu ul li ul li:last-child {
  border-bottom: none;
}
.desk-menu ul li ul li ul {
  margin-left: 16px;
}
.desk-menu ul .submenu-item-has-children2 > a .mean-expand-class2 {
  position: absolute;
  right: 0;
  top: 0;
  font-weight: 400;
  font-size: 12px;
  width: 100%;
  height: 100%;
  line-height: 25px;
  margin-top: 0px;
  display: inline-block;
  text-align: center;
  background-color: transparent;
  color: var(--title-color);
  border-radius: 50%;
}
.desk-menu ul .submenu-item-has-children2.active-class2 > a .mean-expand-class2:before {
  content: "\f068";
}
.desk-menu > ul {
  padding: 0 100px;
  clip-path: inset(0 0 100% 0);
  transition: 1.5s all ease-in-out;
}
.desk-menu > ul > li:last-child {
  border-bottom: none;
}

/* Extra large devices */
@media (max-width: 1500px) {
  .desk-menu ul li a {
    font-size: 80px;
  }
}
/* Medium Large devices */
@media (max-width: 1399px) {
  .desk-menu ul li a {
    font-size: 60px;
  }
  .desk-menu {
    padding-top: 40px;
    max-height: calc(100vh - 20px);
  }
}
/* Medium Large devices */
@media (max-width: 1299px) {
  .desk-menu {
    padding-top: 70px;
  }
}
@media (max-width: 400px) {
  .desk-menu-wrapper .desk-menu-area {
    width: 100%;
    max-width: 270px;
  }
  .desk-menu > ul {
    padding: 0 20px;
  }
}
.tgmobile__menu {
  position: fixed;
  right: 0;
  top: 0;
  width: 300px;
  padding-right: 30px;
  max-width: 100%;
  height: 100%;
  z-index: 99;
  border-radius: 0px;
  transition: all 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86);
  -moz-transition: all 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86);
  -webkit-transition: all 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86);
  -ms-transition: all 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86) e;
  -o-transition: all 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86);
  -webkit-transform: translateX(101%);
  -moz-transform: translateX(101%);
  -ms-transform: translateX(101%);
  -o-transform: translateX(101%);
  transform: translateX(101%);
}

.tgmobile__menu .navbar-collapse {
  display: block !important;
}

.tgmobile__menu .nav-logo {
  position: relative;
  padding: 30px 25px;
  text-align: left;
}

.tgmobile__menu .nav-logo img {
  width: 109px;
}

.tgmobile__menu .nav-logo .logo-light {
  display: none;
}

.tgmobile__menu .navigation {
  position: relative;
  display: block;
  width: 100%;
  float: none;
  margin: 0;
  padding: 0;
}

.tgmobile__menu .navigation li {
  position: relative;
  display: block;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
}

.tgmobile__menu .navigation li.current > a::before {
  height: 100%;
}

.tgmobile__menu .navigation li.menu-item-has-children .dropdown-btn {
  position: absolute;
  right: 20px;
  top: 6px;
  width: 32px;
  height: 32px;
  text-align: center;
  font-size: 16px;
  line-height: 32px;
  color: var(--title-color);
  background: #efefef;
  cursor: pointer;
  border-radius: 2px;
  -webkit-transition: all 500ms ease;
  -o-transition: all 500ms ease;
  transition: all 500ms ease;
  z-index: 5;
}

.tgmobile__menu .navigation li.menu-item-has-children .dropdown-btn .plus-line {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%) rotate(0);
  -ms-transform: translate(-50%, -50%) rotate(0);
  transform: translate(-50%, -50%) rotate(0);
  border-radius: 10px;
  width: 12px;
  height: 2px;
  background-color: var(--title-color);
  -webkit-transition: all 500ms ease;
  -o-transition: all 500ms ease;
  transition: all 500ms ease;
}

.tgmobile__menu .navigation li.menu-item-has-children .dropdown-btn .plus-line::after {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%) rotate(0);
  -ms-transform: translate(-50%, -50%) rotate(0);
  transform: translate(-50%, -50%) rotate(0);
  border-radius: 10px;
  width: 2px;
  height: 12px;
  background-color: var(--title-color);
  -webkit-transition: all 500ms ease;
  -o-transition: all 500ms ease;
  transition: all 500ms ease;
}

.tgmobile__menu .navigation li.menu-item-has-children .dropdown-btn.open {
  background-color: var(--theme-color);
}

.tgmobile__menu .navigation li.menu-item-has-children .dropdown-btn.open .plus-line {
  background-color: var(--white-color);
}

.tgmobile__menu .navigation li.menu-item-has-children .dropdown-btn.open .plus-line::after {
  display: none;
}

.tgmobile__menu .navigation li > a {
  position: relative;
  display: block;
  line-height: 1.5;
  padding: 10px 60px 10px 25px;
  font-size: 16px;
  font-weight: 500;
  color: var(--title-color);
  text-transform: capitalize;
  -webkit-transition: all 500ms ease;
  -o-transition: all 500ms ease;
  transition: all 500ms ease;
  border: none;
}

.tgmobile__menu .navigation li > a::before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  height: 0;
  -webkit-transition: all 500ms ease;
  -o-transition: all 500ms ease;
  transition: all 500ms ease;
}

.tgmobile__menu .navigation li ul li > a {
  margin-left: 20px;
}

.tgmobile__menu .navigation li ul li ul li a {
  margin-left: 40px;
}

.tgmobile__menu .navigation li ul li ul li ul li a {
  margin-left: 60px;
}

.tgmobile__menu .navigation li > ul {
  display: none;
}

.tgmobile__menu .navigation li > ul > li > ul {
  display: none;
}

.tgmobile__menu .navigation ul {
  padding: 0;
  margin: 0;
}

.tgmobile__menu .navigation ul li a {
  display: block;
}

.tgmobile__menu .navigation ul li ul li > a {
  font-size: 16px;
  margin-left: 20px;
  text-transform: capitalize;
}

.tgmobile__menu .navigation:last-child {
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.tgmobile__menu .navigation > li > ul > li:first-child {
  border-top: 1px solid rgba(0, 0, 0, 0.1);
}

.tgmobile__menu .close-btn {
  position: absolute;
  right: 15px;
  top: 28px;
  line-height: 30px;
  width: 35px;
  text-align: center;
  font-size: 20px;
  color: var(--theme-color);
  cursor: pointer;
  z-index: 10;
  -webkit-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.tgmobile__menu-backdrop {
  position: fixed;
  right: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 2;
  transition: all 700ms ease;
  -moz-transition: all 700ms ease;
  -webkit-transition: all 700ms ease;
  -ms-transition: all 700ms ease;
  -o-transition: all 700ms ease;
  opacity: 0;
  visibility: hidden;
  background: rgba(0, 0, 0, 0.5);
}

.tgmobile__menu .social-links ul {
  display: flex;
  position: relative;
  text-align: center;
  padding: 30px 20px 20px;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
}

.tgmobile__menu .social-links ul li {
  position: relative;
  display: inline-block;
  margin: 0px 6px 10px;
}

.tgmobile__menu .social-links ul li a {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  position: relative;
  line-height: 32px;
  font-size: 16px;
  color: #292b37;
  -webkit-transition: all 500ms ease;
  -o-transition: all 500ms ease;
  transition: all 500ms ease;
  border: 1px solid #efefef;
  border-radius: 3px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  -o-border-radius: 3px;
}

.tgmobile__menu .social-links ul li a:hover {
  border-color: var(--theme-color);
  background: var(--theme-color);
  color: var(--white-color);
}

.tgmobile__menu-box {
  position: absolute;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  max-height: 100%;
  overflow-y: auto;
  overflow-x: hidden;
  background: var(--white-color);
  padding: 0px 0px;
  z-index: 5;
  box-shadow: -9px 0 14px 0px rgba(0, 0, 0, 0.06);
}

.tgmobile__menu-outer .mobile-nav-toggler {
  position: relative;
  float: right;
  font-size: 40px;
  line-height: 50px;
  cursor: pointer;
  display: none;
  color: var(--white-color);
  margin-right: 30px;
  top: 15px;
}

.mobile-menu-visible {
  overflow: hidden;
}

.mobile-menu-visible .tgmobile__menu {
  -webkit-transform: translateX(0%);
  -moz-transform: translateX(0%);
  -ms-transform: translateX(0%);
  -o-transform: translateX(0%);
  transform: translateX(0%);
}

.mobile-menu-visible .tgmobile__menu-backdrop {
  opacity: 1;
  visibility: visible;
}

.mobile-menu-visible .tgmobile__menu .close-btn {
  -webkit-transform: rotate(360deg);
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -o-transform: rotate(360deg);
  transform: rotate(360deg);
}

/*=================================
    03. Utilities
==================================*/
/*------------------- 3.1. Preloader -------------------*/
.preloader {
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: 999;
  background-color: var(--title-color);
  display: flex;
  align-items: center;
  justify-content: center;
}
.preloader-inner {
  display: block;
  width: 45px;
  height: 45px;
}
.preloader-inner span {
  box-sizing: border-box;
  display: block;
  position: absolute;
  width: 37px;
  height: 37px;
  margin: 4px;
  border: 4px solid transparent;
  border-radius: 50%;
  animation: preloader 1s cubic-bezier(0.5, 0, 0.5, 1) infinite;
  border-color: var(--theme-color) transparent transparent transparent;
}
.preloader-inner span:nth-child(1) {
  animation-delay: -0.1s;
}
.preloader-inner span:nth-child(2) {
  animation-delay: -0.2s;
}
.preloader-inner span:nth-child(3) {
  animation-delay: -0.3s;
}

@-webkit-keyframes preloader {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@keyframes preloader {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
/*------------------- 3.2. Buttons -------------------*/
.link-effect {
  position: relative;
  overflow: hidden;
  display: block;
  height: 17px;
  line-height: normal;
}
.link-effect .effect-1 {
  display: block;
  height: 100%;
  position: relative;
  top: 0%;
  transition: 0.3s;
}
.link-effect:hover .effect-1 {
  top: -100%;
}

.btn {
  position: relative;
  z-index: 2;
  vertical-align: middle;
  display: inline-block;
  border: none;
  text-align: center;
  background-color: var(--title-color);
  color: var(--white-color);
  font-family: var(--title-font);
  font-size: 14px;
  font-weight: 600;
  padding: 21.5px 40px;
  border-radius: 0;
  overflow: hidden;
}
.btn:focus, .btn:hover, .btn.active {
  color: var(--white-color);
  outline: none;
  box-shadow: none;
}
.btn:hover .effect-1 {
  top: -100%;
}
.btn.style2 {
  background: var(--theme-color);
  color: var(--title-color);
}
.btn.style2:focus, .btn.style2:hover, .btn.style2.active {
  color: var(--title-color);
}
.btn.style3 {
  border: 1px solid #4B4D49;
  background: transparent;
  color: var(--white-color);
}
.btn.style3:after, .btn.style3:before {
  border-top: 25px solid var(--white-color);
  border-bottom: 25px solid var(--white-color);
}
.btn.style3:focus, .btn.style3:hover, .btn.style3.active {
  color: var(--title-color);
}
.btn.style4 {
  background: var(--white-color);
  color: var(--theme-color);
}
.btn.style4:hover {
  color: var(--white-color);
}
.btn.style5 {
  border-radius: 0;
  padding: 21px 34px 23px;
  background: var(--title-color);
}
.btn.style5:before {
  border-radius: 0;
  transform: none;
  left: 0;
  width: 0;
}
.btn.style5:hover:before {
  background-color: var(--theme-color);
  width: 100%;
}
.btn.style6 {
  border-radius: 0;
  background: var(--theme-color);
  font-weight: 600;
  font-size: 14px;
  letter-spacing: 0.05em;
}
.btn.style6:before {
  border-radius: 0;
  transform: none;
  left: 0;
  width: 0;
}
.btn.style6:hover:before {
  width: 100%;
}
.btn.btn-border {
  color: var(--title-color);
  padding: 19.5px 21px 19.5px 25px;
}
.btn.btn-border:before {
  background: transparent;
  border: 1px solid var(--black-color);
}
.btn.btn-border:active, .btn.btn-border:focus, .btn.btn-border:hover {
  color: var(--white-color);
}
.btn.btn-border:active:before, .btn.btn-border:focus:before, .btn.btn-border:hover:before {
  background-color: var(--black-color);
}
.btn.btn-border2 {
  color: var(--theme-color);
  padding: 19.5px 40px 19.5px 40px;
}
.btn.btn-border2:before {
  background: transparent;
  border: 1px solid var(--theme-color);
}
.btn.btn-border2:active, .btn.btn-border2:focus, .btn.btn-border2:hover {
  color: var(--white-color);
}
.btn.btn-border2:active:before, .btn.btn-border2:focus:before, .btn.btn-border2:hover:before {
  background-color: var(--theme-color);
}
.btn.btn-border3 {
  color: var(--white-color);
  padding: 19.5px 21px 19.5px 25px;
}
.btn.btn-border3:before {
  background: transparent;
  border: 1px solid var(--white-color);
}
.btn.btn-border3:active, .btn.btn-border3:focus, .btn.btn-border3:hover {
  color: var(--theme-color);
}
.btn.btn-border3:active:before, .btn.btn-border3:focus:before, .btn.btn-border3:hover:before {
  background-color: var(--white-color);
}
.btn.btn-border4 {
  color: var(--title-color);
  border: 1px solid var(--title-color);
  border-radius: 0;
  font-family: var(--title-font);
}
.btn.btn-border4:before {
  display: none;
}
.btn.btn-border4:active, .btn.btn-border4:focus, .btn.btn-border4:hover {
  color: var(--white-color);
  background: var(--title-color);
}
.btn.style-r0:before {
  border-radius: 0;
}
.btn.btn-fw {
  width: 100%;
}
.btn.btn-fw:before, .btn.btn-fw:after {
  display: none;
}
.btn.btn-fw:hover {
  background-color: var(--title-color);
}
.btn.circle-btn {
  border-radius: 50%;
  height: 180px;
  width: 180px;
  line-height: 180px;
  padding: 0;
  display: inline-flex;
  align-items: center;
  justify-content: center;
}
.btn.circle-btn.style2 .link-effect {
  height: 48px;
}
.btn.circle-btn.style2 .link-effect .effect-1 {
  line-height: 24px;
}

.icon-btn {
  display: inline-block;
  width: var(--btn-size, 46px);
  height: var(--btn-size, 46px);
  line-height: var(--btn-size, 46px);
  font-size: var(--btn-font-size, 16px);
  background-color: var(--theme-color);
  color: var(--white-color);
  text-align: center;
  border-radius: 0px;
  border: none;
  transition: 0.4s ease-in-out;
}
.icon-btn:hover {
  background-color: var(--title-color);
  color: var(--white-color);
}
.icon-btn.btn-border {
  background: transparent;
  border: 2px solid var(--theme-color);
  color: var(--theme-color);
}
.icon-btn.btn-border:hover {
  background: var(--theme-color);
  color: var(--white-color);
}

.play-btn {
  display: inline-block;
  position: relative;
  z-index: 1;
}
.play-btn > i {
  display: inline-block;
  width: var(--icon-size, 110px);
  height: var(--icon-size, 110px);
  line-height: var(--icon-size, 110px);
  text-align: center;
  background-color: var(--white-color);
  border: 1px solid rgba(199, 134, 101, 0.2);
  color: var(--theme-color);
  font-size: var(--icon-font-size, 30px);
  border-radius: 50%;
  z-index: 1;
  transition: all ease 0.4s;
}
.play-btn:after, .play-btn:before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  background-color: var(--white-color);
  border: 0;
  z-index: -1;
  border-radius: 50%;
  transition: all ease 0.4s;
}
.play-btn:after {
  animation-delay: 2s;
}
.play-btn:hover i {
  background-color: var(--theme-color);
  color: var(--white-color);
}
.play-btn.style2:before, .play-btn.style2:after {
  background-color: transparent;
  border: 1px solid var(--white-color);
}
.play-btn.style3 > i {
  background-color: var(--theme-color);
  color: var(--white-color);
  font-size: 20px;
}
.play-btn.style3:before, .play-btn.style3:after {
  background-color: var(--white-color);
}
.play-btn.style3:hover > i {
  background-color: var(--white-color);
  color: var(--theme-color);
}

.link-btn {
  font-size: 14px;
  font-weight: 600;
  font-family: var(--title-font);
  display: inline-block;
  line-height: 0.8;
  position: relative;
  padding-bottom: 6px;
  margin-bottom: 0px;
  text-transform: uppercase;
  color: var(--title-color);
  display: inline-flex;
  gap: 10px;
  text-decoration: none;
}
.link-btn i {
  font-size: 0.9rem;
}
.link-btn:after, .link-btn:before {
  content: "";
  position: absolute;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 2px;
  background-color: var(--title-color);
  transition: all ease 0.4s;
}
.link-btn:after {
  width: 0;
  left: 0;
  transition: all ease 0.8s;
}
.link-btn:hover {
  color: var(--title-color);
}
.link-btn:hover::before {
  width: 0;
}
.link-btn:hover:after {
  width: 100%;
}
.link-btn:hover .effect-1 {
  top: -100%;
}
.link-btn.style2 {
  font-weight: 500;
  font-family: var(--body-font);
  color: var(--title-color);
  display: inline-flex;
  text-transform: capitalize;
}
.link-btn.style2:before {
  background-color: var(--title-color);
  bottom: -3px;
  left: 0px;
  height: 1px;
  width: 100%;
}
.link-btn.style2:hover {
  color: var(--theme-color);
}
.link-btn.style2:hover:before {
  background-color: var(--theme-color);
  width: calc(100% - 55px);
}
.link-btn.text-theme:before, .link-btn.text-theme:after {
  background: var(--theme-color);
}
.link-btn.text-theme img {
  filter: brightness(99);
}

.link-btn2 {
  background: transparent;
  border: 0;
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 14px;
  font-weight: 600;
  font-family: var(--title-font);
  color: var(--white-color);
  padding: 0;
}

.line-btn {
  font-size: 14px;
  font-weight: 600;
  display: inline-block;
  line-height: 0.8;
  position: relative;
  padding-bottom: 4px;
  margin-bottom: -1px;
  text-transform: uppercase;
  color: var(--theme-color);
}
.line-btn i {
  margin-left: 5px;
  font-size: 0.9rem;
}
.line-btn:before {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 1px;
  background-color: var(--theme-color);
  transition: all ease 0.4s;
}
.line-btn:hover {
  color: var(--title-color);
}
.line-btn:hover::before {
  background-color: var(--title-color);
  width: 45px;
}

.scroll-top {
  position: fixed;
  right: 30px;
  bottom: 30px;
  height: 50px;
  width: 50px;
  cursor: pointer;
  display: block;
  border-radius: 50px;
  z-index: 10000;
  opacity: 1;
  visibility: hidden;
  transform: translateY(45px);
  transition: all 300ms linear;
}
.scroll-top:after {
  content: "\f062";
  font-family: var(--icon-font);
  font-weight: 700;
  position: absolute;
  text-align: center;
  line-height: 50px;
  font-size: 20px;
  color: var(--title-color);
  left: 0;
  top: 0;
  height: 50px;
  width: 50px;
  cursor: pointer;
  display: block;
  z-index: 1;
  border-radius: 50%;
  box-shadow: inset 0 0 0 2px rgba(0, 0, 0, 0.04);
}
.scroll-top svg {
  color: var(--title-color);
  border-radius: 50%;
  background: transparent;
}
.scroll-top svg path {
  fill: none;
}
.scroll-top .progress-circle path {
  stroke: var(--title-color);
  stroke-width: 4px;
  box-sizing: border-box;
  transition: all 400ms linear;
}
.scroll-top.show {
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
}

/* Small devices */
@media (max-width: 767px) {
  .play-btn {
    --icon-size: 70px;
    --icon-font-size: 24px;
  }
  .btn {
    font-size: 14px;
    font-weight: 600;
    line-height: 1;
    padding: 17px 25px;
  }
}
/* Extra small devices */
@media (max-width: 575px) {
  .scroll-top {
    right: 15px;
    bottom: 15px;
    height: 40px;
    width: 40px;
  }
  .scroll-top:after {
    line-height: 40px;
    font-size: 16px;
    height: 40px;
    width: 40px;
  }
  .btn {
    padding: 15.5px 20px;
    font-size: 12px;
    font-weight: 500;
  }
  .btn.circle-btn {
    height: 120px;
    width: 120px;
    line-height: 120px;
  }
}
body.bg-title .scroll-top svg {
  color: var(--white-color);
}
body.bg-title .scroll-top svg path {
  stroke: var(--theme-color);
}
body.bg-title .scroll-top::after {
  color: var(--white-color);
  box-shadow: inset 0 0 0 2px rgba(255, 255, 255, 0.4);
}

/*------------------- 3.3. Titles -------------------*/
.sec-title {
  margin-bottom: calc(var(--section-title-space) - 43px);
  margin-top: -0.18em;
  font-weight: 600;
  letter-spacing: -1.8px;
  /* Extra small devices */
}
@media (max-width: 575px) {
  .sec-title {
    letter-spacing: normal;
  }
}

.sub-title {
  color: var(--theme-color);
  text-transform: uppercase;
  font-size: 14px;
  position: relative;
  font-weight: 500;
  font-family: var(--body-font);
  letter-spacing: 1.4px;
  margin-bottom: 24px;
  display: flex;
  align-items: center;
  margin-top: -0.4em;
}
.sub-title:after {
  content: "";
  position: relative;
  height: 1px;
  width: 50px;
  display: inline-block;
  background: var(--theme-color);
  margin-left: 10px;
}
.sub-title.style2 {
  display: block;
  letter-spacing: 4.2px;
  margin-top: -0.4em;
}
.sub-title.style2:after {
  display: none;
}

.box-title {
  font-size: 24px;
  line-height: 1.417;
  font-weight: 600;
  margin-top: -0.3em;
}
.box-title a {
  color: inherit;
}
.box-title a:hover {
  color: var(--theme-color);
}

.sec-text {
  font-size: 18px;
  margin-top: 30px;
  line-height: 1.667;
  margin-bottom: 0;
  /* Medium Large devices */
}
@media (max-width: 1299px) {
  .sec-text {
    font-size: 16px;
  }
}

.title-area {
  margin-bottom: calc(var(--section-title-space) - 17px);
  position: relative;
  z-index: 2;
}
.title-area.mb-0 .sec-title {
  margin-bottom: 17px;
}
.title-area .btn {
  margin-top: 36px;
}
.title-area .checklist {
  margin-top: 30px;
}

.white-title {
  color: #fff;
  font-weight: 700;
  position: relative;
  padding-bottom: 9px;
  margin-bottom: 19px;
}
.white-title:after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  background: #fff;
  height: 2px;
  width: 50px;
}

.page-title {
  font-size: 40px;
  font-weight: 500;
  margin-top: -0.3em;
}

.page-subtitle {
  font-size: 30px;
  font-weight: 500;
}

.shadow-text {
  font-size: 120px;
  font-weight: 500;
  font-family: var(--title-font);
  color: rgba(0, 0, 0, 0.03);
}

/* Medium Large devices */
@media (max-width: 1399px) {
  .sec-title {
    font-size: 45px;
    line-height: 1.2;
  }
  .sec-text {
    margin-top: 0px;
  }
  .shadow-text {
    font-size: 100px;
  }
}
/* Large devices */
@media (max-width: 1199px) {
  .title-area,
  .sec-title {
    --section-title-space: 60px;
  }
  .title-area.mb-45,
  .sec-title.mb-45 {
    margin-bottom: 36px;
  }
  .title-area.mb-50,
  .sec-title.mb-50 {
    margin-bottom: 40px;
  }
  .sec-btn,
  .title-line {
    --section-title-space: 55px;
  }
  .sec-text {
    font-size: 16px;
  }
  .shadow-text {
    font-size: 80px;
  }
}
/* Medium devices */
@media (max-width: 991px) {
  .title-area,
  .sec-title {
    --section-title-space: 50px;
  }
  .title-area.mb-45,
  .sec-title.mb-45 {
    margin-bottom: 35px;
  }
  .sec-btn,
  .title-line {
    --section-title-space: 50px;
  }
  .sub-title {
    font-size: 14px;
  }
  .shadow-text {
    font-size: 70px;
  }
}
/* Small devices */
@media (max-width: 767px) {
  .sec-title {
    font-size: 32px;
  }
  .shadow-text {
    font-size: 50px;
  }
}
/* Extra small devices */
@media (max-width: 575px) {
  .shadow-text {
    display: none;
  }
}
@media (max-width: 390px) {
  .sec-title {
    font-size: 30px;
  }
}
.sec_title_static {
  position: absolute;
  height: 100%;
  display: block;
}
.sec_title_static .sec_title_wrap {
  position: sticky;
  top: 150px;
  flex-direction: column;
  flex-wrap: wrap;
  align-items: flex-start;
  margin: auto;
}

/* Large devices */
@media (max-width: 1199px) {
  .sec_title_static {
    position: initial;
    height: auto;
    text-align: center;
    margin-bottom: 40px;
  }
}
/*------------------- 3.4. Common -------------------*/
.shape-mockup-wrap {
  z-index: 2;
  position: relative;
}

.shape-mockup {
  position: absolute;
  z-index: -1;
}
.shape-mockup.z-index-3 {
  z-index: 3;
}

.z-index-step1 {
  position: relative;
  z-index: 4 !important;
}

.z-index-common {
  position: relative;
  z-index: 3;
}

.z-index-3 {
  z-index: 3;
}

.z-index-n1 {
  z-index: -1;
}

.media-body {
  flex: 1;
}

.style-italic {
  font-style: italic;
}

.badge {
  position: absolute;
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  display: inline-block;
  text-align: center;
  background-color: var(--theme-color);
  color: var(--white-color);
  padding: 0.2em 0.45em;
  font-size: 0.6em;
  border-radius: 50%;
  top: 7px;
  left: 12px;
  font-weight: 400;
  transition: 0.3s ease-in-out;
}

.social-btn {
  display: flex;
  gap: 10px;
}
.social-btn a {
  height: var(--icon-size, 48px);
  width: var(--icon-size, 48px);
  line-height: 48px;
  display: inline-block;
  color: var(--title-color);
  text-align: center;
  font-size: 16px;
  border-radius: 50%;
  border: 1px solid var(--smoke-color);
  background: var(--smoke-color);
}
.social-btn a:hover {
  background: var(--title-color);
  color: var(--white-color);
  border-color: var(--title-color);
}
.social-btn.style2 {
  gap: 25px;
}
.social-btn.style2 .link-effect {
  height: 25px;
}
.social-btn.style2 a {
  background: transparent;
  width: auto;
  height: auto;
  line-height: normal;
  border-radius: 0;
  color: var(--white-color);
  border: 0;
  font-size: 20px;
}
.social-btn.style2 a:hover {
  background: transparent;
  color: var(--theme-color);
}
.social-btn.style3 {
  gap: 20px;
}
.social-btn.style3 .link-effect {
  height: 25px;
}
.social-btn.style3 a {
  background: transparent;
  width: auto;
  height: auto;
  line-height: normal;
  border-radius: 0;
  color: var(--title-color);
  border: 0;
  font-size: 20px;
}
.social-btn.style3 a:hover {
  background: transparent;
  color: var(--title-color);
}
.social-btn.style4 a {
  --icon-size: 50px;
  line-height: 50px;
  font-size: 16px;
  background: transparent;
  color: var(--white-color);
  border-color: #4B4D49;
}
.social-btn.style4 a:hover {
  background: #4B4D49;
}
.social-btn.color-theme a {
  color: var(--body-color);
  border-color: var(--theme-color);
}

.global-carousel.slider-shadow .slick-list {
  padding: 30px 0px 40px 0px !important;
  margin: -30px 0px -40px 0px;
}

.btn-group {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 20px;
}
.btn-group .btn {
  border-radius: 0;
  flex: none;
}
.btn-group.style2 {
  gap: 20px 70px;
  /* Small devices */
}
@media (max-width: 767px) {
  .btn-group.style2 {
    gap: 20px 30px;
  }
}

/*******Magnific Image*******/
.mfp-zoom-in .mfp-content {
  opacity: 0;
  -webkit-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
  -webkit-transform: scale(0.7);
  -ms-transform: scale(0.7);
  transform: scale(0.7);
}

.mfp-zoom-in.mfp-bg {
  opacity: 0;
  -webkit-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.mfp-zoom-in.mfp-ready .mfp-content {
  opacity: 1;
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.mfp-zoom-in.mfp-ready.mfp-bg {
  opacity: 0.7;
}

.mfp-zoom-in.mfp-removing .mfp-content {
  -webkit-transform: scale(0.7);
  -ms-transform: scale(0.7);
  transform: scale(0.7);
  opacity: 0;
}

.mfp-zoom-in.mfp-removing.mfp-bg {
  opacity: 0;
}

/*video jarallax*********/
.jarallax {
  position: relative;
  z-index: 0;
}

.jarallax > .jarallax-img,
picture.jarallax-img img {
  position: absolute;
  object-fit: cover;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
}

/*------------------- 3.6. Font -------------------*/
.font-icon {
  font-family: var(--icon-font);
}

.font-title {
  font-family: var(--title-font);
}

.font-body {
  font-family: var(--body-font);
}

.fw-extralight {
  font-weight: 100;
}

.fw-light {
  font-weight: 300;
}

.fw-normal {
  font-weight: 400;
}

.fw-medium {
  font-weight: 500 !important;
}

.fw-semibold {
  font-weight: 600 !important;
}

.fw-bold {
  font-weight: 700;
}

.fw-extrabold {
  font-weight: 800;
}

.fs-md {
  font-size: 18px;
}

.fs-xs {
  font-size: 14px;
}

.text-underline {
  text-decoration: underline;
}

/*------------------- 3.7. Background -------------------*/
.bg-theme {
  background-color: var(--theme-color) !important;
}

.bg-theme2 {
  background-color: var(--theme-color) !important;
}

.bg-smoke {
  background-color: var(--smoke-color) !important;
}

.bg-smoke2 {
  background-color: var(--smoke-color2) !important;
}

.bg-smoke3 {
  background-color: var(--smoke-color3) !important;
}

.bg-smoke4 {
  background-color: var(--smoke-color4) !important;
}

.bg-smoke5 {
  background-color: var(--smoke-color5) !important;
}

.bg-white {
  background-color: var(--white-color) !important;
}

.bg-black {
  background-color: var(--black-color) !important;
}

.bg-gray {
  background-color: var(--gray-color) !important;
}

.bg-title {
  background-color: var(--title-color) !important;
}

.background-image,
[data-bg-src] {
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
}

.bg-fluid {
  background-repeat: no-repeat;
  background-size: 100% 100%;
  background-position: center center;
}

.bg-auto {
  background-size: auto auto;
}

.bg-top-center {
  background-size: auto;
  background-position: top center;
}

.bg-repeat {
  background-size: auto;
  background-repeat: repeat;
}

/*------------------- 3.8. Text Color -------------------*/
.text-theme {
  color: var(--theme-color) !important;
}

.text-theme2 {
  color: var(--theme-color) !important;
}

.text-title {
  color: var(--title-color) !important;
}

.text-body {
  color: var(--body-color) !important;
}

.text-white {
  color: var(--white-color) !important;
}

.text-smoke {
  color: var(--smoke-color) !important;
}

.text-light {
  color: var(--light-color) !important;
}

.text-yellow {
  color: var(--yellow-color) !important;
}

.text-success {
  color: var(--success-color) !important;
}

.text-error {
  color: var(--error-color) !important;
}

.text-inherit {
  color: inherit;
}
.text-inherit:hover {
  color: var(--theme-color);
}

a.text-theme:hover,
.text-reset:hover {
  text-decoration: none;
}

/*------------------- 3.9. Overlay -------------------*/
.overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
}

.position-center {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

[data-overlay] {
  position: relative;
  z-index: 2;
}
[data-overlay] [class^=col-],
[data-overlay] [class*=col-] {
  z-index: 1;
}

[data-overlay]:before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 1;
}

[data-overlay=theme]:before {
  background-color: var(--theme-color);
}

[data-overlay=title]:before {
  background-color: var(--title-color);
}

[data-overlay=white]:before {
  background-color: var(--white-color);
}

[data-overlay=black]:before {
  background-color: var(--black-color);
}

[data-overlay=overlay1]:before {
  background-color: #131B23;
}

[data-opacity="1"]:before {
  opacity: 0.1;
}

[data-opacity="2"]:before {
  opacity: 0.2;
}

[data-opacity="3"]:before {
  opacity: 0.3;
}

[data-opacity="4"]:before {
  opacity: 0.4;
}

[data-opacity="5"]:before {
  opacity: 0.5;
}

[data-opacity="6"]:before {
  opacity: 0.6;
}

[data-opacity="7"]:before {
  opacity: 0.7;
}

[data-opacity="8"]:before {
  opacity: 0.8;
}

[data-opacity="9"]:before {
  opacity: 0.9;
}

[data-opacity="10"]:before {
  opacity: 1;
}

/*------------------- 3.10. Animation -------------------*/
.ripple-animation, .play-btn:after, .play-btn:before {
  animation-duration: var(--ripple-ani-duration);
  animation-timing-function: ease-in-out;
  animation-iteration-count: infinite;
  animation-name: ripple;
}

@keyframes ripple {
  0% {
    transform: scale(1);
    opacity: 0;
  }
  30% {
    opacity: 1;
  }
  100% {
    transform: scale(2.1);
    opacity: 0;
  }
}
.movingX {
  animation: movingX 8s linear infinite;
}

@keyframes movingX {
  0% {
    transform: translateX(0);
  }
  50% {
    transform: translateX(50px);
  }
  100% {
    transform: translateX(0);
  }
}
.moving {
  animation: moving 8s linear infinite;
}

@keyframes moving {
  0% {
    transform: translateX(0);
  }
  50% {
    transform: translateX(-50px);
  }
  100% {
    transform: translateX(0);
  }
}
.jump {
  animation: jumpAni 7s linear infinite;
}

.jump1 {
  animation: jumpAni 6s linear infinite;
}

.jump2 {
  animation: jumpAni 5s linear infinite;
}

.jump3 {
  animation: jumpAni 4s linear infinite;
}

@keyframes jumpAni {
  0% {
    transform: translateY(0);
  }
  40% {
    transform: translateY(-30px);
  }
  100% {
    transform: translateY(0);
  }
}
.jump-reverse {
  animation: jumpReverseAni 7s linear infinite;
}

@keyframes jumpReverseAni {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(30px);
  }
  100% {
    transform: translateY(0);
  }
}
.spin {
  animation: spin 15s linear infinite;
}

.spin-slow {
  animation: spin 50s linear infinite;
}

@keyframes spin {
  0% {
    transform: rotate(0);
  }
  100% {
    transform: rotate(360deg);
  }
}
@keyframes animate-positive {
  0% {
    width: 0;
  }
}
.scalein.slider-animated {
  --animation-name: scalein;
}

.slidetopleft.slider-animated {
  --animation-name: slidetopleft;
}

.slidebottomright.slider-animated {
  --animation-name: slidebottomright;
}

.slideinleft.slider-animated {
  --animation-name: slideinleft;
}

.slideinright.slider-animated {
  --animation-name: slideinright;
}

.slideinup.slider-animated {
  --animation-name: slideinup;
}

.slideindown.slider-animated {
  --animation-name: slideindown;
}

.rollinleft.slider-animated {
  --animation-name: rollinleft;
}

.rollinright.slider-animated {
  --animation-name: rollinright;
}

.scalein,
.slidetopleft,
.slidebottomright,
.slideinleft,
.slideinright,
.slideindown,
.slideinup,
.rollinleft,
.rollinright {
  opacity: 0;
  animation-fill-mode: both;
  animation-iteration-count: 1;
  animation-duration: 1s;
  animation-delay: 0.3s;
  animation-name: var(--animation-name);
}

.slider-animated {
  opacity: 1;
}

@keyframes slideinup {
  0% {
    opacity: 0;
    transform: translateY(70px);
  }
  100% {
    transform: translateY(0);
  }
}
@keyframes slideinright {
  0% {
    opacity: 0;
    transform: translateX(70px);
  }
  100% {
    transform: translateX(0);
  }
}
@keyframes slideindown {
  0% {
    opacity: 0;
    transform: translateY(-70px);
  }
  100% {
    transform: translateY(0);
  }
}
@keyframes slideinleft {
  0% {
    opacity: 0;
    transform: translateX(-70px);
  }
  100% {
    transform: translateX(0);
  }
}
@keyframes slidebottomright {
  0% {
    opacity: 0;
    transform: translateX(100px) translateY(100px);
  }
  100% {
    transform: translateX(0) translateY(0);
  }
}
@keyframes slidetopleft {
  0% {
    opacity: 0;
    transform: translateX(-100px) translateY(-100px);
  }
  100% {
    transform: translateX(0) translateY(0);
  }
}
@keyframes rotate {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
  0% {
    border-right-color: transparent;
    border-bottom-color: transparent;
    border-top-color: transparent;
    border-left-color: transparent;
  }
  75% {
    border-top-color: #fff;
    border-left-color: #fff;
    border-right-color: #fff;
    border-bottom-color: transparent;
  }
  100% {
    border-right-color: transparent;
    border-bottom-color: transparent;
    border-top-color: transparent;
    border-left-color: transparent;
  }
}
/*img-animation**********************/
.img-custom-anim-right {
  animation: img-anim-right 1.3s forwards cubic-bezier(0.645, 0.045, 0.355, 1) 0.4s;
  opacity: 0;
}

@keyframes img-anim-right {
  0% {
    transform: translateX(5%);
    clip-path: inset(0 0 0 100%);
    opacity: 0;
  }
  100% {
    transform: translateX(0);
    clip-path: inset(0 0 0 0);
    opacity: 1;
  }
}
.img-custom-anim-left {
  animation: img-anim-left 1.3s forwards cubic-bezier(0.645, 0.045, 0.355, 1) 0.4s;
  opacity: 0;
}

@keyframes img-anim-left {
  0% {
    transform: translateX(-5%);
    clip-path: inset(0 100% 0 0);
    opacity: 0;
  }
  100% {
    transform: translateX(0);
    clip-path: inset(0 0 0 0);
    opacity: 1;
  }
}
.img-custom-anim-top {
  animation: img-anim-top 1.3s forwards cubic-bezier(0.645, 0.045, 0.355, 1);
  opacity: 0;
}

@keyframes img-anim-top {
  0% {
    transform: translateY(-5%);
    clip-path: inset(0 0 100% 0);
    opacity: 0;
  }
  100% {
    transform: translateY(0);
    clip-path: inset(0 0 0 0);
    opacity: 1;
  }
}
/*=================================
    04. Template Style
==================================*/
/*------------------- 4.1. Widget  -------------------*/
.widget_nav_menu ul,
.widget_meta ul,
.widget_pages ul,
.widget_archive ul,
.widget_price_filter ul,
.wp-block-page-list ul,
.widget_categories ul {
  list-style: none;
  padding: 0;
  margin: 0 0 0 0;
}
.widget_nav_menu .menu,
.widget_nav_menu > ul,
.widget_meta .menu,
.widget_meta > ul,
.widget_pages .menu,
.widget_pages > ul,
.widget_archive .menu,
.widget_archive > ul,
.widget_price_filter .menu,
.widget_price_filter > ul,
.wp-block-page-list .menu,
.wp-block-page-list > ul,
.widget_categories .menu,
.widget_categories > ul {
  margin: -3px 0 0px 0;
}
.widget_nav_menu a,
.widget_meta a,
.widget_pages a,
.widget_archive a,
.widget_price_filter a,
.wp-block-page-list a,
.widget_categories a {
  display: block;
  border: none;
  margin: 0 0px 12px 0px;
  padding: 0px;
  font-size: 16px;
  font-weight: 300;
  font-family: var(--body-font);
  line-height: 1.313;
  color: var(--title-color);
  position: relative;
  display: flex;
  align-items: center;
}
.widget_nav_menu a:before,
.widget_meta a:before,
.widget_pages a:before,
.widget_archive a:before,
.widget_price_filter a:before,
.wp-block-page-list a:before,
.widget_categories a:before {
  content: "";
  position: relative;
  height: 18px;
  width: 18px;
  border: 1px solid #DCDCDC;
  border-radius: 50%;
  margin-right: 14px;
}
.widget_nav_menu a:after,
.widget_meta a:after,
.widget_pages a:after,
.widget_archive a:after,
.widget_price_filter a:after,
.wp-block-page-list a:after,
.widget_categories a:after {
  content: "";
  position: absolute;
  left: 5px;
  top: 6px;
  height: 8px;
  width: 8px;
  border-radius: 50%;
  background: var(--theme-color);
  transition: 0.4s;
  opacity: 0;
}
.widget_nav_menu a i,
.widget_meta a i,
.widget_pages a i,
.widget_archive a i,
.widget_price_filter a i,
.wp-block-page-list a i,
.widget_categories a i {
  margin-right: 12px;
  transition: 0.4s all;
}
.widget_nav_menu a.active, .widget_nav_menu a:hover,
.widget_meta a.active,
.widget_meta a:hover,
.widget_pages a.active,
.widget_pages a:hover,
.widget_archive a.active,
.widget_archive a:hover,
.widget_price_filter a.active,
.widget_price_filter a:hover,
.wp-block-page-list a.active,
.wp-block-page-list a:hover,
.widget_categories a.active,
.widget_categories a:hover {
  color: var(--theme-color);
}
.widget_nav_menu a.active i, .widget_nav_menu a:hover i,
.widget_meta a.active i,
.widget_meta a:hover i,
.widget_pages a.active i,
.widget_pages a:hover i,
.widget_archive a.active i,
.widget_archive a:hover i,
.widget_price_filter a.active i,
.widget_price_filter a:hover i,
.wp-block-page-list a.active i,
.wp-block-page-list a:hover i,
.widget_categories a.active i,
.widget_categories a:hover i {
  color: var(--theme-color);
  opacity: 1;
}
.widget_nav_menu a.active ~ span, .widget_nav_menu a:hover ~ span,
.widget_meta a.active ~ span,
.widget_meta a:hover ~ span,
.widget_pages a.active ~ span,
.widget_pages a:hover ~ span,
.widget_archive a.active ~ span,
.widget_archive a:hover ~ span,
.widget_price_filter a.active ~ span,
.widget_price_filter a:hover ~ span,
.wp-block-page-list a.active ~ span,
.wp-block-page-list a:hover ~ span,
.widget_categories a.active ~ span,
.widget_categories a:hover ~ span {
  color: var(--theme-color);
}
.widget_nav_menu a.active:after, .widget_nav_menu a:hover:after,
.widget_meta a.active:after,
.widget_meta a:hover:after,
.widget_pages a.active:after,
.widget_pages a:hover:after,
.widget_archive a.active:after,
.widget_archive a:hover:after,
.widget_price_filter a.active:after,
.widget_price_filter a:hover:after,
.wp-block-page-list a.active:after,
.wp-block-page-list a:hover:after,
.widget_categories a.active:after,
.widget_categories a:hover:after {
  opacity: 1;
}
.widget_nav_menu li,
.widget_meta li,
.widget_pages li,
.widget_archive li,
.widget_price_filter li,
.wp-block-page-list li,
.widget_categories li {
  display: block;
  position: relative;
}
.widget_nav_menu li > span,
.widget_meta li > span,
.widget_pages li > span,
.widget_archive li > span,
.widget_price_filter li > span,
.wp-block-page-list li > span,
.widget_categories li > span {
  font-size: 16px;
  position: absolute;
  right: 0;
  top: 0px;
  background: transparent;
  border-radius: 0;
  height: auto;
  width: auto;
  line-height: initial;
  text-align: center;
  color: var(--body-color);
  transition: all ease 0.4s;
}
.widget_nav_menu li:last-child a,
.widget_meta li:last-child a,
.widget_pages li:last-child a,
.widget_archive li:last-child a,
.widget_price_filter li:last-child a,
.wp-block-page-list li:last-child a,
.widget_categories li:last-child a {
  margin-bottom: -5px;
  padding-bottom: 0;
  border-bottom: 0;
}
.widget_nav_menu .wp-block-navigation__submenu-container,
.widget_nav_menu .sub-menu,
.widget_nav_menu .children,
.widget_meta .wp-block-navigation__submenu-container,
.widget_meta .sub-menu,
.widget_meta .children,
.widget_pages .wp-block-navigation__submenu-container,
.widget_pages .sub-menu,
.widget_pages .children,
.widget_archive .wp-block-navigation__submenu-container,
.widget_archive .sub-menu,
.widget_archive .children,
.widget_price_filter .wp-block-navigation__submenu-container,
.widget_price_filter .sub-menu,
.widget_price_filter .children,
.wp-block-page-list .wp-block-navigation__submenu-container,
.wp-block-page-list .sub-menu,
.wp-block-page-list .children,
.widget_categories .wp-block-navigation__submenu-container,
.widget_categories .sub-menu,
.widget_categories .children {
  margin-left: 10px;
}
.widget_nav_menu .wp-block-navigation__submenu-container li a,
.widget_nav_menu .sub-menu li a,
.widget_nav_menu .children li a,
.widget_meta .wp-block-navigation__submenu-container li a,
.widget_meta .sub-menu li a,
.widget_meta .children li a,
.widget_pages .wp-block-navigation__submenu-container li a,
.widget_pages .sub-menu li a,
.widget_pages .children li a,
.widget_archive .wp-block-navigation__submenu-container li a,
.widget_archive .sub-menu li a,
.widget_archive .children li a,
.widget_price_filter .wp-block-navigation__submenu-container li a,
.widget_price_filter .sub-menu li a,
.widget_price_filter .children li a,
.wp-block-page-list .wp-block-navigation__submenu-container li a,
.wp-block-page-list .sub-menu li a,
.wp-block-page-list .children li a,
.widget_categories .wp-block-navigation__submenu-container li a,
.widget_categories .sub-menu li a,
.widget_categories .children li a {
  border-bottom: 1px solid #E6E6E6;
  margin: 0 0px 19px 0px;
  padding: 0px 0px 20px;
}

.widget_nav_menu a,
.widget_meta a,
.widget_pages a {
  padding-right: 20px;
}

.widget_nav_menu .sub-menu {
  margin-left: 10px;
}

.wp-block-page-list {
  padding: 0;
  margin: -3px 0 0px 0;
}

.product_list_widget .star-rating {
  width: auto;
  font-size: 12px;
}
.product_list_widget li a {
  color: var(--title-color);
}
.product_list_widget li a:hover {
  color: var(--theme-color);
}
.product_list_widget li:last-child {
  padding-bottom: 0 !important;
}

.wp-block-archives {
  list-style: none;
  margin: 0;
  padding: 0;
  margin-bottom: 20px;
}
.wp-block-archives a:not(:hover) {
  color: inherit;
}

.blog-single ul.wp-block-archives li {
  margin: 5px 0;
}

.widget {
  margin-bottom: 30px;
  position: relative;
  padding: var(--widget-padding-x, 40px);
  background: var(--white-color);
  border: 1px solid #E3E5DE;
  border-radius: 0px;
}
.widget[data-overlay]:before {
  z-index: -1;
}

.widget_title {
  position: relative;
  font-size: 24px;
  font-weight: 500;
  font-family: var(--title-font);
  line-height: 1em;
  margin: -0.12em 0 47px 0;
}

.widget.widget_search {
  padding: 0;
  border: 0;
}
.widget .search-form {
  position: relative;
  display: flex;
}
.widget .search-form input {
  background: var(--white-color);
  border: 1px solid #E3E5DE;
  flex: 1;
  color: var(--body-color);
  font-size: 16px;
  font-weight: 400;
  border-radius: 0px;
  padding: 0 60px 0 30px;
}
.widget .search-form input::placeholder {
  color: var(--body-color);
}
.widget .search-form button {
  position: absolute;
  right: 0px;
  top: 0px;
  border: none;
  font-size: 14px;
  background-color: transparent;
  color: var(--white-color);
  display: inline-block;
  height: 55px;
  width: 55px;
  line-height: 55px;
  border-radius: 0px;
}
.widget .search-form:hover button {
  color: var(--title-color);
}

.widget-author {
  padding-top: 60px;
  padding-bottom: 60px;
  text-align: center;
}
.widget-author .widget-author-thumb {
  margin-bottom: 30px;
}
.widget-author .widget_title {
  font-size: 30px;
  margin-bottom: 4px;
}
.widget-author .widget_title:after {
  display: none;
}
.widget-author .widget-author-desig {
  font-size: 18px;
  font-weight: 400;
  font-family: var(--title-font);
  color: var(--body-color);
  display: block;
}
.widget-author .social-btn {
  display: inline-flex;
  margin-top: 22px;
}

.wp-block-tag-cloud,
.tagcloud {
  margin-right: -3px;
  margin-bottom: -10px;
}
.wp-block-tag-cloud a,
.tagcloud a {
  display: inline-block;
  border: 1px solid #E3E5DE;
  font-size: 13px !important;
  font-weight: 500;
  font-family: var(--body-font);
  text-transform: uppercase;
  height: 40px;
  line-height: 40px;
  padding: 0px 21px;
  margin-right: 5px;
  margin-bottom: 10px;
  color: var(--body-color);
  background-color: var(--white-color);
  border-radius: 0px;
}
.wp-block-tag-cloud a:hover,
.tagcloud a:hover {
  background-color: var(--title-color);
  color: var(--white-color) !important;
  border-color: var(--title-color);
}

.widget_gallery .insta-feed {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 10px;
}
.widget_gallery a {
  position: relative;
  border-radius: 0px;
  display: inline-block;
  flex: none;
}
.widget_gallery a img {
  border-radius: 0px;
  width: 100%;
}
.widget_gallery a:after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background-color: var(--theme-color);
  border-radius: 0px;
  transition: 0.4s;
  opacity: 0;
}
.widget_gallery a i {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  z-index: 1;
  opacity: 0;
  transition: 0.4s;
  color: var(--white-color);
  font-size: 20px;
}
.widget_gallery a:hover i {
  opacity: 1;
}
.widget_gallery a:hover:after {
  opacity: 0.7;
}

.base {
  border-radius: 6px;
  position: absolute;
  left: 1302px;
  top: 2098px;
  width: 80px;
  height: 78px;
  z-index: 209;
}

.recent-post {
  display: flex;
  align-items: center;
  margin-bottom: 15px;
  background: transparent;
  border-radius: 6px;
  transition: 0.4s;
}
.recent-post:last-child {
  margin-bottom: 0px;
  border: 0;
}
.recent-post .media-img {
  margin-right: 20px;
  width: 85px;
  overflow: hidden;
  border-radius: 0px;
}
.recent-post .media-img img {
  width: 100%;
  border-radius: 0px;
  transition: 0.4s ease-in-out;
}
.recent-post .post-title {
  font-weight: 500;
  font-size: 20px;
  margin: 6px 0 0;
  font-family: var(--title-font);
  text-transform: capitalize;
}
.recent-post .recent-post-meta {
  margin-bottom: -2px;
}
.recent-post .recent-post-meta a {
  font-size: 14px;
  font-weight: 400;
  text-transform: uppercase;
  font-family: var(--body-font);
  color: var(--body-color);
  margin-bottom: 0px;
  display: block;
}
.recent-post .recent-post-meta a i {
  margin-right: 3px;
  transition: 0.4s;
}
.recent-post .recent-post-meta a:hover {
  color: var(--theme-color);
}
.recent-post .recent-post-meta a:hover i {
  color: var(--theme-color);
}
.recent-post:hover .media-img img {
  transform: scale(1.1);
}

.widget-project-details {
  background: rgba(199, 134, 101, 0.08);
  border: 0;
  margin-bottom: 0;
}
.widget-project-details .widget_title {
  margin-bottom: 30px;
}
.widget-project-details .widget_title:after {
  display: none;
}
.widget-project-details ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
.widget-project-details ul li {
  display: flex;
  gap: 20px;
  align-items: center;
}
.widget-project-details ul li:not(:last-child) {
  border-bottom: 1px solid #EEDFD7;
  padding-bottom: 25px;
  margin-bottom: 25px;
}
.widget-project-details ul li .icon {
  height: 50px;
  width: 50px;
  line-height: 50px;
  border-radius: 50%;
  background: var(--white-color);
  text-align: center;
  color: var(--theme-color);
}
.widget-project-details ul li .title {
  font-size: 14px;
  font-weight: 500;
  text-transform: uppercase;
  display: block;
  margin-bottom: -1px;
  margin-top: -0.6em;
}
.widget-project-details ul li h6 {
  font-size: 20px;
  font-weight: 400;
  margin-bottom: -0.3em;
}

/*Price Filter --------------*/
.price_slider_wrapper {
  margin-top: 0;
}
.price_slider_wrapper .price_label {
  margin-bottom: -0.6em;
  display: flex;
  align-items: center;
  font-size: 14px;
}
.price_slider_wrapper .price_label span {
  display: inline-block;
  color: var(--body-color);
}
.price_slider_wrapper .ui-slider {
  height: 4px;
  position: relative;
  width: 100%;
  background-color: #e0e0e0;
  border: none;
  margin-top: 10px;
  margin-bottom: 20px;
  cursor: pointer;
  border-radius: 0;
}
.price_slider_wrapper .ui-slider-range {
  border: none;
  cursor: pointer;
  position: absolute;
  top: 0;
  height: 100%;
  z-index: 1;
  display: block;
  background-color: var(--title-color);
}
.price_slider_wrapper .ui-slider-handle {
  width: 15px;
  height: 15px;
  border-radius: 50%;
  text-align: center;
  line-height: 10.5px;
  padding: 0;
  border: none;
  cursor: pointer;
  position: absolute;
  margin-top: -5px;
  z-index: 2;
  background-color: var(--white-color);
  border: 1px solid var(--title-color);
  transform: translateX(-1px);
}
.price_slider_wrapper .ui-slider-handle:focus {
  outline: none;
  box-shadow: 1.5px 2.598px 10px 0px rgba(0, 0, 0, 0.15);
}
.price_slider_wrapper .ui-slider-handle:before {
  content: "";
  position: absolute;
  background-color: var(--title-color);
  top: 50%;
  left: 50%;
  width: 5px;
  height: 5px;
  border-radius: 50%;
  transform: translate(-50%, -50%);
}
.price_slider_wrapper .ui-slider-handle:last-child {
  transform: translateX(-9px);
}
.price_slider_wrapper button,
.price_slider_wrapper .button {
  background: transparent;
  color: var(--title-color);
  font-weight: 600;
  line-height: 1.6;
  text-transform: capitalize;
  text-align: center;
  border-radius: 50px;
  border: none;
  display: inline-block;
  overflow: hidden;
  position: relative;
  z-index: 2;
  padding: 0;
  font-size: 16px;
  transition: 0.4s ease-in;
  margin-left: auto;
}
.price_slider_wrapper button:hover,
.price_slider_wrapper .button:hover {
  color: var(--theme-color);
}
.price_slider_wrapper button:hover:after, .price_slider_wrapper button:hover:before,
.price_slider_wrapper .button:hover:after,
.price_slider_wrapper .button:hover:before {
  display: none;
}

.product_list_widget .recent-post {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
  padding-bottom: 0;
  border-bottom: none;
}
.product_list_widget .recent-post:last-child {
  margin-bottom: 0;
}
.product_list_widget .recent-post .media-img {
  width: 65px;
  margin-right: 15px;
  flex: none;
}
.product_list_widget .recent-post .recent-post-meta a {
  font-size: 12px;
  margin-top: -7px;
}
.product_list_widget .recent-post .post-title,
.product_list_widget .recent-post-title {
  font-size: 20px;
  font-weight: 400;
  margin-bottom: 7px;
  margin-top: -4px;
}
.product_list_widget .recent-post .post-title a,
.product_list_widget .recent-post-title a {
  color: inherit;
}
.product_list_widget .recent-post .post-title a:hover,
.product_list_widget .recent-post-title a:hover {
  color: var(--theme-color);
}
.product_list_widget .star-rating {
  font-size: 12px;
  margin-bottom: 0px;
}

.sidebar-area select,
.sidebar-area input {
  background-color: var(--white-color);
  border: 1px solid var(--border-color);
}

.widget_shopping_cart .widget_title {
  margin-bottom: 30px;
  border-bottom: none;
}
.widget_shopping_cart ul {
  margin: 0;
  padding: 0;
}
.widget_shopping_cart ul li {
  list-style-type: none;
}
.widget_shopping_cart .mini_cart_item {
  position: relative;
  padding: 30px 30px 30px 90px;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  margin-bottom: 0;
  text-align: left;
}
.widget_shopping_cart .mini_cart_item:first-child {
  border-top: 1px solid rgba(0, 0, 0, 0.1);
}
.widget_shopping_cart .cart_list a:not(.remove) {
  display: block;
  color: var(--body-color);
  font-size: 16px;
  font-weight: 500;
  font-family: var(--title-font);
  font-weight: 600;
  color: var(--title-color);
}
.widget_shopping_cart .cart_list a:not(.remove):hover {
  color: var(--theme-color);
}
.widget_shopping_cart .cart_list a.remove {
  position: absolute;
  top: 50%;
  left: 95%;
  transform: translateY(-50%);
  color: var(--body-color);
}
.widget_shopping_cart .cart_list a.remove:hover {
  color: var(--theme-color);
}
.widget_shopping_cart .cart_list img {
  width: 75px;
  height: 75px;
  position: absolute;
  left: 0;
  top: 18px;
}
.widget_shopping_cart .quantity {
  display: inline-flex;
  white-space: nowrap;
  vertical-align: top;
  margin-right: 20px;
  font-size: 14px;
  font-weight: 500;
}
.widget_shopping_cart .total {
  margin-top: 20px;
  font-size: 18px;
  color: var(--title-color);
  font-family: var(--body-font);
}
.widget_shopping_cart .total strong {
  font-family: var(--title-font);
}
.widget_shopping_cart .amount {
  padding-left: 5px;
}

.widget_schedule ul {
  padding: 0;
  margin: 0;
  margin-bottom: -10px;
}
.widget_schedule ul li {
  list-style: none;
  background: #FFFFFF;
  border: 1px solid rgba(237, 237, 237, 0.89);
  box-shadow: 0px 16px 51px rgba(0, 0, 0, 0.07);
  border-radius: 15px;
  margin-bottom: 15px;
  height: 55px;
  line-height: 55px;
  padding: 0 20px;
}
.widget_schedule ul li i {
  margin-right: 6px;
}
.widget_schedule ul li.unavailable {
  color: var(--theme-color);
}

.wp-block-calendar tbody td,
.wp-block-calendar th {
  padding: 10px;
}

.wp-block-calendar,
.calendar_wrap {
  position: relative;
  background-color: #fff;
  padding-bottom: 0;
  border: none;
}
.wp-block-calendar span[class*=wp-calendar-nav],
.calendar_wrap span[class*=wp-calendar-nav] {
  position: absolute;
  top: 9px;
  left: 20px;
  font-size: 14px;
  color: var(--white-color);
  font-weight: 400;
  z-index: 1;
  line-height: 1.7;
}
.wp-block-calendar span[class*=wp-calendar-nav] a,
.calendar_wrap span[class*=wp-calendar-nav] a {
  color: inherit;
}
.wp-block-calendar span.wp-calendar-nav-next,
.calendar_wrap span.wp-calendar-nav-next {
  left: auto;
  right: 20px;
}
.wp-block-calendar caption,
.calendar_wrap caption {
  caption-side: top;
  text-align: center;
  color: var(--white-color);
  background-color: var(--theme-color);
}
.wp-block-calendar th,
.calendar_wrap th {
  font-size: 14px;
  padding: 5px 5px;
  border: none;
  text-align: center;
  border-right: 1px solid #eee;
  color: var(--title-color);
  font-weight: 500;
}
.wp-block-calendar th:first-child,
.calendar_wrap th:first-child {
  border-left: 1px solid #eee;
}
.wp-block-calendar th:last-child,
.calendar_wrap th:last-child {
  border-right: 1px solid #eee;
}
.wp-block-calendar table th,
.calendar_wrap table th {
  font-weight: 500;
}
.wp-block-calendar td,
.calendar_wrap td {
  font-size: 14px;
  padding: 5px 5px;
  color: #01133c;
  border: 1px solid #eee;
  text-align: center;
  background-color: transparent;
  transition: all ease 0.4s;
}
.wp-block-calendar #today,
.calendar_wrap #today {
  color: var(--theme-color);
  background-color: var(--white-color);
  border-color: #ededed;
}
.wp-block-calendar thead,
.calendar_wrap thead {
  background-color: #fff;
}
.wp-block-calendar .wp-calendar-table,
.calendar_wrap .wp-calendar-table {
  margin-bottom: 0;
}
.wp-block-calendar .wp-calendar-nav .pad,
.calendar_wrap .wp-calendar-nav .pad {
  display: none;
}
.wp-block-calendar a,
.calendar_wrap a {
  color: inherit;
  text-decoration: none;
}
.wp-block-calendar a:hover,
.calendar_wrap a:hover {
  color: var(--title-color);
}

/***wp-calender***/
.wp-block-calendar {
  margin-bottom: 30px;
  border: none;
  padding-bottom: 0;
}
.wp-block-calendar table caption {
  color: var(--white-color);
}

/********widget_recent_comments********/
.widget_recent_comments ul,
.wp-block-latest-comments ul {
  list-style-type: none;
  padding-left: 0;
}

ul.widget_recent_comments,
ol.widget_recent_comments,
.wp-block-latest-comments {
  margin-top: -0.11em;
  padding-left: 0;
}

.widget_recent_comments ol,
.widget_recent_comments ul,
.wp-block-latest-comments ol,
.wp-block-latest-comments ul {
  margin-bottom: 0;
}
.widget_recent_comments li,
.wp-block-latest-comments li {
  margin-bottom: 0;
  color: var(--body-color);
  padding-left: 30px;
  position: relative;
}
.widget_recent_comments li:before,
.wp-block-latest-comments li:before {
  content: "\f086";
  position: absolute;
  left: 0;
  top: -1px;
  color: var(--theme-color);
  font-family: var(--icon-font);
}
.widget_recent_comments.has-avatars li,
.wp-block-latest-comments.has-avatars li {
  padding-left: 0;
  padding-bottom: 0 !important;
}
.widget_recent_comments.has-avatars li:before,
.wp-block-latest-comments.has-avatars li:before {
  display: none;
}
.widget_recent_comments .avatar,
.wp-block-latest-comments .avatar {
  margin-top: 0.4em;
}
.widget_recent_comments li:not(:last-child),
.wp-block-latest-comments li:not(:last-child) {
  padding-bottom: 12px;
}
.widget_recent_comments article,
.wp-block-latest-comments article {
  line-height: 1.5;
}
.widget_recent_comments a,
.wp-block-latest-comments a {
  color: inherit;
}
.widget_recent_comments a:hover,
.wp-block-latest-comments a:hover {
  color: var(--theme-color);
}

/******widget_recent_entries******/
.widget_recent_entries ul {
  margin: -0.3em 0 0 0;
  padding: 0;
  list-style: none;
}
.widget_recent_entries ul li > a {
  color: var(--body-color);
  font-weight: 500;
  display: inline-block;
}
.widget_recent_entries ul li > a:hover {
  color: var(--theme-color);
}
.widget_recent_entries ul li span.post-date {
  font-size: 14px;
}
.widget_recent_entries ul li:not(:last-child) {
  border-bottom: 1px solid #E6E6E6;
  padding-bottom: 12px;
  margin-bottom: 12px;
}

/*******widget_rss*******/
ul.widget_rss, ul.wp-block-rss,
ol.widget_rss,
ol.wp-block-rss {
  padding-left: 0;
}

.widget_rss,
.wp-block-rss {
  list-style-type: none;
}
.widget_rss ul,
.wp-block-rss ul {
  margin: -0.2em 0 -0.5em 0;
  padding: 0;
  list-style: none;
}
.widget_rss ul .rsswidget,
.wp-block-rss ul .rsswidget {
  color: var(--title-color);
  font-family: var(--theme-font);
  font-size: 18px;
  display: block;
  margin-bottom: 10px;
}
.widget_rss ul .rssSummary,
.wp-block-rss ul .rssSummary {
  font-size: 14px;
  margin-bottom: 7px;
  line-height: 1.5;
}
.widget_rss ul a,
.wp-block-rss ul a {
  display: block;
  font-weight: 600;
  color: inherit;
}
.widget_rss ul a:hover,
.wp-block-rss ul a:hover {
  color: var(--theme-color);
}
.widget_rss ul .rss-date,
.wp-block-rss ul .rss-date {
  font-size: 14px;
  display: inline-block;
  margin-bottom: 5px;
  font-weight: 400;
  color: var(--title-color);
}
.widget_rss ul .rss-date:before,
.wp-block-rss ul .rss-date:before {
  content: "\f073";
  font-family: var(--icon-font);
  margin-right: 10px;
  font-weight: 300;
  color: var(--theme-color);
}
.widget_rss ul cite,
.wp-block-rss ul cite {
  font-weight: 500;
  color: var(--title-color);
  font-family: var(--body-font);
  font-size: 14px;
}
.widget_rss ul cite:before,
.wp-block-rss ul cite:before {
  content: "";
  position: relative;
  top: -1px;
  left: 0;
  width: 20px;
  height: 2px;
  display: inline-block;
  vertical-align: middle;
  margin-right: 8px;
  background-color: var(--theme-color);
}
.widget_rss li:not(:last-child),
.wp-block-rss li:not(:last-child) {
  margin-bottom: 16px;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  padding-bottom: 16px;
}
.widget_rss a:hover,
.wp-block-rss a:hover {
  color: var(--theme-color);
}

.wp-block-latest-comments__comment:first-child {
  margin-top: 0;
}
.wp-block-latest-comments__comment:last-child {
  margin-bottom: 0;
}
.wp-block-latest-comments__comment:last-child .wp-block-latest-comments__comment-excerpt p {
  margin-bottom: -0.3em;
}

ul.wp-block-latest-posts li:first-child {
  margin-top: 0;
}
ul.wp-block-latest-posts li:last-child {
  margin-bottom: -0.3em;
}

/* Large devices */
@media (max-width: 1199px) {
  .widget {
    --widget-padding-y: 30px;
    --widget-padding-x: 30px;
  }
  .widget_title {
    font-size: 22px;
  }
  .author-widget-wrap .name {
    font-size: 22px;
  }
}
/* Medium devices */
@media (max-width: 991px) {
  .sidebar-area {
    padding-top: 40px;
  }
  .widget {
    --widget-padding-y: 40px;
    --widget-padding-x: 40px;
  }
}
/* Small devices */
@media (max-width: 767px) {
  .widget_info {
    padding: 0;
  }
  .author-widget-wrap {
    padding: 0;
  }
  .widget_info .widget_title {
    padding: 24px 30px 19px 28px;
  }
  .info-list {
    padding: 0 30px 30px;
  }
  .widget {
    padding: 30px;
  }
  .widget_banner {
    padding: 0;
  }
  .widget_estimate .estimate-wrap span {
    margin-bottom: 16px;
  }
  .widget_estimate .content p {
    margin-bottom: 25px;
  }
  .widget_estimate .content h5 {
    margin-bottom: 23px;
  }
  .widget_estimate .content .checklist {
    margin-bottom: 30px;
  }
}
/* Extra small devices */
@media (max-width: 375px) {
  .widget_schedule ul li {
    font-size: 14px;
  }
  .recent-post .post-title {
    font-size: 18px;
  }
}
@media (max-width: 330px) {
  .recent-post .post-title {
    font-size: 16px;
    line-height: 24px;
  }
  .recent-post .recent-post-meta a {
    font-size: 12px;
  }
  .recent-post .media-img {
    width: 67px;
  }
  .recent-post .media-img {
    margin-right: 15px;
  }
  .widget_schedule ul li {
    font-size: 12px;
    padding: 0 15px;
  }
}
.footer-widget {
  margin-bottom: 50px !important;
}
.footer-widget,
.footer-widget .widget {
  padding: 0;
  border: none;
  padding-bottom: 0;
  background-color: transparent;
  box-shadow: none;
}
.footer-widget .wp-block-search__label,
.footer-widget .widget_title {
  border-bottom: none;
  margin: -0.3em 0 32px 0;
  font-size: 20px;
  font-weight: 600;
  font-family: var(--title-font);
  line-height: 30px;
  position: relative;
}
.footer-widget.widget_meta ul, .footer-widget.widget_pages ul, .footer-widget.widget_archive ul, .footer-widget.widget_recent_entries ul, .footer-widget.widget_categories ul, .footer-widget.widget_nav_menu ul {
  margin-top: -5px;
}
.footer-widget.widget_meta .menu,
.footer-widget.widget_meta > ul, .footer-widget.widget_pages .menu,
.footer-widget.widget_pages > ul, .footer-widget.widget_archive .menu,
.footer-widget.widget_archive > ul, .footer-widget.widget_recent_entries .menu,
.footer-widget.widget_recent_entries > ul, .footer-widget.widget_categories .menu,
.footer-widget.widget_categories > ul, .footer-widget.widget_nav_menu .menu,
.footer-widget.widget_nav_menu > ul {
  margin-bottom: -5px;
}
.footer-widget.widget_meta a, .footer-widget.widget_pages a, .footer-widget.widget_archive a, .footer-widget.widget_recent_entries a, .footer-widget.widget_categories a, .footer-widget.widget_nav_menu a {
  font-size: 18px;
  font-weight: 400;
  margin-bottom: 19px;
  font-family: var(--body-font);
  color: var(--body-color);
  display: flex;
  align-items: center;
  max-width: 100%;
  width: max-content;
  background-color: transparent;
  border: none;
  position: relative;
  padding: 0;
}
.footer-widget.widget_meta a i, .footer-widget.widget_pages a i, .footer-widget.widget_archive a i, .footer-widget.widget_recent_entries a i, .footer-widget.widget_categories a i, .footer-widget.widget_nav_menu a i {
  font-size: 12px;
  color: var(--title-color);
  position: absolute;
  opacity: 0;
  left: 0;
}
.footer-widget.widget_meta a:before, .footer-widget.widget_pages a:before, .footer-widget.widget_archive a:before, .footer-widget.widget_recent_entries a:before, .footer-widget.widget_categories a:before, .footer-widget.widget_nav_menu a:before {
  display: none;
}
.footer-widget.widget_meta a:after, .footer-widget.widget_pages a:after, .footer-widget.widget_archive a:after, .footer-widget.widget_recent_entries a:after, .footer-widget.widget_categories a:after, .footer-widget.widget_nav_menu a:after {
  content: "";
  position: absolute;
  right: 100%;
  left: 0;
  bottom: 0;
  top: auto;
  height: 2px;
  background-color: var(--title-color);
  transition: all ease 0.4s;
  border: 0;
  margin: 0;
  display: inline-block;
  width: auto;
}
.footer-widget.widget_meta a:hover, .footer-widget.widget_pages a:hover, .footer-widget.widget_archive a:hover, .footer-widget.widget_recent_entries a:hover, .footer-widget.widget_categories a:hover, .footer-widget.widget_nav_menu a:hover {
  background-color: transparent;
  color: var(--title-color);
}
.footer-widget.widget_meta a:hover i, .footer-widget.widget_pages a:hover i, .footer-widget.widget_archive a:hover i, .footer-widget.widget_recent_entries a:hover i, .footer-widget.widget_categories a:hover i, .footer-widget.widget_nav_menu a:hover i {
  opacity: 1;
}
.footer-widget.widget_meta a:hover:after, .footer-widget.widget_pages a:hover:after, .footer-widget.widget_archive a:hover:after, .footer-widget.widget_recent_entries a:hover:after, .footer-widget.widget_categories a:hover:after, .footer-widget.widget_nav_menu a:hover:after {
  right: 0;
}
.footer-widget.widget_meta li, .footer-widget.widget_pages li, .footer-widget.widget_archive li, .footer-widget.widget_recent_entries li, .footer-widget.widget_categories li, .footer-widget.widget_nav_menu li {
  border: 0 !important;
  padding-bottom: 0 !important;
}
.footer-widget.widget_meta li:last-child a, .footer-widget.widget_pages li:last-child a, .footer-widget.widget_archive li:last-child a, .footer-widget.widget_recent_entries li:last-child a, .footer-widget.widget_categories li:last-child a, .footer-widget.widget_nav_menu li:last-child a {
  margin-bottom: 0;
}
.footer-widget.widget_meta .wp-block-navigation__submenu-container,
.footer-widget.widget_meta .sub-menu,
.footer-widget.widget_meta .children, .footer-widget.widget_pages .wp-block-navigation__submenu-container,
.footer-widget.widget_pages .sub-menu,
.footer-widget.widget_pages .children, .footer-widget.widget_archive .wp-block-navigation__submenu-container,
.footer-widget.widget_archive .sub-menu,
.footer-widget.widget_archive .children, .footer-widget.widget_recent_entries .wp-block-navigation__submenu-container,
.footer-widget.widget_recent_entries .sub-menu,
.footer-widget.widget_recent_entries .children, .footer-widget.widget_categories .wp-block-navigation__submenu-container,
.footer-widget.widget_categories .sub-menu,
.footer-widget.widget_categories .children, .footer-widget.widget_nav_menu .wp-block-navigation__submenu-container,
.footer-widget.widget_nav_menu .sub-menu,
.footer-widget.widget_nav_menu .children {
  margin-left: 10px;
}
.footer-widget.widget_meta .wp-block-navigation__submenu-container li a,
.footer-widget.widget_meta .sub-menu li a,
.footer-widget.widget_meta .children li a, .footer-widget.widget_pages .wp-block-navigation__submenu-container li a,
.footer-widget.widget_pages .sub-menu li a,
.footer-widget.widget_pages .children li a, .footer-widget.widget_archive .wp-block-navigation__submenu-container li a,
.footer-widget.widget_archive .sub-menu li a,
.footer-widget.widget_archive .children li a, .footer-widget.widget_recent_entries .wp-block-navigation__submenu-container li a,
.footer-widget.widget_recent_entries .sub-menu li a,
.footer-widget.widget_recent_entries .children li a, .footer-widget.widget_categories .wp-block-navigation__submenu-container li a,
.footer-widget.widget_categories .sub-menu li a,
.footer-widget.widget_categories .children li a, .footer-widget.widget_nav_menu .wp-block-navigation__submenu-container li a,
.footer-widget.widget_nav_menu .sub-menu li a,
.footer-widget.widget_nav_menu .children li a {
  border-bottom: 0;
  margin: 0 0px 19px 0px;
  padding: 0 0 0 23px;
}
.footer-widget .recent-post {
  max-width: 300px;
  margin-top: -0.3em;
  margin-bottom: 17px;
  padding: 0;
  border: 0;
}
.footer-widget .recent-post .post-title {
  color: var(--white-color);
  font-weight: 600;
  margin: 5px 0 0 0;
}
.footer-widget .recent-post:last-child {
  margin-bottom: 0;
  padding-bottom: 0;
  border-bottom: 0;
}
.footer-widget .recent-post .recent-post-meta a {
  font-weight: 400;
  line-height: 1.2;
  color: var(--light-color);
  font-size: 12px;
}
.footer-widget .recent-post .recent-post-meta i {
  color: var(--light-color);
  transition: 0.4s;
}
.footer-widget .recent-post .recent-post-meta a:hover {
  color: var(--theme-color);
}
.footer-widget .recent-post .recent-post-meta a:hover i {
  color: var(--theme-color);
}
.footer-widget.widget_shopping_cart .total, .footer-widget.widget_rss ul .rss-date, .footer-widget.widget_rss ul cite, .footer-widget.widget_rss ul .rsswidget,
.footer-widget .product_list_widget li a, .footer-widget.widget_shopping_cart .cart_list a:not(.remove) {
  color: var(--white-color);
}
.footer-widget blockquote:before, .footer-widget .wp-block-quote:before {
  left: 40px;
  top: 40px;
}
.footer-widget .wp-block-search .wp-block-search__inside-wrapper {
  border: 0;
  border-radius: 0;
}
.footer-widget .wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button {
  margin-left: 10px;
}
.footer-widget .wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button:hover {
  background: var(--white-color);
  color: var(--theme-color);
}
.footer-widget .widget_nav_menu a,
.footer-widget .widget_meta a,
.footer-widget .widget_pages a,
.footer-widget .widget_archive a,
.footer-widget .wp-block-page-list a,
.footer-widget .widget_categories a {
  border-bottom: 1px solid #363636;
}
.footer-widget .widget_nav_menu .wp-block-navigation__submenu-container li a, .footer-widget .widget_nav_menu .sub-menu li a, .footer-widget .widget_nav_menu .children li a, .footer-widget .widget_meta .wp-block-navigation__submenu-container li a, .footer-widget .widget_meta .sub-menu li a, .footer-widget .widget_meta .children li a, .footer-widget .widget_pages .wp-block-navigation__submenu-container li a, .footer-widget .widget_pages .sub-menu li a, .footer-widget .widget_pages .children li a, .footer-widget .widget_archive .wp-block-navigation__submenu-container li a, .footer-widget .widget_archive .sub-menu li a, .footer-widget .widget_archive .children li a, .footer-widget .wp-block-page-list .wp-block-navigation__submenu-container li a, .footer-widget .wp-block-page-list .sub-menu li a, .footer-widget .wp-block-page-list .children li a, .footer-widget .widget_categories .wp-block-navigation__submenu-container li a, .footer-widget .widget_categories .sub-menu li a, .footer-widget .widget_categories .children li a {
  border-bottom: 1px solid #363636;
}
.footer-widget.woocommerce .widget_shopping_cart .total, .footer-widget.woocommerce.widget_shopping_cart .total {
  border-top: 3px double #363636;
}

.widget-contact {
  max-width: 220px;
}
.widget-contact .contact-info-list {
  padding: 0;
  margin: 0;
  list-style: none;
  margin-top: -8px;
  margin-bottom: -0.55em;
}
.widget-contact .contact-info-list li {
  line-height: 30px;
  font-size: 18px;
  font-weight: 400;
  color: var(--body-color);
}
.widget-contact .contact-info-list li a {
  color: var(--title-color);
}
.widget-contact .contact-info-list li:not(:last-child) {
  margin-bottom: 23px;
}

.widget-about .footer-logo {
  margin-bottom: 22px;
}
.widget-about .about-text {
  font-size: 18px;
  margin-bottom: 27px;
}

.footer-text {
  margin-top: -0.45em;
  margin-bottom: 12px;
  color: var(--body-color);
  font-weight: 300;
}

.sidebar-gallery {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 10px;
}
.sidebar-gallery .gallery-btn {
  position: absolute;
  top: 50%;
  left: 50%;
  color: var(--white-color);
  visibility: hidden;
  opacity: 0;
  transform: translate(-50%, 20px);
}
.sidebar-gallery .gallery-btn:hover {
  color: var(--theme-color);
}
.sidebar-gallery .gallery-thumb {
  overflow: hidden;
  position: relative;
  border-radius: 10px;
}
.sidebar-gallery .gallery-thumb:before {
  content: "";
  height: calc(100% - 14px);
  width: calc(100% - 14px);
  background-color: var(--title-color);
  opacity: 0.8;
  position: absolute;
  top: 7px;
  left: 7px;
  border-radius: 10px;
  transform: scaleX(0);
  transition: 0.4s ease-in-out;
}
.sidebar-gallery .gallery-thumb img {
  width: 100%;
  border-radius: 10px;
}
.sidebar-gallery .gallery-thumb:hover:before {
  transform: scaleX(1);
}
.sidebar-gallery .gallery-thumb:hover .gallery-btn {
  visibility: visible;
  opacity: 1;
  transform: translate(-50%, -50%);
}

.widget-newsletter p {
  margin-bottom: -0.5em;
}

.newsletter-form {
  position: relative;
}
.newsletter-form .form-group {
  margin-bottom: 22px;
}
.newsletter-form .form-group > i {
  right: auto;
  left: 24px;
  top: 19px;
}
.newsletter-form .form-group input {
  height: 60px;
  padding: 0 30px 0 0px;
  background: transparent;
  border: 0;
  border-bottom: 2px solid var(--title-color);
  border-radius: 0px;
  font-size: 24px;
  font-weight: 400;
  letter-spacing: -0.48px;
}
.newsletter-form .form-group input::placeholder {
  color: rgba(10, 12, 0, 0.5);
}
.newsletter-form .btn {
  position: absolute;
  right: 0;
  top: 0;
  padding: 0;
  font-size: 12px;
  font-weight: 500;
  height: 60px;
  background: transparent;
  line-height: 60px;
}

/* Medium Large devices */
@media (max-width: 1299px) {
  .footer-text,
  .widget-about .about-text {
    font-size: 14px;
  }
}
/* Large devices */
@media (max-width: 1199px) {
  .footer-widget.widget_meta a, .footer-widget.widget_pages a, .footer-widget.widget_archive a, .footer-widget.widget_categories a, .footer-widget.widget_nav_menu a {
    margin-bottom: 16px;
  }
  .footer-info-list li:not(:last-child) {
    margin-bottom: 15px;
  }
  .sidebar-gallery {
    max-width: 350px;
  }
}
/* Small devices */
@media (max-width: 767px) {
  .footer-widget .widget_title {
    margin-bottom: 35px;
  }
  .widget-about .about-text {
    margin-bottom: 20px;
  }
  .social-box.mb-30 {
    margin-bottom: 25px;
  }
  .widget_event-location {
    padding: 30px;
  }
}
/*------------------- 4.2. Header  -------------------*/
.nav-header {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  z-index: 41;
}

.sticky-wrapper {
  transition: 0.4s ease-in-out;
}
.sticky-wrapper.header-sticky {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  background-color: var(--white-color);
  box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.07);
  animation: stickyAni 0.6s ease-in-out;
}

@keyframes stickyAni {
  0% {
    transform: translate3d(0, -40px, 0) scaleY(0.8);
    opacity: 0.7;
  }
  100% {
    transform: translate3d(0, 0, 0) scaleY(1);
    opacity: 1;
  }
}
/****header-top*****/
.main-menu a {
  display: block;
  position: relative;
  font-weight: 600;
  font-family: var(--title-font);
  font-size: 14px;
  color: var(--title-color);
  letter-spacing: -0.14px;
}
.main-menu a:hover {
  color: var(--title-color);
}
.main-menu a:hover:before {
  background: var(--theme-color);
}
.main-menu > ul {
  display: flex;
  align-items: center;
  margin: 0 -20px !important;
}
.main-menu > ul > li {
  margin: 0;
}
.main-menu > ul > li > a {
  padding: 46.5px 20px;
}
.main-menu > ul > li > a:hover {
  color: var(--title-color);
}
.main-menu > ul > li > a:hover .effect-1 {
  top: -100%;
}
.main-menu ul {
  margin: 0;
  padding: 0;
}
.main-menu ul li {
  list-style-type: none;
  display: inline-block;
  position: relative;
}
.main-menu ul li:last-child {
  margin-right: 0 !important;
}
.main-menu ul li:first-child {
  margin-left: 0 !important;
}
.main-menu ul li:hover > ul.sub-menu {
  visibility: visible;
  opacity: 1;
  transform: scaleY(1);
  z-index: 9;
}
.main-menu ul.sub-menu {
  position: absolute;
  text-align: left;
  top: 100%;
  left: 0;
  background-color: var(--title-color);
  visibility: hidden;
  min-width: 280px;
  width: max-content;
  padding: 7px;
  left: -14px;
  opacity: 0;
  z-index: -1;
  border: 0;
  box-shadow: 0px 4px 15px rgba(1, 15, 28, 0.06);
  border-radius: 0;
  transform: scaleY(0);
  transform-origin: top center;
  transition: all 0.4s ease 0s;
}
.main-menu ul.sub-menu a {
  font-weight: 400;
  font-family: var(--body-font);
  letter-spacing: normal;
  line-height: 41px;
  font-size: 16px;
  color: var(--white-color);
}
.main-menu ul.sub-menu a span {
  font-size: 12px;
  padding: 0px 5px;
  margin-left: 4px;
  background-color: var(--theme-color);
  color: var(--white-color);
  padding: 2px 5px;
  border-radius: 4px;
  position: relative;
  top: -1px;
}
.main-menu ul.sub-menu a:hover {
  padding-left: 5px;
}
.main-menu ul.sub-menu {
  padding: 18px 20px 19px 18px;
  left: 0px;
}
.main-menu ul.sub-menu li {
  display: block;
  margin: 0 0;
  padding: 0px 9px;
}
.main-menu ul.sub-menu li.active > a {
  color: var(--theme-color);
}
.main-menu ul.sub-menu li a {
  position: relative;
  padding-left: 0px;
}
.main-menu ul.sub-menu li.menu-item-has-children > a:before, .main-menu ul.sub-menu li.menu-item-has-children > a:after {
  content: "";
  position: absolute;
  top: 20px;
  right: 0px;
  height: 9px;
  width: 2px;
  background: var(--white-color);
  transition: 0.4s;
  transform: rotate(45deg);
  display: inline-block;
  transition: 0.4s;
}
.main-menu ul.sub-menu li.menu-item-has-children > a:before {
  transform: rotate(-45deg);
  top: 15px;
}
.main-menu ul.sub-menu li ul.sub-menu {
  left: 100%;
  right: auto;
  top: 0;
  margin: 0 0;
  margin-left: 15px;
}
.main-menu ul.sub-menu li ul.sub-menu li ul {
  left: 100%;
  right: auto;
}

/* Medium Large devices */
@media (max-width: 1399px) {
  .main-menu > ul > li > a {
    padding: 46.5px 10px;
  }
}
.simple-icon {
  border: none;
  background-color: transparent;
  color: var(--title-color);
  padding: 0;
  font-size: 22px;
  position: relative;
}
.simple-icon .badge {
  padding: 0.2em 0.4em;
  font-size: 0.5em;
  top: -5px;
  right: 0px;
}
.simple-icon:has(.badge) {
  padding-right: 8px;
}

.header-button {
  height: 100%;
  display: flex;
  align-items: center;
  gap: 50px;
  margin-left: 85px;
  /* Medium Large devices */
}
@media (max-width: 1399px) {
  .header-button {
    gap: 20px;
  }
}
.header-button .search-btn {
  background: transparent;
  border: 0;
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 14px;
  font-weight: 600;
  font-family: var(--title-font);
  color: var(--title-color);
  padding: 0;
}

.header-logo {
  padding-top: 15px;
  padding-bottom: 15px;
}

.header-links > ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
  display: flex;
  align-items: center;
}
.header-links li {
  display: inline-block;
  position: relative;
  font-size: 14px;
  font-weight: 400;
}
.header-links li:not(:last-child) {
  margin: 0 40px 0 0;
}
.header-links li > i {
  margin-right: 8px;
}
.header-links li .header-sub-links li:not(:last-child) {
  margin: 0 30px 0 0;
}
.header-links li .header-sub-links li:not(:last-child):before {
  content: "/";
  position: absolute;
  right: -20px;
  top: 0;
  color: var(--title-color);
}
.header-links li,
.header-links span,
.header-links p,
.header-links a {
  color: var(--title-color);
  font-family: var(--body-font);
  display: inline-flex;
  align-items: center;
}
.header-links a:hover {
  color: var(--theme-color);
}
.header-links b,
.header-links strong {
  font-weight: 600;
  margin-right: 6px;
}
.header-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.sidebar-btn {
  background: transparent;
  position: relative;
  height: 60px;
  width: 60px;
  border: 2px solid var(--title-color);
  border-radius: 50%;
  text-align: center;
  line-height: 54px;
  padding: 0;
}
.sidebar-btn .line {
  display: block;
  height: 2px;
  width: 18px;
  background: var(--title-color);
  margin: auto;
  transition: 0.4s;
}
.sidebar-btn .line:not(:last-child) {
  margin-bottom: 4px;
}
.sidebar-btn:hover .line:nth-child(2) {
  width: 10px;
}

/* Extra small devices */
@media (max-width: 575px) {
  .sidebar-btn {
    height: 50px;
    width: 50px;
  }
}
/* Header 1 ---------------------------------- */
.header-layout1 {
  /* Medium devices */
  /* Extra small devices */
}
.header-layout1 .sticky-wrapper {
  padding: 0px 36px;
}
@media (max-width: 991px) {
  .header-layout1 .sticky-wrapper {
    padding: 15px 36px;
  }
}
@media (max-width: 575px) {
  .header-layout1 .sticky-wrapper {
    padding: 15px 0px;
  }
}

/* Header 2 ---------------------------------- */
.header-layout2 {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  /* Medium Large devices */
  /* Medium devices */
  /* Extra small devices */
}
.header-layout2 .sticky-wrapper {
  padding: 0px 36px;
}
.header-layout2 .sticky-wrapper .header-links a {
  color: var(--white-color);
}
.header-layout2 .main-menu > ul > li > a {
  padding: 44.5px 20px;
  color: var(--white-color);
}
.header-layout2 .main-menu > ul > li > a:before {
  border-color: var(--white-color);
}
.header-layout2 .main-menu > ul > li > a:hover:before {
  background: var(--white-color);
}
.header-layout2 .main-menu ul.sub-menu {
  background: var(--white-color);
}
.header-layout2 .main-menu ul.sub-menu a {
  color: var(--title-color);
}
.header-layout2 .main-menu ul.sub-menu li.active > a {
  color: var(--title-color);
  padding-left: 5px;
}
.header-layout2 .main-menu ul.sub-menu .menu-item-has-children > a:before,
.header-layout2 .main-menu ul.sub-menu .menu-item-has-children > a:after {
  background: var(--title-color);
}
.header-layout2 .header-button .search-btn {
  color: var(--white-color);
}
.header-layout2 .sticky-wrapper.header-sticky {
  background: var(--title-color);
}
.header-layout2 .sidebar-btn {
  border-color: var(--white-color);
  margin: 25px 0;
}
.header-layout2 .sidebar-btn .line {
  background: var(--white-color);
}
@media (max-width: 1399px) {
  .header-layout2 .main-menu > ul > li > a {
    padding: 44.5px 10px;
  }
}
@media (max-width: 991px) {
  .header-layout2 .sticky-wrapper {
    padding: 15px 36px;
  }
  .header-layout2 .sidebar-btn {
    margin: 0;
  }
}
@media (max-width: 575px) {
  .header-layout2 .sticky-wrapper {
    padding: 15px 0px;
  }
}

/* Header 3 ---------------------------------- */
.header-layout3 {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  /* Medium Large devices */
  /* Large devices */
  /* Medium devices */
  /* Extra small devices */
}
.header-layout3 .sticky-wrapper {
  padding: 0px 36px;
}
.header-layout3 .sticky-wrapper .header-links a {
  color: var(--white-color);
}
.header-layout3 .main-menu > ul > li > a {
  padding: 44.5px 20px;
}
.header-layout3 .main-menu > ul > li > a:before {
  border-color: var(--white-color);
}
.header-layout3 .main-menu > ul > li > a:hover:before {
  background: var(--white-color);
}
@media (max-width: 1399px) {
  .header-layout3 .main-menu > ul > li > a {
    padding: 44.5px 10px;
  }
}
@media (max-width: 1199px) {
  .header-layout3 .header-button {
    margin-left: 25px;
  }
}
@media (max-width: 991px) {
  .header-layout3 .sticky-wrapper {
    padding: 15px 36px;
  }
}
@media (max-width: 575px) {
  .header-layout3 .sticky-wrapper {
    padding: 15px 0px;
  }
}

/*------------------- 4.3. Footer  -------------------*/
.footer-wrapper {
  background: var(--smoke-color);
}

.copyright-wrap {
  padding: 22px 0;
}

.widget-area {
  padding: 0px 0 90px;
  /* Medium devices */
}
@media (max-width: 991px) {
  .widget-area {
    padding: 0px 0 30px;
  }
}

.copyright-text {
  margin: 0;
  color: var(--title-color);
  font-weight: 400;
  font-size: 18px;
}
.copyright-text a {
  color: var(--title-color);
}

.footer-menu-area {
  border-bottom: 2px solid var(--title-color);
  border-top: 2px solid var(--title-color);
  padding: 21px 0;
  /* Large devices */
  /* Extra small devices */
}
.footer-menu-area .footer-menu-list {
  list-style: none;
  padding: 0;
  margin: 0;
  display: inline-flex;
  flex-wrap: wrap;
  gap: 15px 40px;
}
.footer-menu-area .footer-menu-list li {
  display: inline-block;
}
.footer-menu-area .footer-menu-list li a {
  display: block;
  position: relative;
  font-weight: 600;
  font-size: 14px;
  font-family: var(--title-font);
  color: var(--title-color);
  text-transform: uppercase;
  letter-spacing: -0.14px;
}
@media (max-width: 1199px) {
  .footer-menu-area .footer-menu-list {
    gap: 15px 28px;
  }
}
@media (max-width: 575px) {
  .footer-menu-area .footer-menu-list {
    display: block;
  }
  .footer-menu-area .footer-menu-list li {
    display: block;
  }
  .footer-menu-area .footer-menu-list li:not(:last-child) {
    margin-bottom: 10px;
  }
}

/*footer 1************/
.footer-layout1 {
  position: relative;
  /* Medium Large devices */
  /* Large devices */
  /* Medium devices */
  /* Extra small devices */
}
.footer-layout1 .footer-top .footer-top-title {
  font-size: 80px;
  font-weight: 600;
  margin: -0.21em 0 -0.22em;
}
.footer-layout1 .footer-top-wrap p {
  font-size: 18px;
}
@media (max-width: 1299px) {
  .footer-layout1 .footer-top .footer-top-title {
    font-size: 70px;
  }
}
@media (max-width: 1199px) {
  .footer-layout1 .footer-top .footer-top-title {
    font-size: 60px;
  }
}
@media (max-width: 991px) {
  .footer-layout1 .footer-top .footer-top-title {
    margin-bottom: 30px;
    font-size: 50px;
  }
}
@media (max-width: 575px) {
  .footer-layout1 .footer-top .footer-top-title {
    font-size: 40px;
  }
  .footer-layout1 .footer-layout1 .footer-menu-area {
    padding: 31px 0;
  }
}

/*footer 2************/
.footer-layout2 .copyright-wrap {
  border-top: 2px solid var(--title-color);
}

/*footer 3************/
.footer-layout3 {
  padding-top: 30px;
}
.footer-layout3 .footer-menu-area {
  border-top: 0;
}

/*footer 4************/
.footer-layout4 .copyright-wrap {
  border-top: 2px solid var(--title-color);
}

/*footer 5************/
.footer-layout5 {
  background: #0A0C00;
  --title-color: #F6F5F3;
  --body-color: #F6F5F3;
  /* Medium Large devices */
  /* Large devices */
  /* Medium devices */
  /* Extra small devices */
}
.footer-layout5 .footer-top {
  --title-color: #0A0C00;
  --body-color: #0A0C00;
}
.footer-layout5 .footer-top .footer-top-title {
  font-size: 80px;
  font-weight: 600;
  margin: -0.21em 0 -0.22em;
}
.footer-layout5 .copyright-wrap {
  border-top: 2px solid var(--smoke-color);
  padding: 28px 0 53px;
}
.footer-layout5 .copyright-wrap p {
  font-size: 14px;
  font-weight: 600;
  font-family: var(--title-font);
  margin-bottom: 0;
}
@media (max-width: 1299px) {
  .footer-layout5 .footer-top .footer-top-title {
    font-size: 70px;
  }
}
@media (max-width: 1199px) {
  .footer-layout5 .footer-top .footer-top-title {
    font-size: 60px;
  }
}
@media (max-width: 991px) {
  .footer-layout5 .footer-top .footer-top-title {
    margin-bottom: 30px;
    font-size: 50px;
  }
}
@media (max-width: 575px) {
  .footer-layout5 .footer-top .footer-top-title {
    font-size: 40px;
  }
}

/*footer 8************/
.footer-layout8 .copyright-wrap {
  border-top: 2px solid var(--title-color);
  padding: 28px 0;
}
.footer-layout8 .copyright-wrap p {
  font-size: 14px;
  font-weight: 600;
  font-family: var(--title-font);
  margin-bottom: 0;
}

/*------------------- 4.4. Breadcumb  -------------------*/
.breadcumb-menu {
  max-width: 100%;
  padding: 0;
  list-style-type: none;
  position: relative;
  margin: -0.4em 0;
}
.breadcumb-menu li {
  display: inline-block;
  padding-right: 6px;
  list-style: none;
  position: relative;
}
.breadcumb-menu li:after {
  content: "|";
  position: relative;
  margin-left: 10px;
  font-weight: 400;
  font-size: 18px;
  color: var(--title-color);
}
.breadcumb-menu li:last-child {
  padding-right: 0;
  margin-right: 0;
}
.breadcumb-menu li:last-child:after {
  display: none;
}
.breadcumb-menu li,
.breadcumb-menu a,
.breadcumb-menu span {
  white-space: normal;
  word-break: break-word;
  font-weight: 400;
  font-size: 18px;
  font-family: var(--body-font);
  color: var(--title-color);
}
.breadcumb-menu a:hover {
  color: var(--title-color);
}

.breadcumb-title {
  color: var(--white-color);
  margin: -0.15em 0 -0.15em 0;
  line-height: 1.1;
  font-size: 80px;
  font-weight: 600;
  letter-spacing: -2.4px;
  z-index: 1;
  position: relative;
  /* Medium Large devices */
  /* Large devices */
  /* Small devices */
  /* Extra small devices */
}
@media (max-width: 1399px) {
  .breadcumb-title {
    font-size: 70px;
  }
}
@media (max-width: 1199px) {
  .breadcumb-title {
    font-size: 60px;
  }
}
@media (max-width: 767px) {
  .breadcumb-title {
    font-size: 56px;
  }
}
@media (max-width: 575px) {
  .breadcumb-title {
    font-size: 40px;
  }
}

.breadcumb-wrapper {
  background-size: cover !important;
  padding: 240px 0;
  overflow: hidden;
  position: relative;
  z-index: auto;
  background: var(--smoke-color);
  margin-top: 106px;
  text-align: center;
  /* Small devices */
}
.breadcumb-wrapper:after {
  content: "";
  position: absolute;
  inset: 0;
  background: #0A0C00;
  opacity: 0.2;
}
@media (max-width: 767px) {
  .breadcumb-wrapper {
    text-align: center;
  }
}
.breadcumb-wrapper.style2 {
  background: var(--smoke-color);
  padding: 24px 36px;
  text-align: start;
}
.breadcumb-wrapper.style2:after {
  display: none;
}

/* Extra large devices */
@media (max-width: 1500px) {
  .breadcumb-wrapper {
    padding: 200px 0;
  }
}
/* Medium Large devices */
@media (max-width: 1399px) {
  .breadcumb-wrapper {
    padding: 180px 0;
  }
}
/* Medium devices */
@media (max-width: 991px) {
  .breadcumb-wrapper {
    margin-top: 90px;
  }
}
/* Small devices */
@media (max-width: 767px) {
  .breadcumb-wrapper {
    padding: 120px 0;
  }
  .breadcumb-title {
    letter-spacing: normal;
  }
}
/* Extra small devices */
@media (max-width: 575px) {
  .breadcumb-menu li, .breadcumb-menu a, .breadcumb-menu span {
    font-size: 14px;
  }
  .breadcumb-wrapper {
    padding: 100px 0;
    margin-top: 86px;
  }
  .breadcumb-wrapper.style2 {
    padding: 24px 0px;
  }
}
/*------------------- 4.5. Pagination  -------------------*/
.pagination-wrap .pagination {
  gap: 12px;
  flex-wrap: wrap;
}
.pagination-wrap .pagination .page-link {
  margin-left: 0;
  padding: 0 0;
  color: var(--title-color);
  font-weight: 600;
  font-family: var(--title-font);
  font-size: 14px;
  line-height: 1;
  width: 60px;
  height: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 0;
  border-radius: 50%;
  background: var(--smoke-color);
}
.pagination-wrap .pagination .page-link:hover {
  color: var(--white-color);
  background-color: var(--body-color);
}
.pagination-wrap .pagination .page-link:focus {
  color: var(--white-color);
  background-color: var(--body-color);
  outline: 0;
  box-shadow: none;
}
.pagination-wrap .pagination .page-item.active .page-link {
  color: var(--white-color);
  background-color: var(--body-color);
  border-color: var(--body-color);
}

/*------------------- 4.8. Hero Area  -------------------*/
/* Hero Global ---------------------------------- */
.hero-wrapper {
  position: relative;
  z-index: 2;
  overflow: hidden;
}

.hero-thumb-group {
  display: flex;
  align-items: center;
  margin-left: auto;
  justify-content: end;
  margin-top: 80px;
}
.hero-thumb-group img {
  border-radius: 50%;
  border: 3px solid var(--theme-color);
  width: 60px;
}
.hero-thumb-group .img2 {
  margin-left: -24px;
}
.hero-thumb-group .hero-counter {
  height: 60px;
  width: 60px;
  line-height: 54px;
  border-radius: 50%;
  background: var(--title-color);
  border: 3px solid var(--theme-color);
  margin-left: -24px;
  text-align: center;
  color: var(--theme-color);
  font-size: 14px;
  font-family: var(--title-font);
  flex: none;
}
.hero-thumb-group p {
  margin-bottom: 0;
  max-width: 196px;
  font-size: 14px;
  font-weight: 600;
  line-height: 24px;
  font-family: var(--title-font);
  color: var(--title-color);
  text-align: left;
  margin-left: 16px;
  text-transform: uppercase;
  letter-spacing: -0.14px;
}

.hero-year-tag {
  display: flex;
  align-items: center;
  gap: 16px;
  max-width: 254px;
}
.hero-year-tag img {
  flex: none;
}
.hero-year-tag h6 {
  font-size: 14px;
  font-weight: 600;
  margin-bottom: 0;
  text-transform: uppercase;
}

/* Hero 1 ---------------------------------- */
.hero-subtitle {
  font-size: 30px;
  font-family: var(--title-font);
  font-weight: 400;
  color: var(--theme-color);
  display: block;
  margin-bottom: 14px;
  text-transform: uppercase;
}

.hero-title {
  margin-bottom: 0;
  color: var(--title-color);
  font-weight: 600;
  letter-spacing: -3px;
  font-size: 120px;
}

.hero-text {
  font-size: 18px;
  font-weight: 400;
  line-height: 30px;
  margin-bottom: 0px;
}

.hero-style1 {
  position: relative;
  z-index: 6;
  padding: 185px 0 80px;
}
.hero-style1 .hero-title {
  font-weight: 600;
  letter-spacing: -3.6px;
}
.hero-style1 .hero-text {
  margin-top: 23px;
}
.hero-style1 .btn-group {
  margin-top: 30px;
}

/* Medium Large devices */
@media (max-width: 1399px) {
  .hero-title {
    font-size: 100px;
  }
}
/* Medium Large devices */
@media (max-width: 1299px) {
  .hero-title {
    font-size: 90px;
  }
  .hero-text {
    font-size: 16px;
  }
}
/* Large devices */
@media (max-width: 1199px) {
  .hero-style1 {
    padding: 155px 0 80px;
  }
  .hero-title {
    font-size: 80px;
  }
}
/* Medium devices */
@media (max-width: 991px) {
  .hero-title {
    font-size: 70px;
  }
  .hero-style1 .hero-year-tag {
    margin-top: 40px;
  }
  .hero-style1 .hero-title {
    letter-spacing: -1.2px;
  }
}
/* Small devices */
@media (max-width: 767px) {
  .hero-style1 {
    padding: 140px 0 80px;
  }
  .hero-title {
    font-size: 56px;
  }
}
/* Extra small devices */
@media (max-width: 575px) {
  .hero-style1 .hero-title {
    letter-spacing: normal;
  }
  .hero-title {
    font-size: 39px;
    letter-spacing: normal;
  }
}
/* Extra small devices */
@media (max-width: 375px) {
  .hero-title {
    font-size: 34px;
  }
}
/* Hero 2 ---------------------------------- */
.hero-2 {
  background: var(--title-color);
}
.hero-2 .hero-2-thumb {
  position: absolute;
  right: 0;
  top: 0;
  z-index: -1;
  height: 744px;
}
.hero-2 .hero-2-thumb img {
  height: 744px;
  object-fit: cover;
}

.hero-style2 {
  padding: 208px 0 72px;
}
.hero-style2 .hero-title {
  font-size: 100px;
}
.hero-style2 .hero-text {
  margin-top: 26px;
  margin-bottom: 40px;
}
.hero-style2 .btn {
  margin-bottom: 43px;
}
.hero-style2 .hero-contact-wrap {
  color: var(--white-color);
  font-family: var(--title-font);
  max-width: 306px;
  display: inline-block;
  margin-top: 30px;
}
.hero-style2 .hero-contact-wrap a {
  color: var(--white-color);
}
.hero-style2 .hero-contact-wrap:not(:last-child) {
  margin-right: 18px;
}

/* Extra large devices */
@media (max-width: 1500px) {
  .hero-2 .hero-2-thumb {
    width: 900px;
  }
}
/* Medium Large devices */
@media (max-width: 1399px) {
  .hero-style2 .hero-title {
    font-size: 80px;
  }
  .hero-2 .hero-2-thumb {
    height: 676px;
  }
  .hero-2 .hero-2-thumb img {
    height: 676px;
  }
}
/* Medium Large devices */
@media (max-width: 1299px) {
  .hero-2 .hero-2-thumb {
    width: 730px;
  }
}
/* Large devices */
@media (max-width: 1199px) {
  .hero-style2 .hero-title {
    font-size: 70px;
  }
  .hero-2 .hero-2-thumb {
    width: 620px;
  }
  .hero-2 .hero-2-thumb {
    height: 667px;
  }
}
/* Medium devices */
@media (max-width: 991px) {
  .hero-2 .hero-2-thumb {
    height: 637px;
    width: 400px;
  }
  .hero-2 .hero-2-thumb img {
    height: 637px;
  }
}
/* Small devices */
@media (max-width: 767px) {
  .hero-style2 .hero-title {
    font-size: 50px;
  }
  .hero-2 .hero-2-thumb {
    height: 580px;
    width: 320px;
  }
  .hero-2 .hero-2-thumb img {
    height: 580px;
  }
  .hero-style2 .hero-contact-wrap {
    max-width: 246px;
  }
}
/* Extra small devices */
@media (max-width: 575px) {
  .hero-2 .hero-2-thumb {
    height: auto;
    width: 100%;
    position: inherit;
  }
  .hero-2 .hero-2-thumb img {
    height: auto;
  }
  .hero-style2 .hero-title {
    font-size: 40px;
  }
  .hero-style2 {
    padding: 80px 0 72px;
  }
  .hero-style2 .btn {
    margin-bottom: 33px;
  }
}
/* Extra small devices */
@media (max-width: 375px) {
  .hero-style2 .hero-title {
    font-size: 40px;
  }
}
/* Hero 3 ---------------------------------- */
.hero-3 {
  background-image: -webkit-linear-gradient(to top, var(--smoke-color), var(--smoke-color));
  background-image: linear-gradient(to top, var(--smoke-color), var(--smoke-color));
  background-size: 100% calc(100% - 582px);
  background-repeat: no-repeat;
  /* Medium devices */
}
@media (max-width: 991px) {
  .hero-3 {
    background: transparent;
  }
}

.hero-style3 {
  padding: 140px 0 130px;
}
.hero-style3 .hero-title {
  font-size: 100px;
}
.hero-style3 .hero-3-thumb {
  margin-top: 38px;
  margin-bottom: 40px;
}
.hero-style3 .hero-text {
  margin-top: 22px;
  margin-bottom: 0;
}

/* Medium Large devices */
@media (max-width: 1399px) {
  .hero-style3 .hero-title {
    font-size: 80px;
  }
}
/* Large devices */
@media (max-width: 1199px) {
  .hero-style3 {
    padding: 160px 0 70px;
  }
  .hero-style3 .hero-title {
    font-size: 70px;
  }
}
/* Small devices */
@media (max-width: 767px) {
  .hero-style3 {
    padding: 140px 0 70px;
  }
  .hero-style3 .hero-title {
    font-size: 50px;
  }
  .hero-style3 .hero-3-thumb {
    margin-top: 18px;
    margin-bottom: 20px;
  }
}
/* Extra small devices */
@media (max-width: 575px) {
  .hero-style3 .hero-title {
    font-size: 40px;
  }
}
/* Extra small devices */
@media (max-width: 375px) {
  .hero-style3 .hero-title {
    font-size: 40px;
  }
}
/* Hero 4 ---------------------------------- */
.hero-4 {
  padding-bottom: 100px;
}
.hero-4 .hero-4-thumb {
  width: 42%;
  top: 210px;
  bottom: 0px;
  z-index: 1;
}
.hero-4 .hero-4-thumb img {
  height: 100%;
  object-fit: cover;
}

.hero-style4 {
  padding-top: 210px;
  padding-bottom: 80px;
}
.hero-style4 .hero-title {
  font-size: 100px;
  margin-bottom: 24px;
  line-height: 1.1em;
}
.hero-style4 .hero-text {
  margin-bottom: 36px;
}

/* Medium Large devices */
@media (max-width: 1399px) {
  .hero-style4 .hero-title {
    font-size: 80px;
  }
}
/* Large devices */
@media (max-width: 1199px) {
  .hero-style4 .hero-title {
    font-size: 70px;
  }
}
/* Medium devices */
@media (max-width: 991px) {
  .hero-4 {
    padding-bottom: 0px;
  }
  .hero-4 .hero-4-thumb {
    width: 100%;
    position: initial;
    margin-top: 90px;
  }
  .hero-style4 {
    padding-top: 80px;
    padding-bottom: 80px;
  }
  .hero-thumb-group {
    justify-content: start;
    margin-top: 50px;
  }
}
/* Small devices */
@media (max-width: 767px) {
  .hero-style4 .hero-title {
    font-size: 56px;
  }
}
/* Extra small devices */
@media (max-width: 575px) {
  .hero-style4 .hero-title {
    font-size: 46px;
  }
}
/* Extra small devices */
@media (max-width: 375px) {
  .hero-style4 {
    padding-top: 70px;
    padding-bottom: 70px;
  }
}
/* Hero 5 ---------------------------------- */
.hero-5 .hero-overlay {
  height: 100%;
  width: 100%;
  position: absolute;
  z-index: -1;
}
.hero-5 .circle-btn {
  margin-bottom: 140px;
}

.hero-style5 {
  padding-top: 270px;
  padding-bottom: 75px;
}
.hero-style5 .hero-title {
  font-size: 160px;
  line-height: 1.0625em;
  color: var(--white-color);
  font-weight: 600;
  letter-spacing: -4.8px;
}
.hero-style5 .hero-text {
  color: var(--smoke-color);
  max-width: 416px;
  line-height: 30px;
  margin-top: 27px;
}
.hero-style5 .hero-year-tag {
  margin-top: 100px;
  margin-left: auto;
}
.hero-style5 .hero-year-tag h6 {
  color: var(--white-color);
  line-height: 24px;
}
.hero-style5 .hero-year-tag img {
  filter: grayscale(9) brightness(99);
}

/* Extra large devices */
@media (max-width: 1500px) {
  .hero-style5 {
    padding-top: 317px;
  }
  .hero-style5 .hero-title {
    font-size: 120px;
    letter-spacing: normal;
  }
}
/* Medium Large devices */
@media (max-width: 1399px) {
  .hero-style5 {
    padding-top: 217px;
  }
  .hero-style5 .hero-title {
    font-size: 100px;
  }
  .hero-style5 .hero-year-tag {
    margin-top: 80px;
  }
}
/* Medium Large devices */
@media (max-width: 1299px) {
  .hero-style5 .hero-title {
    font-size: 90px;
  }
}
/* Medium Large devices */
@media (max-width: 1399px) {
  .hero-style5 .hero-title {
    font-size: 80px;
  }
}
/* Medium devices */
@media (max-width: 991px) {
  .hero-style5 .hero-year-tag {
    margin-left: 0;
    margin-top: 60px;
  }
  .hero-5 .circle-btn {
    margin-bottom: 120px;
  }
}
/* Small devices */
@media (max-width: 767px) {
  .hero-5 .circle-btn {
    margin-bottom: 100px;
  }
  .hero-style5 .hero-title {
    font-size: 56px;
    line-height: 66px;
  }
}
/* Extra small devices */
@media (max-width: 575px) {
  .hero-style5 {
    padding-top: 187px;
    padding-bottom: 55px;
  }
  .hero-style5 .hero-year-tag {
    margin-top: 40px;
  }
}
/* Extra small devices */
@media (max-width: 375px) {
  .hero-style5 .hero-title {
    font-size: 46px;
    line-height: 56px;
  }
}
/* Hero 6 ---------------------------------- */
.hero-style6 {
  position: relative;
  z-index: 6;
  padding: 195px 0 0px;
  margin-bottom: 140px;
}
.hero-style6 .hero-text {
  margin-top: 23px;
}
.hero-style6 .circle-btn.style2 {
  position: absolute;
  bottom: 0px;
  left: 300px;
}

/* Medium Large devices */
@media (max-width: 1299px) {
  .hero-style6 .circle-btn.style2 {
    bottom: -30px;
  }
}
/* Large devices */
@media (max-width: 1199px) {
  .hero-style6 .circle-btn.style2 {
    bottom: 0px;
    left: 200px;
  }
}
/* Medium devices */
@media (max-width: 991px) {
  .hero-style6 .circle-btn.style2 {
    margin-top: 40px;
    position: initial;
  }
  .hero-style6 {
    padding: 155px 0 0px;
    margin-bottom: 100px;
  }
}
/* Extra small devices */
@media (max-width: 575px) {
  .hero-style6 .hero-title {
    letter-spacing: normal;
  }
}
/* Hero 7 ---------------------------------- */
.hero-7 {
  padding-bottom: 100px;
}
.hero-7 .hero-7-thumb {
  margin-bottom: -100px;
}

.hero-style7 {
  padding: 185px 0 70px;
}
.hero-style7 .hero-title {
  margin-bottom: 22px;
}
.hero-style7 .hero-text {
  max-width: 636px;
  margin: 0 auto;
}

/* Medium devices */
@media (max-width: 991px) {
  .hero-style7 {
    padding: 145px 0 70px;
  }
}
/* Small devices */
@media (max-width: 767px) {
  .hero-style7 {
    padding: 145px 0 60px;
  }
  .hero-style7 .hero-title {
    font-size: 50px;
    letter-spacing: normal;
  }
}
/* Extra small devices */
@media (max-width: 575px) {
  .hero-style7 {
    padding: 145px 0 40px;
  }
  .hero-style7 .hero-title {
    font-size: 39px;
  }
}
/* Extra small devices */
@media (max-width: 375px) {
  .hero-style7 .hero-title {
    font-size: 34px;
  }
}
/* Hero 8 ---------------------------------- */
.hero-style8 {
  padding: 188px 0 140px;
}
.hero-style8 .hero-subtitle {
  font-size: 40px;
  font-family: var(--body-font);
  font-weight: 400;
  text-transform: capitalize;
  margin-bottom: 20px;
}
.hero-style8 .hero-text {
  margin-top: 60px;
}

/* Medium Large devices */
@media (max-width: 1399px) {
  .hero-style8 .hero-subtitle {
    font-size: 36px;
  }
  .hero-style8 {
    padding: 200px 0 140px;
  }
}
/* Medium devices */
@media (max-width: 991px) {
  .hero-style8 {
    max-width: 600px;
    padding: 200px 0 80px;
  }
  .hero-style8 .hero-subtitle {
    font-size: 30px;
  }
  .hero-style8 .hero-text {
    margin-top: 30px;
    max-width: 400px;
  }
}
/* Small devices */
@media (max-width: 767px) {
  .hero-style8 {
    max-width: 450px;
    padding: 160px 0 80px;
  }
}
/* Extra small devices */
@media (max-width: 575px) {
  .hero-style8 .hero-subtitle {
    font-size: 24px;
  }
}
/*------------------- 4.9. Error  -------------------*/
.error-wrapper {
  height: 100vh;
  display: flex;
  align-items: center;
  padding-top: 106px;
}

/*------------------- 4.00. Popup Search  -------------------*/
.popup-search-box {
  position: fixed;
  top: 0;
  left: 50%;
  background-color: var(--title-color);
  width: 100.1%;
  height: 0px;
  overflow: hidden;
  z-index: 99999;
  opacity: 0;
  visibility: hidden;
  transform: translateX(-50%);
  transition: all ease 0.4s;
}
.popup-search-box button.searchClose {
  width: 60px;
  height: 60px;
  line-height: 54px;
  position: absolute;
  top: 40px;
  right: 40px;
  background-color: transparent;
  font-size: 22px;
  border-radius: 50%;
  border: 2px solid var(--smoke-color);
  transform: rotate(0);
  transition: all ease 0.4s;
  color: var(--white-color);
}
.popup-search-box button.searchClose:hover {
  color: var(--body-color);
  background-color: #2e2e2d;
  border-color: transparent;
  border-color: transparent;
  transform: rotate(90deg);
}
.popup-search-box form {
  position: absolute;
  top: 50%;
  left: 50%;
  display: inline-block;
  padding-bottom: 0px;
  cursor: auto;
  width: 100%;
  max-width: 900px;
  transform: translate(-50%, -50%);
  transition: transform ease 0.4s;
  /* Large devices */
}
@media (max-width: 1199px) {
  .popup-search-box form {
    max-width: 600px;
  }
}
.popup-search-box form input {
  font-size: 24px;
  font-weight: 400;
  height: 70px;
  width: 100%;
  border: none;
  background-color: transparent;
  border-bottom: 2px solid var(--smoke-color);
  padding: 0 80px 0 0px;
  color: var(--smoke-color);
  border-radius: 0px;
}
.popup-search-box form input::-moz-placeholder {
  color: rgba(246, 245, 243, 0.5);
}
.popup-search-box form input::-webkit-input-placeholder {
  color: rgba(246, 245, 243, 0.5);
}
.popup-search-box form input:-ms-input-placeholder {
  color: rgba(246, 245, 243, 0.5);
}
.popup-search-box form input::placeholder {
  color: rgba(246, 245, 243, 0.5);
}
.popup-search-box form button {
  position: absolute;
  top: 0px;
  background-color: transparent;
  border: none;
  color: var(--theme-color);
  font-size: 24px;
  right: 0px;
  cursor: pointer;
  width: auto;
  height: 70px;
  transition: all ease 0.4s;
  transform: scale(1.001);
  filter: brightness(99999);
}
.popup-search-box form button:hover {
  transform: scale(1.1);
}
.popup-search-box.show {
  opacity: 1;
  visibility: visible;
  width: 100.1%;
  height: 350px;
  transition: all ease 0.4s;
  border-radius: 0;
}
.popup-search-box.show form {
  transition-delay: 0.5s;
}

/* Small devices */
@media (max-width: 767px) {
  .popup-search-box form {
    width: 80%;
  }
  .popup-search-box form input {
    height: 60px;
  }
  .popup-search-box form button {
    width: 60px;
    line-height: 62px;
    height: 60px;
  }
}
/*------------------- 4.00. Popup Side Menu  -------------------*/
.sidemenu-wrapper {
  position: fixed;
  z-index: 99999;
  right: 0;
  top: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  visibility: hidden;
  transition: all ease 0.8s;
}
.sidemenu-wrapper .closeButton {
  width: 60px;
  height: 60px;
  line-height: 54px;
  position: absolute;
  top: 40px;
  right: 40px;
  background-color: transparent;
  font-size: 22px;
  border-radius: 50%;
  border: 2px solid var(--smoke-color);
  transform: rotate(0);
  transition: all ease 0.4s;
  color: var(--white-color);
}
.sidemenu-wrapper .closeButton:hover {
  color: var(--body-color);
  background-color: #2e2e2d;
  border-color: transparent;
  border-color: transparent;
  transform: rotate(90deg);
}
.sidemenu-wrapper .sidemenu-content {
  background-color: var(--title-color);
  width: 560px;
  margin-left: auto;
  padding: 120px 80px 80px 80px;
  height: 100%;
  overflow-y: scroll;
  position: relative;
  right: 0px;
  transform: translateX(100%);
  cursor: auto;
  transition-delay: 1s;
  transition: right ease 1s;
  transition: all 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86) 0s;
}
.sidemenu-wrapper .sidemenu-content::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.1);
  background-color: #F5F5F5;
}
.sidemenu-wrapper .sidemenu-content::-webkit-scrollbar {
  width: 2px;
  background-color: #F5F5F5;
}
.sidemenu-wrapper .widget {
  padding: 0;
  border: none;
  background-color: transparent;
}
.sidemenu-wrapper .widget-about .about-text {
  color: var(--smoke-color);
  font-size: 18px;
  padding-bottom: 40px;
  border-bottom: 2px solid var(--smoke-color);
  max-width: none;
  margin-bottom: 44px;
}
.sidemenu-wrapper .sidebar-wrap {
  margin-bottom: 23px;
}
.sidemenu-wrapper .sidebar-wrap h6 {
  font-size: 14px;
  font-weight: 600;
  color: var(--white-color);
  margin-bottom: 0;
  line-height: 24px;
}
.sidemenu-wrapper .sidebar-wrap a {
  color: var(--white-color);
}
.sidemenu-wrapper .sidebar-wrap a:hover {
  color: var(--theme-color);
}
.sidemenu-wrapper .chat-btn {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 210px;
  width: 210px;
  background: var(--theme-color);
  border-radius: 50%;
  font-size: 14px;
  font-weight: 600;
  color: var(--title-color);
  font-family: var(--title-font);
  text-transform: uppercase;
  text-align: center;
  padding: 50px;
  border: 0;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.sidemenu-wrapper .chat-btn:hover {
  background: #2e2e2d;
  color: var(--white-color);
}
.sidemenu-wrapper.show {
  opacity: 1;
  visibility: visible;
  width: 100%;
  transition: all 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86) 0s;
}
.sidemenu-wrapper.show .sidemenu-content {
  opacity: 1;
  visibility: visible;
  transform: translateX(0);
}

/* Medium Large devices */
@media (max-width: 1399px) {
  .sidemenu-wrapper .sidemenu-content {
    padding: 50px 80px;
  }
  .sidemenu-wrapper .chat-btn {
    position: initial;
  }
}
/* Small devices */
@media (max-width: 767px) {
  .sidemenu-wrapper .sidemenu-content {
    width: 320px;
    padding: 80px 20px;
  }
} /*------------------- 4.00. Subscribe  -------------------*/
/*------------------- 4.00. Contact  -------------------*/
/*contact area 1***********************/
.contact-area-1 {
  margin-top: 100px;
  /* Medium devices */
}
.contact-area-1 .contact-map {
  width: 42%;
}
.contact-area-1 .contact-map iframe {
  height: 100%;
  min-height: 400px;
}
@media (max-width: 991px) {
  .contact-area-1 {
    margin-top: 0;
  }
  .contact-area-1 .contact-map {
    width: 100%;
    top: -80px !important;
    position: relative;
  }
}

/*------------------- 4.00. About  -------------------*/
/*about area 1***********************/
.about-area-1 {
  margin-top: 100px;
  /* Extra large devices */
  /* Medium devices */
}
.about-area-1 .about-img-1-1 {
  width: 44%;
}
.about-area-1 .about-img-1-1 img {
  height: 100%;
  object-fit: cover;
  width: 100%;
}
@media (max-width: 1500px) {
  .about-area-1 .about-img-1-1 {
    width: 42%;
  }
}
@media (max-width: 991px) {
  .about-area-1 {
    margin-top: 0;
  }
  .about-area-1 .about-img-1-1 {
    width: 100%;
    top: -80px !important;
    position: relative;
  }
}

.marquee-wrap {
  background: #1601AC;
  padding: 31px 0;
}
.marquee-wrap .marquee__group .m-item {
  margin-right: 25px;
  display: inline;
}
.marquee-wrap .marquee__group .m-item a {
  color: var(--smoke-color);
  font-size: 36px;
  font-weight: 600;
  font-family: var(--title-font);
  /* Small devices */
  /* Extra small devices */
  /* Extra small devices */
}
.marquee-wrap .marquee__group .m-item a i {
  color: var(--theme-color);
  margin-right: 20px;
}
@media (max-width: 767px) {
  .marquee-wrap .marquee__group .m-item a {
    font-size: 30px;
  }
}
@media (max-width: 575px) {
  .marquee-wrap .marquee__group .m-item a {
    font-size: 24px;
  }
}
@media (max-width: 375px) {
  .marquee-wrap .marquee__group .m-item a {
    font-size: 20px;
  }
}

.about-counter-wrap {
  display: flex;
  gap: 120px;
}
.about-counter-wrap .counter-card {
  position: relative;
  text-align: left;
}
.about-counter-wrap .counter-card:after {
  content: "";
  position: absolute;
  right: -60px;
  top: 0;
  height: 100%;
  width: 2px;
  background: var(--title-color);
}
.about-counter-wrap .counter-card:last-child:after {
  display: none;
}
.about-counter-wrap .counter-card_number {
  font-size: 48px;
  letter-spacing: -0.96px;
  display: flex;
  margin-bottom: 0;
}
.about-counter-wrap .counter-card_title {
  font-size: 18px;
  font-weight: 400;
  font-family: var(--body-font);
  margin-bottom: -0.3em;
}

/* Large devices */
@media (max-width: 1199px) {
  .about-counter-wrap {
    gap: 100px;
  }
  .about-counter-wrap .counter-card:after {
    right: -50px;
  }
}
/* Small devices */
@media (max-width: 767px) {
  .about-counter-wrap .counter-card_number {
    font-size: 40px;
  }
}
/* Extra small devices */
@media (max-width: 575px) {
  .about-counter-wrap {
    gap: 60px;
  }
  .about-counter-wrap .counter-card:after {
    right: -30px;
  }
  .about-counter-wrap .counter-card_number {
    font-size: 30px;
  }
  .about-counter-wrap .counter-card_title {
    font-size: 16px;
  }
}
/* Extra small devices */
@media (max-width: 375px) {
  .about-counter-wrap {
    display: block;
  }
  .about-counter-wrap .counter-card:not(:last-child) {
    margin-bottom: 30px;
  }
}
/*------------------- 4.00. Team  -------------------*/
/* Team 1 ---------------------------------- */
.team-card {
  overflow: hidden;
  position: relative;
}
.team-card_img {
  position: relative;
  display: inline-block;
  overflow: hidden;
  width: 100%;
}
.team-card_img:before {
  content: "";
  position: absolute;
  inset: 0;
  background: -webkit-linear-gradient(180deg, rgba(10, 12, 0, 0) 50.47%, #0A0C00 100%);
  background: linear-gradient(180deg, rgba(10, 12, 0, 0) 50.47%, #0A0C00 100%);
  z-index: 1;
}
.team-card_img img {
  transition: 0.4s;
  width: 100%;
  filter: grayscale(1);
}
.team-card .team-card_content {
  position: absolute;
  left: 0;
  bottom: -10px;
  padding: 0 28px 36px;
  transition: 0.4s;
  opacity: 0;
  z-index: 1;
}
.team-card_title {
  font-size: 24px;
  font-weight: 600;
  margin-bottom: 7px;
}
.team-card_title a {
  color: var(--white-color);
}
.team-card_title a:hover {
  color: var(--theme-color);
}
.team-card_desig {
  font-size: 18px;
  font-weight: 400;
  display: block;
  color: var(--white-color);
  margin-bottom: 0;
}
.team-card:hover .team-card_content {
  opacity: 1;
  bottom: 0;
}
.team-card:hover .team-card_img img {
  transform: scale(1.05);
  filter: grayscale(0);
}

/* Medium Large devices */
@media (max-width: 1399px) {
  .team-card_title {
    font-size: 22px;
  }
}
/* Team Details ---------------------------------- */
.team-details-about-info .team-desig {
  font-size: 24px;
  font-weight: 400;
  font-family: var(--body-font);
  margin-bottom: 45px;
}
.team-details-about-info .about-contact-wrap .about-contact-title {
  font-size: 14px;
  text-transform: uppercase;
  font-weight: 600;
  margin-bottom: 6px;
}
.team-details-about-info .about-contact-wrap .about-contact-title a {
  color: var(--title-color);
}

/*------------------- 4.00. Testimonial  -------------------*/
/* Testimonial 1 ---------------------------------- */
.testimonial-area-1 {
  margin-top: 100px;
  /* Extra large devices */
  /* Medium devices */
}
.testimonial-area-1 .testimonial-img-1-1 {
  width: 44%;
}
.testimonial-area-1 .testimonial-img-1-1 img {
  height: 100%;
  object-fit: cover;
  width: 100%;
}
@media (max-width: 1500px) {
  .testimonial-area-1 .testimonial-img-1-1 {
    width: 42%;
  }
}
@media (max-width: 991px) {
  .testimonial-area-1 {
    margin-top: 0;
  }
  .testimonial-area-1 .testimonial-img-1-1 {
    width: 100%;
    top: -80px !important;
    position: relative;
  }
}

.testi-slider1 {
  position: relative;
}
.testi-slider1 .slick-dots {
  position: absolute;
  right: 0;
  bottom: 0;
  text-align: end;
}
.testi-slider1 .slick-dots li {
  margin-right: 12px;
}
.testi-slider1 .slick-dots li:last-child {
  margin-right: 0;
}
.testi-slider1 .slick-dots li button {
  border: 1px solid var(--title-color);
  height: 10px;
  width: 10px;
}
.testi-slider1 .slick-dots li.slick-active button {
  background: var(--title-color);
}

.testi-box {
  /* Medium Large devices */
  /* Medium Large devices */
}
.testi-box_text {
  margin-bottom: 30px;
  line-height: 38px;
  font-size: 24px;
  font-weight: 400;
  margin-top: 28px;
}
.testi-box_profile .testi-box_name {
  margin-bottom: 6px;
  margin-top: -0.35em;
  font-weight: 600;
  font-family: var(--title-font);
  color: var(--title-color);
}
.testi-box_profile .testi-box_desig {
  font-size: 18px;
  font-weight: 400;
  display: block;
  margin-bottom: -0.1em;
}
@media (max-width: 1399px) {
  .testi-box .testi-box_text {
    font-size: 18px;
    line-height: 34px;
  }
}
@media (max-width: 1299px) {
  .testi-box .testi-box_text {
    font-size: 16px;
    line-height: 30px;
  }
}

/* Testimonial 2 ---------------------------------- */
.testi-slider2 .slick-slide {
  opacity: 0.1;
  transition: 0.4s;
}
.testi-slider2 .slick-slide.slick-current {
  opacity: 1;
}

.testi-box.style2 {
  text-align: center;
  padding: 0 55px;
}
.testi-box.style2 .quote-icon {
  filter: brightness(99);
}
.testi-box.style2 .testi-box_text {
  font-size: 40px;
  line-height: 54px;
  letter-spacing: -0.8px;
  color: var(--smoke-color);
}
.testi-box.style2 .testi-box_profile {
  margin-top: 52px;
}
.testi-box.style2 .testi-box_profile .testi-box_name {
  letter-spacing: -0.48px;
  font-size: 24px;
  color: var(--smoke-color);
}
.testi-box.style2 .testi-box_profile .testi-box_desig {
  font-size: 18px;
  font-weight: 400;
  color: var(--smoke-color);
  margin-bottom: -0.1em;
}

@media (max-width: 1700px) {
  .testi-box.style2 {
    padding: 0 25px;
  }
  .testi-box.style2 .testi-box_text {
    font-size: 30px;
  }
}
/* Medium Large devices */
@media (max-width: 1299px) {
  .testi-box.style2 {
    padding: 0 15px;
  }
  .testi-box.style2 .testi-box_text {
    line-height: normal;
  }
  .testi-box.style2 .testi-box_text {
    font-size: 27px;
  }
}
/* Large devices */
@media (max-width: 1199px) {
  .testi-box.style2 .testi-box_text {
    font-size: 30px;
  }
}
/* Small devices */
@media (max-width: 767px) {
  .testi-box.style2 .testi-box_text {
    font-size: 27px;
  }
}
/* Extra small devices */
@media (max-width: 575px) {
  .testi-box.style2 .testi-box_text {
    font-size: 24px;
  }
}
/* Extra small devices */
@media (max-width: 375px) {
  .testi-box.style2 .testi-box_text {
    font-size: 20px;
  }
  .testi-box.style2 .testi-box_profile {
    margin-top: 42px;
  }
}
/* Testimonial 3 ---------------------------------- */
.testi-box.style3 {
  background: var(--gray-color);
  padding: 40px;
}
.testi-box.style3 .quote-icon {
  filter: brightness(99);
}
.testi-box.style3 .testi-box_text {
  font-size: 24px;
  font-weight: 400;
  line-height: 38px;
  color: var(--smoke-color);
  letter-spacing: -0.48px;
  margin-bottom: 80px;
}
.testi-box.style3 .testi-box_profile .testi-box_name {
  color: var(--smoke-color);
}
.testi-box.style3 .testi-box_profile .testi-box_desig {
  color: var(--smoke-color);
}

/* Large devices */
@media (max-width: 1199px) {
  .testi-box.style3 .testi-box_text {
    font-size: 20px;
    line-height: initial;
  }
}
/* Medium devices */
@media (max-width: 991px) {
  .testi-box.style3 .testi-box_text {
    font-size: 24px;
    line-height: initial;
  }
}
/* Small devices */
@media (max-width: 767px) {
  .testi-box.style3 .testi-box_text {
    font-size: 20px;
    line-height: initial;
    margin-bottom: 50px;
  }
}
/* Extra small devices */
@media (max-width: 575px) {
  .testi-box.style3 {
    padding: 30px;
  }
  .testi-box.style3 .testi-box_text {
    font-size: 18px;
  }
}
/*------------------- 4.00. Counter  -------------------*/
/* Counter area ---------------------------------- */
.counter-divider {
  position: relative;
}
.counter-divider:after {
  content: "";
  position: absolute;
  left: -70px;
  top: 0;
  height: 100%;
  width: 1px;
  border: 1px solid var(--title-color);
}
.counter-divider:first-child:after {
  display: none;
}

.counter-card {
  max-width: 320px;
}
.counter-card_number {
  font-size: 60px;
  font-weight: 600;
  margin-bottom: 18px;
}
.counter-card_title {
  font-weight: 600;
}
.counter-card_text {
  font-size: 18px;
  margin-bottom: -0.2em;
}

/* Medium Large devices */
@media (max-width: 1399px) {
  .counter-divider:after {
    left: -30px;
  }
  .counter-card_number {
    font-size: 45px;
  }
}
/* Large devices */
@media (max-width: 1199px) {
  .counter-divider:after {
    display: none;
  }
  .counter-card_number {
    margin-top: -0.28em;
  }
  .counter-card_title {
    font-size: 22px;
  }
  .counter-card_text {
    font-size: 16px;
  }
}
/* Small devices */
@media (max-width: 767px) {
  .counter-card_number {
    font-size: 40px;
  }
  .counter-card {
    max-width: none;
    text-align: center;
  }
}
/*------------------- 4.00. Blog  -------------------*/
/* Blog Card ---------------------------------- */
.blog-meta {
  display: block;
  margin-top: -0.4em;
  margin-bottom: 12px;
}
.blog-meta span,
.blog-meta a {
  display: inline-block;
  position: relative;
  font-size: 18px;
  font-weight: 400;
  font-family: var(--body-font);
  color: var(--title-color);
  margin-right: 0;
}
.blog-meta span ~ a,
.blog-meta span ~ span,
.blog-meta a ~ a,
.blog-meta a ~ span {
  margin-left: 22px;
}
.blog-meta span ~ a:after,
.blog-meta span ~ span:after,
.blog-meta a ~ a:after,
.blog-meta a ~ span:after {
  content: "";
  height: 4px;
  width: 4px;
  background-color: var(--body-color);
  border-radius: 50%;
  position: absolute;
  top: 50%;
  left: -15px;
  margin-top: -3px;
}
.blog-meta span i,
.blog-meta a i {
  margin-right: 8px;
  color: var(--theme-color);
}
.blog-meta span:last-child,
.blog-meta a:last-child {
  margin-right: 0 !important;
  padding-right: 0;
}
.blog-meta span a {
  margin-right: 0 !important;
}
.blog-meta a:hover {
  color: var(--title-color);
}

.blog-card {
  background: transparent;
  position: relative;
  border-radius: 0px;
  display: block;
}
.blog-card .blog-title {
  font-weight: 600;
  color: var(--title-color);
  margin-bottom: 17px;
}
.blog-card .blog-title a {
  transition: 0.5s ease-in-out;
  color: var(--title-color);
}
.blog-card .blog-title a:hover {
  color: var(--title-color);
}
.blog-card .blog-img {
  width: 100%;
  overflow: hidden;
  position: relative;
  z-index: 3;
  border-radius: 0;
}
.blog-card .blog-img img {
  max-width: 100%;
  border-radius: 0;
  transform: scale(1.04);
  transition: 0.4s ease-in-out;
}
.blog-card .blog-content {
  border-radius: 0;
  position: relative;
  z-index: 2;
  padding-top: 30px;
  transition: 0.4s;
}
.blog-card:hover .post-img img,
.blog-card:hover .blog-img img {
  transform: scale(1.04) translateX(6px);
}

/* Large devices */
@media (max-width: 1199px) {
  .blog-card .blog-title {
    font-size: 20px;
  }
}
/* Small devices */
@media (max-width: 767px) {
  .blog-card .blog-img img {
    width: 100%;
  }
}
/* Blog Card 2 ---------------------------------- */
.blog-card.style2:after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 100%;
  width: 100%;
  background: -webkit-linear-gradient(180deg, rgba(10, 12, 0, 0) 0%, #0A0C00 100%), transparent 50%/cover no-repeat;
  background: linear-gradient(180deg, rgba(10, 12, 0, 0) 0%, #0A0C00 100%), transparent 50%/cover no-repeat;
  transition: 0.4s all;
  z-index: 3;
}
.blog-card.style2 .blog-content {
  position: absolute;
  bottom: 0px;
  left: 0;
  right: 0;
  z-index: 4;
  padding: 40px 36px;
  --title-color: #fff;
  opacity: 1;
  transition: 0.4s;
}
.blog-card.style2 .blog-content .blog-title {
  letter-spacing: -0.48px;
}
.blog-card.style2 .link-btn img {
  filter: brightness(999) grayscale(9);
}
.blog-card.style2 .blog-meta span ~ a:after,
.blog-card.style2 .blog-meta span ~ span:after,
.blog-card.style2 .blog-meta a ~ a:after {
  background: var(--title-color);
}

/* Medium Large devices */
@media (max-width: 1399px) {
  .blog-card.style2 .blog-content .blog-title {
    font-size: 22px;
  }
  .blog-card.style2 .blog-content {
    padding: 30px 26px;
  }
}
/* Large devices */
@media (max-width: 1199px) {
  .blog-card.style2 .blog-content .blog-title {
    font-size: 18px;
  }
  .blog-card.style2 .blog-meta span,
  .blog-card.style2 .blog-meta a {
    font-size: 14px;
  }
}
/* Small devices */
@media (max-width: 767px) {
  .blog-card.style2 .blog-content .blog-title {
    font-size: 24px;
  }
  .blog-card.style2 .blog-meta span,
  .blog-card.style2 .blog-meta a {
    font-size: 16px;
  }
}
/* Extra small devices */
@media (max-width: 575px) {
  .blog-card.style2 .blog-content .blog-title {
    font-size: 22px;
  }
}
/* Extra small devices */
@media (max-width: 375px) {
  .blog-card.style2 .blog-content .blog-title {
    font-size: 18px;
  }
  .blog-card.style2 .blog-meta span,
  .blog-card.style2 .blog-meta a {
    font-size: 14px;
  }
}
/* Blog Area 3 ---------------------------------- */
/* Blog grid ---------------------------------- */
.blog-grid-static-wrap {
  display: flex;
  flex-wrap: wrap;
  gap: 24px;
}
.blog-grid-static-wrap .blog-grid-static {
  position: sticky;
  top: 155px;
  flex-direction: column;
  flex-wrap: wrap;
  align-items: flex-start;
  margin: auto;
}

.blog-grid {
  display: flex;
  border: 0;
  background: var(--smoke-color);
  position: relative;
  border-radius: 0px;
  overflow: hidden;
}
.blog-grid .blog-img {
  position: relative;
  min-width: 302px;
  overflow: hidden;
}
.blog-grid .blog-img img {
  height: 100%;
  width: 100%;
  object-fit: cover;
  object-position: center center;
  transition: 0.4s ease-in-out;
}
.blog-grid .blog-content {
  padding: 40px;
  align-self: center;
}
.blog-grid .blog-title {
  font-size: 22px;
  margin-bottom: 21px;
  margin-top: 0px;
  line-height: 32px;
  font-weight: 600;
}
.blog-grid .blog-title a {
  color: var(--title-color);
}
.blog-grid .link-btn {
  margin-top: 50px;
}
.blog-grid:hover .blog-img img {
  transform: scale(1.1);
}

/* Medium Large devices */
@media (max-width: 1399px) {
  .blog-grid .blog-content {
    padding: 40px 30px;
  }
  .blog-grid .blog-img {
    min-width: 252px;
  }
  .blog-grid .link-btn {
    margin-top: 30px;
  }
}
/* Large devices */
@media (max-width: 1199px) {
  .blog-grid .blog-img {
    min-width: 302px;
  }
  .blog-grid .link-btn {
    margin-top: 70px;
  }
}
/* Small devices */
@media (max-width: 767px) {
  .blog-grid .blog-img {
    min-width: 180px;
  }
  .blog-grid .link-btn {
    margin-top: 0;
  }
  .blog-grid .blog-content {
    padding: 30px 30px;
  }
  .blog-grid .blog-title {
    font-size: 20px;
    line-height: 30px;
  }
  .blog-grid-static-wrap .blog-grid-static {
    position: initial;
  }
}
/* Extra small devices */
@media (max-width: 575px) {
  .blog-grid {
    flex-direction: column;
  }
  .blog-grid .blog-content {
    align-self: flex-start;
  }
  .blog-grid .blog-meta span, .blog-grid .blog-meta a {
    font-size: 16px;
  }
}
/* Extra small devices */
@media (max-width: 375px) {
  .blog-grid .blog-title {
    font-size: 18px;
    line-height: 28px;
  }
}
/* Blog Area 5 ---------------------------------- */
.blog-card.style3 .blog-meta span, .blog-card.style3 .blog-meta a {
  color: var(--smoke-color);
}
.blog-card.style3 .blog-meta span ~ a:after, .blog-card.style3 .blog-meta a ~ a:after {
  background-color: var(--smoke-color);
}
.blog-card.style3 .blog-title a {
  color: var(--smoke-color);
}
.blog-card.style3 .link-btn {
  color: var(--smoke-color);
}
.blog-card.style3 .link-btn:after, .blog-card.style3 .link-btn:before {
  background: var(--smoke-color);
}
.blog-card.style3 .link-btn img {
  filter: brightness(99) grayscale(99);
}

/*------------------- 4.00. Blog  -------------------*/
/*=============================
    19. Blog
===============================*/
.blog-post-item {
  border: none;
  background: var(--white-color);
  border-radius: 0px;
  margin-bottom: 30px;
}

.blog-post-thumb {
  position: relative;
  border-radius: 0px;
  overflow: hidden;
  margin-bottom: 30px;
}
.blog-post-thumb img {
  width: 100%;
  height: 600px;
  object-fit: cover;
  /* Extra small devices */
}
@media (max-width: 575px) {
  .blog-post-thumb img {
    height: 350px;
  }
}

.blog-post-content .title {
  font-size: 48px;
  font-weight: 600;
  letter-spacing: -0.96px;
  margin-bottom: 23px;
  text-transform: capitalize;
  /* Medium Large devices */
  /* Large devices */
  /* Extra small devices */
  /* Extra small devices */
}
.blog-post-content .title a {
  color: var(--title-color);
}
@media (max-width: 1399px) {
  .blog-post-content .title {
    font-size: 40px;
  }
}
@media (max-width: 1199px) {
  .blog-post-content .title {
    font-size: 32px;
    letter-spacing: normal;
  }
}
@media (max-width: 575px) {
  .blog-post-content .title {
    font-size: 24px;
  }
}
@media (max-width: 375px) {
  .blog-post-content .title {
    font-size: 20px;
  }
}

.blog-post-meta {
  margin-bottom: 12px;
}
.blog-post-meta .list-wrap {
  display: flex;
  align-items: center;
  gap: 15px 28px;
  flex-wrap: wrap;
}
.blog-post-meta .list-wrap li {
  display: flex;
  align-items: center;
  gap: 8px;
  display: inline-block;
  position: relative;
  font-size: 18px;
  font-weight: 400;
  font-family: var(--body-font);
  color: var(--title-color);
  margin-right: 0;
}
.blog-post-meta .list-wrap li a {
  color: var(--title-color);
}
.blog-post-meta .list-wrap li i {
  font-size: 18px;
}
.blog-post-meta .list-wrap li:not(:first-child):after {
  content: "";
  height: 4px;
  width: 4px;
  background-color: var(--body-color);
  border-radius: 50%;
  position: absolute;
  top: 50%;
  left: -15px;
  margin-top: -3px;
}

/*blog post 2************/
.blog-post-item-two {
  margin-bottom: 30px;
}
.blog-post-item-two .blog-post-thumb img {
  height: auto;
}
.blog-post-item-two .blog-post-content .title {
  font-size: 24px;
  letter-spacing: normal;
  /* Extra small devices */
}
@media (max-width: 375px) {
  .blog-post-item-two .blog-post-content .title {
    font-size: 22px;
  }
}

.blog__inner-wrap .row .col-70 {
  width: 70.5%;
  flex: 0 0 auto;
}

@media (max-width: 1199.98px) {
  .blog__inner-wrap .row .col-70 {
    width: 67.5%;
  }
}
@media (max-width: 991.98px) {
  .blog__inner-wrap .row .col-70 {
    width: 100%;
  }
}
.blog__inner-wrap .row .col-30 {
  width: 29.5%;
  flex: 0 0 auto;
}

@media (max-width: 1199.98px) {
  .blog__inner-wrap .row .col-30 {
    width: 32.5%;
  }
}
@media (max-width: 991.98px) {
  .blog__inner-wrap .row .col-30 {
    width: 100%;
  }
}
.blog__sidebar {
  margin-left: 48px;
  /* Medium Large devices */
}
@media (max-width: 1299px) {
  .blog__sidebar {
    margin-left: 0;
  }
}

@media (max-width: 991.98px) {
  .blog__sidebar {
    margin-top: 100px;
  }
}
/*Blog Details Area**********/
.blog__details-thumb {
  margin-bottom: 44px;
}
.blog__details-thumb img {
  border-radius: 0px;
  min-height: 250px;
  object-fit: cover;
}

.blog__details-content > .title {
  margin-bottom: 40px;
  font-size: 48px;
  font-weight: 600;
  line-height: 1.208;
  text-transform: capitalize;
}

@media (max-width: 1199.98px) {
  .blog__details-content > .title {
    font-size: 32px;
  }
}
@media (max-width: 767.98px) {
  .blog__details-content > .title {
    font-size: 28px;
  }
}
.blog__details-content .blog-post-meta {
  margin-bottom: 15px;
}

.blog__details-content > p {
  margin-bottom: 20px;
  font-size: 18px;
}

.blog__details-content .title-two {
  margin-bottom: 20px;
  font-size: 30px;
  font-weight: 600;
  text-transform: capitalize;
}

@media (max-width: 767.98px) {
  .blog__details-content .title-two {
    font-size: 26px;
  }
}
.blog__details-inner {
  margin: 40px 0;
}

.blog__details-inner-thumb {
  position: relative;
}
.blog__details-inner-thumb img {
  width: 100%;
}

@media (max-width: 767.98px) {
  .blog__details-inner-thumb {
    margin-bottom: 30px;
  }
}
.blog__details-inner-content .title {
  margin-bottom: 12px;
  font-size: 30px;
  font-weight: 600;
}

@media (max-width: 1199.98px) {
  .blog__details-inner-content .title {
    font-size: 26px;
  }
}
.blog__details-inner-content p {
  margin-bottom: 20px;
  width: 95%;
}

@media (max-width: 1199.98px) {
  .blog__details-inner-content p {
    width: 100%;
  }
}
.blog__details-bottom {
  margin-top: 35px;
  padding-bottom: 44px;
  border-bottom: 2px solid var(--title-color);
}
.blog__details-bottom .post-tags {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  gap: 10px;
}
.blog__details-bottom .post-tags .title {
  margin-bottom: 0;
  font-size: 14px;
}
.blog__details-bottom .post-tags .list-wrap {
  display: flex;
  gap: 13px 24px;
  flex-wrap: wrap;
}
.blog__details-bottom .post-tags .list-wrap li {
  position: relative;
}
.blog__details-bottom .post-tags .list-wrap li a {
  font-size: 18px;
  background: transparent;
  font-weight: 400;
  color: var(--title-color);
  display: block;
}
.blog__details-bottom .post-tags .list-wrap li:not(:last-child):after {
  content: "";
  background-color: var(--title-color);
  position: absolute;
  top: 50%;
  transform: translate(0, -50%);
  right: -14px;
  width: 2px;
  height: 16px;
}
.blog__details-bottom .post-share {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  gap: 10px;
  justify-content: flex-end;
}
.blog__details-bottom .post-share .title {
  margin-bottom: 0;
  font-size: 18px;
  font-weight: 400;
  font-family: var(--body-font);
  margin-right: 10px;
}
.blog__details-bottom .post-share .social-btn a {
  font-size: 18px;
}

@media (max-width: 767.98px) {
  .blog__details-bottom .post-share {
    justify-content: flex-start;
    margin-top: 20px;
  }
}
.blog__avatar-wrap {
  margin-top: 100px;
  margin-bottom: 100px;
  display: flex;
  align-items: center;
  gap: 35px;
  /* Medium devices */
  /* Small devices */
}
@media (max-width: 991px) {
  .blog__avatar-wrap {
    margin-top: 80px;
    margin-bottom: 80px;
  }
}
@media (max-width: 767px) {
  .blog__avatar-wrap {
    display: block;
  }
  .blog__avatar-wrap .blog__avatar-img img {
    width: auto;
    margin-bottom: 30px;
  }
}

.blog__avatar-img {
  flex: none;
}
.blog__avatar-img img {
  width: 100%;
  border-radius: 0;
}

.blog__avatar-info .name {
  font-size: 24px;
  font-weight: 600;
  font-family: var(--title-font);
  margin-bottom: 16px;
}
.blog__avatar-info .name a {
  color: var(--title-color);
}
.blog__avatar-info p {
  font-size: 18px;
  margin-bottom: 0;
  line-height: 1.66;
}

/*Blockquote****************/
blockquote {
  position: relative;
  z-index: 1;
  display: flex;
  gap: 24px;
  align-items: start;
  margin: 40px 0;
  /* Extra small devices */
}
blockquote .blockquote-icon {
  flex: none;
}
blockquote p {
  font-size: 24px;
  font-weight: 400;
  font-family: var(--body-font);
  text-transform: capitalize;
  color: var(--title-color);
  line-height: 1.583;
  letter-spacing: -0.48px;
  margin-top: -0.3em;
  margin-bottom: -0.3em;
}
@media (max-width: 575px) {
  blockquote {
    display: block;
  }
  blockquote .blockquote-icon {
    margin-bottom: 20px;
  }
}

@media (max-width: 767.98px) {
  blockquote p {
    font-size: 18px;
  }
}
/*sidebar-widget**************/
.sidebar__widget {
  border: none;
  padding: 0;
  border-radius: 0px;
  margin-bottom: 60px;
}

.sidebar__widget:last-child {
  margin-bottom: 0;
}

.sidebar__widget-search {
  border: none;
  padding: 0;
  border-radius: 0;
}

.sidebar__search form {
  position: relative;
}
.sidebar__search form input {
  width: 100%;
  border-bottom: 1px solid var(--title-color);
  border-radius: 0px;
  background: transparent;
  font-size: 18px;
  color: var(--body-color);
  padding: 0px 60px 0px 0px;
  height: 60px;
}
.sidebar__search form input::placeholder {
  color: rgba(10, 12, 0, 0.5);
  font-size: 18px;
}
.sidebar__search form button {
  border: none;
  position: absolute;
  right: 0px;
  top: 50%;
  transform: translateY(-50%);
  width: auto;
  height: auto;
  display: flex;
  align-items: center;
  justify-content: center;
  background: transparent;
  border-radius: 0px;
}
.sidebar__search form button svg {
  color: var(--title-color);
  width: 20px;
}

.sidebar__widget-title {
  font-size: 24px;
  font-weight: 600;
  margin-bottom: 30px;
  position: relative;
  letter-spacing: -0.48px;
  margin-top: -0.2em;
}

.sidebar__cat-list {
  margin-top: -0.3em;
}

.sidebar__cat-list .list-wrap li {
  margin-bottom: 17px;
}
.sidebar__cat-list .list-wrap li a {
  display: flex;
  align-items: center;
  text-transform: capitalize;
  color: var(--body-color);
  font-size: 18px;
  font-weight: 400;
  gap: 5px;
}
.sidebar__cat-list .list-wrap li:last-child {
  margin-bottom: -0.4em;
}

.sidebar__post-item {
  display: flex;
  gap: 20px;
  margin-bottom: 30px;
  align-items: center;
}
.sidebar__post-item:last-child {
  margin-bottom: 0;
}

.sidebar__post-thumb {
  width: 80px;
  flex: 0 0 auto;
}

.sidebar__post-content .title {
  font-size: 16px;
  margin-bottom: 6px;
  font-weight: 600;
  text-transform: capitalize;
  margin-top: -0.3em;
}
.sidebar__post-content .title a {
  color: var(--title-color);
}

.sidebar__post-content .date {
  display: flex;
  align-items: center;
  color: var(--title-color);
  font-size: 14px;
  margin-bottom: -0.5em;
}

.sidebar__tag-list {
  margin-top: -0.3em;
}

.sidebar__tag-list .list-wrap {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  gap: 13px 24px;
  overflow: hidden;
}
.sidebar__tag-list .list-wrap li {
  position: relative;
}
.sidebar__tag-list .list-wrap li a {
  font-size: 18px;
  background: transparent;
  font-weight: 400;
  color: var(--title-color);
  display: block;
}
.sidebar__tag-list .list-wrap li:not(:last-child):after {
  content: "";
  background-color: var(--title-color);
  position: absolute;
  top: 50%;
  transform: translate(0, -50%);
  right: -14px;
  width: 2px;
  height: 16px;
}

/*Comment Area**************/
.comments-wrap-title {
  font-size: 36px;
  margin-bottom: 35px;
  margin-top: -0.2em;
  /* Small devices */
}
@media (max-width: 767px) {
  .comments-wrap-title {
    font-size: 26px;
  }
}

.comments-wrap .latest-comments {
  margin-bottom: 50px;
}
.comments-wrap .latest-comments .children {
  margin: 0 0 0 135px;
  padding: 0;
}

@media (max-width: 767.98px) {
  .comments-wrap .latest-comments .children {
    margin: 0;
  }
}
.comments-box {
  display: flex;
  align-items: flex-start;
  padding-bottom: 48px;
  gap: 25px;
}

@media (max-width: 767.98px) {
  .comments-box {
    flex-wrap: wrap;
    gap: 20px;
  }
}
.comments-avatar {
  flex: 0 0 auto;
}

.comments-text .avatar-name {
  margin-bottom: 15px;
}
.comments-text .avatar-name .name {
  margin-bottom: 0;
  font-size: 20px;
  font-weight: 600;
}
.comments-text .avatar-name span {
  font-weight: 400;
  font-size: 18px;
  display: block;
  color: var(--title-color);
  margin-bottom: 6px;
}
.comments-text p {
  margin-bottom: 20px;
  font-size: 18px;
}

.comment-reply-title {
  font-size: 36px;
  margin-bottom: 10px;
  margin-top: -0.2em;
}

@media (max-width: 767.98px) {
  .comment-reply-title {
    font-size: 26px;
  }
}
.comment-form .comment-notes {
  margin-bottom: 35px;
  font-size: 18px;
}

.list-wrap {
  margin: 0px;
  padding: 0px;
}
.list-wrap li {
  list-style: none;
}

/*------------------- 4.00. Client  -------------------*/
.client-list-wrap {
  margin: 0;
  padding: 0;
  list-style: none;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  border: 2px solid var(--title-color);
}
.client-list-wrap li {
  border-top: 2px solid var(--title-color);
  border-right: 2px solid var(--title-color);
}
.client-list-wrap li a {
  height: 148px;
  line-height: 148px;
  width: 212px;
  display: inline-block;
  text-align: center;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: auto;
}
.client-list-wrap li a .link-effect {
  height: 35px;
}
.client-list-wrap li a:hover .link-effect .effect-1 {
  top: -100%;
}
.client-list-wrap li:last-child {
  border-right: 0;
}
.client-list-wrap li:not(:nth-last-child(-n+4)) {
  border-top: 0;
}
.client-list-wrap li:nth-child(4) {
  border-right: 0;
}

/* Medium Large devices */
@media (max-width: 1399px) {
  .client-list-wrap li a {
    width: 182px;
  }
}
/* Medium devices */
@media (max-width: 991px) {
  .client-list-wrap li a {
    width: 160px;
  }
}
/* Small devices */
@media (max-width: 767px) {
  .client-list-wrap li a {
    width: 100px;
  }
  .client-list-wrap li a {
    height: 128px;
    line-height: 128px;
  }
}
/* Extra small devices */
@media (max-width: 575px) {
  .client-list-wrap li a {
    height: 98px;
    line-height: 98px;
    width: 80px;
  }
}
/* Extra small devices */
@media (max-width: 375px) {
  .client-list-wrap li a {
    height: 78px;
    line-height: 78px;
    width: 60px;
  }
}
/*client-area 2********/
.client-area-2 .client-list-wrap {
  grid-template-columns: repeat(6, 1fr);
}
.client-area-2 .client-list-wrap li {
  border-top: 0;
  border-right: 2px solid var(--title-color);
}
.client-area-2 .client-list-wrap li:last-child {
  border-right: 0;
}

/* Large devices */
@media (max-width: 1199px) {
  .client-area-2 .client-list-wrap {
    grid-template-columns: repeat(3, 1fr);
  }
  .client-area-2 .client-list-wrap li {
    border-top: 2px solid var(--title-color);
  }
  .client-area-2 .client-list-wrap li:nth-child(3) {
    border-right: 0;
  }
  .client-area-2 .client-list-wrap li:not(:nth-last-child(-n+3)) {
    border-top: 0;
  }
}
.client-area-3 .client-list-wrap {
  border-color: var(--smoke-color);
}
.client-area-3 .client-list-wrap li {
  border-color: var(--smoke-color);
}
.client-area-3 .client-list-wrap li a img {
  filter: brightness(99) grayscale(99);
}

/*------------------- 4.00. Simple Sections  -------------------*/
.checklist ul {
  padding-left: 0;
  list-style: none;
  text-align: left;
  margin-bottom: 0;
}
.checklist li {
  font-size: 16px;
  font-weight: 400;
  margin-bottom: 5px;
  display: flex;
  color: var(--body-color);
}
.checklist li:last-child {
  margin-bottom: 0;
}
.checklist li i, .checklist li svg {
  font-size: 16px;
  margin-right: 10px;
  color: var(--theme-color);
  margin-top: 6px;
  width: 16px;
}
.checklist.style2 ul li {
  font-weight: 700;
  border-radius: 6px;
  background-color: rgb(247, 244, 239);
  padding: 17px 30px;
  font-family: var(--title-font);
}
.checklist.style2 ul li:not(:last-child) {
  margin-bottom: 20px;
}
.checklist.style2 ul li i {
  margin-right: 20px;
}
.checklist.style3 ul {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 8px;
}
.checklist.style3 ul li {
  margin-bottom: 0;
}
.checklist.style4 ul li:not(:last-child) {
  margin-bottom: 9px;
}
.checklist.style5 ul li {
  font-weight: 400;
  font-size: 16px;
  color: var(--body-color);
}
.checklist.mb-40 {
  /* Large devices */
}
@media (max-width: 1199px) {
  .checklist.mb-40 {
    margin-bottom: 32px;
  }
}
.checklist.mb-45 {
  /* Large devices */
}
@media (max-width: 1199px) {
  .checklist.mb-45 {
    margin-bottom: 35px;
  }
}

.img-half {
  position: absolute;
  top: 0;
  width: 50%;
  height: 100%;
  z-index: -1;
}
.img-half img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.img-half.img-right {
  right: 0;
}

.icon-box {
  display: inline-flex;
  gap: 10px;
}

.btn-wrap {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 20px 30px;
}
.btn-wrap.style2 {
  gap: 30px 40px;
}

.category-tag {
  background: var(--theme-color);
  height: 25px;
  line-height: 25px;
  border-radius: 30px;
  text-transform: uppercase;
  color: var(--white-color);
  font-size: 10px;
  font-weight: 700;
  display: inline-block;
  padding: 0 19px;
  letter-spacing: 1px;
}

/* Large devices */
@media (max-width: 1199px) {
  p.mb-40 {
    margin-bottom: 35px;
  }
  p.mb-45 {
    margin-bottom: 38px;
  }
  .checklist li {
    margin-bottom: 6px;
    font-size: 16px;
  }
  .checklist li i, .checklist li svg {
    font-size: 14px;
    margin-right: 5px;
  }
}
/* Extra small devices */
@media (max-width: 575px) {
  .checklist.style2 ul li i {
    margin-right: 10px;
  }
}
.global-img {
  position: relative;
  transition: all 0.4s ease-in-out;
}
.global-img:after {
  content: "";
  position: absolute;
  pointer-events: none;
  opacity: 1;
  z-index: 3;
  top: 50%;
  right: 0;
  bottom: 50%;
  left: 0;
  background: rgba(255, 255, 255, 0.3);
}
.global-img:hover:after {
  top: 0;
  bottom: 0;
  opacity: 0;
  transition: all 900ms linear;
}

.img-anim {
  visibility: hidden;
  position: relative;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

/*------------------- 4.00. Video -------------------*/
/* Video 1 ---------------------------------- */
.jarallax {
  width: 100%;
  height: 800px;
  /* Extra large devices */
  /* Small devices */
}
@media (max-width: 1500px) {
  .jarallax {
    height: 600px;
  }
}
@media (max-width: 767px) {
  .jarallax {
    height: 400px;
  }
}

.jarallax-video-pause {
  position: absolute;
  padding: 0;
  height: 100%;
  width: 100%;
  background-color: transparent;
  cursor: none;
  z-index: 10000;
  opacity: 0;
}

.cursor-follower.jarallax-btn {
  height: 180px;
  width: 180px;
  background: var(--white-color);
  transform: translate(-90px, -90px);
  border: 0;
}
.cursor-follower.jarallax-btn:after {
  content: "PLAY VIDEO";
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  text-align: center;
  line-height: 180px;
  font-size: 14px;
  font-weight: 600;
  font-family: var(--title-font);
}

.video-wrap {
  position: relative;
}
.video-wrap .play-btn {
  position: absolute;
  left: 50%;
  top: 50%;
  background: var(--white-color);
  color: var(--title-color);
  margin: -90px 0 0 -90px;
  /* Extra small devices */
}
@media (max-width: 575px) {
  .video-wrap .play-btn {
    margin: 0 0;
    transform: translate(-50%, -50%) !important;
  }
}
.video-wrap .play-btn:before, .video-wrap .play-btn:after {
  display: none;
}

/* Extra small devices */
@media (max-width: 575px) {
  .cursor-follower.jarallax-btn {
    height: 150px;
    width: 150px;
  }
  .cursor-follower.jarallax-btn:after {
    line-height: 150px;
  }
}
/*------------------- 4.00. Faq -------------------*/
/* Faq 1 ---------------------------------- */
.accordion-card {
  transition: 0.4s ease-in-out;
  overflow: hidden;
  background: transparent;
  border-bottom: 2px solid var(--title-color);
  border-radius: 0px;
  display: flex;
  align-items: start;
  padding-top: 30px;
  padding-bottom: 30px;
  position: relative;
  justify-content: space-between;
  gap: 20px;
}
.accordion-card:first-child {
  border-top: 2px solid var(--title-color);
}
.accordion-card .accordion-header {
  flex: none;
}
.accordion-card .accordion-button {
  font-size: 24px;
  font-weight: 600;
  font-family: var(--title-font);
  color: var(--title-color);
  border: 0;
  background-color: transparent;
  padding: 0px;
  gap: 10px;
  margin-bottom: 0;
  text-align: left;
  transition: 0.3s;
  align-items: start;
  position: inherit;
}
.accordion-card .accordion-button:after {
  content: "\f067";
  height: 40px;
  width: auto;
  border-radius: 7px;
  line-height: 38px;
  background: transparent;
  border: 0;
  font-family: var(--icon-font);
  color: var(--title-color);
  font-weight: 900;
  font-size: 16px;
  display: grid;
  justify-content: center;
  align-items: center;
  text-align: center;
  position: absolute;
  top: 23px;
  right: 0px;
  transition: 0.3s ease-in-out;
}
.accordion-card .accordion-button.collapse:after {
  content: "\f068";
  transform: rotate(0);
}
.accordion-card .accordion-button .faq-number {
  font-size: 14px;
  font-weight: 600;
  margin-right: 40px;
}
.accordion-card .accordion-button:focus {
  outline: none;
  box-shadow: none;
}
.accordion-card .accordion-button:not(.collapsed):after {
  content: "\f068";
  transform: rotate(0);
}
.accordion-card .accordion-collapse {
  border: none;
  position: relative;
}
.accordion-card .accordion-body {
  border-radius: 0;
  background-color: transparent;
  border: none;
  padding: 2px 60px 0px 0px;
  margin-top: -0.5em;
  max-width: 365px;
}
.accordion-card .accordion-body p {
  margin-bottom: -0.3em;
  font-weight: 400;
  font-size: 18px;
}
.accordion-card:last-child {
  margin-bottom: 0;
}

/* Medium devices */
@media (max-width: 991px) {
  .accordion-card {
    display: block;
  }
  .accordion-card .accordion-body {
    margin-top: 20px;
    max-width: none;
  }
}
/* Small devices */
@media (max-width: 767px) {
  .accordion-card .accordion-body {
    padding-right: 0;
  }
}
/* Extra small devices */
@media (max-width: 575px) {
  .accordion-card .accordion-button .faq-number {
    margin-right: 10px;
  }
  .accordion-card .accordion-button {
    font-size: 20px;
  }
  .accordion-card .accordion-body p {
    font-size: 16px;
  }
}
/* Faq 2 ---------------------------------- */
.accordion-card.style2 {
  display: block;
}
.accordion-card.style2 .accordion-button {
  font-size: 20px;
}
.accordion-card.style2 .accordion-body {
  max-width: none;
  padding-right: 0;
  margin-top: 12px;
  margin-bottom: 16px;
}

/*------------------- 4.00. feature -------------------*/
/*feature area 1***********************/
.feature-card {
  background: var(--smoke-color);
  padding: 40px 36px;
  /* Medium devices */
}
.feature-card-icon {
  margin-bottom: 74px;
}
.feature-card-title a {
  color: var(--title-color);
}
.feature-card-text {
  margin-bottom: 24px;
}
@media (max-width: 991px) {
  .feature-card {
    padding: 30px 26px;
  }
  .feature-card-title {
    font-size: 20px;
  }
  .feature-card-icon {
    margin-bottom: 34px;
  }
}

/*skill-feature**************/
.skill-feature {
  position: relative;
}
.skill-feature:not(:last-child) {
  margin-bottom: 27px;
}
.skill-feature_title {
  font-size: 14px;
  font-weight: 600;
  text-transform: uppercase;
  margin-bottom: 7px;
}
.skill-feature .progress {
  background: transparent;
  border-radius: 0;
  overflow: visible;
  height: 4px;
}
.skill-feature .progress .progress-bar {
  background: var(--title-color);
  border-radius: 0;
  height: 4px;
}
.skill-feature .progress .progress-value {
  font-size: 14px;
  font-weight: 600;
  font-family: var(--title-font);
  position: relative;
  top: -29px;
  transform: translate(-100%, 0);
}

/*feature area 3***********************/
.feature-static-wrap {
  display: flex;
  flex-wrap: wrap;
  gap: 24px;
}

.feature-static {
  position: sticky;
  top: 150px;
  flex-direction: column;
  flex-wrap: wrap;
  align-items: flex-start;
  margin: auto;
  width: 100%;
}

/* Large devices */
@media (max-width: 1199px) {
  .feature-static {
    position: initial;
  }
}
/*feature area 4***********************/
.feature-card.style-grid {
  display: flex;
  flex-direction: row-reverse;
  justify-content: space-between;
  gap: 100px;
}
.feature-card.style-grid .feature-card-icon {
  flex: none;
}
.feature-card.style-grid .feature-card-title {
  margin-top: -0.2em;
}
.feature-card.style-grid .feature-card-text {
  font-size: 18px;
}

/* Medium Large devices */
@media (max-width: 1399px) {
  .feature-card.style-grid {
    gap: 50px;
  }
}
/* Extra small devices */
@media (max-width: 575px) {
  .feature-card.style-grid {
    display: block;
  }
}
/*feature area 2***********************/
.feature-card.style2 {
  background: var(--gray-color);
}
.feature-card.style2 .feature-card-icon {
  filter: brightness(99) grayscale(99);
}
.feature-card.style2 .feature-card-title a {
  color: var(--smoke-color);
}
.feature-card.style2 .feature-card-text {
  color: var(--smoke-color);
}
.feature-card.style2 .link-btn {
  color: var(--smoke-color);
}
.feature-card.style2 .link-btn:after, .feature-card.style2 .link-btn:before {
  background: var(--smoke-color);
}
.feature-card.style2 .link-btn img {
  filter: brightness(99) grayscale(99);
}

/*------------------- 4.00. CTA -------------------*/
/* CTA Area 1 ---------------------------------- */
.cta-area-1 .sec-title {
  font-size: 80px;
  line-height: 1.125;
  /* Medium Large devices */
  /* Medium devices */
  /* Small devices */
  /* Extra small devices */
  /* Extra small devices */
}
@media (max-width: 1399px) {
  .cta-area-1 .sec-title {
    font-size: 60px;
  }
}
@media (max-width: 991px) {
  .cta-area-1 .sec-title {
    font-size: 50px;
  }
}
@media (max-width: 767px) {
  .cta-area-1 .sec-title {
    font-size: 40px;
  }
}
@media (max-width: 575px) {
  .cta-area-1 .sec-title {
    font-size: 36px;
  }
}
@media (max-width: 375px) {
  .cta-area-1 .sec-title {
    font-size: 32px;
  }
}

/*------------------- 4.00. Service -------------------*/
/* Service 1 ---------------------------------- */
.service-area-1 {
  margin-top: 100px;
  /* Extra large devices */
  /* Medium devices */
}
.service-area-1 .service-img-1-1 {
  width: 44%;
}
.service-area-1 .service-img-1-1 img {
  object-fit: cover;
  width: 100%;
  height: 100%;
}
@media (max-width: 1700px) {
  .service-area-1 .service-img-1-1 {
    width: 42%;
  }
  .service-area-1 .service-img-1-1 img {
    height: 100%;
  }
}
@media (max-width: 1500px) {
  .service-area-1 .service-img-1-1 {
    width: 42%;
  }
  .service-area-1 .service-img-1-1 img {
    height: 100%;
  }
}
@media (max-width: 991px) {
  .service-area-1 {
    margin-top: 0;
  }
  .service-area-1 .service-img-1-1 {
    width: 100%;
    top: -80px !important;
    position: relative;
  }
}

/*------------------- 4.00. Why Choose Us -------------------*/
/* Why choose area 1 ---------------------------------- */
.why-area-1 {
  margin-top: 100px;
  /* Extra large devices */
  /* Medium Large devices */
  /* Medium devices */
}
.why-area-1 p {
  font-size: 18px;
}
.why-area-1 .why-img-1-1 {
  width: 44%;
}
.why-area-1 .why-img-1-1 img {
  height: 100%;
  object-fit: cover;
  width: 100%;
}
@media (max-width: 1500px) {
  .why-area-1 .why-img-1-1 {
    width: 42%;
  }
}
@media (max-width: 1399px) {
  .why-area-1 p {
    font-size: 16px;
  }
}
@media (max-width: 991px) {
  .why-area-1 {
    margin-top: 0;
  }
  .why-area-1 .why-img-1-1 {
    width: 100%;
    top: -80px !important;
    position: relative;
  }
}

/*------------------- 4.00. Pricing -------------------*/
.pricing-card {
  padding: 40px;
}
.pricing-card .pricing-card_title {
  font-size: 24px;
  font-weight: 600;
  letter-spacing: -0.48px;
  margin-top: -0.2em;
  margin-bottom: 12px;
}
.pricing-card .pricing-card_wrap {
  margin-bottom: 19px;
}
.pricing-card .pricing-card_price {
  font-size: 60px;
  font-weight: 600;
  letter-spacing: -1.8px;
}
.pricing-card .pricing-card_price .duration {
  font-size: 20px;
  font-weight: 600;
  letter-spacing: -0.4px;
}
.pricing-card p {
  font-size: 18px;
  margin-bottom: 43px;
  /* Medium Large devices */
}
@media (max-width: 1399px) {
  .pricing-card p {
    font-size: 16px;
  }
}
.pricing-card .checklist {
  margin-bottom: 42px;
}
.pricing-card .checklist li {
  font-family: var(--title-font);
  font-size: 14px;
  font-weight: 600;
  letter-spacing: -0.14px;
  text-transform: uppercase;
}
.pricing-card .checklist li i {
  color: var(--title-color);
}
.pricing-card .btn {
  width: 100%;
}

/* Medium Large devices */
@media (max-width: 1399px) {
  .pricing-card .pricing-card_price {
    font-size: 50px;
  }
}
/* Large devices */
@media (max-width: 1199px) {
  .pricing-card .pricing-card_price {
    font-size: 40px;
  }
  .pricing-card {
    padding: 30px;
  }
  .pricing-card .btn {
    padding: 21.5px 30px;
  }
  .pricing-card p {
    font-size: 14px;
  }
}
/* Extra small devices */
@media (max-width: 575px) {
  .pricing-card .pricing-card_price {
    font-size: 30px;
  }
}
/*------------------- 4.00. Portfolio -------------------*/
/* Portfolio 1 ---------------------------------- */
.portfolio-area-1 {
  background-size: 100% calc(100% - 240px);
  background-position: bottom;
}

.portfolio-wrap {
  position: relative;
  display: block;
}
.portfolio-wrap .portfolio-thumb {
  display: inline-block;
  overflow: hidden;
}
.portfolio-wrap .portfolio-thumb img {
  transform: scale(1.03);
  transition: 0.4s ease-in-out;
}
.portfolio-wrap .portfolio-details {
  padding-top: 28px;
}
.portfolio-wrap .portfolio-details .portfolio-meta {
  display: inline-flex;
  padding: 0;
  margin: 0 0 14px;
}
.portfolio-wrap .portfolio-details .portfolio-meta li {
  display: inline-block;
  font-size: 18px;
  font-weight: 400;
  position: relative;
}
.portfolio-wrap .portfolio-details .portfolio-meta li:after {
  content: "/";
  position: relative;
  margin: 0 2px;
}
.portfolio-wrap .portfolio-details .portfolio-meta li a {
  color: var(--title-color);
}
.portfolio-wrap .portfolio-details .portfolio-meta li:last-child:after {
  display: none;
}
.portfolio-wrap .portfolio-details .portfolio-title {
  font-weight: 600;
  margin-bottom: 23px;
}
.portfolio-wrap .portfolio-details .portfolio-title a {
  color: var(--title-color);
}
.portfolio-wrap:hover .portfolio-thumb img {
  transform: scale(1.03) translateX(8px);
}

/* Portfolio 2 ---------------------------------- */
.portfolio-slider .slick-current .portfolio-wrap.style2:after {
  opacity: 1;
  height: 100%;
}
.portfolio-slider .slick-current .portfolio-wrap.style2 .portfolio-details {
  bottom: 0;
  opacity: 1;
}

.portfolio-wrap.style2 {
  position: relative;
  overflow: hidden;
  display: block;
}
.portfolio-wrap.style2:after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: -webkit-linear-gradient(180deg, rgba(10, 12, 0, 0) 0%, #0A0C00 100%);
  background: linear-gradient(180deg, rgba(10, 12, 0, 0) 0%, #0A0C00 100%);
  transition: 0.4s;
  opacity: 0;
  height: 0;
}
.portfolio-wrap.style2 .portfolio-thumb {
  overflow: initial;
  width: 100%;
}
.portfolio-wrap.style2 .portfolio-thumb img {
  width: 100%;
}
.portfolio-wrap.style2 .portfolio-details {
  position: absolute;
  left: 0;
  bottom: -25px;
  padding: 0 0 40px 40px;
  z-index: 1;
  max-width: 350px;
  transition: 0.4s;
  opacity: 0;
}
.portfolio-wrap.style2 .portfolio-details .portfolio-meta {
  color: var(--white-color);
}
.portfolio-wrap.style2 .portfolio-details .portfolio-meta li a {
  color: var(--white-color);
}
.portfolio-wrap.style2 .portfolio-details .portfolio-title {
  margin-bottom: -0.25em;
  color: var(--white-color);
}
.portfolio-wrap.style2 .portfolio-details .portfolio-title a {
  color: var(--white-color);
}

/* Large devices */
@media (max-width: 1199px) {
  .portfolio-wrap.style2 .portfolio-details {
    padding: 0 0 30px 30px;
  }
}
/* Medium devices */
@media (max-width: 991px) {
  .portfolio-wrap.style2 .portfolio-details {
    padding: 0 0 40px 40px;
  }
}
/* Extra small devices */
@media (max-width: 575px) {
  .portfolio-wrap.style2 .portfolio-details {
    padding: 0 0 30px 30px;
  }
  .portfolio-wrap.style2 .portfolio-details .portfolio-title {
    font-size: 24px;
  }
}
/* Portfolio 3 ---------------------------------- */
.portfolio-wrap.style3 {
  position: relative;
  overflow: hidden;
}
.portfolio-wrap.style3:after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: -webkit-linear-gradient(180deg, rgba(10, 12, 0, 0) 0%, #0A0C00 100%);
  background: linear-gradient(180deg, rgba(10, 12, 0, 0) 0%, #0A0C00 100%);
  transition: 0.4s;
  opacity: 0;
  height: 0;
}
.portfolio-wrap.style3 .portfolio-thumb {
  overflow: initial;
  width: 100%;
}
.portfolio-wrap.style3 .portfolio-thumb img {
  width: 100%;
}
.portfolio-wrap.style3 .portfolio-details {
  position: absolute;
  left: 0;
  bottom: -25px;
  padding: 0 0 40px 40px;
  z-index: 1;
  max-width: 350px;
  transition: 0.4s;
  opacity: 0;
}
.portfolio-wrap.style3 .portfolio-details .portfolio-meta {
  color: var(--white-color);
}
.portfolio-wrap.style3 .portfolio-details .portfolio-meta li a {
  color: var(--white-color);
}
.portfolio-wrap.style3 .portfolio-details .portfolio-title {
  margin-bottom: -0.25em;
  color: var(--white-color);
}
.portfolio-wrap.style3 .portfolio-details .portfolio-title a {
  color: var(--white-color);
}
.portfolio-wrap.style3:hover:after {
  opacity: 1;
  height: 100%;
}
.portfolio-wrap.style3:hover .portfolio-details {
  opacity: 1;
  bottom: 0;
}

/* Large devices */
@media (max-width: 1199px) {
  .portfolio-wrap.style3 .portfolio-details {
    padding: 0 0 30px 30px;
  }
}
/* Medium devices */
@media (max-width: 991px) {
  .portfolio-wrap.style3 .portfolio-details {
    padding: 0 0 40px 40px;
  }
}
/* Extra small devices */
@media (max-width: 575px) {
  .portfolio-wrap.style3 .portfolio-details {
    padding: 0 0 30px 30px;
  }
  .portfolio-wrap.style3 .portfolio-details .portfolio-title {
    font-size: 24px;
  }
}
/* Extra small devices */
@media (max-width: 375px) {
  .portfolio-wrap.style3 .portfolio-details .portfolio-title {
    font-size: 20px;
  }
  .portfolio-wrap.style3 .portfolio-details {
    padding: 0 0 20px 20px;
  }
}
/* Portfolio 4 ---------------------------------- */
.portfolio-wrap.style4 .portfolio-details .portfolio-title a {
  color: var(--smoke-color);
}
.portfolio-wrap.style4 .portfolio-details .portfolio-meta {
  margin-bottom: -0.3em;
}
.portfolio-wrap.style4 .portfolio-details .portfolio-meta li a {
  color: var(--smoke-color);
}
.portfolio-wrap.style4 .portfolio-details .portfolio-meta li:after {
  color: var(--smoke-color);
}

/* Medium devices */
@media (max-width: 991px) {
  .portfolio-wrap.style4 .portfolio-thumb img {
    width: 100%;
  }
}
/* Portfolio 5 ---------------------------------- */
.project-area-6 {
  position: relative;
}

.portfolio-static-wrap {
  display: flex;
  flex-wrap: wrap;
}

.portfolio-static {
  position: sticky;
  top: 0;
  flex-direction: column;
  flex-wrap: wrap;
  align-items: flex-start;
  margin: auto;
  /* Extra small devices */
}
@media (max-width: 575px) {
  .portfolio-static {
    top: 86px;
  }
}

.portfolio-wrap.style5:after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: -webkit-linear-gradient(180deg, rgba(10, 12, 0, 0) 0%, #0A0C00 100%);
  background: linear-gradient(180deg, rgba(10, 12, 0, 0) 0%, #0A0C00 100%);
  transition: 0.4s;
  opacity: 1;
  height: 100%;
}
.portfolio-wrap.style5 .portfolio-thumb img {
  width: 100%;
}
.portfolio-wrap.style5 .portfolio-details {
  position: absolute;
  left: 0;
  bottom: 0px;
  padding: 0 140px 140px 140px;
  z-index: 1;
  transition: 0.4s;
  opacity: 1;
  display: flex;
  justify-content: space-between;
  width: 100%;
  align-items: end;
}
.portfolio-wrap.style5 .portfolio-details .media-left {
  max-width: 746px;
}
.portfolio-wrap.style5 .portfolio-details .portfolio-meta li a {
  color: var(--smoke-color);
}
.portfolio-wrap.style5 .portfolio-details .portfolio-meta li:after {
  color: var(--smoke-color);
}
.portfolio-wrap.style5 .portfolio-details .portfolio-title {
  margin-bottom: -0.25em;
  font-size: 48px;
}
.portfolio-wrap.style5 .portfolio-details .portfolio-title a {
  color: var(--smoke-color);
}
.portfolio-wrap.style5 .portfolio-details-btn {
  flex: none;
}
.portfolio-wrap.style5 .link-btn {
  color: var(--smoke-color);
}
.portfolio-wrap.style5 .link-btn img {
  filter: brightness(99) grayscale(99);
}
.portfolio-wrap.style5 .link-btn:after, .portfolio-wrap.style5 .link-btn:before {
  background: var(--smoke-color);
}

/* Medium Large devices */
@media (max-width: 1299px) {
  .portfolio-wrap.style5 .portfolio-details {
    padding: 0 100px 100px 100px;
  }
  .portfolio-wrap.style5 .portfolio-details .portfolio-title {
    font-size: 36px;
  }
  .portfolio-wrap.style5 .portfolio-details .media-left {
    max-width: 600px;
  }
}
/* Large devices */
@media (max-width: 1199px) {
  .portfolio-wrap.style5 .portfolio-details .portfolio-title {
    font-size: 32px;
  }
  .portfolio-wrap.style5 .portfolio-details {
    padding: 0 80px 80px 80px;
  }
}
/* Medium devices */
@media (max-width: 991px) {
  .portfolio-wrap.style5 .portfolio-details {
    padding: 0 60px 60px 60px;
  }
  .portfolio-wrap.style5 .portfolio-details .portfolio-title {
    font-size: 28px;
  }
  .portfolio-wrap.style5 .portfolio-details .media-left {
    max-width: 460px;
  }
}
/* Small devices */
@media (max-width: 767px) {
  .portfolio-wrap.style5 .portfolio-details {
    padding: 0 40px 40px 40px;
  }
  .portfolio-wrap.style5 .portfolio-details .portfolio-title {
    font-size: 24px;
  }
}
/* Extra small devices */
@media (max-width: 575px) {
  .portfolio-wrap.style5 .portfolio-details .media-left {
    max-width: none;
    margin-bottom: 20px;
  }
  .portfolio-wrap.style5 .portfolio-details {
    padding: 30px 15px 40px 15px;
    display: block;
  }
  .portfolio-wrap.style5 .portfolio-thumb img {
    min-height: 300px;
    object-fit: cover;
  }
  .portfolio-wrap.style5 .portfolio-details .portfolio-title {
    font-size: 22px;
  }
  .portfolio-wrap .portfolio-details .portfolio-meta li {
    font-size: 16px;
  }
}
/*project-area-8*********/
.project-area-8 .portfolio-wrap.style3 .portfolio-details {
  padding: 0 48px 48px 48px;
  display: flex;
  justify-content: space-between;
  width: 100%;
  align-items: end;
  max-width: none;
}
.project-area-8 .portfolio-wrap.style3 .portfolio-details .media-left {
  max-width: 746px;
}
.project-area-8 .portfolio-wrap.style3 .portfolio-details .link-btn {
  color: var(--smoke-color);
}
.project-area-8 .portfolio-wrap.style3 .portfolio-details .link-btn:before, .project-area-8 .portfolio-wrap.style3 .portfolio-details .link-btn:after {
  background: var(--smoke-color);
}
.project-area-8 .portfolio-wrap.style3 .portfolio-details .link-btn img {
  filter: brightness(99) grayscale(99);
}
.project-area-8 .portfolio-wrap.style3 .portfolio-details .portfolio-meta li:after {
  color: var(--smoke-color);
}
.project-area-8 .portfolio-wrap.style3 .portfolio-details .portfolio-details-btn {
  flex: none;
}

/* Large devices */
@media (max-width: 1199px) {
  .project-area-8 .portfolio-wrap.style3 .portfolio-details .media-left {
    max-width: 600px;
  }
}
/* Medium devices */
@media (max-width: 991px) {
  .project-area-8 .portfolio-wrap.style3 .portfolio-details {
    padding: 0 35px 35px 35px;
  }
}
/* Small devices */
@media (max-width: 767px) {
  .project-area-8 .portfolio-wrap.style3 .portfolio-details {
    padding: 0 25px 25px 25px;
  }
  .project-area-8 .portfolio-wrap.style3 .portfolio-details .portfolio-title {
    font-size: 20px;
  }
}
/* Extra small devices */
@media (max-width: 575px) {
  .project-area-8 .portfolio-wrap.style3 .portfolio-thumb img {
    min-height: 300px;
    object-fit: cover;
  }
  .project-area-8 .portfolio-wrap.style3 .portfolio-details {
    display: block;
  }
  .project-area-8 .portfolio-wrap.style3 .portfolio-details .portfolio-meta {
    flex-wrap: wrap;
  }
  .project-area-8 .portfolio-wrap.style3 .portfolio-details .portfolio-thumb img {
    min-height: 300px;
  }
  .project-area-8 .portfolio-wrap.style3 .portfolio-details .media-left {
    max-width: none;
    margin-bottom: 20px;
  }
}
/*project-details-area*********/
.project-details-info .list-wrap {
  list-style: none;
  margin: 0;
  padding: 0;
}
.project-details-info .list-wrap li {
  font-size: 14px;
  font-weight: 600;
  font-family: var(--title-font);
  color: var(--title-color);
  text-transform: uppercase;
}
.project-details-info .list-wrap li:not(:last-child) {
  margin-bottom: 24px;
}
.project-details-info .list-wrap li span {
  display: block;
  font-family: var(--body-font);
  font-size: 18px;
  font-weight: 400;
  text-transform: capitalize;
  margin-bottom: 6px;
}

.inner__page-nav {
  display: flex;
  justify-content: space-between;
  margin-top: 20px;
  flex-wrap: wrap;
}
.inner__page-nav .nav-btn {
  font-size: 14px;
  font-weight: 600;
  font-family: var(--title-font);
  color: var(--title-color);
  display: flex;
  gap: 10px;
  align-items: center;
  text-transform: uppercase;
}

/*------------------- 4.00. Process -------------------*/
.process-card .process-card-number {
  font-size: 14px;
  font-weight: 600;
  font-family: var(--title-font);
  color: var(--smoke-color);
  text-transform: uppercase;
  border-bottom: 2px solid var(--smoke-color);
  padding-bottom: 22px;
  position: relative;
}
.process-card .process-card-number:after {
  content: "";
  position: absolute;
  left: -4px;
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background: var(--smoke-color);
  bottom: 0;
  transform: translate(0px, 50%);
  border: 4px solid var(--title-color);
}
.process-card .process-card-title {
  font-size: 24px;
  font-weight: 600;
  color: var(--smoke-color);
  letter-spacing: -0.48px;
  margin-top: 45px;
}
.process-card .process-card-text {
  font-size: 18px;
  font-weight: 400;
  line-height: 30px;
  color: var(--smoke-color);
  max-width: 330px;
  margin-bottom: -0.3em;
}

/* Large devices */
@media (max-width: 1199px) {
  .process-card .process-card-text {
    font-size: 16px;
  }
}
/* Medium devices */
@media (max-width: 991px) {
  .process-card .process-card-text {
    max-width: none;
    font-size: 18px;
  }
}
/*------------------- 4.00. Award -------------------*/
/*award area 1***********************/
.award-wrap-area {
  list-style: none;
  padding: 0;
  margin: 0;
}
.award-wrap-area .single-award-list {
  display: flex;
  border-bottom: 2px solid var(--title-color);
  padding-bottom: 31px;
  padding-top: 26px;
}
.award-wrap-area .single-award-list:first-child {
  border-top: 2px solid var(--title-color);
}
.award-wrap-area .single-award-list .award-tag,
.award-wrap-area .single-award-list .award-year {
  font-size: 14px;
  font-weight: 600;
  font-family: var(--title-font);
  color: var(--title-color);
  letter-spacing: -0.14px;
  transition: 1s;
}
.award-wrap-area .single-award-list .award-details {
  margin-left: 100px;
  transition: 1s;
  position: relative;
}
.award-wrap-area .single-award-list .award-details h4 {
  font-size: 24px;
  font-weight: 600;
  font-family: var(--title-font);
  margin-bottom: 3px;
}
.award-wrap-area .single-award-list .award-details h4 a {
  color: var(--title-color);
}
.award-wrap-area .single-award-list .award-details h4 a:hover {
  color: var(--title-color);
}
.award-wrap-area .single-award-list .award-details p {
  font-size: 18px;
  margin-bottom: -0.3em;
}
.award-wrap-area .single-award-list .award-tag {
  margin-left: auto;
  text-transform: uppercase;
  transition: 1s;
}
.award-wrap-area .single-award-list:hover .award-details,
.award-wrap-area .single-award-list:hover .award-year {
  transform: translate3d(1.5rem, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
  transform-style: preserve-3d;
}
.award-wrap-area .single-award-list:hover .award-tag {
  transform: translate3d(-1.5rem, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
  transform-style: preserve-3d;
}
.award-wrap-area .single-award-list.style2 .award-details h4 {
  font-size: 36px;
  margin-top: -0.1em;
  margin-bottom: 8px;
  /* Large devices */
  /* Medium devices */
}
@media (max-width: 1199px) {
  .award-wrap-area .single-award-list.style2 .award-details h4 {
    font-size: 30px;
  }
}
@media (max-width: 991px) {
  .award-wrap-area .single-award-list.style2 .award-details h4 {
    font-size: 24px;
  }
}
.award-wrap-area .single-award-list.style2 .award-meta {
  font-size: 18px;
  font-weight: 400;
  font-family: var(--body-font);
}
.award-wrap-area .single-award-list.style2 .award-meta a {
  color: var(--title-color);
}
.award-wrap-area .single-award-list.style2 .award-meta a:after {
  content: "/";
  position: relative;
  margin-left: 3px;
}
.award-wrap-area .single-award-list.style2 .award-meta a:last-child:after {
  display: none;
}

/* Large devices */
@media (max-width: 1199px) {
  .award-wrap-area .single-award-list .award-details {
    margin-left: 50px;
  }
}
/* Medium devices */
@media (max-width: 991px) {
  .award-wrap-area .single-award-list .award-details p {
    font-size: 16px;
  }
}
/* Small devices */
@media (max-width: 767px) {
  .award-wrap-area .single-award-list {
    display: block;
  }
  .award-wrap-area .single-award-list .award-details {
    margin-left: 0px;
    margin-top: 10px;
    margin-bottom: 20px;
  }
  .award-wrap-area .single-award-list .award-tag {
    margin-bottom: -0.5em;
    display: block;
  }
  .award-wrap-area .single-award-list {
    transition: 1s;
  }
  .award-wrap-area .single-award-list:hover {
    padding-left: 1.5rem;
  }
  .award-wrap-area .single-award-list:hover .award-details {
    transform: none;
  }
}
/* Extra small devices */
@media (max-width: 575px) {
  .award-wrap-area .single-award-list .award-details h4 {
    font-size: 22px;
  }
  .award-wrap-area .single-award-list .award-details p {
    font-size: 14px;
  }
  .award-wrap-area .single-award-list .award-details .award-thumb {
    display: none;
  }
}
/*=================================
    05. Spacing
==================================*/
/*-- Padding Left And Right --*/
.px-5 {
  padding-right: 5px;
  padding-left: 5px;
}

.px-10 {
  padding-right: 10px;
  padding-left: 10px;
}

.px-15 {
  padding-right: 15px;
  padding-left: 15px;
}

.px-20 {
  padding-right: 20px;
  padding-left: 20px;
}

.px-25 {
  padding-right: 25px;
  padding-left: 25px;
}

.px-30 {
  padding-right: 30px;
  padding-left: 30px;
}

.px-35 {
  padding-right: 35px;
  padding-left: 35px;
}

.px-40 {
  padding-right: 40px;
  padding-left: 40px;
}

.px-45 {
  padding-right: 45px;
  padding-left: 45px;
}

.px-50 {
  padding-right: 50px;
  padding-left: 50px;
}

/*-- Padding Top And Bottom --*/
.py-5 {
  padding-top: 5px;
  padding-bottom: 5px;
}

.py-10 {
  padding-top: 10px;
  padding-bottom: 10px;
}

.py-15 {
  padding-top: 15px;
  padding-bottom: 15px;
}

.py-20 {
  padding-top: 20px;
  padding-bottom: 20px;
}

.py-25 {
  padding-top: 25px;
  padding-bottom: 25px;
}

.py-30 {
  padding-top: 30px;
  padding-bottom: 30px;
}

.py-35 {
  padding-top: 35px;
  padding-bottom: 35px;
}

.py-40 {
  padding-top: 40px;
  padding-bottom: 40px;
}

.py-45 {
  padding-top: 45px;
  padding-bottom: 45px;
}

.py-50 {
  padding-top: 50px;
  padding-bottom: 50px;
}

/*-- Padding Top --*/
.pt-5 {
  padding-top: 5px;
}

.pt-10 {
  padding-top: 10px;
}

.pt-15 {
  padding-top: 15px;
}

.pt-20 {
  padding-top: 20px;
}

.pt-25 {
  padding-top: 25px;
}

.pt-30 {
  padding-top: 30px;
}

.pt-35 {
  padding-top: 35px;
}

.pt-40 {
  padding-top: 40px;
}

.pt-45 {
  padding-top: 45px;
}

.pt-50 {
  padding-top: 50px;
}

/*-- Padding Bottom --*/
.pb-5 {
  padding-bottom: 5px;
}

.pb-10 {
  padding-bottom: 10px;
}

.pb-15 {
  padding-bottom: 15px;
}

.pb-20 {
  padding-bottom: 20px;
}

.pb-25 {
  padding-bottom: 25px;
}

.pb-30 {
  padding-bottom: 30px;
}

.pb-35 {
  padding-bottom: 35px;
}

.pb-40 {
  padding-bottom: 40px;
}

.pb-45 {
  padding-bottom: 45px;
}

.pb-50 {
  padding-bottom: 50px;
}

/*-- Padding Left --*/
.pl-5 {
  padding-left: 5px;
}

.pl-10 {
  padding-left: 10px;
}

.pl-15 {
  padding-left: 15px;
}

.pl-20 {
  padding-left: 20px;
}

.pl-25 {
  padding-left: 25px;
}

.pl-30 {
  padding-left: 30px;
}

.pl-35 {
  padding-left: 35px;
}

.pl-40 {
  padding-left: 40px;
}

.pl-45 {
  padding-left: 45px;
}

.pl-50 {
  padding-left: 50px;
}

/*-- Padding Right --*/
.pr-5 {
  padding-right: 5px;
}

.pr-10 {
  padding-right: 10px;
}

.pr-15 {
  padding-right: 15px;
}

.pr-20 {
  padding-right: 20px;
}

.pr-25 {
  padding-right: 25px;
}

.pr-30 {
  padding-right: 30px;
}

.pr-35 {
  padding-right: 35px;
}

.pr-40 {
  padding-right: 40px;
}

.pr-45 {
  padding-right: 45px;
}

.pr-50 {
  padding-right: 50px;
}

.pb-60 {
  padding-bottom: 60px;
}

.pb-105 {
  padding-bottom: 105px;
}

.pt-105 {
  padding-top: 105px;
}

.pt-100 {
  padding-top: 100px;
}

/*-- margin Left And Right --*/
.mx-5 {
  margin-right: 5px;
  margin-left: 5px;
}

.mx-10 {
  margin-right: 10px;
  margin-left: 10px;
}

.mx-15 {
  margin-right: 15px;
  margin-left: 15px;
}

.mx-20 {
  margin-right: 20px;
  margin-left: 20px;
}

.mx-25 {
  margin-right: 25px;
  margin-left: 25px;
}

.mx-30 {
  margin-right: 30px;
  margin-left: 30px;
}

.mx-35 {
  margin-right: 35px;
  margin-left: 35px;
}

.mx-40 {
  margin-right: 40px;
  margin-left: 40px;
}

.mx-45 {
  margin-right: 45px;
  margin-left: 45px;
}

.mx-50 {
  margin-right: 50px;
  margin-left: 50px;
}

/*-- margin Top And Bottom --*/
.my-5 {
  margin-top: 5px;
  margin-bottom: 5px;
}

.my-10 {
  margin-top: 10px;
  margin-bottom: 10px;
}

.my-15 {
  margin-top: 15px;
  margin-bottom: 15px;
}

.my-20 {
  margin-top: 20px;
  margin-bottom: 20px;
}

.my-25 {
  margin-top: 25px;
  margin-bottom: 25px;
}

.my-30 {
  margin-top: 30px;
  margin-bottom: 30px;
}

.my-35 {
  margin-top: 35px;
  margin-bottom: 35px;
}

.my-40 {
  margin-top: 40px;
  margin-bottom: 40px;
}

.my-45 {
  margin-top: 45px;
  margin-bottom: 45px;
}

.my-50 {
  margin-top: 50px;
  margin-bottom: 50px;
}

/*-- margin Top --*/
.mt-5 {
  margin-top: 5px;
}

.mt-10 {
  margin-top: 10px;
}

.mt-15 {
  margin-top: 15px;
}

.mt-20 {
  margin-top: 20px;
}

.mt-25 {
  margin-top: 25px;
}

.mt-30 {
  margin-top: 30px;
}

.mt-35 {
  margin-top: 35px;
}

.mt-40 {
  margin-top: 40px;
}

.mt-45 {
  margin-top: 45px;
}

.mt-50 {
  margin-top: 50px;
}

/*-- margin Bottom --*/
.mb-5 {
  margin-bottom: 5px;
}

.mb-10 {
  margin-bottom: 10px;
}

.mb-15 {
  margin-bottom: 15px;
}

.mb-20 {
  margin-bottom: 20px;
}

.mb-25 {
  margin-bottom: 25px;
}

.mb-30 {
  margin-bottom: 30px;
}

.mb-35 {
  margin-bottom: 35px;
}

.mb-40 {
  margin-bottom: 40px;
}

.mb-45 {
  margin-bottom: 45px;
}

.mb-50 {
  margin-bottom: 50px;
}

/*-- margin Left --*/
.ml-5 {
  margin-left: 5px;
}

.ml-10 {
  margin-left: 10px;
}

.ml-15 {
  margin-left: 15px;
}

.ml-20 {
  margin-left: 20px;
}

.ml-25 {
  margin-left: 25px;
}

.ml-30 {
  margin-left: 30px;
}

.ml-35 {
  margin-left: 35px;
}

.ml-40 {
  margin-left: 40px;
}

.ml-45 {
  margin-left: 45px;
}

.ml-50 {
  margin-left: 50px;
}

/*-- margin Right --*/
.mr-5 {
  margin-right: 5px;
}

.mr-10 {
  margin-right: 10px;
}

.mr-15 {
  margin-right: 15px;
}

.mr-20 {
  margin-right: 20px;
}

.mr-25 {
  margin-right: 25px;
}

.mr-30 {
  margin-right: 30px;
}

.mr-35 {
  margin-right: 35px;
}

.mr-40 {
  margin-right: 40px;
}

.mr-45 {
  margin-right: 45px;
}

.mr-50 {
  margin-right: 50px;
}

.mb-60 {
  margin-bottom: 60px;
}

.mt-140 {
  margin-top: 140px;
  /* Large devices */
}
@media (max-width: 1199px) {
  .mt-140 {
    margin-top: 80px;
  }
}

.mt-lg-140 {
  margin-top: 140px;
  /* Large devices */
  /* Medium devices */
}
@media (max-width: 1199px) {
  .mt-lg-140 {
    margin-top: 100px;
  }
}
@media (max-width: 991px) {
  .mt-lg-140 {
    margin-top: 0;
  }
}

.mt-n1 {
  margin-top: -0.25rem;
}

.mt-n2 {
  margin-top: -0.65rem;
}

.mt-n3 {
  margin-top: -0.8rem;
}

.mt-n4 {
  margin-top: -1.5rem;
}

.mt-n5 {
  margin-top: -3rem;
}

.mt-80 {
  margin-top: 80px;
  /* Medium devices */
}
@media (max-width: 991px) {
  .mt-80 {
    margin-top: 40px;
  }
}

.mt-60 {
  margin-top: 60px;
}

.mb-n1 {
  margin-bottom: -0.25rem;
}

.mb-n2 {
  margin-bottom: -0.6rem;
}

.mb-n3 {
  margin-bottom: -0.8rem;
}

.mb-n4 {
  margin-bottom: -1.5rem;
}

.mb-n5 {
  margin-bottom: -3rem;
}

.mb-80 {
  margin-bottom: 80px;
  /* Medium devices */
}
@media (max-width: 991px) {
  .mb-80 {
    margin-bottom: 40px;
  }
}

.space,
.space-top {
  padding-top: var(--section-space);
}

.space,
.space-bottom {
  padding-bottom: var(--section-space);
}

.space-extra,
.space-extra-top {
  padding-top: calc(var(--section-space) - 30px);
}

.space-extra,
.space-extra-bottom {
  padding-bottom: calc(var(--section-space) - 30px);
}

.space-extra2,
.space-extra2-top {
  padding-top: calc(var(--section-space) - 40px);
}

.space-extra2,
.space-extra2-bottom {
  padding-bottom: calc(var(--section-space) - 40px);
}

/* Medium devices */
@media (max-width: 991px) {
  .space,
  .space-top {
    padding-top: var(--section-space-mobile);
  }
  .space,
  .space-bottom {
    padding-bottom: var(--section-space-mobile);
  }
  .space-extra,
  .space-extra-top {
    padding-top: calc(var(--section-space-mobile) - 30px);
  }
  .space-extra,
  .space-extra-bottom {
    padding-bottom: calc(var(--section-space-mobile) - 30px);
  }
  .space-top-md-none {
    padding-top: 0;
  }
  .space-extra2,
  .space-extra2-top {
    padding-top: 70px;
  }
  .space-extra2,
  .space-extra2-bottom {
    padding-bottom: 70px;
  }
  .pb-105 {
    padding-bottom: 65px;
  }
  .pt-105 {
    padding-top: 65px;
  }
}

/*# sourceMappingURL=style.css.map */

    </style>
</head>

<body>
    <!--********************************
   		Code Start From Here
	******************************** -->

    <!--==============================
     Preloader
    ==============================-->
    <!-- <div class="preloader">
        <div class="preloader-inner">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div> -->

    <div class="popup-search-box">
        <button class="searchClose"><img src="assets/img/icon/close.svg" alt="img"></button>
        <form action="#">
            <input type="text" placeholder="Search Here..">
            <button type="submit"><img src="assets/img/icon/search-white.svg" alt="img"></button>
        </form>
    </div>

    <div class="sidemenu-wrapper">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><img src="assets/img/icon/close.svg" alt="icon"></button>
            <div class="widget footer-widget">
                <div class="widget-about">
                    <div class="footer-logo">
                        <a href="index.html"><img src="assets/img/logo-white.svg" alt="Ovation"></a>
                    </div>
                    <p class="about-text">We are digital agency that helps businesses develop immersive and engaging</p>
                    <div class="sidebar-wrap">
                        <h6>27 Division St, New York,</h6>
                        <h6>NY 10002, USA</h6>
                    </div>
                    <div class="sidebar-wrap">
                        <h6><a href="tel:1800123654987">+1 800 123 654 987 </a></h6>
                        <h6><a href="mailto:frisk.agency@mail.com">frisk.agency@mail.com</a></h6>
                    </div>
                    <div class="social-btn style2">
                        <a href="https://www.facebook.com/">
                            <span class="link-effect">
                                <span class="effect-1"><i class="fab fa-facebook"></i></span>
                                <span class="effect-1"><i class="fab fa-facebook"></i></span>
                            </span>
                        </a>
                        <a href="https://instagram.com/">
                            <span class="link-effect">
                                <span class="effect-1"><i class="fab fa-instagram"></i></span>
                                <span class="effect-1"><i class="fab fa-instagram"></i></span>
                            </span>
                        </a>
                        <a href="https://twitter.com/">
                            <span class="link-effect">
                                <span class="effect-1"><i class="fab fa-twitter"></i></span>
                                <span class="effect-1"><i class="fab fa-twitter"></i></span>
                            </span>
                        </a>
                        <a href="https://dribbble.com/">
                            <span class="link-effect">
                                <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                                <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <a href="contact.html" class="chat-btn gsap-magnetic">Let’s Talk with us</a>
            </div>
        </div>
    </div>
    <!--==============================
    Mobile Menu
    ============================== -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-area">
            <button class="menu-toggle"><i class="fas fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.html"><img src="assets/img/logo.svg" alt="Ovation"></a>
            </div>
            <div class="mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="#">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Digital Agency</a></li>
                            <li><a href="home-2.html">Creative Agency</a></li>
                            <li><a href="home-3.html">Design Studio</a></li>
                            <li><a href="home-4.html">Digital Marketing</a></li>
                            <li><a href="home-5.html">Modern Agency</a></li>
                            <li><a href="home-6.html">Creative Studio</a></li>
                            <li><a href="home-7.html">Startup Agency</a></li>
                            <li><a href="home-8.html">Personal Portfolio</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About Page</a></li>
                            <li class="menu-item-has-children"><a href="service.html">Service Page</a>
                                <ul class="sub-menu">
                                    <li><a href="service.html">Service Version 1</a></li>
                                    <li><a href="service-2.html">Service Version 2</a></li>
                                    <li><a href="service-3.html">Service Version 3</a></li>
                                    <li><a href="service-details.html">Service Details Page</a></li>
                                </ul>
                            </li>
                            <li><a href="service-details.html">Service Details</a></li>
                            <li><a href="team.html">Team Page</a></li>
                            <li><a href="team-details.html">Team Details Page</a></li>
                            <li><a href="pricing.html">Pricing Page</a></li>
                            <li><a href="faq.html">FAQ Page</a></li>
                            <li><a href="error.html">Error Page</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Portfolio</a>
                        <ul class="sub-menu">
                            <li><a href="project.html">Portfolio Masonary</a></li>
                            <li><a href="project-2.html">Portfolio Pinterest</a></li>
                            <li><a href="project-3.html">Portfolio Gallery</a></li>
                            <li><a href="project-4.html">Portfolio Full Width</a></li>
                            <li><a href="project-5.html">Portfolio Slider</a></li>
                            <li><a href="project-6.html">Portfolio Interactive</a></li>
                            <li><a href="project-details.html">Portfolio Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog Standard</a></li>
                            <li><a href="blog-2.html">Blog 2 Column</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="sidebar-wrap">
                <h6>27 Division St, New York,</h6>
                <h6>NY 10002, USA</h6>
            </div>
            <div class="sidebar-wrap">
                <h6><a href="tel:1800123654987">+1 800 123 654 987 </a></h6>
                <h6><a href="mailto:frisk.agency@mail.com">frisk.agency@mail.com</a></h6>
            </div>
            <div class="social-btn style3">
                <a href="https://www.facebook.com/">
                    <span class="link-effect">
                        <span class="effect-1"><i class="fab fa-facebook"></i></span>
                        <span class="effect-1"><i class="fab fa-facebook"></i></span>
                    </span>
                </a>
                <a href="https://instagram.com/">
                    <span class="link-effect">
                        <span class="effect-1"><i class="fab fa-instagram"></i></span>
                        <span class="effect-1"><i class="fab fa-instagram"></i></span>
                    </span>
                </a>
                <a href="https://twitter.com/">
                    <span class="link-effect">
                        <span class="effect-1"><i class="fab fa-twitter"></i></span>
                        <span class="effect-1"><i class="fab fa-twitter"></i></span>
                    </span>
                </a>
                <a href="https://dribbble.com/">
                    <span class="link-effect">
                        <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                        <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <!--==============================
	Header Area
    ==============================-->
    <header class="nav-header header-layout1">
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="index.html"><img src="assets/img/logo.svg" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-auto ms-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li class="active menu-item-has-children">
                                        <a href="#">
                                            <span class="link-effect">
                                                <span class="effect-1">HOME</span>
                                                <span class="effect-1">HOME</span>
                                            </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="active"><a href="index.html">Digital Agency</a></li>
                                            <li><a href="home-2.html">Creative Agency</a></li>
                                            <li><a href="home-3.html">Design Studio</a></li>
                                            <li><a href="home-4.html">Digital Marketing</a></li>
                                            <li><a href="home-5.html">Modern Agency</a></li>
                                            <li><a href="home-6.html">Creative Studio</a></li>
                                            <li><a href="home-7.html">Startup Agency</a></li>
                                            <li><a href="home-8.html">Personal Portfolio</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="link-effect">
                                                <span class="effect-1">PAGES</span>
                                                <span class="effect-1">PAGES</span>
                                            </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="about.html">About Page</a></li>
                                            <li class="menu-item-has-children"><a href="service.html">Service Page</a>
                                                <ul class="sub-menu">
                                                    <li><a href="service.html">Service Version 1</a></li>
                                                    <li><a href="service-2.html">Service Version 2</a></li>
                                                    <li><a href="service-3.html">Service Version 3</a></li>
                                                    <li><a href="service-details.html">Service Details Page</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="team.html">Team Page</a>
                                            </li>
                                            <li><a href="team-details.html">Team Details Page</a></li>
                                            <li><a href="pricing.html">Pricing Page</a></li>
                                            <li><a href="faq.html">FAQ Page</a></li>
                                            <li><a href="error.html">Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="link-effect">
                                                <span class="effect-1">PORTFOLIO</span>
                                                <span class="effect-1">PORTFOLIO</span>
                                            </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="project.html">Portfolio Masonary</a></li>
                                            <li><a href="project-2.html">Portfolio Pinterest</a></li>
                                            <li><a href="project-3.html">Portfolio Gallery</a></li>
                                            <li><a href="project-4.html">Portfolio Full Width</a></li>
                                            <li><a href="project-5.html">Portfolio Slider</a></li>
                                            <li><a href="project-6.html">Portfolio Interactive</a></li>
                                            <li><a href="project-details.html">Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="link-effect">
                                                <span class="effect-1">BLOG</span>
                                                <span class="effect-1">BLOG</span>
                                            </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog Standard</a></li>
                                            <li><a href="blog-2.html">Blog 2 Column</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">
                                            <span class="link-effect">
                                                <span class="effect-1">CONTACT</span>
                                                <span class="effect-1">CONTACT</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="navbar-right d-inline-flex d-lg-none">
                                <button type="button" class="menu-toggle sidebar-btn">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-button">
                                <button type="button" class="search-btn searchBoxToggler"><img src="assets/img/icon/search.svg" alt="icon">
                                    <span class="link-effect">
                                        <span class="effect-1">SEARCH</span>
                                        <span class="effect-1">SEARCH</span>
                                    </span>
                                </button>
                                <button type="button" class="sidebar-btn sideMenuToggler">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--==============================
    Hero Area
    ==============================-->
    <div class="hero-wrapper hero-1" id="hero">
        <div class="container">
            <div class="hero-style1">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="hero-title wow img-custom-anim-left animated" data-wow-duration="1.5s" data-wow-delay="0.1s">Next Generation</h1>

                        <h1 class="hero-title text-lg-end wow img-custom-anim-right animated" data-wow-duration="1.7s" data-wow-delay="0.1s">Digital Agency</h1>
                    </div>
                    <div class="col-lg-6 offset-lg-6">
                        <p class="hero-text wow img-custom-anim-right animated" data-wow-duration="1.5s" data-wow-delay="0.1s">We are digital agency that helps businesses develop immersive and engaging user experiences that drive top level growth</p>
                        <div class="btn-group fade_right">
                            <a href="project.html" class="btn wow img-custom-anim-right animated" >
                                <span class="link-effect">
                                    <span class="effect-1">VIEW OUR WORKS</span>
                                    <span class="effect-1">VIEW OUR WORKS</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="hero-year-tag wow img-custom-anim-left animated">
                    <img src="./assets/img/icon/worldwide.svg" alt="img">
                    <h6>Agency of this year worldwide</h6>
                </div>
            </div>
        </div>
    </div>
    <!--======== / Hero Section ========-->

    <!--==============================
    About Area
    ==============================-->
    <div class="about-area-1 space bg-theme">
        <div class="about-img-1-1 shape-mockup img-custom-anim-left wow animated" data-left="0" data-top="-100px" data-bottom="140px" data-wow-duration="1.5s" data-wow-delay="0.1s">
            <img src="assets/img/normal/about_1-1.jpg" alt="img">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-6">
                    <div class="overflow-hidden">
                        <div class="about-content-wrap ">
                            <div class="title-area mb-0">
                                <h2 class="sec-title">Unlock Revenue Growth for Your Business</h2>
                                <p class="sec-text mt-35">If you ask our clients what it’s like working with 36, they’ll talk about how much we care about their success. For us, real relationships fuel real success. We love building brands</p>
                                <p class="sec-text mt-30">We are a creative agency working with brands building insightful strategy, creating unique designs and crafting value</p>
                                <div class="btn-wrap mt-50">
                                    <a href="about.html" class="link-btn">
                                        <span class="link-effect">
                                            <span class="effect-1">ABOUT US</span>
                                            <span class="effect-1">ABOUT US</span>
                                        </span>
                                        <img src="assets/img/icon/arrow-left-top.svg" alt="icon">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Faq Area
    ==============================-->
    <div class="faq-area-1 space overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="title-area text-center ">
                        <h2 class="sec-title">What We Can Do for Our Clients</h2>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="accordion-area accordion" id="faqAccordion">

                        <div class="accordion-card active">
                            <div class="accordion-header" id="collapse-item-1">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1"> <span class="faq-number">01</span> Branding Design</button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">We design high quality websites that make users come back for more. A good website tells a story that will make users fully immerse themselves operating</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2"><span class="faq-number">02</span> Illustration Modelling</button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">We design high quality websites that make users come back for more. A good website tells a story that will make users fully immerse themselves operating</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3"> <span class="faq-number">03</span> Website Development</button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">We design high quality websites that make users come back for more. A good website tells a story that will make users fully immerse themselves operating</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4"> <span class="faq-number">04</span> Digital Marketing</button>
                            </div>
                            <div id="collapse-4" class="accordion-collapse collapse " aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">We design high quality websites that make users come back for more. A good website tells a story that will make users fully immerse themselves operating</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
        Portfolio Area
    ==============================-->
    <div class="portfolio-area-1 space-bottom overflow-hidden" data-bg-src="assets/img/bg/portfolio-1-bg.png">
        <div class="container">
            <div class="row justify-content-between masonary-active">
                <div class="col-lg-6 filter-item">
                    <div class="portfolio-wrap mt-lg-140">
                        <div class="portfolio-thumb wow img-custom-anim-top animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <a href="project-details.html">
                                <img src="assets/img/portfolio/portfolio1_1.jpg" alt="portfolio">
                            </a>
                        </div>
                        <div class="portfolio-details">
                            <ul class="portfolio-meta">
                                <li><a href="blog.html">Branding</a></li>
                                <li><a href="blog.html">Development</a></li>
                                <li><a href="blog.html">Marketing</a></li>
                            </ul>
                            <h3 class="portfolio-title"><a href="project-details.html">Money Laundering Compliance Scanner</a></h3>
                            <a href="project-details.html" class="link-btn">
                                <span class="link-effect">
                                    <span class="effect-1">VIEW PROJECT</span>
                                    <span class="effect-1">VIEW PROJECT</span>
                                </span>
                                <img src="assets/img/icon/arrow-left-top.svg" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 filter-item">
                    <div class="portfolio-wrap mt-140 mt-lg-0">
                        <div class="portfolio-thumb wow img-custom-anim-left animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <a href="project-details.html">
                                <img src="assets/img/portfolio/portfolio1_2.jpg" alt="portfolio">
                            </a>
                        </div>
                        <div class="portfolio-details">
                            <ul class="portfolio-meta">
                                <li><a href="blog.html">Branding</a></li>
                                <li><a href="blog.html">Development</a></li>
                                <li><a href="blog.html">Marketing</a></li>
                            </ul>
                            <h3 class="portfolio-title"><a href="project-details.html">Decentralized Lending Platform for Students</a></h3>
                            <a href="project-details.html" class="link-btn">
                                <span class="link-effect">
                                    <span class="effect-1">VIEW PROJECT</span>
                                    <span class="effect-1">VIEW PROJECT</span>
                                </span>
                                <img src="assets/img/icon/arrow-left-top.svg" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 filter-item">
                    <div class="portfolio-wrap mt-140">
                        <div class="portfolio-thumb wow img-custom-anim-top animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <a href="project-details.html">
                                <img src="assets/img/portfolio/portfolio1_3.jpg" alt="portfolio">
                            </a>
                        </div>
                        <div class="portfolio-details">
                            <ul class="portfolio-meta">
                                <li><a href="blog.html">Branding</a></li>
                                <li><a href="blog.html">Development</a></li>
                                <li><a href="blog.html">Marketing</a></li>
                            </ul>
                            <h3 class="portfolio-title"><a href="project-details.html">Anti Money Laundering Compliance Scanner</a></h3>
                            <a href="project-details.html" class="link-btn">
                                <span class="link-effect">
                                    <span class="effect-1">VIEW PROJECT</span>
                                    <span class="effect-1">VIEW PROJECT</span>
                                </span>
                                <img src="assets/img/icon/arrow-left-top.svg" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 filter-item">
                    <div class="portfolio-wrap mt-140">
                        <div class="portfolio-thumb wow img-custom-anim-left animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <a href="project-details.html">
                                <img src="assets/img/portfolio/portfolio1_4.jpg" alt="portfolio">
                            </a>
                        </div>
                        <div class="portfolio-details">
                            <ul class="portfolio-meta">
                                <li><a href="blog.html">Branding</a></li>
                                <li><a href="blog.html">Development</a></li>
                                <li><a href="blog.html">Marketing</a></li>
                            </ul>
                            <h3 class="portfolio-title"><a href="project-details.html">Shopify Redesign for a Nova Scotia Winery</a></h3>
                            <a href="project-details.html" class="link-btn">
                                <span class="link-effect">
                                    <span class="effect-1">VIEW PROJECT</span>
                                    <span class="effect-1">VIEW PROJECT</span>
                                </span>
                                <img src="assets/img/icon/arrow-left-top.svg" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-auto filter-item">
                    <div class="btn-wrap mt-140">
                        <a class="circle-btn btn gsap-magnetic mx-lg-5" href="project.html">
                            <span class="link-effect">
                                <span class="effect-1">VIEW ALL</span>
                                <span class="effect-1">VIEW ALL</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Team Area
    ==============================-->
    <div class="team-area-1 space overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title-area text-center">
                        <h2 class="sec-title">Our Team Behind The Studio</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="assets/img/team/team-1-1.png" alt="Team Image">
                        </div>
                        <div class="team-card_content">
                            <h3 class="team-card_title"><a href="team-details.html">Daniyel Karlos</a></h3>
                            <span class="team-card_desig">Web Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="assets/img/team/team-1-2.png" alt="Team Image">
                        </div>
                        <div class="team-card_content">
                            <h3 class="team-card_title"><a href="team-details.html">Daniyel Karlos</a></h3>
                            <span class="team-card_desig">Web Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="assets/img/team/team-1-3.png" alt="Team Image">
                        </div>
                        <div class="team-card_content">
                            <h3 class="team-card_title"><a href="team-details.html">Daniyel Karlos</a></h3>
                            <span class="team-card_desig">Web Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="assets/img/team/team-1-4.png" alt="Team Image">
                        </div>
                        <div class="team-card_content">
                            <h3 class="team-card_title"><a href="team-details.html">Daniyel Karlos</a></h3>
                            <span class="team-card_desig">Web Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Testimonial Area
    ==============================-->
    <div class="testimonial-area-1 space bg-theme">
        <div class="testimonial-img-1-1 shape-mockup wow img-custom-anim-right animated" data-wow-duration="1.5s" data-wow-delay="0.2s" data-right="0" data-top="-100px" data-bottom="140px">
            <img src="assets/img/testimonial/testi_thumb1_1.jpg" alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="title-area ">
                        <h2 class="sec-title">Testimonials</h2>
                    </div>
                    <div class="quote-icon ">
                        <img src="assets/img/icon/quote.svg" alt="icon">
                    </div>
                    <div class="row global-carousel testi-slider1" data-slide-show="1" data-dots="true" data-xl-dots="true" data-ml-dots="true">
                        <div class="col-lg-4">
                            <div class="testi-box ">
                                <p class="testi-box_text">“It’s a pleasure working with Bunker. They understood our new brand positioning guidelines and translated them beautifully and consistently into our on-going marketing comms. The team is responsive, quick and always willing help winning partnership”</p>
                                <div class="testi-box_profile">
                                    <h4 class="testi-box_name">Daniyel Karlos</h4>
                                    <span class="testi-box_desig">Senior Director of Marketing</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="testi-box ">
                                <p class="testi-box_text">“It’s a pleasure working with Bunker. They understood our new brand positioning guidelines and translated them beautifully and consistently into our on-going marketing comms. The team is responsive, quick and always willing help winning partnership”</p>
                                <div class="testi-box_profile">
                                    <h4 class="testi-box_name">Daniyel Karlos</h4>
                                    <span class="testi-box_desig">Senior Director of Marketing</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="testi-box ">
                                <p class="testi-box_text">“It’s a pleasure working with Bunker. They understood our new brand positioning guidelines and translated them beautifully and consistently into our on-going marketing comms. The team is responsive, quick and always willing help winning partnership”</p>
                                <div class="testi-box_profile">
                                    <h4 class="testi-box_name">Daniyel Karlos</h4>
                                    <span class="testi-box_desig">Senior Director of Marketing</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
    Blog Area
    ==============================-->
    <section class="blog-area space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-7 col-xl-6 col-lg-8">
                    <div class="title-area text-center">
                        <h2 class="sec-title">Read Our Articles and News</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-40 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/blog_1_1.png" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="post-meta-item blog-meta">
                                <a href="blog.html">March 26, 2024</a>
                                <a href="blog.html">Branding</a>
                            </div>
                            <h4 class="blog-title"><a href="blog-details.html">Everything You Should Know About Return</a></h4>
                            <a href="blog-details.html" class="link-btn">
                                <span class="link-effect">
                                    <span class="effect-1">READ MORE</span>
                                    <span class="effect-1">READ MORE</span>
                                </span>
                                <img src="assets/img/icon/arrow-left-top.svg" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/blog_1_2.png" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="post-meta-item blog-meta">
                                <a href="blog.html">March 26, 2024</a>
                                <a href="blog.html">Branding</a>
                            </div>
                            <h4 class="blog-title"><a href="blog-details.html">6 Big Commerce Design Tips For Big Results</a></h4>
                            <a href="blog-details.html" class="link-btn">
                                <span class="link-effect">
                                    <span class="effect-1">READ MORE</span>
                                    <span class="effect-1">READ MORE</span>
                                </span>
                                <img src="assets/img/icon/arrow-left-top.svg" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/blog_1_3.png" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="post-meta-item blog-meta">
                                <a href="blog.html">March 26, 2024</a>
                                <a href="blog.html">Branding</a>
                            </div>
                            <h4 class="blog-title"><a href="blog-details.html">Four Steps to Conduct a Successful Usability</a></h4>
                            <a href="blog-details.html" class="link-btn">
                                <span class="link-effect">
                                    <span class="effect-1">READ MORE</span>
                                    <span class="effect-1">READ MORE</span>
                                </span>
                                <img src="assets/img/icon/arrow-left-top.svg" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
        Footer Area
    ==============================-->
    <footer class="footer-wrapper footer-layout1 overflow-hidden bg-smoke">
        <div class="container">
            <div class="footer-top space">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <h2 class="footer-top-title">
                            Let’s Work Together
                        </h2>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-top-wrap">
                            <p class="mb-30">We are digital agency that helps businesses develop immersive and engaging user experiences</p>
                            <a href="contact.html" class="btn">
                                <span class="link-effect">
                                    <span class="effect-1">LET'S TALK WITH US</span>
                                    <span class="effect-1">LET'S TALK WITH US</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-menu-area">
                <div class="row gy-3 justify-content-between">
                    <div class="col-xxl-6 col-lg-7">
                        <ul class="footer-menu-list">
                            <li>
                                <a href="about.html">
                                    <span class="link-effect">
                                        <span class="effect-1">ABOUT COMPANY</span>
                                        <span class="effect-1">ABOUT COMPANY</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="project.html">
                                    <span class="link-effect">
                                        <span class="effect-1">OUR CAREERS</span>
                                        <span class="effect-1">OUR CAREERS</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="service.html">
                                    <span class="link-effect">
                                        <span class="effect-1">SERVICES</span>
                                        <span class="effect-1">SERVICES</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    <span class="link-effect">
                                        <span class="effect-1">CONTACT</span>
                                        <span class="effect-1">CONTACT</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xxl-6 col-lg-5 text-lg-end">
                        <ul class="footer-menu-list">
                            <li>
                                <a href="about.html">
                                    <span class="link-effect">
                                        <span class="effect-1">PRIVACY POLICY</span>
                                        <span class="effect-1">PRIVACY POLICY</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="project.html">
                                    <span class="link-effect">
                                        <span class="effect-1">TERMS & CONDITIONS</span>
                                        <span class="effect-1">TERMS & CONDITIONS</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row gy-3 justify-content-between align-items-center">
                    <div class="col-md-6">
                        <div class="social-btn style3">
                            <a href="https://www.facebook.com/">
                                <span class="link-effect">
                                    <span class="effect-1"><i class="fab fa-facebook"></i></span>
                                    <span class="effect-1"><i class="fab fa-facebook"></i></span>
                                </span>
                            </a>
                            <a href="https://instagram.com/">
                                <span class="link-effect">
                                    <span class="effect-1"><i class="fab fa-instagram"></i></span>
                                    <span class="effect-1"><i class="fab fa-instagram"></i></span>
                                </span>
                            </a>
                            <a href="https://twitter.com/">
                                <span class="link-effect">
                                    <span class="effect-1"><i class="fab fa-twitter"></i></span>
                                    <span class="effect-1"><i class="fab fa-twitter"></i></span>
                                </span>
                            </a>
                            <a href="https://dribbble.com/">
                                <span class="link-effect">
                                    <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                                    <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 align-self-center text-lg-end">
                        <p class="copyright-text">Copyright © 2024
                            <a href="https://themeforest.net/user/themegenix">ThemeGenix</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--********************************
			Code End  Here
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>


    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollSmoother.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/SplitText.min.js"></script>
    <script src="assets/js/twinmax.js"></script>
    <script src="assets/js/imageRevealHover.js"></script>
    <script src="assets/js/jarallax.min.js"></script>
    <script src="assets/js/jquery.marquee.min.js"></script>
    <script src="assets/js/waypoints.js"></script>
    <script src="assets/js/wow.js"></script>

    <!-- Main Js File -->
    <script src="assets/js/main.js"></script>
</body>

</html>