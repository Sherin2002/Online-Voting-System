<?php
include("database.php");
$sql = "SELECT * FROM judge";
$result = $conn->query($sql);
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/admin.css">
    <title>View Judges</title>
</head>

<body>
    <h1>Judges</h1>
    <br>
    <table>
        <tr>
            <thead>
                <tr>
                    <th>Judge_ID</th>
                    <th>Frist name</th>
                    <th>Last name</th>
                    <th>NIC</th>
                    <th>Email</th>
                    <th>Password</th>
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
                            <td><?php echo $row['JudgeID']; ?></td>
                            <td><?php echo $row['F_Name']; ?></td>
                            <td><?php echo $row['L_Name']; ?></td>
                            <td><?php echo $row['NIC']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['Password']; ?></td>
                            <td><a href="judgeupdate.php?JudgeID=<?php echo $row['JudgeID']; ?>">update</a></td>
                            <td><a href="judgedelete.php?JudgeID=<?php echo $row['JudgeID']; ?>">delete</a></td>

                        </tr>
                <?php        }
                }

                ?>
            </tbody>
        </tr>
    </table>
    <br>
    <div class="container">
        <a href="adminpage.php" class="btn">Add Judge</a>
    </div>

</body>

</html>