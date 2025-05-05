<?php include 'topbar.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'head.php'; ?>
<?php include 'spinner.php'; ?>
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Aile Sağlık Merkezimizin Fotoğrafları</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Anasayfa</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Galeri</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Aile Sağlık Merkezimizin Fotoğrafları</li>
            </ol>
        </nav>
    </div>
</div>

<div class="gallery">
    <img src="img/asm3.jpg" class="thumbnail" alt="1">
    <img src="img/asm1.jpg" class="thumbnail" alt="2">
    <img src="img/asm4.jpg" class="thumbnail" alt="3">
    <img src="img/asm2.jpg" class="thumbnail" alt="4">
</div>

<div class="lightbox" id="lightbox">
    <span class="close" id="closeBtn">&times;</span>
    <img class="lightbox-img" id="lightboxImg" src="">
    <a class="prev" id="prevBtn">&#10094;</a>
    <a class="next" id="nextBtn">&#10095;</a>
</div>



<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0px;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .gallery {
        display: flex;
        flex-wrap: wrap;    
        gap: 20px;
        justify-content: center;
        margin-top: 50px;
    }

    .thumbnail {
        width: 220px;
        height: 150px;
        object-fit: cover;
        cursor: pointer;
        border-radius: 10px;
        border: 3px solid #ccc;
        transition: transform 0.3s ease, border-color 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .thumbnail:hover {
        transform: scale(1.07);
        border-color: #666;
    }

    .lightbox {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        align-items: center;
        justify-content: center;
        padding: 10px;
    }

    .lightbox-img {
        max-width: 100%;
        max-height: 90vh;
        border-radius: 10px;
        box-shadow: 0 0 25px rgba(255, 255, 255, 0.3);
    }

    .close,
    .prev,
    .next {
        position: absolute;
        color: white;
        font-size: 50px;
        font-weight: bold;
        cursor: pointer;
        user-select: none;
        transition: color 0.3s ease;
    }

    .close {
        top: 20px;
        right: 30px;
    }

    .prev {
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
    }

    .next {
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
    }

    .close:hover,
    .prev:hover,
    .next:hover {
        color: #ccc;
    }

    /* 📱 Mobil uyumluluk */
    @media (max-width: 600px) {
        .thumbnail {
            width: 90%;
            height: auto;
        }

        .prev,
        .next {
            font-size: 40px;
        }

        .close {
            font-size: 40px;
            right: 15px;
            top: 10px;
        }
    }

    .gallery , .lightbox {
        flex: 1;
    }
</style>
<script>
    const thumbnails = document.querySelectorAll('.thumbnail');
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightboxImg');
    const closeBtn = document.getElementById('closeBtn');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    let currentIndex = 0;

    const images = Array.from(thumbnails).map(img => img.src);

    thumbnails.forEach((img, index) => {
        img.addEventListener('click', () => {
            lightbox.style.display = 'flex';
            lightboxImg.src = images[index];
            currentIndex = index;
        });
    });

    closeBtn.onclick = () => {
        lightbox.style.display = 'none';
    };

    prevBtn.onclick = () => {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        lightboxImg.src = images[currentIndex];
    };

    nextBtn.onclick = () => {
        currentIndex = (currentIndex + 1) % images.length;
        lightboxImg.src = images[currentIndex];
    };

    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            lightbox.style.display = 'none';
        }
    });
</script>

<footer><?php include 'footer.php'; ?></footer>
<?php include 'js-library.php'; ?>