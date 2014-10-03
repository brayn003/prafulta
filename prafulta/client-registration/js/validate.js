$(document).ready(function() {
	$('#dob').datepicker({
    		format: 'dd-mm-yyyy',
    		startDate: '-100y'
	});
    $('#client-register-form').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            clientname: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The client name is required and cannot be empty'
                    },
                    stringLength: {
                        min: 5,
                        max: 30,
                        message: 'The client name must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z ]+$/,
                        message: 'The client name can only consist of alphabet'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email is required'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            mob: {
                validators: {
                    notEmpty: {
                        message: 'The mobile number is required'
                    },
                    stringLength: {
                        min: 10,
                        max: 10,
                        message: 'The mobile number must be 10 digits long'
                    },
                    regexp: {
                    	regexp: /^[0-9]+$/,
                        message: 'The input is not a valid mobile number'
                    }
                }
            },
			dob: {
                validators: {
                    notEmpty: {
                        message: 'Birth date is required and cannot be empty'
                    },
                    date: {
                        format: 'DD-MM-YYYY'
                    }
                }
            },

            sex:{
            	validators: {
	            	notEmpty: {
	                        message: 'The sex of client is required'
	                }
	            }
            }

        }
    })
	
	.on('success.field.bv', function(e, data) {
            // $(e.target)  --> The field element
            // data.bv      --> The BootstrapValidator instance
            // data.field   --> The field name
            // data.element --> The field element

            var $parent = data.element.parents('.form-group');

            // Remove the has-success class
            $parent.removeClass('has-success');

            // Hide the success icon
            $parent.find('.form-control-feedback[data-bv-icon-for="' + data.field + '"]').hide();
    });
    $("#dob").change(function(){
  		 $('#client-register-form').bootstrapValidator('revalidateField','dob');
	});
});