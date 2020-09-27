<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<head>
   <title>Report</title>
   <link rel = "icon" href =  
   "https://www.iconfinder.com/data/icons/logos-and-brands/512/347_Uber_logo-512.png" 
        type = "image/x-icon"> 
        
</head>

<body>
<img src="https://www.oneskyapp.com/wp-content/uploads/2016/07/uber-global-expansion-cover.png" class="img-fluid rounded mx-auto d-block" alt="Responsive image">

<form action="complaintsubmit.php?" method="post">
<div class="container">
<p style="font-size:30px;"> &#9733 Have you recently faced any complications while riding Uber? <br> &#9733 You can file a complaint against your driver here our authority will take a look at it. Your safety is out priority.</p>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Drivers Phone Number or </label>
      <input type="text" class="form-control" id="inputEmail4" name="PHONE_NO" placeholder="Enter the Drivers phone number">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Car License Plate</label>
      <input type="text" class="form-control" id="inputPassword4" name="CAR_NO" placeholder="Enter the Cars plate number">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Your Name</label>
    <input type="text" class="form-control" id="inputAddress" name="CUST_NAME" placeholder="Enter your name (optional)">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Your Phone Number </label>
    <input type="text" class="form-control" id="inputAddress2" name="CUST_PHONE_NO" placeholder="Enter your phone number (optional)">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Describe your issue here</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="TEXT" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit Report</button> <a href="multiplelogin.php"  class="btn btn-danger">Return</a>
  </div>
</form>

   </body>