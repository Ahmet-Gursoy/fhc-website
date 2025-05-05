<?php include 'topbar.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'head.php'; ?>
<?php include 'spinner.php'; ?>

<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Aktiviteye Göre Harcanan Kalori</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Anasayfa</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Sağlık Üzerine</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Aktiviteye Göre Harcanan Kalori</li>
            </ol>
        </nav>
    </div>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kilo = $_POST['kilo'];
    $aktivite = $_POST['aktivite'];
    $sure = $_POST['sure'];

    $met_degerleri = [
        "yavas_yurumek" => 2.8,
        "hizli_yurumek" => 4.3,
        "kosu" => 8,
        "bisiklet" => 7,
        "yuzme" => 7
    ];

    $met = $met_degerleri[$aktivite];
    $yakilan_kalori = $met * $kilo * $sure;
}
?>

<div class="calorie-calculator-container">
    <h1>Aktiviteye Göre Kalori Hesaplama</h1>
    <form method="post">
        <div class="calorie-calculator-input-group">
            <label for="kilo" class="slider-label">Kilonuz (kg): <span id="kilo-value">70</span></label>
            <input type="range" id="kilo" name="kilo" min="40" max="150" step="1" value="70" class="slider">
        </div>

        <div class="calorie-calculator-input-group">
            <label for="aktivite" class="slider-label">Aktivite Seçin:</label>
            <select id="aktivite" name="aktivite" required>
                <option value="yavas_yurumek">Yavaş Yürüyüş (4 km/saat)</option>
                <option value="hizli_yurumek">Hızlı Yürüyüş (6 km/saat)</option>
                <option value="kosu">Koşu (8 km/saat)</option>
                <option value="bisiklet">Bisiklet Sürme (Orta Hız)</option>
                <option value="yuzme">Yüzme</option>
            </select>
        </div>

        <div class="calorie-calculator-input-group">
            <label for="sure" class="slider-label">Aktivite Süresi: <span id="sure-value">1 saat</span></label>
            <input type="range" id="sure" name="sure" min="0.25" max="5" step="0.25" value="1" class="slider">
        </div>

        <input type="submit" value="Hesapla">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <div class="calorie-calculator-result">
            <p>Yakılan Kalori: <?= round($yakilan_kalori, 2) ?> kcal</p>
        </div>
    <?php endif; ?>
</div>

<script>
    // Kilo slider güncelleme
    const kiloSlider = document.getElementById("kilo");
    const kiloValue = document.getElementById("kilo-value");
    kiloSlider.oninput = function() {
        kiloValue.innerHTML = this.value;
    }

    // Süre slider güncelleme
    const sureSlider = document.getElementById("sure");
    const sureValue = document.getElementById("sure-value");
    sureSlider.oninput = function() {
        let saat = Math.floor(this.value);
        let dakika = Math.round((this.value - saat) * 60);
        sureValue.innerHTML =
            (saat > 0 ? saat + " saat " : "") +
            (dakika > 0 ? dakika + " dakika" : (saat === 0 ? "15 dakika" : ""));
    };
</script>

<style>
    .calorie-calculator-container {
        background-color: #ffffff;
        border-radius: 8px;
        padding: 25px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        width: 90%;
        max-width: 500px;
        margin: 80px auto;
        text-align: center;
    }

    .calorie-calculator-container h1 {
        font-size: 26px;
        margin-bottom: 20px;
        color: #333;
    }

    .calorie-calculator-input-group {
        margin: 20px 0;
    }

    .slider-label {
        font-size: 16px;
        margin-bottom: 8px;
        display: block;
    }

    .slider {
        width: 100%;
        margin: 10px 0;
    }

    select,
    input[type="submit"] {
        padding: 12px;
        font-size: 16px;
        width: 100%;
        border-radius: 6px;
        border: 1px solid #ddd;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .calorie-calculator-result {
        margin-top: 30px;
        font-size: 20px;
        color: #333;
    }

    @media screen and (max-width: 768px) {
        .navbar {
            font-size: 16px;
        }

        .calorie-calculator-container {
            width: 90%;
            padding: 20px;
        }
    }

    @media screen and (max-width: 480px) {
        .navbar {
            font-size: 14px;
            padding: 12px;
        }

        .calorie-calculator-container {
            width: 95%;
            padding: 15px;
        }
    }

    input[type="submit"] {
        background-color: #ff4d4d;
        /* Kırmızı renk */
        color: white;
        border: none;
    }

    input[type="submit"]:hover {
        background-color: #ff3333;
        /* Hover durumunda daha koyu kırmızı */
    }
</style>

<?php include 'js-library.php'; ?>
<?php include 'footer.php'; ?>