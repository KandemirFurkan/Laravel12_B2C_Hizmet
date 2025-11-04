@extends('front.layouts.app')

@section('content')

@include('front.inc.breadcrumb')

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
                @auth
                  @php
                    $userRole = (string) Auth::user()->role;
                  @endphp
                  @if($userRole === '1')
                    {{-- Role 1: Bireysel Kullanıcı - Form Göster --}}
                    @php
                      $user = Auth::user();
                    @endphp
                    <h3 class="h5 mb-3">Hizmet Talep Formu</h3>
                    <form class="row g-3" id="requestForm" novalidate>
                      <div class="col-12">
                        <label for="adSoyad" class="form-label">Ad Soyad</label>
                        <input type="text" class="form-control" id="adSoyad" value="{{ $user->name }}" placeholder="Adınız Soyadınız" required disabled>
                      </div>
                      <div class="col-12 col-md-6">
                        <label for="email" class="form-label">E-posta</label>
                        <input type="email" class="form-control" id="email" value="{{ $user->email }}" placeholder="ornek@mail.com" required disabled>
                      </div>
                      <div class="col-12 col-md-6">
                        <label for="telefon" class="form-label">Telefon</label>
                        <input type="tel" class="form-control" id="telefon" value="{{ $user->phone ?? '' }}" placeholder="05xx xxx xx xx" required disabled>
                      </div>
                      <div class="col-12 col-md-6">
                        <label for="kategori" class="form-label">Hizmet Kategorisi</label>
                        <select id="kategori" class="form-select" required disabled>
                          <option selected value="{{ $hizmetler->title }}">{{ $hizmetler->title }}</option>
                        </select>
                      </div>
                        <div class="col-12 col-md-6">
                        <label for="sehir" class="form-label">Şehir</label>
                        <select id="sehir" class="form-select" required disabled>
                          <option selected value="{{ $user->location ?? '' }}">{{ $user->location ?? 'Belirtilmemiş' }}</option>
                        </select>
                      </div>
                      <div class="col-12">
                        <label for="mesaj" class="form-label">Açıklama</label>
                        <textarea class="form-control" id="mesaj" rows="5" placeholder="İhtiyacınızı detaylandırın..." required ></textarea>
                      </div>
                      <div class="col-12 d-grid">
                        <button type="submit" class="btn btn-primary" >Talep Gönder</button>
                      </div>
                    </form>
                  @elseif($userRole === '2')
                    {{-- Role 2: Kurumsal Kullanıcı - Hizmet Alınamaz Mesajı --}}
                    <div class="text-center py-4">
                      <div class="mb-4">
                        <svg width="64" height="64" fill="#dc3545" viewBox="0 0 16 16" class="mb-3">
                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                        </svg>
                      </div>
                      <h3 class="h5 mb-3 text-danger">Firma Hesabıyla Hizmet Alınamaz</h3>
                      <p class="text-muted mb-4">
                        Üzgünüz, firma hesapları ile hizmet alınamamaktadır.
                        Bu platform sadece bireysel kullanıcılar için hizmet vermektedir.
                      </p>
                      <div class="alert alert-info mb-0" role="alert">
                        <i class="bi bi-info-circle me-2"></i>
                        Firma hesabınız varsa ve hizmet almak istiyorsanız, lütfen bireysel hesap oluşturun.
                      </div>
                    </div>
                  @endif
                @else
                  <div class="text-center py-4">
                    <div class="mb-4">
                      <svg width="64" height="64" fill="#0d6efd" viewBox="0 0 16 16" class="mb-3">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                      </svg>
                    </div>
                    <h3 class="h5 mb-3">Hizmet Alabilmek İçin Kayıt Olun</h3>
                    <p class="text-muted mb-4">
                      Bu hizmeti almak için önce hesabınızın olması gerekmektedir.
                      Ücretsiz kayıt olarak hizmet talebinde bulunabilirsiniz.
                    </p>
                    <div class="d-grid gap-2">
                      <a href="{{ route('bireysel_reg') }}" class="btn btn-primary">
                        <i class="bi bi-person-plus me-2"></i>
                        Kayıt Ol
                      </a>
                      <p class="text-muted small mb-0 mt-2">
                        Zaten hesabınız var mı?
                        <a href="{{ route('login') }}" class="text-decoration-none">Giriş Yap</a>
                      </p>
                    </div>
                  </div>
                @endauth
              </div>
            </div>
          </div>



        </div>
      </div>
    </section>

@endsection
