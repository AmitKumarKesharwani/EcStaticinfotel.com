
    <!--=================================
    header -->
    <header class="header default bg-dark">
      <div class="topbar" style="background-image:url('images/Header.png');">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="d-block d-md-flex align-items-center text-center">
                <div class="mr-4 d-inline-block py-1">
                  <a href="mailto:info@ecstaticinfotel.com"><i class="far fa-envelope mr-2 fa-flip-horizontal text-white"></i><span class="font-16 text-white font-weight-normal">info@ecstaticinfotel.com</span></a>
                </div>
                <div class="mr-auto d-inline-block py-1">
                  <i class="fas fa-map-marker-alt text-white mr-2"></i><span class="font-16 text-white">Patna</span>
                </div>
                <div class="d-inline-block py-1">
                  <ul class="list-unstyled">
                    <li>
                        <button type="button" class="btn btn-primary text-font-weight-normal" data-toggle="modal" data-target="#exampleModal" style="padding: 8px 15px"><i class="fa fa-question-circle"></i> Request Call Back</button>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar bg-white navbar-static-top navbar-expand-lg">
        <div class="container-fluid">
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
          <a class="navbar-brand" href="index.php">
            <!-- <h4 style="margin-top: 10px;">EC Static <span style="color: #ef3139">Infotech</span></h4> -->
             <img class="img-fluid" src="images/Logo_Final.png" style="height: 85px;" alt="logo"> 
          </a>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a></li>
             
                 <li class="dropdown nav-item">
                <a href="Services.php" class="nav-link">Our Services</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="NetworkService.php">Network Service<i class="fas fa-arrow-right"></i></a></li>
                    <li><a class="dropdown-item" href="5GServices.php">5G Service<i class="fas fa-arrow-right"></i></a></li>
                    <li><a class="dropdown-item" href="TelcoCloud.php">Telco Cloud<i class="fas fa-arrow-right"></i></a></li>
					<li><a class="dropdown-item" href="CloudServices.php">Cloud Services<i class="fas fa-arrow-right"></i></a></li>
					<li><a class="dropdown-item" href="DataAnalytics.php">Data Analytics<i class="fas fa-arrow-right"></i></a></li>
					<li><a class="dropdown-item" href="ManagedServices.php">Managed Services<i class="fas fa-arrow-right"></i></a></li>
                  </ul>
              </li>
			   
			  <li class="nav-item">
                <a href="Industry.php" class="nav-link">Industry</a>
              </li> 
			   <li class="nav-item">
                <a href="About.php" class="nav-link">About Us</a>
              </li>
			   <li class="nav-item">
                <a href="Career.php" class="nav-link">Career</a>
              </li>
              <li class="nav-item">
                <a href="Contact.php" class="nav-link">Contact Us</a>
              </li>
               
             
              
            </ul>
          </div>
          <div class="d-none d-sm-flex ml-auto mr-5 mr-lg-0 pr-4 pr-lg-0">
            <ul class="nav ml-1 ml-lg-2 align-self-center">
              <li class="contact-number nav-item pr-4">
                <a class="font-weight-bold" href="https://api.whatsapp.com/send?phone=919128015035" target="_blank"><i class="fab fa-whatsapp pr-2"></i>+(91) 9128015035</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!--=================================
    header -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
  </div>