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
        <ul class="navbar-nav ms-auto my-2 my-lg-0" style="--bs-scroll-height: 100px">
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
            <li class="nav-item border-0 list-unstyled ">
            <div class="form-check form-switch">
                <input class="form-check-input m-auto"  onclick="myFunction()" type="checkbox" role="switch" id="darkModeToggle">
              </div>
</li>
          <li class="nav-item border-0 list-unstyled ">
            <a class="nav-link" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
          </li>
          <li class="nav-item list-unstyled pe-3 ps-5">
            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
          </li>
          <li class="nav-item list-unstyled pe-3 ps-3">
            <a class="nav-link" href="#">0,00€</a>
          </li>

          <li class="nav-item border-0 list-unstyled pe-3 ps-3">
            <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-link" href="#"><i class="fa-solid fa-user"></i></a>
          </li>
        </form>
      </div>
    </div>
  </nav>