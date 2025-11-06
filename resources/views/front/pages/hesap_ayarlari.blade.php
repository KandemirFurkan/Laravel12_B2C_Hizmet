@extends('front.layouts.app')

@section('content')
 
 
 
    <!-- Profil Header -->
    <section class="profile-header">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-3 text-center text-md-start mb-3 mb-md-0">
            @php
              $userInitials = '';
              if ($user->name) {
                $nameParts = explode(' ', $user->name);
                if (count($nameParts) >= 2) {
                  $userInitials = strtoupper(substr($nameParts[0], 0, 1) . substr($nameParts[count($nameParts) - 1], 0, 1));
                } else {
                  $userInitials = strtoupper(substr($user->name, 0, 2));
                }
              }
              $userRole = (string) $user->role;
              $roleText = $userRole === '1' ? 'Bireysel Üye' : 'Kurumsal Üye';
              $registrationDate = $user->registration_date ? \Carbon\Carbon::parse($user->registration_date)->locale('tr')->isoFormat('MMMM YYYY') : 'Bilinmiyor';
            @endphp
            <img src="https://placehold.co/120x120/667eea/ffffff?text={{ $userInitials }}" alt="Profil Fotoğrafı" class="profile-avatar" id="profileAvatar">
         
          </div>
          <div class="col-12 col-md-9">
            <h1 class="h3 mb-2">{{ $user->name ?? 'Kullanıcı' }}</h1>
            <p class="mb-2 opacity-75">{{ $user->email ?? '' }}</p>
            <div class="d-flex flex-wrap gap-2">
              <span class="info-badge">
                <svg width="14" height="14" fill="currentColor" viewBox="0 0 16 16" class="me-1" style="vertical-align: text-bottom;">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                </svg>
                {{ $roleText }}
              </span>
              <span class="info-badge">
                <svg width="14" height="14" fill="currentColor" viewBox="0 0 16 16" class="me-1" style="vertical-align: text-bottom;">
                  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                </svg>
                Üyelik: {{ $registrationDate }}
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Hesap Ayarları -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="h4 mb-4">Hesap Ayarları</h2>
          </div>
        </div>

        <div class="row g-4">
          <!-- Kişisel Bilgiler -->
          <div class="col-12 col-lg-8">
            <div class="card settings-card shadow-sm">
              <div class="card-header bg-white">
                <h5 class="mb-0">Kişisel Bilgiler</h5>
              </div>
              <div class="card-body">
                <div id="personalInfoMessage" class="alert d-none mb-3" role="alert"></div>
                <form id="personalInfoForm" novalidate>
                  @csrf
                  <div class="row g-3">
                    <div class="col-12 col-md-6">
                      <label for="adSoyad" class="form-label">Ad Soyad <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="adSoyad" name="name" value="{{ $user->name ?? '' }}" required>
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="col-12 col-md-6">
                      <label for="telefon" class="form-label">Telefon <span class="text-danger">*</span></label>
                      <input type="tel" class="form-control" id="telefon" name="phone" value="{{ $user->phone ?? '' }}" placeholder="05xx xxx xx xx" maxlength="11" pattern="[0-9]{11}" required>
                      
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="col-12 col-md-6">
                      <label for="email" class="form-label">E-posta <span class="text-danger">*</span></label>
                      <input type="email" class="form-control" id="email" name="email" value="{{ $user->email ?? '' }}" placeholder="ornek@mail.com" required>
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="col-12 col-md-6">
                      <label for="location" class="form-label">Şehir <span class="text-danger">*</span></label>
                      <select class="form-select" id="location" name="location" required>
                        <option value="">Şehir Seçiniz</option>
                        <option value="Adana">Adana</option>
                        <option value="Adıyaman">Adıyaman</option>
                        <option value="Afyonkarahisar">Afyonkarahisar</option>
                        <option value="Ağrı">Ağrı</option>
                        <option value="Aksaray">Aksaray</option>
                        <option value="Amasya">Amasya</option>
                        <option value="Ankara">Ankara</option>
                        <option value="Antalya">Antalya</option>
                        <option value="Ardahan">Ardahan</option>
                        <option value="Artvin">Artvin</option>
                        <option value="Aydın">Aydın</option>
                        <option value="Balıkesir">Balıkesir</option>
                        <option value="Bartın">Bartın</option>
                        <option value="Batman">Batman</option>
                        <option value="Bayburt">Bayburt</option>
                        <option value="Bilecik">Bilecik</option>
                        <option value="Bingöl">Bingöl</option>
                        <option value="Bitlis">Bitlis</option>
                        <option value="Bolu">Bolu</option>
                        <option value="Burdur">Burdur</option>
                        <option value="Bursa">Bursa</option>
                        <option value="Çanakkale">Çanakkale</option>
                        <option value="Çankırı">Çankırı</option>
                        <option value="Çorum">Çorum</option>
                        <option value="Denizli">Denizli</option>
                        <option value="Diyarbakır">Diyarbakır</option>
                        <option value="Düzce">Düzce</option>
                        <option value="Edirne">Edirne</option>
                        <option value="Elazığ">Elazığ</option>
                        <option value="Erzincan">Erzincan</option>
                        <option value="Erzurum">Erzurum</option>
                        <option value="Eskişehir">Eskişehir</option>
                        <option value="Gaziantep">Gaziantep</option>
                        <option value="Giresun">Giresun</option>
                        <option value="Gümüşhane">Gümüşhane</option>
                        <option value="Hakkari">Hakkari</option>
                        <option value="Hatay">Hatay</option>
                        <option value="Iğdır">Iğdır</option>
                        <option value="Isparta">Isparta</option>
                        <option value="İçel">İçel</option>
                        <option value="İstanbul">İstanbul</option>
                        <option value="İzmir">İzmir</option>
                        <option value="Kahramanmaraş">Kahramanmaraş</option>
                        <option value="Karabük">Karabük</option>
                        <option value="Karaman">Karaman</option>
                        <option value="Kars">Kars</option>
                        <option value="Kastamonu">Kastamonu</option>
                        <option value="Kayseri">Kayseri</option>
                        <option value="Kırıkkale">Kırıkkale</option>
                        <option value="Kırklareli">Kırklareli</option>
                        <option value="Kırşehir">Kırşehir</option>
                        <option value="Kilis">Kilis</option>
                        <option value="Kocaeli">Kocaeli</option>
                        <option value="Konya">Konya</option>
                        <option value="Kütahya">Kütahya</option>
                        <option value="Malatya">Malatya</option>
                        <option value="Manisa">Manisa</option>
                        <option value="Mardin">Mardin</option>
                        <option value="Muğla">Muğla</option>
                        <option value="Muş">Muş</option>
                        <option value="Nevşehir">Nevşehir</option>
                        <option value="Niğde">Niğde</option>
                        <option value="Ordu">Ordu</option>
                        <option value="Osmaniye">Osmaniye</option>
                        <option value="Rize">Rize</option>
                        <option value="Sakarya">Sakarya</option>
                        <option value="Samsun">Samsun</option>
                        <option value="Siirt">Siirt</option>
                        <option value="Sinop">Sinop</option>
                        <option value="Sivas">Sivas</option>
                        <option value="Şanlıurfa">Şanlıurfa</option>
                        <option value="Şırnak">Şırnak</option>
                        <option value="Tekirdağ">Tekirdağ</option>
                        <option value="Tokat">Tokat</option>
                        <option value="Trabzon">Trabzon</option>
                        <option value="Tunceli">Tunceli</option>
                        <option value="Uşak">Uşak</option>
                        <option value="Van">Van</option>
                        <option value="Yalova">Yalova</option>
                        <option value="Yozgat">Yozgat</option>
                        <option value="Zonguldak">Zonguldak</option>
                      </select>
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary" id="updateBtn">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="me-1">
                          <path d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                          <path d="M1.5 15a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 0-1H2V1.5a.5.5 0 0 0-1 0V15z"/>
                        </svg>
                        <span class="btn-text">Güncelle</span>
                        <span class="spinner-border spinner-border-sm d-none me-1" role="status" aria-hidden="true"></span>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

     
          <!-- Şifre Değiştirme -->
          <div class="col-12 col-lg-8">
            <div class="card settings-card shadow-sm mt-4">
              <div class="card-header bg-white">
                <h5 class="mb-0">Şifre Değiştir</h5>
              </div>
              <div class="card-body">
                <div id="passwordMessage" class="alert d-none mb-3" role="alert"></div>
                <form id="passwordForm" novalidate>
                  @csrf
                  <div class="mb-3">
                    <label for="mevcutSifre" class="form-label">Mevcut Şifre <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="mevcutSifre" name="mevcutSifre" placeholder="Mevcut şifrenizi girin" required>
                    <div class="form-text">Değişiklik için mevcut şifrenizi girin</div>
                    <div class="invalid-feedback"></div>
                  </div>
                  <div class="mb-3">
                    <label for="yeniSifre" class="form-label">Yeni Şifre <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="yeniSifre" name="yeniSifre" placeholder="Yeni şifrenizi girin" required minlength="8">
                    <div class="form-text">En az 8 karakter olmalıdır</div>
                    <div class="invalid-feedback"></div>
                  </div>
                  <div class="mb-3">
                    <label for="yeniSifreTekrar" class="form-label">Yeni Şifre (Tekrar) <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="yeniSifreTekrar" name="yeniSifreTekrar" placeholder="Yeni şifrenizi tekrar girin" required>
                    <div class="invalid-feedback"></div>
                  </div>
                  <div class="alert alert-info">
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="me-1">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                      <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                    </svg>
                    <strong>Güvenlik İpuçları:</strong>
                    <ul class="mb-0 mt-2 small">
                      <li>En az 8 karakter kullanın</li>
                      <li>Büyük ve küçük harf, sayı ve özel karakter kombinasyonu kullanın</li>
                      <li>Kişisel bilgilerinizi şifre olarak kullanmayın</li>
                    </ul>
                  </div>
                  <button type="submit" class="btn btn-primary" id="passwordUpdateBtn">
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="me-1">
                      <path d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                      <path d="M1.5 15a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 0-1H2V1.5a.5.5 0 0 0-1 0V15z"/>
                    </svg>
                    <span class="btn-text">Şifreyi Güncelle</span>
                    <span class="spinner-border spinner-border-sm d-none me-1" role="status" aria-hidden="true"></span>
                  </button>
                </form>
              </div>
            </div>
          </div>
<!--
     
          <div class="col-12 col-lg-8">
            <div class="card settings-card shadow-sm mt-4">
              <div class="card-header bg-white">
                <h5 class="mb-0">Bildirim Tercihleri</h5>
              </div>
              <div class="card-body">
                <form id="notificationForm">
                  <div class="mb-3">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="emailNotifications" checked>
                      <label class="form-check-label" for="emailNotifications">
                        E-posta Bildirimleri
                      </label>
                    </div>
                    <div class="form-text">Yeni teklifler ve güncellemeler için e-posta al</div>
                  </div>
                  <div class="mb-3">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="smsNotifications">
                      <label class="form-check-label" for="smsNotifications">
                        SMS Bildirimleri
                      </label>
                    </div>
                    <div class="form-text">Önemli güncellemeler için SMS al</div>
                  </div>
                  <div class="mb-3">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="marketingEmails" checked>
                      <label class="form-check-label" for="marketingEmails">
                        Pazarlama E-postaları
                      </label>
                    </div>
                    <div class="form-text">Özel kampanyalar ve fırsatlar hakkında bilgi al</div>
                  </div>
                  <button type="submit" class="btn btn-primary">
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="me-1">
                      <path d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                      <path d="M1.5 15a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 0-1H2V1.5a.5.5 0 0 0-1 0V15z"/>
                    </svg>
                    Tercihleri Kaydet
                  </button>
                </form>
              </div>
            </div>
          </div>
-->
      
        </div>
      </div>
    </section>

 
 
  
  </body>
</html>

@push('scripts')
<script>
(function() {
  // Kullanıcının mevcut şehrini seçili yap
  const userLocation = @json($user->location ?? '');
  if (userLocation) {
    const locationSelect = document.getElementById('location');
    if (locationSelect) {
      locationSelect.value = userLocation;
    }
  }

  // Telefon numarası formatlaması (sadece rakam)
  const telefonInput = document.getElementById('telefon');
  if (telefonInput) {
    telefonInput.addEventListener('input', function(e) {
      e.target.value = e.target.value.replace(/\D/g, '');
    });
  }

  // Form validasyonu ve AJAX gönderimi
  const personalInfoForm = document.getElementById('personalInfoForm');
  const personalInfoMessage = document.getElementById('personalInfoMessage');
  const updateBtn = document.getElementById('updateBtn');
  const btnText = updateBtn?.querySelector('.btn-text');
  const spinner = updateBtn?.querySelector('.spinner-border');

  if (!personalInfoForm || !personalInfoMessage || !updateBtn) return;

  personalInfoForm.addEventListener('submit', function(e) {
    e.preventDefault();

    // Form geçerliliğini kontrol et
    if (!personalInfoForm.checkValidity()) {
      personalInfoForm.classList.add('was-validated');
      personalInfoForm.reportValidity();
      return;
    }

    // Telefon numarası kontrolü (11 hane)
    const phone = document.getElementById('telefon').value.replace(/\D/g, '');
    if (phone.length !== 11) {
      showMessage('Telefon numarası 11 haneli olmalıdır.', 'danger');
      document.getElementById('telefon').classList.add('is-invalid');
      return;
    }

    // Şehir seçimi kontrolü
    const location = document.getElementById('location').value;
    if (!location) {
      showMessage('Lütfen bir şehir seçiniz.', 'danger');
      document.getElementById('location').classList.add('is-invalid');
      return;
    }

    // Loading state
    updateBtn.disabled = true;
    if (spinner) spinner.classList.remove('d-none');
    if (btnText) btnText.textContent = 'Güncelleniyor...';

    // Form verisini al
    const formData = new FormData(personalInfoForm);
    formData.set('phone', phone); // Telefon numarasını sadece rakam olarak gönder

    // AJAX gönder
    fetch('{{ route("hesap_bilgi_guncelle") }}', {
      method: 'POST',
      body: formData,
      headers: {
        'X-Requested-With': 'XMLHttpRequest',
      }
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        showMessage(data.message, 'success');
        personalInfoForm.classList.remove('was-validated');
        // Form alanlarındaki invalid class'ları temizle
        personalInfoForm.querySelectorAll('.is-invalid').forEach(el => {
          el.classList.remove('is-invalid');
        });
      } else {
        showMessage(data.message, 'danger');
        // Hata mesajlarını göster
        if (data.errors) {
          Object.keys(data.errors).forEach(field => {
            const input = personalInfoForm.querySelector(`[name="${field}"]`);
            if (input) {
              input.classList.add('is-invalid');
              const feedback = input.parentElement.querySelector('.invalid-feedback');
              if (feedback) {
                feedback.textContent = data.errors[field][0];
              }
            }
          });
        }
      }
    })
    .catch(error => {
      console.error('Error:', error);
      showMessage('Bir hata oluştu. Lütfen tekrar deneyin.', 'danger');
    })
    .finally(() => {
      // Loading state'i kaldır
      updateBtn.disabled = false;
      if (spinner) spinner.classList.add('d-none');
      if (btnText) btnText.textContent = 'Güncelle';
    });
  });

  function showMessage(message, type) {
    personalInfoMessage.textContent = message;
    personalInfoMessage.className = `alert alert-${type} mb-3`;
    personalInfoMessage.classList.remove('d-none');
    
    // Mesajı 5 saniye sonra otomatik gizle (success için)
    if (type === 'success') {
      setTimeout(() => {
        personalInfoMessage.classList.add('d-none');
      }, 5000);
    }

    // Scroll to message
    personalInfoMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  }

  // Input değişikliklerinde invalid class'ı temizle
  personalInfoForm.querySelectorAll('input, select').forEach(input => {
    input.addEventListener('input', function() {
      this.classList.remove('is-invalid');
    });
  });
})();

// Şifre Güncelleme Formu
(function() {
  const passwordForm = document.getElementById('passwordForm');
  const passwordMessage = document.getElementById('passwordMessage');
  const passwordUpdateBtn = document.getElementById('passwordUpdateBtn');
  const passwordBtnText = passwordUpdateBtn?.querySelector('.btn-text');
  const passwordSpinner = passwordUpdateBtn?.querySelector('.spinner-border');

  if (!passwordForm || !passwordMessage || !passwordUpdateBtn) return;

  passwordForm.addEventListener('submit', function(e) {
    e.preventDefault();

    // Form geçerliliğini kontrol et
    if (!passwordForm.checkValidity()) {
      passwordForm.classList.add('was-validated');
      passwordForm.reportValidity();
      return;
    }

    // Şifre eşleşme kontrolü
    const yeniSifre = document.getElementById('yeniSifre').value;
    const yeniSifreTekrar = document.getElementById('yeniSifreTekrar').value;

    if (yeniSifre !== yeniSifreTekrar) {
      showPasswordMessage('Yeni şifreler eşleşmiyor. Lütfen aynı şifreyi girin.', 'danger');
      document.getElementById('yeniSifreTekrar').classList.add('is-invalid');
      const feedback = document.getElementById('yeniSifreTekrar').parentElement.querySelector('.invalid-feedback');
      if (feedback) {
        feedback.textContent = 'Şifreler eşleşmiyor.';
      }
      return;
    }

    // Yeni şifre minimum uzunluk kontrolü
    if (yeniSifre.length < 8) {
      showPasswordMessage('Yeni şifre en az 8 karakter olmalıdır.', 'danger');
      document.getElementById('yeniSifre').classList.add('is-invalid');
      return;
    }

    // Loading state
    passwordUpdateBtn.disabled = true;
    if (passwordSpinner) passwordSpinner.classList.remove('d-none');
    if (passwordBtnText) passwordBtnText.textContent = 'Güncelleniyor...';

    // Form verisini al
    const formData = new FormData(passwordForm);

    // AJAX gönder
    fetch('{{ route("sifre_guncelle") }}', {
      method: 'POST',
      body: formData,
      headers: {
        'X-Requested-With': 'XMLHttpRequest',
      }
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        showPasswordMessage(data.message, 'success');
        passwordForm.classList.remove('was-validated');
        passwordForm.reset();
        // Form alanlarındaki invalid class'ları temizle
        passwordForm.querySelectorAll('.is-invalid').forEach(el => {
          el.classList.remove('is-invalid');
        });
      } else {
        showPasswordMessage(data.message, 'danger');
        // Hata mesajlarını göster
        if (data.errors) {
          Object.keys(data.errors).forEach(field => {
            const input = passwordForm.querySelector(`[name="${field}"]`);
            if (input) {
              input.classList.add('is-invalid');
              const feedback = input.parentElement.querySelector('.invalid-feedback');
              if (feedback) {
                feedback.textContent = data.errors[field][0];
              }
            }
          });
        }
      }
    })
    .catch(error => {
      console.error('Error:', error);
      showPasswordMessage('Bir hata oluştu. Lütfen tekrar deneyin.', 'danger');
    })
    .finally(() => {
      // Loading state'i kaldır
      passwordUpdateBtn.disabled = false;
      if (passwordSpinner) passwordSpinner.classList.add('d-none');
      if (passwordBtnText) passwordBtnText.textContent = 'Şifreyi Güncelle';
    });
  });

  function showPasswordMessage(message, type) {
    passwordMessage.textContent = message;
    passwordMessage.className = `alert alert-${type} mb-3`;
    passwordMessage.classList.remove('d-none');
    
    // Mesajı 5 saniye sonra otomatik gizle (success için)
    if (type === 'success') {
      setTimeout(() => {
        passwordMessage.classList.add('d-none');
      }, 5000);
    }

    // Scroll to message
    passwordMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  }

  // Input değişikliklerinde invalid class'ı temizle
  passwordForm.querySelectorAll('input').forEach(input => {
    input.addEventListener('input', function() {
      this.classList.remove('is-invalid');
      // Şifre tekrar alanında eşleşme kontrolü
      if (this.id === 'yeniSifre' || this.id === 'yeniSifreTekrar') {
        const yeniSifre = document.getElementById('yeniSifre').value;
        const yeniSifreTekrar = document.getElementById('yeniSifreTekrar').value;
        if (yeniSifre && yeniSifreTekrar && yeniSifre === yeniSifreTekrar) {
          document.getElementById('yeniSifreTekrar').classList.remove('is-invalid');
        }
      }
    });
  });
})();
</script>
@endpush

@endsection