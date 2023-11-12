<html>

<head>
    <title>Faculty Login | QR Attendance System</title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <link rel="shortcut icon" href="img/loginlogo.png" type="image/x-icon">
    <script type="text/javascript" src="js/index.js"></script>
</head>

<body>

    <center>
        <div id="headerSection">
            <h1>Faculty Login</h1>
        </div>
        <div id="container">
            <div id="loginSection">
                <h2>Login</h2>
                <form action="api/login.php" method="POST">
                    <input type="number" name="mob" placeholder="Enter mobile" pattern=".{10}" title="Field must be 10 numbers long" required><br><br>
                    <input type="text" name="semsub" id="semsub" placeholder="Enter semester-subject" oninput="upperCase()" required><br><br>
                    <input type="password" name="pass" placeholder="Enter password" required><br><br>
                    <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                    New user? <a href="routes/register.php">Register here</a>
                </form>
            </div>
        </div>

        <footer>
            <p>Developed by Team Quadz (6th Sem CS-1 2023)</p>
        </footer>
    </center>
</body>

</html>