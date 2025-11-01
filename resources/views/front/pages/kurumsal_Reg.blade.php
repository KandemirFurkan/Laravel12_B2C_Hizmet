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
                    placeholder="0532xxxxxxx" required>
                    <div class="invalid-feedback">
                      Lütfen telefon numaranızı girin.
                    </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <label for="address" class="form-label">Şehir <span class="text-danger">*</span></label>
                    <select name="location" id="address" class="form-select" required>
                      <option selected disabled value="">Seçiniz</option>
                      <option value="İstanbul">İstanbul</option>
                      <option value="Ankara">Ankara</option>
                      <option value="İzmir">İzmir</option>
                      <option value="Bursa">Bursa</option>
                      <option value="Antalya">Antalya</option>
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
