<?php

$username="root";
$password="";
$database="survey_data";
try{
  $pdo=new PDO("mysql:host=localhost;database=$database",$username,$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  die("ERROR: Could not connect." . $e->getMessage());
}



?>
   
   
   <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
          crossorigin="anonymous"
        />
        <link rel="stylesheet" href="./assets/css/demolayout.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
          href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
          rel="stylesheet"
        />
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer"
        />
    
        <title>ThePublicServiceDomain</title>
      </head>
    
      <body>
        <div class="con">
          <div class="list">
            <div class="con">
              
          </div>
          <header class="headercss" id="headercss" style="z-index: 1000">
            <nav id="header" class="button-container">
              <a href="./index.php" class="custom-button">
                <i class="fa fa-home"></i> Home
              </a>
              <a href="#aboutus" class="custom-button">
                <i class="fa fa-info-circle"></i> About Us
              </a>
              <a href="#contact" class="custom-button">
                <i class="fa fa-phone"></i> Contact
              </a>
              <a href="./signin.php" class="custom-button">
                <i class="fa fa-sign-in"></i> Sign In
              </a>
              <a href="./form.php" class="custom-button">
                <i class="fa fa-star" aria-hidden="true"></i> Rate</a>
              <a href= view-ratings.html class="custom-button"> 
                <i class="fa fa-bar-chart"></i>View Data </a>
              
            </nav>
    
            <section class="menutop">
              <div class="logo">
                <p>PSEP</p>
              </div>
    
              <button id="burger" class="menuburger custom-button">
                <i class="fa fa-bars"></i>
              </button>
            </section>
    
            <section id="topmenu" class="topmenu" hidden>
              <a href="#carouselExampleAutoplaying" class="custom-button">
                <i class="fa fa-home"></i> Home
              </a>
              <a href="#aboutus" class="custom-button">
                <i class="fa fa-info-circle" aria-hidden="true"></i> About Us
              </a>
              <a href="./index.php" class="custom-button">
                <i class="fa fa-shopping-cart"></i> Rate
              </a>
              <a href="./signin.php" class="custom-button">
                <i class="fa fa-sign-in" aria-hidden="true"></i> Sign In
              </a>
    
              <a href="#contact" class="custom-button">
                <i class="fa fa-phone"></i> Contact Us
              </a>
            </section>
          </header>
          <div
            id="carouselExampleAutoplaying"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <div class="carousel-inner" data-bs-interval="1000">
              <div class="carousel-item active">
                <img
                  src="./assets/images/image5.png"
                  id="imagecar"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="./assets/images/image7.png"
                  id="imagecar"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleAutoplaying"
              data-bs-slide="prev"
            >
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleAutoplaying"
              data-bs-slide="next"
            >
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    
          <div class="firstheader" id="ourproducts" >
          <head>
    <style type="text/css">
        .chartBox {
            width: 49%; /* Adjusted to fit side by side */
            height: 300px; /* Ensure all charts have the same height */
            float: left; /* This will make the divs align side by side */
            padding: 20px;
            margin-bottom: 20px; /* Adds space between rows */
        }
    </style>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</head>
<body>
    <div class="chartBox" id="chartContainer1"></div>
    <div class="chartBox" id="chartContainer2"></div>
    <div class="chartBox" id="chartContainer3"></div>
    <div class="chartBox" id="chartContainer4"></div>
    <div class="chartBox" id="chartContainer5"></div>

    <script>
        window.onload = function() {
            var dataPoints1 = [
                { label: "Ghana Health Services", y: 15 },
                { label: "Ghana Immigration Services", y: 13 },
                { label: "DVLA", y: 10 },
                { label: "Ghana Educational Services", y: 6 },
                { label: "Passport Offices", y: 2 }
            ];

            var chart1 = new CanvasJS.Chart("chartContainer1", {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: "Best Services in terms of availability"
                },
                axisY: {
                    title: "Number of positive reviews"
                },
                data: [{
                    type: "column",
                    dataPoints: dataPoints1
                }]
            });
            chart1.render();

            var dataPoints2 = [
              { label: "Men", y: 30 },
                { label: "Females", y: 16 }
            ];

            var chart2 = new CanvasJS.Chart("chartContainer2", {
                animationEnabled: true,
                title: {
                    text: "Number of males/females that experienced unfairnes in all services"
                },
                subtitles: [{
                    text: "By percentage(%)"
                }],
                data: [{
                    type: "pie",
                    showInLegend: "true",
                    legendText: "{label}",
                    indexLabelFontSize: 16,
                    indexLabel: "{label} - #percent%",
                    yValueFormatString: "#,##",
                    dataPoints: dataPoints2
                }]
            });
            chart2.render();

            var dataPoints3 = [
              { label: "African/Black", y: 19 },
                { label: "Caucasian/White", y: 14 },
                { label: "Latino/Spanish", y: 7 },
                { label: "Asian/Asian American", y: 6 }
            ];

            var chart3 = new CanvasJS.Chart("chartContainer3", {
                animationEnabled: true,
                title: {
                    text: "Percentage of being treated unfairly based on ethnicity "
                },
                subtitles: [{
                    text: "By percentage(%)"
                }],
                data: [{
                    type: "pie",
                    showInLegend: "true",
                    legendText: "{label}",
                    indexLabelFontSize: 16,
                    indexLabel: "{label} - #percent%",
                    yValueFormatString: "#,##",
                    dataPoints: dataPoints3
                }]
            });
            chart3.render();
            var dataPoints4 = [
                { label: "GES Headquarters, Accra", y: 8 },
                { label: "GES Regional Office, Accra", y: 6 },
                { label: "GES Korle Klottey Office, Accra", y: 1 },
                { label: "Komfo Anokye Teaching Hospital, Kumasi", y: 6 },
                { label: "Korle-Bu Teaching Hospital, Accra", y: 2 },
                { label: "Tamale Teaching Hospital, Tamale", y: 6 },
                { label: "DVLA 37 Branch, Accra", y: 5 },
                { label: "DVLA, Kuntunse", y: 3 },
                { label: "Ghana Educational Services", y: 3 },
                { label: "Passport Office Headquarters, Accra", y: 1 },
                { label: "Passport Office Premium Services, Accra", y: 2 },
                { label: "Ghana Immigration Services Headquarters, Accra", y: 1 },
                { label: "Ghana Immigration Services Airport Branch, Accra", y: 2 }
               
            ];

            var chart4 = new CanvasJS.Chart("chartContainer4", {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: "Worst Institutions in terms of availability and unfairness"
                },
                axisY: {
                    title: "Number of negative reviews"
                },
                data: [{
                    type: "column",
                    dataPoints: dataPoints4
                }]
            });
            chart4.render();
            
            // Placeholder for chart 3 initialization (similar to above)
            // Placeholder for chart 4 initialization (similar to above)
        }
    </script>
</body>
         
              
              </div>
  
          <section class="aboutus" id="aboutus">
            <h1>About Us</h1>
    
            <p>
              Welcome to ThePublicServiceDomain, your go-to destination for
              insightful evaluations and reviews of diverse public services. We're
              dedicated to empowering citizens with transparent, trustworthy
              information to navigate and engage with essential public services
              effectively. Our platform serves as a beacon of accountability,
              fostering informed decision-making and driving positive change within
              communities. Join us in shaping a better public service landscape for
              all.
            </p>
          </section>
    
          <section class="contact" id="contact">
            <div>
              <h1>Contact Us</h1>
              <form class="form">
                <label>Name</label>
                <input
                  class="input"
                  type=""
                  placeholder="Enter Your Name"
                  title="Names"
                />
                <label>E-mail</label>
                <input
                  class="input"
                  type="email"
                  placeholder="Enter Your E-mail"
                  title="E-mail"
                />
                <label>Date of Birth</label
                ><input
                  class="input"
                  type="date"
                  placeholder="Enter Your DOB "
                  title="DOB"
                />
                <label>Enter Your Issue</label>
                <textarea rows="6" class="issue"></textarea>
                <a href="./contactus.html" class="submit">Submit Form</a>
              </form>
            </div>
          </section>
          <footer class="footer">
            <a href="#carouselExampleAutoplaying" class="custom-button">
              <i class="fa fa-home"></i> Home
            </a>
            <a href="#aboutus" class="custom-button">
              <i class="fa fa-info-circle" aria-hidden="true"></i> About Us
            </a>
            <a href="#ourproducts" class="custom-button">
              <i class="fa fa-shopping-cart"></i> Rate
            </a>
            <a href="./signin.php" class="custom-button">
              <i class="fa fa-sign-in" aria-hidden="true"></i> Sign In
            </a>
    
            <a href="#carouselExampleAutoplaying" class="custom-button">
              <i class="fa fa-arrow-up" aria-hidden="true"></i> Back To Top
            </a>
          </footer>
        
        <script
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
          crossorigin="anonymous"
        ></script>
        <script src="script.js"></script>
      </body>
    </html>
    