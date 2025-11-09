<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Girişi </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('assetAdmin/admin-styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assetAdmin/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assetAdmin/bootstrap.min.css') }}">

    <style>
      body {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem 0;
      }
      .admin-login-card {
        border-radius: 16px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
        border: none;
        overflow: hidden;
      }
      .admin-login-header {
        background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);
        color: white;
        padding: 2rem;
        text-align: center;
      }
      .admin-icon {
        width: 80px;
        height: 80px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
        font-size: 2rem;
      }
      .form-control:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.15);
      }
      .btn-login {
        background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);
        border: none;
        padding: 0.75rem 2rem;
        font-weight: 600;
        transition: all 0.3s ease;
      }
      .btn-login:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(13, 110, 253, 0.4);
      }
      .password-toggle {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        color: #6c757d;
        cursor: pointer;
        z-index: 10;
      }
      .password-toggle:hover {
        color: #0d6efd;
      }
      .alert-custom {
        border-radius: 8px;
        border-left: 4px solid;
      }
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


              <div id="loginAlert" class="alert alert-custom d-none mb-3"></div>

              <form id="adminLoginForm" novalidate action="{{ route('admin.authenticate') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="username" class="form-label fw-bold">Kullanıcı Adı</label>
                  <div class="input-group">

                    <input type="text" class="form-control" id="username" name="username" placeholder="Kullanıcı adınızı girin" required autofocus>
                  </div>
                </div>

                <div class="mb-3">
                  <label for="password" class="form-label fw-bold">Şifre</label>
                  <div class="position-relative">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Şifrenizi girin" required>

                  </div>
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

    <script>
    document.addEventListener('DOMContentLoaded', () => {
      const form = document.getElementById('adminLoginForm');
      const alertContainer = document.getElementById('loginAlert');
      const submitButton = form.querySelector('button[type="submit"]');

      const showAlert = (message, type = 'danger') => {
        alertContainer.textContent = message;
        alertContainer.classList.remove('d-none', 'alert-danger', 'alert-success');
        alertContainer.classList.add(`alert-${type}`);
      };

      const hideAlert = () => {
        alertContainer.classList.add('d-none');
        alertContainer.classList.remove('alert-danger', 'alert-success');
        alertContainer.textContent = '';
      };

      form.addEventListener('submit', async (event) => {
        event.preventDefault();
        hideAlert();

        const formData = new FormData(form);
        const username = (formData.get('username') || '').toString().trim();
        const password = (formData.get('password') || '').toString().trim();

        if (!username || !password) {
          showAlert('Kullanıcı adı ve şifre alanları boş bırakılamaz.');
          return;
        }

        formData.set('username', username);
        formData.set('password', password);

        submitButton.disabled = true;
        submitButton.classList.add('disabled');

        try {
          const response = await fetch(form.action, {
            method: 'POST',
            headers: {
              'X-Requested-With': 'XMLHttpRequest',
              'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value,
              'Accept': 'application/json',
            },
            body: formData,
          });

          const data = await response.json();

          if (response.ok) {
            showAlert(data.message ?? 'Giriş başarılı.', 'success');
            setTimeout(() => {
              window.location.href = data.redirect ?? '{{ route('admin.dashboard') }}';
            }, 500);
            return;
          }

          const errors = data.errors ?? {};
          const errorMessages = Object.values(errors).flat();
          const message = errorMessages.length > 0 ? errorMessages[0] : (data.message ?? 'Giriş sırasında bir hata oluştu.');
          showAlert(message);
        } catch (error) {
          showAlert('Beklenmeyen bir hata oluştu. Lütfen daha sonra tekrar deneyin.');
        } finally {
          submitButton.disabled = false;
          submitButton.classList.remove('disabled');
        }
      });
    });
  </script>
  </body>
</html>

