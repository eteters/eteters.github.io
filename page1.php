<?php
	if(!session_start()) {
		header("Location: error.php");
		exit;
	}
	
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	if (!$loggedIn) {
		header("Location: login.php");
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Evan Teters</title>
    
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Evan Teters">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Scrolling Nav CSS-->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="app.css" rel="stylesheet" type="text/css">
     <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
        
    <!--  Scrolling nav JS      -->
    <script src="js/scrolling-nav.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa" rel="stylesheet">
    <style>
        
     
   
    </style>
    
    
    
</head>
    <body>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#main">
                    
                    <img class="img-responsive img-circle" id="brand" alt="Sloth" src="img/different.jpg"> Evan Teters
                    
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                     <li>
                        <a class="page-scroll" href="#work">My Work</a>
                    </li>
                    <li>                  
                        <a class="page-scroll" href="#creative">Creativity</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About/Contact</a>
                    </li>
                    <li id="excusifyTab">
                        <a  href="https://ec2-54-200-128-123.us-west-2.compute.amazonaws.com/project/Excusify/excuso.html" target="_blank"> Excusify</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <section id="main">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>Who am I?</h1>

                    
                    <div id="carousel" class="jumbotron carousel slide" data-ride="carousel" data-interval="2500">
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel" data-slide-to="1"></li>
                            <li data-target="#carousel" data-slide-to="2"></li>
                          </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner">
                            <div class="item active">
                              <h1>I am Evan</h1>
                              
                            </div>
                            <div class="item">
                              <h1>I am Curious</h1>
                              
                            </div>
                            <div class="item">
                              <h1>I am Creative</h1>
                              
                            </div>
                          </div>

                          <!-- Controls -->
                          <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
<!--                            <span class="glyphicon glyphicon-chevron-left"></span>-->
                          </a>
                          <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
<!--                            <span class="glyphicon glyphicon-chevron-right"></span>-->
                          </a>
                        </div> <!-- Carousel -->

                </div>
        <!--  /ROW-->
            </div>
            <div class="row">
            
                <div class="col-xs-6 col-xs-offset-3 text-center"> 
                
                    <a class="btn btn-default page-scroll" href="#work"><span class="glyphicon glyphicon-arrow-down"></span>Find Out more!<span class="glyphicon glyphicon-arrow-down"></span></a>
                
                </div>
            
            </div>
<!--        /Section    -->
        </section>
       
<!--        /container-->
    </div>
        
        <div class="container">
        
        <!-- /.row -->
            
            <section id="work">
                <div class="row">
                
                    <div class="col-lg-12 text-center">
                    <h1>My Skills</h1>
                    
                    </div>
                
                </div>

            
                <div class="row text-center">

                    <div class="col-sm-4">
                        
                            <div class="skills-box" id="clang">
                                <a  data-toggle="collapse" href="#cinfo">
                                <p>C</p>
                                <img class="icon" src="img/clang.png" alt="The C Language">
                            
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 ">
                        
                        <div id="swift" class="skills-box" >
                            <a  data-toggle="collapse" href="#swiftinfo">
                            <p>Swift</p>
                            <img class="icon" src="img/swift2.png" alt="Swift">
                            </a>
                        </div>
                        
                    
                    </div>
                    <div class="col-sm-4">
                        <div class="skills-box" id="web" >
                            <a  data-toggle="collapse" href="#webinfo">
                            <p>Web</p>
                            <img class="icon" src="img/webstuff.png"  alt="HTML, CSS, JS">
                            </a>
                        </div>
                    </div>

                </div>
                <div class="row text-left">
                    <div class="col-sm-4">
                        <div class="collapse" id="cinfo">
                                    I have been learning C for a year and half, through three courses. I have used C and C++ to implement algorithms like <ul><li>Merge Sort</li><li>Dijkstra's</li><li>Prim's</li><li>Kruskals</li> and more.</ul>I also have used these languages to implement data structures like <ul><li>linked lists</li><li>Complex directed and undirected graphs</li><li>and search trees.</li></ul>  
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="collapse" id="swiftinfo">
                                    <p>I am learning Swift at a rapid pace so for a competition being held by the Renold's Journalism Institute at Mizzou. <a href=" https://www.rjionline.org/stories/four-teams-tap-ai-in-10th-annual-rji-student-competition" target="_blank">Here is an article about the competition. </a> My team was one of four interdisciplinary teams chosen to develop an app to present in May.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="collapse panel-body" id="webinfo">
                                    <p>I am learning Web development for a course I am taking right now, and have learned a lot from hackathons as well. I have found that it is a fast and easy way to build apps, and put ideas to work. I have worked a lot with JavaScript at the three Hackathons I have attended. One project was seen to fruition, and it can be found below!></p>
                        </div>
                        
                    </div>
                
                </div> 
                <div class="row text-center">
                    <div class="col-xs-12">
                        <a  id="excButton"class="btn btn-default" href="https://ec2-54-200-128-123.us-west-2.compute.amazonaws.com/project/Excusify/excuso.html" target="_blank"><h1>Click Here to go to my hackathon project, Excusify</h1></a>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-xs-12">
                        <br>
                        <a class="btn btn-default page-scroll" href="#creative"><span class="glyphicon glyphicon-arrow-down"></span>Or take a look at my creative projects<span class="glyphicon glyphicon-arrow-down"></span></a>
                
                    </div>
                     
                </div>
                
                
            </section>
   
        
        <section id="creative">
            <div class="row">
                <div>
                    <div class="col-xs-12">
                        <h1 id="creativeTitle">Creative Endeavors</h1>
                    </div>
                
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="panel panel-default">
                        <a data-toggle="collapse" href="#vid">
                            <div class="panel-heading"><h3 class="panel-title">High School Senior Year IB Film project</h3></div>
                        </a>
                        <div id="vid" class="collapse panel-body">
                            <div>
                            <p>For my final film in my high school IB Film class, I worked with three others in a group to come up with something powerful and unique. I did all of the editing for this film, and I am fairly proud of how it turned out, especially considering how challenging it was to work with the music. </p>
                            
                            </div>
                            
                            <div  class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/LLSRBaCcx2A" allowfullscreen></iframe>
                            </div>
                        </div>
                        
                        
                        <a id="mapclick" data-toggle="collapse" href="#dnd">
                            <div class="panel-heading"><h3 class="panel-title">Dungeons & Dragons</h3></div>
                        </a>
                        <div id="dnd" class="collapse panel-body">
                        
                            <p>I run a dungeons and dragons game with my friends, creating a story and world for them to interact with. This is the map I made for them. They currently reside On the coast of Serikholm, the norse-styled nation of the north. I have written a lot of story and lore, and every time we play requires a lot of preparation.</p>
                            
                            <img id="map" class="img-responsive img-rounded center-block" src="getImage.php" alt="The World">
                        
                            
                        
                        </div>
                    
                    </div>

                </div>
            </div>
            <div class="row text-center">
                    <div class="col-xs-12">
                    
                        <a class="btn btn-default page-scroll" href="#about"><span class="glyphicon glyphicon-arrow-down"></span>More about me<span class="glyphicon glyphicon-arrow-down"></span></a>
                
                    </div>
                    
                </div>
           
        </section>
        <section id="about">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Evan Teters</h1>
                    

                    
<!--                    EDUCATION -->
                    <div class="media">
                      <div class="media-left">
                       
                          <span class="media-object glyphicon glyphicon-education">
                          </span>
                        
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">Education</h4>
                            I attend the University of Missouri in Columbia.
                          <br>I am a sophomore pursuing a Bachelors in Computer Science and a minor in math
                          <br>Graduating 2015
                          <br>Relevant classes taken:
                          <ul>
                            <li>Computer Science 1050,2050: Introductions to Computer Science and the C language</li>
                            <li>Computer Science 3050: More advanced C/C++ and study of important algorithms</li>
                            <li>Computer Science 2830: Introduction to Web Development: HTML, CSS, Javascript, PHP, MySQL all covered.
 </li>
                            <li>Calculus 1-3</li>
                          </ul>
                      </div>
                    </div>
<!--             ~~~~~~~~~~~~CONTACT INFO ~~~~~~~~~~   -->
                  <div class="media">
                      <div class="media-left">
                       
                          <span class="media-object glyphicon glyphicon-envelope">
                          </span>
                        
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">Contact Me</h4>
                            <ul>
                          
                                <li>evan@teters.net</li>
                                <li><a href="tel:417-841-7263">(417)841-7263</a></li>
                                
                          
                          </ul>
                      </div>
                    </div>
        
                </div>
            </div>
        </section>
        <!-- /.row -->
        

    </div>
    <!-- /.container -->

   
        
</body>

</html>