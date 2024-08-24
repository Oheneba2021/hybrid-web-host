<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'cdn.php'; ?>
    <?php include 'meta.php'; ?>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/about.css">
    <link rel="stylesheet" href="./styles/media.css">
</head>
<style>
    @media all and (max-width:500px) {
        #typewriter {
            border: 2px solid salmon;
            width: 90%;
            margin: auto;
            text-align: center;
            word-wrap: break-word;
            font-size: 3rem;
            display: flex;
        }
    }
</style>

<body>
    <?php include 'navbar.php'; ?>
    <div class="about-hero">
        <h4>WELCOME TO HYBRID MONTESSORI</h4>
        <h1>
            <p id="typewriter"></p>
        </h1>
    </div>
    <section>
        <div class="abt-grid">
            <div class="abt-image" data-aos="fade-down-right" data-aos-duration="800">
                <img src="./images/Anniversary/anniversary-21.jpeg" alt="">
            </div>
            <div class="abt-text" data-aos="fade-up" data-aos-duration="1000">
                <h1>About Hybrid Montessori School</h1>
                <p>
                    Hybrid Montessori School is committed to staying at the forefront of educational
                    innovation. From project-based learning to the integration of emerging technologies,
                    our classrooms are dynamic spaces where creativity and curiosity flourish.
                </p>
                <p>
                    Recognizing that success goes beyond academic achievements, we offer a range of holistic
                    development programs. These include leadership training, arts and culture exposure, sports programs,
                    and community service initiatives, ensuring a well-rounded educational experience.
                </p>
                <p>
                    In an era driven by technology, Hybrid Montessori School equips students with digital literacy skills and
                    embraces technology as an integral part of the learning process. From interactive smart classrooms
                    to coding workshops, we prepare students for the digital challenges of the future.
                </p>
                <p>
                    Our faculty comprises passionate educators who bring diverse backgrounds, experiences, and teaching
                    styles to the table. This diversity enriches the learning environment, providing students with a
                    broad perspective and a wealth of knowledge.
                </p>
                <p>
                    Hybrid Montessori School values community engagement. We actively involve parents, guardians, and the
                    local community in school activities, fostering a sense of belonging and collaboration. Our school
                    is not just an institution; it's a community that thrives on shared values and aspirations.
                </p>
            </div>

        </div>
    </section>
    <?php include 'cta.php'; ?>
    <section>
        <div class="abt-grid">
            <div class="abt-image" data-aos="fade-down-right" data-aos-duration="800">
                <img src="./images/students/students-8.jpeg" alt="">
            </div>
            <div class="abt-text" data-aos="fade-up" data-aos-duration="1000">
                <div class="mission">
                    <h1>Mission:</h1>
                    <p>
                        Our mission is to provide a dynamic and inclusive learning experience that inspires
                        curiosity, cultivates critical thinking, and instills a passion for continuous growth.
                        Through innovative teaching methods, personalized learning, and a commitment to holistic
                        development, we aim to empower students to become leaders, innovators, and compassionate
                        contributors to society.
                    </p>
                </div>
                <div class="mission-">
                    <h1>Vision</h1>
                    <p>
                        Our vision at Hybrid Montessori School is to be a beacon of transformative education, shaping
                        individuals who not only excel academically but also embody the values of leadership, innovation,
                        and social responsibility. We aspire to create a community of lifelong learners who are well-equipped
                        to thrive in an ever-evolving global landscape.
                    </p>
                </div>
            </div>

        </div>
    </section>
    <section>
        <?php include 'partners.php'; ?>
    </section>
    <?php include 'footer.php'; ?>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="./scripts/about.js"></script>
    <script src="./scripts/swiper.js"></script>
</body>

</html>