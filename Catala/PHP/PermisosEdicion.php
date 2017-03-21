<?php
function CompruebaPermisosEdicion()
{
	if ($_SESSION["Edicio"]=="1")
	{
?>
		<script>
			$('#DIVButtonEditContingut').show();
			$('#ButtonAddDirectori').show();
			$('#ButtonAddPublicacions').show();
        </script>
<?php
	}
}
?>
