<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the username and password from the form
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Validate the username and password
  if ($username === 'admin' && $password === 'password') {
    // Successful login, redirect to the home page
    header('Location: home.php');
    exit();
  } else {
    // Invalid username or password, show an error message
    $errorMessage = 'Invalid username or password. Please try again.';
  }
}
?>