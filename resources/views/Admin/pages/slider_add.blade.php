@extends('Admin.layouts.app')

@section('content')
       <div class="admin-header d-flex justify-content-between align-items-center">
        <div>
          <button class="btn btn-outline-primary d-md-none" onclick="toggleSidebar()">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
          </button>
          <h4 class="mb-0 ms-2 ms-md-0">Yeni Slider Ekle</h4>
        </div>
        <a href="{{ route('admin.sliders') }}" class="btn btn-outline-secondary">
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
        <form id="sliderForm" action="{{ route('admin.sliders.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label">Resim <span class="text-danger">*</span></label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" accept="image/png,image/jpeg,image/jpg,image/webp" required>
                @error('image')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="form-text">Slider için resim yükleyin (Önerilen: 1920x600px)</div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label">Başlık <span class="text-danger">*</span></label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Slider başlığı" required>
                  @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label">Açıklama <span class="text-danger">*</span></label>
                  <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="4" placeholder="Slider açıklaması" maxlength="255" required>{{ old('description') }}</textarea>
                  @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Sıra</label>
                    <input type="number" class="form-control @error('order') is-invalid @enderror" name="order" value="{{ old('order', 1) }}" min="1">
                    @error('order')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Durum</label>
                    <select class="form-select @error('status') is-invalid @enderror" name="status" required>
                      <option value="active" {{ old('status', 'active') === 'active' ? 'selected' : '' }}>Aktif</option>
                      <option value="inactive" {{ old('status', 'active') === 'inactive' ? 'selected' : '' }}>Pasif</option>
                    </select>
                    @error('status')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer bg-white">
            <div class="d-flex justify-content-between">
              <a href="{{ route('admin.sliders') }}" class="btn btn-secondary">İptal</a>
              <button type="submit" class="btn btn-primary">Kaydet</button>
            </div>
          </div>
        </form>
      </div>
@endsection
