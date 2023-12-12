<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<nav class="navbar navbar-expand-lg ps-4 pe-4">
  <div class="container-fluid">

    <!-- <a class="navbar-brand" href="#"
          ><img src="assets/images/spato-logo.png" alt="" srcset=""
        /> -->



    <a class="navbar-brand" href="#"><img src="{{ asset('assets/frontEnd/web/images/spato-logo.png') }}" alt="" srcset="" />


    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ms-auto" id="navbarScroll">
      <ul class="navbar-nav ms-auto my-2 my-lg-0" style="--bs-scroll-height: 100px; margin-left:10rem !important;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pools</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Technik</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Attraktionen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Verrohrung</a>
        </li>

        <li class="nav-item border-0">
          <a class="nav-link" href="#">Wasserpflege</a>
        </li>
        <!-- <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Link
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li> -->
        <!-- <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Link</a>
            </li> -->
      </ul>
      <form class="d-flex" role="search">
        <!-- <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button> -->
        <li class="nav-item border-0 list-unstyled list" style="list-style-type:none;">
          <div class="form-check form-switch">
            <input class="form-check-input m-auto" onclick="myFunction()" type="checkbox" role="switch" id="darkModeToggle">
          </div>
        </li>
        <li class="nav-item border-0 list-unstyled ">
          <a class="nav-link" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
        </li>


        @if(auth()->check())

        <li class="nav-item list-unstyled pe-3 ps-5">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </li>
        <li class="nav-item list-unstyled pe-3 ps-3">
          <a class="nav-link" href="#">0,00€</a>
        </li>



        <li class="nav-item dropdown" style="list-style-type:none;">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ asset('assets/frontEnd/web/images/profile.png') }}" alt="" srcset="" style="width: 30px;" />
          </a>
          <ul class="dropdown-menu">

            <li><a class="dropdown-item">Welcome, <span style="color:red;">{{ auth()->user()->name }}</span></a></li>
            <li><i class="fa-solid fa-user"></i>Profile</li>
            <li><i class="fa-solid fa-chart-line"></i>Activity Log</li>
            <li id="logoutButton"><i class="fa-solid fa-right-from-bracket"></i> Log out</li>
            <li>
              @else
            <li class="nav-item border-0 list-unstyled pe-3 ps-3">
              <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-link" href="#"><i class="fa-solid fa-user"></i></a>
            </li>
            @endif
        </li>
        </ul>
        </li>




        <!-- <div class="user-info d-flex">
          @if(auth()->check())
            <span>Welcome, {{ auth()->user()->name }}</span>

            <button id="logoutButton">Logout</button>


       
        @else
        <li class="nav-item border-0 list-unstyled pe-3 ps-3">
            <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-link" href="#"><i class="fa-solid fa-user"></i></a>
          </li>
        @endif
    </div> -->


      </form>
    </div>
  </div>


</nav>


<script>
  // public/js/logout.js

  // Function to handle the logout API call
  function logout() {
    // Retrieve the token from local storage
    var authToken = localStorage.getItem('authToken');
    console.log("hello");
    // Make a POST request to the logout endpoint using jQuery
    $.ajax({
      url: 'http://127.0.0.1:8000/api/logout',
      type: 'POST',
      headers: {
        'Authorization': 'Bearer ' + authToken,
        'Content-Type': 'application/json'
      },
      success: function(response) {
        // Clear the authentication token from local storage
        localStorage.removeItem('authToken');
        // Redirect or perform any other necessary actions after logout
        window.location.href = 'http://127.0.0.1:8000/api/home';
      },
      error: function(error) {
        // Handle errors
        console.error('Error:', error);
      }
    });
  }

  // Attach the logout function to the click event of the logout button

  $('#logoutButton').on('click', function() {
    logout();
  });
</script>