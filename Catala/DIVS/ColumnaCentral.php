<?php
function MostraColumnaCentral()
{
?>
<div id="main" class="content">
    <DIV id="DIVRutaPage" ></DIV>
    
    <div class="contingut width-adjust">
        <h2 id="DIVTitolPage" class="section-title col-xs-12 margin-top " aria-level="2" role="heading"></h2>
        <DIV align="right" id="DIVButtonEditContingut" style="display:none;">
            <input type="button" id="ButtonEditContingut" />
        </DIV>
        <DIV id="DIVContingutPage"></DIV>
        <DIV id="DIVEditaContingutPage" style="display:none;">
                <input id="IdLinMenuActual" type="hidden" name="IdLinMenuActual"/>
                <textarea id="TAContingut" name="TAContingut"></textarea>
              
                <?php //MostraPujaImatge(); ?>
                <div align="center">
                    <input type="button" id="ButtonCancelaContingut" value="Cancelar" onclick="CancelaEditCont();">
                    <input type="button" id="ButtonTAContingut" value="Guardar" />
                 </div>
        </DIV>
        
    </div>
</div>


<?php 
}
?>