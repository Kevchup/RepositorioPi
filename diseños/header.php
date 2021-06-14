<header>
		<div class="logo-place"><a href="index.php"><img src="imagenes/gbtranding.png"></a></div>
		<div class="search-place">
			<input type="text" id="idbusqueda" placeholder="Encuentra todo lo que necesitas..." value="<?php if(isset($_GET['text'])){ echo $_GET['text'];}else{ echo '';} ?>">
			<button class="btn-main btn-search" onclick="search_producto()"><i class="fa fa-search" aria-hidden="true"></i></button>
		</div>
		<div class="options-place">
		<?php
		if(isset($_SESSION['ID_P'])){
			
			echo 
			'<div class="item-option"><i class="fa fa-user-circle-o" aria-hidden="true"><a href="publicacion.php"></i>
			<p>'.$_SESSION['nombre'].'</a></p>
			
			</div>'
			;
			
			echo '<div class="item-option" title="CERRAR SESION"><a href="login.php">
			<i class="fa fa-sign-out" aria-hidden="true"></i></a></div>
			';
            
				
		}else{
		?>
		<div class="item-option" title="Registrate"><i class="fa fa-user-circle-o" aria-hidden="true"></i></div>
		<div class="item-option" title="Ingresar"><i class="fa fa-sign-in" aria-hidden="true"></i></div>
		<?php	
		}
		?>
		</div>
		
</header>
