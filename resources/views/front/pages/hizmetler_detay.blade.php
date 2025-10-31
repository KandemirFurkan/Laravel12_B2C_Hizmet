@extends('front.layouts.app')

@section('content')

    <!-- Sayfa Başlığı ve Breadcrumb -->
    <section class="bg-light py-4 border-bottom">
      <div class="container">
        <h1 class="h3 mb-2">Hizmet Detayı</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.html">Ana Sayfa</a></li>
            <li class="breadcrumb-item"><a href="list.html">Liste</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detay</li>
          </ol>
        </nav>
      </div>
    </section>

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
                <h3 class="h5 mb-3">Hizmet Talep Formu</h3>
                <form class="row g-3" id="requestForm" novalidate>
                  <div class="col-12">
                    <label for="adSoyad" class="form-label">Ad Soyad</label>
                    <input type="text" class="form-control" id="adSoyad" placeholder="Adınız Soyadınız" required>
                  </div>
                  <div class="col-12 col-md-6">
                    <label for="email" class="form-label">E-posta</label>
                    <input type="email" class="form-control" id="email" placeholder="ornek@mail.com" required>
                  </div>
                  <div class="col-12 col-md-6">
                    <label for="telefon" class="form-label">Telefon</label>
                    <input type="tel" class="form-control" id="telefon" placeholder="05xx xxx xx xx" required>
                  </div>
                  <div class="col-12">
                    <label for="kategori" class="form-label">Hizmet Kategorisi</label>
                    <select id="kategori" class="form-select" required>
                      <option selected disabled>Seçiniz</option>
                      <option>Temizlik</option>
                      <option>Tadilat</option>
                      <option>Elektrik</option>
                      <option>Diğer</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <label for="mesaj" class="form-label">Açıklama</label>
                    <textarea class="form-control" id="mesaj" rows="5" placeholder="İhtiyacınızı detaylandırın..." required></textarea>
                  </div>
                  <div class="col-12 d-grid">
                    <button type="submit" class="btn btn-primary">Talep Gönder</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
