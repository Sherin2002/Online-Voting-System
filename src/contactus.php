<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactUs</title>
    <link rel="stylesheet" href="styles/style3.css">
    <script src="https://kit.fontawesome.com/92a732a008.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php

    include_once 'main.php';

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $inquiry = $_POST['inquiry'];
        $phoneNumber = $_POST['phone'];

        // Perform database operations here (e.g., insert the data into the ContactUs table)

        // Placeholder code for demonstration purposes
        // Replace this with your actual database interaction code
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "businessdb";

        // Create a connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare the SQL statement
        $sql = "INSERT INTO contactus (u_name, u_email, u_inquiry, u_pnumber)
                VALUES ('$name', '$email', '$inquiry', '$phoneNumber')";

        // Execute the SQL statement
        if ($conn->query($sql) === TRUE) {
            echo "Data inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the connection
        $conn->close();
    }
    ?>

    <header>
        <!-- Header content here -->
    </header>

    <div class="content">
        <div class="Contact">
            <!-- Contact form content here -->

        </div>
        <div class="location">
            <!-- Location content here -->
        </div>
    </div>

    <section class="footer">
        <!-- Footer content here -->
    </section>

</body>

</html>