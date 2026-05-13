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
                    "img" => "https://lh3.googleusercontent.com/aida-public/AB6AXuDxOlbYh-ysvtQ52ezeL9nwje-ETL1_WY4yhahz7SujmfTuVPuQEoSeduG1yLaurwZg6aigV-Xexj5cUzVD1BxHNuMm6x3fxHoH6gqJPdYOaELDW49_vbn1FTiUgWOPYq-ESCnVqcAlVM1kputElrLJjuGCQcp20b8X3yjwphZYLunDtMM05s2CCrPeBEj7WafcF9hrkybU3V0nf9uxGDFAw0D66lVJ_YiwCSEATuCpi6DiP0NLvD3mMRh1F-4xSjXBLrgtin6Cs1E",
                    "link" => "https://www.robotistan.com/dht22-sicaklik-ve-nem-sensoru-am2302?language=tr&h=ea42db85&_sgm_campaign=product&_sgm_source=1799%7Cbrand&_sgm_action=search&_sgm_term=s%C4%B1cakl%C4%B1k%20ve%20nem&_sgm_pinned=false"
                ],
                [
                    "title" => "Toprak Nem Sensörü",
                    "desc" => "Toprak iletkenliği üzerinden nem takibi.",
                    "img" => "https://lh3.googleusercontent.com/aida-public/AB6AXuDH-RubJpH8bFNggrs8b4poIuaMgUVoLsxxUlxOy-o_8vEREHAtvrpmgjaYFZNP9soCSKnLeX0fweMKd8Ge1eVMEAK8qGyG1NwJTGDr6jTqThstsFdqPyRCNd2oMnWe92CCa3bmn9plb3OVqhriuqCEe5AtDypjZPDpJPxF_p-uInA8CaVYh6x5AjYUZDlvAWCQcjNvxZ2x1xVqaxHGpPbyMXWp0PSoIiryknNcI3skb9CMd9H-we_0iQTX4h99avW1y3vUIbTql_0",
                    "link" => "https://www.robotistan.com/toprak-nemi-algilama-sensoru"
                ],
                [
                    "title" => "SD Kart Modülü",
                    "desc" => "Çevrimdışı veri kaydı ve raporlama.",
                    "img" => "https://lh3.googleusercontent.com/aida-public/AB6AXuDPxKan7bbA_SaeYr20XeOfjYaY9e530b-XkVdqY0JPJyVeEMrSDT4i_iXHNHZBh-yYj_IHZTqSIy4W7dIN-RiTGJjWGBtmHAzq4ui95aRLwq5q0wW40Aq9RkU8fyrTDJpqxKP6txkjl6hRkwhoBBibwlXZmu9uq3_3pxT5VelIO5KioMImhgRDLLRLfINcwsi9BTq4n5qzwjLEOhtnHrps-dafe9bltpBKsgyxfO_5gxH7YZ-RwB96TYSpGomn2A6CtNiGUt-K1W4",
                    "link" => "https://www.robiduck.com/urun/sd-kart-modulu?srsltid=AfmBOopffJJbJAykZNWOqcKhO34ILXLhDxyCN9YeSm9cjI7JwMsDkHiG"
                ],
                [
                    "title" => "I2C LCD Ekran",
                    "desc" => "16x2 karakterli anlık durum paneli.",
                    "img" => "https://lh3.googleusercontent.com/aida-public/AB6AXuCtoRk9wYpyxyzAhd1d_fsC78P4nO68UUAFvKZvJF_uGizaHVoFflzNvqUThkLm2X2yEHHbVgkh-Y5DPkdYp9neCS_QKizxRzKffAU8HNeXrXyFVrxSsxlF4dLVqdVN0kqR8jwH_9o-GEwVXNKEDaE4gaAU8wttZKs5TAcZSCA0eD7TgB7m326aDMLrugyDNPUPm62TgLfNwdNKmBLE3clg_kS6sTp2HPZdPJMtu7yDtAMAa3jcv6yVv1h5xRB-BC-ahcw018v2eMc",
                    "link" => "https://www.robotistan.com/16x2-lcd-ekran-i2c-lehimli-mavi-display"
                ],
                [
                    "title" => "MOSFET Sürücü Kartı",
                    "desc" => "Pompa güç yönetimi ve anahtarlama.",
                    "img" => "https://lh3.googleusercontent.com/aida-public/AB6AXuAY-5x4l9E5boZzBKxX6xSPyCJs9078YRZAHZvmejao-zbO-2EEeHWJTkt4YIv9Xz8Xb4tyRBftNbxgFLgJca2eqz9gNJfF5OTR70ufhb-Jy8rRqxJHMphMTegNPT8a-rzVCktwrAq6RgZMe-2rKNy_0QnayaEyZ4GGddGGUGKr0zin0w7c97Qo0ALzJgr8KdGH6GAtFR2u7p8RqNzxRY79tAeNd-iz0DQ3YP7rrJd_o5Vnbwa6lZ0MFIaEsaI4v0VWahKHo6QCW6k",
                    "link" => "https://www.robiduck.com/urun/irf520-mosfet-surucu-karti"
                ],
                [
                    "title" => "5V Su Pompası",
                    "desc" => "Aktüatör / Sulama birimi.",
                    "img" => "https://lh3.googleusercontent.com/aida-public/AB6AXuBFm-4ggoocb9WvnY-lzEg58IBf9RFrDjqYrofc7D5ZvtlBs3w_9d3tsLxUsIYsf1j0rHbEGSu5bnpGMIRvrveKNcRH3ODpBIzuTEhEYU5syZWQRIMQl0jh66l9QBrVo6D0AalPl82VsK5s9WNsZ7-a3JcEmx0F3Pqe9cHJHrju38iZ6d7AbdDhVUKfvrPUk5FdtKy3hkzy5iVff-wN-91bHWlU6hAlB5qsCU4OPPJgGbbuuagwTwxV6QJkB_-kY9fs1VzfMwasA9E",
                    "link" => "https://www.trendyol.com/genel-markalar/mini-dalgic-pompa-solenoid-su-pompasi-120-l-h-su-motoru-kompakt-su-transfer-cozumu-p-49284279?merchantId=357969"
                ],
                [
                    "title" => "HC-SR04 Ultrasonik Sensör",
                    "desc" => "Su deposu seviye kontrolü.",
                    "img" => "https://lh3.googleusercontent.com/aida-public/AB6AXuDi1qlpB_AZhZfNmPXDdVwItwk3C-t8zGtGnaz_XPEo45iZj4eC9XP5UtUdMW4OaOj6wmIfCBcfUWA-a1-VrJMotD_qRWMZv4vPRU6FbmKZNITepU_BHxQDGQuyhx7NMP6DO5RAMWTbBjPCjZBuVVd8tFdt74X75G9_XX1LokckvM9B99vOZp5X6Pvvh7PapbKWYG5VC_DrqtlFAZZYWyKaOp3I4A4nJxMFc4E9BuJJK6aeSFYLWPuEaCX5sMoOB7SImHTeM6_Bn68",
                    "link" => "https://www.robotistan.com/hc-sr04-ultrasonik-mesafe-sensoru"
                ],
                [
                    "title" => "IC184 Plastik Renkli Mantar Tip Buton",
                    "desc" => "Kontrol ve etkileşim için fiziksel buton.",
                    "img" => "img/mantar_buton_siyah.png",
                    "link" => "https://www.robotistan.com/ic184-plastik-renkli-mantar-tip-buton-siyah"
                ],
                [
                    "title" => "Buzzer",
                    "desc" => "Sesli uyarı ve bildirim modülü.",
                    "img" => "img/buzzer_module.png",
                    "link" => "https://www.robotistan.com/buzzer"
                ],
                [
                    "title" => "Güç Adaptörü",
                    "desc" => "Sistem güç beslemesi (24W 2A).",
                    "img" => "img/power_adapter.png",
                    "link" => "https://www.robotistan.com/global-k2-24w-2a-fisli-adaptor-kld021"
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
