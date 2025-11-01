@extends('front.layouts.app')

@section('content')

    <!-- Başlık ve breadcrumb -->
    <section class="bg-light py-4 border-bottom">
      <div class="container">
        <h1 class="h3 mb-2">İletişim</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('anasayfa') }}">Ana Sayfa</a></li>
            <li class="breadcrumb-item active" aria-current="page">İletişim</li>
          </ol>
        </nav>
      </div>
    </section>

    <!-- İletişim içerik -->
    <section class="py-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-12 col-lg-6">
            <div class="card h-100 shadow-sm">
              <div class="card-body">
                <h2 class="h5 mb-3">İletişim Formu</h2>
                
                <!-- Bilgilendirme Mesajı -->
                <div id="contactFormMessage" class="alert d-none mb-3" role="alert"></div>
                
                <form class="row g-3" id="contactForm" novalidate>
                  <div class="col-12 col-md-6">
                    <label for="adSoyad" class="form-label">Ad Soyad *</label>
                    <input type="text" name="name" id="adSoyad" class="form-control" placeholder="Adınız Soyadınız" required>
                  </div>
                  <div class="col-12 col-md-6">
                    <label for="email" class="form-label">E-posta *</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="ornek@mail.com" required>
                  </div>
                  <div class="col-12">
                    <label for="konu" class="form-label">Konu *</label>
                    <input type="text" name="subject" id="konu" class="form-control" placeholder="Konu" required>
                  </div>
                  <div class="col-12">
                    <label for="mesaj" class="form-label">Mesajınız *</label>
                    <textarea name="message" id="mesaj" class="form-control" rows="6" placeholder="Mesajınızı yazın..." required></textarea>
                  </div>
                  <div class="col-12 d-grid">
                    <button type="submit" class="btn btn-primary" id="contactSubmitBtn">
                      <span class="spinner-border spinner-border-sm d-none me-2" role="status" aria-hidden="true"></span>
                      Gönder
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="ratio ratio-16x9 rounded overflow-hidden shadow-sm">
              <iframe src="https://maps.google.com/maps?q=istanbul&t=&z=11&ie=UTF8&iwloc=&output=embed" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="mt-3 small text-muted">
              <strong>Adres:</strong> {{ $siteSettings->address }} <br />
              <strong>Tel:</strong> {{ $siteSettings->phone }} <br />
              <strong>E-posta:</strong> {{ $siteSettings->email }}
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
