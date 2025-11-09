@extends('admin.layouts.app')

@section('content')

<div class="admin-header d-flex justify-content-between align-items-center">
        <div>
          <button class="btn btn-outline-primary d-md-none" onclick="toggleSidebar()">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
          </button>
          <h4 class="mb-0 ms-2 ms-md-0">Kategori Düzenle</h4>
        </div>
        <a href="{{ route('admin.categories') }}" class="btn btn-outline-secondary">
          <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="me-1">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
          </svg>
          Geri Dön
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

      @if ($errors->any())
        <div class="alert alert-danger mt-3" role="alert">
          Lütfen form alanlarını kontrol edin.
        </div>
      @endif

      <div class="card shadow-sm">
        <div class="card-body">
          <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="col-md-8">
                <div class="mb-3">
                  <label class="form-label">Kategori Adı <span class="text-danger">*</span></label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $category->name) }}" required>
                  @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label">Açıklama <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5" required>{{ old('description', $category->description) }}</textarea>
                        @error('description')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        </div>
                <div class="mb-3">
                  <label class="form-label">Durum</label>
                  <select class="form-select @error('status') is-invalid @enderror" name="status" required>
                    <option value="1" {{ old('status', $category->status ? '1' : '0') === '1' ? 'selected' : '' }}>Aktif</option>
                    <option value="0" {{ old('status', $category->status ? '1' : '0') === '0' ? 'selected' : '' }}>Pasif</option>
                  </select>
                  @error('status')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="card-footer bg-white px-0">
              <div class="d-flex justify-content-between">
                <a href="{{ route('admin.categories') }}" class="btn btn-secondary">İptal</a>
                <button type="submit" class="btn btn-primary">Güncelle</button>
              </div>    
            </div>
          </form>
        </div>
      </div>

@endsection
 