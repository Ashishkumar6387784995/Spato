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
                ddl.on('change', function() {
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
  if (Produkt=='') {
    $('#Produktname_'+id).val('');
    $('#Beschreibung_'+id).val('');
    $('#Produktimage_'+id).attr('src', '');
    $('#Rate_'+id).val('');
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
          $('#Produktimage_'+id).attr('src', baseUrl+'/storage/'+response.success[0].Bild_1);
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