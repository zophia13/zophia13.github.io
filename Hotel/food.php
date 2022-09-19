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
   
 <body>
   
   <header class = "header" id = "header">
       <div class = "head-top">
           <div class = "site-name">

                <span onclick="window.location.href='index.php';">COZY HOTEL</span> 
       
           </div>
           <div class = "site-nav">
               <span id = "nav-btn">MENU <i class = "fas fa-bars"></i></span>
           </div>
       </div>
   </header>
<!-- end of header -->

     <!-- side navbar -->
     <div class = "sidenav" id = "sidenav">
       <span class = "cancel-btn" id = "cancel-btn">
           <i class = "fas fa-times"></i>
       </span>

       <ul class = "navbar"> 
           <li><a href = "index.php">home</a></li>
       </ul>
   </div>
   <!-- end of side navbar -->

   <!-- fullscreen modal -->
   <div id = "modal"></div>
   <!-- end of fullscreen modal -->

      <!-- body content  -->
   <section class = "services sec-width" id = "services"> 
       <div class = "title3">
           <h1>FOOD</h1>
       </div>

         <div class="container-image">
           <div class="row">
               <div class="col-md-4 mt-3 col-lg-3">
                   <img src="https://cdn.glitch.global/7cb38cac-e538-42d1-9712-12c731d20cc4/food.png?v=1663062947776" class="img-fluid" alt="image">
               </div>
               <div class="col-md-4 mt-3 col-lg-3">
                   <img src="https://cdn.glitch.global/7cb38cac-e538-42d1-9712-12c731d20cc4/food2.png?v=1663062952786" class="img-fluid" alt="image">
               </div>
               <div class="col-md-4 mt-3 col-lg-3">
                   <img src="https://cdn.glitch.global/7cb38cac-e538-42d1-9712-12c731d20cc4/food3.png?v=1663062947273" class="img-fluid" alt="image">
               </div>
               <div class="col-md-4 mt-3 col-lg-3">
                   <img src="https://cdn.glitch.global/7cb38cac-e538-42d1-9712-12c731d20cc4/food4.png?v=1663062947817" class="img-fluid" alt="image">
               </div>
           </div>

           <div class="container mt-3">
               <br>
               <div class="mt-4 p-5 bg-dark text-white rounded">
                 <h1>Exquisite Food</h1> 
                 <p>Cozy hotel offers food on a daily basis. We make sure that the taste would stay engraved into our guests' hearts and of course their taste buds. <br>The food we offer has a variety of international and local classics, from tapas to mains, and a range of sweet desserts.</p> 
               </div>
               <br>
             </div>
     </div>

           <div class = "line">
           </div>
           <div class = "foods-container">
               <!-- food -->
               <article class = "food">
                   <div class = "food-image">
                       <img src = "https://cdn.glitch.global/7cb38cac-e538-42d1-9712-12c731d20cc4/resto?v=1663078480604" alt = "food image">
                   </div>
                   <div class = "food-text">
                       <h3><b>LA COZY DE RESTO</b></h3>
                       <p>Dine at the resort’s La Cozy de resto and experience the pleasure of fine cuisine that reflect Asian and Western influences. The resto provides guests delectable choices from its all-day dining menu at reasonable value.</p>
                       <br><br>
                       <button onclick=" window.open('https://drive.google.com/file/d/1IpaMqWRgKkeaEaYnqMzWL3WGSuYvmpQ5/view?usp=sharing','_blank')" target="_blank" type = "button" class = "btn">SEE OUR MENU</button>
                   </div>
               </article>
               <article class = "food">
                   <div class = "food-image">
                       <img src = "https://cdn.glitch.global/7cb38cac-e538-42d1-9712-12c731d20cc4/lounge?v=1663078480756" alt = "food image">
                   </div>
                   <div class = "food-text">
                       <h3><b>COZY LOUNGE</b></h3>
                       <p>Cozy Lounge offers open space outdoor dining in the rooftop and indoor seating in the stylish main lounge. Keep cool by having fine cocktails and refreshing fruit shakes. It also boasts an array of mouthwatering snacks.</p>
                       <br><br>
                       <button onclick=" window.open('https://drive.google.com/file/d/1dWmSDP1App6wT7F3BxE4HXZTya0srvJF/view?usp=sharing','_blank')" type = "button" class = "btn">SEE OUR MENU</button>
                   </div>
               </article>             
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