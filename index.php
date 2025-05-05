<!DOCTYPE html>
<html lang="en">
<!-- Q3JlYXRlZCBieSBLUw== -->
<?php include 'head.php'; ?>


<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <?php include 'topbar.php'; ?>
    <?php include 'navbar.php'; ?>


    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/carousel-1.jpg'>">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/carousel-2.jpg'>">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/carousel-3.jpg'>">
                <img class="img-fluid" src="img/carousel-3.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/carousel-4.jpg'>">
                <img class="img-fluid" src="img/carousel-4.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel End -->

    <hr>
    <div class="text-center"><a href="working-hours.php">
            <h1 style="color:#F53A01;">->ÇALIŞMA SAATLERİMİZ</h1>
        </a>
        <p>Buradan çalışma saatlerimiz ve esnek mesai tablomuz hakkında bilgi alabilirsiniz</p>
    </div>
    <hr>




    <?php include 'staff.php' ?>

    <!-- Service Start -->
    <style>
        .service-item {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-item:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
    </style>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <hr>
                <h1 class="text-primary" style="color:red !important;">ASM REHBERİ</h1>
            </div>
            <div class="row g-4">

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="coming-to-asm.php" class="text-decoration-none">
                        <div class="service-item rounded overflow-hidden">
                            <img class="img-fluid" src="img/asmfoto2.jpg" alt="">
                            <div class="position-relative p-4 pt-0">
                                <h4 class="mb-3 text-dark">ASM'ye Gelirken</h4>
                                <p class="text-dark">Aile Sağlığı Merkezimize gelirken yanınızda T.C kimlik numarasının yazılı olduğu nüfus cüzdanınızı, ehliyetinizi veya özel...</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="examination.php" class="text-decoration-none">
                        <div class="service-item rounded overflow-hidden">
                            <img class="img-fluid" src="img/examination.jpg" alt="">
                            <div class="position-relative p-4 pt-0">
                                <h4 class="mb-3 text-dark">Tetik İşlemleri</h4>
                                <p class="text-dark">AİLE SAĞLIĞI MERKEZİMİZDE YAPILABİLEN TETKİKLER...</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="patient-rights.php" class="text-decoration-none">
                        <div class="service-item rounded overflow-hidden">
                            <img class="img-fluid" src="img/patient-rights2.jpg" alt="">
                            <div class="position-relative p-4 pt-0">
                                <h4 class="mb-3 text-dark">Hasta Hakları</h4>
                                <p class="text-dark">HASTA HAKLARI VE SORUMLUKLARI NELERDİR?</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="service-standards.php" class="text-decoration-none">
                        <div class="service-item rounded overflow-hidden">
                            <img class="img-fluid" src="img/service-standards.jpg" alt="">
                            <div class="position-relative p-4 pt-0">
                                <h4 class="mb-3 text-dark">Hizmet Standartları</h4>
                                <p class="text-dark">Hizmet Standartlarımız</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="service-policy.php" class="text-decoration-none">
                        <div class="service-item rounded overflow-hidden">
                            <img class="img-fluid" src="img/service-policy.jpg" alt="">
                            <div class="position-relative p-4 pt-0">
                                <h4 class="mb-3 text-dark">Hizmet Politikamız</h4>
                                <p class="text-dark">Kaliteli, standart üstü ve insan faktörünü ön planda tutan anlayışla hizmet vermeyi amaç edinmiş...</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="inspection-procedures.php" class="text-decoration-none">
                        <div class="service-item rounded overflow-hidden">
                            <img class="img-fluid" src="img/inspection-procedures5.jpg" alt="">
                            <div class="position-relative p-4 pt-0">
                                <h4 class="mb-3 text-dark">Muayne İşlemleri</h4>
                                <p class="text-dark">MUAYNE İŞLEMLERİNİZ...</p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- Service End -->

    <a href="sayhello.php" style="position:absolute;opacity:1000;">-</a>

    <!--Hizmetler Başlangıç -->

    <style>
        .icon-box {
            width: 50px;
            height: 50px;
        }
    </style>
    <div class="container py-5">
        <hr>
        <h3 class="text-center text-danger fw-bold mb-4">HİZMETLER</h3>
        <div class="row justify-content-center g-4">

            <!-- Kart 1 -->
            <div class="col-md-5 col-lg-4">
                <div class="card shadow-lg p-3">
                    <div class="d-flex align-items-start gap-3">
                        <i class="bi bi-heart-fill text-danger fs-2"></i>
                        <div>
                            <h5 class="text-danger fw-semibold">Poliklinik Muayenesi</h5>
                            <p class="mb-0">Birinci basamak muayene hizmetleri verilmektedir.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Kart 2 -->
            <div class="col-md-5 col-lg-4">
                <div class="card shadow-lg p-3">
                    <div class="d-flex align-items-start gap-3">
                        <i class="bi bi-heart-fill text-danger fs-2"></i>
                        <div>
                            <h5 class="text-danger fw-semibold">İzlemler</h5>
                            <p class="mb-0">Gebe, bebek, çocuk vb. izlemleri yapılmaktadır.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Kart 3 -->
            <div class="col-md-5 col-lg-4">
                <div class="card shadow-lg p-3">

                    <div class="d-flex align-items-start gap-3">
                        <i class="bi bi-heart-fill text-danger fs-2"></i>
                        <div>
                            <h5 class="text-danger fw-semibold">Bağışıklama Hizmetleri</h5>
                            <p class="mb-0">Aşı uygulamaları ve takibi yapılmaktadır.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Kart 4 -->
            <div class="col-md-5 col-lg-4">
                <div class="card shadow-lg p-3">

                    <div class="d-flex align-items-start gap-3">
                        <i class="bi bi-heart-fill text-danger fs-2"></i>
                        <div>
                            <h5 class="text-danger fw-semibold">Aile Planlaması</h5>
                            <p class="mb-0">Aile planlaması hizmetleri sunulmaktadır.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Kart 5 -->
            <div class="col-md-5 col-lg-4">
                <div class="card shadow-lg p-3">

                    <div class="d-flex align-items-start gap-3">
                        <i class="bi bi-heart-fill text-danger fs-2"></i>
                        <div>
                            <h5 class="text-danger fw-semibold">Laboratuvar Tetkikleri</h5>
                            <p class="mb-0">Tetkikler Halk Sağlığı Merkezi tarafından yapılır.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Kart 6 -->
            <div class="col-md-5 col-lg-4">
                <div class="card shadow-lg p-3">

                    <div class="d-flex align-items-start gap-3">
                        <i class="bi bi-heart-fill text-danger fs-2"></i>
                        <div>
                            <h5 class="text-danger fw-semibold">Halk Eğitimleri</h5>
                            <p class="mb-0">AÇSAP, hijyen vb. konularda eğitim verilmektedir.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>




    <!--Hizmetler Bitiş -->

    <!-- Projects Start -->
    <hr>
    <h1 style="text-align: center; color:red;">Bilgilendirme</h1>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">

                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <a href="announcements1.php" class="text-decoration-none">
                        <div class="service-item rounded overflow-hidden">
                            <img class="img-fluid" src="img/600x400-6.jpg" alt="">
                            <div class="position-relative p-4 pt-0">
                                <hr class="text-primary w-25 my-2">
                                <h5 class="lh-base text-dark">Beslenme ve Fiziksel Aktiviteler Daire Başkanlığı Yayınları</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <a href="announcements2.php" class="text-decoration-none">
                        <div class="service-item rounded overflow-hidden">
                            <img class="img-fluid" src="img/600x400-5-2.jpg" alt="">
                            <div class="position-relative p-4 pt-0">
                                <hr class="text-primary w-25 my-2">
                                <h5 class="lh-base text-dark">Akılcı İlaç ve Antibiyotik Kullanımı</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <a href="announcements3.php" class="text-decoration-none">
                        <div class="service-item rounded overflow-hidden">
                            <img class="img-fluid" src="img/antibiyotik.jpg" alt="">
                            <div class="position-relative p-4 pt-0">
                                <hr class="text-primary w-25 my-2">
                                <h5 class="lh-base text-dark">Doğru Antibiyotik Kullanımı</h5>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <style>
        .service-item {
            transition: all 0.3s ease;
        }

        .service-item:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
    </style>

    <!-- Projects End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>
        


    <?php include 'js-library.php' ?>
    <?php include 'footer.php' ?>
</body>

</html>