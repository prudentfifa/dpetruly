<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <link rel="stylesheet" href="assets/css/animate.css">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <link rel="stylesheet" href="assets/bootstarp/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/super-classes.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/mobile.css">
      <title>DoVerge LLC | Team</title>
   <style>
      /* Add padding to containers */
.contain {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
.intext, .inpass {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

.intext:focus, .inpass:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
   </style>
   </head>
   <body>
      <!---header-and-banner-section-->
      <div class="header-and-banner-con w-100">
         <div class="header-and-banner-inner-con overlay-content">
            <!--navbar-start-->
         
            <!-- Header Section Start -->
            <?php include("header.php"); ?>
            <!-- Header Section End -->

            <!--navbar-end-->
            <!--banner-start-->
            <section class="banner-main-con about-page-main-banner-con">
               <div class="container">
                  <div class="banner-con about-page-banner-con text-center">
                     <div class="row wow slideInLeft">
                        <div class="col-lg-12">
                           <div class="about-page-banner-title">
                              <h1>Registration</h1>
                              <p class="mb-0">Sign up to become a registered DoVerge customer.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!--banner-end-->
            <!-- blog-post-section -->
            <section>
               <form action="/action_page.php">
                  <div class="contain">
                    
                    <p>Please fill in this form to create an account.</p>
                    <hr>
                
                    <label for="email"><b>Email</b></label>
                    <input class="intext" type="text" placeholder="Enter Email" name="email" id="email" required>
                
                    <label for="psw"><b>Password</b></label>
                    <input class="inpass" type="password" placeholder="Enter Password" name="psw" id="psw" required>
                
                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input class="inpass" type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
                    <hr>
                    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                
                    <button type="submit" class="registerbtn">Register</button>
                  </div>
                  
                  <div class="container signin">
                    <p>Already have an account? <a onclick="document.getElementById('id01').style.display='block'" style="width:auto;cursor: pointer;">Sign in</a>.</p>
                  </div>
                </form>                
            </section>
            <!-- blog-post-section -->
         </div>
      </div>
      
      <!-- Testimonials-section -->
      
      <!-- Footer Section Start -->
      <?php include("footer.php"); ?>
      <!-- Footer Section End -->

      <script src="assets/js/wow.js"></script>
      <script>
         new WOW().init();
      </script>
      <script src="assets/js/jquery-3.6.0.min.js"> </script>
      <script src="assets/js/popper.min.js"> </script>
      <script src="assets/js/bootstrap.min.js"> </script>
   </body>
</html>