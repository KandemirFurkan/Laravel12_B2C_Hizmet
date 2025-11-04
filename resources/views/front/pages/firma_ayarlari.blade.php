@extends('front.layouts.app')

@section('content')
 

    <!-- Profil Header -->
    <section class="profile-header">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-3 text-center text-md-start mb-3 mb-md-0">
            <img src="https://placehold.co/120x120/198754/ffffff?text=TS" alt="Firma Logosu" class="profile-avatar" id="companyLogo">
            <div class="mt-3">
          
              <input type="file" id="logoUpload" class="d-none" accept="image/*" onchange="previewLogo(event)">
            </div>
          </div>
          <div class="col-12 col-md-9">
            <h1 class="h3 mb-2">{{Auth::user()->name}}</h1>
            <p class="mb-2 opacity-75">{{Auth::user()->email}}</p>
            <div class="d-flex flex-wrap gap-2">
              <span class="info-badge">
                <svg width="14" height="14" fill="currentColor" viewBox="0 0 16 16" class="me-1" style="vertical-align: text-bottom;">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                </svg>
                Kurumsal Üye
              </span>
              <span class="info-badge">
                <svg width="14" height="14" fill="currentColor" viewBox="0 0 16 16" class="me-1" style="vertical-align: text-bottom;">
                  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                </svg>
                Üyelik: {{Carbon\Carbon::parse(Auth::user()->registration_date)->format('d-m-Y')}}
              </span>
            
            </div>
            <div class="mt-3">
              <h6 class="small fw-bold mb-2">Hizmet Alanları:</h6>
              <span class="service-tag">{{Auth::user()->sector}}</span>
           
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
            <h2 class="h4 mb-4">Firma Hesap Ayarları</h2>
          </div>
        </div>

        <div class="row g-4">
          <!-- Firma Bilgileri -->
          <div class="col-12 col-lg-8">
            <div class="card settings-card shadow-sm">
              <div class="card-header bg-white">
                <h5 class="mb-0">Firma Bilgileri</h5>
              </div>
              <div class="card-body">
                <form id="companyInfoForm" novalidate>
                  <div id="formMessage" class="alert d-none mb-3" role="alert"></div>
                  
                  <div class="row g-3">
                    <div class="col-12 col-md-6">
                      <label for="firmaAdi" class="form-label" >Firma Adı</label>
                      <input type="text" class="form-control" id="firmaAdi" disabled value="{{Auth::user()->name}}" required>
                 
                    </div>
                  
                    <div class="col-12 col-md-6">
                      <label for="telefon" class="form-label">Telefon</label>
                      <input type="tel" class="form-control" id="telefon" name="phone" value="{{Auth::user()->phone}}" placeholder="0212 xxx xx xx" required>
                     
                    </div>
                    <div class="col-12 col-md-6">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}" placeholder="ornek@firma.com" required>
                     
                    </div>
                    <div class="col-12 col-md-6">
                      <label for="email" class="form-label">Şehir</label>
                      <input type="text" disabled class="form-control" id="location" value="{{Auth::user()->location}}" placeholder="Şehir" required>
                     
                    </div>
                    <div class="col-12 col-md-6">
                      <label for="content" class="form-label">Açıklama</label>
                      <textarea class="form-control" id="content" name="content" rows="3" placeholder="Firma açıklamasını girin">{{Auth::user()->content}}</textarea>
                     
                    </div>

                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="me-1">
                          <path d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                          <path d="M1.5 15a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 0-1H2V1.5a.5.5 0 0 0-1 0V15z"/>
                        </svg>
                        Güncelle
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
                <form id="passwordForm" novalidate>
                  <div id="passwordFormMessage" class="alert d-none mb-3" role="alert"></div>
                  
                  <div class="mb-3">
                    <label for="mevcutSifre" class="form-label">Mevcut Şifre</label>
                    <input type="password" class="form-control" id="mevcutSifre" name="mevcutSifre" placeholder="Mevcut şifrenizi girin" required>
                    <div class="form-text">Değişiklik için mevcut şifrenizi girin</div>
                  </div>
                  <div class="mb-3">
                    <label for="yeniSifre" class="form-label">Yeni Şifre</label>
                    <input type="password" class="form-control" id="yeniSifre" name="yeniSifre" placeholder="Yeni şifrenizi girin" required minlength="8">
                    <div class="form-text">En az 8 karakter olmalıdır</div>
                    <div class="password-strength" id="passwordStrength"></div>
                  </div>
                  <div class="mb-3">
                    <label for="yeniSifreTekrar" class="form-label">Yeni Şifre (Tekrar)</label>
                    <input type="password" class="form-control" id="yeniSifreTekrar" name="yeniSifreTekrar" placeholder="Yeni şifrenizi tekrar girin" required>
                    <div class="invalid-feedback" id="passwordMatchFeedback"></div>
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
                      <li>Firma bilgilerinizi şifre olarak kullanmayın</li>
                    </ul>
                  </div>
                  <button type="submit" class="btn btn-primary">
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="me-1">
                      <path d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                      <path d="M1.5 15a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 0-1H2V1.5a.5.5 0 0 0-1 0V15z"/>
                    </svg>
                    Şifreyi Güncelle
                  </button>
                </form>
              </div>
            </div>
          </div>

     

       
        </div>
      </div>
    </section>

 

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('companyInfoForm');
    const formMessage = document.getElementById('formMessage');
    
    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        // Form validasyonu
        if (!form.checkValidity()) {
            form.classList.add('was-validated');
            return;
        }
        
        // Submit butonunu devre dışı bırak
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalBtnText = submitBtn.innerHTML;
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status"></span>Kaydediliyor...';
        
        // Form verilerini topla
        const formData = {
            phone: document.getElementById('telefon').value,
            email: document.getElementById('email').value,
            content: document.getElementById('content').value,
        };
        
        try {
            const response = await fetch('{{ route("firma_bilgi_guncelle") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                },
                body: JSON.stringify(formData)
            });
            
            const data = await response.json();
            
            if (data.success) {
                formMessage.className = 'alert alert-success';
                formMessage.textContent = data.message;
                formMessage.classList.remove('d-none');
                
                // 1 saniye sonra mesajı gizle
                setTimeout(() => {
                    formMessage.classList.add('d-none');
                }, 1000);
                
                form.classList.remove('was-validated');
            } else {
                formMessage.className = 'alert alert-danger';
                formMessage.textContent = data.message || 'Bir hata oluştu. Lütfen tekrar deneyin.';
                formMessage.classList.remove('d-none');
                
                // 1 saniye sonra mesajı gizle
                setTimeout(() => {
                    formMessage.classList.add('d-none');
                }, 1000);
            }
        } catch (error) {
            formMessage.className = 'alert alert-danger';
            formMessage.textContent = 'Bir hata oluştu. Lütfen tekrar deneyin.';
            formMessage.classList.remove('d-none');
            
            // 1 saniye sonra mesajı gizle
            setTimeout(() => {
                formMessage.classList.add('d-none');
            }, 1000);
        } finally {
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalBtnText;
        }
    });

    // Şifre Değiştirme Formu
    const passwordForm = document.getElementById('passwordForm');
    const passwordFormMessage = document.getElementById('passwordFormMessage');
    
    passwordForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        // Şifre eşleşme kontrolü
        const yeniSifre = document.getElementById('yeniSifre').value;
        const yeniSifreTekrar = document.getElementById('yeniSifreTekrar').value;
        
        if (yeniSifre !== yeniSifreTekrar) {
            passwordFormMessage.className = 'alert alert-danger';
            passwordFormMessage.textContent = 'Yeni şifreler eşleşmiyor.';
            passwordFormMessage.classList.remove('d-none');
            
            setTimeout(() => {
                passwordFormMessage.classList.add('d-none');
            }, 1000);
            return;
        }
        
        // Form validasyonu
        if (!passwordForm.checkValidity()) {
            passwordForm.classList.add('was-validated');
            return;
        }
        
        // Submit butonunu devre dışı bırak
        const submitBtn = passwordForm.querySelector('button[type="submit"]');
        const originalBtnText = submitBtn.innerHTML;
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status"></span>Güncelleniyor...';
        
        // Form verilerini topla
        const formData = {
            mevcutSifre: document.getElementById('mevcutSifre').value,
            yeniSifre: yeniSifre,
            yeniSifreTekrar: yeniSifreTekrar,
        };
        
        try {
            const response = await fetch('{{ route("sifre_guncelle") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                },
                body: JSON.stringify(formData)
            });
            
            const data = await response.json();
            
            if (data.success) {
                passwordFormMessage.className = 'alert alert-success';
                passwordFormMessage.textContent = data.message;
                passwordFormMessage.classList.remove('d-none');
                
                // Formu temizle
                passwordForm.reset();
                passwordForm.classList.remove('was-validated');
                
                // 1 saniye sonra mesajı gizle
                setTimeout(() => {
                    passwordFormMessage.classList.add('d-none');
                }, 1000);
            } else {
                passwordFormMessage.className = 'alert alert-danger';
                passwordFormMessage.textContent = data.message || 'Bir hata oluştu. Lütfen tekrar deneyin.';
                passwordFormMessage.classList.remove('d-none');
                
                // 1 saniye sonra mesajı gizle
                setTimeout(() => {
                    passwordFormMessage.classList.add('d-none');
                }, 1000);
            }
        } catch (error) {
            passwordFormMessage.className = 'alert alert-danger';
            passwordFormMessage.textContent = 'Bir hata oluştu. Lütfen tekrar deneyin.';
            passwordFormMessage.classList.remove('d-none');
            
            // 1 saniye sonra mesajı gizle
            setTimeout(() => {
                passwordFormMessage.classList.add('d-none');
            }, 1000);
        } finally {
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalBtnText;
        }
    });
});
</script>

@endsection