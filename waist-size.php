<?php include 'topbar.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'head.php'; ?>
<?php include 'spinner.php'; ?>
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Yetişkin Bel Çevresi Hesaplama</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Anasayfa</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Sağlık Üzerine</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Yetişkin Bel Çevresi Hesaplama</li>
            </ol>
        </nav>
    </div>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['bel']) && isset($_POST['boy']) && isset($_POST['cinsiyet'])) {
    $bel = $_POST['bel'];
    $boy = $_POST['boy'];
    $cinsiyet = $_POST['cinsiyet'];

    $bel_boy_orani = $bel / $boy;

    // Erkek için değerlendirme
    if ($cinsiyet == "erkek") {
        if ($bel_boy_orani < 0.34) {
            $yorum = "Düşük Risk";
        } elseif ($bel_boy_orani < 0.53) {
            $yorum = "Sağlıklı";
        } elseif ($bel_boy_orani < 0.58) {
            $yorum = "Orta Risk";
        } else {
            $yorum = "Yüksek Risk";
        }
    }

    // Kadın için değerlendirme
    if ($cinsiyet == "kadin") {
        if ($bel_boy_orani < 0.34) {
            $yorum = "Düşük Risk";
        } elseif ($bel_boy_orani < 0.50) {
            $yorum = "Sağlıklı";
        } elseif ($bel_boy_orani < 0.54) {
            $yorum = "Orta Risk";
        } else {
            $yorum = "Yüksek Risk";
        }
    }
}
?>

<div class="calorie-calculator-container">
    <h1>Bel-Boy Oranı Hesaplama</h1>
    <form method="post">
        <div class="calorie-calculator-input-group">
            <label for="cinsiyet" class="slider-label">Cinsiyet:</label>
            <select id="cinsiyet" name="cinsiyet" required>
                <option value="erkek">Erkek</option>
                <option value="kadin">Kadın</option>
            </select>
        </div>

        <div class="calorie-calculator-input-group">
            <label for="bel" class="slider-label">Bel Çevresi (cm):</label>
            <input type="number" id="bel" name="bel" min="50" max="150" step="1" required>
        </div>

        <div class="calorie-calculator-input-group">
            <label for="boy" class="slider-label">Boy (cm):</label>
            <input type="number" id="boy" name="boy" min="130" max="220" step="1" required>
        </div>

        <input type="submit" value="Hesapla">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($bel_boy_orani)): ?>
        <div class="calorie-calculator-result">
            <p>Bel/Boy Oranı: <?= round($bel_boy_orani, 3) ?></p>
            <p>Sonuç: <?= $yorum ?> (<?= ucfirst($cinsiyet) ?>)</p>
        </div>
    <?php endif; ?>
</div>
<style>
    .calorie-calculator-container {
        background-color: #ffffff;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        /* Şık gölge */
        width: 90%;
        max-width: 500px;
        margin: 80px auto;
        text-align: center;
        transition: box-shadow 0.3s ease-in-out;
    }

    .calorie-calculator-container:hover {
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.25);
        /* Hover gölgesi */
    }

    .calorie-calculator-container h1 {
        font-size: 26px;
        margin-bottom: 20px;
        color: #333;
    }

    .calorie-calculator-input-group {
        margin: 20px 0;
        text-align: left;
    }

    .slider-label {
        font-size: 16px;
        margin-bottom: 8px;
        display: block;
        font-weight: 500;
        color: #444;
    }

    input[type="number"],
    select {
        padding: 10px;
        font-size: 16px;
        width: 100%;
        border-radius: 6px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #e53935;
        /* Kırmızı */
        color: white;
        padding: 12px;
        font-size: 16px;
        width: 100%;
        border-radius: 6px;
        border: none;
        margin-top: 15px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #c62828;
    }

    .calorie-calculator-result {
        margin-top: 30px;
        font-size: 20px;
        color: #333;
        font-weight: bold;
    }

    body,
    .bel-boy-container {
        font-family: Arial, sans-serif;
        /* sade bir yazı tipi */
        font-weight: normal;
        /* kalınlık normal */
        font-style: normal;
        /* italik değil */
    }
    /* Tüm site yazı tipini değiştirme */
body {
    font-family: Arial, sans-serif;
}

    
</style>
<?php include 'js-library.php'; ?>
<?php include 'footer.php'; ?>
