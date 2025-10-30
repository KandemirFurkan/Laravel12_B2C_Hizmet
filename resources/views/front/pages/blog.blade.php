@extends('front.layouts.app')

@section('content')
   <!-- Sayfa Başlığı ve Breadcrumb -->
    <section class="bg-light py-4 border-bottom">
      <div class="container">
        <h1 class="h3 mb-2">Blog 1</h1>
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
                <img id="blogImg1" src="imgs/temizlik.jpg" class="card-img-top" alt="Blog 1">
                <div class="card-body">
                  <h5 class="card-title">Ev Temizliğinde Pratik İpuçları</h5>
                  <p class="card-text text-muted">Daha verimli temizlik için uygulayabileceğiniz basit adımlar...</p>
                </div>
              </div>
            </a>
          </div>



        </div>
      </div>
    </section>

@endsection
