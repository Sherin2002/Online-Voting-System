<?php
session_start();
include("database.php");

if (isset($_POST['update'])) {
    
    $Password = $_POST['Password'];
    
    $user_id = $_POST['user_id'];

    $sql = "UPDATE contestant SET  Password = '$Password' WHERE Contestant_ID = '$user_id'";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "Record update suceesfully!";
        header('Location: contestant_profile.php');
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['Contestant_ID'])) {
    $user_id = $_GET['Contestant_ID'];
    $sql = "SELECT * FROM contestant WHERE Contestant_ID = '$user_id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            
            $Password = $row['Password'];
           
            $Contestant_ID = $row['Contestant_ID'];
        }

?>

        <!DOCTYPE html>

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../src/style/admin.css">
            <title>Update contestant</title>
        </head>

        <body>
            <h2>Update contestant</h2>
            <form action="updatepassword.php" method="post">
                <input type="hidden" name="user_id" class="contestant" value="<?php echo $Contestant_ID; ?>">
                
                Password:<br>
                <input type="Password" name="Password" class="contestant" value="<?php echo $Password; ?>"><br>
                

                <input type="submit" name="update" class="contestant" value="update">
            </form>

        </body>

        </html>
<?php

    } else {
        header('Location: contestant_profile.php');
    }
}
?>