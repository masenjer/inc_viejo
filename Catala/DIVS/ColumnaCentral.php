<?php
function MostraColumnaCentral()
{
?>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr>
    	<td valign="top" align="center">
        	<table width="100%" cellpadding="5" cellspacing="0" border="0">
            	<tr>
                	<td height="10px"></td>
                </tr>
                <tr valign="top">
                	<td align="left">
                    	<DIV id="DIVRutaPage" ></DIV>
                    </td>
                </tr>
                <tr>
                	<td height="5px"></td>
                </tr>
                <tr valign="top">
                	<td align="justify">
                    	<DIV id="DIVTitolPage" class="fuenteTitolContingut"></DIV>
                        
                    </td>
                </tr>
          	   <tr>
                	<td>
                    	<DIV align="right" id="DIVButtonEditContingut" style="display:none;">
                        	<input type="button" id="ButtonEditContingut" />
                        </DIV>
                    </td>
                </tr> 
                <tr>
                	<td  align="justify">
                    	<DIV id="DIVContingutPage" class="fuenteContingut" style=" width:100%; text-align:justify;"></DIV>
                        <DIV id="DIVEditaContingutPage" class="fuenteContingut" style="display:none;">
                                <input id="IdLinMenuActual" type="hidden" name="IdLinMenuActual"/>
                                <textarea id="TAContingut" name="TAContingut"></textarea>
                              
                                <?php //MostraPujaImatge(); ?>
                                <div align="center">
                                    <input type="button" id="ButtonCancelaContingut" value="Cancelar" onclick="CancelaEditCont();">
                                    <input type="button" id="ButtonTAContingut" value="Guardar" />
                                 </div>
                        </DIV>
                        <br />
                        <div id="MenuImpresionsContingut" align="right">
                        	
                        	<a href="javascript:void(0);"  class="OpcionsContingut" onclick="ImprimirContingut();">
                            	<img src="img/Impresora.jpg" border="0" />Imprimir
                            </a>
                        	<a href="javascript:void(0);"  class="OpcionsContingut" onclick="MostraFormulariEmail();">
                            	<img src="img/sendmail.jpg" border="0" />Enviar a un amic
                            </a>
                            <br />
                            <a href="javascript:void(0);"  class="OpcionsContingut" onclick="ConvertiraPDF();">
                            	<img src="img/descarga-general.gif" border="0" /> Convertir a PDF
                            </a>
                        </div>
                    </td>
                </tr>
            </table>
        </td><!-- Espai pel menu superior -->
    </tr> 
</table>
<?php 
}
?>