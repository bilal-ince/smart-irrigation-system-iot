<!-- Menü (Header) Bölümü Başlangıcı -->
<!-- Sorumluluk: Sayfalar arası gezinme (Navigasyon), logo ve birincil eylem (CTA) butonlarını barındırmak. -->
<header class="w-100 sticky-top shadow-sm glass-header">
    <div class="custom-container d-flex align-items-center justify-content-between h-20" style="height: 80px;">
        <!-- Brand -->
        <a href="index.php" class="d-flex align-items-center gap-2 text-decoration-none">
            <img src="favicon.png" alt="Akıllı Sulama Logo" style="width: 48px; height: 48px; object-fit: contain;">
            <span class="font-headline-lg text-primary m-0" style="font-size: 26px;">Akıllı Sulama</span>
        </a>
        <!-- Navigation Links (Desktop) -->
        <nav class="d-none d-md-flex align-items-center gap-4">
            <a class="nav-link-custom text-decoration-none font-body-md active" href="#hakkinda">Hakkında</a>
            <a class="nav-link-custom text-decoration-none font-body-md" href="#bitki-rehberi">Bitki Rehberi</a>
            <a class="nav-link-custom text-decoration-none font-body-md" href="#galeri">Galeri</a>
            <a class="nav-link-custom text-decoration-none font-body-md" href="#donanim">Donanım Envanteri</a>
            <a class="nav-link-custom text-decoration-none font-body-md" href="#iletisim">İletişim</a>
        </nav>
        <!-- Actions -->
        <div class="d-flex align-items-center gap-3">
            <a class="d-none d-md-flex align-items-center justify-content-center text-secondary text-decoration-none hover-lift" href="https://github.com/bilal-ince/smart-irrigation-system-iot" target="_blank" style="width: 40px; height: 40px; border-radius: 50%;">
                <span class="material-symbols-outlined">code</span>
            </a>
            <div class="dropdown d-none d-md-flex">
                <button class="btn btn-primary-custom d-flex align-items-center gap-2 px-4 py-2 font-body-md dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="material-symbols-outlined">download</span>
                    Tezi İndir
                </button>
                <ul class="dropdown-menu shadow border-0" style="border-radius: 12px; margin-top: 8px;">
                    <li>
                        <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="document/Bitirme Projesi .pdf" download>
                            <span class="material-symbols-outlined text-danger fs-5">picture_as_pdf</span>
                            PDF Olarak İndir
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="document/Bitirme Projesi .docx" download>
                            <span class="material-symbols-outlined text-primary fs-5">description</span>
                            DOCX Olarak İndir
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Hamburger: Offcanvas tetikleyici -->
            <button class="d-md-none btn btn-link text-on-surface p-0"
                    type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#mobileMenu"
                    aria-controls="mobileMenu"
                    aria-label="Menüyü aç">
                <span class="material-symbols-outlined fs-2">menu</span>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Offcanvas Menü -->
<div class="offcanvas offcanvas-end d-md-none" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header border-bottom" style="height: 80px;">
        <a href="index.php" class="d-flex align-items-center gap-2 text-decoration-none" id="mobileMenuLabel">
            <img src="favicon.png" alt="Akıllı Sulama Logo" style="width: 36px; height: 36px; object-fit: contain;">
            <span class="font-headline-lg text-primary m-0" style="font-size: 20px;">Akıllı Sulama</span>
        </a>
        <button type="button" class="btn btn-link text-on-surface p-0 ms-auto" data-bs-dismiss="offcanvas" aria-label="Kapat">
            <span class="material-symbols-outlined fs-2">close</span>
        </button>
    </div>
    <div class="offcanvas-body d-flex flex-column gap-1 pt-3">
        <!-- Navigasyon linkleri -->
        <nav class="d-flex flex-column gap-1">
            <a class="mobile-nav-link nav-link-custom text-decoration-none font-body-md d-flex align-items-center gap-3 px-3 py-3 rounded-3" href="#hakkinda">
                <span class="material-symbols-outlined text-primary" style="font-size: 20px;">info</span>
                Hakkında
            </a>
            <a class="mobile-nav-link nav-link-custom text-decoration-none font-body-md d-flex align-items-center gap-3 px-3 py-3 rounded-3" href="#bitki-rehberi">
                <span class="material-symbols-outlined text-primary" style="font-size: 20px;">eco</span>
                Bitki Rehberi
            </a>
            <a class="mobile-nav-link nav-link-custom text-decoration-none font-body-md d-flex align-items-center gap-3 px-3 py-3 rounded-3" href="#galeri">
                <span class="material-symbols-outlined text-primary" style="font-size: 20px;">photo_library</span>
                Galeri
            </a>
            <a class="mobile-nav-link nav-link-custom text-decoration-none font-body-md d-flex align-items-center gap-3 px-3 py-3 rounded-3" href="#donanim">
                <span class="material-symbols-outlined text-primary" style="font-size: 20px;">memory</span>
                Donanım Envanteri
            </a>
            <a class="mobile-nav-link nav-link-custom text-decoration-none font-body-md d-flex align-items-center gap-3 px-3 py-3 rounded-3" href="#iletisim">
                <span class="material-symbols-outlined text-primary" style="font-size: 20px;">mail</span>
                İletişim
            </a>
        </nav>

        <hr class="my-2" style="border-color: var(--outline-variant);">

        <!-- Alt aksiyonlar -->
        <a class="d-flex align-items-center gap-3 px-3 py-3 rounded-3 text-secondary text-decoration-none font-body-md mobile-nav-link"
           href="https://github.com/bilal-ince/smart-irrigation-system-iot" target="_blank">
            <span class="material-symbols-outlined" style="font-size: 20px;">code</span>
            GitHub'da İncele
        </a>

        <div class="mt-2 d-flex flex-column gap-2 px-1">
            <a class="btn btn-primary-custom d-flex align-items-center justify-content-center gap-2 py-2 font-body-md w-100"
               href="document/Bitirme Projesi .pdf" download>
                <span class="material-symbols-outlined">picture_as_pdf</span>
                PDF Olarak İndir
            </a>
            <a class="btn btn-outline-custom d-flex align-items-center justify-content-center gap-2 py-2 font-body-md w-100"
               href="document/Bitirme Projesi .docx" download>
                <span class="material-symbols-outlined">description</span>
                DOCX Olarak İndir
            </a>
        </div>
    </div>
</div>
<!-- Menü (Header) Bölümü Sonu -->
