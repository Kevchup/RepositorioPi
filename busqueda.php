<?php
session_start();
if (!isset($_SESSION['ID_P'])) {
    header("location: login.php");
}
?>
<SCRIPT LANGUAGE="JavaScript">
//history.forward()
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
	<?php include("diseños/header.php"); ?>
	<div class="main-content">
		<div class="content-page">
			<div class="title-section">Resultados para <strong>"<?php echo $_GET['text']; ?>"</strong></div>
			
			<div class="products-list" id="space-list">
				
			</div>
		</div>
	</div>
	<script type= "text/javascript" src="js/main-scripts.js"></script>
	<script type="text/javascript">
        var x="<?php echo $_GET['text']; ?>";
        $(document).ready(function(){
        $.ajax({
            url: 'servicios/publicaciones/allresul.php',
            Type: 'POST',
            data:{
                text:x
            },
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
                if(html==''){
                    document.getElementById("space-list").innerHTML="No hay resultados"; 
                }else{
                     document.getElementById("space-list").innerHTML=html; 
                }
              
			    
            },
            error:function(err){
                console.error(err);
        }
    });
        });
   
    </script>
</body>
</html>