<style>
   .img img {
      width: 200px;
      margin: auto;
      justify-content: center;
      display: block;
      padding-bottom: 2rem;
      border-bottom: 2px solid #44e1d5;
   }
   .img{
      padding-bottom:15px;
      border-bottom: 2px solid #44e1d5;
   }

   .nav-item button {
      padding: 5px 15px;
      /* border:none; */
      border: 1px solid #44e1d5;
      background: transparent;
      color: #44e1d5;
      border-radius: 5px;
      font-weight: 800;
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
      transition: 0.5s;
      width: 100%;
      margin-top: 1rem;
   }

   .nav-item button:hover {
      background-color: #44e1d5;
      color: #404040;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
   }


</style>

<nav class="sidebar sidebar-offcanvas">
   <ul class="nav">
      <span class="img"><a href="{{url('/api/admin_dashboard/'.$role)}}"><img src="{{ asset('assets/frontEnd/web/images/spato-logo-light.png') }}" alt="" srcset=""></a>


      <li class="nav-item" style="background-color:transparent;">
            <a href="/api/home"><button type="submit" name="logout">Visit Site</button></a>
            
         </li>
         </span>


      @if($role=="b2b")

      <li class="nav-item angebote-page">

         <a class="nav-link" href="{{ url('/api/offerListing/'.$role) }}" onclick="markVisited(this)">
            <span class="menu-title">Angebote</span>
         </a>

      </li>



      <li class="nav-item">
         <a class="nav-link" href="{{ url('/api/assignmentListing/'.$role) }}" onclick="markVisited(this)">
            <span class="menu-title">Aufträge</span>
         </a>
      </li>



      <li class="nav-item">
         <a class="nav-link" href="{{ url('/api/billsListing/'.$role) }}" onclick="markVisited(this)">
            <span class="menu-title">Rechnungen</span>
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="{{ url('/api/creditsListing/'.$role) }}" onclick="markVisited(this)">
            <span class="menu-title">Gutschriften</span>
         </a>
      </li>
      <li class="nav-item">

         <a class="nav-link border-bottom" href="{{ url('/api/claimsListing/'.$role) }}" onclick="markVisited(this)">
            <span class="menu-title">Claim Manager</span>
         </a>

      </li>



      <li class="nav-item">
         <a class="nav-link" href="{{ url('/api/creditsListing1/'.$role) }}" onclick="markVisited(this)">
            <span class="menu-title">Kundenadress Buch</span>
         </a>
      </li>
      <li class="nav-item">
         <div class="border-bottom ">
            <a class="nav-link" href="{{ url('/api/claimsListing1/'.$role) }}" onclick="markVisited(this)">
               <span class="menu-title">Einstellungen</span>
            </a>
         </div>
      </li>



      @elseif($role=="supplier")

   
      <li class="nav-item">
               <a class="nav-link" href="{{ url('/api/assignmentListing/'.$role) }}" onclick="markVisited(this)">
                  <span class="menu-title">Aufträge</span>
               </a>
            </li>



      <li class="nav-item">
         <a class="nav-link" href="{{ url('/api/deliveryNotesListing/'.$role) }}" onclick="markVisited(this)">
            <span class="menu-title">Lieferscheine</span>
         </a>
      </li>



      <li class="nav-item">

         <a class="nav-link border-bottom" href="{{ url('/api/claimsListing/'.$role) }}" onclick="markVisited(this)">
            <span class="menu-title">Claim Manager</span>
         </a>

      </li>

      <li class="nav-item">

         <a class="nav-link" href="{{url('/api/productListing/'.$role)}}" onclick="markVisited(this)">

            <span class="menu-title">Produkte</span>
         </a>
      </li>



      <div id="adminSidebar">
         <li class="nav-item">
            <a class="nav-link pt-3" href="{{ url('/api/contactListing/'.$role) }}" onclick="markVisited(this)">
               <span class="menu-title">B2C B2B Connection</span>
            </a>
         </li>
         <li class="nav-item">
            <div class="border-bottom ">
               <a class="nav-link" href="{{ url('/api/SuppliersListing/'.$role) }}" onclick="markVisited(this)">
                  <span class="menu-title">Einstellungen</span>
               </a>
            </div>
         </li>

         @elseif($role=="admin")


         <div id="adminSidebar">

            <li class="nav-item angebote-page">

               <a class="nav-link" href="{{ url('/api/offerListing/'.$role) }}" onclick="markVisited(this)">
                  <span class="menu-title">Angebote</span>
               </a>

            </li>



            <li class="nav-item aufträge-page">
               <a class="nav-link" href="{{ url('/api/assignmentListing/'.$role) }}" onclick="markVisited(this)">
                  <span class="menu-title">Aufträge</span>
               </a>
            </li>

            <li class="nav-item lieferscheine-page">
               <a class="nav-link" href="{{ url('/api/deliveryNotesListing/'.$role) }}" onclick="markVisited(this)">
                  <span class="menu-title">Lieferscheine</span>
               </a>
            </li>

            <li class="nav-item rechnungen-page">
               <a class="nav-link" href="{{ url('/api/billsListing/'.$role) }}" onclick="markVisited(this)">
                  <span class="menu-title">Rechnungen</span>
               </a>
            </li>
            <li class="nav-item gutschriften-page">
               <a class="nav-link" href="{{ url('/api/creditsListing/'.$role) }}" onclick="markVisited(this)">
                  <span class="menu-title">Gutschriften</span>
               </a>
            </li>
            <li class="nav-item claimmanager-page">

               <a class="nav-link border-bottom" href="{{ url('/api/claimsListing/'.$role) }}" onclick="markVisited(this)">
                  <span class="menu-title">Claim Manager</span>
               </a>

            </li>


            <li class="nav-item kontakte-page">
               <a class="nav-link pt-3" href="{{ url('/api/contactListing/'.$role) }}" onclick="markVisited(this)">
                  <span class="menu-title">Kontakte</span>
               </a>
            </li>
            <li class="nav-item lieferanten-page">
               <a class="nav-link border-bottom" href="{{ url('/api/SuppliersListing/'.$role) }}" onclick="markVisited(this)">
                  <span class="menu-title">Lieferanten</span>
               </a>
            </li>

            <li class="nav-item gutscheine.page">
               <a class="nav-link" href="{{url('/api/couponListing/'.$role)}}" onclick="markVisited(this)">
                  <span class="menu-title">Gutscheine</span>
               </a>
            </li>

            <li class="nav-item lagerverwaltung-page">
               <a class="nav-link" href="{{url('/api/wareHouseProductList/'.$role)}}" onclick="markVisited(this)">
                  <span class="menu-title">Lagerverwaltung</span>
               </a>
            </li>

            <li class="nav-item kundenmanagement-page">
               <a class="nav-link pt-3" href="{{url('/api/customerListing/'.$role)}}" onclick="markVisited(this)">
                  <span class="menu-title">Kundenmanagement</span>
               </a>
            </li>

            <li class="nav-item auftragsverwaltung-page">
               <a class="nav-link" href="{{url('/api/orderListing/'.$role)}}" onclick="markVisited(this)">
                  <span class="menu-title">Auftragsverwaltung</span>
               </a>
            </li>

            <li class="nav-item produkte-kategorie-page">
               <a class="nav-link" href="{{url('/api/categoriesListing/'.$role)}}" onclick="markVisited(this)">
                  <span class="menu-title">Produkte Kategorie</span>
               </a>
            </li>

            <li class="nav-item produkte-page">

               <a class="nav-link" href="{{url('/api/productListing/'.$role)}}" onclick="markVisited(this)">

                  <span class="menu-title">Produkte</span>
               </a>
            </li>
            <li class="nav-item statistik-page">
               <a class="nav-link" href="{{url('/api/Statistics/'.$role)}}" onclick="markVisited(this)">
                  <span class="menu-title">Statistik</span>
               </a>
            </li>
            <li class="nav-item bconnection-page">
               <a class="nav-link border-bottom" href="{{url('/api/connection/'.$role)}}" onclick="markVisited(this)">
                  <span class="menu-title">B2C B2B Connection</span>
               </a>
            </li>
            <li class="nav-item newsletter-page">
               <a class="nav-link" href="{{url('/api/newsLetter/'.$role)}}" onclick="markVisited(this)">
                  <span class="menu-title">Newsletter</span>
               </a>
            </li>
            <!-- <li class="nav-item">
     <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false"
      aria-controls="general-pages">
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
    </li> -->
            <li class="nav-item einstellungen-page">
               <a class="nav-link" href="{{url('/api/settings/'.$role)}}" onclick="markVisited(this)">
                  <span class="menu-title">Einstellungen</span>
               </a>
            </li>
            <li class="nav-item zitate-page">
               <a class="nav-link" href="{{url('/api/quatationListing/'.$role)}}" onclick="markVisited(this)">
                  <span class="menu-title">Zitate</span>
               </a>
            </li>
         </div>
         @endif


         <li class="nav-item" style="background-color:transparent;">
            <button type="submit" name="logout" id="logoutButton">Log Out</button>
            
         </li>

   </ul>

</nav>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
   // public/js/logout.js

   // Function to handle the logout API call
   function logout() {
      // Retrieve the token from local storage
      var authToken = localStorage.getItem('authToken');
      console.log("hello");
      var baseUrl = window.location.origin;
      // Make a POST request to the logout endpoint using jQuery
      $.ajax({
         url: baseUrl + '/api/logoutApi',
         type: 'POST',
         headers: {
            'Authorization': 'Bearer ' + authToken,
            'Content-Type': 'application/json'
         },
         success: function(response) {

            if (response.message) {

               // Clear the authentication token from local storage
               localStorage.removeItem('authToken');
               // Redirect or perform any other necessary actions after logout
               window.location.href = '/api/home';
            }

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

<script>
   function setActivePage() {
      var currentPage = window.location.pathname;

      // Remove "active" class from all links
      //  var navLinks = document.getElementsByClassName('nav-link');
      //  for (var i = 0; i < navLinks.length; i++) {
      //   navLinks[i].classList.remove('active');
      //  }

      // Add "active" class to the link corresponding to the current page
      var activeLink = document.querySelector('a[href="' + currentPage + '"]');
      if (activeLink) {
         activeLink.classList.add('active');
      }
   }
   console.log('a[href="' + currentPage + '"]');
   // Call the function when the page loads
   window.onload = setActivePage;
</script>
