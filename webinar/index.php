<?php
session_start();

// Generate a random number between 1 and 100
if (!isset($_SESSION['number_to_guess'])) {
    $_SESSION['number_to_guess'] = rand(1, 100);
}

// Retrieve the number to guess
 $number_to_guess = $_SESSION['number_to_guess'];

// Initialize the message variable
$message = "";

// Check if a guess has been made
if (isset($_POST['guess'])) {
    $guess = (int)$_POST['guess'];

    if ($guess < $number_to_guess) {
        $message = "Too low! Try again.";
    } elseif ($guess > $number_to_guess) {
        $message = "Too high! Try again.";
    } else {
        $message = "Congratulations! You've guessed the number!";
        // Reset the game
        unset($_SESSION['number_to_guess']);
    }
} else {
    $message = "Guess a number between 1 and 100.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Guessing Game</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Number Guessing Game</h1>
        
        
        <!-- Debug: Display the current random number -->
        <?php if (isset($_SESSION['number_to_guess'])): ?>
            <p class="text-danger text-center">
                Current number to guess: <?php echo $_SESSION['number_to_guess']; ?>
            </p>
        <?php endif; ?>

        <form method="post" class="text-center">
            <div class="mb-3">
                <input type="number" name="guess" min="1" max="100" required class="form-control w-50 d-inline">
                <input type="submit" value="Guess" class="btn btn-primary">
            </div>
        </form>

        <p class="text-center" style="font-size: 50px;"><?php echo $message; ?></p>
    </div>

</body>
</html>
