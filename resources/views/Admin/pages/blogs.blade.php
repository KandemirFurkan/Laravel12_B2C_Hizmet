@extends('admin.layouts.app')

@section('content')


    <!-- Main Content -->

      <div class="admin-header d-flex justify-content-between align-items-center">
        <div>
          <button class="btn btn-outline-primary d-md-none" >
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
          </button>
          <h4 class="mb-0 ms-2 ms-md-0">Blog Yönetimi</h4>
        </div>
        <a href="{{ route('admin.blog_add') }}" class="btn btn-primary">
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
                
                  <th>Yazar</th>
                  <th>Tarih</th>
                  <th>Durum</th>
                  <th>İşlemler</th>
                </tr>
              </thead>
              <tbody>



              @foreach($blogs as $blog)
                <tr>
                  <td><img src="{{ asset($blog->image) ? asset($blog->image) : asset('uploads/blogs/'.$blog->image) }}" alt="{{ $blog->title }}" style="width: 80px; height: 80px; object-fit: cover; border-radius: 4px;"></td>
                  <td><strong>{{ $blog->title }}</strong></td>
               
                  <td>Admin</td>
                  <td>{{ $blog->created_at->format('d.m.Y') }}</td>
                  <td><span class="badge bg-success">{{ $blog->status ? 'Yayında' : 'Pasif' }}</span></td>
                  <td>
                    <div class="table-actions" >
                      <a href="#" class="btn btn-sm btn-outline-primary btn-action">Düzenle</a>
                      <button class="btn btn-sm btn-outline-danger btn-action" >Sil</button>
                    </div>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>



@endsection
