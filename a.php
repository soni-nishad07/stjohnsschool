



<!-- Testimonials Section Start -->
<section class="home_glance_testimonials">
  <h2>Testimonials</h2>
  <div class="home_glance_testimonial_container">

    <!-- Arrows -->
    <div class="home_glance_arrows">
      <button class="home_glance_arrow" id="prev">&#8592;</button>
      <button class="home_glance_arrow" id="next">&#8594;</button>
    </div>

    <div class="home_glance_testimonial_wrapper" id="testimonialWrapper">

      <!-- Group 1 -->
      <div class="home_glance_testimonial_group">
        <div class="home_glance_testimonial_card">
          <p>St. John's High School provides an excellent working environment...</p>
          <div class="home_glance_author">Shweta P (EX Teacher)</div>
        </div>
        <div class="home_glance_testimonial_card">
          <p>The school's infrastructure is impressive, and the curriculum is top-notch...</p>
          <div class="home_glance_author">Kirandeep Kaur (EX Teacher)</div>
        </div>
      </div>

      <!-- Group 2 -->
      <div class="home_glance_testimonial_group">
        <div class="home_glance_testimonial_card">
          <p>St. John's High School has been an excellent choice for my children...</p>
          <div class="home_glance_author">Nethravathi D (Parent)</div>
        </div>
        <div class="home_glance_testimonial_card">
          <p>The school campus is spacious and offers excellent learning opportunities...</p>
          <div class="home_glance_author">Geeta (Parent)</div>
        </div>
      </div>

      <!-- Group 3 -->
      <div class="home_glance_testimonial_group">
        <div class="home_glance_testimonial_card">
          <p>I’m truly proud to be a part of the St. John's family.</p>
          <div class="home_glance_author">Pragath Kumar (EX Student)</div>
        </div>
        <div class="home_glance_testimonial_card">
          <p>St. John's wasn’t just the place I went to school. It’s where I became.</p>
          <div class="home_glance_author">Chandra Shekar (EX Student)</div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- Testimonials Section End -->

<!-- Style -->
<style>
  .home_glance_testimonials {
    padding: 50px 20px;
    background: #f9f9f9;
    text-align: center;
  }

  .home_glance_testimonial_container {
    position: relative;
    max-width: 1000px;
    margin: auto;
  }

  .home_glance_testimonial_wrapper {
    position: relative;
    overflow: hidden;
  }

  .home_glance_testimonial_group {
    display: none;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    transition: opacity 0.5s ease-in-out;
  }

  .home_glance_testimonial_group.active {
    display: flex;
  }

  .home_glance_testimonial_card {
    flex: 1 1 45%;
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    font-style: italic;
  }

  .home_glance_author {
    margin-top: 15px;
    font-weight: bold;
    font-style: normal;
    text-align: right;
    color: #333;
  }

  .home_glance_arrows {
    margin-bottom: 20px;
  }

  .home_glance_arrow {
    background: #004080;
    color: white;
    border: none;
    padding: 10px 15px;
    margin: 0 10px;
    font-size: 18px;
    border-radius: 5px;
    cursor: pointer;
  }

  .home_glance_arrow:hover {
    background: #002b5c;
  }
</style>

<!-- Slider Script -->
<script>
  const groups = document.querySelectorAll(".home_glance_testimonial_group");
  const nextBtn = document.getElementById("next");
  const prevBtn = document.getElementById("prev");

  let currentGroup = 0;
  let interval;

  function showGroup(index) {
    groups.forEach((group, i) => {
      group.classList.toggle("active", i === index);
    });
  }

  function nextGroup() {
    currentGroup = (currentGroup + 1) % groups.length;
    showGroup(currentGroup);
  }

  function prevGroup() {
    currentGroup = (currentGroup - 1 + groups.length) % groups.length;
    showGroup(currentGroup);
  }

  function startAutoSlide() {
    interval = setInterval(nextGroup, 2000); // 2 seconds
  }

  function resetAutoSlide() {
    clearInterval(interval);
    startAutoSlide();
  }

  nextBtn.addEventListener("click", () => {
    nextGroup();
    resetAutoSlide();
  });

  prevBtn.addEventListener("click", () => {
    prevGroup();
    resetAutoSlide();
  });

  // Initialize
  showGroup(currentGroup);
  startAutoSlide();
</script>
