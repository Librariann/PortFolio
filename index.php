<?
/**
 * 
 * index 페이지
 * 
 * @file : index.php
 * @author : Librariann
 * @since : 2021.10.22
 * @desc : index main 페이지, fullpage.js 사용
 * 
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <link rel="stylesheet" type="text/css" href="./src/fullpage.css" />
    <script src="./vendors/easings.min.js"></script>
    <script type="text/javascript" src="./vendors/scrolloverflow.min.js"></script>
    <script type="text/javascript" src="./src/fullpage.js"></script>
    <title>PortFolio - Main</title>
</head>

<body>
    <div id="fullpage">
        <div class="section active">
            <h1>안녕하세요</h1>
        </div>
        <div class="section">
            <h1>portfolio page!</h1>
        </div>
        <div class="section">
            <h1>No wraps, no extra markup</h1>
        </div>
        <div class="section">
            <h1>Just the simplest demo ever</h1>
        </div>
    </div>

    <script type="text/javascript">
        var myFullpage = new fullpage('#fullpage', {
            navigation: true,
            navigationTooltips: ['1', '2', '3', '4'],
            sectionsColor: ['#f2f2f2', '#4BBFC3', '#7BAABE', '#000'],
            sectionSelector: '.section'
        });
    </script>
</body>

</html>