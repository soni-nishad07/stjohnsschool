


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>St. John's High School</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />


    <?php
  include 'link.php';
  ?>


</head>




<body>


    <?php
  include 'nav.php';
  ?>





    <!-- <section class="hero">
        <div class="hero-content">
            <p>Welcome to <br />St. John's High School</p>
            <h2><em>Where Young Dreams Take Flight</em></h2>
            <a href="#" class="btn">Discover Our Legacy</a>

            <div class="badge_circle_">
                <div class="badge_text_">
                    <div class="badge_number_">25</div>
                    <div class="badge_label_">Years of<br>Excellence</div>
                </div>
            </div>

        </div>
    </section> -->



       <!-- Carousel Start -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
      aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
      aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
      aria-label="Slide 3"></button>
  </div>

  <!-- Slides -->
  <div class="carousel-inner">
    <!-- Slide 1 -->
    <div class="carousel-item active">
      <img src="./images/classroom.jpg" class="d-block w-100" alt="Slide 1">

        
  <div class="hero_sec_text">
     <p><em>Welcome to </em><br /><span style="color:#db3d44;">John's High School</span></p>
        <h2>Where Young Dreams Take Flight</h2>
        <a href="./about.php" class="btn">Discover Our Legacy</a>
    </div>
    <div class="hero_sec_ribbon">
      <span>25<br>Years of<br>Excellence</span>
    </div>

    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <img src="images/hero (1).png" class="d-block w-100" alt="Slide 2">
   

      <div class="hero_sec_text">
   <p><em>Welcome to </em><br /><span style="color:#db3d44;">John's High School</span></p>
        <h2>Where Young Dreams Take Flight</h2>
        <a href="./about.php" class="btn">Discover Our Legacy</a>
    </div>
    <div class="hero_sec_ribbon">
      <span>25<br>Years of<br>Excellence</span>
    </div>

    </div>

    <!-- Slide 3 -->
    <div class="carousel-item">
      <img src="images/hero (3).png" class="d-block w-100" alt="Slide 3">
    <div class="hero_sec_text">
   <p><em>Welcome to </em><br /><span style="color:#db3d44;">John's High School</span></p>
        <h2>Where Young Dreams Take Flight</h2>
        <a href="./about.php" class="btn">Discover Our Legacy</a>
    </div>
    <div class="hero_sec_ribbon">
      <span>25<br>Years of<br>Excellence</span>
    </div>
    </div>

    <!-- Add more slides as needed (hero4.jpg - hero9.jpg) -->
  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
    data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
    data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel End -->




     <?php
  include 'latest_update_bar.php';
  ?>
   



    <!-- =================== About Us Section Start =================== -->
    <section class="about_tab_section_">
        <div class="about_tab_container_">

            <!-- Tabs -->
            <ul class="about_tab_menu_">
                <li class="active" onclick="openTab(event, 'about_')">ABOUT US</li>
                <li onclick="openTab(event, 'mission_')">MISSION</li>
                <li onclick="openTab(event, 'vision_')">VISION</li>
            </ul>

            <!-- Tab Content -->
            <div id="about_" class="tab_content_ active">
                <div class="tab_flex_wrapper_">
                    <div class="tab_text_   animate-left">
                        <p>Established 25 years ago, St. Johns High School has been a beacon of quality education and
                            holistic
                            development. We are proud to have shaped thousands of young minds into responsible,
                            confident, and
                            successful individuals.
                        </p>
                        <p>
                            At St. Johns, we believe in nurturing not just academic excellence but also character,
                            creativity, and
                            compassion. Our experienced and dedicated teachers provide a supportive environment where
                            students are
                            encouraged to think critically and dream big.</p>
                        <a href="./about.php#about" class="learn_btn_">Learn More</a>
                    </div>
                    <div class="tab_img_   animate-right">
                        <img src="images/students-lab.jpg" alt="Students with teacher">
                    </div>
                </div>
            </div>

            <div id="mission_" class="tab_content_">
                <div class="tab_flex_wrapper_">
                    <div class="tab_text_   animate-left">
                        <p>At St. John’s High School, we are committed to fostering academic excellence, character
                            development, and
                            leadership skills in young men. Our mission is to create an inclusive and nurturing
                            environment that
                            empowers students to become critical thinkers, responsible citizens, and compassionate
                            leaders who
                            contribute positively to society.”</p>
                        <!-- <a href="about.php#mission" class="learn_btn_">Learn More</a> -->
                    </div>
                    <div class="tab_img_   animate-right">
                        <img src="images/mission.jpg" alt="Mission Image">
                    </div>
                </div>
            </div>

            <div id="vision_" class="tab_content_">
                <div class="tab_flex_wrapper_">
                    <div class="tab_text_   animate-left">
                        <p>At St. John’s High School, we strive to nurture young minds into compassionate, disciplined,
                            and
                            innovative leaders. Our vision is to foster a supportive and challenging environment where
                            every student
                            achieves their fullest potential academically, socially, and morally. We aim to inspire
                            lifelong learning,
                            instill a sense of responsibility, and empower our students to make meaningful contributions
                            to society.
                            Through integrity, perseverance, and teamwork, St. John’s High School will continue to be a
                            beacon of
                            excellence in education and a foundation for success in the future.</p>
                        <!-- <a href="about.php#vision" class="learn_btn_">Learn More</a> -->
                    </div>
                    <div class="tab_img_   animate-right">
                        <img src="images/vision.jpg" alt="Vision Image">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- =================== About Us Section End =================== -->




    <!-- =================== News and Announcements Section Start =================== -->
   <?php
include('connect.php');

// Fetch latest 5 news items
$query = "SELECT * FROM news_events ORDER BY date DESC LIMIT 5";
$result = mysqli_query($conn, $query);
?>

<section class="news_announcement_section">
    <div class="container">
        <h2 class="news_title">News and Announcements</h2>
        <div class="news_list">

            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <?php
                    $timestamp = strtotime($row['date']);
                    $month = strtoupper(date('M', $timestamp));
                    $day = date('d', $timestamp);
                    $year = date('Y', $timestamp);
                ?>
                <div class="news_item">
                    <div class="news_date">
                        <span class="news_month"><?= $month ?></span>
                        <span class="news_day"><?= $day ?></span>
                        <span class="news_year"><?= $year ?></span>
                    </div>
                    <div class="news_content">
                        <h4 class="news_heading"><?= htmlspecialchars($row['title']) ?></h4>
                        <p class="news_category"><?= htmlspecialchars($row['category']) ?></p>
                    </div>
                </div>
            <?php endwhile; ?>

        </div>

        <div class="news_button_wrapper">
            <a href="news.php" class="news_view_all_btn">View All</a>
        </div>
    </div>
</section>

    <!-- =================== News and Announcements Section End =================== -->


    <!-- ================== Academic Section Start ================== -->
<?php
include 'connect.php'; // adjust path as needed

$query = "SELECT * FROM academic_approach ORDER BY id ASC";
$result = $conn->query($query);
?>

<section class="home_academic_section" id="academic_approach">
    <div class="home_academic_container">
        <h2 class="home_academic_heading">Academic Approach</h2>
        <div class="home_academic_cards">

            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="home_academic_card  zoom-in">
                    <h3><?= htmlspecialchars($row['title']) ?></h3>
                    <p><?= nl2br(htmlspecialchars($row['description'])) ?></p>
                </div>
            <?php endwhile; ?>

        </div>
    </div>
</section>

    <!-- ================== Academic Section End ================== -->





    <!-- Curriculum Section -->
    <section class="home_academic_curriculum">
        <h2>Our Curriculum</h2>
        <p>Strong in pursuit of unity, growth, and excellence</p>

        <div class="home_academic_curriculum_grid">
            <div class="home_academic_curriculum_item  fade-up  animate-from-top">
                <img src="./images/child.png" alt="Early Childhood">
                <div>
                    <h4>Early Childhood Program (Ages 3-5)</h4>
                    <p>Children between the ages of 3 and 5 years are nurtured in a Montessori environment, including
                        UKG (Upper
                        Kindergarten). </p>
                    <span>This foundational stage focuses on:</span>
                    <ul>
                        <li>Sensorial and experiential learning</li>
                        <li>Motor skill development</li>
                        <li>Language and number readiness</li>
                        <li>Social interaction and independence</li>
                    </ul>
                </div>
            </div>

            <div class="home_academic_curriculum_item  fade-up animate-from-top">
                <img src="./images/faculty.png" alt="Faculty">
                <div>
                    <h4>Qualified & Experienced Faculty</h4>
                    <p>All classes across grades are conducted by qualified, trained, and experienced educators. Our
                        faculty is
                        committed to:</p>
                    <ul>
                        <li>Child-centric teaching</li>
                        <li>Personal attention</li>
                        <li>Continuous academic and character development</li>
                    </ul>
                </div>
            </div>

            <div class="home_academic_curriculum_item  fade-up  animate-from-top">
                <img src="./images//instrustion.png" alt="Syllabus">
                <div>
                    <h4>Syllabus & Language Instruction</h4>
                    <p>St. John’s High School follows the State Syllabus as prescribed by the education board.The medium
                        of
                        instruction is English.</p>
                    <span>Languages taught:</span>
                    <ul>
                        <li>Kannada – Second Language</li>
                        <li>Hindi – Third Language</li>
                    </ul>
                    <p>This multilingual approach ensures cognitive flexibility and cultural grounding.</p>
                </div>
            </div>

            <div class="home_academic_curriculum_item  fade-up   animate-from-top">
                <img src="./images/tech.png" alt="Skills">
                <div>
                    <h4>Tech & Communication Skills</h4>
                    <p>St. John’sStarting from Class 1, students are introduced to:</p>
                    <ul>
                        <li>Computer Science</li>
                        <li>Communication Skills</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>







    <!-- ----------------------------------------- -->

<section class="home_glance_section">
  <h2>The House of Glance</h2>
  <p class="home_glance_subtext">Stands proud, a symbol of unity, growth, and excellence</p>
  <p class="home_glance_subtext">Within it bloom four vibrant groups, each with its own unique charm and values.</p>

  <div class="home_glance_cards">
    <?php
    include('connect.php');
    $result = $conn->query("SELECT * FROM house_glance");
    while ($row = $result->fetch_assoc()):
    ?>
      <div class="home_glance_card    flip-card   zoom-in">
        <!-- <h3><?= htmlspecialchars($row['house_name']) ?></h3>
        <p><?= nl2br(htmlspecialchars($row['description'])) ?></p> -->

          <div class="flip-card-inner">
          <div class="flip-card-front">
            <i class="fa-solid fa-seedling flower-icon"></i>
            <h3><?= htmlspecialchars($row['house_name']) ?></h3>
          </div>
          <div class="flip-card-back">
            <p><?= nl2br(htmlspecialchars($row['description'])) ?></p>
          </div>
        </div>

      </div>
    <?php endwhile; ?>
  </div>

  <div class="home_glance_footer">
    Together, these groups make The House of Glance a garden of character and potential—<br>
    Nurturing hearts, building minds, and guiding every learner toward greatness.
  </div>
</section>






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
                        <p>St. John's High School provides an excellent working environment with abundant opportunities
                            for
                            professional growth. The school boasts modern infrastructure, highly trained educators, and
                            comprehensive
                            facilities, including a well-equipped library, advanced science and computer labs, and
                            recreational
                            amenities such as table tennis. The management is supportive and cooperative, fostering a
                            positive
                            atmosphere for both staff and students.</p>
                        <p>The school prioritizes individualized attention for every child, ensuring their academic and
                            personal
                            development. Special classes are conducted to cater to the needs of each grade level.
                            Additionally,
                            students benefit from enriching experiences like school trips and field excursions, which
                            enhance learning
                            beyond the classroom.</p>
                        <div class="home_glance_author">Shweta P (EX Teacher)</div>
                    </div>
                    <div class="home_glance_testimonial_card">
                        <p>St. John's High School is an excellent institution that I had the privilege of working at as
                            a teacher
                            for a year. The school's infrastructure is impressive, providing a conducive environment for
                            both teaching
                            and learning. During my tenure, I had the opportunity to teach students who were eager to
                            learn, supported
                            by a management team that was polite, cooperative, and highly professional.</p>
                        <p>What stood out to me the most was the school's curriculum and innovative teaching methods,
                            which set it
                            apart from other institutions. St. John's High School employs diverse learning styles,
                            including the use
                            of smart boards and other advanced technologies, creating engaging and interactive learning
                            spaces for
                            students. These features ensure that every student benefit from modern educational tools,
                            fostering
                            creativity and critical thinking.
                            Bharti P(EX Teacher)</p>
                        <div class="home_glance_author">Kirandeep Kaur(EX Teacher)</div>
                    </div>
                </div>

                <!-- Group 2 -->
                <div class="home_glance_testimonial_group">
                    <div class="home_glance_testimonial_card">
                        <p>St. John's High School is an excellent institution that I had the privilege of working at as
                            a teacher
                            for a year. The school's infrastructure is impressive, providing a conducive environment for
                            both teaching
                            and learning. During my tenure, I had the opportunity to teach students who were eager to
                            learn, supported
                            by a management team that was polite, cooperative, and highly professional.</p>
                        <p>What stood out to me the most was the school's curriculum and innovative teaching methods,
                            which set it
                            apart from other institutions. St. John's High School employs diverse learning styles,
                            including the use
                            of smart boards and other advanced technologies, creating engaging and interactive learning
                            spaces for
                            students. These features ensure that every student benefit from modern educational tools,
                            fostering
                            creativity and critical thinking.</p>
                        <div class="home_glance_author">Bharti P(EX Teacher)</div>
                    </div>
                    <div class="home_glance_testimonial_card">
                        <p>St. John's High School is an excellent institution that I had the privilege of working at as
                            a teacher
                            for a year. The school's infrastructure is impressive, providing a conducive environment for
                            both teaching
                            and learning. During my tenure, I had the opportunity to teach students who were eager to
                            learn, supported
                            by a management team that was polite, cooperative, and highly professional.</p>
                        <p>What stood out to me the most was the school's curriculum and innovative teaching methods,
                            which set it
                            apart from other institutions. St. John's High School employs diverse learning styles,
                            including the use
                            of smart boards and other advanced technologies, creating engaging and interactive learning
                            spaces for
                            students. These features ensure that every student benefit from modern educational tools,
                            fostering
                            creativity and critical thinking.
                            Bharti P(EX Teacher)</p>
                        <div class="home_glance_author">Kirandeep Kaur(EX Teacher)</div>
                    </div>
                </div>

                <!-- Group 3 -->
                <div class="home_glance_testimonial_group">
                    <div class="home_glance_testimonial_card">
                        <p>St. John's High School is an excellent institution that I had the privilege of working at as
                            a teacher
                            for a year. The school's infrastructure is impressive, providing a conducive environment for
                            both teaching
                            and learning. During my tenure, I had the opportunity to teach students who were eager to
                            learn, supported
                            by a management team that was polite, cooperative, and highly professional.
                        </p>
                        <p>What stood out to me the most was the school's curriculum and innovative teaching methods,
                            which set it
                            apart from other institutions. St. John's High School employs diverse learning styles,
                            including the use
                            of smart boards and other advanced technologies, creating engaging and interactive learning
                            spaces for
                            students. These features ensure that every student benefit from modern educational tools,
                            fostering
                            creativity and critical thinking.
                            Bharti P(EX Teacher)</p>
                        <div class="home_glance_author">Kirandeep Kaur(EX Teacher)</div>
                    </div>
                    <div class="home_glance_testimonial_card">
                        <p>St. John's High School has been an excellent choice for my children, Aditi and Ananya. The
                            school offers
                            a spacious and comfortable environment that truly supports their learning and growth. The
                            teachers are not
                            only well-educated but also very dedicated and approachable, making sure each student
                            receives the
                            attention they need. The facilities are impressive, with a well-equipped science lab and
                            computer lab that
                            provide hands-on learning experiences. Additionally, the school’s library is well-stocked
                            and inviting,
                            encouraging the children to develop a love for reading. Overall, St. John's High School
                            provides a
                            nurturing and enriching atmosphere that has positively impacted my daughters’ education.</p>
                        <div class="home_glance_author">Nethravathi D(Parent)</div>
                    </div>
                </div>

                <!-- Group 4 -->
                <div class="home_glance_testimonial_group">
                    <div class="home_glance_testimonial_card">
                        <p>St. John's High School has been an excellent choice for my children, Aditi and Ananya. The
                            school offers
                            a spacious and comfortable environment that truly supports their learning and growth. The
                            teachers are not
                            only well-educated but also very dedicated and approachable, making sure each student
                            receives the
                            attention they need. The facilities are impressive, with a well-equipped science lab and
                            computer lab that
                            provide hands-on learning experiences. Additionally, the school’s library is well-stocked
                            and inviting,
                            encouraging the children to develop a love for reading. Overall, St. John's High School
                            provides a
                            nurturing and enriching atmosphere that has positively impacted my daughters’ education.</p>
                        <div class="home_glance_author">Nethravathi D(Parent)</div>
                    </div>

                    <div class="home_glance_testimonial_card">
                        <p>St. John's High School has been a wonderful experience for my child, Krithik. The school
                            campus is
                            spacious, providing a comfortable and open environment that encourages learning and play.
                            The teachers are
                            well-educated, approachable, and genuinely invested in the students’ academic and personal
                            growth, always
                            willing to go the extra mile to ensure every child succeeds.</p>
                        <p>The school is well-equipped with a science lab, computer lab, and a good library, giving
                            students access
                            to essential resources for hands-on learning and research. One of the standout features is
                            the wide
                            variety of sports and games offered, which allows children to discover and develop their
                            athletic talents
                            while learning the values of teamwork and discipline.
                            St. John's High School also organizes a lot of events and extracurricular activities,
                            keeping students
                            active and engaged beyond the classroom. These opportunities help children like Krithik
                            explore new
                            interests, build confidence, and form lasting friendships. The school’s commitment to
                            holistic education
                            is evident in how it promotes not just academic achievement, but also personal growth and
                            overall
                            development.</p>
                        <p>Overall, I am very satisfied with St. John's High School and highly recommend it to any
                            parent looking
                            for a nurturing, well-rounded educational environment for their child.</p>
                        <div class="home_glance_author">Geeta(Parent)</div>
                    </div>
                </div>


                <!-- Group 5 -->
                <div class="home_glance_testimonial_group">

                    <div class="home_glance_testimonial_card">
                        <p>St. John's High School has been a wonderful experience for my child, Krithik. The school
                            campus is
                            spacious, providing a comfortable and open environment that encourages learning and play.
                            The teachers are
                            well-educated, approachable, and genuinely invested in the students’ academic and personal
                            growth, always
                            willing to go the extra mile to ensure every child succeeds.</p>
                        <p>The school is well-equipped with a science lab, computer lab, and a good library, giving
                            students access
                            to essential resources for hands-on learning and research. One of the standout features is
                            the wide
                            variety of sports and games offered, which allows children to discover and develop their
                            athletic talents
                            while learning the values of teamwork and discipline.
                            St. John's High School also organizes a lot of events and extracurricular activities,
                            keeping students
                            active and engaged beyond the classroom. These opportunities help children like Krithik
                            explore new
                            interests, build confidence, and form lasting friendships. The school’s commitment to
                            holistic education
                            is evident in how it promotes not just academic achievement, but also personal growth and
                            overall
                            development.</p>
                        <p>Overall, I am very satisfied with St. John's High School and highly recommend it to any
                            parent looking
                            for a nurturing, well-rounded educational environment for their child.</p>
                        <div class="home_glance_author">Geeta(Parent)</div>
                    </div>


                    <div class="home_glance_testimonial_card">
                        <p>As a proud ex-student of St. John's, I can confidently say that the school provided me with
                            an excellent
                            foundation for life. The well-trained teachers offered not only academic excellence but also
                            personal care
                            in studies, ensuring every student received the support they needed. The school also
                            maintained exact care
                            in hygiene and health, creating a safe and clean environment for all of us.</p>
                        <p>I carry with me many unforgettable memories, both inside and outside the classroom. What
                            truly stood out
                            was the extended support from the school management, both during my time as a student and
                            even after
                            graduation, helping shape a bright and successful future.
                            I'm truly proud to be a part of the St. John's family.</p>
                        <div class="home_glance_author">Pragath Kumar(EX Student)</div>
                    </div>


                </div>


                <!-- Group 6 -->
                <div class="home_glance_testimonial_group">
                    <div class="home_glance_testimonial_card">
                        <p>As a proud ex-student of St. John's, I can confidently say that the school provided me with
                            an excellent
                            foundation for life. The well-trained teachers offered not only academic excellence but also
                            personal care
                            in studies, ensuring every student received the support they needed. The school also
                            maintained exact care
                            in hygiene and health, creating a safe and clean environment for all of us.</p>
                        <p>I carry with me many unforgettable memories, both inside and outside the classroom. What
                            truly stood out
                            was the extended support from the school management, both during my time as a student and
                            even after
                            graduation, helping shape a bright and successful future.I'm truly proud to be a part of the
                            St. John's
                            family.</p>
                        <div class="home_glance_author">Pragath Kumar(EX Student)</div>
                    </div>

                    <div class="home_glance_testimonial_card">
                        <p>To most people, St. John's High School might just seem like another school.
                            But for me, it was so much more -it was my launchpad. It’s where I discovered what I was
                            capable of and my
                            identity was shaped with every lesson and moment.</p>
                        <p>Our Principal wasn’t just someone who ran the school they were its heart and soul.
                            They led with strength, with care, their belief in our potential made is believe in
                            ourselves.
                            And the teachers? They were amazing. Patient, passionate, and always there not just to teach
                            us lessons
                            from textbooks, they prepared us for life.</p>
                        <p>The friendships I made, the values I learned, the little moments that became big memories
                            they’ve stayed with me, every step of the way.
                            St. John's wasn’t just the place I went to school. It’s where I became</p>
                        <div class="home_glance_author">Chandra Shekar(EX Student)</div>
                    </div>
                </div>

            </div>


        </div>
    </section>
    <!-- Testimonials Section End -->





    <!-- ------------------------------- -->

    <!-- Contact Us Section -->
    <section class="home_contact_section">
        <h2>Questions? Contact Us Today!</h2>
        <div class="home_contact_content">

            <!-- Google Map -->
            <div class="home_contact_map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d62208.97237446435!2d77.652073!3d12.967963!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae115e534f2565%3A0xaadc9d8ee312d0c5!2sSt.%20John%20High%20School!5e0!3m2!1sen!2sin!4v1750064532167!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <!-- Contact Form -->
            <div class="home_contact_form"  id="contact">
              <form action="contact_insert.php" method="POST">
    <input type="text" name="first_name" placeholder="First Name" required>
    <input type="text" name="last_name" placeholder="Last Name" required>
    <input type="tel" name="phone" placeholder="Phone" required>
    <textarea name="message" placeholder="Your Message" required></textarea>
    <button type="submit" name="submit">Submit</button>
</form>

            </div>

        </div>
    </section>

    <!-- =================== Contact Us Section End =================== -->





    <!-- ========== Footer Section Start ========== -->
   

    <?php include('footer.php') ?>

    <!-- ========== Footer Section End ========== -->

 





    <!-- ---------------about menu------------- -->
    <script>
        function openTab(evt, tabId) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tab_content_");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].classList.remove("active");
            }
            tablinks = document.querySelectorAll(".about_tab_menu_ li");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].classList.remove("active");
            }
            document.getElementById(tabId).classList.add("active");
            evt.currentTarget.classList.add("active");
        }
    </script>




    <!-- Testimonials Slider Logic -->

    <script>
        const groups = document.querySelectorAll(".home_glance_testimonial_group");
        const nextBtn = document.getElementById("next");
        const prevBtn = document.getElementById("prev");

        let currentGroup = 0;

        function showGroup(index) {
            groups.forEach((group, i) => {
                group.classList.toggle("active", i === index);
            });
        }

        nextBtn.addEventListener("click", () => {
            currentGroup = (currentGroup + 1) % groups.length;
            showGroup(currentGroup);
        });

        prevBtn.addEventListener("click", () => {
            currentGroup = (currentGroup - 1 + groups.length) % groups.length;
            showGroup(currentGroup);
        });

        // Show first group on load
        showGroup(currentGroup);
    </script>




</body>

</html>