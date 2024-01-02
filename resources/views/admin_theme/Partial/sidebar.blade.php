<style>
  .img img {
    width: 200px;
    margin: auto;
    justify-content: center;
    display: block;
    padding-bottom: 2rem;
    border-bottom: 2px solid #44e1d5;
  }
</style>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <!-- <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
         <div class="nav-profile-image">
          <img src=" {{ asset('theme/assets/images/faces/face1.jpg') }} "  alt="profile">
          <span class="login-status online"></span>
          change to offline or busy as needed
        </div> 
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2">{{Session::get('empCode')}}</span>
          <span class="text-secondary text-small">{{ Session::get('role') }}</span>
        </div>
      </a>
    </li> -->



    <span class="img"><a href="{{url('/api/admin_dashboard')}}"><img src="{{ asset('assets/frontEnd/web/images/spato-logo.png') }}" alt="" srcset=""></a></span>


    <li class="nav-item">

      <a class="nav-link" href="{{ url('/api/offerListing') }}">
        <span class="menu-title">Angebote</span>
      </a>

    </li>



    <li class="nav-item">
      <a class="nav-link" href="{{ url('/api/assignmentListing') }}">
        <span class="menu-title">Aufträge</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/api/deliveryNotesListing') }}">
        <span class="menu-title">Lieferscheine</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/api/billsListing') }}">
        <span class="menu-title">Rechnungen</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/api/creditsListing') }}">
        <span class="menu-title">Gutschriften</span>
      </a>
    </li>
    <li class="nav-item">
      <div class="border-bottom ">
        <a class="nav-link" href="{{ url('/api/claimsListing') }}">
          <span class="menu-title">Claim Manager</span>
        </a>
      </div>
    </li>

  
    <!-- @if(auth()->user()->role === 'B2B') -->
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/api/creditsListing1') }}">
        <span class="menu-title">Kundenadress Buch</span>
      </a>
    </li>
    <li class="nav-item">
      <div class="border-bottom ">
        <a class="nav-link" href="{{ url('/api/claimsListing1') }}">
          <span class="menu-title">Einstellungen</span>
        </a>
      </div>
    </li>

    <!-- @else -->

    <li class="nav-item">
      <a class="nav-link pt-3" href="{{ url('/api/contactListing') }}">
        <span class="menu-title">Kontakte</span>
      </a>
    </li>
    <li class="nav-item">
      <div class="border-bottom ">
        <a class="nav-link" href="{{ url('/api/SuppliersListing') }}">
          <span class="menu-title">Lieferanten</span>
        </a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link pt-3" href="{{url('/api/productListing')}}">
        <span class="menu-title">Produkte</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('/api/Statistics')}}">
        <span class="menu-title">Statistik</span>
      </a>
    </li>
    <li class="nav-item">
      <div class="border-bottom">
        <a class="nav-link" href="{{url('/api/connection')}}">
          <span class="menu-title">B2C B2B Connection</span>
        </a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('/api/newsLetter')}}">
        <span class="menu-title">Newsletter</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
        <span class="menu-title">Wallet</span>
      </a>
      <div class="collapse" id="general-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('/api/settings')}}">
        <span class="menu-title">Einstellungen</span>
      </a>
    </li>


    <!-- @endif -->
  </ul>
</nav>