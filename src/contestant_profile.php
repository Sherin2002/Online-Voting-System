<?php
include("database.php");
$msg = "";

if (isset($_POST['upload'])) {

    $filename = $_FILES["imgfile"]["name"];
    $tempname = $_FILES["imgfile"]["tmp_name"];
    $image = "../src/image/" . $filename;

    $sql = "INSERT INTO image (filename) VALUES ('$filename')";

    mysqli_query($conn, $sql);

    if (move_uploaded_file($tempname, $image)) {
        echo "<h3> image uploaded suceesfully</h3>";
    } else {
        echo "<h3> failed to upload image</h3>";
    }
}
?>



<!DOCTYPE html>
<html>

<head>
    <title>Contestant Profile</title>
    <link rel="stylesheet" type="text/css" href="../src/style/contestant_profile.css">
</head>

<body>
    <nav>
        <img src="../src/images/mr.png" class="logo">
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="contestant.html">Contestant</a></li>
            <li><a href="judges.html">Judges</a></li>
            <li><a href="About.html">About</a></li>
            <li><a href="terms&condition.html">Terms & Conditions</a></li>
            <li><a href="Contactus.html">Contact Us</a></li>

        </ul>
    </nav>
    <div class="background"></div>
    <center>
        <h2 style="color:rgb(239, 212, 101);"><B><I>Contestant Profile</B></I></h2>
        <div class="box">

            <form action="contestant_profile.php" method="post" enctype="multipart/form-data">
                <?php
                include("database.php");
                $query = "SELECT * FROM image";
                $result = mysqli_query($conn, $query);

                if ($data = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="viewimg">
                        <img src="../src/image/<?php echo $data['filename']; ?>">
                    </div>

                <?php
                }
                ?>

                <input class="image" type="file" name="imgfile" value="">
                <button class="imgbutton" type="submit" name="upload">UPLOAD</button>

                <?php
                include("database.php");
                $sql = "SELECT * FROM contestant";
                $result = $conn->query($sql);
                ?>

                /*form view */
                <?php
                if ($result->num_rows > 0) {

                    if ($row = $result->fetch_assoc()) {
                ?>
                        <input type="text" name="" placeholder="<?php echo $row['F_Name']; ?>">
                        <input type="email" name="" placeholder="<?php echo $row['L_Name']; ?>">
                        <input type="text" name="" placeholder=" <?php echo $row['NIC']; ?>">
                        <input type="text" name="" placeholder=" <?php echo $row['DOB']; ?>">
                        <input type="text" name="" placeholder="<?php echo $row['Email']; ?>">
                        <input type="text" name="" placeholder=" <?php echo $row['Password']; ?>">

                        <button style="float: center;margin:10px 18.2% 0 0 "><a href="updatepassword.php?Contestant_ID=<?php echo $row['Contestant_ID']; ?>">Update password</a></button>
            </form>
    <?php        }
                }

    ?>
        </div>



    </center>

    <center>
        <h2 style="color:rgb(242, 245, 248)"><I>View and See Your Ranking</I></h2>

        <button style="background-color:green;float:left;margin:10px 0 0 40.2%;">Judges' Ranking</button>
        <button style="background-color:green;float:right;margin:10px 40.2% 0 0">Voters' Ranking</button>
    </center>
    <div class="social">
        <a href=""><img src="../src/images/fb.png"></a>
        <a href=""><img src="../src/images/insta.png"></a>
        <a href=""><img src="../src/images/utu.png"></a>
    </div>
    <div class="contestant">
        <h5>All rights reserved</h5>
    </div>


</body>

</html>