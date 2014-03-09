/* Author: Jorge Sepulveda, jorluiseptor.com
*/
// JavaScript Document

$(document).ready(function() {

    
    //to enable corners on any element with the corner class
		//$(".corner").corner("5px");
		
	//adds class 'alt' for every other table row
		$('table tr:even').addClass('alt');
	
	//adds class of 'over' to each table row when the mouse is over that row. will remove on mouseout	
		$("table tr").mouseover(function() {$(this).addClass("over");}).mouseout(function() {$(this).removeClass("over");});	
		
	
		
	// if browser supports input field placeholder, 
		//then hide the field label
    		if (Modernizr.input.placeholder){
			// use a input hint script
      		$("label").hide();
    		}	 
	
	
	

	//
	// FORM VALIDATION
	//
	//add token power to form see: http://docs.jquery.com/Tutorials:Safer_Contact_Forms_Without_CAPTCHAs
		$.get("token.php",function(txt){
		  $("#contact").append('<input type="hidden" name="ts" value="'+txt+'" />');
		});

	// validate the contact form
			$("#contact").validate({ 
					rules: {
						Name: {
						   required: true,
						   minlength: 2
						 },
						Email: {
							required: true,
							email: true
						},
						Phone: "required",
						Address: "required",
						City: "required",
						State: "required",
						Zip: "required",
						Pets: "required",
						ApproxSquareFeet: "required",
						Bedrooms: "required",
						Baths: "required",
						Frequency: "required",
						Source: "required"
					},
					//what to say when a field has an error
					messages: {
						Name: {required:"Please enter your name."}
					},
					//what to do when the form is valid
					submitHandler: function(form) {
					
						//if they slid the arrow
						if ($(".TxtStatus").hasClass("dropSuccess"))
							{
								$("#formfeedback").show('slow').html('<img src="img/ajax-loader.gif"/> Sending...');
								
								//send form info
								$.post("mail.php", $("form").serialize(), function(){	
										//tell user that form is sent
									$("span#formfeedback").html("Message Sent!");	
								});				
								return false;
								
							}
						else {
								$("#formfeedback").show('slow').html('Please slide the arrow to the right.');
						}
					} 
					
			});	
		
	//Qaptcha
		$('.QapTcha').QapTcha({
			autoSubmit : false,
			autoRevert : true, 
			disabledSubmit: false,
			PHPfile : 'Qaptcha.jquery.php'
		});
			

  
		
	

			
			
		
			
			
			
			
			
			
			
			
			
		
		
		
		
	// makes the images on the homepage fade content
		$('.fade').hover(
			 function () {
			    $(this).stop(true,false).find(".details").fadeIn(1000);
			  }, 
			  function () {
			    $(this).stop(true,false).find(".details").fadeOut(1000);
			  }

		);


	//to create expandable sections
		/**/
		  //hide the all of the element with class msg_body
		  $(".msg_body").hide();
		  //toggle the componenet with class msg_body
		  $(".msg_head").click(function()
		  {
			//slides down
			$(this).next(".msg_body").slideToggle(600);
			//changes the icon form + to -
			$(this).toggleClass("minusicon");
		  });
		
});






















