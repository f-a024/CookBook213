<?php)
session_start();

$firstName = $_GET['first_name'];
$lastName = $_GET['last_name'];
$username = $_GET['username'];
$birthDate = $_GET['email'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Your Information</title>
    <link rel="stylesheet" href="your-information.css" />
  </head>
  <body>
    <header>
      <nav class="navbar">
        <div class="logo">CookBook</div>
        <ul class="nav-links">
          <li><a href="homepage.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="account.php">Account</a></li>
        </ul>
      </nav>
    </header>

    <form action="register.html" method="GET">
	</form>

    <div class="account-settings-container">
      <h1>Your Information</h1>

      <section class="profile-summary">
        <h2>Account Summary</h2>
        <ul>
          <li><strong>First Name:</strong> <?php echo $firstName; ?></li>
          <li><strong>Last Name:</strong> <?php echo $lastName; ?></li>
          <li><strong>Username:</strong> <?php echo $username; ?></li>
          <li><strong>Email:</strong> <?php echo $email; ?></li>
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
