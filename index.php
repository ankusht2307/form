<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sunsign Calculator</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!--importing font-->
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styl.css">

</head>
<script type="text/javascript">
    
    function ZodiacSign() {
      var set_day = document.MainForm.DaySelector.selectedIndex;
      var set_month = document.MainForm.MonthSelector.selectedIndex;

      if (0 == set_month || 0 == set_day) {document.MainForm.sign.value = 'You are...'; return;}

      if (!Validate()) return;

      if (set_month == 1 && set_day <=19) {document.MainForm.sign.value = "CAPRICORN"; return;}
      if (set_month == 1 && set_day >=20) {document.MainForm.sign.value = "AQUARIUS"; return;}
      if (set_month == 2 && set_day <=18) {document.MainForm.sign.value = "AQUARIUS"; return;}
      if (set_month == 2 && set_day >=19) {document.MainForm.sign.value = "PISCES"; return;}
      if (set_month == 3 && set_day <=20) {document.MainForm.sign.value = "PISCES"; return;}
      if (set_month == 3 && set_day >=21) {document.MainForm.sign.value = "ARIES"; return;}
      if (set_month == 4 && set_day <=19) {document.MainForm.sign.value = "ARIES"; return;}
      if (set_month == 4 && set_day >=20) {document.MainForm.sign.value = "TAURUS"; return;}
      if (set_month == 5 && set_day <=20) {document.MainForm.sign.value = "TAURUS"; return;}
      if (set_month == 5 && set_day >=21) {document.MainForm.sign.value = "GEMINI"; return;}
      if (set_month == 6 && set_day <=22) {document.MainForm.sign.value = "GEMINI"; return;}
      if (set_month == 6 && set_day >=21) {document.MainForm.sign.value = "CANCER"; return;}
      if (set_month == 7 && set_day <=22) {document.MainForm.sign.value = "CANCER"; return;}
      if (set_month == 7 && set_day >=23) {document.MainForm.sign.value = "LEO"; return;}
      if (set_month == 8 && set_day <=22) {document.MainForm.sign.value = "LEO"; return;}
      if (set_month == 8 && set_day >=23) {document.MainForm.sign.value = "VIRGO"; return;}
      if (set_month == 9 && set_day <=22) {document.MainForm.sign.value = "VIRGO"; return;}
      if (set_month == 9 && set_day >=23) {document.MainForm.sign.value = "LIBRA"; return;}
      if (set_month == 10 && set_day <=22) {document.MainForm.sign.value = "LIBRA"; return;}
      if (set_month == 10 && set_day >=23) {document.MainForm.sign.value = "SCORPIO"; return;}
      if (set_month == 11 && set_day <=21) {document.MainForm.sign.value = "SCORPIO"; return;}
      if (set_month == 11 && set_day >=22) {document.MainForm.sign.value = "SAGITTARIUS"; return;}
      if (set_month == 12 && set_day <=21) {document.MainForm.sign.value = "SAGITTARIUS"; return;}
      if (set_month == 12 && set_day >=22) {document.MainForm.sign.value = "CAPRICORN"; return;}
    }

    function Validate() {
      var set_day = document.MainForm.DaySelector.selectedIndex;
      var set_month = document.MainForm.MonthSelector.selectedIndex;

      if (set_month == 2 && set_day > 29) {alert("There are only a maximum of 29 days in February."); return false;}
      if (set_month == 4 && set_day == 31) {alert("There are only 30 days in April."); return false;}
      if (set_month == 6 && set_day == 31) {alert("There are only 30 days in June."); return false;}
      if (set_month == 9 && set_day == 31) {alert("There are only 30 days in September."); return false;}
      if (set_month == 11 && set_day == 31) {alert("There are only 30 days in November."); return false;}

      return true;
    }
  </script>
<body id="">
<!--navbar-->
<nav>	
<div class="navbar navbar-default">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="" class="navbar-brand"><img src="img/si.png" height="20px" alt="Rashifal.com"></a>
</div>

<div class="collpase navbar-collapse text-center" id="example">
<ul class="nav navbar-nav">
<li><a href="index.html"><p style="color: orange; margin-bottom: 0px; margin-top: 0px;">Horoscope</p><span class="sr-only">(current)</span></a></li>
<li class="dropdown"><a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Zodiac Sign <span class="caret"></span></a>
<ul class="dropdown-menu">
<li class="text-center"><a href="aries.html">Aries</a></li>
<li class="divider"></li>
<li class="text-center"><a href="tauraus.html">Taurus</a></li>
<li class="divider"></li>
<li class="text-center"><a href="gemini.html">Gemini</a></li>
<li class="divider"></li>
<li class="text-center"><a href="cancer.html">Cancer</a></li>
<li class="divider"></li>
<li class="text-center"><a href="leo.html">Leo</a></li>
<li class="divider"></li>
<li class="text-center"><a href="virgo.html">Virgo</a></li>
<li class="divider"></li>
<li class="text-center"><a href="libra.html">Libra</a></li>
<li class="divider"></li>
<li class="text-center"><a href="scorpio.html">Scorpio</a></li>
<li class="divider"></li>
<li class="text-center"><a href="sagittarius.html">Sagittarius</a></li>
<li class="divider"></li>
<li class="text-center"><a href="capricorn.html">Capricorn</a></li>
<li class="divider"></li>
<li class="text-center"><a href="aquarius.html">Aquarius</a></li>
<li class="divider"></li>
<li class="text-center"><a href="pisces.html">Pisces</a></li>
</ul>
</li>
<li><a href="zodiaccal.html"><p style="color: orange; margin-bottom: 0px; margin-top: 0px;">Sunsign Finder</p></a></li>
</ul>
</div>
</div>
</div>
</nav>
<!--end navbar-->

<!--jumbotron-->

<section>
<div class="jumbotron">
<div class="container-fluid text-right">
<div>
<h2 style="color: white; text-align:center;">Welcome to Rashifal.com</h2> 
</div>
</div>
</div>
</section>
<hr style="border-style: dashed; margin-bottom: 0px; margin-top: 0px;">
<!--end jumboron-->


<!-- Signup Form-->

<div class="container bbg">
<div class="row">
<div class="col-xs-12">
<h1 class="title">Zodiac Sign Finder</h1>
<p>The Zodiac is made up of 12 different Sun Signs. Your date of birth determines which one you are. Enter your date of birth and get your Zodiac Sun Sign:</p>
</div>
</div>
</div>

<div class="container bg" id="myform">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <form name="MainForm" class="MainForm" method="post">
            <div class="form-group">
              <select name="MonthSelector" onChange="javascript:Validate();" class="form-control">
                <option value="0" selected>Select Month</option>
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
              </select>
            </div>

          <div class="form-group">
              <select name="DaySelector" onChange="javascript:Validate();" class="form-control">
                <option value="0" selected>Select Day</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select>
          </div>

          <div class="form-group">
            <input id="button" type="button" value="Get My Sign" class="btn btn-warning form-control" onClick="javascript:ZodiacSign();">
          </div>
          <div class="form-group">
            <input name="sign" class="form-control" value="You are..." />
          </div>
    </form>  
</div>
<div class="col-md-4 col-sm-4 col-xs-12"></div> 
</div>
</div>







<!--End Signup Form-->


<hr style="border-top: 2px dotted orange; border-top-style: dashed; margin-top: 0px;">
<!--Buttons-->

<aside>
<div class="container ">
<div class="row ">
<div class="col-sm-3">
<h4>Not Aries Change Here!!</h4>
</div>


<div class="dropdown col-sm-2">
<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose Your Horoscope!!
<span class="caret"></span>
</button>
<ul class="dropdown-menu">
<li><a href="aries.html">Aries</a></li>
<li><a href="tauraus.html">Tauraus</a></li>
<li><a href="gemini.html">Gemini</a></li>
<li><a href="cancer.html">Cancer</a></li>
<li><a href="leo.html">Leo</a></li>
<li><a href="virgo.html">Virgo</a></li>
<li><a href="libra.html">Libra</a></li>
<li><a href="scorpio.html">Scorpio</a></li>
<li><a href="sagittarius.html">Sagittarius</a></li>
<li><a href="capricorn.html">Capricorn</a></li>
<li><a href="aquarius.html">Aquarius</a></li>
<li><a href="pisces.html">Pisces</a></li>
</ul>
</div>

</div>
</div>
</aside>
<!--End Buttons-->

<hr style="border-top: 2px dotted orange; border-top-style: dashed; margin-bottom: 0px;">

<!--Thought and newsletter-->


<article id="thethought" >
<div class="container">
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12"></div>
<div class="col-md-4 col-sm-4 col-xs-12" style="margin-top: 30px; margin-bottom:30px;">
<h3 style="color:#000; text-align: center;">Thought Of The Day!!</h3>
<p style="color: purple; text-align: left;"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui, ab. Quia cum, omnis! Perferendis deleniti quia quos nam molestias iste, laudantium incidunt vel, dolor dolorum totam modi harum dolore.</strong></p>
</div>
<div class="col-md-4 col-sm-4 col-xs-12"></div>
</div>
</div>
</article>
<!--Thought and newsletter-->
<hr style="border-top: 5px dotted orange; border-top-style: dashed; margin-top: 0px;">
<!--footer-->

<footer>

<div class="container" >
<ul class="row footeranchor" >
<li class="col-xs-3" ><a href="index.html" style="color:#fff;">Home</a></li>	
<li class="col-xs-3"><a href="signup.html" style="color:#fff;">Sign Up</a></li>	
<li class="col-xs-3"><a href="company.html" style="color:#fff;">Company Info</a></li>	
<li class="col-xs-3"><a href="faq.html" style="color:#fff;">FAQ</a></li>	
</ul>
</div>
<!--copyright-->
<div class="footer-copyright">
<p style="text-align: center; background-color: grey; margin-bottom: 0px;">© Copyright 2018 - Rashifal.com, Inc. - All rights reserved</p>
</div>
<hr style="border-top: 2px dotted black; border-top-style: dashed; margin-top: 0px; margin-bottom: 0px;">
<!--End copyright-->
</footer>

<!--footer-->





<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>