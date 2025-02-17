<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Adventure</title>

    <!-- Swiper CSS Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Custom CSS File Link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Header Section Starts -->
<section class="header">
    <a href="home.php" class="logo">ADVENTURE HUB</a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
        <a href="view_bookings.php">details</a>

    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- Header Section Ends -->

<!-- Page Heading -->
<div class="heading-1" style="background:url(images/about1.jpg) no-repeat">
    <h1>Book Now</h1>
</div>

<!-- Booking Section Starts -->
<section class="booking">
    <h1 class="heading-title">Book Your Trip!</h1>
    <form action="book_form.php" method="post" class="book-form">

        <div class="flex">
            <div class="inputBox">
                <span>Name:</span>
                <input type="text" placeholder="Enter your name" name="name" required>
            </div>

            <div class="inputBox">
                <span>Email:</span>
                <input type="email" placeholder="Enter your email" name="email" required>
            </div>

            <div class="inputBox">
                <span>Phone:</span>
                <input type="number" placeholder="Enter your number" name="phone" required>
            </div>

            <div class="inputBox">
                <span>Address:</span>
                <input type="text" placeholder="Enter your address" name="address" required>
            </div>

            <div class="inputBox">
                <span>states:</span>
                <input type="text" placeholder="Place you want to visit" name="location" required>
            </div>

            <div class="inputBox">
                <span>How Many:</span>
                <input type="number" placeholder="Number of guests" name="guests" required>
            </div>

            <div class="inputBox">
                <span>Arrivals:</span>
                <input type="date" name="arrivals" required>
            </div>
            <div class="inputBox">
                <span>Leaving:</span>
                <input type="date" name="leaving" required>
            </div>
              <div class="inputBox">
                <span>Adventure:</span>
                <select name="adventure_name" class="inputbox"  required>
                <option value="" disabled selected>Select an Adventure</option>
                    <option value="Bir-Himachal Pradesh">paragliding</option>
                    <option value="Leh and Ladakh">biking</option>
                    <option value="Aamby Valley-Maharashtra">skydiving</option>
                    <option value="Rishikesh">rafting</option>
                    <option value="Gulmarg-Kashmir">snow sports</option>
                    <option value="Dhanaulti-Uttarakhand">camping</option>
                    <option value="Kasauli-Himachal Pradesh">trekking</option>
                    <option value="Goa">surfing</option>
                    <option value="Pushkar-Rajasthan">hot air balloon</option>
                </select>
            </div>

            <div class="inputBox">
                <span>Adventure Place:</span>
                <select name="adventure_place" class="inputbox" required>
                     <option value="" disabled selected>Select Adventure place</option>
                    <option value="Bir-Himachal Pradesh">Bir-Himachal Pradesh</option>
                    <option value="Leh and Ladakh">Leh and Ladakh</option>
                    <option value="Aamby Valley-Maharashtra">Aamby Valley-Maharashtra</option>
                    <option value="Rishikesh">Rishikesh</option>
                    <option value="Gulmarg-Kashmir">Gulmarg-Kashmir</option>
                    <option value="Dhanaulti-Uttarakhand">Dhanaulti-Uttarakhand</option>
                    <option value="Kasauli-Himachal Pradesh">Kasauli-Himachal Pradesh</option>
                    <option value="Goa">Goa</option>
                    <option value="Pushkar-Rajasthan">Pushkar-Rajasthan</option>
                </select>
            </div>
        </div>

       <!-- <input type="submit" value="Submit" class="btn" name="send"-->
       <button type="submit" class="btn">Submit</button>
    </form>
</section>
<!-- Booking Section Ends -->

<section class="footer">
    <div class="box-container">

        <div class="box">
            <h3>Quick Links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
        </div>

        <div class="box">
            <h3>Contact Info</h3>
            <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
            <a href="#"><i class="fas fa-envelope"></i> company@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i> Mumbai, India - 400104</a>
        </div>

        <div class="box">
            <h3>Follow Us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a>
        </div>

    </div>

    <div class="credit">All rights reserved!</div>
</section>
<!-- Footer Section Ends -->

<!-- Swiper JS Link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Custom JS File Link -->
<script src="js/script.js"></script>

</body>
</html>
