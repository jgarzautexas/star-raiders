<?php
	// $to_address = "danhhoang@gmail.com";
	$to_address = "garza.jonathan@gmail.com";

        // Condition to fine the correct Request Methods
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // compose message
                $email_message = "Name: " . $_POST["full_name"] . "\n";
                $email_message .= "Email: " . $_POST["email"] . "\n";
                $email_message .= "Number: " . $_POST["number"] . "\n";
                $email_message .= "Carrier: " . $_POST["carrier"] . "\n";  

        #       // make sure each line doesn't exceed 70 characters
        #       $message = wordwrap($message, 70);

        #       // send email
                mail($to_address, 'Star Raiders Signup', $email_message);
                // Possibly check if succesful email or validate form fields and redirect to thanks.htm
                header('Location: thanks.html');

        }elseif($_SERVER['REQUEST_METHOD'] === 'GET'){
                // Redirect back to the form
                header('Location: ./form.html');
        }else{
                // Should never get to this method. 
                echo "Method not allowed.";
        }
 
?>

