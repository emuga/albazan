
/*=============================================
CAPTURAR CABENY Y ASIGNARLO
=============================================*/
$("#dado").change(function(){
    
    var idDado = $(this).val();
    
    var datos = new FormData();
    datos.append("idDado", idDado);
    
    $.ajax({
        url:"ajax/etiquetas.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contenType: false,
        processData: false,
        dtaType: "json",
        success: function(respuesta){
            
            console.log("respuesta", respuesta);
            
            if(!respuesta){
                
                var dado = idDado;
                
                $("#dado").val(dado);
                
            }
            
        }
    })
    
})

/*=============================================
CALCULO
=============================================*/

function operar() {
  // Se obtienen los elementos td de cada fila
  
          //cuantos caben tamanofinalX por cabenX
          var finalx = Number(document.getElementById("finalx").innerHTML);
          var cabenx = Number(document.getElementById("cabenx").innerHTML);
          var totalx;
          var mil = 1000;
          var sobra1 = 0.75;
          var sobra2 = 1.25;
  
          var GapIntx = Number(document.getElementById("GapIntx").innerHTML);
          var NumGapsx = Number(document.getElementById("NoGapsx").innerHTML);
  
          var GapExtx = Number(document.getElementById("GapExtx").innerHTML); 
  
          totalx = totalx = finalx * cabenx + GapIntx * NumGapsx + GapExtx;
          document.getElementById("bx").value = totalx;
          
          var cant = Number(document.getElementById("cant").value);
          var NumTintas = Number(document.getElementById("NumTintas").value);
          var finaly = Number(document.getElementById("finaly").innerHTML);
          var cabeny = Number(document.getElementById("cabeny").innerHTML);
          var totaly;
  
          var GapInty = Number(document.getElementById("GapInty").innerHTML);
          var NumGapsy = Number(document.getElementById("NoGapsy").innerHTML);
  
          var GapExty = Number(document.getElementById("GapExty").innerHTML);
  
          //ESTE IF ES PARA SABER EL SETUP DEPENDIENDO DEL NUMERO DE TINTAS,
          //SI EL NUMERO DE TINTAS ES MENOR O IGUAL A 3
          //ENTONCES TENDRA UN VALOR DE 0.75 (sobra1)
          if (NumTintas <= 3) {
            //AQUI SE LLAMA A LA VARIABLE SOBRA PARA QUE MUESTRE EL 0.75
            document.getElementById("setup").value = sobra1;
          }
          //SI NO SE CUMPLE LO ANTERIOR, ENTONCES TOMA EL VALOR
          //DE 1.25 (sobra2)
          else {
            document.getElementById("setup").value = sobra2;
          }
  
          totaly =
            (((finaly + GapInty) * cant) / cabenx) / mil + Number(document.getElementById("setup").value);
  
          document.getElementById("ay").value = totaly;
  
          var msi = Number(document.getElementById("ay").value) * totalx;
          document.getElementById("msi").value = msi;
          
          calculateDensValor();
          Rebobinado();
          
          //NEGATIVO
          //Se declara la constante del costo por negativo
          var CostoNeg = 6.25;
          var CostoTotalNegativo = CostoNeg * Number(document.getElementById("NumTintas").value);
          document.getElementById("CostoTotalNegativo").value = CostoTotalNegativo;
  
          //PLACA
          var pulgada = 0.5368;
          var b = (finalx * cabenx) + (GapIntx * NumGapsx) + 1;
          document.getElementById("B").value = b;
          var a = (finaly * cabeny) + (GapInty * NumGapsy) + 1;
          document.getElementById("A").value = a;
          var area = b * a;
          document.getElementById("Area").value = area;
          var costoPlacaDlls = area * pulgada * NumTintas;
          document.getElementById("CostoPlacaDlls").value = costoPlacaDlls;
          
          CostosFinales();
  
        }
  
   
      function sum() {
          
        let sumCantidad = 0;
        let sumCostoTinta = 0;
        $(".row-item").each(function () {
          const thisCantidad = Number($(this).find("#cantidad").first().val());
          const thisCostoTinta = Number($(this).find("#CostoTinta").first().val());
  
          sumCantidad += thisCantidad;
          sumCostoTinta += thisCostoTinta;
          Ocultar();
          
        });
  
        $("#sum-cantidad").val(sumCantidad);
        $("#sum-CostoTinta").text(sumCostoTinta);
        
      }
  
      function onChangeSelectTipoTinta(id) {
        bindInputValues(id);
        calculateDensValor(id);
      }
  
      function onChangeSelectDensidad(id) {
        bindInputValues(id);
        calculateDensValor(id);
      }
  
      function bindInputValues(id) {
        const tipoTinta = Number(
          $("#row-" + id)
            .find("#select-tipoTinta option:selected")
            .first()
            .val()
        );
        const densidad = Number(
          $("#row-" + id)
            .find("#select-densidad option:selected")
            .first()
            .val()
        );
        $("#row-" + id)
          .find("#valor_select1")
          .val(tipoTinta);
  
        $("#row-" + id)
          .find("#valor_select2")
          .val(densidad);
      }
  
      function calculateDensValor(id) {
        const tipoTinta = Number(
          $("#row-" + id)
            .find("#select-tipoTinta")
            .first()
            .val()
        );
  
        const densidad = Number(
          $("#row-" + id)
            .find("#select-densidad")
            .first()
            .val()
        );
        const cantidad = Number(
          $("#row-" + id)
            .find("#cantidad")
            .first()
            .val()
        );
  
        const DensValor = tipoTinta * cantidad * densidad;
  
        $("#row-" + id)
          .find("#DensValor")
          .first()
          .val(DensValor);
  
        const ValorTinta =
          Number(document.getElementById("msi").value) * DensValor;
  
        $("#row-" + id)
          .find("#ValorTinta")
          .first()
          .val(ValorTinta);
  
        //ESTE IF ES PARA VER EL VALOR DE CostoTinta,
        //SI EL NUMERO DE TINTAS ES MENOR AL MIN (3.84)
        //ENTONCES TOMARA EL VALOR DEL MIN (3.84)
        var min = 3.84;
        if (ValorTinta < min) {
          //AQUI SE LLAMA A LA VARIABLE CostoTinta PARA QUE MUESTRE EL MIN (3.84)
          // document.getElementById("CostoTinta").value = min;
          $("#row-" + id)
            .find("#CostoTinta")
            .first()
            .val(min);
        }
        //SI NO SE CUMPLE LO ANTERIOR, ENTONCES TOMA EL VALOR
        //DE ValorTinta
        else {
          // document.getElementById("CostoTinta").value = Number(
          //   document.getElementById("ValorTinta").value
          // );
          $("#row-" + id)
            .find("#CostoTinta")
            .first()
            .val(ValorTinta);
        }
        sum();
        laminado();
      }
      
  
      function insertTintaRow() {
        const content = $("#tinta-row").clone();
  
        let count = Number($("#rows-counter").val()) + 1;
        $("#rows-counter").val(count);
  
        $(content).css("display", "block");
        $(content).attr("id", "row-" + count);
        $("#content").append(content);
  
        bindElementInTintaRow();
        return count;
      }
      
  
      function bindElementInTintaRow() {
        $(".select-tipoTinta").unbind("change");
        $(".select-tipoTinta").bind("change", function () {
          const id = $(this).parent().parent().attr("id").split("-")[1];
          onChangeSelectTipoTinta(id);
        });
  
        $(".select-densidad").unbind("change");
        $(".select-densidad").bind("change", function () {
          const id = $(this).parent().parent().attr("id").split("-")[1];
          onChangeSelectDensidad(id);
        });
      }
  
      $(document).ready(function () {
        const id = insertTintaRow();
  
        // Initial values
        bindInputValues();
        calculateDensValor(id);
  
        $("#add-row-btn").click(function () {
          // add new row
          insertTintaRow();
        });
  
        $("#sum-btn").click(function () {});
      });
      
      
      function laminado(){
            
            var laminado = 0.12;
            var min = 3.84;
    
            var LaminadoCosto = laminado * Number(document.getElementById("msi").value);
          //document.getElementById("LaminadoCosto").value = LaminadoCosto;
          var LaminadoTotal = Number(document.getElementById("LaminadoTotal").value);
          
          //ESTE IF ES PARA SABER EL LAMINADO TOTAL DEPENDIENDO DEL LAMINADO COSTO,
          //SI EL LAMINADO COSTO ES MENOR AL MIN (3.84)
          //ENTONCES TOMARA EL VALOR DEL MIN (3.84)
          if (LaminadoCosto < min) {
            //AQUI SE LLAMA A LA VARIABLE LaminadoTotal PARA QUE MUESTRE EL MIN (3.84)
            document.getElementById("LaminadoTotal").value = min;
          }
          //SI NO SE CUMPLE LO ANTERIOR, ENTONCES TOMA EL VALOR
          //DE LaminadoCosto
          else {
            document.getElementById("LaminadoTotal").value = LaminadoCosto;
          }
          Rebobinado();
          CostosFinales();
        }
        
        
      function Rebobinado() {
          //const Msi = 51.3438;
          const min = 3.84;
          const tipoCore = Number($("#select-tipoCore option:selected").val());
          const CostoCore = tipoCore * Number(document.getElementById("msi").value);
          //const CostoCore = tipoCore * Msi;
          $("#CostoCore").val(CostoCore);
          var CostoTotalCore;//= document.getElementById("CostoTotalCore").value;
          //ESTE IF ES PARA SABER EL COSTO TOTAL CORE DEPENDIENDO DEL COSTO CORE,
          //SI EL COSTO CORE ES MENOR AL MIN (3.84), ENTONCES TOMARA EL VALOR DEL MIN (3.84)
          if (CostoCore < min) {
            //AQUI SE LLAMA A LA VARIABLE CostoTotalCore PARA QUE MUESTRE EL MIN (3.84)
            document.getElementById("CostoTotalCore").value = min;
          }
          //SI NO SE CUMPLE LO ANTERIOR, ENTONCES TOMA EL VALOR
          //DE CostoCore
          else {
            document.getElementById("CostoTotalCore").value = CostoCore;
          }
          CostosFinales();
          
        } 
        
      function CostosFinales(){
          
      var TipoCambio = Number(document.getElementById("TipoCambio").value);
      var ValorAgregado = Number(document.getElementById("ValorAgregado").value);
      var CostoTintaPesos;
      var CostoPlacaPesos;
      var CostoNegativoPesos;
      var CostoRebobinadoPesos;
      var CostoLaminadoPesos;
      var CostoTotalPesos;
      var TotalPrecioPublico;
      
          CostoTintaPesos = Number($("#sum-CostoTinta").text()) * TipoCambio;
          document.getElementById("CostoTintaPesos").value = CostoTintaPesos;
          
          CostoPlacaPesos = Number(document.getElementById("CostoPlacaDlls").value) * TipoCambio;
          document.getElementById("CostoPlacaPesos").value = CostoPlacaPesos;
          
          CostoNegativoPesos = Number(document.getElementById("CostoTotalNegativo").value) * TipoCambio;
          document.getElementById("CostoNegativoPesos").value = CostoNegativoPesos;
          
          CostoRebobinadoPesos = Number(document.getElementById("CostoTotalCore").value) * TipoCambio;
          document.getElementById("CostoRebobinadoPesos").value = CostoRebobinadoPesos;
          
          CostoLaminadoPesos = Number(document.getElementById("LaminadoTotal").value) * TipoCambio;
          document.getElementById("CostoLaminadoPesos").value = CostoLaminadoPesos;
          
          CostoTotalPesos = CostoPlacaPesos + CostoNegativoPesos + CostoRebobinadoPesos + CostoLaminadoPesos;
          document.getElementById("CostoTotalPesos").value = CostoTotalPesos;
          
          TotalPrecioPublico = CostoTotalPesos * ValorAgregado;
          document.getElementById("TotalPrecioPublico").value = TotalPrecioPublico;
      }
       
      function Ocultar(){
        const numTintas = parseInt(document.getElementById("NumTintas").value);
        const sumCantidad = parseInt(document.getElementById("sum-cantidad").textContent);
        const divCalculosDos = document.getElementById("CalculosDos");
        
        if (numTintas === sumCantidad) {
          divCalculosDos.style.display = "block";
        } else {
          divCalculosDos.style.display = "none";
        }
    }
  