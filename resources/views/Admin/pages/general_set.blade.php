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
          <h4 class="mb-0 ms-2 ms-md-0">Site Ayarları</h4>
        </div>
      </div>

      <div class="card shadow-sm mb-4">
        <div class="card-header bg-white">
          <h5 class="mb-0">Genel Site Bilgileri</h5>
        </div>
        <div class="card-body">
          <form id="siteSettingsForm">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label">Site Adı <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="siteName" value="Hizmet Platformu" required>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Site Başlığı (Title) <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="siteTitle" value="Hizmet Platformu - Profesyonel Hizmetler" required>
                <div class="form-text">SEO için önemli</div>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label">Site Açıklaması (Description) <span class="text-danger">*</span></label>
              <textarea class="form-control" id="siteDescription" rows="3" required>Uygun uzmanlarla hızlıca eşleşin. Temizlikten tadilata, onlarca kategoride profesyonel hizmet.</textarea>
              <div class="form-text">SEO için meta description (maksimum 160 karakter)</div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label">Site Anahtar Kelimeleri (Keywords)</label>
                <input type="text" class="form-control" id="siteKeywords" placeholder="hizmet, temizlik, tadilat, uzman" value="hizmet, temizlik, tadilat, uzman, profesyonel">
                <div class="form-text">Virgülle ayırın</div>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Site URL</label>
                <input type="url" class="form-control" id="siteUrl" value="https://www.hizmet.com" required>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label">Logo</label>
              <div class="mb-2">
                <img src="https://placehold.co/150x60?text=Logo" alt="Site Logo" class="img-fluid" style="max-height: 60px;">
              </div>
              <input type="file" class="form-control" accept="image/*">
              <div class="form-text">Site logosunu yükleyin (Önerilen: 300x120px)</div>
            </div>
            <div class="mb-3">
              <label class="form-label">Favicon</label>
              <div class="mb-2">
                <img src="https://placehold.co/32x32?text=F" alt="Favicon" class="img-fluid" style="max-height: 32px;">
              </div>
              <input type="file" class="form-control" accept="image/*">
              <div class="form-text">Favicon yükleyin (Önerilen: 32x32px veya 64x64px)</div>
            </div>
          </form>
        </div>
      </div>

      <div class="card shadow-sm mb-4">
        <div class="card-header bg-white">
          <h5 class="mb-0">İletişim Bilgileri</h5>
        </div>
        <div class="card-body">
          <form id="contactSettingsForm">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label">E-posta <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="siteEmail" value="info@hizmet.com" required>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Telefon <span class="text-danger">*</span></label>
                <input type="tel" class="form-control" id="sitePhone" value="0 (212) 000 00 00" required>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label">Adres <span class="text-danger">*</span></label>
              <textarea class="form-control" id="siteAddress" rows="2" required>İstanbul, Türkiye</textarea>
            </div>
            <div class="row">
              <div class="col-md-4 mb-3">
                <label class="form-label">Google Maps Embed URL</label>
                <input type="url" class="form-control" id="googleMapsUrl" placeholder="https://www.google.com/maps/embed?pb=...">
                <div class="form-text">Google Maps embed kodunu buraya yapıştırın</div>
              </div>
              <div class="col-md-4 mb-3">
                <label class="form-label">Enlem (Latitude)</label>
                <input type="text" class="form-control" id="siteLatitude" placeholder="41.0082">
              </div>
              <div class="col-md-4 mb-3">
                <label class="form-label">Boylam (Longitude)</label>
                <input type="text" class="form-control" id="siteLongitude" placeholder="28.9784">
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="card shadow-sm mb-4">
        <div class="card-header bg-white">
          <h5 class="mb-0">Sosyal Medya</h5>
        </div>
        <div class="card-body">
          <form id="socialSettingsForm">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label">Facebook</label>
                <input type="url" class="form-control" id="facebookUrl" placeholder="https://www.facebook.com/...">
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Twitter</label>
                <input type="url" class="form-control" id="twitterUrl" placeholder="https://www.twitter.com/...">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label">Instagram</label>
                <input type="url" class="form-control" id="instagramUrl" placeholder="https://www.instagram.com/...">
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">LinkedIn</label>
                <input type="url" class="form-control" id="linkedinUrl" placeholder="https://www.linkedin.com/...">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label">YouTube</label>
                <input type="url" class="form-control" id="youtubeUrl" placeholder="https://www.youtube.com/...">
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">WhatsApp</label>
                <input type="tel" class="form-control" id="whatsappNumber" placeholder="905551234567">
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="card shadow-sm mb-4">
        <div class="card-header bg-white">
          <h5 class="mb-0">E-posta Ayarları</h5>
        </div>
        <div class="card-body">
          <form id="emailSettingsForm">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label">SMTP Host <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="smtpHost" value="smtp.gmail.com" required>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">SMTP Port <span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="smtpPort" value="587" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label">SMTP Kullanıcı Adı <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="smtpUsername" value="noreply@hizmet.com" required>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">SMTP Şifre <span class="text-danger">*</span></label>
                <input type="password" class="form-control" id="smtpPassword" required>
                <div class="form-text">E-posta gönderimi için şifre</div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label">Gönderen E-posta</label>
                <input type="email" class="form-control" id="senderEmail" value="noreply@hizmet.com">
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Gönderen Adı</label>
                <input type="text" class="form-control" id="senderName" value="Hizmet Platformu">
              </div>
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="smtpSSL" checked>
                <label class="form-check-label" for="smtpSSL">
                  SSL/TLS Kullan
                </label>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="card shadow-sm mb-4">
        <div class="card-header bg-white">
          <h5 class="mb-0">Diğer Ayarlar</h5>
        </div>
        <div class="card-body">
          <form id="otherSettingsForm">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label">Dil</label>
                <select class="form-select" id="siteLanguage">
                  <option value="tr" selected>Türkçe</option>
                  <option value="en">English</option>
                </select>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Zaman Dilimi</label>
                <select class="form-select" id="timezone">
                  <option value="Europe/Istanbul" selected>Europe/Istanbul (GMT+3)</option>
                  <option value="UTC">UTC</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label">Sayfa Başına Kayıt Sayısı</label>
                <input type="number" class="form-control" id="recordsPerPage" value="10" min="5" max="100">
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Bakım Modu</label>
                <select class="form-select" id="maintenanceMode">
                  <option value="0" selected>Kapalı</option>
                  <option value="1">Açık</option>
                </select>
              </div>
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="allowRegistration" checked>
                <label class="form-check-label" for="allowRegistration">
                  Yeni kayıtlara izin ver
                </label>
              </div>
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="emailVerification" checked>
                <label class="form-check-label" for="emailVerification">
                  E-posta doğrulama zorunlu
                </label>
              </div>
            </div>
          </form>
        </div>
        <div class="card-footer bg-white">
          <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-primary" onclick="saveAllSettings()">
              <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="me-1">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.99-4.01z"/>
              </svg>
              Tüm Ayarları Kaydet
            </button>
          </div>
        </div>
      </div>
    </div>


@endsection
