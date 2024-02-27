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
    .offer-lists {
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
    }

    .offer-lists .content .details {
      margin: auto;
      justify-content: center;
      display: flex;
    }

    .offer {
      background-color: var(--white);
      padding: 15px;
      margin: 20px 0px;
      border-radius: 5px;
      box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
      width: 800px;
    }

    .offer .offer-details {
      display: flex;
      justify-content: space-between;
    }

    .offer .offer-details p {
      margin: 10px;
    }

    .offer .offer-details .deu-date {
      color: var(--blue);
      font-weight: 700;
    }

    .offer .offer-details .deu-date span {
      color: var(--black);
    }

    .offer .offer-details button {
      padding: 5px 15px;
      font-weight: 700;
      border: 1px solid;
      margin: 2px 10px;
      border-radius: 5px;
      color: var(--white);
      transition: 0.3s ease-in-out;
    }

    .offer .offer-details button:hover {
      box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
    }

    .modal button {
      padding: 5px 15px;
      font-weight: 700;
      border: 1px solid;
      margin: 2px 10px;
      border-radius: 5px;
      color: var(--white);
      transition: 0.3s ease-in-out;
    }

    .modal button:hover {
      box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
    }

    .offer .offer-details .view {
      background-color: var(--black);
    }

    .offer .offer-details .view:hover {
      background-color: transparent;
      border: 1px solid var(--black);
      color: var(--black);
    }

    .claim {
      background-color: var(--blue);
    }

    .offer .offer-details .claim:hover {
      background-color: transparent;
      border: 1px solid var(--blue);
      color: var(--blue);
    }

    /* .modal .modal-content{
    width: 250%;
  } */
    .modal .modal-body table th,
    td {
      width: 170px;
      padding: 10px;
    }

    .modal .modal-body {
      max-width: 100%;
      overflow-x: auto;
    }

    .modal-footer input {
      width: 100px;
      border: none;
      outline: none;
      margin: 0px 5px;
      font-weight: 600;
    }

    @media (min-width: 576px) {
      .modal-dialog {
        max-width: 829px !important;
        margin: 1.75rem auto;
      }
    }

    @media screen and (max-device-width: 480px) and (orientation: portrait) {
      .offer .offer-details {
        display: block;
      }

      .details {
        display: block;
        justify-content: center;
        margin: auto;
      }

      .offer {
        width: 100%;
      }

      .buttons {
        display: flex;
        margin: auto;
        justify-content: space-between;
      }
    }

    /* Products Card ends*/
  </style>
</head>

<body oncontextmenu="return false" class="snippet-body">
  @include('frontEnd/partial/header')

  <section class="offer-lists">
    <div class="container content">

      <div class="details">
        <div>
          <h6>Offers Lists</h6>
          <!-- Offer starts -->
          <div class="offer" id="offersList">
           
          </div>
          <!-- Offer ends-->

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
              
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <p>Gesamt netto <input type="text" id="gesamt_netto" readonly></p><br>
          <p>zzgl. Umsatzsteuer 19 % <input type="text" id="zzgl_Umsatzsteuer" readonly></p><br>
          <p>Gesamtbetrag brutto <input type="text" id="Gesamtbetrag_brutto" readonly></p>
        </div>

        <div class="modal-footer footer-btn">

        </div>
      </div>
    </div>
  </div>

  <script>
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
                    console.log(data.offersList);
                    console.log(data.offersGroupBy);

                    // Select the offer container
                    var offerContainer = $('#offersList');
                    var currentDate = new Date();
                    var year = currentDate.getFullYear();
                    var month = ("0" + (currentDate.getMonth() + 1)).slice(-2);
                    var day = ("0" + currentDate.getDate()).slice(-2);
                    var formattedDate = year + "-" + month + "-" + day;
                    

                    // Loop through each offer in the data object
                    Object.keys(data.offersGroupBy).forEach(function (key) {
                        var offer = data.offersGroupBy[key];

                        var btn ='';
                        var status ='<span style="color:red;">Expired</span>';
                        if (offer.Angebotsdatum > formattedDate) {

                          // for status
                            if (offer.status=='Offen') {
                              var status = 'Offen';
                            }else{
                              var status = 'schließen';
                            }

                          // for buuton
                            if (offer.status=='Offen') {
                              var btn = `<button type="button" class="claim" id="btn_${offer.Angebots_Nr}" onclick="changeOfferStatus('${offer.Angebots_Nr}')">Claim Offer</button>`;
                            }else{
                              var btn = `<button type="button" class="btn btn-danger">Claimed</button>`;
                            }
                        }
                        // Generate HTML for the offer
                        var offerHTML = `
                            <div class="offer">
                                <h5 class="px-2">Offer Number: ${offer.Angebots_Nr}</h5>
                                <span class="msg_err" id="success_msg_${offer.Angebots_Nr}" style="color:#44e1d5; font-size:20px; font-weight: 700;"></span>
                                <div class="offer-details">
                                    <p class="deu-date">Active till: ${offer.Angebotsdatum}</p>
                                   
                                    <p class="deu-date" id="status_${offer.Angebots_Nr}">Status: ${status}</p>
                                    <div style="display: -webkit-box;">
                                      <button type="button" class="btn view" data-bs-toggle="modal" data-bs-target="#offerview"  onclick="getOfferDetails('${offer.Angebots_Nr}')">View Offer</button>
                                      <div>
                                        ${btn}
                                      </div>
                                    </div>
                                </div>
                            </div>`;
                        // Append the generated HTML to the offer container
                        offerContainer.append(offerHTML);
                    });
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
                // Handle error, if needed
            }
        });
    });

    function changeOfferStatus(Angebots_Nr)
    {
      jQuery('.msg_err').html('');
      // alert(Angebots_Nr);

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
        url: '/api/updateOfferStatusApi', // Replace with the actual endpoint URL
        method: 'GET',
        headers: {
          'Authorization': 'Bearer ' + token,
        },
        data: { Angebots_Nr: Angebots_Nr},
        success: function(data) {
          // Handle the successful response
          console.log('Response :', data);
          if (data.status=='1') {
            // change final status of
            jQuery('#success_msg_'+Angebots_Nr).html(data.message).css('color','#44e1d5');;
            jQuery('#status_'+Angebots_Nr).html('Status: schließen');
            jQuery('#btn_'+Angebots_Nr).closest('div').html(`<button type="button" class="btn btn-danger">Claimed</button>`);
            // Delay the page reload for 2 seconds (2000 milliseconds)
            setTimeout(function() {
              jQuery('#success_msg_'+Angebots_Nr).html('');
            }, 2000);
          } else {
            jQuery('#success_msg_'+Angebots_Nr).html(data.message).css('color','red');
          }
        },
        error: function(error) {
          // Handle errors
          jQuery('#success_msg_'+Angebots_Nr).html('Sorry! we are facing some internal errors.').css('color','red');
          console.error('Error:', error);
        }
      });
    }


    // function for find Offer Details by his Angebots_Nr
    function getOfferDetails(Angebots_Nr){
      jQuery('.modal-body tbody').html('');
      jQuery('#gesamt_netto, #zzgl_Umsatzsteuer, #Gesamtbetrag_brutto').val('');
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
        url: '/api/getOfferDetailsApi', // Replace with the actual endpoint URL
        method: 'GET',
        headers: {
          'Authorization': 'Bearer ' + token,
        },
        data: { Angebots_Nr: Angebots_Nr},
        success: function(data) {
          // Handle the successful response
          console.log('Response :', data);
          if (data.status=='1') {
            // change final status of
            $.each(data.offersList, function(index, item) {
              jQuery('.modal-body tbody').append(`
                <tr>
                  <td>${item.Produkt}</td>
                  <td>${item.Menge}</td>
                  <td>${item.Einheit}</td>
                  <td>${item.Einzelpreis}</td>
                  <td>${item.Rabatt}%</td>
                  <td>${item.Gesamtpreis}€</td>
                </tr>
              `);
            });

            // pull calculated data
            jQuery('#gesamt_netto').val(data.offersList[0].gesamt_netto);
            jQuery('#zzgl_Umsatzsteuer').val(data.offersList[0].zzgl_Umsatzsteuer);
            jQuery('#Gesamtbetrag_brutto').val(data.offersList[0].Gesamtbetrag_brutto);

            // status of offer
            var currentDate = new Date();
            var year = currentDate.getFullYear();
            var month = ("0" + (currentDate.getMonth() + 1)).slice(-2);
            var day = ("0" + currentDate.getDate()).slice(-2);
            var formattedDate = year + "-" + month + "-" + day;
            

            if (data.offersList[0].Angebotsdatum > formattedDate) {
              if (data.offersList[0].status=='Offen') {
                var btn = `<button type="button" class="claim" id="btn_${data.offersList[0].Angebots_Nr}" onclick="changeOfferStatus('${data.offersList[0].Angebots_Nr}')"  data-bs-dismiss="modal">Claim Offer</button>`;
              }else{
                var btn = `<button type="button" class="btn btn-danger">Claimed</button>`;
              }
            }else{
              var btn ='<b><span style="color:red;">Expired</span></b>';
            }

            // button
            jQuery('.footer-btn').html(btn);
          } else {
            jQuery('#success_msg_'+Angebots_Nr).html(data.message).css('color','red');
          }
        },
        error: function(error) {
          // Handle errors
          jQuery('#success_msg_'+Angebots_Nr).html('Sorry! we are facing some internal errors.').css('color','red');
          console.error('Error:', error);
        }
      });
    }
</script>


</body>

</html>