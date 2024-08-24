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
    <div class="contact-hero">
        <h1 style="color:#343e61;">Contact Us</h1>
        <h1><span id="typewriter"></span></h1>
    </div>

    <?php include 'contact-grid.php'; ?>
    </section>
    <?php include 'cta.php'; ?>
    <section>
	<section>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.3453854617633!2d-1.5645715263496!3d6.603931222226226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb935dcd7a05f5%3A0xf8af06febeed4e40!2sHybrid%20Montessori%20School!5e0!3m2!1sen!2sgh!4v1724162045608!5m2!1sen!2sgh" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</section>
        <?php include 'footer.php'; ?>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script src="./scripts/swiper.js"></script>

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
</body>

</html>