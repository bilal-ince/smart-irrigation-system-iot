<?php
// PHPMailer sınıflarını içe aktar
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Gerekli dosyaları dahil et (PHPMailer klasörünün ana dizinde olduğu varsayımıyla)
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini al
    $adsoyad = htmlspecialchars($_POST['name'] ?? '');
    $eposta = htmlspecialchars($_POST['email'] ?? '');
    $konu = htmlspecialchars($_POST['subject'] ?? 'İletişim Formu Mesajı');
    $mesaj = htmlspecialchars($_POST['message'] ?? '');

    // Google'dan alınan 16 haneli uygulama şifresi
    $appPassword = "kzdx wttj qcfb tnag"; 

    $mail = new PHPMailer(true);

    try {
        // Sunucu (SMTP) ayarları
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                   
        
        // LÜTFEN BURAYA KENDİ GMAIL ADRESİNİZİ YAZIN (Şifresini aldığınız hesap)
        $mail->Username   = 'mehmetbilalince1@gmail.com'; 
        
        $mail->Password   = $appPassword;                               
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
        $mail->Port       = 587;                                    
        
        // Türkçe karakter sorunu yaşanmaması için CharSet ayarı
        $mail->CharSet    = 'UTF-8';

        // Gönderici ve Alıcı Ayarları
        // E-posta kimden gidiyor gibi görünecek:
        $mail->setFrom('no-reply@smartirrigation.com', 'Akıllı Sulama Sistemi Formu');
        
        // E-postanın kime gideceği (Kendi e-postanızı yazabilirsiniz)
        $mail->addAddress('mehmetbilalince1@gmail.com', 'Site Yöneticisi'); 
        
        // Yanıtla denildiğinde form dolduranın e-postasına gitmesi için
        $mail->addReplyTo($eposta, $adsoyad);

        // İçerik (HTML formatı)
        $mail->isHTML(true);                                  
        $mail->Subject = empty($konu) ? 'Sitenizden Yeni Bir Mesaj Var' : $konu;
        
        $mail->Body    = "
        <div style='max-width: 600px; margin: 0 auto; font-family: \"Segoe UI\", Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; padding: 30px; border-radius: 10px;'>
            <div style='background-color: #ffffff; padding: 40px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); border-top: 5px solid #27ae60;'>
                <h2 style='color: #2c3e50; margin-top: 0; font-size: 24px; border-bottom: 2px solid #f0f2f5; padding-bottom: 15px;'>Yeni İletişim Formu Mesajı</h2>
                <p style='color: #7f8c8d; font-size: 15px; margin-bottom: 25px;'>Siteniz üzerinden yeni bir mesaj aldınız. Detaylar aşağıdadır:</p>
                
                <table style='width: 100%; border-collapse: collapse; margin-bottom: 25px;'>
                    <tr>
                        <td style='padding: 12px 0; border-bottom: 1px solid #f0f2f5; width: 30%; color: #95a5a6; font-weight: bold;'>Ad Soyad</td>
                        <td style='padding: 12px 0; border-bottom: 1px solid #f0f2f5; color: #2c3e50; font-weight: 500;'>{$adsoyad}</td>
                    </tr>
                    <tr>
                        <td style='padding: 12px 0; border-bottom: 1px solid #f0f2f5; color: #95a5a6; font-weight: bold;'>E-posta</td>
                        <td style='padding: 12px 0; border-bottom: 1px solid #f0f2f5; color: #3498db; font-weight: 500;'><a href='mailto:{$eposta}' style='color: #3498db; text-decoration: none;'>{$eposta}</a></td>
                    </tr>
                    <tr>
                        <td style='padding: 12px 0; border-bottom: 1px solid #f0f2f5; color: #95a5a6; font-weight: bold;'>Konu</td>
                        <td style='padding: 12px 0; border-bottom: 1px solid #f0f2f5; color: #2c3e50; font-weight: 500;'>{$konu}</td>
                    </tr>
                </table>
                
                <h3 style='color: #2c3e50; font-size: 16px; margin-bottom: 10px;'>Mesaj İçeriği:</h3>
                <div style='background-color: #f9fbfb; padding: 20px; border-left: 4px solid #27ae60; border-radius: 4px; color: #34495e; font-size: 15px; line-height: 1.6;'>
                    " . nl2br($mesaj) . "
                </div>
                
                <div style='margin-top: 30px; text-align: center; color: #bdc3c7; font-size: 13px;'>
                    Bu e-posta Akıllı Sulama Sistemi web sitesi üzerinden otomatik gönderilmiştir.
                </div>
            </div>
        </div>
        ";

        $mail->send();
        
        // Başarılı olursa anasayfaya yönlendir ve snackbar için status parametresi ekle
        header("Location: index.php?status=success#iletisim");
        exit;
        
        
    } catch (Exception $e) {
        // Hata ayıklama çıktısı
        echo "Mesaj gönderilemedi. Hata detayı: {$mail->ErrorInfo}";
    }
} else {
    // Eğer sayfaya doğrudan erişilirse index'e geri gönder
    header("Location: index.php");
    exit;
}
?>
