<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "demo@crunchpress.com";
    $email_subject = "New Contact Form Submission";
    
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(
        !isset($_POST['email']) ||
        !isset($_POST['name']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');      
    }
     
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
	$website = $_POST['website']; // required
     

  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
    
	$email_message .= "Name: ".clean_string($name)."\n"; 
    $email_message .= "Email: ".clean_string($email_from)."\n";
	if ($website != '' ){
    $email_message .= "Website: ".clean_string($website)."\n";
	}
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 
?>
 
<!-- include your own success html here -->
<html> 
 <head>
<script type="text/javascript">
<!--
function delayer(){
    window.location = "<?php echo $_SERVER['HTTP_REFERER']; ?>"
}
//-->
</script>
</head>
<body onLoad="setTimeout('delayer()', 1000)">
	
	<h1> Green Theme</h1>
	
	<p> Thank you for contacting us. We will be in touch with you very soon. </p>

</body>
</html>
<?php
}
?>