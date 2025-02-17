document.getElementById('reviewBlogForm').addEventListener('submit', function (e) {
  e.preventDefault();

  // Get form values
  const adventureName = document.getElementById('adventureName').value;
  const rating = document.querySelector('input[name="rating"]:checked') ? document.querySelector('input[name="rating"]:checked').value : 0;
  const reviewText = document.getElementById('reviewText').value;
  const blogTitle = document.getElementById('blogTitle').value;
  const blogContent = document.getElementById('blogContent').value;

  const blogImage = document.getElementById('blogImage').files[0];

  // Use FileReader to process the uploaded image file
  const reader = new FileReader();
  reader.onload = function (event) {
      const newBlog = {
          adventureName: adventureName,
          rating: rating,
          reviewText: reviewText,
          blogTitle: blogTitle,
          blogContent: blogContent,
          imageUrl: event.target.result // Base64 data URL of the uploaded image
      };

      // Display the new blog
      displayBlog(newBlog);

      // Reset the form
      document.getElementById('reviewBlogForm').reset();

      // Clear the image preview
      const previewImage = document.getElementById('imagePreview');
      if (previewImage) {
          previewImage.remove();
      }
  };

  if (blogImage) {
      reader.readAsDataURL(blogImage); // Read the uploaded image file
  } else {
      alert("Please upload an image for your blog.");
  }
});

// Function to display blogs dynamically
function displayBlog(blog) {
  const blogsList = document.getElementById('blogsList');

  const blogElement = document.createElement('div');
  blogElement.classList.add('blog');

  // Format blog content with an image
  blogElement.innerHTML = `
      <img src="${blog.imageUrl}" alt="Blog Image">
      <div class="title">${blog.blogTitle}</div>
      <div class="rating">${'★'.repeat(blog.rating)}${'☆'.repeat(5 - blog.rating)}</div>
      <div class="content">${blog.blogContent}</div>
      <div class="review-container">
          <h3>Reviews:</h3>
          <div class="review">
              <div class="reviewer-name">${blog.adventureName}</div>
              <div class="review-text">${blog.reviewText}</div>
          </div>
      </div>
  `;

  // Append the blog to the blog list
  blogsList.appendChild(blogElement);
}

// Image preview functionality
document.getElementById('blogImage').addEventListener('change', function () {
  const file = this.files[0];
  const previewContainer = document.querySelector('.form-section');

  // Remove the previous preview image if it exists
  const existingPreview = document.getElementById('imagePreview');
  if (existingPreview) {
      existingPreview.remove();
  }

  if (file) {
      const reader = new FileReader();
      reader.onload = function (event) {
          const previewImage = document.createElement('img');
          previewImage.id = 'imagePreview';
          previewImage.src = event.target.result;
          previewImage.style.width = '100%';
          previewImage.style.maxWidth = '200px';
          previewImage.style.marginTop = '10px';
          previewImage.style.borderRadius = '10px';
          previewContainer.appendChild(previewImage);
      };
      reader.readAsDataURL(file);
  }
});

// Dummy Blogs to display
const dummyBlogs = [
  {
      adventureName: "John Doe",
      rating: 5,
      reviewText: "Amazing adventure, had so much fun exploring!",
      blogTitle: "Exploring the Mountain Trails",
      blogContent: "This adventure took me through some breathtaking mountain trails. I loved every minute of it. Highly recommend it!",
      imageUrl: "images/OIP1.jpeg"
  },
  {
      adventureName: "Jane Smith",
      rating: 4,
      reviewText: "Great experience, would definitely come back!",
      blogTitle: "River Rafting Fun",
      blogContent: "Rafting down the river was exhilarating! The guides were knowledgeable and made the trip safe and fun.",
      imageUrl: "images/OIP.jpeg"
  }
];

// Display dummy blogs initially
dummyBlogs.forEach(blog => displayBlog(blog));
