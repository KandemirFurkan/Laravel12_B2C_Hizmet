@extends('front.layouts.app')

@section('content')

    <!-- Başlık ve breadcrumb -->
    <section class="bg-light py-4 border-bottom">
      <div class="container">
        <h1 class="h3 mb-2">İletişim</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.html">Ana Sayfa</a></li>
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
                <form class="row g-3" id="contactForm" novalidate>
                  <div class="col-12 col-md-6">
                    <label for="adSoyad" class="form-label">Ad Soyad</label>
                    <input type="text" id="adSoyad" class="form-control" placeholder="Adınız Soyadınız" required>
                  </div>
                  <div class="col-12 col-md-6">
                    <label for="email" class="form-label">E-posta</label>
                    <input type="email" id="email" class="form-control" placeholder="ornek@mail.com" required>
                  </div>
                  <div class="col-12">
                    <label for="konu" class="form-label">Konu</label>
                    <input type="text" id="konu" class="form-control" placeholder="Konu" required>
                  </div>
                  <div class="col-12">
                    <label for="mesaj" class="form-label">Mesajınız</label>
                    <textarea id="mesaj" class="form-control" rows="6" placeholder="Mesajınızı yazın..." required></textarea>
                  </div>
                  <div class="col-12 d-grid">
                    <button type="submit" class="btn btn-primary">Gönder</button>
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
              <strong>Adres:</strong> İstanbul, Türkiye &nbsp; | &nbsp;
              <strong>Tel:</strong> 0 (212) 000 00 00 &nbsp; | &nbsp;
              <strong>E-posta:</strong> info@hizmet.com
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
