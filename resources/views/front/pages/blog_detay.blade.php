@extends('front.layouts.app')

@section('content')

    <!-- Sayfa Başlığı ve Breadcrumb -->
    <section class="bg-light py-4 border-bottom">
      <div class="container">
        <h1 class="h3 mb-2">Hizmet Detayı</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.html">Ana Sayfa</a></li>
            <li class="breadcrumb-item"><a href="list.html">Liste</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detay</li>
          </ol>
        </nav>
      </div>
    </section>

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
