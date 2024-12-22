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

<img width="759" alt="login" src="https://github.com/user-attachments/assets/fccd0392-065b-4866-9ab5-44aaeb185683" />
<img width="1253" alt="homePage" src="https://github.com/user-attachments/assets/956cb2ed-5da7-4324-9cf2-976539c61e74" />
<img width="1440" alt="notes" src="https://github.com/user-attachments/assets/5549d9fb-761c-48f1-b1be-e11e469cc4b3" />
<img width="1258" alt="newNote" src="https://github.com/user-attachments/assets/93b30210-571b-4fe9-9dac-5430bf8a1cf3" />
<img width="1443" alt="categories" src="https://github.com/user-attachments/assets/b0bded21-cc90-48e1-9648-4149c4642183" />
<img width="1260" alt="newCategory" src="https://github.com/user-attachments/assets/e0b4a1ad-0f60-4d62-a7c3-0f02f69e4447" />
