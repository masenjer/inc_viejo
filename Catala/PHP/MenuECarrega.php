<?php



error_reporting (5); 
include("../rao/sas_con.php"); 

ini_set('session.cache_expire',3);
ini_set("session.gc_maxlifetime",3);
session_start();

$idCap = $_GET["n"];

$sub = false;

$SQL = "SELECT Titol FROM CapMenu WHERE IdSite =".$_SESSION["IdSite"]." AND IdCapMenu = ".$idCap;
$result = mysql_query($SQL,$oConn);
while ($row = mysql_fetch_array($result))
{
	$TitolCap = $row["Titol"];
}

$SQL = "SELECT * FROM LinMenu WHERE IdSite =".$_SESSION["IdSite"]." AND IdCapMenu = ".$idCap." AND IdLinMenuRel = 0 AND Tipus <> 2  order by orden";
$result = mysql_query($SQL,$oConn);

echo '

<div class="sidebar menu-left">
		<div class="navbar">



  	<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed ico" data-toggle="collapse" data-target="#navbar-sidebar" aria-expanded="false" aria-controls="navbar">
	    <span class="ico hamburguer" aria-hidden="true"></span>
        <span class="sr-only">Prem per desplegar el menú de  null</span>
      </button>
      
	  
			
	  	  
    <span class="visible-xs visible-sm navbar-brand">Estructura docent</span>
    </div>


<nav id="navbar-sidebar" class="navbar-collapse collapse sidebar-navbar-collapse" role="navigation">
    	<nav id="nav-context" class="menu-content" role="navigation" aria-label="Menú principal"><!-- UAB2013/Responsive_WD/Common/CSElementDisplayLeftMenu_RWD 8-->

			<div class="aside-nav-content">
			    <div role="tab" id="id_1" class="title">
					<a aria-controls="collapseC0" aria-expanded="true" href="#collapseC0" data-parent="#accordion" data-toggle="collapse" role="button">
						'.$TitolCap.'
						<span class="ico down" aria-hidden="true"></span>
				    </a>
				
				</div>
					<div id="collapseC0" class="collapse in" role="tabpanel" aria-labelledby="id_1">
						<ul>

';

while ($row = mysql_fetch_array($result))
{
	if ($_SESSION["Creacio"]=="1")
	{
		$accion = '

			<div class="row">
				<div class="col-md-2">
					<button class="EditButton" onClick="EditaTitolLPage('.$row["IdLinMenu"].')"/>			
				</div>
				
				<div class="col-md-2">	<input class="OrdenML" type="text"  id="OrdenME'.$row["IdLinMenu"].'" value="'.$row["Orden"].'"  onKeyPress="submitenter(5,event,'.$row["IdLinMenu"].');" >
				</div>

				<div class="col-md-2">	<button class="LinMenuDeleteButton" onClick="MostraEliminaTOT(1,'.$idCap.','.$row["IdLinMenu"].');"/>
				</div>				
				
			</div>';

		echo '
	
			<input type="hidden" id="tdMEAntic'.$row["IdLinMenu"].'" value="'.$row["Titol"].'">
			<input type="hidden" id="tdMEhrefAntic'.$row["IdLinMenu"].'" value="'.$row["Titol"].'_'.$row["IdLinMenu"].'_1">
		';
	}
	
	
		
	if ($row["Tipus"] == 1) //Página de contenido
	{	
		echo '  
		<li  class="no-sub">
			<a href = "index.php#!/'.$row["Titol"].'_'.$row["IdLinMenu"].'_1">
				<div id="tdME'.$row["IdLinMenu"].'"><div id="DIVTitolLPage'.$row["IdLinMenu"].'">'.$row["Titol"].'</div></div>
			</a>'.$accion.'
		</li>';
	}
	else //Página de título
	{
		if ($sub){
			echo '</ul></li>';
		}

		echo '
		<li class="sub">
			
			<a href="#collapse3_deep'.$row["IdLinMenu"].'" data-toggle="collapse" data-parent="#collapse3_deep0" aria-expanded="false" class="collapsed"><div id="tdME'.$row["IdLinMenu"].'"><div id="DIVTitolLPage'.$row["IdLinMenu"].'">'.$row["Titol"].'</div></div> <span class="ico mes"></span></a>
			'.$accion.'
			<ul id="collapse3_deep'.$row["IdLinMenu"].'" class="collapse" style="height: 0px;" aria-expanded="false">
		';

		$sub = true;
	}
	
	
			
	

}

mysql_close($oConn);


		
if ($_SESSION["Creacio"]=="1")
{
	$resultado = $resultado . 
	'	<tr>
			<td height="8px"></td>
		</tr>
		<tr valign="bottom">
			<td colspan="5" align="right">
				<img id="ImageML" src="img/TitolButton.jpg" onClick="NovaLPageTitol('.$idCap.',0);" title="Nou T&iacute;tol"><img id="ImageML" src="img/plus.jpg" onClick="NovaLPage('.$idCap.',0)" title="Nova P&agrave;gina">
			</td>
		</tr>';
		
}

if ($sub){
			echo '</ul></li>';
		}

echo '					</ul>
					</div>
				</div>
			</nav>	   
	</nav>
	</div>
	</div>';
?>

