<!-- appointment.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="appointment.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<title>Doctor Appointment Form</title>
</head>
<body>
    <header class="header">
        <a href="#" class="logo"> <i class="fas fa-heartbeat"></i>Health<span> Ease</span></a>
        <nav class="navbar">
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
    <div class="container">
        <form id="appointmentForm" method="post" action="register.php">
            <h2>Doctor Appointment Form</h2>
            <label for="name"> Full Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>
            <label for="doctorType">Doctor Type:</label>
            <select id="doctorType" name="doctorType">
                <option value=""></option> 
                <option value="Physician">Physician</option>
                <option value="Pediatrician">Pediatrician</option>
                <option value="Psychiatry">Psychiatry</option>
                <option value="Psychology">Psychology</option>
            </select>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>
            <label for="date">Date of appointment:</label>
            <input type="date" id="date" name="date" required>
            <label for="time">Time for appointment:</label>
            <input type="time" id="time" name="time" required>
            <input type="submit" value="Submit" name="bookAppointment">
        </form>
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
            <a href="facebook.com"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>

    </div>

    <div class="credit"> created by <span>Ishita and Aarsh</span></div>

</section>

</body>
</html>
