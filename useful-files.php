<?php include 'topbar.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'head.php'; ?>
<?php include 'spinner.php'; ?>
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Yararlı Dosyalar</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Anasayfa</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Dosyalar</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Yararlı Dosyalar</li>
            </ol>
        </nav>
    </div>

</div>
<style>
.pdf-link {
    display: block;
    margin: 10px auto;
    padding: 15px 20px;
    width: 80%;
    max-width: 500px;
    background-color: #f8f9fa;
    color: #dc3545;
    border: 2px solid #dc3545;
    border-radius: 10px;
    text-decoration: none;
    font-size: 20px;
    font-weight: bold;
    transition: all 0.3s ease;
}

.pdf-link:hover {
    background-color: #dc3545;
    color: white;
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(220, 53, 69, 0.4);
}
</style>

<div style="text-align:center;">
    <a class="pdf-link" href="img/1-2.png" target="_blank">📄 1-El Antiseptiği Afişi (PDF)</a>
    <a class="pdf-link" href="document/4.pdf" target="_blank">📄 2-Başarılı Emzirme 10 Adım (PDF)</a>
    <a class="pdf-link" href="img/1-3.jpg" target="_blank">📄 3-El Yıkama Afişi 5'li Endikasyon (PDF)</a>
    <a class="pdf-link" href="document/5.pdf" target="_blank">📄 4-Emzirme El Afişi (PDF)</a>
    <a class="pdf-link" href="document/6.pdf" target="_blank">📄 5-Emzirme Teknikleri (PDF)</a>
    <a class="pdf-link" href="document/7.pdf" target="_blank">📄 6-Gebelik Dönemi Beslenmesi (PDF)</a>
</div>


<?php include 'js-library.php'; ?>
<?php include 'footer.php'; ?>