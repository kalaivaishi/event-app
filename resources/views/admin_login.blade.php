<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{'assets/css/bootstrap.min.css'}}">

</head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
    <body>
      <div class="card">
        <div class="alert alert-primary" role="alert">
            Admin Login
          </div>
        <form action="{{url('admin_dashboard')}}">

          @csrf
            <div class="form-group">
              <label for="exampleInputEmail1" style="padding-right: 150px;">Email address<span style="color:#ff0000">*</span></label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" style="padding-right: 180px;">Password<span style="color:#ff0000">*</span></label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        
    </div>

       <!-- Bootstrap Core JS -->
   <script src="{{'assets/js/bootstrap.bundle.min.js'}}"></script>

    </body>
</html>