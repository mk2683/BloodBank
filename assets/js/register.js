// JavaScript Validation For Registration Page

$('document').ready(function()
{ 		 		
		 // name validation
		  var nameregex = /^[a-zA-Z ]+$/;
		 
		 $.validator.addMethod("validname", function( value, element ) {
		     return this.optional( element ) || nameregex.test( value );
		 }); 
		 
		 // valid email pattern
		 var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		 
		 $.validator.addMethod("validemail", function( value, element ) {
		     return this.optional( element ) || eregex.test( value );
		 });
		 
		 var noregex = /^[0-9]+$/;
		 $.validator.addMethod("validno", function( value, element){
			    return this.optional(element) || noregex.test( value );
			 });
		 
		 $("#register-form").validate({
					
		  rules:
		  {
				name: {
					required: true,
					validname: true,
					minlength: 4
				},
				email: {
					required: true,
					validemail: true
				},
				no: {
					required: true,
					validno: true,
					minlength:10
				},
				pwd: {
					required: true,
					minlength: 8,
					maxlength: 15
				},
				cpwd: {
					required: true,
					equalTo: '#pwd'
				},
		   },
		   messages:
		   {
				name: {
					required: "Please Enter User Name",
					validname: "Name must contain only alphabets and space",
					minlength: "Your Name is Too Short"
					  },
			    email: {
					  required: "Please Enter Email Address",
					  validemail: "Enter Valid Email Address"
					   },
				no: {
					  required: "Please Enter contact no",
					  validno: "Please enter digits only",
					  minlength: "Number should be of 10 digits"
					   },
				pwd:{
					required: "Please Enter Password",
					minlength: "Password at least have 8 characters"
					},
				cpwd:{
					required: "Please Retype your Password",
					equalTo: "Password Did not Match !"
					}
		   },
		   errorPlacement : function(error, element) {
			  $(element).closest('.form-group').find('.help-block').html(error.html());
		   },
		   highlight : function(element) {
			  $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		   },
		   unhighlight: function(element, errorClass, validClass) {
			  $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
			  $(element).closest('.form-group').find('.help-block').html('');
		   },
		   
		   		submitHandler: function(form){
					
					alert('submitted');
					form.submit();
					//var url = $('#register-form').attr('action');
					//location.href=url;
					
				}
				
				/*submitHandler: function() 
							   { 
							   		alert("Submitted!");
									$("#register-form").resetForm(); 
							   }*/
		   
		   }); 
		   
		   
		   /*function submitForm(){
			 
			   
			   /*$('#message').slideDown(200, function(){
				   
				   $('#message').delay(3000).slideUp(100);
				   $("#register-form")[0].reset();
				   $(element).closest('.form-group').find("error").removeClass("has-success");
				    
			   });
			   
			   alert('form submitted...');
			   $("#register-form").resetForm();
			      
		   }*/
});