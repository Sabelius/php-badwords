<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Bad Words</title>
</head>
<body>
    
<?php $paragrafo ="''Io ne ho viste cose che voi umani non potreste immaginarvi:
navi da combattimento in fiamme al largo dei bastioni di Orione,
e ho visto i raggi B balenare nel buio vicino alle porte di Tannhäuser.
E tutti quei momenti andranno perduti nel tempo,
come lacrime nella pioggia.
È tempo di morire.''"?>

<h1 class="text-center">Monologo Blade Runner: </h1>
<p class="text-center">
    <?php 
         echo $paragrafo; 
    ?>
</p>

<h2 class="pt-5">Lunghezza paragrafo: 
    <?php 
        echo strlen($paragrafo); 
    ?> 
    bytes
</h2>

<?php $censura = $_GET["censura"] ?>

<h1 class="text-center pt-5">Monologo Blade Runner censurato: </h1>
<p class="text-center">
    <?php 
        echo str_replace($censura, "***", $paragrafo);
    ?>
</p>

<h2 class="pt-5">Lunghezza paragrafo: 
    <?php 
        echo strlen(str_replace($censura, "***", $paragrafo)); 
    ?> 
    bytes
</h2>
    
</body>
</html>