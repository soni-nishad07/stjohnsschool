


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



<div class="gallery_head_">

        <!-- <div class="hero">
            <div>
                <h1>Gallery</h1>
                <p>Where Young Dreams Take Flight</p>
            </div>
            <div class="badge">
                25<br>Years of<br>Excellence
            </div>
        </div> -->




          
  <!-- HTML Main Container Start -->
<div class="event_pg_container">
  <!-- Banner Section Start -->
  <section class="event_pg_banner">
    <img src="./images/school-building.jpg" alt="School Building">
    <div class="event_pg_banner_text">
    <h1>Gallery</h1>
                <p>Where Young Dreams Take Flight</p>
    </div>
    <div class="event_pg_ribbon">
      <span>25<br>Years of<br>Excellence</span>
    </div>
  </section>
  <!-- Banner Section End -->


          <?php
  include 'latest_update_bar.php';
  ?>

    </div>

<!-- gallery_cate_img main class end -->




<div class="gallery_cate_img">

  <div class="gallery_layout">

    <!-- Main Gallery -->
    <div class="gallery_main" id="gallery-container">
  <div class="gallery-container">
    <h2>Photos</h2>
    <div class="underline"></div>

    <div class="gyl_" id="galleryPages">
      <!-- Page 1 -->
      <div class="page" style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
        <div class="gyl_-item">
          <div class="top-box">➕</div>
          <div class="view-bar">View</div>
          <div class="title">Photos of school activities</div>
        </div>

        <div class="gyl_-item">
          <div class="top-box"></div>
          <div class="title">Independence day</div>
        </div>

        <div class="gyl_-item">
          <div class="top-box"></div>
          <div class="title">Children’s day</div>
        </div>

        <div class="gyl_-item">
          <div class="top-box"></div>
          <div class="title">Christmas day</div>
        </div>

        <div class="gyl_-item">
          <div class="top-box"></div>
          <div class="title">Annual day</div>
        </div>

        <div class="gyl_-item">
          <div class="top-box"></div>
          <div class="title">Sports day</div>
        </div>
      </div>

      <!-- Page 2 -->
      <div class="page" style="display: none; flex-wrap: wrap; gap: 20px; justify-content: center;">
        <div class="gyl_-item">
          <div class="top-box"></div>
          <div class="title">Christmas day</div>
        </div>

        <div class="gyl_-item">
          <div class="top-box"></div>
          <div class="title">Annual day</div>
        </div>

        <div class="gyl_-item">
          <div class="top-box"></div>
          <div class="title">Republic Day</div>
        </div>

        <div class="gyl_-item">
          <div class="top-box"></div>
          <div class="title">Science Fair</div>
        </div>

        <div class="gyl_-item">
          <div class="top-box"></div>
          <div class="title">Parent’s Day</div>
        </div>

        <div class="gyl_-item">
          <div class="top-box"></div>
          <div class="title">Farewell</div>
        </div>
      </div>
    </div>

    <div class="nav-buttons">
      <button onclick="prevPage()">Previous</button>
      <button onclick="nextPage()">Next</button>
    </div>
  </div>    </div>

    <!-- Sidebar Category -->
    <div class="gallery_sidebar">
      <h4>Gallery Category</h4>
      <input type="text" placeholder="Search Category..">
      <ul>
        <li>All</li>
        <li>Photos of school activities</li>
        <li>Independence day</li>
        <li>Children’s day</li>
        <li>Christmas day</li>
        <li>Annual Day</li>
      </ul>
    </div>
  </div>


</div>
<!-- gallery_cate_img main class end -->









  <script>
    const pages = document.querySelectorAll("#galleryPages .page");
    let current = 0;

    function showPage(index) {
      pages.forEach((page, i) => {
        page.style.display = i === index ? 'flex' : 'none';
      });
    }

    function nextPage() {
      if (current < pages.length - 1) {
        current++;
        showPage(current);
      }
    }

    function prevPage() {
      if (current > 0) {
        current--;
        showPage(current);
      }
    }

    showPage(current);
  </script>


    <?php include 'footer.php'; ?>


</body>

</html>




<!-- ============================== -->
