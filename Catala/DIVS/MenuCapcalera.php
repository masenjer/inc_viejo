<?php
function MostraMenuCapcalera()
{
?>

    	
        
        <div class="pull-right DivCerca vcenter">
            <div class="panel panel-default" id="ResultatCerca" style="position: absolute; width: 300px; height: 90%; overflow: auto; z-index: 1000; display: none; margin-top:50px;" align="left">
            </div>
            <div>
              
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Searcher" id="TextCerca" onkeyup="Cercador();" onblur="">
                </div>
                 
            
            </div>
        </div>
        <div class="pull-right BarraIdioma">
           <a href="../English/" style="text-decoration:none; border:none;"><img src="img/Flags/LangEng.jpg" width="25px" style="border:none;" title="English" /></a>
           <a href="../Castellano/" style="text-decoration:none; border:none;"><img src="img/Flags/LangEsp.jpg" width="25px" style="border:none;" title="Espa&ntilde;ol" /></a>
           <a href="../Catala/" style="text-decoration:none; border:none;"><img src="img/Flags/LangCat.jpg" width="25px" style="border:none;" title="Catal&agrave;" /></a>
        </div>
<?php
}
?>
