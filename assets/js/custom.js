
    $.validate({
      modules : 'location, date, security, file',
      onModulesLoaded : function() {
        $('#country').suggestCountry();
      }
    });

    // Restrict presentation length
    $('#presentation').restrictLength( $('#pres-max-length') );
    
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });

    $('#info').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });

    //Date picker
    $('#datepicker').datepicker({
      format: 'dd/mm/yyyy',
      autoclose: true
    });