<?php include('lib/constante.php') ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
            <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
         <div id="contenedor">
        <img src="OR_Logotipo_DuocUC.jpg"  width="400" height="100" >
              <div id="titulo-de-la-Pagina"></div>
       
            <div id="titulo del sitio"></div>
            <div id="MenuPrincipal"> <?php include('menu.php');?></div>
            <div id="contenido"></div>
            
            
        </div>
        
    </body>
    <script>
        $("#ventas_producto").click(function(){
            
            if ($("[id*=subventas_express]").css("display")!="none"){
                $("[id*=subventas_express]").css("display","none");
            }
            else{
                $("[id*=subventas_express]").show();
                $("[id*=subventas_express]").css("display","block");
                
                //id*= significa que todos los puntos que tengan el id especificado podran realizar esa funcion
            }
         });
    </script>
</html>
