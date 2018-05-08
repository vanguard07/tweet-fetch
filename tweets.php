<?php

$consumer_key = 'Oaa97hvkUwzy3iA1k6GucC49A';
$consumer_secret = '5ytllzOtAIA6nu3vKbnNuaOFkgJHkyPDAa6PlgeRhmhemQqHfm';
$access_token = '876073808934973440-FJmNutWHRvwyWYY76sQcsb769yXcHTK';
$access_token_secret = 'wN2n9sUjn7wg4gVEdruSRDt0IeCGlmzSjsflpSRx5nm7z';

require 'twitteroauth-master/autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="stylesheet" type="text/css"  href="tweets.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    </head>
    <body>
        <?php
        $connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
        $tweets = $connection->get(
            'search/tweets',
            array("q" => "#"."$_POST[hashtag]", "count" => 10, "include_entities" => "true")
            );
        $count = 0;
            foreach ($tweets->statuses as $key => $tweets) {
                if ($count%3 == 0) {
                    ?>
                    <div class="row">
            <?php    } ?>
            <div class="feed col-sm-4">
                <blockquote class="twitter-tweet">
                    <p>
                        <?php print_r($tweets->text); ?>
                    </p>
                        &mdash; <?php print_r($tweets->user->name); ?>(@<?php print_r($tweets->user->screen_name);?>)
                        <a href="<?php print_r($tweets->entities->urls[0]->url) ?>"><?php print_r(date('jS F, Y', strtotime($tweets->created_at))); ?></a>
                </blockquote>
            </div>
            <?php  $count = $count + 1;
                if ($count%3 == 0) {
                    ?> </div> <?php
                }
        } ?>
    </body>
</html>
