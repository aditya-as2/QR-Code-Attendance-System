<html>
    <head>
        <title>Display Attendance</title>
        <link rel="shortcut icon" href="img/datalogo.png" type="image/x-icon">
        <script type="text/javascript" src="js/data.js"></script>
        <link rel="stylesheet" type="text/css" href="css/data.css">

    </head>
    <body>
        <center>
            <h1>Display Attendance</h1>
            <div class="container">
                <form action="" method="post">
                    Enter Semester-Subject:&nbsp<input type="text" name="semsub" id="semsub" oninput="upperCase()" placeholder="Eg.5TH-IWT">
                    <input type="submit" class="btn" name="search" value= "Get Data">
                </form>
                <table border="2">
                    <tr>
                        <th style='text-align: center'>Enrollment no.</th>
                        <th style='text-align: center'>Full name</th>
                        <th style='text-align: center'>Semester-Subject</th>
                    </tr>
                    <?php
                    $server = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "qrform";
                    
                    $conn = mysqli_connect($server, $username, $password,$dbname);

                    if(isset($_POST['search'])){
                        $semsub=$_POST['semsub'];

                        $query = "SELECT * FROM form WHERE semsub='$semsub'";
                        $query_run=mysqli_query($conn,$query);

                        while($row=mysqli_fetch_array($query_run)){
                            ?>
                            <tr>
                                <td style='text-align: center'><?php echo $row['enrollno'];?></td>
                                <td style='text-align: center'><?php echo $row['fullname'];?></td>
                                <td style='text-align: center'><?php echo $row['semsub'];?></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </table>

            </div>
        </center>
    </body>
</html>