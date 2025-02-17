<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adventure Hub - User Review & Blog</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Poppins:wght@300;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/review.css">
</head>
<body>

  <div class="container">
    <!-- Main Content Section with Split Layout -->
    <div class="main-content">
      <!-- Left Section: Form for Reviews & Blogs -->
      <section class="form-section">
        <h2>Submit Your Review & Blog</h2>
        <form id="reviewBlogForm" class="form">
          <label for="adventureName">Adventure Name</label>
          <input type="text" id="adventureName" placeholder="Enter Adventure Name" required>

          <label for="rating">Rating (1 to 5)</label>
          <div class="rating-container">
            <input type="radio" id="rating5" name="rating" value="5"><label for="rating5">★</label>
            <input type="radio" id="rating4" name="rating" value="4"><label for="rating4">★</label>
            <input type="radio" id="rating3" name="rating" value="3"><label for="rating3">★</label>
            <input type="radio" id="rating2" name="rating" value="2"><label for="rating2">★</label>
            <input type="radio" id="rating1" name="rating" value="1"><label for="rating1">★</label>
          </div>

          <label for="reviewText">Your Review</label>
          <textarea id="reviewText" rows="4" placeholder="Share your thoughts..." required></textarea>

          <label for="blogTitle">Blog Title</label>
          <input type="text" id="blogTitle" placeholder="Enter Blog Title" required>
          
          <label for="blogImage">Upload Image</label>
          <input type="file" id="blogImage" accept="image/*" required>
          
          <label for="blogContent">Blog Content</label>
          <textarea id="blogContent" rows="6" placeholder="Share your adventure blog..." required></textarea>

          <button type="submit" class="btn">Submit Blog & Review</button>
        </form>
      </section>

      <!-- Right Section: Display Blogs -->
      <section class="blogs-section">
        <h2>User Blogs & Reviews</h2>
        <div id="blogsList" class="blogs-list">
          <!-- Dynamically populated blogs will go here -->
        </div>
      </section>
    </div>
  </div>
 <script src="js/review.js"></script>
</body>
</html>
