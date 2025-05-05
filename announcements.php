<?php include 'topbar.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'head.php'; ?>
<?php include 'spinner.php'; ?>
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Sağlık Bakanlığı Duyuruları</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Anasayfa</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Sağlık Üzerine</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Sağlık Bakanlığı Duyuruları</li>
            </ol>
        </nav>
    </div>
</div>
<!-- PHP kodu burada duyuruları çekecek -->
<div id="duyuru-konteyner">



    <?php
    // Sağlık Bakanlığı web sayfasının URL'si
    $url = "https://www.saglik.gov.tr/TR,11693/duyurular.html"; // Duyuruların bulunduğu sayfanın URL'si

    // cURL başlat
    $ch = curl_init();

    // cURL seçeneklerini ayarla
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Sonuçları döndür
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Yönlendirmeleri takip et
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36');

    // URL'yi çek
    $html_content = curl_exec($ch);

    // cURL'ü kapat
    curl_close($ch);

    // HTML içeriğini DOMDocument ile işliyoruz
    $dom = new DOMDocument();
    libxml_use_internal_errors(true); // HTML hatalarını yok say
    $dom->loadHTML($html_content);

    // Duyurular kısmındaki <a> etiketlerini bakanlik_haber_link sınıfı ile çekiyoruz
    $xpath = new DOMXPath($dom);
    $links = $xpath->query("//a[contains(@class, 'bakanlik_haber_link')]");

    // Başlıkları ve linkleri yazdırıyoruz
    foreach ($links as $link) {
        $title = $link->nodeValue;
        $linkHref = $link->getAttribute('href'); // Değişken adını değiştirdik

        if (!empty($title) && !empty($linkHref)) {
            echo "<div class='duyuru-karti'><a href='$linkHref'>" . htmlspecialchars($title) . "</a></div>";
        }
    }

    ?>



    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #f3f4f6, #fdfdfd);
                padding: 0;
                margin: 0;
            }

        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 40px;
            font-size: 32px;
        }

        #duyuru-konteyner {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .duyuru-karti {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 16px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            transition: transform 0.2s ease-in-out, box-shadow 0.3s ease-in-out;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border-left: 6px solid #3498db;
            position: relative;
        }

        .duyuru-karti::before {
            content: "📰";
            font-size: 26px;
            position: absolute;
            top: 15px;
            right: 15px;
            opacity: 0.2;
        }

        .duyuru-karti a {
            text-decoration: none;
            color: #2c3e50;
            font-size: 18px;
            font-weight: 600;
            line-height: 1.5;
            transition: color 0.3s ease;
        }

        .duyuru-karti:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        }

        .duyuru-karti a:hover {
            color: #0077cc;
        }

        /* Duyuru başlıklarının stilini ayarlıyoruz */
        .news-title {
            background-color: #f4f4f4;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
            color: #333;
            text-decoration: none;
        }

        .news-title:hover {
            background-color: #e0e0e0;
        }
    </style>

</div>


<?php include 'js-library.php'; ?>
<?php include 'footer.php'; ?>
</body>

</html>