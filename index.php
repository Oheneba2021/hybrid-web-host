<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'cdn.php'; ?>
    <?php include 'meta.php'; ?>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/media.css">
</head>

<body>
	<header>
		<?php include 'navbar.php'; ?>
		<!--<section>

			<div class="home">
				<div class="home-text">
					<h1>Hybrid Montessori School</h1>
					<h1><span id="typewriter"></span></h1>

					<p>
						At Hybrid Montessori, we believe in
						fostering holistic development through
						innovative learning, playful exploration,
						and creating a positive impact on our community.
					</p>
				</div>
				<div class="home-btn">
					<a href="about.php" class="one-btn">Why Us?</a>
				</div>
			</div>
		</section>-->
		 <style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    

    swiper-container {
      width: 100%;
      height: 100vh;
    }

    swiper-slide {
      text-align: center;
      font-size: 18px;
      ///background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }
	
	.swipe-1{
		background-image:url('./images/swiper/hybrid-2.jpeg');
		background-size:cover;
		background-position:center;
	}
	
	.swipe-2{
		background-image:url('./images/swiper/swiper-31.jpeg');
		background-size:contain;
		background-position:center;
		//background-repeat:no-repeat;
	}
	
	.swipe-3{
		background-image:url('./images/swiper/swiper-16.jpg');
		background-size:cover;
		background-position:center;
	}
	
	.swipe-4{
		background-image:url('./images/swiper/swiper-17.jpg');
		background-size:cover;
		background-position:center;
	}
	.swipe-5{
		background-image:url('./images/swiper/swiper-11.jpg');
		background-size:cover;
		background-position:center;
	}
	
	.swipe-6{
		background-image:url('./images/swiper/swiper-18.jpg');
		background-size:cover;
		background-position:center;
	}
	
	.swipe-7{
		background-image:url('./images/swiper/swiper-10.jpg');
		background-size:cover;
		background-position:center;
	}
	
	.swipe-8{
		background-image:url('./images/swiper/swiper-12.jpg');
		background-size:cover;
		background-position:center;
	}
	
	.swipe-9{
		background-image:url('./images/swiper/swiper-13.jpg');
		background-size:cover;
		background-position:center;
	}
	
	.swipe-10{
		background-image:url('./images/swiper/swiper-19.jpg');
		background-size:cover;
		background-position:center;
	}
	
	.swipe-11{
		background-image:url('./images/swiper/swiper-20.jpeg');
		background-size:cover;
		background-position:center;
	}
	
	.swipe-12{
		background-image:url('./images/swiper/swiper-21.jpeg');
		background-size:cover;
		background-position:center;
	}
	
	.swipe-13{
		background-image:url('./images/swiper/swiper-22.jpeg');
		background-size:cover;
		background-position:center;
	}
	
	.swipe-14{
		background-image:url('./images/swiper/swiper-23.jpeg');
		background-size:cover;
		background-position:center;
	}
	.swipe-15{
		background-image:url('./images/swiper/swiper-24.jpeg');
		background-size:cover;
		background-position:center;
	}
	
	.swipe-16{
		background-image:url('./images/swiper/swiper-25.jpeg');
		background-size:cover;
		background-position:center;
	}
	
	.swipe-17{
		background-image:url('./images/swiper/swiper-26.jpeg');
		background-size:cover;
		background-position:center;
	}
	
	.swipe-18{
		background-image:url('./images/swiper/swiper-27.jpeg');
		background-size:cover;
		background-position:center;
	}
	
	.swipe-19{
		background-image:url('./images/swiper/swiper-28.jpeg');
		background-size:cover;
		background-position:center;
	}
	.swipe-20{
		background-image:url('./images/swiper/swiper-29.jpeg');
		background-size:cover;
		background-position:center;
	}
	
	.swipe-21{
		background-image:url('./images/swiper/swiper-30.jpeg');
		background-size:contain;
		background-position:center;
	}
	
	.swipe-22{
		background-image:url('./images/swiper/swiper-32.jpeg');
		background-size:cover;
		background-position:center;
	}
	
	.swipe-23{
		background-image:url('./images/swiper/swiper-33.jpeg');
		background-size:cover;
		background-position:center;
	}
	
	.swipe-24{
		background-image:url('./images/swiper/swiper-34.jpeg');
		background-size:cover;
		background-position:center;
	}
	
	.swipe-25{
		background-image:url('./images/swiper/swiper-35.jpeg');
		background-size:contain;
		background-position:center;
	}
	
    swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
	
	.hybrid-video {
    position: relative;
    padding-bottom: 56.25%; /* 16:9 aspect ratio */
    height: 0;
    overflow: hidden;
    max-width: 100%;
    background: #000;
}

.hybrid-video iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
}
  </style>
		<section>
			<swiper-container class="mySwiper"    space-between="30"
			centered-slides="true" autoplay-delay="5000" autoplay-disable-on-interaction="false" effect="fade">
				<swiper-slide class="swipe-1">
					
				</swiper-slide>
				<swiper-slide class="swipe-2">
				
				</swiper-slide>
				<swiper-slide class="swipe-3">
				
				</swiper-slide>
				<swiper-slide class="swipe-4">
				
				</swiper-slide>
				<swiper-slide class="swipe-5">
				
				</swiper-slide>
				<swiper-slide class="swipe-6">
				
				</swiper-slide>
				<swiper-slide class="swipe-7">
				
				</swiper-slide>
				<swiper-slide class="swipe-8">
				
				</swiper-slide>
				<swiper-slide class="swipe-9">
				
				</swiper-slide>
				<swiper-slide class="swipe-10">
				
				</swiper-slide>
				<swiper-slide class="swipe-11">
				
				</swiper-slide>
				<swiper-slide class="swipe-12">
				
				</swiper-slide>
				<swiper-slide class="swipe-13">
				
				</swiper-slide>
				<swiper-slide class="swipe-14">
				
				</swiper-slide>
				<swiper-slide class="swipe-15">
				
				</swiper-slide>
				<swiper-slide class="swipe-16">
				
				</swiper-slide>
				<swiper-slide class="swipe-17">
					
				</swiper-slide>
				<swiper-slide class="swipe-18">
				
				</swiper-slide>
				<swiper-slide class="swipe-19">
				
				</swiper-slide>
				<swiper-slide class="swipe-20">
				
				</swiper-slide>
				<swiper-slide class="swipe-21">
				
				</swiper-slide>
				<swiper-slide class="swipe-22">
				
				</swiper-slide>
				<swiper-slide class="swipe-23">
				
				</swiper-slide>
				<swiper-slide class="swipe-24">
				
				</swiper-slide>
				<swiper-slide class="swipe-25">
				
				</swiper-slide>

			</swiper-container>
			
		</section>
	</header>
	<main>
		<section>
			<div class="about-all">
				<div class="about-text">
					<h1 data-aos="fade-up" data-aos-duration="1800">Welcome To Hybrid Montessori School</h1>
					<p data-aos="fade-up" data-aos-duration="2000">
						We are delighted to welcome you to Hybrid Montessori School, where traditional Montessori principles meet the flexibility of modern hybrid education. Our school is dedicated to nurturing each child's unique potential, fostering a love for learning, and encouraging independence in a supportive and dynamic environment.
					</p>
					
					<p data-aos="fade-up" data-aos-duration="3000">
						At Hybrid Montessori School, we combine the proven methods of Montessori education with innovative online resources, allowing our students to learn at their own pace, both in and out of the classroom. Our dedicated educators guide students through a personalized learning journey, helping them to develop critical thinking, creativity, and a strong sense of responsibility.
					</p>
					
					<p data-aos="fade-up" data-aos-duration="3000">
						We believe that education is not just about academic achievement but also about nurturing the whole child—emotionally, socially, and intellectually. Our hybrid model ensures that each student receives the attention they need to thrive, with the flexibility to explore their interests and passions.
					</p>
					
				</div>
				<div class="about-image" data-aos="fade-down" data-aos-duration="1500" id="watch">
					<img src="./images/students/students-5.jpg" alt="">
				</div>
			</div>
		</section>
		<section>
			<div class="bg">
				<!--<div class="heading">
					<h1>Our Services</h1>
					<p>Elevate your brand with Nkanlu's comprehensive solutions, spanning Digital Advertising, Printing & Branding, and Messaging Excellence.</p>
				</div>-->
				<div class="services-grid">
					<div class="service" data-aos="fade-right" data-aos-duration="1900">
						<div class="service-image" style="background-image: url('./images/Anniversary/anniversary-27.jpg'); background-position:center;"></div>
						<div class="service-details">
							<h1>PreSchool</h1>
							<p>
								In the Preschool, our focus on learning begins with nurturing the foundation of curiosity and exploration
							</p>
							<a href="academics.php" class="ss-btn">Read more</a>
						</div>
					</div>

					<div class="service" data-aos="fade-up" data-aos-duration="2500">
						<div class="service-image" style="background-image: url('./images/Anniversary/anniversary-28.jpeg'); background-position:center;"></div>
						<div class="service-details">
							<h1>Primary</h1>
							<p>
								Within the Preschool, our educational approach is centered around fostering a love for learning.
							</p>
							<a href="academics.php" class="ss-btn">Read more</a>
						</div>
					</div>

					<div class="service" data-aos="fade-left" data-aos-duration="3100">
						<div class="service-image"></div>
						<div class="service-details">
							<h1>High School</h1>
							<p>
								Within the Primary stream, our commitment to learning is geared towards a comprehensive and interdisciplinary approach.
							</p>
							<a href="acedemics.php" class="ss-btn">Read more</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="benefit-grid">
				<div class="benefit-image">
					<img src="./n-images/african-heritage/african-heritage-93.jpg" alt="" data-aos="fade-down" data-aos-duration="1500">
				</div>
				<div class="benefit-text">
					<h1>Unlocking Your Child's potential - The Hybrid Approach</h1>
					<p>
						At Hybrid, we understand the profound responsibility of nurturing young minds
						and shaping the future leaders of tomorrow. Our commitment to excellence is reflected
						in our innovative and holistic educational approach
					</p>
					<p data-aos="fade-up" data-aos-duration="2400">
						<b><i class="fa-solid fa-circle-check"></i> A Foundation for Lifelong Learning:</b> We believe that every
						child possesses a unique potential waiting to be uncovered. Our approach is rooted in creating a strong
						foundation for lifelong learning, starting from the earliest years. By embracing the natural curiosity of
						children and fostering a love for exploration, we lay the groundwork for academic success and a passion for
						continuous discovery.
					</p>
					<p data-aos="fade-up" data-aos-duration="2800">
						<b><i class="fa-solid fa-circle-check"></i> Tailored Learning Experiences:</b> At Hybrid, we recognize
						the individuality of each child. Our educators employ a personalized approach, understanding the specific needs,
						interests, and learning styles of every student. Through tailored learning experiences, we create an environment
						that nurtures strengths, addresses challenges, and inspires a genuine enthusiasm for learning.
					</p>
					<p data-aos="fade-up" data-aos-duration="3000">
						<b><i class="fa-solid fa-circle-check"></i> Innovative Teaching Methodologies:</b> Our commitment to unlocking
						potential is embodied in our innovative teaching methodologies. We leverage cutting-edge educational practices,
						incorporating experiential learning, project-based activities, and technology integration. By embracing creativity
						and critical thinking, we prepare students to thrive in a rapidly evolving world, equipping them with skills beyond
						the confines of traditional education.
					</p>
				</div>
			</div>
		</section>
		<section style="background-color: #fce4e4; margin-top:70px;">
			<?php include 'partners.php'; ?>
		</section>
		
		
		<section>
			<div class="business-all">
				<div class="business-grid">
					<div class="b-one">
						<h1 data-aos="fade-up" data-aos-duration="2000">Building Legacy: Shaping Tomorrow, Today</h1>
						<p data-aos="fade-u-#p" data-aos-duration="3000">
							Our focus goes beyond academic achievements; we are dedicated to
							cultivating leaders who possess not only knowledge but also integrity,
							resilience, and a sense of responsibility. Through a comprehensive curriculum
							and leadership development programs, we empower our students to become
							visionaries who will lead and inspire.
						</p>
					</div>
					<div class="b-two">
						<div class="b-box" data-aos="fade-up" data-aos-duration="2000">
							<div class="icon">
								<h1><i class="fa-solid fa-circle-half-stroke"></i></h1>
							</div>
							<h1 class="mee">Exceptional</h1>
							<p>Employees</p>
						</div>
						<div class="b-box" data-aos="fade-down" data-aos-duration="2000">
							<div class="icon">
								<h1><i class="fa-solid fa-clock"></i></h1>
							</div>
							<h1 class="mee">24/7</h1>
							<p>Working Hours</p>
						</div>
						<div class="b-box" data-aos="fade-down" data-aos-duration="2000">
							<div class="icon">
								<h1><i class="fa-solid fa-user-group"></i></h1>
							</div>
							<h1 class="mee">200 +</h1>
							<p>Students</p>
						</div>
						<div class="b-box" data-aos="fade-up" data-aos-duration="2000">
							<div class="icon">
								<h1><i class="fa-solid fa-award"></i></h1>
							</div>
							<h1 class="mee">110 +</h1>
							<p>Regional Awards</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="hybrid-video">
			<iframe src="https://player.vimeo.com/video/1000828656?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" width="100%" height="300" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" title="9th Anniversary and Graduation Ceremony"></iframe>
		</section>
		<section>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.3453854617633!2d-1.5645715263496!3d6.603931222226226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb935dcd7a05f5%3A0xf8af06febeed4e40!2sHybrid%20Montessori%20School!5e0!3m2!1sen!2sgh!4v1724162045608!5m2!1sen!2sgh" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</section>
	</main>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="./scripts/swiper.js"></script>
    <script src="./scripts/index.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {});
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script>
        // Define animation properties for the text and buttons
        const textAnimation = anime.timeline({
            targets: '.home-text',
            easing: 'easeOutExpo', // Easing function for text animation
        });

        textAnimation
            .add({
                translateY: ['-100%', 0],
                opacity: [0, 1],
                duration: 1000,
            })
            .add({
                targets: '.one-btn',
                translateY: [20, 0],
                opacity: [0, 1],
                delay: anime.stagger(200), // Stagger delay for button animation
                duration: 800,
            })
            .add({
                targets: '.two-btn',
                translateY: [20, 0],
                opacity: [0, 1],
                delay: anime.stagger(200), // Stagger delay for button animation
                duration: 800,
            });

        // Define animation properties for the entire section
        const sectionAnimation = anime({
            targets: '.home',
            opacity: [0, 1],
            duration: 1200,
            easing: 'easeInOutQuad',
        });
    </script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>