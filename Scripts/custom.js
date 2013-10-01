// JavaScript Document Alexis De los Santos (Designer) - Retriever family - www.retrieverfamily.com



$(document).ready(function(){

$(".msj_send").animate({opacity: 0},0);
$(".msj_send").animate({opacity: 1},500);

$(".ing_mail").animate({opacity: 0},0);

  $(".email_data").focusin(function () {
        $(".ing_mail").animate({opacity: 1},500);
		
		
	
		$(".email_data, .ing_mail").dequeue();
		
    });

$(".email_data").focusout(function() {
		
		$(".ing_mail").animate({opacity: 0},500);
		
		$(".email_data, .ing_mail").dequeue();
								});



//Validation

$("#bt_send").click(function(){

//Variables for each form field to save us writing .val() over and over 

var email = $("#email_data").val();


//special characters for checking email
var emailcheck = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	
		if( email =='quiero saber cuando este lista la web' || !emailcheck.test(email) ){
						
				
					// Check if email field is empty, if it is then display #email-empty
					if(email == 'quiero saber cuando este lista la web'){
					$("#email-empty").fadeIn(200);
					$("#email-empty").animate({left:210}, 200);
					};
					
					// Check if email field is invalid, if it is then display #email-invalid
					if(!emailcheck.test(email)){
					$("#email-invalid").fadeIn(200);
					$("#email-invalid").animate({left:210}, 200);
					}
					
				
					//if any of the above are true dont allow form submission
					return false;
		}else{
		
					//If all the field are completed its ok to send the form
					return true;	
		};
		
});//submit click function end


									
									
									//remove error notifications 
	
											
											//email-empty
												$("#email_data").focus(function(){
															$("#email-empty").fadeOut(200);
												});
	
											//email-invalid
												$("#email_data").focus(function(){
															$("#email-invalid").fadeOut(200);
												});
	
	
	



   }); //fin document ready
	


