<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
<?php include 'spinner.php'; ?>
<body>
<?php include'navbar.php' ?>
<div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Hizmet Standartları</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Anasayfa</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Kurumsal</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Hizmet Standartları</li>
                </ol>
            </nav>
        </div>
    </div>
    <table class="table table-hover table-striped table-bordered shadow-sm rounded">
  <thead class="bg-danger text-white text-center">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Hizmetin Adı</th>
      <th scope="col">Başvuruda İstenen Belgeler</th>
      <th scope="col">Hizmetin Tamamlanma Süresi</th>
    </tr>
  </thead>
  
  
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Hekim Seçme (İlk Kayıt)</td>
      <td>T.C.Kimlik Numaralı Nüfus Cüzdanı</td>
      <td>1 HAFTA</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Hekim Seçme (Hekim Değiştirme)</td>
      <td>T.C.Kimlik Numaralı Nüfus Cüzdanı, Aile Hekimi Tercih Formu , dilekçe</td>
      <td>1 HAFTA</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Poliklinik Muayene</td>
      <td>T.C.Kimlik Numaralı Nüfus Cüzdanı</td>
      <td>AYNI GÜN</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Misafir Hasta Muayenesi</td>
      <td>T.C.Kimlik Numaralı Nüfus Cüzdanı</td>
      <td>AYNI GÜN</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Sağlık Kurumuna Sevk</td>
      <td>T.C.Kimlik Numaralı Nüfus Cüzdanı</td>
      <td>AYNI GÜN</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Küçük Cerrahi Müdehale</td>
      <td>T.C.Kimlik Numaralı Nüfus Cüzdanı</td>
      <td>AYNI GÜN</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Tek Hekim Raporu</td>
      <td>T.C.Kimlik Numaralı Nüfus Cüzdanı, dilekçe, 2 adet fotoğraf</td>
      <td>AYNI GÜN</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Basit Laboratuar Tetkikleri</td>
      <td>T.C.Kimlik Numaralı Nüfus Cüzdanı</td>
      <td>3 GÜN</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Detaylı Laboratuvar Tetkikleri</td>
      <td>T.C.Kimlik Numaralı Nüfus Cüzdanı</td>
      <td>YOK</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>Adli İşlemler (Otopsi v.b.)</td>
      <td>-</td>
      <td>YOK</td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td>İzlemler (Bebek, Çocuk, Kadın)</td>
      <td>T.C.Kimlik Numaralı Nüfus Cüzdanı</td>
      <td>AYNI GÜN</td>
    </tr>
    <tr>
      <th scope="row">12</th>
      <td>Gezici ve Yerinde Bakım Sağlık Hizmetleri</td>
      <td>T.C.Kimlik Numaralı Nüfus Cüzdanı</td>
      <td>YOK</td>
    </tr>
    <tr>
      <th scope="row">13</th>
      <td>Ev Ziyareti</td>
      <td>T.C.Kimlik Numaralı Nüfus Cüzdanı</td>
      <td>1 HAFTA</td>
    </tr>
    <tr>
      <th scope="row">14</th>
      <td>Evde Bakım Hizmetleri</td>
      <td>T.C.Kimlik Numaralı Nüfus Cüzdanı</td>
      <td>YOK</td>
    </tr>
    <tr>
      <th scope="row">15</th>
      <td>Bağışıklama Faaliyetleri</td>
      <td>T.C.Kimlik Numaralı Nüfus Cüzdanı</td>
      <td>AYNI GÜN</td>
    </tr>
    <tr>
      <th scope="row">16</th>
      <td>Aile Planlaması Hizmetleri</td>
      <td>T.C.Kimlik Numaralı Nüfus Cüzdanı</td>
      <td>AYNI GÜN</td>
    </tr>
    <tr>
      <th scope="row">17</th>
      <td>Eğitimler (Örn: Halk Sağlığı Eğitimleri)</td>
      <td>-</td>
      <td>1 HAFTA</td>
    </tr>
    <tr>
      <th scope="row">18</th>
      <td>Sürekli İlaç Kullanım Raporu (AH Uzmanı)</td>
      <td>T.C.Kimlik Numaralı Nüfus Cüzdanı</td>
      <td>YOK</td>
    </tr>
  </tbody>
</table>
<style>
.table {
    border-radius: 15px;
    overflow: hidden;
    margin-bottom: 0; /* Alt boşlukları kaldırır */
}

thead th {
    background-color: #dc3545 !important; /* Kırmızı renk (Bootstrap danger rengi) */
    color: white;
    font-size: 17px;
    padding: 10px !important;
}

tbody td, tbody th {
    padding: 8px !important; /* Satır boşluklarını azalttık */
    font-size: 15px;
    vertical-align: middle !important;
}

tbody tr:hover {
    background-color: #f8f9fa;
    transition: all 0.2s ease-in-out;
}
</style>

<?php include'footer.php' ?>
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

<?php include'js-library.php' ?>
</body>
</html>