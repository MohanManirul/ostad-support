<?php
// Start the session
session_start();

// Set some session variables
$_SESSION['user'] = 'John';
$_SESSION['role'] = 'admin';

// Destroy the session
session_destroy();

// After calling session_destroy(), $_SESSION will still exist, but it will be empty.
echo $_SESSION['user'];  // Outputs: Notice: Undefined index: user
?>
