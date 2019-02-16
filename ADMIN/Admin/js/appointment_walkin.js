

 $('#appointment_form_walkin').on('submit', function(event){
    event.preventDefault();
    if($('#vehicle').val() != '' && $('#additionalMessage').val() != '' && $('#service').val() != '' && $('#datepicker').val() != '')
    {
     var form_data = $(this).serialize();
     $.ajax({
      url:"process/appointment_walkin_insert.php",
      method:"POST",
      data:form_data,
      success:function(data)
      {
       $('#appointment_form_walkin')[0].reset();
       load_unseen_notification();
      }
     });
    }
    else
    {
     alert("All Fields are Required");
    }
   });