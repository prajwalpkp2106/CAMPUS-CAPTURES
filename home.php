<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PICT CAMPUS CAPTURES</title>
    <link rel="stylesheet" href="home.css">
    <style>
body,
html {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100vh;
    font-family: sans-serif;
}

.Section_top {
    margin-top:80px;
    width: 100%;
    height: 650px;
    overflow: hidden;
    position: relative;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center;
    justify-content: center;
    animation: change 20s infinite ease-in-out;
    animation-fill-mode: forwards; /* Retain final keyframe styles after animation ends */
}

.content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-transform: uppercase;
    opacity: 0;
  animation-name: fade-in;
  animation-duration: 1s;
  animation-delay: 0.5s;
  animation-fill-mode: forwards;
}
@keyframes fade-in {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
.content h1{
    color:  dark navy blue;
    font-family:'Courier New', Courier, monospace;
    /* color:  linear-gradient(to right, #bdc3c7, #2c3e50); */
    font-size: 70px;
    letter-spacing: 10px;
    
}
.content h1 span{
    color:dark navy blue;
    font-family:'Courier New', Courier, monospace;
    /* color:  linear-gradient(to right, #bdc3c7, #2c3e50); */
    /* color: #fff; */
    /* color: #808080; */
}
.content a{
    background: #85c1ee;
    padding: 10px 24px;
    text-decoration: none;
    font-size: 18px;
    border-radius: 20px;
}
.content a:hover{
    background: #034e88;
    color: #fff;
}

@keyframes change{
    0%
    {
        background-image: url(images/1.jpg);
    }
    20%
    {
        background-image: url(images/2.jpg);
    }
    40%
    {
        background-image: url(images/3.jpg);
    }
    60%
    {
        background-image: url(images/4.jpg);
    }
    80%
    {
        background-image: url(images/5.jpg);
    }
    100%
    {
        background-image: url(images/6.jpg);
    }
}

        </style>
</head>
<body>
<nav>
<div class="logosymbol"><a href="/campus_captures/home.php"><img src="pict1.png"></a></div>
        <label class="logo">PICT CampusCaptures</label>
        <ul>
        
            
            <li><a href="/campus_captures/home.php">Home</a></li>
            <!-- make the rest small - as not important -->
            <li><a href="#Clubs">Clubs</a></li>
            <li><a href="#lol">About</a></li>
            <li><a href="#Our Team">Our Team</a></li>
          
            <li><a href="/campus_captures/adminlogin.php">Admin Login</a></li>
    
        </ul>

    </nav>
        <div class="Section_top">
        <div class="content">
            <h1>"Capture moments,<br><span>weave unforgettable memories" </span></h1>
          
        </div>
    </div> 


    <br>
<div id="Clubs" class="section">
    <div class="wrap">
        <!-- make box bigger -->
            <div class="box">
            <b><h3>College Events</h3></b>
            <form action="/campus_captures/guestgallery.php" method="get">
            <input type='hidden' name='table_name' value="inc" >
            <button class="btn">INC</button><br>
            
        </form>   
             <form action="/campus_captures/guestgallery.php" method="get">
            <input type='hidden' name='table_name' value="addiction" >
            <button class="btn">ADDICTION</button><br>
            
        </form>   
             <form action="/campus_captures/guestgallery.php" method="get">
            <input type='hidden' name='table_name' value="elevate" >
            <button class="btn">ELEVATE</button><br>
                     
             </form>  
            </div>
    

        
            <div class="box">
                <b><h3>Technical Clubs</h3></b>
                <form action="/campus_captures/guestgallery.php" method="get">
            <input type='hidden' name='table_name' value="ieee" >
            <button class="btn">IEEE</button><br>
            
        </form>   
             <form action="/campus_captures/guestgallery.php" method="get">
            <input type='hidden' name='table_name' value="tedx" >
            <button class="btn">TEDX</button><br>
            
        </form>
             <form action="/campus_captures/guestgallery.php" method="get">
            <input type='hidden' name='table_name' value="acm" >
            <button class="btn">ACM</button><br>
            
        </form>
            </div>
       

            <div class="box">
                <b><h3>Cultural Clubs</h3></b>
                <form action="/campus_captures/guestgallery.php" method="get">
            <input type='hidden' name='table_name' value="art_circle" >
            <button class="btn">ART CIRCLE</button><br>
            
        </form>
             <form action="/campus_captures/guestgallery.php" method="get">
            <input type='hidden' name='table_name' value="pictoreal" >
            <button class="btn">PICTOREAL</button><br>
            
        </form>
             <form action="/campus_captures/guestgallery.php" method="get">
            <input type='hidden' name='table_name' value="debsoc" >
            <button class="btn">DEBSOC</button><br>
           
        </form>
             
            </div>
       
    </div>
</div>

<div class="box2" id="lol">
  <div id="About" class="container">
    <h4>ABOUT</h4>
    <p>Step into a captivating world of college memories on our website.
      Relive exhilarating events, cherished friendships, and unforgettable moments.
      Our user-friendly interface and intuitive navigation make exploring our vast photo galleries seamless and delightful.
      Embark on an immersive visual journey, capturing the essence of college life.
      Welcome to a place where memories thrive and the college spirit lives forever!</p>
  </div>
</div>
<section class="team" id="Our Team">
        <div class="center">
            <h1>Our Team</h1>
        </div>
        <div class="team-content">
            <div class="box1">
                <img src="images/pr5.jpg">
                <h3>Prasad Chaudhari</h3>
                <h5>Full-Stack developer</h5>
                <div class="icons">
                    <a href="#"><i class="ri-twitter-x-line"></i></a>
                    <a href="#"><i class="ri-mail-fill"></i></a>
                    <a href="#"><i class="ri-github-fill"></i></a>
                </div>
            </div>
        
            <div class="box1">
                <img src="images/pr1.jpg">
                <h3>Prajwal Padole</h3>
                <h5>Backend developer</h5>
                <div class="icons">
                    <a href="#"><i class="ri-twitter-x-line"></i></a>
                    <a href="#"><i class="ri-mail-fill"></i></a>
                    <a href="#"><i class="ri-github-fill"></i></a>
                </div>
            </div>
        
            <div class="box1">
                <img src="images/pr4.jpg">
                <h3>Tanisha Vikhe</h3>
                <h5>Full-Stack developer</h5>
                <div class="icons">
                    <a href="#"><i class="ri-twitter-x-line"></i></a>
                    <a href="#"><i class="ri-mail-fill"></i></a>
                    <a href="#"><i class="ri-github-fill"></i></a>
                </div>
            </div>
        
            <div class="box1">
                <img src="images/pr2.jpg">
                <h3>Keziah John</h3>
                <h5>Frontend developer</h5>
                <div class="icons">
                    <a href="#"><i class="ri-twitter-x-line"></i></a>
                    <a href="#"><i class="ri-mail-fill"></i></a>
                    <a href="#"><i class="ri-github-fill"></i></a>
                </div>
            </div>
        
            <div class="box1">
                <img src="images/pr3.jpg">
                <h3>Madhav Adhav</h3>
                <h5>Frontend developer</h5>
                <div class="icons">
                    <a href="#"><i class="ri-twitter-x-line"></i></a>
                    <a href="#"><i class="ri-mail-fill"></i></a>
                    <a href="#"><i class="ri-github-fill"></i></a>
                </div>
            </div>
        </div>
    </section>
<script>
    const images = [
  'images/1.jpg',
  'images/2.jpg',
  'images/3.jpg',
  'images/4.jpg',
  'images/5.jpg',
  'images/6.jpg'
];

function preloadImages() {
  for (let i = 0; i < images.length; i++) {
    const img = new Image();
    img.src = images[i];
  }
}

window.addEventListener('load', preloadImages);

    </script>

</body>
</html>