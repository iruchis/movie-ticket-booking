<?php
// Initialize the session
session_start();
?>

<div class="navbar-brand">
    <a href="index.php">
        <h1 class="navbar-heading">BUE Cinema</h1>
    </a>
</div>
<div class="navbar-container">
    <nav class="navbar">
        <ul class="navbar-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="schedule.php">Schedule</a></li>
            <li><a href="contact-us.php">Contact</a></li>
            <?php
            if($_SESSION["loggedin"]) {
                ?>
                <li><a href="logout.php">Logout</a></li>
                <?php
            } else {
                ?>
                <li><a href="register.php">Register</a></li>
                <?php
            }
            ?>
        </ul>
    </nav>
</div>