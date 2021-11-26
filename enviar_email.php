<?php $name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent="From: $name \n Phone: $phone \n E-mail: $email \n Message: $message";
$recipient = "migocr@gmail.com, alonsogomez121@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You, your message has been received. ";
echo "In a few seconds you will be redirected to the home page...";

echo"
<script>
//Using setTimeout to execute a function after 4 seconds.
setTimeout(function () {
   //Redirect with JavaScript
   window.location.href= 'index.html';
}, 3000);
</script>
";
?>