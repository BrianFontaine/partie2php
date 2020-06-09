<?php 
    $genre = "Femme";
    if ($genre != "Homme")
    {
        $message = "C'est une développeuse !!!";
    }
    else
    {
       $message = "C'est un développeur !!!";
    }
?>   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 5 php</title>
</head>
<body>
    <p><?= $message ?></p>
    <p>
        <?php 
            echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
        ?>
    </p>
</body>
</html>