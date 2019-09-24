<script type="text/javascript">
  $(document).ready(function() {
    $('.jsa__send_mail').on('click', function(e){
      e.preventDefault();
      if ($('input[name="name"]').val() == '' || $('input[name="phone"]').val() == '' || $('input[name="email"]').val() == '' || $('textarea').val() == ''){
        alert('<?=  $l['Fill_in_the_Name_phone_number_email'] ?>');
        return;
      }
      $(this).addClass("disabled");
      $.ajax({
        type: 'post',
        url: "/action/mail.php",
        data: $('.jsa__form_question').serialize(),
        success: function(data){
          if (data.result) {
            alert('<?=  $l['Your_application_has_been_accepted_for_processing'] ?>');
            $('input[name="name"]').val('');
            $('input[name="phone"]').val('');
            $('input[name="email"]').val('');
            $('textarea').val('');
          } else {
            if (data.message) {
              alert(data.message);
            } else {
              alert('<?=  $l['Error_sending_application_Call_the'] ?>');
            }
          }
          $('.jsa__send_mail').removeClass("disabled");
        },
        error: function(data){
          alert('<?=  $l['Failed_to_send_request'] ?>');
          $('.jsa__send_mail').removeClass("disabled");
        }
      });
    });


  });
</script>