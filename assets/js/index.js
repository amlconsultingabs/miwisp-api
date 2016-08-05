var working = false;
$('.login').on('submit', function(e) {
  e.preventDefault();
  	var $this = $(this);  
    $state = $this.find('button > .state');
    $this.addClass('loading');
    $state.html('Cargando...');    
  	var form_data = $('#form').serialize();
    var request   = $.ajax({
  	  url:          'http://localhost/system/check/activate_api',
        cache:        false,
        data:         form_data,
        type:         'post'
    });
    request.done(function(output){
      if (output.token == 'error'){   
      		$('.spinner').hide();
    	    $this.addClass('error');
		    $state.html('Usuario/Contraseña invalido');
		    setTimeout(function() {
		      $state.html('Activar');
		      $('.spinner').show();
		      $this.removeClass('error loading');
		      working = false;
		    }, 4000);		    
      }else{	
            $.get("api/write/"+output.token);
		    $this.addClass('ok');
		    $state.html('Plataforma activada');
		    setTimeout(function() {
		      location.reload();
		    }, 4000);		    
      }
    });
    request.fail(function(jqXHR, textStatus){
    	$('.spinner').hide();
    	$this.addClass('error');
	    $state.html('Error, intente mas tarde');
	    setTimeout(function() {
	      $('.spinner').show();
	      $state.html('Activar');
	      $this.removeClass('error loading');
	      working = false;
	    }, 4000);
    });
});