@extends('front.layouts.app')

@section('content')
   <!-- Sayfa Başlığı ve Breadcrumb -->
@include('front.inc.breadcrumb')

    <!-- Liste Grid -->
    <section class="pb-5">
      <div class="container">
        <div class="row g-4">
          <!-- 12 örnek kart -->
@foreach ($blogs as $blog_item)
             <!-- 1 -->
       <div class="col-12 col-sm-6 col-lg-4">
        <a href="{{ route('blog_detay', $blog_item->slug) }}" class="text-decoration-none text-dark">
           <div class="card h-100 shadow-sm">
             <img src="{{ asset($blog_item->image) }}" class="card-img-top" alt="{{ $blog_item->title }}">
             <div class="card-body">
               <h5 class="card-title">{{ $blog_item->title }}</h5>
               <p class="card-text text-muted small">{{ $blog_item->description }}</p>
             </div>
           </div>
         </a>
       </div>
@endforeach



        </div>
      </div>
    </section>

@endsection
