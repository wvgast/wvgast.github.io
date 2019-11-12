<html lang="pt_BR" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="icon/icon.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/navbar.css">
    
</head>
<!--Barra de navegação-->
<!--<div id="navigation"></div>-->

<?php 
include ('navbar.html');
$pagina = filter_input(INPUT_GET, 'page') ?: 'home';
include ("page/$pagina.html");

include ('footer.html');
?>

<!--<div id="footer"></div>-->


<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
        //Carregando a barra de navegação
        $("#navigation").load("navbar.html");
        $("#footer").load("footer.html");
    });
</script>

</html>