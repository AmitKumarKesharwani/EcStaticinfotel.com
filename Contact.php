<!DOCTYPE html>
<html lang="en">
  <head>
     <title>Ecstatic Infotel Pvt Ltd || Contact Us</title>
    <?php include'CssLinks.php';?>
  </head>
  <body>
    <?php include'Header.php';?>
    <!--=================================
    Contat Form -->
    <section id="delivering-results" class="space-ptb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-title text-center">
              <h1>Contact us</h1>
              <p>Drop us a line! We’ll set up a time to chat over the phone or in-person to know more about your business needs. All primary conferences are free of charge.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="feature-info feature-info-style-05 text-center">
              <div class="feature-info-icon">
                <i class="fas fa-phone-volume mr-2"></i>
              </div>
              <div class="feature-info-content">
                <h5 class="feature-info-title">Mobile No</h5>
                <p class="mb-0"><a href="tel:919128015035">+(91) 9128015035</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="feature-info feature-info-style-05 text-center">
              <div class="feature-info-icon">
                <i class="far fa-envelope mr-2"></i>
              </div>
              <div class="feature-info-content">
                <h5 class="feature-info-title">Email Address</h5>
                <p class="mb-0"><a href="mailto:info@ecstaticinfotel.com" target="_blank">info@ecstaticinfotel.com</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-info feature-info-style-05 text-center">
              <div class="feature-info-icon">
                 <i class="fas fa-map-marker-alt mr-2"></i>
                <!-- <i class="flaticon-rocket"></i> -->
              </div>
              <div class="feature-info-content">
                <h5 class="feature-info-title">Address</h5>
                <p class="mb-0">Ecstatic Infotel Pvt Ltd,
Chasma center gali,
Magadh Colony, Kurji,
PO - Sadaquat Ashram,
PS - Digha,
Patna - 800010</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    History -->
    <section class="space-pb">
      <div class="container" data-aos="flip-up">
        <div class="row justify-content-lg-around position-relative pt-5">
          <div class="col-lg-4 col-md-5 mb-4">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.006040899553!2d85.1051981143369!3d25.637925019971263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed577d621d00d9%3A0xeb2e57f974196d27!2sChashma%20Center%20Gali%2C%20Kurji%2C%20Patna%2C%20Bihar%20800010!5e0!3m2!1sen!2sin!4v1628082151312!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <div class="col-lg-7 col-md-7 pr-lg-5" data-aos="flip-down">
            <div class="p-4 p-md-5 bg-white shadow">
              <h3>We are here to help you</h3>
              <form class="mt-4" action="insert.php" method="post">
                <div class="form-group mb-3">
                  <input type="text" class="form-control" required name="name" id="exampleInputName" placeholder="Name">
                </div>
                <div class="form-group mb-3">
                  <input type="text" class="form-control" required name="lastname" id="exampleInputLname" placeholder="Last Name">
                </div>
                <div class="form-group mb-3">
                  <input type="email" class="form-control" required name="email" id="exampleInputEmail" placeholder="Email Address">
                </div>
                <div class="form-group mb-3"> 
                  <input type="text" class="form-control" required name="enquirytype" id="exampleInputEnquiry" placeholder="Enquiry Type">
                </div>
                <div class="form-group mb-4">
                  <textarea class="form-control" required name="enquiry" id="exampleInputEnquiry-Description" placeholder="Enquiry Description" rows="5"></textarea>
                </div>
                <div class="form-group mb-0">
                  <button type="submit" name="submit" class="btn btn-primary">Send Message<i class="fas fa-arrow-right pl-3"></i></button>
                </div>
              </form>
            </div>
          </div>
          <div class="contact-bg-logo">
            <i class="fas fa-comment"></i>
          </div>
        </div>
      </div>
    </section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 p-0">

        </div>
      </div>
    </div>
    <!--=================================
    Contat Form  --><br/>
    <?php include'Footer.php';?>
    <?php include'JSLinks.php';?>
  </body>
</html>
