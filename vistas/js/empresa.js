/*+++++++++++++++++++++++++++++++++++
EDITAR EMPRESA
+++++++++++++++++++++++++++++++++++*/
$(document).on("click", ".btnEditarEmpresa", function(){

    var idEmpresa = $(this).attr("idCliente");

    var datos = new FormData();
    datos.append("idEmpresa", idEmpresa);

    $.ajax({

        url: "ajax/empresas.ajax.php",
        method: "POST",
        data: datos,
        Cache: false,
        contentType: false,
        processData: false,
        datatype: "json",
        success: function (respuesta) {

            $("#idEmpresa").val(respuesta["id"]);
            $("#editarEmpresa").val(respuesta["nombreEmpresa"]);
            $("#editarRS").val(respuesta["rasonSocial"]);
            $("#editarRfc").val(respuesta["rfc"]);
            
        }
    })

})