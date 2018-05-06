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
    </head>
    <body>
        <?php
        $connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
        $tweets = $connection->get(
            'search/tweets',
            array("q" => "#"."$_POST[hashtag]", "count" => 10, "include_entities" => "true")
            );
            foreach ($tweets->statuses as $key => $tweets) { ?>
                <div class="feed">
                    <blockquote class="twitter-tweet">
                        <p>
                            <?php print_r($tweets->text); ?>
                        </p>
                            &mdash; <?php print_r($tweets->user->name); ?>(@<?php print_r($tweets->user->screen_name);?>)
                            <a href="<?php print_r($tweets->entities->urls[0]->url) ?>"><?php print_r(date('jS F, Y', strtotime($tweets->created_at))); ?></a>
                    </blockquote>
                </div>
        <?php } ?>
    </body>
</html>
