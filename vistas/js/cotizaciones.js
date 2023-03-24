
function operar() {
  // ==================================================================================================
  // =           SE DECLARAN VARIABLES PARA FINAL HORIZONTAL, EXTENDIDO HORIZONTAL Y SOBRAS           =
  // ==================================================================================================
  var fh = Number(document.getElementById("anchoFinal").value);
  // console.log("fh", fh);

  var eh = Number(document.getElementById("eh").value);
  // console.log("eh", eh);

  sobra = 0;

  // ==================================================================================================
  // = OPERACION PARA SACAR CUANTAS CABEN HORIZONTALMENTE:
  //EXTENDIDO HORIZONTAL ENTRE FINAL HORIZONTAL           =
  // ==================================================================================================
  var cabenh = eh / fh;
  // console.log("cabenh", cabenh);

  // ==================================================================================================
  // = OPERACION PARA SACAR EXTENDIDO HORIZONTAL - CUANTAS CABEN HORIZONTAL * FINAL HORIZONTAL           =
  // ==================================================================================================
  document.getElementById("cabenh").value = eh - Math.floor(cabenh) * fh;
  console.log("eh", eh);

  // ==================================================================================================
  // = ESTA VARIABLE GUARDA EL RESULTADO DE LA OPERACION ANTERIOR PARA USARSE EN EL IF DE ABAJO           =
  // ==================================================================================================
  var cabenhh = eh - Math.floor(cabenh) * fh;
  // console.log("cabenhh", cabenhh);

  // ==================================================================================================
  // = SE DECLARAN VARIABLES PARA FINAL VERTICAL Y EXTENDIDO VERTICAL       =
  // ==================================================================================================
  var fv = Number(document.getElementById("altoFinal").value);
  console.log("fv", fv);
  var ev = Number(document.getElementById("ev").value);
  console.log("ev", ev);

  // ==================================================================================================
  // = SE DECLARAN VARIABLES PARA FINAL VERTICAL Y EXTENDIDO VERTICAL       =
  // ==================================================================================================
  var cabenv = ev / fv;
  console.log("cabenv", cabenv);
  document.getElementById("cabenv").value = Math.floor(cabenv) * fv;

  // ==================================================================================================
  // =    OPERACIONES PARA SACAR HORIZONTALES: EXTENDIDO HORIZONTAL * FINAL HORIZONTAL       =
  // ==================================================================================================
  var hor = Math.floor(cabenh) * Math.floor(cabenv);
  document.getElementById("hor").value = hor;

  // ==================================================================================================
  // = ESTE IF ES PARA VER CUANTAS SOBRAN VERTICALMENTE, SI EL NUMERO DE CABEN ES MENOR AL DE FINAL HORIZONTA ENTONCES
  //   TENDRA UN VALOR DE 0       =
  // ==================================================================================================
  if (cabenhh < fv) {
    document.getElementById("sobra").value = sobra;
  } else {
    document.getElementById("sobra").value = ev;
  }

  // ==================================================================================================
  // = SE DECLARA LA VARIABLE VOLTEAR HORIZONTAL, DONDE DIVIDE LO QUE CABE HORIZONTAL ENTRE EL NUMERO FINAL VERTICAL =
  // ==================================================================================================
  var volth = cabenhh / fv;
  console.log("volth", volth);

  document.getElementById("volth").value = Math.floor(volth);

  // ==================================================================================================
  // = SE DECLARA LA VARIABLE VOLTEAR VERTICAL, EN ELLA SE DIVIDE LO QUE SE TIENE EN LA CAJA DE TEXTO
  //   DEL IF ENTRE EL NUMERO DE FINAL HORIZONTAL       =
  // ==================================================================================================
  var voltv = Number(document.getElementById("sobra").value) / fh;

  document.getElementById("voltv").value = Math.floor(voltv);

  // ==================================================================================================
  // = SE DECLARA LA VARIABLE VERTICAL Y SE HACEN LAS OPERACIONES PARA SACAR VERTICALES: VOLTEAR VERTICAL * VOLTEAR HORIZONTAL       =
  // ==================================================================================================
  var ver = Math.floor(voltv) * Math.floor(volth);
  console.log("ver", ver);

  document.getElementById("ver").value = ver;

  // ==================================================================================================
  // = SE DECLARA LA VARIABLE PIEZAS Y SE HACEN LAS OPERACIONES PARA SACAR LAS PIEZAS EXTENDIDAS:
  //    HORIZONTALES + VERTICALES       =
  // ==================================================================================================
  var pzas = hor + ver;

  document.getElementById("pzas").value = pzas;

  // ==================================================================================================
  // = SE DECLARA LA VARIABLE CANTIDAD Y LA DE EXTENDIDOS, EN ESTA ULTIMA LAS OPERACIONES PARA SACAR
  //   LOS EXTENDIDOS NECESARIOS: SE DIVIDE LA CANTIDAD ENTRE LAS PIEZAS POR EXTENDIDO =
  // ==================================================================================================
  var cant = Number(document.getElementById("cant").value);
  console.log("cant", cant);

  var ext = cant / pzas;
  console.log("ext", ext);

  document.getElementById("ext").value = Math.ceil(ext);

  // ==================================================================================================
  // = SE DECLARA LA VARIABLE TOTAL Y  SE HACEN LAS OPERACIONES PARA SACAR EL TOTAL: SE MULTIPLICAN LAS PIEZAS POR EXTENDIDO
  //    * LOS EXTENDIDOS NECESARIOS=
  // ==================================================================================================
  var tot = pzas * Math.ceil(ext);

  document.getElementById("tot").value = tot;

  // ==================================================================================================
  // = SE DECLARA LA VARIABLE SOBRANTES Y SE HACEN LAS OPERACIONES PARA SACAR LOS SOBRANTES: SE RESTA EL TOTAL - CANTIDAD =
  // ==================================================================================================
  var sobras = tot - cant;

  document.getElementById("sobras").value = sobras;
}

// function agregarCotizacion(){

//   descripcion = document.getElementById("seleccionarProducto").value;
//   console.log("descripcion", descripcion);

//   document.getElementById("nuevaDescripcion").value = descripcion;

//   cantidad = document.getElementById("cant").value;

//   document.getElementById("nuevaCantidad").value = cantidad;

//   costoTotal = document.getElementById("CostoTotal").value;

//   document.getElementById("nuevoPrecio").value = costoTotal;

// }

// var producto = div.getAttribute("producto");

// let campos_max = 10;

// const x = 0;

// $("#agregarCampos").click(function(e){

//     if (x < campos_max) {

//         $("#listas").append(
//           '<div class="col-xs-4" style="padding-right:0px">'+

//             '<div class="input-group"><label for="">Descripcion</label>'+

//               '<input type="text" class="form-control" id="nuevaDescripcion" min="1" required>'+

//             '</div>'+

//           '</div>'+

//           '<div class="col-xs-4" style="padding-right:0px">'+

//             '<div class="input-group"><label for="">Cantidad</label>'+

//               '<input type="number" class="form-control" id="nuevaCantidad" min="0" required>'+

//             '</div>'+

//           '</div>'+

//           '<div class="col-xs-4" style="padding-right:0px">'+

//             '<div class="input-group"><label for="">Precio</label>'+

//               '<input type="number" class="form-control" id="nuevoPrecio" min="0" required>'+

//             '</div>'+

//           '</div>');

//         x++;

//     }

// });

// if (isset($_POST["seleccionarProducto"])) {

// }

// var botonElemento = document.getElementById("btnClick");
// var pelemento = document.getElementById("areaContador");
// var contador = 0;

// botonElemento.onClick = function(){

//   contador++;
//   pelemento.textContent = contador;
//   console.log("pelemento.textContent", pelemento.textContent);

// }

// var cotizacion = {

//   producto = document.getElementById("seleccionarProducto").value;
//   cantidad = document.getElementById("cant").value;
//   costoTotal = document.getElementById("costoTotal").value;

// };

// $.ajax({

//   data: cotizazion,
//   url: "ajax/costo.ajax.php",
//   method: "POST",
//   success: function(data){

//     console.log(data);

//   }

// })

function viewsArrayInput() {
  var arrayInput = new Array();

  var inputsValues = document.getElementsByClassName("datoInput"),
    namesValues = [].map.call(inputsValues, function (dataInput) {
      arrayInput.push(dataInput.value);
    });

  arrayInput.forEach(function (inputsValuesData) {
    //console.log("Los datos son: " + inputsValuesData);

    document.write(
      "<div class='container-fluid col-lg-12' style='background-color: yellow'>" +
        inputsValuesData +
        "</div>"
    );
  });
}

// const boton = document.querySelector("#cotizacion");

// boton.addEventListener("click", function(evento){

//   function viewsArrayInput(){

//   var arrayInput = new Array();

//   var inputsValues = document.getElementsByClassName("datoInput"),

//   namesValues = [].map.call(inputsValues, function(dataInput){

//     arrayInput.push(dataInput.value);

//   });

//   arrayInput.forEach(function(inputsValuesData){

//     //console.log("Los datos son: " + inputsValuesData);

//      document.write(

//        "<div class='container-fluid col-lg-12' style='background-color: yellow'>"+inputsValuesData
//        +"</div>");

//    });

// }

// })
