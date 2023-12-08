
$(document).ready(function() {
  $('#loginBtn').click(function() {
    // Clear previous error messages
    $('#error-message').text('');
    $('#email-err').text('');
    $('#password_err').text('');

    // Get form data
    var formData = {
      email: $('#email').val(),
      password: $('#password').val()
    };

    // Client-side validation
    if (!formData.email) {
      $('#email-err').text('Please enter your email.');
      return;
    }


    if (!formData.password) {
      $('#password_err').text('Please enter your password.');
      return;
    }

    // Perform AJAX request
    $.ajax({
      type: 'POST',
      url: '/api/login',
      dataType: 'json', // Explicitly specify data type
      data: formData,
      success: handleLoginResponse,
      error: handleAjaxError
    });
  });

  $('#forgetBtn').click(function() {
    // Clear previous error messages
    $('#forget_error_message').text('');

    // Get form data
    var forgetformData = {
      email: $('#forget_email').val()
    };
    console.log(forgetformData);

    // Client-side validation
    if (!forgetformData.email) {
      $('#forget_error_message').text('Please enter your email.');
      return;
    }

    // Perform AJAX request
    $.ajax({
      type: 'POST',
      url: '/api/forgetPassword',
      dataType: 'json', // Explicitly specify data type
      data: forgetformData,
      success: handleForgetPasswordResponse,
      error: handleAjaxError
    });
  });

  // Common function to handle login response
  function handleLoginResponse(response) {
    if (response.success) {
      console.log(response.token);
      localStorage.setItem('authToken', response.token);
      window.location.href = 'http://127.0.0.1:8000/api/user';
    } else {
      $('#error-message').text(response.error);
    }
  }

  // Common function to handle forget password response
  function handleForgetPasswordResponse(response) {
    if (response.success) {
      $('#forget_error_message').text(response.success);
    } else {
      $('#forget_error_message').text(response.error);
    }
  }

  // Common function to handle AJAX errors
  function handleAjaxError(error) {
    $('#forget_error_message').text('An error occurred. Please try again.');
  }
});



$('#signupBtn').click(function() {
  // Clear previous error messages
  $('#signup_firstName_err').text('');
  $('#signup_lastName_err').text('');
  $('#signup_phone_err').text('');
  $('#signup_email_err').text('');
  $('#signup_password_err').text('');
  $('#signup_Confirm_password_err').text('');
  $('#signup_captcha_err').text('');

  // Get form data
  var formData = {
    firstName: $('#signup_firstname').val(),
    lastName: $('#signup_lastname').val(),
    phone: $('#signup_phone').val(),
    email: $('#signup_email').val(),
    password: $('#signup_password').val(),
    password_confirmation: $('#signup_confirmpassword').val(),
    captcha : $('#signup_captcha').val(),

  };

  if ($('#btncheck1').is(':checked')) {
    formData.checkBox1 = $('#btncheck1').val();
  }

  if ($('#btncheck2').is(':checked')) {
    formData.checkBox2 = $('#btncheck2').val();
  }

  if ($('#btncheck3').is(':checked')) {
    formData.checkBox3 = $('#btncheck3').val();
  }


  // Client-side validation
  if (!formData.firstName) {
    $('#signup_firstName_err').text('Please enter your First Name.');
    return;
  }


  if (!formData.lastName) {
    $('#signup_lastName_err').text('Please enter your Last Name.');
    return;
  }

  if (!formData.phone) {
    $('#signup_phone_err').text('Please enter your Phone.');
    return;
  }

  if (!formData.email) {
    $('#signup_email_err').text('Please enter your Email.');
    return;
  }

  if (!formData.password) {
    $('#signup_password_err').text('Please enter your Password.');
    return;
  }

  if (!formData.password_confirmation) {
    $('#signup_Confirm_password_err').text('Please enter Confirm Password.');
    return;
  }

  if (!formData.captcha) {
    $('#signup_captcha_err').text('Please enter Capcha Code.');
    return;
  }

  console.log(formData);


  // Perform AJAX request
  $.ajax({
    type: 'POST',
    url: '/api/register',
    dataType: 'json', // Explicitly specify data type
    data: formData,
    success: function(response) {
      // Handle success
      console.log(response);

      if (response.success) {
        // Do something on successful registration, e.g., redirect to a new page
        // window.location.href = '/success-page';
        $('#common_err').text("Registration Successfull...");
        $('#signupForm')[0].reset();
      }


      if (response.ValidationError) {
        // Display validation errors next to the respective form fields
        console.log('eoor');
        displayValidationErrors(response.ValidationError);
      }
    },

  });

  function displayValidationErrors(errors) {
    // Display validation errors next to the respective form fields
    if (errors.firstName) {
      $('#signup_firstName_err').text(errors.firstName[0]);
    }
    if (errors.lastName) {
      $('#signup_lastName_err').text(errors.lastName[0]);
    }
    if (errors.phone) {
      $('#signup_phone_err').text(errors.phone[0]);
    }
    if (errors.email) {
      $('#signup_email_err').text(errors.email[0]);
    }
    if (errors.password) {
      $('#signup_password_err').text(errors.password[0]);
    }
    if (errors.password_confirmation) {
      $('#signup_Confirm_password_err').text(errors.password_confirmation[0]);
    }
    if (errors.captcha) {
      $('#signup_captcha_err').text(errors.captcha[0]);
    }
  }

});

$(".btn-refresh").click(function() {

  $.ajax({

    type: 'GET',

    url: '/api/refresh_captcha',

    success: function(data) {

      $(".captcha span").html(data.captcha);

    }

  });

});
