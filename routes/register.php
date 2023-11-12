<html>

<head>
    <title>Faculty Registration | QR Attendance System</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <link rel="shortcut icon" href="img/reglogo.png" type="image/x-icon">
    <script type="text/javascript" src="js/register.js"></script>
</head>

<body>
    <center>
        <div id="headerSection">
            <h1>Faculty Registration</h1>
        </div>

        <div id="container">
            
            <h2>Registration</h2>
            <form action="../api/register.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Name" required>&nbsp
            <input type="number" name="mob" placeholder="Mobile" pattern=".{10}" title="Field must be 10 numbers long" required><br><br>
            <input type="password" name="pass" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>&nbsp
            <input type="password" name="cpass" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required><br><br>
            <input type="text" name="semsub" id="semsub" placeholder="Semester-Subject" oninput="upperCase()" required>&nbsp
            <input type="email" name="add" placeholder="Email Address" required><br><br>
            <button id="loginbtn" type="submit" name="registerbtn">Register</button><br><br>
            Already user? <a href="../">Login here</a>
        </form>
    </div>
        <footer>
            <p>Developed by Team Quadz (6th Sem CS-1 2023)</p>
        </footer>
    </center>
</body>

</html>