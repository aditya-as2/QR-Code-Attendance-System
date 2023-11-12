<?php
session_start();
if (!isset($_SESSION['id'])) {
  header("location: ../");
}
$data = $_SESSION['data'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <title>QR-code</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/qrcode.css">
  <script type="text/javascript" src="js/qrcode.js"></script>
  <link rel="shortcut icon" href="img/qrlogo.png" type="image/x-icon">
</head>

<body>
  <div class="form">
      <div id="headerSection" style="
        display: flex;
        width: 650px;
        justify-content: space-between;">
        <a href="logout.php"><button id="logout-button">Logout</button></a>
        <a href="datasearch.php"><button id="logout-button">See Attendance</button></a>
      </div>
      <form>
        <input type="url" id="website" name="website" value="http://localhost/Attendance-via-qr/form" required />
        <button type="button" onclick="generateQRCode()">
          Generate QR Code
        </button>
    </form>
  </div>
  <div>
    <p id="note">Scan QR-code for attendance</p>
  </div>
  <div id="qrcode-container">
    <canvas id="qrcode" class="qrcode"></canvas>
  </div>
</body>

</html>