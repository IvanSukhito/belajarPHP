<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
    <?php
        $biodata = 
        [
            'anggota1' =>
            [
                'nama' => 'Ivan Sukhito',
                'hobbi' => ['investasi','programming','catur'],
                'cita-cita' => 'Bahagian Ibu',
                'Motivasi' => 'Dedication and HardWork'
            ],
            'anggota2' =>
            [
                'nama' => 'Saminem',
                'hobbi' => ['Menjahit'],
                'cita-cita' => 'Melihat Anak Saya Sukses',
                'Motivasi' => 'Rajin dan Pekerja Keras'
            ]

        ];
        
    ?>
   
    <?php foreach ($biodata as $data) : ?>
        <ul>
            <li><?= $data['nama']; ?> </li>
            <?php foreach($data['hobbi'] as $hobbi) :?>
            <b><?= $hobbi;?> </b>
            <?php endforeach ;?>
        </ul>
       
    <?php endforeach ; ?>
  
  
</body>
</html>