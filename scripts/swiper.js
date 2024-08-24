
  var swiper = null; // Initialize swiper variable
  
  // Function to initialize or update the Swiper with appropriate settings
  function initSwiper() {
    var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    
    var slidesPerView = 4; // Default value
    
    if (screenWidth <= 1230) {
      slidesPerView = 3;
    }
    
    if (screenWidth <= 1000) {
      slidesPerView = 2;
    }
    
    if (screenWidth <= 800) {
      slidesPerView = 1;
    }
    
    // Destroy the existing swiper instance if it exists
    if (swiper) {
      swiper.destroy();
    }

    swiper = new Swiper(".mySwiper2", {
      autoplay: true,
      slidesPerView: slidesPerView,
      loop: true,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  }

  // Initialize Swiper on page load
  initSwiper();

  // Update Swiper settings when the window is resized
  window.addEventListener("resize", function () {
    initSwiper();
    
    // Start autoplay after a short delay on resize to ensure loop continues
    if (swiper) {
      swiper.autoplay.start();
    }
  });
