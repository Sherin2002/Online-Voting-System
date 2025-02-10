<?php
session_start();
include("database.php");

if (isset($_POST['update'])) {

    $F_Name = $_POST['F_Name'];
    $L_Name = $_POST['L_Name'];
    $NIC = $_POST['NIC'];
    $Password = $_POST['Password'];
    $Email = $_POST['Email'];
    $user_id = $_POST['user_id'];

    $sql = "UPDATE judge SET F_Name ='$F_Name', L_Name = '$L_Name', NIC = '$NIC',Password = '$Password', 
             Email = '$Email' WHERE JudgeID = '$user_id'";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "Record update suceesfully!";
        header('Location: judgeview.php');
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['JudgeID'])) {
    $user_id = $_GET['JudgeID'];
    $sql = "SELECT * FROM judge WHERE JudgeID = '$user_id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            $F_Name = $row['F_Name'];
            $L_Name = $row['L_Name'];
            $NIC = $row['NIC'];
            $Password = $row['Password'];
            $Email = $row['Email'];
            $JudgeID = $row['JudgeID'];
        }

?>

        <!DOCTYPE html>

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../style/adminpage.css">
            <title>Update contestant</title>

        </head>

        <body>
            <h2>Update contestant</h2>
            <div class="container">
                <form action="judgeupdate.php" method="post">
                    <input type="hidden" name="user_id" class="contestant" value="<?php echo $JudgeID; ?>">
                    <div class="row">
                        <div class="col-25">
                            <label for="F_Name">First Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="F_Name" name="F_Name" value="<?php echo $F_Name; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="L_Name">Last Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="L_Name" name="L_Name" value="<?php echo $L_Name; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="NIC">NIC</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="NIC" name="NIC" value="<?php echo $NIC; ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="password">Password</label>
                        </div>
                        <div class="col-75">
                            <input type="Password" id="Password" name="Password" value="<?php echo $Password; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="email">Email</label>
                        </div>
                        <div class="col-75">
                            <input type="email" id="Email" name="Email" value="<?php echo $Email; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" name="update" class="contestant" value="update">

                    </div>
                    <br>

                </form>
            </div>

        </body>

        </html>
<?php

    } else {
        header('Location: adminpage.php');
    }
}
?>