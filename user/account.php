<?php 
session_start();
include "../connect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Your Account </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/user.css">
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../Img/logo.ico">
    <style>
        .box {
            display:block;
            width:520px;
            height:700px;
            background:#1f2833;
            border-radius:18px;
            margin-top:30px;
            animation:faded ease 2s;
            padding-top:20px
        }
        .box3 {
            display:none;
            width:300px;
            height:65px;
            background:rgb(211, 206, 206);
            border-radius:18px;
            position:absolute;
            margin-left:800px;
            margin-top:-408px;
            animation: faded ease 2s;
        }
        button {background-color: rgba(197,43,41,255);
        border: none;
        color: white;
        padding: 10px 30px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        border-radius:10px;
        font-weight:bold;
        font-family:rubik;}
        button:hover {background-color:rgb(223, 1, 1);
        transition: 1s;
    cursor:pointer}
        </style>
</head>

<body style="font-family:rubik">
<center>
    <div id="blind"><a href="../index.html"><img src="../Img/logo.png" style="height:70px;width:70px;margin-top:20px"></a>
<div class="box">
    <p style="font-weight:bold;font-size:30px">Account Details</p>
    <h3 style="text-align:left;margin-left:80px"> Username: <input type="text" value="Shunster" style="font-size:16px;margin-left:10px"></h3>
    <h3 style="text-align:left;margin-left:80px;margin-top:50px"> Phone Number: <input type="number" value="0122356220" style="font-size:16px;margin-left:10px;width:210px"></h3>
    <h3 style="text-align:left;margin-left:80px;margin-top:50px"> Email: <input type="text" value="shaunlye2002@gmail.com" style="font-size:16px;margin-left:10px;width:290px"></h3>
    <h3 style="text-align:left;margin-left:80px;margin-top:50px"> Date of Birth: <input type="date" value="2002-09-30" style="font-size:16px;margin-left:10px;width:230px"></h3>
    <h3 style="text-align:left;margin-left:80px;margin-top:50px"> Country: <input type="text" value="Malaysia" style="font-size:16px;margin-left:10px;width:270px"></h3>
    <h3 style="text-align:left;margin-left:80px;margin-top:50px"> Password: <input type="password" value="**************" style="font-size:16px;margin-left:10px;width:255px"></h3>
    <button type="submit" id="button" style="margin-top:40px" onclick="saves()">Save Changes</button></div>
</div>
<div class="box3" id="box3">
    <h2 style="color:black">Details Updated!</h2>
</div></center>

<script>
    function saves() {
    var i = 0;
    document.getElementById('blind').style.filter="blur(5px)";
    document.getElementById('box3').style.display="block";
    var tt = setInterval(function() {
    i = i + 1;
    var counter = 6 - i;
    if (counter === 0) {
      clearInterval(tt);
      window.location = "../index.html"
    }
  }, 1000);
};
    </script>
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