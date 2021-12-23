 
<head>
<?php include 'CssLinks.php'; ?>
</head>
 <!--=================================
    footer--> 
    <div class="footer footer-top mb-3">
        <div class="container">
          <h2 class="text-center">Which Module Fit Your Company </h2>
          <br>
          <p class="text-center">We will be happy to advise you on the ideal combination for your company.</p>

          <h3 class="text-center mt-4">Exactly what you need</h3>
          <p class="text-center">no more no less!</p>
          <div class="d-flex justify-content-center ">
                  
                        <button type="button" class="btn btn-primary text-font-weight-normal" data-toggle="modal" data-target="#asdf" style="padding: 8px 15px">Get the free consultation<i class="fa fa-question-circle"></i> </button>
                    
          </div>
    

           <!-- Modal --><div class="modal fade" id="asdf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Request Call Back</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="bg-white shadow modal-body">
            <form action="insert.php" method="post">
                <div class="form-group mb-3">
                  <input type="text" name="name" required class="request-form form-control" id="exampleInputName" placeholder="Name">
                </div>
                <div class="form-group mb-3">
                  <input type="text" name="lastname" required class="request-form form-control" id="exampleInputName" placeholder="Last Name">
                </div>
                <div class="form-group mb-3">
                  <input type="text" name="email" required class="request-form form-control" id="exampleInputEmail" placeholder="Email Address">
                </div>
                <div class="form-group mb-3">
                  <input type="text" name="enquirytype" required class="request-form form-control" id="exampleInputEnquiry" placeholder="Enquiry Type">
                </div>
                <div class="form-group mb-4">
                  <textarea class="request-form form-control" required name="enquiry" id="exampleInputEnquiry-Description" placeholder="Enquiry Description" rows="5"></textarea>
                </div>
                <div class="form-group mb-0">
                  <button type="submit" name="submit" class="btn btn-primary">Send Message<i class="fas fa-arrow-right pl-3"></i></button>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
    
          <!-- <h1 class="text-center">cj kkk k kk k k k k k k k kk k </h1> -->
          <div class="row align-items-center">
            <div class="col-sm-4">
               <h3>Ecstatic  <span style="color: #ef3139">Infotel Pvt Ltd</span></h3>
              <!-- <a href="index"><img class="img-fluid" src="images/logo.svg" alt="logo"></a> -->
            </div>
            <div class="col-sm-8 text-sm-right mt-4 mt-sm-0">
              <ul class="list-unstyled mb-0 social-icon">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    <footer class="footer bg-dark overflow-hidden " style="background-image:url('images/footer.png');     background-repeat: no-repeat;  background-size: 100% 100%;">
      <!-- -->
      <div class="container">
        <div class="row mt-4">


        <div class="col-sm-6 col-lg-2 mb-4 mb-lg-0">
          <img src="images/startup.png" alt="" class="img-fluid"><br>
          <img src="images/digitalindia1.png" alt="" class="img-fluid"><br>
          <img src="images/msme.png" alt="" class="img-fluid"><br>
          

        </div>

          <div class="col-sm-6 col-lg-2 mb-4 mb-lg-0">
            <h5 class="text-white mb-2 mb-sm-4 text-center">Our Services</h5>
            <div class="footer-link">
              <ul class="list-unstyled mb-0 text-center">
                <li><a href="NetworkService.php">Network Service</a></li>
                <li><a href="5GServices.php">5G Services</a></li>
                <li><a href="TelcoCloud.php">Telco Cloud</a></li>
			        	<li><a href="CloudServices.php">Cloud Services</a></li>
			        	<li><a href="DataAnalytics.php">Data Analytics</a></li>
		        		<li><a href="ManagedServices.php">Managed Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-lg-2 mb-4 mb-lg-0">
            <h5 class="text-white mb-2 mb-sm-4">Useful Links</h5>
            <div class="footer-link">
              <ul class="list-unstyled mb-0">
			    <li><a href="index.php">Home</a></li>
                <li><a href="About.php">About Us</a></li>
				<li><a href="Industry.php">Industry</a></li>
                <li><a href="Services.php">Our Services</a></li>
                <li><a href="Career.php">Career</a></li>
                 <li><a href="Contact.php">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
            <h5 class="text-white mb-2 mb-sm-4">Our Industry</h5>
            <div class="footer-link">
              <ul class="list-unstyled mb-0">
               
                <li><a href="communicationserviceprovider.php">Communication Service Providers</a></li>
                <li><a href="financialservices.php">Financial Services</a></li>
                <li><a href="government.php">Government – State and Local</a></li>
				<li><a href="healthcare.php">Healthcare</a></li>
				<li><a href="education.php">Education</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
             <h5 class="text-white mb-2 mb-sm-4">Contact Details</h5>
              <!-- <div class="section-title">
                <h2>We'd love to hear from you</h2>
                <p>We design brand experiences that help enterprising nonprofits & organizations grow their impact.</p>
              </div> -->
              <p class="text-white font-15">
                <i class="fas fa-map-marker-alt mr-3 fa-fw text-white mb-2 mb-sm-0"></i> Ecstatic Infotel Pvt Ltd,
Chasma center gali,
Magadh Colony, Kurji,
PO - Sadaquat Ashram,
PS - Digha,
Patna - 800010
              </p>
              <p>
                <i class="fas fa-phone-volume mr-3 fa-fw text-white mb-2 mb-sm-0"></i> <a href="tel:9128015035" class="text-white font-15">+(91) 9128015035</a>
              </p>
               <p>
                <i class="far fa-envelope-open mr-3 fa-fw text-white mb-2 mb-sm-0"></i> <a href="mailto:info@ecstaticinfotel.com" class="font-15 text-white" target="_blank">info@ecstaticinfotel.com</a>
              </p>
            </div>

            <!-- <div class="col-sm-6 col-lg-2 mb-4 mb-lg-0">
          <img src="images/startup.png" alt="" class="img-fluid"><br>
          <img src="images/digitalindia.png" alt="" class="img-fluid"><br>
          <img src="images/msme.png" alt="" class="img-fluid"><br>
          

        </div> -->

          </div>
        </div>
      </div>



      
      <div class="footer-bottom py-sm-5 py-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <p class="mb-0 text-white font-16">© Copyright <?php echo date('Y');?> <a href="index.php" class="text-white">Ecstatic Infotech Pvt Ltd,</a> All Rights Reserved. Made by <a href="http://www.kaamcube.com/" target="_blank" class="text-white font-16">Kaamcube Services Pvt Ltd</a></p>
            </div>
          </div>
        </div>
      </div>


<!-- <div class="container">
<div class="row">


        <div class="col-sm-6 col-lg-2 mb-4 mb-lg-0 ml-5">
        <img src="images/msme.png" alt="" class="img-fluid"><br>
        </div>

        <div class="col-lg-2">

        </div>

        <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 mt-5">
        <img src="images/startup.png" alt="" class="img-fluid"><br>
        </div>

        <div class="col-lg-1">

        </div>

        <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
        <img src="images/digitalindia.png" alt="" class="img-fluid"><br>
        </div>



      </div>
</div> -->


    </footer>
    <!--=================================
    footer-->

    <!--=================================
    Back To Top-->
    <!--=================================
    Back To Top-->
	<a href="https://api.whatsapp.com/send?phone=919876543210&text=Hello" class="float" target="_blank">
<i class="fa fa-whatsapp my-float text-white"></i>
</a>
	<div id="fixed-social">
  <div>
    <a href="#" class="fixed-facebook" target="_blank"><i class="fa fa-facebook"></i> <span>Facebook</span></a>
  </div>
  <div>
    <a href="#" class="fixed-twitter" target="_blank"><i class="fa fa-twitter"></i> <span>Twitter</span></a>
  </div>
 
  <div>
    <a href="#" class="fixed-instagrem" target="_blank"><i class="fa fa-instagram"></i> <span>Instagram</span></a>
  </div>
   <div>
    <a href="#" class="fixed-linkedin" target="_blank"><i class="fa fa-linkedin"></i> <span>LinkedIn</span></a>
  </div>
</div>