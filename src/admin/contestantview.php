<?php
include("database.php");
$sql = "SELECT * FROM contestant";
$result = $conn->query($sql);
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/admin.css">
    <title>View contestant</title>
</head>

<body>
    <h1>Contestant</h1></br>
    <table>
        <tr>
            <thead>
                <tr>
                    <th>contestsnt_ID</th>
                    <th>Frist name</th>
                    <th>Last name</th>
                    <th>NIC</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Password</th>
                    <th>City</th>
                    <th>Street Name</th>
                    <th>Postal Code</th>
                    <th>Email</th>
                    <th>Contact No</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $row['Contestant_ID']; ?></td>
                            <td><?php echo $row['F_Name']; ?></td>
                            <td><?php echo $row['L_Name']; ?></td>
                            <td><?php echo $row['NIC']; ?></td>
                            <td><?php echo $row['Gender']; ?></td>
                            <td><?php echo $row['DOB']; ?></td>
                            <td><?php echo $row['Password']; ?></td>
                            <td><?php echo $row['City']; ?></td>
                            <td><?php echo $row['Street_Name']; ?></td>
                            <td><?php echo $row['Postal_Code']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['Contact_No']; ?></td>
                            <td><a href="contestantupdate.php?Contestant_ID=<?php echo $row['Contestant_ID']; ?>">update</a></td>
                            <td><a href="contestantdelete.php?Contestant_ID=<?php echo $row['Contestant_ID']; ?>">delete</a></td>

                        </tr>
                <?php        }
                }

                ?>
            </tbody>
        </tr>
    </table>
    <br>

    <a href="adminpage.php" class="btn">Add Contestant</a>

</body>

</html>