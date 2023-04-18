<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practica1</title>
    <script src="jquery-3.3.1.js"></script>
    <script>
        $(document).ready(function(){
            $('p.clasdiv, h1').text("<b>DSM-50</b>");
            $('#idp').html("<b>DSM-50</b>");
            $('p.clasdiv').css('color', 'yellow');
            $('p.clasdiv').css('background', 'black');
            $('p.class2').text("<b>DSM-50</b>");
            $('p.class2').css({'color':'blue', 'font-size':'1.3em'});
            
        });
    </script>
</head>
<body>
    <h1>-- -- --</h1>
    <div class="clasdiv"></div>
    <p id='idp'></p>
    <div>-- Contenido de DIV --</div>
    <p class="class2">--Contenido de Parrafo --</p>
    <p class="clasdiv"></p>
</body>
</html>