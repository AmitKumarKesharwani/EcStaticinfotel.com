<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ecstatic Infotel Pvt Ltd || 5G Services</title>
    <?php include 'CssLinks.php'; ?>
  </head>
  <body>
    <?php include 'Header.php';
    include "sharingbuttons.php";
    
    ?>
     
       <!--=================================
    Header Inner -->
    <section class="header-inner header-inner-menu bg-overlay-black-30" style="background-image: url('images/header-inner/breadcrumb1.jpg');">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="header-inner-title text-center">
              <h1 class="text-white font-weight-normal" style="">Our Blogs</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
                  include 'connection.php';
                  $abc=mysqli_query($db,"SELECT * FROM blog");
                  if(mysqli_num_rows($abc)>0)
                  {
                     while($show=mysqli_fetch_array($abc))
                     {
                         ?>


<div class="container mt-4 mb-4" style="border-style:inset;border-color:blue" data-aos="fade-up" data-aos-offset="-200">


         <div class="justify-content-center">
        



          <div class="site-block-half d-block d-lg-flex mt-5" data-aos="fade" data-aos-delay="100" >
             <!-- <a href="#" class="image d-block ab-image" style="background-image: url('admin/imagess/');"></a> -->
         <div class="row">




           <div class="col-lg-8">
           <div class="text">
            <span class=" "><span class="display-4 text-primary"  style="font-size: 28px"><?= $show['Heading'];?></span> <p><?= $show['dt'];?></p>
            <p style="color:black">By <span style=""><?= $show['Writer'];?></span></p>	<?php
	               	showSharer("https://google.com/", "A search engine site!");
	                  	?>
            <p><?= $show['SubHeading'];?></p>
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#one" aria-expanded="false" aria-controls="one">
                     <center>Read More <i class="fas fa-angle-down"></i> </center>
                    </button>   
           </div>
           </div>

           <div class="col-lg-4">
             <img src="admin/imagess/<?= $show['images'];?>" alt="" height="70%" class="img-fluid">
           </div>






         </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-md-12" >
                <div id="accordion">
              <div class="car">
          
                <div id="one" class="collapse" aria-labelledby="one" data-parent="#accordion">
                  <div class="" >
                   <p class="pl-3"><?= $show['Content'];?>!</p>
                  </div>
                </div>
              </div>
            </div>
            </div>
        </div>

          












    
</div>
</div>

<?php }
                    }
                  
                    
                    
                    
                    ?>


<?php include 'Footer.php'; ?>
<?php include 'JSLinks.php'; ?>
</body>
</html>