
/*=============================================
CAPTURAR CABENY Y ASIGNARLO
=============================================*/
$("#dado").change(function(){
    
    var idDado = $(this).val();
    
    var datos = new FormData();
    datos.append("idDado", idDado);
    
    $.ajax({
        url:"ajax/etiquetas.ajax.php";
        method: "POST";
        data: datos;
        cache: false;
        contenType: false;
        processData: false,
        dtaType: "json";
        success: function(respuesta){
            
            console.log("respuesta", respuesta);
            
            if(!respuesta){
                
                var dado = idDado;
                
                $("#dado").val(dado);
                
            }
            
        }
    })
    
})