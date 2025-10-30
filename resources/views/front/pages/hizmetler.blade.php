@extends('front.layouts.app')

@section('content')
   <!-- Sayfa Başlığı ve Breadcrumb -->
    <section class="bg-light py-4 border-bottom">
      <div class="container">
        <h1 class="h3 mb-2">Hizmet Listesi</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.html">Ana Sayfa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Liste</li>
          </ol>
        </nav>
      </div>
    </section>



    <!-- Liste Grid -->
    <section class="pb-5">
      <div class="container">
        <div class="row g-4">
          <!-- 12 örnek kart -->

          <!-- 1 -->
          <div class="col-12 col-sm-6 col-lg-4">
            <a href="detail.html" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm">
                <img src="{{ asset('imgs/temizlik.jpg') }}" class="card-img-top" alt="Temizlik">
                <div class="card-body">
                  <h5 class="card-title">Temizlik Hizmeti</h5>
                  <p class="card-text text-muted small">Profesyonel ekip, esnek takvim.</p>
                </div>
              </div>
            </a>
          </div>
          <!-- 2 -->
          <div class="col-12 col-sm-6 col-lg-4">
            <a href="detail.html" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm">
                <img src="{{ asset('imgs/tadilat.jpg') }}" class="card-img-top" alt="Tadilat">
                <div class="card-body">
                  <h5 class="card-title">Tadilat &amp; Tamirat</h5>
                  <p class="card-text text-muted small">Usta işi, garantili çözüm.</p>
                </div>
              </div>
            </a>
          </div>
          <!-- 3 -->
          <div class="col-12 col-sm-6 col-lg-4">
            <a href="detail.html" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm">
                <img src="{{ asset('imgs/boya.jpg') }}" class="card-img-top" alt="Boyama">
                <div class="card-body">
                  <h5 class="card-title">Boyama</h5>
                  <p class="card-text text-muted small">Renk danışmanlığı ile estetik dokunuş.</p>
                </div>
              </div>
            </a>
          </div>
                  <!-- 1 -->
          <div class="col-12 col-sm-6 col-lg-4">
            <a href="detail.html" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm">
                <img src="{{ asset('imgs/temizlik.jpg') }}" class="card-img-top" alt="Temizlik">
                <div class="card-body">
                  <h5 class="card-title">Temizlik Hizmeti</h5>
                  <p class="card-text text-muted small">Profesyonel ekip, esnek takvim.</p>
                </div>
              </div>
            </a>
          </div>
          <!-- 2 -->
          <div class="col-12 col-sm-6 col-lg-4">
            <a href="detail.html" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm">
                <img src="{{ asset('imgs/tadilat.jpg') }}" class="card-img-top" alt="Tadilat">
                <div class="card-body">
                  <h5 class="card-title">Tadilat &amp; Tamirat</h5>
                  <p class="card-text text-muted small">Usta işi, garantili çözüm.</p>
                </div>
              </div>
            </a>
          </div>
          <!-- 3 -->
          <div class="col-12 col-sm-6 col-lg-4">
            <a href="detail.html" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm">
                <img src="{{ asset('imgs/boya.jpg') }}" class="card-img-top" alt="Boyama">
                <div class="card-body">
                  <h5 class="card-title">Boyama</h5>
                  <p class="card-text text-muted small">Renk danışmanlığı ile estetik dokunuş.</p>
                </div>
              </div>
            </a>
          </div>
                  <!-- 1 -->
          <div class="col-12 col-sm-6 col-lg-4">
            <a href="detail.html" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm">
                <img src="{{ asset('imgs/temizlik.jpg') }}" class="card-img-top" alt="Temizlik">
                <div class="card-body">
                  <h5 class="card-title">Temizlik Hizmeti</h5>
                  <p class="card-text text-muted small">Profesyonel ekip, esnek takvim.</p>
                </div>
              </div>
            </a>
          </div>
          <!-- 2 -->
          <div class="col-12 col-sm-6 col-lg-4">
            <a href="detail.html" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm">
                <img src="{{ asset('imgs/tadilat.jpg') }}" class="card-img-top" alt="Tadilat">
                <div class="card-body">
                  <h5 class="card-title">Tadilat &amp; Tamirat</h5>
                  <p class="card-text text-muted small">Usta işi, garantili çözüm.</p>
                </div>
              </div>
            </a>
          </div>
          <!-- 3 -->
          <div class="col-12 col-sm-6 col-lg-4">
            <a href="detail.html" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm">
                <img src="{{ asset('imgs/boya.jpg') }}" class="card-img-top" alt="Boyama">
                <div class="card-body">
                  <h5 class="card-title">Boyama</h5>
                  <p class="card-text text-muted small">Renk danışmanlığı ile estetik dokunuş.</p>
                </div>
              </div>
            </a>
          </div>
                  <!-- 1 -->
          <div class="col-12 col-sm-6 col-lg-4">
            <a href="detail.html" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm">
                <img src="{{ asset('imgs/temizlik.jpg') }}" class="card-img-top" alt="Temizlik">
                <div class="card-body">
                  <h5 class="card-title">Temizlik Hizmeti</h5>
                  <p class="card-text text-muted small">Profesyonel ekip, esnek takvim.</p>
                </div>
              </div>
            </a>
          </div>
          <!-- 2 -->
          <div class="col-12 col-sm-6 col-lg-4">
            <a href="detail.html" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm">
                <img src="{{ asset('imgs/tadilat.jpg') }}" class="card-img-top" alt="Tadilat">
                <div class="card-body">
                  <h5 class="card-title">Tadilat &amp; Tamirat</h5>
                  <p class="card-text text-muted small">Usta işi, garantili çözüm.</p>
                </div>
              </div>
            </a>
          </div>
          <!-- 3 -->
          <div class="col-12 col-sm-6 col-lg-4">
            <a href="detail.html" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm">
                <img src="{{ asset('imgs/boya.jpg') }}" class="card-img-top" alt="Boyama">
                <div class="card-body">
                  <h5 class="card-title">Boyama</h5>
                  <p class="card-text text-muted small">Renk danışmanlığı ile estetik dokunuş.</p>
                </div>
              </div>
            </a>
          </div>


        </div>
      </div>
    </section>

@endsection
