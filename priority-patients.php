<!DOCTYPE html>
<html lang="en">


<?php include 'head.php'; ?>



<body>

  <?php include 'spinner.php'; ?>
  <?php include 'topbar.php'; ?>
  <?php include 'navbar.php'; ?>


  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
      <h1 class="display-3 text-white mb-3 animated slideInDown">Öncelikli Hastalar</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a class="text-white" href="#">Anasayfa</a></li>
          <li class="breadcrumb-item"><a class="text-white" href="#">Kurumsal</a></li>
          <li class="breadcrumb-item text-white active" aria-current="page">Öncelikli Hastalar</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- Page Header End -->

  <div class="container my-5">
    <div class="table-responsive">
      <table class="table table-hover table-striped table-bordered shadow-sm rounded text-center align-middle">
        <thead class="bg-danger text-white">
          <tr>
            <th scope="col">Sıra</th>
            <th scope="col">Öncelikli Hasta Grubu</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Acil vakalar (Ani gelişen hastalık, kaza, yaralanma ve benzeri durumlar ile ivedilikle tıbbi müdahale yapılması gerektiğine hekim tarafından karar verilen vakalar)</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Engelli hastalar</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Hamileler</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Hizmetteki TSK, J. Gn.K.lığı ve S.G.k.lığı rütbeli personeli</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Harp ve vazife şehitlerinin dul ve yetimleri ile malül ve gaziler ile aileleri</td>
          </tr>
          <tr>
            <td>6</td>
            <td>65 yaş üstü yaşlılar</td>
          </tr>
          <tr>
            <td>7</td>
            <td>Yedi yaşından küçük çocuklar</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Öncelikli olarak garnizon dışından sevkle gelenler olmak üzere, hizmetteki TSK, J. Gn.K.lığı ve S.G.K.lığı personeli ve bakmakla yükümlü olduğu kişiler</td>
          </tr>
          <tr>
            <td>9</td>
            <td>Emekli TSK, J. Gn.K.lığı ve S.G.K.lığı personeli ve bakmakla yükümlü olduğu kişiler</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <style>
    .table th,
    .table td {
      padding: 10px 12px !important;
      font-size: 15px;
    }

    .table thead th {
      font-size: 16px;
      font-weight: 700;
    }

    .table tbody tr:hover {
      background-color: #f8f9fa !important;
      transition: all 0.2s ease-in-out;
    }
  </style>




  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

  <?php include 'footer.php' ?>
  <?php include 'js-library.php' ?>
</body>

</html>