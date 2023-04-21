<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
    <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  height: 300px;
  border-radius: 5px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 16px;
}
/* .form{
  text-align: center;
  background: black;
}
 */
 fieldset{
  background-color: orange;
  min-width: auto;
 }
</style>

</head>
<body style="background-color:light">
<center>
    
<form action="" method="post">
  <fieldset>
    <h2>STUDENT LOGIN</h2>
    <img src="https://pbs.twimg.com/profile_images/904691154368778241/QJyreG0h_200x200.jpg" alt="..." class="img-thumbnail"><br>

  <label for="fname">First Name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last Name:</label><br>
  <input type="text" id="lname" name="lname"><br>
  <label for="E-Mail">Mail ID:</label><br>
  <input type="mailid" id="mail" name="mail"><br>
  <label for="phone number">Contact No:</label><br>
  <input type="text" id="contact no." name="contactno"><br>
  <label for="address">Permanent Address: </label><br>
  <input type="text" id="address" name="address"><br>
  <label for="oaddress">Office Address: </label><br>
  <input type="text" id="oaddress" name="address"><br>
  <label for="fatname">Father Name: </label><br>
  <input type="text" id="fatname" name="fatname"><br>
  <label for="adm.no."> Admission No: </label><br>
  <input type="text" id="adm.no." name="admiss.no."><br><br>
  <input type="checkbox" id="Name 1" name="gender">
  <label for="vehicle1"> I am not a Robot</label><br><br>
  <input type="submit" value="Submit"><br><br><br>
</fieldset>  
</center>
</body>
</html>

</form>



<div class="card my-auto" style="width:100% height:100px; background-color:aqua">
  <div class="container">
      
  <label for="Name">Name:</label> <p><?php echo($firstName); ?>
  <label for="lname">Last Name:</label> <p><?php echo($lastName); ?>
  <label for="contactno.">Contact No.:</label> <p><?php echo($contactno); ?>
  <label for="perm.Address">Permanent address:<label> <p><?php echo($permanentaddress); ?>
  <label for="off. address">Office address:<label> <p><?php echo($Officeaddress); ?>
  <label for="fatname">Father Name:</label> <p><?php echo($Fathername); ?>
  <label for="adm.no.">Admission No:</label> <p><?php echo($AdmissionNo); ?>
   

<?php

// $query = "

// INSERT INTO `database` `school` (`comment_ID`, `comment_author`,
// `comment_author_email`, `comment_author_url`, `comment_content`) VALUES ('NULL', 
// '$the_name', '$the_email', '$the_website', '$the_comment'); ";
$servername = "localhost";
$username = "root";
$password = "";
$db = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " .$conn->connect_error);
}   else{
  echo "Connected successfully";

  // $query = "INSERT INTO `school` (`id`, `name`, `email`, `phone_no`) VALUES (NULL, $firstName, $mailid, '7894561230');";

  // mysql_query($conn,$query);
  
  // echo "
  
  // Thanks for getting in touch.
  
  // ";
$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$mailid = $_POST['mail'];
$contactno = $_POST['contactno'];
echo($firstName.$lastName.$mailid.$contactno.$permanentaddress.$Officeaddress.$Fathername.$Admissionno);

  $sql = "INSERT INTO `school` (`id`, `name`, `email`, `phone_no`) VALUES (NULL, '$firstName', '$lastName', '$contactno', '$permanentaddress', '$Officeaddress', '$Fathername', '$Admissionno)";  

if(mysqli_query($conn, $sql)){  

 echo "Record inserted successfully";  

}else{  

echo "Could not insert record: ". mysqli_error($conn);  

}  

mysqli_close($conn);
    
}



if(!$firstName=="" && !$lastName=="" && !$mailid==""  && !$contactno==""){

    echo("<b>".$firstName."<b> \n");
    echo("<b>".$lastName."<b> \n");
    echo("<b>".$mailid. "<b> \n");
    echo("<b>".$contactno."<b> \n");
    
}


// // jab tik rahega 
// if($dataComeFromHtmlLang){
//     echo(" ".$dataComeFromHtmlLang);
//     if($data=="azzad"){
//         for ($i=0; $i <= 5 ; $i++) { 
//             echo("<br>".$i." - > ".$data);
//             # code...
//         }
//     }
// }
// // jab tik nhi rahega
// else{
//     echo(" ".$dataComeFromHtmlLang);
// }


// echo($data);

// if($data=="annu"){

//     for ($i=0; $i <= 10; $i++) { 
//         echo("<br>".$i." - > ".$data);
//     }
// }
// elseif($data=="azzad"){

// for ($i=1; $i <= 5; $i++) {
//     echo("<br>" .$i." - > " .$data); # code...
// }
    
// }elseif($data=="saurav")
// {
//     echo($data);
// }



 
?>