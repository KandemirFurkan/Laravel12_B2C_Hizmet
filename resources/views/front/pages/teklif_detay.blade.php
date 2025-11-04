@extends('front.layouts.app')

@section('content')

 

    <!-- Sayfa Başlığı ve Breadcrumb -->
    <section class="bg-light py-4 border-bottom">
      <div class="container">
        <h1 class="h3 mb-2">Teklif Seçimi</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('anasayfa')}}">Ana Sayfa</a></li>
            <li class="breadcrumb-item"><a href="{{route('tekliflerim')}}">Talepler</a></li>
            <li class="breadcrumb-item active" aria-current="page">Teklif Seçimi</li>
          </ol>
        </nav>
      </div>
    </section>

    <!-- Ana İçerik -->
    <section class="py-5">
      <div class="container">
        <div class="row g-4">
          <!-- Form Detayları -->
          <div class="col-12 col-lg-4">
            <div class="card shadow-sm form-details-card sticky-top" style="top: 100px;">
              <div class="card-header bg-white border-bottom">
                <h3 class="h5 mb-0">Form Detayları</h3>
              </div>
              <div class="card-body">
                <div class="form-detail-item">
                  <div class="form-detail-label">Ad Soyad</div>
                  <div class="form-detail-value" id="formAdSoyad">{{Auth::user()->name}}</div>
                </div>
                <div class="form-detail-item">
                  <div class="form-detail-label">E-posta</div>
                  <div class="form-detail-value" id="formEmail">{{Auth::user()->email}}</div>
                </div>
                <div class="form-detail-item">
                  <div class="form-detail-label">Telefon</div>
                  <div class="form-detail-value" id="formTelefon">{{Auth::user()->phone}}</div>
                </div>
                <div class="form-detail-item">
                  <div class="form-detail-label">Hizmet Kategorisi</div>
                  <div class="form-detail-value" id="formKategori"></div>
                </div>
                <div class="form-detail-item">
                  <div class="form-detail-label">Açıklama</div>
                  <div class="form-detail-value" id="formAciklama"> {{$talep->message}}</div>
                </div>
                <div class="form-detail-item">
                  <div class="form-detail-label">Talep Tarihi</div>
                  <div class="form-detail-value" id="formTarih">{{$talep->created_at->format('d-m-Y')}}</div>
                </div>
                <div class="form-detail-item">
                  <div class="form-detail-label">Durum</div>
                  <div class="form-detail-value">
                    <span class="badge bg-warning text-dark">Onaylandı</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Teklifler -->
          <div class="col-12 col-lg-8">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <h2 class="h4 mb-0">Gelen Teklifler</h2>
              <span class="badge bg-primary" id="teklifSayisi">5 Teklif</span>
            </div>

            <!-- Teklif Kartları -->
            <div id="tekliflerListesi">
              <!-- Teklif 1 -->
              <div class="card offer-card mb-3 position-relative" data-offer-id="1" onclick="selectOffer(1)">
                <div class="card-body">
                  <div class="d-flex align-items-start gap-3">
                    <img src="https://placehold.co/60x60/0d6efd/ffffff?text=TS" alt="Temizlik Şirketi" class="company-logo">
                    <div class="flex-grow-1">
                      <div class="d-flex justify-content-between align-items-start mb-2">
                        <div>
                          <h5 class="mb-1">Temizlik Şirketi A.Ş.</h5>
                          <p class="text-muted small mb-0">
                            <i class="bi bi-geo-alt me-1"></i>
                            İstanbul, Kadıköy
                          </p>
                        </div>
                        <span class="badge bg-success selected-badge d-none" id="badge-1">Seçildi</span>
                      </div>
                      <div class="mb-2">
                        <p class="mb-1"><strong>Teklif:</strong></p>
                        <p class="text-muted small mb-0">Profesyonel temizlik ekibimiz ile haftalık temizlik hizmeti sunuyoruz. Malzemeler dahil, sertifikalı personel.</p>
                      </div>
                      <div class="d-flex justify-content-between align-items-center mt-3">
                        <div>
                          <span class="text-muted small">Başlangıç:</span>
                          <span class="ms-1">22 Ocak 2024</span>
                        </div>
                        <div class="price-display">₺1.200</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

 

            <!-- Seçim ve Onay Butonu -->
            <div class="card shadow-sm mt-4">
              <div class="card-body">
                <div class="alert alert-info mb-3" role="alert">
                  <i class="bi bi-info-circle me-2"></i>
                  <strong>Uyarı:</strong> Lütfen bir teklif seçtikten sonra onaylayın. Seçtiğiniz firma ile iletişime geçilecektir.
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <p class="mb-0 text-muted">Seçilen Teklif:</p>
                    <p class="mb-0 fw-bold" id="selectedOfferText">Henüz teklif seçilmedi</p>
                  </div>
                  <button type="button" class="btn btn-primary btn-lg" id="onayBtn" onclick="confirmSelection()" disabled>
                    <i class="bi bi-check-circle me-2"></i>
                    Teklifi Onayla
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   


@endsection
