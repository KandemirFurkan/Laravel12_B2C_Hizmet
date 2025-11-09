@extends('admin.layouts.app')

@section('content')

<div class="admin-header d-flex justify-content-between align-items-center">
        <div>
          <button class="btn btn-outline-primary d-md-none" onclick="toggleSidebar()">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
          </button>
          <h4 class="mb-0 ms-2 ms-md-0">Yeni Blog Yazısı Ekle</h4>
        </div>
        <a href="{{ route('admin.blogs') }}" class="btn btn-outline-secondary">
          <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="me-1">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
          </svg>
          Geri Dön
        </a>
      </div>

      <div class="card shadow-sm">
        <div class="card-body">
          <form id="blogForm">
            <div class="row">
              <div class="col-md-4 mb-3">
                <label class="form-label">Kapak Resmi <span class="text-danger">*</span></label>
                <input type="file" class="form-control" accept="image/*" required>
                <div class="form-text">Blog yazısı için kapak resmi (Önerilen: 800x400px)</div>
              </div>
              <div class="col-md-8">
                <div class="mb-3">
                  <label class="form-label">Başlık <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Blog yazısı başlığı" required>
                </div>
                <div class="row">
                <div class="mb-3">
                  <label class="form-label">İçerik <span class="text-danger">*</span></label>
                  <textarea class="form-control" id="content" name="content" rows="12" placeholder="Blog yazısının tam içeriğini buraya yazın" required></textarea>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Durum</label>
                    <select class="form-select" id="blogStatus">
                      <option value="published">Yayında</option>
                      <option value="draft" selected>Taslak</option>
                    </select>
                  </div>
                </div>
             
              
              </div>
            </div>
          </form>
        </div>
        <div class="card-footer bg-white">
          <div class="d-flex justify-content-between">
            <a href="{{ route('admin.blogs') }}" class="btn btn-secondary">İptal</a>
            <div>
               <button type="button" class="btn btn-primary" >Kaydet</button>
            </div>
          </div>
        </div>
      </div>

@endsection