@extends('front.layouts.app')

@section('content')
        <section class="bg-light py-4 border-bottom">
      <div class="container">
        <h1 class="h3 mb-2">Kurumsal Üyelik</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('anasayfa') }}">Ana Sayfa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kurumsal Üyelik</li>
          </ol>
        </nav>
      </div>
    </section>


    <!-- Başvuru Formu -->
    <section class="py-4 py-lg-5 bg-light">
      <div class="container">
        <div class="row g-4">
          <div class="col-12 col-lg-7">
            <div class="card shadow-sm">
              <div class="card-body p-4 p-lg-5">
                <h2 class="h5 mb-4">Kurumsal Üyelik Başvuru Formu</h2>
                
                <!-- Bilgilendirme Mesajı -->
                <div id="corporateFormMessage" class="alert d-none mb-3" role="alert"></div>
                
                <form id="corporateForm" class="row g-3" novalidate>
                  <div class="col-12">
                    <label for="companyName" class="form-label">Firma Adı <span class="text-danger">*</span></label>
                    <input type="text" name="name" id="companyName" class="form-control" placeholder="Örn: ABC A.Ş." required>
                    <div class="invalid-feedback">
                      Lütfen firma adınızı girin.
                    </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <label for="sector" class="form-label">Sektör <span class="text-danger">*</span></label>
                    <select name="sector" id="sector" class="form-select" required>
                      <option selected disabled value="">Seçiniz</option>
                      @foreach ($sectors as $sector)
                        <option value="{{ $sector->title }}">{{ $sector->title }}</option>
                      @endforeach
                    </select>
                    <div class="invalid-feedback">
                      Lütfen sektör seçiniz.
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <label for="email" class="form-label">Kurumsal E-posta <span class="text-danger">*</span></label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="ornek@firma.com" required>
                    <div class="invalid-feedback">
                      Lütfen geçerli bir e-posta adresi girin.
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <label for="phone" class="form-label">Telefon <span class="text-danger">*</span></label>
                    <input type="tel" name="phone" id="phone" class="form-control" 
                    placeholder="05321112233" required minlength="11" maxlength="11" pattern="[0-9]{11}">
                    <div class="invalid-feedback">
                      Lütfen 11 haneli telefon numaranızı girin (örn: 05321112233).
                    </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <label for="address" class="form-label">Şehir <span class="text-danger">*</span></label>
                    <select name="location" id="address" class="form-select" required>
                      <option selected disabled value="">Seçiniz</option>
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
                      <option value="İstanbul">İstanbul</option>
                      <option value="İzmir">İzmir</option>
                      <option value="Kahramanmaraş">Kahramanmaraş</option>
                      <option value="Karabük">Karabük</option>
                      <option value="Karaman">Karaman</option>
                      <option value="Kars">Kars</option>
                      <option value="Kastamonu">Kastamonu</option>
                      <option value="Kayseri">Kayseri</option>
                      <option value="Kilis">Kilis</option>
                      <option value="Kırıkkale">Kırıkkale</option>
                      <option value="Kırklareli">Kırklareli</option>
                      <option value="Kırşehir">Kırşehir</option>
                      <option value="Kocaeli">Kocaeli</option>
                      <option value="Konya">Konya</option>
                      <option value="Kütahya">Kütahya</option>
                      <option value="Malatya">Malatya</option>
                      <option value="Manisa">Manisa</option>
                      <option value="Mardin">Mardin</option>
                      <option value="Mersin">Mersin</option>
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

                    <div class="invalid-feedback">
                      Lütfen şehir seçiniz.
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="notes" class="form-label">Firmanız Hakkında <span class="text-danger">*</span></label>
                    <textarea name="content" id="notes" class="form-control" rows="4" placeholder="Firmanızı tanıtın (en az 30 karakter)..." required minlength="30"></textarea>
                    <div class="invalid-feedback">
                      Lütfen en az 30 karakter açıklama girin.
                    </div>
                  </div>
                  <div class="col-12 d-grid">
                    <button type="submit" class="btn btn-primary" id="corporateSubmitBtn">
                      <span class="spinner-border spinner-border-sm d-none me-2" role="status" aria-hidden="true"></span>
                      Başvuruyu Gönder
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-5">
            <div class="p-4 p-lg-5 h-100 border rounded-3">
              <h3 class="h6 mb-3">Sık Sorulanlar</h3>
              <div class="small text-muted">
                <p class="mb-2"><strong>Onay süreci ne kadar?</strong><br>Ön değerlendirme 1 iş günü içinde yapılır.</p>
                <p class="mb-2"><strong>Ödeme nasıl yapılır?</strong><br>Aylık toplu faturalama veya proje bazlı seçenekler mevcuttur.</p>
                <p class="mb-0"><strong>Destek?</strong><br>7/24 e‑posta ve mesai içi telefon desteği.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
