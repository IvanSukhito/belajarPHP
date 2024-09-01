<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        $nama_mahasiswa = [
            'Ivan',
            'Roger',
            'Charles',
            'Tara',
            'Alfonsa',
            'Metta',
            'Michika'
        ];
    ?>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        
            <?php foreach($nama_mahasiswa as $key => $nama):?>
                <tr>
                    <td><?= $key+1;?></td>
                    <td><?= $nama; ?></td>
                    <td><a href="#">Delete</a></td>
                </tr>
            <?php endforeach;?>
        </tbody>
      
    </table>
</body>
</html>