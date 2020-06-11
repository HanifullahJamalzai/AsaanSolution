
     $('[data-toggle="tooltip"]').tooltip();

    function showTooltip(){
      $('#js_tooltip').tooltip('show');
    }

    function hideTooltip(){
      $('#js_tooltip').tooltip('hide');
    }

    function toggleTooltip(){
      $('#js_tooltip').tooltip('toggle');
    }

    $('#js_tooltip').on('show.bs.tooltip', function (e){

      $('#show_text').fadeIn('fast').text('Tooltip started to show').fadeOut(3000);

    }).on('shown.bs.tooltip', function (e){

      $('#shown_text').fadeIn('fast').text('Tooltip shown').fadeOut(3000);

    }).on('hide.bs.tooltip', function (e){

      $('#hide_text').fadeIn('fast').text('Tooltip started to hide').fadeOut(3000);

    }).on('hidden.bs.tooltip', function (e){

      $('#hidden_text').fadeIn('fast').text('Tooltip hidden').fadeOut(3000);

    });

