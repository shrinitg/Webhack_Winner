
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="regestration.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
     <div class = "back">
        <img src="images/h1.jpg" class=" img-fluid" height="700" width="1250px">
     </div>
    <div class="login-box">
    	<img src="images/down.jpeg" class="avatar" >
    	<h5 style="text-align: center;"> Register Here</h5>
    	<br>
      <form method="post">
    		<p>Hospital Name </p>
    		<input type="text" name="name" placeholder="Enter name of hospital" class="form-control">
    		<p>Email</p>
    		<input type="text" name="email" placeholder="Enter Email" class="form-control">
    		<p>Password</p>
    		<input type="password" name="password" placeholder="Enter password" class="form-control">
         
           <p >Select your state:</p>
            <select name="state" id="state" class="form-control">
              <option value="Rajasthan">Rajasthan</option>
              <option value="Gujrat">Gujrat</option>
              <option value="Uttar-Pradesh">Uttar-Pradesh</option>
            </select>
            <br>
            <p>Select your district:</p>
            <select name="district" id="district" class="form-control">
              <option data-group='SHOW' value="Bharatpur">--Select--</option>  
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
            <p>Contact Number</p>
            <input type="text" name="phone" placeholder="Enter contact number" required class="form-control">
          
            <input type="submit" name="register" value="Register Yourself" class="btn">
        </form>

    </div>
</body>

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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>


<?php

$db = mysqli_connect("localhost", "root", "", "ozeki");

if(isset($_POST['register']))
{
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $district = mysqli_real_escape_string($db, $_POST['district']);
    $state = mysqli_real_escape_string($db, $_POST['state']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $hosp_details = " INSERT INTO `hospital_info`(`name`, `districts`, `states`, `phone`, `password`) VALUES ('$name', '$district', '$state', '$phone', '$password') ";
    $query = $db->query($hosp_details);

}

?>