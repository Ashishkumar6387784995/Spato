<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Poll Builder Registration</title>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <style>
    :root {
      --blue: #44e1d5;
      --black: #54606c;
      --white: #ffffff;
    }

    .registration {
      background-color: #eaebef;
  margin-top: -1rem;
  padding-top: -10rem !important;
  margin-bottom: -10rem;
  padding-bottom: 10rem;
  clip-path: polygon(0% 3%, 100% 0%, 100% 100%, 0% 100%);
    }

    .pool-hero-section {
      width: 100%;
      height: 350px;
    }

    .registeren {
      background-color: var(--blue);
      padding: .5rem 6rem;
      border: 1px solid var(--blue);
      border-radius: 5px;
      font-weight: 600;
      transition: 1s;
      color: var(--white);
    }

    .registeren:hover {
      border: 1px solid var(--blue);
      background-color: transparent;
      color: var(--blue);
    }

    .form-control:focus {
      border: none !important;
    }




    @media screen and (max-device-width: 480px) and (orientation: portrait) {
      .registration {
        clip-path: polygon(0% 1%, 100% 0%, 100% 100%, 0% 100%);
      }

      /* footer .footer-container {
    width: 96%;
  } */
    }
  </style>
</head>

<body>
  <!-- Header -->
  @include('frontEnd/partial/header')
  <!-- Header -->



  <section class="registration">
    
<div class="pool-hero-section" style="background:url({{ asset('assets/frontEnd/web/images/pool-banner.png')}}); background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
<h1  class="text-center" style="font-weight:900; font-size:55px;   margin: auto;
  width: 50%;
  padding-top:10rem;">Pool builders</h1>
</div>
    <div class="container mt-4">
      <h4 class="mb-2">Registeren</h4>
      <form id="poolRegistrationForm">

        <span id="success_msg" style="color:#44e1d5; font-size:25px"></span>
        <br>

        <div class="row">
          <div class="col-8">
            <div class="mb-3">
              <label for="exampleInputName" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
              <span id="name_err" style="color:red"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <label for="exampleInputAddress" class="form-label">Full Address</label>
            <input type="text" class="form-control" id="address" name="address" aria-describedby="emailHelp">
            <span id="address_err" style="color:red"></span>
          </div>
          <div class="col-4">
            <label for="exampleInputZipcode" class="form-label">Zip code</label>
            <input type="text" class="form-control" id="zipCode" name="zipCode" aria-describedby="emailHelp">
            <span id="zipCode_err" style="color:red"></span>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <label for="exampleInputEmail1" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="PoolBuilderEmail" name="PoolBuilderEmail" aria-describedby="emailHelp">
            <span id="email_err" style="color:red"></span>
          </div>
          <div class="col-4">
            <label for="exampleInputContact" class="form-label">Contact No.</label>
            <input type="text" class="form-control" id="phone" name="phone" aria-describedby="emailHelp">
            <span id="phone_err" style="color:red"></span>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <label for="exampleInputPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="poolBuilderPassword" name="poolBuilderPassword" aria-describedby="emailHelp">
            <span id="poolBuilderPassword_err" style="color:red"></span>
          </div>
          <div class="col-4">
            <label for="exampleInputVat" class="form-label">VAT No.</label>
            <input type="text" class="form-control" id="vatNo" name="vatNo" aria-describedby="emailHelp">
            <span id="vatNo_err" style="color:red"></span>
          </div>

          <div class="col-4" style="display:none">
            <label for="exampleInputVat" class="form-label">User Role</label>
            <input type="text" class="form-control" id="role" name="role" aria-describedby="emailHelp" value="PoolBuilder">
          </div>

        </div>

        <div class="mt-4 mb-4 form-check">
          <input type="checkbox" class="form-check-input" id="condition" name="condition" value="yes">
          <label class="form-check-label" for="exampleCheck1">I aggred to all the <a href="#">Term</a> & <a href="#">Conditions</a></label><br>
          <span id="condition_err" style="color:red"></span>
        </div>

        <button type="button" class="registeren" id="poolRegisterBtn" registerBtn>Registeren</button>
      </form>
    </div>
  </section>
  <!-- Footer -->
  @include('frontEnd/partial/footer')
  <!-- Footer -->


  <script>
    // Function to make the AJAX request
    $(document).ready(function() {

      $('#poolRegisterBtn').click(function() {
        // Clear previous error messages
        $('#name_err').text('');
        $('#address_err').text('');
        $('#zipCode_err').text('');
        $('#email_err').text('');
        $('#phone_err').text('');
        $('#poolBuilderPassword_err').text('');
        $('#vatNo_err').text('');
        $('#condition_err').text('');

        // Get form data
        var formData = {
          name: $('#name').val(),
          address: $('#address').val(),
          zipCode: $('#zipCode').val(),
          email: $('#PoolBuilderEmail').val(),
          phone: $('#phone').val(),
          password: $('#poolBuilderPassword').val(),
          vatNo: $('#vatNo').val(),
          role: $('#role').val(),


        };


        if ($('#condition').is(':checked')) {
          formData.condition = $('#condition').val();
        }




        // Client-side validation
        if (!formData.name) {
          $('#name_err').text('Please enter your Name.');
          return;
        }


        if (!formData.address) {
          $('#address_err').text('Please enter your Address.');
          return;
        }

        if (!formData.zipCode) {
          $('#zipCode_err').text('Please enter Zip Code.');
          return;
        }

        if (!formData.email) {
          $('#email_err').text('Please enter your Email.');
          return;
        }

        if (!formData.phone) {
          $('#phone_err').text('Please enter your Phone.');
          return;
        }

        if (!formData.password) {
          $('#poolBuilderPassword_err').text('Please enter your Password.');
          return;
        }

        if (!formData.vatNo) {
          $('#vatNo_err').text('Please enter vat No.');
          return;
        }


        if (!formData.condition) {
          $('#condition_err').text('Please Check Conditions.');
          return;
        }


        console.log(formData);


        // Perform AJAX request
        $.ajax({
          type: 'POST',
          url: '/api/poolBuilderRegister',
          dataType: 'json', // Explicitly specify data type
          data: formData,
          success: function(response) {
            // Handle success
            console.log(response);

            if (response.success) {
              // Do something on successful registration, e.g., redirect to a new page
              // window.location.href = '/success-page';
              console.log(response.token);
              localStorage.setItem('authToken', response.token);
              $('#success_msg').text("Registration Successfull...");
              $('#poolRegistrationForm')[0].reset();

            }


            if (response.ValidationError) {
              // Display validation errors next to the respective form fields
              console.log('errors');
              displayValidationErrors(response.ValidationError);
            }

            if (response.error) {
              // Display validation errors next to the respective form fields
              console.log('errors');
            
            }
          },

          error: function(error) {
                    // Handle AJAX request errors
                    console.error('Error:', "fails");
                }

        });



        function displayValidationErrors(errors) {
          // Display validation errors next to the respective form fields
          if (errors.name) {
            $('#name_err').text(errors.name[0]);
          }
          if (errors.address) {
            $('#address_err').text(errors.address[0]);
          }
          if (errors.zipCode) {
            $('#zipCode_err').text(errors.zipCode[0]);
          }
          if (errors.email) {
            $('#email_err').text(errors.email[0]);
          }
          if (errors.phone) {
            $('#phone_err').text(errors.phone[0]);
          }
          if (errors.password) {
            $('#poolBuilderPassword_err').text(errors.password[0]);
          }
          if (errors.vatNo) {
            $('#vatNo_err').text(errors.vatNo[0]);
          }
        }

      });

    });
  </script>




</body>

</html>