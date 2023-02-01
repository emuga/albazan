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
        
        //Se declara la constante del costo por negativo
        var CostoNeg = 6.25;
        var CostoTotalNegativo = CostoNeg * Number(document.getElementById("NoTintas").value);
        document.getElementById("CostoTotalNegativo").value = CostoTotalNegativo;
        
        laminado();
      }
      
      
      
    </script>
    <style>
      .camu {
        color: blue;
      }
    </style>
    
    <?php
    
        
    
        
    
    ?>
    
    <script type="text/javascript">
        
        function buscar(){
            //var opcion = document.getElementById('names').value;
            //window.location.href = 'https://www.triaddstudio.com/i/albazan/etiquetas?opcion='+opcion;
        }
    </script>

<form role="form" method="post" enctype="multipart/form-data">
    
    <div class="content-wrapper">
        
        <section class="content">
            
            <div class="box-body">
        
                <div class="form-row">
            
                    <div class="form-group">
                
                        <label>Tamaño de etiqueta</label>
                
                            <select onchange="return buscar();" name="names" id="names">
                                <option value=""></option>
                    
                                <?php

                                    $item = null;
                                    $valor = null;
                                

                                    $dados = ControladorDados::ctrMostrarDados($item, $valor);
                                    
                                    if(isset($_GET["opcion"])){
            
                                         $stmt = $dados->prepare('SELECT * FROM dados WHERE id=:id');
                                         $stmt->bindParam(':id', $_GET['opcion']);
            
                                    }
                                    
                                    //print_r($dados[3]['finalx']);
                                    print_r($dados);
                                    //print_r($dados['localstorage']['finalx']);

                                    foreach ($dados as $key => $value) {
                    
                                        echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';
                                        
                                    }

                                ?>
                    
                            </select>
                            
                            <label>Y(cabeny)</label> 
                            
                            <?php
                            
                                if(isset($dados)){?>
                                
                                     <input type="text" value="<?php echo $dados[0]['cabeny'] ?>" />
                                
                            <?php
                                
                                }else{?>
                                
                                 <input type="text" value="" />
                                
                                <?php
                                    
                                    
                                }
                                
                            ?>
                
                            <input type="text" value="<?php echo $dados[0]['cabeny'] ?>" />
                            
                        <label>Total de tintas</label>
                        
                        <input type="number" name="totalTinta" step="any" min="0">
                        
                        <input type="button" name="suma" value="calcular" onclick="operar()" /><br><br>
                
                    </div>
            
                </div>
        
            </div>
            
            <div class="box-body" style="display: none">
                
                <label> Cantidad</label> 
       
                <input type="text" id="cant" name="cant" />
                
                <label> No. de Tintas</label> 
                
                <input type="text" id="NoTintas" name="NoTintas" />
                
            </div>
            
            <div class="box-body" style="display:none ">
                
                <label> TAMA&Ntilde;O FINAL</label><br />
                
                <label>X(finalx)</label>
                
                <input type="text" id="finalx"  name="finalx" />
                
                <label>(finaly)Y</label>i
                
                <input type="text" id="finaly" name="finaly" />
                
            </div>
            
            <div class="box-body" style=" ">
                
                <label> Cuantos caben</label><br />
                
                <label>X(cabenx)</label>
                
                <input type="text" id="cabenx" value="<?php echo $dados[3]['finalx'] ?>" name="cabenx" />
                
                <label> Gap int(GapIntx)</label>
                
                <input type="text" id="GapIntx" name="GapIntx" />
                
                 <label> No Gaps(NoGapsx)</label>
                 
                 <input type="text" id="NoGapsx" name="NoGapsx" />
                 
                <label> Gap ext(GapExtx)</label>
                
                <input type="text" id="GapExtx" name="GapExtx" />
      
            </div>
            
            <div class="box-body" style="display:">
                
                <label> Cuantos caben</label>
                
                <label>Y(cabeny)</label> 
                
                <input type="text" id="cabeny" name="cabeny" />
                
                <label> Gap int(GapInty)</label> 
                
                <input type="text" id="GapInty" name="GapInty" />
                
                <label> No Gaps(NoGapsy)</label> 
                
                <input type="text" id="NoGapsy" name="NoGapsy" />
                
                <label> Gap ext(GapExty)</label>
                
                <input type="text" id="GapExty" name="GapExty" />
                
            </div>
            
            <div class="box-body" style="display:">
                
                
    
                 CALCULADO<br>
    
                <label class="camu" id="dado" name="dado">B(x)"bx"</label> 
                
                <input type="text" id="bx"  />
                
                <label class="camu">A(y)"ay"</label> 
                
                <input type="text" id="ay" />
                
                <label class="camu"> Setup</label> 
                
                <input type="text" id="setup" />
                
                <label class="camu"> MSI</label> 
                
                <input type="text" id="msi" />
                
            </div>
            
            <div class="box-body">
                
                <div class="row" id="tinta-row" style="display: ">
                    
                    <label> Tipo de tinta</label><br />

                <div class="item row-item">
                    
                X(tipoTinta)
                
                    <select name="tipoTinta" id="select-tipoTinta" class="select-tipoTinta">
                        
                        <option value="0">Select</option>
                        <option value="0.02318">CMYK</option>
                        <option value="0.03416">Pantone</option>
                        <option value="0.3087">FLOURESENTE</option>
        
                    </select>

                    <label>(cantidad)</label>
        
                    <input type="number" id="cantidad" />Densidad

                    <select id="select-densidad" class="select-densidad">
          
                        <option value="0">Select</option>
                        <option value="1">Baja</option>
                        <option value="2">Media</option>
                        <option value="3">Alta</option>
                    
                    </select>
                    
                    <button style="float: right" id="add-row-btn">Agregar Tinta</button>
        
                </div>
                
                <div class="box-body" style="display: none">

                    tinta<input type="number" id="valor_select1" />

                    densidad
                    <input type="number" min="1" max="3" readonly id="valor_select2" />

                    Dens valor
                    <input type="number" id="DensValor" />

                    Valor tinta
                    <input type="number" id="ValorTinta" />

                    Costo Tinta <input type="number" id="CostoTinta" />
        
                </div><br>
      
            </div>
            
                <p>Suma cantidad: <span id="sum-cantidad"></span></p>
                
                <p>Costo Total Tintas: <span id="sum-CostoTinta"></span></p>
    
                <p><label> NEGATIVO: Costo total negativo</label> <input type="text" id="CostoTotalNegativo" /></p>
    
                <p><label> LAMINADO: Laminado costo</label> <input type="text" id="LaminadoCosto" />
                
                <label> Laminado total</label> <input type="text" id="LaminadoTotal" /></p>
                
        </div>
            
    </section>
        
</div>

</form>

    <input type="hidden" id="rows-counter" value="0" />

    
    <br />

    

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
          
          var laminado = 0.16;
          var min = 3.84
          var LaminadoCosto = laminado * Number(document.getElementById("msi").value);
        document.getElementById("LaminadoCosto").value = LaminadoCosto;
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
          document.getElementById("LaminadoTotal").value = Number(document.getElementById("LaminadoCosto").value);
        }
          
      }
  </script>
