<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Petit Twitter</title>
    <style>
        body  {
            margin: 0;
            padding: 0;
        }


    </style>
</head>
<body>
    <?php
        //Variables element.
        $pseudo = ["@Twitter","@Simplon","@Solocrako","@Codeur"];

        $content = ["Aujourd'hui est une journée superbe,je suis pas trop réveiller mais je me tate a ce TP," . "<br />" . 
        " franchement c'est top je kiff !" . "<br />" ,
        "Hey ! vous êtes motiver ? curieux ? vous aimer l'art de la création ?" . "<br />" . 
        "si oui alors n'attendez plus, prêt de chez vous simplon est la pour votre avenir,
        une formation ouverte pour tous, on vous attend !" . "<br />", 
        "Je suis actuellement a la recherche d'une formation qui me permettra d'aboutir dans mes idées de dev." 
        . "<br />" . "Avez vous un numéros de téléphone ?" . "<br />",
        "Salut ! actuellement il n'ont pas de téléphone je pense, si je suis toi je serais allez les 
        rencontrer directement l'amis." . "<br />" . " ps : il sont situé a Villeurbanne."];
        $srcprofil = [""];
        $orodage = "12/06/2017";
        $nblike = 0;
        $retwit = 0;

        //Display Twitter 
        foreach($pseudo as $val) {
            echo "<section class='sectiontpseudo'><div class='pseudotwit'>" . $val . "</div></section>";
            foreach($content as $clef => $valcont) {
            echo "<section class='sectioncontent'><div class='contenttwit'>" . $valcont . "</div></section>";
            }
        }

    ?>
</body>
</html>