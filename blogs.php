<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ecstatic Infotel Pvt Ltd || About Us</title>
    <?php include'CssLinks.php';?>
  </head>
  <body>
    <?php include'Header.php';
    include'sharingbuttons.php';
    
    ?>
    <!--=================================
    Header Inner -->
    <section class="header-inner header-inner-menu bg-overlay-black-30" style="background-image: url('images/header-inner/breadcrumb1.jpg');">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="header-inner-title text-center">
              <h1 class="text-white font-weight-normal">Our Blogs</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Header Inner -->

     <!--=================================
    Service -->
    <section class="space-pt">

    <?php
                  include 'connection.php';
                  $abc=mysqli_query($db,"SELECT * FROM blog");
                  if(mysqli_num_rows($abc)>0)
                  {
                     while($show=mysqli_fetch_array($abc))
                     {
                         ?>



      <div class="container mb-5" style="border-style:inset;border-color:grey" data-aos="">

        <div class="row">

          <div class="col-lg-4 justify-content-center mt-4">
            <img class="img-fluid" src="admin/imagess/<?= $show['images'];?>" alt="">
        
          </div>

          <div class="col-lg-8 mt-4">
            <span class="text-uppercase"><?= $show['dt'];?></span> <?php
	               	showSharer("Ecstatic Infotel", "Contact Us For All Kind Of Networking Services");
	                  	?>
            <h1 class=" text-danger"><?= $show['Heading'];?></h1>
           
              <p  > by <?= $show['Writer'];?></p>
              <p class="h5">
              <?= $show['SubHeading'];?>
              </p>

              <button class="btn btn-link collapsed pb-3" data-toggle="collapse" data-target="#one<?= $show['id'];?>" aria-expanded="false" aria-controls="one">
                     <center>Read More <i class="fas fa-angle-down"></i> </center>
              </button>  

             

              
          </div>

        </div>

        <div id="accordion">
                <div id="one<?= $show['id'];?>" class="collapse" aria-labelledby="one" data-parent="#accordion">                
                   <p class="pl-3 h5"><?= $show['Content'];?>!</p>
                </div>
              </div>

      </div>



      

<?php }
                    }
                  
                    
                    
                    
                    ?>
    </section>
    <!--=================================
    Service -->

   
   
    <?php include'Footer.php';?>
    <?php include'JSLinks.php';?>
  </body>
</html>
