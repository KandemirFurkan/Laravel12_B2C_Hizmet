@extends('Admin.layouts.app')


@section('content')
        <div class="admin-header d-flex justify-content-between align-items-center">
        <div>
          <button class="btn btn-outline-primary d-md-none" >
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
          </button>
          <h4 class="mb-0 ms-2 ms-md-0">Slider Düzenle</h4>
        </div>
        <a href="{{ route('admin.sliders') }}" class="btn btn-outline-secondary">
          <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="me-1">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
          </svg>
          Geri Dön
        </a>
      </div>

      <div class="card shadow-sm">
        <div class="card-body">
          <form id="sliderForm" action="{{ route('admin.sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label">Mevcut Resim</label>
                <div class="mb-3">
                  @php
                    $previewImage = $slider->thumbnail ? asset($slider->thumbnail) : ($slider->image ? asset($slider->image) : 'https://placehold.co/200x200?text=Slider');
                  @endphp
                  <img src="{{ $previewImage }}" alt="Slider" class="img-fluid rounded mb-2" style="width: 200px; height: 200px; object-fit: cover;">
                </div>
                <label class="form-label">Yeni Resim Yükle</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" accept="image/*">
                @error('image')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="form-text">Slider için resim yükleyin (Önerilen: 1920x600px)</div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label">Başlık <span class="text-danger">*</span></label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $slider->title) }}" required>
                  @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label">Açıklama <span class="text-danger">*</span></label>
                  <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="4" maxlength="255" required>{{ old('description', $slider->subtitle) }}</textarea>
                  @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="row">
              
                
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Sıra</label>
                    <input type="number" class="form-control @error('order') is-invalid @enderror" name="order" value="{{ old('order', $slider->display_order) }}" min="1">
                    @error('order')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Durum</label>
                    <select class="form-select @error('status') is-invalid @enderror" name="status" required>
                      <option value="active" {{ old('status', $slider->status ? 'active' : 'inactive') === 'active' ? 'selected' : '' }}>Aktif</option>
                      <option value="inactive" {{ old('status', $slider->status ? 'active' : 'inactive') === 'inactive' ? 'selected' : '' }}>Pasif</option>
                    </select>
                    @error('status')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer bg-white px-0">
              <div class="d-flex justify-content-between">
                <a href="{{ route('admin.sliders') }}" class="btn btn-secondary">İptal</a>
                <button type="submit" class="btn btn-primary">Güncelle</button>
              </div>
            </div>
          </form>
        </div>
      </div>
@endsection

