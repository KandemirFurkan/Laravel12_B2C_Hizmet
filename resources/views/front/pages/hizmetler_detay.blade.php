@extends('front.layouts.app')

@section('content')

@include('front.inc.breadcrumb')

    <!-- Detay ve Form Alanı -->
    <section class="py-5">
      <div class="container">
        <div class="row g-5">
          <!-- Detay görsel ve açıklama -->

          <div class="col-12 col-lg-6">
            <img id="detailHeroImg" src="{{ asset($hizmetler->image) }}" class="img-fluid rounded mb-3" alt="Hizmet Görseli">
            <h2 class="h4">{{$hizmetler->title}}</h2>
            <p class="text-muted">{{$hizmetler->content}}</p>

          </div>




          <!-- Form -->
          <div class="col-12 col-lg-6">
            <div class="card shadow-sm">
              <div class="card-body">
                @auth
                  @php
                    $userRole = (string) Auth::user()->role;
                  @endphp
                  @if($userRole === '1')
                    {{-- Role 1: Bireysel Kullanıcı - Form Göster --}}
                    @php
                      $user = Auth::user();
                    @endphp
                    <h3 class="h5 mb-3">Hizmet Talep Formu</h3>
                    <div id="formMessage" class="alert d-none mb-3" role="alert"></div>
                    <form class="row g-3" id="requestForm" novalidate>
                      <div class="col-12">
                        <label for="adSoyad" class="form-label">Ad Soyad</label>
                        <input type="text" class="form-control" id="adSoyad" value="{{ $user->name }}" placeholder="Adınız Soyadınız" required disabled>
                      </div>
                      <div class="col-12 col-md-6">
                        <label for="email" class="form-label">E-posta</label>
                        <input type="email" class="form-control" id="email" value="{{ $user->email }}" placeholder="ornek@mail.com" required disabled>
                      </div>
                      <div class="col-12 col-md-6">
                        <label for="telefon" class="form-label">Telefon</label>
                        <input type="tel" class="form-control" id="telefon" value="{{ $user->phone ?? '' }}" placeholder="05xx xxx xx xx" required disabled>
                      </div>
                      <div class="col-12 col-md-6">
                        <label for="kategori" class="form-label">Hizmet Kategorisi</label>
                        <select id="kategori" name="kategori" class="form-select" required >
                          @foreach($sectors as $sector)
                            <option value="{{ $sector->id }}" {{ $sector->title === $hizmetler->title ? 'selected' : '' }}>{{ $sector->title }}</option>
                          @endforeach
                        </select>
                      </div>
                        <div class="col-12 col-md-6">
                        <label for="sehir" class="form-label">Şehir</label>
                        <select id="sehir" name="sehir" class="form-select" required >
                          <option value="Adana" {{ ($user->location ?? '') === 'Adana' ? 'selected' : '' }}>Adana</option>
                          <option value="Adıyaman" {{ ($user->location ?? '') === 'Adıyaman' ? 'selected' : '' }}>Adıyaman</option>
                          <option value="Afyonkarahisar" {{ ($user->location ?? '') === 'Afyonkarahisar' ? 'selected' : '' }}>Afyonkarahisar</option>
                          <option value="Ağrı" {{ ($user->location ?? '') === 'Ağrı' ? 'selected' : '' }}>Ağrı</option>
                          <option value="Aksaray" {{ ($user->location ?? '') === 'Aksaray' ? 'selected' : '' }}>Aksaray</option>
                          <option value="Amasya" {{ ($user->location ?? '') === 'Amasya' ? 'selected' : '' }}>Amasya</option>
                          <option value="Ankara" {{ ($user->location ?? '') === 'Ankara' ? 'selected' : '' }}>Ankara</option>
                          <option value="Antalya" {{ ($user->location ?? '') === 'Antalya' ? 'selected' : '' }}>Antalya</option>
                          <option value="Ardahan" {{ ($user->location ?? '') === 'Ardahan' ? 'selected' : '' }}>Ardahan</option>
                          <option value="Artvin" {{ ($user->location ?? '') === 'Artvin' ? 'selected' : '' }}>Artvin</option>
                          <option value="Aydın" {{ ($user->location ?? '') === 'Aydın' ? 'selected' : '' }}>Aydın</option>
                          <option value="Balıkesir" {{ ($user->location ?? '') === 'Balıkesir' ? 'selected' : '' }}>Balıkesir</option>
                          <option value="Bartın" {{ ($user->location ?? '') === 'Bartın' ? 'selected' : '' }}>Bartın</option>
                          <option value="Batman" {{ ($user->location ?? '') === 'Batman' ? 'selected' : '' }}>Batman</option>
                          <option value="Bayburt" {{ ($user->location ?? '') === 'Bayburt' ? 'selected' : '' }}>Bayburt</option>
                          <option value="Bilecik" {{ ($user->location ?? '') === 'Bilecik' ? 'selected' : '' }}>Bilecik</option>
                          <option value="Bingöl" {{ ($user->location ?? '') === 'Bingöl' ? 'selected' : '' }}>Bingöl</option>
                          <option value="Bitlis" {{ ($user->location ?? '') === 'Bitlis' ? 'selected' : '' }}>Bitlis</option>
                          <option value="Bolu" {{ ($user->location ?? '') === 'Bolu' ? 'selected' : '' }}>Bolu</option>
                          <option value="Burdur" {{ ($user->location ?? '') === 'Burdur' ? 'selected' : '' }}>Burdur</option>
                          <option value="Bursa" {{ ($user->location ?? '') === 'Bursa' ? 'selected' : '' }}>Bursa</option>
                          <option value="Çanakkale" {{ ($user->location ?? '') === 'Çanakkale' ? 'selected' : '' }}>Çanakkale</option>
                          <option value="Çankırı" {{ ($user->location ?? '') === 'Çankırı' ? 'selected' : '' }}>Çankırı</option>
                          <option value="Çorum" {{ ($user->location ?? '') === 'Çorum' ? 'selected' : '' }}>Çorum</option>
                          <option value="Denizli" {{ ($user->location ?? '') === 'Denizli' ? 'selected' : '' }}>Denizli</option>
                          <option value="Diyarbakır" {{ ($user->location ?? '') === 'Diyarbakır' ? 'selected' : '' }}>Diyarbakır</option>
                          <option value="Düzce" {{ ($user->location ?? '') === 'Düzce' ? 'selected' : '' }}>Düzce</option>
                          <option value="Edirne" {{ ($user->location ?? '') === 'Edirne' ? 'selected' : '' }}>Edirne</option>
                          <option value="Elazığ" {{ ($user->location ?? '') === 'Elazığ' ? 'selected' : '' }}>Elazığ</option>
                          <option value="Erzincan" {{ ($user->location ?? '') === 'Erzincan' ? 'selected' : '' }}>Erzincan</option>
                          <option value="Erzurum" {{ ($user->location ?? '') === 'Erzurum' ? 'selected' : '' }}>Erzurum</option>
                          <option value="Eskişehir" {{ ($user->location ?? '') === 'Eskişehir' ? 'selected' : '' }}>Eskişehir</option>
                          <option value="Gaziantep" {{ ($user->location ?? '') === 'Gaziantep' ? 'selected' : '' }}>Gaziantep</option>
                          <option value="Giresun" {{ ($user->location ?? '') === 'Giresun' ? 'selected' : '' }}>Giresun</option>
                          <option value="Gümüşhane" {{ ($user->location ?? '') === 'Gümüşhane' ? 'selected' : '' }}>Gümüşhane</option>
                          <option value="Hakkari" {{ ($user->location ?? '') === 'Hakkari' ? 'selected' : '' }}>Hakkari</option>
                          <option value="Hatay" {{ ($user->location ?? '') === 'Hatay' ? 'selected' : '' }}>Hatay</option>
                          <option value="Iğdır" {{ ($user->location ?? '') === 'Iğdır' ? 'selected' : '' }}>Iğdır</option>
                          <option value="Isparta" {{ ($user->location ?? '') === 'Isparta' ? 'selected' : '' }}>Isparta</option>
                          <option value="İstanbul" {{ ($user->location ?? '') === 'İstanbul' ? 'selected' : '' }}>İstanbul</option>
                          <option value="İzmir" {{ ($user->location ?? '') === 'İzmir' ? 'selected' : '' }}>İzmir</option>
                          <option value="Kahramanmaraş" {{ ($user->location ?? '') === 'Kahramanmaraş' ? 'selected' : '' }}>Kahramanmaraş</option>
                          <option value="Karabük" {{ ($user->location ?? '') === 'Karabük' ? 'selected' : '' }}>Karabük</option>
                          <option value="Karaman" {{ ($user->location ?? '') === 'Karaman' ? 'selected' : '' }}>Karaman</option>
                          <option value="Kars" {{ ($user->location ?? '') === 'Kars' ? 'selected' : '' }}>Kars</option>
                          <option value="Kastamonu" {{ ($user->location ?? '') === 'Kastamonu' ? 'selected' : '' }}>Kastamonu</option>
                          <option value="Kayseri" {{ ($user->location ?? '') === 'Kayseri' ? 'selected' : '' }}>Kayseri</option>
                          <option value="Kilis" {{ ($user->location ?? '') === 'Kilis' ? 'selected' : '' }}>Kilis</option>
                          <option value="Kırıkkale" {{ ($user->location ?? '') === 'Kırıkkale' ? 'selected' : '' }}>Kırıkkale</option>
                          <option value="Kırklareli" {{ ($user->location ?? '') === 'Kırklareli' ? 'selected' : '' }}>Kırklareli</option>
                          <option value="Kırşehir" {{ ($user->location ?? '') === 'Kırşehir' ? 'selected' : '' }}>Kırşehir</option>
                          <option value="Kocaeli" {{ ($user->location ?? '') === 'Kocaeli' ? 'selected' : '' }}>Kocaeli</option>
                          <option value="Konya" {{ ($user->location ?? '') === 'Konya' ? 'selected' : '' }}>Konya</option>
                          <option value="Kütahya" {{ ($user->location ?? '') === 'Kütahya' ? 'selected' : '' }}>Kütahya</option>
                          <option value="Malatya" {{ ($user->location ?? '') === 'Malatya' ? 'selected' : '' }}>Malatya</option>
                          <option value="Manisa" {{ ($user->location ?? '') === 'Manisa' ? 'selected' : '' }}>Manisa</option>
                          <option value="Mardin" {{ ($user->location ?? '') === 'Mardin' ? 'selected' : '' }}>Mardin</option>
                          <option value="Mersin" {{ ($user->location ?? '') === 'Mersin' ? 'selected' : '' }}>Mersin</option>
                          <option value="Muğla" {{ ($user->location ?? '') === 'Muğla' ? 'selected' : '' }}>Muğla</option>
                          <option value="Muş" {{ ($user->location ?? '') === 'Muş' ? 'selected' : '' }}>Muş</option>
                          <option value="Nevşehir" {{ ($user->location ?? '') === 'Nevşehir' ? 'selected' : '' }}>Nevşehir</option>
                          <option value="Niğde" {{ ($user->location ?? '') === 'Niğde' ? 'selected' : '' }}>Niğde</option>
                          <option value="Ordu" {{ ($user->location ?? '') === 'Ordu' ? 'selected' : '' }}>Ordu</option>
                          <option value="Osmaniye" {{ ($user->location ?? '') === 'Osmaniye' ? 'selected' : '' }}>Osmaniye</option>
                          <option value="Rize" {{ ($user->location ?? '') === 'Rize' ? 'selected' : '' }}>Rize</option>
                          <option value="Sakarya" {{ ($user->location ?? '') === 'Sakarya' ? 'selected' : '' }}>Sakarya</option>
                          <option value="Samsun" {{ ($user->location ?? '') === 'Samsun' ? 'selected' : '' }}>Samsun</option>
                          <option value="Siirt" {{ ($user->location ?? '') === 'Siirt' ? 'selected' : '' }}>Siirt</option>
                          <option value="Sinop" {{ ($user->location ?? '') === 'Sinop' ? 'selected' : '' }}>Sinop</option>
                          <option value="Sivas" {{ ($user->location ?? '') === 'Sivas' ? 'selected' : '' }}>Sivas</option>
                          <option value="Şanlıurfa" {{ ($user->location ?? '') === 'Şanlıurfa' ? 'selected' : '' }}>Şanlıurfa</option>
                          <option value="Şırnak" {{ ($user->location ?? '') === 'Şırnak' ? 'selected' : '' }}>Şırnak</option>
                          <option value="Tekirdağ" {{ ($user->location ?? '') === 'Tekirdağ' ? 'selected' : '' }}>Tekirdağ</option>
                          <option value="Tokat" {{ ($user->location ?? '') === 'Tokat' ? 'selected' : '' }}>Tokat</option>
                          <option value="Trabzon" {{ ($user->location ?? '') === 'Trabzon' ? 'selected' : '' }}>Trabzon</option>
                          <option value="Tunceli" {{ ($user->location ?? '') === 'Tunceli' ? 'selected' : '' }}>Tunceli</option>
                          <option value="Uşak" {{ ($user->location ?? '') === 'Uşak' ? 'selected' : '' }}>Uşak</option>
                          <option value="Van" {{ ($user->location ?? '') === 'Van' ? 'selected' : '' }}>Van</option>
                          <option value="Yalova" {{ ($user->location ?? '') === 'Yalova' ? 'selected' : '' }}>Yalova</option>
                          <option value="Yozgat" {{ ($user->location ?? '') === 'Yozgat' ? 'selected' : '' }}>Yozgat</option>
                          <option value="Zonguldak" {{ ($user->location ?? '') === 'Zonguldak' ? 'selected' : '' }}>Zonguldak</option>
                        </select>
                      </div>
                      <div class="col-12">
                        <label for="mesaj" class="form-label">Açıklama <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="mesaj" name="mesaj" rows="5" placeholder="İhtiyacınızı detaylandırın..." required></textarea>
                        <div class="invalid-feedback">
                          Lütfen açıklama alanını doldurunuz.
                        </div>
                      </div>
                      <div class="col-12 d-grid">
                        <button type="submit" class="btn btn-primary" id="submitBtn">
                          <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                          <span class="btn-text">Talep Gönder</span>
                        </button>
                      </div>
                    </form>
                  @elseif($userRole === '2')
                    {{-- Role 2: Kurumsal Kullanıcı - Hizmet Alınamaz Mesajı --}}
                    <div class="text-center py-4">
                      <div class="mb-4">
                        <svg width="64" height="64" fill="#dc3545" viewBox="0 0 16 16" class="mb-3">
                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                        </svg>
                      </div>
                      <h3 class="h5 mb-3 text-danger">Firma Hesabıyla Hizmet Alınamaz</h3>
                      <p class="text-muted mb-4">
                        Üzgünüz, firma hesapları ile hizmet alınamamaktadır.
                        Bu platform sadece bireysel kullanıcılar için hizmet vermektedir.
                      </p>
                      <div class="alert alert-info mb-0" role="alert">
                        <i class="bi bi-info-circle me-2"></i>
                        Firma hesabınız varsa ve hizmet almak istiyorsanız, lütfen bireysel hesap oluşturun.
                      </div>
                    </div>
                  @endif
                @else
                  <div class="text-center py-4">
                    <div class="mb-4">
                      <svg width="64" height="64" fill="#0d6efd" viewBox="0 0 16 16" class="mb-3">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                      </svg>
                    </div>
                    <h3 class="h5 mb-3">Hizmet Alabilmek İçin Kayıt Olun</h3>
                    <p class="text-muted mb-4">
                      Bu hizmeti almak için önce hesabınızın olması gerekmektedir.
                      Ücretsiz kayıt olarak hizmet talebinde bulunabilirsiniz.
                    </p>
                    <div class="d-grid gap-2">
                      <a href="{{ route('bireysel_reg') }}" class="btn btn-primary">
                        <i class="bi bi-person-plus me-2"></i>
                        Kayıt Ol
                      </a>
                      <p class="text-muted small mb-0 mt-2">
                        Zaten hesabınız var mı?
                        <a href="{{ route('login') }}" class="text-decoration-none">Giriş Yap</a>
                      </p>
                    </div>
                  </div>
                @endauth
              </div>
            </div>
          </div>



        </div>
      </div>
    </section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('requestForm');
    const formMessage = document.getElementById('formMessage');
    const submitBtn = document.getElementById('submitBtn');
    const mesajInput = document.getElementById('mesaj');

    if (!form || !formMessage || !submitBtn || !mesajInput) return;

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        // Validasyon kontrolü
        if (!mesajInput.value.trim()) {
            mesajInput.classList.add('is-invalid');
            showMessage('Lütfen açıklama alanını doldurunuz.', 'danger');
            return;
        }

        mesajInput.classList.remove('is-invalid');

        // Form verilerini hazırla - sadece mesaj, kategori ve şehir
        const formData = new FormData();
        formData.append('mesaj', mesajInput.value.trim());
        formData.append('kategori', document.getElementById('kategori').value);
        formData.append('sehir', document.getElementById('sehir').value);

        // Submit butonunu devre dışı bırak
        submitBtn.disabled = true;
        const spinner = submitBtn.querySelector('.spinner-border');
        const btnText = submitBtn.querySelector('.btn-text');
        if (spinner) spinner.classList.remove('d-none');
        if (btnText) btnText.textContent = 'Gönderiliyor...';

        // AJAX isteği
        fetch('{{ route("talep_gonder") }}', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '',
                'Accept': 'application/json',
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Başarılı - formu temizle ve gizle
                form.reset();
                form.style.display = 'none';
                
                // Başarı mesajını göster
                showMessage(data.message, 'success');
            } else {
                // Hata mesajı
                showMessage(data.message || 'Bir hata oluştu. Lütfen tekrar deneyin.', 'danger');
                if (data.errors) {
                    let errorText = '';
                    for (const field in data.errors) {
                        if (Array.isArray(data.errors[field])) {
                            errorText += data.errors[field].join('<br>') + '<br>';
                        }
                    }
                    if (errorText) {
                        showMessage(errorText, 'danger');
                    }
                }
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showMessage('Bir hata oluştu. Lütfen tekrar deneyin.', 'danger');
        })
        .finally(() => {
            // Submit butonunu tekrar aktif et
            submitBtn.disabled = false;
            if (spinner) spinner.classList.add('d-none');
            if (btnText) btnText.textContent = 'Talep Gönder';
        });
    });

    function showMessage(message, type) {
        formMessage.textContent = '';
        formMessage.className = 'alert alert-' + type + ' mb-3';
        formMessage.innerHTML = message;
        formMessage.classList.remove('d-none');
        
        // Scroll to message
        formMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
});
</script>

@endsection
