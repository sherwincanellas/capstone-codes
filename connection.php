<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bcp_sms4_admission"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data for Basic Information
    $admission_type = $_POST['admission_type'];
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $suffix = $_POST['suffix'];
    $sex = $_POST['sex'];
    $civil_status = $_POST['civil_status'];
    $religion = $_POST['religion'];
    $birthday = $_POST['birthday'];
    $email_address = $_POST['email_address'];
    $contact_number = $_POST['contact_number'];
    $facebook_messenger_name = $_POST['facebook_messenger_name'];

    // Get form data for Address Information
    $address_number = $_POST['address_number'];
    $barangay = $_POST['barangay'];
    $city = $_POST['city'];
    $region = $_POST['region'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO applicants   (admission_type, last_name, first_name, middle_name, suffix, sex, civil_status, religion, birthday, email_address, contact_number, facebook_messenger_name, address_number, barangay, city, region) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssssssss", $admission_type, $last_name, $first_name, $middle_name, $suffix, $sex, $civil_status, $religion, $birthday, $email_address, $contact_number, $facebook_messenger_name, $address_number, $barangay, $city, $region);

    // Execute the query
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
