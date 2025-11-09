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
          <h4 class="mb-0 ms-2 ms-md-0">Kategori Yönetimi</h4>
        </div>
        <a href="{{ route('admin.category_add') }}" class="btn btn-primary">
          <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="me-1">
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
          </svg>
          Yeni Kategori Ekle
        </a>
      </div>

      @if (session('success'))
        <div class="alert alert-success mt-3" role="alert">
          {{ session('success') }}
        </div>
      @endif

      @if (session('error'))
        <div class="alert alert-danger mt-3" role="alert">
          {{ session('error') }}
        </div>
      @endif

      <div class="card shadow-sm">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
               
                  <th>Kategori Adı</th>
                  <th>Açıklama</th>
                  <th>Durum</th>
                  <th>İşlemler</th>
                </tr>
              </thead>
              <tbody> 
@foreach($categories as $category)
                <tr>
                   <td><strong>{{ $category->name }}</strong></td>
                  <td>{{ $category->description }}</td>
                  <td>
                    @if ($category->status)
                      <span class="badge bg-success">Aktif</span>
                    @else
                      <span class="badge bg-secondary">Pasif</span>
                    @endif
                  </td>
                  <td>
                    <div class="table-actions">
                      <a href="{{ route('admin.category_edit', $category->id) }}" class="btn btn-sm btn-outline-primary btn-action">Düzenle</a>
                      <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Bu kategoriyi silmek istediğinize emin misiniz?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger btn-action">Sil</button>
                      </form>
                    </div>
                  </td>
                </tr>
@endforeach
              </tbody>
            </table>
          </div>

          @if ($categories->hasPages())
            <div class="pagination-container">
              <div class="pagination-summary">
                {{ $categories->firstItem() }} - {{ $categories->lastItem() }} / {{ $categories->total() }} kayıt
              </div>
              {{ $categories->onEachSide(1)->links('vendor.pagination.admin') }}
            </div>
          @endif
        </div>
      </div>



@endsection
