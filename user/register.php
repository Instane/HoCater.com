<!DOCTYPE html>
<html lang="en">

<head>
    <title> Registration </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/user.css">
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../Img/logo.ico">
    <style>
    body {background-color:rgb(99, 100, 105)}
    .select1 {width:310px;
    height:25px;
    background-color:rgb(238, 231, 231)}
    input {width:300px;
    margin-top:-20px}
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
    font-family:rubik;
    cursor:pointer
    }
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
        transition: 1s;}
    .box {
        display:block;
        background:rgb(211, 206, 206);
        width: 400px;
        height: 630px;
        margin-bottom:30px;
        border-radius:15px;}
    select {background-color:rgb(230, 220, 220)}
    #message {
        display:none;
        background:rgb(211, 206, 206);
        position: auto;
        width:400px;
        border-radius:10px;
        margin-bottom:20px;
        margin-top:-20px;
        animation: faded2 ease 0.8s ;
        animation-iteration-count: 1;}
    #message p {
        padding: 15px 35px;
        font-size: 16px;}
        .valid {
  color: green;}
.valid:before {
  position: relative;
  left: -15px;
  content: "???";
}
.invalid {
  color: red;
}
.invalid:before {
  position: relative;
  left: -15px;
  content: "???";
}
@keyframes faded2 {
        0% {transform:translateY(0px);
            opacity: 0;
        }
        100% {transform:translateY(0px);
            opacity: 1;
         }}
    </style>
</head>

<body style="font-family:rubik;">
    
    <center><br><div class=a4><a href=../index.html><img src="../Img/logo.png" style="height:70px;width:70px;margin-top:0px;margin-left:-5px;margin-bottom:30px"></a></div> 

    <?php if (isset($_GET['error'])) { ?>
    <p class="error" id="phpErrors" style="margin-bottom:30px;margin-top:-10px"><i class="fa-solid fa-circle-exclamation" style="margin-bottom: 2px; margin-right: 2px"></i><?php echo $_GET['error']; ?></p>
    <?php } ?>

    <div id="message">
        <p id="length" class="invalid" style="display:none;text-align:left">Minimum 6 Characters </p>
        <p id="plength" class="invalid" style="display:none;text-align:left">Minimum 8 Characters </p>
        <p id="pcase" class="invalid" style="display:none;text-align:left;margin-top:-30px">At least one capital letter </p>
        <p id="pnum" class="invalid" style="display:none;text-align:left;margin-top:-30px">At least one digit </p>
        <p id="pascon" class="invalid" style="display:none;text-align:left;margin-top:-30px">Passwords do not match</p>
        <p id="pasconv" class="valid" style="display:none;text-align:left;margin-top:30px">Password matches</p>
        <p id="at" class="invalid" style="display:none;text-align:left"> Email is Invalid</p>
        <p id="atc" class="valid" style="display:none;text-align:left"> Email is valid</p>
    </div>

    <div class=box><br><h2 style="color:black;margin-top:5px;margin-bottom:40px"> Create an account</h2>
    <form action="../Rd/signup.php" method="post">
    <input type="text" id="uname" name="uname" placeholder="Username" required=" " pattern=".{6,}" title="Must contain at least 6 Characters"><br><br><br>
    <input type="number" id="ph" name="ph" style="width:300px;" placeholder="Phone Number" required=""><br><br><br>
    <input type="text" id="em" name="em" size="40" placeholder="Email Address" required=" "><br><br><br>
    <p style="font-size:10px;text-align:left;color:black;margin-left:45px;margin-top:-12px"> (Date of birth) </p>
    <input type="date" id="dob" name="dob" size="40" required=" " style="padding-right:5px"><br><br><br>
    <select name="country" id="country" class="select1" style="width:315px;height:28px;font-family:rubik" placeholder="Country" pattern="(?=[A-Z])" title="You must select a country" required="">
        <option value="!">-Country-</option>
        <option value="Malaysia">Malaysia</option>
        <option value="Singapore">Singapore</option>
        <option value="Indonesia">Indonesia</option>
        <option value="Phillippines">Phillippines</option>
        <option value="Thailand">Thailand</option>
        <option value="South Korea">South Korea</option>
        <option value="Brunei">Brunei</option>
        <option value="Japan">Japan</option>
        <option value="Taiwan">Taiwan</option>
        <option value="India">India</option>
        <option value="UK">United Kingdom</option>
        <option value="US">United States</option>
        <option value="others">others</option>
    </select><br><br><br>
    <input type="password" id="pass" name="pass" size="30" placeholder="New Password" required=" " pattern="(?=.*[A-Z]).{8,}" title="Must contain at least 8 digits, a capital letter, and a single digit"><br>
    <br><br>
    <input type="password" id="con" name="con" size="30" placeholder="Confirm New Password" required=" "><br><div class=a4>
    <button type="submit" style="font-weight:bold;margin-top:40px" id="register" onclick="return validate()">CREATE ACCOUNT</button></div></div><br>
    </form>

    <b style="color:#111111"> Already a member? </b>
    <p><div class=a4><button type="button" style="font-weight:bold;padding:8px 40px;font-size:15px;" class="arrow"><a href = "./login.php" style="color:#C5C6C7">Sign in now!</button></div></a></p></center>

    <script>
    var u = document.getElementById('uname');
    var p = document.getElementById('pass');
    var c = document.getElementById('con');
    var e = document.getElementById('em');
    var t = document.getElementById('country');
    var length = document.getElementById("length");

//Username function
  u.onfocus = function() {
  document.getElementById("message").style.display = "block";
  document.getElementById("length").style.display = "block";
  document.getElementById("phpErrors").style.display = "none";
}
  u.onblur = function() {
  document.getElementById("message").style.display = "none";
  document.getElementById("length").style.display = "none";
    }
  u.onkeyup = function() {
    if(u.value.length >= 6) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }}

//Password function
  p.onfocus = function() {
    document.getElementById("message").style.display = "block";
    document.getElementById("plength").style.display = "block";
    document.getElementById("pcase").style.display = "block";
    document.getElementById("pnum").style.display = "block";
    document.getElementById("phpErrors").style.display = "none";
  }
    p.onblur = function() {
  document.getElementById("message").style.display = "none";
  document.getElementById("plength").style.display = "none";
  document.getElementById("pcase").style.display = "none";
  document.getElementById("pnum").style.display = "none";
}
  p.onkeyup = function() {
    if(p.value.length >= 8) {
    plength.classList.remove("invalid");
    plength.classList.add("valid");
  } else {
    plength.classList.remove("valid");
    plength.classList.add("invalid");
  }

  var upperCaseLetters = /[A-Z]/g;
  if(p.value.match(upperCaseLetters)) {  
    pcase.classList.remove("invalid");
    pcase.classList.add("valid");
  } else {
    pcase.classList.remove("valid");
    pcase.classList.add("invalid");
  }

  var number = /[1-9]/g;
  if(p.value.match(number)) {  
    pnum.classList.remove("invalid");
    pnum.classList.add("valid");
  } else {
    pnum.classList.remove("valid");
    pnum.classList.add("invalid");
  }
}

//Email Addres Function
var symbol = /\S+@\S+\.\S+/;
e.onfocus = function() {
  if (e.value.length < 0) {
        document.getElementById("message").style.display = "block";
        document.getElementById("atc").style.display = "block";
        document.getElementById("at").style.display = "none";
        document.getElementById("phpErrors").style.display = "none";}
    if (e.value.match(symbol)) {
        document.getElementById("message").style.display = "block";
        document.getElementById("atc").style.display = "block";
        document.getElementById("at").style.display = "none";
        document.getElementById("phpErrors").style.display = "none";}
    else {
        document.getElementById("message").style.display = "block";
        document.getElementById("at").style.display = "block";
        document.getElementById("phpErrors").style.display = "none";}
    }
    e.onblur = function() {
  document.getElementById("message").style.display = "none";
  document.getElementById("at").style.display = "none";
  document.getElementById("atc").style.display = "none";
    }

    e.onkeyup = function() {
    if(e.value.match(symbol)) {
    document.getElementById("at").style.display = "none";
    document.getElementById("atc").style.display = "block";
  } else {
    document.getElementById("at").style.display = "block";
    document.getElementById("atc").style.display = "none";
  }}

  function validate() {
    var symbol = /\S+@\S+\.\S+/;
    var em1 = document.getElementById('em').value;
    var p1 = document.getElementById('con').value;
    var c1 = document.getElementById('pass').value;
    var t1 = document.getElementById('country').value;
    if (em1.match(symbol)) {
      if (p1 === c1) {
        if (t1 == "!") {
          alert("Please select a country.")
          return false;
        }
        else {
          return true;
        }
      }
      else {
        alert("Passwords do not match.")
      }
    }
    else {
      alert("Please enter a valid email.")
    }}
</script>

</body>

<footer>
    <div class="box2" style="position:static;margin-top:180px"><h2 style="position:absolute;margin-left:600px;margin-top:50px"> Malaysia</h2>
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