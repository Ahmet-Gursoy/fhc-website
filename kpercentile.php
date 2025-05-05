<?php include 'topbar.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'head.php'; ?>
<?php include 'spinner.php'; ?>

<div class="container-fluid page-header py-5 mb-5">
    <div class="container-fluid py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Kız Çocuklar İçin Persentil Tablosu</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Anasayfa</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Sağlık Üzerine</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Kız Çocuklar İçin Persentil Tablosu</li>
            </ol>
        </nav>
    </div>
</div>

<body>
    <h2>Kız Çocuklar İçin Persentil Tablosu</h2>

    <?php
    $data = [
        ["Yaş" => "Doğum", "Tartı_3" => 2.6, "Tartı_50" => 3.4, "Tartı_97" => 4.3, "Boy_3" => 47.1, "Boy_50" => 50.2, "Boy_97" => 53.6, "Baş_3" => 32.5, "Baş_50" => 34.7, "Baş_97" => 36.6],
        ["Yaş" => "3 Ay", "Tartı_3" => 4.0, "Tartı_50" => 5.4, "Tartı_97" => 7.0, "Boy_3" => 54.0, "Boy_50" => 58.5, "Boy_97" => 64.5, "Baş_3" => 37.9, "Baş_50" => 40.0, "Baş_97" => 42.3],
        ["Yaş" => "6 Ay", "Tartı_3" => 5.4, "Tartı_50" => 7.4, "Tartı_97" => 9.2, "Boy_3" => 58.0, "Boy_50" => 64.5, "Boy_97" => 70.5, "Baş_3" => 40.9, "Baş_50" => 42.8, "Baş_97" => 45.4],
        ["Yaş" => "9 Ay", "Tartı_3" => 6.4, "Tartı_50" => 8.6, "Tartı_97" => 10.8, "Boy_3" => 61.5, "Boy_50" => 69.5, "Boy_97" => 75.5, "Baş_3" => 42.6, "Baş_50" => 44.6, "Baş_97" => 47.2],
        ["Yaş" => "12 Ay", "Tartı_3" => 7.1, "Tartı_50" => 9.6, "Tartı_97" => 12.1, "Boy_3" => 64.5, "Boy_50" => 73.0, "Boy_97" => 80.0, "Baş_3" => 43.6, "Baş_50" => 45.8, "Baş_97" => 48.7],
        ["Yaş" => "2 Yaş", "Tartı_3" => 9.0, "Tartı_50" => 12.3, "Tartı_97" => 15.6, "Boy_3" => 80.0, "Boy_50" => 85.0, "Boy_97" => 90.0, "Baş_3" => 45.5, "Baş_50" => 47.0, "Baş_97" => 48.5],
        ["Yaş" => "3 Yaş", "Tartı_3" => 10.5, "Tartı_50" => 14.2, "Tartı_97" => 17.8, "Boy_3" => 85.0, "Boy_50" => 92.0, "Boy_97" => 98.0, "Baş_3" => 47.0, "Baş_50" => 48.3, "Baş_97" => 49.7],
        ["Yaş" => "4 Yaş", "Tartı_3" => 12.0, "Tartı_50" => 16.0, "Tartı_97" => 20.0, "Boy_3" => 90.0, "Boy_50" => 99.0, "Boy_97" => 106.0, "Baş_3" => 47.5, "Baş_50" => 49.0, "Baş_97" => 50.5],
        ["Yaş" => "5 Yaş", "Tartı_3" => 13.5, "Tartı_50" => 18.0, "Tartı_97" => 22.5, "Boy_3" => 96.0, "Boy_50" => 106.0, "Boy_97" => 114.0, "Baş_3" => 48.0, "Baş_50" => 49.5, "Baş_97" => 51.0],
        ["Yaş" => "6 Yaş", "Tartı_3" => 15.0, "Tartı_50" => 20.0, "Tartı_97" => 25.0, "Boy_3" => 102.0, "Boy_50" => 112.0, "Boy_97" => 121.0, "Baş_3" => 48.2, "Baş_50" => 49.7, "Baş_97" => 51.2],
        ["Yaş" => "7 Yaş", "Tartı_3" => 17.0, "Tartı_50" => 22.5, "Tartı_97" => 28.0, "Boy_3" => 107.0, "Boy_50" => 117.0, "Boy_97" => 127.0, "Baş_3" => 48.3, "Baş_50" => 49.8, "Baş_97" => 51.3],
        ["Yaş" => "8 Yaş", "Tartı_3" => 19.0, "Tartı_50" => 25.0, "Tartı_97" => 31.5, "Boy_3" => 113.0, "Boy_50" => 123.0, "Boy_97" => 133.0, "Baş_3" => 48.4, "Baş_50" => 49.9, "Baş_97" => 51.4],
        ["Yaş" => "9 Yaş", "Tartı_3" => 21.0, "Tartı_50" => 28.0, "Tartı_97" => 35.0, "Boy_3" => 118.0, "Boy_50" => 129.0, "Boy_97" => 139.0, "Baş_3" => 48.5, "Baş_50" => 50.0, "Baş_97" => 51.5],
        ["Yaş" => "10 Yaş", "Tartı_3" => 23.5, "Tartı_50" => 31.5, "Tartı_97" => 39.5, "Boy_3" => 124.0, "Boy_50" => 135.0, "Boy_97" => 145.0, "Baş_3" => 48.6, "Baş_50" => 50.0, "Baş_97" => 51.6],
        ["Yaş" => "11 Yaş", "Tartı_3" => 26.5, "Tartı_50" => 35.0, "Tartı_97" => 44.0, "Boy_3" => 130.0, "Boy_50" => 142.0, "Boy_97" => 152.0, "Baş_3" => 48.7, "Baş_50" => 50.1, "Baş_97" => 51.7],
        ["Yaş" => "12 Yaş", "Tartı_3" => 30.0, "Tartı_50" => 39.0, "Tartı_97" => 49.0, "Boy_3" => 136.0, "Boy_50" => 149.0, "Boy_97" => 159.0, "Baş_3" => 48.8, "Baş_50" => 50.2, "Baş_97" => 51.8],
        ["Yaş" => "13 Yaş", "Tartı_3" => 34.0, "Tartı_50" => 44.0, "Tartı_97" => 55.0, "Boy_3" => 142.0, "Boy_50" => 154.0, "Boy_97" => 163.0, "Baş_3" => 48.9, "Baş_50" => 50.2, "Baş_97" => 51.9],
        ["Yaş" => "14 Yaş", "Tartı_3" => 38.0, "Tartı_50" => 48.0, "Tartı_97" => 60.0, "Boy_3" => 147.0, "Boy_50" => 157.0, "Boy_97" => 165.0, "Baş_3" => 49.0, "Baş_50" => 50.3, "Baş_97" => 52.0],
        ["Yaş" => "15 Yaş", "Tartı_3" => 41.0, "Tartı_50" => 51.0, "Tartı_97" => 63.0, "Boy_3" => 150.0, "Boy_50" => 159.0, "Boy_97" => 167.0, "Baş_3" => 49.1, "Baş_50" => 50.3, "Baş_97" => 52.1],
        ["Yaş" => "16 Yaş", "Tartı_3" => 43.0, "Tartı_50" => 53.0, "Tartı_97" => 65.0, "Boy_3" => 151.0, "Boy_50" => 160.0, "Boy_97" => 168.0, "Baş_3" => 49.1, "Baş_50" => 50.4, "Baş_97" => 52.1],
        ["Yaş" => "17 Yaş", "Tartı_3" => 44.0, "Tartı_50" => 54.0, "Tartı_97" => 66.0, "Boy_3" => 151.5, "Boy_50" => 160.5, "Boy_97" => 168.5, "Baş_3" => 49.1, "Baş_50" => 50.4, "Baş_97" => 52.1],
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
                        <td><?= $row["Tartı_3"] ?></td>
                        <td><?= $row["Tartı_50"] ?></td>
                        <td><?= $row["Tartı_97"] ?></td>
                        <td><?= $row["Boy_3"] ?></td>
                        <td><?= $row["Boy_50"] ?></td>
                        <td><?= $row["Boy_97"] ?></td>
                        <td><?= $row["Baş_3"] ?></td>
                        <td><?= $row["Baş_50"] ?></td>
                        <td><?= $row["Baş_97"] ?></td>
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