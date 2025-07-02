<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gallery - St. John's High School</title>
  <?php include 'link.php'; ?>

</head>

<body>
<?php include 'nav.php'; ?>

<!-- <div class="event_pg_container">
  <section class="event_pg_banner">
    <img src="./images/school-building.jpg" alt="School Building">
    <div class="event_pg_banner_text">
      <h1>Gallery</h1>
      <p>Where Young Dreams Take Flight</p>
    </div>
    <div class="event_pg_ribbon">
      <span>25<br>Years of<br>Excellence</span>
    </div>
  </section> -->



   <section class="about_section_head_main">
    <div class="about_section_head_overlay"></div>
    <div class="about_section_head_content">
      <h1>Gallery</h1>
      <p>Where Young Dreams Take Flight</p>
    </div>
    <div class="about_section_head_badge">
      <span>25<br>Years of<br>Excellence</span>
    </div>
  </section>
  

  <?php include 'latest_update_bar.php'; ?>
</div>

<?php
include('connect.php');

// Get one image per event
$query = "SELECT * FROM gallery WHERE id IN (SELECT MIN(id) FROM gallery GROUP BY event_name) ORDER BY uploaded_at DESC";
$result = mysqli_query($conn, $query);
$events = [];
while ($row = mysqli_fetch_assoc($result)) {
  $events[] = $row;
}

// Get distinct categories
$cat_query = "SELECT DISTINCT event_name FROM gallery ORDER BY event_name ASC";
$cat_result = mysqli_query($conn, $cat_query);
?>

<div class="gallery_cate_img">
  <div class="gallery_layout">
    <!-- Sidebar -->
  

    <!-- Main Content -->
    <div class="gallery_main">
      <h2 class="text-center">Gallery</h2>
      <div class="underline"></div>

      <div class="gyl_" id="galleryWrapper"></div>

      <div class="nav-buttons">
        <button onclick="prevPage()">Previous</button>
        <button onclick="nextPage()">Next</button>
      </div>
    </div>


      <div class="gallery_sidebar">
      <h4>Gallery Category</h4>
      <input type="text" id="searchBox" placeholder="Search category..." />
      <ul id="categoryList">
        <li class="active" onclick="filterGallery('all')">All</li>
        <?php while ($cat = mysqli_fetch_assoc($cat_result)): ?>
          <li onclick="filterGallery('<?= htmlspecialchars($cat['event_name']) ?>')">
            <?= htmlspecialchars($cat['event_name']) ?>
          </li>
        <?php endwhile; ?>
      </ul>
    </div>



  </div>
</div>

<script>
  const allEvents = <?= json_encode($events); ?>;
  let filtered = [...allEvents];
  let pages = [];
  let current = 0;
  const perPage = 6;

  function renderPages(data) {
    const wrapper = document.getElementById("galleryWrapper");
    wrapper.innerHTML = '';

    const chunks = [];
    for (let i = 0; i < data.length; i += perPage) {
      chunks.push(data.slice(i, i + perPage));
    }

    pages = chunks.map((group) => {
      const page = document.createElement("div");
      page.className = "page";
      group.forEach(ev => {
        const item = document.createElement("div");
        item.className = "gyl_-item   ";
        item.innerHTML = `
        <div class="image-container">
          <img src="uploads/${ev.image_name}" alt="${ev.alt_text}">
          <a class="view-more" href="gallery_details.php?event=${encodeURIComponent(ev.event_name)}">View More</a>
        </div>
        <div class="info">
          <div class="title">${ev.event_name}</div>
        </div>
      `;

        page.appendChild(item);
      });
      wrapper.appendChild(page);
      return page;
    });

    showPage(current = 0);
    document.querySelector('.nav-buttons').style.display = pages.length > 1 ? 'block' : 'none';
  }

  function showPage(index) {
    pages.forEach((pg, i) => {
      pg.style.display = i === index ? 'flex' : 'none';
    });
  }

  function nextPage() {
    if (current < pages.length - 1) showPage(++current);
  }

  function prevPage() {
    if (current > 0) showPage(--current);
  }

  function filterGallery(cat) {
    document.querySelectorAll("#categoryList li").forEach(li => li.classList.remove("active"));
    [...document.querySelectorAll("#categoryList li")].find(li => li.textContent.trim().toLowerCase() === cat.toLowerCase())?.classList.add("active");

    if (cat === 'all') {
      filtered = [...allEvents];
    } else {
      filtered = allEvents.filter(ev => ev.event_name.toLowerCase() === cat.toLowerCase());
    }
    renderPages(filtered);
  }

  document.getElementById("searchBox").addEventListener("input", function () {
    const query = this.value.toLowerCase();
    filtered = allEvents.filter(ev => ev.event_name.toLowerCase().includes(query));
    renderPages(filtered);
  });

  renderPages(filtered);
</script>

<?php include 'footer.php'; ?>
</body>
</html>
