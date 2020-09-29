<html>
<head>
	<title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="regestration2.css">
</head>
<body>
    <div class = "back">
        <img src="images/bd1.jpg" class=" img-fluid" height="900" width="1250px">
     </div>
    <div class="login-box">
    	<img src="images/down.jpeg" class="avatar" >
    	<h1> Register Here</h1>
    	<br>
    	 <form method="post">
    		<p>Name </p>
    		<input type="text" name="Name" placeholder="Enter name of hospital" class="form-control">
        <p>Address</p>
        <br>
        <label for="state">Select your state:</label>
            <select name="state" id="state" required class="form-control">
              <option value="Rajasthan">Rajasthan</option>
              <option value="Gujrat">Gujrat</option>
              <option value="Uttar-Pradesh">Uttar-Pradesh</option>
            </select>
            <label for="district">Select your district:</label>
            <select name="district" id="district" required class="form-control">
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
            </select><br>
          <p>Contact Number</p>
    		<input type="text" name="phone no." placeholder="Enter your 10 digit no." class="form-control">
    		<p>Email</p>
            <input type="text" name="email" placeholder="Enter Email" required>
            <p>Password</p>
        <input type="password" name="password" placeholder="Enter password" class="form-control">
        <p>Blood Group
            <select name="blood_group" id="blood_group" required class="form-control">
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
           <br>

            <p >Select your donation
            <select name="donate" id="donate" required class="form-control">
              <option value="0">Blood</option>
              <option value="1">Plasma</option>
            </select>
          </p>
          <br>
            <input type="submit" name="register" value="Register Yourself">
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
    $state = mysqli_real_escape_string($db, $_POST['state']);
    $district = mysqli_real_escape_string($db, $_POST['district']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $donate = mysqli_real_escape_string($db, $_POST['donate']);
    $blood_group = mysqli_real_escape_string($db, $_POST['blood_group']);

    echo $donate;

    if($donate == 0)
    {
        $own_details = " INSERT INTO `own_will_blood`(`name`, `phone`, `email`, `blood_group`, `districts`, `states`, `status`, `password`) VALUES ( '$name', '$phone', '$email', '$blood_group', '$district', '$state', '0', '$password' ) ";
        $query = $db->query($own_details);
    }
    else if($donate == 1)
    {
        $own_details = " INSERT INTO `own_will_plasma`(`name`, `phone`, `email`, `blood_group`, `districts`, `states`, `status`, `password`) VALUES ( '$name', '$phone', '$email', '$blood_group', '$district', '$state', '0', '$password' ) ";
        $query = $db->query($own_details);
    }

}

?>