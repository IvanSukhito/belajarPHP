<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
             body {
            display: grid;
            place-content: center;
            height: 100vh;
           
         }
    </style>
</head>

<body>
<p>Kenalkan Sahabat - sahabat ku :</p>
    <?php
    $sahabat = ['Lukman','Brodi','Layla'];

    foreach($sahabat as $key => $value)
         echo "
        <ul>
            <li> $value </li>
        </ul>
         "
    
    ?>
</body>
</html>