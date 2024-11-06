<?php
// Start the session
session_start();

// Set some session variables
$_SESSION['user'] = 'John';
$_SESSION['role'] = 'admin';

// Clear all session variables
session_unset();

// After calling session_unset(), $_SESSION will be empty
print_r($_SESSION);  // Outputs: Array ( )
?>
