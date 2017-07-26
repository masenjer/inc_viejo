<?php
function MostraMenuCapcalera()
{
?>
<table width="100%" height="23px" cellpadding="0" cellspacing="5" border="0">
	<tr> 
    	<td width="10px"></td>
    	<td><a rel="styles1" class="styleswitch"><div class="APeca">A</div></a></td>
    	<td><a rel="styles2" class="styleswitch"><div class="AMidi">A</div></a></td>
    	<td><a rel="styles3" class="styleswitch"><div class="AGran">A</div></a></td>
        <td width="20px"></td>
        <td id="Contrast" class="APeca" onClick="TreuEstils();">Contrast + / - </td>
        <td width="118px" align="center"><?php MostraBarraIdioma(); ?></td>
        <td class="APeca" onclick="MostraMapaWeb();">Sitemap</td>
        <td width="20px"></td>
        <td class="APeca" ><a href="http://intranet.uab.es" target="_blank" style="color:#d7d8da;">Intranet</a></td>
        <td width="20px"></td>
        <td class="APeca"><a href="https://siastd.uab.es/pcde/" target="_blank" style="color:#d7d8da;">Directorio UAB</a></td>
        <td width="20px"></td>
        <td class="APeca" align="left">SEARCHER<div id="ResultatCerca" style="position:fixed; width:300px; height:90%; overflow:auto; z-index:1000; display:none" align="left" ></div></td>
        <td width="5px"></td>
        <td class="APeca"><input type="text" class="fuenteContingut" id="TextCerca" onkeyup="Cercador();" onblur= "$('#ResultatCerca').hide('slow')"/></td>
        <td width="5px"></td>
        <td><img src="img/lupa.png" /></td>
        <td width="5px"></td>
        
    </tr>
</table>
<?php
}

function MostraBarraIdioma()
{
?>
<table>
	<tr>
    	<td><a href="../English/" style="text-decoration:none; border:none;"><img src="img/Flags/LangEng.jpg" width="25px" style="border:none;" title="English" /></a></td>
    	<td><a href="../Castellano/" style="text-decoration:none; border:none;"><img src="img/Flags/LangEsp.jpg" width="25px" style="border:none;" title="Espa&ntilde;ol" /></a></td>
    	<td><a href="../Catala/" style="text-decoration:none; border:none;"><img src="img/Flags/LangCat.jpg" width="25px" style="border:none;" title="Catal&agrave;" /></a></td>
    </tr>
</table>
<?php
}
?>
