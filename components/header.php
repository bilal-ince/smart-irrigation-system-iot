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
            <button class="d-md-none btn btn-link text-on-surface p-0">
                <span class="material-symbols-outlined fs-2">menu</span>
            </button>
        </div>
    </div>
</header>
<!-- Menü (Header) Bölümü Sonu -->
