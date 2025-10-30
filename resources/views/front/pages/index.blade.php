@extends('front.layouts.app')

@section('content')
        <!-- Slider / Carousel -->
    <section class="bg-light">
      <div class="container py-3">
        <div id="mainCarousel" class="carousel slide rounded overflow-hidden shadow-sm" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slayt 1"></button>
          <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slayt 2"></button>
          <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Slayt 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img  src="{{ asset('imgs/slider1.jpg') }}" class="d-block w-100" alt="Slider 1">
            <div class="carousel-caption d-none d-md-block">
              <h5>Profesyonel Hizmetlere Hızlıca Ulaşın</h5>
              <p>İhtiyacınıza uygun uzmanları listeler, karşılaştırır ve temasa geçersiniz.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://placehold.co/1600x500?text=Slider+2" class="d-block w-100" alt="Slider 2">
            <div class="carousel-caption d-none d-md-block">
              <h5>Güvenilir Uzmanlar</h5>
              <p>Doğrulanmış değerlendirmeler ve referanslarla doğru tercih.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://placehold.co/1600x500?text=Slider+3" class="d-block w-100" alt="Slider 3">
            <div class="carousel-caption d-none d-md-block">
              <h5>Hızlı Teslimat</h5>
              <p>Takvim ve süreç yönetimi ile işleri kolaylaştırın.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Önceki</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Sonraki</span>
        </button>
        </div>
      </div>
    </section>

    <!-- Nasıl Çalışır (3 Adım) -->
    <section class="py-5 how-it-works">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h2 class="section-title">Nasıl Çalışır?</h2>
            <p class="text-muted">Sadece 3 adımda doğru hizmete ulaşın.</p>
          </div>
        </div>
        <div class="row g-4 g-lg-5 justify-content-center">
          <!-- 1. Adım -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="h-100 text-center p-4 p-lg-5 border rounded-3 shadow-sm step-card">
              <div class="mx-auto mb-3 d-inline-flex align-items-center justify-content-center rounded-circle step-badge" style="width:56px;height:56px;">
                <!-- form icon -->
                <svg width="26" height="26" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8zm0 2.5L18.5 9H14zM8 12h8v2H8zm0 4h8v2H8z"></path>
                </svg>
              </div>
              <h3 class="h5 mb-2">Formu doldur</h3>
              <p class="text-muted mb-0">İhtiyacınızı kısaca anlatın, iletişim bilgilerinizi bırakın.</p>
            </div>
          </div>
          <!-- 2. Adım -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="h-100 text-center p-4 p-lg-5 border rounded-3 shadow-sm step-card">
              <div class="mx-auto mb-3 d-inline-flex align-items-center justify-content-center rounded-circle step-badge" style="width:56px;height:56px;">
                <!-- offers/handshake icon -->
                <svg width="26" height="26" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                  <path d="M16.5 3a3.5 3.5 0 0 1 3.5 3.5V9h-3V6.5a.5.5 0 0 0-.5-.5H13V3zM7.5 21A3.5 3.5 0 0 1 4 17.5V15h3v2.5a.5.5 0 0 0 .5.5H11v3z"></path>
                  <path d="M21 10h-6l-1.5 1.5L12 10H3v4h6l1.5 1.5L12 14h9z"></path>
                </svg>
              </div>
              <h3 class="h5 mb-2">Teklif al</h3>
              <p class="text-muted mb-0">Uygun uzmanlardan gelen teklifleri görün ve karşılaştırın.</p>
            </div>
          </div>
          <!-- 3. Adım -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="h-100 text-center p-4 p-lg-5 border rounded-3 shadow-sm step-card">
              <div class="mx-auto mb-3 d-inline-flex align-items-center justify-content-center rounded-circle step-badge" style="width:56px;height:56px;">
                <!-- check icon -->
                <svg width="26" height="26" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                  <path d="M9 16.2 4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4z"></path>
                </svg>
              </div>
              <h3 class="h5 mb-2">Onayla</h3>
              <p class="text-muted mb-0">Size en uygun teklifi seçin ve onaylayın.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Hizmetler (8 adet) -->
    <section class="py-5">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h2 class="section-title">Hizmetler</h2>
            <p class="text-muted">Çeşitli alanlarda uzman ekibimizle yanınızdayız.</p>
          </div>
        </div>
        <div class="row g-4">
          <!-- 8 kart 5fablonu -->
          <div class="col-6 col-md-4 col-lg-3">
            <a href="detail.html" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm">
                <img id="svcImg1" src="/imgs/temizlik.jpg" class="card-img-top" alt="Hizmet 1">
                <div class="card-body">
                  <h5 class="card-title">Temizlik</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <a href="detail.html" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm">
                <img id="svcImg2" src="imgs/tadilat.jpg" class="card-img-top" alt="Hizmet 2">
                <div class="card-body">
                  <h5 class="card-title">Tadilat</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <a href="detail.html" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm">
                <img id="svcImg3" src="imgs/boya.jpg" class="card-img-top" alt="Hizmet 3">
                <div class="card-body">
                  <h5 class="card-title">Boyama</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <a href="detail.html" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm">
                <img id="svcImg4" src="imgs/nakliyet.jpg" class="card-img-top" alt="Hizmet 4">
                <div class="card-body">
                  <h5 class="card-title">Nakliye</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <a href="detail.html" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm">
                <img id="svcImg5" src="imgs/bahce.jpg" class="card-img-top" alt="Hizmet 5">
                <div class="card-body">
                  <h5 class="card-title">Bahçe Bakımı</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <a href="detail.html" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm">
                <img id="svcImg6" src="imgs/elektirk.jpg" class="card-img-top" alt="Hizmet 6">
                <div class="card-body">
                  <h5 class="card-title">Elektrik</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <a href="detail.html" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm">
                <img id="svcImg7" src="imgs/tesisat.jpg" class="card-img-top" alt="Hizmet 7">
                <div class="card-body">
                  <h5 class="card-title">Sıhhi Tesisat</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <a href="detail.html" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm">
                <img id="svcImg8" src="imgs/klima.jpg" class="card-img-top" alt="Hizmet 8">
                <div class="card-body">
                  <h5 class="card-title">Klima Servisi</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col text-center">
            <a href="list.html" class="btn btn-outline-primary px-4">Tümünü Göster</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Blog (4 adet) -->
    <section class="py-5 bg-light">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h2 class="section-title">Blog</h2>
            <p class="text-muted">Faydalı ipuçları ve güncel makaleler.</p>
          </div>
        </div>
        <div class="row g-4">
          <!-- 4 blog kart -->
          <div class="col-12 col-md-6 col-lg-3">
            <a href="#" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm">
                <img id="blogImg1" src="imgs/temizlik.jpg" class="card-img-top" alt="Blog 1">
                <div class="card-body">
                  <h5 class="card-title">Ev Temizliğinde Pratik İpuçları</h5>
                  <p class="card-text text-muted">Daha verimli temizlik için uygulayabileceğiniz basit adımlar...</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <a href="#" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm">
                <img id="blogImg2" src="imgs/boya.jpg" class="card-img-top" alt="Blog 2">
                <div class="card-body">
                  <h5 class="card-title">Boyada Renk Seçimi</h5>
                  <p class="card-text text-muted">Mekana uygun renk tonları ile ferah bir atmosfer...</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <a href="#" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm">
                <img id="blogImg3" src="imgs/elektirk.jpg" class="card-img-top" alt="Blog 3">
                <div class="card-body">
                  <h5 class="card-title">Elektrik Arızalarında Güvenlik</h5>
                  <p class="card-text text-muted">Temel güvenlik önlemleri ile riskleri azaltın...</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <a href="#" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm">
                <img id="blogImg4" src="imgs/nakliyet.jpg" class="card-img-top" alt="Blog 4">
                <div class="card-body">
                  <h5 class="card-title">Taşınma İpuçları</h5>
                  <p class="card-text text-muted">Planlı taşınma için kontrol listesi ve öneriler...</p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col text-center">
            <a href="list.html" class="btn btn-outline-primary px-4">Tümünü Göster</a>
          </div>
        </div>
      </div>
    </section>
@endsection
