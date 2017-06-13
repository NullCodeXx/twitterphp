<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Twitteur</title>
</head>
<body>
    <?php
    // inlude la class object.
    include_once("Tweet.php");
    $instanceTweet = new Tweet();

    $tweets = [
        ["pseudo" => 'test',
        "message" => "mon message de test",
        "avatar" => "avatar.jpg",
         "retweets" => 10,
         "likes" => 5,
         "date" => "12-06-2017"
        ],
        ["pseudo" => 'test',
        "message" => "mon message de test",
        "avatar" => "avatar.jpg",
         "retweets" => 10,
         "likes" => 5,
         "date" => "12-06-2017"
        ],
        ["pseudo" => 'test',
        "message" => "mon message de test",
        "avatar" => "avatar.jpg",
         "retweets" => 10,
         "likes" => 5,
         "date" => "12-06-2017"
        ],
    ];

    // Display via la boucle foreach.
    foreach($tweets as $tweet) {
        echo "<section class='tweet'>";
        echo "<h2 class='pseudo'>" . $tweet["pseudo"] . "</h2>";
        echo "<p class='retweet'>" . $tweet['message'] . "</p>";
        // echo "<img class='img' src='image/avatar.jpg' . $tweet['avatar'];
        echo '<img class ="avatar" src="images/' . $tweet['avatar'] . '"/>';
        echo "<p class='retweet'>" . $tweet["retweets"] . "- " . $tweet["likes"] . "- " . $tweet["date"] . "</p>";
        echo "</section>";
    }
    ?>
</body>
</html>