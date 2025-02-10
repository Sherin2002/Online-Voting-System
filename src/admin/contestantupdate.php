<?php
session_start();
include("database.php");

if (isset($_POST['update'])) {
    $F_Name = $_POST['F_Name'];
    $L_Name = $_POST['L_Name'];
    $NIC = $_POST['NIC'];
    $Gender = $_POST['Gender'];
    $DOB = $_POST['DOB'];
    $Password = $_POST['Password'];
    $City = $_POST['City'];
    $Street_Name = $_POST['Street_Name'];
    $Postal_Code = $_POST['Postal_Code'];
    $Email = $_POST['Email'];
    $Contact_No = $_POST['Contact_No'];
    $user_id = $_POST['user_id'];

    $sql = "UPDATE contestant SET F_Name ='$F_Name', L_Name = '$L_Name', NIC = '$NIC',
        Gender = '$Gender', DOB = '$DOB', Password = '$Password', City = '$City', 
        Street_Name = '$Street_Name',Postal_Code ='$Postal_Code',Email = '$Email', 
        Contact_No = '$Contact_No' WHERE Contestant_ID = '$user_id'";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "Record update suceesfully!";
        header('Location: contestantview.php');
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

            $F_Name = $row['F_Name'];
            $L_Name = $row['L_Name'];
            $NIC = $row['NIC'];
            $Gender = $row['Gender'];
            $DOB = $row['DOB'];
            $Password = $row['Password'];
            $City = $row['City'];
            $Street_Name = $row['Street_Name'];
            $Postal_Code = $row['Postal_Code'];
            $Email = $row['Email'];
            $Contact_No = $row['Contact_No'];
            $Contestant_ID = $row['Contestant_ID'];
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
                <form action="contestantupdate.php" method="post">
                    <input type="hidden" name="user_id" class="contestant" value="<?php echo $Contestant_ID; ?>">
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
                            <label for="Gender">Gender</label>
                        </div>
                        <div class="col-75">
                            <label for="fname">Male</label>
                            <input type="radio" name="Gender" value="Male" <?php if ($Gender == 'male') {
                                                                                echo "checked";
                                                                            } ?>>
                            <label for="fname">Female</label>
                            <input type="radio" name="Gender" value="Female" <?php if ($Gender == 'Female') {
                                                                                    echo "checked";
                                                                                } ?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="DOB">Date of birth</label>
                        </div>
                        <div class="col-75">
                            <input type="date" id="DOB" name="DOB" value="<?php echo $DOB; ?>">
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
                            <label for="City">City</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="City" name="City" value="<?php echo $City; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="Street_Name">Street Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="Street_Name" name="Street_Name" value="<?php echo $Street_Name; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="Postal_Code">Postal Code</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="Postal_Code" name="Postal_Code" value="<?php echo $Postal_Code; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="Email">Email</label>
                        </div>
                        <div class="col-75">
                            <input type="email" id="Email" name="Email" value="<?php echo $Email; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="Contact_No">Contact NO</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="Contact_No" name="Contact_No" value="<?php echo $Contact_No; ?>">
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
        header('Location: contestantview.php');
    }
}
?>