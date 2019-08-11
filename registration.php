<?php
$show = false;
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Itim|Orbitron&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.1/animate.min.css">
  <link href="https://fonts.googleapis.com/css?family=Itim|Roboto|Spectral&display=swap" rel="stylesheet">
  <link type="text/css" href="icons/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/css/mdb.min.css" rel="stylesheet">
  <link type="text/css" href="icons/rondo/style.css" rel="stylesheet">
  <link type="text/css" href="css/theme.css" rel="stylesheet">
  <link rel="stylesheet" href="./owl/owl.carousel.min.css">
  <link rel="stylesheet" href="./owl/owl.theme.default.min.css">
    <title>Registration</title>
</head>
<body class="all">
<img src="./Content/images/banner5.jpg" width="100%" height="130px" />
<div id="sticky">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar ">
      <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapsible content -->
      <div class="navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav" style="margin-left: 5%;">
          <li class="nav-brand  active"><a href="http://localhost/RCHI" style="color:white;font-weight:bold;font-size:17px;" onclick="window.location.href = 'http://localhost/RCHI';" class="nav-link text-white">
            Recent Trends and Challenges in Healthcare Informatics
          </a>
            </li>
          

        </ul>

      </div>
      <!-- Collapsible content -->

    </nav>
  </div>
  <div class="container mt-3">
  <form method="post" action="https://kongu.000webhostapp.com/demo.php" >
    <?php

      if($show)
      {
        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> Data Stored Successfully
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
        <?php
      }

    ?>
  <div class="row">
    <div class="form-group col-md-6">
        <label style="color:black;font-weight:400;">Name of the Author</label>
        <input type="text" class="form-control" id="" name="author_name"  placeholder="Enter Name" required>
        
    </div>
    <div class="form-group col-md-6" style="margin-top:-9px;">
        <label style="color:black;font-weight:400;">Designation</label>
        <select class="form-control" required name="Designation">
            <option disabled selected value="">Select Designation</option>
            <option value="STUDENT">Student</option>
            <option value="FACULTY">Faculty</option>
            <option value="SCHOLER">Research Scholer</option>
            <option value="INDUSTRIAL_PERSON">Industrial Person</option>
        </select>    
    </div>
    <div class="form-group  col-md-6">
    <label style="color:black;font-weight:400;">Department</label>
    <input type="text" class="form-control" id="" name="department"  placeholder="Enter Your Department Name" required>
    
  </div>
  <div class="form-group  col-md-6">
    <label style="color:black;font-weight:400;">Name of the Organization</label>
    <input type="text" class="form-control" id="" name="organization"  placeholder="Enter Name of the Organization" required>
    
  </div>
  <div class="form-group  col-md-6">
    <label style="color:black;font-weight:400;">Email Address</label>
    <input type="email" class="form-control" id="" name="email"  placeholder="Enter contact Mail" required>
    
  </div>
  <div class="form-group  col-md-6">
    <label style="color:black;font-weight:400;">Title of the Paper</label>
    <input type="text" class="form-control" id="" name="title"  placeholder="Enter Title of the Paper" required>
    
  </div>
  <div class="form-group  col-md-6">
    <label style="color:black;font-weight:400;">Specilization</label>
    <input type="text" class="form-control" id="" name="specilization"  placeholder="Enter Field of Specilization" required>
    
  </div>
  <div class="form-group  col-md-6">
    <label style="color:black;font-weight:400;">Number of Authors</label>
    <input type="number" class="form-control" id="" name="noofauthors" required>
    
  </div>
  <div class="form-group col-md-6" style="margin-top:-9px;">
        <label style="color:black;font-weight:400;">Mode of Presentation</label>
        <select class="form-control" required name="presentationMode" >
            <option disabled selected value="" >Select</option>
            <option value="online">Online</option>
            <option value="onsite">Onsite</option>
            
        </select>    
    </div>
  <div class="form-group  col-md-6">
    <label style="color:black;font-weight:400;">Permenent Address</label>
    <textarea class="form-control"  rows="4" name="address" placeholder="Enter Address"></textarea>
    
  </div>
  <div class="form-group  col-md-6">
    <label style="color:black;font-weight:400;">City</label>
    <input type="text" class="form-control" id="" name="city"  placeholder="" required>
    
  </div>
  <div class="form-group  col-md-6">
    <label style="color:black;font-weight:400;">State</label>
    <input type="text" class="form-control" id="" name="state"  placeholder="" required>
    
  </div>
  <div class="form-group col-md-6">
    <label style="color:black;font-weight:400;">Country</label>
    <input type="text" class="form-control" id="" name="country"  placeholder="" required>
    
  </div>
  <div class="col-md-12">
    <div class="d-flex justify-content-center">
        <input type="submit" value="Register" name="register" class="btn btn-success"/>
           
           <script>
                function click()
                {
                  alert('thank you register');
                }
           </script>

    </div>
  </div>
</div>
  
  
</form>  
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="./scripts/jquery-1.10.2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>
    <script src="scripts/jquery.smooth-scroll.min.js"></script>
    <script src="scripts/mixitup/jquery.mixitup.min.js"></script>
    <script src="scripts/theme.js"></script>
    <script type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/js/mdb.min.js"></script>
    <script src="./owl/owl.carousel.min.js"></script>
</body>
</html>