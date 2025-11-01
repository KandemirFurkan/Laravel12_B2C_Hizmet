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

// Hizmet Arama
(function initHizmetArama() {
  const searchInput = document.getElementById('hizmet-arama-input');
  const resultsContainer = document.getElementById('hizmet-arama-results');
  const searchForm = document.getElementById('navbarSearchForm');

  if (!searchInput || !resultsContainer || !searchForm) return;

  let searchTimeout;
  let currentSearch = '';

  searchInput.addEventListener('input', function (e) {
    const query = e.target.value.trim();
    currentSearch = query;

    clearTimeout(searchTimeout);

    if (query.length < 3) {
      resultsContainer.classList.add('d-none');
      resultsContainer.querySelector('.list-group').innerHTML = '';
      return;
    }

    searchTimeout = setTimeout(function () {
      performSearch(query);
    }, 300);
  });

  searchForm.addEventListener('submit', function (e) {
    e.preventDefault();
    const query = searchInput.value.trim();
    if (query.length >= 3) {
      window.location.href = '/hizmetler?q=' + encodeURIComponent(query);
    }
  });

  document.addEventListener('click', function (e) {
    const wrapper = document.getElementById('hizmet-arama-wrapper');
    if (wrapper && !wrapper.contains(e.target)) {
      resultsContainer.classList.add('d-none');
    }
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && !resultsContainer.classList.contains('d-none')) {
      resultsContainer.classList.add('d-none');
      searchInput.blur();
    }
  });

  function performSearch(query) {
    if (currentSearch !== query) return;

    fetch('/api/hizmet-ara?q=' + encodeURIComponent(query))
      .then(response => response.json())
      .then(data => {
        if (currentSearch !== query) return;

        const listGroup = resultsContainer.querySelector('.list-group');
        if (data.length === 0) {
          listGroup.innerHTML = '<div class="list-group-item text-muted py-3"><em>Sonuç bulunamadı</em></div>';
        } else {
          listGroup.innerHTML = data.map(hizmet => `
            <a href="/hizmetler/${hizmet.slug}" class="list-group-item list-group-item-action">
              <h6 class="mb-0">${hizmet.title}</h6>
            </a>
          `).join('');
        }
        resultsContainer.classList.remove('d-none');
      })
      .catch(error => {
        console.error('Arama hatası:', error);
        if (currentSearch === query) {
          resultsContainer.querySelector('.list-group').innerHTML = '<div class="list-group-item text-danger py-3"><em>Arama sırasında bir hata oluştu</em></div>';
          resultsContainer.classList.remove('d-none');
        }
      });
  }
})();

