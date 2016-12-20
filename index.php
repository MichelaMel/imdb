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
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap-slider/dist/css/bootstrap-slider.css">
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
      <!--Vertical Carousel-->
      <div id="carousel-example-vertical" class="carousel vertical slide">
          <div class="carousel-inner" role="listbox">
              <div class="item active" data-attribute="https://www.youtube.com/embed/BIfow8eonmQ">              
                  <div class="carousel-caption">
                    <div class="film-slide-info">
                      <h2 class="film-title">THE MARTIAN</h2>
                      <p class="film-category"><span>ADVENTURE </span><span>SCI-FI </span><span>THRILLER</span></p>
                      <button class="button btn btn-lg btn-trailer" data-toggle="modal" data-target="#myModal">Watch trailer 
                        <span class="glyphicon glyphicon-play-circle"></span>
                      </button>
                      <div class="info-data">
                        <p>In theaters</p>
                        <p class="film-data">15 Oct, 2015 (USA)</p>
                      </div>        
                    </div>
                  </div>
                </div>
                <div class="item" data-attribute="https://www.youtube.com/embed/3PkkHsuMrho">
                  <div class="carousel-caption">
                    <div class="film-slide-info">
                      <h2 class="film-title">HUNGER GAMES</h2>
                      <p class="film-category"><span>ADVENTURE </span><span>SCI-FI </span><span>THRILLER</span></p>
                      <button class="btn btn-lg btn-trailer" data-toggle="modal" data-target="#myModal">Watch trailer 
                        <span class="glyphicon glyphicon-play-circle"></span>
                      </button>
                      <div class="info-data">
                        <p>In theaters</p>
                        <p class="film-data">15 Oct, 2015 (USA)</p>
                      </div>        
                    </div>
                  </div>
                </div>
                <div class="item" data-attribute="https://www.youtube.com/embed/RFinNxS5KN4">
                  <div class="carousel-caption">
                    <div class="film-slide-info">
                      <h2 class="film-title">JURASSIC WORLD</h2>
                      <p class="film-category"><span>ADVENTURE </span><span>SCI-FI </span><span>THRILLER</span></p>
                      <button class="btn btn-lg btn-trailer" data-toggle="modal" data-target="#myModal">Watch trailer 
                        <span class="glyphicon glyphicon-play-circle"></span>
                      </button>
                      <div class="info-data">
                        <p>In theaters</p>
                        <p class="film-data">15 Oct, 2015 (USA)</p>
                      </div>        
                    </div>
                  </div>
                </div>
                <div class="item" data-attribute="https://www.youtube.com/embed/79Q2rrQlPW4">
                  <div class="carousel-caption">
                    <div class="film-slide-info">
                      <h2 class="film-title">EVEREST</h2>
                      <p class="film-category"><span>ADVENTURE </span><span>SCI-FI </span><span>THRILLER</span></p>
                      <button class="btn btn-lg btn-trailer" data-toggle="modal" data-target="#myModal">Watch trailer 
                        <span class="glyphicon glyphicon-play-circle"></span>
                      </button>
                      <div class="info-data">
                        <p>In theaters</p>
                        <p class="film-data">15 Oct, 2015 (USA)</p>
                      </div>        
                    </div>
                  </div>
                </div>
          </div>
           <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              <li data-target="#carousel-example-generic" data-slide-to="3"></li>
           </ol>
           <!-- Controls arrow -->
          <a class="up carousel-control" href="#carousel-example-vertical" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="down carousel-control" href="#carousel-example-vertical" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
       </div>
       <!--Modal with film trailer-->
        <div id="myModal" class="modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">
                <iframe class="iframe" width="560" height="315" src="https://www.youtube.com/embed/BIfow8eonmQ" frameborder="0" allowfullscreen></iframe>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div> 
      <!-- Main Navbar-->        
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="prod/logo.jpg"></a>
          </div>
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
    </header>
	  <section>
     <div class="container max-box">
      <ul class="nav nav-pills" id="second-nav">
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
        <div class="col-sm-2 col-xs-12 ">
          <div class="list-grid-icon-container">
            <i class="fa fa-bars fa-lg" id="list-icon" aria-hidden="true"></i>
            <i class="fa fa-th fa-lg" id="grid-icon" aria-hidden="true"></i>
          </div>
        </div>
        <div class="col-sm-6 col-xs-12 filter-slider">        
            <div class="sliders row">
              <div class="col-sm-12">
                <div class="bootstrap-slider">
                  <span class="filter-label">IMDB Rating<span class="filter-selection"></span></span>
                  <b class="filter-min"></b> <input id="filter-rank" type="text" class="bootstrap-slider" value="" data-filter-group="rank"> <b class="filter-max"></b>
                </div>
              </div>
            </div>          
        </div>        
        <div class="col-sm-4 col-xs-12">
          <div class="search-container">
              <input type="text" class="searchbar">
              <button type="submit" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>       
      <div class="grid">          
            <div class="box-film box-film-grid" data-rank="8">
              <img src="prod/madmax.png" class="img-responsive">
              <div class="film-spec">
                <h3>MAD MAX: FURY ROAD</h3> 
                <p class="box-category">Action, Adventure, Sci-fi</p>
                <p class="plot">
                  Lorem ipsum dolor sit amet, ad nec reque facilisi splendide. Eos et eros malorum corrumpit, quo cu wisi inermis. Mandamus urbanitas prodesset sed ne. Sea vero graeco delicatissimi in, error primis pri te, pri et eruditi signiferumque. Vim adhuc soluta cu, partem possit detraxit nec in, ad pro equidem mediocrem.<br>
                  Vel mundi assentior ei, soluta tibique vituperatoribus cu vel, at eos movet aeterno. Nihil option complectitur per no. Dicant nostrud reprimique id vis, probo iudico qui eu. Eu mea tollit recusabo, facer perfecto moderatius pri cu.
                  </p>
                <div class="rank">
                  <span class="glyphicon glyphicon-heart"></span>
                  <span>8</span>
                </div>
              </div>
              <div class="triangle-bottom-right"></div>                   
            </div>                    
            <div class="box-film box-film-grid" data-rank="7">
              <img src="prod/hungergames.png" class="img-responsive">
              <div class="film-spec">
                <h3>THE HUNGER GAMES</h3> 
                <p class="box-category">Action, Adventure, Sci-fi</p>
                <p class="plot">
                  Lorem ipsum dolor sit amet, ad nec reque facilisi splendide. Eos et eros malorum corrumpit, quo cu wisi inermis. Mandamus urbanitas prodesset sed ne. Sea vero graeco delicatissimi in, error primis pri te, pri et eruditi signiferumque. Vim adhuc soluta cu, partem possit detraxit nec in, ad pro equidem mediocrem.<br>
                  Vel mundi assentior ei, soluta tibique vituperatoribus cu vel, at eos movet aeterno. Nihil option complectitur per no. Dicant nostrud reprimique id vis, probo iudico qui eu. Eu mea tollit recusabo, facer perfecto moderatius pri cu.
                  </p>
                <div class="rank">
                  <span class="glyphicon glyphicon-heart"></span>
                  <span>7</span>
                </div>
              </div>
              <div class="triangle-bottom-right"></div>                   
            </div>                    
            <div class="box-film box-film-grid" data-rank="6">
              <img src="prod/jurassic.png" class="img-responsive">
              <div class="film-spec">
                <h3>JURASSIC WORLD</h3> 
                <p class="box-category">Action, Adventure, Sci-fi</p>
                <p class="plot">
                  Lorem ipsum dolor sit amet, ad nec reque facilisi splendide. Eos et eros malorum corrumpit, quo cu wisi inermis. Mandamus urbanitas prodesset sed ne. Sea vero graeco delicatissimi in, error primis pri te, pri et eruditi signiferumque. Vim adhuc soluta cu, partem possit detraxit nec in, ad pro equidem mediocrem.<br>
                  Vel mundi assentior ei, soluta tibique vituperatoribus cu vel, at eos movet aeterno. Nihil option complectitur per no. Dicant nostrud reprimique id vis, probo iudico qui eu. Eu mea tollit recusabo, facer perfecto moderatius pri cu.
                  </p>
                <div class="rank">
                  <span class="glyphicon glyphicon-heart"></span>
                  <span>6</span>
                </div>
              </div>
              <div class="triangle-bottom-right"></div>                   
            </div>                  
            <div class="box-film box-film-grid" data-rank="7">
              <img src="prod/everest.png" class="img-responsive">
              <div class="film-spec">
                <h3>EVEREST</h3> 
                <p class="box-category">Action, Adventure, Sci-fi</p>
                <p class="plot">
                  Lorem ipsum dolor sit amet, ad nec reque facilisi splendide. Eos et eros malorum corrumpit, quo cu wisi inermis. Mandamus urbanitas prodesset sed ne. Sea vero graeco delicatissimi in, error primis pri te, pri et eruditi signiferumque. Vim adhuc soluta cu, partem possit detraxit nec in, ad pro equidem mediocrem.<br>
                  Vel mundi assentior ei, soluta tibique vituperatoribus cu vel, at eos movet aeterno. Nihil option complectitur per no. Dicant nostrud reprimique id vis, probo iudico qui eu. Eu mea tollit recusabo, facer perfecto moderatius pri cu.
                  </p>
                <div class="rank">
                  <span class="glyphicon glyphicon-heart"></span>
                  <span>7</span>
                </div>
              </div>
              <div class="triangle-bottom-right"></div>                   
            </div>                    
            <div class="box-film box-film-grid" data-rank="6">
              <img src="prod/insurgent.png" class="img-responsive">
              <div class="film-spec">
                <h3>INSURGENT</h3> 
                <p class="box-category">Action, Adventure, Sci-fi</p>
                <p class="plot">
                  Lorem ipsum dolor sit amet, ad nec reque facilisi splendide. Eos et eros malorum corrumpit, quo cu wisi inermis. Mandamus urbanitas prodesset sed ne. Sea vero graeco delicatissimi in, error primis pri te, pri et eruditi signiferumque. Vim adhuc soluta cu, partem possit detraxit nec in, ad pro equidem mediocrem.<br>
                  Vel mundi assentior ei, soluta tibique vituperatoribus cu vel, at eos movet aeterno. Nihil option complectitur per no. Dicant nostrud reprimique id vis, probo iudico qui eu. Eu mea tollit recusabo, facer perfecto moderatius pri cu.
                  </p>
                <div class="rank">
                  <span class="glyphicon glyphicon-heart"></span>
                  <span>6</span>
                </div>
              </div>
              <div class="triangle-bottom-right"></div>                   
            </div>
          
          
            <div class="box-film box-film-grid" data-rank="8">
              <img src="prod/sicario.png" class="img-responsive">
              <div class="film-spec">
                <h3>SICARIO</h3> 
                <p class="box-category">Action, Adventure, Sci-fi</p>
                <p class="plot">
                  Lorem ipsum dolor sit amet, ad nec reque facilisi splendide. Eos et eros malorum corrumpit, quo cu wisi inermis. Mandamus urbanitas prodesset sed ne. Sea vero graeco delicatissimi in, error primis pri te, pri et eruditi signiferumque. Vim adhuc soluta cu, partem possit detraxit nec in, ad pro equidem mediocrem.<br>
                  Vel mundi assentior ei, soluta tibique vituperatoribus cu vel, at eos movet aeterno. Nihil option complectitur per no. Dicant nostrud reprimique id vis, probo iudico qui eu. Eu mea tollit recusabo, facer perfecto moderatius pri cu.
                  </p>
                <div class="rank">
                  <span class="glyphicon glyphicon-heart"></span>
                  <span>8</span>
                </div>
              </div>
              <div class="triangle-bottom-right"></div>                   
            </div>
      </div>
      <div class="row">     
          <div class="col-sm-12 scroll text-center"><img src="prod/scroll.png">
          </div>
      </div>                                     
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
    </footer>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>se
    <script src="node_modules/bootstrap-slider/dist/bootstrap-slider.min.js"></script>
    <script type="text/javascript" src="node_modules/isotope-layout/dist/isotope.pkgd.min.js"></script>
   <script type="text/javascript" src="https://npmcdn.com/isotope-layout@3.0.1/dist/isotope.pkgd.js"></script>
    <script type="text/javascript" src="filejs.js"></script>

  
    <!--<script type="text/javascript">
     $('.carousel').carousel({
      interval: 2000
      })
    </script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
   </body>
</html>