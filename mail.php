<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$password= $_POST['password'];
$to = "sanper.p.001@gmail.com";
$subject = "Wellcome my Form To Website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: Sandiwebdesign.com" . "\r\n" .
"CC: sandiwebdesign001";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
<?php
$password=trim($_POST['password']);
if(!empty($password)){
   echo "<p>The password is : <b>" . $password . "</b></p>";
   echo "<p>The password in md5 encyption is : <b>" . md5($password) . "</b></p>";
}
?>