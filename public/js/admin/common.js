$(document).one('click', '.showButton', function() {
    var baseUrl = window.location.origin;
    var  role_filter = jQuery(this).attr('role-filter')
    console.log(role_filter);
    $.ajax({
        type: 'get',
        url: baseUrl + '/api/B2CUserDetails/' + role_filter,
        dataType: 'json',
        success: function(response) {
        // Handle success response
            if (response.success) {
                var ddl = $("#Ihre_Kundennummer");
                ddl.empty(); // Consider whether you want to keep this line or not
                ddl.append('<option selected style="display:none"></option>');
                var dataArray = response.success;

                // Dynamically set the loop limit based on the array length
                for (var i = 0; i < dataArray.length; i++) {
                    ddl.append($("<option></option>").val(dataArray[i].id).text(dataArray[i].id));
                }

                // Attach a change event handler to the dropdown
                jQuery(document).on('change', '#Ihre_Kundennummer', function() {
                  $("#companyName").val('');
                  var selectedUser = $(this).val();
                  // Log the value of the selected item when it changes
                  console.log("Selected item value:", selectedUser);

                  $.ajax({
                    type: 'get',
                    url: baseUrl + '/api/selectedB2CUserDetails/' + selectedUser,
                    dataType: 'json',
                    success: function(response) {
                      // Handle success response
                      if (response.success) {

                        console.log(response.success[0].email);
                        $("#customer_email").val(response.success[0].email);
                        $("#customer_Email").text(response.success[0].email);
                        $("#customer_Contact").text(response.success[0].mobile);
                        $("#customer_Name").text(response.success[0].name);
                        $("#Ihre_Ust_ID").val(response.success[0].vatNo);
                        // Dynamically set the loop limit based on the array length
                      }
                    },
                  });
                });
            }
        },
    });
});




// fetch B2C User Details by company name
function guessCompanyNameFunction(role_filter) {
  var baseUrl = window.location.origin;
  var companyName = jQuery('#companyName').val();
  console.log(role_filter);
  if (companyName=='') {
    $('#guessCompanyName ul').empty();
    return false;
  }
  
  $(".customer_dtl").text('');
  $("#Ihre_Kundennummer").html('');
  $("#customer_email, #Ihre_Ust_ID").val('');
  $.ajax({
    type: 'get',
    url: baseUrl + '/api/selectedB2CUserDetailsByCompanyName/' + companyName+ '/'+ role_filter,
    dataType: 'json',
    success: function(response) {
      // Handle success response
      if (response.success) {

        console.log(response.success);
        console.log(response.guessCompanyName);

        
        var nameList = $('#guessCompanyName ul');
        nameList.empty();
        response.guessCompanyName.forEach(function(item, index) {
          // Create a new product element for each cart item
          nameList.append('<li class="liCompanyName slide-in-blurred-top">'+ item.company_name +'</li>');
        });

        $("#customer_email").val(response.success[0].email);
        $("#customer_Email").text(response.success[0].email);
        $("#customer_Contact").text(response.success[0].mobile);
        $("#customer_Name").text(response.success[0].name);
        $("#Ihre_Kundennummer").html('').html('<option value="'+ response.success[0].id +'" selected>'+ response.success[0].id +'</option>');
        $("#Ihre_Ust_ID").val(response.success[0].vatNo);
        nameList.empty();
        // Dynamically set the loop limit based on the array length
      }
    },
  });
};




// function for set li test in companyName input feild
  $(document).on('click', '.liCompanyName', function() {
    var clickedCompanyName = jQuery(this).text();
    // alert(clickedCompanyName);
    jQuery('#companyName').val(clickedCompanyName).trigger("keyup");
    jQuery('#guessCompanyName ul').empty();
  });


// fetch B2C User Details by User name
function guessUserNameFunction(role_filter) {
  var baseUrl = window.location.origin;
  var name = jQuery('#companyName').val();
  console.log(role_filter);
  if (name=='') {
    $('#guessCompanyName ul').empty();
    return false;
  }
  
  $(".customer_dtl").text('');
  $("#Ihre_Kundennummer").html('');
  $("#customer_email, #Ihre_Ust_ID").val('');
  $.ajax({
    type: 'get',
    url: baseUrl + '/api/selectedB2CUserDetailsByUserName/' + name,
    dataType: 'json',
    success: function(response) {
      // Handle success response
      if (response.success) {

        console.log(response.success);
        console.log(response.usersName);

        
        var nameList = $('#guessCompanyName ul');
        nameList.empty();
        response.usersName.forEach(function(item, index) {
          // Create a new product element for each cart item
          nameList.append('<li class="liCompanyName slide-in-blurred-top">'+ item.name +'</li>');
        });

        $("#customer_email").val(response.success[0].email);
        $("#customer_Email").text(response.success[0].email);
        $("#customer_Contact").text(response.success[0].mobile);
        $("#customer_Name").text(response.success[0].name);
        $("#Ihre_Kundennummer").html('').html('<option value="'+ response.success[0].id +'" selected>'+ response.success[0].id +'</option>');
        $("#Ihre_Ust_ID").val(response.success[0].vatNo);
        nameList.empty();
        // Dynamically set the loop limit based on the array length
      }
    },
  });
};


// function for get Product Details Drop Down
function getProductDetailsDRP(id){
  var baseUrl = window.location.origin;
  var Produkt = jQuery('#Produkt_'+id).val();
  // console.log(Produkt);
  var productList = $('.guessProductDtl ul');

  productList.empty();  // make empty listing
  $('#Produktname_'+id).val('');
  $('#Beschreibung_'+id).val('');
  $('#Produktimage_'+id).attr('src', '');
  $('#Rate_'+id).val('');
  $('#Menge_'+id).val('');
  $('#Quantity_'+id).val('');
  $('#Rate_'+id).val('');
  $('#Discount_'+id).val('');
  $('#Amount_'+id).val('');
  if (Produkt=='') {
    return false;       // stop if Produkt is null
  }

  // Make a GET request using AJAX
  $.ajax({
    url: '/api/getProductDetailsDRP', // Replace with the actual endpoint URL
    method: 'GET',
    data: {Produkt: Produkt},
    success: function(response) {
      // Handle the successful response
      console.log('Response :', response);
      if (response.success) {
        console.log(response.productsList);

        response.productsList.forEach(function(item, index) {
          // Create a new product element for each cart item
          jQuery('#Produkt_'+id).closest('tr').find('.guessProductDtl ul').append(`
            <li class="liProductDtl slide-in-blurred-top" idNumber="${id}" Art_Nr="${item.Katalog_Art_Nummer}">
              ${item.Beschreibung_kurz}
              <br>Art-Nr. ${item.Katalog_Art_Nummer}
            </li>
          `);
        });

        // set values
        if (response.status) {
          $('#Produkt_'+id).val(response.success[0].Katalog_Art_Nummer);
          $('#Produktname_'+id).val(response.success[0].Artikelname);
          $('#Beschreibung_'+id).val(response.success[0].Beschreibung_kurz);
          $('#ProduktimageView_'+id).attr('src', baseUrl+'/storage/'+response.success[0].Bild_1);
          $('#Produktimage_'+id).val(response.success[0].Bild_1);
          $('#Rate_'+id).val(response.success[0].Preis_zzgl_MwSt);
          productList.empty();
        }
      }
    },
    error: function(error) {
      // Handle errors
      console.error('Error:', error);
      noOfCustomer.html('Sorry! we are facing some internal errors.');
    }
  });
}

// function for set li test in companyName input feild
  $(document).on('click', '.liProductDtl', function() {
    var id = jQuery(this).attr('idNumber');
    // console.log(id);
    var clickedProductName = jQuery(this).attr('Art_Nr');
    jQuery('#Produkt_'+id).val(clickedProductName).trigger("keyup");
    jQuery('.guessCompanyName ul').empty();
  });








// function for find Generated No
  function findGeneratedProductDtl(page_name){

    // alert(page_name);
    $(".showButton").trigger('click');
    var baseUrl = window.location.origin;
    var generatedNo = jQuery('#generatedNo').val();
    // console.log(generatedNo);

    var generatedNoList = jQuery('#generatedNoList ul');
    var tableTbody = jQuery('#table tbody');
    tableTbody.empty();  // make empty listing
    generatedNoList.empty();
    if (generatedNo=='') {
      return false;       // stop if generatedNo is null
    }
  
    // Make a GET request using AJAX
    $.ajax({
      url: '/api/getGeneratedProductDtlApi', // Replace with the actual endpoint URL
      method: 'GET',
      data: {page_name:page_name, generatedNo: generatedNo},
      success: function(response) {
        // Handle the successful response
        console.log('Response :', response);
        if (response.success) {
          console.log(response.productsList);
  
          // for Angebots_Nr list
          $.each(response.productsList, function(index, item) {
            // Create a new product element for each cart item
            generatedNoList.append(`
              <li class="liGenerateNoDtl slide-in-blurred-top" generatedNo="${item.Angebots_Nr}">
                ${item.Angebots_Nr}
              </li>
            `);
          });
  
          // show product in table
          if (response.status) {
            $.each(response.success, function(i, tableItem) {
              
              var No = $('.lastPOS:last').val() || 0;
              var i  = No;
              ++No;
              // Create a new product element for each cart tableItem
              tableTbody.append(`
                <tr>
                  <td>
                    <input type="text" class="lastPOS" value='${No}' name='inputs[${i}][POS]' placeholder='#' />
                  </td>

                  <td>
                    <input type="text" value='${tableItem.Produkt}' name='inputs[${i}][Produkt]' id="Produkt_${i}" onkeyup="getProductDetailsDRP('${i}');" placeholder="#"/>
                    <br>
                    <div class="guessProductDtl">
                      <ul>

                      </ul>
                    </div>
                  </td>

                  <td>
                    <input type="text" value='${tableItem.Beschreibung}' name='inputs[${i}][Beschreibung]' id="Beschreibung_${i}" placeholder="#"/>
                  </td>

                  <td>
                    <input type="text" value='${tableItem.Menge}' name='inputs[${i}][Menge]' placeholder="#"/>
                  </td>

                  <td>
                    <input type="text" value='${tableItem.Einheit}' name='inputs[${i}][Einheit]' id="Quantity_${i}" placeholder='#'  onclick="handleClick('Quantity_${i}')"/>
                  </td>

                  <td>
                    <input type="text" value='${tableItem.Einzelpreis}' name='inputs[${i}][Einzelpreis]' id="Rate_${i}" placeholder='#'  onclick="handleClick('Rate_${i}')"/>
                  </td>
                  
                  <td>
                    <input type="text" value='${tableItem.Rabatt}' name='inputs[${i}][Rabatt]' id="Discount_${i}" placeholder='#'  onclick="handleClick('Discount_${i}')" style="width:30px;"/><span>% C2</span>
                  </td>

                  <td>
                    <input type="text" value='${tableItem.Gesamtpreis}' name='inputs[${i}][Gesamtpreis]' id="Amount_${i}" placeholder='#' />
                  </td>

                  <td>
                    <button class="remove-table-row  btn btn-sm">Delete</button>
                  </td>
                </tr>
              `);
            });

            $("#Ihre_Kundennummer").html('<option value="'+ response.success[0].Ihre_Kundennummer +'" selected>'+ response.success[0].Ihre_Kundennummer +'</option>').trigger('change');

            // listing empty
            generatedNoList.empty();
            
            // Call the setupInputListeners function after adding a new row
            setupInputListeners();

            // Recalculate subtotal after adding a new row
            calculateSubTotal();
          }
        }
      },
      error: function(error) {
        // Handle errors
        console.error('Error:', error);
        tableTbody.append('<tr class="weNeedRemove"><th  colspan="8" style="text-align:center;">Sorry! we are facing some internal errors.</th></tr>');
      }
    });
  }
  
  // function for set li test in companyName input feild
    $(document).on('click', '.liGenerateNoDtl', function() {
      var clickedGeneratedNo = jQuery(this).attr('generatedNo');
      jQuery('#generatedNo').val(clickedGeneratedNo).trigger("keyup");
      jQuery('#generatedNoList ul').empty();
    });




// For calculation
  // Function to set up input event listeners
    function setupInputListeners() {
      document.querySelectorAll('input[id^="Quantity_"], input[id^="Rate_"], input[id^="Discount_"], input[id^="Amount_"]').forEach(function(
      input) {
      input.addEventListener('input', function() {
        var idParts = this.id.split('_');
        var index = idParts[1];

        var quantity = parseFloat(document.getElementById('Quantity_' + index).value) || 0;
        var rate = parseFloat(document.getElementById('Rate_' + index).value) || 0;
        var discountPercentage = parseFloat(document.getElementById('Discount_' + index).value) || 0;

        var discountAmount = (rate * discountPercentage) / 100;
        var discountedRate = rate - discountAmount;

        var amount = quantity * discountedRate;
        document.getElementById('Amount_' + index).value = amount.toFixed(2);

        // Recalculate subtotal after each input change
        calculateSubTotal();
      });
      });
    }

    // Function to calculate and update the subtotal
    function calculateSubTotal() {
      var subtotal = 0;
      document.querySelectorAll('input[id^="Amount_"]').forEach(function(amountInput) {
      subtotal += parseFloat(amountInput.value) || 0;
      });

      // Update the SubTotal input field
      document.getElementById('SubTotal').value = subtotal.toFixed(2);

      // Subtract the value of Adjustment
      var adjustment = parseFloat(document.getElementById('Adjustment').value) || 0;
      var sgstPercentage = parseFloat(document.getElementById('SGST').value) || 0;
      var cgstPercentage = parseFloat(document.getElementById('CGST').value) || 0;
      var igstPercentage = (subtotal * 19) / 100;
      console.log(igstPercentage);

      var sgstAmount = (subtotal * sgstPercentage) / 100;
      var cgstAmount = (subtotal * cgstPercentage) / 100;
      var igstAmount = (subtotal * 19) / 100;

      var adjustedTotal = subtotal - adjustment + sgstAmount + cgstAmount + igstAmount;

      // Update the AdjustmentShow, SGSTShow, CGSTShow, and Total input fields
      document.getElementById('AdjustmentShow').value = adjustment.toFixed(2);
      document.getElementById('SGSTShow').value = sgstAmount.toFixed(2);
      document.getElementById('CGSTShow').value = cgstAmount.toFixed(2);
      document.getElementById('IGSTShow').value = igstAmount.toFixed(2);
      document.getElementById('Total').value = adjustedTotal.toFixed(2);
      document.getElementById("tax").value = igstAmount.toFixed(2);
    }
// End Calculation