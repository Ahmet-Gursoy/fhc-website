<?php include 'topbar.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'head.php'; ?>
<?php include 'spinner.php'; ?>
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">ASM Talimatları</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Anasayfa</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Dosyalar</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">ASM Talimatları</li>
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
    <a class="pdf-link" href="document/1.pdf" target="_blank">📄 1-Temizlik Talimatları Genel (PDF)</a>
    <a class="pdf-link" href="document/2.pdf" target="_blank">📄 2-Temizlik ve Dezenfeksiyon Talimatı (PDF)</a>
    <a class="pdf-link" href="document/3.pdf" target="_blank">📄 3-Emzirme Talimatı (PDF)</a>
</div>


<?php include 'js-library.php'; ?>
<?php include 'footer.php'; ?>