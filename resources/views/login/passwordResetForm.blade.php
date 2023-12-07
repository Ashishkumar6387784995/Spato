<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Reset Your Password</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
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
            <img
              class="signup-brand-logo"
              src="{{ asset('assets/frontEnd/web/images/spato-logo.png') }}"
              alt=""
              srcset=""
            />
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>
          <p class="form-header-content text-center">
            Setze dein Passwort zurück
          </p>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <input
                  type="password"
                  class="form-control"
                  placeholder="Password"
                />
                <!-- <i class="bi bi-eye-slash" ></i> -->
                <i
                  class="fa fa-eye-slash"
                  id="togglePassword"
                  style="font-size: 24px"
                ></i>
              </div>
              <div class="form-group">
                <input
                  type="password"
                  class="form-control"
                  placeholder="Confirm Password"
                />
              </div>
              <button type="submit" class="btn btn-style">Reset</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script>
     $(document).ready(function () {
  $("#myModal").modal("show");
});


    </script>
  </body>
</html>
