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
          <h4 class="mb-0 ms-2 ms-md-0">Bireysel Üyeler</h4>
        </div>
        <div class="input-group mt-2 mt-md-0" style="width: 300px;">
          <input type="text" class="form-control form-control-sm" placeholder="Üye ara...">
          <button class="btn btn-outline-secondary btn-sm" type="button">
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg>
          </button>
        </div>
      </div>

      <div class="card shadow-sm">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Ad Soyad</th>
                  <th>E-posta</th>
                  <th>Telefon</th>
                  <th>Kayıt Tarihi</th>
                  <th>Toplam Talep</th>
                  <th>Durum</th>
                  <th>İşlemler</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>Ahmet Yılmaz</strong></td>
                  <td>ahmet.yilmaz@example.com</td>
                  <td>0532 123 45 67</td>
                  <td>15 Ocak 2023</td>
                  <td><span class="badge bg-info">8</span></td>
                  <td><span class="badge bg-success">Aktif</span></td>
                  <td>
                    <div class="table-actions">
                      <a href="individual-user-edit.html?id=1" class="btn btn-sm btn-outline-primary btn-action">Düzenle</a>
                      <button class="btn btn-sm btn-outline-danger btn-action" onclick="deleteUser(1)">Sil</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><strong>Ayşe Demir</strong></td>
                  <td>ayse.demir@example.com</td>
                  <td>0533 234 56 78</td>
                  <td>20 Şubat 2023</td>
                  <td><span class="badge bg-info">5</span></td>
                  <td><span class="badge bg-success">Aktif</span></td>
                  <td>
                    <div class="table-actions">
                      <a href="individual-user-edit.html?id=2" class="btn btn-sm btn-outline-primary btn-action">Düzenle</a>
                      <button class="btn btn-sm btn-outline-danger btn-action" onclick="deleteUser(2)">Sil</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><strong>Mehmet Kaya</strong></td>
                  <td>mehmet.kaya@example.com</td>
                  <td>0534 345 67 89</td>
                  <td>5 Mart 2023</td>
                  <td><span class="badge bg-info">12</span></td>
                  <td><span class="badge bg-success">Aktif</span></td>
                  <td>
                    <div class="table-actions">
                      <a href="individual-user-edit.html?id=3" class="btn btn-sm btn-outline-primary btn-action">Düzenle</a>
                      <button class="btn btn-sm btn-outline-danger btn-action" onclick="deleteUser(3)">Sil</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><strong>Zeynep Öz</strong></td>
                  <td>zeynep.oz@example.com</td>
                  <td>0535 456 78 90</td>
                  <td>10 Nisan 2023</td>
                  <td><span class="badge bg-info">3</span></td>
                  <td><span class="badge bg-warning">Beklemede</span></td>
                  <td>
                    <div class="table-actions">
                      <a href="individual-user-edit.html?id=4" class="btn btn-sm btn-outline-primary btn-action">Düzenle</a>
                      <button class="btn btn-sm btn-outline-danger btn-action" onclick="deleteUser(4)">Sil</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><strong>Fatma Şahin</strong></td>
                  <td>fatma.sahin@example.com</td>
                  <td>0536 567 89 01</td>
                  <td>25 Mayıs 2023</td>
                  <td><span class="badge bg-info">7</span></td>
                  <td><span class="badge bg-success">Aktif</span></td>
                  <td>
                    <div class="table-actions">
                      <a href="individual-user-edit.html?id=5" class="btn btn-sm btn-outline-primary btn-action">Düzenle</a>
                      <button class="btn btn-sm btn-outline-danger btn-action" onclick="deleteUser(5)">Sil</button>
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
