<!-- Bitki Nem Rehberi Bölümü Başlangıcı -->
<!-- Sorumluluk: Sistemin desteklediği örnek bitki türlerini ve nem gereksinimlerini listelemek. -->
<section id="bitki-rehberi" class="section-padding bg-surface px-3">
    <div class="custom-container">
        <div class="mb-5 d-flex flex-column gap-2 flex-md-row align-items-md-end justify-content-md-between">
            <div>
                <h2 class="font-headline-lg text-on-surface mb-0">Bitki Nem Rehberi</h2>
                <p class="font-body-md text-on-surface-variant mt-2 mb-0">Sistem tarafından desteklenen referans bitki türleri ve optimum yetişme koşulları.</p>
            </div>
        </div>
        
        <div class="row g-4">
            <?php
            $plants = [
                [
                    "title" => "Çilek",
                    "type" => "Meyve",
                    "desc" => "Yüzey köklü yapısı sebebiyle düzenli ve hassas sulama gerektirir.",
                    "humidity" => "%65",
                    "img" => "envanter-img/cilek.png",
                    "link" => "https://www.bauhaus.com.tr/cilek-60304362"
                ],
                [
                    "title" => "Zeytin",
                    "type" => "Ağaç",
                    "desc" => "Kuraklığa dayanıklı olmasına rağmen ilk gelişim evresinde kontrollü sulama ister.",
                    "humidity" => "%45",
                    "img" => "https://lh3.googleusercontent.com/aida-public/AB6AXuBfi341XifaHWgsoEk_YKIKwPdLQQ76875wvVrrK5ADKKXOAPIMqdsiHBQPbGsxBgrzVG10NnkD9Nw2xZ4bwpoGlcL4JaEcQRbIUFXTRNC3UEaa8OIEAdKFCeSI5V8f95s-lzWvn0ZZTJqxOzujcM7kKAn9aNf7aDNsuYyftAHmG3YdYf9sjrxVXcjgaKa49w-LI4dZmAZqYdJjhYUs7Uqvnd2rjSGXGioinXaxOtBFBHAysikfrb586Vgr1AEyfsXo-VXDZOgwNwI"
                ],
                [
                    "title" => "Domates",
                    "type" => "Sebze",
                    "desc" => "Meyve tutum döneminde su stresine karşı oldukça duyarlıdır.",
                    "humidity" => "%70",
                    "img" => "https://lh3.googleusercontent.com/aida-public/AB6AXuDEkHgunz_OrT3EbLeqSu8eigSuW3bWWUQBbPPbWfsDTibtg8MF3YwL8UHVSDFgm75Lwl0C9NAlC-GLwwexvM88MfUo22G-9s-0RGKRCQtbhYcNhHtCA4FvzucIAifEW9SkamJYpzoAk0WToYRgoKNilg_hx2_gOyenaXDSDbzbA8gYErNfvr8v0szs72awbQe8u0V_-VEY93aYMpI-LjBhZ76LqWFK3HMpemqlkAnKmQdwT1cQ8MUXJUJUXhNLOXW2AV9KuLO5HhI"
                ],
                [
                    "title" => "Marul",
                    "type" => "Sebze",
                    "desc" => "Hızlı büyüme evresinde yüksek oranda neme ihtiyaç duyan yapraklı bitki.",
                    "humidity" => "%80",
                    "img" => "https://lh3.googleusercontent.com/aida-public/AB6AXuAN6A7_B0T56AeIQOMD0IcpkswXHBfAY3-ysKrA4rDc_Inxg3O_9apUsAhQKP6mkRCJ8J1Hc1Jjm1BXKyBamFr5uK6P44k-adkpEvxRh-MVvKEA-VnEEY1-Q0kB1koi7UFxIZHLV2g0dL3tRRIC3hTlxQ9FUCwzdppDInkQO-evlo4uIt4eo9J3IeOqmSuP26Prja0ooPjQPGJ_tpPYxer6dTch2QB3XrdlNScpOHjRt3SGrLVDZe-v9i3fcaQXGNxaqRHrHzbvDbo"
                ],
                [
                    "title" => "Narenciye (Limon/Portakal)",
                    "type" => "Meyve/Ağaç",
                    "desc" => "Orta düzeyde nem toleransı ile dengeli sulama gerektiren turunçgiller.",
                    "humidity" => "%50",
                    "img" => "https://lh3.googleusercontent.com/aida-public/AB6AXuAEK-3aiZAFQ0Z1EEVpXaUbmgKU4YyTf9YnJnnGtUr2AhZm-mYvI4pEMVceK5Hj6QSneP4adc1rUKghdB2SJWsvWR5to3mRYYjF6EKXD_jZ4rAdrv50V7pD_TwBEcyAcFlnQ9aS6GRwEUIeIgYCW46u9B7Z5Ywq-UnEV1Vj3Jq02VJkzdltAOvJKZjgTmYJZB-lHMvpHwTtYAgmxSFAU0bAAtShqXMhDrJHGKqeWAiRa9qg6CyiDJMc4ja_1Q_Sr27wvIFTMtm2tWw"
                ],
                [
                    "title" => "Lavanta",
                    "type" => "Bitki",
                    "desc" => "Düşük nem ortamında en iyi gelişimi gösteren, fazla suya hassas aromatik bitki.",
                    "humidity" => "%30",
                    "img" => "https://lh3.googleusercontent.com/aida-public/AB6AXuDvCKTKaAA8SZ7UmFC7qRwK0CgjX9qvsUq5QRckOwSp8PY7h2WB7qmWpY1TRcrga2YgJ4A5DNlCep3OC22m_Y2AA2S3W9UC_qR3eeUCGch2Xb4eNepPME_g-0J_-OVlcw3_8fXJWJZQAu_02n8dOUa3-xWdVJjvqOtJrLEhosJJPOC_Ptrvt-3mZwjMfMKJD3QjLB19gakP2NdpWy9LoX2pK_QRBrMD_QpyROUO2NbYGayh1QweWqImecu7602MRP1u2JUpF_3LXmw"
                ]
            ];

            foreach($plants as $p) {
                $href = !empty($p["link"]) ? $p["link"] : "#";
                $target = !empty($p["link"]) ? 'target="_blank"' : '';

                echo '
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="'.$href.'" '.$target.' class="text-decoration-none">
                        <div class="bg-surface-container-lowest rounded-3 p-3 shadow-soft border border-outline-variant h-100 d-flex flex-column hover-lift">
                            <div class="w-100 rounded-3 overflow-hidden mb-3 position-relative" style="height: 192px;">
                                <img src="'.$p["img"].'" alt="'.$p["title"].'" class="w-100 h-100 object-fit-cover">';
                                if (!empty($p["link"])) {
                                    echo '<div class="position-absolute top-0 end-0 p-2"><span class="material-symbols-outlined text-white rounded-circle p-1" style="background: rgba(0,0,0,0.5); font-size: 16px;">open_in_new</span></div>';
                                }
                echo '
                            </div>
                        <div class="flex-grow-1 d-flex flex-column">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h3 class="font-headline-md text-on-surface m-0" style="font-size: 20px;">'.$p["title"].'</h3>
                                <span class="text-tertiary px-3 py-1 rounded-pill font-label-md" style="font-size: 12px; background-color: rgba(62,159,227,0.2);">'.$p["type"].'</span>
                            </div>
                            <p class="font-body-md text-on-surface-variant mb-4">'.$p["desc"].'</p>
                            
                            <div class="mt-auto bg-surface p-3 rounded-3 border border-outline-variant-50 d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="material-symbols-outlined text-primary">water_drop</span>
                                    <span class="font-body-md text-on-surface fw-medium">Sulama Başlangıç Sınırı</span>
                                </div>
                                <span class="font-label-md text-primary px-3 py-1 rounded-2" style="background-color: rgba(0,109,55,0.1);">'.$p["humidity"].'</span>
                            </div>
                        </div>
                        </div>
                    </a>
                </div>';
            }
            ?>
        </div>
    </div>
</section>
<!-- Bitki Nem Rehberi Bölümü Sonu -->
