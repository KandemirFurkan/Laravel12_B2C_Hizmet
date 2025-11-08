@extends('admin.layouts.app')
@section('content')

    <!-- Main Content -->
    <div class="main-content">
      <div class="admin-header d-flex justify-content-between align-items-center">
        <div>
          <button class="btn btn-outline-primary d-md-none" onclick="toggleSidebar()">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
          </button>
          <h4 class="mb-0 ms-2 ms-md-0">Kategori Yönetimi</h4>
        </div>
        <a href="category-add.html" class="btn btn-primary">
          <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="me-1">
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
          </svg>
          Yeni Kategori Ekle
        </a>
      </div>

      <div class="card shadow-sm">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Resim</th>
                  <th>Kategori Adı</th>
                  <th>Açıklama</th>
                  <th>Durum</th>
                  <th>İşlemler</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><img src="../imgs/temizlik.jpg" alt="Temizlik" style="width: 80px; height: 80px; object-fit: cover; border-radius: 4px;"></td>
                  <td><strong>Temizlik</strong></td>
                  <td>Ev ve işyeri temizlik hizmetleri</td>
                  <td><span class="badge bg-success">Aktif</span></td>
                  <td>
                    <div class="table-actions">
                      <a href="category-edit.html?id=1" class="btn btn-sm btn-outline-primary btn-action">Düzenle</a>
                      <button class="btn btn-sm btn-outline-danger btn-action" onclick="deleteCategory(1)">Sil</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img src="../imgs/tadilat.jpg" alt="Tadilat" style="width: 80px; height: 80px; object-fit: cover; border-radius: 4px;"></td>
                  <td><strong>Tadilat</strong></td>
                  <td>Ev tadilat ve tamirat hizmetleri</td>
                  <td><span class="badge bg-success">Aktif</span></td>
                  <td>
                    <div class="table-actions">
                      <a href="category-edit.html?id=2" class="btn btn-sm btn-outline-primary btn-action">Düzenle</a>
                      <button class="btn btn-sm btn-outline-danger btn-action" onclick="deleteCategory(2)">Sil</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img src="../imgs/boya.jpg" alt="Boyama" style="width: 80px; height: 80px; object-fit: cover; border-radius: 4px;"></td>
                  <td><strong>Boyama</strong></td>
                  <td>İç ve dış mekan boyama hizmetleri</td>
                  <td><span class="badge bg-success">Aktif</span></td>
                  <td>
                    <div class="table-actions">
                      <a href="category-edit.html?id=3" class="btn btn-sm btn-outline-primary btn-action">Düzenle</a>
                      <button class="btn btn-sm btn-outline-danger btn-action" onclick="deleteCategory(3)">Sil</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img src="../imgs/elektirk.jpg" alt="Elektrik" style="width: 80px; height: 80px; object-fit: cover; border-radius: 4px;"></td>
                  <td><strong>Elektrik</strong></td>
                  <td>Elektrik tesisatı ve arıza hizmetleri</td>
                  <td><span class="badge bg-success">Aktif</span></td>
                  <td>
                    <div class="table-actions">
                      <a href="category-edit.html?id=4" class="btn btn-sm btn-outline-primary btn-action">Düzenle</a>
                      <button class="btn btn-sm btn-outline-danger btn-action" onclick="deleteCategory(4)">Sil</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img src="../imgs/bahce.jpg" alt="Bahçe" style="width: 80px; height: 80px; object-fit: cover; border-radius: 4px;"></td>
                  <td><strong>Bahçe Bakımı</strong></td>
                  <td>Bahçe düzenleme ve bakım hizmetleri</td>
                  <td><span class="badge bg-success">Aktif</span></td>
                  <td>
                    <div class="table-actions">
                      <a href="category-edit.html?id=5" class="btn btn-sm btn-outline-primary btn-action">Düzenle</a>
                      <button class="btn btn-sm btn-outline-danger btn-action" onclick="deleteCategory(5)">Sil</button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


@endsection
