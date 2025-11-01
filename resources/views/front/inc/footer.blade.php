   <!-- Footer -->
    <footer class="pt-5 border-top">
      <div class="container">
        <div class="row g-4 g-lg-5">
          <div class="col-12 col-lg-4">
            <div class="d-flex align-items-center mb-3">
              <img style="width:40px" src="{{ asset($siteSettings->logo) }}" alt="Logo" class="me-2 rounded-circle">
              <span class="fw-bold">{{ $siteSettings->name }}</span>
            </div>
            <p class="text-muted small mb-3">{{ $siteSettings->content }}</p>
<div class="d-flex gap-3">
  @if (!empty($siteSettings->instagram))
  <a class="text-muted footer-social" href="{{ $siteSettings->instagram }}" aria-label="Instagram" target="_blank" rel="noopener">
    <i class="bi bi-instagram fs-5"></i>
  </a>
@endif
  @if (!empty($siteSettings->linkedin))
  <a class="text-muted footer-social" href="{{ $siteSettings->linkedin }}" aria-label="LinkedIn" target="_blank" rel="noopener">
    <i class="bi bi-linkedin fs-5"></i>
  </a>
@endif
  @if (!empty($siteSettings->twitter))
  <a class="text-muted footer-social" href="{{ $siteSettings->twitter }}" aria-label="Twitter" target="_blank" rel="noopener">
    <i class="bi bi-twitter fs-5"></i>
  </a>
@endif
  @if (!empty($siteSettings->facebook))
  <a class="text-muted footer-social" href="{{ $siteSettings->facebook }}" aria-label="Facebook" target="_blank" rel="noopener">
    <i class="bi bi-facebook fs-5"></i>
  </a>
@endif



  </a>
</div>
          </div>

          <div class="col-12 col-lg-3">
            <h6 class="fw-bold mb-3">İletişim</h6>
            <ul class="list-unstyled small text-muted mb-3">
              <li class="mb-1">Adres &nbsp;: &nbsp;{{ $siteSettings->address }}</li>
              <li class="mb-1">Telefon &nbsp;: &nbsp;{{ $siteSettings->phone }}</li>
              <li>E-posta &nbsp;: &nbsp;{{ $siteSettings->email }}</li>
            </ul>

          </div>
        </div>
        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between mt-4 pt-3 border-top">
          <div class="mb-2 mb-lg-0 small">&copy; <span id="yil"></span> {{ $siteSettings->name }} Hizmet Platformu</div>
          <div class="small text-muted">Tüm hakları saklıdır.</div>
        </div>
      </div>
    </footer>
