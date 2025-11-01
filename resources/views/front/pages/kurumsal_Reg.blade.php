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
                <form id="corporateForm" class="row g-3" novalidate>
                  <div class="col-12">
                    <label for="companyName" class="form-label">Firma Adı</label>
                    <input type="text" id="companyName" class="form-control" placeholder="Örn: ABC A.Ş." required>
                  </div>
                  <div class="col-12 col-md-6">
                    <label for="taxNumber" class="form-label">Vergi Numarası</label>
                    <input type="text" id="taxNumber" class="form-control" placeholder="Vergi No" required>
                  </div>
                  <div class="col-12 col-md-6">
                    <label for="sector" class="form-label">Sektör</label>
                    <select id="sector" class="form-select" required>
                      <option selected disabled>Seçiniz</option>
                      <option>Perakende</option>
                      <option>Üretim</option>
                      <option>Hizmet</option>
                      <option>Teknoloji</option>
                      <option>Diğer</option>
                    </select>
                  </div>
                  <div class="col-12 col-md-6">
                    <label for="email" class="form-label">Kurumsal E-posta</label>
                    <input type="email" id="email" class="form-control" placeholder="ornek@firma.com" required>
                  </div>
                  <div class="col-12 col-md-6">
                    <label for="phone" class="form-label">Telefon</label>
                    <input type="tel" id="phone" class="form-control" placeholder="0 (5xx) xxx xx xx" required>
                  </div>
                  <div class="col-12">
                    <label for="website" class="form-label">Web Sitesi (opsiyonel)</label>
                    <input type="url" id="website" class="form-control" placeholder="https://...">
                  </div>
                  <div class="col-12">
                    <label for="address" class="form-label">Adres</label>
                    <textarea id="address" class="form-control" rows="3" placeholder="Açık adres" required></textarea>
                  </div>
                  <div class="col-12">
                    <label for="notes" class="form-label">Notlar (opsiyonel)</label>
                    <textarea id="notes" class="form-control" rows="4" placeholder="İhtiyaçlarınızı kısaca anlatın..."></textarea>
                  </div>
                  <div class="col-12 d-grid">
                    <button type="submit" class="btn btn-primary">Başvuruyu Gönder</button>
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
