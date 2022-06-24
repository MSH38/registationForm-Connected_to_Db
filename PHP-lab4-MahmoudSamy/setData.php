<?php

    $error_msg = array();
    if(! (isset ($_POST['UserName']) && !empty($_POST['UserName']))){
        $error_msg[] = 'UserName';
    }
    if(! (isset ($_POST['email']) && !empty($_POST['UserName']))){

        $error_msg[] = 'email';
    }
    if(! (isset ($_POST['password']) && strlen($_POST['password']) > 2)){

        $error_msg[] = 'password';
    }
    if($error_msg){

        header("Location: index.php?error_msg =" .implode(",",$error_msg));
        exit;
    }
    $connection = mysqli_connect("localhost","root","root","phplab4",3307);
    if(! $connection){
        echo mysqli_connect_error();
        exit;
    }
    $name = mysqli_escape_string($connection,$_POST['UserName']);
    $password = mysqli_escape_string($connection,$_POST['password']);
    $email = mysqli_escape_string($connection,$_POST['email']);

    $query = "INSERT INTO users VALUES ('".$name."','".$email."','".$password."')";
    if(mysqli_query($connection,$query)){
        header("Location: Database.php");
        exit;
    }
    else
    {
        echo $query;
        echo mysqli_error($connection);
    }
    mysqli_close($connection);
?>