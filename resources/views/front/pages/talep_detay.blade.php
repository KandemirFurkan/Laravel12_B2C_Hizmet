@extends('front.layouts.app')
@section('content')

 
 
    <style>
      .detail-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
        border-radius: 8px;
        padding: 1.5rem;
        margin-bottom: 1rem;
      }
      .info-row {
        padding: 0.75rem 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
      }
      .info-row:last-child {
        border-bottom: none;
      }
      .info-label {
        font-weight: 600;
        color: #6c757d;
        font-size: 0.875rem;
      }
      .info-value {
        color: #212529;
        font-size: 1rem;
      }
      .offer-form-card {
        position: sticky;
        top: 100px;
      }
      .price-input-group {
        position: relative;
      }
      .price-input-group::before {
        content: "₺";
        position: absolute;
        left: 12px;
        top: 50%;
        transform: translateY(-50%);
        color: #6c757d;
        font-weight: 600;
        z-index: 10;
      }
      .price-input-group input {
        padding-left: 30px;
      }
      .back-button {
        text-decoration: none;
        color: #0d6efd;
      }
      .back-button:hover {
        color: #0b5ed7;
      }
    </style>
 
 
    <!-- Sayfa Başlığı -->
    <section class="bg-light py-4 border-bottom">
      <div class="container">
        <a href="{{route('talepler')}}" class="back-button mb-2 d-inline-flex align-items-center">
          <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="me-1">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
          </svg>
          Taleplere Dön
        </a>
        <h1 class="h3 mb-0">Talep Detayları</h1>
      </div>
    </section>

    <!-- Ana İçerik -->
    <section class="py-5">
      <div class="container">
        <div class="row g-4">
          <!-- Talep Detayları -->
          <div class="col-12 col-lg-7">
            <div class="card shadow-sm mb-4">
              <div class="card-header bg-white">
                <div class="d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">Talep Bilgileri</h5>
                  @if($mevcutTeklif)
                    <span class="badge bg-success text-white" id="requestStatus">Teklif Verildi</span>
                  @else
                    <span class="badge bg-warning text-dark" id="requestStatus">Teklif Bekliyor</span>
                  @endif
                </div>
              </div>
              <div class="card-body">
                <div class="detail-section" id="">
                  <!-- İçerik JavaScript ile doldurulacak -->

                  <div class="info-row">
            <div class="info-label">Hizmet</div>
            <div class="info-value">{{$talep->hizmet?->title ?? $talep->sector}}</div>
          </div>

          <div class="info-row">
            <div class="info-label">Şehir</div>
            <div class="info-value">{{$talep->location}}</div>
          </div>
          <div class="info-row">
            <div class="info-label">Talep Tarihi</div>
            <div class="info-value">{{$talep->created_at->format('d M y')}}</div>
          </div>

          <div class="info-row">
            <div class="info-label">Talep Eden</div>
            <div class="info-value">{{$talep->name}}</div>
          </div>

          <div class="info-row">
            <div class="info-label">Açıklama</div>
            <div class="info-value">{{$talep->message}}</div>
          </div>

 
                </div>
              </div>
            </div>

            <!-- Diğer Teklifler -->
            <div class="card shadow-sm">
              <div class="card-header bg-white">
                <h5 class="mb-0">Rekabet Durumu</h5>
              </div>
              <div class="card-body">
                <div class="alert alert-info mb-3">
                  <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="me-1">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                  </svg>
                  Bu talep için <strong id="offerCount">{{ $teklifSayisi }}</strong> firma teklif vermiş durumda.
                </div>
              
              </div>
            </div>
          </div>

          <!-- Teklif Formu -->
          <div class="col-12 col-lg-5">
            <div class="card shadow-sm offer-form-card">
              <div class="card-header bg-white">
                <h5 class="mb-0">Teklif Ver</h5>
              </div>
              <div class="card-body">
                <form id="offerForm" novalidate>
                  <input type="hidden" name="T" id="encryptedTalepId" value="{{ $encryptedTalepId }}">
                  <input type="hidden" name="U" id="encryptedUserId" value="{{ $encryptedUserId }}">
                  
                  <div class="alert alert-info">
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="me-1">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                      <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                    </svg>
                    <strong>İpucu:</strong> Detaylı ve şeffaf bir teklif, müşteri tercihini artırır.
                  </div>
                  
                  <div id="formMessage" class="alert d-none mb-3" role="alert"></div>

                  <div class="mb-3">
                    <label for="offerPrice" class="form-label">Teklif Tutarı <span class="text-danger">*</span></label>
                    <div class="price-input-group">
                      <input type="number" class="form-control" id="offerPrice" placeholder="0" min="0" step="1" value="{{ $mevcutTeklif?->price ?? '' }}" required>
                    </div>
                    <div class="form-text">Teklif ettiğiniz toplam tutar</div>
                  </div>

    

                  <div class="mb-3">
                    <label for="offerDescription" class="form-label">Teklif Açıklaması <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="offerDescription" rows="6" placeholder="Teklifinizi detaylandırın. Sunacağınız hizmet kapsamı, kullanılacak malzemeler, çalışma süresi, garantiler vb. bilgileri ekleyin." required>{{ $mevcutTeklif?->description ?? '' }}</textarea>
                    <div class="form-text">Müşteriye gösterilecek detaylı açıklama</div>
                  </div>
<!--
                  <div class="mb-3">
                    <label class="form-label">Teklif Kapsamı</label>
                    <div class="row g-2">
                      <div class="col-12 col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="includeMaterials" checked>
                          <label class="form-check-label" for="includeMaterials">
                            Malzemeler Dahil
                          </label>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="includeTransport">
                          <label class="form-check-label" for="includeTransport">
                            Ulaşım Dahil
                          </label>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="includeGuarantee" checked>
                          <label class="form-check-label" for="includeGuarantee">
                            Garanti Veriliyor
                          </label>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="includeInsurance">
                          <label class="form-check-label" for="includeInsurance">
                            Sigortalı Hizmet
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
    -->
           
                  <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg" id="submitButton">
                      <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="me-2">
                        <path d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                        <path d="M1.5 15a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 0-1H2V1.5a.5.5 0 0 0-1 0V15z"/>
                      </svg>
                      <span id="buttonText">{{ $mevcutTeklif ? 'Teklifi Güncelle' : 'Teklifi Gönder' }}</span>
                    </button>
                
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

 
 

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('offerForm');
    const formMessage = document.getElementById('formMessage');
    
    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        // Form validasyonu
        if (!form.checkValidity()) {
            form.classList.add('was-validated');
            return;
        }
        
        // Submit butonunu devre dışı bırak
        const submitBtn = form.querySelector('button[type="submit"]');
        const buttonText = document.getElementById('buttonText');
        const originalBtnText = buttonText.textContent;
        const isUpdate = originalBtnText.includes('Güncelle');
        submitBtn.disabled = true;
        buttonText.textContent = isUpdate ? 'Güncelleniyor...' : 'Gönderiliyor...';
        
        // Form verilerini topla
        const formData = {
            T: document.getElementById('encryptedTalepId').value,
            U: document.getElementById('encryptedUserId').value,
            offerPrice: document.getElementById('offerPrice').value,
            offerDescription: document.getElementById('offerDescription').value,
        };
        
        try {
            const response = await fetch('{{ route("teklif_gonder") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                },
                body: JSON.stringify(formData)
            });
            
            const data = await response.json();
            
            if (data.success) {
                formMessage.className = 'alert alert-success';
                formMessage.textContent = data.message;
                formMessage.classList.remove('d-none');
                form.reset();
                form.classList.remove('was-validated');
                
                // 3 saniye sonra sayfayı yenile
                setTimeout(() => {
                    window.location.reload();
                }, 3000);
            } else {
                formMessage.className = 'alert alert-danger';
                formMessage.textContent = data.message || 'Bir hata oluştu. Lütfen tekrar deneyin.';
                formMessage.classList.remove('d-none');
            }
        } catch (error) {
            formMessage.className = 'alert alert-danger';
            formMessage.textContent = 'Bir hata oluştu. Lütfen tekrar deneyin.';
            formMessage.classList.remove('d-none');
        } finally {
            submitBtn.disabled = false;
            buttonText.textContent = originalBtnText;
        }
    });
});
</script>

@endsection