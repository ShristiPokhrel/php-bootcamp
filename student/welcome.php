<?php
session_start();
?>

<h1>Welcome <?php echo $_SESSION['username']; ?></h1>
<h2><a href = "logout.php">Sign Out</a></h2>