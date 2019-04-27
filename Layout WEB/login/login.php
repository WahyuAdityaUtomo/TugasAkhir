<?php 
    session_start();
    include '../connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "" || $password == "")
    {
        header("location: logind.php");
    }
    else 
    {
        $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($connect, $query);

        $num = mysqli_num_rows($result);

        if($num == 1) 
        {
            header("location: ../user/LayoutWeb.php");
            if($num == 1)
            {
                header("location: ../user/LayoutWeb.php");
                $_SESSION['admin'] = $username;
            }
        }
        else 
        {
            header("location: logind.php");
        }
    }
?>