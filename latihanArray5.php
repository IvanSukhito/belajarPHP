<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                 'Motivasi' => 'Dedication and HardWork',
                 'sifat' =>[
                    'baik' => ['tanggung jawab','dedikasi','mau belajar','baik','suka menolong','inisiatif'],
                    'buruk' => ['menunda','susah bangun pagi','ngeyel'],
                 ]
             ],
             'anggota2' =>
             [
                 'nama' => 'Saminem',
                 'hobbi' => ['Penjahit'],
                 'cita-cita' => 'Melihat Anak Saya Sukses',
                 'Motivasi' => 'Rajin dan Pekerja Keras',
                 'sifat' => [
                    'baik' => ['baik','penyanyang','pekerja keras','ga pelit','rajin','displin','tanggung jawab'],
                    'buruk' => ['tidak ada'],
                 ]
             ]
 
         ];
         
     ?>
    
    <?php foreach ($biodata as $data) : ?>
            <ul>
                <li>Nama : <b><?= $data['nama']?> </b></li>
                <?php foreach($data['hobbi'] as $hobbi) : ?>
                <p>Hobbi : <?= $hobbi; ?> </p>
                <?php endforeach; ?>
                <li>Sifat Baik : </li>
                <?php foreach($data['sifat']['baik'] as  $sifatBaik) :?>
                    <ul>
                        <li><?= $sifatBaik;?></li>
                    </ul>
                    
                <?php endforeach;?>    
                <li>Sifat Buruk : </li>
                <?php foreach($data['sifat']['buruk'] as  $sifatBuruk) :?>
                    <ul>
                        <li><?= $sifatBuruk;?></li>
                    </ul>
                    
                <?php endforeach;?>    
            </ul>
    <?php endforeach;?>
    
</body>
</html>

                