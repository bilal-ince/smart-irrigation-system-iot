<section id="donanim" class="section-padding bg-surface-container-low px-3">
    <div class="custom-container">
        <div class="mb-5 text-center">
            <h2 class="font-headline-lg text-on-surface">Donanım Envanteri</h2>
            <p class="font-body-md text-on-surface-variant mt-2 mx-auto" style="max-width: 650px;">
                Prototip geliştirilmesinde kullanılan temel elektronik komponentler ve sensörler.
            </p>
        </div>
        
        <div class="row g-4">
            <?php
            $hardware = [
                [
                    "title" => "Arduino Uno",
                    "desc" => "Ana kontrol ünitesi.",
                    "img" => "https://lh3.googleusercontent.com/aida-public/AB6AXuB1rwqyWFUF2UqKiYACe4y10nr3JmvwpffYneyoCNsI1-XzQhEDEUWEWmN0asHTBBGk-oaq9UfhEhiE86pjk5ZneATZfa4ncsY9fb3eeMjc_AYbT1HshUt4oo2QHkEIKHV0ct7mj1zvN2g6yhy7icDPLt3tYNjF6sRWncpDkNNxb2Md2aL8R7YIOk6eN74PJsLyKCDbDhhzOFaLUv_KJXR2U7VGh2TKQVe8GRKdJIVxLZ4xpQkZDN0BQCgHfllt3oyCdNqclFg6m10"
                ],
                [
                    "title" => "DHT22",
                    "desc" => "Hassas sıcaklık ve hava nemi ölçümü.",
                    "img" => "https://lh3.googleusercontent.com/aida-public/AB6AXuDxOlbYh-ysvtQ52ezeL9nwje-ETL1_WY4yhahz7SujmfTuVPuQEoSeduG1yLaurwZg6aigV-Xexj5cUzVD1BxHNuMm6x3fxHoH6gqJPdYOaELDW49_vbn1FTiUgWOPYq-ESCnVqcAlVM1kputElrLJjuGCQcp20b8X3yjwphZYLunDtMM05s2CCrPeBEj7WafcF9hrkybU3V0nf9uxGDFAw0D66lVJ_YiwCSEATuCpi6DiP0NLvD3mMRh1F-4xSjXBLrgtin6Cs1E"
                ],
                [
                    "title" => "Toprak Nem Sensörü",
                    "desc" => "Toprak iletkenliği üzerinden nem takibi.",
                    "img" => "https://lh3.googleusercontent.com/aida-public/AB6AXuDH-RubJpH8bFNggrs8b4poIuaMgUVoLsxxUlxOy-o_8vEREHAtvrpmgjaYFZNP9soCSKnLeX0fweMKd8Ge1eVMEAK8qGyG1NwJTGDr6jTqThstsFdqPyRCNd2oMnWe92CCa3bmn9plb3OVqhriuqCEe5AtDypjZPDpJPxF_p-uInA8CaVYh6x5AjYUZDlvAWCQcjNvxZ2x1xVqaxHGpPbyMXWp0PSoIiryknNcI3skb9CMd9H-we_0iQTX4h99avW1y3vUIbTql_0"
                ],
                [
                    "title" => "SD Kart Modülü",
                    "desc" => "Çevrimdışı veri kaydı ve raporlama.",
                    "img" => "https://lh3.googleusercontent.com/aida-public/AB6AXuDPxKan7bbA_SaeYr20XeOfjYaY9e530b-XkVdqY0JPJyVeEMrSDT4i_iXHNHZBh-yYj_IHZTqSIy4W7dIN-RiTGJjWGBtmHAzq4ui95aRLwq5q0wW40Aq9RkU8fyrTDJpqxKP6txkjl6hRkwhoBBibwlXZmu9uq3_3pxT5VelIO5KioMImhgRDLLRLfINcwsi9BTq4n5qzwjLEOhtnHrps-dafe9bltpBKsgyxfO_5gxH7YZ-RwB96TYSpGomn2A6CtNiGUt-K1W4"
                ],
                [
                    "title" => "I2C LCD Ekran",
                    "desc" => "16x2 karakterli anlık durum paneli.",
                    "img" => "https://lh3.googleusercontent.com/aida-public/AB6AXuCtoRk9wYpyxyzAhd1d_fsC78P4nO68UUAFvKZvJF_uGizaHVoFflzNvqUThkLm2X2yEHHbVgkh-Y5DPkdYp9neCS_QKizxRzKffAU8HNeXrXyFVrxSsxlF4dLVqdVN0kqR8jwH_9o-GEwVXNKEDaE4gaAU8wttZKs5TAcZSCA0eD7TgB7m326aDMLrugyDNPUPm62TgLfNwdNKmBLE3clg_kS6sTp2HPZdPJMtu7yDtAMAa3jcv6yVv1h5xRB-BC-ahcw018v2eMc"
                ],
                [
                    "title" => "MOSFET Sürücü Kartı",
                    "desc" => "Pompa güç yönetimi ve anahtarlama.",
                    "img" => "https://lh3.googleusercontent.com/aida-public/AB6AXuAY-5x4l9E5boZzBKxX6xSPyCJs9078YRZAHZvmejao-zbO-2EEeHWJTkt4YIv9Xz8Xb4tyRBftNbxgFLgJca2eqz9gNJfF5OTR70ufhb-Jy8rRqxJHMphMTegNPT8a-rzVCktwrAq6RgZMe-2rKNy_0QnayaEyZ4GGddGGUGKr0zin0w7c97Qo0ALzJgr8KdGH6GAtFR2u7p8RqNzxRY79tAeNd-iz0DQ3YP7rrJd_o5Vnbwa6lZ0MFIaEsaI4v0VWahKHo6QCW6k"
                ],
                [
                    "title" => "5V Su Pompası",
                    "desc" => "Aktüatör / Sulama birimi.",
                    "img" => "https://lh3.googleusercontent.com/aida-public/AB6AXuBFm-4ggoocb9WvnY-lzEg58IBf9RFrDjqYrofc7D5ZvtlBs3w_9d3tsLxUsIYsf1j0rHbEGSu5bnpGMIRvrveKNcRH3ODpBIzuTEhEYU5syZWQRIMQl0jh66l9QBrVo6D0AalPl82VsK5s9WNsZ7-a3JcEmx0F3Pqe9cHJHrju38iZ6d7AbdDhVUKfvrPUk5FdtKy3hkzy5iVff-wN-91bHWlU6hAlB5qsCU4OPPJgGbbuuagwTwxV6QJkB_-kY9fs1VzfMwasA9E"
                ],
                [
                    "title" => "HC-SR04 Ultrasonik Sensör",
                    "desc" => "Su deposu seviye kontrolü.",
                    "img" => "https://lh3.googleusercontent.com/aida-public/AB6AXuDi1qlpB_AZhZfNmPXDdVwItwk3C-t8zGtGnaz_XPEo45iZj4eC9XP5UtUdMW4OaOj6wmIfCBcfUWA-a1-VrJMotD_qRWMZv4vPRU6FbmKZNITepU_BHxQDGQuyhx7NMP6DO5RAMWTbBjPCjZBuVVd8tFdt74X75G9_XX1LokckvM9B99vOZp5X6Pvvh7PapbKWYG5VC_DrqtlFAZZYWyKaOp3I4A4nJxMFc4E9BuJJK6aeSFYLWPuEaCX5sMoOB7SImHTeM6_Bn68"
                ]
            ];

            foreach($hardware as $h) {
                echo '
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="bg-surface-container-lowest rounded-3 p-4 shadow-soft border border-outline-variant h-100 d-flex flex-column gap-3">
                        <div class="w-100 bg-surface rounded-3 p-2 d-flex align-items-center justify-content-center overflow-hidden flex-shrink-0" style="height: 128px;">
                            <img src="'.$h["img"].'" alt="'.$h["title"].'" class="w-100 h-100 object-fit-contain" style="mix-blend-mode: multiply;">
                        </div>
                        <div class="d-flex flex-column h-100">
                            <h4 class="font-headline-md text-on-surface mb-2" style="font-size: 18px; line-height: 24px;">'.$h["title"].'</h4>
                            <p class="font-body-md text-on-surface-variant mb-0" style="font-size: 14px; line-height: 20px;">'.$h["desc"].'</p>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</section>
