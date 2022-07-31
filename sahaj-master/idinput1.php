<?php 
session_start(); 
include "dbconn.php";
if (isset($_POST['userID'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $userID = validate($_POST['userID']);
    if (empty($userID)) {
        header("Location: login.php?error=User Name is required");
        exit();
    }else{
        $sql = "SELECT * FROM patient WHERE id =$userID";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['userID'] === $userID) {
                $_SESSION['userID'] = $row['userID'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: indexSaloni.php");
                exit();
            }else{
               header("Location: indexSaloni.php?error=Incorect User name or password");
                exit();
            }
        }else{
            header("Location: indexSaloni.php?error=Incorect User name or password");
            exit();
        }
    }
}else{
   header("Location: indexSaloni.php");
    exit();
}