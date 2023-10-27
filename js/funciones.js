function validarFormVacio(formulario) {
    var campos = $('#' + formulario).find('input[type="text"], input[type="password"]');
    var vacios = 0;
    
    campos.each(function() {
        if ($(this).val() === "") {
            vacios++;
        }
    });
    
    return vacios;
}
