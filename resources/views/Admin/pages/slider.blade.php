@extends('admin.layouts.app')

@section('content')



    <!-- Main Content -->

      <div class="admin-header d-flex justify-content-between align-items-center">
        <div>
          <button class="btn btn-outline-primary d-md-none" onclick="toggleSidebar()">
            <i class="bi bi-list"></i>
          </button>
          <h4 class="mb-0 ms-2 ms-md-0">Slider Yönetimi</h4>
        </div>
        <a href="slider-add.html" class="btn btn-primary">
          <i class="bi bi-plus-circle me-1"></i>
          Yeni Slider Ekle
        </a>
      </div>

      <div class="card shadow-sm">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Resim</th>
                  <th>Başlık</th>
                  <th>Açıklama</th>
                  <th>Durum</th>
                  <th>Sıra</th>
                  <th>İşlemler</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><img src="../imgs/slider1.jpg" alt="Slider 1" style="width: 120px; height: 60px; object-fit: cover; border-radius: 4px;"></td>
                  <td>Profesyonel Hizmetlere Hızlıca Ulaşın</td>
                  <td>İhtiyacınıza uygun uzmanları listeler, karşılaştırır ve temasa geçersiniz.</td>
                  <td><span class="badge bg-success">Aktif</span></td>
                  <td>1</td>
                  <td>
                    <div class="table-actions">
                      <a href="slider-edit.html?id=1" class="btn btn-sm btn-outline-primary btn-action">Düzenle</a>
                      <button class="btn btn-sm btn-outline-danger btn-action" onclick="deleteSlider(1)">Sil</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img src="https://placehold.co/120x60?text=Slider+2" alt="Slider 2" style="width: 120px; height: 60px; object-fit: cover; border-radius: 4px;"></td>
                  <td>Güvenilir Uzmanlar</td>
                  <td>Doğrulanmış değerlendirmeler ve referanslarla doğru tercih.</td>
                  <td><span class="badge bg-secondary">Pasif</span></td>
                  <td>2</td>
                  <td>
                    <div class="table-actions">
                      <a href="slider-edit.html?id=2" class="btn btn-sm btn-outline-primary btn-action">Düzenle</a>
                      <button class="btn btn-sm btn-outline-danger btn-action" onclick="deleteSlider(2)">Sil</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img src="https://placehold.co/120x60?text=Slider+3" alt="Slider 3" style="width: 120px; height: 60px; object-fit: cover; border-radius: 4px;"></td>
                  <td>Hızlı Teslimat</td>
                  <td>Takvim ve süreç yönetimi ile işleri kolaylaştırın.</td>
                  <td><span class="badge bg-secondary">Pasif</span></td>
                  <td>3</td>
                  <td>
                    <div class="table-actions">
                      <a href="slider-edit.html?id=3" class="btn btn-sm btn-outline-primary btn-action">Düzenle</a>
                      <button class="btn btn-sm btn-outline-danger btn-action" onclick="deleteSlider(3)">Sil</button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>


@endsection
