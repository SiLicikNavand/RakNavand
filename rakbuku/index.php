<?php

$buku = [
    [
       'judul' => 'Belajar PHP untuk pemula',
       'penulis' => 'Navand',
       'tahun' => 2021,
],
[
    'judul' => 'Panduan',
    'penulis' => 'Google',
    'tahun' => 2020
],
[
    'judul' => 'HTML5 dan CSS3',
    'penulis' => 'W3 SCHOOL',
    'tahun' => 2019
]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($buku as $item): ?>
                <tr>
                    <td><?php echo htmlspecialchars($item['judul']); ?></td>
                    <td><?php echo htmlspecialchars($item['penulis']); ?></td>
                    <td><?php echo htmlspecialchars($item['tahun']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>