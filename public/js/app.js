// Basit ortak JS
// - Yıl bilgisini footer'a yaz
(function setFooterYear() {
  var yearSpan = document.getElementById('yil');
  if (yearSpan) {
    yearSpan.textContent = new Date().getFullYear();
  }
})();

// Basit form submit engelleme ve örnek bildirimler
function attachPreventSubmit(formId, successMessage) {
  var form = document.getElementById(formId);
  if (!form) return;
  form.addEventListener('submit', function (e) {
    e.preventDefault();
    // Basit doğrulama: required alanlar dolu mu kontrol et (native zaten uyarır)
    if (!form.checkValidity) return;
    // Başarılı mesaj (geçici)
    alert(successMessage || 'Form başarıyla gönderildi.');
    form.reset();
  });
}

attachPreventSubmit('loginForm', 'Giriş başarılı.');
attachPreventSubmit('registerForm', 'Kayıt başarılı.');
attachPreventSubmit('contactForm', 'Mesajınız gönderildi.');
attachPreventSubmit('requestForm', 'Talebiniz alındı.');
attachPreventSubmit('listFilterForm', 'Filtre uygulandı.');
attachPreventSubmit('corporateForm', 'Başvurunuz alındı. En kısa sürede dönüş yapacağız.');

// Görsel yapılandırması: Google Görseller'den (kaynak sitenin gerçek görsel URL'si) kopyaladığınız
// bağlantıları aşağıdaki alanlara yapıştırın. Boş bırakılırsa mevcut placeholder kalır.
window.APP_IMAGE_CONFIG = {
  services: {
    1: '', // Temizlik
    2: '', // Tadilat
    3: '', // Boyama
    4: '', // Nakliye
    5: '', // Bahçe Bakımı
    6: '', // Elektrik
    7: '', // Sıhhi Tesisat
    8: '', // Klima Servisi
  },
  blogs: {
    1: '',
    2: '',
    3: '',
    4: '',
  },
  detailHero: ''
};

(function applyConfiguredImages() {
  var cfg = window.APP_IMAGE_CONFIG || {};
  var svc = (cfg.services) || {};
  for (var i = 1; i <= 8; i++) {
    var el = document.getElementById('svcImg' + i);
    if (el && svc[i]) el.src = svc[i];
  }
  var blogs = (cfg.blogs) || {};
  for (var j = 1; j <= 4; j++) {
    var be = document.getElementById('blogImg' + j);
    if (be && blogs[j]) be.src = blogs[j];
  }
  var dh = document.getElementById('detailHeroImg');
  if (dh && cfg.detailHero) dh.src = cfg.detailHero;
})();


