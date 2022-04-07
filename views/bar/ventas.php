<div class="row py-2" style="background:#EFECF9;">
    <div class="col-12 text-left">
        <h5 style="color:#384DB9;font-weight:bold;font-size: 70px;">Ventas</h5>
    </div>
</div>
<div class="row">

    <div class="col-12">
        <div class="row">
            <div class="col-4" id="versemana" style="background:#009FFF;" >
                <a onclick="versemana()"  id="versemanabtn" style="text-decoration:none;font-family: 'Inter';font-style: normal;font-weight: 500;color: #363841;font-size: 70px;">Semana</a>
            </div>
            <div class="col-4" id="vermes" style="background:#009FFF;">
                <a onclick="vermes()"   style="text-decoration:none;font-family: 'Inter';font-style: normal;font-weight: 500;color: #363841;font-size: 70px;">Mes</a>
            </div>
            <div class="col-4"  id="verano" style="background:#009FFF;">
                <a onclick="verano()"  style="text-decoration:none;font-family: 'Inter';font-style: normal;font-weight: 500;color: #363841;font-size: 70px;">Año</a>
            </div>
        </div>
        <div class="row " style="display: none;" id="estadisticasversemana">
            <div class="col-12" >
                    <?php if(isset($ventassemana) && sizeof($ventassemana)>0):;?>
                    <?php $count=1;$total=0.00;?>

                    <?php foreach($ventassemana as $venta):;?>

                    <div class="row bg-white text-dark py-2" style="border-bottom:3px solid #000000 ;">
                        <div class="col-2 text-center"  style="background: #EFEEEE;">
                            <?= $count;?>
                        </div>
                        <div class="col-2">
                            <?= $venta['nombre'];?>
                        </div>
                        <div class="col-2">
                        <?= "(cant.:".$venta['cantidad'].")";?>
                            <?php $count=$count+1;$total=$total+($venta['cantidad']*$venta['precio']);?>

                        </div>
                    </div>
                    <?php endforeach;?>
                    <div class="row bg-white text-dark py-2" style="border:3px solid #000000 ;">
                        <div class="col-3 offset-9">
                            <?= "Total: $".$total;?>
                      
                    </div>
                    <?php endif;?>
            </div>
        </div>
        </div>
        <div class="row" style="display: none;" id="estadisticasvermes">
            <div class="col-12" > 
            <?php if(isset($ventasmes) && sizeof($ventasmes)>0):;?>
                    <?php $count=1;$total=0.00;?>

                    <?php foreach($ventasmes as $ventames):;?>

                    <div class="row bg-white text-dark py-2" style="border-bottom:3px solid #000000 ;">
                        <div class="col-2 text-center" style="background: #EFEEEE;">
                            <?= $count;?>
                        </div>
                        <div class="col-2">
                            <?= $ventames['nombre'];?>
                        </div>
                        <div class="col-2">
                        <?= "(cant.:".$venta['cantidad'].")";?>
                            <?php $count=$count+1;$total=$total+($ventames['cantidad']*$ventames['precio']);?>

                        </div>
                    </div>
                    <?php endforeach;?>
                    <div class="row bg-white text-dark py-2" style="border:3px solid #000000 ;">
                        <div class="col-3 offset-9">
                            <?= "Total: $".$total;?>
                      
                    </div>
                    <?php endif;?>
            </div>
        </div>
        </div>
        <div class="row " style="display: none;" id="estadisticasverano">
            <div class="col-12">
            <?php if(isset($ventasano) && sizeof($ventasano)>0):;?>
                    <?php $count=1;$total=0.00;?>

                    <?php foreach($ventasano as $venta):;?>

                    <div class="row bg-white text-dark py-2" style="border-bottom:3px solid #000000 ;">
                        <div class="col-2 text-center"  style="background: #EFEEEE;">
                            <?= $count;?>
                        </div>
                        <div class="col-2">
                            <?= $venta['nombre'];?>
                        </div>
                        <div class="col-2">
                            <?= "(cant.:".$venta['cantidad'].")";?>
                            <?php $count=$count+1;$total=$total+($venta['cantidad']+$venta['precio']);?>

                        </div>
                    </div>
                    <?php endforeach;?>
                    <div class="row bg-white text-dark py-2" style="border:3px solid #000000 ;">
                        <div class="col-3 offset-9">
                            <?= "Total: $".$total;?>
                      
                    </div>
                    <?php endif;?>
            </div>
        </div>
    </div>

<script type="text/javascript">
    function versemana(){
        document.getElementById("estadisticasversemana").style.display="block"
        document.getElementById("estadisticasvermes").style.display="none"
        document.getElementById("estadisticasverano").style.display="none"
        document.getElementById("versemana").style.backgroundColor='#97D6FD';
        document.getElementById("vermes").style.backgroundColor='#009FFF'; 
        document.getElementById("verano").style.backgroundColor='#009FFF'; 

           }
           function vermes(){
        document.getElementById("estadisticasvermes").style.display="block"
        document.getElementById("estadisticasversemana").style.display="none"
        document.getElementById("estadisticasverano").style.display="none"
        document.getElementById("vermes").style.backgroundColor='#97D6FD';
        document.getElementById("versemana").style.backgroundColor='#009FFF'; 
        document.getElementById("verano").style.backgroundColor='#009FFF'; 

           }
           function verano(){
        document.getElementById("estadisticasverano").style.display="block"
        document.getElementById("estadisticasvermes").style.display="none"
        document.getElementById("estadisticasversemana").style.display="none"
        document.getElementById("verano").style.backgroundColor='#97D6FD';
        document.getElementById("vermes").style.backgroundColor='#009FFF'; 
        document.getElementById("versemana").style.backgroundColor='#009FFF'; 

           }
           window.addEventListener("load",iniciar)

              function iniciar(){
                document.getElementById("versemana").style.backgroundColor='#97D6FD';

                document.getElementById("versemanabtn").click();

            }
</script>