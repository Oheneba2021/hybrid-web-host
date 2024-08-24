<div class="navbar">
    <a href="index.php">
        <div class="nav-logo">

        </div>
    </a>
    <button onclick="toggleNav(event.target)">+</button>
    <div class="nav-items">
        <a href="index.php">Home</a>
        <a href="about.php">About </a>
        <a href="academics.php">Academics</a>
        <!-- <a href="products.php">Products</a> -->
        <a href="contact.php">Contact Us</a>
    </div>
    <div class="nav-btn">
        <a href="tel:+233243435595"> <i class="fa-solid fa-phone"></i> Call Us</a>
    </div>
</div>

<script>
    const nav_items = document.querySelector('.navbar .nav-items');
    const nav_sub = document.querySelector('.navbar button');

    console.log(nav_sub)

    const toggleNav = (el) => {
        nav_items.classList.toggle('change');

        if (nav_items.classList.contains('change')) {
            el.innerHTML = 'x'
        } else {
            el.innerHTML = '+'
        }
    }
</script>