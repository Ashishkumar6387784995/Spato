<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Impressum</title>
  <link rel="stylesheet" href="{{ asset('style/web/home.css') }}">
  <style>
    .agb-container {
      background-color: #eaebef;
      /* margin-top: -10rem; */
      padding-top: 5rem;
      margin-bottom: -10rem;
      padding-bottom: 10rem;

      clip-path: polygon(0% 3%, 100% 0%, 100% 100%, 0% 100%);
    }

    .agb-container nav ol li a {
      color: var(--black) !important;
      text-decoration: none !important;
      font-weight: 600;
    }

    .agb-container nav ol li:nth-child(2) {
      color: var(--blue) !important;
      font-weight: 600;
    }


    .agb-container .content h6 {
      font-weight: 600;
      margin-top: 2rem;
      margin-bottom: 2rem;
      font-size: 22px;
    }

    .agb-container .content .details {
      margin: 2rem 0rem;
      text-align: justify;
    }

    @media screen and (max-device-width: 480px) and (orientation: portrait) {
      .agb-container {
        clip-path: polygon(0% 1%, 100% 0%, 100% 100%, 0% 100%);
      }

      /* footer .footer-container {
    width: 96%;
  } */
    }
  </style>
</head>

<body oncontextmenu="return false" class="snippet-body">

  @include('frontEnd/partial/header');
  <section class="agb-container">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a class="home" href="{{url('api/home')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Impressum</li>
        </ol>
      </nav>

      <div class="showSaveBtn"></div>

      <div id="editor">


        <section id="editable_content"><h2>Impressum</h2><p>Angaben gemäß § 5 TMG</p><p>SPATO GmbH&nbsp;<br>Schellberger Weg 34&nbsp;<br>42659 Solingen&nbsp;<br>&nbsp;</p><p>Vertreten durch</p><p>Oliver Laug</p><p>Kontakt</p><p>E-Mail: info@spato.de</p><p>Registernummer</p><p>HRB 32131</p><p>Registergericht</p><p>Handelsregister Wuppertal</p><p>Umsatzsteuer-Identifikationsnummer gemäß §27 a Umsatzsteuergesetz</p><p>DE346441844</p><p>EU-Streitschlichtung</p><p>Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit: https://ec.europa.eu/consumers/odr. Unsere E-Mail-Adresse finden Sie oben im Impressum.</p><p>Verbraucher streit beilegung / Universal schlichtungs stelle</p><p>Wir sind nicht bereit oder verpflichtet, an Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen.</p><p>Haftung für Inhalte</p><p>Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen. Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.</p><p>Haftung für Links</p><p>Unser Angebot enthält Links zu externen Websites Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar. Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.</p><p>Urheberrecht</p><p>Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet. Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.</p></section>
          </div>
      </div>
  </section>


  @include('frontEnd/partial/footer');
  <script>
    $(document).ready(function() {
      // Get the token from localStorage
      var token = localStorage.getItem('authToken');
      console.log(token);

      // Check if the token exists
      if (token) {
        // Make a GET request using AJAX
        $.ajax({
          url: '/api/CmsUserRole', // Replace with the actual endpoint URL
          method: 'GET',
          headers: {
            'Authorization': 'Bearer ' + token,
          },
          success: function(data) {
            // Handle the successful response
            if (data.success) {
              console.log(data.success);
              jQuery('.showSaveBtn').prepend(`<button id="save-btn" class="btn btn-success">Save</button>`);
              jQuery('#editor').addClass('editor');

              // Initialize CKEditor after the DOM content has loaded
              $editor = document.querySelector('#editor')
              $save = document.querySelector('#save-btn')
              $text_center = document.querySelector('#text-center')

              ClassicEditor
                .create(document.querySelector('.editor'), {
                  fullPage: true // Enable fullPage mode
                })
                .then(editor => {
                  console.log('Editor loaded successfully');

                  // Load initial content on page load
                  loadContent();

                  function loadContent() {
                    // Fetch the content from the server
                    fetch('/api/get_content')
                      .then(response => response.json())
                      .then(data => {
                        // Set the content of the editor with the fetched content
                        updateContent(data.content);
                      })
                      .catch(error => console.error('Error:', error));
                  }

                  function saveContent(content) {
                    // Send the content to the server using AJAX
                    fetch('/api/Impressum_save_content', {
                        method: 'POST',
                        headers: {
                          'Content-Type': 'application/json',
                          'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                          content: content
                        })
                      })
                      .then(response => {
                        if (response.ok) {
                          alert('Content updated successfully');
                          console.log('<b>Content updated successfully</b>');
                          // Handle success, if needed
                        } else {
                          console.error('Failed to update content');
                          // Handle error, if needed
                        }
                      })
                      .catch(error => {
                        console.error('Error:', error);
                        // Handle error, if needed
                      });
                  }

                  // Save button click event
                  document.getElementById('save-btn').addEventListener('click', () => {
                    // Get the editor's content
                    const content = editor.getData();

                    // Send the content to the server for saving using AJAX
                    saveContent(content);
                  });

                  // Update content with new data
                  function updateContent(newContent) {
                    editor.setData(newContent);
                  }
                })
                .catch(error => {
                  console.error(error);
                });
            }
          },
          error: function(xhr, status, error) {
            console.error('Error:', error);
            // Handle error, if needed
          }
        });
      }
    });
  </script>

  <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
</body>

</html>