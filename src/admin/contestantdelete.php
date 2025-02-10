<?php

include "database.php";

if (isset($_GET['Contestant_ID'])) {

    $user_id = $_GET['Contestant_ID'];

    $sql = "DELETE FROM contestant WHERE Contestant_ID ='$user_id'";

    $result = $conn->query($sql);

    if ($result == TRUE) {

        echo "Record deleted successfully.";
        header('Location: contestantview.php');
    } else {
        echo "Record deleted unsuccessfully.";
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}
