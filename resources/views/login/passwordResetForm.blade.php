<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Reset Your Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="password.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ asset('assets/frontEnd/login/resetPassword.css') }}">
</head>

<body>
    <div id="myModal" class="modal fade">


  

        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <img class="signup-brand-logo" src="{{ asset('assets/frontEnd/web/images/spato-logo.png') }}" alt="" srcset="" />
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <p class="form-header-content text-center">
                    Setze dein Passwort zurück
                </p>
                <div class="modal-body">
                    <form method="post" id="passwordReset">
                        <div class="form-group">
                        <span id="err text-center" style="color:#44e1d5; font-weight:600; margin-bottom:1rem;"></span>
                            <input type="text" id="token" name="token" class="form-control" placeholder="Password" style="display:none" value="{{$token}}" />
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" />
                            <span id="password_err" style="color: red;"></span>
                            <!-- <i class="bi bi-eye-slash" ></i> -->
                            <i class="fa fa-eye-slash" id="togglePassword" style="font-size: 24px"></i>
                        </div>
                        <div class="form-group">
                            <input type="password" id="confirmation_password" name="confirmation_password" class="form-control" placeholder="Confirm Password" />
                            <span id="confirmation_password_err" style="color: red;"></span>
                        </div>
                        <button type="button" class="btn btn-style" id="resetBtn">Reset</button>
                    </form>
                </div>

            </div>
        </div>


        <script>
    $(document).ready(function() {
        $("#myModal").modal("show");

        $('#resetBtn').click(function() {
            // Clear previous error messages
            $('#password_err').text('');
            $('#confirmation_password_err').text('');

            // Get form data
            var formData = {
                token: $('#token').val(),
                password: $('#password').val(),
                confirmation_password: $('#confirmation_password').val(),
            };

            // Client-side validation
            if (!formData.password || formData.password.length < 8) {
                $('#password_err').text('Password must be at least 8 characters.');
                return;
            }

            if (formData.password !== formData.confirmation_password) {
                $('#err').text('Passwords do not match.');
                return;
            }

            console.log(formData);

            // Perform AJAX request
            $.ajax({
                type: 'POST',
                url: '/api/password/reset',
                data: formData,
                success: function(response) {
                    // Handle success
                 
                    $('#err').text(response.success);
                },
                error: function(error) {
                    // Handle error
                    if (error.responseJSON && error.responseJSON.errors) {
                        // Display validation errors
                        if (error.responseJSON.errors.password) {
                            $('#password_err').text(error.responseJSON.errors.password[0]);
                        }
                        if (error.responseJSON.errors.confirmation_password) {
                            $('#confirmation_password_err').text(error.responseJSON.errors.confirmation_password[0]);
                        }
                    } else {
                        alert('An error occurred. Please try again.');
                    }
                }
            });
        });

        // Toggle password visibility
        $('#togglePassword').click(function() {
            var passwordInput = $('#password');
            var type = passwordInput.attr('type') === 'password' ? 'text' : 'password';
            passwordInput.attr('type', type);
        });
    });
</script>

</body>

</html>