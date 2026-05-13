<!-- İletişim Formu Bölümü Başlangıcı -->
<!-- Sorumluluk: Kullanıcının proje geliştiricisine SMTP üzerinden e-posta göndermesini sağlamak. -->
<section id="iletisim" class="section-padding bg-surface-bright px-3">
    <div class="custom-container" style="max-width: 800px;">
        <div class="mb-5 text-center">
            <h2 class="font-headline-lg text-on-surface">Geliştiriciye Ulaşın</h2>
            <p class="font-body-md text-on-surface-variant mt-2">Proje hakkında sorularınız veya işbirlikleri için iletişim formunu kullanabilirsiniz.</p>
        </div>
        
        <form action="send_mail.php" method="POST" class="bg-surface-container-lowest p-4 p-md-5 rounded-4 shadow-soft border border-outline-variant d-flex flex-column gap-4">
            <div class="row g-4">
                <!-- Ad Soyad -->
                <div class="col-12 col-md-6">
                    <label for="name" class="form-label font-label-md text-on-surface mb-2">Ad Soyad</label>
                    <input type="text" class="form-control-custom w-100 px-3 py-2 font-body-md" id="name" name="name" placeholder="Adınız Soyadınız">
                </div>
                <!-- E-posta -->
                <div class="col-12 col-md-6">
                    <label for="email" class="form-label font-label-md text-on-surface mb-2">E-posta Adresi</label>
                    <input type="email" class="form-control-custom w-100 px-3 py-2 font-body-md" id="email" name="email" placeholder="ornek@email.com">
                </div>
            </div>
            
            <!-- Konu -->
            <div>
                <label for="subject" class="form-label font-label-md text-on-surface mb-2">Konu</label>
                <input type="text" class="form-control-custom w-100 px-3 py-2 font-body-md" id="subject" name="subject" placeholder="Mesajınızın konusu">
            </div>
            
            <!-- Mesaj -->
            <div>
                <label for="message" class="form-label font-label-md text-on-surface mb-2">Mesajınız</label>
                <textarea class="form-control-custom w-100 px-3 py-2 font-body-md" id="message" name="message" placeholder="Detaylı mesajınızı buraya yazabilirsiniz..." rows="5"></textarea>
            </div>
            
            <div class="d-flex justify-content-end pt-2">
                <button type="submit" class="btn d-flex align-items-center justify-content-center gap-2 px-4 py-3 rounded-3 font-body-md fw-bold border-0 text-white" style="background-color: #27ae60; box-shadow: 0 4px 10px rgba(39, 174, 96, 0.3); transition: all 0.3s;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 15px rgba(39, 174, 96, 0.4)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 10px rgba(39, 174, 96, 0.3)'">
                    <span class="material-symbols-outlined" style="font-size: 22px;">send</span>
                    <span>Formu Gönder</span>
                </button>
            </div>
        </form>
    </div>
</section>
<!-- İletişim Formu Bölümü Sonu -->
