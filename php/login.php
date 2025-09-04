<?php
// Step 1: Start session if needed
session_start();

// Step 2: Define variables
$email = $password = "";
$emailErr = $passwordErr = "";

// Step 3: Run only when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // --- Validate Email ---
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // --- Validate Password ---
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
        if (strlen($password) < 6) {
            $passwordErr = "Password must be at least 6 characters";
        }
    }

    // If no errors → continue to check user (example with dummy check)
    if (empty($emailErr) && empty($passwordErr)) {
        // Example: Hardcoded user for testing
        $validEmail = "test@example.com";
        $validPassword = "123456";

        if ($email === $validEmail && $password === $validPassword) {
            // Success: Redirect to dashboard
            $_SESSION["user"] = $email;
            header("Location: ../dashboard.php");
            exit();
        } else {
            $passwordErr = "Incorrect email or password";
        }
    }
}

// Function to clean inputs
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
