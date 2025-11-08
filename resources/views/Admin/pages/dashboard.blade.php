@extends('admin.layouts.app')

@section('content')
        <div class="row g-4 mb-4">
        <div class="col-12 col-md-6 col-lg-3">
          <div class="stat-card">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="text-muted small mb-1">Toplam Üye</div>
                <h3 class="mb-0">1,234</h3>
              </div>
              <div class="stat-icon bg-primary bg-opacity-10 text-primary">
                👥
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="stat-card">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="text-muted small mb-1">Aktif Talepler</div>
                <h3 class="mb-0">89</h3>
              </div>
              <div class="stat-icon bg-success bg-opacity-10 text-success">
                📋
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="stat-card">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="text-muted small mb-1">Toplam Teklif</div>
                <h3 class="mb-0">456</h3>
              </div>
              <div class="stat-icon bg-info bg-opacity-10 text-info">
                💼
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="stat-card">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="text-muted small mb-1">Blog Yazıları</div>
                <h3 class="mb-0">24</h3>
              </div>
              <div class="stat-icon bg-warning bg-opacity-10 text-warning">
                📝
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row g-4">
        <div class="col-12 col-lg-8">
          <div class="card shadow-sm">
            <div class="card-header bg-white">
              <h5 class="mb-0">Son Aktiviteler</h5>
            </div>
            <div class="card-body">
              <div class="list-group list-group-flush">
                <div class="list-group-item border-0 px-0">
                  <div class="d-flex justify-content-between">
                    <div>
                      <strong>Yeni talep</strong> - Ahmet Yılmaz tarafından oluşturuldu
                      <div class="small text-muted">2 saat önce</div>
                    </div>
                    <span class="badge bg-warning">Beklemede</span>
                  </div>
                </div>
                <div class="list-group-item border-0 px-0">
                  <div class="d-flex justify-content-between">
                    <div>
                      <strong>Yeni üye</strong> - Temizlik Şirketi A.Ş. kayıt oldu
                      <div class="small text-muted">5 saat önce</div>
                    </div>
                    <span class="badge bg-success">Onaylandı</span>
                  </div>
                </div>
                <div class="list-group-item border-0 px-0">
                  <div class="d-flex justify-content-between">
                    <div>
                      <strong>Blog yazısı</strong> - "Ev Temizliği İpuçları" yayınlandı
                      <div class="small text-muted">1 gün önce</div>
                    </div>
                    <span class="badge bg-info">Yayında</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4">
          <div class="card shadow-sm">
            <div class="card-header bg-white">
              <h5 class="mb-0">Hızlı İşlemler</h5>
            </div>
            <div class="card-body">
              <div class="d-grid gap-2">
                <a href="slider-add.html" class="btn btn-outline-primary">
                  <i class="bi bi-images me-2"></i>
                  Yeni Slider Ekle
                </a>
                <a href="category-add.html" class="btn btn-outline-success">
                  <i class="bi bi-grid-3x3 me-2"></i>
                  Yeni Kategori Ekle
                </a>
                <a href="blog-add.html" class="btn btn-outline-info">
                  <i class="bi bi-file-text me-2"></i>
                  Yeni Blog Yazısı Ekle
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
