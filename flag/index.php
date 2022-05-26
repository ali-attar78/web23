<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flag</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="container">


        <div class="mainflag">

            <?php
            for ($i = 0; $i < 5; $i++) :
            ?>
                <div class="reddiv"></div>
                <div class="whitediv"></div>
            <?php endfor; ?>

        </div>


        <div class="bluediv">
            <?php for ($i = 0; $i < 10; $i++) : ?>

                <img class="starimg" src="img/star.png" alt="star" style="top:<?php print(rand(1, 120)); ?>px;
                    right:<?php print(rand(1, 220)); ?>px;">

            <?php endfor; ?>
        </div>


    </div>


</body>

</html>