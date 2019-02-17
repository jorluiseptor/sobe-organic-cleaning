<?php

// THE BELOW LINE STATES THAT IF THE SUBMIT BUTTON
// WAS PUSHED, EXECUTE THE PHP CODE BELOW TO SEND THE
// MAIL. IF THE BUTTON WAS NOT PRESSED, SKIP TO THE CODE
// BELOW THE "else" STATEMENT (WHICH SHOWS THE FORM INSTEAD).


// REPLACE THE LINE BELOW WITH YOUR E-MAIL ADDRESS.
//info@sobeorganic.com, thodge@sobeorganic.com,
$to = 'info@sobeorganic.com, adela@sobeorganic.com, cwilliams@sobeorganic.com, dchamp@sobeorganic.com, dchase@sobeorganic.com' ;
$subject = 'SOBE Organic Message' ;

// NOT SUGGESTED TO CHANGE THESE VALUES
//$message = $_POST [ "message" ];
$message =  "Name: ". $_POST [ "Name" ]. "\r\n".
		 "Email: ". $_POST [ "Email" ]. "\r\n".
		 "Phone Numbers: ". $_POST[ "Phone"]. "\r\n".
		 "\r\n".
	      "Own Pets: ". $_POST["Pets"]. "\r\n".
		 "\r\n".
		 "Address: ". $_POST["Address"]. "\r\n". 
		 "City: ". $_POST["City"]. "\r\n". 
		 "State: ". $_POST["State"]. "\r\n".
		 "Zip: ". $_POST["Zip"]. "\r\n".
		 "\r\n".
		 "Approximate Square Feet: ". $_POST["ApproxSquareFeet"]. "\r\n". 
		 "Frequency: ". $_POST["Frequency"]. "\r\n". 
		 "Bedrooms: ". $_POST["Bedrooms"]. "\r\n". 
		 "Bathrooms: ". $_POST["Baths"]. "\r\n". 
		 "\r\n".
		 "Comments: ". $_POST["Comments"].
		 "\r\n"."\r\n".
		 "Source: ". $_POST["Source"]
		 ;

$headers= "From: ". $_POST["Name"] . "<".$_POST [ "Email" ].">". "\r\n".
	 		'X-Mailer: PHP/' . phpversion();

			
			
	//VALIDATION
	//VALIDATE VIA TOKEN
	$proceed = false;
    
	if(
        //ensure that fields are populated
        isset($_POST['ts']) && 
        isset($_COOKIE['token']) && 

        isset($_POST["Name"]) &&
        isset($_POST["Email"]) &&
        isset($_POST["Phone"]) &&
        isset($_POST["Address"]) &&
        isset($_POST["City"]) &&
        isset($_POST["State"]) &&
        isset($_POST["Zip"]) &&
        isset($_POST["ApproxSquareFeet"]) &&
        isset($_POST["Frequency"]) &&
        isset($_POST["Baths"]) &&
        isset($_POST["Source"]) &&
        
        //if the body field is filled, then this is spam
        //only send the email if this field is empty
        empty($_POST["body"]) &&
        //compare cookie with token
        $_COOKIE['token'] == md5('sobeorganic'.$_POST['ts'])
    ) {
        $proceed = true;
    }
		


	if ($proceed) {
    //send e-mail if it passed validation
        mail ( $to , $subject , $message , $headers );
        
    //email that goes to the user
    $headers2= "From: SOBE Organic Cleaning <info@sobeorganic.com>". "\r\n".
    'X-Mailer: PHP/' . phpversion();
    
    $message2= "Dear ". $_POST["Name"]. ", \r\n". "\r\n". 'On behalf of SOBE Organic Cleaning we would like to thank you for your interest in our company and the opportunity for us to WOW you with our services. A representative will be calling you shortly to assist you in choosing a “green” solution to your cleaning and housekeeping needs. We look forward to including you as one of our valued and completely satisfied customers!'. "\r\n\r\n"."Thanks,"."\r\n\r\n". "SOBE Organic Cleaning"  ;
    
    $to2 = $_POST["Email"];
    
    $subject2 = "We have received your message!";
    
    mail ($to2, $subject2, $message2, $headers2);     
	} 
    else {
    echo "This is spam";
    }

?>