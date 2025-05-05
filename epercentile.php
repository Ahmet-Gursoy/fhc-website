<?php include 'topbar.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'head.php'; ?>
<?php include 'spinner.php'; ?>

<div class="container-fluid page-header py-5 mb-5">
    <div class="container-fluid py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Erkek Göre Harcanan Kalori</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Anasayfa</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Sağlık Üzerine</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Erkek Çocuklar İçin Persentil Tablosu</li>
            </ol>
        </nav>
    </div>
</div>

<body>
    <h2>Erkek Çocuklar İçin Persentil Tablosu</h2>

    <?php
    $data = [
        ['Yaş' => 'Doğum', 'Tartı_kg_3' => 2.6, 'Tartı_kg_50' => 3.4, 'Tartı_kg_97' => 4.3, 'Boy_cm_3' => 47.1, 'Boy_cm_50' => 50.2, 'Boy_cm_97' => 53.6, 'BaşÇevresi_cm_3' => 32.5, 'BaşÇevresi_cm_50' => 34.7, 'BaşÇevresi_cm_97' => 36.6],
        ['Yaş' => '3 Ay', 'Tartı_kg_3' => 4.0, 'Tartı_kg_50' => 5.4, 'Tartı_kg_97' => 7.0, 'Boy_cm_3' => 54.0, 'Boy_cm_50' => 58.5, 'Boy_cm_97' => 64.5, 'BaşÇevresi_cm_3' => 37.9, 'BaşÇevresi_cm_50' => 40.0, 'BaşÇevresi_cm_97' => 42.3],
        ['Yaş' => '6 Ay', 'Tartı_kg_3' => 5.4, 'Tartı_kg_50' => 7.4, 'Tartı_kg_97' => 9.2, 'Boy_cm_3' => 58.0, 'Boy_cm_50' => 64.5, 'Boy_cm_97' => 70.5, 'BaşÇevresi_cm_3' => 40.9, 'BaşÇevresi_cm_50' => 42.8, 'BaşÇevresi_cm_97' => 45.4],
        ['Yaş' => '9 Ay', 'Tartı_kg_3' => 6.6, 'Tartı_kg_50' => 8.8, 'Tartı_kg_97' => 11.1, 'Boy_cm_3' => 62.0, 'Boy_cm_50' => 68.5, 'Boy_cm_97' => 74.5, 'BaşÇevresi_cm_3' => 42.8, 'BaşÇevresi_cm_50' => 44.9, 'BaşÇevresi_cm_97' => 47.5],
        ['Yaş' => '12 Ay', 'Tartı_kg_3' => 7.8, 'Tartı_kg_50' => 10.4, 'Tartı_kg_97' => 13.1, 'Boy_cm_3' => 67.0, 'Boy_cm_50' => 74.5, 'Boy_cm_97' => 81.0, 'BaşÇevresi_cm_3' => 44.8, 'BaşÇevresi_cm_50' => 46.9, 'BaşÇevresi_cm_97' => 49.7],
        ['Yaş' => '18 Ay', 'Tartı_kg_3' => 8.8, 'Tartı_kg_50' => 11.6, 'Tartı_kg_97' => 14.5, 'Boy_cm_3' => 71.0, 'Boy_cm_50' => 79.0, 'Boy_cm_97' => 86.5, 'BaşÇevresi_cm_3' => 46.5, 'BaşÇevresi_cm_50' => 48.5, 'BaşÇevresi_cm_97' => 51.3],
        ['Yaş' => '2 Yaş', 'Tartı_kg_3' => 10.1, 'Tartı_kg_50' => 13.0, 'Tartı_kg_97' => 16.0, 'Boy_cm_3' => 74.0, 'Boy_cm_50' => 82.5, 'Boy_cm_97' => 90.0, 'BaşÇevresi_cm_3' => 48.2, 'BaşÇevresi_cm_50' => 50.0, 'BaşÇevresi_cm_97' => 52.7],
        ['Yaş' => '3 Yaş', 'Tartı_kg_3' => 11.2, 'Tartı_kg_50' => 14.4, 'Tartı_kg_97' => 17.6, 'Boy_cm_3' => 77.5, 'Boy_cm_50' => 86.0, 'Boy_cm_97' => 94.0, 'BaşÇevresi_cm_3' => 49.4, 'BaşÇevresi_cm_50' => 51.3, 'BaşÇevresi_cm_97' => 54.0],
        ['Yaş' => '4 Yaş', 'Tartı_kg_3' => 12.2, 'Tartı_kg_50' => 15.5, 'Tartı_kg_97' => 18.9, 'Boy_cm_3' => 81.0, 'Boy_cm_50' => 90.0, 'Boy_cm_97' => 98.5, 'BaşÇevresi_cm_3' => 50.6, 'BaşÇevresi_cm_50' => 52.5, 'BaşÇevresi_cm_97' => 55.2],
        ['Yaş' => '5 Yaş', 'Tartı_kg_3' => 13.2, 'Tartı_kg_50' => 16.8, 'Tartı_kg_97' => 20.2, 'Boy_cm_3' => 84.5, 'Boy_cm_50' => 93.5, 'Boy_cm_97' => 102.0, 'BaşÇevresi_cm_3' => 51.8, 'BaşÇevresi_cm_50' => 53.8, 'BaşÇevresi_cm_97' => 56.5],
        ['Yaş' => '6 Yaş', 'Tartı_kg_3' => 14.5, 'Tartı_kg_50' => 18.2, 'Tartı_kg_97' => 21.8, 'Boy_cm_3' => 88.0, 'Boy_cm_50' => 98.0, 'Boy_cm_97' => 106.5, 'BaşÇevresi_cm_3' => 52.9, 'BaşÇevresi_cm_50' => 54.9, 'BaşÇevresi_cm_97' => 57.6],
        ['Yaş' => '7 Yaş', 'Tartı_kg_3' => 15.5, 'Tartı_kg_50' => 19.4, 'Tartı_kg_97' => 23.0, 'Boy_cm_3' => 91.0, 'Boy_cm_50' => 101.0, 'Boy_cm_97' => 109.5, 'BaşÇevresi_cm_3' => 54.0, 'BaşÇevresi_cm_50' => 56.0, 'BaşÇevresi_cm_97' => 58.8],
        ['Yaş' => '8 Yaş', 'Tartı_kg_3' => 16.0, 'Tartı_kg_50' => 20.0, 'Tartı_kg_97' => 24.0, 'Boy_cm_3' => 94.0, 'Boy_cm_50' => 104.0, 'Boy_cm_97' => 113.0, 'BaşÇevresi_cm_3' => 55.1, 'BaşÇevresi_cm_50' => 57.0, 'BaşÇevresi_cm_97' => 60.0],
        ['Yaş' => '9 Yaş', 'Tartı_kg_3' => 17.0, 'Tartı_kg_50' => 21.0, 'Tartı_kg_97' => 25.0, 'Boy_cm_3' => 97.0, 'Boy_cm_50' => 107.0, 'Boy_cm_97' => 116.0, 'BaşÇevresi_cm_3' => 56.2, 'BaşÇevresi_cm_50' => 58.2, 'BaşÇevresi_cm_97' => 61.2],
        ['Yaş' => '10 Yaş', 'Tartı_kg_3' => 18.2, 'Tartı_kg_50' => 22.4, 'Tartı_kg_97' => 26.5, 'Boy_cm_3' => 100.0, 'Boy_cm_50' => 110.0, 'Boy_cm_97' => 119.5, 'BaşÇevresi_cm_3' => 57.3, 'BaşÇevresi_cm_50' => 59.3, 'BaşÇevresi_cm_97' => 62.3],
        ['Yaş' => '11 Yaş', 'Tartı_kg_3' => 19.5, 'Tartı_kg_50' => 24.0, 'Tartı_kg_97' => 28.5, 'Boy_cm_3' => 104.0, 'Boy_cm_50' => 114.0, 'Boy_cm_97' => 123.0, 'BaşÇevresi_cm_3' => 58.3, 'BaşÇevresi_cm_50' => 60.3, 'BaşÇevresi_cm_97' => 63.3],
        ['Yaş' => '12 Yaş', 'Tartı_kg_3' => 20.5, 'Tartı_kg_50' => 25.5, 'Tartı_kg_97' => 30.5, 'Boy_cm_3' => 108.0, 'Boy_cm_50' => 118.0, 'Boy_cm_97' => 127.0, 'BaşÇevresi_cm_3' => 59.4, 'BaşÇevresi_cm_50' => 61.4, 'BaşÇevresi_cm_97' => 64.4],
        ['Yaş' => '13 Yaş', 'Tartı_kg_3' => 21.5, 'Tartı_kg_50' => 27.0, 'Tartı_kg_97' => 32.0, 'Boy_cm_3' => 112.0, 'Boy_cm_50' => 122.0, 'Boy_cm_97' => 131.0, 'BaşÇevresi_cm_3' => 60.4, 'BaşÇevresi_cm_50' => 62.4, 'BaşÇevresi_cm_97' => 65.4],
        ['Yaş' => '14 Yaş', 'Tartı_kg_3' => 22.5, 'Tartı_kg_50' => 28.5, 'Tartı_kg_97' => 33.5, 'Boy_cm_3' => 116.0, 'Boy_cm_50' => 126.0, 'Boy_cm_97' => 135.0, 'BaşÇevresi_cm_3' => 61.5, 'BaşÇevresi_cm_50' => 63.5, 'BaşÇevresi_cm_97' => 66.5],
        ['Yaş' => '15 Yaş', 'Tartı_kg_3' => 24.0, 'Tartı_kg_50' => 30.0, 'Tartı_kg_97' => 35.5, 'Boy_cm_3' => 120.0, 'Boy_cm_50' => 130.0, 'Boy_cm_97' => 139.0, 'BaşÇevresi_cm_3' => 62.5, 'BaşÇevresi_cm_50' => 64.5, 'BaşÇevresi_cm_97' => 67.5],
        ['Yaş' => '16 Yaş', 'Tartı_kg_3' => 25.5, 'Tartı_kg_50' => 31.5, 'Tartı_kg_97' => 37.5, 'Boy_cm_3' => 124.0, 'Boy_cm_50' => 134.0, 'Boy_cm_97' => 143.0, 'BaşÇevresi_cm_3' => 63.5, 'BaşÇevresi_cm_50' => 65.5, 'BaşÇevresi_cm_97' => 68.5],
        ['Yaş' => '17 Yaş', 'Tartı_kg_3' => 27.0, 'Tartı_kg_50' => 33.0, 'Tartı_kg_97' => 39.0, 'Boy_cm_3' => 128.0, 'Boy_cm_50' => 138.0, 'Boy_cm_97' => 147.0, 'BaşÇevresi_cm_3' => 64.5, 'BaşÇevresi_cm_50' => 66.5, 'BaşÇevresi_cm_97' => 69.5],
    ];
    ?>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th rowspan="2">Yaş</th>
                    <th colspan="3">Tartı (kg)</th>
                    <th colspan="3">Boy (cm)</th>
                    <th colspan="3">Baş Çevresi (cm)</th>
                </tr>
                <tr>
                    <th>3</th>
                    <th>50</th>
                    <th>97</th>
                    <th>3</th>
                    <th>50</th>
                    <th>97</th>
                    <th>3</th>
                    <th>50</th>
                    <th>97</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row): ?>
                    <tr>
                        <td><?= $row["Yaş"] ?></td>
                        <td><?= $row["Tartı_kg_3"] ?></td>
                        <td><?= $row["Tartı_kg_50"] ?></td>
                        <td><?= $row["Tartı_kg_97"] ?></td>
                        <td><?= $row["Boy_cm_3"] ?></td>
                        <td><?= $row["Boy_cm_50"] ?></td>
                        <td><?= $row["Boy_cm_97"] ?></td>
                        <td><?= $row["BaşÇevresi_cm_3"] ?></td>
                        <td><?= $row["BaşÇevresi_cm_50"] ?></td>
                        <td><?= $row["BaşÇevresi_cm_97"] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php include 'js-library.php'; ?>
    <?php include 'footer.php'; ?>
</body>

</html>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    tbody tr:nth-child(even) {
        background-color: #ffe5e5;
    }

    tbody tr:hover {
        background-color: #fadbd8;
    }

    td {
        color: #900;
    }

    th {
        font-size: 14px;
    }

    body {
        padding: 0;
    }


    h2 {
        text-align: center;
        color: #c0392b;
    }

    .table-container {
        width: 100vw;
        margin: 0;
        padding: 0;
    }

    table {
        border-collapse: collapse;
        width: 100%;
        min-width: 800px;
        background-color: #ffffff;
        box-shadow: 0 0 10px rgba(200, 0, 0, 0.1);
    }

    th,
    td {
        border: 1px solid #ffcccc;
        padding: 10px;
        text-align: center;
    }

    thead th {
        background-color: #e74c3c;
        color: #fff;
    }

    tbody tr:nth-child(even) {
        background-color: #ffe5e5;
    }
</style>