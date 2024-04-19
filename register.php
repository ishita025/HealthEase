<!-- register.php -->
<?php
include 'connect.php';

if (isset($_POST['bookAppointment'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $doctorType = $_POST['doctorType'];
    $age = $_POST['age'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    // You can add validation and sanitization here if needed

    // Insert appointment data into the database
    $insertQuery = "INSERT INTO appointments (name, email, phone, doctorType, age, date, time)
                    VALUES ('$name', '$email', '$phone', '$doctorType', '$age', '$date', '$time')";
    if ($conn->query($insertQuery) === TRUE) {
        header("Location: appointment_details.php"); // Redirect to success.html
        exit();
    } else {
        // Handle errors if insertion fails
        die("Error: " . $conn->error); // Print error message and halt execution
    }
}
?>
