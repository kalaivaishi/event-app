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
      <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-8">
          <div class="form h-100">
            <a href="{{url('process_login')}}"><button type="button" class="btn btn-primary" style="float: right;">Back</button></a><br>
            <h3>Please Provide Your Details</h3>
            <form class="mb-5" id="contactForm" name="contactForm" action="{{url('book_seat')}}" method="post">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Seats Selected </label>
                  <input type="text" class="form-control" name="seats" id="seats" value="T3(A1)">
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Total Members </label>
                  <input type="text" class="form-control" name="member" id="member" value="1">
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Name *</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Your name" required>
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Email *</label>
                  <input type="text" class="form-control" name="email" id="email"  placeholder="Your email" required>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Phone*</label>
                  <input type="text" class="form-control" name="phone" id="phone"  placeholder="Phone #" required>
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Id Proof Number *</label>
                  <input type="text" class="form-control" name="proof" id="proof"  placeholder="eg:Passport no (or) Any Govt Proof" required>
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Your Organisation Name</label>
                  <input type="text" class="form-control" name="company" id="company"  placeholder="Company  name">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group mb-5">
                  <label for="message" class="col-form-label">Message </label>
                  <textarea class="form-control" name="message" id="message" cols="30" rows="4"  placeholder="Write your message"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                 <a href="{{('razorpay-payment')}}"><input type="submit" value="Proceed For Payment" class="btn btn-primary rounded-0 py-2 px-4"></a>
                  <span class="submitting"></span>
                </div>
              </div>
            </form>

            <div id="form-message-warning mt-4"></div> 
            <div id="form-message-success">
              Your message was sent, thank you!
            </div>

          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-info h-100">
            <h3>Contact Information</h3>
            <h4 class="mb-5">If Your Facing any Issue while Payment You can Contact any of the Details Provided Below..! </h4>
            <ul class="list-unstyled">
              <li class="d-flex">
                <span class="wrap-icon icon-room mr-3"></span>
                <span class="text">47b Sky Building Narobi </span>
              </li>
              <li class="d-flex">
                <span class="wrap-icon icon-phone mr-3"></span>
                <h4><i class="fas fa-phone fa-rotate-90"  aria-hidden="true" style="color:#ddd9d9"></i> &nbsp; (291) 939 9321</h4>
              </li>
              <span class="text">Click Number To Chat </span><br>

              <li class="d-flex">
                
                <span class="wrap-icon icon-envelope mr-3"></span>

                <h4> <a href="https://api.whatsapp.com/send?phone=+254729364763&text=Having Issues To Book The Slots,Can you help me out with it..!" class="whatsapp" style="color: white;"><i class="fa fa-whatsapp" style="font-size:24px"></i>&nbsp; +254729364763</a></h4>
              </li>
              <li class="d-flex">
                <span class="wrap-icon icon-envelope mr-3"></span>
                <h4><a href="https://bharathbrands.in/" style="color: white;" ><i class="fa fa-globe" aria-hidden="true"></i>&nbsp; bharathbrands.in</a></h4>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
    

    <script type="text/javascript">
    if(window.history.replaceState){
        window.history.replaceState(null,null, window.location.href);
    }
</script>
    
   <!-- jQuery -->
   <script src="{{'assets/js/jquery-3.6.0.min.js'}}"></script>

   <!-- Bootstrap Core JS -->
   <script src="{{'assets/js/bootstrap.bundle.min.js'}}'}}"></script>

   
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