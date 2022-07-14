<?php
session_start();
include "../connect.php";

$uname = $_POST['uname'];
$pass = $_POST['pass'];
$ph = $_POST['ph'];
$em = $_POST['em'];
$dob = $_POST['dob'];
$country = $_POST['country'];

$name = "SELECT * FROM up WHERE uname='$uname' ";
$phs = "SELECT * FROM up WHERE ph='$ph'";
$ems = "SELECT * FROM up WHERE em='$em'";
$result2 = mysqli_query($conn, $phs);
$result3 = mysqli_query($conn, $ems);
$result = mysqli_query($conn, $name);

    if (mysqli_num_rows($result) > 0) {
        header("Location: ../user/register.php?error=This username is already taken");
        exit();}
    if (mysqli_num_rows($result2) > 0) {
        header("Location: ../user/register.php?error=This phone number is already taken");
        exit();}
    if (mysqli_num_rows($result3) > 0) {
        header("Location: ../user/register.php?error=This email is already taken");
        exit();}
    else {$stmt = $conn->prepare("insert into up(uname, pass, ph, em, dob, country) values(?,?,?,?,?,?)");
        $stmt->bind_param("ssisss", $uname, $pass, $ph, $em, $dob, $country);
        $stmt->execute();
        $stmt->close();
        $conn->close();}
?>

<head>
    <title> Thanks for joining us! </title>
    <meta charset="utf-8">
    <meta http-equiv = "refresh" content = "3; url = ../User/Login.php" />
    <link rel="stylesheet" href="../css/user.css">
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../Img/logo.ico">
</head>

<body style="font-family:rubik;">
    <center><img src="../Img/logo.png" style="height:200px;width:200px;margin-top:30px">
    <h1 style="margin-top:80px">Thank you for signing up with HoCater Games!</h1>
    <p> You'll be redirected to the login page in 5 seconds...</p><br>
    <p>If the page does not load, <a href="../Index.html" style="text-decoration:underline">click here.</a></p></center>
    
</body>

<footer>
    <div class="box2" style="position:static"><h2 style="position:absolute;margin-left:600px;margin-top:50px"> Malaysia</h2>
        <p style="position:absolute;margin-left:600px;margin-top:100px"> 1st Floor Block C Plaza, <br> Jalan Bukit Bintang,
        <br> Kuala Lumpur, Wilayah Persekutuan <br> 55100, Malaysia
        <br><br> Tel: +603-2395234 
        <br> Fax: +603-2395234
        <br> Mail: mysupport@HoCater.gmail.com</p>
        <h2 style="position:absolute;margin-left:1050px;margin-top:50px"> Singapore</h2>
        <p style="position:absolute;margin-left:1050px;margin-top:100px"> Blk 406 Tampines St, <br> 41 #01-23 S(),
            <br> Singapore <br> 179103, Singapore
            <br><br> Tel: +65-63247382 
            <br> Fax: +65-63247382
            <br> Mail: sgsupport@HoCater.gmail.com</p>
            <h2 style="position:absolute;margin-left:1500px;margin-top:50px"> Indonesia</h2>
        <p style="position:absolute;margin-left:1500px;margin-top:100px"> Jl Raya Bekasi Tmr, <br> Dki Jakarta,
            <br> Dki Jakarta, Jakarta <br> 13930, Indonesia
            <br><br> Tel: +62-0-21-850-2589
            <br> Fax: +62-0-21-850-2589
            <br> Mail: indsupport@HoCater.gmail.com</p>
        <img src="../Img/mys.png" style="height:200px;width:450px;margin-left:80px;margin-top:75px">
        <p style="margin-left:600px;margin-top:-5px"> FOLLOW US --> </p>
        <div style="margin-left:600px;margin-top:-5px">
        <a href="https://www.facebook.com/instane.craft/" class="fa fa-facebook"></a>
        <a href="https://twitter.com/instanecraft" class="fa fa-twitter" style="margin-left:10px">
        <a href="https://www.youtube.com/channel/UChOogxu5-Wqd0p2Hjv81zHw" class="fa fa-youtube" style="margin-left:10px">
        <a href="https://www.linkedin.com/in/shaun-lye-a06912207/" class="fa fa-linkedin" style="margin-left:10px">
        <a href="https://www.instagram.com/shaunl_02/" class="fa fa-instagram" style="margin-left:10px"></a></div></div>
</footer>