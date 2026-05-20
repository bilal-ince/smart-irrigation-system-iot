<?php
$site_title = "Akıllı Sulama - Bitirme Projesi";
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $site_title ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="favicon.png">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts & Material Symbols -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    
    <!-- Custom CSS (Ana Stiller) -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Component CSS (Feature-based: Her bileşenin kendi özel stilleri) -->
    <link rel="stylesheet" href="css/components/hero.css">
    <link rel="stylesheet" href="css/components/gallery.css">
    <link rel="stylesheet" href="css/components/hardware_inventory.css">
    <link rel="stylesheet" href="css/components/academic_cta.css">
    <link rel="stylesheet" href="css/components/footer.css">
    <link rel="stylesheet" href="css/components/whatsapp_widget.css">
</head>
<body>
    <?php include 'components/header.php'; ?>
    <main>
        <?php include 'components/hero.php'; ?>
        <?php include 'components/plant_guide.php'; ?>
        <?php include 'components/gallery.php'; ?>
        <?php include 'components/hardware_inventory.php'; ?>
        <?php include 'components/academic_cta.php'; ?>
        <?php include 'components/contact.php'; ?>
    </main>
    <?php include 'components/footer.php'; ?>
    <?php include 'components/whatsapp_widget.php'; ?>
    
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Active Nav Link Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link-custom');
            
            function updateActiveLink() {
                let current = '';
                const scrollY = window.pageYOffset;
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    if (scrollY >= (sectionTop - 150)) {
                        current = section.getAttribute('id');
                    }
                });
                
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === '#' + current) {
                        link.classList.add('active');
                    }
                });
            }
            
            window.addEventListener('scroll', updateActiveLink);
            updateActiveLink(); // Run once on load
            
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    navLinks.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });
    </script>
    
    <!-- Snackbar (Toast) for Success Message -->
    <?php if(isset($_GET['status']) && $_GET['status'] == 'success'): ?>
    <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1055; margin-top: 80px;">
      <div id="successToast" class="toast align-items-center text-bg-success border-0 shadow-lg rounded-4" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="4000">
        <div class="d-flex">
          <div class="toast-body font-body-md d-flex align-items-center gap-2 px-3 py-3">
            <span class="material-symbols-outlined" style="font-size: 24px;">check_circle</span>
            Mesajınız başarıyla iletildi!
          </div>
          <button type="button" class="btn-close btn-close-white me-3 m-auto" data-bs-dismiss="toast" aria-label="Kapat"></button>
        </div>
      </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const toastEl = document.getElementById('successToast');
        const toast = new bootstrap.Toast(toastEl);
        toast.show();
        // Remove status parameter from URL without reloading
        const url = new URL(window.location);
        url.searchParams.delete('status');
        window.history.replaceState({}, document.title, url);
    });
    </script>
    <?php endif; ?>
</body>
</html>
