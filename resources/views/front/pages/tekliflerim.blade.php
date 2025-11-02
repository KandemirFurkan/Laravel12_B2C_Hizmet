@extends('front.layouts.app')

@section('content')
   <!-- Profil Header -->

    <!-- Profil Header -->
    <section class="profile-header">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-3 text-center text-md-start mb-3 mb-md-0">
            <img src="https://placehold.co/120x120/667eea/ffffff?text=AY" alt="Profil Fotoğrafı" class="profile-avatar" id="profileAvatar">
            <div class="mt-3">

              <input type="file" id="avatarUpload" class="d-none" accept="image/*" onchange="previewAvatar(event)">
            </div>
          </div>
          <div class="col-12 col-md-9">
            <h1 class="h3 mb-2">Ahmet Yılmaz</h1>
            <p class="mb-2 opacity-75">ahmet.yilmaz@example.com</p>
            <div class="d-flex flex-wrap gap-2">
              <span class="info-badge">
                <svg width="14" height="14" fill="currentColor" viewBox="0 0 16 16" class="me-1" style="vertical-align: text-bottom;">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                </svg>
                Bireysel Üye
              </span>
              <span class="info-badge">
                <svg width="14" height="14" fill="currentColor" viewBox="0 0 16 16" class="me-1" style="vertical-align: text-bottom;">
                  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                </svg>
                Üyelik: Ocak 2023
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Form Listesi -->
    <section class="py-5">
      <div class="container">
        <div class="row mb-4">
          <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <h2 class="h4 mb-1">Form Taleplerim</h2>
                <p class="text-muted small mb-0">Doldurduğunuz formlar ve gelen teklifler</p>
              </div>
              <span class="badge bg-primary">4 Aktif Talep</span>
            </div>
          </div>
        </div>

        <div class="row g-4">
          <!-- Form 1: Temizlik -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card form-card shadow-sm h-100" >
              <div class="card-body">
                <div class="d-flex align-items-start gap-3 mb-3">
                  <div class="category-icon bg-primary bg-opacity-10 text-primary">
                    🧹
                  </div>
                  <div class="flex-grow-1">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                      <span class="badge category-badge bg-primary">Temizlik</span>
                      <span class="badge status-badge bg-warning text-dark">Teklif Bekliyor</span>
                    </div>
                    <h5 class="card-title mb-2">Ev Temizliği Talebi</h5>
                    <p class="form-preview mb-3">
                      3+1 daire için haftalık profesyonel temizlik hizmeti arıyorum. Malzemeler dahil olmalı.
                    </p>
                  </div>
                </div>
                <div class="border-top pt-3">
                  <div class="row text-center">
                    <div class="col-4">
                      <div class="offer-count">5</div>
                      <small class="text-muted">Teklif</small>
                    </div>
                    <div class="col-4">
                      <div class="text-muted fw-bold">15 Ocak</div>
                      <small class="text-muted">Talep Tarihi</small>
                    </div>
                    <div class="col-4">
                      <div class="text-muted fw-bold">₺950-₺1.500</div>
                      <small class="text-muted">Fiyat Aralığı</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-top-0">
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">
                    <i class="bi bi-file-text me-1"></i>
                    <a href="#">Detayları görüntüle →</a>
                  </small>
                </div>
              </div>
            </div>
          </div>




        </div>

        <!-- Boş Durum (gerekirse) -->
        <div class="row mt-5">
          <div class="col-12 text-center">
            <p class="text-muted">Başka form talebiniz var mı?</p>
            <a href="detail.html" class="btn btn-outline-primary">Yeni Talep Oluştur</a>
          </div>
        </div>
      </div>
    </section>

@endsection
