<!DOCTYPE html>
<html lang="tr">
<?php include 'topbar.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'head.php'; ?>
<?php include 'spinner.php'; ?>
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Bebeğinizin Aşı Takvimi</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Anasayfa</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Sağlık Üzerine</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Bebeğinizin Aşı Takvimi</li>
            </ol>
        </nav>
    </div>
</div>
    
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aşı Takvimi</title>




    
    <style>
/* Navbar stilini düzeltme */
.navbar {
    font-style: normal !important; /* İtalik etkisini iptal et */
}

/* Topbar'daki yazıları beyaz yap */
.container-fluid.bg-dark .text-start small,
.container-fluid.bg-dark .text-end small {
    color: white !important;
}

/* Genel stil */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
    color: #333;
}

/* Aşı Takvimi sayfasındaki genel stil */
.custom-container {
    width: 80%;
    margin: 50px auto;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 40px;
}

h1 {
    text-align: center;
    color: #333;
    font-size: 2.5em;
    margin-bottom: 40px;
}

/* Form stil */
.custom-form {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 30px;
}

.custom-label {
    font-size: 1.5em;
    margin-bottom: 10px;
    color: #555;
}

/* Input stili */
.custom-input[type="date"] {
    padding: 15px;
    font-size: 1.3em;
    border: 1px solid #ccc;
    border-radius: 8px;
    margin-bottom: 30px;
    width: 100%;
    max-width: 350px;
    box-sizing: border-box;
    transition: all 0.3s ease;
    background-color: #f9f9f9;
    color: #333;
}

.custom-input[type="date"]:focus {
    border-color: #ff4d4d;
    outline: none;
    background-color: #fff;
}

/* Buton stili */
.custom-button {
    background-color: #ff4d4d;
    color: white;
    padding: 12px 30px;
    font-size: 1.3em;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.custom-button:hover {
    background-color: #ff3333;
}

/* Tablo Stili */
.custom-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 30px;
    text-align: left;
}

.custom-table th, .custom-table td {
    padding: 15px;
    border: 1px solid #ddd;
    font-size: 1.1em;
}

.custom-table th {
    background-color: #ff4d4d;
    color: white;
}

.custom-table td {
    background-color: #f9f9f9;
    color: #555;
}

/* Responsive tasarım */
@media (max-width: 768px) {
    h1 {
        font-size: 2em;
    }

    .custom-table {
        font-size: 1em;
    }

    .custom-input[type="date"], .custom-button {
        width: 90%;
    }
}

/* Tüm site yazı tipini değiştirme */
body {
    color: #333; /* Sayfanın geri kalanında siyah veya koyu gri metin */
}


    </style>
</head>
<body>
    <div class="custom-container">
        <h1>Bebeğinizin Aşı Takvimi</h1>
        
        <!-- Form Başlangıcı -->
        <form action="" method="POST" class="custom-form">
            <label for="birth_date" class="custom-label">Bebeğinizin Doğum Tarihini Girin:</label>
            <input type="date" id="birth_date" name="birth_date" required class="custom-input">
            <button type="submit" class="custom-button">Aşı Takvimini Göster</button>
        </form>
        <!-- Form Bitişi -->

        <?php
            // Aşı Takvimi PHP Kodu
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['birth_date'])) {
                $birth_date = $_POST['birth_date'];
                $birth_timestamp = strtotime($birth_date);

                // Aşı Takvimi (Her aşı için tarih hesaplanacak)
                $vaccination_schedule = [
                    'Hepatit B (1. doz)' => date('d-m-Y', strtotime("+0 days", $birth_timestamp)),
                    'DTP 1. doz' => date('d-m-Y', strtotime("+2 months", $birth_timestamp)),
                    'Polio 1. doz' => date('d-m-Y', strtotime("+2 months", $birth_timestamp)),
                    'Hib 1. doz' => date('d-m-Y', strtotime("+2 months", $birth_timestamp)),
                    'PCV 1. doz' => date('d-m-Y', strtotime("+2 months", $birth_timestamp)),
                    'Rota 1. doz' => date('d-m-Y', strtotime("+2 months", $birth_timestamp)),
                    'DTP 2. doz' => date('d-m-Y', strtotime("+4 months", $birth_timestamp)),
                    'Polio 2. doz' => date('d-m-Y', strtotime("+4 months", $birth_timestamp)),
                    'Hib 2. doz' => date('d-m-Y', strtotime("+4 months", $birth_timestamp)),
                    'PCV 2. doz' => date('d-m-Y', strtotime("+4 months", $birth_timestamp)),
                    'Rota 2. doz' => date('d-m-Y', strtotime("+4 months", $birth_timestamp)),
                    // Diğer aşılar için benzer şekilde hesaplama yapılabilir...
                ];

                // Aşı takvimini tablo şeklinde yazdırma
                echo "<h2>Aşı Takvimi</h2>";
                echo "<table class='custom-table'>";
                echo "<thead>";
                echo "<tr><th>Aşı Adı</th><th>Tarih</th></tr>";
                echo "</thead>";
                echo "<tbody>";

                foreach ($vaccination_schedule as $vaccine => $date) {
                    echo "<tr>";
                    echo "<td>$vaccine</td>";
                    echo "<td>$date</td>";
                    echo "</tr>";
                }

                echo "</tbody>";
                echo "</table>";
            }
        ?>
    </div>







    <a href="document/8.pdf" target="_blank"><h1 style="color: red;"> -->SAĞLIK BAKANLIĞI AŞI TAKVİMİ (PDF)</h1></a>
</body>
</html>

<?php include 'js-library.php'; ?>
<?php include 'footer.php'; ?>
</body>
</html>
