/*=============================================
EDITAR PAPEL
=============================================*/

$(document).on("click", ".btnEditarPapel", function () {

  var idPapel = $(this).attr("idPapel");
  console.log("idPapel", idPapel);

  var datos = new FormData();
  datos.append("idPapel", idPapel);

  $.ajax({
    url: "ajax/papeles.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function (respuesta) {
      console.log("respuesta", respuesta);

      $("#idPapel").val(respuesta["id"]);
      $("#editarPapel").val(respuesta["papel"]);
      $("#editarCostoPapel").val(respuesta["costoPapel"]);
      $("#editarTamanoHorizontal").val(respuesta["tamanoHorizontal"]);
      $("#editarTamanoVertical").val(respuesta["tamanoVertical"]);
      $("#editarColor").val(respuesta["color"]);
      $("#editarPaquetes").val(respuesta["paquetes"]);
      $("#editarCantidadPaquete").val(respuesta["cantidadPaquete"]);
      $("#editarCostoHoja").val(respuesta["costoHoja"]);
      $("#editarStock").val(respuesta["stock"]);
    }

  })

})

/*=============================================
ELIMINAR PAPELES
=============================================*/
$(document).on("click", ".btnEliminarPapel", function () {
  
  var idPapel = $(this).attr("idPapel");
  var papel = $(this).attr("papel");
  var costoPapel = $(this).attr("costoPapel");
  var tamanoHorizontal = $(this).attr("tamanoHorizontal");
  var tamanoVertical = $(this).attr("tamanoVertical");
  var paquetes = $(this).attr("paquetes");
  var cantidadPaquetes = $(this).attr("cantidadPaquetes");
  var costoHoja = $(this).attr("costoHoja");
  var stock = $(this).attr("stock");

  swal({
    title: "¿Está seguro de borrar el registro?",
    text: "¡Si no lo está puede cancelar la accíón!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    cancelButtonText: "Cancelar",
    confirmButtonText: "Si, borrar registro!",
  }).then(function (result) {
    if (result.value) {
      window.location = "index.php?ruta=papeles&idPapel=" +idPapel;

    }

  })

})

function calcular() {

  try {

    var a = parseFloat(document.getElementById("nuevoCostoPapel").value) || 0;
        console.log("a", a);

    var b = parseFloat(document.getElementById("nuevoCantidadPaquetes").value) || 0;
          console.log("b", b);

    var c = parseFloat(document.getElementById("nuevoPaquetes").value) || 0;
        console.log("c", c);

    document.getElementById("nuevoCostoHoja").value = a / b;

    document.getElementById("nuevoStock").value = b * c;

  } catch (e) {}

}