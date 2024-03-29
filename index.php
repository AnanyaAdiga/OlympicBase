<?php
    $db = mysqli_connect('localhost','root','','olympic_base');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="title" content="OLYMPIC BASE">
    <meta name="description" content="The Olympic Medallists Database">
    <meta name="author" content="Bhoomika & Gagana">
    <link href="./images/favicon.ico" rel="shortcut icon">
    <title>OLYMPIC BASE</title>

    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
    </script>


    <!--Font Awesome CDN-->
    <script src="https://kit.fontawesome.com/c93e5b0e53.js" crossorigin="anonymous">
    </script>

    <!--Custom Stylesheet-->
    <link rel="stylesheet" href="./css/style.css">
    <style>
      .carousel-inner > .item > img,
      .carousel-inner > .item > a > img 
      {
        width: 70%;
        margin: auto;
      }
    </style>
  </head>
  <body class="Bybg">
    <!--Header-->
    <header class="hdrbg">
      <div class="container"> 
        <div class="row">
          <div class="text-center">
            <h1 class="site-title ob" style="font-size:80px;">OLYMPIC BASE</h1>
            <h2 class="site-title desc" style="font-size:30px;">The Olympic Medallists Database</h2>
          </div>
        </div>
      </div>
      </header>
      <!--Header-->
      <header class="Bdbg">
        <div>
          <nav style="text-align:right;">
            <p class="header-links">
              <a href="/CA/OlySpts.php" class="px-2">OLYMPIC SPORTS</a> |
              <a href="/CA/Sports.php" class="px-2">SPORTS</a> |
              <a href="#footer" class="px-1">ABOUT US</a> |
              <a href="login.php" class="px-2">LOGIN</a>
            </p>
          </nav>
        </div>
      </header>
      <main>
        <div class="container">
          <br>
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
              
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="./images/olympics-logo.jpg" alt="Olympic Logo" width="460" height="345">
              </div>
              
              <div class="item">
                <img src="./images/IndianAthletes.jpeg" alt="Indian Athletes" width="460" height="345">
              </div>
                  
              <div class="item">
                <img src="./images/Winter-Olympics-2022.jpg" alt="Winter Olympics 2022" width="460" height="345">
              </div>
            </div>
              
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </main>

      <section id="courses">
        <h1 class="display-4 coursehead text-center Sphdr">Check out the Results below!*</h1> <br>
          <div class="container-fluid cards">
            <div class="row">
              <div class="col-lg-3 col-md-6">
        
                <div class="card text-center">
                  <img src="./images/SO1.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title Mcn">Summer Olympics</h5>
                    <a href="Ssports.php" class="stretched-link" style="text-decoration: none;" rel="Click here"></a>
                  </div>
                </div>
              </div>
                
              <div class="col-lg-3 col-md-6">
                <div class="card">
                  <img src="./images/WO.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title Mcn">Winter Olympics</h5>
                    <a href="Wsports.php" class="stretched-link" style="text-decoration: none;" rel="Click here"></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6">
                <div class="card text-center">
                  <img src="./images/athletes.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title Mcn">Athletes</h5>
                    <a href="./CA/Athletes.php" class="stretched-link" style="text-decoration: none;" rel="Click here"></a>
                  </div>
                </div>
              </div>
                
              <div class="col-lg-3 col-md-6">
                <div class="card text-center">
                  <img src="./images/Flg.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title Mcn">Countries</h5>
                    <a href="./CA/Countries.php" class="stretched-link" style="text-decoration: none;" rel="Click here"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        
  <!-- footer -->
  <footer id="footer" class="text-center hdrbg">
  <a href="/comment.php">Comments</a><br>
    <a href="https://www.linkedin.com/in/bhoomika-poojari/" add target="_blank"> <i class=" foot fab fa-linkedin fa-lg"></i></a>
    <a href="https://www.linkedin.com/in/gagana-darshana/" add target="_blank"><i class=" foot fab fa-linkedin fa-lg"></i></a>
    <a href="mailto:poojaribhoomika5@gmail.com" add target="_blank"><i class=" foot fas fa-envelope fa-lg "></i></a>
    <a href="mailto:gagana.darshana@gmail.com" add target="_blank"> <i class=" foot fas fa-envelope fa-lg"></i></a>
    <p class="cp"> Built by Ananya.K.Adiga <br>*This website consists of results of only selected games and it's events.</p>
  </footer>
  <!-- /footer  -->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
          crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
          integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
          crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
          integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
          crossorigin="anonymous">
        </script>
      </body>
</html>