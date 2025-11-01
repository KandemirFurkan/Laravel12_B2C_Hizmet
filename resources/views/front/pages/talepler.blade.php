@extends('front.layouts.app')

@section('content')
 <!-- Sayfa Başlığı -->
 <section class="bg-light py-4 border-bottom">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
          <div>
            <h1 class="h3 mb-2">Gelen Talepler</h1>
            <p class="text-muted small mb-0">Hizmet alanınıza uygun form talepleri</p>
          </div>
          <span class="badge bg-primary">4 Yeni Talep</span>
        </div>
      </div>
    </section>

    <!-- Ana İçerik -->
    <section class="py-5">
      <div class="container">
        <!-- Filtre ve Arama -->
        <div class="row mb-4">
          <div class="col-12">
            <div class="card shadow-sm">
              <div class="card-body">
                <div class="row g-3">
                  <div class="col-12 col-md-6">
                    <div class="input-group">
                      <span class="input-group-text bg-white">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                        </svg>
                      </span>
                      <input type="text" class="form-control" id="searchInput" placeholder="Talep ara...">
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="filter-buttons">
                      <button class="btn btn-outline-primary filter-btn active" data-filter="all">Tümü</button>
                      <button class="btn btn-outline-primary filter-btn" data-filter="yeni">Yeni</button>
                      <button class="btn btn-outline-primary filter-btn" data-filter="inceleniyor">İnceleniyor</button>
                      <button class="btn btn-outline-primary filter-btn" data-filter="teklif-verildi">Teklif Verildi</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Talep Listesi -->
        <div class="row g-4" id="requestList">
          <!-- Talep 1 -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card request-card shadow-sm h-100" onclick="window.location.href='firma-talep-detay.html?id=1'">
              <div class="card-body">
                <div class="d-flex align-items-start gap-3 mb-3">
                  <div class="request-icon bg-primary bg-opacity-10 text-primary">
                    🧹
                  </div>
                  <div class="flex-grow-1">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                      <span class="badge category-badge bg-primary">Temizlik</span>
                      <span class="badge status-badge bg-warning text-dark" data-status="yeni">Yeni</span>
                    </div>
                    <h5 class="card-title mb-2">Ev Temizliği Talebi</h5>
                    <p class="text-muted small mb-3" style="font-size: 0.875rem; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                      3+1 daire için haftalık profesyonel temizlik hizmeti arıyorum. Malzemeler dahil olmalı.
                    </p>
                  </div>
                </div>
                <div class="border-top pt-3">
                  <div class="row text-center">
                    <div class="col-4">
                      <div class="text-muted small">Talep Tarihi</div>
                      <div class="fw-bold small">15 Ocak</div>
                    </div>
                    <div class="col-4">
                      <div class="text-muted small">Teklif Sayısı</div>
                      <div class="fw-bold small text-primary">5</div>
                    </div>
                    <div class="col-4">
                      <div class="text-muted small">Durum</div>
                      <div class="fw-bold small">Aktif</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-top-0">
                <div class="d-grid">
                  <button class="btn btn-outline-primary btn-sm">
                    <svg width="14" height="14" fill="currentColor" viewBox="0 0 16 16" class="me-1">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                    </svg>
                    Detayları Gör ve Teklif Ver
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Talep 2 -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card request-card shadow-sm h-100" onclick="window.location.href='firma-talep-detay.html?id=2'">
              <div class="card-body">
                <div class="d-flex align-items-start gap-3 mb-3">
                  <div class="request-icon bg-danger bg-opacity-10 text-danger">
                    🔨
                  </div>
                  <div class="flex-grow-1">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                      <span class="badge category-badge bg-danger">Tadilat</span>
                      <span class="badge status-badge bg-warning text-dark" data-status="yeni">Yeni</span>
                    </div>
                    <h5 class="card-title mb-2">Banyo Tadilatı</h5>
                    <p class="text-muted small mb-3" style="font-size: 0.875rem; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                      Banyo küveti ve duşakabin değişimi ile lavabo montajı için profesyonel ekip arıyorum.
                    </p>
                  </div>
                </div>
                <div class="border-top pt-3">
                  <div class="row text-center">
                    <div class="col-4">
                      <div class="text-muted small">Talep Tarihi</div>
                      <div class="fw-bold small">12 Ocak</div>
                    </div>
                    <div class="col-4">
                      <div class="text-muted small">Teklif Sayısı</div>
                      <div class="fw-bold small text-primary">3</div>
                    </div>
                    <div class="col-4">
                      <div class="text-muted small">Durum</div>
                      <div class="fw-bold small">Aktif</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-top-0">
                <div class="d-grid">
                  <button class="btn btn-outline-primary btn-sm">
                    <svg width="14" height="14" fill="currentColor" viewBox="0 0 16 16" class="me-1">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                    </svg>
                    Detayları Gör ve Teklif Ver
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Talep 3 -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card request-card shadow-sm h-100" onclick="window.location.href='firma-talep-detay.html?id=3'">
              <div class="card-body">
                <div class="d-flex align-items-start gap-3 mb-3">
                  <div class="request-icon bg-info bg-opacity-10 text-info">
                    🎨
                  </div>
                  <div class="flex-grow-1">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                      <span class="badge category-badge bg-info">Boyama</span>
                      <span class="badge status-badge bg-secondary" data-status="inceleniyor">İnceleniyor</span>
                    </div>
                    <h5 class="card-title mb-2">İç Mekan Boyama</h5>
                    <p class="text-muted small mb-3" style="font-size: 0.875rem; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                      3+1 daire için salon ve yatak odalarının boyanması. Astar ve son kat olmak üzere iki kat boya.
                    </p>
                  </div>
                </div>
                <div class="border-top pt-3">
                  <div class="row text-center">
                    <div class="col-4">
                      <div class="text-muted small">Talep Tarihi</div>
                      <div class="fw-bold small">8 Ocak</div>
                    </div>
                    <div class="col-4">
                      <div class="text-muted small">Teklif Sayısı</div>
                      <div class="fw-bold small text-primary">6</div>
                    </div>
                    <div class="col-4">
                      <div class="text-muted small">Durum</div>
                      <div class="fw-bold small">Aktif</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-top-0">
                <div class="d-grid">
                  <button class="btn btn-outline-primary btn-sm">
                    <svg width="14" height="14" fill="currentColor" viewBox="0 0 16 16" class="me-1">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                    </svg>
                    Detayları Gör ve Teklif Ver
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Talep 4 -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card request-card shadow-sm h-100" onclick="window.location.href='firma-talep-detay.html?id=4'">
              <div class="card-body">
                <div class="d-flex align-items-start gap-3 mb-3">
                  <div class="request-icon bg-success bg-opacity-10 text-success">
                    🌳
                  </div>
                  <div class="flex-grow-1">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                      <span class="badge category-badge bg-success">Bahçe Bakımı</span>
                      <span class="badge status-badge bg-warning text-dark" data-status="yeni">Yeni</span>
                    </div>
                    <h5 class="card-title mb-2">Bahçe Bakımı Talebi</h5>
                    <p class="text-muted small mb-3" style="font-size: 0.875rem; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                      100m² bahçe için aylık bakım ve peyzaj hizmeti. Çim bakımı, çiçek ekimi ve budama gerekiyor.
                    </p>
                  </div>
                </div>
                <div class="border-top pt-3">
                  <div class="row text-center">
                    <div class="col-4">
                      <div class="text-muted small">Talep Tarihi</div>
                      <div class="fw-bold small">10 Ocak</div>
                    </div>
                    <div class="col-4">
                      <div class="text-muted small">Teklif Sayısı</div>
                      <div class="fw-bold small text-primary">2</div>
                    </div>
                    <div class="col-4">
                      <div class="text-muted small">Durum</div>
                      <div class="fw-bold small">Aktif</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-top-0">
                <div class="d-grid">
                  <button class="btn btn-outline-primary btn-sm">
                    <svg width="14" height="14" fill="currentColor" viewBox="0 0 16 16" class="me-1">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                    </svg>
                    Detayları Gör ve Teklif Ver
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Boş Durum -->
        <div class="row mt-5" id="emptyState" style="display: none;">
          <div class="col-12 text-center py-5">
            <svg width="64" height="64" fill="#6c757d" viewBox="0 0 16 16" class="mb-3">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
              <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
            </svg>
            <h5 class="text-muted">Sonuç bulunamadı</h5>
            <p class="text-muted">Arama kriterlerinize uygun talep bulunamadı.</p>
          </div>
        </div>
      </div>
    </section>
@endsection