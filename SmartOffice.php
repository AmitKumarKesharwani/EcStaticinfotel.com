<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ecstatic Infotel  Pvt Ltd || Smart Office</title>
    <?php include'CssLinks.php';?>
  </head>
  <body>
    <?php include'Header.php';?>
     <!--=================================
    Header Inner -->
    <section class="header-inner" style="background-image: url('images/2.png'); background-size:100% 80%; background-repeat:no-repeat;">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-8">
            <div class="header-inner-title">
              <h2 class="text-white font-weight-normal">Smart Office Solution</h2>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Header -->

    <!--=================================
       About -->
       <section class="space-ptb pb-4">
         <div class="container">
           <div class="row justify-content-center">
             <div class="col-lg-12">
               <div class="section-title">
                 <h2 class="">Covid-19 is changing the future of Office</h2>
                 <p>The only thing that has changed about our work is the way we do it. Build flexible, end-to-end solutions into your organization today, so your employees can seamlessly adapt to a world that's constantly redefining.</p>
               </div>
             </div>
           </div>
         </div>
       </section>
       <!--=================================
       About -->

           <!--=================================
           Service details -->
           <section class="space-ptb p-0">
             <div class="container mb-5">
               <div class="row justify-content-center">
                 <div class="col-xl-6">
                      <img class="img-fluid mb-4 mb-md-5" src="images/Picture 1.png" alt="">
                 </div>
                 <div class="col-xl-6 " >
                   <ul class="list list-unstyled mt-5">
                     <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span class="pl-3"> Employees usually comes to office and work at their own desks.</span></li>
                     <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span class="pl-3"> Well-ordered linear desks.</span></li>
                     <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span class="pl-3"> Face to face collaboration & meetings.</span></li>
                     <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span class="pl-3"> Very less use of video conferencing solutions.</span></li>
                   </ul>
                 </div>
                 </div>
               </div>
             <div class="container mb-3">
               <div class="row justify-content-center">
                 <div class="col-xl-6">
                   <ul class="list list-unstyled mt-5">
                     <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span class="pl-3"> Employees working from both office and home.</span></li>
                     <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span class="pl-3"> Increased in employees working from home due to covid.</span></li>
                     <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span class="pl-3"> Usage of video conferencing solutions; downloads of apps have been heavily increased</span></li>
                     <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span class="pl-3"> Enterprises considering VC solutions as cost effective solution.</span></li>
                   </ul>
                 </div>
                 <div class="col-xl-6">
                      <img class="img-fluid mb-4 mb-md-5" src="images/pic 2.png" alt="">
                 </div>
               </div>
               <div class="text-center mt-3">
                    <a href="5g.pdf" download>
                    <button type="button" class="btn btn-primary text-center" data-toggle="modal" data-target="#exampleModal">
                                      Get The Free Consultation
                                 </button>
                    </a>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Get The Free Consultation</h5>
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


                    </div>
             </div>
           </div>
         </div>
       </section>
       <!--=================================
       Service details -->

    <?php include'Footer.php';?>
    <?php include'JSLinks.php';?>
  </body>
</html>
