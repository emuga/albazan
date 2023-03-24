<html>
  <head>
    <meta charset="UTF-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
      function operar() {
        //cuantos caben tamanofinalX por cabenX
        var finalx = Number(document.getElementById("finalx").value);
        var cabenx = Number(document.getElementById("cabenx").value);
        var totalx;
        var mil = 1000;
        var sobra1 = 0.75;
        var sobra2 = 1.25;

        var GapIntx = Number(document.getElementById("GapIntx").value);
        var NoGapsx = Number(document.getElementById("NoGapsx").value);

        var GapExtx = Number(document.getElementById("GapExtx").value);

        totalx = finalx * cabenx + GapIntx * NoGapsx + GapExtx;
        document.getElementById("bx").value = totalx;

        var cant = Number(document.getElementById("cant").value);
        var NoTintas = Number(document.getElementById("NoTintas").value);
        var finaly = Number(document.getElementById("finaly").value);
        var cabeny = Number(document.getElementById("cabeny").value);
        var totaly;

        var GapInty = Number(document.getElementById("GapInty").value);
        var NoGapsy = Number(document.getElementById("NoGapsy").value);

        var GapExty = Number(document.getElementById("GapExty").value);

        //ESTE IF ES PARA SABER EL SETUP DEPENDIENDO DEL NUMERO DE TINTAS,
        //SI EL NUMERO DE TINTAS ES MENOR O IGUAL A 3
        //ENTONCES TENDRA UN VALOR DE 0.75 (sobra1)
        if (NoTintas <= 3) {
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
        var CostoTotalNegativo = CostoNeg * Number(document.getElementById("NoTintas").value);
        document.getElementById("CostoTotalNegativo").value = CostoTotalNegativo;

        //PLACA
        var pulgada = 0.5368;
        var b = (finalx * cabenx) + (GapIntx * NoGapsx) + 1;
        document.getElementById("B").value = b;
        var a = (finaly * cabeny) + (GapInty * NoGapsy) + 1;
        document.getElementById("A").value = a;
        var area = b * a;
        document.getElementById("Area").value = area;
        var costoPlacaDlls = area * pulgada * NoTintas;
        document.getElementById("CostoPlacaDlls").value = costoPlacaDlls;
      }
      
      function llenar(){
        
        (document.getElementById("cant").value) = 10000;
        (document.getElementById("NoTintas").value) = 4;
        (document.getElementById("finalx").value) = 2;
        (document.getElementById("finaly").value) = 1;
        (document.getElementById("cabenx").value) = 2;
        (document.getElementById("GapIntx").value) = 0.125;
        (document.getElementById("NoGapsx").value) = 1;
        (document.getElementById("GapExtx").value) = 0.5;
        (document.getElementById("cabeny").value) = 5;
        (document.getElementById("GapInty").value) = 0.125;
        (document.getElementById("NoGapsy").value) = 4;
        (document.getElementById("GapExty").value) = 0.5;

      }
      
    </script>
    <style>
      .camu {
        color: blue;
      }
    </style>
  </head>

  <body>
    <form>
      <label> Cantidad</label> <input type="text" id="cant" />
      <label> No. de Tintas</label> <input type="text" id="NoTintas" />
      <input type="button" value="Llenar Campos" onclick="llenar()" />
      <p></p>

      <label> TAMAÑO FINAL</label><br />
      X(finalx)<input type="text" id="finalx" /> <label>(finaly)Y</label>i
      <input type="text" id="finaly" />
      <p></p>

      <label> Cuantos caben</label><br />
      X(cabenx)<input type="text" id="cabenx" />
      <label> Gap int(GapIntx)</label>
      <input type="text" id="GapIntx" />
      <label> No Gaps(NoGapsx)</label><input type="text" id="NoGapsx" />
      <label> Gap ext(GapExtx)</label><input type="text" id="GapExtx" />
      <p></p>

      <label> Cuantos caben</label><br />
      Y(cabeny) <input type="text" id="cabeny" />
      <label> Gap int(GapInty)</label> <input type="text" id="GapInty" />
      <label> No Gaps(NoGapsy)</label> <input type="text" id="NoGapsy" />
      <label> Gap ext(GapExty)</label>
      <input type="text" id="GapExty" />
      <p></p>

      <input type="button" name="suma" value="calcular" onclick="operar()" />
      <p></p>

      CALCULADO
      <p></p>
      <label class="camu">B(x)"bx"</label> <input type="text" id="bx" />
      <label class="camu">A(y)"ay"</label> <input type="text" id="ay" />
      <label class="camu"> Setup</label> <input type="text" id="setup" />
      <label class="camu"> MSI</label> <input type="text" id="msi" />
      <p></p>

      <button type="reset">Reset</button>
    </form>

    <div class="row" id="tinta-row" style="display: none">
      <label> Tipo de tinta</label><br />

      <div class="item row-item">
        X(tipoTinta)
        <select name="tipoTinta" id="select-tipoTinta" class="select-tipoTinta">
          <option value="0">Select</option>
          <option value="0.02318">CMYK</option>
          <option value="0.03416">Pantone</option>
          <option value="0.3087">Fluorescente</option>
        </select>

        <label>(cantidad)</label>
        <input type="number" id="cantidad" />Densidad

        <select id="select-densidad" class="select-densidad">
          <option value="0">Select</option>
          <option value="1">Baja</option>
          <option value="2">Media</option>
          <option value="3">Alta</option>
        </select>

        tinta<input type="number" id="valor_select1" />

        densidad
        <input type="number" min="1" max="3" readonly id="valor_select2" />

        Dens valor
        <input type="number" id="DensValor" />

        Valor tinta
        <input type="number" id="ValorTinta" />

        Costo Tinta <input type="number" id="CostoTinta" />
      </div>
    </div>
    <div id="content"></div>
    <input type="hidden" id="rows-counter" value="0" />

    <button style="float: right" id="add-row-btn">Agregar Tinta</button>
    <br />

    <p>Suma cantidad: <span id="sum-cantidad"></span></p>
    <p>Costo Total Tintas: <span id="sum-CostoTinta"></span></p>
    
    <p><label> PLACA: Costo por pulgada (0.5368)</label>
    <label> B</label> <input type="text" id="B" onclick="operar()"/>
    <label> A</label> <input type="text" id="A" />
    <label> Area</label> <input type="text" id="Area" />
    <label> Costo placa dolares</label> <input type="text" id="CostoPlacaDlls" /></p>
    
    
    <p><label> NEGATIVO: Costo total negativo</label> <input type="text" id="CostoTotalNegativo" /></p>
    
    
    <p><label> REBOBINADO: Core</label>
    <select name="tipoCore" id="select-tipoCore" onchange="Rebobinado();">
      <option value="0">Select</option>
      <option value="0.03782">3"</option>
      <option value="0.1037">1.5"</option>
      <option value="0.1037">1"</option>
    </select>
    Costo Core<input type="number" id="CostoCore" />
    Costo Total Core<input type="number" id="CostoTotalCore" />
    
    
    <p><label> LAMINADO:</label> <!-- <input type="text" id="LaminadoCosto" /> -->
    <label> Costo Total Laminado</label> <input type="text" id="LaminadoTotal" /></p>
    
  </body>

  <script>
    
    
    function sum() {
        
      let sumCantidad = 0;
      let sumCostoTinta = 0;
      $(".row-item").each(function () {
        const thisCantidad = Number($(this).find("#cantidad").first().val());
        const thisCostoTinta = Number($(this).find("#CostoTinta").first().val());

        sumCantidad += thisCantidad;
        sumCostoTinta += thisCostoTinta;
      });

      $("#sum-cantidad").text(sumCantidad);
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
      }  
  </script>
</html>
