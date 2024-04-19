<?php
    // Include database connection details (replace with your actual details)
    include 'connect.php';

    // Check if form data is submitted from success.php
    if(isset($_POST['email']) && isset($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['phone'])) {
        // Scenario 2: Appointment details fetched from the form submitted in success.php
        $email = $conn->real_escape_string($_POST['email']);
        $phone = $conn->real_escape_string($_POST['phone']);

        // Retrieve appointment details from the database based on email or phone number
        $sql = "SELECT * FROM appointments WHERE email='$email' OR phone='$phone'";
    } else {
        // Scenario 1: Appointment details fetched from the latest entry in the database
        // Retrieve the latest appointment entry from the database
        $sql = "SELECT * FROM appointments ORDER BY id DESC LIMIT 1";
    }

    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Details</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="success.css">
    <link rel="stylesheet" href="additional.css">
    <style>
        /* Additional styles for appointment details section */
        .appointment-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .appointment {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 1rem;
            padding: 2rem;
            margin: 1rem;
            max-width: 40rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .appointment {
                max-width: 90%;
            }
        }
        .appointment-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .appointment {
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 1rem;
            padding: 2rem;
            margin: 1rem;
            max-width: 45rem; /* Increase max-width */
            width: calc(100% - 4rem); /* Adjust width */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Increase font size */
        .appointment p {
            font-size: 1.8rem; /* Increase font size */
        }
    </style>
</head>

<body>
    <header class="header">
        <a href="#" class="logo"> <i class="fas fa-heartbeat"></i>Health<span> Ease</span></a>
        <nav class="navbar">
            <a href="index.html">home</a>
            <a href="doctors.html">doctors</a>
            <a href="appointment.php">book appointment</a>
            <a href="success.php">your appointments</a>
            <a href="about.html">about</a>
            <a href="logout.php">logout</a>

        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </header>

    <div class="success-content">
        <div class="success-message">
            <h2>Appointment Details</h2>
            <p>Below are the details of your appointment:</p>
        </div>
        <div class="appointment-container">
            <?php
                if ($result->num_rows > 0) {
                    // Display appointment details
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='appointment'>";
                        echo "<p>Patient Id: " . $row["id"] . "</p>";
                        echo "<p>Name: " . $row["name"] . "</p>";
                        echo "<p>Email: " . $row["email"] . "</p>";
                        echo "<p>Phone: " . $row["phone"] . "</p>";
                        echo "<p>Doctor Type: " . $row["doctorType"] . "</p>";
                        echo "<p>Age: " . $row["age"] . "</p>";
                        echo "<p>Date: " . $row["date"] . "</p>";
                        echo "<p>Time: " . $row["time"] . "</p>";
                        echo "</div>";
                    }
                } else {
                    echo "No appointments found.";
                }

                // Close connection (optional, connection will be closed automatically at script end)
                $conn->close();
            ?>
        </div>
    </div>

    <section class="footer">
        <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="index.html"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="doctors.html"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="appointment.php"> <i class="fas fa-chevron-right"></i> book appointment </a>
            <a href="success.php"><i class="fas fa-chevron-right"></i>your appointments</a>
            <a href="about.html"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="logout.php"> <i class="fas fa-chevron-right"></i> logout </a>
            
        </div>
            <div class="box">
                <h3>our services</h3>
                <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> cardiology </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
            </div>
            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +91-8810204201 </a>
                <a href="#"> <i class="fas fa-envelope"></i> aarshlal2310@gmail.com </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Dehradun, india - 248007 </a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>
        </div>
        <div class="credit"> created by <span>Ishita and Aarsh</span></div>
    </section>

    <script>
        document.getElementById('appointmentForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission
            // Rest of the JavaScript code
        });
    </script>
</body>

</html>
