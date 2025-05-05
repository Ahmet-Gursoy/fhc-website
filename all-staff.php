<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-4">KADROMUZ</h1>
        </div>

        <!-- Oklar ve Kartlar -->
        <div class="position-relative">

            <!-- Sol Ok -->
            <button id="scrollLeft" class="btn btn-primary position-absolute top-50 start-0 translate-middle-y" style="z-index: 10;">
                &#10094;
            </button>

            <!-- Kart Alanı -->
            <div id="scrollContainer" class="d-flex" style="overflow-x: hidden; gap: 20px;">
                <div class="team-item rounded overflow-hidden" style="min-width: 250px;">
                    <img class="img-fluid" src="img/erkekdoktor.jpg" alt="Dr.Davut Gürsoy">
                    <div class="p-4">
                        <h5>Dr.Davut Gürsoy</h5>
                    </div>
                </div>
                <div class="team-item rounded overflow-hidden" style="min-width: 250px;">
                    <img class="img-fluid" src="img/erkekdoktor.jpg" alt="Dr.Serhat Yüksel">
                    <div class="p-4">
                        <h5>Dr.Serhat Yüksel</h5>
                    </div>
                </div>
                <div class="team-item rounded overflow-hidden" style="min-width: 250px;">
                    <img class="img-fluid" src="img/kadındoktor.jpg" alt="Dr.Neşe Meşeli">
                    <div class="p-4">
                        <h5>Dr.Neşe Meşeli</h5>
                    </div>
                </div>
                <div class="team-item rounded overflow-hidden" style="min-width: 250px;">
                    <img class="img-fluid" src="img/staff.png" alt="Hemşire Sibel İnce">
                    <div class="p-4">
                        <h5>Hemşire Sibel İnce</h5>
                    </div>
                </div>
                <div class="team-item rounded overflow-hidden" style="min-width: 250px;">
                    <img class="img-fluid" src="img/staff.png" alt="Hemşire Tuba Şahin">
                    <div class="p-4">
                        <h5>Hemşire Tuba Şahin</h5>
                    </div>
                </div>
                <div class="team-item rounded overflow-hidden" style="min-width: 250px;">
                    <img class="img-fluid" src="img/staff.png" alt="Ebe Nur Akgün">
                    <div class="p-4">
                        <h5>Ebe Nur Akgün</h5>
                    </div>
                </div>
                <div class="team-item rounded overflow-hidden" style="min-width: 250px;">
                    <img class="img-fluid" src="img/staff.png" alt="Hemşire Elif Ezgi Sönmez">
                    <div class="p-4">
                        <h5>Hemşire Elif Ezgi Sönmez</h5>
                    </div>
                </div>
                <div class="team-item rounded overflow-hidden" style="min-width: 250px;">
                    <img class="img-fluid" src="img/staff.png" alt="Görevli Mükkerem Akyüz">
                    <div class="p-4">
                        <h5>Görevli Mükkerem Akyüz</h5>
                    </div>
                </div>
            </div>

            <!-- Sağ Ok -->
            <button id="scrollRight" class="btn btn-primary position-absolute top-50 end-0 translate-middle-y" style="z-index: 10;">
                &#10095;
            </button>

        </div>
    </div>
</div>

<!-- Kaydırma için küçük JS -->
<script>
    const scrollContainer = document.getElementById('scrollContainer');
    const scrollLeft = document.getElementById('scrollLeft');
    const scrollRight = document.getElementById('scrollRight');

    scrollLeft.addEventListener('click', () => {
        scrollContainer.scrollBy({ left: -300, behavior: 'smooth' });
    });

    scrollRight.addEventListener('click', () => {
        scrollContainer.scrollBy({ left: 300, behavior: 'smooth' });
    });
</script>
