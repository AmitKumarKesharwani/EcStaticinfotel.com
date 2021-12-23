<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ecstatic Infotel Pvt Ltd || 5G Services</title>
    <?php include'CssLinks.php'?>
  </head>
  <body>
    <?php include'Header.php'?>
     
       <!--=================================
    Header Inner -->
    <section class="header-inner header-inner-menu bg-overlay-black-30" style="background-image: url('images/header-inner/breadcrumb1.jpg');">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="header-inner-title text-center">
              <h1 class="text-white font-weight-normal" style="">5G Services</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Header Inner -->

    <!--=================================
    Service details -->
    <section class="space-ptb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="service-details">
              <h4 class="fw-bold">5G Services</h4>
              <p class="mb-4">In telecommunications, 5G is the fifth generation technology standard for broadband cellular networks, which cellular phone companies began deploying worldwide in 2019, and is the planned successor to the 4G networks which provide connectivity to most current cellphones.</p>
			  <p>The increased speed is achieved partly by using additional higher-frequency radio waves in addition to the low and medium band frequencies used in previous cellular networks. However, higher-frequency radio waves have a shorter useful physical range, requiring smaller geographic cells.</p>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- model-->

<!-- Button trigger modal -->
<div class="text-center mt-3">
<a href="5g.pdf" download>
<button type="button" class="btn btn-primary text-center" data-toggle="modal" data-target="#exampleModal2">
 Get the 5G Playbook
</button>
</a>
</div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">We are here to help you...</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="bg-white shadow modal-body">
            <form action="5ginsert.php" method="post">
                <div class="form-group mb-3">
                  <input type="text" class="request-form form-control" required name="name" id="exampleInputName" placeholder="Full Name">
                </div>
                <div class="form-group mb-3">
                  <input type="email" class="request-form form-control" required name="email" id="exampleInputEmail" placeholder="Email Address">
                </div>
                <div class="form-group mb-3">
                  <input type="text" class="request-form form-control" required name="companyname" id="exampleInputEnquiry" placeholder="Company Name">
                </div>
                <div class="form-group mb-3">
                  <input type="tel" class="request-form form-control" required name="contactnumber" id="exampleInputName" placeholder="Contact Number">
                </div>
                <div class="form-group mb-4">
                  <textarea class="request-form form-control" required name="message" id="exampleInputEnquiry" placeholder="Message" rows="5"></textarea>
                </div>
               <a href="5g.pdf" download>
               <div class="form-group mb-0">
                  <button type="submit" name="submit" class="btn btn-primary">Send Message<i class="fas fa-arrow-right pl-3"></i></button>
                </div>
               </a>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- model end -->



    </section>

    <?php include'Footer.php';?>
    <?php include'JSLinks.php';?>
  </body>
</html>

