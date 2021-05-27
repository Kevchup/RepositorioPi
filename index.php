<?php
session_start();
?>
<SCRIPT LANGUAGE="JavaScript">
history.forward()
</SCRIPT>
<!DOCTYPE html>
<html>
<head>
	<title>GoldenBerry Trading</title>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
	<header>
		<div class="logo-place"><a href="index.php"><img src="imagenes/gbtranding.png"></a></div>
		<div class="search-place">
			<input type="text" id="idbusqueda" placeholder="Encuentra todo lo que necesitas...">
			<button class="btn-main btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
		</div>
		<div class="options-place">
		<?php
		if(isset($_SESSION['ID_P'])){
			
			echo 
			'<div class="item-option" ><a href="publicacion.php">
			<i class="fa fa-user-circle-o" aria-hidden="true"></i>
			<p>'.$_SESSION['nombre'].'</a></p>
			</div>
			<div class="item-option" title="CERRAR SESION"><a href="login.php">
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
	<div class="main-content">
		<div class="content-page">
			<div class="title-section">Productos destacados</div>
			
			<div class="products-list" id="space-list">
				
			</div>
		</div>
	</div>
	<script type="text/javascript">
        $(document).ready(function(){
        $.ajax({
            url: 'servicios/publicaciones/traerpubli.php',
            Type: 'POST',
            data:{},
            success:function(data){
                console.log(data); 
                let html='';
                for(var i = 0; i < data.datos.length; i++){
                    html+=
                      '<div class="product-box">'+
					'<a href="producto.php?p='+data.datos[i].codigo+'">'+
						'<div class="product">'+
							'<img src="imagenes/'+data.datos[i].imagen+'">'+
							'<div class="detail-title">'+data.datos[i].titulo+'</div>'+
							'<div class="detail-description">'+"Publicado el "+data.datos[i].fecha+'</div>'+
                            '<div class="detail-price">'+data.datos[i].cantidad+' kg</div>'+
                        '</div>'+
					'</a>'+
				'</div>';  
                    
                }
               document.getElementById("space-list").innerHTML=html; 
			    
            },
            error:function(err){
                console.error(err);
        }
    });
        });
   
    </script>
</body>
</html>