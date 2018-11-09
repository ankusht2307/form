<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reach Us</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!--importing font-->
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Lobster|Mali|Pacifico|Permanent+Marker" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styl.css">
  </head>
  <body>
    <!--navbar-->
    <nav>
      <div class="navbar navbar-light" style="background-color: #fff;">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle " style="background-color:#f4a142;" data-toggle="collapse" data-target="#example">
            <span class="icon-bar" style="background-color: #dedede;"></span>
            <span class="icon-bar" style="background-color: #dedede;"></span>
            <span class="icon-bar" style="background-color: #dedede;"></span>
            </button>
            <a href="index.php" class="navbar-brand"><img src="img/logo.png" width="180px" height="35px" alt="horoscopeji.com"></a>
          </div>
          <div  class="navbar-collapse collapse text-center" id="example">
            <ul class="nav navbar-nav">
              <li><a href="index.php"><p style="color: orange; margin-bottom: 0px; margin-top: 0px;">Horoscope</p><span class="sr-only">(current)</span></a></li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: orange;">Zodiac Sign <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="text-center"><a href="aries.php">Aries</a></li>
                <li class="divider"></li>
                <li class="text-center"><a href="tauraus.php">Taurus</a></li>
                <li class="divider"></li>
                <li class="text-center"><a href="gemini.php">Gemini</a></li>
                <li class="divider"></li>
                <li class="text-center"><a href="cancer.php">Cancer</a></li>
                <li class="divider"></li>
                <li class="text-center"><a href="leo.php">Leo</a></li>
                <li class="divider"></li>
                <li class="text-center"><a href="virgo.php">Virgo</a></li>
                <li class="divider"></li>
                <li class="text-center"><a href="libra.php">Libra</a></li>
                <li class="divider"></li>
                <li class="text-center"><a href="scorpio.php">Scorpio</a></li>
                <li class="divider"></li>
                <li class="text-center"><a href="sagittarius.php">Sagittarius</a></li>
                <li class="divider"></li>
                <li class="text-center"><a href="capricorn.php">Capricorn</a></li>
                <li class="divider"></li>
                <li class="text-center"><a href="aquarius.php">Aquarius</a></li>
                <li class="divider"></li>
                <li class="text-center"><a href="pisces.php">Pisces</a></li>
              </ul>
            </li>
            <li><a href="zodiaccal.php"><p style="color: orange; margin-bottom: 0px; margin-top: 0px;">Sunsign Finder</p></a></li>
            <li><a href="personality.php"><p style="color: orange; margin-bottom: 0px; margin-top: 0px;">Signs & Personality</p></a></li>
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
          <h2 style="color: white; text-align:center;">Welcome to HoroscopeJi.com</h2>
        </div>
      </div>
    </div>
  </section>
  <hr style="border-style: dashed; margin-top: 0px;">
  <!--end jumboron-->
  <!--zodiac selection-->
  <div class="container" id="thearies">
    <h2 style="color: #fff; text-align: center; font-size: 30px; text-align: center; margin-bottom: 50px; margin-top: 50px;" >Feel Free To Write Us!!</h2>
  </div>
  <!--End zodiac selection-->
  <!--content for general-->
  <section class="container">
    
    <?
        /*
            Sample Database String from Heroku
            'postgres://wvvgxgeoriumxg:c4e8612ae286a211a8c94976df0811e9b6fcdacb3ef3e468401e0619b38a1004@ec2-107-22-168-211.compute-1.amazonaws.com:5432/d5siauekbh9qlu' 
            */
            $dbconn = pg_connect("host=ec2-23-21-171-249.compute-1.amazonaws.com port=5432 dbname=d5bfmmilh08e9i user=weeyppzdvmawbl password=c0b534e93a7b15481529e16eda0cc19504b16834ecc472acbbfe9235603cd4b3");
            $fName = pg_escape_string($_POST['firstName']);
            $lName = pg_escape_string($_POST['lastName']);
            $emailName = pg_escape_string($_POST['email']);
            $queryName = pg_escape_string($_POST['query']);
            
            if(!empty( $fName ) && !empty( $lName )){ 
                $sql = "INSERT into Person (firstName,lastName,email,query) values ('".$fName."', '".$lName."', '".$emailName."', '".$queryName."')" ;
                pg_query($dbconn, $sql); 
    ?> 
         <!--   <div class="alert alert-success" role="alert">
                Record Inserted Succesfully in Heroku Postgres Database !!!
            </div> -->
            <?
                //close sql if statement bracket
                }
            ?>
     <div class="container bg">
     <div class="row">
         <div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom: 0px; margin-top: 0px;"></div>
      <div class="col-md-4 col-sm-4 col-xs-12" >
            <form class="form-container" method="post">
                <div class="form-group">
                    <input required="true" type="text" class="form-control" name="firstName" id="firstName" placeholder="Enter Your First Name!!">
                </div>

                <div class="form-group">
                    <input  required="true" type="text" class="form-control" name="lastName" id="lastName" placeholder="Enter Your Last Name!!">
                </div>

                <div class="form-group">
                    <input  required="true" type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email!!">
                </div>

                <div class="form-group">
                    <textarea  required="true" type="text" class="form-control" rows="3" name="query" id="query" placeholder="Submit Your Query here!!"></textarea>
                </div>
              <button type="submit" class="btn btn-warning btn-block" style="color:#fff;">~Submit~</button>
            </form>

         </div>
<!--         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Key</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Query</th>
                    </tr>
                </thead>
                <tbody> 
                        <?    
                            /*
                            Use below code to create table and insert some sample records if using first time
                            $sql = "drop table Person;";
                            pg_query($dbconn, $sql);
                            
                            $sql = "create table Person (id SERIAL PRIMARY KEY, firstName varchar(15), lastName varchar(15) );";
                            pg_query($dbconn, $sql);
                            
                            $sql = "INSERT into Person (firstName,lastName) values ('Rudra', 'Zaa')" ;
                            pg_query($dbconn, $sql);
                            $sql = "INSERT into Person (firstName,lastName) values ('Shivanya', 'Zaa')" ;
                            pg_query($dbconn, $sql);
                            $sql = "INSERT into Person (firstName,lastName) values ('Minal', 'Zaa')" ;
                            pg_query($dbconn, $sql);
                            */ 
                            //$sql = "select * from Person";
                            //$resultset = pg_query($dbconn, $sql);
                            //while($row = pg_fetch_array($resultset)) {
                                  // echo '<tr>
                                  //      <td>'.$row[0].'</td>
                                  //      <td>'.$row[1].'</td>
                                  //      <td>'.$row[2].'</td>
                                  //      <td>'.$row[3].'</td>
                                  //      <td>'.$row[4].'</td>
                                  //  </tr>'; 
                          //  }
                          //  pg_close($dbconn);
                        ?> 
              </tbody>
            </table>
            </div>    -->
        </div>
        </div>
</section>

  <!--End content for genral-->
  <hr style="border-top: 2px dotted orange; border-top-style: dashed;">
  <!--Button for zodiac selection-->
  <aside>
    <div class="container ">
      <div class="row ">
        <div class="col-sm-3">
          <h4>Choose Your Horoscope Here!!</h4>
        </div>
        <div class="dropdown col-sm-2">
          <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Choose Your Horoscope!!
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <li><a href="aries.php">Aries</a></li>
            <li><a href="tauraus.php">Taurus</a></li>
            <li><a href="gemini.php">Gemini</a></li>
            <li><a href="cancer.php">Cancer</a></li>
            <li><a href="leo.php">Leo</a></li>
            <li><a href="virgo.php">Virgo</a></li>
            <li><a href="libra.php">Libra</a></li>
            <li><a href="scorpio.php">Scorpio</a></li>
            <li><a href="sagittarius.php">Sagittarius</a></li>
            <li><a href="capricorn.php">Capricorn</a></li>
            <li><a href="aquarius.php">Aquarius</a></li>
            <li><a href="pisces.php">Pisces</a></li>
          </ul>
        </div>
      </div>
    </div>
  </aside>
  <!--End Button for horoscope selection-->
  <hr style="border-top: 2px dotted orange; border-top-style: dashed; margin-bottom: 0px;">
  <!--Thought and newsletter-->
  <article id="thethought" >
    <h3 style="color:#000; text-align: center;">Thought Of The Day!!</h3>
    <p style="color: #000; text-align: left;">
      <strong>“I always feel happy, you know why? Because I don’t expect anything from anyone, expectations always hurt. Life is short, so love your life, be happy and keep smiling.”
      <br>
      By <em>William Shakespeare</em>
      </strong>
    </p>
  </article>
  <!--Thought and newsletter-->
  <hr style="border-top: 5px dotted orange; border-top-style: dashed; margin-top: 0px;">
  <!--footer-->
  <footer>
    <div class="container" >
      <ul class="row footeranchor" >
        <li class="col-xs-3 " ><a href="index.php">Home</a></li>
        <li class="col-xs-3"><a href="sitemap.php">Site Map</a></li>
        <li class="col-xs-3"><a href="company.php">About Us</a></li>
        <li class="col-xs-3"><a href="faq1.php">FAQ</a></li>
      </ul>
    </div>
    <!--copyright-->
    <div class="footer-copyright">
      <p style="text-align: center; background-color: grey; margin-bottom: 0px;">© Copyright 2018 - Horoscopeji.com, Inc. - All rights reserved</p>
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