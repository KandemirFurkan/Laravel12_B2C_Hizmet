@extends('admin.layouts.app')

@section('content')


    <!-- Main Content -->

      <div class="admin-header d-flex justify-content-between align-items-center">
        <div>
          <button class="btn btn-outline-primary d-md-none" onclick="toggleSidebar()">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
          </button>
          <h4 class="mb-0 ms-2 ms-md-0">Blog Yönetimi</h4>
        </div>
        <a href="blog-add.html" class="btn btn-primary">
          <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="me-1">
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
          </svg>
          Yeni Blog Yazısı Ekle
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
                  <th>Kategori</th>
                  <th>Yazar</th>
                  <th>Tarih</th>
                  <th>Durum</th>
                  <th>İşlemler</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><img src="../imgs/temizlik.jpg" alt="Blog 1" style="width: 80px; height: 80px; object-fit: cover; border-radius: 4px;"></td>
                  <td><strong>Ev Temizliğinde Pratik İpuçları</strong></td>
                  <td><span class="badge bg-primary">Temizlik</span></td>
                  <td>Admin</td>
                  <td>15 Ocak 2024</td>
                  <td><span class="badge bg-success">Yayında</span></td>
                  <td>
                    <div class="table-actions">
                      <a href="blog-edit.html?id=1" class="btn btn-sm btn-outline-primary btn-action">Düzenle</a>
                      <button class="btn btn-sm btn-outline-danger btn-action" onclick="deleteBlog(1)">Sil</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img src="../imgs/boya.jpg" alt="Blog 2" style="width: 80px; height: 80px; object-fit: cover; border-radius: 4px;"></td>
                  <td><strong>Boyada Renk Seçimi</strong></td>
                  <td><span class="badge bg-info">Boyama</span></td>
                  <td>Admin</td>
                  <td>12 Ocak 2024</td>
                  <td><span class="badge bg-success">Yayında</span></td>
                  <td>
                    <div class="table-actions">
                      <a href="blog-edit.html?id=2" class="btn btn-sm btn-outline-primary btn-action">Düzenle</a>
                      <button class="btn btn-sm btn-outline-danger btn-action" onclick="deleteBlog(2)">Sil</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img src="../imgs/elektirk.jpg" alt="Blog 3" style="width: 80px; height: 80px; object-fit: cover; border-radius: 4px;"></td>
                  <td><strong>Elektrik Arızalarında Güvenlik</strong></td>
                  <td><span class="badge bg-warning">Elektrik</span></td>
                  <td>Admin</td>
                  <td>10 Ocak 2024</td>
                  <td><span class="badge bg-secondary">Taslak</span></td>
                  <td>
                    <div class="table-actions">
                      <a href="blog-edit.html?id=3" class="btn btn-sm btn-outline-primary btn-action">Düzenle</a>
                      <button class="btn btn-sm btn-outline-danger btn-action" onclick="deleteBlog(3)">Sil</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img src="../imgs/nakliyet.jpg" alt="Blog 4" style="width: 80px; height: 80px; object-fit: cover; border-radius: 4px;"></td>
                  <td><strong>Taşınma İpuçları</strong></td>
                  <td><span class="badge bg-success">Genel</span></td>
                  <td>Admin</td>
                  <td>8 Ocak 2024</td>
                  <td><span class="badge bg-success">Yayında</span></td>
                  <td>
                    <div class="table-actions">
                      <a href="blog-edit.html?id=4" class="btn btn-sm btn-outline-primary btn-action">Düzenle</a>
                      <button class="btn btn-sm btn-outline-danger btn-action" onclick="deleteBlog(4)">Sil</button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>



@endsection
