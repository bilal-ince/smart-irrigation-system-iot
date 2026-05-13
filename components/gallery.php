<!-- Proje Galerisi Bölümü Başlangıcı -->
<!-- Sorumluluk: img/ klasöründeki görüntüleri tarayarak Bootstrap Carousel (Slider) içerisinde göstermek. -->
<section id="galeri" class="section-padding bg-surface px-3">
    <div class="custom-container" style="max-width: 1000px;">
        <!-- Bölüm Başlığı -->
        <div class="mb-5 text-center">
            <h2 class="font-headline-lg text-on-surface">Proje Galerisi</h2>
            <p class="font-body-md text-on-surface-variant mt-2 mx-auto" style="max-width: 650px;">
                Sistem kurulumuna ve prototip aşamasına ait görseller.
            </p>
        </div>
        
        <?php
        // img/ dizinini tarayıp uygun uzantılı dosyaları slider'a dahil et.
        $images = [];
        $img_dir = 'img/';
        if (is_dir($img_dir)) {
            $files = scandir($img_dir);
            foreach ($files as $file) {
                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                    $images[] = $img_dir . $file;
                }
            }
        }
        
        if (empty($images)) {
            echo '<div class="col-12 text-center text-on-surface-variant"><p>Henüz galeriye fotoğraf eklenmedi. Lütfen <strong>img/</strong> klasörüne fotoğraf yükleyin.</p></div>';
        } else {
            ?>
            <div class="bg-surface-container-lowest rounded-4 p-2 p-md-3 shadow-soft border border-outline-variant">
                <div id="projectGalleryCarousel" class="carousel slide" data-bs-ride="carousel">
                    
                    <!-- Indicators -->
                    <div class="carousel-indicators mb-3">
                        <?php foreach($images as $index => $img): ?>
                            <button type="button" data-bs-target="#projectGalleryCarousel" data-bs-slide-to="<?= $index ?>" <?= $index === 0 ? 'class="active" aria-current="true"' : '' ?> aria-label="Görsel <?= $index + 1 ?>"></button>
                        <?php endforeach; ?>
                    </div>
                    
                    <!-- Carousel Items -->
                    <div class="carousel-inner rounded-3 bg-surface-container">
                        <?php foreach($images as $index => $img): ?>
                            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                <div class="d-flex align-items-center justify-content-center w-100" style="height: 500px; max-height: 60vh;">
                                    <img src="<?= $img ?>" class="d-block w-100 h-100" alt="Galeri Görseli <?= $index + 1 ?>" style="object-fit: contain;">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#projectGalleryCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-primary rounded-circle p-3" aria-hidden="true" style="opacity: 0.8; width: 40px; height: 40px; background-size: 50%;"></span>
                        <span class="visually-hidden">Önceki</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#projectGalleryCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-primary rounded-circle p-3" aria-hidden="true" style="opacity: 0.8; width: 40px; height: 40px; background-size: 50%;"></span>
                        <span class="visually-hidden">Sonraki</span>
                    </button>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</section>
<!-- Proje Galerisi Bölümü Sonu -->
