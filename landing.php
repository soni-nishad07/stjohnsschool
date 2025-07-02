


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>St. John's High School</title>
  <link rel="stylesheet" href="style.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Roboto&display=swap" rel="stylesheet">


  <style>
    /* home_pg_main_wrapper */
body, html {
  margin: 0;
  padding: 0;
  font-family: 'Roboto', sans-serif;
  color: #333;
}

.home_pg_main_wrapper {
  width: 100%;
  overflow-x: hidden;
}

/* home_pg_hero_section */
.home_pg_hero_section {
  background: url('https://via.placeholder.com/1200x600') no-repeat center center/cover;
  position: relative;
  height: 90vh;
  display: flex;
  align-items: center;
  justify-content: center;
}

.home_pg_overlay {
  background: rgba(0, 0, 0, 0.5);
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.home_pg_hero_content {
  text-align: center;
  color: #fff;
  position: relative;
}

.home_pg_hero_content h1 {
  font-size: 2.5rem;
  margin-bottom: 0.5rem;
}

.home_pg_hero_content h1 span {
  font-family: 'Playfair Display', serif;
}

.home_pg_tagline {
  font-size: 1.3rem;
  margin-bottom: 1rem;
  color: #f9c938;
  font-style: italic;
}

.home_pg_buttons {
  margin: 1rem 0;
}

.home_pg_btn {
  padding: 10px 20px;
  margin: 0 5px;
  font-size: 1rem;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}

.home_pg_btn.yellow {
  background-color: #f9c938;
  color: #000;
}

.home_pg_btn.dark {
  background-color: #333;
  color: #fff;
}

.home_pg_badge {
  position: absolute;
  top: 10px;
  right: 10px;
  background: #f9c938;
  border-radius: 50%;
  width: 70px;
  height: 70px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 0.8rem;
  font-weight: bold;
  text-align: center;
  color: #000;
}

/* home_pg_intro_section */
.home_pg_intro_section {
  padding: 3rem 1rem;
  background-color: #fff;
}

.home_pg_intro_container {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-around;
  gap: 2rem;
  margin-bottom: 2rem;
}

.home_pg_intro_image img {
  max-width: 100%;
  border-radius: 10px;
}

.home_pg_intro_text {
  max-width: 600px;
}

.home_pg_intro_text h2 {
  margin-bottom: 1rem;
}

.home_pg_intro_text blockquote {
  font-style: italic;
  color: #555;
  margin-top: 1rem;
  border-left: 4px solid #f9c938;
  padding-left: 1rem;
}

/* home_pg_features */
.home_pg_features {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 2rem;
  margin-top: 2rem;
}

.home_pg_feature_item {
  text-align: center;
  max-width: 150px;
}

.home_pg_feature_item img {
  width: 40px;
  height: 40px;
  margin-bottom: 0.5rem;
}

/* home_pg_admission_cta */
.home_pg_admission_cta {
  background-color: #001f4d;
  color: #fff;
  text-align: center;
  padding: 2rem 1rem;
}

.home_pg_admission_cta h2 {
  margin-bottom: 1rem;
}

/* home_pg_footer_features */
.home_pg_footer_features {
  padding: 2rem 1rem;
  background-color: #f5f5f5;
}

.home_pg_feature_grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 2rem;
}

/* Responsive */
@media (max-width: 768px) {
  .home_pg_hero_content h1 {
    font-size: 2rem;
  }

  .home_pg_intro_container {
    flex-direction: column;
  }

  .home_pg_badge {
    width: 60px;
    height: 60px;
    font-size: 0.7rem;
  }
}

  </style>


</head>


<body>

  <!-- home_pg_main_wrapper start -->
  <div class="home_pg_main_wrapper">

    <!-- home_pg_hero_section start -->
    <section class="home_pg_hero_section">
      <div class="home_pg_overlay">
        <div class="home_pg_hero_content">
          <h1>Welcome to<br> <span>St. John's High School</span></h1>
          <p class="home_pg_tagline"><em>Where <strong>Young Dreams</strong> Take Flight</em></p>
          <div class="home_pg_buttons">
            <button class="home_pg_btn yellow">Apply Now</button>
            <button class="home_pg_btn dark">Take a Virtual Tour</button>
          </div>
          <div class="home_pg_badge">
            <span>25<br>Years of Excellence</span>
          </div>
        </div>
      </div>
    </section>
    <!-- home_pg_hero_section end -->

    <!-- home_pg_intro_section start -->
    <section class="home_pg_intro_section">
      <div class="home_pg_intro_container">
        <div class="home_pg_intro_image">
          <img src="https://via.placeholder.com/300x200" alt="School Building">
        </div>
        <div class="home_pg_intro_text">
          <h2>Welcome to Our School</h2>
          <p>
            With 25 years of excellence in education, St. John's High School is dedicated to nurturing a future-ready generation where students are encouraged to excel academically and personally. Our commitment to varied development ensures that we don’t just teach subjects—we shape futures.
          </p>
          <blockquote>“We don’t just teach subjects—we shape futures.”</blockquote>
        </div>
      </div>

      <div class="home_pg_features">
        <div class="home_pg_feature_item">
          <img src="https://img.icons8.com/ios-filled/50/school.png" alt="Infrastructure Icon"/>
          <p>Modern Infrastructure</p>
        </div>
        <div class="home_pg_feature_item">
          <img src="https://img.icons8.com/ios-filled/50/classroom.png" alt="Faculty Icon"/>
          <p>Experienced Faculty</p>
        </div>
        <div class="home_pg_feature_item">
          <img src="https://img.icons8.com/ios-filled/50/medal.png" alt="Academic Icon"/>
          <p>Academic Excellence</p>
        </div>
        <div class="home_pg_feature_item">
          <img src="https://img.icons8.com/ios-filled/50/heart-with-pulse.png" alt="Holistic Icon"/>
          <p>Values & Holistic Learning</p>
        </div>
      </div>
    </section>
    <!-- home_pg_intro_section end -->

    <!-- home_pg_admission_cta start -->
    <section class="home_pg_admission_cta">
      <h2>Join a legacy of excellence. Admissions are open now!</h2>
      <button class="home_pg_btn yellow">Apply Now</button>
    </section>
    <!-- home_pg_admission_cta end -->

    <!-- home_pg_footer_features start -->
    <section class="home_pg_footer_features">
      <div class="home_pg_feature_grid">
        <div>
          <h4>Modern Infrastructure</h4>
          <p>Modern learning setups with a focus on creativity and innovation.</p>
        </div>
        <div>
          <h4>Experienced Faculty</h4>
          <p>Passionate, knowledgeable, and dedicated to excellence.</p>
        </div>
        <div>
          <h4>Academic Excellence</h4>
          <p>Consistently high results and Olympiad achievements.</p>
        </div>
        <div>
          <h4>Values & Holistic Learning</h4>
          <p>Emphasis on emotional intelligence and ethical values.</p>
        </div>
      </div>
    </section>
    <!-- home_pg_footer_features end -->

  </div>
  <!-- home_pg_main_wrapper end -->

</body>
</html>

