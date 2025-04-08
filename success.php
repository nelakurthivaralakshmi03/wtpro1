
<?php

// Database connection details
$servername = "127.0.0.1.3306";  // Use localhost or 127.0.0.1
$username = "root";         // Default MySQL username in XAMPP
$password = "";             // Default password is empty in XAMPP
$dbname = "foodorder";      // Ensure this matches the database you created

// Create connection
$conn = mysqli_connect('127.0.0.1', $username, $password, $dbname); // Change to localhost or 127.0.0.1


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["submit"])) {
    // Sanitize and retrieve form data
    $Name = mysqli_real_escape_string($conn, $_POST['Fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $ordername = mysqli_real_escape_string($conn, $_POST['odname']);  
    $bill = mysqli_real_escape_string($conn, $_POST['billing']);  
    $payed = "Paid";  // Payment status

    // Insert query to save order details into the database
    $insert_sql = "INSERT INTO orderdetails (name, email, address, city, state, ordered_item_quantity, totalbill, payment) 
                   VALUES ('$Name', '$email', '$address', '$city', '$state', '$ordername', '$bill', '$payed')";

    // Execute the query
    if (mysqli_query($conn, $insert_sql)) {
        echo "<body style='background-color: #000000; color: #ffffff; text-align: center; margin:350px;'>";
        echo "<h1>Your order has been placed successfully!</h1>";
        echo "</body>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Form has not been submitted.";
}

// Close the connection
mysqli_close($conn);

?>
