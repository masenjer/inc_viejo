<?php
function MostraIMGHome()
{
?>
	<script src="JS/IMGHome.js" type="text/javascript"></script>

	<div id="DIVIMGHome1" style="vertical-align:top; height:129px; width:653px;position:absolute;" align="center"></div>
	<div id="DIVIMGHome2" style="vertical-align:top; height:129px; width:653px;position:absolute;" align="center"></div>
    <div id="DIVEditIMGHome" style="vertical-align:top; height:215px; width:444px;">
    	<table width="100%" cellspacing="0" cellpadding="0" border="0">
        	<tr>
            	<td align="left">
                	<form  ENCTYPE="multipart/form-data" id="FormPujaNewIMGHome" name="FormPujaNewIMGHome" method="post" action="PHP/UploadFiles.php?op=1" target="IframePujaNewIMGHome">
            		   	<input type="file" id="NewIMGHomeName" name="NewIMGHomeName" onChange="AddNewIMGHome(this.value)" style="display:none">
	                	<button class="PlusButton"  onClick="NewIMGHomeName.click();"></button>
                    </form>
                    <iframe name="IframePujaNewIMGHome" style="display:none"></iframe>  
                </td>
            </tr>
            <tr>
            	<td>
                	<div id="DIVIdGestioIMGHome" style="height:175px; overflow-x:auto; overflow-y:hidden; max-width:655px;	"></div>
                </td>
            </tr>
        </table>
    </div>
<?php
}
?>