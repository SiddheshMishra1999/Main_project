<?php
 include_once 'server.php';
$errors = array();

//Registering Facility

$facility_id = mysqli_real_escape_string($db, $_POST['facility_id']);
$type_name = mysqli_real_escape_string($db, $_POST['type_name']);
$name = mysqli_real_escape_string($db, $_POST['name']);
$address = mysqli_real_escape_string($db, $_POST['address']);
$webaddress = mysqli_real_escape_string($db, $_POST['webaddress']);
$telephone = mysqli_real_escape_string($db, $_POST['telephone']);
$postal_code = mysqli_real_escape_string($db, $_POST['postal_code']);
$province = mysqli_real_escape_string($db, $_POST['province']);
$city = mysqli_real_escape_string($db, $_POST['province']);

//check for missing values
/*
if(empty($passport_num)) {
  $passport_num = NULL;
  }
  if(empty($medicare)) {
  $medicare = NULL;
  }
  if(empty($SSN)) {
  $SSN = NULL;
  }
*/

//check db for existing person unique values
$user_check_query = "SELECT * FROM Person WHERE facility_id = '$facility_id' or webaddress = '$webaddress' or name = '$name' or address = '$address' LIMIT 1";
$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($results);

if($user){

  if($user['facility_id'] === $facility_id){array_push($errors, "Facility ID already exist");}
  if($user['webaddress'] === $webaddress){array_push($errors, "Webaddress already exist");}
  if($user['name'] === $name){array_push($errors, "Name already exist");}
  if($user['address'] === $address){array_push($errors, "Address already exist");}

}
  if(count($errors) == 0){

    $query = "INSERT INTO Facility VALUES ('$facility_id', '$type_name', '$name', '$address', '$webaddress', '$telephone', '$postal_code')";
    mysqli_query($db,$query);
    $query2 = "INSERT INTO Postal_code VALUES ('$postal_code','$city','$province')";
    mysqli_query($db,$query2);
    $query3 = "INSERT INTO Infected VALUES ('$infected','$person_id', '$infected_date', '$variant_type')";
    mysqli_query($db,$query3);
    // redirect to submitted page
    header("Location: Sumbit.php");


  }
  else{
      header("Location: Failed.php");
  }


?>
