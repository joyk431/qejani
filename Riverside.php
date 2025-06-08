<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="images/logo.png" type="image/png">
  <link rel="stylesheet" href="Qejani.css">
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
    <div class="container">
    <div id="navbarFlex" class="navbar-flex">
      <div class="hamburg">
        <span class="hamburg2" onclick="openNav()">&#9776;</span>

        <div class="logo">
          <img width="55" src="images/logo.png">
          <p><strong><>QEJANI</strong>HOSTELS</p>
        </div>
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

 <div class="header">
  <div class="container">
    <div class="navbar">
      <div class="logo">
        <img src="images/qejani-logo.png" width="150px">
      </div>

      <nav>
        <ul>
          <li><a href="#" onclick="home()">Home</a></li>
          <li><a href="aboutqejani.php" onclick="aboutus()">About Us</a></li>
          <li><a href="#" onclick="rooms()">Rooms</a></li>
          <li><a href="#" onclick="image()">Images</a></li>
        </ul>
      </nav>
    <div id="sec" class="sec"></div>






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


  <script>
    document.getElementById("myBtn").addEventListener("click", function () {
      Swal.fire({
        title: 'Riverside Hostel Core Values',
        html: `
          <div style="text-align: left; list-style-type: disc; padding-left: 20px;">
            <li><b>Hospitality:</b> We are committed to creating a welcoming and inclusive environment where every guest feels at home.</li>
            <li><b>Cleanliness:</b> We prioritize hygiene and cleanliness in all areas of the hostel.</li>
            <li><b>Community:</b> We believe in fostering a sense of community among our guests.</li>
            <li><b>Sustainability:</b> Riverside Hostel is dedicated to sustainable practices that minimize our environmental impact.</li>
            <li><b>Safety:</b> The safety and security of our guests are of utmost importance.</li>
          </div>
        `,
        icon: 'info',
        confirmButtonText: 'Close'
      });
    });
  </script>

  <!-- SERVICES -->
  

  <!-- KARIBU -->
  <section class="karibibu">
    <div class="background-karibu">
      <div class="head-texte">
        <h3 style="font-size: 35px">Karibu Riverside</h3>
        <h5 style="font-size: 35px"><b></b>Your New Community</h5>
        <p>Riverside Hostel, at close proximity to University of Kabianga - Kapkatet Campus, provides convenient and comfortable
          accommodation solutions tailored for university students. Our hostel ensures a conducive environment for
          academic success while fostering a sense of community among residents.</p>
      </div>
      <div class="head-image">
        <img width="200" src="images/kabianga.jpg" alt="University of Kabianga Image">
      </div>
    </div>
  </section>
  <br>
  <br>
  <br>

  <!-- GALLERY -->
  <section id="gallery" class="gallery-section">
    <div class="gallery">
      <div class="gallery-head">
        <h2 style="font-size: 40px"><b>GALLERY</b></h2>
      </div>
      <div class="gallery-container">
        <div class="gallery-item">
          <img src="images/img1.jpeg" alt="Gallery 1">
        </div>
        <div class="gallery-item">
          <img src="images/img2.jpeg" alt="Gallery 2">
        </div>
        <div class="gallery-item">
          <img src="images/delo.jpeg" alt="Gallery 3">
        </div>
        <div class="gallery-item">
          <img src="images/img4.jpeg" alt="Gallery 4">
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT US -->
  <section class="contact">
    <div class="logo2">
      <img width="200" src="images/logo.png">
    </div>
    <br><br><br>
    <div class="schedule">
      <h2>OPENING HOURS</h2>
      <p>Mon-Fri: 9am-5pm</p>
      Sat-Sun: 10am-1pm</p>
    </div>
    <br><br>

    <div class="schedule">
      <h2>DETAILS</h2>
      <p>qejani@gmail.com</p>
      <p>0798416021</p>
    </div>
    <br><br>
    <div class="contact-form">
      <h2>Contact Us</h2>
      <form method="POST" action="contact.php">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea id="message" name="message" required></textarea>
        </div>
        <button type="submit">Send</button>
      </form>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <p>&copy; 2024 Qejani Hostels. All Rights Reserved.</p>
  </footer>
</body>

</html>
<script>
  function openNav() {
    document.getElementById("myNav").style.width = "100%";
  }

  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }

  function singleRoom() {
    alert("Details for Single Room: Spacious room with one bed, study desk, and wardrobe.");
  }

  function doubleRoom() {
    alert("Details for Double Room: Comfortable room with two beds, study desks, and shared wardrobe.");
  }

  function tripleRoom() {
    alert("Details for Triple Room: Affordable room with three beds, study desks, and shared wardrobe.");
  }

  function aboutus() {

    var about = document.getElementById('Riverside-about');
    about.scrollIntoView({
      block: 'start',
      behavior: 'smooth',
      inline: 'start'
    });
  }



  function rooms() {

    var about = document.getElementById('rooms');
    about.scrollIntoView({
      block: 'start',
      behavior: 'smooth',
      inline: 'start'
    });
  }


  function image() {

    var about = document.getElementById('gallery');
    about.scrollIntoView({
      block: 'start',
      behavior: 'smooth',
      inline: 'start'
    });
  }


  function home() {

    var about = document.getElementById('sec');
    about.scrollIntoView({
      block: 'start',
      behavior: 'smooth',
      inline: 'start'
    });
  }





</script>