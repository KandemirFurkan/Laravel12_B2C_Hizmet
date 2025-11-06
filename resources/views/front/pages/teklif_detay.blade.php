@extends('front.layouts.app')

@section('content')

 

    <!-- Sayfa Başlığı ve Breadcrumb -->
    <section class="bg-light py-4 border-bottom">
      <div class="container">
        <h1 class="h3 mb-2">Teklif Seçimi</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('anasayfa')}}">Ana Sayfa</a></li>
            <li class="breadcrumb-item"><a href="{{route('tekliflerim')}}">Talepler</a></li>
            <li class="breadcrumb-item active" aria-current="page">Teklif Seçimi</li>
          </ol>
        </nav>
      </div>
    </section>

    <!-- Ana İçerik -->
    <section class="py-5">
      <div class="container">
        <div class="row g-4">
          <!-- Form Detayları -->
          <div class="col-12 col-lg-4">
            <div class="card shadow-sm form-details-card sticky-top" style="top: 100px;">
              <div class="card-header bg-white border-bottom">
                <h3 class="h5 mb-0">Form Detayları</h3>
              </div>
              <div class="card-body">
                <div class="form-detail-item">
                  <div class="form-detail-label">Ad Soyad</div>
                  <div class="form-detail-value" id="formAdSoyad">{{Auth::user()->name}}</div>
                </div>
                <div class="form-detail-item">
                  <div class="form-detail-label">E-posta</div>
                  <div class="form-detail-value" id="formEmail">{{Auth::user()->email}}</div>
                </div>
                <div class="form-detail-item">
                  <div class="form-detail-label">Telefon</div>
                  <div class="form-detail-value" id="formTelefon">{{Auth::user()->phone}}</div>
                </div>
                <div class="form-detail-item">
                  <div class="form-detail-label">Hizmet Kategorisi</div>
                  <div class="form-detail-value" id="formKategori">{{$talep->hizmet?->title ?? $talep->sector}}</div>
                </div>
                <div class="form-detail-item">
                  <div class="form-detail-label">Açıklama</div>
                  <div class="form-detail-value" id="formAciklama"> {{$talep->message}}</div>
                </div>
                <div class="form-detail-item">
                  <div class="form-detail-label">Talep Tarihi</div>
                  <div class="form-detail-value" id="formTarih">{{$talep->created_at->format('d-m-Y')}}</div>
                </div>
                <div class="form-detail-item">
                  <div class="form-detail-label">Durum</div>
                  <div class="form-detail-value">
                    @if($teklifSayisi > 0)
                      <span class="badge bg-success">{{$teklifSayisi}} Teklif Var</span>
                    @else
                      <span class="badge bg-warning text-dark">Teklif Bekliyor</span>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Teklifler -->
          <div class="col-12 col-lg-8">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <h2 class="h4 mb-0">Gelen Teklifler</h2>
              <span class="badge bg-primary" id="teklifSayisi">{{$teklifSayisi}} Teklif</span>
            </div>

            <!-- Teklif Kartları -->
            <div id="tekliflerListesi">
              @if($teklifler->count() > 0)
                @foreach($teklifler as $teklif)
                  @php
                    $nameParts = explode(' ', $teklif->user->name ?? 'Firma');
                    $initials = '';
                    foreach ($nameParts as $part) {
                        $initials .= strtoupper(mb_substr($part, 0, 1));
                    }
                    $isApproved = $teklif->status == '1';
                  @endphp
                  <div class="card offer-card mb-3 position-relative {{ $isApproved ? 'border border-success border-2' : '' }}" data-offer-id="{{$teklif->id}}" @if(!$isApproved) onclick="selectOffer({{$teklif->id}})" @else style="cursor: default;" @endif>
                    <div class="card-body">
                      <div class="d-flex align-items-start gap-3">
                        <img src="https://placehold.co/60x60/0d6efd/ffffff?text={{ $initials }}" alt="{{$teklif->user->name ?? 'Firma'}}" class="company-logo">
                        <div class="flex-grow-1">
                          <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                              <h5 class="mb-1">{{$teklif->user->name ?? 'Firma'}}</h5>
                              <p class="text-muted small mb-0">
                                <i class="bi bi-geo-alt me-1"></i>
                                {{$teklif->user->location ?? 'Konum bilgisi yok'}}
                              </p>
                            </div>
                            <span class="badge bg-success selected-badge d-none" id="badge-{{$teklif->id}}">Seçildi</span>
                          </div>
                          <div class="mb-2">
                            <p class="mb-1"><strong>Mesaj:</strong></p>
                            <p class="text-muted small mb-0">{{$teklif->description}}</p>
                          </div>
                          <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                              <span class="text-muted small">Tarih:</span>
                              <span class="ms-1">{{$teklif->created_at->format('d-m-Y')}}</span>
                            </div>
                            <div class="price-display">₺{{number_format($teklif->price, 0, ',', '.')}}</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              @else
                <div class="alert alert-info" role="alert">
                  <i class="bi bi-info-circle me-2"></i>
                  Henüz bu talep için teklif gelmedi. Lütfen daha sonra tekrar kontrol edin.
                </div>
              @endif

 

            <!-- Seçim ve Onay Butonu -->
            <div class="card shadow-sm mt-4">
              <div class="card-body">
                <form id="teklifOnayForm" style="display: none;">
                  @csrf
                  <input type="hidden" name="teklif_id" id="teklifIdInput">
                  <input type="hidden" name="talep_id" value="{{$talep->id}}">
                </form>
                <div class="alert alert-info mb-3" role="alert">
                  <i class="bi bi-info-circle me-2"></i>
                  <strong>Uyarı:</strong> Lütfen bir teklif seçtikten sonra onaylayın. Seçtiğiniz firma ile iletişime geçilecektir.
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <p class="mb-0 text-muted">Seçilen Teklif:</p>
                    <p class="mb-0 fw-bold" id="selectedOfferText">@if($onaylananTeklif) Teklif Kabul Edildi @else Henüz teklif seçilmedi @endif</p>
                  </div>
                  @if($onaylananTeklif)
                    <button type="button" class="btn btn-success btn-lg" id="onayBtn" disabled>
                      <i class="bi bi-check-circle me-2"></i>
                      Teklif Kabul Edildi
                    </button>
                  @else
                    <button type="button" class="btn btn-primary btn-lg" id="onayBtn" onclick="confirmSelection()" disabled>
                      <i class="bi bi-check-circle me-2"></i>
                      Teklifi Onayla
                    </button>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   

   
@endsection

@push('scripts')
<script>
let selectedOfferId = null;
@if($onaylananTeklif)
selectedOfferId = {{$onaylananTeklif->id}};
// Sayfa yüklendiğinde onaylanan teklifi göster
document.addEventListener('DOMContentLoaded', function() {
    const approvedBadge = document.getElementById('badge-{{$onaylananTeklif->id}}');
    if (approvedBadge) {
        approvedBadge.classList.remove('d-none');
    }
});
@endif

function selectOffer(offerId) {
    @if($onaylananTeklif)
    // Eğer teklif zaten onaylandıysa, seçim yapılamaz
    return;
    @endif
    
    selectedOfferId = offerId;
    
    // Tüm badge'leri gizle
    document.querySelectorAll('.selected-badge').forEach(badge => {
        badge.classList.add('d-none');
    });
    
    // Seçilen teklifin badge'ini göster
    const selectedBadge = document.getElementById('badge-' + offerId);
    if (selectedBadge) {
        selectedBadge.classList.remove('d-none');
    }
    
    // Butonu aktif et
    const onayBtn = document.getElementById('onayBtn');
    if (onayBtn) {
        onayBtn.disabled = false;
    }
    
    // Seçilen teklif metnini güncelle
    const selectedOfferText = document.getElementById('selectedOfferText');
    if (selectedOfferText) {
        const offerCard = document.querySelector(`[data-offer-id="${offerId}"]`);
        if (offerCard) {
            const companyName = offerCard.querySelector('h5')?.textContent || 'Seçilen Teklif';
            selectedOfferText.textContent = companyName;
        }
    }
}

function confirmSelection() {
    @if($onaylananTeklif)
    // Eğer teklif zaten onaylandıysa, işlem yapılamaz
    return;
    @endif
    
    if (!selectedOfferId) {
        alert('Lütfen bir teklif seçin.');
        return;
    }
    
    if (!confirm('Bu teklifi onaylamak istediğinizden emin misiniz?')) {
        return;
    }
    
    const form = document.getElementById('teklifOnayForm');
    const teklifIdInput = document.getElementById('teklifIdInput');
    const onayBtn = document.getElementById('onayBtn');
    
    if (!form || !teklifIdInput || !onayBtn) {
        alert('Form bulunamadı.');
        return;
    }
    
    teklifIdInput.value = selectedOfferId;
    
    // Butonu devre dışı bırak
    onayBtn.disabled = true;
    onayBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Onaylanıyor...';
    
    const formData = new FormData(form);
    
    fetch('{{ route("teklif_onayla") }}', {
        method: 'POST',
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
        },
        body: formData
    })
    .then(response => response.json())
    .then(result => {
        if (result.success) {
            // Başarılı - sayfayı yenile
            location.reload();
        } else {
            // Hata mesajı
            alert(result.message || 'Bir hata oluştu. Lütfen tekrar deneyin.');
            onayBtn.disabled = false;
            onayBtn.innerHTML = '<i class="bi bi-check-circle me-2"></i>Teklifi Onayla';
        }
    })
    .catch(error => {
        console.error('Onay hatası:', error);
        alert('Bir hata oluştu. Lütfen tekrar deneyin.');
        onayBtn.disabled = false;
        onayBtn.innerHTML = '<i class="bi bi-check-circle me-2"></i>Teklifi Onayla';
    });
}
</script>
@endpush
