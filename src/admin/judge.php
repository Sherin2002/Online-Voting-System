<?php
include("database.php");

if (isset($_POST['submit'])) {
    $F_Name = $_POST['F_Name'];
    $L_Name = $_POST['L_Name'];
    $NIC = $_POST['NIC'];
    $password = $_POST['password'];
    $Email = $_POST['Email'];
    
    $sql = "INSERT INTO judge (F_Name, L_Name, NIC, Password, Email)
        VALUES ('$F_Name', '$L_Name', '$NIC', '$password', '$Email')";

    $results = $conn->query($sql);

    if ($results == TRUE) {
        echo "new user added";
        header('Location: judgeview.php');
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>
