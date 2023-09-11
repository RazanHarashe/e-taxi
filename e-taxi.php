
<?php

@include 'conn.php';

?>
<!Doctype html>
<html>
    <head>
        <title> E-Taxi office </title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        


    </head>
    <body >
        <div class="header">
            <div class="navbar">
                <div class="container2">
                    <div class="logo"> E-Taxi Office </div>

                    <div class="nav">
                        <ul class="list">
                            <li class="list-item"><a class="link-nav" href="#Home">Home</a></li>
                            <li class="list-item"><a class="link-nav" href="#about">About Us</a></li>
                            <li class="list-item"><a class="link-nav" href="#Services">Services</a></li>
                            <li class="list-item"><a class="link-nav" href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="header-content">
               <div class="overlay">
                <div class="Home" id="Home">
                  <h1 class="main-title">welcom to our E-Taxi Office</h1>
                  <span class="line"></span>
                  <p class="main-description">Share with us and enjoy your experience with E-Taxi Office</p>
                  <a href="log_in.php" class="link"> LOG IN</a>    <a href="sign_up.php" class="link"> SIGN UP</a> 
                </div>
              </div>
            </div>
            
            <div class="header-content">
                <div class="overlay">
                    <div class="about" id="about">
                        <div class="about-header"></div>
                        <h1 class="main" >About Us</h1>
                        <span class="line"></span>
                        <br>
                        <h2 class="main-description" >We reimagine the way the world moves for the better</h2>
                        <p class="main-description">
                            Movement is what we power. It’s our lifeblood. It pushes us to constantly reimagine how we can move better. For you. For all the places you want to go. For all the things you want to get. For all the ways you want to earn. In real time. At the incredible speed of now.
                        </p>
                    </div>
                </div>
            </div>
       
        
        <div class="Services" id="Services" >
            <h1 class="about-heading">We've Fot what you need!</h1>
            <br>
            <p class="about-description"> ~ provide the all-time transportation service in a safe, convenient and fast way for people who do not have private cars and cannot drive.
            </p>
            <br>
            <p class="about-description"> ~ provide job opportunities for the largest number of jobless people, anyone who owns a private car can join our project, Since they don’t need high experience, just a driver's license.
            </p>
            
        </div>

        <div class="to-contact" id="contact">
            <h1>contact us!</h1>
            <span class="li"></span>
            <h3>You can contact us through the information on that interface, and you can easily know our location through it</h3>
            <div class="contact-list">
          <div class="contact-items">
          <div class="contact-item">
            <i class="fas fa-map-marker-alt"></i> 
                <h4>location</h4>
                <p>Ramallah,Al-Ersal Street</p>
          </div>
          <div class="contact-item">
            <i class="fas fa-user-clock"></i>
              <h4>open hours</h4>
            <p>we work 24/7</p>
          </div>
          <div class="contact-item">
            <i class="fas fa-envelope-square"></i> 
             <h4>email</h4>
            <p>E-Taxi24@gmail.com</p>
          </div>
          <div class="contact-item">
            <i class="fas fa-mobile-alt"></i>
            <h4>call</h4>
            <p>+97056000000</p>
          </div>
          
          </div>
          </div>
          </div>

        

        
        <div class="footer">
         copyright &copy; 2022 - E-Taxi Office 
        </div>

</div>

      
    </body>
</html>
