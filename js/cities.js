$(document).ready(function() {    
   $('#id_state').on('change', function() {
        if ($(this).val() != '')
        {
            getCities($('#city'), $(this).val());
	   }
    });      
});

function getCities(obj, state) {
    obj.html('<option value="">CARGANDO...</option>');
    obj.uniform();
    $.ajax({
        type: 'POST',
        headers: { "cache-control": "no-cache" },
        url: addressControllerUrl + '?rand=' + new Date().getTime(),
        async: true,
        cache: false,
        dataType : "json",
        data: 'ajax=true&method=getCities&id_state='+state+'&token=' + token,
        success: function(jsonData)
        {
            if (jsonData.hasError)
            {
                obj.html('<option value="">ERROR</option>');
            } else {
                obj.html('<option value="">Selecciona una ciudad</option>');                
                obj.append(jsonData.data);
            }
            obj.uniform();
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            if (textStatus !== 'abort')
            {
                error = "TECHNICAL ERROR: unable to load comunas \n\nDetails:\nError thrown: " + XMLHttpRequest + "\n" + 'Text status: ' + textStatus;
                if (!!$.prototype.fancybox)
                    $.fancybox.open([
                        {
                            type: 'inline',
                            autoScale: true,
                            minHeight: 30,
                            content: '<p class="fancybox-error">' + error + '</p>'
                        }
                    ], {
                        padding: 0
                    });
                else
                    alert(error);
            }
        }
    });
}
