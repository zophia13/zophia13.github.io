<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cozy Hotel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/main.css" rel="stylesheet" type="text/css" media="all" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    </head>

    <body>
    <header class = "header2" id = "header">
        <div class = "head-top">
            <div class = "site-name">

                 <span onclick="window.location.href='index.php';">COZY HOTEL</span> 
        
            </div>
            <div class = "site-nav">
                <span id = "nav-btn">MENU <i class = "fas fa-bars"></i></span>
            </div>
        </div>
    </header>
</header>
<!-- end of header -->
 
      <!-- side navbar -->
      <div class = "sidenav" id = "sidenav">
        <span class = "cancel-btn" id = "cancel-btn">
            <i class = "fas fa-times"></i>
        </span>

        <ul class = "navbar"> 
            <li><a href = "index.php">home</a></li>
            <li><a href = "admin/reservation.php">booking</a></li>
            <li><a href = "#cr">club room</a></li>
            <li><a href = "#dr">deluxe room</a></li>
            <li><a href = "#es">executive suite</a></li>
            <li><a href = "#sr">single room</a></li>
        </ul>
       
    </div>
    <!-- end of side navbar -->

    <!-- fullscreen modal -->
    <div id = "modal"></div>
    <!-- end of fullscreen modal -->

     <!-- body content  -->
     <section class = "services sec-width" id = "services"> 
        <div class = "title4">
            <h1 class="display-3"><b>ROOMS AND SUITES</b></h1>
        </div>

        <div class = "intro flex">
              <img src="https://cdn.glitch.global/7cb38cac-e538-42d1-9712-12c731d20cc4/pictures.png?v=1663217708097" class="img-fluid" alt="room">
                <p><b>Cozy Hotel</b> has guest rooms with a minimum area of 36 square-meters, the accommodations offer guests the best compromise between budget and modern sensible accommodations. <br> Rooms are located within the hotel’s upper levels offering views of the landscaped gardens.</p>
            </div>
        
        <!--Club Room-->
      
        <div class = "title5">
                    <h1 class="display-4" id = "cr"><b>club room</b></h1>
       </div>
        <div class="text-center">
                <img src="https://cdn.glitch.global/7cb38cac-e538-42d1-9712-12c731d20cc4/sedaroom.jpg?v=1662982082504" class="img-fluid" alt="club room">
        </div>
        <div class="accordion" id="accordionPanelsStayOpenExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                <b class="h4">Details</b>
              </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
              <div class="accordion-body">
                <strong><i>Club Rooms</i> offer guests spacious and comfortable accommodations.</strong> The bedroom extends to a sitting area offering guests ample space even for groups of friends staying together. These rooms are available in either a king-size bed or two (2) twin bed configuration. The bathroom has a separate bathtub and shower. <br> <br> <center><i>Accommodation:</i> Maximum of 3 adults or 2 adults with 2 children below 12 years old.</center>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                <b class="h4">Amenities</b>
              </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
              <div class="accordion-body">
                <ul class="list-unstyled">
                    <ul>
                      <li>Multi-purpose table and chaise lounge</li>
                      <li>Separate bathtub and shower (some units)</li>
                      <li>40-inch HDTV TV with cable channels</li>
                      <li>Coffee and tea-making facilities</li>
                      <li>Media panel with HDMI, USB, and audio-visual connectivity</li>
                      <li>Mini bar</li>
                      <li>In-room dining</li>
                      <li>Complimentary WiFi/Internet access</li>
                    </ul>
                </ul>
              </div>
            </div>
          </div>  
           <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                <b class="h4">Benefits</b>
              </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
              <div class="accordion-body">
                <ul class="list-unstyled">
                    <strong><li>Access to the Club Lounge with:</li></strong>
                    <ul>
                      <li>Continental buffet breakfast, afternoon refreshments, and cocktails</li>
                      <li>All-day coffee or tea and non-alcoholic beverages</li>
                      <li>Computer Stations</li>
                      <li>Newspapers, books, and magazines</li>
                      <li>Secretarial assistance</li>
                      <li>Work tables</li>
                    </ul>
                </ul>
              </div>
            </div>
          </div>  
        </div>   
      
      
          
        <!--Deluxe Room-->
      
        <div class = "title5">
                    <h1 class="display-4" id = "dr" ><b>deluxe room</b></h1>
       </div>
        <div class="text-center">
                <img src="https://cdn.glitch.global/7cb38cac-e538-42d1-9712-12c731d20cc4/execlux.jpg?v=1662983828046" class="img-fluid" alt="club room">
        </div>
        <div class="accordion" id="accordionPanelsStayOpenExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                <b class="h4">Details</b>
              </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
              <div class="accordion-body">
                <strong><i>Deluxe Rooms</i> offer guests spacious and comfortable accommodations.</strong> the newly renovated premier rooms have been redesigned featuring modern-style influences. These rooms are available in either a king-size bed or two (2) twin bed configuration.<br> <br> <center><i>Accommodation:</i> Maximum of 3 adults or 2 adults with 2 children below 12 years old.</center>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                <b class="h4">Amenities</b>
              </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
              <div class="accordion-body">
                <ul class="list-unstyled">
                    <ul>
                      <li>Multi-purpose table and chaise lounge</li>
                      <li>Separate bathtub and shower (some units)</li>
                      <li>40-inch HDTV TV with cable channels</li>
                      <li>Coffee and tea-making facilities</li>
                      <li>Media panel with HDMI, USB, and audio-visual connectivity</li>
                      <li>Mini bar</li>
                      <li>In-room dining</li>
                      <li>Complimentary WiFi/Internet access</li>
                    </ul>
                </ul>
              </div>
            </div>
          </div>  
        </div>   
      
      
          
        <!--Executive Room-->
      
        <div class = "title5">
                    <h1 class="display-4" id = "es"><b>executive suite</b></h1>
       </div>
        <div class="text-center">
                <img src="https://cdn.glitch.global/7cb38cac-e538-42d1-9712-12c731d20cc4/suite.webp?v=1662983473170" class="img-fluid" alt="club room">
        </div>
        <div class="accordion" id="accordionPanelsStayOpenExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                <b class="h4">Details</b>
              </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
              <div class="accordion-body">
                <strong><i>Executive Rooms</i> offer guests spacious and comfortable accommodations.</strong> It is the hotel's highest room category and features modern design. This room features a bedroom with writing desk and double sink, living room with powder room and toilet, kitchenette, and a king sized bed. <br> <br> <center><i>Accommodation:</i> Maximum of 3 adults or 2 adults with 2 children below 12 years old.</center>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                <b class="h4">Amenities</b>
              </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
              <div class="accordion-body">
                <ul class="list-unstyled">
                    <ul>
                      <li>Multi-purpose table and chaise lounge</li>
                      <li>Separate bathtub and shower (some units)</li>
                      <li>40-inch HDTV TV with cable channels</li>
                      <li>Coffee and tea-making facilities</li>
                      <li>Media panel with HDMI, USB, and audio-visual connectivity</li>
                      <li>Mini bar</li>
                      <li>In-room dining</li>
                      <li>Complimentary WiFi/Internet access</li>
                    </ul>
                </ul>
              </div>
            </div>
          </div>  
             <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                <b class="h4">Benefits</b>
              </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
              <div class="accordion-body">
                <ul class="list-unstyled">
                    <strong><li>Access to the Club Lounge with:</li></strong>
                    <ul>
                      <li>Continental buffet breakfast, afternoon refreshments, and cocktails</li>
                      <li>All-day coffee or tea and non-alcoholic beverages</li>
                      <li>Computer Stations</li>
                      <li>Newspapers, books, and magazines</li>
                      <li>Secretarial assistance</li>
                      <li>Work tables</li>
                    </ul>
                </ul>
              </div>
            </div>
          </div>  
        </div>   

         <!--Single Room-->
      
         <div class = "title5">
                    <h1 class="display-4" id = "sr" ><b>Single room</b></h1>
       </div>
        <div class="text-center">
                <img src="https://cdn.glitch.global/7cb38cac-e538-42d1-9712-12c731d20cc4/Screen%20Shot%202022-09-20%20at%2012.24.30%20AM.png?v=1663604695600" class="img-fluid" alt="club room">
        </div>
        <div class="accordion" id="accordionPanelsStayOpenExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                <b class="h4">Details</b>
              </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
              <div class="accordion-body">
                <strong><i>Single Rooms</i> offer guests spacious and comfortable accommodations.</strong> This room comes with one single bed. They are also equipped with a fully-stocked minibar and snacks, air-conditioning unit, comfortable chairs, makeup mirror, huge wardrobe, and a bathroom. You’ll enjoy a perfect city view with lots of city landmarks as our hotel is among top-rated locations.</center></strong>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                <b class="h4">Amenities</b>
              </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
              <div class="accordion-body">
                <ul class="list-unstyled">
                    <ul>
                      <li>40-inch HDTV TV with cable channels</li>
                      <li>Coffee and tea-making facilities</li>
                      <li>Media panel with HDMI, USB, and audio-visual connectivity</li>
                      <li>Mini bar</li>
                      <li>Complimentary WiFi/Internet access</li>
                    </ul>
                </ul>
              </div>
            </div>
          </div>  
        </div>   
      
      
    </section>
  
  

        <!-- end of body content -->

    <!-- footer -->
     <footer class = "footer">
        <div class = "footer-container">
            <div>
                <h2>About Us </h2>
                <p>Cozy Hotel is an elegant and modern resort with stunning views of Tagaytay city. It was established in 2021 as with the cleanest and most comfortable beds with lovely room interiors.</p>
                <ul class = "social-icons">
                    <li class = "flex">
                        <i class = "fa fa-twitter fa-2x"></i>
                    </li>
                    <li class = "flex">
                        <i class = "fa fa-facebook fa-2x"></i>
                    </li>
                    <li class = "flex">
                        <i class = "fa fa-instagram fa-2x"></i>
                    </li>
                </ul>
            </div>

            <div>
                <h2>Useful Links</h2>
                <a href = "#">Blog</a>
                <a href = "#">Rooms</a>
                <a href = "#">Subscription</a>
                <a href = "#">Gift Card</a>
            </div>

            <div>
                <h2>Privacy</h2>
                <a href = "#">Career</a>
                <a href = "#">About Us</a>
                <a href = "#">Contact Us</a>
                <a href = "#">Services</a>
            </div>

            <div>
                <h2>Have A Question</h2>
                <div class = "contact-item">
                    <span>
                        <i class = "fas fa-map-marker-alt"></i>
                    </span>
                    <span>
                        Quezon City
                    </span>
                </div>
                <div class = "contact-item">
                    <span>
                        <i class = "fas fa-phone-alt"></i>
                    </span>
                    <span>
                        +84545 37534 48
                    </span>
                </div>
                <div class = "contact-item">
                    <span>
                        <i class = "fas fa-envelope"></i>
                    </span>
                    <span>
                        info@domain.com
                    </span>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->


    <script src="js/script.js"></script>
</body>
</html>