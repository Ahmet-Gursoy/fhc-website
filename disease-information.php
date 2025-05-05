<?php include 'topbar.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'head.php'; ?>
<?php include 'spinner.php'; ?>
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Hastalıklar Hakkında</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Anasayfa</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Dosyalar</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Hastalıklar Hakkında</li>
            </ol>
        </nav>
    </div>

</div>
<style>
    .pdf-link {
    display: block;
    margin: 10px 0;
    padding: 15px 20px;
    width: 100%; /* burada değişiklik */
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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <a class="pdf-link" href="document/3-1.pdf" target="_blank">📄 1-Diyabet (şeker) hastalığı dökümanı (PDF)</a>
            <a class="pdf-link" href="document/3-2.pdf" target="_blank">📄 2-Kalp damar tansiyon hastalığı dökümanı (PDF)</a>
            <a class="pdf-link" href="document/3-3.pdf" target="_blank">📄 3-Menapoz kemik erimesi hastalığı dökümanı (PDF)</a>
            <a class="pdf-link" href="document/3-4.pdf" target="_blank">📄 4-Sindirim sistemi hastalığı dökümanı (PDF)</a>
            <a class="pdf-link" href="document/3-5.pdf" target="_blank">📄 5-Solunum sistemi hastalığı dökümanı (PDF)</a>
            <a class="pdf-link" href="#" target="_blank">📄 6-Besin alerjisi hastalıklarında beslenme (PDF)</a>
            <a class="pdf-link" href="document/3-7.pdf" target="_blank">📄 7-Böbrek hastalıklarında beslenme (PDF)</a>
        </div>
        <div class="col-md-6">
            <a class="pdf-link" href="document/3-8.pdf" target="_blank">📄 8-Kanser hastalıklarında beslenme (PDF)</a>
            <a class="pdf-link" href="#" target="_blank">📄 9-Anne - Bebek sunumu (PDF)</a>
            <a class="pdf-link" href="#" target="_blank">📄 10-Ağız ve diş sağlığı sunumu (PDF)</a>
            <a class="pdf-link" href="#" target="_blank">📄 11-Tüberküloz hastalığı sunumu (PDF)</a>
            <a class="pdf-link" href="#" target="_blank">📄 12-Domuz gribi sunumu (PDF)</a>
            <a class="pdf-link" href="#" target="_blank">📄 13-Beslenmenin Önemi ve Besin Grupları (PDF)</a>
            <a class="pdf-link" href="#" target="_blank">📄 14-Temizlik ve Hijyen (PDF)</a>
        </div>
    </div>
</div>



<?php include 'js-library.php'; ?>
<?php include 'footer.php'; ?>