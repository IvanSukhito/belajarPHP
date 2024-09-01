<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Try</title>
    <style>
        /* body {
            display: grid;
            place-items: center;
            height: 100vh:
        } */
         body {
            display: grid;
            place-content: center;
            height: 100vh;
           
         }
    </style>   
</head>
<body>
   
    <h1>
    <?php 
    $namaKamu = 'James';
    $namaTemanMu = 'Riko';
   
    // echo 'Hallo, '.$namaTemanMu.' '.'aku '.$namaKamu;
        echo "Hallo $namaTemanMu, Aku $namaKamu"; 
    ?>
    </h1>

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
    <!-- <h1>Update Baru</h1> -->

</body>
</html>