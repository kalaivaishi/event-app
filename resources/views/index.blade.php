<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Slot</title> 
    <!-- Fontawesome CSS --> 
	<link rel="stylesheet" href="{{'assets/plugins/fontawesome/css/fontawesome.min.css'}}">
	<link rel="stylesheet" href="{{'assets/plugins/fontawesome/css/all.min.css'}}">
    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="{{'assets/css/feather.css'}}">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="{{'assets/css/bootstrap.min.css'}}">
  
       <!-- Main CSS -->
       <link rel="stylesheet" href="{{'assets/css/style.css'}}">

       <!-- Fontawesome -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <style>
        body {
  font-family: "Roboto", sans-serif;
  background-color: #fff;
  line-height: 1.9;
  color: #4b4949;
  position: relative; }
  body:before {
    z-index: -1;
    position: absolute;
    height: 50vh;
    content: "";
    top: 0;
    left: 0;
    right: 0;
    background: #8bbabb; }

h1, h2, h3, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: "Roboto", sans-serif;
  color: #000; }

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }
  a, a:hover {
    text-decoration: none !important; }

.text-black {
  color: #000; }

.content {
  padding: 7rem 0; }

.heading {
  font-size: 2.5rem;
  font-weight: 900; }

.form-control {
  border: none;
  border-bottom: 1px solid #ccc;
  padding-left: 0;
  padding-right: 0;
  border-radius: 0;
  background: none; }
  .form-control:active, .form-control:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-color: #000; }

.col-form-label {
  color: #000;
  font-size: 13px; }

.btn, .form-control, .custom-select {
  height: 45px; }

.custom-select:active, .custom-select:focus {
  outline: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  border-color: #000; }

.btn {
  border: none;
  border-radius: 0;
  font-size: 12px;
  letter-spacing: .2rem;
  text-transform: uppercase; }
  .btn.btn-primary {
    background: #35477d;
    color: #fff;
    padding: 15px 20px; }
  .btn:hover {
    color: #fff; }
  .btn:active, .btn:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none; }

.contact-wrap {
  -webkit-box-shadow: 0 0px 20px 0 rgba(0, 0, 0, 0.2);
  box-shadow: 0 0px 20px 0 rgba(0, 0, 0, 0.2); }
  .contact-wrap .col-form-label {
    font-size: 14px;
    color: #b3b3b3;
    margin: 0 0 10px 0;
    display: inline-block;
    padding: 0; }
  .contact-wrap .form, .contact-wrap .contact-info {
    padding: 40px; }
  .contact-wrap .contact-info {
    color: rgb(225, 220, 220); }
    .contact-wrap .contact-info ul li {
      margin-bottom: 15px;
      color: white; }
      .contact-wrap .contact-info ul li .wrap-icon {
        font-size: 20px;
        color: #fff;
        margin-top: 5px; }
  .contact-wrap .form {
    background: #fff; }
    .contact-wrap .form h3 {
      color: #35477d;
      font-size: 20px;
      margin-bottom: 30px; }
  .contact-wrap .contact-info {
    background: #35477d; }
    .contact-wrap .contact-info h3 {
      color: #fff;
      font-size: 20px;
      margin-bottom: 30px; }

label.error {
  font-size: 12px;
  color: red; }

#message {
  resize: vertical; }

#form-message-warning, #form-message-success {
  display: none; }

#form-message-warning {
  color: #B90B0B; }

#form-message-success {
  color: #55A44E;
  font-size: 18px;
  font-weight: bold; }

.submitting {
  float: left;
  width: 100%;
  padding: 10px 0;
  display: none;
  font-weight: bold;
  font-size: 12px;
  color: #000; }

       </style>

<body>
  <div class="content">
    
    <div class="container">
      <!-- <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-8">
          <div class="form h-100">
            <h3>Create Account</h3>
            <form class="mb-5" method="post" id="contactForm" name="contactForm">
              <div class="row">
                <div class="col-md-12 form-group mb-5">
                    <div class="col-md-6 form-group mb-5">
                        <label for="" class="col-form-label">Email *</label>
                        <input type="text" class="form-control" name="email" id="email"  placeholder="Your email" required>
                      </div>
                  <div class="col-md-6 form-group mb-5">
                    <label for="" class="col-form-label">Password *</label>
                    <input type="text" class="form-control" name="password" id="password" placeholder="Enter Password" required>
                  </div>
                 
                </div>
                </div>
              
             
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="submit" value="Let Me In.." class="btn btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
              </div>
            </form>
            <h3>New To Here!&nbsp;&nbsp;<a href="signin.html">Sign Up</a></h3>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-info h-100">
            <div class="card">
            <img src="assets/img/invi.gif">
        </div>
          </div>
        </div>
      </div> -->
      
      <div class="card col-md-6" style="padding-left:20px"><br>
        <div class="alert alert-info" role="alert">
            Login
          </div>
        <form class="mb-5" method="post" id="contactForm" name="contactForm" action="process_login">
          @csrf
            <div class="row">
              <div class="col-md-12 form-group mb-5">
                  <div class="col-md-12 form-group mb-5">
                      <label for="" class="col-form-label">Email <span style="color:#ff0000">*</span></label>
                      <input type="text" class="form-control" name="email" id="email"  placeholder="Your email" required>
                    </div>
                <div class="col-md-12 form-group mb-5">
                  <label for="" class="col-form-label">Password <span style="color:#ff0000">*</span></label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required>
                </div>
                <a href="forget_password.htmkl" style="float: right;">Forget Password..!</a>
              
              </div>
              </div>
            
            <div class="row">
              <div class="col-md-12 form-group">
                <input type="submit" value="Let Me In.." class="btn btn-primary rounded-0 py-2 px-4">
                <span class="submitting"></span>
              </div>
            </div>
          </form>
          <h3>New To Here!&nbsp;&nbsp;<a href="{{url('signin')}}">Sign Up</a></h3>
        </div>
      </div>
     
    </div>
     
    
    
   <!-- jQuery -->
   <script src="{{'assets/js/jquery-3.6.0.min.js'}}"></script>

   <!-- Bootstrap Core JS -->
   <script src="{{'assets/js/bootstrap.bundle.min.js'}}"></script>

   
   <!-- Slimscroll JS -->
   <script src="{{'assets/js/jquery.slimscroll.js'}}"></script>
   
   <!-- Select2 JS -->
   <script src="{{'assets/js/select2.min.js'}}"></script>

   <!-- Datetimepicker JS -->
   <script src="{{'assets/js/moment.min.js'}}"></script>
   <script src="{{'assets/plugins/datetimepicker/js/tempusdominus-bootstrap-4.min.js'}}"></script>

   <!-- Chart JS -->
   <script src="{{'assets/js/apexcharts.min.js'}}"></script>

   <!-- Custom JS -->
   <script src="{{'assets/js/app.js'}}"></script>

</html> 
</body>