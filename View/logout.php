<?php
// Start the session


// Clear all session data
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to home.php
header("Location: /");
exit();
