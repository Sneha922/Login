<?php
    $myemail = "abc@bitsathy.ac.in";
    $mypass = "12345";
    if(isset($_POST['login'])) {
        $username =$_POST['username'];
        $password =$_POST['password'];
        if($username == $myemail and $password == $mypass) {
            if(isset($_POST['remember'])) {
                setcookie('username', $username, time()+60*60*7);
                setcookie('password', $password, time()+60*60*7);
            }    
            session_start();
            $_SESSION['username'] = $username;
            header("location: welcome.php");
            
        }else {
            echo "Email or Password is Invalid.<br> click here to <a href = 'login1.php'>try again</a>";
            }  
        } 
        else {
            header("location: login1.php");
        }
?>
