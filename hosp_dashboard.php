<?php

$db = mysqli_connect("localhost", "root", "", "ozeki");
session_start();
error_reporting(0);

$hosp_phone = $_SESSION['hosp_phone'];
$select_hosp_id = "SELECT `id`, `available_beds` FROM `hospital_info` WHERE phone='$hosp_phone' ";
$query_hosp = $db->query($select_hosp_id);
$rows = mysqli_fetch_assoc($query_hosp);
$hosp_id = $rows['id'];
$hosp_available_beds = $rows['available_beds'];

?>

<!DOCTYPE html>
<html>
<head>
  <title>HeathSeva</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>

<div class="container-fluid" style="margin-top: 100px; left: 0; right: 0; width: 80%;">
  <div class="row">
    <div class="col-lg-3">
      <a class="btn btn-primary" data-toggle="collapse" href="#blood_donor_details" role="button" aria-expanded="false" aria-controls="collapseExample">
        Enter blood donor details
      </a>
    </div>
    <div class="col-lg-3">
      <a class="btn btn-primary" data-toggle="collapse" href="#plasma_donor_details" role="button" aria-expanded="false" aria-controls="collapseExample">
        Enter Plasma Donor Details
      </a>
    </div>
    <div class="col-lg-3">
      <a class="btn btn-primary" data-toggle="collapse" href="#doctor_details" role="button" aria-expanded="false" aria-controls="collapseExample">
        Enter Doctor Information
      </a>
    </div>
    <div class="col-lg-3">
      <a class="btn btn-primary" data-toggle="collapse" href="#bed_availability" role="button" aria-expanded="false" aria-controls="collapseExample">
        Update Hospital Bed Availability
      </a>
    </div>
  </div>
</div>

<br><br>

<div class="container">

  <div class="row">

    <div class="col-lg-12 collapse" id="blood_donor_details">
      <h4 style="text-align: center;">Blood Donor Details</h4>
      <form method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name of Patient" name="blood_donor_name" required>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Phone</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Contact number of Patient" name="blood_donor_phone" required>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Select Blood Group of patient</label>
          <select class="form-control" id="exampleFormControlSelect1" name="blood_donor_blood_group" required>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
          </select>
        </div>
        <div class="form-group">
          <label for="state">Select State of patient:</label>
          <select name="blood_donor_state" id="state" required class="form-control">
            <option value="Rajasthan">Rajasthan</option>
            <option value="Gujrat">Gujrat</option>
            <option value="Uttar-Pradesh">Uttar-Pradesh</option>
          </select>
        </div>
        <div class="form-group">
          <label for="district">Select District of patient:</label>
          <select name="blood_donor_district" id="district" required class="form-control">
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
        </div>
        <button type="submit" class="btn btn-primary" name="submit_blood_donor">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
      </form>

      <?php

        if(isset($_POST['submit_blood_donor']))
        {
          $name = mysqli_real_escape_string($db, $_POST['blood_donor_name']);
          $phone = mysqli_real_escape_string($db, $_POST['blood_donor_phone']);
          $blood_group = mysqli_real_escape_string($db, $_POST['blood_donor_blood_group']);
          $district = mysqli_real_escape_string($db, $_POST['blood_donor_district']);
          $state = mysqli_real_escape_string($db, $_POST['blood_donor_state']);

          $insert_donor = "INSERT INTO `hosp_patient_blood`( `hosp_id`, `name`, `phone`, `blood_group`, `districts`, `states`, `status` ) VALUES ( '$hosp_id', '$name', '$phone', '$blood_group', '$district', '$state', '0') ";
          $query = $db->query($insert_donor);
        }

      ?>

    </div>

    <div class="col-lg-12 collapse" id="plasma_donor_details">
      <h4 style="text-align: center;">Plasma Donor Details</h4>
      <form method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name of Patient" name="plasma_donor_name" required>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Phone</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Contact number of Patient" name="plasma_donor_phone" required>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Select Blood Group of patient</label>
          <select class="form-control" id="exampleFormControlSelect1" name="plasma_donor_blood_group" required>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
          </select>
        </div>
        <div class="form-group">
          <label for="state">Select State of patient:</label>
          <select name="plasma_donor_state" id="state" required class="form-control">
            <option value="Rajasthan">Rajasthan</option>
            <option value="Gujrat">Gujrat</option>
            <option value="Uttar-Pradesh">Uttar-Pradesh</option>
          </select>
        </div>
        <div class="form-group">
          <label for="district">Select District of patient:</label>
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
        </div>
        <button type="submit" class="btn btn-primary" name="submit_plasma_donor">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
      </form>

      <?php

        if(isset($_POST['submit_plasma_donor']))
        {
          $name = mysqli_real_escape_string($db, $_POST['plasma_donor_name']);
          $phone = mysqli_real_escape_string($db, $_POST['plasma_donor_phone']);
          $blood_group = mysqli_real_escape_string($db, $_POST['plasma_donor_blood_group']);
          $district = mysqli_real_escape_string($db, $_POST['plasma_donor_district']);
          $state = mysqli_real_escape_string($db, $_POST['plasma_donor_state']);

          $insert_donor = "INSERT INTO `hosp_patient_plasma`( `hosp_id`,  `name`, `phone`, `blood_group`, `districts`, `states`, `status` ) VALUES ( '$hosp_id', '$name', '$phone', '$blood_group', '$district', '$state', '0') ";
          $query = $db->query($insert_donor);
        }

      ?>

    </div>

    <div class="col-lg-12 collapse" id="doctor_details">
      <h4 style="text-align: center;">Enter Doctor's Information</h4>
      <form method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Doctor's Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="doc_name" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Doctor's Contact Number</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter contact number" name="doc_phone" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Doctor's Speciality</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter speciality of doctor" name="doc_speciality" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Doctor's Available From</label>
          <input type="time" class="form-control" id="exampleInputPassword1" name="doc_available_from" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Doctor's Available To</label>
          <input type="time" class="form-control" id="exampleInputPassword1" name="doc_available_to" required>
        </div>
        <div class="form-group">
          <label for="state">Select State:</label>
          <select name="doc_state" id="state" required class="form-control">
            <option value="Rajasthan">Rajasthan</option>
            <option value="Gujrat">Gujrat</option>
            <option value="Uttar-Pradesh">Uttar-Pradesh</option>
          </select>
        </div>
        <div class="form-group">
          <label for="district">Select District:</label>
          <select name="doc_district" id="district" required class="form-control">
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
        </div>
        <button type="submit" class="btn btn-primary" name="submit_doc_info">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
      </form>

      <?php

      if(isset($_POST['submit_doc_info']))
      {
        $name = mysqli_real_escape_string($db, $_POST['doc_name']);
        $phone = mysqli_real_escape_string($db, $_POST['doc_phone']);
        $state = mysqli_real_escape_string($db, $_POST['doc_state']);
        $district = mysqli_real_escape_string($db, $_POST['doc_district']);
        $speciality = mysqli_real_escape_string($db, $_POST['doc_speciality']);
        $doc_available_from = mysqli_real_escape_string($db, $_POST['doc_available_from']);
        $doc_available_to = mysqli_real_escape_string($db, $_POST['doc_available_to']);

        $insert_doc = "INSERT INTO `doctor_info`( `name`, `phone`, `speciality`, `available_from`, `available_to`, `districts`, `states` ) VALUES ('$name', '$phone', '$speciality', '$doc_available_from', '$doc_available_to', '$district', '$state') ";
        $query = $db->query($insert_doc);

      }

      ?>

    </div>

    <div class="col-lg-12 collapse" id="bed_availability">
      <h4 style="text-align: center;">Enter Number of beds available</h4>
      <form method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Enter Number of Available Beds</label>
          <input type="number" class="form-control" name="available_beds" required min="0" value="<?php echo $hosp_available_beds; ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="submit_bed">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
      </form>

      <?php

      if(isset($_POST['submit_bed']))
      {
        $available_beds = mysqli_real_escape_string($db, $_POST['available_beds']);

        $insert_doc = " UPDATE `hospital_info` SET available_beds = '$available_beds' WHERE id='$hosp_id' ";
        $query = $db->query($insert_doc);

      }

      ?>

    </div>

  </div>

</div>

<br><br>
<div class="container">

    <h4 style="text-align: center;">Previous Patients</h4>
    <br>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">S.No.</th>
          <th scope="col">Patient Name</th>
          <th scope="col">Phone</th>
          <th scope="col">Donor Type</th>
          <th scope="col">Blood Group</th>
          <th scope="col">State</th>
          <th scope="col">District</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php

          $fetch_patient_details = "SELECT `id`, `name`, `phone`, `status`, `blood_group`, `districts`, `states` FROM `hosp_patient_blood` WHERE hosp_id='$hosp_id' ";
          $query_fetch = $db->query($fetch_patient_details);
          $a = 1;
          while($rows_patient_blood=mysqli_fetch_assoc($query_fetch))
          {
            $id = $rows_patient_blood['id'];
            $name = $rows_patient_blood['name'];
            $phone = $rows_patient_blood['phone'];
            $blood_group = $rows_patient_blood['blood_group'];
            $states = $rows_patient_blood['states'];
            $districts = $rows_patient_blood['districts'];
            $status = $rows_patient_blood['status'];

        ?>
        <tr>
          <th scope="row"><?php echo $a; ?></th>
          <td><?php echo $name; ?></td>
          <td><?php echo $phone; ?></td>
          <td>Blood</td>
          <td><?php echo $blood_group; ?></td>
          <td><?php echo $states; ?></td>
          <td><?php echo $districts; ?></td>
          <td><?php if($status==0){ ?> <h5><span class="badge badge-warning">Pending</span></h5> <?php } else if($status==1) { ?> <h5><span class="badge badge-success">Done</span></h5> <?php } ?></td>
          <form method="post">
            <input type="hidden" name="blood_check" value="<?php echo $id; ?>">
            <td><button type="submit" class="btn btn-primary" name="blood_done">Check</button></td>
          </form>
          <?php

          if(isset($_POST['blood_done']))
          {
            $id = $_POST['blood_check'];
            $change_status = "UPDATE `hosp_patient_blood` SET status='1' WHERE id='$id' ";
            $query = $db->query($change_status);
          }

          ?>
        </tr>
        <?php
          $a++;
          }
        ?>

        <?php

          $fetch_patient_details_1 = "SELECT `id`, `name`, `phone`, `status`, `blood_group`, `districts`, `states` FROM `hosp_patient_plasma` WHERE hosp_id='$hosp_id' ";
          $query_fetch_1 = $db->query($fetch_patient_details_1);
          $a1 = 1;
          while($rows_patient_blood1=mysqli_fetch_assoc($query_fetch_1))
          {
            $id = $rows_patient_blood1['id'];
            $name = $rows_patient_blood1['name'];
            $phone = $rows_patient_blood1['phone'];
            $blood_group = $rows_patient_blood1['blood_group'];
            $states = $rows_patient_blood1['states'];
            $districts = $rows_patient_blood1['districts'];
            $status = $rows_patient_blood1['status'];

        ?>
        <tr>
          <th scope="row"><?php echo $a; ?></th>
          <td><?php echo $name; ?></td>
          <td><?php echo $phone; ?></td>
          <td>Plasma</td>
          <td><?php echo $blood_group; ?></td>
          <td><?php echo $states; ?></td>
          <td><?php echo $districts; ?></td>
          <td><?php if($status==0){ ?> <h5><span class="badge badge-warning">Pending</span></h5> <?php } else if($status==1) { ?> <h5><span class="badge badge-success">Done</span></h5> <?php } ?></td>
          <form method="post">
            <input type="hidden" name="plasma_done" value="<?php echo $id; ?>">
            <td><button type="submit" class="btn btn-primary" name="plasma_check">Check</button></td>
          </form>
          <?php

          if(isset($_POST['plasma_check']))
          {
            $id = $_POST['plasma_done'];
            $change_status = "UPDATE `hosp_patient_plasma` SET status='1' WHERE id='$id' ";
            $query = $db->query($change_status);
          }

          ?>
        </tr>
        <?php
          $a1++;
          }
        ?>

      </tbody>
    </table>

  </div>

</body>

<script>
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

</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>