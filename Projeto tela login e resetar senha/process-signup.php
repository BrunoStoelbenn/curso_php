<?php

function redirectWithError($error) {
    header("Location: signup.php?error=" . urlencode($error));
    exit;
}

if (empty($_POST["name"])) {
    redirectWithError("Name is required");
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    redirectWithError("Valid email is required");
}

if (strlen($_POST["password"]) < 8) {
    redirectWithError("Password must be at least 8 characters");
}

if (!preg_match("/[a-z]/i", $_POST["password"])) {
    redirectWithError("Password must contain at least one letter");
}

if (!preg_match("/[0-9]/", $_POST["password"])) {
    redirectWithError("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    redirectWithError("Passwords must match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user (name, email, password_hash)
        VALUES (?, ?, ?)";

$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($sql)) {
    redirectWithError("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss", $_POST["name"], $_POST["email"], $password_hash);

try {
    $stmt->execute();
    header("Location: signup-success.html");
    exit;
} catch (mysqli_sql_exception $e) {
    if ($mysqli->errno === 1062) {
        redirectWithError("Email already taken");
    } else {
        redirectWithError($mysqli->error . " " . $mysqli->errno);
    }
}
?>
