<?php 
    if($_POST){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if(empty($first_name)){
            echo "<script>alert('First Name is required'); location.href='signup.php';</script>";
        } else if(empty($last_name)){
            echo "<script>alert('Last Name is required'); location.href='signup.php';</script>";
        } else if(empty($email)){
            echo "<script>alert('Email is required'); location.href='signup.php';</script>";
        } else if(empty($password)){
            echo "<script>alert('Password is required'); location.href='signup.php';</script>";
        } else if(empty($confirm_password)){
            echo "<script>alert('Confirm Password is required'); location.href='signup';</script>";
        } else {
            include "../connection.php";
            $insert = mysqli_query($conn, "insert into user (first_name, last_name, email, password, confirm_password) value ('".$first_name."','".$last_name."','".$email."','".md5($password)."','".md5($confirm_password)."')") or die(mysqli_error($conn));
            if($insert){
                echo "<script>alert('Success SIGN UP'); location.href='../signin/signin.php';</script>";
            } else {
                echo "<script>alert('Failed SIGN UP'); location.href='signup.php';</script>";
            }
        }
    }
?>