@extends('admin.layouts.app')

@section('content')


    <!-- Main Content -->

      <div class="admin-header d-flex justify-content-between align-items-center flex-wrap">
        <div>
          <button class="btn btn-outline-primary d-md-none" onclick="toggleSidebar()">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
          </button>
          <h4 class="mb-0 ms-2 ms-md-0">Talep Formları</h4>
        </div>
        <div class="btn-group btn-group-sm mt-2 mt-md-0">
          <button class="btn btn-outline-primary active" onclick="filterRequests('all')">Tümü</button>
          <button class="btn btn-outline-primary" onclick="filterRequests('pending')">Beklemede</button>
          <button class="btn btn-outline-primary" onclick="filterRequests('approved')">Onaylandı</button>
          <button class="btn btn-outline-primary" onclick="filterRequests('rejected')">Reddedildi</button>
        </div>
      </div>

      <div class="card shadow-sm">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Talep Eden</th>
                  <th>Kategori</th>
                  <th>Açıklama</th>
                  <th>Tarih</th>
                  <th>Teklif Sayısı</th>
                  <th>Durum</th>
                  <th>İşlemler</th>
                </tr>
              </thead>
              <tbody id="requestsTable">
                <tr>
                  <td><strong>Ahmet Yılmaz</strong></td>
                  <td><span class="badge bg-primary">Temizlik</span></td>
                  <td>3+1 daire için haftalık temizlik hizmeti arıyorum...</td>
                  <td>15 Aralık 2025</td>
                  <td><span class="badge bg-info">5</span></td>
                  <td><span class="badge bg-warning">Beklemede</span></td>
                  <td>
                    <div class="table-actions">
                      <button class="btn btn-sm btn-outline-success btn-action" onclick="approveRequest(1)">Onayla</button>
                      <a href="request-edit.html?id=1" class="btn btn-sm btn-outline-primary btn-action">Düzenle</a>
                      <button class="btn btn-sm btn-outline-danger btn-action" onclick="deleteRequest(1)">Sil</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><strong>Ayşe Demir</strong></td>
                  <td><span class="badge bg-danger">Tadilat</span></td>
                  <td>Banyo küveti ve duşakabin değişimi yapılması gerekiyor...</td>
                  <td>12 Aralık 2025</td>
                  <td><span class="badge bg-info">3</span></td>
                  <td><span class="badge bg-warning">Beklemede</span></td>
                  <td>
                    <div class="table-actions">
                      <button class="btn btn-sm btn-outline-success btn-action" onclick="approveRequest(2)">Onayla</button>
                      <a href="request-edit.html?id=2" class="btn btn-sm btn-outline-primary btn-action">Düzenle</a>
                      <button class="btn btn-sm btn-outline-danger btn-action" onclick="deleteRequest(2)">Sil</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><strong>Mehmet Kaya</strong></td>
                  <td><span class="badge bg-info">Boyama</span></td>
                  <td>3+1 daire için salon ve yatak odaları boyama işlemi...</td>
                  <td>8 Temmuz 2025</td>
                  <td><span class="badge bg-info">6</span></td>
                  <td><span class="badge bg-success">Onaylandı</span></td>
                  <td>
                    <div class="table-actions">
					 <button class="btn btn-sm  btn-action" onclick="approveRequest(4)"></button>
                      <a href="request-edit.html?id=3" class="btn btn-sm btn-outline-primary btn-action">Düzenle</a>
                      <button class="btn btn-sm btn-outline-danger btn-action" onclick="deleteRequest(3)">Sil</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><strong>Zeynep Öz</strong></td>
                  <td><span class="badge bg-warning">Elektrik</span></td>
                  <td>Elektrik panosunda arıza var, acil müdahale gerekiyor...</td>
                  <td>20 Ekim 2025</td>
                  <td><span class="badge bg-info">2</span></td>
                  <td><span class="badge bg-success">Onaylandı</span></td>
                  <td>
                    <div class="table-actions">
                      <button class="btn btn-sm  btn-action" style="display:block" onclick="approveRequest(4)"></button>
                      <a href="request-edit.html?id=4" class="btn btn-sm btn-outline-primary btn-action">Düzenle</a>
                      <button class="btn btn-sm btn-outline-danger btn-action" onclick="deleteRequest(4)">Sil</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><strong>Fatma Şahin</strong></td>
                  <td><span class="badge bg-success">Bahçe Bakımı</span></td>
                  <td>Aylık bahçe bakımı ve çim biçme hizmeti arıyorum...</td>
                  <td>18 Kasım 2025</td>
                  <td><span class="badge bg-info">4</span></td>
                  <td><span class="badge bg-danger">Reddedildi</span></td>
                  <td>
                    <div class="table-actions">
					 <button class="btn btn-sm btn-outline-success btn-action" onclick="approveRequest(4)">Onayla</button>
                      <a href="request-edit.html?id=5" class="btn btn-sm btn-outline-primary btn-action">Düzenle</a>
                      <button class="btn btn-sm btn-outline-danger btn-action" onclick="deleteRequest(5)">Sil</button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer bg-white">
          <nav aria-label="Page navigation">
            <ul class="pagination pagination-sm mb-0 justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Önceki</a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Sonraki</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>


@endsection
