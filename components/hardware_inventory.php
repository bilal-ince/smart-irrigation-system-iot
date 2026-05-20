<!-- Donanım Envanteri Bölümü Başlangıcı -->
<!-- Sorumluluk: Projede kullanılan donanım elemanlarının ve satın alma linklerinin dinamik listelenmesi. -->
<section id="donanim" class="section-padding bg-surface-container-low px-3">
    <div class="custom-container">
        <!-- Bölüm Başlığı -->
        <div class="mb-5 text-center">
            <h2 class="font-headline-lg text-on-surface">Donanım Envanteri</h2>
            <p class="font-body-md text-on-surface-variant mt-2 mx-auto" style="max-width: 650px;">
                Prototip geliştirilmesinde kullanılan temel elektronik komponentler ve sensörler.
            </p>
        </div>
        
        <!-- Donanım Kartları Grid Alanı -->
        <div class="row g-4">
            <?php
            // Donanım verilerinin tutulduğu dizi (Array). 
            // Gelecekte veritabanından çekilecek şekilde kolayca güncellenebilir.
            $hardware = [
                [
                    "title" => "Arduino Uno",
                    "desc" => "Ana kontrol ünitesi.",
                    "img" => "https://lh3.googleusercontent.com/aida-public/AB6AXuB1rwqyWFUF2UqKiYACe4y10nr3JmvwpffYneyoCNsI1-XzQhEDEUWEWmN0asHTBBGk-oaq9UfhEhiE86pjk5ZneATZfa4ncsY9fb3eeMjc_AYbT1HshUt4oo2QHkEIKHV0ct7mj1zvN2g6yhy7icDPLt3tYNjF6sRWncpDkNNxb2Md2aL8R7YIOk6eN74PJsLyKCDbDhhzOFaLUv_KJXR2U7VGh2TKQVe8GRKdJIVxLZ4xpQkZDN0BQCgHfllt3oyCdNqclFg6m10",
                    "link" => "https://www.robotistan.com/orjinal-arduino-zero?language=tr&h=9dbf7376&_sgm_campaign=product&_sgm_source=11948&_sgm_action=search&_sgm_term=ard&_sgm_pinned=false"
                ],
                [
                    "title" => "DHT22",
                    "desc" => "Hassas sıcaklık ve hava nemi ölçümü.",
                    "img" => "envanter-img/dht22-png.png",
                    "link" => "https://www.robotistan.com/dht22-sicaklik-nem-sensoru-modulu?language=tr&h=457f21e4&_sgm_campaign=product&_sgm_source=9797&_sgm_action=search&_sgm_term=dht22&_sgm_pinned=false"
                ],
                [
                    "title" => "Toprak Nem Sensörü",
                    "desc" => "Toprak iletkenliği üzerinden nem takibi.",
                    "img" => "envanter-img/toprak-nemi-sensörü.png",
                    "link" => "https://www.robotistan.com/toprak-nemi-algilama-sensoru"
                ],
                [
                    "title" => "SD Kart Modülü",
                    "desc" => "Çevrimdışı veri kaydı ve raporlama.",
                    "img" => "envanter-img/sd-kart.png",
                    "link" => "https://www.robiduck.com/urun/sd-kart-modulu?srsltid=AfmBOopffJJbJAykZNWOqcKhO34ILXLhDxyCN9YeSm9cjI7JwMsDkHiG"
                ],
                [
                    "title" => "I2C LCD Ekran",
                    "desc" => "16x2 karakterli anlık durum paneli.",
                    "img" => "envanter-img/lcd-ekran.png",
                    "link" => "https://www.robotistan.com/16x2-lcd-ekran-i2c-lehimli-mavi-display"
                ],
                [
                    "title" => "MOSFET Sürücü Kartı",
                    "desc" => "Pompa güç yönetimi ve anahtarlama.",
                    "img" => "envanter-img/mosfet.png",
                    "link" => "https://www.robiduck.com/urun/irf520-mosfet-surucu-karti"
                ],
                [
                    "title" => "5V Su Pompası",
                    "desc" => "Aktüatör / Sulama birimi.",
                    "img" => "envanter-img/su-pompasi.png",
                    "link" => "https://www.trendyol.com/genel-markalar/mini-dalgic-pompa-solenoid-su-pompasi-120-l-h-su-motoru-kompakt-su-transfer-cozumu-p-49284279?merchantId=357969"
                ],
                [
                    "title" => "HC-SR04 Ultrasonik Sensör",
                    "desc" => "Su deposu seviye kontrolü.",
                    "img" => "envanter-img/mesafe-sensörü.png",
                    "link" => "https://www.robotistan.com/hc-sr04-ultrasonik-mesafe-sensoru"
                ],
                [
                    "title" => "IC184 Plastik Renkli Mantar Tip Buton",
                    "desc" => "Kontrol ve etkileşim için fiziksel buton.",
                    "img" => "envanter-img/mantar_buton_siyah.png",
                    "link" => "https://www.robotistan.com/ic184-plastik-renkli-mantar-tip-buton-siyah"
                ],
                [
                    "title" => "Buzzer",
                    "desc" => "Sesli uyarı ve bildirim modülü.",
                    "img" => "envanter-img/buzzer_module.png",
                    "link" => "https://www.robotistan.com/buzzer"
                ],
                [
                    "title" => "Güç Adaptörü",
                    "desc" => "Sistem güç beslemesi (24W 2A).",
                    "img" => "envanter-img/power_adapter.png",
                    "link" => "https://www.robotistan.com/global-k2-24w-2a-fisli-adaptor-kld021"
                ],
                [
                    "title" => "Ham MDF Panel (6mm)",
                    "desc" => "Sistem bileşenlerinin montaj plakası.",
                    "img" => "envanter-img/panel.png",
                    "link" => "https://www.bauhaus.com.tr/ham-mdf-2100-2800-06-mm-61514933"
                ],
                [
                    "title" => "Şeffaf PVC Hortum",
                    "desc" => "Su motorundan bitkiye sıvı aktarımı (6x10mm).",
                    "img" => "envanter-img/boru.png",
                    "link" => "https://www.bauhaus.com.tr/plahosan-pvc-seffaf-6x10mm-otomotiv-hortum-61045956"
                ],
                [
                    "title" => "Çilek Fidesi",
                    "desc" => "Referans olarak yetiştirilecek ve sensör verileri okunacak bitki.",
                    "img" => "envanter-img/cilek.png",
                    "link" => "https://www.bauhaus.com.tr/cilek-60304362"
                ]
            ];

            foreach($hardware as $h) {
                // Determine href and target
                $href = !empty($h["link"]) ? $h["link"] : "#";
                $target = !empty($h["link"]) ? 'target="_blank"' : '';
                
                // For placeholder images of new components, I use a generic icon approach if image fails, but here I provided a generic image url.
                echo '
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="'.$href.'" '.$target.' class="text-decoration-none">
                        <div class="bg-surface-container-lowest rounded-3 p-4 shadow-soft border border-outline-variant h-100 d-flex flex-column gap-3 hover-lift" style="transition: all 0.3s ease;">
                            <div class="w-100 bg-surface rounded-3 p-2 d-flex align-items-center justify-content-center overflow-hidden flex-shrink-0 position-relative" style="height: 128px;">
                                <img src="'.$h["img"].'" alt="'.$h["title"].'" class="w-100 h-100 object-fit-contain" style="mix-blend-mode: multiply;" onerror="this.onerror=null; this.src=\'data:image/svg+xml;utf8,<svg xmlns=\\\'http://www.w3.org/2000/svg\\\' width=\\\'50\\\' height=\\\'50\\\' viewBox=\\\'0 0 24 24\\\' fill=\\\'none\\\' stroke=\\\'%234e6073\\\' stroke-width=\\\'2\\\' stroke-linecap=\\\'round\\\' stroke-linejoin=\\\'round\\\'><rect x=\\\'2\\\' y=\\\'3\\\' width=\\\'20\\\' height=\\\'14\\\' rx=\\\'2\\\' ry=\\\'2\\\'></rect><line x1=\\\'8\\\' y1=\\\'21\\\' x2=\\\'16\\\' y2=\\\'21\\\'></line><line x1=\\\'12\\\' y1=\\\'17\\\' x2=\\\'12\\\' y2=\\\'21\\\'></line></svg>\';">
                                ';
                                if (!empty($h["link"])) {
                                    echo '<div class="position-absolute top-0 end-0 p-2"><span class="material-symbols-outlined text-primary" style="font-size: 16px;">open_in_new</span></div>';
                                }
                echo '
                            </div>
                            <div class="d-flex flex-column h-100">
                                <h4 class="font-headline-md text-on-surface mb-2" style="font-size: 18px; line-height: 24px;">'.$h["title"].'</h4>
                                <p class="font-body-md text-on-surface-variant mb-0" style="font-size: 14px; line-height: 20px;">'.$h["desc"].'</p>
                            </div>
                        </div>
                    </a>
                </div>';
            }
            ?>
        </div>
    </div>
        </div>
    </div>
</section>
<!-- Donanım Envanteri Bölümü Sonu -->
