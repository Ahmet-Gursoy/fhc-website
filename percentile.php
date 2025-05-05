<?php include 'topbar.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'head.php'; ?>
<?php include 'spinner.php'; ?>

<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Persentil Eğrisi</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Anasayfa</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Sağlık Üzerine</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Persentil Eğrisi</li>
            </ol>
        </nav>
    </div>
</div>







<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <!-- Kız Çocukları -->
        <div class="col-md-6 mb-4">
            <a href="kpercentile.php" class="persentil-card">
                <img src="img/kchild.png" alt="Kız Çocuk Persentil Tablosu" class="persentil-img">
                <div class="persentil-content">
                    <h3>Kız Çocukları Persentil Tablosu</h3>
                    <p>Yaşa göre vücut kitle indeksi, boy ve kilo yüzdelik değerleri</p>
                </div>
            </a>
        </div>

        <!-- Erkek Çocukları -->
        <div class="col-md-6 mb-4">
            <a href="epercentile.php" class="persentil-card">
                <img src="img/echild.jpg" alt="Erkek Çocuk Persentil Tablosu" class="persentil-img">
                <div class="persentil-content">
                    <h3>Erkek Çocukları Persentil Tablosu</h3>
                    <p>Yaşa göre vücut kitle indeksi, boy ve kilo yüzdelik değerleri</p>
                </div>
            </a>
        </div>
    </div>
</div>



<style>.persentil-card {
    display: block;
    text-decoration: none;
    color: inherit;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.persentil-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 30px rgba(0, 0, 0, 0.2);
}

.persentil-img {
    width: 100%;
    height: 250px;
    object-fit: cover;
}

.persentil-content {
    padding: 20px;
    background-color: #fff;
    text-align: center;
}

.persentil-content h3 {
    font-size: 20px;
    margin-bottom: 10px;
    color: #d32f2f;
}

.persentil-content p {
    font-size: 16px;
    color: #555;
}
</style>






























































<?php include 'js-library.php'; ?>
<?php include 'footer.php'; ?>