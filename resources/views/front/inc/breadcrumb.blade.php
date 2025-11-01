<!-- Sayfa Başlığı ve Breadcrumb -->
<!--
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
-->

<!-- Sayfa Başlığı ve Breadcrumb -->
<section class="bg-light py-4 border-bottom">
  <div class="container">
    <h1 class="h3 mb-2">{{ $pageTitle ?? '' }}</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a href="{{ url('/') }}">Ana Sayfa</a>
        </li>

        @if (!empty($breadcrumbList))
          @foreach ($breadcrumbList as $item)
            @if (!$loop->last)
              <li class="breadcrumb-item">
                <a href="{{ $item['url'] }}">{{ $item['title'] }}</a>
              </li>
            @else
              <li class="breadcrumb-item active" aria-current="page">{{ $item['title'] }}</li>
            @endif
          @endforeach
        @endif
      </ol>
    </nav>
  </div>
</section>
