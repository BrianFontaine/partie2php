<?php 
        $age = rand(1,100);
        if ($age < 18)
        {
            $message = "Vous êtes mineur";
        }
        else
        {
           $message = "Vous êtes majeur";
        }

        $oldIndex = 130;
        $newIndex = 98;
        $amount = 100000;
// commentaire 
        $fees = ($amount * 0.02 > 5000) ? $amount * 0.02 : 5000;
//  terner.zip!!!!!!!!!!!!!!
        $index = ($newIndex) ?? $oldIndex
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 6 php</title>
</head>
<body>
    <p><?= $message ?></p>
    <p><?= $fees ?></p>
    <p><?= $index ?></p>
</body>
</html>