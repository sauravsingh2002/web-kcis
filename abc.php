<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</style>

</head>
<body>
    
<form action="" method="post">

<label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"><br>
  <label for="E-Mail">mail:</label><br>
  <input type="mailid" id="mail" name="mail"><br>
  <label for="phone number">contactno:</label><br>
  <input type="text" id="contact no." name="contactno"><br>
  <input type="checkbox" id="Name 1" name="gender">
  <label for="vehicle1"> I am not a Robot</label><br><br>
  
  <input type="submit" value="Submit"><br><br><br>
  

   

  </div>
</div>

    
</body>
</html>

<!-- html ka form yaha banta hai -->  

</form>


<?php
//collect data

$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$mailid = $_POST['mail'];
$contactno = $_POST['contactno'];
// echo($firstName);
?>

<div class="card" style="width:100% height:200px; background-color:green">
  <div class="container">
      
  <label for="Name">Name:</label> <p><?php echo($firstName); ?>
   

<?php

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