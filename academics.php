<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'cdn.php'; ?>
    <?php include 'meta.php'; ?>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/services.css">
    <link rel="stylesheet" href="./styles/media.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="about-hero">

        <h1 style="color:#343e61;">Academics</h1>
        <!--<h1><span id="typewriter"></span></h1>-->

    </div>

    <section>
        <div class="digital-grid">
            <div class="digital-text">
                <h1>PreSchool</h1>
                <p>
                    In the Creche, we recognize the profound impact early experiences have on a child's future.
                    Our commitment extends beyond basic care to fostering a nurturing environment that positively
                    influences a child's social, emotional, and cognitive development. By promoting a sense of security,
                    trust, and joy, we aim to lay the groundwork for future academic success and lifelong learning.
                </p>
                <div class="skills-grid">
                    <div class="skill-box">
                        <p>
                            <i class="fa-solid fa-certificate"></i>Social Skills
                        </p>
                    </div>
                    <div class="skill-box">
                        <p>
                            <i class="fa-solid fa-certificate"></i>Language Development
                        </p>
                    </div>
                    <div class="skill-box">
                        <p>
                            <i class="fa-solid fa-certificate"></i>Fine and Gross Motor Skills
                        </p>
                    </div>
                    <div class="skill-box">
                        <p>
                            <i class="fa-solid fa-certificate"></i>Independence
                        </p>
                    </div>
                </div>
                <div class="services-btn-">
                    <a href="contact.php">Join Us</a>
                </div>
            </div>
            <div class="digital-image">
                <img src="./images/Anniversary/anniversary-2.jpg" alt="">
            </div>
        </div>
    </section>


    <section>
        <div class="printing-grid">
            <div class="printing-images">
                <img src="./images/Anniversary/anniversary-17.jpg" alt="">
            </div>
            <div class="printing-text">
                <h1>Primary</h1>
                <p>
                    In the Primary, our goal is to make a lasting impact by nurturing
                    well-rounded individuals. Beyond academic readiness, we focus on character
                    development, emphasizing values such as empathy, kindness, and respect. By
                    creating a supportive and inclusive environment, we empower our preschoolers to
                    become confident learners who positively impact their peers and community.
                </p>
                <div class="skills-grid">
                    <div class="skill-box">
                        <p>
                            <i class="fa-solid fa-certificate"></i>Pre-Academic Skills
                        </p>
                    </div>
                    <div class="skill-box">
                        <p>
                            <i class="fa-solid fa-certificate"></i>Problem-Solving
                        </p>
                    </div>
                    <div class="skill-box">
                        <p>
                            <i class="fa-solid fa-certificate"></i>Socialization
                        </p>
                    </div>
                    <div class="skill-box">
                        <p>
                            <i class="fa-solid fa-certificate"></i>Creativity
                        </p>
                    </div>

                </div>
                <div class="services-btn-">
                    <a href="contact.php">Join Us</a>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="digital-grid">
            <div class="digital-text">
                <h1>High School</h1>
                <p>
                    In the High School stream, we aim to foster a sense of responsibility and social consciousness.
                    Our students are encouraged to apply their knowledge and skills to make a positive impact on
                    their school community and beyond. Through service-learning projects, leadership opportunities,
                    and community outreach, we empower our primary students to become compassionate, globally aware
                    citizens who contribute meaningfully to the world around them.
                </p>
                <div class="skills-grid">
                    <div class="skill-box">
                        <p>
                            <i class="fa-solid fa-certificate"></i>Academic Proficiency
                        </p>
                    </div>
                    <div class="skill-box">
                        <p>
                            <i class="fa-solid fa-certificate"></i>Critical Thinking
                        </p>
                    </div>

                </div>
                <div class="services-btn-">
                    <a href="contact.php">Join Us</a>
                </div>
            </div>
            <div class="digital-image">
                <img src="./images/Anniversary/anniversary-12.jpg" alt="">
            </div>
        </div>
    </section>

    <section style="margin-top: 70px;">
        <?php include 'footer.php'; ?>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="./scripts/swiper.js"></script>
    <script src="./scripts/services.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>