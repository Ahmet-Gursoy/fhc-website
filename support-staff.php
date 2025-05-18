<!DOCTYPE html>
<html>
<?php include 'topbar.php' ?>
<head>
    <?php include 'head.php' ?>
</head>

<body>
    <?php include 'spinner.php' ?>
    <?php include 'navbar.php' ?>
    
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Yardımcı Personellerimiz</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Anasayfa</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Kadromuz</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Yardımcı Personellerimiz</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Team Start -->
    <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Kadromuz</h6>
            <h1 class="mb-4">Aile Sağlığı Çalışanlarımız</h1>
        </div>

        <div class="row g-4">
            <!-- 1. Kart -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img class="img-fluid w-75" src="img/staff.png" alt="">
                        </div>
                        <div class="p-4">
                            <h5>Hemşire Tuba Şahin</h5>
                        </div>
                    </div>
                </div>

            <!-- 2. Kart -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden text-center custom-card">
                    <div class="image-container">
                        <img src="img/staff3.jpg" alt="">
                    </div>
                    <div class="p-4">
                        <h5>Görevli Mükkerem Akyüz</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .team-item {
    background: #ffffff;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

/* Kartların hover hali */
.team-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 24px rgba(0,0,0,0.2);
}
.image-container {
    width: 100%;
    height: 300px;
    overflow: hidden;
    position: relative;
}

.image-container img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}


.custom-card {
    background: #fff;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}


.custom-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 24px rgba(0,0,0,0.2);
}


.custom-card h5 {
    margin-top: 15px;
    font-weight: bold;
    color: #333;
}
        .image-container {
            width: 100%;
            height: 300px;
            overflow: hidden;
            position: relative;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>


    <!-- Team End -->
    <?php include 'js-library.php' ?>
    <?php include 'footer.php' ?>

</body>