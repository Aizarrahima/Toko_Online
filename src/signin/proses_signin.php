<?php
    if($_POST){
        include "../connection.php";
        $email = $_POST['email'];
        $password = $_POST['password'];

        $qry_signin=mysqli_query($conn, "select * from user where email ='".$email."' and password='".md5($password)."'");

        if(empty($email)){
            echo "<script>alert('Email is required');location.href='signin.php';</script>";
        } else if(empty($password)){
            echo "<script>alert('Password is required');location.href='signin.php';</script>";
        } else {
            if(mysqli_num_rows($qry_signin)>0){
                $dt_signin=mysqli_fetch_array($qry_signin);
                session_start();
                if ($dt_signin['level'] == "admin"){
                    $_SESSION['id_user']=$dt_signin['id_user'];
                    $_SESSION['email']=$dt_signin['email'];
                    $_SESSION['first_name']=$dt_signin['first_name'];
                    $_SESSION['status_signin']=true;
                    header("location: ../tambah_comic/tambah_comic.php");
                } else if ($dt_signin['level'] == "user"){
                    $_SESSION['id_user']=$dt_signin['id_user'];
                    $_SESSION['email']=$dt_signin['email'];
                    $_SESSION['first_name']=$dt_signin['first_name'];
                    $_SESSION['status_signin']=true;
                    header("location: ../index.php");
                } else {
                echo "<script>alert('Email dan Password tidak benar'); location.href='signin.php';</script>";
                }
            }
        }
    }
?>