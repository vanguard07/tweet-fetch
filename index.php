<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Twitter API SEARCH</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="search.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type= "text/css" href="style.css">
</head>
<body>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="searchbar col-sm-4">
            <form id="form" action="tweets.php" method="post" target="frame">
                <input type="text" name="hashtag" placeholder="Enter hashtag to search" id = "query" onkeyup="checkBox()">
            </form>
        </div>
    </div>
    <div id="content" scrolling="no">
        <iframe name="frame" frameBorder="0" ></iframe>
    </div>
</body>
</html>
