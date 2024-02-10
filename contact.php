<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="portfoilo.css">
    <title>Document</title>
    <script type="module" src="./importTo.js" defer></script>
    <style>
        #parent{
            display : flex;
            padding : 10px;
            align-items: center;
            justify-content: center;
            width: 100%;
            position : relative;
            top: 70px;

        }

        #parent div{
            width: 400px;
            
        }
    </style>
</head>
<body>
<?php
        include('nav.html');
    ?>
    <div id='parent'>
    <div class="powr-form-builder" id="0ccfd5f1_1707341887"></div><script src="https://www.powr.io/powr.js?platform=html"></script>
    </div>
    <?php
        include('footer.html');
    ?>
   
</body>
</html>