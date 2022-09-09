<?php 
        $formSubmitted = false;



          if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
            $conn = mysqli_connect('localhost', 'root', '', 'mailinglist', '3306');
        }
        if(isset($_POST['email'])) {
            $email = $_POST['email'];
            $date = date('Y/m/d');
            $sql = "INSERT INTO `email` (`email`, `date`) VALUES ('$email', '$date')"; 
    
            $query = mysqli_query($conn, $sql);
            if($query) {
                $formSubmitted = true;
            }
            else{
                $formSubmitted = false;
            }
        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/style.css">
    <title>Joe Malatetsta</title>
<link href="https://fonts.googleapis.com/css2?family=Hi+Melody&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Hi+Melody&family=Josefin+Sans&family=Montserrat:wght@300;500&family=Nunito:wght@600&family=Raleway:wght@400;700&family=Sora:wght@700;800&display=swap" rel="stylesheet">
</head>
<body>

    <!-- LANDING SECTION -->
    <!-- NAVBAR -->
    <section class="landing">
    <nav class="navbar navbar-expand-lg navbar-colors px-4">
        <!-- <a href="#"><h1 class="text-light" id="nameplate"><span id="color1">Joe</span> Malatesta</h1></a> -->
        <button class="navbar-toggler hamburger" type="button" data-toggle="collapse" data-target="#nav-items" aria-controls="nav-items" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="nav-items">
          <ul class="navbar-nav justify-content-between" style=" width: 100%; margin-left: 42%; margin-right: 42%;">
            <li><a class="navigation-element navigation-link nav-link text-light" href="#about">About</a></li>
            <li><a class="navigation-element navigation-link nav-link text-light" href="#cards">Blog</a></li>
            <!-- <li><a class="navigation-element nav-link text-light" href="#experience">Experiecne</a></li> -->
            <li><a class="navigation-element navigation-link nav-link text-light" href="Joseph Malatesta.pdf" target="_blank">Resume</a></li>
          </ul>
        </div> 
      </nav>


    <!-- MAIN -->
    <!-- TODO Change font -->
        <div class="container-fluid text-center main-statement p-3 pt-4 main">
            <div class="row">
                <div class="col-lg-6 col-md align-self-center text-wrap">
                    <h1><span class="standout">Joe</span> Malatesta</h1>
                    <p>Inspired by Innovation</p>
                    <!-- <p>Absolve the guilt that shackles your soul</p> -->
                    <!-- <p>Studying. Learning. Teaching.</p> -->
                    <!-- <h2>Python. Java. HTML. CSS.</h2> -->
                </div>
                <div class="col-lg-6 col-md">
                    <img id="coverpic" src="images/me2.jpg" alt="" class="img-fluid" style="border-radius: 2%;">
                </div>
            </div>
        </div>


        <!-- ABOUT ME STATEMENT -->
        <div class="container-md pt-3 blog-statement text-center">
                <h1>About Me</h1>
                <p>My story, my vision, and my cause</p>
            </div>
            <div class="arrow">
                <a href="#about" style="text-align: center;"><img src="images/arrow.png" alt="" width="100"></a>
        </div>
        </section>


        <!-- ABOUT ME -->
        <div id="about" class="pt-4 container-md">
            <ul class="about-items">
                <li><h1>I'm an aspiring <span class="standout">software developer</span> open to internship opportunities.
                I'm based in Michigan and am pursuing a <span class="standout">Bachelors of Computer Science</span> at Oakland University.
                Since high school, I've had visions of creating ethical, creative, and effective automation software.
                I strive to write readable and maintainable code and I'm driven by my strong will to learn, experiment, and invent.
                I'm well versed in many programming languages and technologies, and I'm always learning more.
                You can check out what im doing over at my <a style="color: rgb(215,215,215); border-bottom: 2px solid #3cdfff;"  class="navigation-link" href="https://github.com/joemmalatesta">Github</a></h1></li>
                <li id="about-logos" class="justify-content-between align-items-center py-2 text-center">
                    <img class="img-fluid" src="/images/about logos/python.png" alt="python logo" width="40">
                    <img class="img-fluid" src="/images/about logos/java.png" alt="java logo" width="40">
                    <img class="img-fluid" src="/images/about logos/html.png" alt="html logo" width="50">
                    <img class="img-fluid" src="/images/about logos/css.png" alt="css logo" width="40">
                    <img class="img-fluid" src="/images/about logos/bootstrap.png" alt="bootstrap logo" width="50">
                    <img class="img-fluid" src="/images/about logos/php.png" alt="php logo" width="60">
                    <img class="img-fluid" src="/images/about logos/mongo.png" alt="mongo logo" width="70">
                    <img class="img-fluid" src="/images/about logos/sql.png" alt="mysql logo" width="80">
                    <img class="img-fluid" src="/images/about logos/Tux.png" alt="linux logo" width="40">                    
                </li>
                <!-- <li style="text-align: center;"><h1>Check out what I'm doing over at <a style="color: rgb(255,255,255); border-bottom: 2px solid #3cdfff"  class="navigation-link" href="github.com">Github</a></h1></li> -->
                <!-- <img id="main-about-picture" class="img-fluid" src="/images/hawaii.jpeg" alt="me in bologna, italy."> -->
                <li class="pt-2 text-center"><h1>Beyond all that, I love to travel and hope to see all that the world has to offer.</h1></li>
            </ul>
        </div>


                <!-- GITHUB CARDS. REDO THESE OR PUT SOMEWHERE ELSE WHEN MORE PROEJCTS ARE DONE. -->

            <!--<div class="container-md d-flex justify-content-around pt-3">
                    <div class="row">
                        <div class="col-md">
                            <div class="row navbar-colors p-2">
                                <div class="col-md align-self-center">
                                    <a href="github.com"><h1 class="standout">osu! Discord Bot</h1></a> 
                                    <p>Accept, display, and store data for osu! players via discord and osu! API's</p>
                                </div>
                                <div class="col-md">
                                    <img class="img-fluid" src="/images/me.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                        <div class="row navbar-colors p-2">
                                <div class="col-md align-self-center">
                                <a href="github.com"><h1 class="standout">Camp Scripts</h1></a> 
                                    <p>These are some of the programs I created and taught to my students this summer.</p>
                                </div>
                                <div class="col-md">
                                    <img class="img-fluid" src="/images/helping.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->


                <!-- <img class="img-fluid" src="/Personal Website/shoes.png" alt=""> -->
                

            </ul>
        </div>


        <!-- BLOG STATEMENT -->
        <div class="container-md pt-3 blog-statement">
                    <h1 style="text-align: center;">Check out my Recent Blogposts!</h1>
                    <p style="text-align:center;">I write about my personal experiecnes with learning and developing, as well as current projects I'm working on.</p>
            </div>
            <div class="arrow">
            <a href="#cards" style="text-align: center;"><img src="images/arrow.png" alt="" width="100"></a>
            </div>
        </div>



        <!-- BLOG CARDS -->
        <section>
            <div id="cards" class="container-md py-3 text-dark">
                <div class="row cards">
                    <div class="card col-sm card p-1 mx-lg-2 mb-3" style="max-width: 100%;">
                    <!-- Picture should be me with shoe on my head or something. -->
                        <img src="images/shoe on my head.jpeg" class="card-img-top card-pic" alt="Shoe on my head. Pilot blog post picture">
                        <div class="card-body">
                        <h4 class="card-title">Pilot</h5>
                        <p class="card-text">A dive into my introduction to computer science and automation<span style="font-weight: bold; line-height: 0;"> Aug 25, 2022</span></p>
                        <a href="humble-beginnings.php" class="stretched-link"></a>
                        <a href="humble-beginnings.php" class="btn btn-primary mobile-only">Read More</a>
                        </div>

                    </div>
                    <div class="card col-sm card p-1 mx-lg-2 mb-3" style="max-width: 100%;">
                        <img src="images/teaching.jpeg" class="card-img-top card-pic" alt="Teaching the class">
                        <div class="card-body">
                        <h4 class="card-title">Beginners teaching beginners</h5>
                        <p class="card-text">Coming Soon!!</p>
                        <a href="beginners.php" class="stretched-link"></a>
                        <a href="beginners.php" class="btn  btn-primary mobile-only">Read More</a>
                        </div>
                    </div>
                    <div class="card col-sm card p-1 mx-lg-2 mb-3" style="max-width: 100%;">
                    <!-- Have the picture be me looking up how to center a div -->
                        <img src="images/dapper.jpeg" class="card-img-top card-pic" alt="How do I center a div?">
                        <div class="card-body">
                        <h4 class="card-title">My battle with front-end</h5>
                        <p class="card-text">Coming Soon</p>
                        <a href="front-end-rant.php" class="stretched-link"></a>
                        <a href="front-end-rant.php" class="btn  btn-primary mobile-only">Read More</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container-md py-3">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm text-center">
                        <h1><span class="standout">SIGN UP</span> TO MY NEWSLETTER</h1>
                        <p>Get notified of <span class="standout">new</span> blog posts and updates!</p>
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm pt-2 text-center">
                    <form id="newsletter" action="#newsletter" method="POST">
                        <input id="input-email" name="email" type="email" placeholder="Enter your email">
                        <button id="submit-button" name="submit" class="btn btn-success">Subscribe</button>
                        <?php 
                            if($formSubmitted == True) {
                                echo '<h3 style="color:#3cdfff; margin-top: 2%;">Thanks for subscribing!</h3>';
                            }
                        ?>
                    </div>
                </div>
            </div>


            <!-- FOOTER -->
            <div class="footer pt-2 container-fluid d-flex justify-content-between align-items-center" style="background-color: rgb(116, 116, 116);">
                <div>
                    <h1 class="copyright px-lg-5" style="color: black;">© Joe Malatesta. 2022</h1>
                </div>
                <div>
                    <ul class="links d-flex align-items-center px-lg-5">
                        <li class="mx-1"><a href="https://www.linkedin.com/in/joe-malatesta/" target="_blank"><img class="copy-pic" src="images/linkedin.png" width="40"></a></li>
                        <li class="mx-1"><a href="https://twitter.com/JosuMalatesta" target="_blank"><img class="copy-pic" src="images/twitter.png" width="40"></a></li>
                        <li class="mx-1"><a href="https://github.com/joemmalatesta" target="_blank"><img class="copy-pic" src="images/github.png" width="40"></a></li>
                        <li class="mx-1"><a href="mailto:joemmalatesta@gmail.com"><img class="copy-pic px-1" id="mailto"  src="images/mail.png" width="60"></a></li>      
                    </ul>
                </div>
            </div>
        </section>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
