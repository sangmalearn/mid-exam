
<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/test.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/bootstrap-icons.css" rel="stylesheet">
    <title>Wize | Shortform</title>

  </head>
  <body class="bg-color-cyan">
<!-- Header Section start -->
<header>


  <nav class="header-area2 navbar-expand-lg " data-bs-theme="dark">
      <div class="container">
        <div class="header-top2">       
            <div class="logo ms-md-auto">
                <a href="https://kantisangma.com/fullstack/mid-exam/">Wize</a>
            </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText2" aria-controls="navbarText2" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText2">
          <ul class="navbar-nav ms-md-auto mb-2 mb-lg-0">          
            <li><a href="https://kantisangma.com/fullstack/mid-exam/" class="active">Services</a></li>
            <li><a href="">Our work</a></li>
            <li><a href="">Case studies</a></li>
            <li><a href="https://kantisangma.com/fullstack/aroma/admission.php">Process</a></li>          
            <li><a href="">FAQ</a></li>   
          </ul>
          <span class="navbar-text2 ms-md-auto">
            <button class="btn btn-schedule">Schedule a Call</button>
          </span>
        </div>
      </div>
      </div>
    </nav>


</header>
<!-- Header Section end --> 



<!-- testimonial start   -->


<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
      <div class="section-title text-center">
        <p>Testimonials</p>
        <h1>What people say about us</h1>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class=" testimonial-area2">       
          <div class="testimonial-items">
            
            <div class="single-testimonial active" data-bs-interval="10000">
              <img src="assets/img/logo5.jpg" class="client-logo center" alt="...">
              <p>Mr. Jamal Khan, He is active energetic and a good moral character. most importantly I would recommend him to others. .</p>
              <img src="assets/img/sumi.jpg" class="d-block w-2 center" alt="...">
               <div class="client-name">                
                <h5>Sumi</h5> <span>Director Visualizer</span>
              </div>
            </div>

            <div class="single-testimonial" data-bs-interval="10000">
              <img src="assets/img/logo13.jpg" class="client-logo center" alt="...">
              <p>Mr. Jamal Khan, was employee in Digital Canvas Limited since 1st November-31st December 2010. He is active energetic and a good moral character.</p>
              <img src="assets/img/ceo.jpg" class="d-block w-2 center" alt="...">
               <div class="client-name">                
                <h5>James Rock</h5> <span>Executive Director</span>
              </div>
            </div>

            <div class="single-testimonial" data-bs-interval="10000">
              <img src="assets/img/logo8.jpg" class="client-logo center" alt="...">
              <p>If there was a 10 start I’d give it. When I found Smart Slider 3 instantly knew that this was the premium slider I needed for all my projects.</p>
              <img src="assets/img/radha.jpg" class="d-block w-2 center" alt="...">
               <div class="client-name">                
                <h5>Radha Roy</h5> <span>System Analizer</span>
              </div>
            </div>

            <div class="single-testimonial" data-bs-interval="10000">
              <img src="assets/img/logo14.jpg" class="client-logo center" alt="...">
              <p>Cannot recommend this plugin highly enough. Get the Pro version. Use the Slider and all your website dreams will come true. </p>
              <img src="assets/img/bus1.jpg" class="d-block w-2 center" alt="...">
              <div class="client-name">                
                <h5>Anika Jaman</h5> <span>Chaiman</span>
              </div>
            </div>

            

          </div>
      </div>
    </div>
</div> 


<!-- Footer Section start -->

<footer>
  <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="footer-top text-center">
              <h2>wize</h2>
              <h1>Ready to <span>Go Viral?</span></h1>
              <p>Book your free discovery call now, and let's get started.</p>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="footer-middle text-center">
              <a href="">Book your free discovery call now <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
            <div class="footer-bottom">
              <h1>Wize</h1>
              <p>Copyright © 2023 Wize Design. All rights reserved.</p>
              <div class="social-icon">
              <p><i class="fa-brands fa-twitter"></i> <i class="fa-brands fa-pinterest "></i></p>
              </div>
            </div>
        </div>
      </div>

   </div>  
 
</footer>

<!-- Footer Section end -->

<script>
  function myFunction(){
    var x = document.getElementById("myMainmenu");
    if (x.className === "mainmenu"){
      x.className += " responsive";
    } else {
      x.className = "mainmenu";
    }
  }

</script>

<script>
    var coll = document.getElementsByClassName("btn-collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
          content.style.display = "none";
        } else {
          content.style.display = "block";
        }
      });
    }
</script>


 <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
 <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
 <script type="text/javascript" src="assets/js/slick.min.js"></script>
 <script type="text/javascript" src="assets/js/wow.min.js"></script>
 <script src="assets/js/bootstrap.bundle.min.js"></script>
 <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
 <script src="assets/js/jquery.counterup.min.js"></script>
 <script src="assets/js/main.js"></script>

 <!-- <script type="text/javascript">
    $(document).ready(function(){
      $('.popular-training-items').slick({
        dots: true,
        slidesToShow: 4,
      });
    });
  </script> -->

</body>
</html>  
