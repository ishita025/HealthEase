<!-- reg.php -->

<?php
include 'connect.php';

if(isset($_POST['signUp'])){
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = md5($_POST['password']); // You should consider using a more secure hashing algorithm

    try {
        // Prepare SQL statement to insert data without specifying the 'id' column
        $stmt = $conn->prepare("INSERT INTO users (firstName, lastName, email, password) VALUES (?, ?, ?, ?)");
        // Bind parameters
        $stmt->bind_param('ssss', $firstName, $lastName, $email, $password);
        // Execute the query
        $stmt->execute();
        
        header("location: login.php"); // Redirect to index.php after successful signup
        exit();
    } catch(Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

if(isset($_POST['signIn'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    try {
        // Prepare SQL statement to fetch user data
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
        // Bind parameters
        $stmt->bind_param('ss', $email, $password);
        // Execute the query
        $stmt->execute();
        
        // Check if user exists
        $result = $stmt->get_result();
        if($result->num_rows > 0){
            session_start();
            $row = $result->fetch_assoc();
            $_SESSION['email'] = $row['email'];
            header("Location: index.html"); // Redirect to index.php after successful login
            exit();
        } else {
            echo "Not Found, Incorrect Email or Password";
        }
    } catch(Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
