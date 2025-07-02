

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>St. John's High School</title>

    <?php
  include 'link.php';
  ?>


</head>




<body>


    <?php
  include 'nav.php';
  ?>


  <!-- uniform_pg_ Main Container Start -->
  <div class="uniform_pg_main_container">

    <!-- Header -->
    <!-- <header class="uniform_pg_header">
      <div class="uniform_pg_topbar">
        <div class="uniform_pg_logo">
          <img src="logo.png" alt="School Logo">
        </div>
        <div class="uniform_pg_contact">
          <span>Call Us</span>
          <span>Email us</span>
        </div>
      </div>

      <nav class="uniform_pg_navbar">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Academics</a></li>
          <li><a href="#">Houses</a></li>
          <li><a href="#">News</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </header> -->



    <!-- Hero Section -->
    <!-- <section class="uniform_pg_hero">
      <img src="images/classroom.jpg" alt="Classroom">
      <div class="uniform_pg_hero_text">
        <h1>Uniform</h1>
        <p>Where Young Dreams Take Flight</p>
        <div class="uniform_pg_badge">25<br>Years of<br>Excellence</div>
      </div>
    </section> -->



       
  <!-- Banner Section Start -->
<!-- <div class="event_pg_container">
  <section class="event_pg_banner">
    <img src="./images/classroom.jpg" alt="School Building">
    <div class="event_pg_banner_text">
     <h1>Uniform</h1>
        <p>Where Young Dreams Take Flight</p>
    </div>
    <div class="event_pg_ribbon">
      <span>25<br>Years of<br>Excellence</span>
    </div>
  </section> -->
  <!-- Banner Section End -->




       <section class="about_section_head_main" style="background-image: url('./images/classroom.jpg');">
    <div class="about_section_head_overlay"></div>
    <div class="about_section_head_content">
      <h1>Uniform</h1>
        <p>Where Young Dreams Take Flight</p>
    </div>
    <div class="about_section_head_badge">
      <span>25<br>Years of<br>Excellence</span>
    </div>
  </section>



    <!-- Marquee -->
              <?php
  include 'latest_update_bar.php';
  ?>
   







    <!-- Gallery -->
    <section class="uniform_pg_gallery">
      <img src="./images/img1.png" alt=""   class="gallery-zoom-in">
      <img src="./images/img2.png" alt=""   class="gallery-zoom-in">
      <img src="./images/img3.png" alt=""   class="gallery-zoom-in">
      <img src="./images/img4.png" alt=""   class="gallery-zoom-in">
      <img src="./images/img5.png" alt=""   class="gallery-zoom-in">
      <img src="./images/img6.png" alt=""   class="gallery-zoom-in">
    </section>
  </div>
  <!-- uniform_pg_ Main Container End -->




  
  <!-- uniform_schedule_ Main Container Start -->
  <section class="uniform_schedule_container">

    <!-- Monday -->
    <div class="uniform_schedule_day">
      <h2 class="uniform_schedule_heading">Monday</h2>
      <div class="uniform_schedule_flex">
        <div class="uniform_schedule_column  animate-from-top">
          <h3>Boys</h3>
          <ul>
            <li>White Half Pant</li>
            <li>White Half Sleeve Shirt</li>
            <li>School Tie</li>
            <li>School Belt</li>
            <li>White Socks</li>
            <li>White Shoes</li>
          </ul>
        </div>
        <div class="uniform_schedule_column   animate-from-top">
          <h3>Girls</h3>
          <ul>
            <li>White Pinafore</li>
            <li>White Shirt</li>
            <li>School Tie</li>
            <li>School Belt</li>
            <li>White Socks</li>
            <li>White Shoes</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Tuesday to Friday -->
    <div class="uniform_schedule_day">
      <h2 class="uniform_schedule_heading">Tuesday to friday</h2>
      <div class="uniform_schedule_flex">
        <div class="uniform_schedule_column   animate-from-top">
          <h3>Boys</h3>
          <ul>
            <li>Khaki Half Pant</li>
            <li>Khaki Half Sleeve Shirt</li>
            <li>School Tie</li>
            <li>School Belt</li>
            <li>Black Socks</li>
            <li>Black Shoes</li>
          </ul>
        </div>
        <div class="uniform_schedule_column   animate-from-top">
          <h3>Girls</h3>
          <ul>
            <li>Navy Blue Pinafore</li>
            <li>White Shirt</li>
            <li>School Tie</li>
            <li>School Belt</li>
            <li>White Socks</li>
            <li>Black Shoes</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Saturday -->
    <div class="uniform_schedule_day">
      <h2 class="uniform_schedule_heading">Saturday</h2>
      <div class="uniform_schedule_flex">
        <div class="uniform_schedule_column  animate-from-top">
          <h3>Boys</h3>
          <ul>
            <li>White Pant & House T-Shirt</li>
            <li>White Socks & Shoes</li>
          </ul>
        </div>
        <div class="uniform_schedule_column   animate-from-top">
          <h3>Girls</h3>
          <ul>
            <li>White Skirt & House T-Shirt</li>
            <li>White Socks & Shoes</li>
          </ul>
        </div>
      </div>
    </div>

  </section>
  <!-- uniform_schedule_ Main Container End -->




      <?php include 'footer.php'; ?>


  
</body>
</html>
