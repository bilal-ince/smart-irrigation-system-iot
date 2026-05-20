# Smart Irrigation System IoT - Proje Dökümantasyonu

Bu dosya, **Akıllı Sulama Sistemi (Smart Irrigation System IoT)** projesinin genel yapısını, kullanılan teknolojileri, dosya hiyerarşisini, bileşen tabanlı mimarisini ve temel kod işleyişlerini detaylandırmaktadır. Bu döküman projenin genel bir referans rehberidir.

---

## 1. Proje Özeti
Bu proje, akıllı bir sulama sisteminin web tabanlı dijital rehberi ve yönetim portalıdır. İçerisinde, bitki türlerinin optimum nem sınırlarını listeleyen dinamik bir veri tabanı, projenin elektronik bileşenlerini tanıtan donanım envanteri, akademik belgeler için CTA (Call To Action) bölümleri ve kullanıcıların geliştiriciye doğrudan ulaşmasını sağlayan PHP tabanlı, PHPMailer destekli bir iletişim formu barındırır.

**Kullanılan Teknolojiler:**
* **Backend:** PHP, PHPMailer
* **Frontend:** HTML5, CSS3 (Custom Design System), Bootstrap 5 (Grid ve Utility Sınıfları), JavaScript
* **Tasarım Dili:** Modern Kurumsal Minimalizm, Glassmorphism
* **Sunucu Ortamı:** XAMPP, Apache

---

## 2. Dizin Yapısı ve Mimari

Proje "Single-Page" (Tek Sayfa) bir yapıya sahip gibi görünse de modüler bir yaklaşımla, tüm bölümler ayrı `php` dosyalarına bölünmüş ve `index.php` içerisinde birleştirilmiştir.

```text
smart-irrigation-system-iot/
├── .git/                 # Versiyon kontrol sistemi
├── DESIGN.md             # Proje tasarım sistemi kuralları ve marka kimliği (Renkler, Tipografi)
├── README.md             # Proje genel bilgileri
├── index.php             # Ana birleştirici dosya. Tüm bileşenlerin çağrıldığı merkez.
├── make_transparent.php  # Yardımcı script.
├── send_mail.php         # İletişim formundan gelen verileri PHPMailer ile gönderen script.
├── PHPMailer/            # E-posta gönderim kütüphanesi
├── css/                  # Stil dosyaları
│   ├── style.css         # Ana (Global) CSS dosyası, değişkenler (Root), utility class'lar
│   └── components/       # Her bir bileşenin kendine özgü stilleri (.css)
├── components/           # Proje modülleri (Bileşen tabanlı yapı)
│   ├── header.php        # Menü, navigasyon
│   ├── hero.php          # Ana karşılama alanı
│   ├── plant_guide.php   # Bitki nem rehberi veri kartları
│   ├── gallery.php       # Resim galerisi
│   ├── hardware_inventory.php # Donanım malzemeleri (Sensörler, kartlar vb.)
│   ├── academic_cta.php  # Bitirme tezi vb. dökümanların indirme alanı
│   ├── contact.php       # İletişim formu
│   ├── footer.php        # Alt bilgi
│   └── whatsapp_widget.php # Hızlı erişim için WhatsApp butonu
├── img/                  # Genel görseller, ikonlar
└── envanter-img/         # Donanım ve bitkilere ait görseller
```

---

## 3. Tasarım Sistemi (Design System)
Projede özel bir renk paleti ve tipografi sistemi kullanılmıştır (`DESIGN.md` referanslı). Doğayı ve teknolojiyi sentezleyen bir estetik amaçlanmıştır:

* **Renkler:**
  * **Primary (Vurgu Rengi):** `#006d37` (Vibrant Nature Green) - Başarı durumları, aktif statüler ve ana eylemler (CTA) için.
  * **Secondary:** `#4e6073` - Metinler ve donanım/teknik bilgi ağırlıklı yerler için.
  * **Arka Planlar:** `#f8f9fa` (Açık gri) ve saf beyaz kartlar (Soft Shadow ile z-index hissiyatı).
* **Tipografi:**
  * **Başlıklar:** `Metropolis` (Geometrik ve mühendislik hissiyatı için)
  * **Gövde Metinleri:** `Inter` (Okunabilirlik için)
  * **Teknik/Veri Metinleri:** `JetBrains Mono` (Donanım ID'leri ve parametreler için).
* **Görsel Dil:** Yumuşak köşeler (Kartlarda 16px radius), butonlarda 8px radius, modern ve ferah (Airy) satır aralıkları, Glassmorphism (blurlu arka planlar).

---

## 4. Ana Çatı: `index.php`
Proje tek bir giriş noktası üzerinden ayağa kalkar. Bootstrap ve özel CSS dosyaları burada tanımlıdır. Bileşenler (`include`) kullanılarak sırayla sayfaya çağrılır.

**`index.php` Referans Kodu:**
```php
<?php $site_title = "Akıllı Sulama - Bitirme Projesi"; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <!-- CSS Yüklemeleri -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/components/hero.css">
    <link rel="stylesheet" href="css/components/hardware_inventory.css">
    <!-- Diğer Component CSS'leri... -->
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
    
    <!-- Aktif Menü (Scroll Spy) ve Form Başarı Mesajı JavaScript Mantığı Burada -->
</body>
</html>
```

---

## 5. Önemli Bileşenler (Components)

### A. Bitki Nem Rehberi (`components/plant_guide.php`)
Sistemin entegre olarak desteklediği bitki türlerini dizi (Array) içerisinde tutarak döngü (foreach) yardımıyla ekrana kartlar halinde basar. Geliştirilmeye ve ileride veritabanına bağlanmaya son derece müsaittir.

**Referans Yapı:**
```php
$plants = [
    [
        "title" => "Çilek",
        "type" => "Meyve",
        "desc" => "Yüzey köklü yapısı sebebiyle düzenli ve hassas sulama gerektirir.",
        "humidity" => "%65",
        "img" => "envanter-img/cilek.png",
        "link" => "https://www.bauhaus.com.tr/cilek-60304362"
    ],
    // Diğer bitkiler...
];

foreach($plants as $p) {
    // Bootstrap Grid Sınıfları (col-md-6, col-lg-4) ile kartların basılması.
    // HTML / CSS class'ları dinamik olarak echo edilir.
}
```

### B. Donanım Envanteri (`components/hardware_inventory.php`)
Projede kullanılan IoT donanımlarının listelendiği bölümdür (Arduino Uno, DHT22, HC-SR04, Pompalar vb.). Her donanımın resmi, açıklaması ve satın alma referans linki yer alır. Tıpkı Bitki Rehberinde olduğu gibi `Array` kullanılarak dinamik bir liste oluşturulmuştur.

**Örnek Obje Yapısı:**
```php
[
    "title" => "DHT22",
    "desc" => "Hassas sıcaklık ve hava nemi ölçümü.",
    "img" => "envanter-img/dht22-png.png",
    "link" => "https://www.robotistan.com/dht22-sicaklik-nem-sensoru-modulu?..."
]
```

---

## 6. Arka Plan İşlemleri ve Mail Gönderimi (`send_mail.php`)

Kullanıcıların `contact.php` (İletişim Formu) üzerinden gönderdiği istekler `POST` metodu ile `send_mail.php` dosyasına aktarılır. Burada `PHPMailer` kütüphanesi yardımıyla bir SMTP bağlantısı kurulur ve mesajlar güvenli bir şekilde mail kutusuna düşer.

**İşleyiş Mantığı:**
1. Form verileri (`$_POST`) alınır ve `htmlspecialchars` ile temizlenir.
2. PHPMailer sınıfı çağrılır ve SMTP ayarları (Google için smtp.gmail.com) yapılır.
3. Mesaj içeriği (HTML formatında özel tasarlanmış tabloyla) oluşturulur.
4. Başarılı gönderim halinde kullanıcı `index.php?status=success#iletisim` adresine yönlendirilir. `index.php`'deki ufak bir JavaScript kodu `status=success`'i yakalayarak ekranda bir Bootstrap Toast (Snackbar) başarı bildirimi gösterir.

**SMTP Ayarları Referansı:**
```php
$mail = new PHPMailer(true);
$mail->isSMTP();                                            
$mail->Host       = 'smtp.gmail.com';                     
$mail->SMTPAuth   = true;                                   
$mail->Username   = 'mehmetbilalince1@gmail.com'; 
$mail->Password   = '**** **** **** ****'; // Google App Password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
$mail->Port       = 587;   

// HTML Yapıda Body oluşturulup send() edilir.
$mail->send();
header("Location: index.php?status=success#iletisim");
exit;
```

## Sonuç ve Gelecek Geliştirmeler
* **Modülerlik:** Projenin her bir kesimi `components` dizininde ayrı ayrı tasarlanmıştır. Bu sayede bir geliştirici, Header ile uğraşırken başka bir yerdeki kodu bozma riski taşımaz.
* **Tasarım Birliği:** Tüm `component`ların kendisine ait `.css` dosyaları bulunmaktadır. Ancak ana renk değişkenleri ve grid sınıf atamaları `style.css`'den alınmaktadır.
* **Veritabanı Entegrasyonu:** `plant_guide.php` ve `hardware_inventory.php` içerisinde yer alan PHP dizi yapıları kolaylıkla MySQL üzerinden `SELECT * FROM plants` şeklinde değiştirilip backend yönetimine eklenebilir şekilde hazır kodlanmıştır.
