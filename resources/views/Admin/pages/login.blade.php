<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Girişi - Hizmet Platformu</title>
    <link rel="stylesheet" href="{{ asset('assetAdmin/admin-styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assetAdmin/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assetAdmin/bootstrap.min.css') }}">

    <style>

    </style>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-5">
          <div class="card admin-login-card">
            <!-- Header -->
            <div class="admin-login-header">
              <div class="admin-icon">
                <svg width="40" height="40" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"/>
                  <path d="M13.5 2a.5.5 0 0 0-1 0v1a.5.5 0 0 0 1 0zm-1 11a.5.5 0 0 0 1 0v-1a.5.5 0 0 0-1 0zm-11-1a.5.5 0 0 0-1 0v1a.5.5 0 0 0 1 0zm-1-11a.5.5 0 0 0 1 0V1a.5.5 0 0 0-1 0zm11.036 3.464a.5.5 0 0 0 .707 0l1.414-1.414a.5.5 0 0 0 0-.707l-1.414-1.414a.5.5 0 0 0-.707 0l-1.414 1.414a.5.5 0 0 0 0 .707zM4.464 4.95l.707-.707L4.95 3.536a.5.5 0 0 0-.707-.707L3.343 3.586a.5.5 0 0 0 0 .707zm7.072 0a.5.5 0 0 0 .707 0l1.414-1.414a.5.5 0 0 0 0-.707l-1.414-1.414a.5.5 0 0 0-.707 0l-1.414 1.414a.5.5 0 0 0 0 .707zM4.95 12.536a.5.5 0 0 0-.707 0l-1.414 1.414a.5.5 0 0 0 0 .707l1.414 1.414a.5.5 0 0 0 .707 0l1.414-1.414a.5.5 0 0 0 0-.707zm7.072 0a.5.5 0 0 0 0 .707l1.414 1.414a.5.5 0 0 0 .707 0l1.414-1.414a.5.5 0 0 0 0-.707l-1.414-1.414a.5.5 0 0 0-.707 0z"/>
                </svg>
              </div>
              <h2 class="h4 mb-2">Admin Paneli</h2>
              <p class="mb-0 opacity-75">Hizmet Platformu Yönetim Sistemi</p>
            </div>

            <!-- Form -->
            <div class="card-body p-4 p-lg-5">
              <div class="alert alert-info alert-custom border-info mb-4" role="alert">
                <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="me-1">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                  <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                </svg>
                <strong>Güvenlik:</strong> Bu sayfa sadece yetkili personel için erişilebilirdir.
              </div>

              <form id="adminLoginForm" novalidate>
                <div class="mb-3">
                  <label for="adminUsername" class="form-label fw-bold">Kullanıcı Adı</label>
                  <div class="input-group">
                    <span class="input-group-text bg-light">
                      <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"/>
                      </svg>
                    </span>
                    <input type="text" class="form-control" id="adminUsername" placeholder="Kullanıcı adınızı girin" required autofocus>
                  </div>
                </div>

                <div class="mb-3">
                  <label for="adminPassword" class="form-label fw-bold">Şifre</label>
                  <div class="position-relative">
                    <input type="password" class="form-control" id="adminPassword" placeholder="Şifrenizi girin" required>
                    <button type="button" class="password-toggle" onclick="togglePassword()">
                      <svg width="18" height="18" fill="currentColor" viewBox="0 0 16 16" id="eyeIcon">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                      </svg>
                    </button>
                  </div>
                </div>

                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="rememberMe">
                  <label class="form-check-label" for="rememberMe">
                    Beni hatırla
                  </label>
                </div>

                <div class="d-grid mb-3">
                  <button type="submit" class="btn btn-primary btn-login">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 16 16" class="me-2">
                      <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0z"/>
                      <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
                    </svg>
                    Giriş Yap
                  </button>
                </div>

                <div class="text-center">
                  <a href="../login.html" class="text-muted text-decoration-none small">
                    <svg width="14" height="14" fill="currentColor" viewBox="0 0 16 16" class="me-1" style="vertical-align: text-bottom;">
                      <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                    </svg>
                    Kullanıcı girişi sayfasına dön
                  </a>
                </div>
              </form>
            </div>

            <!-- Footer -->
            <div class="card-footer bg-light text-center py-3">
              <small class="text-muted">
                &copy; <span id="yil"></span> Hizmet Platformu - Tüm hakları saklıdır.
              </small>
            </div>
          </div>

        </div>
      </div>
    </div>



  </body>
</html>

