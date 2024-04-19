<!-- success.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Booked Successfully</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="success.css">
    <link rel="stylesheet" href="additional.css">
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

<div class="success-content" style="padding-top: 7rem;">
    <div class="success-message" style="margin-top: 5rem;">
        <h2>View Your Booked Appointments</h2>
        <p>Thank you for choosing Health Ease. Please enter your email and phone number to view your appointments:</p>
        <form id="appointmentForm" action="appointment_details.php" method="POST">
            <input type="email" id="success-email" name="email" placeholder="Your Email" required>
            <input type="tel" id="success-phone" name="phone" placeholder="Your Phone Number" required>
            <button type="submit">View Appointments</button>
        </form>
    </div>
</div>

<!-- footer section starts  -->

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
            <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
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

<!-- footer section ends -->

</body>

</html>
