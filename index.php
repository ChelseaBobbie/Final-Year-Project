

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
          <a href="#carouselExampleAutoplaying" class="custom-button">
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
          <a href="#ourproducts" class="custom-button">
            <i class="fa fa-star" aria-hidden="true"></i> Rate</a>
          <a href= "./view-ratings.php" class="custom-button"> 
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
          <a href="#ourproducts" class="custom-button">
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

      <div class="firstheader" id="ourproducts">
        <!-- <h1>Public Services</h1> -->
        <html lang="en">
          <head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Linked Dropdown Menus</title>
              <style>
                  .dropdown {
                      display: block;
                      margin-right: 10px;
                      margin-top: 100px;
                  }
          
                  .dropdown-content {
                      display: none;
                      position: absolute;
                      background-color: #f9f9f9;
                      min-width: 160px;
                      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
                      z-index: 1;
                  }
          
                  .dropdown:hover .dropdown-content {
                      display: block;
                  }
          
                  .dropdown-content a {
                      color: black;
                      padding: 12px 16px;
                      text-decoration: none;
                      display: block;
                  }
          
                  .dropdown-content a:hover {
                      background-color: #f1f1f1;
                  }
              </style>
             </head>
          
     
</head>
<body>
  <style>
body {
    font-family: Arial, sans-serif;
    text-align: center; /* Aligns inline-block elements like .dropdown to center */
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropbtn {
    background-color: rgb(215, 215, 215);
    padding: 10px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    width: 200px; /* Width can be adjusted */
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px; /* Match or exceed the width of the button */
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown:hover .dropdown-content {
    display: block;
}
a{
  color: black;
}
.dropdown-content a:hover {background-color: #f1f1f1}
</style>
<form method="get" action="">

  <!-- Dropdown for selecting service -->
  <select name="service" onchange="this.form.submit()">
      <option value="">Select a Service</option>
      <option value="Ghana Educational Services" <?= isset($_GET['service']) && $_GET['service'] == 'Ghana Educational Services' ? 'selected' : '' ?>>Ghana Educational Services</option>
      <option value="Ghana Health Services" <?= isset($_GET['service']) && $_GET['service'] == 'Ghana Health Services' ? 'selected' : '' ?>>Ghana Health Services</option>
      <option value="DVLA Services" <?= isset($_GET['service']) && $_GET['service'] == 'DVLA Services' ? 'selected' : '' ?>>DVLA Services</option>
      <option value="Passport Offices" <?= isset($_GET['service']) && $_GET['service'] == 'Passport Offices' ? 'selected' : '' ?>>Passport Offices</option>
      <option value="Ghana Immigration Services" <?= isset($_GET['service']) && $_GET['service'] == 'Ghana Immigration Services' ? 'selected' : '' ?>>Ghana Immigration Services</option>
  </select>

  <!-- Hidden input to maintain service selection if needed -->
  <noscript>
      <input type="submit" value="Choose Service">
  </noscript>
</form>

<!-- After service is selected, form for submitting final data -->
<form method="post" action="form.html">
  <input type="hidden" name="service" value="<?= isset($_GET['service']) ? $_GET['service'] : '' ?>">

  <!-- Dynamic Dropdown for branches based on service selection -->
  <select name="branch">
      <option value="">Select a Branch</option>
      <?php
      $branches = [
          'Ghana Educational Services' => ['GES Headquarters, Accra', 'GES Regional Office, Accra', 'GES Korle Klottey Office, Accra'],
          'Ghana Health Services' => ['Komfo Anokye Teaching Hospital, Kumasi', 'Korle-Bu Teaching Hospital, Accra', 'Tamale Teaching Hospital, Tamale'],
          'DVLA Services' => ['DVLA 37 Branch, Accra', 'DVLA, Kuntunse'],
          'Passport Offices' => ['Passport Office Headquarters, Accra', 'Passport Office Premium Services, Accra'],
          'Ghana Immigration Services' => ['Ghana Immigration Services Headquarters, Accra', 'Ghana Immigration Services Airport Branch, Accra']
      ];

      if (isset($_GET['service']) && array_key_exists($_GET['service'], $branches)) {
          foreach ($branches[$_GET['service']] as $branch) {
              echo "<option value=\"$branch\">$branch</option>";
          }
      }
      ?>
  </select>

  <input type="submit" value="Submit">
</form>

    <!-- <div class="dropdown" id="first-dropdown">
        <button style="align-items:center ;" class="dropbtn">Select a Public Service</button>
        <div  class="dropdown-content">
            <a onclick="selectService('Ghana Educational Services')">Ghana Educational Services</a>
            <a onclick="selectService('Ghana Health Services')">Ghana Health Services</a>
            <a onclick="selectService('DVLA Services')">DVLA Services</a>
            <a onclick="selectService('Passport Offices')">Passport Offices</a>
            <a onclick="selectService('Ghana Immigration Services')">Ghana Immigration Services</a>
            
        </div>
    </div>
    
    <div class="dropdown" id="second-dropdown" style="display: block;">
        <button style="align-self:center ;" class="dropbtn">Select the Institution/Branch</button>
        <div class="dropdown-content" id="second-dropdown-content">
        </div>
    </div>

    <script>
      function selectService(serviceName) {
          var xhr = new XMLHttpRequest();
          xhr.open("POST", "save_selection.php", true);
          xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
          xhr.onreadystatechange = function () {
              if (xhr.readyState === 4 && xhr.status === 200) {
                  console.log("Service saved: " + serviceName);
                  // Store service in session or local storage for later use if needed
                  sessionStorage.setItem('selectedService', serviceName);
              }
          };
          xhr.send("service=" + encodeURIComponent(serviceName));
          showSecondDropdown(serviceName);
      }
      
      function selectBranch(branchName) {
          var xhr = new XMLHttpRequest();
          var service = sessionStorage.getItem('selectedService'); // Retrieve the service stored earlier
          xhr.open("POST", "save_selection.php", true);
          xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
          xhr.onreadystatechange = function () {
              if (xhr.readyState === 4 && xhr.status === 200) {
                  console.log("Branch saved: " + branchName);
                  // Redirect to form.html after successful AJAX response
                  window.location.href = "form.html";
              }
          };
          xhr.send("service=" + encodeURIComponent(service) + "&branch=" + encodeURIComponent(branchName));
      }
      
      function showSecondDropdown(serviceName) {
          var secondDropdown = document.getElementById('second-dropdown');
          var secondDropdownContent = document.getElementById('second-dropdown-content');
          secondDropdownContent.innerHTML = '';
      
          var optionsMap = {
              'Ghana Educational Services': ['GES Headquarters, Accra', 'GES Regional Office, Accra', 'GES Korle Klottey Office, Accra'],
              'Ghana Health Services': ['Komfo Anokye Teaching Hospital, Kumasi', 'Korle-Bu Teaching Hospital, Accra', 'Tamale Teaching Hospital, Tamale'],
              'DVLA Services': ['DVLA 37 Branch, Accra', 'DVLA, Kuntunse'],
              'Passport Offices': ['Passport Office Headquarters, Accra', 'Passport Office Premium Services, Accra'],
              'Ghana Immigration Services': ['Ghana Immigration Services Headquarters, Accra', 'Ghana Immigration Services Airport Branch, Accra']
          };
      
          if (optionsMap[serviceName]) {
              optionsMap[serviceName].forEach(function(option) {
                  var link = document.createElement('a');
                  link.onclick = function() { selectBranch(option); };
                  link.textContent = option;
                  secondDropdownContent.appendChild(link);
              });
          }
          secondDropdown.style.display = 'inline-block';
      }
      </script> -->
          </body>
          </html>
        
        
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
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
  </body>
</html>
