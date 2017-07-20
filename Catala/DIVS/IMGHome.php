<?php
function MostraIMGHome()
{
?>
	<script src="JS/IMGHome.js" type="text/javascript"></script>
 
	<div class="" id="DIVIMGHome1" style="vertical-align:top; height:250px;  width:100%;position:absolute; " align="center"></div>
	<div class="" id="DIVIMGHome2" style="vertical-align:top; height:250px; width:100%;position:absolute;" align="center"></div>
    <div id="DIVEditIMGHome" style="vertical-align:top; height:250px; width:444px;">
    	<table width="100%" cellspacing="0" cellpadding="0" border="0">
        	<tr>
            	<td align="left">
                	<form  ENCTYPE="multipart/form-data" id="FormPujaNewIMGHome" name="FormPujaNewIMGHome" method="post" action="PHP/UploadFiles.php?op=1" target="IframePujaNewIMGHome">
            		   	<input type="file" id="NewIMGHomeName" name="NewIMGHomeName" onChange="AddNewIMGHome(this.value)" style="display:none">
	                	
                    <h3><span class="glyphicon glyphicon-plus-sign " aria-hidden="true" onClick="NewIMGHomeName.click();"></span></h3>
                        
                    </form>
                    <iframe name="IframePujaNewIMGHome" style="display:none"></iframe>  
                </td>
            </tr>
            <tr>
            	<td>
                	<div id="DIVIdGestioIMGHome" style="height:250px; overflow-x:auto; overflow-y:hidden; max-width:100%;	"></div>
                </td>
            </tr>
        </table>
    </div>
<?php
}
?>