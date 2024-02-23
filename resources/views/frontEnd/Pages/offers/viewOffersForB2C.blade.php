<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Offers Listing</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
  <link rel="stylesheet" href="{{ asset('style/web/home.css') }}">

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
  <script src="https://kit.fontawesome.com/e1528f4468.js" crossorigin="anonymous"></script>

  <style>
    /* Imports */
    .offer-lists{
      background-color: #eaebef;
      /* margin-top: -10rem;*/
      padding-top: 5rem;
      margin-bottom: -10rem;
      padding-bottom: 10rem;

      clip-path: polygon(0% 5%, 100% 0%, 100% 100%, 0% 100%);
    }

    

  .offer-lists .content h6 {
   font-weight: 600;
   margin-top: 2rem;
   margin-bottom: 2rem;
   font-size: 22px;
   text-align:center;
  }

  .offer-lists .content .details {
   margin: 2rem 0rem;
   text-align: justify;
  } 


  .offer{
    background-color:var(--white);
    padding:15px;
    border-radius:5px;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
  }
  .offer .offer-details{
    display:flex;
  }
  .offer .offer-details p{
    margin:10px;
  }

  .offer .offer-details .deu-date{
    color:var(--blue);
    font-weight:700;
  }
  .offer .offer-details .deu-date span{
    color:var(--black);
  }

  .offer .offer-details button{
    padding:5px 15px;
    font-weight:700;
    border:1px solid;
    margin:2px 10px;
    border-radius:5px;
    color:var(--white);
    transition:0.3s ease-in-out;
  }

  .offer .offer-details button:hover{
    box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
  }

  .modal button{
    padding:5px 15px;
    font-weight:700;
    border:1px solid;
    margin:2px 10px;
    border-radius:5px;
    color:var(--white);
    transition:0.3s ease-in-out;
  }
  .modal button:hover{
    box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
  }

  .offer .offer-details .view{
    background-color:var(--black);
  }

  .offer .offer-details .view:hover{
    background-color:transparent;
    border:1px solid var(--black);
    color:var(--black);
  }

  .claim{
    background-color:var(--blue);
  }

  .offer .offer-details .claim:hover{
    background-color:transparent;
    border:1px solid var(--blue);
    color:var(--blue);
  }
  /* .modal .modal-content{
    width: 250%;
  } */
  .modal .modal-body table th, td{
    width:170px;
    padding:10px;
  }

  .modal .modal-body{
    max-width: 100%;
    overflow-x: auto;
  }

  .modal-footer input{
    width:100px;
    border:none;
    outline:none;
    margin:0px 5px;
    font-weight:600;
  }

  @media (min-width: 576px){
.modal-dialog {
    max-width: 829px !important;
    margin: 1.75rem auto;
}
  }

  @media screen and (max-device-width: 480px) and (orientation: portrait) {
    .offer .offer-details{
    display:block;
  }
    }

  </style>
</head>

<body oncontextmenu="return false" class="snippet-body">
  @include('frontEnd/partial/header')

  <section class="offer-lists">
    <div class="container content">
              <h6 class="text-center">Offers Lists</h6>
      
        <div class="details">
          <div class="offer">
            <h5 class="px-2">This is the offer heading for users</h5>
            <div class="offer-details">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, amet?</p>
              <p class="deu-date">Active till :- <span>25/02/2024</span></p>
              <button type="button" class="btn view" data-bs-toggle="modal" data-bs-target="#offerview">View Offer</button>
              <button type="button" class="claim">Claim Offer</button>
            </div>
          </div>
        </div>
      </div>
  </section>
  @include('frontEnd/partial/footer')

<!-- Modal -->
<div class="modal fade" id="offerview" tabindex="-1" aria-labelledby="offerviewLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="offerviewLabel">Your offers are Below</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table>
          <thead>
          <th>Product Name</th>
          <th>Menge</th>
          <th>Einheit</th>
          <th>Einzelpreis</th>
          <th>Rabatt</th>
          <th>Gesamtpreis</th>
          </thead>
          <tbody>
            <tr>
              <td>Badu Alpha 6</td>
              <td>12</td>
              <td>344</td>
              <td>12</td>
              <td>10%</td>
              <td>1052€</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
<p>Gesamt netto <input type="text" name="total" id="" value="1258"></p><br>
<p>zzgl. Umsatzsteuer 19 % <input type="text" name="total" id="" value="1258"></p><br>
<p>Gesamtbetrag brutto <input type="text" name="total" id="" value="1258"></p>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <button type="button" class="claim">Claim offers</button>
      </div>
    </div>
  </div>
</div>


<script>
    // Execute the code when the document is ready
    $(document).ready(function() {
      // Get the token from localStorage
      var token = localStorage.getItem('authToken');
      console.log(token);

      // Check if the token exists
      if (!token) {
        console.error('Token not found in localStorage');
        window.location.href = '/api/home';
        // return;
      }

      // Make a GET request using AJAX
      $.ajax({
        url: '/api/offerListingApi', // Replace with the actual endpoint URL
        method: 'GET',
        headers: {
          'Authorization': 'Bearer ' + token,
        },
        success: function(data) {
          // Handle the successful response
          if (data.offersList) {
            console.log('Data received:', data.offersList);


            // Function to populate the table with data
            function populateTable(dataList) {
              var tableBody = $('#dataTable');

              // Clear existing table rows
              tableBody.find("tr:gt(0)").remove();

              // Iterate through the data and add rows to the table
              $.each(dataList, function(index, item) {
                var row = $('<tr>');
                row.append(`<td id="status_${item.Angebots_Nr}">${item.status}</td>`);
                row.append(`<td>${item.Angebots_Nr}</td>`);
                row.append(`<td>${item.Ihre_Kundennummer}</td>`);
                row.append(`<td>${item.Angebotsdatum}</td>`);
                // row.append(`<td>${item.Kategorie}</td>`); // Uncomment if needed
                row.append(`<td>${item.gesamt_netto}</td>`);

                if (data.user.role === 'Admin') {
                  row.append(`<td><a href="/api/editOffer/admin/${item.Angebots_Nr}" class="edit" id="editProductBtn">bearbeiten</a></td>`);
                } else if (data.user.role === 'b2b') {
                  if (item.status=='Offen') {
                    row.append(`<td><button type="button" class="edit  changeOfferStatus" offer-code="${item.Angebots_Nr}">bestätigen</button></td>`);
                  }
                }

                // Add more columns as needed

                // Append the row to the table body
                tableBody.append(row);
              });

            }

            // Call the function to populate the table with the initial data
            populateTable(data.offersList);
          }

          if (data.error) {
            window.location.href = '/api/home';
          }
        },



        error: function(xhr, status, error) {
          // Handle specific errors
          if (xhr.status === 401) {
            console.error('Unauthorized: Please check your authentication token.');
          } else {
            console.error('Error:', error);
          }
        }
      });
    });
  </script>

</body>

</html>