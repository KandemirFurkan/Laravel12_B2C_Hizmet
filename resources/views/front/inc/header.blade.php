<nav class="navbar navbar-expand-lg bg-white border-bottom sticky-top">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{route('anasayfa')}}">
          <img src="{{ asset($siteSettings->logo)  }}" alt="Logo" class="me-2 rounded-circle">

        </a>
        <!-- Hizmet Ara -->
        <div class="d-none d-md-flex ms-3 me-auto position-relative w-100" style="max-width: 400px;" id="hizmet-arama-wrapper">
          <form role="search" id="navbarSearchForm" class="w-100">
            <div class="input-group">
              <input type="search" class="form-control" id="hizmet-arama-input" placeholder="Hizmet ara..." aria-label="Hizmet ara" autocomplete="off">

            </div>
          </form>
          <!-- Dropdown -->
          <div class="position-absolute top-100 start-0 mt-1 w-100 bg-white border rounded shadow-lg d-none" id="hizmet-arama-results" style="z-index: 1050; max-height: 300px; overflow-y: auto;">
            <div class="list-group list-group-flush">
            </div>
          </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Men fcy fc A e7/Kapat">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
            <li class="nav-item"><a class="nav-link" href="{{route('anasayfa')}}">Ana Sayfa</a></li>


            @foreach($menus as $category)
            <li class="nav-item"><a class="nav-link" href="{{route( $category->slug)}}">{{$category->name}}</a></li>
            @endforeach
            <li class="nav-item"><a class="nav-link" href="{{route('iletisim')}}">İletişim</a></li>
            <li class="nav-item ms-lg-3 my-2 my-lg-0 d-flex align-items-center gap-2">
              <a class="btn btn-outline-primary" href="{{route('login')}}" role="button">Giriş Yap</a>
              <div class="dropdown">
                <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kayıt Ol</a>
                <ul class="dropdown-menu dropdown-menu-end shadow">
                  <li><a class="dropdown-item" href="{{route('bireysel_reg')}}">Bireysel Üyelik</a></li>
                  <li><a class="dropdown-item" href="{{route('kurumsal_reg')}}">Kurumsal Üyelik</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
