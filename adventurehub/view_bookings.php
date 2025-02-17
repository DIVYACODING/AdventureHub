<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('location: login.php');
    exit();
}

// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'project');
if (!$db) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Fetch bookings for the logged-in user
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM book_form WHERE user_id = $user_id";
$result = mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Bookings</title>
    <style>
        /* Page Background Gradient */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-image: linear-gradient( 58.2deg,  rgba(40,91,212,0.73) -3%, rgba(171,53,163,0.45) 49.3%, rgba(255,204,112,0.37) 97.7% );
            color: #fff;
            height: 100vh; /* Full height */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h1 {
            text-align: center;
            font-size: 36px;
            color: #fff;
            font-weight: bold;
            margin-bottom: 30px;
        }

        /* Container for cards */
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        /* Card Styling */
        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 300px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: fadeIn 1s ease-out;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        /* Card Hover Animation */
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Title of each card */
        .card h2 {
            color: #333;
            font-size: 22px;
            margin-bottom: 10px;
            font-weight: bold;
            text-transform: capitalize;
        }

        /* Card Content */
        .card p {
            color: #666;
            margin: 8px 0;
            font-size: 16px;
        }

        .card .booking-details {
            margin-top: 20px;
            background-color: #f0f0f0;
            padding: 15px;
            border-radius: 8px;
            color: #555;
            font-size: 14px;
        }

        .card .booking-details span {
            font-weight: bold;
            color: #333;
        }
 /* Keyframes for fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Mobile responsiveness */
        @media (max-width: 600px) {
            .card {
                width: 100%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section Starts -->

    <h1>Your Bookings</h1>

    <div class="container">
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <div class="card">
                <h2><?php echo htmlspecialchars($row['adventure_name']); ?></h2>
                <p><strong>Adventure Place:</strong> <?php echo htmlspecialchars($row['adventure_place']); ?></p>
                <p><strong>Guests:</strong> <?php echo htmlspecialchars($row['guests']); ?></p>
                <div class="booking-details">
                    <p><span>Arrival Date:</span> <?php echo htmlspecialchars($row['arrivals']); ?></p>
                    <p><span>Leaving Date:</span> <?php echo htmlspecialchars($row['leaving']); ?></p>
                    <p><span>Booking Date:</span> <?php echo htmlspecialchars($row['created_at']); ?></p>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>
