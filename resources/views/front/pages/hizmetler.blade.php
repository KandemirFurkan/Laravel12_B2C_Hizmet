@extends('front.layouts.app')

@section('content')
   <!-- Sayfa Başlığı ve Breadcrumb -->
    <section class="bg-light py-4 border-bottom">
      <div class="container">
        <h1 class="h3 mb-2">Hizmet Listesi</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.html">Ana Sayfa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Liste</li>
          </ol>
        </nav>
      </div>
    </section>



    <!-- Liste Grid -->
    <section class="pb-5">
      <div class="container">
        <div class="row g-4">
          <!-- 12 örnek kart -->
@foreach ($hizmetlers as $hizmet_item)
             <!-- 1 -->
       <div class="col-12 col-sm-6 col-lg-4">
        <a href="{{ route('hizmetler_detay', $hizmet_item->slug) }}" class="text-decoration-none text-dark">
           <div class="card h-100 shadow-sm">
             <img src="{{ asset($hizmet_item->image) }}" class="card-img-top" alt="{{ $hizmet_item->title }}">
             <div class="card-body">
               <h5 class="card-title">{{ $hizmet_item->title }}</h5>
               <p class="card-text text-muted small">{{ $hizmet_item->description }}</p>
             </div>
           </div>
         </a>
       </div>
@endforeach



        </div>
      </div>
    </section>

@endsection
