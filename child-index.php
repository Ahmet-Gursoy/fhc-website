<?php include 'topbar.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'head.php'; ?>
<?php include 'spinner.php'; ?>

<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Çocuklar İçin Vücut Kitle İndeksi Hesaplama</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Anasayfa</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Sağlık Üzerine</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Çocuklar İçin Vücut Kitle İndeksi</li>
            </ol>
        </nav>
    </div>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['kilo']) && isset($_POST['boy']) && isset($_POST['yas']) && isset($_POST['cinsiyet'])) {
    $kilo = $_POST['kilo'];
    $boy = $_POST['boy'] / 100; // Boyu cm'den metreye çevirdik.
    $yas = $_POST['yas'];
    $cinsiyet = $_POST['cinsiyet'];

    $bmi = $kilo / ($boy * $boy); // BMI hesaplama formülü

    // Çocuklar için BMI değerlendirmesi (yaşa göre genelleme)
    // Bu değerlendirme genel bir kılavuzdur, çocukların BMI'si yaş ve cinsiyete göre değişir.
    if ($bmi < 14.9) {
        $yorum = "Zayıf";
    } elseif ($bmi >= 14.9 && $bmi < 18.4) {
        $yorum = "Normal Kilolu";
    } elseif ($bmi >= 18.5 && $bmi < 24.9) {
        $yorum = "Fazla Kilolu";
    } else {
        $yorum = "Obez";
    }
}
?>

<div class="calorie-calculator-container">
    <h1>Çocuklar İçin Vücut Kitle İndeksi Hesaplama</h1>
    <form method="post">
        <div class="calorie-calculator-input-group">
            <label for="kilo" class="slider-label">Kilo (kg):</label>
            <input type="number" id="kilo" name="kilo" min="10" max="100" step="0.1" required>
        </div>

        <div class="calorie-calculator-input-group">
            <label for="boy" class="slider-label">Boy (cm):</label>
            <input type="number" id="boy" name="boy" min="80" max="200" step="1" required>
        </div>

        <div class="calorie-calculator-input-group">
            <label for="yas" class="slider-label">Yaş:</label>
            <input type="number" id="yas" name="yas" min="2" max="18" step="1" required>
        </div>

        <div class="calorie-calculator-input-group">
            <label for="cinsiyet" class="slider-label">Cinsiyet:</label>
            <select id="cinsiyet" name="cinsiyet" required>
                <option value="erkek">Erkek</option>
                <option value="kadin">Kadın</option>
            </select>
        </div>

        <input type="submit" value="Hesapla">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($bmi)): ?>
        <div class="calorie-calculator-result">
            <p>Vücut Kitle İndeksi: <?= round($bmi, 2) ?></p>
            <p>Sonuç: <?= $yorum ?> (Çocuk)</p>
        </div>
    <?php endif; ?>
</div>

<style>
    .calorie-calculator-container {
        background-color: #ffffff;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        width: 90%;
        max-width: 500px;
        margin: 80px auto;
        text-align: center;
        transition: box-shadow 0.3s ease-in-out;
    }

    .calorie-calculator-container:hover {
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.25);
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
</style>

<?php include 'js-library.php'; ?>
<?php include 'footer.php'; ?>
