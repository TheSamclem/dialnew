   <!-- Footer -->
   <footer class="footer border-top">

    <div class="container py-sm=5">


        <div class="row">

            <div class="col-lg-3 p-0">
                <a href="#"><img src="img/DIAL SAFE LOGO-02.png" alt="" class="img-fluid" style="height: 120px; width: 120px;"></a>
            </div>

            
            <div class="col-md-3 mt-4">
                <h5 class="pt-3 fw-bold" style="color: rgb(210, 210, 210);">Company</h5>
                <a href="#">About</a> <br>
                <a href="careers">Careers at Dial 24/7</a> <br>
                <a href="#contact">Contact Us</a> <br>
                <a href="privacy-security">Privacy & Security</a> <br>
            </div>
         
            <div class="col-md-3 mt-4">
                <h5 class="pt-3 fw-bold" style="color:  rgb(210, 210, 210);">Product</h5>
                <a href="#">Pricing</a> <br>
                <a href="#">Integrations</a> <br>
                <a href="#">Get Started For Free</a> <br>
                <a href="#">Request a Demo</a> <br>
            </div>
         
            <div class="col-md-3 mt-4">
                <h5 class="pt-3 fw-bold" style="color:  rgb(210, 210, 210);">Resources</h5>
                <a href="#">Case Studies</a> <br>
                <a href="#">HSE</a> <br>
                <a href="#">Blog</a> <br>
                <a href="#">Legislation</a> <br>
            </div>
         

        </div>

           
        <div class="row">

            <div class="col-lg-12 d-flex justify-content-between text-white add py-sm-5">
               
                <div class="col-lg-6 add">
                    Email  <a href="mailto:<?php echo $social[0]['email'] ?>" class="text-warning">
                    <?php echo $social[0]['email'] ?>
                    </a>

                </div>

                <p>
                <?php echo $social[0]['address'] ?>
                </p>

            </div>

        </div> 

    </div>

</footer>



<section class="socials border-top p-4" style="background-color: black;">
    <div class="container">
        <div class="row ">

            <div class="col-lg-12 p-0 d-flex justify-content-center">
                
                <div>
                    <a href=""><i class="ri-linkedin-box-fill fs-3 text-white" id="linkedin"></i></a>
                    <a href=""><i class="ri-instagram-fill fs-3 text-white ms-3" id="instagram"></i></a>
                    <a href=""><i class="ri-twitter-x-line fs-3 text-white ms-3" id="twitter"></i></a>
                </div>
               
            </div>
           
        </div>

    </div>
</section>


<!-- Bootsrap Js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<!-- Main JS script -->
<script type="text/javascript" src="main.js"></script>

<!-- AOS script -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true,
  });
</script>

<script src="path-to-the-file/splide.min.js"></script>
</body>
</html>