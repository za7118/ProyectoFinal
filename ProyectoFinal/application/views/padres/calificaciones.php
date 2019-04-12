<div class="col-sm-9 col-lg-9" style="text-align: center;">
<H1 style="position: relative;top: 10px;font-size: 50px;font-weight: bold;font-family: algerian;color:blue;">Calificaciones</h1>    
<div class="container mt-3">
		<div class="card">
			<div class="card-header">
				Archivos existentes
			</div>
			<div class="card-block">
				<div class="row">
				<?php
					if ($dir = opendir($directorio)){
						while ($archivo = readdir($dir)) {
							if ($archivo != '.' && $archivo != '..'){
								//este div es para darle caché y que se vea bien en todos los dispositivos. son clases del nuevo bootstrap -> framewrok css
								echo '<div class="col-sm-3 col-xs-12">';
									
								echo '<a href="descarga.php">Descargar PDF</a>';

								echo '</div>';
							}
						}
					}
				?>
				</div>
			</div>
		</div>

  </div>
