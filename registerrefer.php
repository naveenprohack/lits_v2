<?php
// register.php

include 'db.php';

// Retrieve form data
$username = $_POST['username'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$referred_by = !empty($_POST['referred_by']) ? $_POST['referred_by'] : null;

// Insert user data into the users table
$stmt = $conn->prepare("INSERT INTO users (username, name, email, phone, password, address, city, state, zip, referred_by) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssssi", $username, $name, $email, $phone, $password, $address, $city, $state, $zip, $referred_by);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    $new_user_id = $stmt->insert_id;
    
    // If referred by another user, create a referral entry
    if ($referred_by) {
        $commission = 0.10 * 100; // Assuming a fixed commission amount for simplicity
        $stmt = $conn->prepare("INSERT INTO referrals (referrer_id, referred_id, commission) VALUES (?, ?, ?)");
        $stmt->bind_param("iid", $referred_by, $new_user_id, $commission);
        $stmt->execute();
    }

    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
