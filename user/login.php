<!DOCTYPE html>
<html lang="en">
<head>
    <title> Login </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/user.css">
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../Img/logo.ico">
    <style>
        body {background-color:rgb(99, 100, 105)}
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
        .arrow {background-color: rgba(197,43,41,255);
    border: none;
    color: white;
    padding: 10px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    border-radius:10px;
    font-weight:bold;
    font-family:rubik;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='7.41' height='12' viewBox='0 0 7.41 12'%3E%3Cpath d='M10,6,8.59,7.41,13.17,12,8.59,16.59,10,18l6-6Z' transform='translate(-8.59 -6)' fill='%23fff'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right 20px center;
    }
        button:hover {background-color:rgb(223, 1, 1);
        transition: 1s;
    cursor:pointer}
        .box {
            display:block;
            background:rgb(211, 206, 206);
            width: 400px;
            height: 400px;
            margin-top:30px;
            margin-bottom:25px;
            border-radius:15px}
    </style>
</head>

<body style="font-family:rubik;">

    <center><div class="bar"><div class="a4"><a href="../index.html"><img src="../Img/logo.png" style="height:70px;width:70px;margin-top:10px;margin-left:-8px;margin-bottom:-10px"></a></div>
    
    <?php if (isset($_GET['error'])) { ?>
    <p class="error" id="phpErrors"><i class="fa-solid fa-circle-exclamation" style="margin-bottom: 2px; margin-right: 2px"></i>  <?php echo $_GET['error']; ?></p>
    <?php } ?>
    <div class="box"><br><h2 style="color:black">Login Page</h2>
    <form action="../Rd/log.php" method="post">
    <p><input type="text" id="uname" name="uname" placeholder="Username" style="background-image:url(../Img/user.png);padding:2px 25px;padding-left:35px;padding-right:10px;background-size:18px 18px;background-repeat:no-repeat;background-position-x:8px;background-position-y:6px;width:280px;width:250px" required=" "><br><br>
    <input type="password" id="pass" name="pass" placeholder="Password" style="background-image:url(../Img/pass.png);padding:2px 25px;padding-left:35px;padding-right:10px;background-size:18px 18px;background-repeat:no-repeat;background-position-x:8px;background-position-y:6px;width:280px;width:250px;margin-top:5px" required=" "></p>
    <input type="checkbox" id="remember" style="width:15px;height:15px;margin-left:-260px" onclick="rmb()" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> /><p id='rembox'style="font-size:12px;color:black;margin-top:-18px;margin-bottom:40px;margin-left:-150px;font-weight:none"
    > Remember Me? </p>
    <div class=a4><p style="font-size:12px;"><a href="../Rd/Fgpass.html" style="color:black;font-weight:bold">Forgot Password?</a></p>
    <p><button type="submit">LOG IN</button></p></div>
    </div></form><br>

    <b style="color:#111111;"> Don't have an Account? </b>
    <p><b><div class=a4><button type="button" style="font-weight:bold;padding:10px 50px;font-size:18px;" class="arrow"><a href = "./Register.php" style="color:#C5C6C7">Create a HoCater Account</button></div></a></b></p></center>
    <script>
        function rmb() {
            var checkbox = document.getElementById('remember');
            var rem = document.getElementById('rembox');
            if (checkbox.checked == true) {
                rem.style.fontWeight = "bold"
            }
            else {
                rem.style.fontWeight = "normal"
            }
        }

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