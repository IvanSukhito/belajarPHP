<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associatife Array</title>
</head>
<body>
    <?php
        $biodata = 
        [
            'anggota1' =>
            [
                'nama' => 'Ivan Sukhito',
                'hobbi' => 'Proggraming',
                'cita-cita' => 'Bahagian Ibu',
                'Motivasi' => 'Dedication and HardWork'
            ],
            'anggota2' =>
            [
                'nama' => 'Saminem',
                'hobbi' => 'Penjahit',
                'cita-cita' => 'Melihat Anak Saya Sukses',
                'Motivasi' => 'Rajin dan Pekerja Keras'
            ]

        ];
        
    ?>
    
    <?php foreach ($biodata as $data) : ?>
        <ul>
            <li><?= $data['nama']; ?> </li>
            <li><?= $data['hobbi'];?> </li>
        </ul>
       
    <?php endforeach ; ?>
    <!-- <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th> hobbi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> </td>
                <td> </td>
            </tr>
        </tbody>
    </table> -->
  
</body>
</html>