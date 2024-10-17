<?php
$firstname = $_POST['first-name'];
$lastname = $_POST['last-name'];
$username = $_POST['username'];
$birthdate = $_POST['birthdate'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Information</title>
    <link rel="stylesheet" href="your-information.css">
</head>
<body>
<header>
      <nav class="navbar">
        <div class="logo">CookBook</div>
        <ul class="nav-links">
          <li><a href="homepage.html">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="account.php">Account</a></li>
        </ul>
      </nav>
    </header>

    <div class="account-settings-container">
      <h1>Your Information</h1>

      <section class="profile-summary">
        <h2>Account Summary</h2>
        <ul>
          <li><strong>First Name:</strong> <?php echo $firstname; ?></li>
          <li><strong>Last Name:</strong> <?php echo $lastname; ?></li>
          <li><strong>Username:</strong> <?php echo $username; ?></li>
          <li><strong>Birthdate:</strong> <?php echo $birthdate; ?></li>
        </ul>
      </section>

      <nav class="sub-nav">
        <ul>
          <li><a href="edit-profile.php">Edit Profile</a></li>
          <li><a href="your-information.php">Account Settings</a></li>
          <li><a href="logout.php">Log Out</a></li>
        </ul>
      </nav>
    </div>

    <!-- Footer -->
    <footer>
      <p>&copy; 2024 CookBook. All rights reserved.</p>
    </footer>
</body>
</html>
