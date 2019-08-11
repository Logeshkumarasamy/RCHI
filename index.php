<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RCHI-2019</title>
  <!-- Stylesheets -->
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
</head>
<body class="all">
  <img src="./Content/images/banner5.jpg" width="100%" height="130px" />
  <div id="sticky-anchor"></div>
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
        <ul class="navbar-nav" style="margin-left: 20%;">
          <li class="nav-item  active"><a href="#jump0" class="nav-link text-white">Home</a></li>
          <li class="nav-item space-item"><a href="#jump1" class="nav-link text-white">About</a></li>
          <li class="nav-item space-item"><a href="#jump2" class="nav-link text-white">Call for Paper</a></li>
          <li class="nav-item space-item"><a href="#jump3" class="nav-link text-white">Schedule</a></li>
          <li class="nav-item space-item"><a href="#jump4" class="nav-link text-white">Committee</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white space-item" id="navbarDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Workshops
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item nav-dropdown-item" data-toggle="modal" data-target="#iotModal">IOT</a>
              <a class="dropdown-item nav-dropdown-item" data-toggle="modal" data-target="#miModal">Image Processing</a>
              <a class="dropdown-item nav-dropdown-item" href="#">Machine Learning</a>

            </div>
          </li>
          <li class="nav-item space-item"><a href="#jump6" class="nav-link text-white">Speaker</a></li>
          <li class="nav-item space-item"><a href="#jump10" class="nav-link text-white">Publications</a></li>
          <li class="nav-item space-item"><a href="#jump8" class="nav-link text-white">Registration Details</a></li>
          <li class="nav-item space-item"><a href="#jump9" class="nav-link text-white">Contact Us</a></li>

        </ul>

      </div>
      <!-- Collapsible content -->

    </nav>
  </div>
  <!--/.Navbar-->

  <!--Carousel Wrapper-->
  <div class="jumper" id="jump0"></div>
  <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <!--Mask-->
        <div class="view">
          <!--Video source-->
          <video muted autoplay loop playsinline>
            <source src="https://mdbootstrap.com/img/video/Lines.mp4" type="video/mp4" />
          </video>
          <!-- Carousel content -->
          <div class="full-bg-img flex-center mask rgba-indigo-light white-text">
            <ul class="animated fadeInUp col-md-12 list-unstyled list-inline mask-content">
              <li style="margin-top: -50px;">
                <h2 style="color: whitesmoke"><span style="font-family: 'Itim', cursive;font-size: 40px;">AICTE</span>
                  SPONSORED</h2>
                <h2 class="text-white">International Conference
                  on</h2>
                <h2 class="font-weight-bold text-white title-main">Recent Trends and Challenges
                  in Healthcare Informatics</h2>
              </li>
              <li style="margin-top: -40px;">
                <p class="font-weight-bold text-uppercase py-4 title-main">(RCHI-2019)</p>
              </li>

              <li class="list-inline-item">
                <p class="font-weight-bold text-uppercase py-4 title-main"
                  style="font-size: 30px;margin-top: -30px;color: yellow;">12.12.2019 & 13.12.2019</p>
              </li>
              <li>
                <p class="font-weight-bold" id="timer"
                  style="font-size:30px;font-family: 'Courier New', Courier, monospace"></p>
              </li>
              <li>
                <a href="./Content/images/AICTE_RCHI_Brochure.pdf" target="_blank"><button
                    class="btn btn-outline-success rounded">Download Brochure</button></a>
              </li>
            </ul>
          </div>
        </div>
        <!--/Mask-->
      </div>
      <!--/First slide-->

      <!--Second slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->

  <div class="container-fluid">
    <div id="jump1" class="jumper"></div>
    <!-- Services -->
    <div class="section type-2">
      <div class="container" data-animation="fadeInUp">
        <div class="section-headlines">
          <h4>About College</h4>
          <div>
            <p style="font-style: 16px;"><i><q>To be a centre of excellence for development and dissemination of
                  knowledge
                  in
                  Applied science, Technology, Engineering and Management for the Nation and beyond</i></q></p>
          </div>
        </div>
        <div class="row revealOnScroll" data-animation="fadeInUp" data-timeout="1000">

          <div class="col-md-12 ">

            <p class="content-about">

              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kongu Engineering College (KEC)
              was established in 1984, approved by AICTE, New Delhi, accredited by NAAC for 5 years with the grade of
              “A” and an autonomous institution affiliated to Anna University Chennai, has completed 35 years of
              dedicated and excellent service in the field of technical education. The college offers 14 UG, 19 PG and
              16 research programmes in Engineering, Applied Sciences and Management imparting high quality value-added
              education in India. The college has got NBA accreditation for UG programmes, Best Engineering College
              award, and Best Principal award twice. The institution is ranked high among the Engineering Institutions
              in India by various surveys conducted by reputed magazines/ journals/ organization. In the survey
              conducted by MHRD in the name National Institution Ranking Frame work (NIRF), the institution has bagged
              99th rank among all in India including premier institutions like IITs, NITs etc. Kongu Engineering College
              has been awarded as the Most Clean Campus for the Year 2017 by AICTE. The institution has established a
              Technology Business Incubator supported by Department of Science and Technology, Government of India in
              its campus.</p>
          </div>
        </div>
        <div class="section-headlines" style="margin-top: 50px;">
          <h4 style="margin-bottom: 0px;">About Department</h4>

        </div>

        <div class="row revealOnScroll" data-animation="fadeInUp" data-timeout="1000">
          <div class="col-md-12">
            <p class="content-about" style="text-align: justify;">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Department of Computer Applications occupies a prominent place in the records of its academic history. The department is producing efficient professionals and research scholars with outstanding academic and overall performance. The department has experienced faculty members including doctorates with different specializations in computer science & its application. The department is recognized to offer research programme leading to Ph.D. </p>
          </div>
        </div>
        <div class="section-headlines" style="margin-top: 50px;">
          <h4 style="margin-bottom: 0px;">About Conference</h4>

        </div>

        <div class="row revealOnScroll" data-animation="fadeInUp" data-timeout="1000">
          <div class="col-md-12">
            <p class="content-about" style="text-align: justify;">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The conference focuses on health
              informatics and related social and ethical implications. The RCHI-2019 aims to bring together outstanding
              scholars, researchers, Industry persons and students to exchange and share their experiences and research
              results about all aspects of Healthcare Informatics in the fields like Cloud Computing, Medical IoT, Data
              Analytics, Image Processing, Assistive Technology etc. We also provides the keynote address and several
              plenary invited speeches to discuss the most recent innovations, trends, and concerns, practical
              challenges encountered and the various solutions in this fields. </p>
          </div>
        </div>
        <br>
        <br>
        <br>



      </div>
    </div>

    <div id="jump2" class="jumper revealOnScroll" data-animation="fadeInUp"></div>
    <!-- Call For Papers -->
    <div class="section type-1" style="padding-bottom: 0">
      <div class="container-fluid">
        <div class="section-headlines">
          <h4>Call For Papers</h4>
        </div>

      </div>

      <div id="topic-content">
        <div class="row paper-content-title">
          <p class="col-md-6 tick revealOnScroll" data-animation="fadeInLeft" data-timeout="500">Artificial
            Intelligence,
            Machine learning & Deep learning</p>
          <p class="col-md-6 tick revealOnScroll" data-animation="fadeInRight" data-timeout="700">Assistive
            Technologies,
            Home Monitoring</p>
        </div>
        <div class="row paper-content-title">
          <p class="col-md-6 tick revealOnScroll" data-animation="fadeInLeft" data-timeout="500">Artificial
            Intelligence,
            Machine learning & Deep learning </p>
          <p class="col-md-6 tick revealOnScroll" data-animation="fadeInRight" data-timeout="700">Assistive
            Technologies,
            Home Monitoring</p>
        </div>
        <div class="row paper-content-title">
          <p class="col-md-6 tick revealOnScroll" data-animation="fadeInLeft" data-timeout="500">Biomedical Data Mining
            </td>
            <p class="col-md-6 tick revealOnScroll" data-animation="fadeInRight" data-timeout="700">Biomedical
              Instrumentation and Electrical Stimulation</p>
        </div>
        <div class="row paper-content-title">
          <p class="col-md-6 tick revealOnScroll" data-animation="fadeInLeft" data-timeout="500">Biomedical Signal
            Processing</p>
          <p class="col-md-6 tick revealOnScroll" data-animation="fadeInRight" data-timeout="700">Block chain and
            Emerging
            Technology</p>
        </div>
        <div class="row paper-content-title">
          <p class="col-md-6 tick revealOnScroll" data-animation="fadeInLeft" data-timeout="500">Cloud computing and
            Bigdata for Healthcare</p>
          <p class="col-md-6 tick revealOnScroll" data-animation="fadeInRight" data-timeout="700">Computer Aided
            Detection
            and Diagnosis</p>
        </div>
        <div class="row paper-content-title">
          <p class="col-md-6 tick revealOnScroll" data-animation="fadeInLeft" data-timeout="500">Diagnostic Devices</p>
          <p class="col-md-6 tick revealOnScroll" data-animation="fadeInRight" data-timeout="700">Edge and Fog Computing
            for Medical System and Applications</p>
        </div>
        <div class="row paper-content-title">
          <p class="col-md-6 tick revealOnScroll" data-animation="fadeInLeft" data-timeout="500">eHealth Applications
          </p>
          <p class="col-md-6 tick revealOnScroll" data-animation="fadeInRight" data-timeout="700">Health Monitoring
            Devices </p>
        </div>
        <div class="row paper-content-title">
          <p class="col-md-6 tick revealOnScroll" data-animation="fadeInLeft" data-timeout="500">Healthcare
            Communication
            Networks</p>
          <p class="col-md-6 tick revealOnScroll" data-animation="fadeInRight" data-timeout="700">ICT, Ageing and
            Disability</p>
        </div>
        <div class="row paper-content-title">
          <p class="col-md-6 tick revealOnScroll" data-animation="fadeInLeft" data-timeout="500">Imaging and
            Visualization
            Devices</p>
          <p class="col-md-6 tick revealOnScroll" data-animation="fadeInRight" data-timeout="700">Intelligent and
            Information Systems</p>
        </div>
        <div class="row paper-content-title">
          <p class="col-md-6 tick revealOnScroll" data-animation="fadeInLeft" data-timeout="500">IoT and Smart Sensor
            Networking</p>
          <p class="col-md-6 tick revealOnScroll" data-animation="fadeInRight" data-timeout="700">Knowledge Discovery &
            Decision Support System in Health Informatics</p>
        </div>
        <div class="row paper-content-title">
          <p class="col-md-6 tick revealOnScroll" data-animation="fadeInLeft" data-timeout="500">Medical Image Data
            Mining
          </p>
          <p class="col-md-6 tick revealOnScroll" data-animation="fadeInRight" data-timeout="700">Mobile Health & Sensor
            Applications</td>
        </div>
        <div class="row paper-content-title">
          <p class="col-md-6 tick revealOnScroll" data-animation="fadeInLeft" data-timeout="500">Modeling, Simulation,
            and
            Optimization of Biological Systems</p>
          <p class="col-md-6 tick revealOnScroll" data-animation="fadeInRight" data-timeout="700">Patient portal </p>
        </div>
        <div class="row paper-content-title">
          <p class="col-md-6 tick revealOnScroll" data-animation="fadeInLeft" data-timeout="500">Privacy and Security in
            Healthcare Data</p>
          <p class="col-md-6 tick revealOnScroll" data-animation="fadeInRight" data-timeout="700">Virtual Reality and
            Human-Computer Interaction</p>
        </div>
        <div class="row paper-content-title">
          <p class="col-md-6 tick revealOnScroll" data-animation="fadeInLeft" data-timeout="500">Wearable Healthcare
            Devices</p>
          <p class="col-md-6 tick revealOnScroll blink text-warning" data-animation="fadeInLeft" data-timeout="500">
            Topics Not Limited
          </p>
        </div>


      </div>


    </div>
    <div id="jump8" class="jumper"></div>
    <div class="container-fluid">

      <div class="row">

        <div class="col-md-6  revealOnScroll" data-animation="fadeInUp" data-timeout="700">
          <div class="section-headlines">
            <h3 class="heading-half">Important Dates</h3>
          </div>
          <div style="margin-top: -60px;margin-bottom: 20px;">
            <i class="fas fa-calendar-week d-flex justify-content-center fa-6x"></i>
          </div>
          <div>
            <table class="table table-hover dates">
              <tbody>
                <tr>
                  <td> Last date for submission of full paper </td>
                  <td><span class="badge badge-pill badge-info"
                      style="margin-left: 10%;font-size: 14px;">05.09.2019</span></td>
                </tr>
                <tr>
                  <td> Confirmation of acceptance </td>
                  <td><span class="badge badge-pill badge-info" style="margin-left: 10%;font-size: 14px;">
                      03.10.2019</span></td>
                </tr>
                </tr>
                <tr>
                  <td> Final submission of accepted paper </td>
                  <td><span class="badge badge-pill badge-info" style="margin-left: 10%;font-size: 14px;">
                      17.10.2019</span></td>
                </tr>
                </tr>
                <tr>
                  <td> Last date for registration </td>
                  <td><span class="badge badge-pill badge-info" style="margin-left: 10%;font-size: 14px;">
                      31.10.2019</span></td>
                </tr>
                </tr>
                <tr>
                </tr>
                </tr>
              </tbody>
            </table>
          </div>
          <div style="padding-bottom: 50px;" class="d-flex justify-content-center mt-3">
            <button class="btn-out success-out " data-toggle="modal" data-target="#guidelines-model">Click For
              Submission
              Guidelines</button>
          </div>
        </div>


        <div class="col-md-6 revealOnScroll" data-animation="fadeInDown" data-timeout="700">
          <div class="section-headlines">
            <h3 class="heading-half">Registration Details</h3>
          </div>
          <div style="margin-top: -60px;margin-bottom: 20px;">
            <i class="  fas fa-edit d-flex justify-content-center fa-6x"></i>
          </div>
          <table class="table table-hover table-bordered dates">
            <thead>
              <tr>
                <th>Category</th>
                <th>Indian Authors (&#8377;)</th>
                <th>Foreign Authors (&#36;)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Faculty & Academician</td>
                <td>2500</td>
                <td>100</td>
              </tr>
              <tr>
                <td>Industry delegates</td>
                <td>3000</td>
                <td>150</td>
              </tr>
              <tr>
                <td>Research scholars</td>
                <td>2000</td>
                <td>100</td>
              </tr>
              <tr>
                <td>UG & PG Students</td>
                <td>1500</td>
                <td>75</td>
              </tr>
              <tr>
                <td>Poster Presentation</td>
                <td>1500</td>
                <td>--</td>
              </tr>
              <tr>
                <td>Listener</td>
                <td>500</td>
                <td>--</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>

    <!---Organizing Committee-->


    <!--Technical Advisory Board-->
    <div id="jump4"></div>
    <div style="background:url('./bagblue.jpg');background-repeat: no-repeat;background-size: cover;" class="row">
      <div class="col-md-12">
        <h1 class="title_internal" style="margin-top: 50px;margin-bottom: 70px;">CONFERENCE CHAIR</h1><br />
        <div class="row">
          <div class="owl-content col-md-4">
            <h2 class="name"> Dr. S. Shanthi</h2>
            <h3 class="designation">Associate Professor</h3>
            <h3 class="depart">Department of Computer Applications</h3>
            <h3 class="depart">KEC</h3>
          </div>
          <div class="owl-content col-md-4">
            <h2 class="name"> Dr. A. Tamilarasi</h2>
            <h3 class="designation">Professor & Head</h3>
            <h3 class="depart">Department of Computer Applications</h3>
            <h3 class="depart">KEC</h3>
          </div>
          <div class="owl-content col-md-4">
            <h2 class="name"> Mrs . M. Pyingkodi</h2>
            <h3 class="designation">Assistant Professor</h3>
            <h3 class="depart">Department of Computer Applications</h3>
            <h3 class="depart">KEC</h3>
          </div>
        </div>
        <h1 class="title_internal" style="margin-top: 30px;margin-bottom: 30px;">ORGANIZING COMMITTEE</h1><br />
      </div>

      <div class="row">

      </div>
      <div class="owl-carousel owl-theme container-fluid">

        <div class="owl-content col-md-12">
          <h2 class="name"> Dr. P. A. Selvaraj</h2>
          <h3 class="designation">Assistant Professor (SI.r)</h3>
          <h3 class="depart">Department of Computer Applications</h3>
          <h3 class="depart">KEC</h3>
        </div>
        <div class="owl-content col-md-12">
          <h2 class="name">Dr.T. M.Saravanan</h2>
          <h3 class="designation">Assistant Professor</h3>
          <h3 class="depart">Department of Computer Applications</h3>
          <h3 class="depart">KEC</h3>
        </div>
        <div class="owl-content col-md-12">
          <h2 class="name">Dr. D. Sivabalaselvamani</h2>
          <h3 class="designation">Assistant Professor</h3>
          <h3 class="depart">Department of Computer Applications</h3>
          <h3 class="depart">KEC</h3>
        </div>
        <div class="owl-content col-md-12">
          <h2 class="name">Dr. M. Jagadeesan</h2>
          <h3 class="designation">Assistant Professor</h3>
          <h3 class="depart">Department of Computer Applications</h3>
          <h3 class="depart">KEC</h3>
        </div>
        <div class="owl-content col-md-12">
          <h2 class="name">Mr. A. Raja</h2>
          <h3 class="designation">Assistant Professor</h3>
          <h3 class="depart">Department of Computer Applications</h3>
          <h3 class="depart">KEC</h3>
        </div>
        <div class="owl-content col-md-12">
          <h2 class="name">Mr. L. Rahunathan </h2>
          <h3 class="designation">Assistant Professor</h3>
          <h3 class="depart">Department of Computer Applications</h3>
          <h3 class="depart">KEC</h3>
        </div>
        <div class="owl-content col-md-12">
          <h2 class="name">Mr. A. S. Harishankher</h2>
          <h3 class="designation">Assistant Professor</h3>
          <h3 class="depart">Department of Computer Applications</h3>
          <h3 class="depart">KEC</h3>
        </div>
        <div class="owl-content col-md-12">
          <h2 class="name">Ms. S. Hemalatha</h2>
          <h3 class="designation">Assistant Professor</h3>
          <h3 class="depart">Department of Computer Applications</h3>
          <h3 class="depart">KEC</h3>
        </div>

        <div class="owl-content col-md-12">
          <h2 class="name">Ms. K. Chitra</h2>
          <h3 class="designation">Assistant Professor</h3>
          <h3 class="depart">Department of Computer Applications</h3>
          <h3 class="depart">KEC</h3>
        </div>
        <div class="owl-content col-md-12">
          <h2 class="name">Ms. K. Nanthini</h2>
          <h3 class="designation">Assistant Professor</h3>
          <h3 class="depart">Department of Computer Applications</h3>
          <h3 class="depart">KEC</h3>
        </div>
        <div class="owl-content col-md-12">
          <h2 class="name">Ms. T. Kavitha</h2>
          <h3 class="designation">Assistant Professor</h3>
          <h3 class="depart">Department of Computer Applications</h3>
          <h3 class="depart">KEC</h3>
        </div>
      </div>
    </div>
    <div style="background-color: #eaecef">
      <div class="section-headlines">
        <h3 class="heading-half">Technical Advisory Board</h3>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <ul class="list-group">

              <table class="table committee">
                <tbody>

                  <li class="list-group-item text-center"
                    style="background-color:#0A1172; border:solid 1px #ccc;color:#FFF; font-weight: bold;">
                    International Advisory Board</li>


                  <tr>
                    <td>
                      Dr. Mazlina Abdul Majid, Universiti Malaysia Pahang, Malaysia
                    </td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>
                  <tr>
                  <tr>
                    <td>
                      Dr. Mariofana Milanova, University of Arkansas, USA
                    </td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>

                  <td>
                    Dr. Kannan Ramakrishnan, Multimedia University, Malaysia
                  </td>
                  <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>
                  <tr>
                    <td>
                      Dr. Fedrin Joe, Thai Nichi Institute of Technology, Thailand
                    </td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>
                  <tr>
                    <td>
                      Dr. Xiaohui Yuan, University of North Texas, USA
                    </td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>
                  <tr>
                    <td>
                      Dr. Ramaswamy Palaniappan University of Kent, UK
                    </td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>
                  <tr>
                    <td>
                      Dr. Abdel-Badeeh M. Salem, Shams University, EGYPT
                    </td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>
                  <tr>
                    <td>
                      Dr. Kamil Dimililer, Innovation and Information Technologies Centre, Turkey
                    </td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>

                  <tr>
                    <td>
                      Mr. Kumararaja Perisamy, United Nations Federal Credit Union, USA
                    </td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>
                  <tr>
                    <td>
                      Dr. Balamurugan Easwaran, University of Africa, Nigeria
                    </td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>
                  <tr>
                    <td>
                      Dr. Seyed Hossein Mousavinezhrd, Idaho State University, USA
                    </td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>
                  <tr>
                    <td>Dr. Jafreezal Jaafar, Universiti Teknologi PETRONAS, Malaysia</td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>
                  <tr>
                    <td>Dr. T. Karthikeyan, SALALAH College of Technology, Oman</td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>
                  <tr>
                    <td>Dr. Jay Manikandan, 10X Genomics, CA</td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>
                  <tr>
                    <td>Mr. R.Sivaraj, Amazon LLC, Western Australia</td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>
                  <tr>
                    <td>Dr. Nabin Sharma,University of Technology Sydney, Australia</td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>
            </ul>
            </tbody>
            </table>
          </div>
          <div class="col-md-6">
            <table class="table committee">
              <tbody>
                <ul class="list-group">

                  <li class="list-group-item text-center"
                    style="background-color:#0A1172; border:solid 1px #ccc;color:#FFF;font-weight: bold;">
                    Indian Advisory Board</li>
                  <tr>
                    <td>Dr. Vishnuvardhan Rao,Director,ICMR_NIMS,New Delhi</td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>
                  <tr>
                    <td>Dr. K. R. Rammohan, MGM Healthcare, Chennai,Tamilnadu, India</td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>
                  <tr>
                    <td>Dr. N. Sreekumaran nair,JIPMER,Puducherry, India</td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>
                  <tr>
                    <td>Dr. P. Venkatesan, Scientist F (Retried), ICMR, Chennai,Tamilnadu, India</td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>

                  <tr>
                    <td>Dr. Kumar Rajamani, Robert Bosch Engineering and Business Solutions, Karnataka</td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>

                  </tr>
                  <tr>
                    <td>Mr. Sivanandham Perumalsamy, Sirius Computer Solutions, Chennai, India</td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>
                  <tr>
                    <td>Dr Rajesh Kumar Sinha, School of Allied Health Sciences, Karnataka, India</td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>
                  <tr>
                    <td>Dr.S.Shenbaga Devi, Centre for Medical Electronics, Anna University, Chennai</td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>

                  </tr>
                  <tr>
                    <td>Dr. K.Thangavel, Periyar University, Tamilnadu, India</td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>
                  <tr>
                    <td>Dr.N.Jeyakumar, Bharathiar University, Tamilnadu, India </td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>
                  <tr>
                    <td>Dr.P.Shanmugavadivu, The Gandhigram Rural Institute, Tamilnadu, India</td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>
                  <tr>
                    <td>Prof. Rev. Dr. Andrews Samraj, ASTRC, Mahendra Engineering College, India</td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>
                  <tr>
                    <td>Dr. V.Vijayakumar, VIT Chennai, Tamilnadu, India</td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>

                  <tr>
                    <td>Ms. A. Ambalatharasi, HCL Technologies, Chennai,Tamilnadu, India</td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>
                  <tr>
                    <td>Mr. Victor Sundararaj, Senior Lead Principal, Infosys, Bangalore </td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>
                  <tr>
                    <td>Mr. Sundar K.S., Campus Connect Head, Infosys, Mysore, India </td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>

                  <tr>
                    <td>Dr R Vidhyapriya, PSG College of Technology, Tamilnadu </td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>

                  <tr>
                    <td>Dr. P.Balasubramanie, Professor & Head, CT-PG, KEC</td>
                    <td><span class="info-icon"><i class="fas fa-info"></i></span></td>
                  </tr>

                </ul>
              </tbody>
            </table>
          </div>


        </div>
      </div>
    </div>

    <div id="jump6" class="jumper"></div>
    <div class="container">
      <div class="section-headlines">
        <h3 class="heading-half">Speakers</h3>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-7 ml-auto mr-auto">
          <div class="team_item">
            <div class="img_block">
              <img alt="" src="./Content/images/keynote_mazlina.jpg" class="rounded-circle"
                style="width: 75%;height: 300px;">
            </div>
            <div class="team_body">
              <h5>Dr. Mazlina Abdul Majid</h5>

              <p>
                Universiti Malaysia Pahang,
                Malaysia</p>
              <a title="Info" href="https://fskkp.ump.edu.my/index.php/en/cb-profile/mazlina"><i
                  class="icon-info icon-2x"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-7 ml-auto mr-auto">
          <div class="team_item">
            <div class="img_block">
              <img alt="" src="./Content/images/speaker_vishnu.jpg" class="rounded-circle"
                style="width: 75%;height: 300px;">
            </div>
            <div class="team_body">
              <h5>Dr. Vishnuvardhan Rao</h5>

              <p>Director,
                ICMR_NIMS, New Delhi
              </p>
              <a title="Info" href="#"><i class="icon-info icon-2x"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-7 ml-auto mr-auto">
          <div class="team_item">
            <div class="img_block"><img alt="" src="./Content//images//keynote_venkatesan.jpg" class="rounded-circle"
                style="width: 90%;height: 300px;"></div>
            <div class="team_body">
              <h5>Dr. P. Venkatesan</h5>
              <h6>Scientist F (Retried) </h6>
              <p>Indian Council of Medical Research,
                Chennai.</p>
              <a title="Info" href="https://www.researchgate.net/profile/Perumal_Venkatesan5"><i
                  class="icon-info icon-2x"></i></a> &nbsp;&nbsp; <a title="LinkedIN"
                href="https://in.linkedin.com/in/p-venkatesan-76944420"><i class=" icon-linkedin icon-2x"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-7 ml-auto mr-auto">
          <div class="team_item">
            <div class="img_block"><img alt="" src="./Content//images/keynote_SREEKUMARAN.png" class="rounded-circle"
                style="width: 80%;height: 300px;"></div>
            <div class="team_body">
              <h5>Dr. N. Sreekumaran Nair</h5>

              <p>Medical Biometrics & Informatics (Biostatistics),JIPMER,Puducherry</p>
              <a title="Info" href="http://jipmer.edu.in/users/nsreekumaran"><i class="icon-info icon-2x"></i></a>
              &nbsp;&nbsp;
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-7 ml-auto mr-auto">
          <div class="team_item">
            <div class="img_block"><img alt="" src="./Content/images/keynote_rammohan.jpg" class="rounded-circle"
                style="width: 100%;height: 300px;"></div>
            <div class="team_body">
              <h5>Dr. K. R. Rammohan</h5>
              <h6>Doctor</h6>
              <p> MGM Healthcare, Chennai</p>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!--advisory commite-->

    <!--Journals-->
    <div class="container-fluid" style="background-color: lightgray;">
      <div id="jump10" class="jumper"></div>
      <div class="section-headlines">
        <h3 class="heading-half">Publications</h3>
      </div>
      <div class="container">
        <p style="margin-top: -70px;font-weight: bolder;color: black;">The accepted papers will be published in
          conference proceedings and all extended papers can be considered for the publication in SCOPUS/ Anna
          University Annexure-I journals based on the authors consent with additional charges.</p>
        <ul class="list-unstyled">
          
                <li class="media" style="padding-top: 15px;">
                <a href=" https://www.ijrte.org/"><img src="./Content/images/journels/IJRTE.png" class="mr-3" alt="..." style="height: 100px;width: 100px;"></a>
                <div class="media-body">
                  <a href=" https://www.ijrte.org/" style="text-decoration: none;">
                      <h5 class="mt-0 mb-1">International Journal of Recent Technology and Engineering (Scopus )</h5>
                  <p  style="color: black;font-weight: 400;">ISSN Number : 2277-3878</p>
                  </a>
                  
      
                </div>
              </li>
              
          <li class="media" style="padding-top: 15px;">
            <a href="./Content/iJSSS.pdf" target="_blank"><img src="./Content/images/inder.jpg" class="mr-3" alt="..."
                style="height: 100px;width: 100px;"></a>
            <div class="media-body">
              <a href="./Content/iJSSS.pdf" target="_blank" style="text-decoration: none;">
                <h5 class="mt-0 mb-1">Special issue “ Internet of Things for Healthcare” in Int. J. of Society Systems
                  Science (Free)</h5>
                <p style="color: black;font-weight: 400;">ISSN Number : 1756-2511</p>
              </a>
            </div>
          </li>
          <li class="media" style="padding-top: 15px;">
            <a href="https://eudl.eu/journal/cs" target="_blank"><img src="./Content/images/journels/eai.png"
                class="mr-3" alt="..." style="height: 100px;width: 100px;"></a>
            <div class="media-body">
              <a href="https://eudl.eu/journal/cs" target="_blank" style="text-decoration: none;">
                <h5 class="mt-0 mb-1">
                  EAI Endorsed Transactions on Cloud Systems (Free)</h5>
                <p style="color: black;font-weight: 400;">ISSN Number : 2410-6895</p>
              </a>
            </div>
          </li>
          <li class="media" style="padding-top: 15px;">
            <a href="https://www.ijeat.org/" target="_blank"><img src="./Content/images/journels/ijeat.png"
                class="mr-3" alt="..." style="height: 100px;width: 100px;"></a>
            <div class="media-body">
              <a href="https://www.ijeat.org/" target="_blank" style="text-decoration: none;">
                <h5 class="mt-0 mb-1">
                  International Journal of Engineering and Advanced Technology (Scopus )</h5>
                <p style="color: black;font-weight: 400;">ISSN Number : 2249-8958</p>
              </a>
            </div>
          </li>
          <li class="media" style="padding-top: 15px;">
            <a href="https://www.ijitee.org/" target="_blank"><img src="./Content/images/ijitee.png"
                class="mr-3" alt="..." style="height: 100px;width: 100px;"></a>
            <div class="media-body">
              <a href="https://www.ijitee.org/" target="_blank" style="text-decoration: none;">
                <h5 class="mt-0 mb-1">
                  International Journal of Innovative Technology and Exploring Engineering(TM)(Scopus)</h5>
                <p style="color: black;font-weight: 400;">ISSN Number : 2278-3075</p>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <!-- Central Modal Fluid -->
    <div class="modal fade" id="guidelines-model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">

      <!-- Change class .modal-sm to change the size of the modal -->
      <div class="modal-dialog modal-fluid" role="document">


        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title w-100">Submission of Papers</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="row">
                  <div class="col-md-12">
                    <div class="section-headlines" style="margin-bottom: 0px;">
                      <h4 style="font-size: 20px">Guidelines For Paper Submission</h4>
                    </div>
                    <div class="guidelines">
                      <p>Authors are requested to submit the full paper to the following Mail Id <span
                          style="font-weight: 900;font-style: italic;font-size: 18px;"><a
                            href="mailto:rchimca19@gmail.com">rchimca19@gmail.com</a></span> The paper submitted will be
                        peer
                        reviewed and evaluated based on the originality, research content and relevance to the
                        conference. One
                        copy of the full paper should be submitted through the email as per the following format.</p>
                      <div class="section-headlines" style="margin-bottom: 0px;margin-top: 20px;">
                        <h4 style="font-size: 26px;">SPECIFICATION</h4>
                      </div>

                      <div class="table-responsive-lg">
                        <table class="table table-bordered ">
                          <thead>
                            <tr>
                              <th class="text-center" style="font-weight: bold;color: black">Title Page</th>
                              <th class="text-center" style="font-weight: bold;color: black">Formate</th>
                              <th class="text-center" style="font-weight: bold;color: black">Font</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td style="text-align: left;font-weight: bold;color: black"><span class="tick"
                                  style="padding-left: 0px;font-weight: bold;color: black"></span>Title<br /><span
                                  class="tick" style="padding-left: 0px;font-weight: bold;color: black"></span>Author
                                Name<br /><span class="tick"
                                  style="padding-left: 0px;font-weight: bold;color: black"></span>Mail Id</td>
                              <td style="text-align: left;font-weight: bold;color: black;"><span class="tick"
                                  style="padding-left: 0px;"></span>IEEE
                                Standard<br /><span class="tick" style="padding-left: 0px;"></span>single column format
                                in A4
                                sheets limited to 6 pages only</td>
                              <td style="text-align: left;font-weight: bold;color: black  "><span class="tick"
                                  style="padding-left: 0px;"></span>Times New
                                Roman<br /><span class="tick" style="padding-left: 0px;"></span> 12 Size <br /><span
                                  class="tick" style="padding-left: 0px;"></span> 1.5 line spacing</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="section-headlines" style="margin-bottom: 0px;">
                    <h4 style="font-size: 20px">Poster Guidelines (A0 Poster)</h4>
                  </div>
                  <div class="guidelines">
                    <p>For presenting your poster we will provide a dedicated space in Your Poster will be displayed on
                      dedicated boards that will be made available through the organizing committee. In order to not
                      exceed the available board size your Poster must be formatted to A0 (841mm x 1189 mm) portrait
                      format size containing at maximum three columns. The poster mounting area will have your Poster
                      Number in the top left hand corner.</p>
                  </div>
                  <h4 style="font-size: 21px;color: #2196F3;font-weight: bolder;">Preparation of your poster</h4>
                  <div>
                    <p style="text-align: justify;color: black;font-size: 17px;margin-bottom:-20px" class="tick">Sters
                      should be simple, brief and prepared having in minds, primarily, their use as a basis for the
                      presentation </p>
                    <p style="text-align: justify;color: black;font-size: 17px;margin-bottom:-20px" class="tick">Each
                      poster presentation must have a title including the title of the paper, author(s), affiliation(s),
                      city and country. This part should be prepared by the presenting author to fit into the provided
                      space (74 cm x 20 cm) or, if necessary, (74 cm x 25 cm)</p>
                    <p style="text-align: justify;color: black;font-size: 17px;margin-bottom:-20px" class="tick">As
                      poster should be readable by more than one person at the same time, a letter size of at least 6 mm
                      in height for the text and 10 mm for the section headings are suggested. You should prepare your
                      poster in a three column format. Each column can be subdivided and may conveniently be divided
                      into sections, e.g.</p>
                  </div>
                  <div>
                    <pre style="margin-top: 40px;font-size: 20px;">
                    	Problem Description
                    	Previous Work
                    	Challenges
                    	Your approach/method
                    	Results / evaluation and
                    	ending with a Conclusion.
                    	Include the most important references according to the  style guides given for the paper submission.
                    
                </pre>
                  </div>
                </div>
              </div>
              <div class="d-flex justify-content-center">

              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

    </div>


    <!-- Central Modal Fluid -->
    <div class="modal fade" id="iotModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

      <!-- Change class .modal-sm to change the size of the modal -->
      <div class="modal-dialog modal-fluid" role="document">


        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title w-100">Workshop on Internet of Things</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h1 class="text-center" style="font-weight: bold">Workshop on Internet of Things</h1>
            <h3 class="text-center">(05.07.2019)</h3>
            <div class="row">
              <div class="col-md-6">
                <h2 class="h2 text-center" style="color: #000080">Course Contents</h2>
                <table class="table table-striped table-hover table-model">
                  <tbody>
                    <tr>
                      <td>Overview of Arduino & RaspberryPi </td>
                    </tr>
                    <tr>
                      <td>Connect your Arduino & RaspberryPi with your Android phone </td>
                    </tr>
                    <tr>
                      <td>Controlling of IO peripheral on Node MCU using Webpage</td>
                    </tr>
                    <tr>
                      <td>Interfacing Sensors with Arduino & RaspberryPi</td>
                    </tr>
                    <tr>
                      <td>create your own Android App using MIT App Inventor.</td>
                    </tr>
                    <tr>
                      <td>Converting your IoT projects into Research articles</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-md-6">
                <h2 class="h2 text-center" style="color: #000080">Scheduled Dates</h2>
                <table class="table table-striped table-hover table-model">
                  <tbody>
                    <tr>
                      <td>Last Date for Receipt of Applications</td>
                      <td>29.06.2019</td>
                    </tr>
                    <tr>
                      <td>Intimation of Selection</td>
                      <td>30.06.2019</td>
                    </tr>
                    <tr>
                      <td>Confirmation by Participants </td>
                      <td>01.07.2019</td>
                    </tr>

                  </tbody>
                </table>
                <h2 style="color: #000080">Registration Details</h2>
                <p style="color: black;font-weight: bold;text-align: justify;">Registration Fee : Rs.350/- *<br />*
                  Inclusive of Service Tax<br />The registration fee includes kit, Course Materials,
                  refreshment and Lunch. The Demand Draft for the
                  registration fee must be drawn in favor of “Kongu Engineering College
                  Grant”, payable at Perundurai or
                  Erode
                </p>

              </div>
            </div>
            <div class="d-flex justify-content-center">
              <a href="https://bit.ly/2KuDE8B" target="_blank"><button class="btn btn-success">Register
                  Now</button></a>
              <a href="./Content/iot.pdf" target="_blank"><button class="btn btn-info">Download Brochure</button></a>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Central Modal Fluid -->
    <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

      <!-- Change class .modal-sm to change the size of the modal -->
      <div class="modal-dialog modal-fluid" role="document">


        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title w-100">Workshop on Machine Learning in Image Processing</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h1 class="text-center" style="font-weight: bold">Workshop on Machine Learning in Image Processing</h1>
            <h3 class="text-center">08.08.2019 & 09.08.2019</h3>
            <div class="row">
              <div class="col-md-6">
                <h2 class="h2 text-center" style="color: #000080">Course Contents</h2>
                <table class="table table-striped table-hover table-model">
                  <tbody>
                    <tr>
                      <td>Introduction to Image Processing and its applications </td>
                    </tr>
                    <tr>
                      <td>Basics of Open CV and Python programming</td>
                    </tr>
                    <tr>
                      <td>Image filtering, Edge detection and image enhancement</td>
                    </tr>
                    <tr>
                      <td>Interfacing Sensors with Arduino & RaspberryPi</td>
                    </tr>
                    <tr>
                      <td>Geometric transformations of images</td>
                    </tr>
                    <tr>
                      <td>Feature Extraction & feature matching</td>
                    </tr>
                    <tr>
                      <td>Image recognition and Classification</td>
                    </tr>
                    <tr>
                      <td>Video Analysis</td>
                    </tr>
                    <tr>
                      <td>Case Study</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-md-6">
                <h2 class="h2 text-center" style="color: #000080">Scheduled Dates</h2>
                <table class="table table-striped table-hover table-model">
                  <tbody>
                    <tr>
                      <td>Last Date for Receipt of Applications</td>
                      <td>31.07.2019</td>
                    </tr>
                    <tr>
                      <td>Intimation of Selection</td>
                      <td>01.08.2019</td>
                    </tr>
                    <tr>
                      <td>Confirmation by Participants </td>
                      <td>05.08.2019</td>
                    </tr>

                  </tbody>
                </table>
                <h2 style="color: #000080">Registration Details</h2>
                <p style="color: black;font-weight: bold;text-align: justify;" class="col-md-12">• Registration Fee :
                  Rs.500/- * * Inclusive of Service Tax
                  The registration fee includes kit, Course Materials, refreshment and Lunch. The Demand Draft for the
                  registration fee must be drawn in favor of “Kongu Engineering College Grant”, payable at Perundurai
                  or Erode.
                </p>
                <div class="row">
                  <div class="col-md-12">
                    <h3 style="color: black;font-weight: bolder;text-transform: uppercase;">Online payment (NEFT
                      transfer) to the following account:</h3>
                    <table class="table table-striped table-hover table-bank">
                      <tbody>
                        <tr>
                          <td>Name</td>
                          <td>M.Pyingkodi</td>
                        </tr>
                        <tr>
                          <td>Account No</td>
                          <td>1247174000000102</td>
                        </tr>
                        <tr>
                          <td>Account Type</td>
                          <td>Saving Account</td>
                        </tr>
                        <tr>
                          <td>Bank</td>
                          <td>Karur Vysya Bank</td>
                        </tr>
                        <tr>
                          <td>Branch</td>
                          <td>KEC Nagar,Perundurai </td>
                        </tr>
                        <tr>
                          <td>IFSC Code</td>
                          <td>KVBL0001247</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-center">
              <a href="https://bit.ly/2IusuPP" target="_blank"><button class="btn btn-success">Register
                  Now</button></a>
              <a href="./Content/ip.pdf" target="_blank"><button class="btn btn-info">Download Brochure</button></a>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>



    <!-- Portfolio -->

    <!--PortForlio ends-->
    <!-- Central Modal Small -->
    <!--Contact-->
    <div id="jump9"></div>
    <div class="section type-1 section-contact">
      <div class="container-fluid">
        <div class="section-headlines" style="margin-bottom: 50px;">
          <h4>
            Contact Us
          </h4>

        </div>

        <div class="row ">
          <div class="col-md-8 revealOnScroll" data-animation="fadeInLeft" data-timeout="700">
            <div id="map">

            </div>
            <div class="visible-xs visible-sm"> <br class="gap-30" />

              <br class="gap-30" />
            </div>
          </div>
          <div class="col-md-4 revealOnScroll" data-animation="fadeInRight" data-timeout="800">
            <div style="margin-top: 0px;">
              <p style="margin-left: 0%;text-align: left;" class="address">


                <b>Dr. S.SHANTHI,<br /></b>
                Associate Professor<br />
                <b>Ms. M.PYINGKODI,<br /></b>
                Assistant professor,<br />
                Department of Computer Applications,<br />
                Kongu Engineering College,<br />
                Perundurai, Erode, Tamil Nadu, India,<br />
                Mobile: 9942911551, 9943114104,<br />
                Mail: <a href="mailto:rchimca19@gmail.com ">rchimca19@gmail.com </a>

              </p>
            </div>
          </div>
        </div>

      </div>
    </div>









    <!--Contact End-->

    <!--Scripts-->
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

    <script>

      var countDownDate = new Date("Dec 12, 2019 09:00:00").getTime();

      // Update the count down every 1 second
      var x = setInterval(function () {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in an element with id="demo"
        document.getElementById("timer").innerHTML = days + "d " + hours + "h "
          + minutes + "m " + seconds + "s ";

        // If the count down is finished, write some text 
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("timer").innerHTML = "EXPIRED";
        }
      }, 1000);



      var owl = $('.owl-carousel');
      owl.owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 2000,
        stagePadding: 50,
        autoplayHoverPause: true,
        animateOut: 'slideOutDown',
        animateIn: 'flipInX'

      });

      function sticky_relocate() {
        var window_top = $(window).scrollTop();
        var div_top = $('#sticky-anchor').offset().top;
        if (window_top > div_top) {
          $('#sticky').addClass('stick');
        } else {
          $('#sticky').removeClass('stick');
        }
      }

      $(function () {
        $(window).scroll(sticky_relocate);
        sticky_relocate();
      });


      $(document).ready(function () {
        // Add smooth scrolling to all links
        $(".nav-link").on('click', function (event) {

          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 800, function () {

              // Add hash (#) to URL when done scrolling (default click behavior)

            });
          } // End if
        });
      });

      function initMap() {
        // The location of Uluru
        var uluru = { lat: 11.2738701, lng: 77.5964278 };
        // The map, centered at Uluru
        var map = new google.maps.Map(
          document.getElementById('map'), { zoom: 12, center: uluru });
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({ position: uluru, map: map });
      }


      function overlayGuidelines() {
        document.getElementById("overlay").style.display = "block";
      }
      function overlayGuidelinesOff() {
        document.getElementById("overlay").style.display = "none";
      }
      var $window = $(window);
      win_height_padded = $window.height();
      isTouch = Modernizr.touch;

      $window.on('scroll', revealOnScroll);

      function revealOnScroll() {
        var scrolled = $window.scrollTop();
        $(".revealOnScroll:not(.animated)").each(function () {
          var $this = $(this),
            offsetTop = $this.offset().top;

          if (scrolled + win_height_padded > offsetTop) {
            if ($this.data('timeout')) {
              window.setTimeout(function () {
                $this.addClass('animated ' + $this.data('animation'));
              }, parseInt($this.data('timeout'), 100));
            }
          }
        });
      }

      $('.nav-tabs a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
      })
    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6JDv_BjUUeSTJJG8YF_1chKvSX1mtfgo&callback=initMap">
      </script>
</body>

</html>