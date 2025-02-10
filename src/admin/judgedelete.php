<?php 

include "database.php"; 

if (isset($_GET['JudgeID'])) {

    $user_id = $_GET['JudgeID'];

    $sql = "DELETE FROM judge WHERE JudgeID ='$user_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";
        header('Location: judgeview.php');

    }else{
        echo "Record deleted unsuccessfully.";
        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>