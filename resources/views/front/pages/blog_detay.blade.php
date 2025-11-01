@extends('front.layouts.app')

@section('content')

@include('front.inc.breadcrumb')

    <!-- Detay ve Form Alanı -->
    <section class="py-5">
      <div class="container">
        <div class="row g-5">
          <!-- Detay görsel ve açıklama -->

          <div class="col-12 col-lg-12">
            <!--<img id="detailHeroImg" src="{{ asset($blog->image) }}" class="img-fluid rounded mb-3" alt="Hizmet Görseli"> -->
            <h2 class="h4">{{$blog->title}}</h2>
            <p class="text-muted">{{$blog->content}}</p>

          </div>

        </div>
      </div>
    </section>

@endsection
