# Deltaclass - TYT/AYT Sınav Planlama ve Programlama Sistemi

Deltaclass, TYT ve AYT sınavlarına hazırlanan öğrenciler için kapsamlı bir planlama ve programlama sistemidir. Bu platform, öğrencilerin sınav hazırlıklarını organize etmelerine, öğretmenlerin öğrenci ilerlemesini takip etmelerine ve rehberlikçilerin kişisel planlar oluşturmasına olanak tanır.

## İçindekiler

- [Özellikler](#özellikler)
- [Rol Tabanlı Kullanıcı Sistemi](#rol-tabanlı-kullanıcı-sistemi)
- [Teknoloji Yığını](#teknoloji-yığını)
- [Kurulum](#kurulum)
- [Kullanım](#kullanım)
- [Veritabanı Yapısı](#veritabanı-yapısı)
- [API Endpointleri](#api-endpointleri)
- [Demo Kullanıcılar](#demo-kullanıcılar)
- [Katılım](#katılım)
- [Lisans](#lisans)

## Özellikler

### Öğrenciler İçin
- 📅 Kişisel sınav planları oluşturma ve yönetme
- 📊 Deneme sınavı sonuçlarını takip etme
- 📈 İlerleme durumu analizi
- 🗓️ Haftalık/Aylık/Yıllık programlar
- 💬 Mesajlaşma sistemi

### Öğretmenler İçin
- 👥 Atanmış öğrencilerin listesi
- 📈 Öğrenci sınav sonuçlarının detaylı analizi
- 📊 Performans raporları
- 💬 Öğrencilerle mesajlaşma

### Rehberlikçiler İçin
- 👥 Tüm öğrencilerin yönetimi
- 🗓️ Bireysel ve grup planlama
- 📅 Randevu sistemi
- 📊 Detaylı istatistiksel analizler
- 💬 Mesajlaşma sistemi

## Rol Tabanlı Kullanıcı Sistemi

Uygulama üç farklı kullanıcı rolüne sahiptir:

| Rol | Açıklama |
|-----|----------|
| **Öğrenci** | Sınav planları oluşturur, deneme sonuçlarını takip eder |
| **Öğretmen** | Atanmış öğrencilerin ilerlemesini izler, analizler sunar |
| **Rehberlikçi** | Tüm öğrencileri yönetir, bireysel/grup planlamalar yapar |

## Teknoloji Yığını

- **Backend**: Laravel 10.x (PHP 8.1+)
- **Frontend**: Bootstrap 5.3, JavaScript, Blade Templates
- **Veritabanı**: MySQL/SQLite
- **ORM**: Eloquent
- **Kimlik Doğrulama**: Laravel Authentication
- **CSS Framework**: Bootstrap 5

## Lisans

Bu proje MIT lisansı altında lisanslanmıştır. Detaylar için [LICENSE](LICENSE) dosyasına bakın.

---

Developed with ❤️ for Turkish students preparing for university entrance exams.
