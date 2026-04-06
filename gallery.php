<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>DaVinci Gallery</title>
  <meta name="title" content="DaVinci">
  <meta name="description" content="Welcome to DaVinci Stories. Let's make your imaginations into Reality.">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./icon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - custom font link
  -->
  <link rel="stylesheet" href="./assets/font/font.css">

  <!-- 
    - preload images
  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<style>
/* Base styles for mobile-first approach */
body {
  margin: 0;
  padding: 0;
  width: 100%;
  overflow-x: hidden; /* Prevent horizontal scrolling */
  overflow-y: auto; /* Allow vertical scrolling */
  box-sizing: border-box;
}



/* Ensure no overflow issues */
@media (max-width: 767px) {
  .category-list {
    display: flex;
    flex-wrap: wrap;
    gap: 30px; /* Space between items */
    margin: 0;
    padding: 0;
    overflow: hidden; /* Prevent overflow within the list */
  }

  .category-item {
    flex: 1 1 calc(50% - 20px); /* Adjust width based on screen size */
    box-sizing: border-box;
    overflow: hidden; /* Ensure items do not cause overflow */
    margin-bottom: 30px; /* Space between items */
  }

 
}


/* Contact and Social Icons in a row */
.contact-icons a {
    display: inline-block;
    font-size: 24px; /* Adjust icon size as needed */
    margin-right: 15px; /* Space between icons */
    color: white; /* Default color for icons */
    text-decoration: none;
}

.contact-icons a:hover {
    color: red; /* Change to red on hover */
}




</style>

<body class="active" id="top">
 




<style>

/* General Styles */
.header {
    position: relative;
    width: 100%;
}

.instruction-text {
    margin-top: 15px; /* Space between the image and the text */
    color: black; /* Initial text color */
    font-size: 16px; /* Adjust font size as needed */
    text-align: center; /* Center the text */
    animation: text-color-change 5s infinite alternate; /* Color transition animation */
    font-family: serif; /* Apply serif font */
    font-weight: bold; /* Make the text bold */
}

@keyframes text-color-change {
    0% { color: black; }
    100% { color: white; }
}
 
 /* Play/Pause button styles */
.play-pause-button {
    position: absolute;
    bottom: 20px;
    right: 20px;
    width: 50px;
    height: 50px;
    background-color: white;
    border-radius: 50%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    opacity: 0; /* Hidden initially */
    transition: opacity 5s ease;
    animation: beat 3s infinite;
    z-index: 10000; /* Ensure it appears above other content */
}

.play-pause-button.pause::before {
    content: ''; /* Ensure there is no text content */
    display: inline-block;
    width: 24px; /* Adjust the size of the icon */
    height: 24px; /* Adjust the size of the icon */
    background-image: url('./assets/images/pause.svg'); /* Path to the pause icon */
    background-size: contain; /* Scale the icon to fit */
    background-repeat: no-repeat;
    background-position: center;
}

.play-pause-button.heart::before {
    content: ''; /* Ensure there is no text content */
    display: inline-block;
    width: 24px; /* Adjust the size of the icon */
    height: 24px; /* Adjust the size of the icon */
    background-image: url('./assets/images/heart.svg'); /* Path to the heart icon */
    background-size: contain; /* Scale the icon to fit */
    background-repeat: no-repeat;
    background-position: center;
}

@keyframes beat {
    0%, 100% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
}





/* Ensure content does not overflow */
body, html {
    margin: 0;
    padding: 0;
    overflow-x: hidden; /* Prevent horizontal overflow */
}



</style>




  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/logo.png" width="40" height="40" alt="DaVinci home">
      </a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <img src="./assets/images/menu.svg" width="17" height="17" alt="menu icon">
      </button>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">
          <a href="#" class="logo">
            <img src="./assets/images/nav-logo.png" width="140" height="40" alt="DaVinci home" class="img">
          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <span class="span one"></span>
            <span class="span two"></span>
          </button>
        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="/index.html" class="navbar-link" data-nav-link>Home</a>
          </li>


         <li class="navbar-item">
            <a href="/index.html#about" class="navbar-link" data-nav-link>About</a>
          </li>

             <li class="navbar-item">
            <a href="/gallery.php" class="navbar-link" data-nav-link>Gallery</a>
          </li>

          <li class="navbar-item">
            <a href="/index.html#gallery" class="navbar-link" data-nav-link>Team</a>
          </li>

          <li class="navbar-item">
            <a href="index.html#service" class="navbar-link" data-nav-link>Services</a>
          </li>

          <li class="navbar-item">
            <a href="index.html#portfolio" class="navbar-link" data-nav-link>Portfolio</a>
          </li>

          <li class="navbar-item">
            <a href="#contact" class="navbar-link" data-nav-link>Contact us</a>
          </li>


      

        </ul>

        <button class="login-btn">
          <img src="./assets/images/user.svg" width="21" height="21" alt="user icon">

          <span class="span">Login</span>
        </button>

        <p class="navbar-title">My Address</p>

        <address class="navbar-text">
          Khoksa, Kushtia, Khulna, Bangladesh
        </address>

        <p class="navbar-text">
          Urgent issue? or Need any other info? call us at
          <a href="tel:+8801603327099" class="contact-link">+8801603327099</a>
        </p>

      </nav>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>



<style>

/* Reduce height of the header bar */
.header {
  height: 60px; /* Adjust the height to your preference */
    display: flex;

  animation: headerColorChange 10s infinite alternate; /* Infinite color change animation */
}

/* Container to adjust for height changes */
.header .container {
  display: flex;
  align-items: center;
  justify-content: space-between;

}


@media (max-width: 768px) {
  .header {
    height: 50px; /* Adjust height for smaller screens if needed */
      display: block; /* Change to normal block display */
  height: 70px; /* Adjust the height to your preference */

  }


/* Animation for header background color transition */
@keyframes headerColorChange {
  0% {
    background-color: black;
  }
  100% {
    background-color: #333333; /* Dark Ash */
  }
}


 
    </style>


 <!-- 
    - #MAIN GALLERY
  -->


   <body>
    <div class="spacer"></div>
    <div class="spacer"></div>

    <p class="section-subtitle" data-reveal>GALLERY</p>

    <div class="spacer"></div>
    <div class="spacer"></div>

  <div class="gallery-container" data-reveal>
  <!-- Gallery 1 -->
  <div class="gallery" id="gallery1">
    <h2 class="gallery-title left" data-reveal>Peoples</h2>
    <div class="gallery-photos">
      <img src="/assets/gallery/p1.jpg" class="photo" alt="Image 1">
      <img src="/assets/gallery/p2.jpg" class="photo" alt="Image 2">
      <img src="/assets/gallery/p3.jpg" class="photo" alt="Image 3">
      <img src="/assets/gallery/p4.jpg" class="photo" alt="Image 4">
      <img src="/assets/gallery/p5.jpg" class="photo" alt="Image 5">
      <img src="/assets/gallery/p6.jpg" class="photo" alt="Image 6">
      <img src="/assets/gallery/p7.jpg" class="photo" alt="Image 7">
      <img src="/assets/gallery/p8.jpg" class="photo" alt="Image 8">

    </div>
  </div>
</div>

<div class="gallery-container" data-reveal>
  <!-- Gallery 2 -->
  <div class="gallery" id="gallery2">
    <h2 class="gallery-title right" data-reveal>Fashion</h2>
    <div class="gallery-photos">
     <img src="/assets/gallery/f1.jpg" class="photo" alt="Fashion 1">
<img src="/assets/gallery/f2.jpg" class="photo" alt="Fashion 2">
<img src="/assets/gallery/f3.jpg" class="photo" alt="Fashion 3">
<img src="/assets/gallery/f4.jpg" class="photo" alt="Fashion 4">
<img src="/assets/gallery/f5.jpg" class="photo" alt="Fashion 5">
<img src="/assets/gallery/f6.jpg" class="photo" alt="Fashion 6">
<img src="/assets/gallery/f7.jpg" class="photo" alt="Fashion 7">
<img src="/assets/gallery/f8.jpg" class="photo" alt="Fashion 8">
<img src="/assets/gallery/f9.jpg" class="photo" alt="Fashion 9">
<img src="/assets/gallery/f10.jpg" class="photo" alt="Fashion 10">
<img src="/assets/gallery/f11.jpg" class="photo" alt="Fashion 11">
<img src="/assets/gallery/f12.jpg" class="photo" alt="Fashion 12">
<img src="/assets/gallery/f13.jpg" class="photo" alt="Fashion 13">
<img src="/assets/gallery/f14.jpg" class="photo" alt="Fashion 14">
<img src="/assets/gallery/f15.jpg" class="photo" alt="Fashion 15">
<img src="/assets/gallery/f16.jpg" class="photo" alt="Fashion 16">

    </div>
  </div>
</div>


<div class="gallery-container" data-reveal>
  <!-- Gallery 3 -->
  <div class="gallery" id="gallery3">
    <h2 class="gallery-title left" data-reveal>Events</h2>
    <div class="gallery-photos">
      <img src="/assets/gallery/e1.jpg" class="photo" alt="Event 1">
      <img src="/assets/gallery/e2.jpg" class="photo" alt="Event 2">
      <img src="/assets/gallery/e3.jpg" class="photo" alt="Event 3">
      <img src="/assets/gallery/e4.jpg" class="photo" alt="Event 4">
      <img src="/assets/gallery/e5.jpg" class="photo" alt="Event 5">
      <img src="/assets/gallery/e6.jpg" class="photo" alt="Event 6">
      <img src="/assets/gallery/e7.jpg" class="photo" alt="Event 7">
      <img src="/assets/gallery/e8.jpg" class="photo" alt="Event 8">
      <img src="/assets/gallery/e9.jpg" class="photo" alt="Event 9">
      <img src="/assets/gallery/e10.jpg" class="photo" alt="Event 10">
    </div>
  </div>
</div>


<div class="gallery-container" data-reveal>
  <!-- Gallery 5 -->
  <div class="gallery" id="gallery5">
    <h2 class="gallery-title right" data-reveal>Wedding</h2>
    <div class="gallery-photos">
      <img src="/assets/gallery/w1.jpg" class="photo" alt="Wedding 1" onclick="openModal('/assets/gallery/w1.jpg')">
      <img src="/assets/gallery/w2.jpg" class="photo" alt="Wedding 2" onclick="openModal('/assets/gallery/w2.jpg')">
      <img src="/assets/gallery/w3.jpg" class="photo" alt="Wedding 3" onclick="openModal('/assets/gallery/w3.jpg')">
      <img src="/assets/gallery/w4.jpg" class="photo" alt="Wedding 4" onclick="openModal('/assets/gallery/w4.jpg')">
      <img src="/assets/gallery/w5.jpg" class="photo" alt="Wedding 5" onclick="openModal('/assets/gallery/w5.jpg')">
      <img src="/assets/gallery/w6.jpg" class="photo" alt="Wedding 6" onclick="openModal('/assets/gallery/w6.jpg')">
      <img src="/assets/gallery/w7.jpg" class="photo" alt="Wedding 7" onclick="openModal('/assets/gallery/w7.jpg')">
      <img src="/assets/gallery/w8.jpg" class="photo" alt="Wedding 8" onclick="openModal('/assets/gallery/w8.jpg')">
      <img src="/assets/gallery/w9.jpg" class="photo" alt="Wedding 9" onclick="openModal('/assets/gallery/w9.jpg')">
      <img src="/assets/gallery/w10.jpg" class="photo" alt="Wedding 10" onclick="openModal('/assets/gallery/w10.jpg')">
      <img src="/assets/gallery/w11.jpg" class="photo" alt="Wedding 11" onclick="openModal('/assets/gallery/w11.jpg')">
      <img src="/assets/gallery/w12.jpg" class="photo" alt="Wedding 12" onclick="openModal('/assets/gallery/w12.jpg')">
    </div>
  </div>
</div>


<div class="gallery-container" data-reveal>
  <!-- Gallery 4 -->
  <div class="gallery" id="gallery4">
    <h2 class="gallery-title left" data-reveal>Landscape</h2>
    <div class="gallery-photos">
      <img src="/assets/gallery/l1.jpg" class="photo" alt="Landscape 1" onclick="openModal('/assets/gallery/l1.jpg')">
      <img src="/assets/gallery/l2.jpg" class="photo" alt="Landscape 2" onclick="openModal('/assets/gallery/l2.jpg')">
      <img src="/assets/gallery/l3.jpg" class="photo" alt="Landscape 3" onclick="openModal('/assets/gallery/l3.jpg')">
      <img src="/assets/gallery/l4.jpg" class="photo" alt="Landscape 4" onclick="openModal('/assets/gallery/l4.jpg')">
      <img src="/assets/gallery/l5.jpg" class="photo" alt="Landscape 5" onclick="openModal('/assets/gallery/l5.jpg')">
      <img src="/assets/gallery/l6.jpg" class="photo" alt="Landscape 6" onclick="openModal('/assets/gallery/l6.jpg')">
      <img src="/assets/gallery/l7.jpg" class="photo" alt="Landscape 7" onclick="openModal('/assets/gallery/l7.jpg')">
      <img src="/assets/gallery/l8.jpg" class="photo" alt="Landscape 8" onclick="openModal('/assets/gallery/l8.jpg')">
      <img src="/assets/gallery/l9.jpg" class="photo" alt="Landscape 9" onclick="openModal('/assets/gallery/l9.jpg')">
      <img src="/assets/gallery/l10.jpg" class="photo" alt="Landscape 10" onclick="openModal('/assets/gallery/l10.jpg')">
      <img src="/assets/gallery/l11.jpg" class="photo" alt="Landscape 11" onclick="openModal('/assets/gallery/l11.jpg')">
      <img src="/assets/gallery/l12.jpg" class="photo" alt="Landscape 12" onclick="openModal('/assets/gallery/l12.jpg')">
      <img src="/assets/gallery/l13.jpg" class="photo" alt="Landscape 13" onclick="openModal('/assets/gallery/l13.jpg')">
      <img src="/assets/gallery/l14.jpg" class="photo" alt="Landscape 14" onclick="openModal('/assets/gallery/l14.jpg')">
    </div>
  </div>
</div>



<!-- Popup Modal -->
<div id="popup-modal" class="modal" data-reveal>
  <img class="modal-content" id="popup-image">
</div>







<script>

// JavaScript to handle the modal display
// JavaScript to handle showing and hiding the modal

// Get the modal and the image elements
const modal = document.getElementById('popup-modal');
const popupImage = document.getElementById('popup-image');

// Function to open the modal
function openModal(imageSrc) {
    popupImage.src = imageSrc; // Set the image source
    modal.classList.add('show'); // Show the modal with fade-in effect
}

// Function to close the modal
function closeModal() {
    modal.classList.remove('show'); // Hide the modal with fade-out effect
}

// Click event to close the modal
modal.addEventListener('click', closeModal);

// Set up your gallery images to open the modal on click
document.querySelectorAll('.photo').forEach(photo => {
    photo.addEventListener('click', function() {
        openModal(this.src); // Open the modal with the clicked image
    });
});


</script>
<style>

   .spacer {
            height: 50px; /* Adjust the height as needed for spacing */
        }
        
        .section-subtitle {
            font-size: 24px;
            text-align: center;
            margin: 0;
            padding: 20px;
        }

            /* Gallery Style */
/* Gallery container for horizontal scroll */
/* Gallery Styles */
.gallery {
  position: relative;
  width: 100%;
  overflow: hidden; /* Hide overflow */
}

.gallery-photos {
  display: flex;
  gap: 23px; /* Space between photos */
  flex-wrap: nowrap; /* Keep photos in a single row */
  overflow-x: auto; /* Enable horizontal scrolling */
}


.gallery-photos::-webkit-scrollbar {
  display: none; /* Chrome, Safari, and Opera */
}

.photo {
  width: calc(100% / 6); /* Show 6 photos per row */
  height: 260px; /* Set a fixed height */
  object-fit: cover; /* Crop and fit images within the frame */
  cursor: pointer;
  transition: transform 0.2s;
}

.photo:hover {
  transform: scale(1.05);
}

/* Gallery Titles */
.gallery-title.left {
  position: absolute;
  top: 0;
  left: 0;
}

.gallery-title.right {
  position: absolute;
  top: 0;
  right: 0;
}

/* For mobile */
@media (max-width: 768px) {
  .photo {
    width: calc(100% / 3); /* Show 3 photos per row on mobile */
    height: 180px; /* Set a fixed height */

  }

.gallery {
    height: auto; /* Adjust the height based on content */
margin-bottom: 40px; /* Adjust space between galleries */

}

}


.photo:hover {
  transform: scale(1.5);  /* Slight zoom effect on hover */
}

/* Modal Background */
.modal {
  display: none; /* Ensure it is hidden by default */
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.6); /* Darken background */
  z-index: 1000; /* Ensure it's on top */
  overflow: hidden; /* Hide any overflow */
  align-items: center; /* Center vertically */
  justify-content: center; /* Center horizontally */
    transition: opacity 0.5s ease; /* Fade-in and fade-out transition */
}

/* Modal Content (Image) */
.modal-content {
  max-width: 90vw; /* Maximum width relative to the viewport width */
  max-height: 80vh; /* Maximum height relative to the viewport height */
  object-fit: contain; /* Ensure the image fits within the container */
  border: 5px solid #fff; /* White border around the image */
  border-radius: 10px; /* Rounded corners */
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* Shadow for depth */
  cursor: pointer; /* Indicate that the image is clickable */
}

/* Show the modal */
.modal.show {
    display: flex; /* Flexbox to center content */
    opacity: 1; /* Fade-in effect */
}

/* For mobile */
@media (max-width: 768px) {
  .modal-content {
    max-width: 95vw; /* Ensure the image fits well on smaller screens */
    max-height: 75vh;
  }
}


</style>


</body>




  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top section" id="contact">
      <div class="container">

        <p class="section-subtitle" data-reveal>Contact Us</p>

        <h2 class="h2 section-title" data-reveal>
            Got a Project? Ready to Hire Us? Drop Us a Message!
                  </h2>

      <a href="https://wa.me/8801603327099" class="btn-icon" data-reveal>
        <img src="./assets/images/arrow-forward.svg" width="43" height="20" loading="lazy" alt="arrow-forward icon">
      </a>


        <img src="./assets/gallery/p8.jpg" width="159" height="176" loading="lazy" alt="photography"
          class="abs-img abs-img-1" data-reveal>

        <img src="./assets/gallery/f2.jpg" width="265" height="275" loading="lazy" alt="photography"
          class="abs-img abs-img-2" data-reveal>

        <img src="./assets/gallery/w1.jpg" width="303" height="272" loading="lazy" alt="photography"
          class="abs-img abs-img-3" data-reveal>

        <img src="./assets/gallery/e1.jpg" width="175" height="175" loading="lazy" alt="photography"
          class="abs-img abs-img-4" data-reveal>

        <img src="./assets/images/footer-shape.svg" width="185" height="134" loading="lazy" alt="" class="shape">

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <a href="#" class="logo">
          <img src="./assets/images/logo-1.png" width="100" height="100" loading="lazy" alt="DaVinci home">
        </a>

        <ul class="social-list">
<li>
    <a href="https://www.facebook.com/davincistories.team" class="social-link" target="_blank">
        <i class="fab fa-facebook-f"></i>
    </a>
</li>

<li>
    <a href="https://www.instagram.com/davinci_stories.team/" class="social-link" target="_blank">
        <i class="fab fa-instagram"></i>
    </a>
</li>

<li>
    <a href="https://wa.me/8801603327099" class="social-link" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
</li>


        </ul>

        <p class="copyright">2024 DaVinci Stories. Made with love. Developed by Ace Zero</p>

      </div>
    </div>
<style>
.social-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    gap: 15px; /* Adjust spacing between icons */
}

.social-link {
    color: white; /* Adjust color as needed */
    font-size: 24px; /* Adjust size of the icons */
    transition: color 0.3s;
}

.social-link:hover {
    color: red; /* Change color on hover */
}
</style>

    <div class="footer-bg has-before">
      <img src="./assets/gallery/l1.jpg" width="1920" height="1135" loading="lazy" alt="photography"
        class="img-cover">
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>0%</a>





  <!-- 
    - #CUSTOM CURSOR
  -->

  <div class="cursor" data-cursor></div>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

</body>

</html>