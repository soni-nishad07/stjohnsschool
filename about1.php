<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Us | St. John's High School</title>

    <?php
  include 'link.php';
  ?>


</head>




<body>


    <?php
  include 'nav.php';
  ?>





  <!-- ================== ABOUT SECTION HTML START ================== -->
  <section class="about_section_head_main">
    <div class="about_section_head_overlay"></div>
    <div class="about_section_head_content">
      <h1>About Us</h1>
      <p>Where Young Dreams Take Flight</p>
    </div>
    <div class="about_section_head_badge">
      25<br><span>Years of<br>Excellence</span>
    </div>
  </section>
  <!-- ================== ABOUT SECTION HTML END ================== -->



  <?php
  include 'latest_update_bar.php';
  ?>
   



   <!-- ============ ABOUT SECTION WELCOME HTML START ============ -->
  <section class="about_section_welcome_wrapper"  id="about">
    <div class="about_section_welcome_left">
      <h2>Welcome to St. John’s High School</h2>
      <img src="images/wlc-building.jpg" alt="St John's School"  class="fade-up" />
      <p>Established 25 years ago, St. John’s High School has been a beacon of quality education and holistic development. We are proud to have shaped thousands of young minds into responsible, confident, and successful individuals.</p>
      <p>At St. John's, we believe in nurturing not just academic excellence but also character, creativity, and compassion. Our experienced and dedicated teachers provide a supportive environment where students are encouraged to think critically and dream big.</p>
      <p>Over the years, our school has consistently achieved outstanding academic results and has won accolades in sports, arts, and extracurricular activities. Our modern classrooms, science and computer labs, and well-stocked library provide students with the tools they need to succeed.</p>
      <p>We focus on values-based education, fostering integrity, respect, and empathy in every student. Regular events, field trips, and cultural programs ensure all-round development and joyful learning.<br>
      With 25 years of trust, excellence, and commitment to education, St. John's High School continues to be a place where young dreams take flight.</p>
      <p><strong>Join us in building a brighter future, one student at a time.</strong></p>
    </div>




  <?php
include('connect.php');

// Fetch latest 3 news items
$query = "SELECT * FROM news_events ORDER BY date DESC LIMIT 3";
$result = mysqli_query($conn, $query);
?>

<div class="about_section_welcome_right">
    <h3>News & Announcements</h3>

    <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <?php
            $timestamp = strtotime($row['date']);
            $month = strtoupper(date('M', $timestamp));
            $day = date('d', $timestamp);
            $year = date('Y', $timestamp);
        ?>
        <div class="about_section_welcome_news_item">
            <div class="about_section_welcome_date">
                <strong><?= $month ?></strong>
                <span><?= $day ?><br><?= $year ?></span>
            </div>
            <div>
                <a href="#"><?= htmlspecialchars($row['title']) ?></a><br>
                <span><?= htmlspecialchars($row['category']) ?></span>
            </div>
        </div>
    <?php endwhile; ?>

    <a href="news.php" class="about_section_welcome_btn">View All</a>
</div>




  </section>
  <!-- ============ ABOUT SECTION WELCOME HTML END ============ -->




  <!-- about_pg_mission_ Section Start -->
<section class="about_pg_mission_"  id="mission">
  <div class="mission_container_">
    <div class="mission_content_">
      <h2 class="mission_heading_">Our Mission</h2>
      <div class="mission_box_">
        <img src="images/mission.png" alt="Our Mission" class="mission_image_">
        <p class="mission_text_">
          At St. John's High School, we are committed to fostering academic excellence, character development, and leadership skills in young men. Our mission is to create an inclusive and nurturing environment that empowers students to become critical thinkers, responsible citizens, and compassionate leaders who contribute positively to society.
        </p>
      </div>
    </div>

    <div class="vision_content_"  id="vision">
      <h2 class="vision_heading_">School Vision</h2>
      <p class="vision_text_">
        At St. John’s High School, we strive to nurture young minds into compassionate, disciplined, and innovative leaders. Our vision is to foster a supportive and challenging environment where every student achieves their fullest potential academically, socially, and morally. We aim to inspire lifelong learning, instill a sense of responsibility, and empower our students to make meaningful contributions to society. Through integrity, perseverance, and teamwork, St. John’s High School will continue to be a beacon of excellence in education and a foundation for success in the future.
      </p>
    </div>
  </div>
</section>
<!-- about_pg_mission_ Section End -->


    <?php include 'footer.php'; ?>


</body>

</html>

