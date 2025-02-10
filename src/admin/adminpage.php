<?php
include("database.php");

if (isset($_POST['submit'])) {
    $F_Name = $_POST['F_Name'];
    $L_Name = $_POST['L_Name'];
    $NIC = $_POST['NIC'];
    $Gender = $_POST['Gender'];
    $DOB = $_POST['DOB'];
    $password = $_POST['password'];
    $City = $_POST['City'];
    $Street_Name = $_POST['Street_Name'];
    $Postal_Code = $_POST['Postal_Code'];
    $Email = $_POST['Email'];
    $Contact_No = $_POST['Contact_No'];

    $sql = "INSERT INTO contestant (F_Name, L_Name, NIC, Gender, DOB, Password, City, Street_Name, Postal_Code, Email, Contact_No)
        VALUES ('$F_Name', '$L_Name', '$NIC', '$Gender', '$DOB', '$password', '$City', '$Street_Name','$Postal_Code', '$Email', '$Contact_No')";

    $results = $conn->query($sql);

    if ($results == TRUE) {
        echo "new user added";
        header('Location: contestantview.php');
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>



<!DOCTYPE html>
<html>

<head>
    <title>Admin panel</title>
    <link rel="stylesheet" href="../style/adminpage.css">
    <h1 style="text-align: center;">ADMIN PANEL</h1>
    <script>
        function chekcform() {
            let x = document.forms["cform"].value;
            if (x != "") {
                alert("Contestant added");
                return true;
            } else {
                alert("Contestant not added");
                return false;
            }
        }

        function chekjform() {
            let x = document.forms["jform"].value;
            if (x != "") {
                alert("Judge added");
                return true;
            } else {
                alert("Judge not added");
                return false;
            }
        }
    </script>
</head>

<body>

    <h2>Add contestant</h2>
    <p></p>

    <div class="container">
        <form name="cform" action="adminpage.php" method="post" onsubmit="return chekcform()">

            <div class="row">
                <div class="col-25">
                    <label for="F_Name">First Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="F_Name" name="F_Name" placeholder="Contestant Frist name">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="L_Name">Last Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="L_Name" name="L_Name" placeholder="Contestant last name">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="NIC">NIC</label>
                </div>
                <div class="col-75">
                    <input type="text" id="NIC" name="NIC" placeholder="NIC">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="Gender">Gender</label>
                </div>
                <div class="col-75">
                    <label for="fname">Male</label>
                    <input type="radio" name="Gender" value="Male">
                    <label for="fname">Female</label>
                    <input type="radio" name="Gender" value="Female">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="DOB">Date of birth</label>
                </div>
                <div class="col-75">
                    <input type="date" id="DOB" name="DOB" placeholder="Date of birth">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="password">Password</label>
                </div>
                <div class="col-75">
                    <input type="password" id="password" name="password" placeholder="Password">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="City">City</label>
                </div>
                <div class="col-75">
                    <input type="text" id="City" name="City" placeholder="City">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="Street_Name">Street Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="Street_Name" name="Street_Name" placeholder="Street Name">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="Postal_Code">Postal Code</label>
                </div>
                <div class="col-75">
                    <input type="text" id="Postal_Code" name="Postal_Code" placeholder="Postal Code">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="Email">Email</label>
                </div>
                <div class="col-75">
                    <input type="email" id="Email" name="Email" placeholder="Email">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="Contact_No">Contact NO</label>
                </div>
                <div class="col-75">
                    <input type="text" id="Contact_No" name="Contact_No" placeholder="Contact NO">
                </div>
            </div>
            <div class="row">
                <br>
                <input type="submit" name="submit" value="Submit">
                <br>
                <a href="contestantview.php" class="btne">View Contestant</a>
            </div>
            <br>

        </form>
    </div>
    <br>
    <h2>Add Judge</h2>
    <p></p>

    <div class="container">
        <form name="jform" action="judge.php" method="post" onsubmit="return chekjform()">

            <div class="row">
                <div class="col-25">
                    <label for="F_Name">First Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="F_Name" name="F_Name" placeholder="Judge Frist name">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="L_Name">Last Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="L_Name" name="L_Name" placeholder="Judge last name">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="NIC">NIC</label>
                </div>
                <div class="col-75">
                    <input type="text" id="NIC" name="NIC" placeholder="NIC">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="password">Password</label>
                </div>
                <div class="col-75">
                    <input type="password" id="fname" name="password" placeholder="Password">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="email">Email</label>
                </div>
                <div class="col-75">
                    <input type="email" id="Email" name="Email" placeholder="Email">
                </div>
            </div>
            <div class="row">
                <br>
                <input type="submit" name="submit" value="submit" class="judge">
                <br>
                <a href="judgeview.php" class="btne">View Judge</a>
            </div>
            <br>

        </form>
    </div>
</body>
</html>