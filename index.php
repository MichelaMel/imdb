<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Imdb</title>

    <!-- Bootstrap--> 
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--additional fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  
       <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <header>
       
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="prod/logo.jpg"></a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav nav1">
                  <li><a href="#">movies</a></li>
                  <li><a href="#">celebs & photos</a></li>
                  <li><a href="#">community</a></li>
                  <li><a href="#">news</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a class="setting" href="#"><span class="glyphicon glyphicon-cog"></span></a></li>
                  <li><a class="account" href="#"><img src="prod/account.png"></a></li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
          <div class="film-slide-info">
            <h2 class="film-title">THE MARTIAN</h2>
            <p class="film-category"><span>ADVENTURE </span><span>SCI-FI </span><span>THRILLER</span></p>
            <button class="btn btn-lg btn-trailer">Watch trailer 
              <span class="glyphicon glyphicon-play-circle">
            </button>
          <div class="info-data">
            <p>In theaters</p>
            <p class="film-data">15 Oct, 2015 (USA)</p>
          </div>        
    </header>
	  <section>
     <div class="container max-box">
      <ul class="nav nav-pills">
          <li role="presentation">
            <a href="#">In theaters</a>
          </li>
          <li role="presentation">
            <a href="#">Coming Soon</a>
          </li>
          <li role="presentation">
            <a href="#">Charts</a>
          </li>
          <li role="presentation">
            <a href="#">Tv series</a>
          </li>
          <li role="presentation">
            <a href="#">Trailers</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More
            <span class="caret"></span>
            </a>
           <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
            </ul>
          </li>
          <li role="presentation">
            <button class="btn star-btn">
              <i class="fa fa-star" aria-hidden="true"></i> 179
            </button>
          </li>
      </ul> 
      <hr>
      <div class="row">
        <div class="col-sm-2 col-xs-12 icon-grid ">
          <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
          <i class="fa fa-th fa-lg" aria-hidden="true"></i>
        </div>
        <div class="col-sm-3 col-xs-12 line img-responsive">
          <!--<img src="prod/bar.png">-->
        </div>
        <div class="col-sm-4 col-xs-12 col-sm-offset-3">
          <div class="search-container">
              <input type="text" class="searchbar">
              <i class="fa fa-search" aria-hidden="true"></i>
          </div>
        </div>
      </div>       
      <div class="row">
          <div class="col-sm-4 col-xs-12">
            <div class="box-film">
              <img src="prod/madmax.png" class="img-responsive">
              <div class="film-spec">
                <h3>MAD MAX: FURY ROAD</h3> 
                <p class="box-category">Action, Adventure, Sci-fi</p>
                <div class="rank">
                  <span class="glyphicon glyphicon-heart"></span>
                  <span>8.6</span>
                </div>
              </div>
              <div class="triangle-bottom-right"></div>                   
            </div>
          </div> 
          <div class="col-sm-4 col-xs-12">
            <div class="box-film">
              <img src="prod/madmax.png" class="img-responsive">
              <div class="film-spec">
                <h3>MAD MAX: FURY ROAD</h3> 
                <p class="box-category">Action, Adventure, Sci-fi</p>
                <div class="rank">
                  <span class="glyphicon glyphicon-heart"></span>
                  <span>8.6</span>
                </div>
              </div>
              <div class="triangle-bottom-right"></div>                   
            </div>
          </div> 
          <div class="col-sm-4 col-xs-12">
            <div class="box-film">
              <img src="prod/madmax.png" class="img-responsive">
              <div class="film-spec">
                <h3>MAD MAX: FURY ROAD</h3> 
                <p class="box-category">Action, Adventure, Sci-fi</p>
                <div class="rank">
                  <span class="glyphicon glyphicon-heart"></span>
                  <span>8.6</span>
                </div>
              </div>
              <div class="triangle-bottom-right"></div>                   
            </div>
          </div> 
          <div class="col-sm-4 col-xs-12">
            <div class="box-film">
              <img src="prod/madmax.png" class="img-responsive">
              <div class="film-spec">
                <h3>MAD MAX: FURY ROAD</h3> 
                <p class="box-category">Action, Adventure, Sci-fi</p>
                <div class="rank">
                  <span class="glyphicon glyphicon-heart"></span>
                  <span>8.6</span>
                </div>
              </div>
              <div class="triangle-bottom-right"></div>                   
            </div>
          </div> 
          <div class="col-sm-4 col-xs-12">
            <div class="box-film">
              <img src="prod/madmax.png" class="img-responsive">
              <div class="film-spec">
                <h3>MAD MAX: FURY ROAD</h3> 
                <p class="box-category">Action, Adventure, Sci-fi</p>
                <div class="rank">
                  <span class="glyphicon glyphicon-heart"></span>
                  <span>8.6</span>
                </div>
              </div>
              <div class="triangle-bottom-right"></div>                   
            </div>
          </div> 
          <div class="col-sm-4 col-xs-12">
            <div class="box-film">
              <img src="prod/madmax.png" class="img-responsive">
              <div class="film-spec">
                <h3>MAD MAX: FURY ROAD</h3> 
                <p class="box-category">Action, Adventure, Sci-fi</p>
                <div class="rank">
                  <span class="glyphicon glyphicon-heart"></span>
                  <span>8.6</span>
                </div>
              </div>
              <div class="triangle-bottom-right"></div>                   
            </div>
          </div> 

          <div class="scroll text-center"><img src="prod/scroll.png"></div>                                     
     </div> 
    </section>
    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-2 col-xs-12"><img class="logo-footer" src="prod/imdb.png"> </div>
          <div class="col-sm-4 col-sm-offset-2 col-xs-12 text-center">
              <a class="social-icon" href="#">
                <i class="fa fa-twitter  fa-2x" aria-hidden="true"></i>
              </a>
              <a class="social-icon" href="#">
                <i class="fa fa-facebook-square  fa-2x" aria-hidden="true"></i>
              </a>
              <a class="social-icon" href="#">
                <i class="fa fa-instagram  fa-2x" aria-hidden="true"></i>
              </a>
          </div>
          <div class="col-sm-2 col-sm-offset-2.5 col-xs-12 copyr">
            <span>1990-2015 IMDB.COM INC.</span>
          </div>
          <div class="col-xs-12 text-center anchor-container">
            <a class="anchor" href="#">SHOW MENU</a>
          </div>
        </div>
      </div>
      <div class="amazingcarousel-hover-effect" style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%; cursor: pointer; background-image: url(&quot;https://amazingcarousel.com/wp-content/uploads/amazingcarousel/10/carouselengine/skins/hoveroverlay-64-64-4.png&quot;); background-repeat: no-repeat; background-position: center center; display: none;"></div>
      <li class="amazingcarousel-item" style="display: block; position: relative; background-image: none; background-color: transparent; margin: 0px; padding: 0px; width: 240px;">
                    <div class="amazingcarousel-item-container" style="position: relative; margin: 0px 0px 12px;">
<div class="amazingcarousel-image">
  <a href="https://www.youtube.com/embed/YE7VzlLtp-4" title="Big Buck Bunny" class="html5lightbox" data-group="amazingcarousel-10"><img src="https://amazingcarousel.com/wp-content/uploads/amazingcarousel/10/images/big_buck_bunny_480_270.jpg" alt="Big Buck Bunny"></a>
  <div class="amazingcarousel-text">
    <div class="amazingcarousel-text-bg"></div>
    <div class="amazingcarousel-title">Big Buck Bunny</div>
  </div>
<div class="amazingcarousel-play-video" style="position:absolute;left:0;top:0;width:100%;height:100%;cursor:pointer;background-image:url('https://amazingcarousel.com/wp-content/uploads/amazingcarousel/10/carouselengine/skins/playvideo-64-64-0.png');background-repeat:no-repeat;background-position:center center;"></div><div class="amazingcarousel-hover-effect" style="display:none;position:absolute;left:0;top:0;width:100%;height:100%;cursor:pointer;background-image:url('https://amazingcarousel.com/wp-content/uploads/amazingcarousel/10/carouselengine/skins/hoveroverlay-64-64-4.png');background-repeat:no-repeat;background-position:center center;"></div></div>                    </div>
                <div class="amazingcarousel-hover-effect" style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%; cursor: pointer; background-image: url(&quot;https://amazingcarousel.com/wp-content/uploads/amazingcarousel/10/carouselengine/skins/hoveroverlay-64-64-4.png&quot;); background-repeat: no-repeat; background-position: center center; display: none;"></div></li>
                <div class="amazingcarousel-prev" style="overflow: hidden; position: absolute; cursor: pointer; width: 32px; height: 32px; background: url(&quot;https://amazingcarousel.com/wp-content/uploads/amazingcarousel/10/carouselengine/skins/arrows-32-32-4.png&quot;) left top no-repeat; display: block;"></div>
                <div class="amazingcarousel-next" style="overflow: hidden; position: absolute; cursor: pointer; width: 32px; height: 32px; background: url(&quot;https://amazingcarousel.com/wp-content/uploads/amazingcarousel/10/carouselengine/skins/arrows-32-32-4.png&quot;) right top no-repeat; display: block;"></div>

    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
   </body>
</html>