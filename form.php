 <?php
$name=$_POST["name"];
$email=$_POST["email"];
// $phone=$_POST["phone"];
$message=$_POST["message"];
$to="praveenrambalu@gmail.com"; // Receiver Email ID, Replace with your email ID
			            	$subject='Contact Form Submit from Total fitness';
						
                            $headers="From: ".$email;
							 
							 $msg="Name : $name \n\n Email: $email \n\n \n\n Message: $message";
							$retval = mail ($to,$subject,$msg,$headers);
							if($retval == true){
							echo 'success';
								
							}
							else{
							echo 'failed';
								
							}
?>
$(function () {
      
    $('#contactform').on('submit', function (e) {

      e.preventDefault();

      $.ajax({
        type: 'post',
        url: 'form.php',
        data: $('#contactform').serialize(),
        success: function (data) {
          if (data=="success") {
              swal("Good job!", "We will contact you asap !", "success");
          } else {
              swal ( "Oops" ,  "Something went wrong!" ,  "error" )
          }
        }
      });
//   alert("hi");
    });

  });