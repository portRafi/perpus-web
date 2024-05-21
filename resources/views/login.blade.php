<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman login</title>
    <link rel="stylesheet" href="a.css">
    <link rel="Web icon" type="png" href="logo-html-5-2048.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
 <style>
    body {
    font-family: Arial, sans-serif;
    background-color : rgb(215, 215, 215);
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.login-container {
    background-color: #fff;
    padding: 30px;
    border-radius: 9px;
    box-shadow: 0px 0px 10px rgba(90,90, 90, 0.300);
}

h1 {
    text-align: center;
    margin-bottom: 80px;
    color: #0056b3;
    
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 5px;
    font-size: 12px;
}

input {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 10px;
}

button {
    padding: 10px;
    background-color: #0056b3;
    color: #fff;
    border: none;
    border-radius: 10px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
    
}

a {
    margin: 10px;
    font-size: 10px;
    text-align: center;
}

.login-container a {
    text-decoration: none;
}

.logins:hover{
    background-color: darkblue;
    transition: all 0.5s ease;
}
 </style>
<body>
    <div class="login-container">
        <a href="index.html"><i class='bx bx-chevron-left' id="btn"></i></a>
        <h1>Login</h1>
        <form action="app.html" method="POST">
            <label for="useename">Username:</label>
            <input type="text" id="username" name="username" required placeholder="Enter your name">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required placeholder="Enter your password">

            <a href="l.html" class="text-decoration-none" >Forgot password</a>
            <a href="/dashboard">
                <button type="submit" class="logins">Login User</button>
            </a>
            <a href="">
                <button type="submit" class="logins">Login Petugas</button>
            </a>
            
        </form>
    </div> 
</body>
</html>
