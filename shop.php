<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <link rel="stylesheet" href="style.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<?php
 $regione=strtolower($_POST['regione']);
 
         if ($regione=='abruzzo') {header("Location: https://bevilacquasport.it/24-strada");exit;}
    elseif  ($regione=='basilicata') {header("Location: https://facebook.com/BikecenterPotenza/");exit;}
    elseif  ($regione=='calabria') {header("Location: https://ciclijiriti.it/");exit;}
    elseif  ($regione=='campania') {header("Location: https://www.bikelabsalerno.it/");exit;}
    elseif  ($regione=='friuli') {header("Location: https://www.xzonebikeservice.it/bike-mtb-service-friuli/");exit;}  
    elseif  ($regione=='emilia') {header("Location: https://www.biciclette.modena.it/");exit;} 
    elseif  ($regione=='lazio') {header("Location: https://www.ciclifatato.com/bici-da-strada");exit;} 
    elseif  ($regione=='liguria') {header("Location: https://www.oddonebici.com/categoria-prodotto/usato/bici-da-strada-usato/");exit;}
    elseif  ($regione=='lombardia') {header("Location: https://www.morottisolociclismo.it/collections/bici-da-corsa");exit;}
    elseif  ($regione=='marche') {header("Location: https://www.cingolanibikeshop.com/biciclette/corsa/");exit;}
    elseif  ($regione=='molise') {header("Location: https://ciclistore.it/");exit;}
    elseif  ($regione=='piemonte') {header("Location: https://ciclidrigani.it/");exit;}
    elseif  ($regione=='puglia') {header("Location: https://www.giulianibikestore.it/");exit;}
    elseif  ($regione=='sardegna') {header("Location: https://it-it.facebook.com/bicicentersrl/");exit;}
    elseif  ($regione=='sicilia') {header("Location: https://it-it.facebook.com/biciesport/");exit;}
    elseif  ($regione=='toscana') {header("Location: https://www.lenzibike.it/corsa");exit;}
    elseif  ($regione=='trentino') {header("Location: https://www.freewheelbike.com/product-list/bikes-1000/road-1001/");exit;}
    elseif  ($regione=='umbria') {header("Location: https://www.montanabike.com/biciclette/professional/");exit;}
    elseif  ($regione=='valdaosta') {header("Location: https://www.trekbikes.com/it/it_IT/bikes/bici-da-corsa/c/B200/");exit;}
    elseif  ($regione=='veneto') {header("Location: https://www.cicliargentin.it/");exit;}
 else {echo '<p style="margin:20px"><b>regione inserita non corretta!<br><br>
        <a href="shop.html">Torna indietro</a></p>';}


?>