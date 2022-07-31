<?php
    $user_name = $_POST['user_name'] ;
    $password = $_POST['password'] ;
    
    $conn = new mysqli('localhost','root','','sahaj') ;
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else
    {
        if(!empty($_POST['user_name']) && !empty($_POST['password'])){
            $stmt = $conn->prepare("insert into login(user_name, password) values(?, ?)") ;
            $stmt->bind_param("ss",$user_name, $password);
            $stmt->execute();
            $stmt->close();
            echo 
            '
                <script>
                    alert("You have sucessfully Signed Up ✪ ω ✪");
                    window.location = "idinput.php";
                </script>
            ';
        }
        else{
            echo 
            '
                <script>
                    alert("All Fields are mandatory ＞﹏＜");
                    window.history.go(-1);
                </script>
            ';
        }
    }
        

?>