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
            <li><a class="navigation-element navigation-link nav-link text-light" href="Joseph M.pdf" target="_blank">Resume</a></li>
          </ul>
        </div> 
      </nav>


    <!-- MAIN -->
        <div class="container-fluid text-center main-statement p-3 pt-4 main">
            <div class="row">
                <div class="col-lg-6 col-md align-self-center text-wrap">
                    <h1><span class="standout">Joe</span> Malatesta</h1>
                    <!-- <p>Absolve the guilt that shackles your soul</p> -->
                    <p>Studying. Learning. Teaching.</p>
                    <!-- <h2>Python. Java. HTML. CSS.</h2> -->
                </div>
                <div class="col-lg-6 col-md">
                    <img id="coverpic" src="images/me2.jpg" alt="" class="img-fluid" style="border-radius: 2%;">
                </div>
            </div>
        </div>


        <!-- ABOUT ME STATEMENT -->
        <div class="container-md pt-3 blog-statement">
                <h1 style="text-align: center;">About Me</h1>
                <p style="text-align:center;">Dive a little deeper into my programming journey</p>
            </div>
            <div class="arrow">
                <a href="#about" style="text-align: center;"><img src="images/arrow.png" alt="" width="100"></a>
        </div>
        </section>


        <!-- ABOUT ME -->
        <div id="about" class="pt-4 container-md d-flex flex-row">
            <ul class="about-items">
                <li><h1>I'm a <span class="standout">junior</span> at Oakland University, studying <span class="standout">computer science</span></h1></li>
                <li><h1>I'm based in Michgian</h1></li>
                <li><h1>I became interested in <span class="standout">automation</span> 5 years ago but began programming only <span class="standout">2 years </span>ago</h1></li>
                <li><h1>I mainly program in  <span class="standout">python</span> and <span class="standout">java,</span> and aspire to work as a <span class="standout">software developer</span></h1></li>
                <li><h1>This summer, I'm hoping to find a software development <span class="standout">internship</span></h1></li>
                <li class="pt-4" style="text-align: center;"><h1>Check out what I'm creating on my <a class="navigation-link" style="border-bottom: 2px solid #3cdfff; color: rgb(215, 215, 215)" href="">Github</a></h1></li>


                <!-- <img class="img-fluid" src="/Personal Website/shoes.png" alt=""> -->
                

            </ul>
        </div>


        <!-- BLOG STATEMENT -->
        <div class="container-md pt-3 blog-statement">
                    <h1 style="text-align: center;">Check ot my Recent Blogposts!</h1>
                    <p style="text-align:center;">I write about my personal experiecnes with developing, learning, and teaching programming</p>
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
                        <img src="images/redcircle.jpeg" class="card-img-top card-pic" alt="..." style="border-radius: 12px;">
                        <div class="card-body">
                        <h4 class="card-title">Humble Beginnings</h5>
                        <p class="card-text">A dive into my introduction to computer science, automation, and the unrealistic expectations I had.</p>
                        <a href="humble-beginnings.html" class="stretched-link"></a>
                        <a href="humble-beginnings.html" class="btn  btn-primary mobile-only">Read More</a>
                        </div>

                    </div>
                    <div class="card col-sm card p-1 mx-lg-2 mb-3" style="max-width: 100%;">
                        <img src="images/teaching.jpeg" class="card-img-top card-pic" alt="..." style="border-radius: 12px;">
                        <div class="card-body">
                        <h4 class="card-title">Beginners teaching beginners</h5>
                        <p class="card-text">How my co-workers and I managed to teach computer science to beginners without knowing a whole lot more than them.</p>
                        <a href="beginners.html" class="stretched-link"></a>
                        <a href="beginners.html" class="btn  btn-primary mobile-only">Read More</a>
                        </div>
                    </div>
                    <div class="card col-sm card p-1 mx-lg-2 mb-3" style="max-width: 100%;">
                        <img src="images/dapper.jpeg" class="card-img-top card-pic" alt="..." style="border-radius: 12px;">
                        <div class="card-body">
                        <h4 class="card-title">My battle with front-end</h5>
                        <p class="card-text">A history of my battle with laying out, coding, and writing this website, and how I arrived here.<span style="font-weight: bold; line-height: 0;"> Apr 25, 2022</span></p>
                        <a href="front-end-rant.html" class="stretched-link"></a>
                        <a href="front-end-rant.html" class="btn  btn-primary mobile-only">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- NEWSLETTER -->

        <!-- <form id="newsletter" action="#newsletter" method="POST">
        Email: <input id="email" type="text" name="email">
        <button type="submit" name="submit">Submit</button>
         </form> -->

            <div class="container-md py-3">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm" style="text-align: center;">
                        <h1><span class="standout">SIGN UP</span> TO MY NEWSLETTER</h1>
                        <p>Get notified of <span class="standout">new</span> blog posts and updates!</p>
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm pt-2" style="text-align: center;">
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
                    <h1 class="copyright px-lg-5">© Joe Malatesta. 2022</h1>
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
