<?php 
  // Start the session to track user login status
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
 // Check if the user is logged in. If not, redirect to login page.
  if (!isset($_SESSION['username'])) {
    header('location: login.php'); // Redirect to login page if not logged in
    exit();
  }
// Check if logout is requested
  if (isset($_GET['logout'])) {
    session_destroy();  // Destroy the session to log the user out
    unset($_SESSION['username']); // Remove session variables
    header('location: login.php'); // Redirect to login page after logging out
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<!-- font awosome cdn link-->
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel = "stylesheet" href = "css/style.css">
</head>
<body>
<!-- header section starts  -->
 <section class = "header">
 <a href = "home.php" class = "logo">ADVENTURE HUB</a>
 <nav class = "navbar">
    <a href = "home.php">home</a>
    <a href = "about.php">about</a>
    <a href = "package.php">package</a>
    <a href = "book.php">book</a>
    <a href = "login.php">login</a>
    <a href="home.php?logout='1'">logout</a>
</nav>
<div id = "menu-btn" class = "fas fa-bars"></div>
</section>
<!-- home section starts -->
<section class = "home">
<div class="swiper home-slider">
<div class="swiper-wrapper">
  <div class="swiper-slide slide" style = "background:url(images/home1.jpg) no-repeat">
  <div class="content">
    <span>explore, discover, travel</span>
    <h3>travel around the world</h3>
    <a href = "package.php" class = "btn">discover more</a>
      </div>
  </div>
<div class="swiper-slide slide" style = "background:url(images/home2.jpg) no-repeat">
  <div class="content">
  <span>explore, discover, travel</span>
  <h3>discover new places</h3>
  <a href = "package.php" class = "btn">discover more</a>
</div></div>
<div class="swiper-slide slide" style = "background:url(images/home3.jpg) no-repeat">
           <div class="content">
             <span>explore, discover, travel</span>
             <h3>make your tour worthwhile</h3>
             <a href = "package.php" class = "btn">discover more</a>
           </div></div></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div></div>
</section>
<section class="service-sec" id="se">
    <div class="txt">
      <h1>OUR SERVICES</h1>
      </div>
    <div class="ser">
    <div class="card">
      <img src="images/adventure.png" alt="card" >
      <div class="card__content">
        <p class="card__title">ADVENTURES</p>
        <p class="card__description">Dive into the thrill of India’s breathtaking adventure spots! From the snowy peaks of Himachal to the lush forests of Kerala, we offer curated experiences like trekking, paragliding, and river rafting to fuel your adventurous spirit.</p>
        <button class="card__button"><a href="adventure.php">Learn More</a></button>
        </div>
    </div>
<div class="card">
      <img src="images/tourguide.png" alt="tour guide">
      <div class="card__content">
        <p class="card__title">TOUR GUIDE</p>
        <p class="card__description">Explore India's diverse landscapes with expert guidance! Our professional tour guides provide local insights, cultural stories, and seamless navigation to make your adventure trips in India both enriching and hassle-free.</p>
        <button class="card__button"><a href="book.php">Learn More</a></button>
   </div>
    </div>
 <div class="card">
      <img src="images/review.png" alt="reviews">
      <div class="card__content">
        <p class="card__title">USER REVIEWS</p>
        <p class="card__description">Discover India’s top adventure spots through the eyes of fellow travelers! Our user reviews share real experiences and recommendations, helping you choose the best destinations and activities for your next thrilling journey.</p>
        <button class="card__button"><a href="review.php">Learn More</a></button>
  </div>
    </div>
</div>
</section>
<!-- home about section starts -->
<section class = "home-about">
    <div class="image">
        <img src = "images/about4.avif">
    </div>
    <div class="content">
        <h3>about us</h3>
        <p>Welcome to Adventure Hub, your ultimate guide to India’s thrilling adventure spots! We aim to connect travelers with the best experiences, expert guidance, and a vibrant community of adventurers. Whether you’re seeking adrenaline-pumping activities or serene explorations, we’re here to make every journey unforgettable. Let’s explore India’s wild side together!
</p>
<a href = "about.php" class = "btn">read more</a>
</div>
</section>
<!-- home packags section starts -->
<section class = "home-packages">
    <h1 class = "heading-title">our packages</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src = "images/package2.jpeg">
            </div>
            <div class="content">
                <h3>Bir-Himachal Pradesh</h3>
                <p>Bir in Himachal Pradesh is a top destination for paragliding, offering stunning views of the Kangra Valley and snow-capped peaks. Take off from Billing and glide over lush landscapes before landing in the serene village of Bir. Perfect for thrill-seekers, it’s a must-visit spot for an unforgettable flying experience.</p>
                <a href = "book.php" class = "btn">book now</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src = "images/package4.jpeg">
            </div>
            <div class="content">
                <h3>Aamby Valley-Maharashtra</h3>
                <p>Aamby Valley in Maharashtra is a premier destination for skydiving, offering adrenaline-pumping experiences amid breathtaking landscapes. Jump from the skies and enjoy panoramic views of lush valleys, sparkling lakes, and rolling hills. Perfect for adventure enthusiasts, it’s an unforgettable dive into thrill and beauty!</p>
                 <a href = "book.php" class = "btn">book now</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src = "images/package11.jpg">
            </div>
            <div class="content">
                <h3>Pushkar-Rajasthan</h3>
                <p>Pushkar in Rajasthan offers an enchanting hot air balloon ride experience, floating over its vibrant desert landscapes, serene lakes, and iconic temples. Witness breathtaking sunrise or sunset views from the skies, making it a magical adventure for travelers seeking a unique perspective of this historic town.</p>
                 <a href = "book.php" class = "btn">book now</a>
            </div>
        </div>
    </div>
    <div class="load-more"><a href = "package.php" class = "btn">load more</a></div>
</section>
<!-- home offer section starts -->
<section class = "home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Embark on your dream getaway with our exclusive tour offers, now at up to 50% off! 
        Explore exotic destinations, indulge in cultural delights, and create unforgettable memories
        without breaking the bank.</p>
    </div>
    <a href = "book.php" class = "btn">book now</a>
</section>
<!-- footer section starts here -->
<section class = "footer">
    <div class = "box-container">
    <div class="box">
        <h3>quick links</h3>
    <a href = "home.php"><i class = "fas fa-angle-right"></i>home</a>
    <a href = "about.php"><i class = "fas fa-angle-right"></i>about</a>
    <a href = "package.php"><i class = "fas fa-angle-right"></i>package</a>
    <a href = "book.php"><i class = "fas fa-angle-right"></i>book</a>
    </div>
    <div class="box">
        <h3>extra links</h3>
        <a href = "#"><i class = "fas fa-angle-right"></i> +123-456-7890 </a>
        <a href = "#"><i class = "fas fa-angle-right"></i> +111-222-3333 </a>
        <a href = "#"><i class = "fas fa-angle-right"></i> company@gmail.com</a>
        <a href = "#"><i class = "fas fa-angle-right"></i> mumbai, India - 400104</a>
    </div>
    <div class="box">
        <h3>contct info</h3>
        <a href = "#"><i class = "fas fa-angle-phone"></i>ask questions</a>
        <a href = "#"><i class = "fas fa-angle-phone"></i>about us</a>
        <a href = "#"><i class = "fas fa-angle-envelope"></i>privacy policy</a>
        <a href = "#"><i class = "fas fa-angle-map"></i>terms of use</a>
    </div>
    <div class="box">
        <h3>follow us</h3>
        <a href = "#"><i class = "fab fa-facebook-f"></i> facebook</a>
        <a href = "#"><i class = "fab fa-twitter"></i> twitter</a>
        <a href = "#"><i class = "fab fa-instagram"></i> instagram</a>
        <a href = "#"><i class = "fab fa-linkedin"></i> linkedin</a>
    </div></div>
<div class="credit">all rights reserved! </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src = "js/script.js" ></script>
</body>
</html>