<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="images/logo.png" type="image/icon">
  <link rel="stylesheet" href="Riverside.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QEJANI</title>
  <!-- SweetAlert2 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <!-- SweetAlert2 JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <!-- NAVBAR -->
  <header class="head">
    <div id="navbarFlex" class="navbar-flex">
      <div class="hamburg">
        <span class="hamburg2" onclick="openNav()">&#9776;</span>
        <div class="logo">
          <img width="180" src="images/qejani-logo.png">
          <p><span><b>QEJANI </b></span> <b>HOSTELS</b></p>
        </div>
      </div>
    </div>
    <div id="myNav" class="overlay">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="overlay-content">
        <a href="http://localhost/RIVERSIDE-HOSTEL-MANAGMENT-SYSTEM/ADMIN/adminportal.php">Admin Portal</a>
      </div>
    </div>
  </header>

  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "50%";
      document.getElementById('imgg').style.display = "none";
      document.getElementById("navbarFlex").style.zIndex = "0";
      document.getElementById('text').style.opacity = "none"; // Hide the text element
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
      document.getElementById("navbarFlex").style.zIndex = "1000";
      document.getElementById('text').style.display = "block"; // Show the text element again
    }
  </script>

  <div class="background-image">
   <?php include("navbar.php"); ?>





    <!-- WELCOME SECTION -->
    <section id="middle" class="middle">
      <div id="text" class="text">
        <h2>WELCOME TO <span style="color: greenyellow"> RIVERSIDE HOSTEL</span></h2>
        <p>We Bring Students<br> <span style="color: greenyellow">Lifestyle</span> To Reality</p>
        <button onclick='rooms()' type="button" class="btn btn-outline-success text-white">
          <span id="Riverside-about" class="ROOM-NAV">View Rooms</span>
        </button>
      </div>
    </section>
  </div>

