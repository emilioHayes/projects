<head>
<meta charset="UTF-8">
    <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
   <script language="javascript">

				
			function convertir(){
				var f = document.getElementById("formulario");
				var archivo= document.getElementById("archivo");
				
				if(archivo.value=="")
				{
					alert("Selecciona un archivo xml");
				}
				else{
						var cadena= archivo.value;
                        var cadena1=cadena.length;
                        var final=(cadena1) - 4;
                        var subcadena=cadena.substring(cadena1,final); 
                        var extension=subcadena.toLowerCase();
                       if((extension!=".xml")  ){
                                alert("Solo se aceptan archivos XML");

                                }
                        else{
                                f.submit();
                                }
                        }}
			
				
				    $(document).ready(function(){

        // Cuando se modifique el input type=file

        $(".custom-input-file input:file").change(function(){

            if($(this).val())

            {

                // Si tiene valor, se muestra en el class .files

                $(this).parent().find(".files").html($(this).val());

            }else{

                // Si no tiene valor, se muestran los puntos ...

                $(this).parent().find(".files").html("...");

            }

        });

    });
	
    </script>
<style>
body {
	font-family: 'Gill Sans', arial, serif; 
	line-height: 1em;
	color:#333;
	background-color:#f5f7f7 ;
	font-size:  12px;

}
.grupo
{
	position: absolute;
	left: 0;
	right: 0;
	top:20px;
	margin:0 auto;
	text-align:center;
}

.contenido
{
	display:inline-block;
	margin:0 auto;
	padding:5px;
	width:900px;
	//border:1px solid lightgray;
}

.columna1
{
	float:left;
	width:312px;
	height:515px;
	border-top:1px solid lightgray;
	border-bottom:1px solid lightgray;
	//border-left:1px solid lightgray;
	border-right:1px solid lightgray;
	padding:5px;
	background:white;
	}
.columna2
{
	float:left;
	width:575px;
	background:white;
	border:1px solid lightgray;
	//padding:5px;
	//background-clip:content-box;
}

.encabezado{
	
	margin:0 auto;
	text-align:left;
	//border:1px solid lightgray ;
	width:875;
}


.convertidor{
    width:100%;
	float:left;
	//border:1px solid lightgray ;
	text-align:center;
	border-radius:2px;	
}

.encabezados
{
	text-align:center;
	font-size:15px;
	//font-weight:bold;
	//border-bottom:1px solid lightgray;
	padding:10px;
}

.parrafo
{
	font-size:16px;
	//border:1px solid brown;
}
	
.fb-comments{
	//border:1px solid black;
	margin:0 auto;
	border-radius:3px;
}

.fb-like
{
	margin:0 auto;
	border:1px solid gray ;
}

.myButton {
	-moz-box-shadow:inset 0px 1px 0px 0px #cf866c;
	-webkit-box-shadow:inset 0px 1px 0px 0px #cf866c;
	box-shadow:inset 0px 1px 0px 0px #cf866c;
	background-color:#d0451b;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #942911;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	font-weight:bold;
	padding:6px 23px;
	text-decoration:none;
	text-shadow:0px 1px 0px #854629;
}
.myButton:hover {
	background-color:#bc3315;
}
.myButton:active {
	position:relative;
	top:1px;
}

.p{
line-height: 20px;
text-align: justify;
font-size:15px;
padding:8px
}

.pie
{
	width:886px;
	border:1px solid lightgray;
	text-align:left;
	//padding-left:5px;
	
}

    .custom-input-file {
        float:left;
        overflow:hidden;
        position:relative;
        cursor:pointer;
        width:200px;
      //  border:1px solid #ccc;
        border-radius:5px;
        text-align:center;
        font-family:Arial;
        font-size:12px;
		padding:10px;
		background-color:#16d76e;
		color:white;
		font-weight:bold;
    }

    .custom-input-file:hover {
        background-color:#00ab4e;
    }

    .custom-input-file input[type=file] {
        margin:0;
        padding:0;
        outline:0;
        font-size:10000px;
        border:10000px solid transparent;
        opacity:0px;
        filter:alpha(opacity=0);
        position:absolute;
        right:-1000px;
        top:-1000px;
        cursor:pointer;
    }

    .files {
        font-size:9px;
    }
        
</style>
	</head>
	<body>


	<div class="grupo">
	<div class="contenido">

<div class="encabezado"><h1>XML A <label style="color:brown;font-weight:bold">PDF</label></h1></div>
<div style="padding:3px;" align="right"><a href="index.php">Inicio </a> | <a href="contacto.php"> Contactanos</a></div>
<div class="columna2">

<h3 style="font-weight:normal">
¿Necesitas el PDF de tu factura electronica y sólo tienes el archivo XML?</h3><br>
<h2 >Conversion de tus facturas CFDI de XML A PDF, fácil y rapido!
</h2>
<img src="imagen.png"/>
<p class="p">XML A PDF es un servicio en linea  que te permite generar la representacion impresa de un cfdi a partir del archivo xml, ya sea por extravio del archivo pdf o simplemente por cambiar el diseño del mismo.<br>Dentro de un archivo xml(cfdi) existe toda la informacion necesaria para generar un archivo PDF  </p>
<table align="center" ><tr><td align="center">
    <form action="a.php" method="post" enctype="multipart/form-data" id="formulario" name="formulario">

        <div class='custom-input-file' >

            <input type="file" name="archivo" id="archivo">
            Selecciona tu factura .xml
			   <div class="files"></div>
        </div><br><br><br>
	<!--<label style="font-size:14px;font-weight:bold;">Titulo Comercial (opcional)</label><br> 
		<input type="text" name="titulo_comercial" size="30" placeholder="Ejemplo: Refaccionaria Gutierrez"/><br><br><br>-->
		<!-- <input type="file" name="img" value="Selecciona un logotipo" /><br><br>-->
        <input class="mybutton" type="button" class="button" onClick="convertir()" value="Convertir a PDF" />
</td></tr>
    </form></table>

</div>

	<div class="columna1">

<div class="encabezados" align="left"></label>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- PUBLICIDADLATERAL -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-2627601814451239"
     data-ad-slot="8433073504"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div><br><br>

</div></div>
<div style="font-size:10px;">© 2016 HS SOLUCIONES | <a style="text-decoration:none;" href="">Acerca de xmlapdf</a>  | <a style="text-decoration:none;" href="contacto.php">Contacto</a></div></div>
</body>