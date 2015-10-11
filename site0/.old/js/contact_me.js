/*
  Jquery Validation using jqBootstrapValidation
   example is taken from jqBootstrapValidation docs 
  */
$(function() {

 $("input,textarea").jqBootstrapValidation(
    {
     preventSubmit: true,
     submitError: function($form, event, errors) {
      // something to have when submit produces an error ?
      // Not decided if I need it yet
     },
     submitSuccess: function($form, event) {
      event.preventDefault(); // prevent default submit behaviour
       // get values from FORM
       var name = $("input#name").val();  
       var email = $("input#email").val(); 
       var phone = $("input#phone").val(); 
       var curso = $("input#curso").val(); 
       var instagram = $("input#instagram").val();
        var firstName = name; // For Success/Failure Message
           // Check for white space in name for Success/Fail message
        if (firstName.indexOf(' ') >= 0) {
	   firstName = name.split(' ').slice(0, -1).join(' ');
         }        
	 $.ajax({
                url: "http://hedtrot.com/ctfm/egr2.php",
            	type: "POST",
            	data: {name: name, email: email, phone: phone, curso: curso, instagram: instagram},
            	cache: false,
            	success: function() {  
            	// Success message
            	   $('#success').html("<div class='alert alert-success'>");
            	   $('#success > .alert-success').html("<span class='scc' data-dismiss='alert' aria-hidden='true'>&times;")
            		.append( "</span>");
            	  $('#success > .alert-success')
            		.append("<strong class='scc2'>Message Sent. </strong>");
 		  $('#success > .alert-success')
 			.append('</div>');
 						    
 		  //clear all fields
 		  $('#contactForm').trigger("reset");
 	      },
 	   error: function() {		
 		// Fail message
 		 $('#success').html("<div class='alert alert-danger'>");
            	$('#success > .alert-danger').html("<span class='scc' data-dismiss='alert' aria-hidden='true'>&times;")
            	 .append( "</span>");
            	$('#success > .alert-danger').append("<strong class='sc'>Desculpe, "+firstName+", o formulario está funcionando,</strong> Você pode nos enviar um email <a href='mailto:universeit.usp@gmail.com?Subject="+Formulario Site+": '>universeit.usp@gmail.com</a> ou mandar uma mensagem na página do facebook <a href='https://facebook.com/pages/Universe-It'>facebook page</a>?");
 	        $('#success > .alert-danger').append('</div>');
 		//clear all fields
 		$('#contactForm').trigger("reset");
 	    },
           })
         },
         filter: function() {
                   return $(this).is(":visible");
         },
       });

      $("a[data-toggle=\"tab\"]").click(function(e) {
                    e.preventDefault();
                    $(this).tab("show");
        });
  });
 

/*When clicking on Full hide fail/success boxes */ 
$('#name').focus(function() {
     $('#success').html('');
  });
