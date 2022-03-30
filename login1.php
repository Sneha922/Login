<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Bungee&display=swap" rel="stylesheet">

    <title>FORMS</title>
    <style>
       * {
  box-sizing: border-box;
}

body{
    width: 900px;
    margin-left: 500px;
    margin-top: 100px;
    background: url('https://static8.depositphotos.com/1497945/963/i/600/depositphotos_9634775-stock-photo-detail-of-peacock-feather-eye.jpg'), #f2f2f2;
    background-repeat: no-repeat;
    background-size: cover;
    color: white;
    font-size: 25px;
}
.column {
  float: left;
  width: 50%;
  height: 700px;
  padding: 20px;
  box-shadow: 20px 20px 50px grey;
}
h2{
    font-size: 60px;
    font-family: 'Acme', sans-serif;
    font-family: 'Bungee', cursive;
    color: black;
    text-align: center;
    margin-top: 250px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
label{
    font-size: 30px;
    color: floralwhite;
}
form{
    margin-top: 100px;
}
input{
    color: black;
    font-size: 20px;
}
input[type=text] {
    background: transparent;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid rgb(0, 0, 0);
}
input[type=password] {
    background: transparent;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid rgb(0, 0, 0);
}
input[type=text]:focus {
  outline: none;
}
input[type=password]:focus{
    outline: none;
}
input.remember{
    width: 20px;
    height: 20px;
}
i {
    text-shadow: 2px 4px 6px rgb(144, 136, 144);
    color: black;
}
::placeholder {
  color: white;
  opacity: 1; 
}

a{
    text-decoration: none;
}
a:active{
    text-decoration: none;
}
button{
    font-size: 20px;
    padding: 5px;
    background-color: whitesmoke;
    border: none;
    width: 25%;
}
    </style>
    <script src="https://kit.fontawesome.com/8e3961f127.js" crossorigin="anonymous"></script>
</head>
<body >
    
    <div class="row">
        <div class="column" style="background-image: url('login.jpg'); background-size: cover;">
        <h2>LOGIN</h2>
        </div>
        <div class="column" style="background-image: linear-gradient(to right, rgb(4, 190, 113) , rgb(15, 81, 224));">
          <CENTER>
            <form id="form" method="post" action="validate.php">
                <i id="icon" class="fa-solid fa-user" style="font-size:25px; padding: 4px;"></i>
                <input type="text" id="fname" name="username" placeholder="Username"><br><br><br>
                <i id="icon" class="fa-solid fa-unlock" style="font-size:25px; padding: 4px;"></i>
                <input type="password" id="password" name="password" placeholder="Password" ><br><br><br>
                <input type="checkbox" name="remember" class="remember">Remember Me<br><br><br>
                <button type="submit" name="login" value="login">Login</button>
            </form>
          </CENTER>
        </div>
      </div>
      <?php
    if(isset($_COOKIE['username']) and isset($_COOKIE['password'])) {
        $username = $_COOKIE['username'];
        $password = $_COOKIE['password'];
        echo "<script>
            document.getElementById('username').value = '$username'
            document.getElementById('password').value = '$password'
        </script>";
    }
?>
</body> 
</html>