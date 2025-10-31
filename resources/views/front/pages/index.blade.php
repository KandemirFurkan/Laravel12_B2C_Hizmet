@extends('front.layouts.app')

@section('content')
        <!-- Slider / Carousel -->
    <section class="bg-light">
      <div class="container py-3">
        <div id="mainCarousel" class="carousel slide rounded overflow-hidden shadow-sm" data-bs-ride="carousel">

        <div class="carousel-inner">
          @foreach($sliders as $slider)
          <div class="carousel-item @if($loop->first) active @endif">
            <img src="{{ asset($slider->image) }}" class="d-block w-100" alt="{{ $slider->title }}">
            <div class="carousel-caption d-none d-md-block">
              <h5>{{ $slider->title }}</h5>
              <p>{{ $slider->subtitle }}</p>
            </div>
          </div>
        @endforeach
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
          <!-- 8 kart 5fablonu -->
          @foreach ($hizmetlers as $hizmet)
          <div class="col-6 col-md-4 col-lg-3">
            <a href="detail.html" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm">
                <img id="svcImg1" src="{{ $hizmet->image }}" class="card-img-top" alt="{{ $hizmet->title }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $hizmet->title }}</h5>
                </div>
              </div>
            </a>
          </div>
          @endforeach





        </div>
        <div class="row mt-4">
          <div class="col text-center">
            <a href="{{ route('hizmetler') }}" class="btn btn-outline-primary px-4">Tümünü Göster</a>
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

            @foreach ($blogs as $blog)
                   <div class="col-12 col-md-6 col-lg-3">
            <a href="#" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm">
                <img id="blogImg1" src="{{ $blog->image }}" class="card-img-top" alt="{{ $blog->title }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $blog->title }}</h5>
                  <p class="card-text text-muted">{{ Str::limit($blog->content,60) }}</p>
                </div>
              </div>
            </a>
          </div>
            @endforeach


        </div>
        <div class="row mt-4">
          <div class="col text-center">
            <a href="{{ route('blog') }}" class="btn btn-outline-primary px-4">Tümünü Göster</a>
          </div>
        </div>
      </div>
    </section>
@endsection
