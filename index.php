<?php
    # Text string variables
    $text_string = 'Il testo è:' ;
    $bad_string = 'La parola censurata è:';
    $censored_string = 'Il testo censurato è:';

    # User text variables
    $long_text = $_GET['long-text']; 
    $bad_text = $_GET['bad-text'];

    # Censored text function
    $censored_text = str_replace($bad_text, '***', $long_text) ;

     # String lenght function
     $long_lenght = strlen($long_text);
     $censored_lenght = strlen($censored_text);
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bad Words</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h1>Bad Words</h1>
            <h2><?= $text_string; ?></h2>
            <p><?= $long_text; ?></p>
            <span>Il tuo testo contiene <?= $long_lenght ?> lettere</span>
            <h2><?= $bad_string; ?></h2>
            <span><?= $bad_text; ?></span>
            <h2><?= $censored_string; ?></h2>
            <p><?= $censored_text; ?></p>
            <span>Il tuo testo contiene <?= $censored_lenght ?> lettere</span>
        </div>
    </body>
</html>