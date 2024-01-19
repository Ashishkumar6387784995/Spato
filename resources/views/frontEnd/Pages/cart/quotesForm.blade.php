<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Request a quote</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
  <link rel="stylesheet" href="{{ asset('style/web/home.css') }}">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
  <style>
    :root {
      --blue: #44e1d5;
      --black: #54606c;
      --white: #ffffff;
    }

    .quote {
      background-color: #eaebef;
      /* margin-top: -10rem; */
      padding-top: 5rem;
      margin-bottom: -10rem;
      padding-bottom: 10rem;

      clip-path: polygon(0% 3%, 100% 0%, 100% 100%, 0% 100%);
    }

    .quote nav .home {
      color: var(--black) !important;
      text-decoration: none !important;
    }

    .quote .content h6 {
      font-weight: 600;
      font-size: 18px;
      color: black;
    }

    .quote .content .details {
      text-align: justify;
      font-size: 14px;
    }

    .contact-details {
      background-color: #ffffff;
      border-radius: 5px;
    }

    .quote .btn {
      background-color: #44e1d5;
      border: 1px solid #44e1d5;
      width: 50%;
      font-weight: 600;
      color: var(--white);
    }

    .quote .btn:hover {
      border: 1px solid #44e1d5;
      background-color: var(--white);
      color: var(--blue);
    }



    @media screen and (max-device-width: 480px) and (orientation: portrait) {
      .quote {
        clip-path: polygon(0% 1%, 100% 0%, 100% 100%, 0% 100%);
      }

      .quote .content {
        display: block;
      }

      .quote .address {
        width: 100% !important;
        margin: 2rem 0rem;
      }

      .quote .form {
        width: 100% !important;
      }


      /* footer .footer-container {
    width: 96%;
  } */
    }
  </style>
</head>

<body oncontextmenu="return false" class="snippet-body">
  <!-- Header -->
  @include('frontEnd/partial/header')
  <!-- Header -->
  <section class="quote">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a class="home" href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">
            Request a quote
          </li>
        </ol>
      </nav>




      <h1 class="text-start" style="font-size: 25px; font-weight: 600; color: black;">Request a quote</h1>
      <p class="details mb-5">
        We love hearing from you, our Shop customers.
        <br />
        Please Request a quote and we will make sure to get back to you as soon as we possibly can.
      </p>
      <form method="post" id="quoteForm">
        <div class="row content">
          <div class="col form">
            <div class="row g-3 mb-5">
            <div class="col" style="display:none;">
                <label for="exampleFormControlInput1" class="form-label">product Id: <span style="color:red; ">*</span></label>
                <input type="text" class="form-control" name="product_id" id="product_id" placeholder="First name" aria-label="First name">
              </div>
              <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Firmenname: <span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="firmName" id="firmName" placeholder="First name" aria-label="First name">
              </div>
              <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Kontaktname <span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="contactName" id="contactName" placeholder="Kontaktname" aria-label="Kontaktname">
              </div>
            </div>
            <div class="row g-3 mb-5">
              <div class="col">
                <label for="exampleFormControlInput1" class="form-label">E-Mail <span style="color:red;">*</span></label>
                <input type="email" class="form-control" name="new_email" id="new_email" placeholder="Your Email" aria-label="Your Email">
              </div>
              <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Telefonnummer <span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Telefonnummer" aria-label="Telefonnummer">
              </div>
            </div>

            <div class="row g-3 mb-5">
              <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Spare Part Name <span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="sparePartName" id="sparePartName" placeholder="Spare Part Name " aria-label="Your Email">
              </div>
              <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Quote Needed By <span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="QuoteNeededBy" id="QuoteNeededBy" placeholder="Quote Needed By " aria-label="Your Phone">
              </div>
            </div>
            <!-- <div class="row g-3 mb-5">
              <p>Project Budget Status</p>
              <div class="col">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="budget">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Freigegeben
                  </label>
                </div>
              </div>

              <div class="col">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="budget">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Appropal Pending
                  </label>
                </div>
              </div>
              <div class="col">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="budget">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Geöffnet
                  </label>
                </div>
              </div>

              <div class="col">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="budget">
                  <label class="form-check-label" for="flexRadioDefault1">
                    No Appropal
                  </label>
                </div>
              </div>
              <div class="col"></div>
              <div class="col"></div>
            </div> -->

            <div class="row g-3">
              <div class="col">
                <label for="exampleFormControlTextarea1" class="form-label">Brief Overview <span style="color:red;">*</span></label>
                <textarea class="form-control" name="Overview" id="Overview" rows="8"></textarea>
              </div>
            </div>
            <div class="row g-3 mt-5">
              <div class="col">
                <label for="exampleFormControlTextarea1" class="form-label">Upload Document:<span style="color:red;">*</span></label><br />
                <input type="file" name="Document" id="Document" accept="'jpg', 'png', 'jpeg'">
                <p>You can upload files with these file extensions only (jpg,jpeg,png,gif)</p>
              </div>
            </div>

            <div class="row g-3">
              <div class="col">
                <button type="submit  " class="btn mt-5">Absenden</button>
              </div>
              <div class="col"></div>
            </div>
          </div>
        </div>
      </form>
  </section>
  <!-- Footer -->
  @include('frontEnd/partial/footer')
  <!-- Footer -->



  <script>
$(document).ready(function(){
    $("#quoteForm").submit(function(e){
        e.preventDefault();

        $.ajax({
            url: '/api/submitQuotes',
            type: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function(response){
                console.log(response);
                // Handle success, for example, show a success message
                alert('Quote submitted successfully!');
            },
            // error: function(xhr, status, error){
            //     // Handle error, for example, show an error message
            //     console.error(xhr.responseText);
            //     alert('Error submitting quote. Please try again.');
            // }
        });
    });
});
</script>
</body>

</html>