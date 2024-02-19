$(document).one('click', '.showButton', function() {
    var baseUrl = window.location.origin;
    $.ajax({
        type: 'get',
        url: baseUrl + '/api/B2CUserDetails',
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
function guessCompanyNameFunction() {
  var baseUrl = window.location.origin;
  var companyName = jQuery('#companyName').val();
  if (companyName=='') {
    $('#guessCompanyName ul').empty();
    return false;
  }
  
  $(".customer_dtl").text('');
  $("#Ihre_Kundennummer").html('');
  $("#customer_email, #Ihre_Ust_ID").val('');
  $.ajax({
    type: 'get',
    url: baseUrl + '/api/selectedB2CUserDetailsByCompanyName/' + companyName,
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

