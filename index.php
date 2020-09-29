
<?php

$db = mysqli_connect("localhost", "root", "", "ozeki");
session_start();
error_reporting(0);

?>

<!DOCTYPE html>
<html>
<head>
	<title>HealthSeva</title>
  <!-- compulsary link , reqired meta tags  -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 
 <!-- bootstrap css-->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Mali&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato">
  <link href="css/style.css" rel="stylesheet">
<style>

      html{
      scroll-behavior: smooth;
     }

     .bg-success{
        background: linear-gradient(#000 20% ,red) !important;       }
  /* different style for writing */
    *{
      margin: 0; padding: 0; cursive;
  
      }
      
.effect {
  transform: rotate(0deg) skewX(0deg) translate(0,0);
  transition: 0.5s;
  box-shadow: -2s0px 20px 10px rgba(0,0,0,0.5); 
}

.effect:before{
  content: '';
  position: absolute;
  top: 10px;
  left: -10px;
  height: 100%;
  width: 10px;
  background: white;
  transform: 0.5s;
  transform: rotate(0deg) skewY(-45deg);
}

.effect:after{
  content: '';
  position: absolute;
  bottom: -10px;
  left: -10px;
  height: 10px;
  width: 100%;
  background: white;
  transform: 0.5s;
  transform: rotate(0deg) skewX(-45deg);
}

.effect:hover{
  transform: rotate(-30deg) skew(25deg) teanslate(20px,-15px);
  box-shadow: -50px 50px 50px rgba(0,0,0,0.5);
}
}
      .card{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }


  /* Make the image fully responsive */
     .carousel-inner img {
        width : 100% ;
        opacity: 0.6;
       }
       
      .carousel-caption h1{
        color : #fff;
        height: 90%;
        width: 50;

         } 
       .carousel-caption h4{
        color : #fff;
         } 
      .carousel-caption h6{
        color : #fff;
      
      } 
      
</style>
  
</head>
<body>

 <!-- for nav bar -->

<header>

  <nav class="navbar navbar-expand-lg navbar-dark  fixed-top bg-success">
    <a class="navbar-brand" href="#">HealthSeva</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active " href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#hospital_desk">Hospital desk</a>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll" href="#public_desk">Public desk</a>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contact</a>
          </li>
           
        </ul>
      </div>
    </div>
</nav>

<!-- nav bar close-->

<!-- for sliding the images -->


<div id="demo" class="carousel slide" data-ride="carousel">
   <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>`
    </ul>
 <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/source3.gif" alt="blood" width="1100" height="600">
     
    <!-- for wrinting something in images-->

      <div class="carousel-caption">
        <h1>Donate BLOOD ,Donate PLASMA</h1>
        <h4> SAFE LIFE SAVE FUTURE </h4>
        
        <img class="h-25 w-25" src="images/source5.gif" style="opacity: 1">
        
      </div>
     
      </div>

    <!-- stop wrinting something in image-->

    <!-- next image -->

    <div class="carousel-item">
       <img src="images/source2.gif" alt="plasma" width="1100" height="600">
             <div class="carousel-caption">
        <h1>Simple Text Message is here ......</h1>
        <h4> Just go through one steps : </h4>
        <h6>1.)Send "1" on 7737805106. </h6>
         <h4>And get all the information here . </h4>
        <img class="h-25 w-25" src="images/source.gif" style="opacity: 1">
        <h4>This will provide you all the information that you want wheather it is about blood or plasma donation or about the nearer hospital with a specialist doctor.</h4>
      </div>
    </div>
    <!-- next image close -->

  </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
    </a>
</div>

</header>

<!-- stop sliding the images -->


<br>
<section class="box-shadow-full">
     <div class=" container" id= "services">
      <h1 class=" text-center text-capitalize pt-5 text-bold text-danger">SERVICES</h1>
       <hr class=" w-25 mx-auto">
      <h7 class = "text-center align-content-center text-black"> HealthSeva is an initiative to connect, digitize and streamline the work flow of blood , plasma across the nation and it also provides the information of nearby hospitals along with the specialist doctor around us . Just CHECK NOW it for benefits of all these services and resolve your problem just in few seconds .....</h7>
     <br>
     <br>
     <br>
   <div class=" row text-center mb-3">
     <div class=" col-lg-4 col-md-4 col-12">
        <div class="card">
         <h5 class=" text-center text-capitalize pt-1  text-bold text-black">BLOOD AVAILABILITY</h5>
         <img class=" img-fluid image h-50 w-60 mx-auto" src=" images/blood.jpg">
        <h7 class=" text-center text-capitalize pt-1 text-black">Login here for BLOOD required</h7>
        <br>
        <button class="btn bg-danger text-white effect" data-toggle="modal" data-target="#check_blood_availability"> CHECK NOW</button>


       </div>
    </div>

    <div class=" col-lg-4 col-md-4 col-12">
      <div class="card">
       <h5 class=" text-center text-capitalize pt-1  text-bold text-black">PLASMA AVAILABILITY</h5> 
       <img class=" img-fluid image h-100 w-100 mx-auto" src=" images/p2.jfif"> 
       <h7 class=" text-center text-capitalize pt-1 text-black">Login here for PLASMA required</h7> 
       <br>
      <button class="btn bg-danger text-white effect" data-toggle="modal" data-target="#check_plasma_availability"> CHECK NOW</button>
        
  
     </div>
    </div>
    <div class=" col-lg-4 col-md-4 col-12">
      <div class="card">
        <h5 class=" text-center text-capitalize pt-1  text-bold text-black">NEARBY HOSPITALS/SPECIALIST DOCTORS</h5>
        <img class=" img-fluid image h-90 w-90 mx-auto" src=" images/nrby1.jpg">
        <h7 class=" text-center text-capitalize pt-1 text-black">Login here to see nearby hospitals</h7>
        <br>
        <button class="btn bg-danger text-white effect" data-toggle="modal" data-target="#search_hospital"> CHECK NOW</button>
        <!-- The Modal -->
       <div class="modal fade" id="search_hospital">
        <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
      
         <!-- Modal Header -->
          <div class="modal-header">
           <h4 class="modal-title">Search Here</h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
        
        <!-- Modal body -->
    <div class="modal-body">
      <form method="post">
             <label for="state">Select your state:</label>
            <select name="search_hospital_state" id="state" required class="form-control">
              <option value="Rajasthan">Rajasthan</option>
              <option value="Gujrat">Gujrat</option>
              <option value="Uttar-Pradesh">Uttar-Pradesh</option>
            </select>
            <br>
            <label for="district">Select your district:</label>
            <select name="search_hospital_district" id="district" required class="form-control">
              <option data-group='SHOW' value="0">--Select--</option>  
              <option data-group='Rajasthan' value="Bharatpur">Bharatpur</option>
              <option data-group='Rajasthan' value="Kota">Kota</option>
              <option data-group='Rajasthan' value="Jaipur">Jaipur</option>
              <option data-group='Gujrat' value="Vadodara">Vadodara</option>
              <option data-group='Gujrat' value="Ahmedabad">Ahmedabad</option>
              <option data-group='Gujrat' value="Surat">Surat</option>
              <option data-group='Uttar-Pradesh' value="Mathura">Mathura</option>
              <option data-group='Uttar-Pradesh' value="Agra">Agra</option>
              <option data-group='Uttar-Pradesh' value="Lucknow">Lucknow</option>
            </select>
            <br>
            <label for="district">Select your requirement:</label>
            <select name="search_requirement" id="district" required class="form-control">
              <option value="0">Hospitals</option>
              <option value="1">Specialist Doctors</option>
            </select>
            <br>
        <button type="submit" name="search_hospital" class="btn btn-primary">Submit</button>
      </form>
   </div>
        
         <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>       
  </div>
</div>

<div class="modal fade" id="check_blood_availability">
        <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
      
         <!-- Modal Header -->
          <div class="modal-header">
           <h4 class="modal-title">Search for blood here</h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
        
        <!-- Modal body -->
    <div class="modal-body">
      <form method="post">
          <label for="state">Select your state:</label>
            <select name="search_blood_state" id="state" required class="form-control">
              <option value="Rajasthan">Rajasthan</option>
              <option value="Gujrat">Gujrat</option>
              <option value="Uttar-Pradesh">Uttar-Pradesh</option>
            </select>
            <br>
            <label for="district">select your district:</label>
            <select name="search_blood_district" id="district" required class="form-control">
              <option data-group='SHOW' value="0">--Select--</option>  
              <option data-group='Rajasthan' value="Bharatpur">Bharatpur</option>
              <option data-group='Rajasthan' value="Kota">Kota</option>
              <option data-group='Rajasthan' value="Jaipur">Jaipur</option>
              <option data-group='Gujrat' value="Vadodara">Vadodara</option>
              <option data-group='Gujrat' value="Ahmedabad">Ahmedabad</option>
              <option data-group='Gujrat' value="Surat">Surat</option>
              <option data-group='Uttar-Pradesh' value="Mathura">Mathura</option>
              <option data-group='Uttar-Pradesh' value="Agra">Agra</option>
              <option data-group='Uttar-Pradesh' value="Lucknow">Lucknow</option>
            </select>
            <br>
          <p>Blood Group
            <select name="search_blood_blood_group" id="blood_group" required class="form-control">
              <option value="A+">A+</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B-">B-</option>
              <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
              <option value="O+">O+</option>
              <option value="O-">O-</option>
            </select>
        </p>
        <button type="submit" name="search_blood" class="btn btn-danger">Submit</button>
      </form>
   </div>
        
         <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
       
  </div>
</div>


<div class="modal fade" id="check_plasma_availability">
        <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
      
         <!-- Modal Header -->
          <div class="modal-header">
           <h4 class="modal-title">Sign Up</h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
        
        <!-- Modal body -->
    <div class="modal-body">
      <form method="post">
             <label for="state">Select your state:</label>
            <select name="plasma_donor_state" id="state" required class="form-control">
              <option value="Rajasthan">Rajasthan</option>
              <option value="Gujrat">Gujrat</option>
              <option value="Uttar-Pradesh">Uttar-Pradesh</option>
            </select>
            <br>
            <label for="district">select your district:</label>
            <select name="plasma_donor_district" id="district" required class="form-control">
              <option data-group='SHOW' value="0">--Select--</option>  
              <option data-group='Rajasthan' value="Bharatpur">Bharatpur</option>
              <option data-group='Rajasthan' value="Kota">Kota</option>
              <option data-group='Rajasthan' value="Jaipur">Jaipur</option>
              <option data-group='Gujrat' value="Vadodara">Vadodara</option>
              <option data-group='Gujrat' value="Ahmedabad">Ahmedabad</option>
              <option data-group='Gujrat' value="Surat">Surat</option>
              <option data-group='Uttar-Pradesh' value="Mathura">Mathura</option>
              <option data-group='Uttar-Pradesh' value="Agra">Agra</option>
              <option data-group='Uttar-Pradesh' value="Lucknow">Lucknow</option>
            </select>
            <br>
          <p>Blood Group
            <select name="plasma_donor_blood_group" id="blood_group" required class="form-control">
              <option value="A+">A+</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B-">B-</option>
              <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
              <option value="O+">O+</option>
              <option value="O-">O-</option>
            </select>
        </p>
        <button type="submit" name="donate_plasma" class="btn btn-danger">Submit</button>
      </form>
   </div>
        
         <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
 
  </div>
</div>



  </section>

<br><br>

  <?php

        if(isset($_POST['search_hospital']))
        {
          $requirement = mysqli_real_escape_string($db, $_POST['search_requirement']);
          $state = mysqli_real_escape_string($db, $_POST['search_hospital_state']);
          $district = mysqli_real_escape_string($db, $_POST['search_hospital_district']);
          if($requirement == 0)
          {
            $fetch_hosp = "SELECT `name`, `phone`, `available_beds` FROM `hospital_info` WHERE states='$state' AND districts='$district' ";
            $fetch_hosp_query = $db->query($fetch_hosp);
            $inc1 = 1;
            while($hosp_results = mysqli_fetch_assoc($fetch_hosp_query))
            {
              $name = $hosp_results['name'];
              $phone = $hosp_results['phone'];
              $beds = $hosp_results['available_beds'];

              ?>
              <div class="container">
                <table class="table table-dark">
                  <thead>
                    <tr>
                      <th scope="col">S.No.</th>
                      <th scope="col">Hospital Name</th>
                      <th scope="col">Hospital Contact Number</th>
                      <th scope="col">Number of beds available</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"><?php echo $inc1; ?></th>
                      <td><?php echo $name; ?></td>
                      <td><?php echo $phone; ?></td>
                      <td><?php echo $beds; ?></td>
                    </tr>
                  </tbody>
                </table>
            </div>

              <?php
              $inc1++;
            }

          }

          if($requirement == 1)
          {
            $fetch_hosp = "SELECT `name`, `phone`, `speciality`, `available_from`, `available_to` FROM `doctor_info` WHERE states='$state' AND districts='$district' ";
            $fetch_hosp_query = $db->query($fetch_hosp);
            $inc1 = 1;
            while($hosp_results = mysqli_fetch_assoc($fetch_hosp_query))
            {
              $name = $hosp_results['name'];
              $phone = $hosp_results['phone'];
              $speciality = $hosp_results['speciality'];
              $available_from = $hosp_results['available_from'];
              $available_to = $hosp_results['available_to'];

              ?>
              <div class="container">
                <table class="table table-dark">
                  <thead>
                    <tr>
                      <th scope="col">S.No.</th>
                      <th scope="col">Doctor Name</th>
                      <th scope="col">Doctor's Contact Number</th>
                      <th scope="col">Doctor's Speciality</th>
                      <th scope="col">Available From</th>
                      <th scope="col">Available To</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"><?php echo $inc1; ?></th>
                      <td><?php echo $name; ?></td>
                      <td><?php echo $phone; ?></td>
                      <td><?php echo $speciality; ?></td>
                      <td><?php echo $available_from; ?></td>
                      <td><?php echo $available_to; ?></td>
                    </tr>
                  </tbody>
                </table>
            </div>

              <?php
              $inc1++;
            }

          }

        }

      ?>

      <?php

        if(isset($_POST['search_blood']))
        {
          $state = mysqli_real_escape_string($db, $_POST['search_blood_state']);
          $district = mysqli_real_escape_string($db, $_POST['search_blood_district']);
          $blood_group = mysqli_real_escape_string($db, $_POST['search_blood_blood_group']);
          $fetch_blood = "SELECT `name`, `phone` FROM `hosp_patient_blood` WHERE states='$state' AND districts='$district' AND blood_group='$blood_group' ";
          $fetch_blood_query = $db->query($fetch_blood);
          $inc2 = 1;
          while($blood_results = mysqli_fetch_assoc($fetch_blood_query))
          {
            $name = $blood_results['name'];
            $phone = $blood_results['phone'];

            ?>

            <div class="container">
              <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">S.No.</th>
                    <th scope="col">Donor Name</th>
                    <th scope="col">Donor Contact Number</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $inc2; ?></th>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $phone; ?></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <?php
            $inc2++;
          }

          $fetch_blood_own = "SELECT `name`, `phone` FROM `own_will_blood` WHERE states='$state' AND districts='$district' AND blood_group='$blood_group' ";
          $fetch_blood_query_own = $db->query($fetch_blood_own);
          $inc3 = 1;
          while($blood_results_own = mysqli_fetch_assoc($fetch_blood_query_own))
          {
            $name = $blood_results_own['name'];
            $phone = $blood_results_own['phone'];

            ?>

            <div class="container">
              <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">S.No.</th>
                    <th scope="col">Donor Name</th>
                    <th scope="col">Donor Contact Number</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $inc3; ?></th>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $phone; ?></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <?php
            $inc3++;
          }

        }

      ?>


      <?php

        if(isset($_POST['donate_plasma']))
        {
          $state = mysqli_real_escape_string($db, $_POST['plasma_donor_state']);
          $district = mysqli_real_escape_string($db, $_POST['plasma_donor_district']);
          $blood_group = mysqli_real_escape_string($db, $_POST['plasma_donor_blood_group']);
          $fetch_plasma = "SELECT `name`, `phone` FROM `hosp_patient_plasma` WHERE states='$state' AND districts='$district' AND blood_group='$blood_group' ";
          $fetch_plasma_query = $db->query($fetch_plasma);
          $inc4 = 1;
          while($plasma_results = mysqli_fetch_assoc($fetch_plasma_query))
          {
            $name = $plasma_results['name'];
            $phone = $plasma_results['phone'];

            ?>

            <div class="container">
              <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">S.No.</th>
                    <th scope="col">Donor Name</th>
                    <th scope="col">Donor Contact Number</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $inc4; ?></th>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $phone; ?></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <?php
            $inc4++;
          }

          $fetch_plasma_own = "SELECT `name`, `phone` FROM `own_will_plasma` WHERE states='$state' AND districts='$district' AND blood_group='$blood_group' ";
          $fetch_plasma_query_own = $db->query($fetch_plasma_own);
          $inc5 = 1;
          while($plasma_results_own = mysqli_fetch_assoc($fetch_plasma_query_own))
          {
            $name = $plasma_results_own['name'];
            $phone = $plasma_results_own['phone'];

            ?>

            <div class="container">
              <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">S.No.</th>
                    <th scope="col">Donor Name</th>
                    <th scope="col">Donor Contact Number</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $inc5; ?></th>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $phone; ?></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <?php
            $inc5++;
          }

        }

      ?>



<br>  
<br>
<br>
<!-----------------------------------------hospital desk --------------->
<hr>
<section class="box-shadow-full">
  <div id="hospital_desk">
     <div class=" container-fluid">
      <h1 class=" text-center text-capitalize pt-5  text-success">  </h1>
     
       <div class=" row mb-5">
         <div class=" col-lg-6 col-md-6 col-12"> <img src=" images/h2.jpg" class=" img-fluid" width="1000px" >
           
         </div>
          <div class=" col-lg-6 col-md-6 col-12">
      <div align="center">
            <h1 class=" text-capitalize text-danger" >Hospital Desk </h1>

            <hr>
            <br>
            <p >A Hospital's Duty To Provide Medical Treatment. The historical rule for hospitals is that they must act reasonably in their decisions to treat patients. Now, its time to complete our duty in this apedamics by making all the records of corona patient of willing to donate a plasma and blood with very accurate and updated. 
            </p>
            <p>Just go and regester your hospital here and make all the records very accurate </p>
            <br>
                <a class="btn btn-danger effect" href="regestration_hosp.php" role="button">REGESTERED NOW</a>
            <button class="btn bg-danger effect text-white" data-toggle="modal" data-target="#hosp_login"> LOG IN</button>
             <!-- The Modal -->
       <div class="modal fade" id="hosp_login">
        <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
      
         <!-- Modal Header -->
          <div class="modal-header">
           <h4 class="modal-title">Sign Up</h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
        
        <!-- Modal body -->
    <div class="modal-body">
      <form method="post">
             <div class="form-group">
              <label for="contact_number">Enter your contact number</label>
              <input type="text" class="form-control" id="contact_number" autocomplete = "off" placeholder="Enter Contact Number" name="hosp_phone">
             </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="hosp_password">
              </div>
        <button type="submit" name="login_hosp" class="btn btn-danger">Submit</button>
      </form>
   
      <?php

      if(isset($_POST['login_hosp']))
      {
        $hosp_phone = mysqli_real_escape_string($db, $_POST['hosp_phone']);
        $hosp_password = mysqli_real_escape_string($db, $_POST['hosp_password']);

        $select_hosp = "SELECT * FROM `hospital_info` WHERE phone = '$hosp_phone' AND password = '$hosp_password' ";
        $query = $db->query($select_hosp);
        $data_fetch = mysqli_num_rows($query);
        if($data_fetch == 0)
        {
          echo "<script>alert('Please enter correct Phone and Password to login')</script>";
        }
        else{
          $_SESSION['hosp_phone'] = $hosp_phone;
          echo "<script>alert('Login Successful')</script>";
          echo "<script>window.location.assign('hosp_dashboard.php')</script>";
        }

      }

      ?>

   </div>
       
         <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
      </div>
  </div></div>

            <br>
          </div>
       </div>
       </div></div>
  </section> 
 
 <!----------------------------------------- end hospital desk --------------->
 <!----------------------------------------- public desk --------------->
 <hr>
<section class="box-shadow-full">
  <div id="public_desk">
     <div class=" container">
      <h1 class=" text-center text-capitalize pt-5 text-bold text-danger">Public Desk</h1>
       <hr class=" w-25 mx-auto">
     
       <div class=" row mb-5">
         <div class=" col-lg-6 col-md-6 col-12"> <img src=" images/donote.jpg" class=" img-fluid" width="1000px" >
          <h6> Donating Plasma !!!....</h6> 
          <br> 
          <br>
                <a class="btn btn-danger effect" href="regestration_own_person.php" role="button">REGESTERED NOW</a>
           

             <!-- The Modal -->
       <div class="modal fade" id="login_own">
        <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
      
         <!-- Modal Header -->
          <div class="modal-header">
           <h4 class="modal-title">Sign Up</h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
        
        <!-- Modal body -->
    <div class="modal-body">
      <form method="post">
             <div class="form-group">
              <label for="contact_number">Enter your contact number</label>
              <input type="text" class="form-control" id="contact_number" autocomplete = "off" placeholder="Enter Contact Number" name="own_phone">
             </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="own_password">
              </div>
        <button type="submit" name="login_own" class="btn btn-danger">Submit</button>
      </form>
      
      
      <?php

      if(isset($_POST['login_own']))
      {
        $own_phone = mysqli_real_escape_string($db, $_POST['own_phone']);
        $own_password = mysqli_real_escape_string($db, $_POST['own_password']);

        $select_own = "SELECT * FROM `own_will_blood` WHERE phone = '$own_phone' AND password = '$own_password' ";
        $query = $db->query($select_own);
        $data_fetch = mysqli_num_rows($query);
        if($data_fetch == 0)
        {
            $select_own = "SELECT * FROM `own_will_plasma` WHERE phone = '$own_phone' AND password = '$own_password' ";
          $query = $db->query($select_own);
          $data_fetch = mysqli_num_rows($query);
          if($data_fetch == 0)
          {
            echo "<script>alert('Please enter correct Phone and Password to login')</script>";
          }
          else{
            $_SESSION['own_phone'] = $own_phone;
            echo "<script>alert('Login Successful')</script>";
            echo "<script>window.location.assign('own_dashboard.php')</script>";
          }
        }
        else{
          $_SESSION['own_phone'] = $own_phone;
          echo "<script>alert('Login Successful')</script>";
          echo "<script>window.location.assign('own_dashboard.php')</script>";
        }

      }

      ?>-->
   </div> 
        
         <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
  </div>

       <div class=" col-lg-6 col-md-6 col-12"> <img src=" images/donor3.jpg" class=" img-fluid" height="100">
        <br>
        <br>
        <h5 class="text-danger">Just go and regester here to save someones life.......</h5>
           
</div>

            <br>
        
</div>
       </div>
 </section>
 <hr>
<!--end public desk-->
<br>
<br>
<br><br>

<!--footer section-->
 


  <section class="paralax-mf footer-paralax bg-image w-100 h-100 sect-mt4 route " style="background-image: url(images/blur.jpg); padding-top: 40px; ">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                     
                    </h5>
                  </div>
                  <div>

                        <br>
                        <br>
                        <p><img  src="images/g.jpg" width="450" >
                                        </p>

                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Get in Touch
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                     <!--  <img src="badli.jpg"> -->
                                        </p>
                    <ul class="list-ico" style="font-weight: bold;">
                      <br>
                      <li><span class="ion-ios-telephone"></span>+91 9166133039</li><br>
                      <li><span class="ion-email"></span>priyankasikarwar9166@gmail.com</li>
                    </ul>
                  </div>
                  <div class="socials w3-xlarge ">
                    <ul>
                      <a href="https://m.facebook.com/shrinit.goyal"class="facebook"></i><span class="ico-circle danger"><i class="fa fa-facebook"></i></span></a>&nbsp&nbsp&nbsp
                      <a href=" https://www.instagram.com/gshrinit/?hl=en"> </i><span class="ico-circle"><i class="fa fa-instagram"></i></span></a>&nbsp&nbsp&nbsp
                      <a href=" https://mobile.twitter.com/shrinitg"> </i><span class="ico-circle"><i class="fa fa-twitter"></i></span></a>&nbsp&nbsp&nbsp
                      <a href="https://www.linkedin.com/in/shrinit-goyal-86222716a"> <span class="ico-circle"><i class="fa fa-linkedin"></i></span></a>
                    </ul>
                  </div>
                  <div>
                    <h4>Want to Know about your donation:</h4>
                    <form method="post">
                      <div class="row">
                        <div class="col-lg-5">
                      <p style="font-weight: bold; margin-bottom: 7px;">Enter your contact number</p>
                      <input class="form-control mr-sm-0" type="text" placeholder="Enter your contact number" aria-label="Search" name="phone">
                    </div>
                      <div class="col-lg-5">
                        
                      <label for="about_donation" style="font-weight: bold;">Select type of donation:</label>
                        <select name="donation_type" id="about_donation" required class="form-control">
                          <option value="0">Blood</option>
                          <option value="1">Plasma</option>
                        </select>
                      </div>
                      <div class="col-lg-2">
                        <br>
                      <button name="show_status" class="btn btn-danger my-2 my-sm-0 btn-sm" type="submit">See status</button>
                    </div>
                  </div>

                    </form>
                    <br><br>

                    <h4>Check Bed Availability :</h4>
                    <form method="post">
                      <div class="row">
                        <div class="col-lg-6">
                          
                      <input class="form-control mr-sm-0" type="text" placeholder="Enter hospital number" aria-label="Search" name="hosp_name">
                    </div>
                      <div class="col-lg-2">
                      
                      <button name="check_bed" class="btn btn-danger my-2 my-sm-0 btn-sm" type="submit">Check status</button>
                    </div>
                  </div>

                    </form>

                    <?php

                    if(isset($_POST['check_bed']))
                    {
                      $name = mysqli_real_escape_string($db, $_POST['hosp_name']);
                      $fetch_bed = " SELECT `available_beds` FROM `hospital_info` WHERE name='$name' ";
                      $query_fetch = $db->query($fetch_bed);
                      $number_of_rows = mysqli_num_rows($query_fetch);
                      if($number_of_rows != 0)
                      {
                        $row_fetch = mysqli_fetch_assoc($query_fetch);
                        $available = $row_fetch['available_beds'];
                        echo "<script>alert('Number of beds available are: ".$available." ')</script>";
                      }
                      else
                      {
                        echo "<script>alert('This hospital is not available, please enter the correct name')</script>";
                      }
                    }

                    ?>

                    <?php

                    if(isset($_POST['show_status']))
                    {
                      $phone = mysqli_real_escape_string($db, $_POST['phone']);
                      $donation_type = mysqli_real_escape_string($db, $_POST['donation_type']);
                      if($donation_type == 0)
                      {
                        $get_status = "SELECT `status` FROM `own_will_blood` WHERE phone = '$phone' ";
                        $ex_query = $db->query($get_status);
                        $fetch_result_from_own_will_blood = mysqli_num_rows($ex_query);
                        if($fetch_result_from_own_will_blood == 0)
                        {
                          $get_status = "SELECT `status` FROM `hosp_patient_blood` WHERE phone = '$phone' ";
                          $ex_query = $db->query($get_status);
                          $fetch_result_from_hosp_blood = mysqli_num_rows($ex_query);
                          if($fetch_result_from_hosp_blood == 0)
                          {
                            echo "<script>alert('Please Enter Correct Details')</script>";
                          }
                          else
                          {
                            $row = mysqli_fetch_assoc($ex_query);
                            $status = $row['status'];
                            if($status == 0)
                            {
                              echo "<script>alert('Your Donation is not used till yet.')</script>";
                            }
                            else
                            {
                              echo "<script>alert('Congratulations. Your donation is successfull. You have saved a precious life. Please continue donating')</script>"; 
                            }
                          }
                        }
                        else
                          {
                            $row = mysqli_fetch_assoc($ex_query);
                            $status = $row['status'];
                            if($status == 0)
                            {
                              echo "<script>alert('Your Donation is not used till yet.')</script>";
                            }
                            else
                            {
                              echo "<script>alert('Congratulations. Your donation is successfull. You have saved a precious life. Please continue donating')</script>"; 
                            }
                          }
                      }
                      else
                      {
                        $get_status = "SELECT `status` FROM `own_will_plasma` WHERE phone = '$phone' ";
                        $ex_query = $db->query($get_status);
                        $fetch_result_from_own_will_blood = mysqli_num_rows($ex_query);
                        if($fetch_result_from_own_will_blood == 0)
                        {
                          $get_status = "SELECT `status` FROM `hosp_patient_plasma` WHERE phone = '$phone' ";
                          $ex_query = $db->query($get_status);
                          $fetch_result_from_hosp_blood = mysqli_num_rows($ex_query);
                          if($fetch_result_from_hosp_blood == 0)
                          {
                            echo "<script>alert('Please Enter Correct Details')</script>";
                          }
                          else{
                            $row = mysqli_fetch_assoc($ex_query);
                            $status = $row['status'];
                            if($status == 0)
                            {
                              echo "<script>alert('Your Donation is not used till yet.')</script>";
                            }
                            else
                            {
                              echo "<script>alert('Congratulations. Your donation is successfull. You have saved a precious life. Please continue donating')</script>"; 
                            }
                          }
                        }
                        else
                          {
                            $row = mysqli_fetch_assoc($ex_query);
                            $status = $row['status'];
                            if($status == 0)
                            {
                              echo "<script>alert('Your Donation is not used till yet.')</script>";
                            }
                            else
                            {
                              echo "<script>alert('Congratulations. Your donation is successfull. You have saved a precious life. Please continue donating')</script>"; 
                            }
                          }
                      }
                    }

                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container" style="font-weight: bold;">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; All Rights Reserved</p>
              <p>HealthSeva</p>
              <p>Designed and developed by PRIYANKA SIKARWAR and SHRINIT GOYAL</p>
              <p align="Right">image Source @Internet</p>
              <p align="center">Last Updated 25-09-2020</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
 
<!-- end footer-->


  <!-- fquery first, then popper.js ,bootstrap js-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.7/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>	

  <script>
    $(function(){
    $('#state').on('change', function(){
        var val = $(this).val();
        var sub = $('#district');
        $('option', sub).filter(function(){
            if (
                 $(this).attr('data-group') === val 
              || $(this).attr('data-group') === 'SHOW'
            ) {
              if ($(this).parent('span').length) {
                $(this).unwrap();
              }
            } else {
              if (!$(this).parent('span').length) {
                $(this).wrap( "<span>" ).parent().hide();
              }
            }
        });
    });
    $('#state').trigger('change');
});
</script>

</div>
</body>
</html>	
