<?php
function MostraHome()
{
?>
<div id="DIVHome">
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr valign="top">
        	<td colspan="2" style="padding-left:15px; padding-top:15px;"><?php MostraIMGHome(); ?></td>
            <td width="200px" style="padding-right:15px; padding-top:15px;" valign="top"><div id="ContHomeListDestacats"></div></td>
        </tr>
        <tr valign="top">
            <td rowspan="3" valign="top" style="padding-left:15px;"><?php MostraPartEsquerraHome();?>
</td>
            <td style="padding-right:15px;" width="181px" valign="top" height="10px"><?php MostraPartCentralHome ();?></td>
            <td width="200px" style="padding-right:15px;" valign="top" height="10px"><?php MostraPartDretaHome ();?></td>
        </tr>
        <tr>
            <td colspan="2" align="right">
                <table width="100%">
                    <tr>
                        <td colspan="4" class="fuenteTitolContingut ">
                            Segueix-nos a:
                        </td>
                    </tr>
                    <tr>
        <!--                <td style="width:56px"><img src="img/rss-syndicate.png" style="width:45px" /></td>
        -->             <td align="left" ><a href="https://www.facebook.com/INcuab" target="_blank"><img src="img/facebook.png" style="width:45px; border:none;" /></a></td>
                        <td  align="center"><a href="https://twitter.com/INC_UAB" target="_blank"><img src="img/twitter.png" style="width:45px; border:none;" /></a></td>
                        <td align="right"><a href="http://www.scopus.com/affil/profile.url?afid=60104667&offset=1&sid=171A41E8C797E54E2A2A8F174996C47A.WlW7NKKC52nnQNxjqAQrlA%3a120&origin=AffiliationNamesList&txGid=171A41E8C797E54E2A2A8F174996C47A.WlW7NKKC52nnQNxjqAQrlA%3a14 " target="_blank"><img src="img/scopus.jpg" style="width:45px; border:none;" /></a></td>
                        <td  align="center"><a href="https://ddd.uab.cat/collection/inc?ln=ca" target="_blank"><img src="img/ddd_logo.jpg" style="height:45px; border:none;" /></a></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
        	<td colspan="2" style="padding-right:15px; padding-bottom:15px;">
            	<iframe src="https://player.vimeo.com/video/120680522" width="402" height="226" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
            </td>
        </tr>
        <tr>
        	<td colspan="3" style="padding-left:15px; padding-right:15px;"><div id="NOTHistoric" style="vertical-align:top; width:100%"><?php include ("PHP/NoticiesCarregaContingutHistoricDirecte.php"); ?> </div></td>
        </tr>
    </table>
</div>
<?php
}
function MostraPartEsquerraHome()
{
?>
<table width="100%" cellpadding="0" cellspacing="0" style=" border-spacing:0px;" >
    <tr>
    	<td colspan="3" height="25px"  >
        	<table width="100%" cellpadding="0" cellspacing="0" border="0" style=" border-spacing:0px;" >
            	<tr>
                	<td class="TitolHome" style="width:83px;height:25px;">
                    	<div style="width:83px;height:20px; vertical-align:middle; background-image:url(img/CapcaRelleu2.png); padding-top:5px; padding-left:5px;">
                        	NOT&Iacute;CIES
                        </div>
                    </td>
                    <td width="100%" bgcolor="#d7d5d6" style="border: 1px solid #d7d5d6;">
                    	<div style="width:100%;height:25px; background-image:url(img/CapcaRelleu2.png); padding-left:5px; text-align:right "><a href="News.php" class="fuenteTitolContingut" style="padding-right:30px;" title="Veure totes les notícies publicades">+ Notícies</a></div></td>                                        
                </tr>
            </table>
        </td>
    </tr>
    <tr>
    	<td height="15px" colspan="2"></td>
    </tr>
    <tr>
        <td height="230px" valign="top" style="padding-right:15px;"><div id="NOT" style="vertical-align:top; width:100%"><?php include ("PHP/NoticiesCarregaContingutDirecte.php"); ?> </div></td>
    </tr>
</table>
<?php
}


function MostraPartCentralHome()
{
?>
<table cellpadding="0" cellspacing="0" style=" border-spacing:0px;" >
    <tr>

      <td height="25px" bgcolor="#a81f24"  class="TitolHome">
          <div style="height:20px; vertical-align:middle; background-image:url(img/CapcaRelleu.png); padding-top:5px; padding-left:5px; background-repeat:repeat-x">
              DESTACATS
          </div>
      </td>
                                        
               
    </tr>
    <tr>
    	<td height="15px" colspan="2"></td>
    </tr>
    <tr>
        <td width="188px" valign="top" align="right">
            <table cellpadding="0" cellspacing="0" border="0">
				<tr>
                	<td valign="top"><div id="ContHomeListEnDir" align="right"></div></td>
                </tr> 
              	<tr>
                	<td height="15px"></td>
                </tr>
                <tr valign="top">
                	<td >
                        
                    </td>
                </tr>          
            </table>
        </td>
    </tr>
</table>
<?php
}
?>
<?php
function MostraPartDretaHome()
{
?>
<table width="100%" cellpadding="0" cellspacing="0">
  <tr>
  </tr>
  <tr>
  	<td valign="top"><div id="ContHomeContacte"></div></td>
  </tr>
  <tr>
  	<td height="15px"></td>
  </tr>
</table>
<?php
}?>
