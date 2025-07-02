


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





<!-- HTML Main Container Start -->
<!-- <div class="event_pg_container">
  <section class="event_pg_banner">
    <img src="./images/school-building.jpg" alt="School Building">
    <div class="event_pg_banner_text">
      <h1>News and Events</h1>
      <p>Where Young Dreams Take Flight</p>
    </div>
    <div class="event_pg_ribbon">
      <span>25<br>Years of<br>Excellence</span>
    </div>
  </section> -->
  <!-- Banner Section End -->








  
   <section class="about_section_head_main" >
    <div class="about_section_head_overlay"></div>
    <div class="about_section_head_content">
        <h1>News and Events</h1>
      <p>Where Young Dreams Take Flight</p>
    </div>
    <div class="about_section_head_badge">
      <span>25<br>Years of<br>Excellence</span>
    </div>
  </section>







     <?php
  include 'latest_update_bar.php';
  ?>
   


</div>
<!-- HTML Main Container End -->


 <section class="infrastraction_sec_container">
    <!-- Tabs -->
    <div class="infrastraction">
    </div>
  </section>



<!-- event_pg_event_ Main Section Start -->
<!-- <div class="event_pg_event_wrapper"> -->
  <!-- <div class="event_pg_event_nav">
    <span class="event_pg_event_tab active">News</span>
    <span class="event_pg_event_tab">Events</span>
    <span class="event_pg_event_tab">Calendar</span>
  </div> -->


   <!-- <div class="tab_nav">
      <div class="tab_button active" data-tab="news">News</div>
      <div class="tab_button" data-tab="events">Events</div>
      <div class="tab_button" data-tab="calendar">Calendar</div>
    </div> -->



  <!-- <div class="event_pg_event_card">
    <div class="event_pg_event_card_header">
      <span class="event_pg_event_minus">&#8722;</span>
      <span class="event_pg_event_title">CBSE SSC 480 & Above</span>
    </div>
    <div class="event_pg_event_card_body">
      <p>Lorem ipsum dolor sit amet consectetur. In sit varius amet in risus dolor et egestas. Mi tincidunt ut lacus diam sapien ipsum sit orci integer...</p>
      <div class="event_pg_event_gallery">
        <div></div><div></div><div></div><div></div>
      </div>
      <div class="event_pg_event_card_footer">
        <span>CBSE SSC 480 & Above</span>
        <span>07 Jun, 2024 | Academics</span>
      </div>
    </div>
  </div>

  <div class="event_pg_event_card collapsed">
    <div class="event_pg_event_card_header">
      <span class="event_pg_event_plus">&#x2b;</span>
      <span class="event_pg_event_title">CBSE SSC 480 & Above</span>
    </div>
  </div> -->

  <!-- Add more collapsed cards as needed -->
<!-- </div> -->
<!-- event_pg_event_ Main Section End -->




  <div class="main_container">
    <!-- Tabs Navigation -->
    <div class="tab_nav">
      <div class="tab_button active" data-tab="news">News</div>
      <div class="tab_button" data-tab="events">Events</div>
      <div class="tab_button" data-tab="calendar">Calendar</div>
    </div>

    <!-- News Content -->
  <?php
include('connect.php');

// Fetch news/events
$query = "SELECT * FROM news_events ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<div class="tab_content active" id="news">

  <?php while ($row = mysqli_fetch_assoc($result)): ?>
    <?php $images = explode(',', $row['gallery']); ?>

    <div class="card">
      <div class="card_header ">
        <div class="card_toggle" onclick="this.parentElement.parentElement.querySelector('.card_body').classList.toggle('d-none')">−</div>
        <div class="card_title"><?= htmlspecialchars($row['title']) ?></div>
      </div>

      <div class="card_body">
        <p><?= nl2br(htmlspecialchars($row['description'])) ?></p>

        <div class="event_pg_event_gallery ">
          <?php foreach ($images as $img): ?>
            <?php if (trim($img) != ''): ?>
              <div>
                <img src="uploads/<?= htmlspecialchars(trim($img)) ?>" alt="event image" width="100%" height="100%" style="object-fit:cover; border-radius:6px;">
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>

        <div class="card_footer ">
          <span><?= htmlspecialchars($row['category']) ?></span>
          <span><?= date("d M, Y", strtotime($row['date'])) ?></span>
        </div>
      </div>
    </div>
  <?php endwhile; ?>

</div>







    <!-- Events Content -->
<?php
include('connect.php');

// Fetch events from the `events` table
$query = "SELECT * FROM events ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<div class="tab_content" id="events">
  <?php while ($row = mysqli_fetch_assoc($result)): ?>
    <?php $images = explode(',', $row['images']); ?>

    <div class="card mb-3 shadow-sm">
      <div class="card_header d-flex justify-content-between align-items-center p-3 bg-light">
        <div class="card_title fw-bold"><?= htmlspecialchars($row['title']) ?></div>
        <div class="card_toggle" onclick="this.closest('.card').querySelector('.card_body').classList.toggle('d-none')">−</div>
      </div>

      <div class="card_body p-3">
        <p><?= nl2br(htmlspecialchars($row['description'])) ?></p>

        <div class="event_pg_event_gallery row g-2 mb-3">
          <?php foreach ($images as $img): ?>
            <?php if (trim($img) != ''): ?>
              <div class="col-md-3 col-sm-4 col-6">
                <img src="uploads/<?= htmlspecialchars(trim($img)) ?>" alt="event image" class="img-fluid rounded" style="object-fit: cover; height: 150px; width: 100%;">
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>

        <div class="card_footer d-flex justify-content-between align-items-center bg-light p-2 rounded">
          <span class="badge bg-info text-dark"><?= htmlspecialchars($row['category']) ?></span>
          <span class="text-muted small"><?= date("d M, Y", strtotime($row['event_date'])) ?></span>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
</div>






    
    <!-- Calendar Content -->
    <!-- <div class="tab_content" id="calendar">
      <table class="calendar_table">
        <tr>
          <td>Academic Calendar 2025 – 2026</td>
          <td><a href="#">[View here]</a></td>
        </tr>
        <tr>
          <td>Academic Calendar 2024 – 2025</td>
          <td><a href="#">[View here]</a></td>
        </tr>
        <tr>
          <td>Academic Calendar 2023 – 2024</td>
          <td><a href="#">[View here]</a></td>
        </tr>
      </table>
    </div> -->


<!-- Replace your static HTML with this -->
<div class="tab_content" id="calendar">
  <table class="calendar_table">
    <?php
    include 'connect.php';
    $result = mysqli_query($conn, "SELECT * FROM academic_calendar ORDER BY uploaded_at DESC");
    while($row = mysqli_fetch_assoc($result)):
    ?>
    <tr>
      <td><?= htmlspecialchars($row['title']) ?></td>
      <td><a href="uploads/calendars/<?= $row['file_path'] ?>" target="_blank">[View here]</a></td>
    </tr>
    <?php endwhile; ?>
  </table>
</div>




  </div>
   


    <?php include 'footer.php'; ?>



<!-- ============================ -->

  <script>
    // Tab Switching
    const tabButtons = document.querySelectorAll('.tab_button');
    const tabContents = document.querySelectorAll('.tab_content');

    tabButtons.forEach(button => {
      button.addEventListener('click', () => {
        tabButtons.forEach(btn => btn.classList.remove('active'));
        tabContents.forEach(content => content.classList.remove('active'));

        button.classList.add('active');
        document.getElementById(button.dataset.tab).classList.add('active');
      });
    });

    // Expand/Collapse Cards
    document.querySelectorAll('.card_header').forEach(header => {
      header.addEventListener('click', () => {
        const body = header.nextElementSibling;
        const toggle = header.querySelector('.card_toggle');
        const isOpen = body.style.display === 'block';

        body.style.display = isOpen ? 'none' : 'block';
        toggle.textContent = isOpen ? '+' : '−';
      });
    });
  </script>


<!-- event------- -->
 <script>
  document.querySelectorAll('.card_toggle').forEach(btn => {
    btn.addEventListener('click', () => {
      const body = btn.closest('.card').querySelector('.card_body');
      body.classList.toggle('d-none');
      btn.textContent = body.classList.contains('d-none') ? '+' : '−';
    });
  });
</script>

</body>

</html>
