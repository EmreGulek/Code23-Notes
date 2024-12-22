# Code23-Notes

Code23-Notes, kullanıcıların dinamik bir tasarım aracılığıyla notlarını kategoriye göre yönetebileceği, notlarını zamanlayabileceği ve farklı durumlarla işaretleyebileceği bir uygulamadır. 
Jetstream ile kimlik doğrulama yapılmış olup, MySQL veritabanı kullanıldı.

## Özellikler

- **Kimlik Doğrulama:** Jetstream kullanılarak kullanıcıların güvenli bir şekilde sisteme giriş yapması sağlanmıştır.
- **Kategori Yönetimi:** Kullanıcılar, notlarını oluşturabilmeden önce kategoriler oluşturabilir. Kategoriler aktif olduğunda, o kategoriye ait notlar oluşturulabilir.
- **Not Durumları:** Kullanıcılar oluşturdukları notları aşağıdaki durumlarla işaretleyebilir:
  - Yapılmadı
  - Yapılıyor
  - Yapılacak
  - İptal Edildi
  - Ertelendi
- **Not Zamanlama:** Kullanıcılar notlarını belirli bir tarih ile zamanlayabilir ve bu tarihe göre hatırlatıcılar oluşturulabilir.
- **Gizlilik:** Bir kullanıcının notları, başka bir kullanıcı tarafından görüntülenemez. Her kullanıcı sadece kendi notlarına erişebilir.

## Teknolojiler

- **PHP** (Laravel 11)
- **MySQL** (Veritabanı)
- **Jetstream** (Authentication)

## Kurulum

### Gereksinimler

- PHP 8.x veya daha yeni bir sürüm
- Composer
- MySQL veritabanı

